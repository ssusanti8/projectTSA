@extends('manage.layouts.main')

@section('container')
<!-- Post Content Column -->
<div class="card border-0 shadow rounded">
    <div class="card-header text-center">
        <h3>All Users</h3>
    </div>
    <!-- Title -->
    <div class="card body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->level }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $user->id) }}" method="POST">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Data user belum Tersedia.
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection