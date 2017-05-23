(function($, window) {
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').focus()
	});
	
  $( "#datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();
  $( "#datepicker2" ).datepicker({ dateFormat: 'dd-mm-yy' }).val();

  $(".geral").append('<div class="inc button">+</div><div class="dec button">-</div>');
  $(".button").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }
    $button.parent().find("input").val(newVal);
  });

  $('#showum').click(function() {
    $('.um').toggle("slide");
    $('.dois').hide();
    $('.tres').hide();
  });
  $('#showdois').click(function() {
    $('.um').hide();
    $('.dois').toggle("slide");
    $('.tres').hide();
  });
  $('#showtres').click(function() {
    $('.um').hide();
    $('.dois').hide();
    $('.tres').toggle("slide");
  });
})(jQuery, window);
