@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <form method="GET" action="{{ url('/template/admin/searchcustomers') }}" style="margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 6px;">
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px;">Tìm kiếm</button>
    </form>
    <div class="danh-muc-sp" style="max-width: 900px; margin: 20px 5px 5px 5px; font-family: Arial, sans-serif; font-size:14px;">
        <div class="row" style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #333;">Customer List </h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #343a40; color: #fff;">
                <tr>
                    <th style="padding: 10px;">id</th>
                    <th style="padding: 10px;">name</th>
                    <th style="padding: 10px;">email</th>
                    <th style="padding: 10px;">phone</th>
                    <th style="padding: 10px;">role</th>
                    <!-- <th style="padding: 10px;">description</th> -->
                    <th style="padding: 10px;">image</th>
                    <th style="padding: 10px;">created_at</th>
                    <th style="padding: 10px;">updated_at</th>
                    <th style="padding: 10px;">status</th>
                    <th colspan="4" style="text-align: center; padding: 10px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Users as $User)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $User->id }}</td>
                    <td style="padding: 8px;">{{ $User->name }}</td>
                    <td style="padding: 8px;">{{ $User->email }}</td>
                    <td style="padding: 8px;">{{ $User->phone }}</td>
                    <td style="padding: 8px;">{{ $User->role }}</td>
                    <!-- <td style="padding: 8px;">{{ $User->description }}</td> -->
                    <td style="padding: 8px;">
                        @if ($User->image)
                        <img src="{{asset('image/shoplist/'. $User->image) }}" alt="Product Image" style="width: 60px; height: auto; border-radius: 4px;">
                        @else
                        <em>Không có ảnh</em>
                        @endif
                    </td>
                    <td style="padding: 8px;">{{ $User->created_at }}</td>
                    <td style="padding: 8px;">{{ $User->updated_at }}</td>
                    <td style="padding: 8px;">{{ $User->status }}</td>
                    <!-- <td style="padding: 8px;">{!! implode(' ', array_slice(explode(' ', $User->description), 0, 5)) !!}...</td> -->
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/' .$User->id ) }}"
                            style="color: #007bff; text-decoration: none;">View</a>
                    </td>

                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/form/' .$User->id  ) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Edit</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/form/add') }}" style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Add</a>
                    </td>
                    <!-- <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/delete/' .$User->id  ) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Delete</a>
                    </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection