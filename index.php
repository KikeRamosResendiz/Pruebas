<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/jcrop/dist/jcrop.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/jcrop"></script>
</head>
<body>
<input type="file" id="imagen" name="imagen" accept="image/*">
    <br><br>
    <p></p>
    <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
    <img id="imagenPrevisualizacion">
  <script type="text/javascript">
    $('#imagen').change(function() {
    const imagen = $('#imagen').val();
    console.log (imagen);
    $('#imagenPrevisualizacion').prop('src', imagen);
    });
  </script>
</body>
</html>