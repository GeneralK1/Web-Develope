<div class="form">
   <div class="form__content">
   	<img src="images/welcome.png" class="form__image-welcome" alt="welcome">
      <img src="images/close.svg" class="form__close-popup"alt="close">
   	<h2 class="form__title">Записаться на курс</h2>
   	<form class="form__container" action="/form_handler.php" method="POST" >
   		<input type="text" name="first_name" placeholder="Ваше имя" class="form__elementh" id='first_name'>
         <input type="email" name="email" placeholder="Email" class="form__elementh" id='email'>
        	 <select name="profession" placeholder="Деятельность" class="form__elementh form__choose" id="profession">
            <option value="">Деятельность</option>
            <option class="form__choose_elem">Программист</option>
            <option class="form__choose_elem">Дизайнер</option>
            <option class="form__choose_elem">Маркетолог</option>
         </select>
         <div class="form__checkbox-container">
            <input class="form__checkbox" type="checkbox" name="checkbox" id="agree">
            <label class="form__checkbox-text" for="agree">Согласен получать информационные материалы о старте курса</label>
         </div>
         <input class="form__button button" type="submit" value="Записаться на курс">
   	</form>
   </div>
</div>
