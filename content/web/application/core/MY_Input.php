<?php
class MY_Input extends CI_Input
{

    function __construct()
    {
        parent::__construct();
    }

    //Overide ip_address() with your own function
    function ip_address()
    {
        //Obtain the IP address however you'd like, you may want to do additional validation, etc..
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $correct_ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            return $correct_ip_address;
        }
        return parent::ip_address();
    }
}