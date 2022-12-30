<html>
<head>
    <title>後台接單系統</title>
</head>

<body>
<!-- 顯示訂單與桌號 -->
<span style="font-size:50px; position: absolute; left:10px; top:10px">第一桌訂單:</span>
<span style="font-size:30px; position: absolute; left:10px; top:100px">A套餐數量:</span>
<span style="font-size:30px; position: absolute; left:10px; top:150px">B套餐數量:</span>
<span style="font-size:30px; position: absolute; left:10px; top:200px">C套餐數量:</span>
<span style="font-size:30px; position: absolute; left:10px; top:250px">A飲料數量:</span>
<span style="font-size:30px; position: absolute; left:10px; top:300px">B飲料數量:</span>
<span style="font-size:30px; position: absolute; left:10px; top:350px">A甜點數量:</span>
<span style="font-size:30px; position: absolute; left:10px; top:400px">額外的要求:</span>

<span style="font-size:50px; position: absolute; left:400px; top:10px">第二桌訂單:</span>
<span style="font-size:30px; position: absolute; left:400px; top:100px">A套餐數量:</span>
<span style="font-size:30px; position: absolute; left:400px; top:150px">B套餐數量:</span>
<span style="font-size:30px; position: absolute; left:400px; top:200px">C套餐數量:</span>
<span style="font-size:30px; position: absolute; left:400px; top:250px">A飲料數量:</span>
<span style="font-size:30px; position: absolute; left:400px; top:300px">B飲料數量:</span>
<span style="font-size:30px; position: absolute; left:400px; top:350px">A甜點數量:</span>
<span style="font-size:30px; position: absolute; left:400px; top:400px">額外的要求:</span>

<span style="font-size:50px; position: absolute; left:800px; top:10px">第三桌訂單:</span>
<span style="font-size:30px; position: absolute; left:800px; top:100px">A套餐數量:</span>
<span style="font-size:30px; position: absolute; left:800px; top:150px">B套餐數量:</span>
<span style="font-size:30px; position: absolute; left:800px; top:200px">C套餐數量:</span>
<span style="font-size:30px; position: absolute; left:800px; top:250px">A飲料數量:</span>
<span style="font-size:30px; position: absolute; left:800px; top:300px">B飲料數量:</span>
<span style="font-size:30px; position: absolute; left:800px; top:350px">A甜點數量:</span>
<span style="font-size:30px; position: absolute; left:800px; top:400px">額外的要求:</span>

<span style="font-size:50px; position: absolute; left:1200px; top:10px">第四桌訂單:</span>
<span style="font-size:30px; position: absolute; left:1200px; top:100px">A套餐數量:</span>
<span style="font-size:30px; position: absolute; left:1200px; top:150px">B套餐數量:</span>
<span style="font-size:30px; position: absolute; left:1200px; top:200px">C套餐數量:</span>
<span style="font-size:30px; position: absolute; left:1200px; top:250px">A飲料數量:</span>
<span style="font-size:30px; position: absolute; left:1200px; top:300px">B飲料數量:</span>
<span style="font-size:30px; position: absolute; left:1200px; top:350px">A甜點數量:</span>
<span style="font-size:30px; position: absolute; left:1200px; top:400px">額外的要求:</span>

<a style="font-size:30px; position: absolute; left:10px; top:800px" href="http://localhost/NKNUHTML/waiter.php">跳轉到樓面管理系統</a>

<!-- 讀取menuData.json檔 -->
<?php
 $json = file_get_contents('menuData.json');
 $data = json_decode($json, JSON_UNESCAPED_UNICODE);
 header("Refresh:10");
?>



<?php

//紅色區塊提醒是否有訂單
if ($data[0]['remind'] == true) {
    echo '<div style="width: 50px; height: 50px; background-color: red; 
    position: absolute; left:280px; top:15px"></div>';
}
if ($data[1]['remind'] == true) {
    echo '<div style="width: 50px; height: 50px; background-color: red; 
    position: absolute; left:670px; top:15px"></div>';
}
if ($data[1]['remind'] == true) {
    echo '<div style="width: 50px; height: 50px; background-color: red; 
    position: absolute; left:1070px; top:15px"></div>';
}
if ($data[1]['remind'] == true) {
    echo '<div style="width: 50px; height: 50px; background-color: red; 
    position: absolute; left:1470px; top:15px"></div>';
}
?>

