<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //open to create new student

    public function create()
    {
        return view('student.create');
    }

    // store student details

    public function store(StudentRequest $request)
    {
        $data = $request->validated();

        if ($student = Student::create($data)) {
            return redirect()->route('home')->with('success_message', __('Student  was successfully added.'));
        }
        return back()->withInput()->with('error_message', __('Unexpected error occurred while trying to process your request.'));
    }

    // open student edit form

    public function edit(Request $request)
    {
        $student = Student::where('id', $request->id)->first();
        return view('student.edit', compact('student'));
    }

    //update student details

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_name' => 'required',
            'fathers_name' => 'required',
            'dob' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pin' => 'required|integer',
            'phone' => 'required|integer',
            'class' => 'required|integer',
            'marks' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $student = Student::find($request->id);

        $student->update([
            'student_name' => $request->student_name,
            'fathers_name' => $request->fathers_name,
            'dob' => $request->dob,
            'address' => $request->address,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'pin' => $request->pin,
            'phone' => $request->phone,
            'class' => $request->class,
            'marks' => $request->marks,
            'updated_at' => now()
        ]);
        return response()->json(['success_message' => 'Student Details was successfully updated']);
    }

    // Display the student details.

    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }
}
