<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Generador de Certificado PDF</title>
  </head>
  <body>
  	<div class="container">
  		<div class="card mt-4">
		<div class="card-body">
			<h1 class="card-title">Generador de Certificado</h1>
			<p class="card-text">Ingresa tus datos y solicita tu certiciado.</p>
			<form method="POST" action="/generate.php">
				<div class="form-group">
					<label for="firstname">Nombres</label>
					<input id="firstname" type="text" class="form-control" name="firstname" placeholder="Ingresa tus Nombres" required>
				</div>
				<div class="form-group">
					<label for="lastname">Apellidos</label>
					<input id="lastname" type="text" class="form-control" name="lastname" placeholder="Ingresa tus Apellidos" required>
				</div>
				<div class="form-group">
					<label for="course">Curso</label>
					<input id="course" type="text" class="form-control" name="course" placeholder="Ingresa el nombre de tu Curso" required>
				</div>
				<button type="submit" class="btn btn-lg btn-success">Solicitar Certificado</button>
			</form>
		</div>
		</div>
  	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
