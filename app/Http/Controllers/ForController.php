<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;

class ForController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::latest()->paginate(10);
        return view('admin.Formation.index', compact('formations'));
    }

    
    public function user_index()
    {
        $users = User::where('usertype', '!=', 'admin')->paginate(10);
        return view('admin.User.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Formation.create');
    }

    public function user_create()
    {
        return view('admin.User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'lien' => 'required|integer|min:0|max:10',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2044',
        ]);

        $imagePath = $request->file('image')->store('formation_images', 'public');
        $formation = new Formation([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'lien' => $request->input('lien'),
            'image' => asset('storage/' . $imagePath),
        ]);
        $formation->save();

        return redirect()->route('formation.index')->with('success', "Formation <strong>$formation->nom</strong> créé avec succès.");
    }
    
    public function user_store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['nom'] . ' ' . $validatedData['prenom'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);

        return redirect()->route('user.index')->with('success', "Utilisateur <strong>$user->name</strong> créé avec succès.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $for=Formation::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $for=Formation::find($id);
        return view('admin.Formation.edit',['formation'=>$for]);
    }
    
    public function user_edit(User $user)
    {
        return view('admin.User.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'lien' => 'required|integer|min:0|max:10',
            'image' => 'image|mimes:jpeg,png,jpg|max:2044',
        ]);

        $formation = Formation::findOrFail($id);

        if ($request->hasFile('image')) {
            $formation->image = url('storage/' . $request->file('image')->store('formation_images', 'public'));
        }

        // Update other fields
        $formation->nom = $request->input('nom');
        $formation->description = $request->input('description');
        $formation->lien = $request->input('lien');

        $formation->save();

        return redirect()->route('formation.index')->with('success', "Formation <strong>$formation->nom</strong> modifié avec succès.");
    }

    public function user_update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8',
    ]);

    // Retrieve the user by ID
    $user = User::findOrFail($id);

    // Update the user's attributes
    $user->name = $validatedData['nom'] . ' ' . $validatedData['prenom'];
    $user->email = $validatedData['email'];

    // Update the password if provided
    if (!empty($validatedData['password'])) {
        $user->password = $validatedData['password'];
    }

    // Save the changes
    $user->save();

    return redirect()->route('user.index')->with('success', "Utilisateur <strong>$user->name</strong> modifié avec succès.");
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($id)
    {
        $for=Formation::find($id);
        $for->delete();
        return redirect()->route('formation.index')->with('success', "Formation <strong>$for->nom</strong> supprimé avec succès.");;
    }
    
    public function user_destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', "Utilisateur <strong>$user->name</strong> supprimé avec succès.");
    }
}
