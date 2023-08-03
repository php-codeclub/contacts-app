<?php

namespace App\Controllers;

use App\Models\ContactsModel;

class Home extends BaseController
{
    public function __construct() {
        helper(['url']);
        $this->contacts = new ContactsModel();
    }

    public function index() {
        // 1
        $page_size = 4;
        $page_title = 'Головна';

        // 2
        $scope['page_title'] = $page_title;

        // 3
        echo view('/inc/header', $scope);
        echo view('/pages/home');
        echo view('/inc/footer');
    }
}
