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

function show_department($conn){


$sql = "SELECT dept_name from department";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3> Department Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."Name".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo "<td>" . $row["department_name"]. "</td>";
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