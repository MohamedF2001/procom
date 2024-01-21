<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Client;
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
        return view('home', ["msg" => "I am user role"]);
    }

    public function editorHome()
    {
        return view('home', ["msg" => "I am Editor role"]);
    }

    //page d'accueil après authentification
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

    //formulaire d'ajout de catégorie
    public function homeCat()
    {
        return view('addcat');
    }
    //formulaire d'ajout de produit
    public function homeFast()
    {
        $categories = Categorie::pluck('nomCat', 'id');
        //dd($categories);
        return view('addfast', [
            'categories' => $categories,
        ]);
    }
    //formulaire d'ajout de commande
    public function homeCommande()
    {
        return view('addcom');
    }
    //formulaire d'ajout de l'utlisateur
    public function homeClient()
    {
        return view('addcli');
    }

    public function listes()
    {
        return view('liste');
    }

    //ajouter une catégorie
    public function store(Request $request)
    {
        $categorie = new Categorie();
        $categorie->nomCat = $request->input('nomCat');
        $categorie->descriptionCat = $request->input('descriptionCat');
        //dd($request);
        if ($request->hasfile('imageCat')) {
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
        return view('addcat')->with('categorie', $categorie);
    }

    //ajouter un produit
    public function storeFast(Request $request)
    {
        $fastfood = new Fastfood();
        $fastfood->nomFast = $request->input('nomFast');
        $fastfood->descriptionFast = $request->input('descriptionFast');
        $fastfood->prixFast = $request->input('prixFast');
        $fastfood->qtiteFast = $request->input('qtiteFast');
        $fastfood->qtitePanierFast = $request->input('qtitePanierFast');
        $fastfood->categories_id = $request->input('category');
        if ($request->hasfile('imageFast')) {
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
        $categories = Categorie::pluck('nomCat', 'id');
        //dd($categories);
        return view('addfast', [
            'fastfoods' => $fastfoods,
            'categories' => $categories,
        ]);
    }

    public function storeCommande(Request $request)
    {
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
        return view('addcom')->with('commande', $commande);
    }

    //afficher la listes des catégories
    public function displayCat()
    {
        $categories = Categorie::all();
        return view('listeCat')->with('categories', $categories);
    }

    //afficher la listes des produits fastfood
    public function displayFast()
    {
        $fastfoods = FastFood::all();
        $categoriess = Categorie::all();
        return view('listeFast')->with('fastfoods', $fastfoods);
    }

    //afficher la listes des commandes
    public function displayCom()
    {
        $commandes = Commande::all();
        return view('listCom')->with('commandes', $commandes);
    }

    //afficher la liste de mes futures
    public function displayCli()
    {
        $clients = Client::all();
        return view('listCli')->with('clients', $clients);
    }

    //ajouter une commande
    public function addCommande(Request $request)
    {
        $client = $request->input('client');
        $prenom = $request->input('prenom');
        $article = $request->input('article');
        $dansLePanier = $request->input('dansLePanier');
        $prixU = $request->input('prixU');
        $tel = $request->input('tel');

        $commande = new Commande();
        $commande->client = $client;
        $commande->prenom = $prenom;
        $commande->article = $article;
        $commande->dansLePanier = $dansLePanier;
        $commande->prixU = $prixU;
        $commande->tel = $tel;

        if ($commande->save()) {
            return view('addcom')->with('commande', $commande);
            /*  return response()->json([
                "success" => true,
            ]); */
        } else {
            return response()->json([
                "error" => false,
            ]);
        }
    }

    //ajouter un client
    public function addCli(Request $request)
    {
        $nomCli = $request->input('nomCli');
        $prenomCli = $request->input('prenomCli');
        $telCli = $request->input('telCli');

        $client = new Client();
        $client->nomCli = $nomCli;
        $client->prenomCli = $prenomCli;
        $client->telCli = $telCli;

        if ($client->save()) {
            return view('addcli')->with('client', $client);
            /*  return response()->json([
                "success" => true,
            ]); */
        } else {
            return response()->json([
                "error" => false,
            ]);
        }
    }

    //supprimer une commande
    public function destroyCommande($id)
    {
        $commandes = Commande::find($id); // Récupérer l'élément à supprimer

        if ($commandes === null) {
            return back()->with('error', 'La commande demandée est introuvable.');
        }
        $commandes->delete();
        return redirect()->route('admin.listeCom');
    }

    //mettre a jour le status de la commande
    public function updateStateCommande($id)
    {
        $commandes = Commande::find($id);

        if ($commandes) {
            $commandes->etatCommande = !$commandes->etatCommande; // Inversion de la valeur actuelle
            $commandes->save();
            // Retourner la réponse ou effectuer d'autres actions si nécessaire
            //return response()->json(['success' => true, 'message' => 'État de la commande mis à jour avec succès']);
            return redirect()->route('admin.listeCom');
        }
        return response()->json(['success' => false, 'message' => 'Commande introuvable']);
    }

    //supprimer un fastfood
    public function destroyFast($id)
    {
        $fastfoods = FastFood::find($id); // Récupérer l'élément à supprimer

        if ($fastfoods === null) {
            return back()->with('error', 'La commande demandée est introuvable.');
        }
        $fastfoods->delete();
        return redirect()->route('admin.listeFast');
    }

    //supprimer une catégorie
    public function destroyCat($id)
    {
        $categories = Categorie::find($id); // Récupérer l'élément à supprimer

        if ($categories === null) {
            return back()->with('error', 'La commande demandée est introuvable.');
        }
        $categories->delete();
        return redirect()->route('admin.listeCat');
    }

    // -----Listes json------------
    public function getCommandesJson()
    {
        $commandes = Commande::all();
        return response()->json($commandes);
    }
    public function getFastFoodsJson()
    {
        $fastfoods = FastFood::all();
        return response()->json($fastfoods);
    }
    public function getCategoriesJson()
    {
        $categories = Categorie::all();
        return response()->json($categories);
    }
    public function getClientsJson()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    public function templates()
    {
        return view("admin.index");
    }
}
