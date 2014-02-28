$(document).ready(function(){
	$("#login").click(function(){
			username = $("#user").val();
			password = $("#password").val();
			console.log(username+password);
			$.post("login.php",
			  {
			    user:username,
			    pass:password
			  },
			  function(data,status){
			  	console.log(data);
			  	console.log(data.login);
			    if(data.status == 'success'){
			    	window.location = document.URL;
			    }
			    if(data.status == 'failed'){
			    	console.log(data.description);
			    	$('.small.modal').modal('show');
			    }
			  });
	});
	
});
