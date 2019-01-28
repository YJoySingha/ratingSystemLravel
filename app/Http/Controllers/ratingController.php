<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ratingModel;

class ratingController extends Controller
{
    //

    public function indexRating(Request $request)
    {

      $ratingData = ratingModel::all();

        return view('/welcome', compact('ratingData'));

    } 
    public function storeRating(Request $request)
    {

      $ratingData = new ratingModel([
        'r_name' => $request->get('name'),
        'r_rating'=> $request->get('star')
      ]);

      $ratingData->save();

      return redirect('/');

    }
}
