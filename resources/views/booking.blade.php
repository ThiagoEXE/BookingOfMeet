<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,700&family=Open+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/styleagendamento.css') }}" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agendamento</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-between">
            <div class="col-auto">
              <img
                class="logo"
                src="https://www.aente.com.br/img/aente-logo-horizontal-blue.png"
                height="50"
                alt=""
              />
            </div>

            <div class="col-auto">
              <h2>Room schedule</h2>
            </div>
          </div>

          <div class="row justify-content-between">
            <div class="col-12">
              <div style="overflow-x: auto; overflow-y: auto">
                <table class="table mt-3">
                  <thead>
                    <th>Owner</th>
                    <th>Date/Time</th>
                    <th>Theme</th>
                    <th></th>
                    <th></th>
                    <th>Action</th>
                    <th><a class="btn-hover color-green" href="/create/booking">New schedule</a></th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Mateus</td>
                      <td>09/06/2022</td>
                      <td>O front é mt brabo </td>
                      <td></td>
                      <td></td>
                      <td><button class="btn-hover color-blue">Edit</button>  <button class="btn-hover color-red">Delete</button> </td>
                    </tr>
                    <tr>
                      <td>Gabriel</td>
                      <td>09/06/2022</td>
                      <td>O front é mt brabo</td>
                      <td></td>
                      <td></td>
                      <td><button class="btn-hover color-blue">Edit</button>  <button class="btn-hover color-red">Delete</button> </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
