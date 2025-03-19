<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelForm;

class HotelFormController extends Controller
{
    // Afficher le formulaire
    public function create()
    {
        return view('hotel-form');
    }

    // Traiter la soumission du formulaire
    public function store(Request $request)
    {
        // Valider les données
        $validatedData = $request->validate([
            'surname' => 'required|string|max:255',
            'given_names' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'travel_motive' => 'required|string|max:255',
            'coming_from' => 'required|string|max:255',
            'going_to' => 'required|string|max:255',
            'room_number' => 'required|string|max:255',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'id_number' => 'required|string|max:255',
            'id_issued_on' => 'required|date',
            'id_issued_at' => 'required|string|max:255',
            'visa_number' => 'nullable|string|max:255',
            'visa_issued_on' => 'nullable|date',
            'visa_issued_at' => 'nullable|string|max:255',
            'emergency_contact' => 'required|string|max:255',
            'signature' => 'required|string|max:255',
            'receptionist_name' => 'required|string|max:255',
        ]);

        // Enregistrer les données dans la base de données
        HotelForm::create($validatedData);

        // Rediriger vers la vue imprimable avec les données
        return redirect()->route('hotel-form.printable')->with('data', $validatedData);
    }

    // Afficher la vue imprimable
    public function printable()
    {
        // Récupérer les données de la session
        $data = session('data');

        // Afficher la vue imprimable
        // return view('printable-form', compact('data'));
        return view('hotel-form-printable', compact('data'));
    }
}