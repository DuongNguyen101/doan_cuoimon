@extends('layout.TemplateAdmin')
@section('content')


<div class="content">
    <a href="{{url('/template/admin/dashboard')}}">Back</a>
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <div class="danh-muc-sp" style="max-width: 1100px; margin: 40px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #333;">Oder detail of Order ID</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #343a40; color: #fff;">
                <tr>
                    <th style="padding: 10px;">order_detail_id</th>
                    <th style="padding: 10px;">order_id</th>
                    <th style="padding: 10px;">product_id</th>
                    <th style="padding: 10px;">quantity</th>
                    <th style="padding: 10px;">unit_price</th>
                    <th style="padding: 10px;">subtotal</th>
                    <th colspan="3" style="text-align: center; padding: 10px;">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($OrderDetails as $OrderDetail)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $OrderDetail->order_detail_id }}</td>
                    <td style="padding: 8px;">{{ $OrderDetail->order_id }}</td>
                    <td style="padding: 8px;">{{ $OrderDetail->product_id }}</td>
                    <td style="padding: 8px;">{{ $OrderDetail->quantity }}</td>
                    <td style="padding: 8px; color: #28a745;">{{ number_format($OrderDetail->unit_price, 0, ',', '.') }}$</td>
                    <td style="padding: 8px;">{{ $OrderDetail->subtotal }}</td>



                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/orderdetails/form/' .$OrderDetail->order_detail_id  ) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Edit</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/orderdetails/form/add') }}" style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Add</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/orderdetails/delete/'.$OrderDetail->order_detail_id  ) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px 5px auto; font-family: Arial, sans-serif; font-size:small">
        <div class="row" style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #333;">The Customer </h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #343a40; color: #fff;">
                <tr>
                    <th style="padding: 10px;">id</th>
                    <th style="padding: 10px;">name</th>
                    <th style="padding: 10px;">email</th>
                    <th style="padding: 10px;">phone</th>
                    <th style="padding: 10px;">role</th>
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
                    <td style="padding: 8px;">
                        @if ($User->image_url)
                        <img src="{{ $User->image_url }}" alt="Product Image" style="width: 60px; height: auto; border-radius: 4px;">
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
                        <a href="{{ url('/template/admin/user/delete/' .$User->id  ) }}" onclick="return confirm('Are you sure delete this order?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px 5px auto; font-family: Arial, sans-serif; font-size:small">
        <div class="row" style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #333;">Address </h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);">
            <thead style="background-color: #343a40; color: #fff;">
                <tr>
                    <th style="padding: 10px;">User_id</th>
                    <th style="padding: 10px;">Street</th>
                    <th style="padding: 10px;">City</th>
                    <th style="padding: 10px;">District</th>
                    <th colspan="3" style="text-align: center; padding: 10px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($User_address as $adress)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $adress->user_id }}</td>
                    <td style="padding: 8px;">{{ $adress->street }}</td>
                    <td style="padding: 8px;">{{ $adress->city }}</td>
                    <td style="padding: 8px;">{{ $adress->district }}</td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/useraddress/form/' .$adress->id  ) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Edit</a>
                    </td>
                    <!-- <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/useraddress/form/add') }}" style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Add</a>
                    </td> -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection