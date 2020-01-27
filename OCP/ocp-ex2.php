<?php

// Open Closed Principle Violation

class LoginModule {
    public function login($user)
    {
        //checking instance type is a simple alert that we violate open-close principle
        if ($user instanceof NormalUser) {
            $this->authentificateNormalUser($user);
        } elseif ($user instanceof ThirdPartyUser) {
            $this->authentificateThirdPartyUser($user);
        }
    }
}


// Refactored
interface LoginInterface
{
    public function authenticateUser($user);
}

class NormalLogin implements LoginInterface {

    public function authenticateUser($user)
    {
        // authentication logic for normal user
    }
}

class ThirdPartyLogin implements LoginInterface {

    public function authenticateUser($user)
    {
        // authentication logic for ThirdParty User
    }
}
//similar classes can be created further for any other type of login

class LoginModule {
    public function login($user) {
        $user->authenticateUser($user);
    }
}
