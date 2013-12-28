<?php

/*
 * Class Core For Your Further Site Functionality
 */

class Core {

    private $connection = null;


    //This is constructor, this will automatically loads when object is created for it's class.
    public function __construct() {
        //Database Connection
        $this -> connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    }//end of __construct()



}//end of class
?>