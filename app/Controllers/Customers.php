<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Customers extends BaseController
{
    public function index()
{
    $customers = [
        ['full_name' => 'Maria Santos',   'email' => 'maria@example.com', 'phone' => '0917-111-1111'],
        ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com',  'phone' => '0917-222-2222'],
        ['full_name' => 'Ana Reyes',      'email' => 'ana@example.com',   'phone' => '0917-333-3333'],
        ['full_name' => 'Pedro Cruz',     'email' => 'pedro@example.com', 'phone' => '0917-444-4444'],
        ['full_name' => 'Lia Garcia',     'email' => 'lia@example.com',   'phone' => '0917-555-5555'],
    ];

    return view('customers/index', ['customers' => $customers]);
}
}
