let form = document.forms.myForm;

// 1. С перезагрузкой страницы
// form.addEventListener('submit', formHandler);


function formHandler(event) {
	event.preventDefault();
	if (!formValid(this)) return;
	this.submit();
};

function formValid(form) {
	//валидация полей формы
	return true;
};


// 2. Без перезагрузки => AJAX

form.addEventListener('submit', ajaxFormHandler);

function ajaxFormHandler(event) {
	event.preventDefault();
	if (!formValid(this)) return;
	let formData = new FormData(this);

	let xhr = new XMLHttpRequest();
	xhr.open('POST',this.action, true);
	xhr.send(formData);
	xhr.onload = function() {
		if (xhr.status === 200) {
			responseHandler(xhr.responseText);
			//console.log(echo $country);
		}
	}

}

function responseHandler(server_answer) {
	console.log("Ответ сервера: " + server_answer);
	let answer = document.getElementById("answer");
	answer.innerText = server_answer;
}