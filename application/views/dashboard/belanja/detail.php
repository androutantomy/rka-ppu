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
                                    <td style="padding:10px !important;"> : Kegiatan Penyediaan dan Pemeliharaan Sarana & Prasarana</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px !important;"><strong>Sub Kegiatan</strong></td>
                                    <td style="padding:10px !important;"> : Kegiatan Kepustakaan</td>
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
                                    <td style="padding:10px !important;"> : Rp 15.000.000</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="card-body">
                            <div style="float:right;">
                                <a href="<?php echo route('belanja.cetak') ?>" target="blank" class="btn btn-primary" style="background:#1AA053 !important;border:1px solid #1AA053 !important;color:white;">
                                <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path>
                                </svg>
                                    Cetak
                                </a>
                                <a class="btn btn-primary" style="background:darkred;color:white;" id="settingbutton" data-bs-toggle="offcanvas" data-bs-target="#live-customizer">
                                    <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                    Tambah
                                </a>
                            </div>
                            <div class="table-responsive border rounded" style="margin-top:50px;">
                                <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                                    <thead>
                                        <tr class="ligth">
                                            <th>Tanggal</th>
                                            <th>Uraian</th>
                                            <th class="text-center">Koefisien</th>
                                            <th class="text-center">Harga Satuan</th>
                                            <th class="text-center">Pajak</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center" style="min-width: 100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>26-02-2023</td>
                                            <td>5.1.1.2.3.001 Batterai Alkaline Kotak 9 Volt</td>
                                            <td class="text-center">20 buah</td>
                                            <td class="text-center">5.000</td>
                                            <td class="text-center">11%</td>
                                            <td class="text-center">1.000.000</td>
                                            <td class="text-center">
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="btn btn-sm btn-icon btn-warning rounded" id="settingbutton" data-bs-toggle="offcanvas" data-bs-target="#live-customizer">
                                                        <span class="btn-inner">
                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-sm btn-icon btn-danger rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#">
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
                                        <tr>
                                            <td>26-02-2023</td>
                                            <td>5.1.1.2.3.002 Batterai Alkaline Kotak 9 Volt</td>
                                            <td class="text-center">20 buah</td>
                                            <td class="text-center">5.000</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">1.000.000</td>
                                            <td class="text-center">
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="btn btn-sm btn-icon btn-warning rounded" id="settingbutton" data-bs-toggle="offcanvas" data-bs-target="#live-customizer">
                                                        <span class="btn-inner">
                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-sm btn-icon btn-danger rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#">
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


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label" aria-modal="true" role="dialog" style="background:#F2F2F2;">
            <div class="offcanvas-header pb-0">
                <div class="d-flex align-items-center">
                    <h4 class="offcanvas-title white" id="live-customizer-label" >Rincian Belanja</h4>
                </div>
                <div class="close-icon" data-bs-dismiss="offcanvas" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            <div class="offcanvas-body data-scrollbar">
                <div class="row">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="exampleInputdate">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputdate" value="26-02-2023">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" >Komponen</label>
                                <select name="type" class="selectpicker form-control select2" data-style="py-0">
                                    <option>5.1.1.2.3.001 Batterai Alkaline Kotak 9 Volt</option>
                                    <option>5.1.1.2.3.002 Kabel Ties 25 mm</option>
                                    <option>5.1.1.2.3.003 Lampu Bohlam LED 19 Watt</option>

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="lname">Satuan</label>
                                <input type="text" class="form-control" id="Satuan" name="Satuan" value="mm">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="lname" >Harga Satuan (Rp)</label>
                                <input type="text" class="form-control" id="harga" name="harga" value="805.000">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="lname" >Koefisien</label>
                                <input type="text" class="form-control" id="harga" name="koefisien" value="2">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="lname" >Volume</label>
                                <input type="text" class="form-control" id="harga" name="koefisien" value="2">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" >PPN (11%)</label>
                                <div class="d-flex align-items-center form-group mb-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="0" name="status_pengguna" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1" >
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check ms-3">
                                        <input class="form-check-input" type="radio" value="1" name="status_pengguna" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2" >
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="form-label" for="lname" >Keterangan</label>
                                <textarea class="form-control" id="keterangan" value="keterangan" rows="5"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Submit</button>

                    </form>

                </div>
            </div>
        </div>
        <?php $this->load->view('template/footer'); ?>