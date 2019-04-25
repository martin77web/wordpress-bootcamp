<?php
//Csak akkor fut, ha definiálva van az init függvény.
	if ( !function_exists('init_db_tester_page')){
		exit('No access...');
	}
?>

<div>&nbsp;</div>

<?php

//Ha  a Post-ban megtalálható a get_request elem.
if (isset($_POST['get_request']) ){
	global $wpdb;
	$table = $wpdb->prefix.'options';
	$site_url = $wpdb->get_results(
		"SELECT option_value FROM $table WHERE option_name = 'siteurl'"
	);

	echo '<pre>';
	print_r($site_url);
	echo '</pre>';
}

//Wpdb insert.
if (isset($_POST['insert_request']) ){

	global $wpdb;

	//Tábla a beszúráshoz.
	$table = $wpdb->prefix.'products';
/* - Ez valamiért nem működik. Tömb (array) helyett js formátumú bevitel.
	//Adatok a beszúráshoz.
	$data = [
		'name' =>'borotva',
		'price' => 2999
	];

	//Formátumok meghatározása.
	$formats = ['%s','$d'];

	//Adatok beszúrása.
	$wpdb->insert( $table, $data, $formats);
*/
	//Adatok beszúrás közvetlenül:
	$wpdb->insert( 
	$table, 
	array( 
		'name' => 'borotva', 
		'price' => 2999
	), 
	array( 
		'%s', 
		'%d' 
	) 
);

	//Nyugtázás.
	echo "A rekord $wpdb->insert_id id-vel beszúrásra került az adatbázisba.";
}

//Wpdb update.
if (isset($_POST['update_request']) ){

	global $wpdb;

	//Tábla a módosításhoz.
	$table = $wpdb->prefix.'products';

	//Adatok a módosításhoz.
	$data = [
		'name' =>'tükör',
		'price' => 799
	];

	//Feltétel.
	$where = ['id'=> 6];
	// Nem működik: $where = ["name LIKE '%borotva%'"];


	//Formátumok meghatározása.
	$formats = ['%s','$d'];

	//Adatok módosítása.
	$row_num = $wpdb->update( $table, $data, $where);

	//Nyugtázás.
	if ($row_num === false) {
		echo $wpdb->last_error;
		echo '<br>Last query: ' .$wpdb->last_query;
	} else {
		echo "$row_num sor frissült.";	
	}
	
}

//Wpdb delete.
if (isset($_POST['delete_request']) ){

	global $wpdb;

	//Tábla a törléshez.
	$table = $wpdb->prefix.'products';

	//Feltétel.
	$where = ['id'=> 6];
	
	//Formátumok meghatározása.
	$formats = ['%s','$d'];

	//Adatok módosítása.
	$row_nr = $wpdb->delete( $table, $where);

	//Nyugtázás.
	if ($row_nr === false) {
		echo $wpdb->last_error;
		echo '<br>Last query: ' .$wpdb->last_query;
	} else {
		echo "$row_nr sor törölve lett az adatbázisból.";	
	}
	
}


?>
<div>
	<form method="post">
		<input type="submit" name="get_request" value="get kérés">
	</form>
</div>
<div>
	<form method="post">
		<input type="submit" name="insert_request" value="insert">
	</form>
</div>
<div>
	<form method="post">
		<input type="submit" name="update_request" value="update">
	</form>
</div>
<div>
	<form method="post">
		<input type="submit" name="delete_request" value="delete">
	</form>
</div>