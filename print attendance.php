<table border=1>
  <?php
  include_once('dbcon.php');

session_start();
$u=$_SESSION["userid"];

  $sql="SELECT * FROM `attendance` WHERE empid=".$u;
//echo $sql;
$res=mysqli_query($con,$sql);
							
						?>
						
						<?php 
					
                            while($row=mysqli_fetch_array($res))
                  
			  { 
							  /* printing members list */
							  echo "<tr><td>". $row['date']. "</td> <td>". $row['status'] ;
			  }
  ?>
  <script type="text/javascript">
      window.print();
     </script>