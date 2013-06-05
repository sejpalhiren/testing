<?php
	//print_R(phpinfo());
	
	function __autoload($classname) 
    {
        $filename = 'connection.class.php';
        $file = 'lib/'.$filename;

        if (file_exists($file) == false)
        {
            return false;
        }
        include_once($file);
    }
	
	$obj = new connection();
	$sql    = 'select * from test1';
	$result = mysql_query($sql, $obj->con);
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		echo $row['id'].'-'.$row['name']."<br/>";
	}
	
?>
