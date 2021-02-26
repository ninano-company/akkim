
let buttonKR = document.querySelector('.button.KR');
let buttonEN = document.querySelector('.button.EN');

let boardKR = document.querySelector('#AnDongHalfKR');
let boardEN = document.querySelector('#AnDongHalfEN');

boardKR.setAttribute('visible', true);
boardEN.setAttribute('visible', false);
buttonKR.style.opacity = 1;

let target = document.querySelector('#target');

target.setAttribute('emitevents', 'true');

buttonKR.addEventListener('click', function () {
  boardKR.setAttribute('visible', true);
  boardEN.setAttribute('visible', false);
  buttonKR.style.opacity = 1;
  buttonEN.style.opacity = 0.3;
})

buttonEN.addEventListener('click', function () {
  boardEN.setAttribute('visible', true);
  boardKR.setAttribute('visible', false);
  buttonEN.style.opacity = 1;
  buttonKR.style.opacity = 0.3;
})