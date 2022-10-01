<!DOCTYPE html>
<html>

<head>
    <title>MDA | Login</title>
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 100px">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <label>MDA | Login</label>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login_attempt') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" name="login">Login</button> <br>
                            <p class="text-center">Belum Punya Akun? <a href="daftar"
                                    style="text-decoration: none;">Daftar</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
