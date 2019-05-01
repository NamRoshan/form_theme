
(function ($) {
    "use strict";


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
    
//  function setMaxheight(){
//     var affixEle = $(".panel-active").first(),
//         winHeight = $(window).height();

//     // If there is some margins from top or bottom, remove it like:
//     // winheight -= 20;

//     affixEle.css({
//         'max-height' : winHeight + "px"
//     });
// }  
// setMaxheight();

//     $(window).resize(function(){
//         setMaxheight();
//     }); 

})(jQuery);