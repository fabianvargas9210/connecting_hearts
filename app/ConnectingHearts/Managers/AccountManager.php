<?php namespace ConnectingHearts\Managers;
use ConnectingHearts\Managers\BaseManager;

class AccountManager extends BaseManager {
    public function getRules()
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'email',
            'password' => 'confirmed',
            'password_confirmation' => ''

        ];

        return $rules;
    }


} 