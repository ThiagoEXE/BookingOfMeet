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
        <script src="{{ asset('js/codigoregistro.js')}}"></script>
   
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/styleagendamento.css') }}" />
</head>

<body>
    <div class="container">
        <div class="row">
            <form method="POST" action="/">
              @csrf
                <div class="col col-lg-4 mt-5">
                    <div class="card ofc mt-5">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-12 col-lg-8">
                                    <img class="logo"
                                        src="https://www.aente.com.br/img/aente-logo-horizontal-blue.png" height="50"
                                        alt="" />

                                    <div class=" titulo mt-3">
                                        <h2 class="text-muted">
                                            Sign up <span class="spanlogin">HERE</span>
                                        </h2>

                                    </div>
                                </div>
                                <span class="mensagem1 mt-1">Create your account:</span>
                            </div>
                            <div class="col-auto mt-3">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                      id="flexRadioDefault2" onclick="myFunction()" />
                                  <label class="form-check-label" for="flexRadioDefault2">Are you a
                                      visitor?</label>
                              </div>
                          </div>
                            <div class="form-group mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="email" for="name">Name</label>
                                        <input type="text" id="name" class="form-control mt-2"
                                            placeholder="Type your Name" required  name="name"/>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <label class="email" for="email ">E-mail:</label>
                                        <input type="email" id="email" class="form-control mt-2" required  name="email"/>
                                    </div>
                                </div>
                            </div>
                            <div id="senha1">
                              <div class="card mt-3">
                                <div class="card-body">
                                    <label for="text">Username</label>
                                    <input type="text" id="text" class="form-control mt-2"
                                        placeholder="Type your Username" required  name="username"/>
                                </div>
                            </div>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control mt-2"
                                            placeholder="Type your password"  name="password" required/>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <label for="confirmed">Confirm your password</label>
                                        <input type="password" id="confirmed" class="form-control mt-2" name="confirmed" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between mt-3">
                                <div class="col-auto">
                                    <button class="btn-hover color-9" type="submit">Sign up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
