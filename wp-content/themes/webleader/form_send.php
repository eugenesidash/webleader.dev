<?php 

	$result = mail("work.page22@gmail.com", "Заявка с сайта Webleader", 
		"Данные о клиенте:
		Имя клиента: $_POST[webna]
		Телефон клиента: $_POST[webph]");

	if ($result) {
		echo "<p>Заявка успешно отправлена!</p><br><a href='/'>Вернуться на Главную</a>";
	}
	else {
		echo "<p>Заявка НЕ отправлена, попробуйте ещё раз позже. </p>";
	}
?>