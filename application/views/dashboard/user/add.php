<?php $this->load->view('template/head'); ?>

<body class="  ">
   <!-- loader Start -->
   <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body" style="position: relative;">
                <img style="position: absolute; width: 100px; height: 100px;" src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo Untag" width=150px">
                <img style="margin-top: 130px; width: 80px; height: 80px;" src="<?php echo base_url() ?>assets/loader/loader.gif" alt="Loader" width=60px">
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
                  <?php echo form_open(route('user.simpan')) ?>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Personal Information</h4>
                           <span class="mandatory"></span>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Nama <span style="color: red;">*</span></label>
                                 <input type="text" class="form-control" value="<?php echo set_value('nama_pengguna'); ?>" name="nama_pengguna" placeholder="Nama Pengguna">
                                 <div style="color:red">
                                    <?php echo form_error('nama_pengguna'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Email</label>
                                 <input type="text" class="form-control" value="<?php echo set_value('email_pengguna'); ?>" name="email_pengguna" id="email" placeholder="Email Pengguna">
                                 <div style="color:red">
                                    <?php echo form_error('email_pengguna'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Role Pengguna <span style="color: red;">*</span></label>
                                 <select name="role_pengguna" class="selectpicker form-control" data-style="py-0">
                                    <option value="">---- Pilih ----</option>
                                    <option <?php echo set_value('role_pengguna') == '1' ? 'selected' : ''; ?> value="1">Super Admin</option>
                                    <option <?php echo set_value('role_pengguna') == '2' ? 'selected' : ''; ?> value="2">Admin Prodi</option>
                                    <option <?php echo set_value('role_pengguna') == '3' ? 'selected' : ''; ?> value="3">Staff</option>
                                 </select>
                                 <div style="color:red">
                                    <?php echo form_error('role_pengguna'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Status <span style="color: red;">*</span></label>
                                 <div class="d-flex align-items-center form-group mb-0">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="0" name="status_pengguna" id="flexRadioDefault1" <?php echo set_value('status_pengguna') == '0' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault1">
                                          Tidak Aktif
                                       </label>
                                    </div>
                                    <div class="form-check ms-3">
                                       <input class="form-check-input" type="radio" value="1" name="status_pengguna" id="flexRadioDefault2" <?php echo set_value('status_pengguna') == '1' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                          Aktif
                                       </label>
                                    </div>
                                 </div>
                                 <div style="color:red">
                                    <?php echo form_error('status_pengguna'); ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Login Information</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           <form>
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <label class="form-label" for="fname">Username <span style="color: red;">*</span></label>
                                    <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Username">
                                    <div style="color:red">
                                       <?php echo form_error('username'); ?>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="lname">Password <span style="color: red;">*</span></label>
                                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" id="pass" placeholder="Password">
                                    <div style="color:red">
                                       <?php echo form_error('password'); ?>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="lname">Tulis Ulang Password <span style="color: red;">*</span></label>
                                    <input type="password" name="re_password" value="<?php echo set_value('re_password'); ?>" class="form-control" placeholder="Tulis Ulang Password">
                                    <div style="color:red">
                                       <?php echo form_error('re_password'); ?>
                                    </div>
                                 </div>

                              </div>
                              <button type="submit" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Tambahkan</button>
                              <a href="<?php echo route($this->uri->segment(1) . '.home') ?>" role="button" class="btn btn-primary" style="margin-top:20px;">Kembali</a>
                           </form>
                        </div>
                     </div>
                     <?php if ($this->session->flashdata('error') != "") { ?>
                        <div class="alert alert-danger alert-dismissible fade show " role="alert">
                           <span><i class="far fa-life-ring"></i></span>
                           <span> <?php echo $this->session->flashdata('error') ? $this->session->flashdata('error') : 'Error : '; ?></span>
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                     <?php } ?>
                  </div>
                  <?php form_close() ?>
               </div>
            </div>
         </div>
      </div>
      <?php $this->load->view('template/footer'); ?>