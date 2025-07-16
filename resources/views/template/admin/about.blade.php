@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px 5px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">About us</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 10px;">id</th>
                    <th style="padding: 10px;">title</th>
                    <th style="padding: 10px;">description</th>
                    <th style="padding: 10px;">image</th>
                    <th style="padding: 10px;">create_at</th>
                    <th colspan="4" style="text-align: center; padding: 10px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $record->id }}</td>
                    <td style="padding: 8px;">{{ $record->title }}</td>
                    <td style="padding: 8px;">{{ $record->description }}</td>
                    <td style="padding: 8px;">{{ $record->image }}</td>
                    <td style="padding: 8px;">{{ $record->comment }}</td>
                    <td style="padding: 8px;">{{ $record->create_at }}</td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/about/form/' . $record->id) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Sửa</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>


@endsection