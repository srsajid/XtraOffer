<?php

class AdminController extends \BaseController {

    public function login() {
        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if (Auth::attempt($user)) {
            return Redirect::route('admin')
                ->with('flash_success', 'You are successfully logged in.');
        }
        return Redirect::to('/login')
            ->with('flash_error', 'Your username/password combination was incorrect.');
    }

    public function logout() {
        Auth::logout();
        return Redirect::to("/");
    }

    public function admin() {
        $user = Auth::user();
        return View::make("admin.cms", array('user' => $user));
    }

    public function changePass() {
        return View::make("admin.changePass");
    }

    public function savePass() {
        $user = Auth::user();
        $inputs = Input::all();
        if(!Hash::check($inputs["old_password"], $user->password)) {
            return array('status' => 'error', 'message' => 'Old password did not match');
        }

        if(strcmp($inputs["password"], $inputs["confirm_password"]) != 0) {
            return array('status' => 'error', 'message' => 'New Password and confirm password did not match');
        }
        $rules = array('password' => 'required|min:8');
        $validator = Validator::make($inputs, $rules);
        if($validator->fails()) {
            return array('status' => 'error', 'message' => $validator->messages()->all());
        }
        $user->password = Hash::make($inputs["password"]);
        $user->save();
        return array('status' => 'success', 'message' => "Password has been changed successfully");
    }

}
