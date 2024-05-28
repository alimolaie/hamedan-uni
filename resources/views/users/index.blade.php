@extends('layouts.app', ['pagination_items' => $user])

@section('title', 'همه کاربران')

@section('content')
    @if (session('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover rounded overflow-hidden shadow-sm">
            <thead>
            <tr>
                <th class="fw-normal text-center align-middle" scope="col">#</th>
                <th class="fw-normal text-center align-middle" scope="col">نام و نام خانوادگی</th>
                <th class="fw-normal text-center align-middle" scope="col">نام کاربری</th>
                <th class="fw-normal text-center align-middle" scope="col">سمت</th>
                <th class="fw-normal text-center align-middle" scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($user as $key=> $row)
                <tr>
                    <th class="fw-normal text-center align-middle" scope="row">{{ ++$key }}</th>
                    <td class="fw-normal text-center align-middle">{{ $row->name }}</td>
                    <td class="fw-normal text-center align-middle">{{ $row->username }}</td>
                    <td class="fw-normal text-center align-middle">
                            <?php
                            $role = $user->role;

                            $return_value = match ($role) {
                                1 => 'مسئول آموزش کل',
                                'bar' => 'This food is a bar',
                                'cake' => 'This food is a cake',
                                default =>'مدیر سیستم'
                            };


                            ?>

                    </td>

                    <td class="fw-normal text-center text-nowrap align-middle">
                        <a href="{{ route('lessons.edit', ['lesson' => $row->id]) }}" class="btn btn-sm btn-primary">
                            ویرایش
                        </a>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#Modal" data-bs-action="{{ route('lessons.destroy', ['lesson' => $row->id]) }}" data-bs-name="{{ $row->name }}">
                            حذف
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @include('layouts.modal')
@endsection
