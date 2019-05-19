<?php
/*mysql_connect("localhost","root","00000000");//3sกำฃg|oaA?1
mysql_select_db("food");//?i?UกำyAaกLuaoกMeRARw|WoU
mysql_query("set names utf8");//กำNกMeRA3]?ขXutf8Ra|!!]?~กยaAaกLu???a!^ 
$result = array();*/
            //$postback=$event['postback'];
            //$data=$postback['data'];
           // $time=substr($data,5,3);
           // $way=substr($data,13,1);
$servername = "localhost:3306";
$username = "root";
$password = "00000000";
$dbname = "food";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
            #$fooddata="SELECT *  FROM  WHERE time1 LIKE l,d AND way LIKE c";
            $sql = "SELECT f1,f2,f3,f4 FROM ff123";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if($row['f1'] == "1"){
                        echo $row["f2"] ;
                    }
                    
                }
            }

            #$sql = "INSERT INTO ff123 (f1 ,f2,f3, f4) VALUES ('5','6','7','8')";
            #$conn->query($sql);
            #$conn->close();
         /*   mysql_query($fooddata,$mysql_connect);
            $num_rows = mysql_num_rows($result);*/

            /*while($num_rows>0)
            {
                echo $num_rows['f1'];
                        
                        $candidate = array(
                            'title' => {$num_rows['store_name']},
                            'text' =>{$num_rows['time1']},
                            'actions' => array(
                                array(
                                    'type' => 'massage',
                                    'label' => 'ฌÛร๖ฐTฎง',
                                    'text' => {$num_rows['qwer']},
                                    ),
                                ),
                            );
                        array_push($result, $candidate);*
                    
                
                $num_rows=$num_rows-1;
            }*/
            /*$client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
                            array(
                                'type' => 'text',
                                'text' => $message['text'],
                            ),
                            array(
                                'type' => 'template',
                                'altText' => '?ขXกำzกำAAE?U|C?u-1!G',
                                'template' => array(
                                    'type' => 'carousel',
                                    'columns' => $result,
                                ),
                            ),
                            array(
                                'type' => 'text',
                                'text' => '123',
                            )
                        ),
                    ));
                    break;*/
?>