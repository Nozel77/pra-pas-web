<?php

namespace App\Http\Controllers;

use App\Models\Ongoing;
use Illuminate\Http\Request;

class OngoingController extends Controller
{
    public function index()
    {
        return view('Ongoing.ongoing',[
            'ongoing' => Ongoing::all()
        ]);
    }

    public function detailOngoing($id)
    {
        return view('Ongoing.detail',[
            'ongoing' => Ongoing::find($id)
        ]);
    }
}
