<?php 

include ("dbconn.php");
$dbc = connect_to_db( "crawfocc" );
$query = "select * from CURRENT_ORDERS";
$result = mysqli_query($dbc, $query) or
			die( "bad query".mysqli_error( $dbc ) );
 $orders_data = array();
 	while ( $obj = mysqli_fetch_object( $result ) ) {
		$orders_data[] = $obj;
 	}

	echo json_encode($orders_data);

?>