<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partner\ServiceRequest;
use App\Models\Service;
use App\Services\Partner\RepairService;
use Illuminate\Http\Request;

class ServiceRepairController extends Controller
{

    public function __construct(RepairService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listServices = $this->service->getListServices();

        return view('partner.service.create', compact('listServices'));
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
    public function store(ServiceRequest $request)
    {
        $filters = $request->all();
        $filters['partner_id'] = auth('partner')->user()->partner->id;

        if ($this->service->create($filters)) {
            return redirect()->to(route('partner.services.index'))->with('success', __('Updated Successful'));
        };

        return back()->with('error', __('Update Failed'));
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
    public function edit(Service $service)
    {
        $listServices = $this->service->getListServices();
        $serviceById = $service;

        return view('partner.service.update', compact('listServices', 'serviceById'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        if ($this->service->update($request->validated(), $service)) {
            return redirect()->to(route('partner.services.index'))->with('success', __('Updated Successful'));
        };

        return back()->with('error', __('Updated Failed'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($this->service->delete($service)) {
            return redirect()->to(route('partner.services.index'))->with('success', __('Deleted Successful'));
        };

        return back()->with('error', __('Delete Failed'));
    }
}
