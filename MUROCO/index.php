<style type="text/css">
    .title{
        font-size: 20px;
        color: grey;
        background-color: #ddd;
        text-align: center;
        font-weight: bold;
    }    

    .main{
        font-size: 40px;
        color: grey;
        background-color: #ddd; 
        font-weight: bold;
        text-align: center;
        height: 80px;
    } 

    .kotak-lot{
        height: 130px;
        /*background-color: green;*/
    }

    /*.wrapper-full{
        background-color: #ddd;
        margin: auto;
        position: relative;
        float: left;
    }*/

    .wrapper-gs{
        background-color: #ddd;  
        margin: auto; 
        position: absolute;
    }

    .wrapper-time{
        background-color: #B4e8f5;  
    }

    .kotak-lot-time{
        height: 130px;
        background-color: #B4e8f5;
    }

    .ico-lot{
        background-color: #ddd;
    } 

    .span-waiting{
        text-align: center;
        font-weight: bold;
    } 

    .warning-ico{ 
        color: red;
    }

    .kayu-ico{
        position: relative;
        float: left;
    }

    .kayu-num{
        position: absolute; 
    }

    .va{
        vertical-align: middle;
    }

</style>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Commerce Dashboard - This dashboard was created as an example of the flexibility that Architect offers.</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This dashboard was created as an example of the flexibility that Architect offers.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="./main.d810cf0ae7f39f28f336.css" rel="stylesheet"></head>

