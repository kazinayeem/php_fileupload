<pre>
<h1>
<?php 


$file = $_FILES["profile"];
$filesize = $file["size"];
$filename = $file["name"];
$tempname = $file["tmp_name"];
echo var_dump($_FILES["profile"]) ;
echo $filename;

echo "<br/>";


echo floor( $filesize/1000 ) ."kb" ;

echo "<br/>" ;

echo $tempname ;


move_uploaded_file($tempname ,"images/$filename");



?>
</h1>
</pre>

<div>

<?php

echo "<img  src='images/$filename'>"

?>

</div>