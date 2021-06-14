<?php

namespace App\Services\Partner;

use App\Models\Partner;
use App\Models\Province;
use App\Services\BaseService;
use DB;

class ProfileService extends BaseService
{
    public function __construct(Partner $model, Province $province)
    {
        $this->model = $model;
        $this->province = $province;
    }

    public function updateProfile($inputs, $partner)
    {
        DB::beginTransaction();
        try {
            $folder = 'partner/avatar/' . auth('partner')->user()->partner->id;

            if (!empty($inputs['thumbnail_base64_avatar'])) {
                $inputs['avatar'] = uploadImageBase64($folder, $inputs['thumbnail_base64_avatar']);
            }

            $partner->update($inputs);

            DB::commit();

            return true;
        } catch (\Exception $e) {
            \Log::error($e);
            DB::rollBack();

            return false;
        }
    }
}
