@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                    <div class="card-body">
                          <br>    
                          
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                              <tr>
                                <td>{{$user->name}}</th>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
                                    <a href="{{ route('admin.users.destroy', $user->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
