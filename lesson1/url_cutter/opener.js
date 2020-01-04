let request = new XMLHttpRequest();
request.open("GET",form_handler.php, true);
request.onload = function() {
	if (request.status === 200) {
		resolve(request.response)
	} else {
		reject(Error)
	};
};
request.send();
ajaxRequest()