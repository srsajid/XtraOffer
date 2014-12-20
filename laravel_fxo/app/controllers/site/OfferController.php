<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/5/2014
 * Time: 2:39 AM
 */

class OfferController extends BaseController {
    public function __construct() {

    }

    public function getCreate() {
        $categories = Category::lists("name", "id");
        return View::make("offer.create", array('categories' => $categories));
    }

    public function postSave() {
        $inputs = Input::all();
        $rules = array('image' => 'mimes:jpeg,bmp,png');
        $validator = Validator::make($inputs, $rules);
        if($validator->fails()) {
            return array('status' => 'error', 'message' => $validator->messages()->all());
        }
        $image = Input::file("image");
        $imageRef = $image->getClientOriginalName();
        $offer = new Offer();
        $offer->title = $inputs["title"];
        $offer->company_name = $inputs["company_name"];
        $offer->image_ref = $imageRef;
        $offer->last_date = date($inputs["last_date"]);
        $offer->is_approved = false;
        $offer->description = $inputs['description'];
        $offer->contact_address = $inputs['contact_address'];
        $offer->contact_email = $inputs['contact_email'];
        $offer->contact_number = $inputs['contact_number'];
        $offer->category_id = $inputs["category"];
        try {
            DB::transaction(function() use ($offer, $image, $imageRef) {
                $offer->save();
                $image->move(public_path()."/images/offers/$offer->id/", $imageRef);
            });
        } catch(Exception $e) {
            return array("error" => "success", 'message' => "Offer could not be created");
        }
        return array("status" => "success", "message" => "Offer has been created successfully. Offer will be published after admin approval");
    }

    public function getDetails($id) {
        $offer = Offer::find($id);
        return View::make("offer.details", array('offer' => $offer));
    }

} 