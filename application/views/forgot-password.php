<?php $this->load->view('template/head'); ?>
  <body style="background-image:url(<?php echo base_url() ?>assets/images/bg.jpg);background-size:cover !important;background-repeat: no-repeat;min-height:100vh !important;">
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
                  <img src="<?php echo base_url() ?>assets/images/logo.png" style="width:18% !important;padding-top:1%;">
               </a>
               <h3 class="text-center" style="color:#f0f0f0;font-family:'Poppins';">Sistem Perencanaan Anggaran</h3>
               <div class="row justify-content-center pt-5">
                  <div class="col-md-9">
                     <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
                        <div class="card-body">                          
                           <h2 class="mb-2 text-center">Reset Password</h2>
                           <p style="color:#000;text-align:center;">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                           <form>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label" style="color:#000;">Email</label>
                                       <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="xyz@example.com">
                                    </div>
                                 </div>
                                 
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Reset Password</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
        
      </section>
      
    </div>
    <div class="text-center" style="position:absolute">
         <p class="text-center" style="color:#f0f0f0 !important;font-family:'Poppins';bottom:5px;font-size:15px;">@ Universitas 17 Agustus Samarinda </p>
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
