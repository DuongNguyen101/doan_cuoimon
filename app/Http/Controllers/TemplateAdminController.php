<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Exception;
use Illuminate\Http\Request;

class TemplateAdminController extends Controller
{
    //view dashboard and extract product categories
    public function dashboard()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'categories' => Categories::get(),
            'products'   => Products::get()
        ];

        return view('template.admin.dashboard')->with($data);
    }
    //extract product of each category detail
     public function productlist($id){
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'products'=>Products::where('category_id','=',$id)->orderBy('created_at','desc')->get(),
            'category'=>Categories::find($id)
        ];
        return view('template/admin/productlist')->with($data);
    }
    //load form cap nhap data
     public function loadformcate($id){
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'category'=>Categories::find($id),
            'id'=>$id
        ];
        return view('template/admin/formproduct')->with($data);
    }
     public function loadformcate_add(){
        $adminName = auth()->user()->name;

 
        return view('template/admin/formproduct')->with('adminName', $adminName);
    }
    //cap nhat danh muc
      public function updatecategories( Request $request,$id=null)
      {

        $adminName = auth()->user()->name;

        try{

            $Category = [
                'adminName'  => $adminName,
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
        $adminName = auth()->user()->name;
    
            Categories::where('category_id',$id)->delete();

        return redirect('template/admin/dashboard')->with('adminName', $adminName);
    }
    //load form thay doi san pham
     public function loadformproduct($id){
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'product'=>Products::find($id),
            'id'=>$id
        ];
        return view('template/admin/formproductdetail')->with($data);
    }
       public function loadformproductadd($id){
        $adminName = auth()->user()->name;
        $data = [
            'adminName'  => $adminName,
            'id'=>$id
        ];
        return view('template/admin/formproductdetail')->with($data);
    }
    //thuc hien hanh dong cap nhat du lieu san pham
    public function updateproduct( Request $request,$id=null)
      
      {
        $adminName = auth()->user()->name;

        try{

            $product = [
                'adminName'  => $adminName,
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
            $adminName = auth()->user()->name;
            Products::where('product_id',$id)->delete();

        return redirect('template/admin/dashboard')->with('adminName', $adminName);
    }

    public function icon()
    {
        $adminName = auth()->user()->name;
        return view('template/admin/icon')->with('adminName', $adminName);
    }

    public function maps(){
        $adminName = auth()->user()->name;

        return view('template/admin/maps')->with('adminName', $adminName);
    }

    public function notifications(){
        $adminName = auth()->user()->name;

        return view('template/admin/notifications')->with('adminName', $adminName);
    }

    public function user(){
        $adminName = auth()->user()->name;

        return view('template/admin/user')->with('adminName', $adminName);
    }

    public function table(){
        $adminName = auth()->user()->name;

        return view('template/admin/table')->with('adminName', $adminName);
    }

    public function typography(){
        $adminName = auth()->user()->name;

        return view('template/admin/typography')->with('adminName', $adminName);
    }

    public function upgrade(){
        $adminName = auth()->user()->name;

        return view('template/admin/upgrade')->with('adminName', $adminName);
    }

}
