<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->format('Y-m-d');

        $treni = DB::table('treni')->where('data_partenza', '>=', $today)->orderBy('data_partenza')->get();

        return view('welcome', ['treni' => $treni]);
    }
}
