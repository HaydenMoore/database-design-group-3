<!DOCTYPE html>
<html> 
<body >
<div align="center">
<?php include('Navigation.html'); ?>
<br>
	<head>
      <title>Insert Record in Employee Table</title>
	  <link rel="stylesheet" href="main.css">
	</head>
<br><br><br><br>

	<?php
		require("public_html/tableshow.php");
		require("public_html/dbconnect.php");
	  
         if(isset($_POST['add'])) {
            
           
            $i_name = $_POST['i_name'];
            $i_ID = $_POST['i_ID'];
            $i_post = $_POST['i_post'];
            $i_dept = $_POST['i_dept'];
            
   
            $sql = "INSERT INTO Employee ".
               "(employee_id, employee_name, positition, dept_name) "."VALUES ".
               "('$i_ID','$i_name','$i_post', '$i_dept')";
            
			//mysqli_select_db($conn,'university');
            $retval = mysqli_query($conn, $sql);
         
            if(! $retval ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
         
            echo "Entered data successfully\n";
			
			echo " <br> Employee table after insertion <br>";
			show_employee($conn);
			
            mysqli_close($conn);
         } 
		 else if(isset($_POST['show'])){
			 
			 show_employee($conn);
		 }	 
		 
		 else {
      ?>
	  <br><br><br><br>
     <p>Enter Employee information for insertion <br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Employee ID</td>
               <td>
                  <input name = "i_ID" type = "text" id = "i_ID">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Employee Name</td>
               <td>
                  <input name = "i_name" type = "text" id = "i_name">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Position</td>
               <td>
                  <input name = "i_post" type = "text" id = "i_dept">
               </td>
            </tr>
      
            <tr>
               <td width = "250"> Department Name</td>
               <td> <input name="i_dept" type= "text" id = "i_salary"> </td>
            </tr>
            <tr>
               <td width = "250"></td>
               <td> </td>
            </tr>
         
            <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "add" type = "submit" id = "add"  value = "insert">
               </td>
            </tr>
		</table>
	  
   <?php
      }
   ?>
</div>
</body> </html>
