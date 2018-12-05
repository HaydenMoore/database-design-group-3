<?php

function show_customer($conn){


$sql = "SELECT customer_id, customer_name from customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3> Customer Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["customer_id"]. "</td>";
		echo "<td>" . $row["customer_name"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}

function show_supplier($conn){


$sql = "SELECT supplier_id, supplier_name from supplier";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3> Supplier Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["supplier_id"]. "</td>";
		echo "<td>" . $row["supplier_name"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}


function show_employee($conn){


$sql = "SELECT employee_id, employee_name, positition, dept_name from employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3> Employee Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Position".'</th>'.'<th>'."Department".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["employee_id"]. "</td>";
        echo "<td>" . $row["employee_name"]. "</td>";
        echo "<td>" . $row["positition"]. "</td>";
        echo "<td>" . $row["dept_name"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}


function show_inventory($conn){


$sql = "SELECT UPC, dept_name, supplier_id, quantity from inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3> Inventory Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."UPC".'</th>'.'<th>'."Department".'</th>'.'<th>'."Supplier ID".'</th>'.'<th>'."Quantity".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["UPC"]. "</td>";
        echo "<td>" . $row["dept_name"]. "</td>";
        echo "<td>" . $row["supplier_id"]. "</td>";
        echo "<td>" . $row["quantity"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}


?>