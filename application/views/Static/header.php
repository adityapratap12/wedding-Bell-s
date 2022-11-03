    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Are you local weddding vendor provider & looking for wedding vendor website template. Wedding Vendor Responsive Website Template suitable for wedding vendor supplier, wedding agency, wedding company, wedding events etc.. ">
    <meta name="keywords" content="Wedding Vendor, wedding template, wedding website template, events, wedding party, wedding cake, wedding dress, wedding couple, couple, Wedding Venues Website Template">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wedding Vendor | Find The Best Wedding Vendors</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>Public/Static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Public/Static/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Public/Static/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Public/Static/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Public/Static/css/owl.transitions.css">
    <!-- Font used in template --> 
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>Public/Static/images/favicon.ico" type="image/x-icon">
    <div class="collapse" id="searcharea">
        <!-- top search -->
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button">Search</button>
          </span>
        </div>
    </div>
    <!-- /.top search -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                    <p>Welcome to Wedding Vendor.</p>
                </div>
                <div class="col-md-6 top-links">
                    <ul class="listnone">
                        <li><a href="#"> Help </a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#" class=" ">I m couple</a></li>
                        <li><a href="#">Are you vendor?</a></li>
                        <li><a href="#">Log in</a></li>
                        <li>
                            <a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo">
                    <div class="navbar-brand">
                        <a href="<?php echo base_url();?>Welcome/index"><img src="<?php echo base_url();?>Public/Static/images/logo.png" alt="Wedding Vendors" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="<?php echo base_url();?>Welcome/index">Home</a>
                              <li class="active"><a href="<?php echo base_url();?>Welcome/index">Gallery</a>
                                <ul>
                                    <li>

                                         <?php  
         foreach ($gallery as $row)  
         {
       
          ?>  <a href="<?php echo base_url();?>Welcome/Gallery?id=<?php echo $row->id;?>"><?php echo $row->title;?> </a> <?php } ?></li>
                                    
                                </ul>
                            </li> 
                               
                            </li>
                            
                            <li><a href="<?php echo base_url();?>Welcome/Venue">Venue</a>


                                <!-- <ul>
                                    <li><a href="vendor-details.html">Vendor Simple</a></li>
                                    <li><a href="vendor-details-tabbed.html">Vendor Tabbed</a></li>
                                    <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                </ul> -->
                            </li>

                                <li><a href="#">Traditional Wedding</a>


                               <ul>
                                 <li><a href="<?php echo base_url();?>Welcome/wed">Hindu Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed1">Bengali Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed2">Malyali Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed3">Assamese Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed4">Buddhist Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed5">Jain Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed6">Kannada Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed7">Gujrati Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed8">Christian Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed9">Kashmiri Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed10">Maharashtrian Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed11">Marwari Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed12">Muslim Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed13">Pahari Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed14">Punjabi Wedding</a></li>
                                    <li><a href="<?php echo base_url();?>Welcome/wed15">Sikh Wedding</a></li>

                                    
                                </ul>
                            </li>

                            
                            <li><a href="#" title="Home" class="animsition-link">Services</a>



                               
                                <ul>
                                    <li>

                                         <?php  
         foreach ($data as $row)  
         {
       
          ?>  <a href="<?php echo base_url();?>Welcome/Category?id=<?php echo $row->id;?>"><?php echo $row->title;?> List</a> <?php } ?></li>
                                    
                                </ul>
                            </li> 




                            
                            <li><a href="<?php echo base_url();?>Welcome/Enquiry">Enquiry</a>
                            
                        </ul>


                    </div>
                
                </div>
            </div>
        </div>
    </div>