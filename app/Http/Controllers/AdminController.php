<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    
    public function index(){
        return view('admin/admin');
    }
    public function create(){
        return view('admin/create');
    }
    public function input(){
        $products=Product::all();
        $data =['products'=>$products];
        return view('admin/index')->with($data);
    }
    public function insertdata(Request $request){
        Product::create($request->all());
        return redirect()->route('index')->with('success','data berhasil ditambahkan');
    }
    public function edit($id){
        $data=Product::find($id);
        return view('admin/edit',compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data= Product::find($id);
        $data->update($request->all());
        return redirect()->route('index')->with('success','data berhasil diperbarui');
    }
    public function delete($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('index')->with('success','data berhasil dihapus');

    }
}
