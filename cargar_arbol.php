<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Bootstrap Multi Step Form</title>
  <link rel="stylesheet" href="css/form_style.css">
 
</head>
<body>

<div class="content">
  <div class="content__inner">
    <div class="container overflow-hidden">
      <div class="multisteps-form">
      	<div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info"></button>
              <button class="multisteps-form__progress-btn" type="button" title="Address"></button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info"></button>
              <button class="multisteps-form__progress-btn" type="button" title="Message"></button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form">
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="slideHorz">
                <div class="multisteps-form__content">
                  <!-- step 1 -->
                  <h1>Cargar Arbol</h1>
                  <p>Para realizar la carga, completa el formulario proporcionando los siguientes datos:</p>
                  <h2>Especie del arbol:</h2>
                  <div class="form-group">
                    <select class="form-control" id="especie">
                      <option value="">-Seleccionar-</option>
                      <option value="">1</option>
                    </select>
                  </div>
                  <!-- fin step 1 -->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                <div class="multisteps-form__content">
                  <!-- step 2 -->
                  <h2>Tipo de copa:</h2>
          <div class="button-row d-flex ">
            <input type="radio" name="copa" id="1">
            <label for="1">small</label>
            <input type="radio" name="copa" id="2">
            <label for="2">large</label>
          </div>
          <div class="button-row d-flex ">
            <input type="radio" name="copa" id="3">
            <label for="3">small</label>
            <input type="radio" name="copa" id="4">
            <label for="4">large</label>
          </div>
               <h2>Magnitud:</h2>
          <div class="button-row d-flex ">
            <input type="radio" name="magnitud" id="5">
            <label for="5">small</label>
            <input type="radio" name="magnitud" id="6">
            <label for="6">large</label>
          </div>
          <div class="button-row d-flex ">
            <input type="radio" name="magnitud" id="7">
            <label for="7">small</label>
            <input type="radio" name="magnitud" id="8">
            <label for="8">large</label>
          </div>
                  <!-- fin step 2 -->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                <div class="multisteps-form__content">
                  <!-- step 3 -->
          <h2>Tipo de columnar:</h2>
          <div class="button-row d-flex ">
            <input type="radio" name="columnar" id="9">
            <label for="9">small</label>
            <input type="radio" name="columnar" id="10">
            <label for="10">large</label>
          </div>
          <div class="button-row d-flex ">
            <input type="radio" name="columnar" id="11">
            <label for="11">small</label>
            <input type="radio" name="columnar" id="12">
            <label for="12">large</label>
          </div>
               <h2>Estado de salud:</h2>
          <div class="button-row d-flex ">
            <input type="radio" name="salud" id="13">
            <label for="13">small</label>
            <input type="radio" name="salud" id="14">
            <label for="14">large</label>
          </div>
          <div class="button-row d-flex ">
            <input type="radio" name="salud" id="15">
            <label for="15">small</label>
            <input type="radio" name="salud" id="16">
            <label for="16">large</label>
          </div>
                  <!-- fin step 3 -->
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                <div class="multisteps-form__content">
                  <!-- step 4 -->

                  <!-- fin step 4 -->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Atras</button>
                    <button class="btn btn-success ml-auto" type="button" title="Send">Cargar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script  src="js/cargar_arbol.js"></script>

</body>
</html>
