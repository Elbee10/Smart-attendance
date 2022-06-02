<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Student;
use Hash;


class StudentController extends Controller
{

    public function student(){
        return view('auth.studentReg');
    }

    public function loginStudent(){
        return view('auth.loginStudent');
    }

    public function studentAccess(Request $request){

        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $student = Student::where('username', '=', $request->username)->first();
       
        if ($student) {
            if (Hash::check($request->password, $student->password)) {
                $request->session()->put('loginId', $student->id);
                return redirect('dashboard-student');
                
            }else{
                return back()->with('fail', 'password no match')->withInput();
            }
        }else{
            return back()->with('fail', 'email no match')->withInput();
        }
    }

    public function studentReg(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'studentID'=>'required',
            'email'=>'required|email',
            'username'=>'required ',
            'password'=>'required | min:5',
            'repeat_password'=>'required ',
            'address'=>'required',
            'dob'=>'required'
        ]);
        $student = new Student();

        if (!$student->where('email',$request->input('email'))->exists() && !$student->where('username',$request->input('username'))->exists() && !$student->where('studentID',$request->input('studentID'))->exists()) {
            #$dep = Department::firstOrCreate("department_name", $request->input('deparment'));

            $department = new Department;
            
            if (!$department->where('department_name', $request->department)->exists()) {
                $department->department_name = $request->department;
                $department->save();
                $student->first_name = $request->first_name;
                $student->last_name = $request->last_name;
                $student->studentID = $request->studentID;
                $student->email = $request->email;
                $student->username = $request->username;
                $student->password = Hash::make($request->password);
                $student->repeat_password = Hash::make($request->repeat_password);
                $student->address = $request->address;
                $student->dob = $request->dob;
                $student->department_id = $request->department;
                $student->department()->associate($department);
                $result = $student->save();
    
                if ($result) {
                    return back()->with('success', 'added successfully');
                }else{
                    return back()->with('fail', 'not added successfully');
                }
                
            }else{
               $department = Department::where('department_name', '=', $request->department)->first();
               $student->first_name = $request->first_name;
               $student->last_name = $request->last_name;
               $student->studentID = $request->studentID;
               $student->email = $request->email;
               $student->username = $request->username;
               $student->password = Hash::make($request->password);
               $student->repeat_password = Hash::make($request->repeat_password);
               $student->address = $request->address;
               $student->dob = $request->dob;
               $student->department_id = $request->department;
               $student->department()->associate($department);
               $result = $student->save();
   
               if ($result) {
                   return back()->with('success', 'added successfully');
               }else{
                   return back()->with('fail', 'not added successfully');
               }
            }
           



        }else{
            return back()->with('fail', 'Email or username already taken')->withInput();
        }

    }
}
