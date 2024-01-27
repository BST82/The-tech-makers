<?php get_header(); ?>

<?php
 $section_one=get_field('section_one_group');
 $section_two=get_field('repeater_group_section');
 $section_images=get_field('reaper_group');

?>

    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
    
            <a href="/" class="navbar-brand d-flex w-50 mr-auto "> <img src="<?php echo get_template_directory_uri(); ?> /assets/images/link.png" width="30" height="30" style="margin-right:10px;"> Claycier</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <?php
        wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'container' => false,
            'menu_class' => 'nav-item nav navbar-nav ml-auto w-100 justify-content-end',
        ));
        ?>
               
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                          </svg></a>
                   
            </div>
        </nav>
        
    </div>
   
        <div class="container mt-4">
            <div class="row">
            <?php  if ($section_one && (isset($section_one['heading_text']) || isset($section_one['paragraph_text']))) :  ?>
              <div class="col">
              <h1><?php echo esc_html($section_one['heading_text']); ?></h1>
    <p><?php echo esc_html($section_one['paragraph_text']); ?></p>
              </div>
              <?php endif; ?>
              <div class="col"> 
              </div>
            </div>
          </div>
          <?php  if ($section_one && (isset($section_one['heading_image_small']) || isset($section_one['header_image_big']))) :  ?>
          <div class="text-center mb-5">
          <img src="<?php echo esc_url($section_one['heading_image_small']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_one['heading_image_small']['alt']); ?>" />
          </div>
       
          <div class="text-center mb-5">
          <img src="<?php echo esc_url($section_one['header_image_big']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_one['header_image_big']['alt']); ?>" />
          </div>
          <?php endif; ?>
          <div class="container mt-4">
          
            <div class="row">
            <?php  if ($section_one && (isset($section_one['heading_two']) || isset($section_one['paragraph_two']))) :  ?>
              <div class="col">
                <h1><?php echo esc_html($section_one['heading_two']); ?></h1>
                <p class="custom-class-para"><?php echo esc_html($section_one['paragraph_two']); ?></p>
              </div>
              <?php endif; ?>
              <div class="col"> 
              </div>
            </div>
             <?php  if ($section_one && $section_one['button_one']) :  ?>
            <div class="span2">
            <button type="button" class="btn btn-dark btn-block" style="font-weight: lighter;"><?php echo esc_html($section_one['button_one']); ?></button>
            </div>
            <?php endif; ?>
          </div>


          <div class="container mt-4">
            <div class="row pb-5">
                <div class="col"> 
                </div>
                <?php  if ($section_two && (isset($section_two['heading_repeter_one']) || isset($section_two['paragraph_repeater_one']) || isset($section_two['repeater_list_1']) || isset($section_two['repeater_list_2']) )  ) :  ?>
                    
                <div class="col">
                    <h1><span><i class="bi bi-lightbulb-fill icon-setting"></i></span><?php echo esc_html($section_two['heading_repeter_one']); ?></h1>
                    <p><?php echo esc_html($section_two['paragraph_repeater_one']); ?></p>
                        <div class="row"> 
                            <div class="col"> 
                            <?php echo apply_filters('the_content', $section_two['repeater_list_1']); ?>
                </div>
                            <div class="col "> 
                            <?php echo apply_filters('the_content', $section_two['reaper_list_2']); ?>
                              
                            </div>
                        </div>
                  </div>

                  <?php endif; ?>
            </div>


            <div class="row pb-5">
                <div class="col"> 
                </div>
                <?php  if ($section_two && (isset($section_two['heading_repeter_two']) || isset($section_two['paragraph_repeater_two']) || isset($section_two['reaper_list_3']) || isset($section_two['reaper_list_4']) )  ) :  ?>
                <div class="col">
                    <h1><span><i class="bi bi-box icon-setting"></i></span><?php echo esc_html($section_two['heading_repeter_two']); ?>
                    </h1>
                    <p><?php echo esc_html($section_two['paragraph_repeater_two']); ?></p>
                        <div class="row"> 
                            <div class="col"> 
                            <?php echo apply_filters('the_content', $section_two['reaper_list_3']); ?>
                              
                            </div>
                            <div class="col "> 
                            <?php echo apply_filters('the_content', $section_two['reaper_list_4']); ?>
                               
                            </div>
                        </div>
                  </div>
                  <?php endif; ?>
            </div>

            <div class="row pb-5">
                <div class="col"> 
                </div>
                <?php  if ($section_two && (isset($section_two['heading_repeter_three']) || isset($section_two['paragraph_repeater_three']) || isset($section_two['reaper_list_5']) || isset($section_two['reaper_list_6']) )  ) :  ?>
                <div class="col">

                    <h1><span><i class="bi bi-bricks icon-setting"></i></span><?php echo esc_html($section_two['heading_repeter_three']); ?></h1>
                    <p><?php echo esc_html($section_two['paragraph_repeater_three']); ?></p>
                        <div class="row"> 
                            <div class="col"> 
                            <?php echo apply_filters('the_content', $section_two['reaper_list_5']); ?> 
                            </div>
                            <div class="col "> 
                            <?php echo apply_filters('the_content', $section_two['reaper_list_6']); ?> 
                                <ul>
                                
                            </div>
                        </div>
                  </div>
                  <?php endif; ?>
            </div>
          </div>

         
          <!-- Our Clients  section -->
          <?php  if ( $section_images && (
                isset( $section_images['heading_images_text']) || 
                isset( $section_images['image_1']) ||
                isset( $section_images['image_2']) ||
                isset( $section_images['image_3']) ||
                isset( $section_images['image_4']) ||
                isset( $section_images['image_5']) ||
                isset( $section_images['image_6']) ||
                isset( $section_images['image_7']) ||
                isset( $section_images['image_8']) ||
                isset( $section_images['image_9']) ||
                isset( $section_images['image_10']) 

                 )  ) :  ?>
          <div class="container-fluid
           mt-4">
            <h1 class="text-center font-weight-bold"><?php echo esc_html($section_images['heading_images_text']); ?></h1>
           
            <div class="row  ">
                <div class="col">
                    <img src=
                    "<?php echo esc_url($section_images['image_1']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_1']['alt']); ?>
                                width="207" height="200"/>
                </div>
                <div class="col">
                    <img src=
                    "<?php echo esc_url($section_images['image_2']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_2']['alt']); ?>
                                width="207" height="200"/>
                </div>
                <div class="col">
                 <img src=
                    "<?php echo esc_url($section_images['image_3']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_3']['alt']); ?>
                                width="207" height="200"/>
                </div>
                <div class="col">
                 <img src=
                    "<?php echo esc_url($section_images['image_4']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_4']['alt']); ?>
                                width="207" height="200"/>
                </div>
                <div class="col">
                 <img src=
                    "<?php echo esc_url($section_images['image_5']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_5']['alt']); ?>
                                width="207" height="200"/>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <img src=
                    "<?php echo esc_url($section_images['image_6']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_6']['alt']); ?>
                                width="207" height="200"/>
                </div>
                <div class="col">
                    <img src=
                    "<?php echo esc_url($section_images['image_7']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_7']['alt']); ?>
                                width="207" height="200"/>
                </div>
                <div class="col">
                 <img src=
                    "<?php echo esc_url($section_images['image_8']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_8']['alt']); ?>
                                width="207" height="200"/>
                </div>
                <div class="col">
                 <img src=
                    "<?php echo esc_url($section_images['image_9']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_9']['alt']); ?>
                                width="207" height="200"/>
                </div>
                <div class="col">
                 <img src=
                    "<?php echo esc_url($section_images['image_10']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['image_10']['alt']); ?>
                                width="207" height="200"/>
                </div>
              </div>
   
            </div>
            <?php endif; ?>
            <?php  if ( $section_images && (
                isset( $section_images['heading_our_work']) || 
                isset( $section_images['card_title_one']) ||
                isset( $section_images['card_title_two']) ||
                isset( $section_images['card_1_paragraph']) ||
                isset( $section_images['card_two_paragraph']) ||
                isset( $section_images['card_image_one']) ||
                isset( $section_images['card_image_two']) ||
                isset( $section_images['card_1_button_1']) ||
                isset( $section_images['card_1_button_2']) ||
                isset( $section_images['card_2_button_1']) ||
                isset( $section_images['card_2_button_2']) ||
                isset( $section_images['explore_project_button']) 

                 )  ) :  ?>
            <div class="container mt-4 ">
                <h1 class="text-center font-weight-bold">Our Work</h1>
                <div class="row">
                    <div class="col"></div>
                    <div class="col pl-5">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo esc_url($section_images['card_image_one']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['card_image_one']['alt']); ?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><?php echo esc_html($section_images['card_title_one']); ?></h5>
                              <p class="card-text"><?php echo esc_html($section_images['card_1_paragraph']); ?></p>
                              <div class="row">
                                <div class="col">
                                    <a href="#" class="btn btn-outline-dark"><?php echo esc_html($section_images['card_1_button_1']); ?></a>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-outline-dark"><?php echo esc_html($section_images['card_1_button_2']); ?></a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card " style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo esc_url($section_images['card_image_two']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['card_image_two']['alt']); ?>" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><?php echo esc_html($section_images['card_2_button_1']); ?></h5>
                              <p class="card-text"><?php echo esc_html($section_images['card_two_paragraph']); ?></p>
                              <div class="row">
                                <div class="col">
                                    <a href="#" class="btn btn-outline-dark"><?php echo esc_html($section_images['card_2_button_1']); ?></a>
                                </div>
                                <div class="col">
                                <a href="#" class="btn btn-outline-dark"><?php echo esc_html($section_images['card_2_button_2']); ?></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                    </div>
                    <div class="col"></div>
                </div>
                <h1 class="text-center font-weight-bold px-5 space"><a href="#" class="mx-5 btn btn-outline-dark"><?php echo esc_html($section_images['explore_project_button']); ?></a></h1>
                </div>
                <?php endif; ?>

                <div class="container mt-4 bg-light p-4">
                    <h1 class="font-weight-bold"><?php echo esc_html($section_images['championing_header']); ?></h1>
                    <p class="card-text text-left w-25"><?php echo esc_html($section_images['championing_paragraph_text']); ?></p>
                    <div class="row my-5">
                        <div class="col">
                            <img class="card-img-top roundeded" src="<?php echo esc_url($section_images['championing_image_1']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['championing_image_1']['alt']); ?>">
                        </div>
                        <div class="col">
                            <img class="card-img-top roundeded" src="<?php echo esc_url($section_images['championing_image_2']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['championing_image_2']['alt']); ?>">
                        </div>
                        <div class="col">
                            <img class="card-img-top roundeded" src="<?php echo esc_url($section_images['championing_image_3']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['championing_image_3']['alt']); ?>">
                        </div>
                    </div>
                    <p class="card-text text-left w-75 my-5"><?php echo esc_html($section_images['championing_paragraph_buttom']); ?></p>

                </div>

                <div class="container mt-4  p-4">
                    <div class="row">
                        <div class="col">
                            <img class="card-img-top roundeded" src="<?php echo esc_url($section_images['rearch_section_image']['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($section_images['rearch_section_image']['alt']); ?>">
                        </div>
                        <div class="col">
                        <div class="row mb-4  pb-4">
                                <h1><span><i class="bi bi-lightbulb-fill icon-setting"></i></span><?php echo esc_html($section_images['rearch_section_heading_1']); ?></h1>
                                <p><?php echo esc_html($section_images['research_section_paragraph_1']); ?></p>
                                    <hr>
                            </div>
                        <div class="row mb-4  pb-4">
                                <h1><span><i class="bi bi-lightbulb-fill icon-setting"></i></span><?php echo esc_html($section_images['rearch_section_heading_2']); ?></h1>
                                <p><?php echo esc_html($section_images['research_section_paragraph_2']); ?></p>
                                    <hr>
                            </div>
                        <div class="row mb-4  pb-4">
                                <h1><span><i class="bi bi-lightbulb-fill icon-setting"></i></span><?php echo esc_html($section_images['rearch_section_heading_3']); ?></h1>
                                <p><?php echo esc_html($section_images['research_section_paragraph_3']); ?></p>
                                    <hr>
                            </div>
                        <div class="row mb-4  pb-4">
                                <h1><span><i class="bi bi-lightbulb-fill icon-setting"></i></span><?php echo esc_html($section_images['rearch_section_heading_4']); ?></h1>
                                <p><?php echo esc_html($section_images['research_section_paragraph_4']); ?></p>
                                    <hr>
                            </div>
                        <div class="row mb-4  pb-4">
                                <p>Your journey with us begins here.<i class="bi bi-chevron-down"></i></p>
                                    
                            </div>
                        </div>
                    </div>
                    
                    </div>
<?php get_footer();  ?>



 