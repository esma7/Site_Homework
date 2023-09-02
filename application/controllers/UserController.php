<?php 

class UserController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('message','az');
    }

    public function  index(){
      

        $data['slider_news'] = $this->db
        ->limit(2)
        ->order_by('s_date','DESC')
        ->join('category_slider','category_slider.cat_id  = news_slider.s_category','left')
        ->get('news_slider')
        ->result_array();

        // echo "index metodu";
        //  print_r('<pre>');
        // print_r($data['slider_news']);
        // die();
        $data['slider_left_side'] = $this->db
        ->limit(3)
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->join('admin','admin.a_id = news.n_creator_id','left')
        ->get('news')
        ->result_array(); 

       

        $data['slider_bottom_side'] = $this->db
        ->limit(6,6)
        ->order_by('n_date','DESC')
        ->where('n_status','1')
        ->join('category','category.c_id = news.n_category','left')
        ->join('admin','admin.a_id = news.n_creator_id','left')
        ->get('news')
        ->result_array(); 

        $data['web_design'] = $this->db
        ->where('n_category','1')
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 

        $data['system_admin'] = $this->db
        ->where('n_category','6')
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 

        $data['network_admin'] = $this->db
        ->where('n_category','5')
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 

        $data['graphic_design'] = $this->db
        ->where('n_category','3')
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array();
        
        $data['help_desk'] = $this->db
        ->where('n_category','2')
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->row_array(); 

        $data['limit_5news']=$this->db
        ->limit(5)
        ->order_by('n_date','DESC')
        
        ->join('category', 'category.c_id = news.n_category','left')
        ->get('news')
        ->result_array();


        $data['category'] =$this->db->get('category')->result_array();
        
       

        // print_r("<pre>");
        // print_r($data['web_design']);
        // die();

        $this->load->view('user/index', $data);
    }

    public function  about(){
        $data['category'] =$this->db->get('category')->result_array();
        $this->load->view('user/about',$data);
    }


    public function  contact(){
        // echo "contact metodu";
        $data['category'] =$this->db->get('category')->result_array();
        $this->load->view('user/contact',$data);
    }
     
    public function blog(){
       // echo "index metodu";
       $data['slider_left_side'] = $this->db
       ->where('n_status', '1')
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->join('admin','admin.a_id = news.n_creator_id','left')
        ->get('news')
        ->result_array(); 
      

        $data['limit_5news']=$this->db
        ->limit(5)
        ->order_by('n_date','DESC')
        ->join('category', 'category.c_id = news.n_category','left')
        ->get('news')
        ->result_array();

        $data['category'] =$this->db->get('category')->result_array();

        // print_r('<pre>');
        // print_r($data['category']);
        // die();

        $this->load->view('user/blog',$data);
       
    }


    public function course($id){

        $data['category_of']=$this->db
        ->where('n_category', $id)
        ->limit(6)
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->result_array();
      
        $data['limit_5news']=$this->db
        ->limit(5)
        ->order_by('n_date','DESC')
        
        ->join('category', 'category.c_id = news.n_category','left')
        ->get('news')
        ->result_array();
        
       
       
       
       

        $data['category'] =$this->db->get('category')->result_array();
       
        
 


        $this->load->view('user/course', $data);
    }

    public function single($id){
        $id = $this->security->xss_clean($id);
        // echo $id;

        $data['single_data'] = $this-> db
        ->where('n_id',$id)
        ->join('category', 'category.c_id = news.n_category','left')
      
        ->join('admin','admin.a_id = news.n_creator_id','left')
        ->get("news")->row_array();

        $data['limit_5news']=$this->db
        ->limit(5)
        
        ->order_by('n_date','DESC')              
        ->join('category', 'category.c_id = news.n_category','left')
        ->get('news')
        ->result_array();
        
        $data['category'] = $this->db->get('category')->result_array();

        // print_r('<pre>');
        // print_r($data['single_data']);
        // die();

        if($data['single_data']){
            $this->load->view('user/single',$data);
        }else{
            redirect(base_url('index'));
        }
       

    }

    public function teacher(){
        $this->load->view('user/teacher');
    }
    public function category($id){
        $data['category_of']=$this->db
        ->where('n_category', $id)
        ->order_by('n_date','DESC')
        ->join('category','category.c_id = news.n_category','left')
        ->get('news')
        ->result_array();

         print_r('<pre>');
         print_r($data['category_of']);       
        die();

        


        $this->load->view('user/category',$data);
    }



    public function send_message(){
        $email = $_POST['email'];
        if(!empty($email)){
            $data = [
                'u_email' => $email,
            ];
            
            $this->db->insert('user_email_list',$data);
            $this->session->set_flashdata('ela', "Ugurla gonderildi!");
            redirect($_SERVER['HTTP_REFERER']);



        }else{
            $this->session->set_flashdata('err', "Bosluq buraxmayin!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function contact_message(){
        $ad = $_POST['ad'];
        $mail= $_POST['mail'];
        $movzu = $_POST['movzu'];
        $mesaj= $_POST['mesaj'];

        if(!empty($ad) && !empty($mail) && !empty($movzu) && !empty($mesaj) ){
            $data = [
                'contact_name' => $ad,
                'contact_email' => $mail,
                'contact_subject' => $movzu,
                'contact_message' => $mesaj,
            ];
            
            $this->db->insert('contact_info',$data);
            $this->session->set_flashdata('super', "Ugurla gonderildi!");
            redirect($_SERVER['HTTP_REFERER']);



        }else{
            $this->session->set_flashdata('err', "Error");
            redirect($_SERVER['HTTP_REFERER']);
        }
       

    }


}