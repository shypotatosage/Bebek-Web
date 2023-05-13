<?php

namespace App\Http\Controllers;

use App\Models\Bazaar;
use App\Models\BazaarTenant;
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

    public function bazaardetauls($id){
        $items = Bazaar::select(DB::raw('*'))
              ->where(DB::raw('`bazaars`.`id`'), '=', $id)
              ->get();

        $bazaarTenants = BazaarTenant::select('bazaar_tenants.*', 'users.name as username')
              ->where('bazaar_id', $id)
              ->join('users', 'bazaar_tenants.user_id', '=', 'users.id')
              ->get();

        return view('bazaardetail', [
            'pagetitle' => 'Catalog',
            'items' => $items,
            'tenants' => $bazaarTenants
        ]);
    }
}
