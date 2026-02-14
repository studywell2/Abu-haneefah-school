<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use App\Mail\AdmissionReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdmissionController extends Controller
{
    // Handle form submission
    public function submit(Request $request)
    {
        // Validate form
        $request->validate([
            'student_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'grade' => 'required|string',
            'parent_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'documents.*' => 'required|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $documentPaths = [];

        // Handle file uploads
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $doc) {
                // Save file and get the path
                $path = $doc->store('admissions_documents');
                $documentPaths[] = $path;
            }
        }

        // Save data to database
        $admission = Admission::create([
            'student_name' => $request->student_name,
            'dob' => $request->dob,
            'grade' => $request->grade,
            'parent_name' => $request->parent_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'documents' => $documentPaths, // stored as JSON automatically
        ]);

        // Send email to yourself (school admin)
        Mail::to('abuaneefah330@gmail.com')->send(new AdmissionReceived($admission));

        // Redirect to Thank You page
        return redirect()->route('admissions.thankyou');
    }

    // Show thank you page
    public function thankyou()
    {
        return view('pages.admissions-thankyou');
    }
}
