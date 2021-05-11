<?php

namespace App\Services\Partner;

use App\Models\Partner;
use App\Models\Province;
use App\Services\BaseService;

class ProvinceService extends BaseService
{
    public function __construct(Partner $model, Province $province)
    {
        $this->model = $model;
        $this->province = $province;
    }

    public function getProvince()
    {
        return $this->province->orderBy('name' ,'asc')->get();
    }
}
