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
      <?php
      $update = $data->row();
      $nama_pendapatan  = set_value('nama_pendapatan') == "" && !empty($update) ? $update->nama_pendapatan : set_value('nama_pendapatan');
      $jumlah_pendapatan  = set_value('jumlah_pendapatan') == "" && !empty($update) ? $update->jumlah_pendapatan : set_value('jumlah_pendapatan');
      $no_rekening      = set_value('kode_rekening_1') == "" && !empty($update) ? $update->no_rekening_pendapatan : set_value('kode_rekening_1');
      $kode_rekening_1 = $kode_rekening_2 = $kode_rekening_3 = $kode_rekening_4 = $kode_rekening_5 = $kode_rekening_6 = '';
      if (!empty($update)) {
         $exp = explode('.', $update->no_rekening_pendapatan);
         $kode_rekening_1 = isset($exp[0]) ? $exp[0] : set_value('kode_rekening_1');;
         $kode_rekening_2 = isset($exp[1]) ? $exp[1] : set_value('kode_rekening_2');;
         $kode_rekening_3 = isset($exp[2]) ? $exp[2] : set_value('kode_rekening_3');;
         $kode_rekening_4 = isset($exp[3]) ? $exp[3] : set_value('kode_rekening_4');;
         $kode_rekening_5 = isset($exp[4]) ? $exp[4] : set_value('kode_rekening_5');;
         $kode_rekening_6 = isset($exp[5]) ? $exp[5] : set_value('kode_rekening_6');;
      }
      $rekening_utama   = set_value('is_utama') == "" && !empty($update) ? $update->is_utama : set_value('is_utama');
      $flag             = set_value('flag') == "" && !empty($update) ? $update->flag : set_value('flag');
      $uuid_pendapatan  = set_value('uuid_pendapatan') == "" && !empty($update) ? $update->uuid_pendapatan : set_value('uuid_pendapatan');
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
                           <?php echo form_open(route('pendapatan.simpan-ubah')) ?>
                           <div class="row">
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Kode Rekening <span style="color: red;">*</span></label>
                                 <div class="row">
                                    <input type="hidden" name="uuid_pendapatan" value="<?php echo $uuid_pendapatan ?>">
                                    <div class="col-md-2">
                                       <input type="text" class="form-control" id="kode_rekening_1" value="<?php echo $kode_rekening_1; ?>" name="kode_rekening_1">
                                    </div>
                                    <div class="col-md-2">
                                       <input type="text" class="form-control" id="kode_rekening_2" value="<?php echo $kode_rekening_2; ?>" name="kode_rekening_2">
                                    </div>
                                    <div class="col-md-2">
                                       <input type="text" class="form-control" id="kode_rekening_3" value="<?php echo $kode_rekening_3; ?>" name="kode_rekening_3">
                                    </div>
                                    <div class="col-md-2">
                                       <input type="text" class="form-control" id="kode_rekening_4" value="<?php echo $kode_rekening_4; ?>" name="kode_rekening_4">
                                    </div>
                                    <div class="col-md-2">
                                       <input type="text" class="form-control" id="kode_rekening_5" value="<?php echo $kode_rekening_5; ?>" name="kode_rekening_5">
                                    </div>
                                    <div class="col-md-2">
                                       <input type="text" class="form-control" id="kode_rekening_6" value="<?php echo $kode_rekening_6; ?>" name="kode_rekening_6">
                                    </div>
                                 </div>
                                 <div style="color:red">
                                    <?php echo form_error('kode_rekening_1'); ?>
                                 </div>
                              </div>
                              <div class="col-md-6"></div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Nama <span style="color: red;">*</span></label>
                                 <input type="text" class="form-control" id="nama_pendapatan" placeholder="Nama Pendapatan" value="<?php echo $nama_pendapatan; ?>" name="nama_pendapatan">
                                 <div style="color:red">
                                    <?php echo form_error('nama_pendapatan'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Nominal Pendapatan</label>
                                 <input type="text" class="form-control rupiah" id="jumlah_pendapatan" placeholder="Nominal Pendapatan" value="<?php echo currency_formatter($jumlah_pendapatan, false); ?>" name="jumlah_pendapatan">
                                 <div style="color:red">
                                    <?php echo form_error('jumlah_pendapatan'); ?>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Rekening Utama</label>
                                 <div class="form-check d-block">
                                    <input class="form-check-input" type="checkbox" value="1" name="rekening_utama" id="flexCheckDefault11" <?php echo $rekening_utama == '1' ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="flexCheckDefault11">
                                       Utama
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label class="form-label" for="fname">Status <span style="color: red;">*</span></label>
                                 <div class="d-flex align-items-center form-group mb-0">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="0" name="flag" id="flexRadioDefault1" <?php echo $flag == '0' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault1">
                                          Tidak Aktif
                                       </label>
                                    </div>
                                    <div class="form-check ms-3">
                                       <input class="form-check-input" type="radio" value="1" name="flag" id="flexRadioDefault2" <?php echo $flag == '1' ? 'checked' : ''; ?>>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                          Aktif
                                       </label>
                                    </div>
                                 </div>
                                 <div style="color:red">
                                    <?php echo form_error('flag'); ?>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Perbaharui</button>
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