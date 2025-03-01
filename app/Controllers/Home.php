<?php namespace App\Controllers;

class Home extends \CodeIgniter\Controller
{
    public function index()
    {
        return redirect()->to('base/dashboard');
    }
}