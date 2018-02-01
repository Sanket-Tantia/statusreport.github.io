var send_data = function(name){	
	console.log(name);
	sessionStorage.setItem("selected_name", name);
	$.post('collap.php',{postname:name,postdate:selected_date});
}
