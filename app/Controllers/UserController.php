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

    }

    public function update() {

    }

    public function delete() {

    }
    
  }