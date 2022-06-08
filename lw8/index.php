<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Noto+Sans:wght@700&family=Roboto+Condensed&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="css/style.css">
 	<title>Don't do it</title>
</head>
<body>
	<header class="header">
		<img class="header__logo" src="images/logo.svg" alt="logotype"/>
		<div class="header-right-content">
			<nav class="header__menu">
				<ul class="header__inline-list">
				    <li><a href="#" class="header__nav-link">Что будет на курсе?</a></li>
					<li><a href="#" class="header__nav-link"></a>Вопросы</li>
					<li><a href="#" class="header__nav-link"></a>Автор</li>	
				</ul>
				<div class="header__button button">Записаться на курс</div>
			</nav>	
		</div>
	</header>

	<div class="main">
		<div class="main__info">
        	<h1 class="main__title">Не <span class="pink">делай</span> это</h1>   
        	<p class="main__text">Онлайн-курс для творческих людей, о том, как<br>управлять своим временем</p>
        	<div class="main__button button">Записаться на курс</div>	
		</div>
		<div class="main__illustration">
			<img src="images/main-illustration.png" alt="chill"/>
		</div>	
	</div>

	<div class="features">
		<div class="features__blocks">
			<div class="features__block features__time">
				<img src="images/clock.png" alt="clock" />
                <p class="feature__time-description">Для тех, у кого слишком много идей и слишком мало времени</p>
			</div>
			<div class="features__block features__notebook">
				<img src="images/notebook.png" alt="notebook" />
                <p class="feature__notebook-description">Метод «списка не дел», который позволит успевать и реализовывать</p>
			</div>
			<div class="features__block features__target">
				<img src="images/target.png" alt="target" />
                <p class="feature__target-description">Курс научит творческих людей сосредоточиваться</p>
			</div>
		</div>
	</div>

	<div class="deadline">
		<div class="deadline__fail">
			<div class="deadline__image">
            	<img src="images/finances.png" alt="finances" />
            </div>
      		<div class="deadline__fail-text">
        		<h2 class="deadline__title deadline__fail-title">Ты не успеешь</h2>
        		<p class="deadline__description deadline__fail-description">Всех творческих людей объединяет одна проблема - отсутствие времени на<br> реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.</p>
      		</div>
		</div>
		<div class="deadline__again">
			<div class="deadline__again-text">
        		<h2 class="deadline__title deadline__again-title">Опять дедлайн</h2>
        		<p class="deadline__description deadline__again-description">В мире, где столько всего интересного, когда же успевать жить?</p>
      		</div>
      		<div class="deadline__image">
        		<img src="images/blowing.png" alt="blowing" />
      		</div>
			
		</div>
	</div>

	<div class="opportunities">
		<h2 class="opportunities__title">На курсе ты <span class="pink">сможешь</span></h2>	
		<div class="opportunities__blocks">
			<div class="opportunities__block opportunities__block-first">
      			<img src="images/hand_one.png" alt="hand first" />
      			<p class="opportunities__block-description">Понять, что нужно делать, а что делать не стоит.</p>
    		</div>
    		<div class="opportunities__block opportunities__block-second">
    		  	<img src="images/hand_two.png" alt="hand second" />
    		  	<p class="opportunities__block-description">Перестать себя искусственно ограничивать.</p>
    		</div>
    		<div class="opportunities__block opportunities__block-third">
      			<img src="images/hand_three.png" alt="hand third" />
     			 <p class="opportunities__block-description">Определить сильные стороны и начать использовать слабые.</p>
    		</div>
    		<div class="opportunities__block opportunities__block-fourth">
    		  	<img src="images/hand_four.png" alt="hand fourth" />
    		  	<p class="opportunities__block-description">Научиться достигать любой цели в 3 понятных шага.</		p>
    		</div>
    		<div class="opportunities__block opportunities__block-fifth">
      			<img src="images/hand_five.png" alt="hand fifth" />
     			 <p class="opportunities__block-description">Сотрудничать эффективно и с правильными людьми.</p>
    		</div>
    		<div class="opportunities__block opportunities__block-sixth">
      			<img src="images/hand_six.png" alt="hand sixth" />
      			<p class="opportunities__block-description">Оптимизировать общение с клиентами и проведение совещаний.</p>
    		</div>
		</div>
	</div>
	<?php
    	include "form.php";
  	?>


	<footer class="footer">
		<img class="footer__logo" src="images/logo-white.svg" alt="logotype" />
	</footer>
	
</body>
</html>