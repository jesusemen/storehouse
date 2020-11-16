<?php 

//calculation offering

 if(isset($_POST['box_one']))
       {
          $box_one = $_POST['box_one']; 
       } 
       else {$error_one= "enter a number";}
	   
	   
	   
	   
	   if(isset($_POST['box_two']))
       {
          $box_two = $_POST['box_two']; 
       } 
       else {$error_two= "enter a number";}
	   
	   
	   
	   if(isset($_POST['box_three']))
       {
          $box_three = $_POST['box_three']; 
       } 
       else {$error_three= "enter a number";}
	   
	   
	   if(isset($_POST['box_four']))
       {
          $box_four = $_POST['box_four']; 
       } 
       else {$error_four= "enter a number";}
	   
	   if(isset($_POST['box_five']))
       {
          $box_five = $_POST['box_five']; 
       } 
       else {$error_five= "enter a number";}
	   
	   
	   if(isset($_POST['box_six']))
       {
          $box_six = $_POST['box_six']; 
       } 
       else {$error_six= "enter a number";}
	   
	   
	   
	   if(isset($_POST['box_seven']))
       {
          $box_seven = $_POST['box_seven']; 
       } 
       else {$error_seven= "enter a number";}
	   
	   
	   
	   
	   if(isset($_POST['box_eight']))
       {
          $box_eight = $_POST['box_eight']; 
       } 
       else {$error_eight= "enter a number";}
	   
	  if(isset($_POST['cheque']))
       {
          $cheque = $_POST['cheque']; 
       } 
       else {$error_cheque= "enter a number";}   
	   
  if(isset($_POST['date']))
       {
          $date = $_POST['date']; 
       } 
       else {$error_date= "enter a number";} 
	   
	   
	if($_POST['submit']==true)
    {
            $result_thousand =  1000 * $box_one;
            $result_fivehund = 500 * $box_two;
			$result_twohund = 200 * $box_three;
			$result_onehund = 100 * $box_four;
            $result_fifty= 50 * $box_five;
            $result_twenty=  20 * $box_six;
			$result_ten= 10 * $box_seven;
            $result_five= 5 * $box_eight;
  
  $offering= $result_thousand + $result_fivehund + $result_twohund + $result_onehund + $result_fifty + $result_twenty + $result_ten + $result_five ;
  
	}
 
 
?> 

