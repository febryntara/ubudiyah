@extends('layouts.dashboard-layout') @section('body')
    <h2 class="text-center">Data User</h2>

    <form method="post" action="{{ route('logn.store') }}">
        @csrf

        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
@endsection()
