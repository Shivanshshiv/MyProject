<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "2c80134f2de70d912af04cce2ca5182baf6b50379a"){
                                        if ( file_put_contents ( "/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/themes/sendan/page-templates/customer_complaint.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/chroot/home/sendanadmin/sendan.com.sa/html/wp-content/plugins/wpide/backups/themes/sendan/page-templates/customer_complaint_2021-08-03-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>