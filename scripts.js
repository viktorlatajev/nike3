var img = document.getElementsByClassName('black_red');
var img1 = document.getElementsByClassName('gold');
var img2 = document.getElementsByClassName('wb');
var img3 = document.getElementsByClassName('white');
var img4 = document.getElementsByClassName('red');
var img5 = document.getElementsByClassName('black');



var elements = document.getElementsByClassName('main')[0];
var elements1 = document.getElementsByClassName('br_verh')[0];
var elements2 = document.getElementsByClassName('br_niz')[0];

let btn1 = document.getElementsByClassName('razmer39')[0];


btn1.addEventListener('click', function (){
  console.log(btn1);
  btn1.classList.toggle("razmer_border");
})

let btn2 = document.getElementsByClassName('razmer405')[0];


btn2.addEventListener('click', function (){
  console.log(btn2);
  btn2.classList.toggle("razmer_border");
})

let btn3 = document.getElementsByClassName('razmer41')[0];


btn3.addEventListener('click', function (){
  console.log(btn3);
  btn3.classList.toggle("razmer_border");
})

// let btn4 = document.getElementsByClassName('razmer415')[0];


// btn4.addEventListener('click', function (){
//   console.log(btn4);
//   btn4.classList.toggle("razmer_border");
// })

let btn5 = document.getElementsByClassName('razmer42')[0];


btn5.addEventListener('click', function (){
  console.log(btn5);
  btn5.classList.toggle("razmer_border");
})

let btn6 = document.getElementsByClassName('razmer425')[0];


btn6.addEventListener('click', function (){
  console.log(btn6);
  btn6.classList.toggle("razmer_border");
})

let btn7 = document.getElementsByClassName('razmer435')[0];


btn7.addEventListener('click', function (){
  console.log(btn7);
  btn7.classList.toggle("razmer_border");
})


console.log(elements);



// навешиваем обработчик на событие клик
img[0].addEventListener('click', function () {
  elements.src = "img/airforce/air_force.jpg";
  elements1.src = "img/br_verh.jpg";
  elements2.src = "img/br_niz.jpg";
})


img1[0].addEventListener('click', function () {
    elements.src = "img/airforce/gold.jpg";
    elements1.src = "img/gold_verh.jpg";
    elements2.src = "img/gold_niz.jpg";
})


img2[0].addEventListener('click', function () {
  elements.src = "img/airforce/wb.jpg";
  elements1.src = "img/wb_verh.jpg";
  elements2.src = "img/br_niz.jpg";
})


img3[0].addEventListener('click', function () {
  elements.src = "img/airforce/white_force.jpg";
  elements1.src = "img/white_verh.jpg";
  elements2.src = "img/gold_niz.jpg";
})


img4[0].addEventListener('click', function () {
  elements.src = "img/airforce/red.jpg";
  elements1.src = "img/red_verh.jpg";
  elements2.src = "img/gold_niz.jpg";
})


img5[0].addEventListener('click', function () {
  elements.src = "img/airforce/black.jpg";
  elements1.src = "img/black_niz.jpg";
  elements2.src = "img/br_niz.jpg";
})


