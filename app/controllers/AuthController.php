<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/06/14
 * Time: 01:29 PM
 */

class AuthController extends BaseController {

   public function login()
   {
       $data = Input::only('email', 'password', 'remember');

       $credentials = ['email' => $data['email'], 'password' => $data['password']];

       if(Auth::attempt($credentials, $data['remember']))
       {
           return View::make('/Panel/panel');
       }

       return Redirect::back()->with('login_error', 1);


   }


    public function logout()
    {
        Auth::logout();
        return Redirect::route('home');
    }

}
//back();
//make(panel/panel);