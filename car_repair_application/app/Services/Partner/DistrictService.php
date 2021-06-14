<?php

namespace App\Services\Partner;

use App\Models\District;

use App\Services\BaseService;

class DistrictService extends BaseService
{
    public function __construct(District $district)
    {
        $this->district = $district;
    }

    public function getDistrict()
    {
        return $this->district->all();
    }

    public function getDistrictByProvince($provinceID)
    {
        return $this->district->where('province_id', $provinceID)->get();
    }
}
