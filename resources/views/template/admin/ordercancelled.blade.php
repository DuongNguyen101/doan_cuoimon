@extends('layout.TemplateAdmin')
@section('content')


<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px 5px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">Cancelled Order</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 10px;">order_id</th>
                    <th style="padding: 10px;">user_id</th>
                    <th style="padding: 10px;">order_date</th>
                    <th style="padding: 10px;">total_amount</th>
                    <th style="padding: 10px;">status</th>
                    <th style="padding: 10px;">address</th>
                    <th style="padding: 10px;">created_at</th>
                    <th style="padding: 10px;">updated_at</th>
                    <th colspan="4" style="text-align: center; padding: 10px;">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Orders as $Order)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $Order->order_id }}</td>
                    <td style="padding: 8px;">{{ $Order->user_id }}</td>
                    <td style="padding: 8px;">{{ $Order->order_date }}</td>
                    <td style="padding: 8px;">{{ $Order->total_amount }}</td>
                    <td style="padding: 8px;">{{ $Order->status }}</td>
                    <td style="padding: 8px;">{{ $Order->address }}</td>
                    <td style="padding: 8px;">{{ $Order->created_at }}</td>
                    <td style="padding: 8px;">{{ $Order->updated_at }}</td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/' . $Order->order_id) }}"
                            style="color: #007bff; text-decoration: none;">Xem</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/form/' . $Order->order_id) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Sửa</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/form/add') }}"
                            style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Thêm</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/user/form/delete/' . $Order->order_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>


@endsection