<?php

  namespace App\Controllers;

  use App\Models\User;

  class UserController {

    public function get($id = null) {
      if ($id) {
        return User::getById($id);
      } else {
        return User::getAll();
      }
    }

    public function post() {     
      if (!isset($_POST['password']) || empty($_POST['password'])) {
        throw new \Exception ("Informe a senha");
      }
      elseif (!isset($_POST['name']) || !isset($_POST['email'])) {
        throw new \Exception ("Informe o nome e o e-mail");
      } 
      elseif (empty($_POST['name']) || empty($_POST['email'])) {
        throw new \Exception ("Informe o nome e o e-mail");
      } else {
        return User::insert($_POST);
      }
    }

    public function update() {

    }

    public function delete() {

    }
    
  }