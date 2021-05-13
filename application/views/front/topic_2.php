<?php include("includes/header.php"); ?>
  <body>
    <div class="">

        <!-- popup -->
        <div class="popUpMain col-12" style="display: none;">
          <!-- <div id=""> -->
              <img src="<?php echo base_url() ?>frontassets/images/background/exit_bg.png" class="pop_img_s" />
              <div>
                <div class="row exit_txt">
                  <div class="col">
                   <img src="<?php echo base_url() ?>frontassets/images/background/koro_logo.png" alt="" class="pop_logo">
                  </div>
                </div>
                <div class="row exit_txt2">
                  <div class="col-lg-3 col-md-3">
                    <img src="<?php echo base_url() ?>frontassets/images/background/end_2.png" alt=""  class="left_side_img w-80">
                  </div>
                  <div class="col-lg-9 col-md-9 mbl_scrn">
                    <div class="row">
                      <div class="col font_all liking" >
                        Liking it? Want to read more?
                      </div>
                    </div>
                    <div class="row mt-20" >
                       <img src="<?php echo base_url() ?>frontassets/images/background/next_btn.png" alt="" class="img_next next_inline" >
                      <img src="<?php echo base_url() ?>frontassets/images/background/index.png" alt="" class="index_img next_inline" >
                    </div>
                  </div>
                </div>
              </div>
          <!-- </div> -->
      </div>
      <!-- popup end -->

   
   
      <div class="row">
        <div class="col-lg-10 col-md-10 moon family_top_text why_top" >
          Some of our ‘Whys’ at Moonshot Conversations are: 
        </div>
        <div class="col-lg-2 col-md-2 rigt_se" align="right">
         
        </div>
      </div>
      <div class="row mt-20" >
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="box_bg">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 padding_error" >
                <img src="<?php echo base_url() ?>frontassets/images/background/tree.png" alt="" class="tree tree_inline" >
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 padding_error productivity_top_mar mt-10" align="center" >
                <p class="productivity"><?php echo $edit->title_1 ?></p>
              </div>
            </div>
          </div>
          <div class="box_bg">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 padding_error">
                <img src="<?php echo base_url() ?>frontassets/images/background/tree.png" alt="" class="tree tree_inline" >
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 padding_error mt-10" align="center" >
                <p class="productivity"><?php echo $edit->title_2 ?></p>
              </div>
            </div>
          </div>
          <div class="box_bg">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 padding_error">
                <img src="<?php echo base_url() ?>frontassets/images/background/tree.png" alt="" class="tree tree_inline" >
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 padding_error mt-10" align="center" >
                <p class="productivity"><?php echo $edit->title_3 ?></p>
              </div>
            </div>
          </div>
          <div class="box_bg">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-2 padding_error">
                <img src="<?php echo base_url() ?>frontassets/images/background/tree.png" alt="" class="tree tree_inline" >
              </div>
              <div class="col-lg-10 col-md-10 col-sm-10 padding_error mt-10" align="center" >
                <p class="productivity"><?php  echo $edit->title_4 ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="right_side_family">
            <img src="<?php echo base_url() ?>frontassets/images/background/family.png" alt="" class="family_bg img-responsive">
          </div>
        </div>
      </div>
    



    
    </div>

    

