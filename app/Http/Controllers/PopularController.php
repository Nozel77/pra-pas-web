<?php

namespace App\Http\Controllers;

use App\Models\Popular;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Popular.popular', [
            'popular' => Popular::all()
        ]);
    }

    public function detailPopular($id)
    {
        return view('Popular.detail',[
            'popular' => Popular::find($id)
        ]);
    }
}
