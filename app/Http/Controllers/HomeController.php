<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User; 

class HomeController extends Controller
{
    //
    public function add()
    {
        return view('add-student');
    } 
    public function store(Request $request)
    {
        request()->validate(['name'=>'required',
        'phone_number'=>'required',
        'gender'=>'required']);
        $student=new Student;
        $student->name=request('name');
        $student->phone_number=request('phone_number');
        $student->gender=request('gender');
        $student->save();
        return redirect('all-student');    
    } 

    public function display()
    {
        $students=Student::all();
        return view('all-students',compact('students'));
    }
    public function edit(String $id)
    {
        $student=Student::find($id);
        return view('edit-students',compact('student'));
    }
    public function update(String $id,Request $request)
    {
        $student=Student::find($id);
        $student->name=request('name');
        $student->phone_number=request('phone_number');
        $student->gender=request('gender');
        $student->save();

        return redirect('all-student');
    }
    public function delete(String $id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('all-student');
    }
    public function register()
    {
        return view('register');
    }
    public function StoreUser()
    {
        request()->validate(['name'=>'required','email'=>'required|email',
        'phone'=>'required','address'=>'required','password'=>'required|min:5']);
        $user=new User;
        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');
        $user->phone=request('phone');
        $user->address=request('address');
        $user->save();
        return redirect('login');
    }
    public function login()
    {
        return view('login');
    }
    public function auth()
    {
        request()->validate(['email'=>'required','password'=>'required']);
        if(auth()->attempt(['email'=>request('email'),'password'=>request('password')]))
        {$a='success';
            return redirect('home');
        }
        return redirect('login')->withErrors('Wrong Email or password');

    }
    public function home()
    {
        return view('home');
    }


}