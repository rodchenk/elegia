<?php

namespace App\Controller;

use App\Controller\AppController;

class SearchController extends AppController {
    public function index() {
        $this->layout = 'header';
        $this->viewBuilder()->template('index');
    }
}
?>