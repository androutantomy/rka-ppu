<nav class="nav navbar navbar-expand-xl navbar-light iq-navbar" style="background: rgba(0,0,0,0);">
   <div class="container-fluid navbar-inner">
      <a href="<?php echo base_url() ?>dashboard/index.html" class="navbar-brand">

         <!--Logo start-->
         <div class="logo-main">
            <div class="logo-normal">
               <svg class="text-primary icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor" />
                  <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
               </svg>
            </div>
            <div class="logo-mini">
               <svg class="text-primary icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor" />
                  <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
               </svg>
            </div>
         </div>
         <!--logo End-->
         <h4 class="logo-title d-block d-xl-none" data-setting="app_name">Qompac UI</h4>
      </a>
      <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
         <i class="icon d-flex">
            <svg class="icon-20" width="20" viewBox="0 0 24 24">
               <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
            </svg>
         </i>
      </div>
      <div class="d-flex align-items-center justify-content-between product-offcanvas">

         <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1" id="offcanvasBottom">
            <div class="offcanvas-body">
               <ul class="iq-nav-menu list-unstyled">
                  <li class="nav-item ">
                     <a class="nav-link menu-arrow justify-content-start active" data-bs-toggle="collapse" href="#homeData" role="button" aria-expanded="false" aria-controls="homeData">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 1C12.75 0.585786 12.4142 0.25 12 0.25C11.5858 0.25 11.25 0.585786 11.25 1V4.03081C6.63035 4.41192 3 8.282 3 13C3 17.9706 7.02944 22 12 22C16.9706 22 21 17.9706 21 13C21 8.282 17.3696 4.41192 12.75 4.03081V1ZM12.75 4.03081C12.5027 4.0104 12.2526 4 12 4C11.7474 4 11.4973 4.0104 11.25 4.03081V15C11.25 15.4142 11.5858 15.75 12 15.75C12.4142 15.75 12.75 15.4142 12.75 15V4.03081Z" fill="currentColor"></path>
                        </svg>
                        <span class="nav-text ms-2">Penganggaran - 2023</span>
                     </a>
                  </li>

               </ul>
            </div>
         </div>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0 ">

            <li class="nav-item dropdown">
               <a class="py-0 nav-link d-flex align-items-center ps-3" href="#" id="profile-setting" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url() ?>assets/images/avatars/01.png" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded" loading="lazy">
                  <div class="caption ms-3 d-none d-md-block ">
                     <h6 class="mb-0 caption-title" style="color:#f3f3f3;">Krisnawan Adi</h6>
                     <p class="mb-0 caption-sub-title" style="color:#FAF400;">Super Admin</p>
                  </div>
               </a>
               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile-setting">
                  <li><a class="dropdown-item" href="<?php echo base_url() ?>dashboard/app/user-profile.html">Profile</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url() ?>dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="<?php echo route('logout') ?>">Logout</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
</nav>