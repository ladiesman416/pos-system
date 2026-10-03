<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Customers extends BaseController
{
    public function index()
{
      $model = new CustomerModel();
   $customers = $model->findAll();

    return view('customers/index', ['customers' => $customers]);
}
}
