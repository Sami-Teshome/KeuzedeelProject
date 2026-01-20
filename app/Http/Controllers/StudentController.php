<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Keuzedeel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class StudentController extends Controller
{
    // Alle studenten tonen
    public function index()
    {
        $students = Student::with('keuzedeel')->get(); // haal ook het keuzedeel op
        return view('students.index', compact('students'));
    }

    // Formulier tonen
    public function create()
    {
        $keuzedelen = Keuzedeel::all(); // alle keuzedelen ophalen
        return view('students.create', compact('keuzedelen'));
    }

    // Opslaan van nieuwe student
    public function store(Request $request)
    {
         
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'studentnummer' => 'required|unique:students,studentnummer',
            'password' => 'required|string|min:4|confirmed',
            'keuzedeel_id' => 'required|exists:keuzedelen,id', // ID van het gekozen keuzedeel
        ]);
         
        
        // return "Test";
      $validated['password'] = Hash::make($validated['password']);

      
         Student::create($validated);

         
        
         return "syccess";

        // return redirect('/student')->with('success', 'Student ingeschreven met keuzedeel!');
    }
}

