<body>
<form method="get" action="#">
   data1:<input name="x">
   data2:<input name="y">
<input type="submit" name="submit" value="test">
</form>
</body>
<?php
 if(!empty($_REQUEST))
 {
     $data1= $_REQUEST['x'];
     if($data1>0)
     {
         echo $data1;
     }

 else{
     echo "only use +ve";
 

}
 } 

?>