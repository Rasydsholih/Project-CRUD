@extends('layouts.app')

@section('content')
<h1>Tambah Akun</h1>

<form action="{{ route('kelola.store') }}" method="POST" class="card p-5">
    @csrf
    @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <!-- <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email :</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password :</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="role" class="col-sm-2 col-form-label">Role :</label>
        <div class="col-sm-10">
            <select class="form-select" id="role" name="role" required>
                <option selected disabled hidden>Pilih</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
</form> -->

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="role">Role:</label>
        <select id="role" name="role" class="form-control">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection
