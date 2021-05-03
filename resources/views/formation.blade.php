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
                <th scope="col">Nombre de personnes</th>
                <th scope="col">Nombre de personnes hors condition</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($formations as $formation)
                    <tr>
                        <th scope="row">{{ $formation->id }}</th>
                        <td>{{ $formation->nom }}</td>
                        <td>{{ $formation->age }}</td>
                        <td>{{ $formation->age }}</td>
                        <td>{{ $formation->description }}</td>
                        <td>
                            <form action="/formation/{{ $formation->id }}/delete" method="POST">
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