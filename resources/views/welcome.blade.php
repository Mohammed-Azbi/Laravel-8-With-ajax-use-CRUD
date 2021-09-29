<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Blank Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta content="{{ csrf_token() }}" name="csrf-token" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header menu-pin menu-behind">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="index.html" class="detailed">
              <span class="title">Dashboard</span>
              <span class="details">12 New Updates</span>
            </a>
            <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
          </li>
          <li class="">
            <a href="email.html" class="detailed">
              <span class="title">Email</span>
              <span class="details">234 New Emails</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-mail"></i></span>
          </li>
          <li class="">
            <a href="social.html"><span class="title">Social</span></a>
            <span class="icon-thumbnail"><i class="pg-social"></i></span>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Calendar</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-calender"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="calendar.html">Basic</a>
                <span class="icon-thumbnail">c</span>
              </li>
              <li class="">
                <a href="calendar_lang.html">Languages</a>
                <span class="icon-thumbnail">L</span>
              </li>
              <li class="">
                <a href="calendar_month.html">Month</a>
                <span class="icon-thumbnail">M</span>
              </li>
              <li class="">
                <a href="calendar_lazy.html">Lazy load</a>
                <span class="icon-thumbnail">La</span>
              </li>
              <li class="">
                <a href="https://docs.pages.revox.io/apps/calendar" target="_blank">Documentation</a>
                <span class="icon-thumbnail">D</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="builder.html">
              <span class="title">Builder</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-layouts"></i></span>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Layouts</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-layouts2"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="default_layout.html">Default</a>
                <span class="icon-thumbnail">dl</span>
              </li>
              <li class="">
                <a href="secondary_layout.html">Secondary</a>
                <span class="icon-thumbnail">sl</span>
              </li>
              <li class="">
                <a href="boxed_layout.html">Boxed</a>
                <span class="icon-thumbnail">bl</span>
              </li>
              <li class="">
                <a href="rtl_layout.html">RTL</a>
                <span class="icon-thumbnail">rl</span>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;"><span class="title">UI Elements</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail">Ui</span>
            <ul class="sub-menu">
              <li class="">
                <a href="color.html">Color</a>
                <span class="icon-thumbnail">c</span>
              </li>
              <li class="">
                <a href="typography.html">Typography</a>
                <span class="icon-thumbnail">t</span>
              </li>
              <li class="">
                <a href="icons.html">Icons</a>
                <span class="icon-thumbnail">i</span>
              </li>
              <li class="">
                <a href="buttons.html">Buttons</a>
                <span class="icon-thumbnail">b</span>
              </li>
              <li class="">
                <a href="notifications.html">Notifications</a>
                <span class="icon-thumbnail">n</span>
              </li>
              <li class="">
                <a href="modals.html">Modals</a>
                <span class="icon-thumbnail">m</span>
              </li>
              <li class="">
                <a href="progress.html">Progress &amp; Activity</a>
                <span class="icon-thumbnail">pa</span>
              </li>
              <li class="">
                <a href="tabs_accordian.html">Tabs &amp; Accordions</a>
                <span class="icon-thumbnail">ta</span>
              </li>
              <li class="">
                <a href="sliders.html">Sliders</a>
                <span class="icon-thumbnail">s</span>
              </li>
              <li class="">
                <a href="tree_view.html">Tree View</a>
                <span class="icon-thumbnail">tv</span>
              </li>
              <li class="">
                <a href="nestables.html">Nestable</a>
                <span class="icon-thumbnail">ns</span>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;">
              <span class="title">Forms</span>
              <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="pg-form"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="form_elements.html">Form Elements</a>
                <span class="icon-thumbnail">fe</span>
              </li>
              <li class="">
                <a href="form_layouts.html">Form Layouts</a>
                <span class="icon-thumbnail">fl</span>
              </li>
              <li class="">
                <a href="form_wizard.html">Form Wizard</a>
                <span class="icon-thumbnail">fw</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="cards.html">
              <span class="title">Cards</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-grid"></i></span>
          </li>
          <li class="">
            <a href="views.html">
              <span class="title">Views</span>
            </a>
            <span class="icon-thumbnail"><i class="pg pg-ui"></i></span>
          </li>
          <li class="open active">
            <a href="javascript:;"><span class="title">Tables</span>
            <span class=" open  arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-tables"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="tables.html">Basic Tables</a>
                <span class="icon-thumbnail">bt</span>
              </li>
              <li class="">
                <a href="datatables.html">Data Tables</a>
                <span class="icon-thumbnail">dt</span>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Maps</span> 
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-map"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="google_map.html">Google Maps</a>
                <span class="icon-thumbnail">gm</span>
              </li>
              <li class="">
                <a href="vector_map.html">Vector Maps</a>
                <span class="icon-thumbnail">vm</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="charts.html"><span class="title">Charts</span></a>
            <span class="icon-thumbnail"><i class="pg-charts"></i></span>
          </li>
          <li>
            <a href="javascript:;"><span class="title">Extra</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-bag"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="invoice.html">Invoice</a>
                <span class="icon-thumbnail">in</span>
              </li>
              <li class="">
                <a href="404.html">404 Page</a>
                <span class="icon-thumbnail">pg</span>
              </li>
              <li class="">
                <a href="500.html">500 Page</a>
                <span class="icon-thumbnail">pg</span>
              </li>
              <li class="">
                <a href="blank_template.html">Blank Page</a>
                <span class="icon-thumbnail">bp</span>
              </li>
              <li class="">
                <a href="login.html">Login</a>
                <span class="icon-thumbnail">l</span>
              </li>
              <li class="">
                <a href="register.html">Register</a>
                <span class="icon-thumbnail">re</span>
              </li>
              <li class="">
                <a href="lock_screen.html">Lockscreen</a>
                <span class="icon-thumbnail">ls</span>
              </li>
              <li class="">
                <a href="gallery.html">Gallery</a>
                <span class="icon-thumbnail">gl</span>
              </li>
              <li class="">
                <a href="timeline.html">Timeline</a>
                <span class="icon-thumbnail">t</span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:;"><span class="title">Menu Levels</span>
            <span class="arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;">Level 1</a>
                <span class="icon-thumbnail">L1</span>
              </li>
              <li>
                <a href="javascript:;"><span class="title">Level 2</span>
                <span class="arrow"></span></a>
                <span class="icon-thumbnail">L2</span>
                <ul class="sub-menu">
                  <li>
                    <a href="javascript:;">Sub Menu</a>
                    <span class="icon-thumbnail">Sm</span>
                  </li>
                  <li>
                    <a href="ujavascript:;">Sub Menu</a>
                    <span class="icon-thumbnail">Sm</span>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="https://docs.pages.revox.io/" target="_blank"><span class="title">Docs</span></a>
            <span class="icon-thumbnail"><i class="pg-note"></i></span>
          </li>
          <li class="">
            <a href="http://changelog.pages.revox.io/" target="_blank"><span class="title">Changelog</span></a>
            <span class="icon-thumbnail">Cl</span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
          <div class="brand inline  m-l-10 ">
            <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
          </div>
          <a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a>
        </div>
        <div class="d-flex align-items-center">
          <!-- START User Info-->
          <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
            <span class="semi-bold">David</span> <span class="text-master">Nest</span>
          </div>
          <div class="dropdown pull-right d-lg-block d-none">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="thumbnail-wrapper d32 circular inline">
              <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
              </span>
            </button>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
              <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
              <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
              <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
              <a href="#" class="clearfix bg-master-lighter dropdown-item">
                <span class="pull-left">Logout</span>
                <span class="pull-right"><i class="pg-power"></i></span>
              </a>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- MODAL STICK UP  -->
          <div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header clearfix ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                  </button>
                  <h4 id="addcustomerdetailsid" class="p-b-5"><span class="semi-bold">New</span> Customer Details</h4>
                  <h4 id="updatecustomerdetailsid" class="p-b-5"><span class="semi-bold">Update</span> Customer Details</h4>

                </div>
                <div class="modal-body">
                  <p id="addcustomerdetailspid" class="small-text">Create a New Customer using this form, make sure you fill them all</p>
                  <p id="updatecustomerdetailspid" class="small-text">Update Customer using this form, make sure you fill them all</p>

                  <form role="form">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Cumtomer Name</label>
                          <input id="cumtomerNameid" type="text" class="form-control" placeholder="Cumtomer Name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group form-group-default">
                          <label>Item</label>
                          <input id="itemid" type="text" class="form-control" placeholder="Cumtomer Want to do">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group form-group-default">
                          <label>Price</label>
                          <input id="priceid" type="text" class="form-control" placeholder="Price">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button id="addbtnid" onclick="addCustomer()" type="button" class="btn btn-primary  btn-cons">Add</button>
                  <button id="updatebtnid" type="button" class="btn btn-primary  btn-cons">Update</button>
                  <button type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- END CONTAINER FLUID -->
          <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg bg-white">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header">
                <div class="card-title">Todays LIST
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add New Customer Item
                    </button>
                  </div>
                </div>
                <div class="export-options-container"></div>
              </div>
              <div class="card-body">
                <table class="table table-striped" id="tableWithExportOptions">
                  <thead>
                    <tr>
                      <th>Customer Name</th>
                      <th>Item</th>
                      <th>Price</th>
                      <th>Time</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- <tr class="odd gradeX">
                      <td>Azbi</td>
                      <td>Internet Explorer 4.0</td>
                      <td>Win 95+</td>
                      <td class="center"> 4</td>
                      <td class="center">X</td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i>
                          </button>
                          <button id="show-modal" type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="even gradeC">
                      <td>Trident</td>
                      <td>Internet Explorer 5.0</td>
                      <td>Win 95+</td>
                      <td class="center">5</td>
                      <td class="center">C</td>
                    </tr>
                    <tr class="even gradeA">
                      <td>Trident</td>
                      <td>Internet Explorer 6</td>
                      <td>Win 98+</td>
                      <td class="center">6</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="odd gradeA">
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      <td class="center">7</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="even gradeA">
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>Win XP</td>
                      <td class="center">6</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td class="center">1.7</td>
                      <td class="center">A</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Tasman</td>
                      <td>Internet Explorer 4.5</td>
                      <td>Mac OS 8-9</td>
                      <td class="center">-</td>
                      <td class="center">X</td>
                    </tr>
                    <tr class="gradeC">
                      <td>Tasman</td>
                      <td>Internet Explorer 5.2</td>
                      <td>Mac OS 8-X</td>
                      <td class="center">1</td>
                      <td class="center">C</td>
                    </tr>
                    <tr class="gradeA">
                      <td>Misc</td>
                      <td>NetFront 3.1</td>
                      <td>Embedded devices</td>
                      <td class="center">-</td>
                      <td class="center">C</td>
                    </tr>
                    <tr class="gradeX">
                      <td>Misc</td>
                      <td>Lynx</td>
                      <td>Text only</td>
                      <td class="center">-</td>
                      <td class="center">X</td>
                    </tr>
                    <tr class="gradeU">
                      <td>Other browsers</td>
                      <td>All others</td>
                      <td>-</td>
                      <td class="center">-</td>
                      <td class="center">U</td>
                    </tr>                     -->
                </tbody>
            </table>
              </div>
            </div>
            <!-- END card -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid  container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2017 </span>
              <span class="font-montserrat">REVOX</span>.
              <span class="hint-text">All rights reserved. </span>
              <span class="sm-block"><a href="#" class="m-l-10 contentm-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              Hand-crafted <span class="hint-text">&amp; made with Love</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/datatables.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- For PMS -->
    <script>
      $('#addbtnid').show();
      $('#updatebtnid').hide();
      $('#addcustomerdetailsid').show();
      $('#updatecustomerdetailsid').hide();
      $('#addcustomerdetailspid').show();
      $('#updatecustomerdetailspid').hide();


      // for ajax setup
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        } 
      })

    //   function itemshow(){
    //   $.ajax({
    //     type: "GET",
    //     dataType: 'json',
    //     url: "item",
    //     success:function(item){
    //       // console.log(item);   //for console check
    //       $.each(item, function(key, value){     //for console Value
    //         // console.log(value);  //for console Value
    //         console.log(value.item);  //for console value just name
    //       })
    //     }
    //   })
    // }

    // function itemshow(){
    //   $.ajax({
    //     type: "GET",
    //     dataType: 'json',
    //     url: "item",
    //     success:function(pms){
    //       console.log(pms);   //for console check
          
    //     }
    //   })
    // }

    // function itemshow(){
    //   $.ajax({
    //     type: "GET",
    //     dataType: 'json',
    //     url: "item",
    //     success:function(pms){
    //       $.each(pms, function(key, value){
    //         console.log(value); // value show using ajax in console
    //       })
          
    //     }
    //   })
    // }

    // function itemshow(){
    //   $.ajax({
    //     type: "GET",
    //     dataType: 'json',
    //     url: "item",
    //     success:function(pms){
    //       $.each(pms, function(key, value){
    //         console.log(value.cumtomer_name); // Just value show using ajax in console
    //       })
          
    //     }
    //   })
    // }

    function itemshow(){
      $.ajax({
        type: "GET",
        dataType: 'json',
        url: "item",
        success:function(response){
          var pms = ""
          $.each(response, function(key, value){
            pms = pms + "<tr class='odd gradeX'>"
            // pms = pms + "<td>"+value.id+"</td>"
            pms = pms + "<td>"+value.cumtomer_name+"</td>"
            pms = pms + "<td>"+value.item_id+"</td>"
            pms = pms + "<td>"+value.price+" TK"+"</td>"
            pms = pms + "<td>"+value.added_at+"</td>"
            pms = pms + "<td>"+value.Date+"</td>"
            pms = pms + "<td>"
            pms = pms + "<div class='btn-group'>"
            pms = pms + "<button type='button' class='btn btn-warning'><i class='fa fa-pencil'></i></button>"
            pms = pms + "<button id='show-modal' type='button' class='btn btn-danger'><i class='fa fa-trash-o'></i></button>"
            pms = pms + "</div>"            
            pms = pms + "</td>"
            pms = pms + "</tr>"
          })
          $('tbody').html(pms);
        }
      })
    }
    itemshow();

    function addCustomer(){
      var cumtomerName = $('#cumtomerNameid').val();
      var item = $('#itemid').val();
      var price = $('#priceid').val();

      // For check data pass in console data 
      // console.log(cumtomerName);
      // console.log(item);
      // console.log(price);    

      $.ajax({
        type: "POST",        
        dataType: 'json',
        data: {cumtomerName:cumtomerName , item:item, price:price},
        url: "store",
        success:function(add){
          itemshow();
          console.log('Data Pass');
        }
      })

    }
      
    </script>
  </body>
</html>