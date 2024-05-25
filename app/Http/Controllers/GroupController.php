<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required|unique:groups|max:255',
            'start_from' => 'required',
        ]);
        $today = new \DateTime();
        $data['is_active'] = $data['start_from'] < $today->format('Y-m-d');

        Group::create($data);

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {      
        $students = (Student::where('group_id', $group->id)->get()); 
        return view('group.show', compact('group', 'students'));
    }
}
