<?php

$first_name = "raul";
$last_name = "hirvela";

//tr�kib v�lja
echo $first_name." ".$last_name;

?>

<br>

<?php

	$age = 21;
	
	// if( loogikatehe ) { t�ene } else { v��r }
	if($age < 18) {
		echo "alaealine";
	} else {
		echo "t�isealine";
	}
	
	?>
	
	<br>
	
	<?php
	
		for($i = 0; $i < $age; $i = $i + 1) {
			//see, mida korratakse
			echo "palju,".$i.", ";
			}
		
		echo "�nne";
	
	?>
	
	<br>
	
	<?php
	
	//kuup�ev - date
	echo date ("l, j F Y e")
	?>