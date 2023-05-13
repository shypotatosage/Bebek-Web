<?php

namespace App\Http\Controllers;

use App\Models\Bazaar;
use App\Models\BazaarTenant;
use Illuminate\Http\Request;

class BazaarTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('joinbazaar', [
            'bazaar' => Bazaar::findOrFail($request->id),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BazaarTenant $bazaarTenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BazaarTenant $bazaarTenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BazaarTenant $bazaarTenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BazaarTenant $bazaarTenant)
    {
        //
    }
}
