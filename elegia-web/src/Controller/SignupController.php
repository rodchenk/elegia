<?php

namespace App\Controller;

use App\Controller\AppController;

class SignupController extends AppController {
    public function index() {
        $this->layout = false;//TODO
        //$this->viewBuilder()->setDefaultLayout(false);
        $this->set(compact('signup'));
        $this->viewBuilder()->template('index');
    }
}
?>