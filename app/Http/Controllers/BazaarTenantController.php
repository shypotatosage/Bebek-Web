<?php

namespace App\Http\Controllers;

use App\Models\Bazaar;
use App\Models\BazaarTenant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $bazaar = Bazaar::findOrFail($request->id);

        if (count(BazaarTenant::where('bazaar_id', '=', $bazaar->id)->get()) < $bazaar->slot) {
            $bazaar->status = "Available";
    
            $bazaar->starts_from = Carbon::parse($bazaar->starts_from)->locale('id-ID')->translatedFormat('d F Y');
            $bazaar->ends_at = Carbon::parse($bazaar->ends_at)->locale('id-ID')->translatedFormat('d F Y');

            return view('joinbazaar', [
                'bazaar' => $bazaar,
            ]);
        } else {
            return redirect()->route('dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bazaar_id' => 'required|numeric',
            'activity' => 'required',
            'activity_detail' => 'required',
            'mou' => 'required',
            'payment_prove' => 'required'
        ]);

        BazaarTenant::create([
            'user_id' => Auth::id(),
            'bazaar_id' => $request->bazaar_id,
            'activity' => $request->activity,
            'activity_detail' => $request->activity_detail,
            'mou' => $request->file('mou')->store('mou'),
            'payment_prove' => $request->file('payment_prove')->store('payment_proves')
        ]);

        return redirect('/');
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
        if(isset($_POST['remove'])){
            Bazaar::where('id', $_POST['id_bazaar'])->delete();
            return redirect("/");
        }

        if(isset($_POST['acc'])){
            $Item = BazaarTenant::findOrFail($_POST['id_btenant']);

            $Item->update([
                'status' => "accepted",
            ]);
        }

        if(isset($_POST['rej'])){
            $Item = BazaarTenant::findOrFail($_POST['id_btenant']);

            $Item->update([
                'status' => "rejected",
            ]);
        }

        if(isset($_POST['change'])){
            $Item = BazaarTenant::findOrFail($_POST['id_btenant']);

            $Item->update([
                'status' => "pending",
            ]);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BazaarTenant $bazaarTenant)
    {
        //
    }
}
