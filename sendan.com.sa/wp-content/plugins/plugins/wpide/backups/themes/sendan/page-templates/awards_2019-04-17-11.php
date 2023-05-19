<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e29dddbabea9d"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/page-templates/awards.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/page-templates/awards_2019-04-17-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php 
/*
* Template Name: Awards
*/
get_header();
?>
	 <style>

	.pagination {
    float: right;
}
	select.form-control.input-sm {
    background: #276e46 !important;
    border: 0px  !important;
    border-radius: 0px  !important;
    color: #FFF  !important;
        font-weight: 500 !important;
    font-size: 13px !important;
    font-family: 'Roboto', sans-serif;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
}


.pagination>li>a, .pagination>li>span{
	position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #428bca;
    text-decoration: none;
    border: 1px solid #ddd;
     background: #276e46 !important;
    border: 0px  !important;
    border-radius: 0px  !important;
    color: #FFF  !important;
    font-weight: 500 !important;
    font-size: 13px !important;
    font-family: 'Roboto', sans-serif;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #276e46 !important;
    color: #FFF!important;
    font-size: 13px!important;
     font-family: 'Roboto', sans-serif;
    font-weight: 500!important;
}
tr.even {
    background: #bfbfbf!important;
    color: #000!important;
    font-size: 13px!important;
    font-weight: 500!important;
     font-family: 'Roboto', sans-serif;
}

th.sorting,.sorting_asc {
      font-family: 'Roboto', sans-serif;
      font-weight:500 !important;
    border:1px solid #FFF !important;
    color: #FFF;
    border: 1px solid #93CE37;
    border-bottom: 3px solid #9ED929;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#30b3ff+0,00a1ff+100 */
background: rgb(48,179,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(48,179,255,1) 0%, rgba(0,161,255,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(48,179,255,1) 0%,rgba(0,161,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(48,179,255,1) 0%,rgba(0,161,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#30b3ff', endColorstr='#00a1ff',GradientType=0 ); /* IE6-9 */

    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius: 5px 5px 0px 0px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

table#example{border:0px !important;}

input.form-control.input-sm{ background: #276e46 !important;
    border: 0px  !important;
    border-radius: 0px  !important;
    color: #FFF  !important;
        font-weight: 500 !important;
    font-size: 13px !important;
    font-family: 'Roboto', sans-serif;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);
box-shadow: 0px 0px 18px 0px rgba(0,0,0,0.18);}
	table#example a {
    color: #fff;
}
.hyper{color:#000 !important;}
</style>

	<div class="container-fluid all-pages-padding" style="padding-top:0;">
	 <div class="container">
	    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>CLIENT</th>
                <th>PROJECT</th>
                <th>AWARD</th>
                <th>AWARD DETAIL</th>
                <th>DATE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal">DOW/FLUOR</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal">Reverse osmosis water project</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award1.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal">Safety Excellence Award</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal">Acheivement of 1.5 Million safe manhours</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal">2015</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal1" class="hyper">SADARA / DAELIM</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal1" class="hyper">SADARA Isocyanates</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal1" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award2.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal1" class="hyper">HSE MODEL - 2015</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal1" class="hyper">Best Performer of the month</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal1" class="hyper">2015</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal2">SADARA / FLUOR-UPI </a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal">Material handling project</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal2" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award3.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal2">Recognition Award</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal2">Acheivement of 1 million safe manhours by material handling team</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal2">2015</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal3" class="hyper">SADARA / DAELIM</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal3" class="hyper">SADARA - MFC</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal3" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award4.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal3" class="hyper">Recognition Award</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal3" class="hyper">Awarded on the celeberation of 10 million manhours.</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal3">2015</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal4">DAELIM/TEKFEN</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal4">SADARA</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal4" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award5.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal4">BEST CAMP FACILITY - 2015</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal4">Recognition Award of best camp facility</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal4">2015</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal5" class="hyper">SAMAC / CTCI</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal5" class="hyper">MMA-PMMA Plant project</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal5" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award6.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal5" class="hyper">Recognition Award</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal5" class="hyper">Acheivement of 3 Million safe manhours.</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal5" class="hyper">2015</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal6">Sadara / Fluor</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal">Sadara UPI Project</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal6" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award7.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal6">Recognition Award</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal6">Acheivement of 1.5 Million safe manhours</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal6">2014</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal7" class="hyper">Sadara / Daelim</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal7" class="hyper">Sadara MFC Project</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal7" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award8.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal7" class="hyper">Subcontractor Recognition Award</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal7" class="hyper">Achievement of 15 million safe manhours</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal7">2014</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal8">Sadara / Daelim</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal8">Sadara Isocyanates Project</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal8" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award9.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal8">Plaque of Appreciation</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal8">Achievement of 10 million safe construction hours</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal8">2014</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal9" class="hyper">Ibn Rushd / Sabic</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal9" class="hyper">Xylene Heater Revamping Project</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal9" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award10.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal9" class="hyper">Appreciation Letter</a></td>
                              <td><a href="#" data-toggle="modal" data-target="#myModal9" class="hyper">Successful project completion</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal9" class="hyper">2014</a></td>
            </tr>
            <tr>
            <td><a href="#" data-toggle="modal" data-target="#myModal10">Sharq / Sabic</a></td>
                <td><a href="#" data-toggle="modal" data-target="#myModal10">EG-2 / UTL-2 TAM Project</a></td>
                <!-- Modal -->
                <div class="modal fade" id="myModal10" role="dialog">
                  <div class="modal-dialog modal-lg"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                      
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                      </div>
                      <div class="modal-body"> <img src="img/award11.jpg" width="100%">
                        
                      </div>
                      <div class="modal-footer"> </div>
                    </div>
                  </div>
                </div>
                <td><a href="#" data-toggle="modal" data-target="#myModal10">Certificate of Appreciation</a></td>
                              <td><a href="#" data-toggle="modal10" data-target="#myModal">Successful completion of TAM Project</a></td>
<td><a href="#" data-toggle="modal" data-target="#myModal10">2014</a></td>
            </tr>
            
            
        </tbody>
    </table>
		<div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">* please click project name to check further information about the project</div></div>
        <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div>
       </div>
        </div> 
	</div>
	
	
	<?php get_footer(); ?>