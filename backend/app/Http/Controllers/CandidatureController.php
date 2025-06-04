<?php

namespace App\Http\Controllers;

use App\Models\demande_candidatures;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function store(Request $request)
    {

        // Valider les champs entrants
        dd($request->all(), $request->file());
        $validatedData = $request->validate([
            'name'                => 'required|string|max:255',
            'email'               => 'required|email',
            'phone'               => 'required',
            'address'             => 'required|string|max:255',
            'niveau_etude'        => 'required|string|max:255',
            'niveau_experience'   => 'nullable|string|max:255',
            'langue'              => 'required|string|max:50',
            'offre_id'            => 'required|exists:offers,id', // Vérifie que l'offre existe
            'user_id'             => 'nullable|exists:users,id',
            'cv'                  => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'photo_cni'            => 'nullable|file|mimes:jpeg,jpg,png|max:2048',
            'plan'                => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'lettre_motivation'    => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'lettre_recommandation'=> 'nullable|file|mimes:pdf,doc,docx|max:2048',

        ]);

        // Gestion des uploads et ajout du chemin dans $validatedData
        if ($request->hasFile('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('uploads/cv', 'public');
        }
        if ($request->hasFile('photo_cni')) {
            $validatedData['photo_cni'] = $request->file('photo_cni')->store('uploads/photo_cni', 'public');
        }
        if ($request->hasFile('plan')) {
            $validatedData['plan'] = $request->file('plan')->store('uploads/plan', 'public');
        }
        if ($request->hasFile('lettre_motivation')) {
            $validatedData['lettre_motivation'] = $request->file('lettre_motivation')->store('uploads/lettres_motivation', 'public');
        }
        if ($request->hasFile('lettre_recommandation')) {
            $validatedData['lettre_recommandation'] = $request->file('lettre_recommandation')->store('uploads/lettres_recommandation', 'public');
        }

        // Créer la candidature
        $candidature = demande_candidatures::create($validatedData);

        return response()->json([
            'message' => 'Candidature soumise avec succès.',
            'candidature' => $candidature,
        ], 201);
    }
}
