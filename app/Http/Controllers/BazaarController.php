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
        return view('createbazaar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'price_estimation' => 'required',
            'starts_from' => 'required|date|after:now',
            'ends_at' => 'required|date|after_or_equal:starts_from',
            'syarat_ketentuan' => 'required',
            'slot' => 'required',
            'logo' => 'required',
        ]);

        Bazaar::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'price_estimation' => $request->price_estimation,
            'starts_from' => $request->starts_from,
            'ends_at' => $request->ends_at,
            'slot' => $request->slot,
            'syarat_ketentuan' => $request->file('syarat_ketentuan')->store('syarat_ketentuan'),
            'logo' => $request->file('logo')->store('logo'),
        ]);

        return redirect('/');
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
