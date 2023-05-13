<?php

namespace App\Http\Controllers;

use App\Models\Bazaar;
use App\Http\Requests\StoreBazaarRequest;
use App\Http\Requests\UpdateBazaarRequest;
use App\Models\BazaarTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BazaarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        $bazaarTenants = BazaarTenant::select('bazaar_tenants.*', 'bazaars.name')
            ->join('bazaars', 'bazaars.id', '=', 'bazaar_tenants.bazaar_id')
            ->where('bazaar_tenants.user_id', '=', $id)
            ->get();
        if (Auth::user()->role == "Tenant") {
            return view('mybazaar', [
                'bazaars' => $bazaarTenants
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

        $bazaar = Bazaar::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'price_estimation' => $request->price_estimation,
            'starts_from' => $request->starts_from,
            'ends_at' => $request->ends_at,
            'slot' => $request->slot,
            'syarat_ketentuan' => $request->file('syarat_ketentuan')->store('public/syarat_ketentuan'),
            'logo' => $request->file('logo')->store('public/logo'),
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $bazaar->id,
                'gross_amount' => 5000,
            ),
            'customer_details' => array(
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone_number,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('midtrans', compact('snapToken', 'bazaar'));
    }

    public function callback(Request $request) {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            Log::info('E');
            if ($request->transaction_status == 'capture') {
                $bazaar = Bazaar::findOrFail($request->order_id);
                $bazaar->update(['payment' => 'Paid']);
                Log::info($bazaar);
            }
        }
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
