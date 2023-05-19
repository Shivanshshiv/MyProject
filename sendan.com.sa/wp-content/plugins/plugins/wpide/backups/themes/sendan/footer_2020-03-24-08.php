<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f508ab9e9831c"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/footer_2020-03-24-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sendan
 * @since 1.0.0
 */


?>
<div  class="container-fluid contact-home" >
  <div class="inner-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h2 class="aboutus-title">Contact us</h2>  
         </div>
      </div>
      <div class="row">
        <!--div class="col-md-5 contact-information contact-detailleft">
          <h3>Visit Our Office</h3>
          <div> <i class="fa fa-phone"></i>
            <h4>Tel: </h4>
            <p>+966-13-341-2343</p>
          </div>
          <div> <i class="fa fa-envelope"></i>
            <h4>E-Mail:</h4>
            <p>sendan@sendan.com.sa</p>
          </div>
          <div> <i class="fa fa-map-marker"></i>
            <h4>Address</h4>
            <p>P.O. Box 11049 Tareeq 
              114 Jubail Industrial City 31961 <br/>
              Kingdom of Saudi Arabia</p>
          </div>
        </div-->

        
        <div class="col-md-2 f-left">
          &nbsp;
        </div>

        <div class="col-md-8 f-left home-formbb">

          <form>


        <div class="col-md-6 f-left "> 
         <select class="form-control">
           <option>Business Development Manager</option>
           <option>Procurement</option>
         </select>
         </div>

         <div class="col-md-6 f-left "> 
           <input type="text" id="" name="" class="cus-input" placeholder="Subject">
         </div>
      
      <div class="col-md-6 f-left "> 
          <input type="text" id="" name="" class="cus-input" placeholder="Name">
         </div>

       <div class="col-md-6 f-left "> 
          <input type="text" id="" name="" class="cus-input" placeholder="E-Mail">
         </div>

         

         
         
         <div class="col-md-12 f-left "> 
           <textarea rows="6" id="" name="" placeholder="Message" class="cus-textarea"></textarea>
         </div>
            
            
            <div class="text-right col-md-12 f-left">
              <!--input type="submit" value="Cancel" class="cus-cancel"-->
              <input type="submit" value="Submit" class="cus-submit">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>



<!----------------------location--------------------------->

<div class="container-fluid Location-home-1">
  <div class="row inner-bg">
   <div class="container">
    <div class="row">
   <div class="col-md-12">
    <h2 class="aboutus-title" style="margin: 0 0 14px;">Location</h2> 
    <p>Our offices and branches throughout the region</p> 
   </div>
  </div>


  <div class="col-md-12 head-bbaddress padd0">
    <h4>Headquarters</h4>
    <p>Saudi Arabia</p>
  </div>

  <div class="col-md-12 mainhh-branch padd0">
    <h4>Branches & subsidiaries</h4>
  </div>


  <div class="col-md-3 all-bbaddress padd0 f-left">
    <p>Arabian Construction Company</p>
    <h4>Abu Dhabi, UAE</h4>
  </div>

  <div class="col-md-3 all-bbaddress padd0 f-left">
    <p>Arabian Construction Company</p>
    <h4>Abu Dhabi, UAE</h4>
  </div>

  <div class="col-md-3 all-bbaddress padd0 f-left">
    <p>Arabian Construction Company</p>
    <h4>Abu Dhabi, UAE</h4>
  </div>

  <div class="col-md-3 all-bbaddress padd0 f-left">
    <p>Arabian Construction Company</p>
    <h4>Abu Dhabi, UAE</h4>
  </div>

  <div class="col-md-3 all-bbaddress padd0 f-left">
    <p>Arabian Construction Company</p>
    <h4>Abu Dhabi, UAE</h4>
  </div>
  <div class="col-md-3 all-bbaddress padd0 f-left">
    <p>Arabian Construction Company</p>
    <h4>Abu Dhabi, UAE</h4>
  </div>







  </div>
 </div>
</div>



