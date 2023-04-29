<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\FastFood;
use App\Models\Commande;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('home',["msg"=>"I am user role"]);
    }

    public function editorHome()
    {
        return view('home',["msg"=>"I am Editor role"]);
    }

    public function adminHome()
    {
        //return view('homee',["msg"=>"I am Admin role"]);
        //return view('home',["msg"=>"I am Admin role"]);
        //return view('page');
        //return view('simple');
        //return view('liste');
        //return view('addcat');
        return view('index');
    }

    public function homeCat() {
        return view('addcat');
    }

    public function homeFast() {
        $categories = Categorie::pluck('nomCat','id');
        //dd($categories);
        return view('addfast',[
            'categories'=>$categories,
        ]);
    }

    public function homeCommande() {
        return view('addcom');
    }

    public function listes() {
        return view('liste');
    }

    public function store(Request $request) {
        $categorie = new Categorie();
        $categorie->nomCat = $request->input('nomCat');
        $categorie->descriptionCat = $request->input('descriptionCat');
        //dd($request);
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
        return view('addcat')->with('categorie',$categorie);
    }

    public function storeFast(Request $request) {
        $fastfood = new Fastfood();
        $fastfood->nomFast = $request->input('nomFast');
        $fastfood->descriptionFast = $request->input('descriptionFast');
        $fastfood->prixFast = $request->input('prixFast');
        $fastfood->qtiteFast = $request->input('qtiteFast');
        $fastfood->qtitePanierFast = $request->input('qtitePanierFast');
        $fastfood->categories_id = $request->input('category');
        if($request->hasfile('imageFast')) {
            $file = $request->file('imageFast');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/fastImage', $filename);
            $fastfood->imageFast = $filename;
        } else {
            return $request;
            $fastfood->imageFast = "";
        }
        $fastfood->save();
        $fastfoods = FastFood::all();
        $categories = Categorie::pluck('nomCat','id');
        //dd($categories);
        return view('addfast',[
            'fastfoods'=>$fastfoods,
            'categories'=>$categories,
        ]);
    }

    public function storeCommande(Request $request) {
        $commande = new Commande();
        $commande->client = $request->input('client');
        $commande->prenom = $request->input('prenom');
        $commande->article = $request->input('article');
        $commande->dansLePanier = $request->input('dansLePanier');
        $commande->prixU = $request->input('prixU');
        //dd($request);
        /* if($request->hasfile('imageCat')) {
            $file = $request->file('imageCat');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/catImage', $filename);
            $categorie->imageCat = $filename;
        } else {
            return $request;
            $categorie->imageCat = "";
        } */
        $commande->save();
        return view('addcom')->with('commande',$commande);
    }

    public function displayCat() {
        $categories = Categorie::all();
        return view('listeCat')->with('categories',$categories);
    }

    public function displayFast() {
        $fastfoods = FastFood::all();
        $categoriess = Categorie::all();
        return view('listeFast')->with('fastfoods',$fastfoods);
    }

    public function displayCom() {
        $commandes = Commande::all();
        return view('listCom')->with('commandes',$commandes);
    }

    public function addCommande(Request $request) {
        $commande = new Commande();
        $commande->client->post('client');
        $commande->prenom->post('prenom');
        $commande->article->post('article');
        $commande->dansLePanier->post('dansLePanier');
        $commande->prixU->post('prixU');
        if($commande->save()) {
            return response()->json([
                "success" => true,
            ]);
        } else {
            return response()->json([
                "error" => false,
            ]);
        }
    }

}
