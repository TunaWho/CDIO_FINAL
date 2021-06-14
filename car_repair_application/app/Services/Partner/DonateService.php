<?php

namespace App\Services\Partner;

use App\Enums\UserRole;
use App\Models\Donate;
use DB;
use Log;
use Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Service;
use App\Models\PasswordReset;
use App\Services\BaseService;

class DonateService extends BaseService
{
    public function __construct(User $model, Donate $donate)
    {
        $this->model = $model;
        $this->donate = $donate;
    }

    public function getAdmin()
    {
        return $this->model->with(['admin'])->where('role_id', UserRole::ADMIN)->first();
    }

    public function create($inputs)
    {
        DB::beginTransaction();

        try {
            $this->donate->create($inputs);

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
