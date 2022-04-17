<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnnonceRequest;
use Illuminate\Http\Request;
use App\Models\Annonce;  

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::latest()->paginate(3);

        // dd($annonces);

        // $annonces = Annonce::join('users','annonces.user_id','=','users.id')->paginate(3);
        

        return view('Annonces.index',[
            "annonces"=>$annonces,
        ]);
    }
    public function store(StoreAnnonceRequest $request)
    {
        $request->user()->annonces()->create($request->validated()); 
        return back();
    }
    public function destroy(Annonce $annonce)
    {
        $this->authorize('delete',$annonce);
        
        $annonce->delete();
        return back();
    } 

}

