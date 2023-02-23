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
                                 <label class="form-label" for="fname">Kode Rekening <span style="color: red;">*</span></label>
                                    <div class="row">
                                       <div class="col-md-2">
                                          <input type="hidden" name="uuid_kegiatan" value="">
                                          <input type="text" class="form-control" id="kode_rekening_1" value="" name="kode_rekening_1">
                                       </div>
                                       <div class="col-md-2">
                                          <input type="text" class="form-control" id="kode_rekening_2" value="" name="kode_rekening_2">
                                       </div>
                                       <div class="col-md-2">
                                          <input type="text" class="form-control" id="kode_rekening_3" value="" name="kode_rekening_3">
                                       </div>
                                       <div class="col-md-2">
                                          <input type="text" class="form-control" id="kode_rekening_4" value="" name="kode_rekening_4">
                                       </div>
                                       <div class="col-md-2">
                                          <input type="text" class="form-control" id="kode_rekening_5" value="" name="kode_rekening_5">
                                       </div>
                                       <div class="col-md-2">
                                          <input type="text" class="form-control" id="kode_rekening_6" value="" name="kode_rekening_6">
                                       </div>
                                    </div>
                                 <div style="color:red">
                                    <?php echo form_error('kode_rekening_1'); ?>
                                 </div>
                              </div>
                              <div class="col-md-6"></div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label">Nama Kegiatan</label>
                                    <input class="form-control" id="sub kegiatan" value="kegiatan 1" rows="5" readonly>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="lname">Sub Kegiatan</label>
                                    <input class="form-control" id="sub kegiatan" value="..." rows="5">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label">Status</label>
                                    <select name="type" value="Active" class="selectpicker form-control" data-style="py-0">
                                       <option>Active</option>
                                       <option>Non Active</option>
                                    </select>
                                 </div>

                              </div>
                              <!-- <button type="submit" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Tambahkan</button> -->
                              <a href="<?php echo route('subkegiatan.home') ?>" role="button" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">
                                 Perbaharui
                              </a>
                              <a href="<?php echo route($this->uri->segment(1) . '.home') ?>" role="button" class="btn btn-primary" style="margin-top:20px;">
                                 Kembali
                              </a>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php $this->load->view('template/footer'); ?>
      <script>
         $('.select2').select2();
      </script>