<?php 
 if(isset($_POST['tit_one']))
       {
          $tit_one = $_POST['tit_one']; 
       } 
       else {$error_one= "enter a number";}
	   
	   
	   
	   
	   if(isset($_POST['tit_two']))
       {
          $tit_two = $_POST['tit_two']; 
       } 
       else {$error_two= "enter a number";}
	   
	   
	   
	   if(isset($_POST['tit_three']))
       {
          $tit_three = $_POST['tit_three']; 
       } 
       else {$error_three= "enter a number";}
	   
	   
	   if(isset($_POST['tit_four']))
       {
          $tit_four = $_POST['tit_four']; 
       } 
       else {$error_four= "enter a number";}
	   
	   if(isset($_POST['tit_five']))
       {
          $tit_five = $_POST['tit_five']; 
       } 
       else {$error_five= "enter a number";}
	   
	   
	   if(isset($_POST['tit_six']))
       {
          $tit_six = $_POST['tit_six']; 
       } 
       else {$error_six= "enter a number";}
	   
	   
	   
	   if(isset($_POST['tit_seven']))
       {
          $tit_seven = $_POST['tit_seven']; 
       } 
       else {$error_seven= "enter a number";}
	   
	   
	   
	   
	   if(isset($_POST['tit_eight']))
       {
          $tit_eight = $_POST['tit_eight']; 
       } 
       else {$error_eight= "enter a number";}
	   
	   
  
	if($_POST['submit']==true)
    {
            $outcome_thousand = 1000 * $tit_one;
            $outcome_fivehund = 500 * $tit_two;
			$outcome_twohund = 200 * $tit_three;
			$outcome_onehund = 100 * $tit_four;
            $outcome_fifty= 50 * $tit_five;
            $outcome_twenty= 20 * $tit_six;
			$outcome_ten= 10 * $tit_seven;
            $outcome_five= 5 * $tit_eight;
			
  // tithe offering result
  $tithe= $outcome_thousand + $outcome_fivehund + $outcome_twohund + $outcome_onehund + $outcome_fifty + $outcome_twenty + $outcome_ten + $outcome_five ;
  
	}
 //calculation welfare or thanksgiving offering
  if(isset($_POST['wel_one']))
       {
          $wel_one = $_POST['wel_one']; 
       } 
       else {$error_one= "enter a number";}
	   
	   
	   
	   
	   if(isset($_POST['wel_two']))
       {
          $wel_two = $_POST['wel_two']; 
       } 
       else {$error_two= "enter a number";}
	   
	   
	   
	   if(isset($_POST['wel_three']))
       {
          $wel_three = $_POST['wel_three']; 
       } 
       else {$error_three= "enter a number";}
	   
	   
	   if(isset($_POST['wel_four']))
       {
          $wel_four = $_POST['wel_four']; 
       } 
       else {$error_four= "enter a number";}
	   
	   if(isset($_POST['wel_five']))
       {
          $wel_five = $_POST['wel_five']; 
       } 
       else {$error_five= "enter a number";}
	   
	   
	   if(isset($_POST['wel_six']))
       {
          $wel_six = $_POST['wel_six']; 
       } 
       else {$error_six= "enter a number";}
	   
	   
	   
	   if(isset($_POST['wel_seven']))
       {
          $wel_seven = $_POST['wel_seven']; 
       } 
       else {$error_seven= "enter a number";}
	   
	   
	   
	   
	   if(isset($_POST['wel_eight']))
       {
          $wel_eight = $_POST['wel_eight']; 
       } 
       else {$error_eight= "enter a number";}
	   
	   
  
	if($_POST['submit']==true)
    {
            $answer_thousand = 1000 * $wel_one;
            $answer_fivehund = 500 * $wel_two;
			$answer_twohund = 200 * $wel_three;
			$answer_onehund = 100 * $wel_four;
            $answer_fifty= 50 * $wel_five;
            $answer_twenty= 20 * $wel_six;
			$answer_ten= 10 * $wel_seven;
            $answer_five= 5 * $wel_eight;
			
  //welfare offering result
  $welfare= $answer_thousand + $answer_fivehund + $answer_twohund + $answer_onehund + $answer_fifty + $answer_twenty + $answer_ten + $answer_five ;
  
	}
 
//merger 
    $merger_thou= $box_one + $tit_one + $wel_one;
	 $merger_fivehund= $box_two + $tit_two + $wel_two;
	  $merger_twohund= $box_three + $tit_three + $wel_three;
	   $merger_hund= $box_four + $tit_four + $wel_four;
	    $merger_fifty= $box_five + $tit_five + $wel_five;
		 $merger_twenty= $box_six + $tit_six + $wel_six;
		  $merger_ten= $box_seven + $tit_seven + $wel_seven;
		   $merger_five= $box_eight + $tit_eight + $wel_eight;
		   
		//merger result   
		   $merger_outcome_one =1000 * $merger_thou;
		   $merger_outcome_two =500 * $merger_fivehund;
		   $merger_outcome_three =200 * $merger_twohund;
		   $merger_outcome_four =100 * $merger_hund;
		   $merger_outcome_five =50 * $merger_fifty;
		   $merger_outcome_six =20 * $merger_twenty;
		   $merger_outcome_seven=10 * $merger_ten;
		   $merger_outcome_eight= 5 * $merger_five;
		   
		   
		   //total income calculations
		   $total_income = $offering + $tithe + $welfare;
		   
		   //total income verification through the merger
		    $merger_calculation = $merger_outcome_one + $merger_outcome_two +
$merger_outcome_three + $merger_outcome_four + $merger_outcome_five +  $merger_outcome_six + $merger_outcome_seven + $merger_outcome_eight;
		   //change calcuation
		   $change = $merger_outcome_three + $merger_outcome_four + $merger_outcome_five + 
		   $merger_outcome_six + $merger_outcome_seven + $merger_outcome_eight;
		   
		  //best possible change distribution
		  
		  $two_hund =  floor( $merger_twohund / 3);
		  $one_hund = floor($merger_hund /3);
		  $fifty =floor($merger_fifty /3 );
		  $twenty = floor($merger_twenty /3);
		  $ten = floor($merger_ten / 3);
		  $five= floor($merger_five /3);
		   		   
		   
		   $ans_twohund = 200 * $two_hund;
		   $ans_onehund = 100 * $one_hund;
		   $ans_fifty = 50 * $fifty;
		   $ans_twenty = 20 * $twenty;
		   $ans_ten = 10 * $ten;
		   $ans_five = 5* $five;
		  $total_change = $ans_twohund + $ans_onehund + $ans_fifty + $ans_twenty + $ans_ten + $ans_five; 

