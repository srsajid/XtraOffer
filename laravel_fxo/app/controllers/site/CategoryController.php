<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/5/2014
 * Time: 3:09 PM
 */

class CategoryController extends BaseController {

    public function getDetails($id, $offset = 0) {
        $category = Category::find($id);
        $offers = Offer::where("is_approved", "=", true)->where("category_id", "=", $id)->take(20)->orderBy("id", "DESC")->get();
        return View::make("category.details", array('category' => $category, 'offers' => $offers));
    }

} 