@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px 5px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">QnA List</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 10px;">Qna_id</th>
                    <th style="padding: 10px;">Question</th>
                    <th style="padding: 10px;">Answer</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Created_at</th>
                    <th style="padding: 10px;">Updated_at</th>
                    <th colspan="4" style="text-align: center; padding: 10px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $record->qna_id }}</td>
                    <td style="padding: 8px;">{{ $record->question }}</td>
                    <td style="padding: 8px;">{{ $record->answer }}</td>
                    <td style="padding: 8px;">{{ $record->status }}</td>
                    <td style="padding: 8px;">{{ $record->created_at }}</td>
                    <td style="padding: 8px;">{{ $record->updated_at }}</td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/qna/form/' . $record->qna_id) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Edit</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/qna/form/add') }}"
                            style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Add</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/qna/delete/' . $record->qna_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>


@endsection