// Grand total calculation

$grand_total= $offering + $tithe + $welfare + $cheque;


// change display 

?>

<html>
<head>
<title>Storehouse </title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">Store House
</div>
<div>
<h1 align="center" style="color:#933">FINANCIAL SUMMARY</h1>
<h2  align="right"><?php echo $date ?></h2>
<table  cellpadding="5" cellspacing="15" align="center">
<tr>
<td><p>Total Offering</p>  </td><td><?php echo $offering; ?></td>
</tr>
<tr>
<td><p>Total Tithe</p></td><td><?php echo $tithe; ?></td>
</tr>
<tr>
<td><p> Total Welfare Offering</p></td><td><?php echo $welfare; ?></td>
</tr>
<tr>
<td><p> Cheques</p></td><td><?php echo $cheque; ?></td>
</tr>
<tr>
<td><p>Grand Total</p></td><td><?php echo $grand_total; ?></td>
</tr>



</table>


</div>





 <?php 
 /*
echo  "<p>" .  "<b>"  ."OFFERING " ."</b>" . "</p>";
echo "<p>" . "1000". "*" . "$box_one" . "="  .$result_thousand . "</p>";
echo "<p>" . "500" . "*" . "$box_two" . "=" . $result_fivehund . "</p>";
echo "<p>"  . "200" . "*" . "$box_three" . "=" . $result_twohund . "</p>";
echo "<p>" .   "100" . "*" . "$box_four" . "=".  $result_onehund . "</p>";
echo "<p>"    . "50" . "*" . "$box_five" . "="  .  $result_fifty . "</p>";
echo "<p>"  . "20" . "*" . "$box_six" . "="  .  $result_twenty . "</p>";
echo "<p>"  . "10" . "*" . "$box_seven" . "=".  $result_ten. "</p>";
echo "<p>"  . "5" . "*" . "$box_eight" . "=" .  $result_five . "</p>";

echo "<p>" ."Total Offering". "=" .  $offering . "</p>" ;
 ?></td> <td><?php echo "<p>" . "<b>" ."TITHES " . "</b>" . "</p>";
echo "<p>" . "1000". "*" . "$tit_one" . "="  .$outcome_thousand . "</p>";
echo "<p>" . "500" . "*" . "$tit_two" . "=" . $outcome_fivehund . "</p>";
echo "<p>"  . "200" . "*" . "$tit_three" . "=" . $outcome_twohund . "</p>";
echo "<p>" .   "100" . "*" . "$tit_four" . "=".  $outcome_onehund . "</p>";
echo "<p>"    . "50" . "*" . "$tit_five" . "="  .  $outcome_fifty . "</p>";
echo "<p>"  . "20" . "*" . "$tit_six" . "="  .  $outcome_twenty . "</p>";
echo "<p>"  . "10" . "*" . "$tit_seven" . "=".  $outcome_ten. "</p>";
echo "<p>"  . "5" . "*" . "$tit_eight" . "=" .  $outcome_five . "</p>";
echo "<p>" ."Total Tithe". "=" .  $tithe . "</p>";
?></td>
<td> <?php echo  "<p>" ."<b>" . "WELFARE/THANKS " . "</b>" . "</p>";
echo "<p>" . "1000". "*" . "$wel_one" . "="  .$answer_thousand . "</p>";
echo "<p>" . "500" . "*" . "$wel_two" . "=" . $answer_fivehund . "</p>";
echo "<p>"  . "200" . "*" . "$wel_three" . "=" . $answer_twohund . "</p>";
echo "<p>" .   "100" . "*" . "$wel_four" . "=".  $answer_onehund . "</p>";
echo "<p>"    . "50" . "*" . "$wel_five" . "="  .  $answer_fifty . "</p>";
echo "<p>"  . "20" . "*" . "$wel_six" . "="  .  $answer_twenty . "</p>";
echo "<p>"  . "10" . "*" . "$wel_seven" . "=".  $answer_ten. "</p>";
echo "<p>"  . "5" . "*" . "$wel_eight" . "=" .  $answer_five . "</p>";

echo "<p>" ."Welfare offering". "=" .  $welfare . "</p>" ;

?> </td>
<td><?php echo  "<p>" ." <b>" ."MERGER" . "</b>"  . "</p>";
echo "<p>"  . "1000" . "*" . "$merger_thou" . "=" . $merger_outcome_one . "</p>";
echo "<p>"  . "500" . "*" . "$merger_fivehund" . "=" . $merger_outcome_two . "</p>";
echo "<p>"  . "200" . "*" . "$merger_twohund" . "=" . $merger_outcome_three . "</p>";
echo "<p>" .   "100" . "*" . "$merger_hund" . "=".  $merger_outcome_four . "</p>";
echo "<p>"    . "50" . "*" . "$merger_fifty" . "="  .  $merger_outcome_five . "</p>";
echo "<p>"  . "20" . "*" . "$merger_twenty" . "="  .  $merger_outcome_six . "</p>";
echo "<p>"  . "10" . "*" . "$merger_ten" . "=".  $merger_outcome_seven. "</p>";
echo "<p>"  . "5" . "*" . "$merger_five" . "=" .  $merger_outcome_eight . "</p>";
echo "<p>" ."MERGER"  . "=" . $merger_calculation . "</p>";

?> </td><td> <?php echo "<p>" ." <b>" ."CHANGE CALCULATION" . "</b>"  . "</p>";
echo "<p>"  . "200" . "*" . "$merger_twohund" . "=" . $merger_outcome_three . "</p>";
echo "<p>" .   "100" . "*" . "$merger_hund" . "=".  $merger_outcome_four . "</p>";
echo "<p>"    . "50" . "*" . "$merger_fifty" . "="  .  $merger_outcome_five . "</p>";
echo "<p>"  . "20" . "*" . "$merger_twenty" . "="  .  $merger_outcome_six . "</p>";
echo "<p>"  . "10" . "*" . "$merger_ten" . "=".  $merger_outcome_seven. "</p>";
echo "<p>"  . "5" . "*" . "$merger_five" . "=" .  $merger_outcome_eight . "</p>";

echo "<p>" ."Total change" . " "  . "=" . " " . $change . "</p>";


?> </td>
<td>
   <?php 
   //change distribution display
  echo "<p>" . "<b>" . "BEST POSSIBLE CHANGE DISTRIBUTION" . "</b>". "</p>";
  echo "<p>" . "200" . "*" . "$two_hund" . "=" . $ans_twohund . "</p>";
   echo "<p>" . "100" . "*" . "$one_hund" . "=" . $ans_onehund . "</p>";
   echo "<p>" . "50" . "*" . "$fifty" . "=" . $ans_fifty . "</p>";
     echo "<p>" . "20" . "*" . "$twenty" . "=" . $ans_twenty . "</p>";
      echo "<p>" . "10" . "*" . "$ten" . "=" . $ans_ten . "</p>";
       echo "<p>" . "5" . "*" . "$five" . "=" . $ans_five . "</p>";
      echo "<p>" . "Total Change Per Person" . "=" . $total_change ."</p>";
    
	
	?>
 
 </td>

<td>
<?php echo 
 "<p>". "Date" .":" . " " . $date . "</p>";
 echo "<p>" . "<b>" ."TOTAL INCOME"  . "=" . $total_income . "</b>" . "</p>" ;
  echo "<p>"."<b>" ."MERGER" ."</b>" . "=" . $merger_calculation .   "</p>";
 echo "<p>"."<b>" ."CHEQUE" ."</b>" . "=" . $cheque .   "</p>";
 echo "<p>"."<b>" ."GRAND TOTAL" ."</b>" . "=" . $grand_total .   "</p>"; ?> 
  </td></tr>
  <?php 
  $pdf = pdf_new();
  pdf_set_info($pdf, "Author", "uwe steinmann");
  pdf_set_info($pdf, "Title", "test for php wrapper of pdflib2.0");
  pdf_set_info($pdf, "", "See Author")
  
 */ 
  ?>

</body>
</html>
