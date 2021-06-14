<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\ServiceRequest;
use App\Models\Partner;
use App\Services\Customer\DetailService;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __construct(DetailService $detailService)
    {
        $this->detailService = $detailService;
    }

    public function index($partnerId)
    {
        $partner = $this->detailService->getDetailPartnerById($partnerId);

        return view('customer.detail.index', compact('partner'));
    }

    public function sendRequest(ServiceRequest $request)
    {
        $send = $this->detailService->create($request->all());

        if (!empty($send)) {
            return redirect()->to(route('customer.invoices.show', ['invoice' => $send->id]))->with('success', __('Updated Successful'));
        };

        return back()->with('error', __('Update Failed'));
    }
}
