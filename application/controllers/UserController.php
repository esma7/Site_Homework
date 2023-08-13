<?php 

class UserController extends CI_Controller{

    public function  index(){
        // echo "index metodu";
        $data['slider_left_side'] = $this->db
        ->limit(3)
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->join('admin','admin.a_id = news.n_creator_id','left')
        ->get('news')
        ->result_array(); 

        // print_r('<pre>');
        // print_r($data['slider_left_side']);
        // die();

        $data['slider_bottom_side'] = $this->db
        ->limit(6,6)
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->join('admin','admin.a_id = news.n_creator_id','left')
        ->get('news')
        ->result_array(); 

        $data['web_design'] = $this->db
        ->where('n_category','1')
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 

        $data['system_admin'] = $this->db
        ->where('n_category','6')
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 

        $data['network_admin'] = $this->db
        ->where('n_category','5')
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 
        $data['graphic_design'] = $this->db
        ->where('n_category','3')
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 
        $data['help_desk'] = $this->db
        ->where('n_category','2')
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 


        $data['category'] =$this->db->get('category')->result_array();
        
       

        // print_r("<pre>");
        // print_r($data['web_design']);
        // die();

        $this->load->view('user/index', $data);
    }

    public function  about(){

        $this->load->view('user/about');
    }


    public function  contact(){
        // echo "contact metodu";
        $this->load->view('user/contact');
    }
     
    public function blog(){
        $data['slider_left_side'] = $this->db
        ->limit(6)
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->result_array(); 

        $data['web_design'] = $this->db
        ->where('n_category','1')
        ->limit(1,1)
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 
        $data['system_admin'] = $this->db
        ->where('n_category','6')
        ->limit(1,1)
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 

        $data['network_admin'] = $this->db
        ->where('n_category','5')
        ->limit(1,1)
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 
        $data['graphic_design'] = $this->db
        ->where('n_category','3')
        ->limit(1,1)
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 
        $data['help_desk'] = $this->db
        ->where('n_category','2')
        ->limit(1,1)
        ->order_by('n_id','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 

        $data['category'] =$this->db->get('category')->result_array();

        // print_r('<pre>');
        // print_r($data['category']);
        // die();

        $this->load->view('user/blog',$data);
       
    }


    public function course(){
        $this->load->view('user/course');
    }

    public function single($id){
        // echo $id;
        $data['single_data'] = $this-> db
        ->where('n_id',$id)
        ->join('category', 'category.c_id = news.n_category','left')
        ->join('admin','admin.a_id = news.n_creator_id','left')
        ->get("news")->row_array();
        
        $data['category'] = $this->db->get('category')->result_array();

        // print_r('<pre>');
        // print_r($data['single_data']);
        // die();

        if($data['single_data']){
            $this->load->view('user/single',$data);
        }else{
            redirect(basename('index'));
        }
       

    }

    public function teacher(){
        $this->load->view('user/teacher');
    }
    



    public function send_message(){
        $email = $_POST['email'];
        if(!empty($email)){
            $data = [
                'u_email' => $email,
            ];
            
            $this->db->insert('user_eamil_list',$data);
            $this->session->set_flashdata('ela', "Ugurla gonderildi!");
            redirect($_SERVER['HTTP_REFERER']);



        }else{
            $this->session->set_flashdata('err', "Bosluq buraxmayin!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


}