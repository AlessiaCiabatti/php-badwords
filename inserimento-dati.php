<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserimento dati</title>
</head>

<body>
  <div class="container">
  <form>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Parola da censurare</label>
    <input name="parola" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Paragrafo</label>
    <textarea name="paragrafo" class="form-control" rows="10"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
  </div>
</body>
</html>