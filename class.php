
<?php

// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.
//$comune_sel=$_POST["comune"];
$class_sel = trim($_POST["classif"]);
//$class_sel = "CategoriaDM1984";
$comuni_classif = array();
if (file_exists('test.xml')) {
    $xml = simplexml_load_file('test.xml');
// echo 'root: '. $xml->getName() . '<br />';
    // loops through the children of root
    $x = 0;
    foreach ($xml->children() as $child) {
//  echo $child->getName(). ': '. '<br />';          // print the name of the current child
        // if the child node has other children
        if ($child->count() > 1) {

            // loops through the child node, prints the name and the content of each $child2
            foreach ($child as $child2) {
                $comune[$child2->getName()] = $child2;


                //echo $child2->getName(). ': '. $child2. '<br />';
            }
            //$comune_test=$comune['Comune'];
            //echo "<B>$comune_test:$comune_sel</B><BR>";
//	if (trim($comune_test) == $comune_sel)
//	{
            //echo 'trovato<br />';
            $comuni_classif[$x]['Comune'] = $comune['Comune'];
            $comuni_classif[$x][$class_sel] = $comune[$class_sel];
        /*    echo $comune['Comune'] . '<br />';
            echo "CodiceIstat: " . $comune['CodiceIstat'] . '<br />';
            echo "ZonaSismicaClassificazioneRegionale2006: " . $comune['ZonaSismicaClassificazioneRegionale2006'] . '<br />';
            echo "ZonaSismicaClassificazioneRegionale2003: " . $comune['ZonaSismicaClassificazioneRegionale2003'] . '<br />';
            echo "ZonaSismicaPCM3274_03: " . $comune['ZonaSismicaPCM3274_03'] . '<br />';
            echo "CategoriaDM1984: " . $comune['CategoriaDM1984'] . '<br />';*/
            $x++;
        }



        //print_r($comune);
    }

    for ($y = 1; $y <= 6; $y++) {
        //print 'test';
           $check=0;
        foreach ($comuni_classif as $key => $value) {
         
            if ($value[$class_sel] == $y)
                {
                if ($check==0)
                 {   print "<b>$class_sel $y</b><br>";}
                
                    //print $value[$class_sel] . "<br>";
                    print $value['Comune'] . "<br>";
                    $check=1;
                }
        }
    }
    // print_r($comuni_classif);
} else {
    exit('Failed to open test.xml.');
}
//foreach($xml as $key => $value) {
//   print "$key => $value\n";
//echo 'Name: '.$key->ClassificazioneSismicaComunale[0].'<br />';
//}
//echo "\n";
?>
