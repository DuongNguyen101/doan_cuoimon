@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <form method="GET" action="{{ url('/template/admin/searchproducts') }}" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 6px;">
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px;">Tìm kiếm</button>
    </form>
    <div class="danh-muc-sp" style="max-width: 1100px; margin: 40px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #333;">Danh Sách Sản Phẩm </h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #343a40; color: #fff;">
                <tr>
                    <th style="padding: 10px;">product_id</th>
                    <th style="padding: 10px;">name</th>
                    <th style="padding: 10px;">description</th>
                    <th style="padding: 10px;">short_description</th>
                    <th style="padding: 10px;">nutritional_info</th>
                    <th style="padding: 10px;">usage_instructions</th>
                    <th style="padding: 10px;">packaging</th>
                    <th style="padding: 10px;">origin</th>
                    <th colspan="4" style="text-align: center; padding: 10px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $product->product_id }}</td>
                    <td style="padding: 8px;">{{ $product->name }}</td>
                    <td style="padding: 8px;">{!! implode(' ', array_slice(explode(' ', $product->description), 0, 20)) !!}...</td>
                    <td style="padding: 8px;">{!! implode(' ', array: array_slice(explode(' ', $product->short_description), 0, 20)) !!}...</td>
                    <td style="padding: 8px;"> {!! implode(' ', array: array_slice(explode(' ', $product->nutritional_info), 0, 20)) !!}...</td>
                    <td style="padding: 8px;"> {!! implode(' ', array: array_slice(explode(' ', $product->usage_instructions), 0, 20)) !!}...</td>
                    <td style="padding: 8px;">{!! implode(separator: ' ', array: array_slice(explode(' ', $product->packaging), 0, 20)) !!}...</td>
                    <td style="padding: 8px;">{!! implode(separator: ' ', array: array_slice(explode(' ', $product->origin), 0, 20)) !!}...</td>

                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/product/form/' .$product->product_id ) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Edit</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/product/form/add/') }}" style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Add</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/product/delete/' .$product->product_id ) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection