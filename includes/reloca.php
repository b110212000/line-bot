<?php
				//$str = $message['id'];
include("lodb.php"); 
		$address = $message['address'];
		$latitude = $message['latitude'];
		$longitude = $message['longitude'];
					//$file = fopen("test.txt","w+"); //開啟檔案
					//fwrite($file,$str);*/
		/*$qq=;

echo $qq;	*/	
print_r($location);
//$location=array();	
if (strstr($address,$row["address"])){
	//$location=array($row["id"],$row["name"],$row["address"]);

		$client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', // 訊息類型 (文字)
                'text' => $location[1] // 回復訊息
            )
        )
    ));
		}
?>