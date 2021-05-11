<?php

namespace App\Services\Customer;

use App\Models\Partner;
use App\Models\User;
use App\Services\BaseService;

class CustomerService extends BaseService
{
    public function __construct(User $model, Partner $partner)
    {
        $this->model = $model;
        $this->partner = $partner;
    }

    public function getListPartners()
    {
        return $this->partner->all();
    }
}
