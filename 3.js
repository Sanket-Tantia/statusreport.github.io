<<<<<<< HEAD

//var selected_date=sessionStorage.getItem("selected_date");
selected_date = "1/25/2018";
console.log(selected_date);

$(document).ready(function(){
	$('.carousel').carousel();
		$.ajax({
		type: 'POST',
		url: '3.php',
		data: {
	   'date' : selected_date,
	   'name':"Abu"
	  },
	  success: function(output) {
			$("#display22").html(output);
		},
		error: function(request, status, error){
		  console.log(request);
		  console.log(error);
		  console.log(status);
		}//Have u tried this
		});
});

function ret(n){
		$.ajax({
		type: 'POST',
		url: '3.php',
		data: {
	   'date' : selected_date,
	   'name':n
	  },
	  success: function(output) {
			console.log(output);
			$("#display22").html(output);
		},
		error: function(request, status, error){
		   console.log(request);
		  console.log(error);
		  console.log(status);
		}//Have u tried this
		});
	}
=======
var send_data = function(name){	
	console.log(name);
	sessionStorage.setItem("selected_name", name);
	$.post('collap.php',{postname:name,postdate:selected_date});
}
>>>>>>> aa42c2b488c66dd5bf8d7e849e6f95a5727ce187
