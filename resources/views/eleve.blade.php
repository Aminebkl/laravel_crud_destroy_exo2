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
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">date de naissance</th>
                <th scope="col">belge ou pas</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($eleves as $eleve)
                    <tr>
                        <th scope="row">{{ $eleve->id }}</th>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->age }}</td>
                        <td>{{ $eleve->ddn }}</td>
                        <td>{{ $eleve->Belge }}</td>
                        <td>
                            <form action="/eleve/{{ $eleve->id }}/delete" method="POST">
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