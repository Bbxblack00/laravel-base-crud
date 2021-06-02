<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospite;

class HotelController extends Controller
{
    public function index() {
        $ospiti = Ospite::all();

        // dd($ospiti);

        return view('pages.home', compact('ospiti'));
    }
}
