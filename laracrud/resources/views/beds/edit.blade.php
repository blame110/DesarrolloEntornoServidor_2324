<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Posts</title>
</head>
<body>
<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Bed</h3>
      <form action="{{ route('beds.update', $bed->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Marca</label>
          <input type="text" class="form-control" id="marca" name="marca"
            value="{{ $bed->marca }}" required>
        </div>
        <div class="form-group">
          <label for="body">Modelo</label>
          <textarea class="form-control" id="modelo" name="modelo" rows="3" required>{{ $bed->modelo }}</textarea>
        </div>
        <div class="form-group">
          <label for="title">Peso</label>
          <input type="text" class="form-control" id="peso" name="peso"
            value="{{ $bed->peso }}" required>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Bed</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
