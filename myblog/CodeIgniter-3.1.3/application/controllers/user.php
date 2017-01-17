<?php defined('BASEPATH') OR  exit("No direct script access allowed");
     class User extends CI_Controller{
         public function __construct(){
                parent::__construct();
         }
         public function index(){

         }
         public function reg(){
             $this->load->view('reg.php');
         }
     }
 ?>