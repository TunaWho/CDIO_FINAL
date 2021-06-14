<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Services\Customer\CustomerService;
use App\Services\Partner\DistrictService;
use App\Services\Partner\ProvinceService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(ProvinceService $province, DistrictService $district, CustomerService $customer)
    {
        $this->customer = $customer;
        $this->province = $province;
        $this->district = $district;
    }

    public function index(Request $request)
    {
        $listPartners = $this->customer->getListPartners();
        $provinces = $this->province->getProvince();

        return view('customer.dashboard.index', compact('listPartners', 'provinces'));
    }

    public function districtByProvince(Request $request)
    {
        $districts = $this->district->getDistrictByProvince($request->province_id)->toArray();

        return $districts;
    }

    public function searchAdvance(Request $request)
    {
        $listPartners = $this->customer->searchAdvance($request->all());

        return view('customer.dashboard.list', compact('listPartners'));
    }
}
