<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use LogicException;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/login');
    }
}

?>