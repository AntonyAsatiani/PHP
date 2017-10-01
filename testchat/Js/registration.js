$(function()
	{
$("form[name='reg']").validate({
	rules:
	{
		firstname: "required",
		lastname: "required",
		email: {
			required: true,
			email:true
		},
		
		mobile: {
			required: true,
			minlength: 9
		},
		personalnumber: {
			required: true,
			minlength: 11
		},
		password:
		{
 			required: true
		}
	},
	messages: {
		firstname: "Please enter your firstname",
		lastname: "Please enter your lastname",
		email: "Please enter your email",
		
		mobile: {
			required: "Please enter phonenumber",
			minlength: "phonenumber must be at least 9 characters long"
		},
		personalnumber: {
			required: "Please enter your personal number",
			minlength: "Personal number must be at least 11 characters long"
		},
		password: 
		{
			required: "Please enter your password"
		}


	},
	submitHandler: function(form)
	{
		form.submit();
	}
});

});