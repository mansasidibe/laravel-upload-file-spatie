<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Création d'un nouveau client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info">
    <div class="container">
        <div class="d-flex p-2 bd-highlight mb-3">
            <a href="{{ route('client') }}" class="btn btn-outline-danger btn-sm">Go Back</a>
        </div>
        <div>
            <form action="{{ route('client.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="mb-3">
                    <label>Nom</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Image:</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
