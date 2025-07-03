@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    <div class="dach-muc-sp">
        <div class="row">
            <div class="">
                <h3>Danh Muc San Pham</h2>
            </div>
        </div>
        <table border="1">
            <tr>
                <th>category_id</th>
                <th>name</th>
                <th>description</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>product List</th>
            </tr>
            @foreach ($categories as $category )
            <tr>
                <td>{{ $category->category_id}}</td>
                <td>{{ $category->name}}</td>
                <td>{{ $category->description}}</td>
                <td>{{ $category->created_at}}</td>
                <td>{{ $category->updated_at}}</td>
                <td><a href="{{ url('/template/admin/dashboard/'.$category->category_id) }}">Product List</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    
</div>


@endsection