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
            <div class="iq-navbar-header " style="height: 215px;">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flex-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h1>Standar Biaya</h1>
                                    <p><?php echo ucwords($this->config->item('client_name')) ?></p>
                                </div>
                                <div>
                                    <!-- <a href="<?php echo route('biaya.import') ?>" class="btn btn-link btn-soft-light">
                                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        Import
                                    </a> -->
                                    <a href="<?php echo route('biaya.tambah') ?>" class="btn btn-link btn-soft-light">
                                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        Add New
                                    </a>
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">List Data</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive border rounded">
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
                                    <table id="user-list-table" class="table table-striped" role="grid">
                                        <thead>
                                            <tr class="ligth">
                                                <th width="8%"></th>
                                                <th>Uraian</th>
                                                <th class="">Harga Satuan</th>
                                                <th>Status</th>
                                                <th class="text-center" style="min-width: 100px">Action</th>
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
                                                        <td>
                                                            <?php echo $result->is_utama != "" ? '<strong>' . $result->no_rekening_standar_biaya . '</strong>' : ucwords(strtolower($result->no_rekening_standar_biaya)) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $result->is_utama != "" ? '<strong>' . strtoupper($result->nama_standar_biaya) . '</strong>' : ucwords(strtolower($result->nama_standar_biaya)) ?>
                                                        </td>
                                                        <td><?php echo 'Rp. ' . number_format($result->jumlah_standar_biaya, 0, ',', '.') ?></td>
                                                        <td><span class="badge bg-<?php echo $result->flag == "1" ? "success" : "danger" ?>"><?php echo $result->flag == "1" ? "Aktif" : "Tidak Aktif" ?></span></td>
                                                        <td class="text-center">
                                                            <div class="flex align-items-center list-user-action">
                                                                <a href="<?php echo route('biaya.ubah', ['uuid' => $result->uuid_standar_biaya]) ?>" class="btn btn-sm btn-icon btn-warning rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#">
                                                                    <span class="btn-inner">
                                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                            <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a class="btn btn-sm btn-icon btn-danger rounded btn-delete-user" data-uuid="<?php echo $result->uuid_standar_biaya ?>" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
                                                                    <span class="btn-inner">
                                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between mb-10 mr-10">
                                        <span>Showing <?php echo isset($mulai) ? $mulai : 1 ?> to <?php echo isset($sampai) ? $sampai : 1 ?> of <?php echo isset($total) ? $total : 0 ?> entries</span>
                                        <nav class="d-flex justify-content-end" aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" id="previousPage" href="<?php echo route('pendapatan.home2', ['offset' => $start != '' && $start > 1 ? $start - 1 : '']) ?>">Sebelumnya</a></li>
                                                <li class="page-item"><a class="page-link" id="currentPage" disabled><?php echo $start != "" ? $start : 1; ?></a></li>
                                                <li class="page-item"><a class="page-link" id="nextPage" href="<?php echo route('pendapatan.home2', ['offset' => $start != '' && $start < $next ? $start + 1 : '']) ?>">Selanjutnya</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <?php echo form_open(route('biaya.hapus')) ?>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Apakah anda yakin hapus data?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <input type="hidden" value="" name="uuid_data" id="uuid_data">
                        <input type="hidden" name="offset" value="<?php echo $this->uri->segment(2); ?>">
                        <input type="hidden" name="query" value="<?php echo $this->uri->segment(3); ?>">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Hapus Data</button>
                        </div>
                        <?php form_close() ?>
                    </div>
                </div>
            </div>
            <script>
                const deleteClass = document.getElementsByClassName('btn-delete-user');
                for (let i = 0; i < deleteClass.length; i++) {
                    deleteClass[i].addEventListener('click', setUrl, false);
                }

                function setUrl() {
                    let uuid = this.getAttribute("data-uuid");
                    document.getElementById('uuid_data').value = uuid;
                }
            </script>
        </div>
        <?php $this->load->view('template/footer'); ?>