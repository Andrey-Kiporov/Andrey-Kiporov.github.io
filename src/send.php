<?php 
	$name = $_POST['name'];
	$tel = $_POST['tel'];

	$name = htmlspecialchars($name);
	$tel = htmlspecialchars($tel);

	$name = urldecode($name);
	$tel = urldecode($tel);

	$name = trim($name);
	$tel = trim($tel);

	if (mail("kipesh5292876@gmail.com",
			"Новое письмо с сайта",
			"Имя: ".$name."\n".
			"Телефон: ".$tel,
			"From: no-reply@mydomain.ru \r\n")

	) {
		echo ('Письмо успешно отправлено!');
	}

	else {
		echo('Есть ошибки! Проверьте данные...');
	}
		

?>