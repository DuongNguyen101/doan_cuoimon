<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use App\Models\MenuTabs;
use App\Models\News;
use App\Models\Payment;

use App\Models\Promotions;
use App\Models\Qna;
use App\Models\Review;

use App\Models\UserAddress;

use App\Models\Categories;
use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\Payments;
use App\Models\ProductImage;
use App\Models\Products;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Log;

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
    public function productlist($id)
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'products' => Products::where('category_id', '=', $id)->orderBy('created_at', 'desc')->get(),
            'category' => Categories::find($id)
        ];
        return view('template/admin/productlist')->with($data);
    }
    //load form cap nhap data
    public function loadformcate($id)
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'category' => Categories::find($id),
            'id' => $id
        ];
        return view('template/admin/formproduct')->with($data);
    }
    public function loadformcate_add()
    {
        $adminName = auth()->user()->name;


        return view('template/admin/formproduct')->with('adminName', $adminName);
    }
    //cap nhat danh muc
    public function updatecategories(Request $request, $id = null)
    {

        $adminName = auth()->user()->name;

        try {

            $Category = [
                'category_id' => $request->post('category_id'),
                'name' => $request->post('name'),
                'description' => $request->post('description'),
                'created_at' => $request->post('created_at'),
                'updated_at' => $request->post('updated_at')
            ];
            if ($request->post('category_id')) {
                Categories::where('category_id', $request->post('category_id'))->update($Category);
                session()->flash('msg', 'Sua Danh Muc Thanh cong');
                return redirect('template/admin/dashboard');
            } else {
                Categories::create($Category);
                session()->flash('msg', 'Them Danh Muc Thanh cong');
                return redirect('template/admin/dashboard');
            }
        } catch (Exception $ex) {
            session()->flash('msg', 'That bai');
            return redirect('/template/admin/dashboard');
        }
    }
    //xoa danh muc
    public function deletecategories($id)
    {
        $adminName = auth()->user()->name;

        Categories::where('category_id', $id)->delete();

        return redirect('template/admin/dashboard')->with('adminName', $adminName);
    }
    //load form thay doi san pham
    public function loadformproduct($id)
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'product' => Products::find($id),
            'id' => $id
        ];
        return view('template/admin/formproductdetail')->with($data);
    }
    public function loadformproductadd($id)
    {
        $adminName = auth()->user()->name;
        $data = [
            'adminName'  => $adminName,
            'id' => $id
        ];
        return view('template/admin/formproductdetail')->with($data);
    }
    //thuc hien hanh dong cap nhat du lieu san pham
    public function updateproduct(Request $request, $id = null)

    {
        $adminName = auth()->user()->name;

        try {

            $product = [
                'product_id' => $request->post('product_id'),
                'name' => $request->post('name'),
                'description' => $request->post('description'),
                'price' => $request->post('price'),
                'stock' => $request->post('stock'),
                'category_id' => $request->post('category_id'),
                'image_url' => $request->post('image_url'),
                'created_at' => $request->post('created_at'),
                'updated_at' => $request->post('updated_at'),
                'status' => $request->post('status')
            ];
            if ($request->post('product_id')) {
                Products::where('product_id', $request->post('product_id'))->update($product);
                session()->flash('msg', 'Sua San Pham Thanh cong');
                return redirect('/template/admin/dashboard/' . ($request->post('category_id')) ?? '');
            } else {
                Products::create($product);
                session()->flash('msg', 'Them San Pham Thanh cong');
                return redirect('/template/admin/dashboard/' . ($request->post('category_id') ?? ''));
            }
        } catch (Exception $ex) {
            session()->flash('msg', 'That bai');
            return redirect('/template/admin/dashboard/' . ($request->post('category_id') ?? ''));
        }
    }
    // xoa san pham
    public function deleteproduct($id)
    {
        $adminName = auth()->user()->name;
        Products::where('product_id', $id)->delete();

        return redirect('template/admin/dashboard')->with('adminName', $adminName);
    }
    //xu ly du lieu order va user
    public function orderdata()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'Orders' => Orders::get(),
            'Users'   => User::get(),
            'Orderdetai' => OrderDetails::get()
        ];

        return view('template.admin.orders')->with($data);
    }
    //extract orders of each user
    public function orderlist($id)
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'Orders' => Orders::where('user_id', '=', $id)->orderBy('created_at', 'desc')->get(),
            'Users' => User::find($id)
        ];
        return view('template/admin/orderlist')->with($data);
    }
    //load form update user
    public function loadformuser($id)
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'User' => User::find($id),
            'id' => $id
        ];
        return view('template/admin/formuser')->with($data);
    }
    //loadformadduser
    public function loadformuseradd($id)
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'id_address' => $id
        ];
        return view('template/admin/formuser')->with($data);
    }
    //thuc hien hanh dong cap nhat du lieu user
    public function updateuser(Request $request, $id = null)

    {
        $adminName = auth()->user()->name;

        try {

            $user = [
                'id' => $request->post('id'),
                'name' => $request->post('name'),
                'email' => $request->post('email'),
                'password' => $request->post('password'),
                'phone' => $request->post('phone'),
                'role' => $request->post('role'),
                'created_at' => $request->post('created_at'),
                'updated_at' => $request->post('updated_at'),
                'image' => $request->post('image'),
                'status' => $request->post('status'),
            ];
            if ($request->post('id')) {
                User::where('id', $request->post('id'))->update($user);
                session()->flash('msg', 'update user infor sucessfully');
                return redirect('/template/admin/user');
            } else {
                User::create($user);
                session()->flash('msg', 'Add new user successfuly');
                return redirect('/template/admin/user');
            }
        } catch (Exception $ex) {
            session()->flash('msg', 'Failed');
            return redirect('/template/admin/user');
        }
    }
    // xoa san pham
    public function deleteuser($id)
    {
        $adminName = auth()->user()->name;
        User::where('id', $id)->delete();

        return redirect('template/admin/user')->with('adminName', $adminName);
    }
    public function orderdetail($id, $od)
    {
        $adminName = auth()->user()->name;
        $OrderDetails = OrderDetails::where('order_id', $id)->get();
        $User = User::where('id', $od)->get();
        $data = [
            'adminName'  => $adminName,
            'OrderDetails' => $OrderDetails,
            'Users' => $User
        ];

        return view('template.admin.orderdetail')->with($data);
    }
    public function icon()
    {
        $adminName = auth()->user()->name;
        return view('template/admin/icon')->with('adminName', $adminName);
    }

    public function maps()
    {
        $adminName = auth()->user()->name;

        return view('template/admin/maps')->with('adminName', $adminName);
    }

    public function notifications()
    {
        $adminName = auth()->user()->name;

        return view('template/admin/notifications')->with('adminName', $adminName);
    }

    public function user()
    {
        $adminName = auth()->user()->name;

        return view('template/admin/user')->with('adminName', $adminName);
    }

    public function table()
    {
        $adminName = auth()->user()->name;

        return view('template/admin/table')->with('adminName', $adminName);
    }

    public function typography()
    {
        $adminName = auth()->user()->name;

        return view('template/admin/typography')->with('adminName', $adminName);
    }

    public function upgrade()
    {
        $adminName = auth()->user()->name;

        return view('template/admin/upgrade')->with('adminName', $adminName);
    }
    //Search data in admin
    public function search(Request $request)
    {
        $adminName = auth()->user()->name;
        $searchTerm = $request->input('search');

        $results = [
            'admins' => Admin::where('name', 'like', "%$searchTerm%")->orWhere('email', 'like', "%$searchTerm%")->get(),
            'categories' => Categories::where('name', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            'menuTabs' => MenuTabs::where('name', 'like', "%$searchTerm%")->orWhere('slug', 'like', "%$searchTerm%")->get(),
            'news' => News::where('title', 'like', "%$searchTerm%")->orWhere('content', 'like', "%$searchTerm%")->get(),
            'orders' => Orders::where('address', 'like', "%$searchTerm%")->orWhere('total_amount', 'like', "%$searchTerm%")->get(),
            'orderDetails' => OrderDetails::where('unit_price', 'like', "%$searchTerm%")->orWhere('subtotal', 'like', "%$searchTerm%")->get(),
            'payments' => Payments::where('amount', 'like', "%$searchTerm%")->orWhere('payment_method', 'like', "%$searchTerm%")->get(),
            'products' => Products::where('name', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            'productImages' => ProductImage::where('image_path', 'like', "%$searchTerm%")->orWhere('caption', 'like', "%$searchTerm%")->get(),
            'promotions' => Promotions::where('title', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            'qna' => Qna::where('question', 'like', "%$searchTerm%")->orWhere('answer', 'like', "%$searchTerm%")->get(),
            'reviews' => Review::where('comment', 'like', "%$searchTerm%")->get(),
            'userAddresses' => UserAddress::where('street', 'like', "%$searchTerm%")->orWhere('city', 'like', "%$searchTerm%")->get(),
            'users' => User::where('name', 'like', "%$searchTerm%")->orWhere('email', 'like', "%$searchTerm%")->get(),
        ];

        $data = [
            'adminName' => $adminName,
            'results' => $results,
            'searchTerm' => $searchTerm,
        ];

        return view('template.admin.search')->with($data);
    }
    //main function update them xoa sua
    // Generic methods for CRUD
    private function loadForm($model, $id, $view, $data = [])
    {
        $adminName = auth()->user()->name;
        $record = $id ? $model::find($id) : null;
        $data = array_merge($data, [
            'adminName' => $adminName,
            'record' => $record,
            'id' => $id
        ]);
        return view($view, $data);
    }

    private function updateRecord(Request $request, $model, $redirectRoute, $id = null)
    {
        $adminName = auth()->user()->name;
        try {
            // Lọc dữ liệu chỉ lấy các trường trong $fillable, loại bỏ _token và các trường không mong muốn
            $data = $request->only($model->getFillable());

            if ($id) {
                // Kiểm tra và sử dụng primary key của model
                $primaryKey = $model->getKeyName(); // Lấy tên cột khóa chính từ model
                $model::where($primaryKey, $id)->update($data);
                session()->flash('msg', 'Cập nhật chi tiết đơn hàng thành công');
            } else {
                $model::create($data);
                session()->flash('msg', 'Thêm chi tiết đơn hàng thành công');
            }
            return redirect($redirectRoute)->with('adminName', $adminName);
        } catch (\Exception $e) {
            Log::error('Lỗi cập nhật/thêm chi tiết đơn hàng: ' . $e->getMessage());
            session()->flash('msg', 'Thất bại: ' . $e->getMessage());
            return redirect($redirectRoute)->with('adminName', $adminName);
        }
    }

    private function deleteRecord($model, $id, $redirectRoute)
    {
        try {
            $adminName = auth()->user()->name;
            $primaryKey = $model->getKeyName(); // Lấy tên cột khóa chính từ model
            $model::where($primaryKey, $id)->delete();
            session()->flash('msg', 'xoa chi tiết đơn hàng thành công');
            return redirect($redirectRoute)->with('adminName', $adminName);
        } catch (\Exception $e) {
            Log::error('Lỗi cập nhật/thêm chi tiết đơn hàng: ' . $e->getMessage());
            session()->flash('msg', 'Thất bại: ' . $e->getMessage());
            return redirect($redirectRoute)->with('adminName', $adminName);
        }
    }
    private function extract($model, $view, $data = [])
    {
        $adminName = auth()->user()->name;
        $record = $model::get();
        $data = array_merge($data, [
            'adminName' => $adminName,
            'records' => $record,
        ]);
        return view($view, $data);
    }
    //update record cho oderdetails
    public function loadFormOrderDetails($id)
    {
        return $this->loadForm(new OrderDetails(), $id, 'template.admin.formorderdetails');
    }
    public function loadFormOrderDetailsAdd()
    {
        return $this->loadForm(new OrderDetails(), null, 'template.admin.formorderdetails');
    }
    public function updateOrderDetails(Request $request, $id = null)
    {
        return $this->updateRecord($request, new OrderDetails(), '/template/admin/user', $id);
    }
    public function deleteOrderDetails($id)
    {
        return $this->deleteRecord(new OrderDetails(), $id, '/template/admin/user');
    }
    //news
    public function news()
    {
        return $this->extract(new News(), '/template/admin/news');
    }
    //payments
    public function payments()
    {
        return $this->extract(new Payments(), '/template/admin/payments');
    }
    //promotions
    public function promotions()
    {
        return $this->extract(new Promotions(), '/template/admin/promotions');
    }
}
