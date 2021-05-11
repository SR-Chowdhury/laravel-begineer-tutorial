<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function allStudent() {
        $student = Student::all();
        return view('clean-blog.student.allStudent', compact('student'));
    }

    public function createStudent() {
        return view('clean-blog.student.createStudent');
    }

    public function storeStudent(Request $request) {
        $validate = $request->validate([
            'std_name' => 'required|max:100|min:5',
            'std_email' => 'required',
            'std_phone' => 'required',
        ]);

        $student = new Student;
        $student->std_name = $request->std_name;
        $student->std_email = $request->std_email;
        $student->std_phone = $request->std_phone;

        // return response()->json($student);

        $student->save();
        if ($student) {
            $notification = array(
                'message' => 'Alhamdulillah, Student data is successfully inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('student')->with($notification);
            // return Redirect()->back()->with($notification);
        }
        else {
            $notification = array(
                'message' => 'Ops! something went wrong',
                'alert-type' => 'error'
            );
            return Redirect()->route('student')->with($notification);
        }
    }

    public function editStudent($id) {
        $editData = Student::findorfail($id);
        return view('clean-blog.student.editStudent', compact('editData'));
    }

    public function updateStudent(Request $request, $id) {
        $validate = $request->validate([
            'std_name' => 'required|max:100|min:5',
            'std_email' => 'required',
            'std_phone' => 'required',
        ]);

        $student = Student::findorfail($id);
        $student->std_name = $request->std_name;
        $student->std_email = $request->std_email;
        $student->std_phone = $request->std_phone;
        $student->save();
        if ($student) {
            $notification = array(
                'message' => 'Alhamdulillah, Student data is successfully Updated',
                'alert-type' => 'success'
            );
            return Redirect()->route('student')->with($notification);
            // return Redirect()->back()->with($notification);
        }
        else {
            $notification = array(
                'message' => 'Ops! something went wrong',
                'alert-type' => 'error'
            );
            return Redirect()->route('student')->with($notification);
        }
    }

    public function deleteStudent($id) {
        $student = Student::findorfail($id);
        $student->delete();
        if ($student) {
            $notification = array(
                'message' => 'Alhamdulillah, Student data is successfully Delete',
                'alert-type' => 'success'
            );
            return Redirect()->route('student')->with($notification);
            // return Redirect()->back()->with($notification);
        }
        else {
            $notification = array(
                'message' => 'Ops! something went Deleted',
                'alert-type' => 'error'
            );
            return Redirect()->route('student')->with($notification);
        }
    }

}