<!-- footer home -->
	<div class="container-fluid footer-home">
  <div class="inner-bg">
	 <div class="container">
	   <div class="row">
	    <div class="col-md-3 leftabout">
		 <h4>About Us</h4>
		 <p>Founded in 1994, Sendan has rapidly grown from a modest contractor to a reputable General Contractor for Plant Construction and Maintenance. </p>
		 <p>It has expanded its portfolio to a broad range of businesses ranging from construction, maintenance...</p>
		 <a href="about.html">Read More</a>
		</div>
		<div class="col-md-6">
		 <div class="row">
		  <div class="col-md-12">
		   <h4>Additional Links</h4>		 
		  </div>
		  <div class="col-md-6">
		   <ul>
			  <li><a href="civil-construction.html"><i class="fas fa-chevron-right"></i> Civil Construction</a></li>
			  <li><a href="mechanical-construction.html"><i class="fas fa-chevron-right"></i> Mechanical Construction</a></li>
			  <li><a href="electrical-instrumentation-construction.html"><i class="fas fa-chevron-right"></i> Electrical & Instrumentation Construction</a></li>
			  <li><a href="plant-services.html"><i class="fas fa-chevron-right"></i> Plant Services</a></li>
			  <li><a href="scaffolding-services.html"><i class="fas fa-chevron-right"></i> Scaffolding Services</a></li>
			  <li><a href="construction-services.html"><i class="fas fa-chevron-right"></i> Construction Services</a></li>
			 </ul>
		  </div>
		  <div class="col-md-6">
		   <ul>
			  <li><a href="human-resource-services.html"><i class="fas fa-chevron-right"></i> Human Resource Services</a></li>
			  <li><a href="bolt-integrity-solutions.html"><i class="fas fa-chevron-right"></i> Bolt Integrity Solutions</a></li>
			  <li><a href="material-handling-services.html"><i class="fas fa-chevron-right"></i> Material Handling Services</a></li>
			  <li><a href="industrial-materials-supply.html"><i class="fas fa-chevron-right"></i> Industrial Materials Supply</a></li>
			  <li><a href="manufacturing-of-temperature-sensors.html"><i class="fas fa-chevron-right"></i> Manufacturing of Temperature Sensors</a></li>
			 </ul>
		  </div>
		 </div>
		</div>
		<div class="col-md-3 leftabout">
		 <h4>Administration Office</h4>
		 <p>P.O. Box 11049 Tareeq <br/>114 Jubail Industrial City 31961 <br/>Kingdom of Saudi Arabia</p>
		 <p>Tel: +966-13-341-2343<br/>Fax: +966-13-341-1288<br/>e-mail: sendan@sendan.com.sa</p>
		</div>
	   </div>
	 </div>
  </div>
	</div>

 

<!-- footer bottom home -->
<div class="container-fluid footer-bottom-home">
  <div class="container">
    <div class="row">
      <div class="col-md-6"> @ 2020 All right Reserved  <span style="color:#017935;">Sendan International Company Limited</span> </div>
      <div class="col-md-6 text-right"> <a target="_blank" href="https://www.facebook.com/Sendaninternational"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://twitter.com/SendanSaudi"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://www.linkedin.com/company/sendan-al-emarat-contracting-llc"><i class="fab fa-linkedin-in"></i></a> <a target="_blank" href="http://sendan-international.blogspot.com/"><i class="fab fa-blogger"></i></a> <a target="_blank" href="https://www.flickr.com/photos/sendaninternational"><i class="fab fa-flickr"></i></a> </div>
    </div>
  </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS --> 

<script>
var $item = $('.carousel-item'); 
var $wHeight = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight); 
$item.addClass('full-screen');

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});

$(window).on('resize', function (){
  $wHeight = $(window).height();
  $item.height($wHeight);
});

$('.carousel').carousel({
  interval: 6000,
  pause: "false"
});
</script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.3.1.slim.min.js"></script> 
<script src="<?php echo get_template_directory_uri() ?>/assets/js/popper.min.js"></script> 
<script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script> 
<script>
	 $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
	</script> 
