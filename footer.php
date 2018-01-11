      
<!------------  Footer ---------->
<div class='container-fluid '> 
      
 <footer>
     <div class="container">
       <div class="row">
       
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul class="adress">
                         <span>Adress</span>    
                         <li>
                            <p>Lorem ipsum dolor sit amet, vero omnis vocibus</p>
                          </li>
                               
                          <li>
                            <p>+90 1234 56789</p>
                          </li>
                               
                          <li>
                            <p>info@gmail.com</p>
                          </li>
                     </ul>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul class="contact">
                         <span>Contact</span>    
                         <li>
                            <a href="#">Home</a>
                          </li>
                               
                          <li>
                             <a href="#">About</a>
                          </li>
                               
                          <li>
                            <a href="#">Blog</a>
                          </li>
                               
                          <li>
                             <a href="#">Gallery </a>
                          </li>
                               
                          <li>
                            <a href="#">Contact</a>
                         </li>
                    </ul>
                </div>
                
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <ul class="contact">
                         <span>Blogs</span>    
                         <li>
                            <a href="#">Blog 1</a>
                          </li>
                               
                          <li>
                             <a href="#">Blog 2</a>
                          </li>
                               
                          <li>
                            <a href="#">Blog 3</a>
                          </li>
                               
                          <li>
                             <a href="#">Blog 4</a>
                          </li>
                               
                          <li>
                            <a href="#">Blog 5</a>
                         </li>
                    </ul>
                </div>
           
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <ul class="social">
                              <span>Social</span>    
                               <li>
                                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                               </li>
                              
                               <li>
                                    <a href="#"><i class="fa fa-github fa-2x"></i></a>
                               </li>
                                
                               <li>
                                    <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                               </li>
                               
                               <li>
                                    <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                               </li>
                                
                               <li>
                                    <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                              </li>
                              
                     </ul>
               </div>
           
           
           </div> 
        </div>
    </footer>
 
  </div>  
    
    
    
    
    
    
    


<script src="js/jquerry.min.js">    </script>
<script src="js/bootstrap.min.js">   </script>
      
      
<script>
   // When document is ready...
$(document).ready(function() {
  // Call horizontalNav on the navigations wrapping element
  $('.full-width').horizontalNav({});
});   
      
   
    // Carousel        //
(function( $ ) {

    //Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
    $('#carousel-example-generic').carousel({
        interval:3000,
        pause: "false"
    });
	
})(jQuery);	

    
</script>   


<!----------- contact -------->

<script >

$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});



</script>
      


</body>

</html>
