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
        $items = Bazaar::select('*')
        ->limit(8)
        ->get();;
        return view('dashboard', [
            'pagetitle' => 'Catalog',
            'items' => $items
        ]);
    }
}
