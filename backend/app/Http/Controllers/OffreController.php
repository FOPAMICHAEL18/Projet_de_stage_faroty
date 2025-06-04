<?php

namespace App\Http\Controllers;

use App\Models\session_offres;
use App\Models\offres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    // Méthode pour récupérer les offres (déjà créée)
    public function index()
    {
        return response()->json(offres::all());
    }

    // Méthode pour créer un nouvel item
    public function store(Request $request)
    {
        // Récupérer l'utilisateur authentifié
        $user = Auth::User();

        // Vérifier que l'utilisateur est bien connecté ET que son rôle est 'admin'
        if (!$user || $user->role !== 'admin') {
            // Si ce n'est pas un admin, renvoyer une réponse avec un code d'erreur 403 (Accès interdit)
            return response()->json(['message' => "Accès interdit"], 403);
        }

        // Valider les champs entrants
        $validatedData = $request->validate([
            'name_offre'       => 'required|string|max:255',
            'delete_offre'     => 'required|date',
            'metier'           => 'required|string',
            'contrat'          => 'required|string',
            'duree_contrat'    => 'required|string',
            'niveau_etude'     => 'required|string',
            'niveau_experience'=> 'required|string',
            'localisation'     => 'required|string',
            'description'      => 'required|string',
            'profil'           => 'required|string',
            'language'         => 'required|string',
        ]);

        // Fusionner les données validées avec le user_id provenant de l'admin connecté
        $data = array_merge($validatedData, [
            'user_id' => $user->id // Utilise l'id de l'utilisateur connecté, ici l'admin
        ]);

        // Créer l'enregistrement dans la table offres
        $offre = Offres::create($data);

        return response()->json([
            'message' => 'Offre créée avec succès.',
            'offre'   => $offre
        ], 201);



    }

}
