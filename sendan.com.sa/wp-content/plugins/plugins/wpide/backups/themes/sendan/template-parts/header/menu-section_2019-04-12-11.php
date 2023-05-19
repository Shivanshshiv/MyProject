<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "895e0483dec2f2990f6ec219b1774e297ec9de31bb"){
                                        if ( file_put_contents ( "/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/themes/sendan/template-parts/header/menu-section.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/bestsz6r/public_html/dhoolo.com/Sendan/wp-content/plugins/wpide/backups/themes/sendan/template-parts/header/menu-section_2019-04-12-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?> navbar navbar-expand-md navbar-dark main-menu other-inner-menu sticky
 
 
 <nav id="navbar" class="<?php echo $nav_class ;?>">
            <a href="index.html" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" style="height:45px;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse order-md-last" id="mainNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">   <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">  <a class="nav-link" href="about.html" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                  About Us
                </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="ceo-message.html">Message from CEO</a>
                            </li>
                            <li><a class="dropdown-item" href="at-a-glance.html">At a Glance</a>
                            </li>
                            <li><a class="dropdown-item" href="history.html">History</a>
                            </li>
                            <li><a class="dropdown-item" href="organizational-structure.html">Organization Structure</a>
                            </li>
                            <li><a class="dropdown-item" href="corporate-philosophy.html">Corporate Philosophy</a>
                            </li>
                            <li><a class="dropdown-item" href="people.html">People</a>
                            </li>
                            <li><a class="dropdown-item" href="awards-and-achievements.html">Awards & Achievements</a>
                            </li>
                            <li><a class="dropdown-item" href="regions.html">Regions</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">  <a class="nav-link" href="our-business.html" id="navbarDropdownMenuLink" data-toggle="" aria-haspopup="true" aria-expanded="false">
                  Our Business
                </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="civil-construction.html">Civil Construction</a>
                            </li>
                            <li><a class="dropdown-item" href="mechanical-construction.html">Mechanical Construction</a>
                            </li>
                            <li><a class="dropdown-item" href="electrical-instrumentation-construction.html">Electrical & Instrumentation Construction</a>
                            </li>
                            <li><a class="dropdown-item" href="plant-services.html">Plant Services</a>
                            </li>
                            <li><a class="dropdown-item" href="scaffolding-services.html">Scaffolding Services</a>
                            </li>
                            <li><a class="dropdown-item" href="construction-services.html">Construction Services</a>
                            </li>
                            <li><a class="dropdown-item" href="human-resource-services.html">Human Resource Services</a>
                            </li>
                            <li><a class="dropdown-item" href="bolt-integrity-solutions.html">Bolt Integrity Solutions</a>
                            </li>
                            <li><a class="dropdown-item" href="material-handling-services.html">Material Handling Services</a>
                            </li>
                            <li><a class="dropdown-item" href="industrial-materials-supply.html">Industrial Materials Supply</a>
                            </li>
                            <li><a class="dropdown-item" href="manufacturing-of-temperature-sensors.html">Manufacturing of Temperature Sensors</a>
                            </li>
                            <li><a class="dropdown-item" href="skid-manufacturing.html">Skid Manufacturing</a>
                            </li>
                            <li><a class="dropdown-item" href="blast-resistant-modules.html">Blast Resistant Modules</a>
                            </li>
                            <li><a class="dropdown-item" href="fabrication-and-installation-of-storage-tanks.html">Fabrication and Installation of Storage Tanks</a>
                            </li>
                            <li><a class="dropdown-item" href="electrical-maintenance-testing-commissioning-services.html">Electrical Maintenance, Testing & Commissioning</a>
                            </li>
                            <li><a class="dropdown-item" href="integrated-turnkey-solution-provider-of-telecommunication-automation-system.html">Integrated Turnkey Solution Provider</a>
                            </li>
                            <!--<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submen</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Submenu</a></li>
                    </ul>
                  </li>-->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">  <a class="nav-link" href="sustainability.html" id="navbarDropdownMenuLink" data-toggle="" aria-haspopup="true" aria-expanded="false">
                  Sustainability
                </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="business-ethics.html">Business Ethics</a>
                            </li>
                            <li><a class="dropdown-item" href="qhse.html">QHSE</a>
                            </li>
                            <li><a class="dropdown-item" href="social-responsibility.html">Social Responsibility</a>
                            </li>
                            <li><a class="dropdown-item" href="localization.html">Localization</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Corporate Performance Management</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">  <a class="nav-link" href="our-project.html" id="navbarDropdownMenuLink" data-toggle="" aria-haspopup="true" aria-expanded="false">
                  Project
                </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="our-project.html">All Projects</a>
                            </li>
                            <li><a class="dropdown-item" href="major-projects.html">Major Projects</a>
                            </li>
                            <li><a class="dropdown-item" href="client.html">Clients</a>
                            </li>
                            <li><a class="dropdown-item" href="site-photos.html">Site Photos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">  <a class="nav-link" href="media-centre.html" id="navbarDropdownMenuLink" data-toggle="" aria-haspopup="true" aria-expanded="false">
                  Media Centre
                </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.html">News</a>
                            </li>
                            <li><a class="dropdown-item" href="http://sendan-international.blogspot.com/" target="_blank">Blog</a>
                            </li>
                            <li><a class="dropdown-item" href="company-brochure.html">Company Brochure</a>
                            </li>
                            <li><a class="dropdown-item" href="contact.html">Media Contacts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">  <a class="nav-link" href="http://careers.sendan.com.sa/" target="_blank" id="navbarDropdownMenuLink" data-toggle="" aria-haspopup="true" aria-expanded="false">
                  Career
                </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="why-join-sendan.html">Why Join Sendan</a>
                            </li>
                            <li><a class="dropdown-item" href="growth-at-sendan.html">Growth at Sendan</a>
                            </li>
                            <li><a class="dropdown-item" href="meet-our-people.html">Meet Our People</a>
                            </li>
                            <li><a class="dropdown-item" href="http://careers.sendan.com.sa/" target="_blank">Join Us</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">   <a class="nav-link" href="contact.html">
                  Contact Us
                </a>
                    </li>
                </ul>
            </div>
        </nav>