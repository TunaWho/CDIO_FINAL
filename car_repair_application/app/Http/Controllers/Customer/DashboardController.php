<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // protected $storeService;

    // public function __construct(StoreService $storeService)
    // {
    //     $this->storeService = $storeService;
    // }

    public function index(Request $request)
    {
        return view('customer.dashboard.index');
    }
}
