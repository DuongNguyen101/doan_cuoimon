@extends('layout.TemplateAdmin')

@section('content')
<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif

    <form method="GET" action="{{ url('/template/admin/searchcategories') }}" style="margin-bottom: 20px;" style="max-width: 1000px; margin: 40px auto; font-family: Arial, sans-serif;">
        <input type="text" name="search" value="{{ old('search', request()->input('search')) }}" placeholder="Nhập từ khóa tìm kiếm" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 6px;">
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px;">Tìm kiếm</button>
    </form>

    @if (!request()->get('search'))
    <p style="color: #666;">Vui lòng nhập từ khóa để bắt đầu tìm kiếm.</p>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">Categories found</h2>
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
                @if ($categories->isEmpty())
                <tr>
                    <td colspan="9" style="padding: 20px; text-align: center; color: #666;">
                        <h3>Không tìm thấy danh mục nào</h3>
                    </td>
                </tr>
                @else
                @foreach ($categories as $category)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $category->id }}</td> <!-- Sử dụng id thay category_id -->
                    <td style="padding: 8px;">{{ $category->name }}</td>
                    <td style="padding: 8px;">{{ $category->description }}</td>
                    <td style="padding: 8px;">{{ $category->created_at ?? 'N/A' }}</td>
                    <td style="padding: 8px;">{{ $category->updated_at ?? 'N/A' }}</td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/dashboard/' . $category->id) }}"
                            style="color: #007bff; text-decoration: none;">Xem</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/category/form/' . $category->id) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Sửa</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/category/form/add') }}"
                            style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Thêm</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/category/form/delete/' . $category->id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
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