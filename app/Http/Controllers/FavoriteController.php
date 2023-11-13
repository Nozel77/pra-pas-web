<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Favorite.favorite',[
            'favorite' => Favorite::all()
        ]);
    }

    public function detailFavorite($id)
    {
        return view('Favorite.detail',[
            'favorite' => Favorite::find($id)
        ]);
    }


   
}
