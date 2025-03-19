<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReceptionistController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $receptionists = User::where('role', 'receptionist')->get();
        return view('admin.receptionists.index', compact('receptionists'));
    }

    public function create()
    {
        return view('admin.receptionists.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'receptionist',
            'status' => 'active',
        ]);

        return redirect()->route('admin.receptionists.index')
            ->with('success', 'Réceptionniste créé avec succès');
    }

    public function toggleStatus(User $user)
    {
        $user->status = $user->status === 'active' ? 'suspended' : 'active';
        $user->save();

        return back()->with('success', 'Statut mis à jour');
    }

    public function resetPassword(User $user)
    {
        $newPassword = 'password123'; // Mot de passe temporaire
        $user->password = Hash::make($newPassword);
        $user->save();

        return back()->with('success', 'Mot de passe réinitialisé');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Réceptionniste supprimé');
    }
}