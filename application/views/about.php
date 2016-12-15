                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">About- "School"</h4>
                        </div> <!-- /.widget-main-title -->
                        <div class="widget-inner">
                            <div class="blog-post-image" >
                                <img src="<?php echo "./profile_photo/".$page_content->school_photo; ?>" alt="">
                            </div>
                            <br>
                            <div class="alert mission_content">
                                <?php echo $page_content->contents; ?>
                            </div>
                        </div>
                    </div> <!-- Dinamic Content -->

                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">At a Glance</h4>
                        </div> <!-- /.widget-main-title -->
                        <div class="widget-inner">
                                <!-- Nav tabs -->
                                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active"><a href="#section-1" data-toggle="tab">Mission & Vission</a></li>
                                    <li><a href="#section-2" data-toggle="tab">At a glance</a></li>
                                </ul>
                                <div id="my-tab-content" class="tab-content">
                                    <div class="tab-pane fade in active" id="section-1">
                                        <p class="at_a_glance"><?php echo $page_content->mission_and_vision; ?></p>

                                    </div>
                                    <div class="tab-pane fade" id="section-2">
                                        <p class="history"><?php echo $page_content->at_a_glance; ?></p>
                                        
                                    </div>
                                </div>
                        </div>
                    </div> <!-- Dinamic Content -->

