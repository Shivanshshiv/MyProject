<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29dddbabea9d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/footer_2019-04-17-09.php") )  ) ){
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
 <!-- footer section -->
    <div class="container-fluid contact-home">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 contact-information">
                        <h3>Visit Our Office</h3>
                        <div> <i class="fa fa-eye"></i>
                            <h4>Tel: </h4>
                            <p>+966-13-341-2343</p>
                        </div>
                        <div> <i class="fa fa-eye"></i>
                            <h4>E-Mail:</h4>
                            <p>sendan@sendan.com.sa</p>
                        </div>
                        <div> <i class="fa fa-eye"></i>
                            <h4>Address</h4>
                            <p>P.O. Box 11049 Tareeq
                                <br/>114 Jubail Industrial City 31961
                                <br/>Kingdom of Saudi Arabia</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <input type="text" id="" name="" class="cus-input" placeholder="Name">
                            <input type="text" id="" name="" class="cus-input" placeholder="E-Mail">
                            <input type="text" id="" name="" class="cus-input" placeholder="Subject">
                            <textarea id="" name="" placeholder="Message" class="cus-textarea"></textarea>
                            <div class="text-right">
                                <input type="submit" value="Cancel" class="cus-cancel">
                                <input type="submit" value="Submit" class="cus-submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact home -->
    <div class="container-fluid map-home">
    
 <script>   
 jQuery(function() {
  var str = 'https://www.google.com/maps/place/SENDAN+International+Co+Ltd./@27.074679,49.54691,11z/data=!4m5!3m4!1s0x0:0xb9b9c24314f6cc76!8m2!3d27.0746793!4d49.5469102?hl=en-US';
  var matches = str.match(/\/@([\d\.,-]+)z\//)[1];
  var splits = matches.split(',');
  var lat = splits[0];
  var long = splits[1];
  var zoom = splits[2];
  var url = 'http://maps.google.com/maps?q=' + lat + ',' + long + '&z=' + zoom + '&output=embed';
  jQuery('#output').html('<iframe style = "width:100%;height:400px" src = ' + url + '></iframe>');
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id='output' style="width:100%;height:400px"></div>
    
    
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d113719.12758172181!2d49.45931998813175!3d27.038925878489888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb9b9c24314f6cc76!2sSENDAN+International+Co+Ltd.!5e0!3m2!1sen!2sin!4v1547805507229" frameborder="0" style="border:0;width:100%;height:400px;margin-bottom:-6px;" allowfullscreen></iframe>
    </div>
    <!-- footer home -->
    <div class="container-fluid footer-home">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>About Us</h4>
                    <p>Founded in 1994, Sendan has rapidly grown from a modest contractor to a reputable General Contractor for Plant Construction and Maintenance.</p>
                    <p>It has expanded its portfolio to a broad range of businesses ranging from construction, maintenance...</p> <a href="about.html">Read More</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Additional Links</h4>   
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="civil-construction.html"><i class="fas fa-chevron-right"></i> Civil Construction</a>
                                </li>
                                <li><a href="mechanical-construction.html"><i class="fas fa-chevron-right"></i> Mechanical Construction</a>
                                </li>
                                <li><a href="electrical-instrumentation-construction.html"><i class="fas fa-chevron-right"></i> Electrical & Instrumentation Construction</a>
                                </li>
                                <li><a href="plant-services.html"><i class="fas fa-chevron-right"></i> Plant Services</a>
                                </li>
                                <li><a href="scaffolding-services.html"><i class="fas fa-chevron-right"></i> Scaffolding Services</a>
                                </li>
                                <li><a href="construction-services.html"><i class="fas fa-chevron-right"></i> Construction Services</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="human-resource-services.html"><i class="fas fa-chevron-right"></i> Human Resource Services</a>
                                </li>
                                <li><a href="bolt-integrity-solutions.html"><i class="fas fa-chevron-right"></i> Bolt Integrity Solutions</a>
                                </li>
                                <li><a href="material-handling-services.html"><i class="fas fa-chevron-right"></i> Material Handling Services</a>
                                </li>
                                <li><a href="industrial-materials-supply.html"><i class="fas fa-chevron-right"></i> Industrial Materials Supply</a>
                                </li>
                                <li><a href="manufacturing-of-temperature-sensors.html"><i class="fas fa-chevron-right"></i> Manufacturing of Temperature Sensors</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Administration Office</h4>
                    <p>P.O. Box 11049 Tareeq
                        <br/>114 Jubail Industrial City 31961
                        <br/>Kingdom of Saudi Arabia</p>
                    <p>Tel: +966-13-341-2343
                        <br/>Fax: +966-13-341-1288
                        <br/>e-mail: sendan@sendan.com.sa</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom home -->
    <div class="container-fluid footer-bottom-home">
        <div class="container">
            <div class="row">
                <div class="col-md-6">@ 2019 ALL RIGHT RESERVED <span style="color:#5fc58b;">SENDAN INTERNATIONAL COMPANY LIMITED.</span> 
                </div>
                <div class="col-md-6 text-right"> <a target="_blank" href="https://www.facebook.com/Sendaninternational"><i class="fab fa-facebook-f"></i></a>  <a target="_blank" href="https://twitter.com/SendanSaudi"><i class="fab fa-twitter"></i></a>  <a target="_blank" href="https://www.linkedin.com/company/sendan-al-emarat-contracting-llc"><i class="fab fa-linkedin-in"></i></a>  <a target="_blank" href="http://sendan-international.blogspot.com/"><i class="fab fa-blogger"></i></a>  <a target="_blank" href="https://www.flickr.com/photos/sendaninternational"><i class="fab fa-flickr"></i></a> 
                </div>
            </div>
        </div>
    </div>
    
    <?php wp_footer(); ?>
    
    <script>
	 jQuery(document).ready(function($){

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
	
<script type="text/javascript">
		jQuery(document).ready(function($) {
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

<script>
    jQuery(document).ready(function($) {
        $('.newstape').newstape();
    });
</script>
<!-- end news update -->
</body>
</html>
