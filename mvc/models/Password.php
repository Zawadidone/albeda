<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Password 
{
    private $password;
    private $correct;
    private $maxPasswordLength= 8;
    private $minPasswordLength= 25;

	public function __construct($password) 
	{
        $this->password = $password;
    }

	public function isCorrect()
	{
	return $this->correct;
    }    

    private function CheckLength($password)
    {
		$password_length = strlen($password);

		if($password_length > $maxPasswordLength and $password_length < $minPasswordLength)
		{
			return True;
		}else{
			return False;
		}
	}
}
?>
