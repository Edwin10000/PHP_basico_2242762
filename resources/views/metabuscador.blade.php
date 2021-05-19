<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <body style="background-color: yellow">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal"
          method="POST"
          action="{{ url('buscar') }}" >
        @csrf
        <fieldset>

        <!-- Form Name -->
        <h1><legend>Buscador en diferentes motores de busqueda</legend></h1>

        <!-- Text input-->
        <div class="form-group">
          <h3><label class="col-md-4 control-label" for="termino">1.Ingrese el termino a buscar</label></h3>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <h3><label class="col-md-4 control-label" for="motores">2.Seleccione motor de búsqueda</label></h3>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>
           <div class="radio">
                <label for="motores-1">
                  <input type="radio" name="motores" id="motores-2" value="3">
                  Duck Duck Go
                </label>
                </div>
            <div class="radio">
                    <label for="motores-1">
                      <input type="radio" name="motores" id="motores-3" value="4">
                      Yahoo
                    </label>
                    </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-info">Buscar</button>
          </div>
        </div>

        </fieldset>
        </form>

</body>
</html>
