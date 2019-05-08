var index=1;

autoSlide();
function autoSlide() {
  var i;
  var x=document.getElementsByClassName("slides");
  for (i = 0; i <x.length; i++) {
     x[i].style.display="none";
   }
   if (index > x.length) {
     index=1;
   }
   x[index-1].style.display="block";
  index++;
  setTimeout(autoSlide,2000);
}
