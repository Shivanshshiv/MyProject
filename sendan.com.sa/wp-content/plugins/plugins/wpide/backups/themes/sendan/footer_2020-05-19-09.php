<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "36a295ae66f10625d2857ccde42e42bde00318e5ca"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/themes/sendan/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/sendanit.com/sendan_web/wp-content/plugins/wpide/backups/themes/sendan/footer_2020-05-19-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><style>
.Location-home-1 {
    min-height: 540px;
    background: url(../image/map-bg2.png) no-repeat;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
</style>
<?php if ( is_front_page() or is_home() ) { ?>
<div  class="container-fluid contact-home" >
  <div class="inner-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h2 class="aboutus-title"><?php  the_field( 'contact_title', 'option' ); ?></h2>  
         </div>
      </div>
      <div class="row">
       
        
        <div class="col-md-2 f-left">
          &nbsp;
        </div>

        <div class="col-md-8 f-left home-formbb">

         <?php 
                    $contact_shortcode  =  get_field( 'contact_form_shortcode', 'option' ); 
                    echo do_shortcode( $contact_shortcode ); ?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>


<div class="container-fluid Location-home-1" style="background: url(<?php the_field( 'location_background_image', 'option' );  ?>) no-repeat;background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">
    <div class="row inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="aboutus-title" style="margin: 0 0 14px;">Our Presence</h2>
                    <p>Our offices and branches throughout the region</p>
                </div>
            </div>

            <div class="col-md-12 padd0 f-left">
                <div class="col-md-3 head-bbaddress-02 padd0 f-left">
                     <h4><?php the_field( 'headquarters_title', 'option' );  ?></h4>
                    <p><?php the_field( 'headquarters_address', 'option' );  ?></p>
                </div>
                
                
                <?php 
                if( have_rows('branches_subsidiaries',  'option') ):
                
                 	// loop through the rows of data
                    while ( have_rows('branches_subsidiaries',  'option') ) : the_row();
                        
                        
                    ?>
                <div class="col-md-3 head-bbaddress padd0 f-left ">
                
                <?php  while ( have_rows('type_address',  'option') ) : the_row(); ?>
                         
                            <div class="<?php the_sub_field('class_name'); ?>">
                                <a href="#" data-tooltip="<?php the_sub_field('branch_address'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/map-20.png">
                                </a>
                            </div>
        
                        
                <?php endwhile; ?>
                </div>
<?php                   
                  
                  endwhile;
                endif;
                  ?>
            </div>
            
             <div class="col-md-12 mainhh-branch padd0 f-left">
                <h4>Branches & subsidiaries</h4>
            </div>



 <?php 
                if( have_rows('branch_address',  'option') ):
                
                 	// loop through the rows of data
                    while ( have_rows('branch_address',  'option') ) : the_row();
                    
                    ?>
                  <div class="col-md-2 all-bbaddress padd0 f-left" style="margin-right: 35px;">
                    
                   <!-- <h4><?php  the_sub_field('branch_address',  'option'); ?></h4>-->
                    <?php  the_sub_field('branch_address',  'option'); ?>
                  </div>
                
                  <?php
                  
                  
                  endwhile;
                  endif;
                  ?> 

        </div>
    </div>
</div>



  
 

<!-- footer home -->
	<div class="container-fluid footer-home">
  <div class="inner-bg">
	 <div class="container">
	   <div class="row">
	    <div class="col-md-3 leftabout">
	     <?php dynamic_sidebar('footer-1'); ?> 
		</div>
		<div class="col-md-6">
		 <div class="row">
		  
		  <div class="col-md-12">
		  <?php dynamic_sidebar('footer-2'); ?>
		   <h4>Additional Links</h4>		 
		  </div>
		  <div class="col-md-6">
		   <ul>
			  <li><a href="http://sendanit.com/sendan_web/our-business/civil-construction/"><i class="fas fa-chevron-right"></i> Civil Construction</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/mechanical-construction/"><i class="fas fa-chevron-right"></i> Mechanical Construction</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/electrical-instrumentation-construction/"><i class="fas fa-chevron-right"></i> Electrical & Instrumentation Construction</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/plant-services/"><i class="fas fa-chevron-right"></i> Plant Services</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/scaffolding-services/"><i class="fas fa-chevron-right"></i> Scaffolding Services</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/bolt-integrity-solutions/"><i class="fas fa-chevron-right"></i> Bolt Integrity Solutions</a></li>
			 </ul>
		  </div>
		  <div class="col-md-6">
		   <ul>
			  <li><a href="http://sendanit.com/sendan_web/our-business/electrical-maintenance-testing-commissioning/"><i class="fas fa-chevron-right"></i>Electrical Maintenance, Testing & Commissioning</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/construction-services/"><i class="fas fa-chevron-right"></i> Construction Services</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/human-resource-services/"><i class="fas fa-chevron-right"></i> Human Resource Services</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/warehousing-material-handling/"><i class="fas fa-chevron-right"></i> Warehousing & Material Handling</a></li>
			  <li><a href="http://sendanit.com/sendan_web/our-business/skid-manufacturing/"><i class="fas fa-chevron-right"></i>Skid Manufacturing</a></li>
			 </ul>
		  </div>
		 </div>
		</div>
		<div class="col-md-3 leftabout">
		 <?php dynamic_sidebar('footer-3'); ?>
		</div>
	   </div>
	 </div>
  </div>
	</div>

 

<!-- footer bottom home -->
<div class="container-fluid footer-bottom-home">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-copymobile"> @ 2020 All right Reserved  <span style="color:#017935;">Sendan International Company Limited</span> </div>
      <div class="col-md-6 text-right mobile-text-foot"> <a target="_blank" href="https://www.facebook.com/Sendaninternational"><i class="fab fa-facebook-f"></i></a> <a target="_blank" href="https://twitter.com/SendanSaudi"><i class="fab fa-twitter"></i></a> <a target="_blank" href="https://www.linkedin.com/company/sendan-al-emarat-contracting-llc"><i class="fab fa-linkedin-in"></i></a> </div>
    </div>
  </div>
</div>




<script type="text/javascript">
    jQuery(function() {
         AOS.init({
          duration: 1200,
        })
    });
</script>





<script type="text/javascript">
    jQuery(function() {
      var $a = jQuery(".tabs li");
      $a.click(function() {
        $a.removeClass("active");
        jQuery(this).addClass("active");
      });
    });

</script>

<script>
jQuery(window).load(function() {
 
    /*
        Stop carousel
    */
    jQuery('.carousel').carousel('pause');
 
});
</script>

<script>
  // script for tab steps
    jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var href = jQuery(e.target).attr('href');
        var curr = jQuery(".process-model  a[href='" + href + "']").parent();

        jQuery('.process-model li').removeClass();

        curr.addClass("active");
        curr.prevAll().addClass("visited");
    });
