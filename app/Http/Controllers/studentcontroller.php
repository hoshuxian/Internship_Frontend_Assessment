<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class studentcontroller extends Controller
{

//REST API (POSTMAN) api.php as middleware

     /*public function store(){
        return response()->json(student::all(),200);
    }

    public function getid($id){
        $var = student::find($id);
        if(is_null($var)){
            return response()->json(['message'=> 'Profile not found!'],404);
        }
        return response()->json($var::find($id),200);
    }

    public function add(Request $req){
        $var = student::create($req->all());
        return response($var,201);
    }

    public function update(Request $req,$id){
        $var = student::find($id);
        if(is_null($var)){
            return response()->json(['message'=> 'Profile not found!'],404);
        }
        $var->update($req->all());
        return response($var,200);
    }

    public function delete(Request $req,$id){
        $var = student::find($id);
        if(is_null($var)){
            return response()->json(['message'=> 'Profile not found!'],404);
        }
        $var->delete();
        return response()->json(['message'=> 'Profile successfully deleted!'],404);
    }*/

    // AJAX crud
    public function main(){
        return view('student.main');
    }

    public function dashboard(){
        return view('index');
    }

    public function index(Request $request){

        $student=student::get();
        if($request->ajax()){
            $allData = DataTables::of($student)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = '<a href="javascript:void(0)" data-tonggle="tooltip" data-id="'.$row->id.'"data-original-title="Edit" class="edit btn btn-primary btn-sm editStudent">Edit</a>';
                $btn.= '<a href="javascript:void(0)" data-tonggle="tooltip" data-id="'.$row->id.'"data-original-title="Delete" class="edit btn btn-danger btn-sm deleteStudent" onclick="alert">Delete</a>';
            return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
            return $allData;
        }
        return view('/student/main');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|unique:students',
        ]);
        if ($validator->fails()) {
            // you can return a custom message if needed
            return response()->json(['success' => false, 'errors' => $validator->errors()->all()]);
        }
        student::updateOrCreate(
            ['id'=>$request->id],
            ['name'=>$request->name,
             'email'=>$request->email,
             'gender'=>$request->gender,
             'status'=>$request->status]
        );
        return response()->json(['message'=> 'Profile successfully added !'],200);
    }

    public function destroy($id){
        student::find($id)->delete();
        return response()->json(['message'=> 'Profile successfully deleted!']);
    }

    public function edit($id){
        $student = student::find($id);
        if(is_null($student)){
            return response()->json(['message'=> 'Profile not found!'],404);
        }
        return response()->json($student::find($id),200);
    }

    public function update(Request $request){


        student::updateOrCreate(
            ['id'=>$request->id],
            ['name'=>$request->name,
             'email'=>$request->email,
             'gender'=>$request->gender,
             'status'=>$request->status]
        );
        return response()->json(['message'=> 'Profile successfully updated !'],200);
    }
}