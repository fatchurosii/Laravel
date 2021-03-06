@extends('layouts.dashboard')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="row">
            <div class="col-8 align-self-center">
                <h3>Users</h3>
            </div>

            {{-- Delete --}}
            <div class="col-4 text-right">
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="post" action="{{route('dashboard.users.update',['id'=>$user->id])}}">
                    @csrf
                    @method('put')
                <div class="from-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                    @error('name')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="{{old('email')?? $user->email}}">
                        @error('email')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                </div>

                <div class="form-group mb-0">
                    <button type="button" onclick="window.history.back()"class="btn btn-secondary btn-sm">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
            </form>
            </div>
        </div>

    </div>
</div>
    <div class="modal fade" id="deleteModal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Delete</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Yakin Ingin Menghapus User{{$user->name}}</p>
                </div>
                <div class="modal-footer">
                    <form action="{{route('dashboard.users.delete',['id'=>$user->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger">
                        <i class="fas fa-trash">
                    </i></button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
