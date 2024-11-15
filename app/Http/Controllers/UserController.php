<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Flasher\Toastr\Laravel\Facade\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

use function Laravel\Prompts\alert;

class UserController extends Controller
{


    public function upload(){

        return view('home');

      }


    public function store(Request $request){

       $data= new Product();
        // video upload
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file =$filename;
       // other data upload
         $data->name=$request->name;
         $data->dec=$request->dec;
       // all data save
        $data->save();
        // return redirect()->back();
        return view('home');

    }


    public function show (){

       $data= Product::all();
       return view('Dispaly',compact('data'));

    }

    public function detail ($id){

        $data= Product::find($id);
        return view('detail',compact('data'));

     }
     public function delete ($id){
        $data= Product::find($id);
        $data->delete();
        return redirect()->back();

     }



}
