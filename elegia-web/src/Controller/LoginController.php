<?php

namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController {
    public function index() {
        $this->layout = 'header';
        $this->set(compact('login'));
        $this->viewBuilder()->template('index');
    }
}
?>