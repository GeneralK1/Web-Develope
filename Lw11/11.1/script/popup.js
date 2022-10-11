const popupBg = document.querySelector('.form');
const popupContent = document.querySelector('.form__content')
const openPopupBtn = document.querySelectorAll('.button');
const closePopup = document.querySelector('.form__close-popup');
const sendPopupBtn = document.querySelector('.form__button');
const popup = document.querySelector('.form');

openPopupBtn.forEach((button) => {
   button.addEventListener("click", () => {
      popupBg.classList.add('active')
      popupContent.classList.add('active')
   })
})

closePopup.addEventListener('click', () => {
   popupBg.classList.remove('active')
   popupContent.classList.remove('active')
})

document.addEventListener('click', (e) => {
   if (e.target === popupBg) {
      popupBg.classList.remove('active')
      popupContent.classList.remove('active')
   }
})

document.addEventListener('keydown', (e) => {
   if (e.key === "Escape") {
      popupBg.classList.remove('active')
      popupContent.classList.remove('active')
   }
})

const email = document.getElementById('email');
const first_name = document.getElementById('first_name');
const profession = document.getElementById('profession');
const agree = document.getElementById('agree');

let value = false;

function validate(email, first_name) {
   let validEmail = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i.test(email.value);
   let validfirst_name = /^[a-zа-яё]+$/i.test(first_name.value)

   if ((!validEmail)) {
      email.style.borderColor = '#EE5858';
   } else {
      email.style.borderColor = '#C0C0C0';
   }

   if ((!validfirst_name)) {
      first_name.style.borderColor = '#EE5858';
   } else {
      first_name.style.borderColor = '#C0C0C0';
   }

   return validEmail && validfirst_name;
}

popupContent.addEventListener('click', () => {
   if ((email.value !== '') && (first_name.value !== '')) {
      validate(email, first_name)
   }
})

sendPopupBtn.addEventListener('click', () => {
   if (email.value === '') {
      email.style.borderColor = '#EE5858';
   }

   if (first_name.value === '') {
      first_name.style.borderColor = '#EE5858';
   }

   if (validate(email, first_name)) {
      let upload = {
                "first_name": first_name.value,
                "email": email.value,
                "profession": profession.value,
                "agree": agree.checked
            };

      async function doFecth() {
         const response = await fetch("form_handler.php",
         {
            method: "POST",
            headers: {
               "Content-type": "application/json; charset=utf-8"
            },
            body: JSON.stringify(upload)
         });

         // декодировать json и проверить на ошибку
         json = await response.json()
         console.log(json);

         if (response.ok && json.status === 200) {
            popupBg.classList.remove('active');
            popup.classList.remove('active');
            first_name.value = '';
            email.value = '';
            profession.value = '';
            agree
         .checked = 0;
         } else {
            popupContent.classList.add('disable');
            const error = document.createElement('h2');
            error.innerHTML = 'Упс.. Произошла ошибка!';
            error.classList.add('popup__error-message')
            popup.appendChild(error);
         }
         
      }

      doFecth();
   }
})