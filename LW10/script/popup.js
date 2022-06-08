let popupBg = document.querySelector('.form');
let popup = document.querySelector('.form__content');
let openPopupBtn = document.querySelectorAll('.button');
let closePopup = document.querySelector('.form__close-popup');

openPopupBtn.forEach((button) => {
   button.addEventListener("click", () => {
      popupBg.classList.add('active')
      popup.classList.add('active')
   })
})

closePopup.addEventListener('click', () => {
   popupBg.classList.remove('active')
   popup.classList.remove('active')
})

document.addEventListener('click', (e) => {
   if (e.target === popupBg) {
      popupBg.classList.remove('active')
      popup.classList.remove('active')
   }
})

document.addEventListener('keydown', (e) => {
   if (e.key === "Escape") {
      popupBg.classList.remove('active')
      popup.classList.remove('active')
   }
})