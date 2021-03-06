<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 11/Jan/2015
 * Time: 10:28 PM
 */

class PageAdminController extends BaseController {

    public function __construct() {
        $this->beforeFilter("admin");
    }

    public function getTableView() {
        $max = Input::get("max") ? intval(Input::get("max")): 10;
        $offset = Input::get("offset") ? intval(Input::get("offset")) : 0;
        $array = array();
        $query = "";
        $text = "";
        if(Input::get("searchText")) {
            $query = $query."name Like ?";
            $text = trim(Input::get("searchText")) ;
            array_push($array, "%".$text."%");
        }
        $users = null;
        $total = 0;
        if(count($array) > 0 ) {
            $users = User::whereRaw($query, $array)->take($max)->skip($offset);
            $total = User::whereRaw($query, $array)->count();
        } else {
            $users = User::take($max)->skip($offset)->orderBy('id', "ASC");
            $total = User::count();
        }
        $users = $users->get();
        return View::make("user.tableView", array(
            'users' => $users,
            'total' => $total,
            'max' => $max,
            'offset' => $offset,
            'searchText' => $text
        ));
    }

    public function getCreate() {
        $user = null;
        if(Input::get("id")) {
            $user = User::find(intval(Input::get("id")));
        } else {
            $user = new User();
        }
        return View::make("user.create", array('user' => $user));
    }

    public function postSave() {
        $user = null;
        $inputs = Input::all();
        if($inputs["id"]) {
            $user = User::find(intval($inputs["id"]));
        } else {
            $user = new User();
        }
        $rules = array(
            'name' => 'required',
            'username' => 'required|min:5|unique:users,username'.($user->id ? ",$user->id" : ""),
            'email' => 'required|email|unique:users,email'.($user->id ? ",$user->id" : ""),
        );
        if(!$user->id) {
            $rules['password'] = 'required|min:8';
        }
        $validator = Validator::make($inputs, $rules);
        if($validator->fails()) {
            return array('status' => 'error', 'message' => $validator->messages()->all());
        }
        if(!$user->id && strcmp($inputs["password"], $inputs["confirm_password"]) != 0) {
            return array('status' => 'error', 'message' => 'Password and confirm password did not match');
        }
        $user->name = $inputs["name"];
        $user->email = $inputs["email"];
        $user->username = $inputs["username"];
        if(!$user->id) {
            $user->password = Hash::make($inputs["password"]);
        }
        $user->save();
        return array('status' => 'success', 'message' => "User has been created successfully");
    }
}