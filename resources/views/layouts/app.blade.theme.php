<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />
         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('theme/assets/images/favicon.ico')}}">

        <link href="{{asset('theme/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('theme/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('theme/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('theme/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="../ecommerce/ecommerce-index.html" class="logo">
                    <span>
                        <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            English <img src="../assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="../assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="../assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="../assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="../assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="../assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (18)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="../assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
    
                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="dripicons-menu nav-icon"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu">

                    <li>
                        <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Analytics</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="../analytics/analytics-index.html"><i class="ti-control-record"></i>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="../analytics/analytics-customers.html"><i class="ti-control-record"></i>Customers</a></li>
                            <li class="nav-item"><a class="nav-link" href="../analytics/analytics-reports.html"><i class="ti-control-record"></i>Reports</a></li> 
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-server"></i><span>Crypto</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="../crypto/crypto-index.html"><i class="ti-control-record"></i>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crypto/crypto-exchange.html"><i class="ti-control-record"></i>Exchange</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crypto/crypto-wallet.html"><i class="ti-control-record"></i>My Wallet</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crypto/crypto-calendar.html"><i class="ti-control-record"></i>Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crypto/crypto-news.html"><i class="ti-control-record"></i>Crypto News</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crypto/crypto-ico.html"><i class="ti-control-record"></i>ICO List</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crypto/crypto-settings.html"><i class="ti-control-record"></i>Settings</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-briefcase"></i>
                            <span>Projects</span>
                            <span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                            <span class="badge badge-pink float-right mr-2">New</span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-index.html"><i class="ti-control-record"></i>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-clients.html"><i class="ti-control-record"></i>Clients</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-calendar.html"><i class="ti-control-record"></i>Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-team.html"><i class="ti-control-record"></i>Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-project.html"><i class="ti-control-record"></i>Project</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-task.html"><i class="ti-control-record"></i>Task</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-kanban-board.html"><i class="ti-control-record"></i>Kanban Board</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-invoice.html"><i class="ti-control-record"></i>Invoice</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-chat.html"><i class="ti-control-record"></i>Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="../projects/projects-users.html"><i class="ti-control-record"></i>Users</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-shopping-cart-full"></i><span>Ecommerce</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="../ecommerce/ecommerce-index.html"><i class="ti-control-record"></i>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="../ecommerce/ecommerce-products.html"><i class="ti-control-record"></i>Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="../ecommerce/ecommerce-product-list.html"><i class="ti-control-record"></i>Product List</a></li>
                            <li class="nav-item"><a class="nav-link" href="../ecommerce/ecommerce-product-detail.html"><i class="ti-control-record"></i>Product Detail</a></li>
                            <li class="nav-item"><a class="nav-link" href="../ecommerce/ecommerce-cart.html"><i class="ti-control-record"></i>Cart</a></li>
                            <li class="nav-item"><a class="nav-link" href="../ecommerce/ecommerce-checkout.html"><i class="ti-control-record"></i>Checkout</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-signal"></i><span>CRM</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="../crm/crm-index.html"><i class="ti-control-record"></i>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crm/crm-contacts.html"><i class="ti-control-record"></i>Contacts</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crm/crm-opportunities.html"><i class="ti-control-record"></i>Opportunities</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crm/crm-leads.html"><i class="ti-control-record"></i>Leads</a></li>
                            <li class="nav-item"><a class="nav-link" href="../crm/crm-customers.html"><i class="ti-control-record"></i>Customers</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-crown"></i><span>UI Kit</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">                            
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/email-inbox.html">Inbox</a></li>
                                    <li><a href="../others/email-read.html">Read Email</a></li> 
                                </ul>
                            </li> 
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Elements <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/ui-bootstrap.html">Bootstrap</a></li>
                                    <li><a href="../others/ui-animation.html">Animation</a></li>
                                    <li><a href="../others/ui-avatar.html">Avatar</a></li>
                                    <li><a href="../others/ui-clipboard.html">Clip Board</a></li>
                                    <li><a href="../others/ui-files.html">File Manager</a></li>
                                    <li><a href="../others/ui-ribbons.html">Ribbons</a></li>
                                    <li><a href="../others/ui-dragula.html"><span>Dragula</span></a></li>
                                    <li><a href="../others/ui-check-radio.html"><span>Check & Radio</span></a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="../others/advanced-sweetalerts.html">Sweet Alerts</a></li>
                                    <li><a href="../others/advanced-nestable.html">Nestable List</a></li>
                                    <li><a href="../others/advanced-ratings.html">Ratings</a></li>
                                    <li><a href="../others/advanced-highlight.html">Highlight</a></li>
                                    <li><a href="../others/advanced-session.html">Session Timeout</a></li>
                                    <li><a href="../others/advanced-idle-timer.html">Idle Timer</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/forms-elements.html">Basic Elements</a></li>
                                    <li><a href="../others/forms-advanced.html">Advance Elements</a></li>
                                    <li><a href="../others/forms-validation.html">Validation</a></li>
                                    <li><a href="../others/forms-wizard.html">Wizard</a></li>
                                    <li><a href="../others/forms-editors.html">Editors</a></li>
                                    <li><a href="../others/forms-repeater.html">Repeater</a></li>
                                    <li><a href="../others/forms-x-editable.html">X Editable</a></li>
                                    <li><a href="../others/forms-uploads.html">File Upload</a></li>
                                    <li><a href="../others/forms-img-crop.html">Image Crop</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/charts-apex.html">Apex</a></li>
                                    <li><a href="../others/charts-morris.html">Morris</a></li>
                                    <li><a href="../others/charts-chartist.html">Chartist</a></li>
                                    <li><a href="../others/charts-flot.html">Flot</a></li>
                                    <li><a href="../others/charts-peity.html">Peity</a></li>
                                    <li><a href="../others/charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="../others/charts-sparkline.html">Sparkline</a></li>
                                    <li><a href="../others/charts-knob.html">Jquery Knob</a></li>
                                    <li><a href="../others/charts-justgage.html">JustGage</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/tables-basic.html">Basic</a></li>
                                    <li><a href="../others/tables-datatable.html">Datatables</a></li>
                                    <li><a href="../others/tables-responsive.html">Responsive</a></li>
                                    <li><a href="../others/tables-footable.html">Footable</a></li>
                                    <li><a href="../others/tables-jsgrid.html">Jsgrid</a></li>
                                    <li><a href="../others/tables-editable.html">Editable</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="../others/icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="../others/icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="../others/icons-themify.html">Themify</a></li>
                                    <li><a href="../others/icons-typicons.html">Typicons</a></li>
                                    <li><a href="../others/icons-emoji.html">Emoji <i class="em em-ok_hand"></i></a></li>
                                    <li><a href="../others/icons-svg.html">SVG</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/maps-google.html">Google Maps</a></li>
                                    <li><a href="../others/maps-vector.html">Vector Maps</a></li>  
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="../others/email-templates-basic.html">Basic Action Email</a></li>
                                    <li><a href="../others/email-templates-alert.html">Alert Email</a></li>
                                    <li><a href="../others/email-templates-billing.html">Billing Email</a></li>
                                </ul>
                            </li>   
                        </ul>                        
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-layers-alt"></i><span>Pages</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-profile.html"><i class="ti-control-record"></i>Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-chat.html"><i class="ti-control-record"></i>Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-contact-list.html"><i class="ti-control-record"></i>Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-tour.html"><i class="ti-control-record"></i>Tour</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-timeline.html"><i class="ti-control-record"></i>Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-invoice.html"><i class="ti-control-record"></i>Invoice</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-treeview.html"><i class="ti-control-record"></i>Treeview</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-starter.html"><i class="ti-control-record"></i>Starter Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-pricing.html"><i class="ti-control-record"></i>Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-blogs.html"><i class="ti-control-record"></i>Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-faq.html"><i class="ti-control-record"></i>FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/pages-gallery.html"><i class="ti-control-record"></i>Gallery</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-lock"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-register.html"><i class="ti-control-record"></i>Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-lock-screen.html"><i class="ti-control-record"></i>Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-404.html"><i class="ti-control-record"></i>Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="../authentication/auth-500.html"><i class="ti-control-record"></i>Error 500</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../analytics/analytics-index-dark-sidenav.html"><i class="ti-palette"></i><span>Dark Sidenav</span></a>                        
                    </li>
                </ul>
            </div>
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                 <!-- Page Heading -->
                                    <h4 class="page-title">{{$header?? "Page Title"}}</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    @if ($errors->any())
                        <div class="bg-red-300 text-red-700 p-2">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif  
                    @if (session('error'))
                        <div class="bg-red-200 text-red-700 p-2 font-bold mb-2 rounded">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="bg-green-200 text-green-700 p-2 font-bold mb-2 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{ $slot }}
                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2022 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/waves.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/jquery.slimscroll.min.js')}}"></script>

        <script src="{{asset('theme/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('theme/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('theme/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('theme/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('theme/assets/pages/jquery.eco_dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('theme/assets/js/app.js')}}"></script>
       
    </body>
</html>