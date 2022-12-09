<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Odezhda;
use App\Models\OdezhdaColor;
use App\Models\OdezhdaFacturer;
use App\Models\OdezhdaForm;
use App\Models\OdezhdaType;

class MainController extends Controller
{
    public function index() {
        $odezhdalar = Odezhda::get();
        $popular = Odezhda::with(['type'])->take(4)->get();
        return view('pages.main', [
            'odezhdalar' => $odezhdalar,
            'popular' => $popular,
        ]);
    }

    public function details($id) {
        $odezhda = Odezhda::with(['type','form','facturer','color'])->findOrFail($id);
        return view('pages.details', [
            'odezhda' => $odezhda,
        ]);
    }

}
