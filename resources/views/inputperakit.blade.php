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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
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
                        <li class="dropdown user user-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <div class="user-image" style="background-image: url('{{env('APP_URL')}}/images/default.jpg')"></div>
                              <span class="hidden-xs">{{session('lastName')}}</span></a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                  <div class="img-circle" style="background-image: url('{{env('APP_URL')}}/images/default.jpg')"></div>
                                    <!-- <img alt="User Image" class="img-circle" src="{{env('APP_URL')}}/images/default.jpg"> -->
                                    <p>{{session('lastName')}}</p>
                                </li>
                                <li class="user-footer">
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
                        <p>{{session('lastName')}}</p><a href="#"><i class="fas fa-circle text-green"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                  <li>
                      <a class="clickable" href="{{env('APP_URL')}}/perakit"><i class="fas fa-home"></i> <span>Hasil Pengujian</span></a>
                  </li>
                  <li>
                      <a class="clickable" href="{{env('APP_URL')}}/perakit/input"><i class="fas fa-chart-line"></i> <span>Input Hasil Pengujian</span></a>
                  </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <div class="loading"></div>
            <section id="content-header" class="content-header">
                <h1>Hasil Pengujian</h1>
            </section>
            <section id="content-wrapper" class="content">
              <div class="row">
              	<div class="col-xs-12 story-upload">
              		<div class="box box-primary">
              			<!-- <div class="box-header with-border">
              				<h3 class="box-title">Upload Artikel Baru</h3>
              			</div> -->
              			<div class="box-body">
              				<form id="news-submission" action="{{env('APP_URL')}}/perakit/input/process" method="post">
              					{{ csrf_field() }}
              					<div class="row">
              						<div class="col-xs-12">
              							<div class="form-container">
              								<div class="form-container-head">
              									ID Perakitan
              								</div>
              								<div class="form-container-content">
              									<input name="idPerakitan">
              								</div>
              							</div>
              						</div>
              					</div>
              					<div class="row">
              						<div class="col-xs-12">
              							<div class="form-container">
              								<div class="form-container-head">
              									ID Pesawat
              								</div>
                              <div class="form-container-content">
              									<input name="idPesawat">
              								</div>
              							</div>
              						</div>
              					</div>
              					<div class="row">
              						<div class="col-xs-12 col-md-12" id="news-submit">
              							<div class="form-container summernote-editor">
              								<div class="form-container-head">
              									Tanggal Mulai
              								</div>
                              <div class="form-container-content">
              									<input name="tanggalMulai">
              								</div>
              							</div>
              						</div>
              					</div>
                        <div class="row">
              						<div class="col-xs-12 col-md-12" id="news-submit">
              							<div class="form-container summernote-editor">
              								<div class="form-container-head">
              									Tanggal Selesai
              								</div>
                              <div class="form-container-content">
              									<input name="tanggalSelesai">
              								</div>
              							</div>
              						</div>
              					</div>
                        <div class="row">
              						<div class="col-xs-12 col-md-12" id="news-submit">
              							<div class="form-container summernote-editor">
              								<div class="form-container-head">
              									Komentar
              								</div>
                              <div class="form-container-content">
              									<textarea name="komentar"></textarea>
              								</div>
              							</div>
              						</div>
              					</div>
              					<div class="row">
              						<div class="col-xs-12">
              							<div class="form-container">
              								<button name="#" type="submit">Input Hasil Pengujian</button>
              							</div>
              						</div>
              					</div>
              				</form>
              			</div>
              		</div>
              	</div>
              </div>
            </section>
        </div>
        <footer class="main-footer">
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
    <script src="{{env('APP_URL')}}/js/fastclick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <script src="{{env('APP_URL')}}/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{env('APP_URL')}}/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{env('APP_URL')}}/js/jquery.slimscroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/lang/summernote-id-ID.js"></script>
    <script src="{{env('APP_URL')}}/js/jquery-sortable.js"></script>
    <script src="{{env('APP_URL')}}/js/main.js"></script>
</body>
</html>
