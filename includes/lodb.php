<?php
$servername = "localhost:3306";
$username = "root";
$password = "12345678";
$dbname = "store";
$location=array();
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
            #$fooddata="SELECT *  FROM  WHERE time1 LIKE l,d AND way LIKE c";
            $sql = "SELECT * FROM `use`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
					print_r($row);
					$location=$row;
					//print_r($row['address']);
					//if (strstr('我家虎尾鎮',$row["address"]))
					//{
						//$location=array($row["id"],$row["name"],$row["address"]);
					//}					
					//echo $row["address"];
				/*if (strstr($address,$row["address"]))
				{
					echo $row["address"];
				}*/

				
				
                    //if($row['q1'] == "1"){
                        //echo $row["e1"] ;
						//$kkk=array($row["q1"],$row["w1"],$row["e1"],$row["r1"]);*/

						/*$location=array($row["id"],$row["name"],$row["address"]);
						echo $location[];*/
                    }
                    
                }
            

?>