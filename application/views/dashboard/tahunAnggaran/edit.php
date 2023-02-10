
<?php $this->load->view('template/head'); ?>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="<?php echo base_url() ?>assets/images/loader.webp" alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
        </div>
        <!-- loader END -->
        <?php $this->load->view('template/sidemenu'); ?>
        <main class="main-content">
            <div class="position-relative  iq-banner ">
            <!--Nav Start-->
            <?php $this->load->view('template/header'); ?>
                    <div class="iq-navbar-header " style="height: 215px;">
                        <div class="container-fluid iq-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="flex-wrap d-flex justify-content-between align-items-center">
                                        <div>
                                            <h1>Tahun Anggaran</h1>
                                            <p>Universitas 17 Agustus Samarinda</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-header-img">
                            <img src="<?php echo base_url() ?>assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="<?php echo base_url() ?>assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="<?php echo base_url() ?>assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="<?php echo base_url() ?>assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="<?php echo base_url() ?>assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                            <img src="<?php echo base_url() ?>assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                        </div>
                    </div>                <!-- Nav Header Component End -->
            <!--Nav End-->
            </div>
            <div class="content-inner container-fluid pb-0" id="page_layout">
      <div>
         <div class="row">
            
            <div class="col-xl-12 col-lg-8">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Information</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="new-user-info">
                        <form>
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Tahun Anggaran</label>
                                 <input type="text" class="form-control" id="tahun" value="2023" name="tahun">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Budget Anggaran</label>
                                 <input type="text" class="form-control" id="budget" value="2000000000">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Status</label>
                                 <select name="type" value="Active" class="selectpicker form-control" data-style="py-0">
                                    <option>Choose Option</option>
                                    <option>Active</option>
                                    <option>Non Active</option>
                                 </select>
                              </div>
                             
                           </div>
                           <button type="submit" class="btn btn-primary" style="margin-top:20px;">Update</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
    <?php $this->load->view('template/footer'); ?>
