function validateEmail(email) { 
	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return reg.test(email);
}

$(document).ready(function() {
	$(".modalbox").fancybox();
	$("#contact").submit(function() {
		return false;
	});
	
	$("#send").on("click", function(){
		var nameval = $("#cname").val();
		var subval = $("#subject").val();
		var emailval = $("#email").val();
		var msgval = $("#msg").val();
		var msglen = msgval.length;
		var mailvalid = validateEmail(emailval);
		
		if(nameval==""){
			$("#cname").addClass("error");
		}
        $("#cname").change(function() {
            $("#cname").removeClass("error");
        });
		if(subval==""){
			$("#subject").addClass("error");
		}
        $("#subject").change(function() {
            $("#subject").removeClass("error");
        });
		if (mailvalid == false) {
			$("#email").addClass("error");
		}
        $("#email").change(function() {
            $("#email").removeClass("error");
        });
		
		if (msglen < 4) {
			$("#msg").addClass("error");
		}
        $("#msg").change(function() {
            $("#msg").removeClass("error");
        });
		
		if (mailvalid == true && msglen >= 4) {
			$("#send").replaceWith("<em>sending...</em>");
			
			$.ajax({
				type: 'POST',
				url: 'contactMail.php',
				data: $("#contact").serialize(),
				success: function(data) {
					if(data == "true") {
						$("#contact").fadeOut("fast", function(){
							$(this).before("<p><strong>Success! Your message has been sent, thanks!</strong></p>");
							setTimeout("$.fancybox.close()", 2000);
						});
					}else{
						$("#contact").fadeOut("fast", function(){
							$(this).before("<p><strong>Alert! You got an error here!</strong></p>");
							setTimeout("$.fancybox.close()", 2000);
						});
					}
				}
			});
			
		}
	});
});// JavaScript Document