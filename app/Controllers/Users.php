<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
  public function index()
{
        $model = new UserModel();
    $users = $model->findAll();

    return view('users/index', ['users' => $users]);
}
}
