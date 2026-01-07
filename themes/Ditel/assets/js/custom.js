/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

equalheight = function(container){

    var currentTallest = 0,
         currentRowStart = 0,
         rowDivs = new Array(),
         $el,
         topPosition = 0;
     $(container).each(function() {
    
       $el = $(this);
       $($el).height('auto')
       topPostion = $el.position().top;
    
       if (currentRowStart != topPostion) {
         for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
           rowDivs[currentDiv].outerHeight(currentTallest);
         }
         rowDivs.length = 0; // empty the array
         currentRowStart = topPostion;
         currentTallest = $el.outerHeight();
         rowDivs.push($el);
       } else {
         rowDivs.push($el);
         currentTallest = (currentTallest < $el.outerHeight()) ? ($el.outerHeight()) : (currentTallest);
      }
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
     });
    }
    
    $(window).load(function() {
      equalheight('#js-product-list .product-description');
    });
    
    
    $(window).resize(function(){
      equalheight('#js-product-list .product-description');
    });


