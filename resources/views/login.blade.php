<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,700&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/stylelogin.css') }}" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col col-lg-4 mt-5">
                <form method="POST" action="/login">
                  @csrf
                    <div class="card ofc mt-5">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-8">
                                    <img class="logo"
                                        src="https://www.aente.com.br/img/aente-logo-horizontal-blue.png" height="50"
                                        alt="" />
                                    <div class="titulo mt-3">
                                        <h1 class="d-flex">Welcome!</h1>
                                        <h2 class="text-muted">
                                            Do your <span class="spanlogin">Booking</span>
                                        </h2>
                                    </div>
                                </div>
                                <span class="mensagem1 mt-3">Enter your credentials and log in to the system:</span>
                            </div>
                            <div class="form-group mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="email" for="email ">Type your e-mail</label>
                                        <input type="email" id="email" class="form-control mt-2"
                                            placeholder="Type your e-mail " required name="email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <label for="pass">Type your password</label>
                                    <input type="password" id="pass" class="form-control mt-2"
                                        placeholder="Type your password" required name="password"/>
                                </div>
                            </div>
                            <div class="row justify-content-between mt-3">
                                <div class="col-auto">
                                    <input type="checkbox" name="" id="keepconnect" />
                                    <label for="keepconnect">Keep me logged in</label>
                                </div>
                                <div class="col-auto">
                                    <a onclick="location.href='/register'" class="registrationhref">First time? Sign up
                                        here!</a>
                                </div>
                            </div>
                            <div class="row justify-content-between mt-3">
                                <div class="col-auto">
                                    <button class="btn-hover color-9" type="submit">
                                        Login
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-secondary">
                                        Forgot your password?
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
