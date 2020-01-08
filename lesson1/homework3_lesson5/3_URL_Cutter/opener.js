// Получили форму
let form = document.forms.url_form;

// Повесили обработчик событий
form.addEventListener('submit', ajaxFormHandler);

function ajaxFormHandler(event) {
	event.preventDefault();
	if (!formValid(this)) return;

	let formData = new FormData(this);
	
	// Запрос
	let request = new XMLHttpRequest();
	request.open('POST',this.action, true);
	
	// Действия при получении сервером запроса
	request.onload = function() {
		console.log(request.status);
		if (request.status === 200) {
			console.log(request.responseText)
			responseHandler(request.responseText);
		} else {
			reject(Error)
		};
	};
	request.send(formData);
};	

// Валидатор
function formValid(form) {
	//валидация полей формы
	return true;
};

// Передача ответа сервера на клиент
function responseHandler(server_answer) {
	let answer = document.getElementById("answer");
	answer.innerText = "Скоращённая ссылка: "+server_answer;
};