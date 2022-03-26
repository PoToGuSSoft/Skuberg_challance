
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
      <title>COINEX | Responsive Bootstrap 5 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/libs.min.css">
      <link rel="stylesheet" href="../assets/css/coinex.css?v=1.0.0">  </head>

      <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    <aside class="sidebar sidebar-default navs-rounded ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="../dashboard/index.html" class="navbar-brand dis-none align-items-center justify-content-center">
                <svg width="36" class="text-primary" viewBox="0 0 128 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M117.348 105.33C117.594 105.476 117.669 105.799 117.508 106.036C110.26 116.759 99.5876 125.042 87.0232 129.687C74.2883 134.395 60.2849 135.117 47.0817 131.745C33.8785 128.372 22.1759 121.086 13.7027 110.961C5.22957 100.836 0.43531 88.4101 0.0282348 75.5189C-0.37884 62.6276 3.62286 49.9548 11.4421 39.3726C19.2614 28.7905 30.4835 20.8602 43.4505 16.7536C56.4176 12.6469 70.4417 12.5815 83.4512 16.5672C96.2865 20.4995 107.462 28.1693 115.375 38.4663C115.55 38.6939 115.495 39.0214 115.256 39.1813L97.3742 51.176C97.1539 51.3238 96.8567 51.2735 96.6942 51.0637C91.6372 44.53 84.5205 39.6627 76.3537 37.1606C68.031 34.6109 59.0591 34.6527 50.7636 37.2799C42.468 39.9071 35.2888 44.9804 30.2865 51.7502C25.2842 58.5201 22.7241 66.6274 22.9846 74.8745C23.245 83.1215 26.3121 91.0709 31.7327 97.5482C37.1533 104.025 44.64 108.687 53.0866 110.844C61.5332 113.002 70.4918 112.54 78.6389 109.528C86.6324 106.573 93.4288 101.316 98.0645 94.5111C98.2142 94.2913 98.5086 94.2233 98.7376 94.3583L117.348 105.33Z" fill="#FF971D"></path>
                        <path d="M53.2837 0.5C53.2837 0.223858 53.5075 0 53.7837 0H75.6195C75.8957 0 76.1195 0.223858 76.1195 0.5V26.25H53.2837V0.5Z" fill="#FF971D"></path>
                        <path d="M53.2837 123.75H76.1195V149.5C76.1195 149.776 75.8957 150 75.6195 150H53.7837C53.5075 150 53.2837 149.776 53.2837 149.5V123.75Z" fill="#FF971D"></path>
                    </g>
                </svg>            <h4 class="logo-title m-0">OINEX</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body p-0 data-scrollbar">
            <div class="collapse navbar-collapse pe-3" id="sidebar">
                <ul class="navbar-nav iq-main-menu">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="../dashboard/index.html">
                            <i class="icon">
                            <svg width="22" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>                            
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                            <svg width="22" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.9849 15.3462C8.11731 15.3462 4.81445 15.931 4.81445 18.2729C4.81445 20.6148 8.09636 21.2205 11.9849 21.2205C15.8525 21.2205 19.1545 20.6348 19.1545 18.2938C19.1545 15.9529 15.8735 15.3462 11.9849 15.3462Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.9849 12.0059C14.523 12.0059 16.5801 9.94779 16.5801 7.40969C16.5801 4.8716 14.523 2.81445 11.9849 2.81445C9.44679 2.81445 7.3887 4.8716 7.3887 7.40969C7.38013 9.93922 9.42394 11.9973 11.9525 12.0059H11.9849Z" stroke="currentColor" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"></path> </svg>                            
                            </i>
                            <span class="item-name">Users</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/app/user-profile.html">
                                    <i class="icon">
                                    <svg width="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="1" width="11" height="11" stroke="currentcolor"/>
                                    </svg>                           
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/app/user-add.html">
                                    <i class="icon">
                                        <svg width="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="1" width="11" height="11" stroke="currentcolor"/>
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User Edit</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="../dashboard/app/user-list.html">
                                    <i class="icon">
                                        <svg width="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="1" width="11" height="11" stroke="currentcolor"/>
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> U </i>
                                    <span class="item-name">User List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                 <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9846 21.606C11.9846 21.606 19.6566 19.283 19.6566 12.879C19.6566 6.474 19.9346 5.974 19.3196 5.358C18.7036 4.742 12.9906 2.75 11.9846 2.75C10.9786 2.75 5.26557 4.742 4.65057 5.358C4.03457 5.974 4.31257 6.474 4.31257 12.879C4.31257 19.283 11.9846 21.606 11.9846 21.606Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9.38574 11.8746L11.2777 13.7696L15.1757 9.86963" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </i>
                            <span class="item-name">Authentication</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/sign-in.html">
                                    <i class="icon">
                                        <svg width="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="1" width="11" height="11" stroke="currentcolor"/>
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Login</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/sign-up.html">
                                    <i class="icon">
                                        <svg width="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="1" width="11" height="11" stroke="currentcolor"/>
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Register</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/confirm-mail.html">
                                    <i class="icon">
                                        <svg width="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="1" width="11" height="11" stroke="currentcolor"/>
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> C </i>
                                    <span class="item-name">Confirm Mail</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/lock-screen.html">
                                    <i class="icon">
                                        <svg width="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="1" width="11" height="11" stroke="currentcolor"/>
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Lock Screen</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard/auth/recoverpw.html">
                                   <i class="icon">
                                        <svg width="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="1" width="11" height="11" stroke="currentcolor"/>
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Recover password</span>
                                </a>
                            </li>
                        </ul>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/maps/google.html">
                            <i class="icon">
                                <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 10.5005C14.5 9.11924 13.3808 8 12.0005 8C10.6192 8 9.5 9.11924 9.5 10.5005C9.5 11.8808 10.6192 13 12.0005 13C13.3808 13 14.5 11.8808 14.5 10.5005Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9995 21C10.801 21 4.5 15.8984 4.5 10.5633C4.5 6.38664 7.8571 3 11.9995 3C16.1419 3 19.5 6.38664 19.5 10.5633C19.5 15.8984 13.198 21 11.9995 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>                            
                            </i>
                            <span class="item-name">Maps</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/icons/outline.html">
                            <i class="icon">
                                <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.739 6.15368C19.739 3.40281 17.8583 2.30005 15.1506 2.30005H8.79167C6.16711 2.30005 4.2002 3.32762 4.2002 5.97022V20.694C4.2002 21.4198 4.98115 21.877 5.61373 21.5221L11.9957 17.9422L18.3225 21.5161C18.9561 21.873 19.739 21.4158 19.739 20.689V6.15368Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    
                                <path d="M8.27148 9.02811H15.5898" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                
                                </svg>                            
                            </i>
                                <span class="item-name">icons</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../dashboard/errors/error404.html">
                            <i class="icon">
                                <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3955 9.59497L9.60352 14.387" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    
                                <path d="M14.3971 14.3898L9.60107 9.59277" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                
                                </svg>                            
                            </i>
                            <span class="item-name">Error</span>
                        </a>
                    </li> 
                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item">
                        <a class="nav-link " href="../index.html" target="_blank">
                        <i class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </i>
                            <span class="item-name">Components</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " target="_blank" href="https://templates.iqonic.design/coinex/documentation/html/dist/main/">
                        <i class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                            </svg>
                        </i>
                            <span class="item-name">Documentation</span>
                        </a>
                    </li>
                </ul>        </div>        
            <!--<div id="sidebar-footer" class="position-relative sidebar-footer">
                <div class="card mx-4">
                    <div class="card-body">
                        <div class="sidebarbottom-content">
                            <div class="image">
                                <img src="../assets/images/coins/13.png" alt="User-Profile" class="img-fluid">
                            </div>
                            <p class="mb-0">Be more secure with Pro Feature</p>
                            <button type="button" class="btn btn-primary mt-3">Upgrade Now</button>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </aside>    <main class="main-content">
      <div class="position-relative">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar border-bottom">
          <div class="container-fluid navbar-inner">
            <a href="../dashboard/index.html" class="navbar-brand">
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
              <h4 class="title">
                Dashboard
              </h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="navbar-toggler-bar bar1 mt-2"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto navbar-list mb-2 mb-lg-0 align-items-center">
                 <li>
                  <div type="button" class="btn btn-primary w-100">
                  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                  <i class="fas fa-band-aid"></i>
                        <span class="ms-2">Transfer Now {{ $wallet[0]->amount }}</span>
                     </div>
                 </li>
                <li class="nav-item dropdown">
                  <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                    <svg width="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 17.8476C17.6392 17.8476 20.2481 17.1242 20.5 14.2205C20.5 11.3188 18.6812 11.5054 18.6812 7.94511C18.6812 5.16414 16.0452 2 12 2C7.95477 2 5.31885 5.16414 5.31885 7.94511C5.31885 11.5054 3.5 11.3188 3.5 14.2205C3.75295 17.1352 6.36177 17.8476 12 17.8476Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.3889 20.8572C13.0247 22.3719 10.8967 22.3899 9.51953 20.8572" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>                            
                    <span class="bg-danger dots"></span>
                  </a>
                  <div class="sub-drop dropdown-menu iq-noti dropdown-menu-end p-0" aria-labelledby="notification-drop">
                      <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                              <p class="fs-6 ">New notifications.</p>
                            </div>
                            <div class="header-title">
                              <p class="fs-6">Mark all</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex">
                                  <img src="../assets/images/utilities/05.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img51"><div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Successfull transaction og 0.01 BTC</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">15 mins ago</p>
                                        </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <div class="">
                                    <img src="../assets/images/utilities/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img52">
                                  </div>
                                  <div class="ms-3 w-100">
                                    <h6 class="mb-0 ">4 of Pending Transactions!</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">30 mins ago</p>
                                        
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img src="../assets/images/utilities/04.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img53"><div class="ms-3 w-100">
                                    <h6 class="mb-0 ">Cancelled order of 2000 ICO</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">55 mins ago</p>
                                        
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex align-items-center">
                                  <img src="../assets/images/utilities/05.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img54"><div class="w-100 ms-3">
                                    <h6 class="mb-0 ">Great speed notify of 1.34 LTC</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0">14 Mar</p>
                                        
                                    </div>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class="nav-item dropdown" >
                  <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.9028 8.85107L13.4596 12.4641C12.6201 13.1301 11.4389 13.1301 10.5994 12.4641L6.11865 8.85107" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>                            
                    <span class="bg-primary count-mail"></span>
                  </a>
                  <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop">
                      <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between py-3">
                            <div class="header-title">
                              <p class="mb-0 text-white">Our Latest News</p>
                            </div>
                        </div>
                        <div class="card-body p-0 ">
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex ">
                                  <div class="">
                                    <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img55">
                                  </div>
                                  <div class=" w-100 ms-3">
                                    <h6 class="mb-0 ">Bitcoin</h6>
                                    <small class="float-left font-size-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex">
                                  <div class="">
                                    <img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img56">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Ethereum</h6>
                                    <small class="float-left font-size-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </small>
                                  </div>
                              </div>
                            </a>
                            <a href="#" class="iq-sub-card">
                              <div class="d-flex">
                                  <div class="">
                                    <img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img57">
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-0 ">Litecoin</h6>
                                    <small class="float-left font-size-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/images/avatars/01.png" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                    <div class="caption ms-3 ">
                        <h6 class="mb-0 caption-title">{{ $user->name }}</h6>
                        <p class="mb-0 caption-sub-title">{{ $user->email }}</p>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li class="border-0"><a class="dropdown-item" href="../dashboard/app/user-profile.html">Profile</a></li>
                    <li class="border-0"><a class="dropdown-item" href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                    <li class="border-0"><hr class="m-0 dropdown-divider"></li>
                    <li class="border-0"><a class="dropdown-item" href="../dashboard/auth/sign-in.html">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>        <!--Nav End-->
      </div>
      <div class="container-fluid content-inner pb-0">
