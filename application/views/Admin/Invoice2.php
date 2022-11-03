<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MK Professional</title>
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

<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

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
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to Print.
            </div>

 <?php  
         foreach ($customer as $row)  
         {

          ?> 
            <!-- Main content -->
            <div class="invoice p-3 mb-3" id="printableArea">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                   </i><img src="<?php echo base_url();?>Public/Static/images/logo0.png" alt=" " class="" width=200 height=70>
                    <small class="float-right">Date: <?php echo $row->ddate;?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>MK Professional Salon & Academy</strong><br>
                    Near Hotel Radission Blu,<br>
                    Mohaddipur Chauraha, Gorakhpur UP, India<br>
                    Mobile: (+91)7887220230, (+91)9795204500<br>
                    Email: info@mkprofessionalsalon.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                   
                    <strong><?php echo $row->name;?></strong><br>
                    <span><?php echo $row->address;?></span>
                  
                    <br>
             
                    Mobile: (+91) <?php echo $row->mob;?><br>
                    Email: <?php echo $row->email;?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #<?php echo $row->id;?></b><br>
                  <br>
                  <b>Customer ID:</b> <?php echo $row->id;?><br>
                
                  <b>Payment Due Date:</b> <?php echo $row->ddate;?><br>
              
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            <?php }?>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Sr. No. #</th>
                      <th>Product/Service #</th>
                      <th>Description #</th>
                      <th>Amount #</th>
                    </tr>
                    </thead>
                    <tbody>

                 <?php
                 $count=0; 
                 $amt=0; 
         foreach ($trans as $row2)  
         {
           ++$count;
          ?> 
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row2->category;?></td>
                      <td><?php echo $row2->des;?></td>
                      <td><?php echo $row2->amount;?>.00 <span>&#8377;</span> &nbsp;</td>
                    </tr>


                  <?php

                  $amt=$amt+$row2->amount;  
                   } ?>
                 
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="<?php echo base_url();?>Public/Admin/dist/img/credit/visa.png" alt="Visa">
                  <img src="<?php echo base_url();?>Public/Admin/dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="<?php echo base_url();?>Public/Admin/dist/img/credit/american-express.png" alt="American Express">
                  <img src="<?php echo base_url();?>Public/Admin/dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  1) This is System Generated bill for MK Professional Salon & Academy.<br>
                  2) Payment Mode Cash / Cheque / Bank / UPI / GoolgePay / PhonePay<br>
                  3) Payment not refund in case of Cancel any Booking or Services
                  </p>

                    <div class="table-responsive">
                    <table class="table">
                      <tr>
           <?php 

      foreach ($data as $row4) {
   
            ?> 

                        <th>Payment Record:</th>
                        <td><?php echo $row4->amount;?> <span>&#8377;</span> on <?php echo $row4->ddate;?> by <?php echo $row4->mode;?></td>
                      </tr>
                     <?php } ?>
                    </table>
                  </div>

                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due on <?php echo $row->ddate;?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
           <?php 
            $amount=$amt;
            $percent=18;
            $paid=0;

  $gst_amount = $amount-($amount*(100/(100+$percent)));
  $withoutgst=$amount-$gst_amount;

      $gst=number_format($gst_amount, 2); 
      $with=number_format($withoutgst, 2);
      $total=0;

      foreach ($data as $row3) {
        $paid=$paid+$row3->amount;
      }

      $total=$amt-$paid;
            ?> 

                    
                        <th>Total:</th>
                        <td><?php echo $amt;?>.00 <span>&#8377;</span></td>
                      </tr>
                         <tr>
                        <th>Paid:</th>
                        <td><?php echo $paid;?>.00 <span>&#8377;</span></td>
                      </tr>
                         <tr>
                        <th>Due Amount:</th>
                        <td><?php echo $total;?>.00 <span>&#8377;</span></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
          

      
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href=" " onclick="printDiv('printableArea')" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
              
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
</body>
</html>