// end  script for tab steps
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
  jQuery(document).ready(function () {
    
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    jQuery('.leftLst, .rightLst').click(function () {
        var condition = jQuery(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    // jQuery(window).resize(function () {
    //     ResCarouselSize();
    // });

    //this function define the size of the items
    // function ResCarouselSize() {
    //     var incno = 0;
    //     var dataItems = ("data-items");
    //     var itemClass = ('.item');
    //     var id = 0;
    //     var btnParentSb = '';
    //     var itemsSplit = '';
    //     var sampwidth = jQuery(itemsMainDiv).width();
    //     var bodyWidth = jQuery('body').width();
    //     jQuery(itemsDiv).each(function () {
    //         id = id + 1;
    //         var itemNumbers = jQuery(this).find(itemClass).length;
    //         btnParentSb = jQuery(this).parent().attr(dataItems);
    //         itemsSplit = btnParentSb.split(',');
    //         jQuery(this).parent().attr("id", "MultiCarousel" + id);


    //         if (bodyWidth >= 1200) {
    //             incno = itemsSplit[2];
    //             itemWidth = sampwidth / incno;
    //         }
    //         else if (bodyWidth >= 992) {
    //             incno = itemsSplit[2];
    //             itemWidth = sampwidth / incno;
    //         }
    //         else if (bodyWidth >= 768) {
    //             incno = itemsSplit[1];
    //             itemWidth = sampwidth / incno;
    //         }
    //         else {
    //             incno = itemsSplit[0];
    //             itemWidth = sampwidth / incno;
    //         }
    //         jQuery(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
    //         jQuery(this).find(itemClass).each(function () {
    //             jQuery(this).outerWidth(itemWidth);
    //         });

    //         jQuery(".leftLst").addClass("over");
    //         jQuery(".rightLst").removeClass("over");

    //     });
    // }


    //this function used to move the items
    // function ResCarousel(e, el, s) {
    //     var leftBtn = ('.leftLst');
    //     var rightBtn = ('.rightLst');
    //     var translateXval = '';
    //     var divStyle = jQuery(el + ' ' + itemsDiv).css('transform');
    //     var values = divStyle.match(/-?[\d\.]+/g);
    //     var xds = Math.abs(values[4]);
    //     if (e == 0) {
    //         translateXval = parseInt(xds) - parseInt(itemWidth * s);
    //         jQuery(el + ' ' + rightBtn).removeClass("over");

    //         if (translateXval <= itemWidth / 2) {
    //             translateXval = 0;
    //             jQuery(el + ' ' + leftBtn).addClass("over");
    //         }
    //     }
    //     else if (e == 1) {
    //         var itemsCondition = jQuery(el).find(itemsDiv).width() - jQuery(el).width();
    //         translateXval = parseInt(xds) + parseInt(itemWidth * s);
    //         jQuery(el + ' ' + leftBtn).removeClass("over");

    //         if (translateXval >= itemsCondition - itemWidth / 2) {
    //             translateXval = itemsCondition;
    //             jQuery(el + ' ' + rightBtn).addClass("over");
    //         }
    //     }
    //     jQuery(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    // }

    //It is used to get some elements from btn
    // function click(ell, ee) {
    //     var Parent = "#" + jQuery(ee).parent().attr("id");
    //     var slide = jQuery(Parent).attr("data-slide");
    //     ResCarousel(ell, Parent, slide);
    // }

});</script>







<script>
	 jQuery(document).ready(function(){

    jQuery(".filter-button").click(function(){
        var value = jQuery(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            jQuery('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            jQuery(".filter").not('.'+value).hide('3000');
            jQuery('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if (jQuery(".filter-button").removeClass("active")) {
jQuery(this).removeClass("active");
}
jQuery(this).addClass("active");

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
						//It is used to get some elements from btn
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
 
	
	
	
	(function ($) {
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
  }(jQuery));
  
  
	</script>
	 


<!------------------------------------------>




 

<script>
    jQuery(function() {
        jQuery('.newstape').newstape();
    });
</script>

<script type="text/javascript">
		
	</script>
<?php wp_footer(); ?>

<script type="text/javascript">
  AOS.init({
  disable: 'mobile'
}); 

AOS.init({
  disable: function () {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
  }
});

  
</script>

<script>
jQuery('#basicSlider').multislider({
      continuous: true,
      duration: 2000
    });
    jQuery('#mixedSlider').multislider({
      duration: 750,
      interval: 3000
    });
</script>

<!-- end news update -->
</body>
</html>

