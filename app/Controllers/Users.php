<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
  public function index()
{
    $users = [
        ['username' => 'admin',    'full_name' => 'Admin User',    'role' => 'Administrator'],
        ['username' => 'mcruz',    'full_name' => 'Miguel Cruz',   'role' => 'Manager'],
        ['username' => 'asantos',  'full_name' => 'Ana Santos',    'role' => 'Cashier'],
        ['username' => 'jreyes',   'full_name' => 'Jose Reyes',    'role' => 'Cashier'],
        ['username' => 'lgarcia',  'full_name' => 'Lea Garcia',    'role' => 'Inventory Staff'],
    ];

    return view('users/index', ['users' => $users]);
}
}
