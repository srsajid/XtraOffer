<?php
class OfferAdminController extends BaseController {
    public function __construct() {
        $this->beforeFilter("admin");
    }

    public function getTableView() {
        $max = Input::get("max") ? intval(Input::get("max")) : 10;
        $offset = Input::get("offset") ? intval(Input::get("offset")) : 0;
        $array = array();
        $query = "";
        $text = "";
        if (Input::get("searchText")) {
            $query = $query . "title Like ?";
            $text = trim(Input::get("searchText"));
            array_push($array, "%" . $text . "%");
        }
        $offers = null;
        $total = 0;
        if (count($array) > 0) {
            $offers = Offer::whereRaw($query, $array)->take($max)->skip($offset)->orderBy("id", "DESC");
            $total = Offer::whereRaw($query, $array)->count();
        } else {
            $offers = Offer::take($max)->skip($offset)->orderBy('id', "DESC");
            $total = Offer::count();
        }
        $offers = $offers->get();
        return View::make("offerAdmin.tableView", array(
            'offers' => $offers,
            'total' => $total,
            'max' => $max,
            'offset' => $offset,
            'searchText' => $text
        ));
    }

    public function getApprove() {
        $offer = Offer::find(intval(Input::get("id")));
        $offer->is_approved = true;
        $offer->save();
        return array("status" => "success", 'message' => "Offer has been approved successfully");
    }

    public function getDisapprove() {
        $offer = Offer::find(intval(Input::get("id")));
        $offer->is_approved = false;
        $offer->save();
        return array("status" => "success", 'message' => "Offer has been disapproved successfully");
    }
}