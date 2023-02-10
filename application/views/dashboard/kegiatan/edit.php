
<?php $this->load->view('template/head'); ?>
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
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
                                            <h1>Kegiatan</h1>
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
                                 <label class="form-label">Kategori</label>
                                 <select name="type" class="selectpicker form-control select2" data-style="py-0">
                                    <option>Program sarana prasarana dan pengembangan kapasitas</option>
                                    <option>Program penunjang administrasi umum</option>
                                    
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Komponen</label>
                                 <select name="type" class="selectpicker form-control select2" data-style="py-0">
                                    <option>5.1.1.2.3.001 Batterai Alkaline Kotak 9 Volt</option>
                                    <option>5.1.1.2.3.002 Kabel Ties 25 mm</option>
                                    <option>5.1.1.2.3.003 Lampu Bohlam LED 19 Watt</option>
                                    
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Satuan</label>
                                 <input type="text" class="form-control" id="Satuan" name="Satuan" value="mm">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Harga Satuan (Rp)</label>
                                 <input type="text" class="form-control" id="harga" name="harga" value="805.000">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Koefisien</label>
                                 <input type="text" class="form-control" id="harga" name="koefisien" value="2">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Volume</label>
                                 <input type="text" class="form-control" id="harga" name="koefisien" value="2">
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Input Pajak</label>
                                 <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Ya</option>
                                    <option>Tidak</option>
                                    
                                 </select>
                              </div>
                              
                             
                              <div class="form-group col-md-6">
                                 <label class="form-label">Status</label>
                                 <select name="type" value="Active" class="selectpicker form-control" data-style="py-0">
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
    <script>
    $('.select2').select2();
</script>
