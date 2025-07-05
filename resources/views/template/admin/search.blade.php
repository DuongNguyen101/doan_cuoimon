@extends('layout.TemplateAdmin')
@section('content')
<div class="content">
    <h2>Tìm kiếm</h2>
    <form method="GET" action="{{ route('admin.search') }}" style="margin-bottom: 20px;">
        <div class="form-group" style="max-width: 300px;">
            <input type="text" name="search" value="{{ $searchTerm }}" placeholder="Nhập từ khóa..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
            <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">Tìm</button>
        </div>
    </form>

    @if($results)
    @foreach($results as $table => $records)
    @if(!$records->isEmpty())
    <h3>{{ ucfirst($table) }}</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                @foreach($records->first()->getFillable() as $column)
                <th>{{ $column }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
            <tr>
                @foreach($record->getFillable() as $column)
                <td>{{ $record->$column ?? 'N/A' }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    @endforeach
    @else
    <p>Không có kết quả nào.</p>
    @endif
</div>
@endsection