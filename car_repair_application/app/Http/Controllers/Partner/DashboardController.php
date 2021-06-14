<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Services\Partner\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function index(Request $request)
    {
        $lists = $this->dashboardService->getListRequest();

        return view('partner.dashboard.index', compact('lists'));
    }

    public function acceptRequest(Request $request)
    {
        if ($this->dashboardService->updateRequestStatus($request->all())) {
            return redirect()->to(route('partner.dashboard'))->with('success', __('Updated Successful'));
        };

        return back()->with('error', __('Update Failed'));
    }
}
