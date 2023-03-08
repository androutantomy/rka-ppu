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
                           <div id="messageSpan"></div>
                           <form>
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" id="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <label for="customFile" class="form-label custom-file-input"><strong><span style="color: red;">*</span>File Excel Max. 5MB</strong></label>
                                    <input class="form-control" type="file" id="customFile">
                                 </div>
                              </div>
                              <button type="button" onclick="importFile()" class="btn btn-primary" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Import</button>
                              <a href="<?php echo route($this->uri->segment(1) . '.home') ?>" role="button" class="btn btn-primary" style="margin-top:20px;">Kembali</a>
                              <a href="<?php echo route($this->uri->segment(1) . '.template') ?>" target="_blank" role="button" class="btn btn-primary text-right" style="margin-top:20px;background:#009E3D !important;border:1px solid #009E3D !important;">Template</a>
                           </form>
                           <br>
                           <ul style="list-style-type: none;">
                              <li><strong>Perhatian</strong> <span style="color: red;">*</span></li>
                              <li><strong>-</strong> Untuk mengupdate data pastikan anda sudah mendownload template terbaru</li>
                              <li><strong>-</strong> Kolom <strong>id</strong> pada template <strong>tidak boleh dihapus atau diganti</strong>, untuk memudahkan proses update data yang sudah ada</li>
                              <li><strong>-</strong> Pastikan untuk <strong>tidak mengganti nama kolom</strong> pada template</li>
                              <li><strong>-</strong> Untuk menambahkan data baru, cukup dengan <strong>mengosongkan kolom id</strong></li>
                              <li><strong>-</strong> Untuk data baru, pastikan penulisan satuan harga <strong>sesuai dengan data master satuan harga yang sudah ada dalam sistem</strong>.</li>
                           </ul>
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
               xhttp.open("POST", "<?php echo route('biaya.import-data') ?>", true);

               // call on request changes state
               xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                     let response = JSON.parse(this.responseText);
                     let html = '';

                     let resCode = response.resCode;
                     let resToken = response.token;

                     token.value = resToken;

                     if (resCode == "200") {
                        html += '<div class="alert alert-success alert-dismissible fade show " role="alert">';
                        html += '<span><i class="far fa-life-ring"></i></span>';
                        html += '<span> '+ response.resMsg +'</span>';
                        html += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        html += '</div>';
                     } else {
                        html += '<div class="alert alert-danger alert-dismissible fade show " role="alert">';
                        html += '<span><i class="far fa-life-ring"></i></span>';
                        html += '<span> '+ response.resMsg +'</span>';
                        html += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                        html += '</div>';
                     }

                     $("#messageSpan").html(html);
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