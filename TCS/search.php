<?php 
	$mysql_hostname = "localhost"; //here's where you put the host
	$mysql_user     = "root"; //the db username
	$mysql_password = "password";//the db password
	$mysql_database = "databasename";//the databasename goes here

    $pdo = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_database", $mysql_user, $mysql_password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

$search=$_POST['search'];
$query = $pdo->prepare("select * from ElBradoscewlscript where name LIKE '%$search%'  LIMIT 0 , 100");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();


    /*Heres where you add the head & header*/
echo'<br><br>';



         if (!$query->rowCount() == 0) {
		 		echo "<span class='txt1'>Search found:</span><br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";	
                echo '<tr class="firstr">
			<th class="width100perc nopad">torrent name</th>

			<th class="center">Hash</th>
			<th class="center">size</th>
        </tr>';				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['name'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['info_hash'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['size'];
				echo "</td></tr>";				
            }
				echo "</table>";		
        } else {
            echo '<span class="txt1">Nothing found</span>';
        }
?>
