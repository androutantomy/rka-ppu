<?php $this->load->view('template/head'); ?>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="<?php echo base_url() ?>assets/images/loader.webp" alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <div class="error-bg vh-100" style="background-image: url(<?php echo base_url() ?>assets/images/bg.jpg); background-repeat: no-repeat; background-size: cover;background-position:top center;">
        <div class="content-inner container-fluid pb-0 width1">
            <div class="row d-flex justify-content-center ">
                <span class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary" style="padding-top:5%;">
                    <img class="logo-custom2" src="<?php echo base_url() ?>assets/images/logo.png">
                </span>
                <h3 style="font-family:'Poppins';color:white;text-align:center;padding-bottom:10px;">Sistem Perencanaan Anggaran</h3>
                <h5 style="font-family:'Poppins';color:white;text-align:center;padding-bottom:40px;"><?php echo ucwords($this->config->item('client_name')) ?></h5>

                <div class="col-md-2 col-md-2"></div>
                <div class="col-lg-8 col-md-8 padding-tahun">
                    <?php if ($this->session->flashdata('errors') != "") { ?>
                        <div class="alert alert-danger alert-dismissible fade show " role="alert">
                            <span><i class="far fa-life-ring"></i></span>
                            <span> <?php echo $this->session->flashdata('errors') ? $this->session->flashdata('errors') : 'Error : '; ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-2 col-md-2"></div>

                <?php
                if ($anggaran->num_rows() > 0) {
                    foreach ($anggaran->result() as $anggaran) {
                ?>
                        <div class="col-lg-4 col-md-2">
                            <a href="<?php echo route('set-tahun-anggaran', ['anggaran' => $anggaran->nama_tahun_anggaran]) ?>">
                                <div class="card text-center" style="background: rgba(255,255,255,0.4);">
                                    <div class="card-body" style="padding: 2rem 0rem !important;">
                                        <svg width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="color: yellow;">
                                            <path opacity="0.4" d="M16.8843 5.11485H13.9413C13.2081 5.11969 12.512 4.79355 12.0474 4.22751L11.0782 2.88762C10.6214 2.31661 9.9253 1.98894 9.19321 2.00028H7.11261C3.37819 2.00028 2.00001 4.19201 2.00001 7.91884V11.9474C1.99536 12.3904 21.9956 12.3898 21.9969 11.9474V10.7761C22.0147 7.04924 20.6721 5.11485 16.8843 5.11485Z" fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8321 6.54353C21.1521 6.91761 21.3993 7.34793 21.5612 7.81243C21.8798 8.76711 22.0273 9.77037 21.9969 10.7761V16.0292C21.9956 16.4717 21.963 16.9135 21.8991 17.3513C21.7775 18.1241 21.5057 18.8656 21.0989 19.5342C20.9119 19.8571 20.6849 20.1553 20.4231 20.4215C19.2383 21.5089 17.665 22.0749 16.0574 21.9921H7.93061C6.32049 22.0743 4.74462 21.5086 3.55601 20.4215C3.2974 20.1547 3.07337 19.8566 2.88915 19.5342C2.48475 18.8661 2.21869 18.1238 2.1067 17.3513C2.03549 16.9142 1.99981 16.4721 2 16.0292V10.7761C1.99983 10.3374 2.02357 9.89902 2.07113 9.46288C2.08113 9.38636 2.09614 9.31109 2.11098 9.23659C2.13573 9.11241 2.16005 8.99038 2.16005 8.86836C2.25031 8.34204 2.41496 7.83116 2.64908 7.35101C3.34261 5.86916 4.76525 5.11492 7.09481 5.11492H16.8754C18.1802 5.01401 19.4753 5.4068 20.5032 6.21522C20.6215 6.3156 20.7316 6.4254 20.8321 6.54353ZM6.97033 15.5412H17.0355H17.0533C17.2741 15.5507 17.4896 15.4717 17.6517 15.3217C17.8137 15.1716 17.9088 14.963 17.9157 14.7425C17.9282 14.5487 17.8644 14.3577 17.7379 14.2101C17.5924 14.0118 17.3618 13.8935 17.1155 13.8907H6.97033C6.51365 13.8907 6.14343 14.2602 6.14343 14.7159C6.14343 15.1717 6.51365 15.5412 6.97033 15.5412Z" fill="currentColor"></path>
                                        </svg>
                                        <h5 style="padding-top:10px;color: yellow;"><?php echo $anggaran->nama_tahun_anggaran ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
                <div class="col-sm-12 d-flex justify-content-center">
                    <p class="text-center" style="color:#f0f0f0 !important;font-family:'Poppins';padding-top:30px;font-size:15px;"><?php echo $this->config->item('client_name') ?> </p>
                </div>
            </div>
        </div>


        <script src="<?php echo base_url() ?>assets/js/core/libs.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/plugins/slider-tabs.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/lodash/lodash.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/iqonic-script/utility.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/iqonic-script/setting.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/setting-init.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/external.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/charts/widgetcharts.js?v=1.0.1" defer></script>
        <script src="<?php echo base_url() ?>assets/js/charts/dashboard.js?v=1.0.1" defer></script>
        <script src="<?php echo base_url() ?>assets/js/qompac-ui.js?v=1.0.1" defer></script>
        <script src="<?php echo base_url() ?>assets/js/sidebar.js?v=1.0.1" defer></script>

</body>

</html>