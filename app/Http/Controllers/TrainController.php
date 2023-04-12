<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treno;

class TrainController extends Controller
{
    public function index()
    {
        $treniInPartenza = $this->getTreniInPartenza();
        return view('home', compact('treniInPartenza'));
    }

    private function getTreniInPartenza()
    {
        $now = date('Y-m-d H:i:s');
        return Treno::where('partenza', '>=', $now)->get();
    }
}
