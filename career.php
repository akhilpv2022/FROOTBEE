<?php include 'header.php';?>
<html>
   <div class="content-wrapper">
    <div class="container-fluid">
	    	<div class="row">
            	<!-- Welcome Message -->
		
             
    	    	<h2 style="color:#000000">Recruitments</h2>
				
				
				
                  <?php
$conn=new PDO('mysql:host=localhost; dbname=demo', 'root', '') or die(mysql_error());

if(isset($_POST['submit'])!=""){
	
	  if (isset($_POST ["dname"])) if ($_POST ["dname"] != "")
	$dname = $_POST['dname'];
	
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];

  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"upload/".$fname);
 if($move){
 	$query=$conn->query("insert into upload(dname,name,fname)values('$dname','$name','$fname')");
	if($query){

	}
	else{
	die(mysql_error());
	}
 }
}
?>
<style>
a:link {
  color: blue;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: blue;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: blue;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: blue;
  background-color: transparent;
  text-decoration: underline;
}
</style>
<head>
	<link href="other/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="other/DT_bootstrap1.css">
	
</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>


<body>

	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">

		
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th align="center">POST</th>
					<th align="center">ADVERTISEMENT NO.</th>	
					<th align="center">DETAILS</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				
				
				$name=$row['name'];
				$dname=$row['dname'];
			?>
			<tr>
			<td>
			&nbsp;<?php echo $dname ;?>
			</td>
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>

					<button class="alert-success"><a href="admin/download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
		
</td>

			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
</body>
</html>
		
                
    	        </div>
            
        </div>	
                    <div class="clearfix"></div>
			   </div>
        		
    			<!-- Welcom Message Ends -->
                        <hr>
                    
	        </div><!-- Row ends -->
		</div>
<?php include 'footer.php'; ?>