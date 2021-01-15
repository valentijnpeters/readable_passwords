<!DOCTYPE html>
    <head>
    <title>Voedsel toevoegen bug 6</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
<br><br>
<h3>Controleer dat de waarden correct naar het overzicht (View Data) worden overgezet.<h3>

<div class="left">

     <form class="span4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     
  <fieldset>
    <legend>Voedsel toevoegen</legend>
    
	<label>voedselnaam<span class="required">*</span></label>
 <input type="text" name="voedselnaam" class="input-xlarge" placeholder="voedselnaam" value="<?php if(isset($_POST['voedselnaam'])){ echo $_POST['voedselnaam']; }?>" autofocus> 
	
	
   <label>Eenheid<span class="required">*</span></label>
<input type="text" name="Eenheid" class="input-small" placeholder="" value="<?php if(isset($_POST['Eenheid'])){ echo $_POST['Eenheid']; }?>"> 
<br/>
	
	
	<label>Kcal<span class="required">*</span></label>
<input type="text" name="Kcal" class="input-small" placeholder="" value="<?php if(isset($_POST['Kcal'])){ echo $_POST['Kcal']; }?>"> 
<br/>
	 	
	 
<label>Eiwitten<span class="required">*</span></label>
<input type="text" name="Eiwit" class="input-small" placeholder="" value="<?php if(isset($_POST['Eiwit'])){ echo $_POST['Eiwit']; }?>"> 
<br/>
     
	 
	 
<label>Koolh.<span class="required">*</span></label>
<input type="text" name="Koolh" class="input-small" placeholder="" value="<?php if(isset($_POST['Koolh'])){ echo $_POST['Koolh']; }?>"> 
<br/>
    
    
<label>Vet<span class="required">*</span></label>
<input type="text" name="Vet" class="input-small" placeholder="" value="<?php if(isset($_POST['Vet'])){ echo $_POST['Vet']; }?>"> 

	 
	 
         <?php
if(isset($_POST['getdata'])){
$conn=mysqli_connect('localhost','specimenadmin','specimen');
mysqli_select_db($conn,"testenvans_4specimen");

// $regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/"; 

$voedselnaam=$_POST['voedselnaam'];
$Eenheid=$_POST['Eenheid'];
$Kcal=$_POST['Kcal'];
$Eiwit=$_POST['Eiwit'];
$Koolh.=$_POST['Koolh'];
$Vet=$_POST['Vet'];



    
     




 $var=mt_rand(0);
     if($var ==  0) {
if($Vet >15 && $Eiwit >10)
{
	echo "<label class='err'>You found bug#3: The system crashes by testing this way. Great Job!</label>";
	}
elseif($Vet ==15 && $Eiwit ==10)
{
	echo "<label class='err'>You found bug#4: Boundry value analyses. (only in combination of both boundry) Great Job!</label>";
	}

elseif($Vet >15)
{
	echo "<label class='err'>You found bug#2: Fat bigger then 15</label>";
	}
elseif($Eiwit >10)
{
	echo "<label class='err'>You found bug#1: Eiwit bigger then 10 </label>";
	}
elseif($Vet ==a && $Eiwit ==a)
{
	echo "<label class='erra'>a bug!</label>";
	}

		else{
$insert="Insert into voedselinfo(voedselnaam,Eenheid,Kcal,Eiwit,Koolh,Vet)
 values('".$voedselnaam."','".$Eenheid."','".$Kcal."','".$Eiwit."','".$Vet."','".$Koolh."')";

$rs=mysqli_query($conn,$insert) or die(mysqli_error());
?>



echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
// <script>alert('Data Entry Saved!');</script>
<?php }
}
}
 ?>



<br/>    <button type="submit" name="getdata" class="btn">Submit</button>
<a href="http://www.testenvansoftware.nl/test8/voedselinfo.php" class="btn btn-primary">View Data</a>
  </fieldset>
</form>

   </div>
   <?php 
   function save(){
	
	
	}
   ?>

    </body>
    </html>
