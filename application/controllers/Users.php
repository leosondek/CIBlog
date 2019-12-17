<?php

    class Users extends CI_Controller {
        public function register() {
            $data['title'] = 'Sign Up';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'required', 'match[password]');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer');
            } else {
                // encrypt password
                $enc_password = md5($this->input->post('password'));

                $this->user_model->register($enc_password);

                // set message
                $this->session->set_flashdata('user_registered', 'You are now Registered. Please proceed to login.');
                redirect('posts');
            }
        }

        // login
        public function login() {
            $data['title'] = 'Sign In';
            $this->form_validation->set_rules('username', 'Username', 'required');        
            $this->form_validation->set_rules('password', 'Password', 'required');
            

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            } else {
                // get username
                $username = $this->input->post('username'); 
                // get and enc pass
                $password = md5($this->input->post('password'));
                // login user
                $user_id =$this->user_model->login($username,$password);

                if($user_id){
                    // create session
                    $user_data =array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);
                    // set message
                    $this->session->set_flashdata('user_loggedin', 'You are now Logged In.');
                    redirect('posts');

                }else{
                    // set error
                    $this->session->set_flashdata('login_failed', 'Login Failed.');
                    redirect('users/login');
                }
            }
        }

        // logout
        public function logout(){
            // unset userdata
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            // set message
            $this->session->set_flashdata('user_loggedout', 'You are now Logged Out.');
            redirect('users/login');

        }

        // check for username
        public function check_username_exists($username){
            $this->form_validation->set_message('check_username_exists', 'That username is taken');

            if($this->user_model->check_username_exists($username)){
                return true;

            }else{
                return false;

            }
        }

        // check email

        public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'That email is taken');

            if($this->user_model->check_email_exists($email)){
                return true;

            }else{
                return false;

            }
        }
    }