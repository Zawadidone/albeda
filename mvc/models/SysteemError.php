<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SysteemError
 *
 * @author H.M
 */
class SysteemError {
    private $foutCode;
    private $foutTekst;
    private $module;
    
    public function setMessage($foutTekst) {
        $this->foutTekst = $foutTekst;
    }
    
    public function getMessage(){
        return $this->foutCode.": ". $this->foutTekst; }
    
    public function setErrorModule($module){
        $this->module = $module;
    }
}
