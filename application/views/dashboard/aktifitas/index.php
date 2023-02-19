
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
                        <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
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
                               
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">19-02-2023 21:04:20</td>
                                    <td class="text-center">Krisnawan Adi</td>
                                    <td class="text-center">Admin Prodi</td>
                                    <td class="text-center">Tambah rincian kegiatan</td>
                                    
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">19-02-2023 19:04:20</td>
                                    <td class="text-center">Androu Tantomi</td>
                                    <td class="text-center">Admin Prodi</td>
                                    <td class="text-center">Delete rincian kegiatan</td>
                                    
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template/footer'); ?>
