<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\DashboardService;
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

        return view('admin.topup.index', compact('lists'));
    }

    public function acceptTopup(Request $request)
    {
        if ($this->dashboardService->delete($request->all())) {
            return redirect()->to(route('admin.dashboard'))->with('success', __('Top-up Successful'));
        };

        return back()->with('error', __('Top-up Failed'));
    }
}
