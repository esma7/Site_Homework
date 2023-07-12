<?php 

class UserController extends CI_Controller{

    public function  index(){
        // echo "index metodu";

        $this->load->view('user/index');
    }

    public function  about(){

        $this->load->view('user/about');
    }


    public function  contact(){
        // echo "contact metodu";
        $this->load->view('user/contact');
    }
     
    public function blog(){
        $this->load->view('user/blog');
    }


    public function course(){
        $this->load->view('user/course');
    }

    public function single(){
        $this->load->view('user/single');
    }

    public function teacher(){
        $this->load->view('user/teacher');
    }


}