 <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
        <?php include'header.php';?> 

</head>

<body>
    
    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <div class="icon-circle">
                              <i class="icon icon-size-60 icon-vintage-cinema-camera-looking-left icon-white"></i>
                        </div>
                        <h1>Our Gallery</h1>
                        <p>Find the perfect wedding Service for your wedding. Search wedding reception Service reviews and vendors in your area.</p>
                        <span class="label label-default"></span>
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
                        <li class="active"> Our Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space80">
        <!-- Real Weddings -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Videos</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row">


                 <?php  
         foreach ($Video as $row)  
         {
       
          ?> 

                <div class="col-md-4">
                    <div class="real-wedding-block mb30">
                        <!-- real wedding block -->
                        <iframe width="360" height="315" src="https://www.youtube.com/embed/<?php echo $row->url;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="real-wedding-info well-box text-center">
                            <h2 class="real-wedding-title"><a href="#" class="title"><?php echo $row->title;?></a></h2>
                            
                        </div>
                    </div>
                    <!-- /.real wedding block -->
                </div>


                <?php } ?>


                
                
                    <!-- /.real wedding block -->
               
                
            </div>
            <div class="row">
                
            </div>
        </div>
    </div>
        <?php include'footer.php';?>

</body>


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/videography-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:12:47 GMT -->
</html>
