   $(window).scroll(function() {
        if ($("#headnav").offset().top >200) {
            $("#headnav").addClass("navbar-inverse");
            $("#headnav").css({"margin-top":"-5%", });
           
           
        } else {
            $("#headnav").removeClass("navbar-inverse");
            $("#headnav").css({"margin-top":"0", "margin-left":"0"});
        }
      });

$("form").submit(function(e){

	var error="";



	if ($("#email").val()=="") {
		error += "El campo email es obligatorio. <br>";

	}

if(error != ""){
	$("#error").html("<div class=\"text-warning\">"+error+"</div>");
	return false;
}
else{
	return true;
}
})	