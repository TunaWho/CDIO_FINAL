<?php

namespace App\Services\Partner;

use DB;
use Log;
use Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Service;
use App\Enums\RequestType;
use App\Models\AcceptRequest;
use App\Models\SendRequest;
use App\Services\BaseService;

class DashboardService extends BaseService
{
    public function __construct(User $model, SendRequest $sendRequest, AcceptRequest $acceptRequest)
    {
        $this->model = $model;
        $this->sendRequest = $sendRequest;
        $this->acceptRequest = $acceptRequest;
    }

    public function getListRequest()
    {
        $partnerId = auth('partner')->user()->partner->id ?? '';

        return $this->sendRequest->with(['customer'])
            ->join('accepts', 'accepts.send_request_id', '=', 'send_requests.id')
            ->where('send_requests.partner_id', $partnerId)
            ->where('accepts.accept', RequestType::WAITING)
            ->orderByDesc('send_requests.created_at')
            ->get();
    }

    public function updateRequestStatus($inputs)
    {
        DB::beginTransaction();

        try {
            $accept = AcceptRequest::find($inputs['accept']);

            if (!empty($accept)) {
                $accept->update(['accept' => RequestType::ACCEPTED]);
            }

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

    // public function delete($service)
    // {
    //     DB::beginTransaction();
    //     try {
    //         $service->delete();
    //         DB::commit();

    //         return true;
    //     } catch (Exception $e) {
    //         Log::error($e);
    //         DB::rollBack();

    //         return false;
    //     }
    // }
}
