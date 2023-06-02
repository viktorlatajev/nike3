// ВЫБОР РАЗМЕРА
// Поиск элемента по имени класса
let btn1 = document.getElementsByClassName('razmer39')[0];
let btn2 = document.getElementsByClassName('razmer405')[0];
let btn3 = document.getElementsByClassName('razmer41')[0];
let btn5 = document.getElementsByClassName('razmer42')[0];
let btn6 = document.getElementsByClassName('razmer425')[0];
let btn7 = document.getElementsByClassName('razmer435')[0];

// Добавление обработчика на событие клик
btn1.addEventListener('click', function (){
  btn1.classList.toggle("razmer_border");
})


btn2.addEventListener('click', function (){
  btn2.classList.toggle("razmer_border");
})


btn3.addEventListener('click', function (){
  btn3.classList.toggle("razmer_border");
})


btn5.addEventListener('click', function (){
  btn5.classList.toggle("razmer_border");
})


btn6.addEventListener('click', function (){
  btn6.classList.toggle("razmer_border");
})


btn7.addEventListener('click', function (){
  btn7.classList.toggle("razmer_border");
})

// ВЫБОР ЦВЕТА
// Поиск элемента по имени класса
let img = document.getElementsByClassName('black_red');
let img1 = document.getElementsByClassName('gold');
let img2 = document.getElementsByClassName('wb');
let img3 = document.getElementsByClassName('white');
let img4 = document.getElementsByClassName('red');
let img5 = document.getElementsByClassName('black');

let elements = document.getElementsByClassName('main')[0];
let elements1 = document.getElementsByClassName('br_verh')[0];
let elements2 = document.getElementsByClassName('br_niz')[0];

// Добавление обработчика на событие клик
img[0].addEventListener('click', function () {
  elements.src = "img/airforce/air_force.jpg";
  elements1.src = "img/up/br_verh.jpg";
  elements2.src = "img/down/br_niz.jpg";
})


img1[0].addEventListener('click', function () {
    elements.src = "img/airforce/gold.jpg";
    elements1.src = "img/up/gold_verh.jpg";
    elements2.src = "img/down/gold_niz.jpg";
})


img2[0].addEventListener('click', function () {
  elements.src = "img/airforce/wb.jpg";
  elements1.src = "img/up/wb_verh.jpg";
  elements2.src = "img/down/br_niz.jpg";
})


img3[0].addEventListener('click', function () {
  elements.src = "img/airforce/white_force.jpg";
  elements1.src = "img/up/white_verh.jpg";
  elements2.src = "img/down/gold_niz.jpg";
})


img4[0].addEventListener('click', function () {
  elements.src = "img/airforce/red.jpg";
  elements1.src = "img/up/red_verh.jpg";
  elements2.src = "img/down/gold_niz.jpg";
})


img5[0].addEventListener('click', function () {
  elements.src = "img/airforce/black.jpg";
  elements1.src = "img/up/black_niz.jpg";
  elements2.src = "img/down/br_niz.jpg";
})


