<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateFromSubmission;

class FormSubmissionController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'problemstatement' => 'required|string|max:255',
            'serialno' => 'required|string|max:255',
            'active' => 'required|string|max:255',
        ]);

        CreateFromSubmission::create([
            'problem_statement' => $request->input('problemstatement'),
            'serial_no' => $request->input('serialno'),
            'active' => $request->input('active'),
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
