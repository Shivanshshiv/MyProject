<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29ed727cf70a"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/regions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/regions_2019-04-17-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Regions
*/
get_header();
?>
<style>
    .r{
    display: inline-block;
    margin-right: 5px;
    padding: 1px 8px;
    border: 1px solid #030;
    font-size: 12px;
    color: #fff !important;
    text-align: center;
    font-weight: bold;
    background: #030; 
    }
    .k{
        font-family: 'Noto Sans', sans-serif;
    /* font-size: 14px; */
    color: #888282;
    font-weight: 500;
    font-style: normal;
    line-height: 24px;
    display: inline-block;
    }
    .title{isplay: inline;
    font-size: 16px;
    color: #063 !important;
    }
    .cmap {
    display: inline;
    margin-left: 5px;
}   
.aln{display:inline;}
.photo {top: 49%;left: 45.8%;position: absolute;}
.photo img {width:50%}
.zoom {
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.photo1 {bottom: 34%;left: 36.5%;position: absolute;}
.photo1 img {width:50%}
.zoom1 {
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom1:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.pad{padding:0;}
.mid-add1{margin:25px 0 15px 0;}
.text-divider {border-bottom:solid 1px #666;margin: 15px 0 15px 0;}
.mid-add1 p {font-size: 14px; color: #888282; margin-top: 0; margin-bottom: .5rem;}
.mid-add p {font-size: 14px; color: #888282; margin-top: 0; margin-bottom: .5rem;}
</style>



<div class="container-fluid all-pages-padding" style="padding-top:0;">
     <div class="container">
     <div class="row"><img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/GlobalMap1.jpg" alt="The awesome description">
     <div class="photo zoom"><a href="javascript:void(0)" onClick="show_div1()"><img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/marker.png" alt="map"></a></div>
     <div class="photo1 zoom1"><a href="javascript:void(0)" onClick="show_div()"><img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/marker.png" alt="map"></a></div>
     </div>
     <div class="row map_content" style="display:none; margin-top:20px;">
     <div class="mid-add">
     <div class="col-md-4 pad" style="display:inline-block;">
     <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/map/saudi.jpg" alt="The awesome description">
     </div>
     <div class="col-md-8" style="float:right;">
     <div class="r">SAUDI ARABIA</div>
     <div class="k">HEADQUARTERS</div>
     <br/>
     <br/>
     <h5 class="title aln">SENDAN INTERNATIONAL COMPANY, LTD.</h5>
     <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div><br/>
     <p>P.O. Box 11049 Tareeq 114 Jubail Industrial City 31961 Kingdom of Saudi Arabia</p>
     <p>TEL: +966-13-341-2343FAX: +966-13-341-1288</p>
     <p>Email : <a href="#">marketing@sendan.com.sa</a></p>
     </div>
     </div>
     <div class="text-divider"></div>
     <div class="mid-add">
     <div class="col-md-4 pad" style="display:inline-block;">
     <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/map/2013070304333393614.jpg" alt="The awesome description">
     </div>
     <div class="col-md-8" style="float:right;">
     <div class="r">UNITED ARAB EMIRATES</div>
     <div class="k">SENDAN INTERNATIONAL FZCO</div>
     <br/>
     <h5 class="title aln">SENDAN INTERNATIONAL FZCO</h5>
     <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div><br/>
     <p>P.O Box 18240, Warehouse No FZS1AJ06 Dubai, U.A.E.</p>
     <p>TEL: +971-4-886-0696FAX: +971-4-886-0697</p>
     <p>Email : <a href="#">sfzco@sendan.com.sa</a></p>
     </div>
     </div>
     <div class="text-divider"></div>
     <div class="mid-add">
     <div class="col-md-4 pad" style="display:inline-block;">
     <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/map/gul.png" alt="The awesome description">
     </div>
     <div class="col-md-8" style="float:right;">
     <div class="r">UNITED ARAB EMIRATES</div>
     <div class="k">SENDAN GULF CONTRACTING LLC</div>
     <br/>
     <h5 class="title aln">SENDAN GULF CONTRACTING LLC</h5>
     <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div><br/>
     <p>Office #4, 3rd Floor, Emirate Post Building Musafah Industrial Abu Dhabi, U.A.E</p>
     <p>TEL: +971-2-559-7730 FAX: +971-2-559-7731</p>
     <p>Email : <a href="#">sgcl@sendan.com.sa</a></p>
     </div>
     </div>
     <div class="text-divider"></div>
     <div class="mid-add">
     <div class="col-md-4 pad" style="display:inline-block;">
     <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/map/saudi.jpg" alt="The awesome description">
     </div>
     <div class="col-md-8" style="float:right;">
     <div class="r">UNITED ARAB EMIRATES</div>
     <div class="k">SENDAN AL-EMARAT CONTRACTING</div>
     <br/>
     <h5 class="title aln">SENDAN AL-EMARAT CONTRACTING</h5>
     <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div><br/>
     <p>Office #201, Al Bedaya Building, Al Barsha First, Dubai, U.A.E.</p>
     <p>TEL: +971-4-886-0696FAX: +971-4-886-0697</p>
     <p>Email : <a href="#">sfzco@sendan.com.sa</a></p>
     </div>
     </div>
     <div class="text-divider"></div>
     <div class="mid-add">
     <div class="col-md-4 pad" style="display:inline-block;">
     <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/map/Sendan-Modern-Trading-4.jpg" alt="The awesome description">
     </div>
     <div class="col-md-8" style="float:right;">
     <div class="r">SAUDI ARABIA</div>
     <div class="k">SENDAN MODERN TRADING EST.</div>
     <br/>
     <h5 class="title aln">SENDAN MODERN TRADING EST.</h5>
     <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div><br/>
     <p>Jeddah Street, Jubail City 31951 Kingdom of Saudi Arabia</p>
     <p>TEL: +966 13 3615465FAX: +966 13 3612453</p>
     <p>Email : <a href="#">trading@sendan.com.sa</a></p>
     </div>
     </div>
     
     </div>
     
     <div class="mid-add1">
     <div class="row map_content1" style="display:none;">
     <div class="col-md-4 pad" style="display:inline-block;">
     <img class="img-responsive" src="<?php echo get_template_directory_uri() ;?>/assets/img/map/koreo.jpg" alt="The awesome description">
     </div>
     <div class="col-md-8" style="float:right;">
     <div class="r">REPUBLIC OF KOREA</div>
     <div class="k">REPUBLIC OF KOREA</div>
     <br/>
     <h5 class="title aln">SENDAN KOREA LTD</h5>
     <div class="cmap"><a href="#"><img src="<?php echo get_template_directory_uri() ;?>/assets/img/btnMap.gif" alt="map"></a></div>
     <p>6F, Ryong-eun B/D, 119-1, Bangbae-Ro, Seocho-Gu, Seoul, Korea</p>
     <p>TEL: +82-2-586-2590FAX: +82-2-586-2593</p>
     <p>Email : <a href="#">htpark@sendan.co.kr</a></p>
     </div>
     </div>
     </div>
    
    </div>
    
    </div>
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
    <script>
   function show_div()
   { 
   		jQuery(".map_content").css('display','block');
		jQuery(".map_content1").css('display','none');
   
	   }
	   function show_div1()
   { 
   	jQuery(".map_content").css('display','none');
	jQuery(".map_content1").css('display','block');
   
	   }
    </script>
    
    <?php get_footer() ; ?>