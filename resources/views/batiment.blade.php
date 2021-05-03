<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    
    <section class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($batiments as $batiment)
                    <tr>
                        <th scope="row">{{ $batiment->id }}</th>
                        <td>{{ $batiment->nom }}</td>
                        <td>{{ $batiment->adresse }}</td>
                        <td>{{ $batiment->description }}</td>
                        <td>
                            <form action="/batiment/{{ $batiment->id }}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger text-white" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
          </table>
    </section>

    <script src="{{ asset ("js/app.js") }}"></script>
</body>
</html>