<script>
	window.onscroll = function() {myFunction()};

	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function myFunction() {
	  if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky")
	  } else {
		navbar.classList.remove("sticky");
	  }
	}
	</script> 
<script>
	(function ($) {
		$.fn.countTo = function (options) {
			options = options || {};
			
			return $(this).each(function () {
				// set options for current element
				var settings = $.extend({}, $.fn.countTo.defaults, {
					from:            $(this).data('from'),
					to:              $(this).data('to'),
					speed:           $(this).data('speed'),
					refreshInterval: $(this).data('refresh-interval'),
					decimals:        $(this).data('decimals')
				}, options);
				
				// how many times to update the value, and how much to increment the value on each update
				var loops = Math.ceil(settings.speed / settings.refreshInterval),
					increment = (settings.to - settings.from) / loops;
				
				// references & variables that will change with each update
				var self = this,
					$self = $(this),
					loopCount = 0,
					value = settings.from,
					data = $self.data('countTo') || {};
				
				$self.data('countTo', data);
				
				// if an existing interval can be found, clear it first
				if (data.interval) {
					clearInterval(data.interval);
				}
				data.interval = setInterval(updateTimer, settings.refreshInterval);
				
				// initialize the element with the starting value
				render(value);
				
				function updateTimer() {
					value += increment;
					loopCount++;
					
					render(value);
					
					if (typeof(settings.onUpdate) == 'function') {
						settings.onUpdate.call(self, value);
					}
					
					if (loopCount >= loops) {
						// remove the interval
						$self.removeData('countTo');
						clearInterval(data.interval);
						value = settings.to;
						
						if (typeof(settings.onComplete) == 'function') {
							settings.onComplete.call(self, value);
						}
					}
				}
				
				function render(value) {
					var formattedValue = settings.formatter.call(self, value, settings);
					$self.html(formattedValue);
				}
			});
		};
		
		$.fn.countTo.defaults = {
			from: 0,               // the number the element should start at
			to: 0,                 // the number the element should end at
			speed: 1000,           // how long it should take to count between the target numbers
			refreshInterval: 100,  // how often the element should be updated
			decimals: 0,           // the number of decimal places to show
			formatter: formatter,  // handler for formatting the value before rendering
			onUpdate: null,        // callback method for every time the element is updated
			onComplete: null       // callback method for when the element finishes updating
		};
		
		function formatter(value, settings) {
			return value.toFixed(settings.decimals);
		}
	}(jQuery));

	jQuery(function ($) {
	  // custom formatting example
	  $('.count-number').data('countToOptions', {
		formatter: function (value, options) {
		  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
		}
	  });
	  
	  // start all the timers
	  $('.timer').each(count);  
	  
	  function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	  }
	});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 

<!---------------------onepage-------------->




<!------------------------------------------>





<script type="text/javascript">
		$(document).ready(function() {
			//Quotes rotator
			var divs = $('.cbp-qtcontent');
			
			function fade() {
				var current = $('.current');
				var currentIndex = divs.index(current),
					nextIndex = currentIndex + 1;
				
				if (nextIndex >= divs.length) {
					nextIndex = 0;
				}
				
				var next = divs.eq(nextIndex);
				
				next.stop().fadeIn(1500, function() {
					$(this).addClass('current');
				});
				
				current.stop().fadeOut(1500, function() {
					$(this).removeClass('current');
					_startProgress()
					setTimeout(fade, 8000);
				});
			}
			
			function _startProgress(){
				$(".cbp-qtprogress").removeAttr('style');
				$(".cbp-qtprogress").animate({
					width:"260px",
				} , 8000);
			}
			
			_startProgress()
			setTimeout(fade, 8000);
		});
	</script>
<!-- news update -->	
<script src="newsupdate/jquery.mousewheel.min.js"></script>
<script src="newsupdate/jquery.event.drag.min.js"></script>
<script src="newsupdate/jquery.newstape.js"></script>
<script>
    $(function() {
        $('.newstape').newstape();
    });
</script>
<!-- end news update -->
</body>
</html>