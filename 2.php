<!-- <!DOCTYPE html>
<html>
<body>

<?php
$numbers = [
		'A ','B ', 'D ','F','E ','C '
	];
sort($numbers);

$arrlength = count($numbers);
echo "{";
for($x = 0; $x < $arrlength; $x++) {
	
	
  echo $numbers[$x];
  

  
}
echo "}";
?>

</body>
</html>
 -->


<?php
function simple_quick_sort($arr)
{

	
	
	if(count($arr) <= 1){
		return $arr;
		
		
	}
	else{

		
		$pivot = $arr[0];
		$left = array();
		$right = array();


		for($i = 1; $i < count($arr); $i++)
		{
			if($arr[$i] < $pivot){
				$left[] = $arr[$i];
			}
			else{
				$right[] = $arr[$i];
			}
		}
		
		return array_merge(simple_quick_sort($left), array($pivot), simple_quick_sort($right));
	}
	
}
$unsorted = array('D','E', 'A', 'C', 'B');
echo implode(",",$unsorted)." @BEFORE<br>";
$sorted = simple_quick_sort($unsorted);
echo implode(",",$sorted)." @AFTER<br>"

?>
