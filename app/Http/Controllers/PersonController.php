<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function demo(){
        $names='Abid';
        $emails='abid@gmail.com';
        return view('welcome',['name'=>$names,'email'=>$emails]);
    }
    
    public function create(){
        return view('crud.create');
    }
    public function view(){
        $people = DB::table('people')->get();
        return view('crud.view',['persons'=>$people]);
    }

    public function store(Request $req){
        $name = $req->name;
        $email = $req->email;
        $city = $req->city;
        $birth_date = $req->dob;
        $salary = $req->salary;
        $gender = $req->gender;
        $active_status =intval($req->active_status);
        $hobby = json_encode($req->hobby);

        DB::table('people')->insert([
            'name'=>$name,
            'email'=>$email,
            'city'=>$city,
            'birth_date'=>$birth_date,
            'salary'=>$salary,
            'gender' =>$gender,
            'active_status'=>$active_status,
            'hobby'=>$hobby,
        ]);
        return redirect('view');
    }
}
