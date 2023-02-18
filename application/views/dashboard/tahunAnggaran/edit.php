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
                           <p><?php echo ucwords($this->config->item('client_name')) ?></p>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="iq-header-img">
               <img src="<?php echo base_url() ?>assets/images/bg.jpg" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">

            </div>
         </div> <!-- Nav Header Component End -->
         <!--Nav End-->
      </div>
      <?php
      $update = $data->row();
      $nama_tahun_anggaran = set_value('nama_tahun_anggaran') == "" && !empty($update) ? $update->nama_tahun_anggaran : set_value('nama_tahun_anggaran');
      $budget_tahun_anggaran = set_value('budget_tahun_anggaran') == "" && !empty($update) ? $update->budget_tahun_anggaran : set_value('budget_tahun_anggaran');
      $flag = set_value('status_tahun_anggaran') == "" && !empty($update) ? $update->flag : set_value('status_tahun_anggaran');
      $uuid_tahun_anggaran =  set_value('uuid_tahun_anggaran') == "" && !empty($update) ? $update->uuid_tahun_anggaran : set_value('uuid_tahun_anggaran');
      ?>
      <div class="content-inner container-fluid pb-0" id="page_layout">
         <div>
            <div class="row">

               <div class="col-xl-12 col-lg-8">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Information</h4>
                           <span class="mandatory"></span>
                        </div>
                        <?php if ($this->session->flashdata('error') != "") { ?>
                           <div class="alert alert-danger alert-dismissible fade show " role="alert">
                              <span><i class="far fa-life-ring"></i></span>
                              <span> <?php echo $this->session->flashdata('error') ? $this->session->flashdata('error') : 'Error : '; ?></span>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>
                        <?php } ?>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           <?php echo form_open(route('anggaran.simpan-ubah')) ?>
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <label class="form-label" for="fname">Tahun Anggaran <span style="color: red;">*</span></label>
                                 <input type="hidden" value="<?php echo $uuid_tahun_anggaran ?>" name="uuid_tahun_anggaran">
                                 <input type="text" name="nama_tahun_anggaran" value="<?php echo $nama_tahun_anggaran; ?>" class="form-control" id="tahun" placeholder="Nama Tahun Anggaran">
                                 <div style="color:red">
                                    <?php echo form_error('nama_tahun_anggaran'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Budget Anggaran <span style="color: red;">*</span></label>
                                 <input type="text" name="budget_tahun_anggaran" value="<?php echo $budget_tahun_anggaran; ?>" class="form-control" id="budget" placeholder="Budget Tahun Anggaran">
                                 <div style="color:red">
                                    <?php echo form_error('budget_tahun_anggaran'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Status <span style="color: red;">*</span></label>
                                 <div class="d-flex align-items-center form-group mb-0">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="0" name="status_tahun_anggaran" id="flexRadioDefault1" <?php echo $flag == '0' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault1">
                                          Tidak Aktif
                                       </label>
                                    </div>
                                    <div class="form-check ms-3">
                                       <input class="form-check-input" type="radio" value="1" name="status_tahun_anggaran" id="flexRadioDefault2" <?php echo $flag == '1' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                          Aktif
                                       </label>
                                    </div>
                                 </div>
                                 <div style="color:red">
                                    <?php echo form_error('status_tahun_anggaran'); ?>
                                 </div>
                              </div>

                           </div>
                           <button type="submit" class="btn btn-primary" style="margin-top:20px;">Perbaharui</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php $this->load->view('template/footer'); ?>