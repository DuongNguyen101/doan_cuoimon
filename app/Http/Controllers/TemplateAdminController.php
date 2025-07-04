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
            'categories'=>Categories::get(),
            'products'=>Products::get()
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
      //xoa danh muc
      public function deletecategories($id){
    
            Categories::where('category_id',$id)->delete();

        return redirect('template/admin/dashboard');
    }
    //load form thay doi san pham
     public function loadformproduct($id){
        $data = [
            'product'=>Products::find($id),
            'id'=>$id
        ];
        return view('template/admin/formproductdetail')->with($data);
    }
       public function loadformproductadd($id){
        $data = [
            'id'=>$id
        ];
        return view('template/admin/formproductdetail')->with($data);
    }
    //thuc hien hanh dong cap nhat du lieu san pham
    public function updateproduct( Request $request,$id=null)
      
      {
        try{

            $product = [
                'product_id'=> $request->post('product_id'),
                'name'=> $request->post('name'),
                'description'=> $request->post('description'),
                'price'=> $request->post('price'),
                'stock'=> $request->post('stock'),
                'category_id'=> $request->post('category_id'),
                'image_url'=> $request->post('image_url'),
                'created_at'=> $request->post('created_at'),
                'updated_at'=> $request->post('updated_at'),
                'status'=> $request->post('status')
            ];
            if($request->post('product_id')){
                Products::where('product_id',$request->post('product_id'))->update($product);
                session()->flash('msg','Sua San Pham Thanh cong');
                return redirect('/template/admin/dashboard/'.($request->post('category_id')) ?? '');
            }else{
                Products::create($product);
                session()->flash('msg','Them San Pham Thanh cong');
                return redirect('/template/admin/dashboard/'.($request->post('category_id') ?? ''));
            }
        }catch(Exception $ex){
            session()->flash('msg','That bai');
            return redirect('/template/admin/dashboard/'.($request->post('category_id') ?? ''));
        }
    }
      public function deleteproduct($id){
    
            Products::where('product_id',$id)->delete();

        return redirect('template/admin/dashboard');
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