<!-- bottom index -->
<div class="widget">
  <button class="" id="chatme">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="chat" viewBox="0 0 16 16">
     
      <i  data-feather="menu" class="icons_btm_all add_c"></i>
    </svg><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="close" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
    </svg></button>
  <div class="socials">
    <div class="phone">
      <a href="<?php echo base_url() ?>home/view"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
        <i data-feather="list" class="icons_btm_all"></i>
        </svg></a>
    </div>
    <div class="email"><a href="<?php echo base_url() ?>topics"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
        <i data-feather="chevrons-left" class="icons_btm_all"></i>
        </svg></a></div>
    <div class="instagram">
      <a href="<?php echo base_url() ?>topics/topic_3_1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <i data-feather="chevrons-right" class="icons_btm_all"></i>
        </svg>
      </a>
    </div>
    <div class="youtube">
      <a href="youtube.com">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
          <i data-feather="bookmark" class="icons_btm_all"></i>
        </svg>
      </a>
    </div>
    <!-- <div class="vk">
      <a href="vk.com"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 548.358 548.358" xml:space="preserve">
          <g>
            <path d="M545.451,400.298c-0.664-1.431-1.283-2.618-1.858-3.569c-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571   l-0.284-0.28l-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415c-5.91-7.614-7.234-15.321-4.004-23.13   c2.282-5.9,10.854-18.36,25.696-37.397c7.807-10.089,13.99-18.175,18.556-24.267c32.931-43.78,47.208-71.756,42.828-83.939   l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712c-4.764-1.427-10.853-1.663-18.278-0.712l-82.224,0.568   c-1.332-0.472-3.234-0.428-5.712,0.144c-2.475,0.572-3.713,0.859-3.713,0.859l-1.431,0.715l-1.136,0.859   c-0.952,0.568-1.999,1.567-3.142,2.995c-1.137,1.423-2.088,3.093-2.848,4.996c-8.952,23.031-19.13,44.444-30.553,64.238   c-7.043,11.803-13.511,22.032-19.418,30.693c-5.899,8.658-10.848,15.037-14.842,19.126c-4,4.093-7.61,7.372-10.852,9.849   c-3.237,2.478-5.708,3.525-7.419,3.142c-1.715-0.383-3.33-0.763-4.859-1.143c-2.663-1.714-4.805-4.045-6.42-6.995   c-1.622-2.95-2.714-6.663-3.285-11.136c-0.568-4.476-0.904-8.326-1-11.563c-0.089-3.233-0.048-7.806,0.145-13.706   c0.198-5.903,0.287-9.897,0.287-11.991c0-7.234,0.141-15.085,0.424-23.555c0.288-8.47,0.521-15.181,0.716-20.125   c0.194-4.949,0.284-10.185,0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137   c-1.335-2.95-3.289-5.232-5.853-6.852c-2.569-1.618-5.763-2.902-9.564-3.856c-10.089-2.283-22.936-3.518-38.547-3.71   c-35.401-0.38-58.148,1.906-68.236,6.855c-3.997,2.091-7.614,4.948-10.848,8.562c-3.427,4.189-3.905,6.475-1.431,6.851   c11.422,1.711,19.508,5.804,24.267,12.275l1.715,3.429c1.334,2.474,2.666,6.854,3.999,13.134c1.331,6.28,2.19,13.227,2.568,20.837   c0.95,13.897,0.95,25.793,0,35.689c-0.953,9.9-1.853,17.607-2.712,23.127c-0.859,5.52-2.143,9.993-3.855,13.418   c-1.715,3.426-2.856,5.52-3.428,6.28c-0.571,0.76-1.047,1.239-1.425,1.427c-2.474,0.948-5.047,1.431-7.71,1.431   c-2.667,0-5.901-1.334-9.707-4c-3.805-2.666-7.754-6.328-11.847-10.992c-4.093-4.665-8.709-11.184-13.85-19.558   c-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267   c-4.952-10.185-9.329-20.037-13.134-29.554c-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427   c-2.095-0.859-4.281-1.475-6.567-1.854l-78.229,0.568c-7.994,0-13.418,1.811-16.274,5.428l-1.143,1.711   C0.288,140.146,0,141.668,0,143.763c0,2.094,0.571,4.664,1.714,7.707c11.42,26.84,23.839,52.725,37.257,77.659   c13.418,24.934,25.078,45.019,34.973,60.237c9.897,15.229,19.985,29.602,30.264,43.112c10.279,13.515,17.083,22.176,20.412,25.981   c3.333,3.812,5.951,6.662,7.854,8.565l7.139,6.851c4.568,4.569,11.276,10.041,20.127,16.416   c8.853,6.379,18.654,12.659,29.408,18.85c10.756,6.181,23.269,11.225,37.546,15.126c14.275,3.905,28.169,5.472,41.684,4.716h32.834   c6.659-0.575,11.704-2.669,15.133-6.283l1.136-1.431c0.764-1.136,1.479-2.901,2.139-5.276c0.668-2.379,1-5,1-7.851   c-0.195-8.183,0.428-15.558,1.852-22.124c1.423-6.564,3.045-11.513,4.859-14.846c1.813-3.33,3.859-6.14,6.136-8.418   c2.282-2.283,3.908-3.666,4.862-4.142c0.948-0.479,1.705-0.804,2.276-0.999c4.568-1.522,9.944-0.048,16.136,4.429   c6.187,4.473,11.99,9.996,17.418,16.56c5.425,6.57,11.943,13.941,19.555,22.124c7.617,8.186,14.277,14.271,19.985,18.274   l5.708,3.426c3.812,2.286,8.761,4.38,14.853,6.283c6.081,1.902,11.409,2.378,15.984,1.427l73.087-1.14   c7.229,0,12.854-1.197,16.844-3.572c3.998-2.379,6.373-5,7.139-7.851c0.764-2.854,0.805-6.092,0.145-9.712   C546.782,404.25,546.115,401.725,545.451,400.298z" />
          </g>
        </svg></a>
    </div> -->
  </div>
</div>


  <?php include "includes/footer.php"; ?>




    