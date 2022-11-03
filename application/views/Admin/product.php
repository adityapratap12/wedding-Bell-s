<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MK Profession</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <center>
 <div class="col-sm-12 row">
  <div class="col-sm-6">

  <?php 
    if(!empty($this->session->flashdata('msg'))){
    echo "<div class='alert alert-success'>".$this->session->flashdata('msg')."</div>";
}

    if(!empty($this->session->flashdata('msg_w'))){
    echo "<div class='alert alert-warning'>".$this->session->flashdata('msg_w')."</div>";
}
     if(!empty($this->session->flashdata('msg_del'))){
    echo "<div class='alert alert-danger'>".$this->session->flashdata('msg_del')."</div>";
  }


    ?>

  <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>
     <!-- general form elements -->
            <div class="card card-info" align="left">
              <div class="card-header">
                <h3 class="card-title">Add Product & Services</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<?php
foreach ($data as $row) {
 $id=$row->id;
}
?>
  <form method="post" action="<?php echo base_url().'Admin/GST/AddProduct'?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Select Category</label>
                     <select name="category" class="form-control" id="category">
                      <option value="">No Selected</option>
              <?php foreach($category as $row):?>
              <option value="<?php echo $row->id;?>"><?php echo $row->title;?></option>
              <?php endforeach;?>
                    </select>
             
                  </div>


                      <div class="form-group">
                    <label for="exampleInputPassword1">Details</label>
                   <textarea class="form-control" name="des" row=2 id="des"></textarea>
                
               
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount">
                    <input type="hidden" class="form-control" name="cid" value="<?php echo $id;?>">
             
                  </div>


       
                <div class="card-footer" align="center">
               
                    <input type='submit' name="upload" class="btn btn-info" value='Add Services'/>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
           <div class="col-sm-6">

  <?php 
    if(!empty($this->session->flashdata('msg_pay'))){
    echo "<div class='alert alert-warning'>".$this->session->flashdata('msg_pay')."</div>";
}

  if(!empty($this->session->flashdata('msg_d'))){
    echo "<div class='alert alert-danger'>".$this->session->flashdata('msg_d')."</div>";
  }

    ?>

     <!-- general form elements -->
            <div class="card card-info" align="left">
              <div class="card-header">
                <h3 class="card-title">Add Payment Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
  <form method="post" action="<?php echo base_url().'Admin/GST/AddPayment'?>" enctype="multipart/form-data">
                <div class="card-body">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control" name="amt" value="<?php echo round($amount);?>" id="cBalance" disabled>
                    <input type="hidden" class="form-control" name="cid" value="<?php echo $id;?>">
                    <input type="hidden" class="form-control" name="amt" value="<?php echo round($amount);?>">

            
                  </div>

                     <div class="form-group">
                    <label for="exampleInputEmail1">Discount (in 0-100 %)</label>
                    <input type="text" class="form-control" name="dis" id="chDiscount">
                   
            
                  </div>

                     <div class="form-group">
                    <label for="exampleInputEmail1">Final Amount</label>
           
                    <input type="text" class="form-control" name="famt" value="<?php echo round($amount);?>" id="result">
                
            
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Payment Mode</label>
                     <select name="mode" class="form-control">
                      <option>Cash</option>
                      <option>Cheque</option>
                      <option>Net Banking</option>
                      <option>GooglePay</option>
                      <option>Phonepe</option>
                      <option>Paytm</option>
                      <option>UPI</option>
                      <option>Other</option>
                    </select>
             
                  </div>


                <div class="card-footer" align="center">
               
                    <input type='submit' name="upload" class="btn btn-info" value='Click here for Pay'/>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>

          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Amount</th>
                  <th>Mode</th>
                   <th>Date</th>
           
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
  <?php  
         foreach ($data3 as $row3)  
         {?>  
          
                <tr>
                  <td><?php echo $row3->famt;?></td>
                  
                  <td><?php echo $row3->mode;?></td>
                   <td><?php echo $row3->ddate;?></td>
             
                    <td>
       <a href="DeletePay?id=<?php echo $row3->id;?>" class="btn btn-danger toastrDefaultError">X</a>
     
     </td><?php } ?>

                </tr>

               
                </tbody>
            
              </table>

        </div>
        </center>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List of Product Added Records</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Details</th>
                   <th>Amount</th>
           
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
  <?php  
         foreach ($data2 as $row2)  
         {?>  
          
                <tr>
                  <td><?php echo $row2->category;?></td>
                  
                  <td><?php echo $row2->des;?></td>
                   <td><?php echo $row2->amount;?></td>
             
                    <td>
       <a href="Deletedata?id=<?php echo $row2->id;?>" class="btn btn-danger toastrDefaultError">Delete</a>
     
     </td><?php } ?>

                </tr>

               
                </tbody>
            
              </table>


            </div>
            <center>
            <div class="col-sm-2">
              <a href="Print_Invoice?id=<?php echo $id;?>" class="btn btn-block btn-outline-primary" target="_blank"><i class="fas fa-print"></i> Print Invoice</a>

            </div>
            <br>
            </center>
          </div>
          
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
      toastr.error('Record has been Successfully Deleted')
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
  <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/jquery-3.3.1.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>Public/Admin/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

      $('#category').change(function(){ 
                var id=$(this).val();
                
                $.ajax({
                      url : "<?php echo base_url();?>Admin/GST/get_details",
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
                      
                        var amount=data[0].amount;
                      
                        $('#des').val(des);
                        $('#amount').val(amount);
                     

                    }
                });
                return false;
            }); 
            
    });
  </script>

   <script>
        $(document).on("change keyup blur", "#chDiscount", function() {
            var main = $('#cBalance').val();
            var disc = $('#chDiscount').val();
            var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
            var mult = main * dec; // gives the value for subtract from main value
            var discont = (main - mult);
            $('#result').val(Math.round(discont));
        });
    </script>
</body>
</html>
