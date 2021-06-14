<?php

namespace App\Services\Partner;

use Hash;
use App\Models\User;
use App\Models\PasswordReset;
use App\Models\Service;
use App\Services\BaseService;
use Carbon\Carbon;
use DB;
use Log;

class RepairService extends BaseService
{
    public function __construct(User $model, Service $service)
    {
        $this->model = $model;
        $this->service = $service;
    }

    public function getListServices()
    {
        return $this->service->where('partner_id', auth('partner')->user()->partner->id)->get();
    }

    public function create($inputs)
    {
        DB::beginTransaction();

        try {
            $this->service->create($inputs);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return false;
        }
    }

    public function update($inputs, $service)
    {
        DB::beginTransaction();

        try {
            $service->update($inputs);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return false;
        }
    }

    public function delete($service)
    {
        DB::beginTransaction();
        try {
            $service->delete();
            DB::commit();

            return true;
        } catch (Exception $e) {
            Log::error($e);
            DB::rollBack();

            return false;
        }
    }
}
