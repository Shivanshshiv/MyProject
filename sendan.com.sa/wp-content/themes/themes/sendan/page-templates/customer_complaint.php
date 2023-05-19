<?php 
/*
* Template Name: Customer Complaints
*/

get_header();
?>
<!-- ceo message -->
<style>
      .custom_success_modal .modal-body {
        min-height: 50px;
    }
    .custom_success_modal .modal-body h4 {
        text-align: center;
        margin-top: 10px;
        margin-bottom: 15px;
    }
    .custom_success_modal .modal-body .btn-default{
        width: 100%;
    }
    .padding_top_j{
        padding-top: 20px;
        }
  </style>
<div class="container-fluid section-10 contact-bg" style="margin-top: 76px; background-color: #f5f5f5;background-image: url(https://sendan.com.sa/wp-content/uploads/2022/11/MicrosoftTeams-image-8.jpg);">
    <div class="container">

        <div class="col-md-12 padd0">
            <div class="col-md-5 about-ceo f-left padd0">
                <div class="col-md-12 padd0">
                    <h2 class="aboutus-title">Customer Feedback</h2>
                    <p class="padding_top_j">We welcome feedback from our customers, <br /> It help us to continually improve.</p>
                </div>
            </div>
            <div class="col-md-7 f-left  contact-rightar" data-aos="zoom-in">
                <div class="col-md-12  ">
                    <h4>Details 
                    </h4>
                </div>

                <div class="col-md-12 padd0 contact-form">
                     <?php echo do_shortcode('[contact-form-7 id="4048" title="Customer Complaint Register"]'); ?>        
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="clearfix"></div>

<!-------------------------------------------------------------->

<!-- Modal -->
  <div class="modal fade custom_success_modal" id="myModal22" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
             <h4 id="msg_body"></h4>
             <!--<a href="https://sendan-tech.com/sendan_web//customer-complaint-register/" class="btn btn-default btn-success" data-dismiss="modal">Close</a>-->
          <button type="button" class="btn btn-default btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
 jQuery('#myModal22').on('hidden.bs.modal', function () {
 location.reload();
})
</script>
 
<?php get_footer(); ?>