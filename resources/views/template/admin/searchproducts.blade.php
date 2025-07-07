@extends('layout.TemplateAdmin')

@section('content')
<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif

    <form method="GET" action="{{ url('/template/admin/searchproducts') }}" style="margin-bottom: 20px;" style="max-width: 1000px; margin: 40px auto; font-family: Arial, sans-serif;">
        <input type="text" name="search" value="{{ old('search', request()->input('search')) }}" placeholder="Nhập từ khóa tìm kiếm" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 6px;">
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px;">Tìm kiếm</button>
    </form>

    @if (!request()->get('search'))
    <p style="color: #666;">Vui lòng nhập từ khóa để bắt đầu tìm kiếm.</p>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">Products found</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
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
                </tr>

            </thead>
            <tbody>
                @if ($products->isEmpty())
                <tr>
                    <td colspan="9" style="padding: 20px; text-align: center; color: #666;">
                        <h3>Không tìm thấy danh mục nào</h3>
                    </td>
                </tr>
                @else
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
                        <a href="{{ url('/template/admin/product/delete/' .$product->product_id ) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Xóa</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection