(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$(".toggle-password").click(function() {

	  $(this).toggleClass("fa-eye fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
	    input.attr("type", "text");
	  } else {
	    input.attr("type", "password");
	  }
	});

})(jQuery);


// register_user.js
$(".signup-form").submit(function(e) {
  e.preventDefault();

  $.ajax({
      url: "../api/register_user.php",
      method: "POST",
      data: $(this).serialize(),
      dataType: "json",
      success: function(response) {
          if (response.success) {
              alert("Usuario registrado con éxito");
          } else {
              alert("Error al registrar el usuario: " + response.message);
          }
      },
      error: function(xhr, status, error) {
          console.log("Error de conexión: " + error);
      }
  });
});