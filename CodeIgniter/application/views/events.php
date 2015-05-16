<style>
.event .panel-body {
  background: #BBDEFB;
  border: 1px solid #448AFF;
  padding:0;
  margin:0;
 
}
.event .panel-body > div {
  padding: 0 10px;
}
.event .panel-body .rsvp {
  border-left: none;
  padding: 0;
  text-align: center;
  position: relative;
  background: #64B5F6;
  color: white;
  
}

.event .rsvp > div {
  font-size: 12px;
  position: absolute;
  bottom: 0;
  background: #42A5F5;
  width: 100%;
}

.event .rsvp p {
  font-size: 2em;
  display: block;
  position:relative;
  top:17%;
  margin-bottom:2px;
}
.event .rsvp i:last-of-type{
    font-size:1.5em;
    margin-top:-23px;
}




}
</style>
</br>
</br>
</br>

<?php
$servername = "91.121.5.88";
$username = "mc_pxl";
$password = "1wrq97gb";
$dbname = "mc_pxl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn ->connect_error){
	die("Connection failed: " .$conn ->connect_error);
}

$sql = "SELECT id, title, description, date, location FROM events ORDER BY date";
$result  = $conn -> query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo"<div class='panel panel-default event'>";
		echo"<div class='panel-body'>";
		echo"<div class='rsvp col-xs-2 col-sm-2'>";
		echo"<p>".$row["date"]."</p>";
		echo" </div>";
		echo"<div class='info col-xs-8 col-sm-7'>";		
		echo"<a href='http://localhost/WebAdvTED/CodeIgniter/index.php/events_volledig?id=$row[id]'><h3>".$row["title"]."</h3></a>";		
		echo"</hr>";
		echo"</br> </div> </div> </div> ";
	}
}

$conn->close();
?>

