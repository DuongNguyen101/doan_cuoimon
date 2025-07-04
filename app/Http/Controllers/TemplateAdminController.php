<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Exception;
use Illuminate\Http\Request;

class TemplateAdminController extends Controller
{
    //view dashboard and extract product categories
    public function dashboard(){
        $data = [
            'categories'=>Categories::get()
        ];
        return view('template/admin/dashboard')->with($data);
    }
    //extract product of each category detail
     public function productlist($id){
        $data = [
            'products'=>Products::where('category_id','=',$id)->orderBy('created_at','desc')->get(),
            'category'=>Categories::find($id)
        ];
        return view('template/admin/productlist')->with($data);
    }
    //load form cap nhap data
     public function loadformcate($id){
        $data = [
            'category'=>Categories::find($id),
            'id'=>$id
        ];
        return view('template/admin/formproduct')->with($data);
    }
     public function loadformcate_add(){
 
        return view('template/admin/formproduct');
    }
    //cap nhat danh muc
      public function updatecategories( Request $request,$id=null)
      
      {
        try{

            $Category = [
                'category_id'=> $request->post('category_id'),
                'name'=> $request->post('name'),
                'description'=> $request->post('description'),
                'created_at'=> $request->post('created_at'),
                'updated_at'=> $request->post('updated_at')
            ];
            if($request->post('category_id')){
            Categories::where('category_id',$request->post('category_id'))->update($Category);
            session()->flash('msg','Sua Danh Muc Thanh cong');
            return redirect('template/admin/dashboard');
            }else{
                Categories::create($Category);
            session()->flash('msg','Them Danh Muc Thanh cong');
            return redirect('template/admin/dashboard');
            }
        }catch(Exception $ex){
            session()->flash('msg','That bai');
            return redirect('/template/admin/dashboard');
        }
    }
      //cap nhat danh muc
      public function deletecategories( Request $request, $id){
        $data = [
            'category'=>Categories::find($id),
            'id'=>$id
        ];
        return view('template/admin/formproduct')->with($data);
    }


    public function icon(){
        return view('template/admin/icon');
    }

    public function maps(){
        return view('template/admin/maps');
    }

    public function notifications(){
        return view('template/admin/notifications');
    }

    public function user(){
        return view('template/admin/user');
    }

    public function table(){
        return view('template/admin/table');
    }

    public function typography(){
        return view('template/admin/typography');
    }

    public function upgrade(){
        return view('template/admin/upgrade');
    }
}
