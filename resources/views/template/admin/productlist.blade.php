@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <a href="{{url('/template/admin/dashboard')}}">Back</a>
    <div class="dach-muc-sp">
        <div class="row">
            <div class="">
                <h3>Danh Sach San Pham Cua Danh Muc {{ $category->name }}</h2>
            </div>
        </div>
        <table border="1">
            <tr>
                <th>product_id</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>stock</th>
                <th>category_id</th>
                <th>image_url</th>
                <th>created_at</th>
                <th>updated_at</th>

            </tr>
            @foreach ($products as $product )
            <tr>
                <td>{{ $product->product_id}}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->price}}</td>
                <td>{{ $product->stock}}</td>
                <td>{{ $product->category_id}}</td>
                <td>{{ $product->image_url}}</td>
                <td>{{ $product->created_at}}</td>
                <td>{{ $product->updated_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
</div>


@endsection