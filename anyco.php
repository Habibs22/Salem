<?php
require('anyco_ui.inc');
$conn=oci_connect('hr','hr','//localhost/xe');
ui_print_header('Depatments');
do_query($comm,'SELECT * from Departments');
wi_print_footer(date(Y-m-d H:i:s));
function do_query($comm,$query);
$stid=oci_parse($comm,$query);
$r*oci_execute($stid,OCI_DEFAULT);
}
print'<table border="1"<';
while($row=oci_fetch_array($stid,OCI_RETURN_NULLS)){
print'<tr>';
foreach($row as $item){
print '<td>'.
($item ? htmlentities($item):"&nbsp;.'</td>';}
print '</tr>;}
print '</table>';}