<div class="row">
   <div class="col-lg-12">
         <div class="row align-items-center mb-4">
            <div class="col-xl-9 d-none d-md-block">
               <div class="card mb-xl-0">
                  <div class="card-body ">
                     <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex">
                           <img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                           <div class="dropdown mt-2 ms-2">
                              <a href="#" class="text-white" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="mt-2">Litecoin</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton4">
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/08.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                              </ul>
                           </div>                    
                           <div class="dropdown mt-2 ms-2">
                              <a href="#" class="text-white" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="mt-2 ">BTC/USD</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton4">
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/08.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                              </ul>
                           </div> 
                        </div>
                        <div class="d-none d-lg-block w-50">
                           <div class="d-flex justify-content-evenly flex-1">
                              <span class=" text-primary">
                                 37,390.00<br>
                                 <small>$37,390.00</small>
                              </span>
                              <span class=" text-primary">
                                 129.51+0.8%<br>
                                 <small>24th changes</small>
                              </span>
                              <span class="">
                                 37,440.01<br>
                                 <small>24th high</small>
                              </span>
                              <span class="">
                                 37,327.30<br>
                                 <small>24th low</small>
                              </span>
                              <span class="d-none">
                                 37,390.00<br>
                                 <small>24th volume(BTC)</small>
                              </span>                     
                           </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                           <span class="">
                              <svg width="32" height="32" viewBox="0 0 34 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="6" width="1" height="53" rx="0.5" fill="white"/>
                              <rect x="0.5" y="9.5" width="12" height="34" rx="1.5" fill="#202022"/>
                              <rect x="0.5" y="9.5" width="12" height="34" rx="1.5" stroke="white"/>
                              <rect x="27" width="1" height="53" rx="0.5" fill="white"/>
                              <rect x="21.5" y="13.5" width="12" height="25" rx="1.5" fill="#202022"/>
                              <rect x="21.5" y="13.5" width="12" height="25" rx="1.5" stroke="white"/>
                              </svg>
                           </span>
                           <a href="#" class="bg-secondary rounded-1 p-2 ms-2">
                              <svg width="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M26.3875 14.1244L16.8484 23.7653L5.99906 16.9795C4.44458 16.0069 4.76794 13.6457 6.5262 13.1315L32.2854 5.58795C33.8954 5.11605 35.3876 6.62138 34.9093 8.23666L27.2885 33.9779C26.7664 35.7387 24.4187 36.0533 23.4553 34.4921L16.8433 23.767" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>     
            </div>      
            <div class="col-xl-3">
               <div class="d-grid grid-3-auto gap-card">
                  <div class="dropdown">
                     <button class="btn btn-primary w-100" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                        Buy / Sell
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <div class="cardbuysell mb-0">
                           <div class="card-body iq-extra">
                              <div class="d-flex justify-content-between">
                                 <div class="header-title">
                                    <p class="fs-6 ">Buy</p>
                                 </div>
                                 <div class="header-title">
                                    <p class="fs-6">Sell</p>
                                 </div>
                              </div>
                              <select class="form-select mb-3" aria-label="Default select example">
                                 <option selected><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></option>
                                 <option><li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li></option>
                                 <option><li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li></option>
                              </select>
                              <div class="d-flex justify-content-between">
                                 <h6>Amount(USD)</h6>
                                 <h6 class="mt-3 text-warning">USD</h6>
                              </div>
                              <p>$5.696.24</p>
                              <div class="d-flex justify-content-between">
                                 <h6>Amount(BTC)</h6>
                                 <h6 class="mt-3 text-warning">BTC</h6>
                              </div>
                              <p>$5.696.24</p>             
                              <div class="d-grid">
                                 <button class="btn btn-primary" type="button">Buy BTC</button>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>            
                  <div class="dropdown">
                     <button class="btn btn-primary w-100" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                        + Add Crypto
                     </button>
                     <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton4">
                        <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                        <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                        <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                        <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/08.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
   </div>
