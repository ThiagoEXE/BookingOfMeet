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

    <link href="{{ asset('css/styleagendamento.css') }}" rel="stylesheet">

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Novo agendamento</title>
</head>

<body>
    <div class="container">
        <form method="POST">
            @csrf
            <div class="row justify-content-center m-3">
                <div id="cardin" class="card col-lg-6 col-md-10 col-12 card login">
                    <div class="card-body">
                        <div class="primeiraparte">
                            <div class="row">
                                <div class="col-auto">
                                    <img class="logo"
                                        src="https://www.aente.com.br/img/aente-logo-horizontal-blue.png" height="60"
                                        alt="" />
                                </div>
                            </div>
                            <div class="m-3">
                                <div class="form-group primeiro">
                                    <h1 class="titulo">
                                        New
                                        <h1 class="titulo2 mb-3">schedule</h1>
                                    </h1>
                                    <h3 class="col-lg-8">Make your appointment below:</h3>
                                </div>
                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome"> Room name</label>
                                    <select name="room">
                                        {{-- REALIZAR UM FOR EACH SE CONECTANDO NO BANCO DE DADOS PARA GERAR DINAMICAMENTE OS
                                            CAMPOS DE SALA REPETIR A LOGICA PARA OWNER --}}
                                        @foreach ($rooms as $room)
                                            <option value= "{{$room->id}}">{{$room->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-body">
                                <div class="form-group mt-2">
                                    <label for="e-mail">Owner Name</label>
                                    <select name="owner">
                                        @foreach ($users as $user)
                                        <option value= "{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-body">
                                <div class="form-group mt-2">
                                    <label for="Theme">Theme</label>
                                    <input type="text" name="theme" id="Theme" class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-body">
                                <div class="form-group mt-2">
                                    <label for="Date">Date</label>
                                    <input type="datetime-local" name="date" id="Date" class="form-control"
                                        required />
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group mt-2">
                                <label for="Guests">Guests:</label><br />
                                <input type="text" name="guests" id="" cols="30" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group mt-2">
                                <label for="Description">Description:</label><br />
                                <textarea name="description" id="Description" cols="30" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-auto form-group m-3">
                                <div id="myDIV" class="mensagem-de-retorno">
                                    <div class="card mt-5">
                                        <div class="card-body">
                                            <label for="senha">Tem certeza que deseja retornar?</label>
                                            <div class="row mt-2">
                                                <div class="col col-lg-6">
                                                    <button class="btn btn-primary color-9" type="button"
                                                        onclick="location.href= 'outra.html'">
                                                        sim
                                                    </button>
                                                </div>
                                                <div class="col col-lg-6">
                                                    <button type="button" class="btn btn-primary color-9"
                                                        onclick="vazio()">
                                                        não
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-auto form-group m-3">
                                <button id="but_cadastrar" type="submit" class="btn btn-primary color-9">
                                    {{-- FINALIZAR A NAVEGABILIDADE DAS PAGINAS UMA PAGINA LEVA A OUTRA E ASSIM POR DIANTE --}}
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
