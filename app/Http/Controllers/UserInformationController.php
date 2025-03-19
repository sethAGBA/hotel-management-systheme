<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInformation;

class UserInformationController extends Controller
{
    // Afficher le formulaire
    public function create()
    {
        return view('user-information');
    }

    // Traiter la soumission du formulaire
    public function store(Request $request)
{
    // Valider les données
    $validatedData = $request->validate([
        'surname' => 'required|string|max:255',
        'given_names' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        // 'birth_date' => 'required|date',
        // 'birth_place' => 'required|string|max:255',
        // 'nationality' => 'required|string|max:255',
        // 'profession' => 'required|string|max:255',
        // 'address' => 'required|string|max:255',
        // 'travel_motive' => 'required|string|max:255',
        // 'coming_from' => 'required|string|max:255',
        // 'going_to' => 'required|string|max:255',
        'room_type' => 'required|string|max:255',
        'room_price' => 'required|numeric',
        'number_of_days' => 'required|integer|min:1',
    ]);

    // Calculer le coût total
    $validatedData['total_cost'] = $validatedData['room_price'] * $validatedData['number_of_days'];

    // Enregistrer les données dans la base de données
    UserInformation::create($validatedData);

    // Rediriger vers la vue imprimable avec les données
    return redirect()->route('user-information.printable')->with('data', $validatedData);
}
    // Afficher la vue imprimable
    public function printable()
    {
        // Récupérer les données de la session
        $data = session('data');

        // Afficher la vue imprimable
        // return view('printable-form', compact('data'));
        return view('user-information-printable', compact('data'));
    }
}