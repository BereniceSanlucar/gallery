<?php
    class LoginController extends Controller {
        private $data = [
            'title' => 'Login',
            'lockIcon' => 'lock',
            'faceIcon' => 'face',
            'vpnKeyIcon' => 'vpn_key',
            'signupMessage' => "Don't have an account yet?",
            'signupButton' => 'Sign Up',
            'signupLink' => URLROOT . '/signup',
            'loginAction' => URLROOT . '/login',
            'usernameError' => '',
            'passwordError' => ''
        ];

        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function login() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $temp = [
                    'username' => trim($POST['username']),
                    'password' => trim($POST['password'])
                ];

                if(empty($temp['username']) || empty($temp['password'])) {
                    if(empty($temp['username'])) {
                        $this->data['usernameError'] = 'Please enter username.';
                    }

                    if(empty($temp['password'])) {
                        $this->data['passwordError'] = 'Please enter password.';
                    } 
                } else {
                    if(!($this->userModel->findUsername($temp['username']))) {
                        $this->data['usernameError'] = 'This username is not registered.';
                    } elseif($this->userModel->authenticateUser($temp['username'], $temp['password'])) {
                        
                    } else {
                        $this->data['passwordError'] = 'Incorrect password.';
                    }
                }
            } 
            $this->view('login', $this->data);
        }

        public function createUserSession($user) {
            $_SESSION['username'] = $user->username;
        }

        public function signup() {
            $init = new Core();
            $init->setController('SignupController', 'signup');
        }
    }
?>