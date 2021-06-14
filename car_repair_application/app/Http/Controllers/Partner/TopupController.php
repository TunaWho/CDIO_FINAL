<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partner\DonateRequest;
use App\Services\Partner\DonateService;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    public function __construct(DonateService $donateService)
    {
        $this->donateService = $donateService;
    }

    public function index()
    {
        $admin = $this->donateService->getAdmin();

        return view('partner.topup.index', compact('admin'));
    }

    public function topup(DonateRequest $request)
    {
        if ($this->donateService->create($request->all())) {
            return redirect()->to(route('partner.topup'))->with('success', __('Request Successful'));
        };

        return back()->with('error', __('Request Failed'));
    }
}
