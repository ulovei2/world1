<?php
function push_msg($group_id)
{  
    //$access_token = 'ZP+VUHsKMsZL45YWEXAeX7xIuij8//+W38Hqee/U2nyYzCF+v1fbJx78yNrsKAVFJJ7BcZfl1+0fkL66TzZV0FtBf/PpBbuqGmilCwK5+NE1TjEeHwV90c7SsIV6TfMlNlaGIcIzhIVkeRnBUrwygwdB04t89/1O/w1cDnyilFU=';
	$access_token = '/5c5U734kiVw59r250qNuR3YYRbUbxF/rXxwjko2ExOI3p75D8f8OclP9UwXwZf2XrW1Aq9WJGbtWOvpPWjTzhGkJVmv+Yrxo1+EJ3p6bLl7RB38TMDZ5ztajlMYr1FScx1Zogj7WMi5VWcHv+57AwdB04t89/1O/w1cDnyilFU=';
    $messages = [ 'type' => 'text', 
    'text' => 'ทดสอบ PUSH จ้า'
    ];
    $url = 'https://api.line.me/v2/bot/message/push';
    $data = ['to' => $group_id,'messages' => [$messages]];
    $post = json_encode($data);
    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);  
}
/*require('./db/connect-db.php');
$sql = "SELECT * FROM tbl_office";
$query = mysqli_query($conn,$sql);
while($obj = mysqli_fetch_array($query))
{
    echo $obj["office_name"]."<br>";

}*/
$group_id ="C890100d5c30d58e3d79a2b18a9d77b6a";
push_msg($group_id);

?>