<link href="assets/fontawesome/css/all.min.css'" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <difv class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
           
        </div>        
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboard</li>
                            <li   class="mm-active"
                                    >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Production Summary
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul   class="mm-show"
                                        >
                                    <li>
                                        <a href="index.html" class="mm-active" >
                                            <i class="metismenu-icon"></i>Production Monitoring
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboards-commerce.html"  >
                                            <i class="metismenu-icon"></i>Production by Process
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboards-sales.html" >
                                            <i class="metismenu-icon">
                                            </i>Production By Machine
                                        </a>
                                    </li>
                                    <li  >
                                        <a href="#">
                                            <i class="metismenu-icon"></i> Target VS Realizations
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        
                                    </li>
                                    <li>
                                        <a href="dashboards-crm.html" >
                                            <i class="metismenu-icon"></i> Report
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-browser"></i>Finances & Accounting
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul  
                                      
                                    >
                                    <li>
                                        <a href="pages-login.html" >
                                            <i class="metismenu-icon"></i> Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-login-boxed.html" >
                                            <i class="metismenu-icon"></i>Login Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-register.html" >
                                            <i class="metismenu-icon"></i>Register
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-register-boxed.html" >
                                            <i class="metismenu-icon"></i>Register Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-forgot-password.html" >
                                            <i class="metismenu-icon"></i>Forgot Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages-forgot-password-boxed.html" >
                                            <i class="metismenu-icon"></i>Forgot Password Boxed
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-plugin"></i>Settings
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul  
                                    >
                                    <li>
                                        <a href="apps-mailbox.html" >
                                            <i class="metismenu-icon"></i>Mailbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apps-chat.html" >
                                            <i class="metismenu-icon"></i>Chat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="apps-faq-section.html" >
                                            <i class="metismenu-icon"></i>FAQ Section
                                        </a>
                                    </li>
                                    <li   >
                                        <a href="#">
                                            <i class="metismenu-icon"></i>Forums
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul   >
                                            <li>
                                                <a href="apps-forum-list.html" >
                                                    <i class="metismenu-icon"></i>Forum Listing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="apps-forum-threads.html" >
                                                    <i class="metismenu-icon"></i>Forum Threads
                                                </a>
                                            </li>
                                            <li>
                                                <a href="apps-forum-discussion.html" >
                                                    <i class="metismenu-icon"></i>Forum Discussion
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div><div class="app-main__outer">
                <div class="app-main__inner">
                               
                    <div class="tabs-animation">
                        <div class="row">    
                            <div class="col-md-12">
                                <div class="mb-3 card"> 
                                  <div class="card-header">
                                    <i class="metismenu-icon pe-7s-rocket mr-2"></i> Glue Process Monitoring
                                  </div>
                                  <div class="card-body">
                                    <div class="container-fluid">
                                         <div class="row mb-2">
                                             <div class="col-md-1 title">LIST</div> 
                                             <div class="col-md-4 title">WAITING FOR GS</div>
                                             <div class="col-md-1 title">GS</div>
                                             <div class="col-md-1 title">CP</div>
                                             <div class="col-md-4 title">WAITING FOR HP</div>
                                             <div class="col-md-1 title">HP</div>
                                         </div>
                                     </div>
                                     <div class="container-fluid wrapper">
                                         <div class="row main-wrapper">
                                            <!-- NUMBER -->
                                             <div class="col-md-1">
                                                <div class="row">
                                                    <div class="col-md-12 pt-2 mt-5 mb-3 main">
                                                        1
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 pt-2 mt-5 mb-3 main">
                                                        2
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 pt-2 mt-5 mb-3 main">
                                                        3
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 pt-2 mt-5 mb-3 main">
                                                        4
                                                    </div>
                                                </div> 
                                             </div>

                                             <!-- FIRST STEP -->
                                             <div class="col-md-4">
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 

                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                        </div> 
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-3 mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-3 mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lotx.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lotx.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lotx.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lotx.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-3 mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lotx.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lotx.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lotx.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                             <div class="col-md-3 pb-0 px-0">
                                                                 <span> 
                                                                     <img src="logo_glue/ico_lotx.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span> 
                                                             </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                             </div>

                                             <!-- GS -->
                                             <div class="col-md-1 wrapper-gs">  
                                                <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_gs.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_gs.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_gs.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>   
                                             </div>

                                             <!-- CP -->
                                             <div class="col-md-1 wrapper-gs">
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_cp.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_cp.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_cp.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_cp.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                             </div>


                                             <!-- WAITING FOR HP -->
                                             <div class="col-md-4 wrapper-time">
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot-time mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot-time mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot-time mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot-time mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                             <div class="col-md-3 pt-2 pb-4 px-0">
                                                                 <span class="span-waiting">
                                                                     <center><i class="fas fa-exclamation-circle warning-ico mt-1"></i></center>
                                                                     <p class="p-0 m-0">150 min</p>
                                                                     <img src="logo_glue/ico_lot.png" class="img-fluid kayu-ico">
                                                                     <div class="kayu-num pl-3 pt-3 font-weight-bold">
                                                                         210095
                                                                     </div>
                                                                 </span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                             </div>

                                             <div class="col-md-1 wrapper-gs">
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_hp.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_hp.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_hp.png" class="img-fluid">
                                                        </span>
                                                    </div> 
                                                 </div>
                                                 <div class="row">
                                                    <div class="col-md-12 kotak-lot pt-5 pb-1 mb-3 ico-lot px-0">
                                                        <span>
                                                            <img src="logo_glue/ico_hp.png" class="img-fluid">
                                                        </span>
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
        </div>
    </div>
    <div class="app-drawer-wrapper">
        <div class="drawer-nav-btn">
            <button type="button" class="hamburger hamburger--elastic is-active">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
        </div>
        <div class="drawer-content-wrapper">
            <div class="scrollbar-container">
                <h3 class="drawer-heading">Servers Status</h3>
                <div class="drawer-section">
                    <div class="row">
                        <div class="col">
                            <div class="progress-box">
                                <h4>Server Load 1</h4>
                                <div class="circle-progress circle-progress-gradient-xl mx-auto">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="progress-box">
                                <h4>Server Load 2</h4>
                                <div class="circle-progress circle-progress-success-xl mx-auto">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="progress-box">
                                <h4>Server Load 3</h4>
                                <div class="circle-progress circle-progress-danger-xl mx-auto">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="mt-3">
                        <h5 class="text-center card-title">Live Statistics</h5>
                        <div id="sparkline-carousel-3"></div>
                        <div class="row">
                            <div class="col">
                                <div class="widget-chart p-0">
                                    <div class="widget-chart-content">
                                        <div class="widget-numbers text-warning fsize-3">43</div>
                                        <div class="widget-subheading pt-1">Packages</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="widget-chart p-0">
                                    <div class="widget-chart-content">
                                        <div class="widget-numbers text-danger fsize-3">65</div>
                                        <div class="widget-subheading pt-1">Dropped</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="widget-chart p-0">
                                    <div class="widget-chart-content">
                                        <div class="widget-numbers text-success fsize-3">18</div>
                                        <div class="widget-subheading pt-1">Invalid</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="text-center mt-2 d-block">
                            <button class="mr-2 border-0 btn-transition btn btn-outline-danger">Escalate Issue</button>
                            <button class="border-0 btn-transition btn btn-outline-success">Support Center</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./assets/scripts/main.d810cf0ae7f39f28f336.js"></script></body>

</html>