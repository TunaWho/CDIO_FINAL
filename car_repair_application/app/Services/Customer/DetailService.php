<?php

namespace App\Services\Customer;

use App\Models\Partner;
use App\Models\SendRequest;
use App\Models\User;
use App\Services\BaseService;
use DB;
use Log;

class DetailService extends BaseService
{
    public function __construct(User $model, Partner $partner, SendRequest $sendRequest)
    {
        $this->model = $model;
        $this->partner = $partner;
        $this->sendRequest = $sendRequest;
    }

    public function getDetailPartnerById($partnerId)
    {
        return $this->partner->with(['province', 'district', 'service'])->whereNotNull(['name', 'phone', 'avatar'])->where('id', $partnerId)->get();
    }

    public function getInvoiceById($inputs)
    {
        return $this->sendRequest->where('id', $inputs)->first();
    }

    public function create($inputs)
    {
        DB::beginTransaction();

        try {
            $send = $this->sendRequest->create($inputs);

            DB::commit();

            return $send;
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return false;
        }
    }
}
