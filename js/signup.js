$(document).ready(function(){
	$("#login").click(function(){
		username = $("#user").val();
		password = $("#password").val();
		email = $("#email").val();
		tel = $("#tel").val();
		console.log(password);
		$.post("sign_up_user.php",
				  {
				    user:username,
				    pass:password,
				    email:email,
				    tel:tel
				  },
				  function(data,status){
				  	console.log(data)
				  	if(data.status == 'success'){
				  		console.log(data.description);

				  	};
				  	if(data.status == 'failed'){
				  		console.log(data.description);
				  		$("p#signup-modal").empty();
				  		$("p#signup-modal").append(data.description);
				  		$('.small.modal').modal('show');
				  		
				  	};
				  });
		});
	

});