@extends('journals.layout')

@section('title','새 일기 작성')

@section('content')
    <div class="card p-4">
        <form action="{{ route('journals.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="entry_date" class="form-label"">날짜 : </label>
                <input type="date" name="entry_date" required><br /><br />
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">제목 : </label>
                <input type="text" name="title" class="form-control" placeholder="제목" required><br /><br />
            </div>
            <div class="mb-3">
                <label for="content" class="form-label"">내용 : </label>
                <textarea name="content" class="form-control" placeholder="내용" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">저장</button>
            <a href="{{ route('journals.index') }}" class="btn btn-secondary">목록</a>
        </form>
    </div>
@endsection

