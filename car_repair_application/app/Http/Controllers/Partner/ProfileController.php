<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partner\ProfileRequest;
use App\Models\Partner;
use App\Services\Partner\DistrictService;
use App\Services\Partner\ProfileService;
use App\Services\Partner\ProvinceService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(ProvinceService $province, DistrictService $district, ProfileService $profile)
    {
        $this->province = $province;
        $this->district = $district;
        $this->profile = $profile;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = $this->province->getProvince();
        $districts = $this->district->getDistrictByProvince(auth('partner')->user()->partner->province_id ?? null);

        return view('partner.user.profile', compact('provinces', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, Partner $setting)
    {
        if ($this->profile->updateProfile($request->all(), $setting)) {
            return redirect()->to(route('partner.settings.index'))->with('success', __('Updated Successful'));
        };

        return back()->with('error', __('Update Failed'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function districtByProvince(Request $request)
    {
        $districts = $this->district->getDistrictByProvince($request->province_id)->toArray();

        return $districts;
    }
}
