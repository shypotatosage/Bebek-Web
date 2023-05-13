<?php

namespace App\Http\Controllers;

use App\Models\Bazaar;
use App\Http\Requests\StoreBazaarRequest;
use App\Http\Requests\UpdateBazaarRequest;
use App\Models\BazaarTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BazaarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role == "Tenant") {
            return view('mybazaar', [
                'bazaars' => BazaarTenant::where('user_id', '=', Auth::id())->get()
            ]);
        } else {
            return view('mybazaar', [
                'bazaars' => Bazaar::where('user_id', '=', Auth::id())->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBazaarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bazaar $bazaar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bazaar $bazaar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBazaarRequest $request, Bazaar $bazaar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bazaar $bazaar)
    {
        //
    }
}
