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
                           <?php echo form_open(route('anggaran.simpan')) ?>
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <label class="form-label" for="fname">Tahun Anggaran <span style="color: red;">*</span></label>
                                 <input type="text" name="nama_tahun_anggaran" value="<?php echo set_value('nama_tahun_anggaran'); ?>" class="form-control" id="tahun" placeholder="Nama Tahun Anggaran">
                                 <div style="color:red">
                                    <?php echo form_error('nama_tahun_anggaran'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Budget Anggaran <span style="color: red;">*</span></label>
                                 <input type="text" name="budget_tahun_anggaran" value="<?php echo set_value('budget_tahun_anggaran'); ?>" class="form-control rupiah" id="budget" placeholder="Budget Tahun Anggaran">
                                 <div style="color:red">
                                    <?php echo form_error('budget_tahun_anggaran'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label">Status <span style="color: red;">*</span></label>
                                 <div class="d-flex align-items-center form-group mb-0">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="0" name="status_tahun_anggaran" id="flexRadioDefault1" <?php echo set_value('status_tahun_anggaran') == '0' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault1">
                                          Tidak Aktif
                                       </label>
                                    </div>
                                    <div class="form-check ms-3">
                                       <input class="form-check-input" type="radio" value="1" name="status_tahun_anggaran" id="flexRadioDefault2" <?php echo set_value('status_tahun_anggaran') == '1' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                          Aktif
                                       </label>
                                    </div>
                                 </div>
                                 <div style="color:red">
                                    <?php echo form_error('status_tahun_anggaran'); ?>
                                 </div>
                              </div>
                              <?php if ($admin->num_rows() > 0) {
                                 foreach ($admin->result() as $admin) {
                              ?>
                                    <div class="form-group col-md-3">
                                       <label class="form-label" for="lname">Anggaran <?php echo ucwords($admin->nama_user); ?></label>
                                       <input type="text" name="budget_<?php echo str_replace(' ', '_', strtolower($admin->uuid_user)); ?>" value="<?php echo set_value('budget_' . str_replace(' ', '_', strtolower($admin->uuid_user))); ?>" class="form-control rupiah" id="budget_<?php echo str_replace(' ', '_', strtolower($admin->uuid_user)); ?>" placeholder="Budget Tahun Anggaran">
                                    </div>
                                 <?php } ?>
                              <?php } ?>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="lname">Akhir Input Anggaran <span style="color: red;">*</span></label>
                                 <input type="date" name="akhir_input_anggaran" value="<?php echo set_value('akhir_input_anggaran'); ?>" class="form-control" placeholder="Akhir Input Anggaran">
                                 <div style="color:red">
                                    <?php echo form_error('akhir_input_anggaran'); ?>
                                 </div>
                              </div>

                           </div>
                           <button type="submit" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Tambahkan</button>
                           <a href="<?php echo route($this->uri->segment(1) . '.home') ?>" role="button" class="btn btn-primary" style="margin-top:20px;">Kembali</a>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php $this->load->view('template/footer'); ?>