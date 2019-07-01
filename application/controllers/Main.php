<?php
class Main extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    function index(){
        $this->login();
    }
    // Login Controller
    function login(){
        $data = array(
            "title" => "Lending Management System",
            "author" => "Jason Javier",
            "main_logo" => base_url()."assets/images/lending_logo.png",
            "style" => base_url()."assets/css/style.css",
            "jquery" => base_url()."assets/js/jquery.min.js",
            "login_script" => base_url()."assets/js/login_script.js"
        );
        $this->load->view("login", $data);
    }

    // Admin 
    function admin(){
        $data = array(
            "title" => "Lending Management System",
            "author" => "Jason Javier",
            "lending_logo" => base_url()."assets/images/lending_logo.png",
            "lending_icon" => base_url()."assets/images/lending_icon.png",
            "style" => base_url()."assets/css/admin_style.css",
            "jquery" => base_url()."assets/js/jquery.min.js",
            "admin_script" => base_url()."assets/js/admin_script.js",
            "dashboard" => base_url()."assets/js/dashboard.js"
        );
        $this->load->view("header.php", $data);
        $this->load->view("dashboard", $data);
        $this->load->view("footer.php", $data);
    }
    // User dashboard
    function users(){
        $data = array(
            "title" => "Lending Management System",
            "author" => "Jason Javier",
            "lending_logo" => base_url()."assets/images/lending_logo.png",
            "lending_icon" => base_url()."assets/images/lending_icon.png",
            "style" => base_url()."assets/css/admin_style.css",
            "jquery" => base_url()."assets/js/jquery.min.js",
            "admin_script" => base_url()."assets/js/admin_script.js",
            "users" => base_url()."assets/js/users.js",
            "calendar" => $this->load->library('calendar')
        );
        $this->load->view("header.php", $data);
        $this->load->view("users", $data);
        $this->load->view("footer.php", $data);
    }   
    // Settings Dashboard
    function settings(){
        $data = array(
            "title" => "Lending Management System",
            "author" => "Jason Javier",
            "lending_logo" => base_url()."assets/images/lending_logo.png",
            "lending_icon" => base_url()."assets/images/lending_icon.png",
            "style" => base_url()."assets/css/admin_style.css",
            "jquery" => base_url()."assets/js/jquery.min.js",
            "admin_script" => base_url()."assets/js/admin_script.js",
            "dashboard" => base_url()."assets/js/dashboard.js",
            "settings" => base_url()."assets/js/settings.js"
        );
        $this->load->view("header.php", $data);
        $this->load->view("settings", $data);
        $this->load->view("footer.php", $data);
    }   
    // DESTROY SESSION
    function destroy_session(){
        return session_destroy();
    }
}
?>