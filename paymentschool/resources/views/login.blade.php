<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login School Payment</title>
    <style>
        /* Style untuk sisi kiri */
        .left-section { 
            background-color: #18345E;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .left-section img {
            max-width: 300px;
            margin-bottom: -70px;
        }
        .left-section h1 {
            font-size: 24px;
            margin-top: 10px;
        }
        .left-section p {
            font-size: 14px;
        }
        
        /* Style untuk form login */
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            font-size: 24px;
            color: #18345E;
            background-color: transparent;
            border: none;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #f0a500;
            color: #18345E;
            border: none;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #d48900;
        }
        .forgot-password {
            float: right;
            font-size: 12px;
            color: #18345E;
        }
        .form-check-label {
            font-size: 12px;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row vh-100">
            <!-- Sisi kiri -->
            <div class="col-sm-4 left-section">
                <img src="style/assets/img/logo-img.png" class="img-fluid animated" alt="School Payment Logo">
                <h1>School Payment</h1>
                <p>Academic Payment Portal</p>
            </div>
            
            <!-- Sisi kanan -->
            <div class="col-sm-8 d-flex justify-content-center align-items-center">
                <div class="card login-card">
                    <div class="card-header text-center">
                       <h1> Login Here! </h1>
                    </div>
                    <div class="card-body">
                        <!-- Menampilkan pesan sukses atau error -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Form Login -->
                        <form id="loginForm" action="/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="IdAdmin" placeholder="IDAdmin" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="Password" placeholder="Password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button href="/dashboard" type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                                <a href="#" class="forgot-password">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6jty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
