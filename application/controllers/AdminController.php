<?php



class AdminController extends CI_Controller
{

    public function index()
    {
        unset(
            $_SESSION['admin_id'],
            $_SESSION['admin_username'],
        );
        $this->load->view('admin/auth-login-basic');
    }

    public function loginAct()
    {
        $username = $_POST['email-username'];
        $password = $_POST['password'];
        if (!empty($username) && !empty($password)) {
            $data = [
                'a_username' => $username,
                'a_password' => $password,
                'a_status'   => "Active",

            ];
            $data = $this->security->xss_clean($data);
            // print_r('<pre>');
            // print_r($data);
            // die();



            $chec_admin = $this->db->where($data)->get('admin')->row_array();
            if ($chec_admin) {
                $_SESSION['admin_id'] = $chec_admin['a_id'];
                $_SESSION['admin_username'] = $chec_admin['a_username'];

                redirect(base_url('a_dashboard'));
            } else {
                $this->session->set_flashdata('err', 'Istifadeci adi ve ya sifre yanlisiidir');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {

            $this->session->set_flashdata('err', 'Bosluq buraxmayin!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function logout()
    {
        unset(
            $_SESSION['admin_id'],
            $_SESSION['admin_username'],
        );
        $this->session->set_flashdata('success', 'Sizi bir daha gozleyirik');
        redirect(base_url('a_login'));
    }


    public function dashboard()
    {
        $data['admin'] = $this->db->select('a_id, a_name, a_username, a_status, a_email, a_img')->where('a_id', $_SESSION['admin_id'])->get('admin')->row_array();
        $this->load->view('admin/index', $data);
    }

    public function news_list()
    {

        $data["get_all"] = $this->db
            ->where('n_creator_id', $_SESSION['admin_id'])
            ->join('category', 'category.c_id = news.n_category', 'left')
            ->join('status', 'status.s_id = news.n_status', 'left')
            ->order_by('n_id', 'desc')
            ->get("news")
            ->result();

        // print_r('<pre>');
        // print_r($data["get_all"]);
        // die();

        $this->load->view('admin/news/list', $data);
    }


    public function news_create()
    {
        $data['category'] = $this->db->get('category')->result_array();
        $data['status'] = $this->db->get('status')->result_array();



        $this->load->view('admin/news/create', $data);
    }
    public function deleteNews($id)
    {
        // echo $id;
        $id = $this->security->xss_clean($id);

        $this->db->where('n_id', $id)->delete('news');
        redirect(base_url("a_news_list"));
        // $this->load->view('admin/news/delete');
    }

    public function slider_list()
    {
        $data['get_all'] = $this->db
        ->join('category_slider','category_slider.cat_id = news_slider.s_category','left')
        ->order_by('s_id','DESC')
        ->get('news_slider')
        ->result_array();

        // print_r('<pre>');
        // print_r($data['get_all']);
       
        // die();


        $this->load->view('admin/news/slider_list',$data);
    }
    public function news_create_slider()
    {
        $data['slider'] = $this ->db->get('category_slider')->result_array();

        //         print_r('<pre>');
        // print_r($data['slider']);
       
        // die();
        $this->load->view('admin/news/create_slider', $data);
    }
    public function news_create_slider_act()
    {

        $title = $_POST['title'];
        $descr = $_POST['description'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $status = $_POST['status'];


        if (!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)) {

            $config['upload_path'] = './sekil/news';
            $config['allowed_types'] = 'gif|jpg|png|mp3|jpeg';
            // $config['max_size']     = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if ($this->upload->do_upload('img')) {
                $upload_name = $this->upload->data('file_name');
                $upload_ext = $this->upload->data('file_ext');

                // print_r('<pre>');
                // print_r($upload_name);
                // print_r($upload_ext);
                // die();


                $data = [
                    's_title'        => $title,
                    's_description'  => $descr,

                    's_date'         => $date,
                    's_category'     => $category,
                    's_status'       => $status,
                    's_file'         => $upload_name,
                    's_file_ext'     => $upload_ext,
                    // 'n_creator_id' =>$_SESSION['admin_id'],
                    // 'n_updater_id' =>$_SESSION['admin_id'],
                    // 'n_status'=> 2,
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    's_create_date'  => date("Y-m-d H:i:s"),


                ];

                $this->db->insert('news_slider', $data);
                redirect(base_url('a_slider_list'));
            } else {
                $data = [
                    's_title'        => $title,
                    's_description'  => $descr,

                    's_date'         => $date,
                    's_category'     => $category,
                    's_status'       => $status,
                    // 's_file'         => $upload_name,
                    // 's_file_ext'     => $upload_ext,
                    // 'n_creator_id' =>$_SESSION['admin_id'],
                    // 'n_updater_id' =>$_SESSION['admin_id'],
                    // 'n_status'=> 2,
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    's_create_date'  => date("Y-m-d H:i:s"),


                ];

                $this->db->insert('news_slider', $data);
                redirect(base_url('a_slider_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function deleteSlider($id){
        $this->db->where('s_id', $id)->delete('news_slider');
        redirect(base_url('a_slider_list'));
   } 


   public function news_slider_update($id){

    $data['slider'] = $this ->db->get('category_slider')->result_array();


    $data['single_slider'] = $this->db->where('s_id',$id)->get('news_slider')->row_array();

    if($data['single_slider']){
        $this->load->view('admin/news/slider_edit',$data);
    }else{
        redirect(base_url('a_slider_list'));
    }
    //  print_r('<pre>');
    //     print_r($data["single_slider"]);
    //     die();

    
   }
   public function news_slider_update_act($id){
      
    $title = $_POST['title'];
    $descr = $_POST['description'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    if (!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)) {

        $config['upload_path'] = './sekil/news';
        $config['allowed_types'] = 'gif|jpg|png|mp3|jpeg';
        // $config['max_size']     = '100';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if ($this->upload->do_upload('img')) {
            $upload_name = $this->upload->data('file_name');
            $upload_ext = $this->upload->data('file_ext');

            // print_r('<pre>');
            // print_r($upload_name);
            // print_r($upload_ext);
            // die();


            $data = [
                's_title'        => $title,
                's_description'  => $descr,

                's_date'         => $date,
                's_category'     => $category,
                's_status'       => $status,
                's_file'         => $upload_name,
                's_file_ext'     => $upload_ext,
                // 'n_creator_id' =>$_SESSION['admin_id'],
                // 'n_updater_id' =>$_SESSION['admin_id'],
                // 'n_status'=> 2,
                // 'n_image'        => ,
                // 'n_creator_id'   => ,
                's_update_date'  => date("Y-m-d H:i:s"),


            ];

            $this->db->where('s_id', $id)->update('news_slider', $data);
            redirect(base_url('a_slider_list'));
        } else {
            $data = [
                's_title'        => $title,
                's_description'  => $descr,

                's_date'         => $date,
                's_category'     => $category,
                's_status'       => $status,
                // 's_file'         => $upload_name,
                // 's_file_ext'     => $upload_ext,
                // 'n_creator_id' =>$_SESSION['admin_id'],
                // 'n_updater_id' =>$_SESSION['admin_id'],
                // 'n_status'=> 2,
                // 'n_image'        => ,
                // 'n_creator_id'   => ,
                's_update_date'  => date("Y-m-d H:i:s"),


            ];

            $this->db->where('s_id', $id)->update('news_slider', $data);
            redirect(base_url('a_slider_list'));
        }
    } else {
        redirect($_SERVER['HTTP_REFERER']);
    }
}



   public function slider_view($id){
    
    $data['single_slider'] = $this->db
    ->where('s_id',$id)
    ->join('category_slider','category_slider.cat_id = news_slider.s_category','left')
    ->get('news_slider')
    ->row_array();

    $this->load->view('admin/news/slider_detail', $data);

   }



    public function news_create_act()
    {
        $title_az = $_POST['title_az'];
        $descr_az = $_POST['description_az'];

        $title_en = $_POST['title_en'];
        $descr_en = $_POST['description_en'];

        $title_ru = $_POST['title_ru'];
        $descr_ru = $_POST['description_ru'];

        $date = $_POST['date'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        if (!empty($title_az) && !empty($descr_az) && !empty($date) && !empty($category) && !empty($status)) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|mp3|jpeg';
            // $config['max_size']     = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $upload_name = $this->upload->data('file_name');
                $upload_ext = $this->upload->data('file_ext');

                $data = [
                    'n_title_az'        => $title_az,
                    'n_description_az'  => $descr_az,

                    'n_title_en'        => $title_en,
                    'n_description_en'  => $descr_en,

                    'n_title_ru'        => $title_ru,
                    'n_description_ru'  => $descr_ru,


                    'n_date'         => $date,
                    'n_category'     => $category,
                    'n_status'       => $status,
                    'n_file'         => $upload_name,
                    'n_file_ext'     => $upload_ext,
                    'n_creator_id' => $_SESSION['admin_id'],
                    'n_updater_id' => $_SESSION['admin_id'],
                    'n_status' => 2,
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    'n_create_date'  => date("Y-m-d H:i:s"),


                ];

                $data = $this->security->xss_clean($data);

                $this->db->insert('news', $data);
                redirect(base_url('a_news_list'));
            } else {
                $data = [
                    'n_title_az'        => $title_az,
                    'n_description_az'  => $descr_az,

                    'n_title_en'        => $title_en,
                    'n_description_en'  => $descr_en,

                    'n_title_ru'        => $title_ru,
                    'n_description_ru'  => $descr_ru,
                    'n_date'         => $date,
                    'n_category'     => $category,
                    'n_status'       => $status,
                    'n_creator_id' => $_SESSION['admin_id'],
                    'n_updater_id' => $_SESSION['admin_id'],
                    // 'n_file'         => $upload_name,
                    // 'n_file_ext'     => $upload_ext,
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    'n_create_date'  => date("Y-m-d H:i:s"),


                ];
                $data = $this->security->xss_clean($data);

                $this->db->insert('news', $data);
                redirect(base_url('a_news_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function update_news($id)
    {
        $id = $this->security->xss_clean($id);

        $data['category'] = $this->db->get('category')->result_array();
        $data['status'] = $this->db->get('status')->result_array();
        $data["single_news"] = $this->db->where('n_id', $id)->get('news')->row();


        // print_r('<pre>');
        // print_r($data["single_news"]);
        // die();
        if ($data["single_news"]) {
            $this->load->view('admin/news/edit', $data);
        } else {
            redirect(base_url('a_news_list'));
        }
    }
    public function update_newsAct($id)
    {
        $id = $this->security->xss_clean($id);

        $title_az = $_POST['title_az'];
        $descr_az = $_POST['description_az'];

        $title_en = $_POST['title_en'];
        $descr_en = $_POST['description_en'];

        $title_ru = $_POST['title_ru'];
        $descr_ru = $_POST['description_ru'];

        $date = $_POST['date'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        if (!empty($title_az) && !empty($descr_az) && !empty($date) && !empty($category) && !empty($status)) {
            $config['upload_path'] = 'uploads/news/';
            $config['allowed_types'] = 'gif|jpg|png|mp3|jpeg';
            $config['remove_spaces'] = true;
            // $config['max_size']     = '100';
            // $config['max_width'] = '1024';
            // $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $upload_name = $this->upload->data('file_name');
                $upload_ext = $this->upload->data('file_ext');
                $data = [
                    'n_title_az'        => $title_az,
                    'n_title_en'        => $title_en,
                    'n_title_ru'        => $title_ru,


                    'n_description_az'  => $descr_az,
                    'n_description_en'  => $descr_en,
                    'n_description_ru'  => $descr_ru,

                    'n_date'         => $date,
                    'n_category'     => $category,
                    'n_status'       => $status,
                    'n_file'         => $upload_name,
                    'n_file_ext'     => $upload_ext,
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    // 'n_update_id'    => , 
                    'n_update_date'  => date("Y-m-d H:i:s"),


                ];
                $data = $this->security->xss_clean($data);

                // print_r("<pre>");
                // print_r($data);
                // die();

                $this->db->where('n_id', $id)->update('news', $data);
                redirect(base_url('a_news_list'));
            } else {
                $data = [
                    'n_title_az'        => $title_az,
                    'n_title_en'        => $title_en,
                    'n_title_ru'        => $title_ru,


                    'n_description_az'  => $descr_az,
                    'n_description_en'  => $descr_en,
                    'n_description_ru'  => $descr_ru,
                    'n_date'         => $date,
                    'n_category'     => $category,
                    'n_status'       => $status,
                    // 'n_file'         => $upload_name,
                    // 'n_file_ext'     => $upload_ext,
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    'n_create_date'  => date("Y-m-d H:i:s"),


                ];
                $data = $this->security->xss_clean($data);
                $this->db->where('n_id', $id)->update('news', $data);
                redirect(base_url('a_news_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function view_news($id)
    {
        $id = $this->security->xss_clean($id);

        $data["single_news"] = $this->db
            ->where('n_id', $id)
            ->join('category', 'category.c_id = news.n_category', 'left')
            ->join('status', 'status.s_id = news.n_status', 'left')
            ->get('news')->row_array();

        $this->load->view('admin/news/detail', $data);
    }

    public function news_contact(){
        $data['get_contact'] = $this->db        
        ->order_by('contact_id','DESC')
        ->get('contact_info')
        ->result_array();

        //  print_r('<pre>');
        // print_r($data['get_contact']);
       
        // die();

        $this->load->view('admin/news/contact_infor',$data); 
    }
    public function deleteContact($id){
        $this->db->where('contact_id', $id)->delete('contact_info');
        redirect(base_url('a_news_contact'));
        // $this->load->view('admin/news/contact_infor');  
    }

    public function contact_detail($id){
        $data['get_contact'] = $this->db        
        ->where('contact_id', $id)
        ->get('contact_info')
        ->row_array();
        
        //  print_r('<pre>');
        // print_r($data['get_contact']);
       
        // die();

        $this->load->view('admin/news/contact_detail',$data); 
    }

}
