<?php
namespace App\Controller;
use App\Controller\BaseController;

class Home extends BaseController
{
    public function index() {

        $context = [
            'title' => 'HOME',
        ];
        return render('index', $context);
    }
}