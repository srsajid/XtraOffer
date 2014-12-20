<?php

class HomeController extends BaseController {

	public function index() {
        $offers = Offer::where("is_approved", "=", true)->take(20)->orderBy("id", "DESC")->get();
		return View::make('home.index', array('offers' => $offers));
	}
}
