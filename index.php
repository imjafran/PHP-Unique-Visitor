<pre><?php 
require __DIR__. '/counter/counter.php';

// make one hit
makeHit();

// printing total hits
echo "Total Hit: " . getHit();

echo "<br>";

// add IP address if it doesn't exist in list
addUniqueIP();

// print unique visitors
echo "Unique Visitors: " .getUniqueVisitor();