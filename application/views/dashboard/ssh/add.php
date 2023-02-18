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
                                    <h1>Standar Harga</h1>
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
                                    <?php echo form_open(route('biaya.simpan')) ?>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Kode Rekening</label>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="kode_rekening_1" value="<?php echo set_value('kode_rekening_1'); ?>" name="kode_rekening_1">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="kode_rekening_2" value="<?php echo set_value('kode_rekening_2'); ?>" name="kode_rekening_2">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="kode_rekening_3" value="<?php echo set_value('kode_rekening_3'); ?>" name="kode_rekening_3">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="kode_rekening_4" value="<?php echo set_value('kode_rekening_4'); ?>" name="kode_rekening_4">
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="kode_rekening_5" value="<?php echo set_value('kode_rekening_5'); ?>" name="kode_rekening_5">
                                                </div>
                                            </div>
                                            <div style="color:red">
                                                <?php echo form_error('kode_rekening_1'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Nama</label>
                                            <input type="text" class="form-control" id="nama_standar_biaya" placeholder="Nama Standar Harga" value="<?php echo set_value('nama_standar_biaya'); ?>" name="nama_standar_biaya">
                                            <div style="color:red">
                                                <?php echo form_error('nama_standar_biaya'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Nominal Standar Harga</label>
                                            <input type="text" class="form-control" id="jumlah_standar_biaya" placeholder="Nominal Standar Harga" value="<?php echo set_value('jumlah_standar_biaya'); ?>" name="jumlah_standar_biaya">
                                            <div style="color:red">
                                                <?php echo form_error('jumlah_standar_biaya'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Rekening Utama</label>
                                            <div class="form-check d-block">
                                                <input class="form-check-input" type="checkbox" value="1" name="rekening_utama" id="flexCheckDefault11" <?php echo set_value('rekening_utama') == '1' ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="flexCheckDefault11">
                                                    Utama
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Status</label>
                                            <div class="d-flex align-items-center form-group mb-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="0" name="flag" id="flexRadioDefault1" <?php echo set_value('flag') == '0' ? 'checked' : ''; ?>>
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Tidak Aktif
                                                    </label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" value="1" name="flag" id="flexRadioDefault2" <?php echo set_value('flag') == '1' ? 'checked' : ''; ?>>
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
                                    <button type="submit" class="btn btn-primary" style="margin-top:20px;">Tambahkan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('template/footer'); ?>