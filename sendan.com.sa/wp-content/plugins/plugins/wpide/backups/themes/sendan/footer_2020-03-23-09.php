<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "fb4a568ad6bc46b2f21a98b0f9569f50d8c4e88ce4"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/footer_2020-03-23-09.php") )  ) ){
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
<?php
if( get_field('show_contact_details_and_map')  ) { ?>
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
                        <h3><?php  echo get_theme_mod( 'contact_us_title' ); ?></h3>
                        <div> <i class="fa fa-eye"></i>
                            <h4>Tel: </h4>
                            <p><?php  echo get_theme_mod( 'contact_phone' ); ?></p>
                        </div>
                        <div> <i class="fa fa-eye"></i>
                            <h4>E-Mail:</h4>
                            <p><?php  echo get_theme_mod( 'contact_mail' ); ?></p>
                        </div>
                        <div> <i class="fa fa-eye"></i>
                            <h4>Address</h4>
                            <p> <?php  echo get_theme_mod( 'contact_address' ); ?>  </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <?php 
                    $contact_shortcode  =  get_theme_mod( 'contact_form_shortcode' ); 
                    echo do_shortcode( $contact_shortcode ); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
}
if( !empty( get_field('show_map') )  ) { ?>
    
    <!-- contact home -->
    <div class="container-fluid map-home">
        <?php  echo get_theme_mod( 'contact_map_address' ); ?>
    </div>
    
<?php } ?> 
    
    <!-- footer home -->
    <div class="container-fluid footer-home">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <?php dynamic_sidebar('footer-1'); ?>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                <?php dynamic_sidebar('footer-3'); ?>
                   
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
                <div class="col-md-6 text-right">
                    <?php
                    if(get_theme_mod('facebook_url') ): ?>
                        <a target="_blank" href="<?php echo get_theme_mod('facebook_url'); ?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>
                   
                    <?php
                    if(get_theme_mod('twitter_url') ): ?>
                        <a target="_blank" href="<?php echo get_theme_mod('twitter_url'); ?>">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                    
                     <?php
                    if(get_theme_mod('linkedin_url') ): ?>
                        <a target="_blank" href="<?php echo get_theme_mod('linkedin_url'); ?>">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    <?php endif; ?>
                    
                     <?php
                    if(get_theme_mod('flicker_url') ): ?>
                        <a target="_blank" href="<?php echo get_theme_mod('flicker_url'); ?>">
                            <i class="fab fa-flickr"></i>
                        </a>
                    <?php endif; ?>
                    
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
