<?php $this->load->view('template/head'); ?>

<body class="  ">
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="<?php echo base_url() ?>assets/images/loader.webp" alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
    </div>
    <?php $this->load->view('template/sidemenu'); ?>
    <main class="main-content">
        <div class="position-relative  iq-banner ">
            <?php $this->load->view('template/header'); ?>

        </div>
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class=" justify-content-between">
                                <div class="">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="color:green;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor" />
                                    </svg>
                                    <h5 class="mb-0 ms-2" style="float:right !important;color:green;font-weight: 400;">Pagu Yayasan</h5>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <h4 style="float:right;margin-top:0px;color:green;font-size:16px;font-weight: 500;"><?php echo $rincian_belanja->belanja_yayasan ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class=" justify-content-between">
                                <div class="">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="color:green;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor" />
                                    </svg>
                                    <h5 class="mb-0 ms-2" style="float:right !important;color:green;font-weight: 400;">Pagu Prodi</h5>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <h4 style="float:right;margin-top:0px;color:green;font-size:16px;font-weight: 500;"><?php echo $rincian_belanja->belanja_prodi ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class=" justify-content-between">
                                <div class="">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="color:<?php echo $rincian_belanja->color_total_prodi ?>;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor" />
                                    </svg>
                                    <h5 class="mb-0 ms-2" style="float:right !important;color:<?php echo $rincian_belanja->color_total_prodi ?>;font-weight: 400;">Rincian Prodi</h5>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <h4 style="float:right;margin-top:0px;color:<?php echo $rincian_belanja->color_total_prodi ?>;font-size:16px;font-weight: 500;"><?php echo $rincian_belanja->total_prodi ?></h4>
                                    <br><span style="float:right;color:<?php echo $rincian_belanja->color_total_prodi ?>;"><?php echo $rincian_belanja->mssg_total_prodi ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class=" justify-content-between">
                                <div class="">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="color:#F16A1B;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor" />
                                    </svg>
                                    <h5 class="mb-0 ms-2" style="float:right !important;color:#F16A1B;font-weight: 400;">Total Belanja</h5>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <h4 style="float:right;margin-top:0px;color:#F16A1B;font-size:16px;font-weight: 500;"><?php echo $rincian_belanja->rincian_belanja ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">List Data</h4>
                                </div>
                            </div>
                            <div class="card-body">
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
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-lg-3">
                                        <?php
                                        if ($this->session->userdata('level_user') == '1') {
                                        ?>
                                            <select class="form-select" name="prodi_search" id="prodi_search">
                                                <option value="-">----- Pilih -----</option>
                                                <?php
                                                if ($admin_prodi->num_rows() > 0) {
                                                    foreach ($admin_prodi->result() as $admin) {
                                                ?>
                                                        <option <?php echo $admin->uuid_user == $prodi_value ? 'selected' : ''; ?> value="<?php echo $admin->uuid_user ?>"><?php echo $admin->nama_user; ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                            </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control float-right" value="<?php echo $search ?>" name="search" id="search" placeholder="Search...">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" onclick="search()" class="btn btn-primary float-right">Cari</button>
                                    </div>
                                </div>
                                <div class="table-responsive" style="margin-top:10px;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="">
                                                <th>Uraian</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($datatabel->num_rows() > 0) {
                                                $mulai = isset($start) ? ($start * 10) - 9 : 1;
                                                $no = $mulai - 1;
                                                $sampai = ($mulai + $datatabel->num_rows()) - 1;
                                                foreach ($datatabel->result() as $result) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $result->no_rekening_kegiatan . ' <strong>' . strtoupper($result->nama_kegiatan) . '' ?></strong></td>
                                                        <td class="text-center"><?php echo currency_formatter($result->total_belanja) ?></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <?php if (!empty($result->child)) {
                                                        foreach ($result->child as $child) {
                                                    ?>
                                                            <tr>
                                                                <td style="padding-left:30px !important;"><?php echo $child->no_rekening_kegiatan . ' ' . $child->nama_kegiatan ?></td>
                                                                <td class="text-center"><?php echo currency_formatter($child->total_rincian) ?></td>
                                                                <td class="text-center">
                                                                    <div class="flex align-items-center list-user-action">
                                                                        <a class="btn btn-sm btn-icon btn-danger rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="View detail" href="<?php echo route('belanja.detail', ['uuid' => $child->uuid_kegiatan]) ?>" style="background:green;border:1px solid green;">
                                                                            <span class="btn-inner">
                                                                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </a>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between mb-10 mr-10">
                                        <span>Showing <?php echo isset($mulai) ? $mulai : 1 ?> to <?php echo isset($sampai) ? $sampai : 1 ?> of <?php echo isset($total) ? $total : 0 ?> entries</span>
                                        <nav class="d-flex justify-content-end" aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" id="previousPage" href="<?php echo route('belanja.home2', ['prodi' => $prodi_value, 'start' => $prev, 'search' => $search]) ?>">Sebelumnya</a></li>
                                                <li class="page-item"><a class="page-link" id="currentPage" disabled><?php echo $start != "" ? $start : 1; ?></a></li>
                                                <li class="page-item"><a class="page-link" id="nextPage" href="<?php echo route('belanja.home2', ['prodi' => $prodi_value, 'start' => $next, 'search' => $search]) ?>">Selanjutnya</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function search() {
                const searchValue = document.getElementById('search');
                const prodi = document.getElementById('prodi_search');

                window.location = '<?php echo site_url("belanja/") ?>' + prodi.value + '/' + '1/' + searchValue.value;
            }
        </script>
        <!-- Settings sidebar end here -->

        <?php $this->load->view('template/footer'); ?>