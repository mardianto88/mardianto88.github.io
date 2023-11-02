 <?php
 include 'config/helpers.php';
  @session_start();
  ob_start();
  if (empty($_SESSION['user']) AND empty($_SESSION['pwd'])){
  echo "<h1>404 Not Found</h1>";
  echo "Maaf, Anda tidak memilik hak akses ke sistem informasi Anugrah Group";
  exit();
    } else { 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="Admin anugrahgroup">
  <title>.::USN KOLAKA | UPT-TIK ::.</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/iCheck/all.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <script src="<?=base_url()?>asset/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?=base_url()?>asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?=base_url()?>asset/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="<?=base_url()?>asset/dist/js/adminlte.min.js"></script>
  <script src="<?=base_url()?>asset/dist/js/demo.js"></script>
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/skins/_all-skins.min.css">
  <script src="<?=base_url()?>asset/dist/js/adminlte.min.js"></script>
<!--Tabel-->
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!--mata-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
<!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="shortcut icon" href="<?=base_url()?>images/favicon.png" />
<!--menghilangkan textbox  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type='text/javascript'>
      $(window).load(function(){
        $("#residivis").change(function() {
          console.log($("#residivis option:selected").val());
          if ($("#residivis option:selected").val() == 'Tidak ') {
            $('#ke').prop('hidden', 'true');
          } else {
            $('#ke').prop('hidden', false);
          }
        });
      });
  </script>
  <!--CKEDITOR-->
  <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
</head>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="view.php?page=index" class="logo">
          <span class="logo-mini"><b>TIK</b></span>
    		  <span class="logo-lg"><b>UPT</b>-TIK</span>
    	  </a>
          <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?=base_url()?>images/logo-anugrahgroup.png" class="user-image" alt="User Image">ADMINISTRATOR
                            <span class="hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="user-header">
                              <img src="<?=base_url()?>images/logo-anugrahgroup.png" class="img-circle" alt="User Image">
                                <p>UPT-TIK <small>ADMINISTRATOR</small></p>
                          </li>
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?=base_url()?>logout.php?page=logout" class="btn btn-danger">Keluar</a>
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
                <div class="pull-left image">
                    <img src="<?=base_url()?>images/logo-anugrahgroup.png" width="160" height="160" class="img-circle" alt="User Image">
                  </div>
                    <div class="pull-left info">
                      <p>UPT-TIK USN </p>
                      <a><i>ADMINISTRATOR</i></a>
                    </div>
                </div><br/>
                  <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU UTAMA</li>
                      <li class="active treeview menu-open"><li>
                        <a href="overview.php?page=view"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>

                    <li class="header">Tentang Kami</li>
                      <!-- <li class="active treeview menu-open"><li> -->
                        <!-- <a href="overview.php?page=benner"> -->
                          <!-- <i class="fa fa-tv"></i>  -->
                            <!-- <span> List Benner </span> -->
                        <!-- </a> -->
                    <!-- </li> -->

                    <li class="active treeview menu-open"><li>
                      <a href="view.php?page=price"><i class="fa fa-th-list"></i><span> List Network</span></a>
                    <li class="active treeview menu-open">
                      <li><a href="<?=base_url()?>overview.php?page=listdevice"><i class="fa fa-th-list"></i> <span> List Device</span></a>
                    </li>
                    <li class="active treeview menu-open"><li>
                      <a href="<?=base_url()?>overview.php?page=listdoc"><i class="fa fa-th-list"></i><span> List Document</span></a>
                    </li>

                    <!-- <li class="header">Berita</li> -->
                      <!-- <li class="active treeview menu-open"> -->
                        <!-- <li><a href="view.php?page=addpostnews"><i class="fa fa-child"></i><span> Post Berita</span></a></li> -->
                          <!-- <li class="active treeview menu-open"><li> -->
                            <!-- <a href="view.php?page=listberita"><i class="fa fa-book"></i><span> List Berita</span></a> -->
                          <!-- </li> -->
                      <!-- </li>  -->

                      <li class="header">Kepedulian Sosial</li>
                        <li class="active treeview menu-open">
                          <li><a href="view.php?page=sosial"><i class="fa fa-child"></i><span> Kepedulian Sosial</span></a></li>
                        </li>

                        <!-- <li class="header">PENGATURAN</li> -->
                          <li class="treeview menu-open">
                            <!-- <li><a href="home.php"><i class="fa fa-lock"></i> <span> KEAMANAN</span></a></li>-->
                            <li><a href="logout.php?page=logout"><i class="fa fa-sign-out"></i> <span> Keluar</span></a></li>
                          </li>
                      </aside>
                      <div class="content-wrapper">
                     
                     <?php include_once 'config/m_pages.php'; ?>
                     

<script type="text/javascript">
 $("#password").password('toggle');
</script>
<script src="<?=base_url()?>asset/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>asset/dist/js/demo.js"></script>
<script src="<?=base_url()?>asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>asset/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?=base_url()?>asset/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url()?>asset/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url()?>asset/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?=base_url()?>asset/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>asset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="b<?=base_url()?>asset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url()?>asset/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?=base_url()?>asset/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?=base_url()?>asset/plugins/iCheck/icheck.min.js"></script>
  <script src="<?=base_url()?>asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>   
  <script src="<?=base_url()?>asset/js/app.js"></script>


<script type="text/javascript">
  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    oFReader.onload = function (oFREvent)
    {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  $(function () {
    $('.select2').select2()
  })
</script>

<!--CKEDITOR-->
<script>
  CKEDITOR.replace('isi_berita');
</script>


<script type="text/javascript">
 $("#password").password('toggle');
</script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<!--menghindari CTRL+U
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  document.onkeydown = function(e) {
    if (e.ctrlKey && 
      (e.keyCode === 67 || 
        e.keyCode === 86 || 
        e.keyCode === 85 || 
        e.keyCode === 123 || 
        e.keyCode === 117)) {
      return false;
  } else {
    return true;
  }
};
$(document).keypress("u",function(e) {
  if(e.ctrlKey) {
    return false;
  } else {
    return true;
  }
});
</script>

<!--Non aktifkan inspeksi
<script>
$(document).bind("contextmenu",function(e) {
 e.preventDefault();
});

$(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});
</script> -->


<?php } ?>




