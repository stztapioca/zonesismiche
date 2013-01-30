
<?php
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.
//$comune_sel=$_POST["comune"];
$comune_sel=trim($_POST["comune"]);
//echo "COMUNE: ".$comune_sel;
if (file_exists('test.xml')) {
    $xml = simplexml_load_file('test.xml');
// echo 'root: '. $xml->getName() . '<br />';
 // loops through the children of root
foreach($xml->children() as $child) {
//  echo $child->getName(). ': '. '<br />';          // print the name of the current child

  // if the child node has other children
  if($child->count()>1) {
    // loops through the child node, prints the name and the content of each $child2
    foreach($child as $child2) {
	$comune[$child2->getName()] = $child2;
	
	
     //echo $child2->getName(). ': '. $child2. '<br />';
    }
	$comune_test=$comune['Comune'];
	//echo "<B>$comune_test:$comune_sel</B><BR>";
	if (trim($comune_test) == $comune_sel)
	{
	//echo 'trovato<br />';
	echo $comune['Comune'].'<br />';
	echo "CodiceIstat: ".$comune['CodiceIstat'].'<br />';
	echo "ZonaSismicaClassificazioneRegionale2006: ".$comune['ZonaSismicaClassificazioneRegionale2006'].'<br />';
	echo "ZonaSismicaClassificazioneRegionale2003: ".$comune['ZonaSismicaClassificazioneRegionale2003'].'<br />';
	echo "ZonaSismicaPCM3274_03: ".$comune['ZonaSismicaPCM3274_03'].'<br />';
	echo "CategoriaDM1984: ".$comune['CategoriaDM1984'].'<br />';



	}
	//print_r($comune);
  }
}
   // print_r($xml);
} else {
    exit('Failed to open test.xml.');
}
//foreach($xml as $key => $value) {

//   print "$key => $value\n";
//echo 'Name: '.$key->ClassificazioneSismicaComunale[0].'<br />';


//}
//echo "\n";

?>
