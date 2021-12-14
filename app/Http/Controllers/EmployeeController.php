<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $categorys = Category::with('employees');
        $employees = Employee::with('categories')->get();
        return view('welcome',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categorys = Category::all();
        return view('create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            // 'category_id' =>'required',
            'name'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'dob'=>'required',
            'CMND'=>'required',
            'email'=>'required',
            'address'=>'required',
        ]);
            $employee = new Employee();
            $employee->category_id = 1;
            $employee->name = $request->input('name');
            $employee->gender = $request->input('gender');
            $employee->phone = $request->input('phone');
            $employee->dob = $request->input('dob');
            $employee->CMND = $request->input('CMND');
            $employee->email = $request->input('email');
            $employee->address = $request->input('address');
            $employee->save();
        return redirect()->route('show.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $categorys = Category::all();
        $employee = Employee::findOrFail($id);
        return view('edit',compact('employee','categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $employee = Employee::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'category_id' =>'required',
            'name'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'dob'=>'required',
            'CMND'=>'required',
            'email'=>'required',
            'address'=>'required',
        ]);
        if ($validator->fails()) {
            dd('loi');
        }else{
            $employee->category_id = $request->category_id;
            $employee->name = $request->input('name');
            $employee->gender = $request->input('gender');
            $employee->phone = $request->input('phone');
            $employee->dob = $request->input('dob');
            $employee->CMND = $request->input('CMND');
            $employee->email = $request->input('email');
            $employee->address = $request->input('address');
            $employee->save();
        }
        return redirect()->route('show.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('show.index');
    }
    
    public function search(Request $request)
    {
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Employee::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        dd($posts);
    }
}
