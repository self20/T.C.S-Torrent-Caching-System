
<?php								
$db = new PDO('mysql:host=localhost;dbname=databasename', 'root', 'password');
$filesfetch=$db->query("SELECT count(*) as count FROM ElBradoscewlscript ");
?>

<?php while($row =$filesfetch->fetch()) { ?><strong><?php echo($row['count']) ?> torrents.</strong><?php }?>
