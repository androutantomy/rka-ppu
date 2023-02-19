
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
                                 <label class="form-label">Nama Kegiatan</label>
                                 <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Kegiatan Penunjang Administrasi Umum</option>
                                    <option>Kegiatan Pengembangan Kapasitas</option>
                                    <option>Kegiatan Penyediaan dan Pemeliharaan Sarana & Prasarana</option>
                                    
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Sub Kegiatan</label>
                                 <input type="text" class="form-control" id="subkegiatan" name="subkegiatan" value="Kegiatan Kepustakaan">
                              </div>
                              
                              <div class="form-group col-md-6">
                                 <label class="form-label">Status</label>
                                 <select name="type" value="Active" class="selectpicker form-control" data-style="py-0">
                                    <option>Active</option>
                                    <option>Non Active</option>
                                 </select>
                              </div>
                              
                           </div>
                           <button type="submit" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Perbaharui</button>
                           <button type="submit" class="btn btn-primary" style="margin-top:20px;">Kembali</button>
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
