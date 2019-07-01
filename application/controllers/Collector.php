<?php
class Collector extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $this->dashboard();
    }

    // collector dashboard
    function dashboard(){
        $data = array(
            "title" => "Lending Management System",
            "author" => "Jason Javier",
            "lending_logo" => base_url()."assets/images/lending_logo.png",
            "lending_icon" => base_url()."assets/images/lending_icon.png",
            "style" => base_url()."assets/css/admin_style.css",
            "jquery" => base_url()."assets/js/jquery.min.js",
            "admin_script" => base_url()."assets/js/admin_script.js",
            "users" => base_url()."assets/js/users.js"
        );
        $this->load->view("collector/header.php", $data);
        $this->load->view("collector/dashboard", $data);
        $this->load->view("collector/footer.php", $data);
    }

    // Settings
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
        $this->load->view("collector/header.php", $data);
        $this->load->view("collector/settings", $data);
        $this->load->view("collector/footer.php", $data);
    }
}
?>