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

    public function ospite($id) {
        $ospite = Ospite::findOrFail($id);

        // dd($ospiti);

        return view('pages.ospite', compact('ospite'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        $validate = $request -> validate([
            'name' => 'max:128',
            'lastname' => 'max:128',
            'date_of_birth' => 'nullable',
            'document_type' => 'max:2',
            'document_number' => 'min:4|max:10'
        ]);

        $ospite = Ospite::create($validate);
        return redirect() -> route('home');
    }
}
