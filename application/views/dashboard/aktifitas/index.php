<?php $this->load->view('template/head'); ?>

<body class="  ">
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body" style="position: relative;">
                <img style="position: absolute; width: 100px; height: 100px;" src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo Untag" width=150px">
                <img style="margin-top: 130px; width: 80px; height: 80px;" src="<?php echo base_url() ?>assets/loader/loader.gif" alt="Loader" width=60px">
            </div>
        </div>
    </div>
    <?php $this->load->view('template/sidemenu'); ?>
    <main class="main-content">
        <div class="position-relative iq-banner ">
            <?php $this->load->view('template/header'); ?>

        </div>
        <div class="content-inner container-fluid pb-0" id="page_layout">

            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-title">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="card-title float-left">List Data</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control float-right" value="<?php echo $search ?>" name="search" id="search" placeholder="Search...">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" onclick="search()" class="btn btn-primary float-right">Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive border rounded">
                                    <table id="user-list-table" class="table table-striped" role="grid">
                                        <thead>
                                            <tr class="ligth">
                                                <th class="text-center">No</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Nama User</th>
                                                <th class="text-center">Role</th>
                                                <th class="text-center">Keterangan</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $next = $total > 0 ? round($total / 10) : 0;
                                            if ($datatabel->num_rows() > 0) {
                                                $mulai = isset($start) ? ($start * $datatabel->num_rows()) - 9 : 1;
                                                $no = $mulai - 1;
                                                $sampai = ($mulai + $datatabel->num_rows()) - 1;
                                                foreach ($datatabel->result() as $result) {
                                            ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no += 1; ?></td>
                                                        <td class="text-center"><?php echo date('d-m-Y H:i:s', strtotime($result->tanggal)) ?></td>
                                                        <td class="text-center"><?php echo $result->nama_pengguna ?></td>
                                                        <td class="text-center"><?php echo $result->role_pengguna ?></td>
                                                        <td class="text-center"><?php echo $result->keterangan ?></td>

                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between mb-10 mr-10">
                                        <span>Showing <?php echo isset($mulai) ? $mulai : 1 ?> to <?php echo isset($sampai) ? $sampai : 1 ?> of <?php echo isset($total) ? $total : 0 ?> entries</span>
                                        <nav class="d-flex justify-content-end" aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" id="previousPage" href="<?php echo route('aktifitas.home2', ['offset' => $start != '' && $start > 1 ? $start - 1 : '']) ?>">Sebelumnya</a></li>
                                                <li class="page-item"><a class="page-link" id="currentPage" disabled><?php echo $start != "" ? $start : 1; ?></a></li>
                                                <li class="page-item"><a class="page-link" id="nextPage" href="<?php echo route('aktifitas.home2', ['offset' => $start != '' && $start < $next ? $start + 1 : '']) ?>">Selanjutnya</a></li>
                                            </ul>
                                        </nav>
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

                    window.location = '<?php echo site_url("aktifitas/") ?>' + '1/' + searchValue.value;
                }
            </script>
        </div>
        <?php $this->load->view('template/footer'); ?>