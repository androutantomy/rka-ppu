<?php $this->load->view('template/head'); ?>

<body style="background-image:url(<?php echo base_url() ?>assets/images/bg.jpg);background-size:cover !important;background-repeat: no-repeat;min-height:100vh !important;text-align:center !important;">
   <!-- loader Start -->
   <div id="loading">
      <div class="loader simple-loader">
         <div class="loader-body ">
            <img src="<?php echo base_url() ?>assets/images/loader.webp" alt="loader" class="image-loader img-fluid ">
         </div>
      </div>
   </div>
   <!-- loader END -->
   <div class="wrapper center">
      <section class="login-content overflow-hidden">
         <div class="row no-gutters align-items-center bg-white" style="background-color: rgba(0,0,0,0) !important;">
            <div class="col-md-12 align-self-center">
               <a href="<?php echo site_url('/') ?>" class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                  <img class="logo-custom" src="<?php echo base_url() ?>assets/images/logo.png">
               </a>
               <h3 class="text-center" style="color:#f0f0f0;font-family:'Poppins';">Sistem Perencanaan Anggaran</h3>
               <div class="row justify-content-center pt-5">
                  <div class="col-md-9">
                     <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
                        <div class="card-body">
                           <h2 class="mb-2 text-center">Masuk</h2>
                           <p style="color:black;padding-bottom:10px;">Silahkan masukan username dan password dengan benar</p>
                           <?php echo form_open(route('masuk')) ?>
                           <?php if ($this->session->flashdata('errors') != "") { ?>
                              <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                 <span><i class="far fa-life-ring"></i></span>
                                 <span> <?php echo $this->session->flashdata('errors') ? $this->session->flashdata('errors') : 'Error : '; ?></span>
                                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                           <?php } ?>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <!-- <label for="username" class="form-label" style="color:#000;">Username</label> -->
                                    <input type="text" name="username" value="<?php echo set_value('username') ?>" class="form-control" id="username" aria-describedby="username" placeholder="Email">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <!-- <label for="password" class="form-label" style="color:#000;">Password</label> -->
                                    <input type="password" name="password" value="<?php echo set_value('password') ?>" class="form-control" id="password" aria-describedby="password" placeholder="Password">
                                 </div>
                              </div>
                              <div class="col-lg-12 d-flex justify-content-between">
                                 <div class="form-check mb-3">
                                 </div>
                                 <a href="<?php echo route('lupa-password') ?>" style="color:#000;">Lupa password?</a>
                              </div>
                           </div>
                           <div class="d-flex justify-content-center">
                              <button type="submit" class="btn btn-primary">Sign In</button>
                           </div>
                           <?php echo form_close(); ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 d-flex justify-content-center">
                     <p class="text-center" style="color:#f0f0f0 !important;font-family:'Poppins';padding-top:30px;font-size:15px;"><?php echo $this->config->item('client_name') ?> </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

   </div>

   <script src="<?php echo base_url() ?>assets/js/core/libs.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/plugins/slider-tabs.js"></script>
   <script src="<?php echo base_url() ?>assets/vendor/lodash/lodash.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/iqonic-script/utility.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/iqonic-script/setting.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/setting-init.js"></script>
   <script src="<?php echo base_url() ?>assets/js/core/external.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/charts/widgetcharts.js?v=1.0.1" defer></script>
   <script src="<?php echo base_url() ?>assets/js/charts/dashboard.js?v=1.0.1" defer></script>
   <script src="<?php echo base_url() ?>assets/js/qompac-ui.js?v=1.0.1" defer></script>
   <script src="<?php echo base_url() ?>assets/js/sidebar.js?v=1.0.1" defer></script>

</body>

</html>