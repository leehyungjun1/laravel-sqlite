@extends('journals.layout')
@section('title','일기 목록')
@section('content')
    <div class="mb-3 text-end">
        <a href="{{ route('journals.create') }}" class="btn btn-primary">새 일기 작성</a>
    </div>

    @if($today)
        <div class="alert alert-warning">
            오늘의 기록:<strong>{{ $today->title }}</strong>
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>날짜</th>
                <th>제목</th>
            </tr>
        </thead>
        <tbody>
            @foreach($journals->sortByDesc('entry_date') as $journal)
                <tr class="{{ $journal->entry_date === date('Y-m-d') ? 'table-success' : '' }}">
                    <td>{{ $journal->entry_date }}</td>
                    <td>{{ $journal->title  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
