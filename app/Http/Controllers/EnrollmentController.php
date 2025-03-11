<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        return response()->json(Enrollment::all());
    }

    public function show($id)
    {
        return response()->json(Enrollment::findOrFail($id));
    }

    public function store(Request $request)
    {
        $enrollment = Enrollment::create($request->validate([
            'user_id' => 'required|exists:users,id',
            'group_id' => 'required|exists:groups,id',
            'course_id' => 'required|exists:courses,id'
        ]));

        return response()->json($enrollment, 201);
    }

    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($request->all());
        return response()->json($enrollment);
    }

    public function destroy($id)
    {
        Enrollment::destroy($id);
        return response()->json(['message' => 'Enrollment deleted']);
    }
}
