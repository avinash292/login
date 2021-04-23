jQuery(function($) {
	var validation_holder;
	
	$("form#register_form input[name='submit']").click(function() {
	
	var validation_holder = 0;
		var username		= $("form#register_form input[name='username']").val();
		var email 			= $("form#register_form input[name='email']").val();
		var email_regex 	= /^[\w%_\-.\d]+@[\w.\-]+.[A-Za-z]{2,6}$/; // reg ex email check	
		var password 		= $("form#register_form input[name='password']").val();
		var gender 			= $("form#register_form input[name='gender']");
		var city			= $("form#register_form select[name='city']").val();
		var dob				= $("form#register_form input[name='bday']").val();
		var address			= $("form#register_form textarea").val();
		var pic				= $("form#register_form input[name='myfile']").val();
		
		/* validation start */	
		
		if(username == "") {
			$("span.val_uname").html("*This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_uname").html("");
			}

		if(email == "") {
			$("span.val_email").html("*This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			if(!email_regex.test(email)){ // if invalid email
				$("span.val_email").html("*Invalid Email!").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_email").html("");
			}
		}
		if(password == "") {
			$("span.val_pass").html("*This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_pass").html("");
			}
			

		if(gender.is(':checked') == false) {
			$("span.val_gen").html("*This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_gen").html("");
			}

			if(city == "") {
			$("span.val_city").html("*This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_city").html("");
			}

			if(dob == "") {
			$("span.val_dob").html("*This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_dob").html("");
			}

			if(address == "") {
			$("span.val_address").html("*This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_address").html("");
			}

			if(pic == "") {
			$("span.val_file").html("*This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_file").html("");
			}

			var checkedData=[];
	    $('.hobby').each(function(i){
	        if($(this).is(':checked'))
	        {
	            checkedData.push($(this).val());
	        }
	    
	    });


	    if(checkedData=='' || checkedData==null)
	    {
	        validation_holder = 1;
	        $("span.val_hobby").html("*This field is required.").addClass('validate');
	    }
	    else
	    {
	        $('#val_hobby').html("");
	    }

		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	


		}); // click end 

	}); // jQuery End

