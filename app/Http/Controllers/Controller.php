<?php

namespace App\Http\Controllers;

use App\Models\Bazaar;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard(){
        $items = Bazaar::select('bazaars.*', DB::raw('COUNT(bazaar_tenants.id) AS num_attendees'))
        ->leftJoin('bazaar_tenants', 'bazaars.id', '=', 'bazaar_tenants.bazaar_id')
        ->groupBy('bazaars.id', 'bazaars.name', 'bazaars.created_at', 'bazaars.updated_at', 'bazaars.description', 'bazaars.location', 'bazaars.price_estimation'
        ,'bazaars.starts_from','bazaars.ends_at','bazaars.syarat_ketentuan','bazaars.slot','bazaars.logo', 'bazaars.user_id')
        ->orderBy('bazaars.id')
        ->limit(8)
        ->get();
    
        return view('dashboard', [
            'pagetitle' => 'Catalog',
            'items' => $items
        ]);
    }

    public function bazardetil(){
        $items = Bazaar::where('id', 1)->first();

        return view('dashboard', [
            'pagetitle' => 'Catalog',
            'items' => $items
        ]);
    }
}
