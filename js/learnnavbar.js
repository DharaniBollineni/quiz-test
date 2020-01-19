// $(function(){  // $(document).ready shorthand
//   $('.monster').fadeIn('slow');
// });

// $(document).ready(function() {
    
//     /* Every time the window is scrolled ... */
//     $(window).scroll( function(){
    
//         /* Check the location of each desired element */
//         $('.nav-link').each( function(i){
            
//             var bottom_of_object = $(this).position().top + $(this).outerHeight();
//             var bottom_of_window = $(window).scrollTop() + $(window).height();
            
//             /* If the object is completely visible in the window, fade it it */
//             if( bottom_of_window > bottom_of_object ){
                
//                 $(this).animate({'opacity':'1'},1500);
                    
//             }
            
//         }); 
    
//     });
    
// });

    // window.onscroll = function() {scrollFunction()};
    // function scrollFunction() {
    //     if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    //       document.getElementById("navbar").style.padding = "30px 10px";
    //       document.getElementById("logo").style.fontSize = "25px";
    //     } else {
    //          document.getElementById("navbar").style.padding = "80px 10px";
    //          document.getElementById("logo").style.fontSize = "35px";
    //     }
    // }



    // window.onscroll = function() {scrollFunction()};
    // function scrollFunction() {
    //     $('.nav-link').each( function(i){            
    //                     var bottom_of_object = $(this).position().top + $(this).outerHeight();
    //                     var bottom_of_window = $(window).scrollTop() + $(window).height();
                        
    //                     /* If the object is completely visible in the window, fade it it */
    //                     if( bottom_of_window > bottom_of_object ){
                            
    //                         $(this).animate({'opacity':'1'},1500);
                                
    //                     }
    //                 });

    $(document).ready(function() {			
        var stickyNavTop = $('.nav').offset().top;
         var stickyNav = function(){
      var scrollTop = $(window).scrollTop();           
         if (scrollTop > stickyNavTop) { 
             $('.nav').addClass('sticky');
         } else {
             $('.nav').removeClass('sticky'); 
         }
     };
     stickyNav();     
     $(window).scroll(function() {
         stickyNav();
     });
 });
