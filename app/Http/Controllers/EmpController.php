<?php

namespace App\Http\Controllers;
use App\Models\Emp;
use DB;

use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function index(){
        $infos =  Emp::all();
        return view('emps.index',compact('infos'));
    }
       public function showq(){
        $query =  DB::select('SELECT name from emps where salary
         <(Select salary/2 from emps where manager_id IS NULL)');
        return view('emps.showq',compact('query'));
    }

     public function create(){
      return view('emps.create');

    }
    public function store(Request $request){

         $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'salary' => 'required',
            'manager_id' => 'required',
            
        ]);
         $post = new Emp;
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->salary = $request->input('salary');
        $post->manager_id = $request->input('manager_id');
     
        $post->save();

        return redirect('/emps')->with('success','User Created');

      
    }
}
