@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">Danh Mục Sản Phẩm</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 10px;">ID</th>
                    <th style="padding: 10px;">Tên</th>
                    <th style="padding: 10px;">Mô tả</th>
                    <th style="padding: 10px;">Ngày tạo</th>
                    <th style="padding: 10px;">Ngày cập nhật</th>
                    <th style="padding: 10px;">Sản phẩm</th>
                    <th colspan="3" style="text-align: center; padding: 10px;">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $category->category_id }}</td>
                    <td style="padding: 8px;">{{ $category->name }}</td>
                    <td style="padding: 8px;">{{ $category->description }}</td>
                    <td style="padding: 8px;">{{ $category->created_at }}</td>
                    <td style="padding: 8px;">{{ $category->updated_at }}</td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/dashboard/' . $category->category_id) }}"
                            style="color: #007bff; text-decoration: none;">Xem</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/dashboard/form/' . $category->category_id) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Sửa</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/dashboard/form/add') }}"
                            style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Thêm</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/dashboard/form/delete/' . $category->category_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="danh-muc-sp" style="max-width: 1100px; margin: 40px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #333;">Danh Sách Sản Phẩm </h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #343a40; color: #fff;">
                <tr>
                    <th style="padding: 10px;">ID</th>
                    <th style="padding: 10px;">Tên sản phẩm</th>
                    <th style="padding: 10px;">Mô tả</th>
                    <th style="padding: 10px;">Giá</th>
                    <th style="padding: 10px;">Tồn kho</th>
                    <th style="padding: 10px;">Danh mục</th>
                    <th style="padding: 10px;">Ảnh</th>
                    <th style="padding: 10px;">Tạo lúc</th>
                    <th style="padding: 10px;">Cập nhật</th>
                    <th colspan="3" style="text-align: center; padding: 10px;">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $product->product_id }}</td>
                    <td style="padding: 8px;">{{ $product->name }}</td>
                    <td style="padding: 8px;">{{ $product->description }}</td>
                    <td style="padding: 8px; color: #28a745;">{{ number_format($product->price, 0, ',', '.') }}₫</td>
                    <td style="padding: 8px;">{{ $product->stock }}</td>
                    <td style="padding: 8px;">{{ $product->category_id }}</td>
                    <td style="padding: 8px;">
                        @if ($product->image_url)
                        <img src="{{asset( 'image/shoplist/'.$product->image_url) }}" alt="Product Image" style="width: 60px; height: auto; border-radius: 4px;">
                        @else
                        <em>Không có ảnh</em>
                        @endif
                    </td>
                    <td style="padding: 8px;">{{ $product->created_at }}</td>
                    <td style="padding: 8px;">{{ $product->updated_at }}</td>

                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/product/form/' .$product->product_id ) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Sửa</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/product/form/add/') }}" style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Thêm</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/product/form/delete/' .$product->product_id ) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection