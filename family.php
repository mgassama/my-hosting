<?php

	$families = array
	(
		"Griffin"=>array
		(

			"Peter",
			"Lamin",
			"Megan"
		),

		"Quagmire"=>array
		(

			"Glenn"
		),

		"Brown"=>array
		(

			"Cleveland",
			"Loretta",
			"Junior"
		)

	);
	echo "is" . $families['Griffin'][2] . "a part of the Griffin family?";

?>
<!--The following example will output"Have a nice Day" and if the current day is Friday,otherwise it will output "have a nice day"-->
<?php

$d=date("D");
if($d=="Fri")
echo"Have a nice Weekend!";
else 
echo  "Have a nice day! Sex is good!";

echo  " Sex is good!";
?>