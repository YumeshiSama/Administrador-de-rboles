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
            <br>
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

                  <!-- fin step 1 -->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                <div class="multisteps-form__content">
                  <!-- step 2 -->

                  <!-- fin step 2 -->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                <div class="multisteps-form__content">
                  <!-- step 3 -->

                  <!-- fin step 3 -->
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="slideHorz">
                <div class="multisteps-form__content">
                  <!-- step 4 -->

                  <!-- fin step 4 -->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-success ml-auto" type="button" title="Send">Send</button>
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
