<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{
    //
    public function store(Request $request) {
        $categorie = new Categorie();
        dd($request);
        $categorie->nomCat = $request->input('nomCat');
        $categorie->descriptionCat = $request->input('descriptionCat');
        //$categorie->nomCat = $request->input('nomCat');
        if($request->hasfile('imageCat')) {
            $file = $request->file('imageCat');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/catImage', $filename);
            $categorie->imageCat = $filename;
        } else {
            return $request;
            $categorie->imageCat = "";
        }
        $categorie->save();
        dd($request);
        return view('liste')->with('categorie',$categorie);
    }

    public function catagorieadd() {
        $userId = Auth::check() ? Auth::id() : true;
        dd($userId);
        return view('addcat');
    }

    public function homeCat() {
        return view('addcat');
    }
}
