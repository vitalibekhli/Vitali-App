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
			  	console.log(data.login);
			    if(data.login == 'true'){
			    	window.location = document.URL;
			    }else{
			    	console.log('wrong pass');
			    	$('.small.modal').modal('show');
			    }
			  });
	});
});