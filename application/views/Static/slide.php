<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500000,
      values: [ 100, 500000 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( "Rs. " + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>
</head>

<body>
  <p>
    Price Range:<p id="amount"></p>
  </p>
  <div id="slider-range"></div>

  <form method="post" action="">
    <input type="hidden" id="amount1" name="amount1">
    <input type="hidden" id="amount2" name="amount2">
    <input type="submit" name="submit_range" value="Submit">
  </form>

</body>
</html>

<?php
if(isset($_POST['submit_range']))
{
    $price1=$_POST['amount1'];
    $price2=$_POST['amount2'];
$con = mysqli_connect("localhost", "root", "", "wedding");
    $select = mysqli_query($con,"SELECT * FROM services WHERE bamount BETWEEN '$price1' AND '$price2'");
    echo mysqli_num_rows($select);
}
?>
