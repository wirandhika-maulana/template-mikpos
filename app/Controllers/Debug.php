<?php

namespace App\Controllers;

class Debug extends \CodeIgniter\Controller
{
    public function index()
    {
        $reflector = new \ReflectionClass(\CodeIgniter\HTTP\Request::class);
        echo "Request.php path: " . $reflector->getFileName();
    }
}