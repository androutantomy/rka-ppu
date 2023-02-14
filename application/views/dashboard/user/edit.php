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
                           <h1>User Management</h1>
                           <p>Universitas 17 Agustus Samarinda</p>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="iq-header-img">
               <img src="<?php echo base_url() ?>assets/images/bg.jpg" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">

            </div>
         </div>
         <!--Nav End-->
      </div>
      <?php
      $user = $data->row();
      $nama_pengguna = set_value('nama_pengguna') == "" ? $user->nama_user : set_value('nama_pengguna');
      $email_pengguna = set_value('email_pengguna') == "" ? $user->email_user : set_value('email_pengguna');
      $status_pengguna = set_value('status_pengguna') == "" ? $user->flag : set_value('status_pengguna');
      $role_pengguna = set_value('role_pengguna') == "" ? $user->level_user : set_value('role_pengguna');
      $role_pengguna = set_value('role_pengguna') == "" ? $user->level_user : set_value('role_pengguna');
      $uuid_user = $user->uuid_user;
      ?>

      <div class="content-inner container-fluid pb-0" id="page_layout">
         <div>
            <div class="row">
               <div class="col-xl-12 col-lg-8">

                  <?php echo form_open(route('user.simpan-ubah', ['uuid' => $uuid_user])) ?>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Personal Information</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Nama</label>
                                 <input type="hidden" value="<?php echo $uuid_user ?>" name="uuid_user">
                                 <input type="text" class="form-control" value="<?php echo $nama_pengguna; ?>" name="nama_pengguna" id="tahun" placeholder="Nama Pengguna">
                                 <div style="color:red">
                                    <?php echo form_error('nama_pengguna'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Email</label>
                                 <input type="text" class="form-control" value="<?php echo $email_pengguna; ?>" name="email_pengguna" id="email" placeholder="Email Pengguna">
                                 <div style="color:red">
                                    <?php echo form_error('email_pengguna'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Role Pengguna</label>
                                 <select name="role_pengguna" class="selectpicker form-control" data-style="py-0">
                                    <option value="">---- Pilih ----</option>
                                    <option <?php echo $role_pengguna == '1' ? 'selected' : ''; ?> value="1">Super Admin</option>
                                    <option <?php echo $role_pengguna == '2' ? 'selected' : ''; ?> value="2">Admin Prodi</option>
                                    <option <?php echo $role_pengguna == '3' ? 'selected' : ''; ?> value="3">Staff</option>
                                 </select>
                                 <div style="color:red">
                                    <?php echo form_error('role_pengguna'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Status</label>
                                 <div class="d-flex align-items-center form-group mb-0">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="0" name="status_pengguna" id="flexRadioDefault1" <?php echo $status_pengguna == '0' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault1">
                                          Tidak Aktif
                                       </label>
                                    </div>
                                    <div class="form-check ms-3">
                                       <input class="form-check-input" type="radio" value="1" name="status_pengguna" id="flexRadioDefault2" <?php echo $status_pengguna == '1' ? 'checked' : ''; ?>>
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
                           <button type="submit" class="btn btn-primary" style="margin-top:20px;">Tambahkan</button>
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