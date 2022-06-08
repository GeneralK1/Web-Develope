<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/get_userdata.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500" rel="stylesheet">
   <title>Get User's Data By Email</title>
</head>
<body>
   <form class="get-file" method="post" action="/get_userdata_handler.php">
      <input type="email" class="get-file__enter-email" name="email" placeholder="Email">
      <input type="submit" class="get-file__button" value="Получить данные">
   </form>
</body>
</html>