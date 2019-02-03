<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Username
 *
 * @author H.M. van Dijk
 */
include_once '../models/UserError.php';

class Username {
    // attributes van de klasse
    private $username;
    private $Obj_Error;
    private $correct = FALSE;
    
    // constructor van de klasse Username
    public function __construct($username) {
        if($this->lengthUsernameIsBetweenLimits($username)){
            if($this->checkAtSignAndDotPosition($username)){
                $this->username = $username;
                $this->correct = TRUE;
            }
        }
    }
    
    public function isCorrect(){
        return $this->correct;
    }
    
    private function lengthUsernameIsBetweenLimits($emailAdress){
        $check = FALSE;
        $MINIMUM_EMAIL_LENGTE = 5;
        $MAXIMUM_EMAIL_LENGTE = 256;        
        if (strlen ($emailAdress) > $MINIMUM_EMAIL_LENGTE
            and 
            strlen($emailAdress) < $MAXIMUM_EMAIL_LENGTE){
            $check = TRUE;
        }
        else{
            $this->Obj_Error = new UserError();
            $this->Obj_Error->setMessage
               ("Emailadres voldoet niet aan de lengte eisen");            
        }
        return $check;
    }
    
    private function checkAtSignAndDotPosition($emailAdress){
        $check = FALSE;
        $posAtSign = strpos($emailAdress,"@");
        if ($posAtSign){
            $posDotSign = strpos($emailAdress,".",$posAtSign + 2);          
            if($posDotSign){
                $check = TRUE;              
            }
            else{
                $this->Obj_Error = new UserError();
                $this->Obj_Error->setMessage
                   ("Combinatie van @ en punt voldoet niet aan de eisen"); 
            }
        }
        else{
            $this->Obj_Error = new UserError();
            $this->Obj_Error->setMessage
               ("Het emailadress bevat geen @ teken");             
        }
        return $check;          
        /*
         *  Door middel van regex
         * {
                $v = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
                return (bool)preg_match($v, $EMAIL);
            }
         *  3. omzetten van de String in een array en dan een loop door array
         *     om te zoeken naar het @ c.q. dot teken
         *  4. for loop in combinatie met het ascii teken
         *  5. omzetten in een array, sorteren en bin search op @ is ascii waarde 60
         *  6. gebruik van een stack
        */
    }
    
    public function getError(){
        return $this->Obj_Error;
    }
}
