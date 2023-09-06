<?php
namespace App\Http\Controllers;

trait UssdMenu{

    public function newUserMenu(){
        $start  = "Welcome to My USSD service\n";
        $start .= "1. Register\n";
        $start .= "2. Get Information\n";
        $start .= "3. Exit";
        $this->ussd_proceed($start);
    }
    public function returnUserMenu(){
        $con  = "Welcome to My USSD service\n";
        $con .= "Press 1 to Login OR 2 to Exit.\n";
        $con .= "1. Login\n";
        $con .= "2. Exit";
        $this->ussd_proceed($con);
    }
    public function servicesMenu(){
        $serve = "What service are you looking for?\n";
        $serve .= "1. Saving Account\n";
        $serve .= "2. Check Balance\n";       
        $serve .= "3. Logout";
        $this->ussd_proceed($serve);

       

    }
}