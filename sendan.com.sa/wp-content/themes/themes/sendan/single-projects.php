<?php

/* Single Project Details */
get_header(); ?>
<style>
	:after,*{transition: all 0.35s ease;
			-webkit-transition: all 0.35s ease;
			-moz-transition: all 0.35s ease;
			-moz-transition: all 0.35s ease;
			-ms-transition: all 0.35s ease;
			-o-transition: all 0.35s ease;}
			.sample{background: #276e46;margin-top: 15px;margin-bottom:15px;float:none;position:relative;text-align:center;line-height:50px;font-size:18px;position:relative;box-shadow:5px 5px 10px #888;overflow:hidden}
			.sample .top{position:absolute;top:5%; left:5%;width:90%;height:2px;background:#FF9800;}
			.sample .top:after{position:absolute;top:0; left:0;width:50px;height:2px;background:#00ff6c;content:"";}
			.sample .right{position:absolute;top:5%; right:5%;height:90%;width:2px;background:#00ff6c;}
			.sample .right:after{position:absolute;top:0; left:0;height:50px;width:2px;background:#FF9800;content:""}
			.sample .bottom{    position: absolute;    bottom: 5%;    right: 5%;    height: 2px;    width: 90%;    background:#FF9800;}
			.sample .bottom:after{position:absolute;top:0; right:0;width:50px;height:2px;background:#00ff6c;content:""}
			.sample .left{    position: absolute;    bottom: 5%;    left: 5%;    height: 90%;    width:2px;    background: #00ff6c;}
			.sample .left:after{ position:absolute;bottom:0; left:0;height:50px;width:2px;background:#FF9800;content:""}
			.sample:hover .top:after{width:100%;background:#fff}
			.sample:hover .left:after{height:100%;background:#fff}
			.sample:hover .bottom:after{width:100%;background:#fff}
			.sample:hover .right:after{height:100%;background:#fff}
			.sample:hover back{transform:scale(1.1)}
			.back p {
    color: #fff;
    text-align: justify;
    line-height: 1.5em;
    font-size: 13px;
    padding: 13px 25px 13px 25px;
	min-height: 180px;
}
.back1 p {
    color: #fff;
    text-align: justify;
    line-height: 1.5em;
    font-size: 13px;
    padding: 13px 25px 13px 25px;
	min-height: 100px;
}
</style>
<?php 
 while ( have_posts() ) : the_post(); ?>
    <div class="container-fluid main-content-home" style="padding-top:0;">
    	<div class="container">
    		<div class="row">
    			<?php if( get_field('details_page_banner')  ): ?>
        			<div class="col-md-12">
        				<img src="<?php the_field('details_page_banner') ; ?>" alt="<?php the_title(); ?>" style="width:100%">
        			</div>
        		<?php endif; ?>
    		</div>
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back1">
    							<p><strong>Project:</strong> <?php the_title(); ?></p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back1">
    							<p><strong>Client:</strong> <?php the_field('p_client') ; ?> </p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back1">
    							<p><strong>Completion Year:</strong> <?php the_field('p_year') ; ?> </p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back">
    							<p><strong>Prime Contractor:</strong> <?php the_field('p_prime_contractor') ; ?>  </p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back">
    							<p><strong>Scope of Work:</strong>  <?php the_field('scope_of_work') ; ?>  </p>
							</div>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    					<div class="sample">
    						<div class="back">
    							<p><strong>Location:</strong>  <?php the_field('p_location') ; ?> </p>
    						</div>	<span class="top"></span>
    						<span class="right"></span>
    						<span class="bottom"></span>
    						<span class="left"></span>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="main-p" style="text-align:justify;">
    				    <?php the_Content(); ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    	
<?php endwhile; ?>
	
	
	
	
	
<?php get_footer(); ?>