</div>
<div class="row">
   <div class="col-lg-8">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">                    
                        <img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img60"> 
                        <span class="fs-5 me-2">BTC/USDT</span>
                        <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#BFBFBF" stroke="#BFBFBF"/>
                        </svg>
                        <div class="pt-3">
                           <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                           <div class="pt-3">
                              <small>+ 0.8%</small>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">                    
                        <img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img60"> 
                        <span class="fs-5 me-2">ETH/USDT</span>
                        <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#BFBFBF" stroke="#BFBFBF"/>
                        </svg>
                        <div class="progress-detail pt-3">
                           <h4 class="counter" style="visibility: visible;">$2,138.87</h4>
                           <div class="pt-3">
                           <small>+ 0.8%</small>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">                    
                        <img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-50 avatar-rounded" alt="img60"> 
                        <span class="fs-5 me-2">LTC/USDT</span>
                        <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#BFBFBF" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#BFBFBF" stroke="#BFBFBF"/>
                        </svg>
                        <div class="progress-detail pt-3">
                           <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                           <div class="pt-3">
                           <small>+ 0.8%</small>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between flex-wrap">
                        <div class="header-title ">
                           <h4 class="card-title">Quick Trade</h4>        
                        </div>
                        <div class="d-flex">
                           <div class="dropdown p-0">
                              <button class="btn btn-soft-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                                 <img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img5">
                                 561,511 btc
                              </button>
                              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton5">
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img75"> 561,511 Btc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img76"> 561,511 Ltc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/03.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img77"> 561,511 Eth</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="../assets/images/coins/08.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img78"> 561,511 Xmr</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <form class="col-lg-12">
                           <div class="form-group mb-3">
                              <div class="input-group pt-1">
                                 <span class="input-group-text" id="basic-addon3">BTC</span>
                                 <input type="text" class="form-control col-lg-8" placeholder="0,000000" aria-label="Recipient's username" aria-describedby="basic-addon3">
                              </div>
                           </div>
                           <div class="form-group mb-3">
                              <div class="input-group pt-2">
                                 <span class="input-group-text" id="basic-addon4">BPL</span>
                                 <input type="text" class="form-control col-lg-8" placeholder="0,000000" aria-label="Recipient's username" aria-describedby="basic-addon3">
                              </div>
                              
                           </div>
                           <div class="form-group mb-3">
                              <div class="input-group pt-2">
                                 <span class="input-group-text" id="basic-addon6">Total</span>
                                 <input type="text" class="form-control col-lg-8" placeholder="0,000000" aria-label="Recipient's username" aria-describedby="basic-addon3">
                              </div>
                           </div>
                           <div class="">
                              <div class="d-grid gap-card grid-cols-2">
                                 <button class="btn btn-success" type="button">
                                    <span>BUY</span>
                                    <svg class="rotate-45" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.75 11.7256L4.75 11.7256" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.7002 5.70124L19.7502 11.7252L13.7002 17.7502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                 </button>
                                 <button class="btn btn-danger" type="button">
                                    <span>SELL</span>
                                    <svg class="rotate-45" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>                                          
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="card">
                     <div class="card-header">
                        <div class="header-title ">
                           <h4 class="card-title">Account Summary</h4>        
                        </div>
                     </div>
                     <div class="card-body text-center">
                        <div class="row">
                        <div class="col-md-6"> 
                           <div class="card bg-soft-secondary align-items-center shadow-none mb-lg-0 pt-4">
                              <div class="avatar bg-secondary p-2 mb-2">
                                 <svg width="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M33.4767 40.8511H12.997C12.5855 40.8511 12.3502 40.3818 12.5963 40.052L34.1225 11.207C34.4103 10.8214 35.0233 11.0249 35.0233 11.506V30.7766C35.0233 31.0527 35.2471 31.2766 35.5233 31.2766H55.9584C56.3779 31.2766 56.6109 31.762 56.3486 32.0893L34.8669 58.8895C34.5714 59.2581 33.9767 59.0492 33.9767 58.5768V41.3511C33.9767 41.0749 33.7529 40.8511 33.4767 40.8511Z" stroke="white"/>
                                 </svg>
                              </div>
                              <h6 class="pt-4">This Week </h6>                  
                              <div class="pt-4">
                                 <h5 class="counter" style="visibility: visible;">$3.45K
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="green">
                                       <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                       </svg>
                                    </span>
                                 </h5>
                                 <div class="pt-4">
                                    <div class="pb-3">
                                    <small>+ 64%</small>  
                                    </div> 
                                 </div>                       
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6"> 
                           <div class="card bg-soft-secondary align-items-center pt-4 shadow-none mb-0">
                              <div class="avatar bg-secondary p-2 mb-2">
                                 <svg width="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 41V16C7 15.4477 7.44772 15 8 15H35" stroke="white" stroke-linecap="round"/>
                                 <path d="M63.3612 39.8457C63.5522 39.6462 63.5452 39.3297 63.3457 39.1388C63.1462 38.9478 62.8297 38.9548 62.6388 39.1543L63.3612 39.8457ZM49.804 53.2893L49.4427 52.9436L49.804 53.2893ZM48.4021 53.3317L48.7418 52.9649L48.4021 53.3317ZM62.6388 39.1543L49.4427 52.9436L50.1652 53.635L63.3612 39.8457L62.6388 39.1543ZM48.7418 52.9649L7.33969 14.6331L6.66031 15.3669L48.0624 53.6986L48.7418 52.9649ZM49.4427 52.9436C49.254 53.1408 48.9421 53.1503 48.7418 52.9649L48.0624 53.6986C48.6632 54.2549 49.5991 54.2266 50.1652 53.635L49.4427 52.9436Z" fill="white"/>
                                 </svg>
                              </div>
                              <h6 class="pt-4">This Month </h6>                  
                              <div class="pt-4">
                                 <h5 class="counter" style="visibility: visible;">$3.45K
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="red">
                                       <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                       </svg>
                                    </span>
                                 </h5>
                                 <div class="pt-4 pb-3">
                                    <small>- 31%</small>
                                 </div>
                              </div>
                           </div>
                        </div>              
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between flex-wrap">
                  <div class="header-title">
                     <h4 class="card-title mb-2">Market Overview</h4>
                     <p class="mb-0">Pictorial monthly analytics of market.</p>          
                  </div>
                  <div class="d-flex align-items-center align-self-center">
                     <div class="d-flex align-items-center">
                        <div class="form-check active" >
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                           <label class="form-check-label" for="flexRadioDefault1">ETH
                           </label>
                        </div>
                     </div>
                     <div class="d-flex align-items-center ms-3">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                           <label class="form-check-label" for="flexRadioDefault2">XMR
                           </label>
                        </div>
                     </div>
                     <div class="d-flex align-items-center ms-3">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                           <label class="form-check-label" for="flexRadioDefault3">LTC
                           </label>
                        </div>
                     </div>
                     <div class="d-flex align-items-center ms-3">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                           <label class="form-check-label" for="flexRadioDefault4">XMR
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="dropdown ms-4">
                  <a class="btn btn-primary dropdown-toggle mt-2" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                     Weekly (2020)
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <li><a class="dropdown-item" href="#">Weekly (2020)</a></li>
                     <li><a class="dropdown-item" href="#">Monthly (2020)</a></li>
                     <li><a class="dropdown-item" href="#">Today (2020)</a></li>
                  </ul>
               </div>
               <div class="card-body">
                  <div id="apex-candlestick-chart"></div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="card card-block card-stretch custom-scroll">
               <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                  <div class="caption">
                     <h4 class="font-weight-bold mb-2">Recent Trading Activities</h4>
                     <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                     <input type="checkbox" class="btn-check" id="btncheck1">
                     <label class="btn btn-sm btn-secondary active rounded-start" for="btncheck1">Monthly</label>

                     <input type="checkbox" class="btn-check" id="btncheck2">
                     <label class="btn btn-sm btn-secondary " for="btncheck2">Weekly</label>

                     <input type="checkbox" class="btn-check" id="btncheck3">
                     <label class="btn btn-sm btn-secondary rounded-end" for="btncheck3">Today</label>
                  </div>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table data-table mb-0">
                        <thead>
                           <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Price</th>
                              <th scope="col">24h %</th>
                              <th scope="col">7d %</th>
                              <th scope="col">Market Cap</th>
                              <th scope="col">Volume(24th)</th>
                              <th scope="col">Circulating</th>
                              <th scope="col">Last 7 Days</th>
                           </tr>
                        </thead>
                           <tbody>
                              <tr class="white-space-no-wrap">
                                 <td>
                                    <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                    Bitcoin BTC<a class="button btn-primary badge ms-2" type="button">Buy</a>
                                 </td>
                                 <td class="pe-2">$40,501.87</td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    6.93%
                                 </td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    4.58%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-1"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="white-space-no-wrap">
                                 <td>
                                       <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                       Ethereum ETH<a class="button btn-primary badge ms-2" type="button">Buy</a>
                                 </td>
                                 <td class="pe-2">$2,796.60</td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    3.33%
                                 </td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    15.45%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-2"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="white-space-no-wrap">
                                 <td>
                                       <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                       Monero XMR<a class="button btn-primary badge ms-2" type="button">Buy</a>
                                 </td>
                                 <td class="pe-2">$1.00</td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    0.01%
                                 </td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    0.02%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-3"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="white-space-no-wrap">
                                 <td>
                                       <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                       Litecoin LTC<a class="button btn-primary badge ms-2" type="button">Buy</a>
                                 </td>
                                 <td class="pe-2">$40,501.87</td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    6.93%
                                 </td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    4.58%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-4"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="white-space-no-wrap">
                                 <td>
                                       <img src="../assets/images/coins/02.png" class="img-fluid avatar avatar-30 avatar-rounded" alt="img23" />
                                       Bitcoin BTC<a class="button btn-primary badge ms-2" type="button">Buy</a>
                                 </td>
                                 <td class="pe-2">$40,501.87</td>
                                 <td class="text-success"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 0.5L7.4641 5H0.535898L4 0.5Z" fill="#00EC42"/>
                                    </svg>
                                    6.93%
                                 </td>
                                 <td class="text-danger"><svg width="10" height="8" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4.5L0.535898 0L7.4641 0L4 4.5Z" fill="#FF2E2E"/>
                                    </svg>
                                    4.58%
                                 </td>
                                 <td>$123,456,789,159</td>
                                 <td>$373,359,580,155<br>
                                    <small class="ms-5">635,237 BTC</small>
                                 </td>
                                 <td class="ms-5">18,777,768 BTC</td>
                                 <td>
                                    <div class="d-flex justify-content-between">
                                       <div id="sparklinechart-5"></div>             
                                       <div class="dropdown ms-4">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                          </svg>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                             <li><a class="dropdown-item" href="#">View Charts</a></li>
                                             <li><a class="dropdown-item" href="#">View Markets</a></li>
                                             <li><a class="dropdown-item" href="#">View Historical Data</a></li>
                                          </ul>
                                       </div>
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
   <div class="col-lg-4">
      <div class="row">
         <div class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <div class="input-group search-input">
                  <input type="search" class="form-control form-control-lg" placeholder="Search BTS/ETH">
               </div>
                  </div>
                  <div class="card-body d-flex align-items-center justify-content-center">
                     <img src="../assets/images/coins/14.png" class="img-fluid p-0 w-75" alt="img60">
                  </div>
               </div>
         </div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <div class="header-title">
                        <h4 class="card-title">History</h4>
                  </div>
               </div>
               <div class="card-body">
                  <ul class="list-inline m-0 p-0">
                     <li class="d-flex  align-items-center pt-3">
                        <div class="d-flex justify-content-between rounded-pill"><img src="../assets/images/coins/01.png" class="img-fluid avatar avatar-40 avatar-rounded" alt="img6">
                           <div class="ms-3 flex-grow-1">
                           <h5 class="mb-2">Bitcoin</h5>
                           <p class=" text-success mb-2">+$10,00</p>
                           <p class="fs-6">Bitcoins Evolution™. 234000 Satisfied Customers From 107 Countries.</p>
                           </div>
                           <div class="">
                              <p>11/02/21</p>
                           </div>
                        </div>
                     </li>
                     <li class="d-flex  align-items-center pt-3">
                        <div class="d-flex justify-content-between rounded-pill"><img src="../assets/images/coins/09.png" class="img-fluid avatar avatar-40 avatar-rounded" alt="img7">
                           <div class="ms-3 flex-grow-1">
                           <h5 class="mb-2">Ethereum</h5>
                           <p class=" text-danger mb-2">-$50,00</p>
                           <p class="fs-6">Ethereum is a decentralized, blockchain with smart contract functionality</p>
                           </div>
                           <div class="">
                              <p>11/02/21</p>
                           </div>
                        </div>
                     </li>
                     <li class="d-flex  align-items-center pt-3">
                        <div class="d-flex justify-content-between rounded-pill"><img src="../assets/images/coins/06.png" class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                           <div class="ms-3 flex-grow-1">
                           <h5 class="mb-2">Litecoin</h5>
                           <p class=" text-danger mb-2">-$50,00</p>
                           <p class="fs-6">Litecoin is a peer-to-peer cryptocurrency and open-source software</p>
                           </div>
                           <div class="">
                              <p>11/02/21</p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between flex-wrap">
                  <div class="header-title">
                     <h4 class="card-title">Quick Transfer</h4>          
                  </div>
               </div>
               <div class="card-body">
                  <div class= "d-grid grid-cols-5 gap-card mb-4">
                     <div class="">
                        <img src="../assets/images/avatars/02.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img36">
                     </div>
                     <div class="">
                        <img src="../assets/images/avatars/03.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img37">
                     </div>
                     <div class="">
                        <img src="../assets/images/avatars/04.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img38">
                     </div>
                     <div class="">
                        <img src="../assets/images/avatars/05.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img39">
                     </div>
                     <div class="">
                        <img src="../assets/images/avatars/06.png" class="img-fluid avatar avatar-30px avatar-rounded" alt="img40">
                     </div>
                  </div>
                  <div class="input-group mb-4">
                     <span class="input-group-text" id="basic-addon3">Amount</span>
                     <input type="text" class="form-control col-lg-8" placeholder="126.5" aria-label="Recipient's username" aria-describedby="basic-addon3">
                  </div>  
                  <div class="d-grid grid-cols-1 gap-card justify-content-between">
                  <div>
                     <button type="button" class="btn btn-primary w-100">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M8.74074 8.25926L2 6.7037L16 1M8.74074 8.25926L10.8148 15L16 1M8.74074 8.25926L16 1" stroke="white"/>
                        </svg>
                        <span class="ms-2">Transfer Now</span>
                     </button>
                  </div>
               </div>
               </div>
            </div>
      </div>
      <div class="col-md-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between flex-wrap">
               <div class="header-title">
                  <h4 class="card-title">Earnings</h4>            
               </div>   
               <div class="dropdown">
                  <a href="#" class="btn btn-soft-secondary btn-sm dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     This Week
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                     <li><a class="dropdown-item" href="#">This Week</a></li>
                     <li><a class="dropdown-item" href="#">This Month</a></li>
                     <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
               </div>
            </div>
            <div class="card-body">
               <div class="d-flex flex-wrap align-items-center justify-content-between">
                  <div id="multiple-radialbar-chart" class="col-md-8 col-lg-8 multiple-radialbar-chart"></div>
                  <div class="d-grid gap col-md-4 col-lg-4">
                     <div class="d-flex align-items-start">
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#00EC42">
                           <g>
                              <circle cx="12" cy="12" r="8" fill="#00EC42"></circle>
                           </g>
                        </svg>
                        <div class="ms-3">
                           <span class="text-light">Bitcoin</span>
                        </div>
                     </div>
                     <div class="d-flex align-items-start">
                        <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#FF2E2E">
                           <g>
                              <circle cx="12" cy="12" r="8" fill="#FF2E2E"></circle>
                           </g>
                        </svg>
                        <div class="ms-3">
                           <span class="text-light">Litecoin</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </div>
</div>

      </div>
      <footer class="footer">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="../dashboard/extra/privacy-policy.html" class="text-white">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="../dashboard/extra/terms-of-service.html" class="text-white">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                  ©<script>document.write(new Date().getFullYear())</script> COINEX, Made with
                  <span class="text-gray">
                      <svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                      </svg>
                  </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
              </div>
          </div>
      </footer>    </main>
     
    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/libs.min.js"></script>
    <!-- widgetchart JavaScript -->
    <script src="../assets/js/charts/widgetcharts.js"></script>
    <!-- fslightbox JavaScript -->
    <script src="../assets/js/fslightbox.js"></script>
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
    <!-- apexchart JavaScript -->
    <script src="../assets/js/charts/apexcharts.js"></script>
  </body>
</html>