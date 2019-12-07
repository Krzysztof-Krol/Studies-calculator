<!DOCTYPE html>
<html lang="pl_PL" dir="ltr" class="h-100">
  <head>
    <meta charset="utf-8">
    <title>Kalkulator - Krzysztof Król K30</title>
  </head>
  <body class="h-100 bg-warning d-flex flex-row align-items-center justify-content-center">

    <!-- The calculator -->
    <div id="theCalculator" class="w-25 h-auto bg-dark p-4 shadow-lg rounded">
      <!-- Screen -->
      <div class="row">
        <div class="col-3">
          <button type="button" name="button" class="btn btn-secondary w-100 mb-3" id="removeAll">C</button>
        </div>
        <div class="col-9">
          <input type="text" id="viewBar" class="form-control mb-4 w-100 text-right py-2 px-3 bg-light" name="viewBar" value="">
        </div>
      </div>

      <!-- Buttons -->
      <div class="row">
        <div class="col-3">
          <button type="button" name="button" class="btn btn-secondary w-100 mb-3" id="times">&times;</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-secondary w-100 mb-3" id="divide">&divide;</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-secondary w-100 mb-3" id="power">x<sup>2</sup></button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-secondary w-100 mb-3" id="radical">&#8730;</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">1</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">2</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">3</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="sign btn btn-secondary w-100 mb-3" id="percent">%</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">4</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">5</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">6</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="sign btn btn-secondary w-100 mb-3" id="plus">+</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">7</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">8</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 mb-3 number">9</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="sign  btn btn-secondary w-100 mb-3" id="minus">-</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="sign btn btn-secondary w-100" id="dot">.</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-light w-100 number">0</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-secondary w-100 mb-3" id="backspace">&#8592;</button>
        </div>
        <div class="col-3">
          <button type="button" name="button" class="btn btn-danger w-100" id="equal">=</button>
        </div>
      </div>
    </div>

    <span id="credits"><?= date('Y'); ?> Krzysztof Król</span>

    <!-- Libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
