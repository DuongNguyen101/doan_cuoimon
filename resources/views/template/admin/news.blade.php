@extends('layout.TemplateAdmin')
@section('content')

<div class="content">
    @if (session('msg'))
    <div style="color: green;">{{ session('msg') }}</div>
    @endif
    <div class="danh-muc-sp" style="max-width: 1000px; margin: 40px 5px auto; font-family: Arial, sans-serif;">
        <div class="row" style="margin-bottom: 20px;">
            <h2 style="text-align: center; color: #333; font-weight: bold;">News List</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 10px;">News_id</th>
                    <th style="padding: 10px;">Title</th>
                    <th style="padding: 10px;">Content</th>
                    <th style="padding: 10px;">Author</th>
                    <th style="padding: 10px;">Image_url</th>
                    <th style="padding: 10px;">Description</th>
                    <th style="padding: 10px;">Publish_date</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Created_at</th>
                    <th style="padding: 10px;">Updated_at</th>
                    <th colspan="4" style="text-align: center; padding: 10px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                <tr style="text-align: center; border-bottom: 1px solid #ccc;">
                    <td style="padding: 8px;">{{ $record->news_id }}</td>
                    <td style="padding: 8px;">{{ $record->title }}</td>
                    <td style="padding: 8px">{!! \Illuminate\Support\Str::limit($record->content, 100) !!}</td>
                    <td style="padding: 8px;">{{ $record->author }}</td>
                    <td style="padding: 8px;">
                        @if ($record->image_url)
                        <img src="{{ asset( 'image/shoplist/'.$record->image_url) }}" alt="Product Image" style="width: 60px; height: auto; border-radius: 4px;">
                        @else
                        <em>Không có ảnh</em>
                        @endif
                    </td>
                    <td style="padding: 8px">{!! \Illuminate\Support\Str::limit($record->description, 100) !!}</td>
                    <td style="padding: 8px;">{{ $record->publish_date }}</td>
                    <td style="padding: 8px;">{{ $record->status }}</td>
                    <td style="padding: 8px;">{{ $record->created_at }}</td>
                    <td style="padding: 8px;">{{ $record->updated_at }}</td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/news/form/' . $record->news_id) }}"
                            style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Edit</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/news/form/add') }}"
                            style="background-color: #28a745; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Add</a>
                    </td>
                    <td style="padding: 8px;">
                        <a href="{{ url('/template/admin/news/delete/' . $record->news_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                            style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none;">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>


@endsection