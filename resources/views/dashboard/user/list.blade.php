@extends('layouts.dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="row">
            <div class="col-8 align-self-center">
                <h3>Users</h3>
            </div>

            <div class="col-4">
            <form method="get" action="{{url('dashboard/users')}}">
                    <div class="input-group">
                    <input type="text" class="form-control form-control-sm" name="q" value="{{$request['q']??''}}">
                        <div class="input-group-append">
                            <button class="btn btn-secondary btn-sm">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Registered</th>
                <th>Edited</th>
                <th>&nbsp;</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{($users->currentPage()-1)* $users->perPage()+ $loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->edited_at}}</td>
                <td><a href="{{url('dashboard/user/edit/'.$user->id)}}" class="btn btn-success btn-sm">
                    <i class="fas fa-edit"></i>
                </a></td>
                </tr>
            @endforeach
        </table>
        {{-- Pagination --}}
        {{$users->appends($request)->links()}}
    </div>
</div>

@endsection
