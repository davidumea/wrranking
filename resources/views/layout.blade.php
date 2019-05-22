<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container border bg-dark">
        <nav class="container my-2">
            <h1 class="font-weight-bold text-light">Ranking</h1>
            <nav class="row text-center">
                <nav class="col-3 border py-1">
                    <h3><a href="/">Experience</a></h3>
                </nav>
                <nav class="col-3 border py-1">
                    <h3><a href="/clan">Clan</a></h3>
                </nav>
                <nav class="col-3 border py-1">
                    <h3><a href="/tournament">Tournament</a></h3>
                </nav>
                <nav class="col-3 border py-1">
                    <h3><a href="/br">Battle Royale</a></h3>
                </nav>
            </nav>
        </nav>
    @yield('content')
    </div>

    <!--                 <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>ja</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>nej</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>ja</td>
                </tr> -->
</body>
</html>