<!-- 顯示訂單內容 -->
<div style="font-size:30px; position: absolute; left:170px; top:100px">
<?php echo($data[0]['aMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:170px; top:150px">
<?php echo($data[0]['bMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:170px; top:200px">
<?php echo($data[0]['cMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:170px; top:250px">
<?php echo($data[0]['Drink1Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:170px; top:300px">
<?php echo($data[0]['Drink2Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:170px; top:350px">
<?php echo($data[0]['Desserts1Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:170px; top:400px">
<?php echo($data[0]['ExtraRequest']); ?>
</div>

<div style="font-size:30px; position: absolute; left:560px; top:100px">
<?php echo($data[1]['aMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:560px; top:150px">
<?php echo($data[1]['bMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:560px; top:200px">
<?php echo($data[1]['cMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:560px; top:250px">
<?php echo($data[1]['Drink1Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:560px; top:300px">
<?php echo($data[1]['Drink2Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:560px; top:350px">
<?php echo($data[1]['Desserts1Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:560px; top:400px">
<?php echo($data[1]['ExtraRequest']); ?>
</div>

<div style="font-size:30px; position: absolute; left:960px; top:100px">
<?php echo($data[2]['aMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:960px; top:150px">
<?php echo($data[2]['bMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:960px; top:200px">
<?php echo($data[2]['cMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:960px; top:250px">
<?php echo($data[2]['Drink1Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:960px; top:300px">
<?php echo($data[2]['Drink2Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:960px; top:350px">
<?php echo($data[2]['Desserts1Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:960px; top:400px">
<?php echo($data[2]['ExtraRequest']); ?>
</div>

<div style="font-size:30px; position: absolute; left:1360px; top:100px">
<?php echo($data[3]['aMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:1360px; top:150px">
<?php echo($data[3]['bMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:1360px; top:200px">
<?php echo($data[3]['cMainCount']); ?>
</div>
<div style="font-size:30px; position: absolute; left:1360px; top:250px">
<?php echo($data[3]['Drink1Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:1360px; top:300px">
<?php echo($data[3]['Drink2Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:1360px; top:350px">
<?php echo($data[3]['Desserts1Count']); ?>
</div>
<div style="font-size:30px; position: absolute; left:1360px; top:400px">
<?php echo($data[3]['ExtraRequest']); ?>
</div>




<form method="post">
  <input type="submit" name="clearOrder1" style="font-size:30px; position: absolute; left:10px; top:500px" value="清除第一桌訂單">
  <input type="submit" name="clearOrder2" style="font-size:30px; position: absolute; left:400px; top:500px" value="清除第二桌訂單">
  <input type="submit" name="clearOrder3" style="font-size:30px; position: absolute; left:800px; top:500px" value="清除第三桌訂單">
  <input type="submit" name="clearOrder4" style="font-size:30px; position: absolute; left:1200px; top:500px" value="清除第四桌訂單">
</form>



<?php
if (isset($_POST['clearOrder1'])) {
    $data[0]['aMainCount'] = "";
    $data[0]['bMainCount'] = "";
    $data[0]['cMainCount'] = "";
    $data[0]['Drink1Count'] = "";
    $data[0]['Drink2Count'] = "";
    $data[0]['Desserts1Count'] = "";
    $data[0]['ExtraRequest'] = "";
    $data[0]['remind'] = false;
}
if (isset($_POST['clearOrder2'])) {
    $data[1]['aMainCount'] = "";
    $data[1]['bMainCount'] = "";
    $data[1]['cMainCount'] = "";
    $data[1]['Drink1Count'] = "";
    $data[1]['Drink2Count'] = "";
    $data[1]['Desserts1Count'] = "";
    $data[1]['ExtraRequest'] = "";
    $data[1]['remind'] = false;
}
if (isset($_POST['clearOrder3'])) {
    $data[2]['aMainCount'] = "";
    $data[2]['bMainCount'] = "";
    $data[2]['cMainCount'] = "";
    $data[2]['Drink1Count'] = "";
    $data[2]['Drink2Count'] = "";
    $data[2]['Desserts1Count'] = "";
    $data[2]['ExtraRequest'] = "";
    $data[2]['remind'] = false;
}
if (isset($_POST['clearOrder4'])) {
    $data[3]['aMainCount'] = "";
    $data[3]['bMainCount'] = "";
    $data[3]['cMainCount'] = "";
    $data[3]['Drink1Count'] = "";
    $data[3]['Drink2Count'] = "";
    $data[3]['Desserts1Count'] = "";
    $data[3]['ExtraRequest'] = "";
    $data[3]['remind'] = false;
}
  // 將資料轉換回 JSON 格式
  $json = json_encode($data , JSON_UNESCAPED_UNICODE);

  // 寫入檔案
  file_put_contents('menuData.json', $json);
?>


</body>

</html>