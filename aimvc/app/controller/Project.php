<?php
class Project{
    //Constructor
    public function __construct(){

    }
     // default method
    public function index(){
        echo "this is project/index";
    }

    public function personal(){
        echo "this is project/personal";
    }
    // menambahkan method global baru
    public function group(){
        echo "this is project/group";
    }
}
?>