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
      <?php
      $update = $data->row();
      $nama_pengguna = set_value('nama_pengguna') == "" && !empty($update) ? $update->nama_user : set_value('nama_pengguna');
      $email_pengguna = set_value('email_pengguna') == "" && !empty($update) ? $update->email_user : set_value('email_pengguna');
      $username_pengguna = set_value('username') == "" && !empty($update) ? $update->username : set_value('username');
      $status_pengguna = set_value('status_pengguna') == "" && !empty($update) ? $update->flag : set_value('status_pengguna');
      $role_pengguna = set_value('role_pengguna') == "" && !empty($update) ? $update->level_user : set_value('role_pengguna');
      $role_pengguna = set_value('role_pengguna') == "" && !empty($update) ? $update->level_user : set_value('role_pengguna');
      $uuid_user = set_value('uuid_user') == "" && !empty($update) ? $update->uuid_user : set_value('uuid_user');
      ?>
      <div class="content-inner container-fluid pb-0" id="page_layout">
         <div>
            <div class="row">
               <div class="col-xl-12 col-lg-8">
                  <?php echo form_open(route('profil.tambah')) ?>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Profil</h4>
                           <span class="mandatory"></span>
                        </div>
                        <?php if ($this->session->flashdata('message') != "") { ?>
                           <div class="alert alert-success alert-dismissible fade show " role="alert">
                              <span><i class="far fa-life-ring"></i></span>
                              <span> <?php echo $this->session->flashdata('message') ? $this->session->flashdata('message') : 'Pesan : '; ?></span>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                        <?php } else if ($this->session->flashdata('error') != "") { ?>
                           <div class="alert alert-danger alert-dismissible fade show " role="alert">
                              <span><i class="far fa-life-ring"></i></span>
                              <span> <?php echo $this->session->flashdata('error') ? $this->session->flashdata('error') : 'Error : '; ?></span>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                        <?php } ?>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Nama <span style="color: red;">*</span></label>
                                 <input type="text" class="form-control" value="<?php echo $nama_pengguna; ?>" name="nama_pengguna" placeholder="Nama Pengguna">
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
                                 <label class="form-label">Role Pengguna</label><br />
                                 <label class="form-label"><span class="badge bg-success"><?php echo $this->session->userdata('nama_level') ?></span></label>

                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Status</label><br />
                                 <label class="form-label"><span class="badge bg-success">Aktif</span></label>

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
                                    <input type="text" name="username" value="<?php echo $username_pengguna; ?>" class="form-control" placeholder="Username">
                                    <div style="color:red">
                                       <?php echo form_error('username'); ?>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="lname">Password <span style="color: red;">*</span></label> <small>Kosongkan jika tidak ingin mengganti password</small>
                                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" id="pass" placeholder="Password">
                                    <div style="color:red">
                                       <?php echo form_error('password'); ?>
                                    </div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="form-label" for="lname">Tulis Ulang Password <span style="color: red;">*</span></label> <small>Kosongkan jika tidak ingin mengganti password</small>
                                    <input type="password" name="re_password" value="<?php echo set_value('re_password'); ?>" class="form-control" placeholder="Tulis Ulang Password">
                                    <div style="color:red">
                                       <?php echo form_error('re_password'); ?>
                                    </div>
                                 </div>

                              </div>
                              <button type="submit" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Perbaharui</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <?php form_close() ?>
               </div>
            </div>
         </div>
      </div>
      <?php $this->load->view('template/footer'); ?>