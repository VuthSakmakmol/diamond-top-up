<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;  // Add this line

class DiamondController extends Controller
{
    public function showDiamonds()
    {
        $diamondPackages = [
            ['value' => 78, 'price' => 1.50, 'bonus' => 8],
            ['value' => 102, 'price' => 2.00, 'bonus' => 10],
            // Add more packages here...
        ];

        return view('diamonds', compact('diamondPackages'));  // Ensure the view is being returned
    }

    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
{
    // Log incoming request data
    Log::info('Request Data:', $request->all());

    // Validate the form inputs
    $validated = $request->validate([
        'field_one' => 'required|string|max:255',
        'field_two' => 'required|string|max:255',
        'price'     => 'required|numeric',  // Make sure the 'price' field is present
    ]);

    // Log validated data
    Log::info('Validated Data:', $validated);

    // Insert data into the database
    try {
        $formData = \App\Models\FormData::create([
            'field_one' => $validated['field_one'],
            'field_two' => $validated['field_two'],
            'price'     => $validated['price'],  // Insert the price
        ]);

        // Log successful insertion
        Log::info('Data inserted successfully:', $formData);
        return redirect()->back()->with('success', 'Form submitted successfully!');
    } catch (\Exception $e) {
        // Log any error that happens during insertion
        Log::error('Error inserting data: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Failed to submit form.');
    }
}

}
