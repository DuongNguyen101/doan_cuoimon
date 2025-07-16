@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <form method="GET" action="{{ url('/template/admin/searchcategories') }}" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 6px;">
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px;">Tìm kiếm</button>
    </form>
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">Categroies Management</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 10px;">category_id</th>
                    <th style="padding: 10px;">name</th>
                    <th style="padding: 10px;">description</th>
                    <th style="padding: 10px;">created_at</th>
                    <th style="padding: 10px;">updated_at</th>
                    <th style="padding: 10px;">View Product List</th>
                    <th colspan="3" style="text-align: center; padding: 10px;">Actions</th>
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
                            style="color: #007bff; text-decoration: none;">View</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/dashboard/form/' . $category->category_id) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Edit</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/dashboard/form/add') }}"
                            style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Add</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/dashboard/form/delete/' . $category->category_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>


@endsection