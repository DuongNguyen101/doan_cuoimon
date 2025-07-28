@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px 5px auto; font-family: Arial, sans-serif; font-size: 13px">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">Promotions List</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 10px;">Promotion_id</th>
                    <th style="padding: 10px;">Title</th>
                    <th style="padding: 10px;">Description</th>
                    <th style="padding: 10px;">Discount_percentage</th>
                    <th style="padding: 10px;">Discount_amount</th>
                    <th style="padding: 10px;">Dtart_date</th>
                    <th style="padding: 10px;">Product_id</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Created_at</th>
                    <th style="padding: 10px;">Updated_at</th>
                    <th colspan="4" style="text-align: center; padding: 10px;">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $record->promotion_id }}</td>
                    <td style="padding: 8px;">{{ $record->title }}</td>
                    <td style="padding: 8px;">{{ $record->description }}</td>
                    <td style="padding: 8px;">{{ $record->discount_percentage }}</td>
                    <td style="padding: 8px;">{{ $record->discount_amount }}</td>
                    <td style="padding: 8px;">{{ $record->start_date }}</td>
                    <td style="padding: 8px;">{{ $record->product_id }}</td>
                    <td style="padding: 8px;">{{ $record->status }}</td>
                    <td style="padding: 8px;">{{ $record->created_at }}</td>
                    <td style="padding: 8px;">{{ $record->updated_at }}</td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/promotions/form/' . $record->promotion_id) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Sửa</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/promotions/form/add') }}"
                            style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Thêm</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/promotions/delete/' . $record->promotion_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>


@endsection