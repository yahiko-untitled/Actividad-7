<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return response()->json(Course::all());
    }

    public function show($id)
    {
        return response()->json(Course::findOrFail($id));
    }

    public function store(Request $request)
    {
        $course = Course::create($request->validate([
            'course_key' => 'required|unique:courses',
            'name' => 'required',
            'cover_image' => 'required',
            'content' => 'required',
            'robotics_kit' => 'required'
        ]));

        return response()->json($course, 201);
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return response()->json($course);
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return response()->json(['message' => 'Course deleted']);
    }
}
