<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Sistem Manajemen Kreativitas | Balon Kata!</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta content="{{ csrf_token() }}" name="csrf-token">
  <link href="images/logo.png" rel="icon">
  <link href="{{env('APP_URL')}}/css/app.css" rel="stylesheet">
  <link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}/css/jquery-jvectormap.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}/css/AdminLTELight.css" rel="stylesheet">
  <link href="{{env('APP_URL')}}/css/dropzone.css" rel="stylesheet">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="{{env('APP_URL')}}/css/fontawesome-all.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a class="logo" href="/"><span class="logo-lg"><img src=""></span></a>
            <nav class="navbar navbar-static-top">
                <a class="sidebar-toggle" data-toggle="push-menu" href="#" role="button">
                  <span class="pull-left mobile-nav"><i class="fas fa-bars"></i></span>
                  <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- <li class="dropdown messages-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="far fa-envelope"></i> <span class="label label-success">4</span></a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="{{env('APP_URL')}}/images/default.jpg"></div>
                                            <h4>Support Team <small><i class="far fa-clock"></i> 5 mins</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="images/user3-128x128.jpg"></div>
                                            <h4>AdminLTE Design Team <small><i class="far fa-clock"></i> 2 hours</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="images/user4-128x128.jpg"></div>
                                            <h4>Developers <small><i class="far fa-clock"></i> Today</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="images/user3-128x128.jpg"></div>
                                            <h4>Sales Department <small><i class="far fa-clock"></i> Yesterday</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="images/user4-128x128.jpg"></div>
                                            <h4>Reviewers <small><i class="far fa-clock"></i> 2 days</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">See All Messages</a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="dropdown notifications-menu messages-menu" id="notifications">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="far fa-bell"></i> <span class="label label-warning">10</span></a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="{{env('APP_URL')}}/images/default.jpg"></div>
                                            <h4>Support Team <small><i class="far fa-clock"></i> 5 mins</small></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="images/user3-128x128.jpg"></div>
                                            <h4>AdminLTE Design Team <small><i class="far fa-clock"></i> 2 hours</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="images/user4-128x128.jpg"></div>
                                            <h4>Developers <small><i class="far fa-clock"></i> Today</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="images/user3-128x128.jpg"></div>
                                            <h4>Sales Department <small><i class="far fa-clock"></i> Yesterday</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <div class="pull-left"><img alt="User Image" class="img-circle" src="images/user4-128x128.jpg"></div>
                                            <h4>Reviewers <small><i class="far fa-clock"></i> 2 days</small></h4>
                                            <p>Why not buy a new awesome theme?</p></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">See All Messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown tasks-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="far fa-flag"></i> <span class="label label-danger">9</span></a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                            <h3>Design some buttons <small class="pull-right">20%</small></h3>
                                            <div class="progress xs">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-aqua" role="progressbar" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <h3>Create a nice theme <small class="pull-right">40%</small></h3>
                                            <div class="progress xs">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-green" role="progressbar" style="width: 40%">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <h3>Some task I need to do <small class="pull-right">60%</small></h3>
                                            <div class="progress xs">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-red" role="progressbar" style="width: 60%">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <h3>Make beautiful transitions <small class="pull-right">80%</small></h3>
                                            <div class="progress xs">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-yellow" role="progressbar" style="width: 80%">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="dropdown user user-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <div class="user-image" style="background-image: url('{{env('APP_URL')}}/images/default.jpg')"></div>
                              <span class="hidden-xs">AA</span></a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                  <div class="img-circle" style="background-image: url('{{env('APP_URL')}}/images/default.jpg')"></div>
                                    <!-- <img alt="User Image" class="img-circle" src="{{env('APP_URL')}}/images/default.jpg"> -->
                                    <p>AA <small>Terdaftar sejak</small></p>
                                </li>
                                <!-- <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                </li> -->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a class="btn btn-default btn-flat" href="#" id="settings_button">Pengaturan</a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-flat" href="logout">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image" style="background-image: url('{{env('APP_URL')}}/images/default.jpg');"></div>
                    <div class="pull-left info">
                        <p>AA</p><a href="#"><i class="fas fa-circle text-green"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a class="clickable" href="dashboard"><i class="fas fa-home"></i> <span>Beranda</span></a>
                    </li>
                    <li>
                        <a class="clickable" href="analytics"><i class="fas fa-chart-line"></i> <span>Analitik</span></a>
                    </li>
                    <!-- <li>
                        <a class="clickable" href="sells"><i class="fas fa-chart-line"></i> <span>Hasil Penjualan</span></a>
                    </li> -->
                    <li class="treeview">
                        <a href="#"><i class="fas fa-pencil-alt"></i> <span>Materi dan Kelas</span> <span class="pull-right-container"><i class="fas fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li>
                                <a class="clickable" href="presence"><i class="far fa-check-square"></i> Presensi</a>
                            </li>
                              <li>
                                <a class="clickable" href="class_create"><i class="fas fa-cogs"></i> Buat Sesi Pertemuan</a>
                              </li>
                              <li>
                                <a class="clickable" href="lecturer"><i class="fas fa-users"></i> Mentor <small style="color: red;"><small>BETA</small></small></a>
                              </li>
                            <li>
                                <a class="clickable" href="submission"><i class="fas fa-folder-open"></i> Submisi Tugas <small style="color: red;"><small>BETA</small></small></a>
                            </li>
                        </ul>
                    </li>
                      <li class="treeview">
                        <a href="#"><i class="fas fa-users"></i> <span>Manajemen Anggota</span> <span class="pull-right-container"><i class="fas fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li>
                              <a class="clickable" href="members"><i class="far fa-check-square"></i> Manajemen Anggota</a>
                            </li>
                            <li>
                              <a class="clickable" href="permission"><i class="fas fa-cogs"></i> Manajemen Kepengurusan</a>
                            </li>
                        </ul>
                      </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <div class="loading"></div>
            <section id="content-header" class="content-header">
                <h1>Beranda</h1>
            </section>
            <section id="content-wrapper" class="content"></section>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <!-- Upcoming : Naming Version for Sekre -->
              <!-- <small> | <b>Version</b> 0.5</small> -->
              <b>Version 2</b>
            </div><small><strong>Balon Kata!</strong> &copy; 2013 -
            <script>
            document.write(new Date().getFullYear())
            </script></small>
        </footer>
    </div>

    <div class="modal-overlay">
        <div class="modal-body">
          <div class="modal-header">
              <div class="pull-left"></div>
              <div class="pull-right" onclick="modalClose(event)">
                  X
              </div>
          </div>
          <div class="modal-content"></div>
        </div>
    </div>

    <!-- Javascript Load Section -->
    <script src="{{env('APP_URL')}}/js/bootstrap.js"></script>
    <script src="{{env('APP_URL')}}/js/adminlte.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/lang/summernote-id-ID.js"></script>
    <script src="js/jquery-sortable.js"></script>
    <script src="js/main.js"></script>
    <script>
      // var read = [];
      // function getNotifications(id, send_notif = false) {
      //   $.ajax({
      //     type: "GET",
      //     url: "/ajax/get/notifications/all",
      //     data: {"id": id},
      //     dataType: "json",
      //     headers: {
      //       "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
      //     }
      //   }).done(function(response) {
      //     var countUnread = 0;
      //     $("#notifications .dropdown-menu ul").empty();
      //     $.each(response, function(index, value) {
      //       if (value.system_notification == "Y") {
      //         var sender = "tehbalka";
      //       } else {
      //         var sender = value.username;
      //       }
      //       if (value.go_to_uri != null) {
      //         var uri = value.go_to_uri;
      //       } else {
      //         var uri = "javascript:void(0)";
      //       }
      //       $("#notifications .dropdown-menu ul").append(`
      //         <li data-notifid="`+value.id+`">
      //           <a href="`+uri+`">
      //             <div class="pull-left">
      //               <div alt="User Image" class="img-circle" style="background-image: url('/uploads/pictures/profile/1535199443.png')"></div>
      //             </div>
      //             <h4>`+sender+` <small><i class="far fa-clock"></i> 5 mins</small></h4>
      //             <p>`+value.message+`</p>
      //           </a>
      //         </li>
      //       `);
      //       if (value.flag_received == 'N') {
      //         countUnread++;
      //       }
      //     });
      //     if (countUnread != 0) {
      //       $("#notifications .header").html('Anda memiliki '+countUnread+' notifikasi belum dibaca');
      //       $("#notifications .label").show();
      //       $("#notifications .label").html(countUnread);
      //       if (send_notif) {
      //         notify("far fa-frown", "You have "+countUnread+" notifications", "danger");
      //       }
      //     } else {
      //       $("#notifications .header").html('Anda sudah membaca semua notifikasi');
      //       $("#notifications .label").hide();
      //     }
      //   });
      // }

      // $(".notifications-menu").on("click", function() {
      //   if ($(this).find(".dropdown-menu").is(":visible")) {
      //     read = [];
      //     var notifications = $(".notifications-menu .dropdown-menu ul li");
      //     $(notifications).each(function() {
      //       read.push($(this).attr("data-notifid"));
      //     });
      //     if (read.length != 0) {
      //       markAsRead(read);
      //     }
      //   }
      //
      //   // $(this).find(".dropdown-menu .menu li").each(function() {
      //   //   markAsRead($(this).attr("data-notifid"));
      //   // });
      // });
      // $("#notifications dropdown-menu ul").empty();
    </script>
</body>
</html>
