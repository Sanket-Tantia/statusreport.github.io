var selected_date=sessionStorage.getItem("selected_date");
var selected_name=sessionStorage.getItem("selected_name");
console.log(selected_date);
console.log(selected_name);

$('#show_name').html(selected_name);

/*$(document).ready(function(){
	var response = '';
	$.ajax({ type: "GET",   
		url: "collap.php",
		async: false,
		success : function(text)
		{
			response = text;
		}
	});
	alert(response);
});*/