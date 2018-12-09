<?php

namespace App\Controller;

use App\Controller\AppController;

class StartController extends AppController {
    public function index() {    
        $this->layout = false;
        $this->viewBuilder()->template('index');
    }
}

?>