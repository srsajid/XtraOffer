<?php

class HomeController extends BaseController {

	public function index() {
		$today = new DateTime('today');
        $offers = Offer::where("is_approved", "=", true)->where("last_date", '>=', $today->format("Y-m-d"))->take(20)->orderBy("id", "DESC")->get();
		return View::make('home.index', array('offers' => $offers));
	}
	
	public function contact() {
		return View::make("home.contact");
	}
	
	public function postContact() {
		$rules = array(
			"name" => "required",
			"email" => "required|email",
			"subject" => "required",
			"message" => "required"
		);
		$inputs = Input::all();
		$validator = Validator::make($inputs, $rules);
		if($validator->fails()) {
			return Redirect::to("/contact-us")->withErrors($validator)->withInput($inputs);
		}
		return Redirect::to("/")->with("success", "You have been successfully registered.");
	}
	
	public function getSearch($text, $offset = 0) {
		$offers = Offer::where("is_approved", "=", true)->where('last_date', ">=", date('Y-m-d'))->where(function($query) use ($text) {
			$query->where('title', "LIKE", "%$text%");
			$query->orWhere('description', "LIKE", "%$text%");

		})->take(20)->orderBy("id", "DESC")->get();
		return View::make('home.index', array('offers' => $offers, 'searchText' => $text));
	}
	
	public function postSubscribe() {
		$inputs = Input::all();
		$rules = array(
			'email' => "required|email"	
		);
		$validator = Validator::make($inputs, $rules);
		if($validator->fails()) {
			return array('status' => 'error', 'message' => $validator->messages()->all());
			
		}
		$subscriber = Subscriber::where("email", "=", $inputs["email"])->get()->first();
		$subscriber = $subscriber ?: new Subscriber();
		$subscriber->email = $inputs['email'];
		$subscriber->is_active = true;
		$subscriber->save();
		return array('status' => "success", 'message' => "You have been subscribed successfully");
	}
	
	public function getPage($url) {
		return View::make("home.page");
	}
}
