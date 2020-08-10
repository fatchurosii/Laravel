@extends('layouts.dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="row">
            <div class="col-8">
                <h3>Users</h3>
            </div>
        </div>
    </div>
    <div class="card-body p">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Registered</th>
                <th>Edited</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{($users->currentPage()-1)* $users->perPage()+ $loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->edited_at}}</td>
                </tr>
            @endforeach
        </table>
        {{-- Pagination --}}
        {{$users->links()}}
    </div>
</div>

@endsection
