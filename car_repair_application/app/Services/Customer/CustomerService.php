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
        return $this->partner->with(['province', 'district', 'service'])->whereNotNull(['name', 'phone', 'avatar'])->paginate(9);
    }

    public function searchAdvance($inputs)
    {
        $result = $this->partner->query()->with(['province', 'district'])->join('services', 'partners.id', '=', 'services.partner_id');

        if (!empty($inputs['province_id'])) {
            $result->where('province_id', $inputs['province_id']);
        }

        if (!empty($inputs['district_id'])) {
            $result->where('district_id', $inputs['district_id']);
        }

        if (!empty($inputs['address'])) {
            $result->where('address', 'like', '%' . $inputs['address'] . '%');
        }

        if (!empty($inputs['type_car'])) {
            $result->where('type_car', $inputs['district_id']);
        }

        return $result->whereNotNull(['partners.name', 'partners.phone', 'partners.avatar'])->paginate(10);;
    }
}
