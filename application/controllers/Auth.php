<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');

        $encrypted_password = '$2y$10$htqZsto.4T2TbTYBFtjLzOwaC3jUgUoe5IlMxkpwnyOdlJhg585vK';
        $key = 'secret-key-in-config';

        $decrypted_string = $this->encrypt->decode($encrypted_password, $key);
         echo json_encode($decrypted_string);die;
    }

    public function index()
    {
        if ($this->session->userdata('status') == "Login") {
            redirect('user');
        }
        $this->load->view('belumLogin/index');
    }

    public function login()
    {
        if ($this->session->userdata('status') == "Login") {
            redirect('user');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'CI User Login';
            $this->load->view('templates/loreg_header', $data);
            $this->load->view('auth/pages-login');
            $this->load->view('templates/loreg_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'status' => "Login",
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">UserName has not registered, so please register</div>');
            redirect('auth/login');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('status') == "Login") {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]|valid_email', [
            'is_unique' => 'This email is already used!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This username is already used!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'password is too short!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'CI User Regist';
            $this->load->view('templates/loreg_header', $data);
            $this->load->view('auth/pages-register');
            $this->load->view('templates/loreg_footer');
        } else {
            $this->_registration();
        }
    }

    private function _registration()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash(htmlspecialchars($this->input->post('password', true)), PASSWORD_DEFAULT),
            'datecreated' => date('Ymd')
        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Congratulation! your account has been created, please login.
        </div>');
        redirect('auth/login');
    }
    public function page_about()
    {
        $this->load->view('belumLogin/about');
    }
    public function page_milestone()
    {
        $this->load->view('belumLogin/milestone');
    }
    public function page_products()
    {
        $this->load->view('belumLogin/product');
    }
    public function page_productDetail()
    {
        if ($this->session->userdata('status') != "Login") {
            redirect('auth/login');
        }
        $this->load->view('user/product-detail-1');
    }
    public function page_productDetail2()
    {
        if ($this->session->userdata('status') != "Login") {
            redirect('auth/login');
        }
        $this->load->view('user/product-detail-2');
    }
    public function page_team()
    {
        $this->load->view('belumLogin/team');
    }
    public function page_FAQ()
    {
        $this->load->view('belumLogin/QnA');
    }
}
