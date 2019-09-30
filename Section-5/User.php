<?php
  class User {
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;

    private function add() {
      echo "Add";
    }

    public function edit() {
      echo "Edit";
    }

    public function register() {
      echo "Register";
    }

    public function login() {
      echo "Login";
    }

    public function view() {
      echo "View";      
    }

    private function list() {
      echo "List";
    }
  }
?>