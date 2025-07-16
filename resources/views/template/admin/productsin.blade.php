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
            <h2 style="text-align: center; color: #333;">Product List</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #343a40; color: #fff;">
                <tr>
                    <th style="padding: 10px;">product_id</th>
                    <th style="padding: 10px;">name</th>
                    <th style="padding: 10px;">description</th>
                    <th style="padding: 10px;">price</th>
                    <th style="padding: 10px;">stock</th>
                    <th style="padding: 10px;">category_id</th>
                    <th style="padding: 10px;">image_url</th>
                    <th style="padding: 10px;">created_at</th>
                    <th style="padding: 10px;">updated_at</th>
                    <th colspan="3" style="text-align: center; padding: 10px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $product->product_id }}</td>
                    <td style="padding: 8px;">{{ $product->name }}</td>
                    <td style="padding: 8px;">{!! $product->description !!}</td>
                    <td style="padding: 8px; color: #28a745;">{{ number_format($product->price, 0, ',', '.') }}₫</td>
                    <td style="padding: 8px;">{{ $product->stock }}</td>
                    <td style="padding: 8px;">{{ $product->category_id }}</td>
                    <td style="padding: 8px;">
                        @if ($product->image_url)
                        <img src="{{asset( 'image/shoplist/'.$product->image_url) }}" alt="Product Image" style="width: 60px; height: auto; border-radius: 4px;">
                        @else
                        <em>No image</em>
                        @endif
                    </td>
                    <td style="padding: 8px;">{{ $product->created_at }}</td>
                    <td style="padding: 8px;">{{ $product->updated_at }}</td>

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