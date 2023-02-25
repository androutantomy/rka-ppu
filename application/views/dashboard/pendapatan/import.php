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
                                </div>
                            </div>
                            <div class="card-body">
                                <?php if ($this->session->flashdata('error') != "") { ?>
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <span><i class="far fa-life-ring"></i></span>
                                        <span> <?php echo $this->session->flashdata('error') ? $this->session->flashdata('error') : 'Error : '; ?></span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>
                                <div class="new-user-info">
                                    <form>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="customFile" class="form-label custom-file-input"><strong>File Excel Max. 5MB</strong></label>
                                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" id="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                <input class="form-control" type="file" id="customFile">
                                            </div>
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>Pastikan format file yang di import sudah sesuai dengan format file berikut : <a href="">Download Format Import Pendapatan</a></li>
                                                    <li>Untuk memastikan proses import berjalan dengan bener, pastikan jumlah data yang diimport tidak lebih dari <strong>1000 baris data</strong></li>
                                                    <li>Untuk kolom <strong>Rekening Utama</strong> diisi dengan pilihan <strong>1 (satu)</strong> untuk menandakan bahwa data tersebut adalah data utama dan <strong>0 (nol)</strong> yang menandakan bukan data utama</li>
                                                    <li>Untuk kolom <strong>Status Pendapatan</strong> diisi dengan pilihan <strong>1 (satu)</strong> untuk menandakan data tersebut aktif dan <strong>0 (nol)</strong> untuk menandakan data tersebut sebagai tidak aktif atau draft</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Import</button>
                                        <button type="button" id="submitImport" onclick="importFile()" class="btn btn-primary" style="margin-top:20px;">Kembali</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function importFile() {
                var files = document.getElementById("customFile").files;
                const token = document.getElementById("<?php echo $this->security->get_csrf_token_name(); ?>");
                if (files.length > 0) {
                    var formData = new FormData();
                    formData.append("file", files[0]);
                    formData.append("<?php echo $this->security->get_csrf_token_name(); ?>", token.value);

                    var xhttp = new XMLHttpRequest();

                    // Set POST method and ajax file path
                    xhttp.open("POST", "<?php echo route('pendapatan.import-data') ?>", true);

                    // call on request changes state
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            let response = JSON.parse(this.responseText)

                            let resCode = response.resCode;
                            let resToken = response.token;

                            token.value = resToken;

                            if (resCode == "200") {
                                console.log("Berhasil");
                            } else {
                                console.log("Gagal");
                            }
                        }
                    };

                    // Send request with data
                    xhttp.send(formData);

                } else {
                    alert("Please select a file");
                }

            }
        </script>
        <?php $this->load->view('template/footer'); ?>