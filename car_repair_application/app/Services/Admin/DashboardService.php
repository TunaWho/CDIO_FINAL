<?php

namespace App\Services\Admin;

use DB;
use Log;
use Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Service;
use App\Enums\RequestType;
use App\Models\AcceptRequest;
use App\Models\Donate;
use App\Models\SendRequest;
use App\Services\BaseService;

class DashboardService extends BaseService
{
    public function __construct(User $model, Donate $donate, AcceptRequest $acceptRequest)
    {
        $this->model = $model;
        $this->donate = $donate;
        $this->acceptRequest = $acceptRequest;
    }

    public function getListRequest()
    {
        return $this->donate->query()
            ->with(['partner'])
            ->where('admin_id', auth('admin')->id())
            ->orderByDesc('created_at')
            ->get();
    }

    public function updateRequestStatus($inputs)
    {
        DB::beginTransaction();

        try {
            $this->acceptRequest->where('partner_id', $inputs['partner'])->update(['accept' => RequestType::ACCEPTED]);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return false;
        }
    }

    // public function updateRequestStatus($inputs)
    // {
    //     DB::beginTransaction();

    //     try {
    //         $acceptRequest->update($inputs);

    //         DB::commit();

    //         return true;
    //     } catch (\Exception $e) {
    //         Log::error($e);
    //         DB::rollBack();

    //         return false;
    //     }
    // }

    public function delete($inputs)
    {
        DB::beginTransaction();
        try {
            $this->donate->destroy($inputs['admin']);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return false;
        }
    }
}
