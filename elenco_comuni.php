
<?php
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.
//$comune_sel=$_GET["comune"];
//echo "COMUNE: ".$comune_sel;
if (file_exists('test.xml')) {
    $xml = simplexml_load_file('test.xml');
// echo 'root: '. $xml->getName() . '<br />';
    // loops through the children of root
    foreach ($xml->children() as $child) {
//  echo $child->getName(). ': '. '<br />';          // print the name of the current child
        // if the child node has other children
        if ($child->count() > 1) {

            // loops through the child node, prints the name and the content of each $child2
            foreach ($child as $child2) {
                //echo $child2->getName().'<BR>';
                if ($child2->getName() == 'Comune') {
                    //echo $child2.'<br>';
                    $comune = (string) $child2;
                    //echo $comune.'<br>';
                    //echo substr($comune,0);

                    echo "<div id='$comune' class='comune'>$comune</div>\n";
                }

                //echo $child2->getName(). ': '. $child2. '<br />';
            }
        }
    }
    // print_r($xml);
} else {
    exit('Failed to open test.xml.');
}
?>
