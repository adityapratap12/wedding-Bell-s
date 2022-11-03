<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>Public/Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>Public/Admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>Public/Admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url();?>Public/Admin/plugins/toastr/toastr.min.css">



</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
 <?php include 'Header.php';?>

 <?php include 'Sidebar.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Package</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <center>
 <div class="col-sm-8">
  <?php 
    if(!empty($this->session->flashdata('msg'))){
    echo "<div class='alert alert-success'>".$this->session->flashdata('msg')."</div>";
}
     if(!empty($this->session->flashdata('msg_del'))){
    echo "<div class='alert alert-danger'>".$this->session->flashdata('msg_del')."</div>";
  }
    ?>
  <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>
     <!-- general form elements -->
            <div class="card card-info" align="left">
              <div class="card-header">
                <h3 class="card-title">Create / Add Package</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

  <form method="post" action="<?php echo base_url().'Admin/Photo4/AddPhoto1'?>" enctype="multipart/form-data">
                <div class="card-body">
                
      <div class="form-group">


                    <label for="exampleInputEmail1">Select Venue</label>
                    <select name="veneu" class="form-control" id="venue">
                      <option value="0">No Selected</option>
              <?php foreach($data1 as $row):?>
              <option value="<?php echo $row->id;?>"><?php echo $row->title;?></option>
              <?php endforeach;?>
                    </select>
             
                <input type="hidden" name="pid" value="<?php echo $data;?>">

                  </div>

                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Amount</label> -->
                    <input type="hidden" class="form-control" id="vamount" name="vamount">
                    <input type="hidden" class="form-control" name="cid" value="<?php echo $row->bamount;?>">
             
                  </div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Select Carering</label>
                    <select name="catering" class="form-control" id="catring">
                      <option value="">No Selected</option>
              <?php foreach($data2 as $row):?>
              <option value="<?php echo $row->id;?>"><?php echo $row->title;?></option>
              <?php endforeach;?>
                    </select>
             
                  </div>

                   <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Amount</label> -->
                    <input type="hidden" class="form-control" id="camount" name="camount">
                    <input type="hidden" class="form-control" name="cid" value="<?php echo $row->bamount;?>">
             
                  </div>

                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Decorations</label>
                    <select name="decoration" class="form-control" id="decorations">
                      <option value="">No Selected</option>
              <?php foreach($data3 as $row):?>
              <option value="<?php echo $row->id;?>"><?php echo $row->title;?></option>
              <?php endforeach;?>
                    </select>
             
                  </div>

                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Amount</label> -->
                    <input type="hidden" class="form-control" id="damount" name="damount">
                    <input type="hidden" class="form-control" name="cid" value="<?php echo $row->bamount;?>">
             
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Photographer</label>
                    <select name="photographer" class="form-control" id="photographer">
                      <option value="">No Selected</option>
              <?php foreach($data4 as $row):?>
              <option value="<?php echo $row->id;?>"><?php echo $row->title;?></option>
              <?php endforeach;?>
                    </select>
             
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Amount</label> -->
                    <input type="hidden" class="form-control" id="famount" name="famount">
                    <input type="hidden" class="form-control" name="cid" value="<?php echo $row->bamount;?>">
             
                  </div>


                  
                  <input type="text" class="form-control" id="sum" name="sum" value="">

<input type="button" value="Calculate Total Amount" onclick="add()">
       
                <div class="card-footer" align="center">
               
                    <input type='submit' name="upload" class="btn btn-info" value='Click here to Add Service'/>
                </div>
              </form>
              <div align="right">
                <a href="<?php echo base_url();?>Admin/Service_C/View_Services" class="btn btn-danger">Back to Category</a> </div>
            </div>
            <!-- /.card -->
          </div>
        </center>
          
    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->

<?php include 'Footer.php';?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>Public/Admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>Public/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>Public/Admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>Public/Admin/dist/js/demo.js"></script>



<!-- DataTables -->
<script src="<?php echo base_url();?>Public/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>Public/Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>Public/Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>Public/Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="<?php echo base_url();?>Public/Admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>Public/Admin/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Process are Running....')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('EMI Plan has been Successfully Deleted')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });

</script>

<script type="text/javascript" src="<?php echo base_url();?>Public/Admin/jquery-3.3.1.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

      $('#venue').change(function(){ 
                var id=$(this).val();
                
                $.ajax({
                      url : "<?php echo base_url();?>Admin/Package_C/get_details",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){

                            html += '<option value='+data[i].id+'>'+data[i].des+'</option>';
                        }
                        $('#sub_category').html(html);


                        var des = data[0].des;
                      
                        var bamount=data[0].bamount;
                      


                      
                        $('#des').val(des);
                        $('#vamount').val(bamount);
                     

                    }
                });
                return false;
            }); 
            
    });
  </script>

  <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/jquery-3.3.1.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

      $('#decorations').change(function(){ 
                var id=$(this).val();
                
                $.ajax({
                      url : "<?php echo base_url();?>Admin/Package_C/get_details",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){

                            html += '<option value='+data[i].id+'>'+data[i].des+'</option>';
                        }
                        $('#sub_category').html(html);


                        var des = data[0].des;
                      
                        var bamount=data[0].bamount;
                      


                      
                        $('#des').val(des);
                        $('#damount').val(bamount);
                     

                    }
                });
                return false;
            }); 
            
    });
  </script>

  <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/jquery-3.3.1.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

      $('#photographer').change(function(){ 
                var id=$(this).val();
                
                $.ajax({
                      url : "<?php echo base_url();?>Admin/Package_C/get_details",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){

                            html += '<option value='+data[i].id+'>'+data[i].des+'</option>';
                        }
                        $('#sub_category').html(html);


                        var des = data[0].des;
                      
                        var bamount=data[0].bamount;
                      


                      
                        $('#des').val(des);
                        $('#famount').val(bamount);
                     

                    }
                });
                return false;
            }); 
            
    });
  </script>

  



  <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/jquery-3.3.1.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

      $('#catring').change(function(){ 
                var id=$(this).val();
                
                $.ajax({
                      url : "<?php echo base_url();?>Admin/Package_C/get_details",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){

                            html += '<option value='+data[i].id+'>'+data[i].des+'</option>';
                        }
                        $('#sub_category').html(html);


                        var des = data[0].des;
                      
                        var bamount=data[0].bamount;
                      


                      
                        $('#des').val(des);
                        $('#camount').val(bamount);
                     

                    }
                });
                return false;
            }); 
            
    });
  </script>

  <script>
 function add () {
 
var vamount=parseInt(document.getElementById("vamount").value);
var camount=parseInt(document.getElementById("camount").value);
var damount=parseInt(document.getElementById("damount").value);
var famount=parseInt(document.getElementById("famount").value);
// var cwamount=parseInt(document.getElementById("cwamount").value);
// var wdamount=parseInt(document.getElementById("wdamount").value);

// alert(vamount);
  var sum=vamount+camount+damount+famount;
  //return sum;
   $('#sum').val(sum);
  //document.getElementById("sum").innerHTML=sum;
 } 

</script>

 




<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</script>
 
</body>
</html>
