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

            $chec_admin = $this->db->where($data)->get('admin')->row_array();
            if ($chec_admin) {
                $_SESSION['admin_id'] = $chec_admin['a_id'];
                $_SESSION['admin_username'] = $chec_admin['a_username'];
                
                redirect(base_url('a_dashboard'));
            }else{
                $this->session->set_flashdata('err', 'Istifadeci adi ve ya sifre yanlisiidir');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{

            $this->session->set_flashdata('err', 'Bosluq buraxmayin!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function logout(){
       unset(
        $_SESSION['admin_id'],
        $_SESSION['admin_username'],
       );
       $this->session->set_flashdata('success','Sizi bir daha gozleyirik');
       redirect(base_url('a_login'));
    }
   

    public function dashboard()
    {
        $data['admin'] = $this->db->select('a_id, a_name, a_username, a_status, a_email, a_img')->where('a_id',$_SESSION['admin_id'])->get('admin')->row_array();
        $this->load->view('admin/index', $data);
    }

    public function news_list()
    {
        
        $data["get_all"] = $this->db
        ->where('n_creator_id',$_SESSION['admin_id'])
        ->join('category','category.c_id = news.n_category','left')
        ->join('status','status.s_id = news.n_status','left')
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
        $data['category']=$this->db->get('category')->result_array();
        $data['status']=$this->db->get('status')->result_array();
       

        
        $this->load->view('admin/news/create', $data);
    }
    public function deleteNews($id)
    {
        echo $id;
        $this->db->where('n_id', $id)->delete('news');
        redirect(base_url("a_news_list"));
        // $this->load->view('admin/news/delete');
    }
    public function news_create_act()
    {
        $title = $_POST['title'];
        $descr = $_POST['description'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        if (!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)) {
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
                    'n_title'        => $title,
                    'n_description'  => $descr,
                    'n_date'         => $date,
                    'n_category'     => $category,
                    'n_status'       => $status,
                    'n_file'         => $upload_name,
                    'n_file_ext'     => $upload_ext,
                    'n_creator_id' =>$_SESSION['admin_id'],
                    'n_updater_id' =>$_SESSION['admin_id'],
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    'n_create_date'  => date("Y-m-d H:i:s"),


                ];
                $this->db->insert('news', $data);
                redirect(base_url('a_news_list'));
            } else {
                $data = [
                    'n_title'        => $title,
                    'n_description'  => $descr,
                    'n_date'         => $date,
                    'n_category'     => $category,
                    'n_status'       => $status,
                    'n_creator_id' =>$_SESSION['admin_id'],
                    'n_updater_id' =>$_SESSION['admin_id'],
                    // 'n_file'         => $upload_name,
                    // 'n_file_ext'     => $upload_ext,
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    'n_create_date'  => date("Y-m-d H:i:s"),


                ];
                $this->db->insert('news', $data);
                redirect(base_url('a_news_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function update_news($id)
    {
        $data['category']=$this->db->get('category')->result_array();
        $data['status']=$this->db->get('status')->result_array();
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
        $title = $_POST['title'];
        $descr = $_POST['description'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        if (!empty($title) && !empty($descr) && !empty($date) && !empty($category) && !empty($status)) {
            $config['upload_path'] = './uploads/';
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
                    'n_title'        => $title,
                    'n_description'  => $descr,
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
                $this->db->where('n_id', $id)->update('news', $data);
                redirect(base_url('a_news_list'));
            } else {
                $data = [
                    'n_title'        => $title,
                    'n_description'  => $descr,
                    'n_date'         => $date,
                    'n_category'     => $category,
                    'n_status'       => $status,
                    // 'n_file'         => $upload_name,
                    // 'n_file_ext'     => $upload_ext,
                    // 'n_image'        => ,
                    // 'n_creator_id'   => ,
                    'n_create_date'  => date("Y-m-d H:i:s"),


                ];
                $this->db->where('n_id', $id)->update('news', $data);
                redirect(base_url('a_news_list'));
            }
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function view_news($id)
    {
        $data["single_news"] = $this->db
        ->where('n_id', $id)
        ->join('category','category.c_id = news.n_category','left')
        ->join('status','status.s_id = news.n_status','left')
        ->get('news')->row_array();
        $this->load->view('admin/news/detail', $data);
    }
}
