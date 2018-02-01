
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
