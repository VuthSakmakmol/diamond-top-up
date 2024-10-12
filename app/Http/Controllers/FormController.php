<?php

namespace App\Http\Controllers;
use App\Models\FormData;
use Illuminate\Http\Request;

class FormController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('form');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'field_one' => 'required|string|max:255',
            'field_two' => 'required|string|max:255',
        ]);

        // Create a new entry in the database
        FormData::create([
            'field_one' => $validated['field_one'],
            'field_two' => $validated['field_two'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
