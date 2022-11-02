<?php   

class User_model{
    private $nama = "bla";
    // private $nama = ["nama"=> "dodi"];

    public function getUser(){
        return $this->nama;
    }
}