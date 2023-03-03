<?php $this->load->view('template/head'); ?>

<body class="  ">
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body" style="position: relative;">
                <img style="position: absolute; width: 100px; height: 100px;" src="<?php echo base_url() ?>assets/images/logo.png" alt="Logo Untag" width="150px">
                <img style="margin-top: 130px; width: 80px; height: 80px;" src="<?php echo base_url() ?>assets/loader/loader.gif" alt="Loader" width="60px">
            </div>
        </div>
    </div>
    <?php $this->load->view('template/sidemenu'); ?>
    <main class="main-content">
        <div class="position-relative  iq-banner ">
            <?php $this->load->view('template/header'); ?>

        </div>
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <?php
            $update = $data->row();
            ?>
            <div>
                <div class="row">
                    <div class="card">
                        <table style="margin: 30px 0px 0px 30px;">
                            <tbody>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Unit Organisasi</strong></td>
                                    <td style="padding:10px !important;"> : <?php echo $this->config->item('yayasan_name'); ?></td>
                                </tr>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Sub Unit Organisasi</strong></td>
                                    <td style="padding:10px !important;"> : <?php echo $this->session->userdata('nama_user') ?></td>
                                </tr>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Kegiatan</strong></td>
                                    <td style="padding:10px !important;"> : <?php echo !empty($update) ? $update->nama_child : '-' ?></td>
                                </tr>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Sub Kegiatan</strong></td>
                                    <td style="padding:10px !important;"> : <?php echo !empty($update) ? $update->nama_kegiatan : '-' ?></td>
                                </tr>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Sumber Pendanaan</strong></td>
                                    <td style="padding:10px !important;"> : <?php echo $this->config->item('pendapatan_yayasan_name'); ?></td>
                                </tr>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Lokasi Kegiatan</strong></td>
                                    <td style="padding:10px !important;"> : <?php echo $this->config->item('alamat_yayasan'); ?></td>
                                </tr>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Waktu Pelaksanaan</strong></td>
                                    <td style="padding:10px !important;"> : Januari s.d. Desember</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Jumlah 2023</strong></td>
                                    <td style="padding:10px !important;"> : Rp. <?php echo isset($total_belanja) && !empty($total_belanja) ? number_format($total_belanja->total_belanja, 0, '.', ',') : '-' ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <span id="messageDisplay"></span>
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

                        <div class="card-body">
                            <div style="float:right;">
                                <a href="<?php echo route('belanja.cetak', ['uuid' => $this->uri->segment(3)]) ?>" target="blank" class="btn btn-primary" style="background:#1AA053 !important;border:1px solid #1AA053 !important;color:white;">
                                    <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                                    </svg>
                                    Cetak
                                </a>
                                <a class="btn btn-primary" style="background:darkred;color:white;" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" id="settingbutton">
                                    <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                    Tambah
                                </a>
                            </div>
                            <div class="table-responsive border rounded" style="margin-top:50px;">
                                <table id="user-list-table" class="table table-striped" role="grid">
                                    <thead>
                                        <tr class="ligth">
                                            <th>Tanggal</th>
                                            <th>Uraian</th>
                                            <th class="text-center">Koefisien</th>
                                            <th class="text-center">Pajak</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center" style="min-width: 100px">Action</th>
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
                                                    <td><?php echo date('d-m-Y', strtotime($result->tanggal_belanja)) ?></td>
                                                    <td><?php echo $result->no_rekening_standar_biaya . ' ' . $result->nama_standar_biaya ?></td>
                                                    <td class="text-center"><?php echo $result->koefisien_1 ?><?php echo $result->volume_2 != "" ? ' X ' : '' ?><?php echo $result->volume_2 != "" ? $result->volume_2 : '' ?> <?php echo $result->nama_satuan; ?> </td>
                                                    <td class="text-center"><?php echo $result->pajak == "1" ? $this->config->item('ppn_value') : ''; ?></td>
                                                    <td class="text-center"><?php echo 'Rp. ' . number_format($result->total_belanja, 0, '.', ',') ?></td>
                                                    <td class="text-center">
                                                        <div class="flex align-items-center list-user-action">
                                                            <a class="btn btn-sm btn-icon btn-warning rounded btn-update-belanja" data-uuid="<?php echo $result->uuid_belanja ?>" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" id="settingbutton">
                                                                <span class="btn-inner">
                                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            <a class="btn btn-sm btn-icon btn-danger rounded btn-delete-user" data-uuid="<?php echo $result->uuid_belanja ?>" data-bs-toggle="modal" data-bs-target="#exampleModalCenterDelete" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete">
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
                                            <li class="page-item"><a class="page-link" id="previousPage" href="<?php echo route('belanja.detail2', ['uuid' => $this->uri->segment(3), 'start' => $prev, 'search' => $search]) ?>">Sebelumnya</a></li>
                                            <li class="page-item"><a class="page-link" id="currentPage" disabled><?php echo $start != "" ? $start : 1; ?></a></li>
                                            <li class="page-item"><a class="page-link" id="nextPage" href="<?php echo route('belanja.detail2', ['uuid' => $this->uri->segment(3), 'start' => $next, 'search' => $search]) ?>">Selanjutnya</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div id="exampleModalCenter" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Masukkan Rincian Belanja</h5>
                                        <button type="button" class="btn-close keluarModal" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <form id="tambah_rincian_belanja">
                                        <div class="modal-body">
                                            <div class="row">
                                                <input type="hidden" name="uuid_rincian_belanja" id="uuid_rincian_belanja">
                                                <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                <div class="form-group col-md-4">
                                                    <label class="form-label" for="tanggal_belanja">Tanggal</label>
                                                    <input type="date" name="tanggal_belanja" class="form-control" id="tanggal_belanja">
                                                </div>
                                                <div class="col-md-6"></div>
                                                <div class="form-group col-md-7">
                                                    <label class="form-label">Komponen</label><br>
                                                    <select name="komponen_belanja" class="form-control" id="komponen_belanja" data-style="py-0"></select>
                                                </div>

                                                <div class="form-group col-md-5">
                                                    <label class="form-label" for="lname">Harga Satuan (Rp)</label>
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" disabled id="harga_satuan" name="harga_satuan" value="_________">
                                                        </div>
                                                        <div class="col-md-1"><strong>/</strong></div>
                                                        <div class="col-md-4">
                                                            <input type="text" name="satuan" id="satuan" disabled class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label class="form-label" for="lname">Koefisien</label>
                                                    <input type="text" class="form-control" id="koefisien_1" name="koefisien_1" placeholder="Koefisien">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label class="form-label" for="lname">Volume</label><br>
                                                    <input type="text" id="volume_2" name="volume_2" placeholder="Volume" class="form-control">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label" for="lname">Satuan</label><br>
                                                    <select class="form-control" id="volume_1" name="volume_1" placeholder="Volume"></select>
                                                </div>
                                                <div class="col-md-4"></div>
                                                <div class="form-group col-md-2">
                                                    <label class="form-label">PPN (11%)</label>
                                                    <div class="d-flex align-items-center form-group mb-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" value="0" name="pajak" id="pajak_tidak">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                        <div class="form-check ms-3">
                                                            <input class="form-check-input" type="radio" value="1" name="pajak" id="pajak_ya">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Ya
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-4"></div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label" for="lname">Koefisien</label>
                                                    <input type="text" class="form-control" id="koefisien_2" name="koefisien_2" placeholder="Koefisien">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="form-label" for="lname">Volume</label><br>
                                                    <select class="form-control" id="volume_2" name="volume_2" placeholder="Volume"></select>
                                                </div> -->
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="lname">Keterangan</label>
                                                    <textarea class="form-control" id="keterangan" value="keterangan" rows="5" placeholder="Keterangan"></textarea>
                                                </div>
                                            </div>
                                            <span id="responseMessage"></span>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary keluarModal" data-bs-dismiss="modal">Batal</button>
                                            <button type="button" id="tambahkan_rincian" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenterDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <?php echo form_open(route('belanja.hapus')) ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Apakah anda yakin hapus data?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <input type="hidden" value="" name="uuid_data" id="uuid_data">
                    <input type="hidden" value="<?php echo $this->uri->segment(3) ?>" name="uuid_kegiatan" id="uuid_kegiatan">
                    <input type="hidden" name="offset" value="<?php echo $this->uri->segment(4); ?>">
                    <input type="hidden" name="query" value="<?php echo $this->uri->segment(5); ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Hapus Data</button>
                    </div>
                    <?php form_close() ?>
                </div>
            </div>
        </div>
        <script>
            $('#komponen_belanja').select2({
                dropdownParent: $('#exampleModalCenter'),
                width: '100%',
                placeholder: 'Pilih Komponen Belanja',
                ajax: {
                    url: "<?php echo route('belanja.get-komponen') ?>",
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

            $("#komponen_belanja").on("change", function() {
                const komponen = $(this).val();
                const token = $("input[name='<?php echo $this->security->get_csrf_token_name(); ?>']").val();

                $.post("<?php echo route('belanja.get-biaya') ?>", {
                    uuid: komponen,
                    <?php echo $this->security->get_csrf_token_name(); ?>: token != '' ? token : '<?php echo $this->security->get_csrf_hash(); ?>'
                }, function(res) {
                    const harga = res.data.harga;
                    const satuan = res.data.satuan;
                    const newToken = res.newToken;

                    $("#harga_satuan").val(harga);
                    $("#satuan").val(satuan);
                    $("input[name='<?php echo $this->security->get_csrf_token_name(); ?>']").val(newToken);

                    console.log(res);
                }, 'json');
            })

            $(document).on('click', '#tambahkan_rincian', function(e) {
                const token = $("input[name='<?php echo $this->security->get_csrf_token_name(); ?>']").val();
                let data = {
                    <?php echo $this->security->get_csrf_token_name(); ?>: token != '' ? token : '<?php echo $this->security->get_csrf_hash(); ?>',
                    uuid_kegiatan: '<?php echo $this->uri->segment(3); ?>',
                    tanggal_belanja: $("#tanggal_belanja").val(),
                    komponen: $("#komponen_belanja").val(),
                    pajak: $('input[name="pajak_tidak"]:checked').val() ? '0' : '1',
                    koefisien_1: $("#koefisien_1").val(),
                    koefisien_2: $("#koefisien_2").val(),
                    volume_1: $("#volume_1").val(),
                    volume_2: $("#volume_2").val(),
                    keterangan: $("#keterangan").val(),
                    uuid_rincian_belanja: $("#uuid_rincian_belanja").val()
                };

                $.ajax({
                    url: '<?php echo route("belanja.simpan") ?>',
                    method: 'POST',
                    data: data,
                    dataType: 'json',
                    success: function(data) {
                        const newToken = data.newToken;
                        let html = '';
                        if (data.status == '200') {
                            let html = '';
                            html += '<div class="alert alert-success alert-dismissible fade show " role="alert">';
                            html += '<span><i class="far fa-life-ring"></i></span>';
                            html += '<span> Berhasil simpan data</span>';
                            html += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                            html += '</div>';

                            $("#responseMessage").html(html);
                            setTimeout(() => {
                                location.reload();
                            }, 500);
                        } else {
                            $("input[name='<?php echo $this->security->get_csrf_token_name(); ?>']").val(newToken);

                            html += '<div class="alert alert-danger alert-dismissible fade show " role="alert">';
                            html += '<span><i class="far fa-life-ring"></i></span>';
                            html += '<span>' + data.message + '</span>';
                            html += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                            html += '</div>';

                            $("#responseMessage").html(html)
                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        let html = '';
                        html += '<div class="alert alert-success alert-dismissible fade show " role="alert">';
                        html += '<span><i class="far fa-life-ring"></i></span>';
                        html += '<span>' + errorThrown + '</span>';
                        html += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        html += '</div>';

                        $("#responseMessage").html(html)
                    },
                });
            });

            $('#volume_1').select2({
                width: '100%',
                placeholder: 'Pilih Satuan',
                dropdownParent: $('#exampleModalCenter'),
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

            const deleteClass = document.getElementsByClassName('btn-delete-user');
            const updateClass = document.getElementsByClassName('btn-update-belanja');

            function search() {
                const searchValue = document.getElementById('search');

                window.location = '<?php echo site_url("belanja/detail/" . $this->uri->segment(3)) ?>' + '1/' + searchValue.value;
            }

            for (let i = 0; i < deleteClass.length; i++) {
                deleteClass[i].addEventListener('click', setUrl, false);
                updateClass[i].addEventListener('click', getUpdateData, false);
            }

            function setUrl() {
                let uuid = this.getAttribute("data-uuid");
                document.getElementById('uuid_data').value = uuid;
            }

            function getUpdateData() {
                const token = $("input[name='<?php echo $this->security->get_csrf_token_name(); ?>']").val();
                let data = {
                    uuid_belanja: this.getAttribute("data-uuid"),
                    <?php echo $this->security->get_csrf_token_name(); ?>: token != '' ? token : '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                $.post('<?php echo route("belanja.get-detail-update") ?>', data, function(res) {
                    const newToken = res.newToken;
                    $("input[name='<?php echo $this->security->get_csrf_token_name(); ?>']").val(newToken);

                    if (res.status == "200") {
                        let data = res.data;
                        let level_user = '<?php echo $this->session->userdata("level_user") ?>';
                        let komponen = '<option selected value="' + data.uuid_standar_biaya + '">' + data.nama_standar_biaya + '</option>';
                        let harga_satuan = 'Rp. ' + data.jumlah_standar_biaya;
                        let volume_1 = '<option selected value="' + data.volume_1 + '">' + data.nama_satuan + '</option>';

                        $("#uuid_rincian_belanja").val(data.uuid_belanja);
                        $("#tanggal_belanja").val(data.tanggal_belanja);
                        $("#harga_satuan").val(harga_satuan);
                        $("#satuan").val(data.satuan_belanja);
                        $("#komponen_belanja").html(komponen);
                        $("#koefisien_1").val(data.koefisien_1);
                        $("#volume_1").html(volume_1);
                        $("#volume_2").val(data.volume_2);
                        if (data.pajak == '0') {
                            $('#pajak_tidak').prop('checked', true);
                        } else {
                            $('#pajak_ya').prop('checked', true);
                        }
                        $("#keterangan").val(data.keterangan);

                        if (data.edited != '0' && level_user != "1") {
                            $("#tambahkan_rincian").attr('disabled', 'disabled');
                            let html = '';
                            html += '<div class="alert alert-danger alert-dismissible fade show " role="alert">';
                            html += '<span><i class="far fa-life-ring"></i></span>';
                            html += '<span> Data sudah pernah diperbaharui </span>';
                            html += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                            html += '</div>';

                            $("#responseMessage").html(html)
                        }
                    }
                }, 'json')
            }

            $(document).ready(function() {
                $('#exampleModalCenter').on('hide.bs.modal', function(e) {
                    $("#uuid_rincian_belanja").val('');
                    $("#tanggal_belanja").val('');
                    $("#harga_satuan").val('');
                    $("#satuan").val('');
                    $("#komponen_belanja").html('');
                    $("#koefisien_1").val('');
                    $("#volume_1").html('');
                    $("#volume_2").html('');
                    $('#pajak_tidak').prop('checked', false);
                    $('#pajak_ya').prop('checked', false);
                    $("#keterangan").val('');
                    $("#tambahkan_rincian").removeAttr('disabled');
                    $("#responseMessage").html('')
                });
            })
        </script>
        <?php $this->load->view('template/footer'); ?>