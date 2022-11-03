<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:16:16 GMT -->
<head>
    <meta charset="utf-8">
    
</head>

<body>
        <?php include'header.php';?> 

    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">

                <?php 
    if(!empty($this->session->flashdata('msg'))){
    echo "<div class='alert alert-success'>".$this->session->flashdata('msg')."</div>";
}
 ?>
                <div class="col-md-6">
                    <div class="well-box">
                        <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                        <form method="post" action="<?php echo base_url().'Welcome/AddContact'?>" enctype="multipart/form-data"  >
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="first">First Name <span class="required">*</span></label>
                                <input id="first" name="name" type="text" placeholder="First Name" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class=" control-label" for="lastname">Last Name <span class="required">*</span></label>
                                <div class=" ">
                                    <input id="lastname" name="lastname" type="text" placeholder="Last name" class="form-control input-md" required>
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class=" control-label" for="email">E-Mail <span class="required">*</span></label>
                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class=" control-label" for="phone">Phone <span class="required">*</span></label>
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class=" control-label" for="category">Category <span class="required">*</span></label>
                                <select id="category" name="category" class="form-control selectpicker">
                                    <option value="Couple">Couple</option>
                                    <option value="Vendor">Vendor</option>
                                    <option value="Advertisement">Advertisement</option>
                                    <option value="Suggestion">Suggestion</option>
                                </select>
                            </div>
                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="  control-label" for="message">Message</label>
                                <textarea class="form-control" rows="6" id="message" name="message">Write Your Message</textarea>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <button id="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="well-box">
                        <ul class="listnone">
                            <li class="address">
                                <h2><i class="fa fa-map-marker"></i>Location</h2>
                                <p>ITM College GIDA Gorakhpur, Uttar Pradesh 274301</p>
                            </li>
                            <li class="email">
                                <h2><i class="fa fa-envelope"></i>E-Mail</h2>
                                <p>Info@Example.com</p>
                            </li>
                            <li class="call">
                                <h2><i class="fa fa-phone"></i>Contact</h2>
                                <p>+91-98XXXXXXXX</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well-box">
                        <h2>Need Help ?</h2>
                        <p>Are you an advertiser enquiring about advertising in You &amp; Your Wedding or on weddingvendor? Please <a href="#">click here </a>to contact the advertising team.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
               <?php include'footer.php';?> 

</body>


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:16:16 GMT -->
</html>
