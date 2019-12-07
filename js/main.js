var app = {
  init: function() {
    app.draggable();
    app.buttons();
  },
  draggable: function() {
    $("#theCalculator").draggable();
  },
  buttons: function() {
    // Usuń wszystko
    $('#removeAll').on('click', function() {
      $('#viewBar').val('');
    });

    // Usuń ostani znak
    function removeLast(){
      $('#viewBar').val($("#viewBar").val().slice(0, -1));
    }
    $('#backspace').on('click', function() {
      removeLast();
    });

    // Kliknij numer
    $('.number').on('click', function() {
      var addToBar = $('#viewBar').val() + $(this).text();
      $('#viewBar').val(addToBar);
    });

    // Kliknij znak
    $('.sign').on('click', function() {
      var last = $("#viewBar").val().substr(-1);
      var addToBar = $('#viewBar').val() + $(this).text();
      if (last == $(this).text()) {
        removeLast();
        $('#viewBar').val(addToBar);
      } else {
        $('#viewBar').val(addToBar);
      }
    });

    // Przeliczanie
    function calculate() {
      return new Function('return ' + $("#viewBar").val())();
    }

    // Kliknij 'równa się' i przelicz
    $('#equal').on('click', function() {
      $("#viewBar").val(calculate());
    });

    // Dodaj znak dzielenia
    $('#divide').on('click', function(){
      $('#viewBar').val($('#viewBar').val() + "/");
    });

    // Dodaj znak mnożenia
    $('#times').on('click', function(){
      $('#viewBar').val($('#viewBar').val() + "*");
    });

    // Potęgowanie
    $('#power').on('click', function(){
      $('#viewBar').val(Math.pow($('#viewBar').val(), 2));
    });

    // Pierwiastkowanie
      $('#radical').on('click', function(){
      $('#viewBar').val(Math.sqrt($('#viewBar').val(), 2));
    });
  },
}

$("document").ready(function() {
  app.init();
});
