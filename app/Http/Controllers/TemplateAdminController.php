<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Admin;

use App\Models\MenuTabs;
use App\Models\News;
use App\Models\Payment;

use App\Models\Promotions;
use App\Models\Qna;
use App\Models\Review;
use App\Models\ProductDetail;

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
    public function products()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'categories' => Categories::get(),
            'products'   => Products::get()
        ];

        return view('template.admin.products')->with($data);
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
            'id' => $id,
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
        $data = $request->validate([
            'category_id' => 'nullable|exists:categories,category_id', // Chỉ kiểm tra khi edit
            'name' => 'required|string|max:255', // Tên danh mục bắt buộc, độ dài tối đa 255
            'description' => 'nullable|string|max:1000', // Mô tả tùy chọn, giới hạn 1000 ký tự
        ]);

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
            'id' => $id,
            'categories' => Categories::get()
        ];
        return view('template/admin/formproductdetail')->with($data);
    }
    public function loadformproductadd($id)
    {
        $adminName = auth()->user()->name;
        $data = [
            'adminName'  => $adminName,
            'id' => $id,
            'categories' => Categories::get()
        ];
        return view('template/admin/formproductdetail')->with($data);
    }
    //thuc hien hanh dong cap nhat du lieu san pham
    public function updateproduct(Request $request, $id = null)

    {
        $adminName = auth()->user()->name;
        $existingProduct = $id ? Products::find($id) : null;

        try {
            $rules = [
                'product_id' => 'nullable|integer|exists:products,product_id', // Only for editing
                'name' => 'required|string|max:255|', // Unique, ignoring current record
                'description' => 'nullable|string|max:1000', // Optional, max 1000 characters
                'short_description' => 'nullable|string|max:500', // Optional, shorter description
                'price' => 'required|numeric|min:0', // Non-negative price
                'stock' => 'required|integer|min:0', // Non-negative stock quantity
                'category_id' => 'required|exists:categories,category_id', // Must exist in categories
                'image_url' => 'nullable', // Optional URL, max 2048 characters
                'nutritional_info' => 'nullable|string|max:2000', // Optional, max 2000 characters
                'usage_instructions' => 'nullable|string|max:2000', // Optional, max 2000 characters
                'packaging' => 'nullable|string|max:2000', // Optional, max 2000 characters
                'origin' => 'nullable|string|max:2000', // Optional, max 2000 characters
                'created_at' => 'nullable|date', // Optional timestamp
                'updated_at' => 'nullable|date', // Optional timestamp
                'status' => 'required|in:active,inactive', // Only allow specific statuses
            ];

            $customMessages = [
                'name.required' => 'Tên sản phẩm là bắt buộc.',
                'name.max' => 'Tên sản phẩm không được vượt quá :max ký tự.',
                'name.unique' => 'Tên sản phẩm đã tồn tại. Vui lòng chọn tên khác.',
                'description.max' => 'Mô tả không được vượt quá :max ký tự.',
                'short_description.max' => 'Mô tả ngắn không được vượt quá :max ký tự.',
                'price.required' => 'Giá sản phẩm là bắt buộc.',
                'price.numeric' => 'Giá phải là một số.',
                'price.min' => 'Giá không được nhỏ hơn :min.',
                'stock.required' => 'Số lượng tồn kho là bắt buộc.',
                'stock.integer' => 'Số lượng phải là một số nguyên.',
                'stock.min' => 'Số lượng không được nhỏ hơn :min.',
                'category_id.required' => 'Danh mục là bắt buộc.',
                'category_id.exists' => 'Danh mục không hợp lệ.',
                'image_url.url' => 'URL hình ảnh không hợp lệ.',
                'image_url.max' => 'URL hình ảnh không được vượt quá :max ký tự.',
                'nutritional_info.max' => 'Thông tin dinh dưỡng không được vượt quá :max ký tự.',
                'usage_instructions.max' => 'Hướng dẫn sử dụng không được vượt quá :max ký tự.',
                'packaging.max' => 'Thông tin bao bì không được vượt quá :max ký tự.',
                'origin.max' => 'Xuất xứ không được vượt quá :max ký tự.',
                'created_at.date' => 'Ngày tạo không hợp lệ.',
                'updated_at.date' => 'Ngày cập nhật không hợp lệ.',
                'status.required' => 'Trạng thái là bắt buộc.',
                'status.in' => 'Trạng thái phải là "active" hoặc "inactive".',
            ];
            $data = $request->validate($rules, $customMessages);

            $product = [
                'product_id' => $request->post('product_id'),
                'name' => $request->post('name'),
                'description' => $request->post('description'),
                'short_description' => $request->post('short_description'),
                'price' => $request->post('price'),
                'stock' => $request->post('stock'),
                'category_id' => $request->post('category_id'),
                'image_url' => $request->post('image_url'),
                'nutritional_info' => $request->post('nutritional_info'),
                'usage_instructions' => $request->post('usage_instructions'),
                'packaging' => $request->post('packaging'),
                'origin' => $request->post('origin'),
                'created_at' => $request->post('created_at'),
                'updated_at' => $request->post('updated_at'),
                'status' => $request->post('status')
            ];
            // Xử lý upload hình ảnh
            if ($request->hasFile('image_url')) {
                $file = $request->file('image_url');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Tạo tên duy nhất
                $destinationPath = public_path('image/shoplist'); // Thay đổi thành thư mục phù hợp
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true); // Tạo thư mục nếu không tồn tại
                }
                $file->move($destinationPath, $fileName); // Lưu vào thư mục
                $product['image_url'] = $fileName; // Cập nhật tên tệp
            } elseif ($existingProduct && $existingProduct->image_url) {
                $product['image_url'] = $existingProduct->image_url;
            }
            if ($request->post('product_id')) {
                Products::where('product_id', $request->post('product_id'))->update($product);
                session()->flash('msg', 'Sua San Pham Thanh cong');
                return redirect('/template/admin/dashboard/' . ($request->post('category_id')) ?? '');
            } else {
                Products::create($product);
                session()->flash('msg', 'Them San Pham Thanh cong');
                return redirect('/template/admin/dashboard/' . ($request->post('category_id') ?? ''));
            }
        } catch (\Exception $e) {
            Log::error('Lỗi cập nhật/thêm chi tiết đơn hàng: ' . $e->getMessage());
            session()->flash('msg', 'That bai' . $e->getMessage());
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
    //customer list
    public function customerlist()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'Orders' => Orders::get(),
            'Users'   => User::get(),
            'Orderdetai' => OrderDetails::get()
        ];

        return view('template.admin.customers')->with($data);
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
                'description' => $request->post('description'),
            ];
            // Xử lý upload hình ảnh
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Tạo tên duy nhất
                $destinationPath = public_path('image/shoplist'); // Thay đổi thành thư mục phù hợp
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true); // Tạo thư mục nếu không tồn tại
                }
                $file->move($destinationPath, $fileName); // Lưu vào thư mục
                $user['image'] = $fileName; // Cập nhật tên tệp
            } elseif ($id && !$request->hasFile('image') && User::find($id)) {
                $existingProduct = User::find($id);
                if ($existingProduct->image) {
                    $user['image'] = $existingProduct->image;
                }
            }
            if ($request->post('id')) {
                User::where('id', $request->post('id'))->update($user);
                session()->flash('msg', 'update user infor sucessfully');
                return redirect('/template/admin/customers');
            } else {
                User::create($user);
                session()->flash('msg', 'Add new user successfuly');
                return redirect('/template/admin/customers');
            }
        } catch (Exception $ex) {
            Log::error('Lỗi cập nhật/thêm chi tiết đơn hàng: ' . $ex->getMessage());
            session()->flash('msg', 'Failed' . $ex);
            return redirect('/template/admin/customers');
        }
    }
    // xoa san pham
    public function deleteuser($id)
    {
        $adminName = auth()->user()->name;
        User::where('id', $id)->delete();

        return redirect('template/admin/customers')->with('adminName', $adminName);
    }
    public function orderdetail($id, $od)
    {
        $adminName = auth()->user()->name;
        $OrderDetails = OrderDetails::where('order_id', $id)->get();
        $User = User::where('id', $od)->get();
        $User_address = UserAddress::where('user_id', $od)->get();
        $data = [
            'adminName'  => $adminName,
            'OrderDetails' => $OrderDetails,
            'Users' => $User,
            'User_address' => $User_address
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
    public function searchcategories(Request $request)
    {
        $adminName = auth()->user()->name;
        $searchTerm = $request->input('search', ''); // Mặc định là chuỗi rỗng nếu không có input
        $results = [
            // 'admins' => Admin::where('name', 'like', "%$searchTerm%")->orWhere('email', 'like', "%$searchTerm%")->get(),
            'categories' => Categories::where('name', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'menuTabs' => MenuTabs::where('name', 'like', "%$searchTerm%")->orWhere('slug', 'like', "%$searchTerm%")->get(),
            // 'news' => News::where('title', 'like', "%$searchTerm%")->orWhere('content', 'like', "%$searchTerm%")->get(),
            // 'orders' => Orders::where('address', 'like', "%$searchTerm%")->orWhere('total_amount', 'like', "%$searchTerm%")->get(),
            // 'orderDetails' => OrderDetails::where('unit_price', 'like', "%$searchTerm%")->orWhere('subtotal', 'like', "%$searchTerm%")->get(),
            // 'payments' => Payments::where('amount', 'like', "%$searchTerm%")->orWhere('payment_method', 'like', "%$searchTerm%")->get(),
            // 'products' => Products::where('name', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'productImages' => ProductImage::where('image_path', 'like', "%$searchTerm%")->orWhere('caption', 'like', "%$searchTerm%")->get(),
            // 'promotions' => Promotions::where('title', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'qna' => Qna::where('question', 'like', "%$searchTerm%")->orWhere('answer', 'like', "%$searchTerm%")->get(),
            // 'reviews' => Review::where('comment', 'like', "%$searchTerm%")->get(),
            // 'userAddresses' => UserAddress::where('street', 'like', "%$searchTerm%")->orWhere('city', 'like', "%$searchTerm%")->get(),
            // 'users' => User::where('name', 'like', "%$searchTerm%")->orWhere('email', 'like', "%$searchTerm%")->get(),
            'adminName' => $adminName,
            'searchTerm' => $searchTerm,
            'keyword' => 'categories',
        ];

        return view('template.admin.search')->with($results);
    }
    public function searchproducts(Request $request)
    {
        $adminName = auth()->user()->name;
        $searchTerm = $request->input('search', ''); // Mặc định là chuỗi rỗng nếu không có input
        $results = [
            // 'admins' => Admin::where('name', 'like', "%$searchTerm%")->orWhere('email', 'like', "%$searchTerm%")->get(),
            // 'categories' => Categories::where('name', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'menuTabs' => MenuTabs::where('name', 'like', "%$searchTerm%")->orWhere('slug', 'like', "%$searchTerm%")->get(),
            // 'news' => News::where('title', 'like', "%$searchTerm%")->orWhere('content', 'like', "%$searchTerm%")->get(),
            // 'orders' => Orders::where('address', 'like', "%$searchTerm%")->orWhere('total_amount', 'like', "%$searchTerm%")->get(),
            // 'orderDetails' => OrderDetails::where('unit_price', 'like', "%$searchTerm%")->orWhere('subtotal', 'like', "%$searchTerm%")->get(),
            // 'payments' => Payments::where('amount', 'like', "%$searchTerm%")->orWhere('payment_method', 'like', "%$searchTerm%")->get(),
            'products' => Products::where('name', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'productImages' => ProductImage::where('image_path', 'like', "%$searchTerm%")->orWhere('caption', 'like', "%$searchTerm%")->get(),
            // 'promotions' => Promotions::where('title', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'qna' => Qna::where('question', 'like', "%$searchTerm%")->orWhere('answer', 'like', "%$searchTerm%")->get(),
            // 'reviews' => Review::where('comment', 'like', "%$searchTerm%")->get(),
            // 'userAddresses' => UserAddress::where('street', 'like', "%$searchTerm%")->orWhere('city', 'like', "%$searchTerm%")->get(),
            // 'users' => User::where('name', 'like', "%$searchTerm%")->orWhere('email', 'like', "%$searchTerm%")->get(),
            'adminName' => $adminName,
            'searchTerm' => $searchTerm,
        ];

        return view('template.admin.searchproducts')->with($results);
    }
    public function searchcustomers(Request $request)
    {
        $adminName = auth()->user()->name;
        $searchTerm = $request->input('search', ''); // Mặc định là chuỗi rỗng nếu không có input
        $results = [
            // 'admins' => Admin::where('name', 'like', "%$searchTerm%")->orWhere('email', 'like', "%$searchTerm%")->get(),
            // 'categories' => Categories::where('name', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'menuTabs' => MenuTabs::where('name', 'like', "%$searchTerm%")->orWhere('slug', 'like', "%$searchTerm%")->get(),
            // 'news' => News::where('title', 'like', "%$searchTerm%")->orWhere('content', 'like', "%$searchTerm%")->get(),
            // 'orders' => Orders::where('address', 'like', "%$searchTerm%")->orWhere('total_amount', 'like', "%$searchTerm%")->get(),
            // 'orderDetails' => OrderDetails::where('unit_price', 'like', "%$searchTerm%")->orWhere('subtotal', 'like', "%$searchTerm%")->get(),
            // 'payments' => Payments::where('amount', 'like', "%$searchTerm%")->orWhere('payment_method', 'like', "%$searchTerm%")->get(),
            // 'products' => Products::where('name', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'productImages' => ProductImage::where('image_path', 'like', "%$searchTerm%")->orWhere('caption', 'like', "%$searchTerm%")->get(),
            // 'promotions' => Promotions::where('title', 'like', "%$searchTerm%")->orWhere('description', 'like', "%$searchTerm%")->get(),
            // 'qna' => Qna::where('question', 'like', "%$searchTerm%")->orWhere('answer', 'like', "%$searchTerm%")->get(),
            // 'reviews' => Review::where('comment', 'like', "%$searchTerm%")->get(),
            // 'userAddresses' => UserAddress::where('street', 'like', "%$searchTerm%")->orWhere('city', 'like', "%$searchTerm%")->get(),
            'users' => User::where('name', 'like', "%$searchTerm%")->orWhere('email', 'like', "%$searchTerm%")->get(),
            'adminName' => $adminName,
            'searchTerm' => $searchTerm,
        ];

        return view('template.admin.searchcustomers')->with($results);
    }
    //main function update them xoa sua
    // Generic methods for CRUD
    private function loadForm($model, $id, $view, $data = [], $model2)
    {
        $adminName = auth()->user()->name;
        $record = $id ? $model::find($id) : null;
        $fk = $model2::get();
        $data = array_merge($data, [
            'adminName' => $adminName,
            'record' => $record,
            'id' => $id,
            'fk' => $fk
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
        return $this->loadForm(new OrderDetails(), $id, 'template.admin.formorderdetails', $data = [], new Orders());
    }
    public function loadFormOrderDetailsAdd()
    {
        return $this->loadForm(new OrderDetails(), null, 'template.admin.formorderdetails', $data = [], new Orders());
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
    public function loadFormNews($id)
    {
        return $this->loadForm(new News(), $id, 'template.admin.formnews', $data = [], new Orders());
    }
    public function updateNews(Request $request, $id = null)
    {
        $adminName = auth()->user()->name;
        $existingProduct = $id ? News::find($id) : null;

        try {

            $product = [
                'news_id' => $request->post('news_id'),
                'title' => $request->post('title'),
                'content' => $request->post('content'),
                'author' => $request->post('author'),
                'image_url' => $request->post('image_url'),
                'description' => $request->post('description'),
                'publish_date' => $request->post('publish_date'),
                'status' => $request->post('status'),
                'created_at' => $request->post('created_at'),
                'updated_at' => $request->post('updated_at')
            ];
            // Xử lý upload hình ảnh
            if ($request->hasFile('image_url')) {
                $file = $request->file('image_url');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Tạo tên duy nhất
                $destinationPath = public_path('image/shoplist'); // Thay đổi thành thư mục phù hợp
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true); // Tạo thư mục nếu không tồn tại
                }
                $file->move($destinationPath, $fileName); // Lưu vào thư mục
                $product['image_url'] = $fileName; // Cập nhật tên tệp
            } elseif ($existingProduct && $existingProduct->image_url) {
                $product['image_url'] = $existingProduct->image_url;
            }
            if ($request->post('news_id')) {
                News::where('news_id', $request->post('news_id'))->update($product);
                session()->flash('msg', 'Sua San Pham Thanh cong');
                return redirect('/template/admin/news/' . ($request->post('category_id')) ?? '');
            } else {
                News::create($product);
                session()->flash('msg', 'Them San Pham Thanh cong');
                return redirect('/template/admin/news/' . ($request->post('category_id') ?? ''));
            }
        } catch (\Exception $e) {
            Log::error('Lỗi cập nhật/thêm chi tiết đơn hàng: ' . $e->getMessage());
            session()->flash('msg', 'That bai' . $e->getMessage());
            return redirect('/template/admin/news/' . ($request->post('category_id') ?? ''));
        }
    }
    public function deleteNews($id)
    {
        return $this->deleteRecord(new News(), $id, '/template/admin/news');
    }
    //user address
    public function loadformuseraddress($id)
    {
        return $this->loadForm(new UserAddress(), $id, 'template.admin.formuseraddress', $data = [], new User());
    }
    public function updateAddress(Request $request, $id = null)
    {
        return $this->updateRecord($request, new UserAddress(), '/template/admin/user', $id);
    }
    //oders
    public function loadFormOrder($id)
    {
        return $this->loadForm(new Orders(), $id, 'template.admin.formorder', $data = [], new User());
    }
    public function updateOrder(Request $request, $id = null)
    {
        $rules = [
    'order_id' => 'nullable|integer|exists:orders,order_id', // Only for editing
    'user_id' => 'required|exists:users,id', // Must exist in users table
    'order_date' => 'required|date', // Required date
    'total_amount' => 'required|numeric|min:0', // Non-negative total amount
    'address' => 'required|string|max:500', // Required address, max 500 characters
    'status' => 'required|in:pending,processing,shipped,delivered,canceled', // Specific statuses
    'created_at' => 'nullable|date', // Optional timestamp
    'updated_at' => 'nullable|date', // Optional timestamp
];

$customMessages = [
    'user_id.required' => 'Người dùng là bắt buộc.',
    'user_id.exists' => 'Người dùng không hợp lệ.',
    'order_date.required' => 'Ngày đặt hàng là bắt buộc.',
    'order_date.date' => 'Ngày đặt hàng không hợp lệ.',
    'total_amount.required' => 'Tổng số tiền là bắt buộc.',
    'total_amount.numeric' => 'Tổng số tiền phải là một số.',
    'total_amount.min' => 'Tổng số tiền không được nhỏ hơn :min.',
    'address.required' => 'Địa chỉ là bắt buộc.',
    'address.max' => 'Địa chỉ không được vượt quá :max ký tự.',
    'status.required' => 'Trạng thái là bắt buộc.',
    'status.in' => 'Trạng thái phải là một trong: pending, processing, shipped, delivered, canceled.',
    'created_at.date' => 'Ngày tạo không hợp lệ.',
    'updated_at.date' => 'Ngày cập nhật không hợp lệ.',
];

$data = $request->validate($rules, $customMessages);
        return $this->updateRecord($request, new Orders(), '/template/admin/user', $id);
    }
    public function deleteOrder($id)
    {
        return $this->deleteRecord(new Orders(), $id, '/template/admin/user');
    }
    // public function orderapprove()
    // {
    //     $adminName = auth()->user()->name;

    //     $data = [
    //         'adminName'  => $adminName,
    //         'Orders' => Orders::where('status', '=', 'delivered')->get(),
    //         'Users'   => User::get(),
    //         'Orderdetai' => OrderDetails::get()
    //     ];

    //     return view('template.admin.orders')->with($data);
    // }
    public function orderdisaproved()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'Orders' => Orders::where('status', '=', 'pending')->get(),
            'Users'   => User::get(),
            'Orderdetai' => OrderDetails::get()
        ];

        return view('template.admin.orders')->with($data);
    }
    //payments
    public function payments()
    {
        return $this->extract(new Payments(), '/template/admin/payments');
    }
    public function loadFormPayments($id)
    {
        return $this->loadForm(new Payments(), $id, 'template.admin.formpayments', $data = [], new Orders());
    }
    public function updatePayments(Request $request, $id = null)
    {
        return $this->updateRecord($request, new Payments(), '/template/admin/payments', $id);
    }
    public function deletePayments($id)
    {
        return $this->deleteRecord(new Payments(), $id, '/template/admin/payments');
    }
    //promotions
    public function promotions()
    {
        return $this->extract(new Promotions(), '/template/admin/promotions');
    }
    public function loadFormPromotions($id)
    {
        return $this->loadForm(new Promotions(), $id, 'template.admin.formpromotions', $data = [], new Products());
    }
    public function updatePromotions(Request $request, $id = null)
    {
        return $this->updateRecord($request, new Promotions(), '/template/admin/promotions', $id);
    }
    public function deletePromotions($id)
    {
        return $this->deleteRecord(new Promotions(), $id, '/template/admin/promotions');
    }
    //reviews
    public function reviews()
    {
        return $this->extract(new Review(), '/template/admin/reviews');
    }
    public function loadFormReviews($id)
    {
        return $this->loadForm(new Review(), $id, 'template.admin.formreviews', $data = [], new User());
    }
    public function updateReviews(Request $request, $id = null)
    {
        return $this->updateRecord($request, new Review(), '/template/admin/reviews', $id);
    }
    public function deleteReviews($id)
    {
        return $this->deleteRecord(new Review(), $id, '/template/admin/reviews');
    }
    //qna
    public function qna()
    {
        return $this->extract(new Qna(), '/template/admin/qna');
    }
    public function loadFormQna($id)
    {
        return $this->loadForm(new Qna(), $id, 'template.admin.formqna', $data = [], new User());
    }
    public function updateQna(Request $request, $id = null)
    {
        return $this->updateRecord($request, new Qna(), '/template/admin/qna', $id);
    }
    public function deleteQna($id)
    {
        return $this->deleteRecord(new Qna(), $id, '/template/admin/qna');
    }

    //About

    public function about()
    {
        return $this->extract(new About(), '/template/admin/about');
    }
    public function loadFormAbout($id)
    {
        return $this->loadForm(new About(), $id, 'template.admin.formabout', $data = [], new User());
    }
    public function updateAbout(Request $request, $id = null)

    {
        $adminName = auth()->user()->name;

        try {

            $user = [
                'id' => $request->post('id'),
                'title' => $request->post('title'),
                'description' => $request->post('description'),
                'image' => $request->post('image'),
                'create_at' => $request->post('create_at')
            ];
            // Xử lý upload hình ảnh
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Tạo tên duy nhất
                $destinationPath = public_path('image/shoplist'); // Thay đổi thành thư mục phù hợp
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true); // Tạo thư mục nếu không tồn tại
                }
                $file->move($destinationPath, $fileName); // Lưu vào thư mục
                $user['image_url'] = $fileName; // Cập nhật tên tệp
            } elseif ($id && !$request->hasFile('image') && About::find($id)) {
                $existingProduct = About::find($id);
                if ($existingProduct->image) {
                    $user['image'] = $existingProduct->image;
                }
            }
            if ($request->post('id')) {
                About::where('id', $request->post('id'))->update($user);
                session()->flash('msg', 'update user infor sucessfully');
                return redirect('/template/admin/user');
            } else {
                About::create($user);
                session()->flash('msg', 'Add new user successfuly');
                return redirect('/template/admin/user');
            }
        } catch (Exception $ex) {
            session()->flash('msg', 'Failed');
            return redirect('/template/admin/about');
        }
    }
    //manage products
    public function productsin()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'categories' => Categories::get(),
            'products'   => Products::where('stock', '>', 0)->get()
        ];

        return view('template.admin.productsin')->with($data);
    }
    public function productsout()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'categories' => Categories::get(),
            'products'   => Products::where('stock', '=', 0)->get()
        ];

        return view('template.admin.productsin')->with($data);
    }
    public function productssold()
    {
        $adminName = auth()->user()->name;
        $sold = OrderDetails::pluck('product_id')->unique()->values();

        $data = [
            'adminName'  => $adminName,
            'categories' => Categories::get(),
            'products'   => Products::whereIn('product_id', $sold)->get()
        ];

        return view('template.admin.productsin')->with($data);
    }
    public function productsdiscounted()
    {
        $adminName = auth()->user()->name;
        $sold = Promotions::pluck('product_id')->unique()->values();

        $data = [
            'adminName'  => $adminName,
            'categories' => Categories::get(),
            'products'   => Products::whereIn('product_id', $sold)->get()
        ];

        return view('template.admin.productsin')->with($data);
    }
    public function productsdetail()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'categories' => Categories::get(),
            'products'   => Products::get()
        ];

        return view('template.admin.productsdetail')->with($data);
    }

    public function OrderPending()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'Orders' => Orders::where('status', '=', 'pending')->get(),
            'Users'   => User::get(),
            'Orderdetai' => OrderDetails::get()
        ];

        return view('template.admin.orderpending')->with($data);
    }

    public function OrderResolved()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'Orders' => Orders::where('status', '=', 'resolved')->get(),
            'Users'   => User::get(),
            'Orderdetai' => OrderDetails::get()
        ];

        return view('template.admin.orderresolved')->with($data);
    }
    public function OrderConfirmed()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'Orders' => Orders::where('status', '=', 'confirmed')->get(),
            'Users'   => User::get(),
            'Orderdetai' => OrderDetails::get()
        ];

        return view('template.admin.orderconfirmed')->with($data);
    }

    public function OrderCancelled()
    {
        $adminName = auth()->user()->name;

        $data = [
            'adminName'  => $adminName,
            'Orders' => Orders::where('status', '=', 'cancelled')->get(),
            'Users'   => User::get(),
            'Orderdetai' => OrderDetails::get()
        ];

        return view('template.admin.ordercancelled')->with($data);
    }
}
