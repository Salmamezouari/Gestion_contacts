<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // ✅ Version avec recherche
    public function index(Request $request)
    {
        $query = Contact::query();

        // Recherche si un mot-clé est fourni
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('nom', 'like', "%$search%")
                  ->orWhere('prenom', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%");
        }

        $contacts = $query->get();

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:contacts',
            'telephone' => 'nullable',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact ajouté !');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
            'telephone' => 'nullable',
        ]);

        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact mis à jour !');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact supprimé !');
    }
}
