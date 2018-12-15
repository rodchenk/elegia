<?php

namespace App\Controller;

use App\Controller\AppController;

class StartController extends AppController {
    public function index() {    
        $this->layout = 'header';
        $this->viewBuilder()->template('index');

    }
}

?>