<?php
class FormVerification
{
    public function nameVerification($name)
    {
        if (preg_match("/^[a-zA-Z_.-]{2,30}$/", $name)) {
            return true;
        } else {
            return false;
        }
    }

    public function priceVerification($price)
    {
        if (preg_match("/^[0-9.]{3,10}$/", $price)) {
            return true;
        } else {
            return false;
        }
    }

    public function addressVerification($address)
    {
        if (preg_match("/^[a-zA-Z0-9 _.-]{5,70}$/", $address)) {
            return true;
        } else {
            return false;
        }
    }

    public function cityVerification($city)
    {
        if (preg_match("/^[a-zA-Z -]{2,30}$/", $city)) {
            return true;
        } else {
            return false;
        }
    }

    public function zipVerification($zipC)
    {
        if (preg_match("/^[0-9]{5}$/", $zipC)) {
            return true;
        } else {
            return false;
        }
    }

    public function paysVerification($pays)
    {
        if (preg_match("/^[a-zA-Z _.-]{2,30}$/", $pays)) {
            return true;
        } else {
            return false;
        }
    }

    public function passwordVerification($password)
    {
        if (preg_match("/^[a-zA-Z0-9_.-]{6,20}$/", $password)) {
            return true;
        } else {
            return false;
        }
    }

    public function emailVerification($email)
    {
        if (preg_match("/^[a-zA-Z0-9_.-]{2,20}[@][a-zA-Z0-9_.-]{2,20}[.][a-zA-Z]{2,4}$/", $email)) {
            return true;
        } else {
            return false;
        }
    }
}
