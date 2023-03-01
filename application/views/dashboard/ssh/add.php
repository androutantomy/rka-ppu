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
                                    <?php echo form_open(route('biaya.simpan')) ?>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Kode Rekening <span style="color: red;">*</span></label>
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
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="kode_rekening_6" value="<?php echo set_value('kode_rekening_6'); ?>" name="kode_rekening_6">
                                                </div>
                                            </div>
                                            <div style="color:red">
                                                <?php echo form_error('kode_rekening_1'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>

                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Nama <span style="color: red;">*</span></label>
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
                                            <label class="form-label" for="fname">Status <span style="color: red;">*</span></label>
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
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="fname">Satuan Harga</label>
                                            <select id="satuan_harga" name="satuan_harga" class="form-control"></select>
                                            <div style="color:red">
                                                <?php echo form_error('satuan_harga'); ?>
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
        <script>
            $(document).ready(function() {
                $('#satuan_harga').select2({
                    ajax: {
                        url: "<?php echo route('biaya.get-satuan') ?>",
                        method: 'POST',
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            const token = $("input[name='<?php echo $this->security->get_csrf_token_name(); ?>']").val();
                            return {
                                query: params.term,
                                <?php echo $this->security->get_csrf_token_name(); ?>: token != '' ? token : '<?php echo $this->security->get_csrf_hash(); ?>'
                            };
                        },
                        processResults: function(data, params) {
                            const newToken = data.newToken;
                            $("input[name='<?php echo $this->security->get_csrf_token_name(); ?>']").val(newToken);

                            return {
                                results: data.listSatuan,
                            };
                        },
                        cache: true
                    },
                });
            });
        </script>
        <?php $this->load->view('template/footer'); ?>