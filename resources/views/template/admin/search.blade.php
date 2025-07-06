@extends('layout.TemplateAdmin')

@section('content')
<div class="content">
    <h1>Tìm kiếm - {{ $adminName }}</h1>

    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif

    <form method="GET" action="{{ route('search') }}" style="margin-bottom: 20px;">
        <input type="text" name="search" value="{{ $searchTerm }}" placeholder="Nhập từ khóa tìm kiếm" style="padding: 10px; width: 300px; border: 1px solid #ccc; border-radius: 6px;">
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px;">Tìm kiếm</button>
    </form>

    @if (empty(trim($searchTerm)))
    <p style="color: #666;">Vui lòng nhập từ khóa để bắt đầu tìm kiếm.</p>
    @elseif (!empty($results) && count(array_filter($results)) === 0)
    <p style="color: #666;">Không tìm thấy kết quả nào cho "{{ $searchTerm }}".</p>
    @else
    @foreach ($results as $type => $items)
    @if (!empty($items))
    <h2>{{ ucfirst(str_replace('_', ' ', $type)) }}</h2>
    @if (count($items) > 0)
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <thead style="background-color: #007bff; color: white;">
            <tr>
                @if ($type === 'admins' || $type === 'users')
                <th style="padding: 10px;">Tên</th>
                <th style="padding: 10px;">Email</th>
                @elseif ($type === 'categories')
                <th style="padding: 10px;">Tên</th>
                <th style="padding: 10px;">Mô tả</th>
                @elseif ($type === 'products')
                <th style="padding: 10px;">Tên</th>
                <th style="padding: 10px;">Giá</th>
                @elseif ($type === 'orders')
                <th style="padding: 10px;">Địa chỉ</th>
                <th style="padding: 10px;">Tổng tiền</th>
                @else
                <th style="padding: 10px;">Thông tin</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                @if ($type === 'admins' || $type === 'users')
                <td style="padding: 8px;">{{ $item->name }}</td>
                <td style="padding: 8px;">{{ $item->email }}</td>
                @elseif ($type === 'categories')
                <td style="padding: 8px;">{{ $item->name }}</td>
                <td style="padding: 8px;">{{ $item->description }}</td>
                @elseif ($type === 'products')
                <td style="padding: 8px;">{{ $item->name }}</td>
                <td style="padding: 8px;">{{ $item->price }}</td>
                @elseif ($type === 'orders')
                <td style="padding: 8px;">{{ $item->address }}</td>
                <td style="padding: 8px;">{{ $item->total_amount }}</td>
                @else
                <td style="padding: 8px;">{{ $item }}</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    @endif
    @endforeach
    @endif
</div>
@endsection