<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Services\Customer\CustomerService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(CustomerService $customer)
    {
        $this->customer = $customer;
    }

    public function index(Request $request)
    {
        $listPartners = $this->customer->getListPartners();

        return view('customer.dashboard.index', compact('listPartners'));
    }
}
