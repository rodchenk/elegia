<?php

namespace App\Controller;

use App\Controller\AppController;

class AboutController extends AppController {
    public function index() {
        $this->layout = false;
        $this->viewBuilder()->template('index');
    }

    public function initialize(){
        parent::initialize();
        $this->Auth->allow(['index']);
    }
}
?>
