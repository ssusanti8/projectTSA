@extends('manage.layouts.main')

@section('container')
<h1 class="h2">Edit Users</h1>
<div class="col-lg-8">
    <!-- Title -->
    <br><br>
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" readonly name="name" value="{{ old('name', $user->name) }}"></br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" readonly name="email" value="{{ old('email', $user->email) }}"></br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" readonly name="password" value="{{ old('password', $user->password) }}"></br>
        </div>
        <div class="form-group">
            <label for="roles">Level</label>
            <select type="text" class="form-control" required="required" name="level" value="{{ old('roles', $user->level) }}">
                <option>Administrator</option>
                <option>User</option>
            </select>
            <br>
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-right">Edit User</button>
    </form><br><br>

</div>
@endsection