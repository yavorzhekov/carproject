
var mainImg=document.getElementsByClassName("big-image")[0];
var smallImg=document.getElementsByClassName("mini");
var leftArrow=document.getElementsByClassName("left-arrow")[0];
var rightArrow=document.getElementsByClassName("right-arrow")[0];

var images=['img/main-car.jpg', 'img/main-car-1.jpg','img/main-car-2.jpg',
'img/main-car-3.jpg','img/main-car-4.jpg','img/main-car-5.jpg'];
leftArrow.onclick=function(){
   var count=images.indexOf(mainImg.getAttribute("src"));
   if(count==0){
   	count = 5;
   }
   else {
   	count--;
   }
   mainImg.setAttribute("src", images[count]);
}
rightArrow.onclick=function(){
   var count=images.indexOf(mainImg.getAttribute("src"));
   if(count==5){
   	count = 0;
   }
   else {
   	count++;
   }
   mainImg.setAttribute("src", images[count]);
}