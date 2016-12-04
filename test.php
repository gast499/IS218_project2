<html>
	<head>
	</head>
	<body>
<?php
//require('htmlelementcreator.php');
//include_once('csvexceptionhandling.php');
//include_once('curl.php');

include('bootstrap.php');

echo '<h3>Using Autoloading</h3>';

echo '<b>Car Table:</b><br>';
//html elements

$elements = array(
    "Model" => array('Toyota', 'Tesla', 'Ferrari'), 
    "Type" => array('A' , 'B' , 'C'),
    "Price" => array('10k' , '20k' , '30k')
);
$vals = array_values($elements);
$headers = True;
$h = new HTMLElementCreator();
$h->makeTable($elements, $headers);

echo '<br><b>Link Creator:</b>';
echo '<br>Click here to go to Google: ';
$h->link('GOOGLE','https://www.google.com/');

echo '<br><br><b>My Favorite Foods:</b><br>';
$food = array('Pizza','Cookie','Cereal','Ice Cream');
$h->makeList($food);

//files
echo '<br><b>Files:</b><br>';
echo '<br>Writing some text to test.txt<br>';
$filehandler = new FileExceptionHandling();
if ($filehandler->exists("test.txt")){
  if ($filehandler->canWrite("test.txt")){
    $filehandler->write("test.txt", "This is Test File");
  }
}

//curl
$c = new CURL();
echo '<br><b>cURL:</b><br>';
echo '<br>The contents of the test.txt file is: ';
echo $c->httpGet("https://web.njit.edu/~tmh27/is218/Project2/test.txt");
//echo 'HIT';
?>
	</body>
</html>