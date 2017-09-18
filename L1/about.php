<!DOCTYPE>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>
      Первый PHP
    </title>
    <style type="text/css">
		body {
			font-family: sans-serif;
		}
		
		dl {
			display: table-row;
		}
		
		dt, dd {
			display: table-cell;
			padding: 5px 10px;
		}
    </style>
  </head>
  <body>
    <?php
		$firstname="Anton";
		$lastname="Nikolaev";
		$email="nikolay@gmail.com";
		$city="Spb";
		$other_text="Очердная попытка начать программировать...";
    ?>
    <h1>
      Страница пользователя
    </h1>
    <dl>
      <dt>
        Имя:
      </dt>
      <dd>
        <?php echo $firstname; ?>
      </dd>
    </dl>
    <dl>
      <dt>
        Фамилия:
      </dt>
      <dd>
        <?php echo $lastname; ?>
      </dd>
    </dl>
    <dl>
      <dt>
        Адрес электронной почты
      </dt>
      <dd>
        <a href=
        "mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
      </dd>
    </dl>
    <dl>
      <dt>
        Город
      </dt>
      <dd>
        <?php echo $city; ?>
      </dd>
    </dl>
    <dl>
      <dt>
        О себе:
      </dt>
      <dd>
        <?php echo $other_text; ?>
      </dd>
    </dl>
  </body>
</html>
