<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST))
	{
		$requestObject = json_decode(file_get_contents('php://input'));
		$count=count($requestObject);
	
		//calculating total age of members
		$sumOfAge = 0;
		for($i=0;$i<$count;$i++)
		{
			$sumOfAge+=$requestObject[$i]->age;
		}
		
		
		//sorting the object values in descending order
		function compareOrder($a, $b)
		{
		  return  $b->age - $a->age;
		}
		usort($requestObject, 'compareOrder');
		$response =array();
		$response['sortedByAge']=$requestObject;
		$response['maxAge']=$requestObject[0]->age;
		$response['minAge']=$requestObject[$count-1]->age;
		$response['averageAge']=($sumOfAge/$count);
		
		echo json_encode($response);
	}
}
?>