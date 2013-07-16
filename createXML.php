 <?php 
  $start= $_POST['start'];
	$end  = $_POST['end'];
	
	// it will be the if function for one trip or roundtrip
	$startdate  = $_POST['startdate'];
	$enddate  = $_POST['enddate'];
	
	// $startdate  = $_POST['startdate2'];
	// $enddate  = $_POST['enddate2'];
	$adult  = $_POST['french-hens'];
	$children  = $_POST['turtle-doves'];
	$senior  = $_POST['partridge'];
	
	$start= 'ewr';
	$end  = 'JFK';
	
	
	
 echo $start;
 echo $end;
 
 $dom = new DOMDocument();
 $dom->encoding = 'utf-8';
 $dom->xmlVersion = '1.0';
 $dom->formatOutput = true; 
 $dom->xmlStandalone = true; 
 $xml_file_name='search.xml';
 $root = $dom->createElement('Search'); 

 $user_node=$dom->createElement('Flight');

 $child_node_start=$dom->createElement('start',$start);
 $user_node->appendChild($child_node_start);
 $child_node_end=$dom->createElement('end',$end);
 $user_node->appendChild($child_node_end);
 $child_node_startdate=$dom->createElement('startdate',$startdate);
 $user_node->appendChild($child_node_startdate);
 $child_node_enddate=$dom->createElement('enddate',$enddate);
 $user_node->appendChild($child_node_enddate);
 $child_node_adult=$dom->createElement('adult',$adult);
 $user_node->appendChild($child_node_adult);
 $child_node_children=$dom->createElement('children',$children);
 $user_node->appendChild($child_node_children);
 $child_node_senior=$dom->createElement('senior',$senior);
 $user_node->appendChild($child_node_senior);
 
 

 $root->appendChild($user_node);
 $dom->appendChild($root);
 $dom->save($xml_file_name);
 ?>
