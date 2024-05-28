@extends('layouts.app')

@section('title', 'ویرایش درس')

@section('content')
    <div class="row justify-content-center align-items-center h-100 p-5">
        <form action="{{ route('collage.update',  $collage->id) }}" method="POST" class="col-lg-5 card p-5">
            @csrf
            @method('put')

            @if (session('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">نام درس :</label>
                <input name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="نام دانشکده را وارد کنید" value="{{ old('name') ?? $collage->name }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-info text-white">ویرایش</button>
        </form>
    </div>
@endsection
