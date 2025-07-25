@extends('layout.TemplateAdmin')

@section('content')
<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif

    <form method="GET" action="{{ url('/template/admin/searchcustomers') }}" style="margin-bottom: 20px;" style="max-width: 1000px; margin: 40px auto; font-family: Arial, sans-serif;">
        <input type="text" name="search" value="{{ old('search', request()->input('search')) }}" placeholder="Nhập từ khóa tìm kiếm" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 6px;">
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px;">Tìm kiếm</button>
    </form>

    @if (!request()->get('search'))
    <p style="color: #666;">Please input what you want to search</p>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">Users found</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 10px;">Id</th>
                    <th style="padding: 10px;">Name</th>
                    <th style="padding: 10px;">Email</th>
                    <th style="padding: 10px;">Phone</th>
                    <th style="padding: 10px;">Role</th>
                    <th style="padding: 10px;">Description</th>
                    <th style="padding: 10px;">Image</th>
                    <th style="padding: 10px;">Created_at</th>
                    <th style="padding: 10px;">Updated_at</th>
                    <th style="padding: 10px;">Status</th>
                    <th colspan="4" style="text-align: center; padding: 10px;">Actions</th>
                </tr>

            </thead>
            <tbody>
                @if ($users->isEmpty())
                <tr>
                    <td colspan="9" style="padding: 20px; text-align: center; color: #666;">
                        <h3>Không tìm thấy danh mục nào</h3>
                    </td>
                </tr>
                @else
                @foreach ($users as $User)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $User->id }}</td>
                    <td style="padding: 8px;">{{ $User->name }}</td>
                    <td style="padding: 8px;">{{ $User->email }}</td>
                    <td style="padding: 8px;">{{ $User->phone }}</td>
                    <td style="padding: 8px;">{{ $User->role }}</td>
                    <td style="padding: 8px;">{{ $User->description }}</td>
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
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/delete/' .$User->id  ) }}" onclick="return confirm('Are you sure delete the product?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection