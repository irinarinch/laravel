<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('student.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($group)
    {
        $data = request()->validate([
            'surname' => 'required|max:255',
            'name' => 'required|max:255',            
        ]);
        $data['group_id'] = $group;
        Student::create($data);
       
        return redirect()->route('groups.show', $group);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, Student $student)
    {      
        return view('student.show', compact('group', 'student'));
    }
}
