<?php
Route::get("/", "HomeController@index");
Route::get("/login", function(){
    return View::make("admin.login", array('message' => Session::get("flash_error")));
})->before("guest");
Route::post("login", "AdminController@login");
Route::get("logout", "AdminController@logout");
Route::get("/admin", array('as' => 'admin', 'uses' => "AdminController@admin"))->before("auth");
Route::get("/account/change-pass", "AdminController@changePass")->before("auth");
Route::post("/account/save-pass", "AdminController@savePass")->before("auth");

Route::controller("user", "UserController");
Route::controller("categoryAdmin", "CategoryAdminController");
Route::controller("offerAdmin", "OfferAdminController");
Route::controller("offer", "OfferController");
Route::controller("category", "CategoryController");

Route::get("test", function() {
   return Category::whereRaw("category_id is null")->lists("name", "id");
});