<?php
    class DashboardController extends Controller {
        public function __construct() {

        }

        public function welcome() {
            $data = [
                'title' => 'Welcome',
                'username' => $_SESSION['username'],
                'logoutLink' => 'Log Out',
                'logoutAction' => URLROOT . '/logout',
                'welcomeMessage' => "Welcome to our Gallery",
                'infoMessage' => 'We are making improvements over here...'
            ];
            $this->view('dashboard', $data);
        }

        public function logout() {
            unset($_SESSION['username']);
            session_destroy();
            redirect("/login");
        }
    }
?>