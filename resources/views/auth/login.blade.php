<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICCONIC | Login</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4>Login</h4></div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <tr>
                                        @foreach ($errors->all() as $error)
                                            <td>$error</td>
                                        @endforeach
                                    </tr>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="email"><h5>Email</h5></label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password"><h5>Password</h5></label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="mt-2">Belum Memiliki Akun? Silahkan <a href="{{ route('auth.register') }}" class="primary-text">Register</a></p>
            </div>
        </div>
    </div>
</body>
</html>