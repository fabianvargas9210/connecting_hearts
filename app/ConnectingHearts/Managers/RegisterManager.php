<?php namespace ConnectingHearts\Managers;
use ConnectingHearts\Managers\BaseManager;

class RegisterManager extends BaseManager {
    public function getRules()
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        return $rules;
    }
}