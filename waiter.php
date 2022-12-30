<html>

<head>
    <title>服務生介面</title>
    <meta charset="utf8">
</head>


<body>
    <form method="POST">
        <select name="tableSelect" style='font-size:30px; position: absolute; top:20px;right:200;'>
            <option>請選擇要處理的桌號</option>
            <option>第一桌</option>
            <option>第二桌</option>
            <option>第三桌</option>
            <option>第四桌</option>
        </select>
        </p>
        <select name="deleteOptionSelect" style='font-size:30px; position: absolute; top:80px;right:200;'>
            <option>請選擇要清除的選項</option>
            <option>呼叫服務生</option>
            <option>乾淨</option>
            <option>髒亂</option>
            <option>使用中</option>
        </select>
        </p>
        <select name="displayOptionSelect" style='font-size:30px; position: absolute; top:140px;right:200;'>
            <option>請選擇要顯示的選項</option>
            <option>呼叫服務生</option>
            <option>乾淨</option>
            <option>髒亂</option>
            <option>使用中</option>
        </select>
        </p>
        <input type="submit" ; style="font-size:30px; position: absolute; top:200px;right:300;" ; value="送出">
    </form>

    <a style="font-size:30px; position: absolute; top:600px;right:250;" href="http://localhost/NKNUHTML/menu.php">跳轉到訂單系統</a>

    <?php
    header("Refresh:10");

    //清除選項
    $selectedTableValue = array_key_exists("tableSelect", $_POST) ? $_POST["tableSelect"] : null;
    $selectedDeleteOptionValue = array_key_exists("deleteOptionSelect", $_POST) ? $_POST["deleteOptionSelect"] : null;
    $selectedDisplayOptionValue = array_key_exists("displayOptionSelect", $_POST) ? $_POST["displayOptionSelect"] : null;

    $json = file_get_contents('data.json');
    $data = json_decode($json, true);

    //清除呼叫服務生
    if ($selectedTableValue == "第一桌" and $selectedDeleteOptionValue == "呼叫服務生") {
        $data[0]['status'] = false;
    }
    if ($selectedTableValue == "第二桌" and $selectedDeleteOptionValue == "呼叫服務生") {
        $data[1]['status'] = false;
    }
    if ($selectedTableValue == "第三桌" and $selectedDeleteOptionValue == "呼叫服務生") {
        $data[2]['status'] = false;
    }
    if ($selectedTableValue == "第四桌" and $selectedDeleteOptionValue == "呼叫服務生") {
        $data[3]['status'] = false;
    }

    //顯示呼叫服務生
    if ($selectedTableValue == "第一桌" and $selectedDisplayOptionValue == "呼叫服務生") {
        $data[0]['status'] = true;
    }
    if ($selectedTableValue == "第二桌" and $selectedDisplayOptionValue == "呼叫服務生") {
        $data[1]['status'] = true;
    }
    if ($selectedTableValue == "第三桌" and $selectedDisplayOptionValue == "呼叫服務生") {
        $data[2]['status'] = true;
    }
    if ($selectedTableValue == "第四桌" and $selectedDisplayOptionValue == "呼叫服務生") {
        $data[3]['status'] = true;
    }



    //清除乾淨
    if ($selectedTableValue == "第一桌" and $selectedDeleteOptionValue == "乾淨") {
        $data[0]['clear'] = false;
    }
    if ($selectedTableValue == "第二桌" and $selectedDeleteOptionValue == "乾淨") {
        $data[1]['clear'] = false;
    }
    if ($selectedTableValue == "第三桌" and $selectedDeleteOptionValue == "乾淨") {
        $data[2]['clear'] = false;
    }
    if ($selectedTableValue == "第四桌" and $selectedDeleteOptionValue == "乾淨") {
        $data[3]['clear'] = false;
    }

    //顯示乾淨
    if ($selectedTableValue == "第一桌" and $selectedDisplayOptionValue == "乾淨") {
        $data[0]['clear'] = true;
    }
    if ($selectedTableValue == "第二桌" and $selectedDisplayOptionValue == "乾淨") {
        $data[1]['clear'] = true;
    }
    if ($selectedTableValue == "第三桌" and $selectedDisplayOptionValue == "乾淨") {
        $data[2]['clear'] = true;
    }
    if ($selectedTableValue == "第四桌" and $selectedDisplayOptionValue == "乾淨") {
        $data[3]['clear'] = true;
    }

    //清除髒亂
    if ($selectedTableValue == "第一桌" and $selectedDeleteOptionValue == "髒亂") {
        $data[0]['clear'] = true;
    }
    if ($selectedTableValue == "第二桌" and $selectedDeleteOptionValue == "髒亂") {
        $data[1]['clear'] = true;
    }
    if ($selectedTableValue == "第三桌" and $selectedDeleteOptionValue == "髒亂") {
        $data[2]['clear'] = true;
    }
    if ($selectedTableValue == "第四桌" and $selectedDeleteOptionValue == "髒亂") {
        $data[3]['clear'] = true;
    }

    //顯示髒亂
    if ($selectedTableValue == "第一桌" and $selectedDisplayOptionValue == "髒亂") {
        $data[0]['clear'] = false;
    }
    if ($selectedTableValue == "第二桌" and $selectedDisplayOptionValue == "髒亂") {
        $data[1]['clear'] = false;
    }
    if ($selectedTableValue == "第三桌" and $selectedDisplayOptionValue == "髒亂") {
        $data[2]['clear'] = false;
    }
    if ($selectedTableValue == "第四桌" and $selectedDisplayOptionValue == "髒亂") {
        $data[3]['clear'] = false;
    }

    //清除使用中
    if ($selectedTableValue == "第一桌" and $selectedDeleteOptionValue == "使用中") {
        $data[0]['using'] = false;
    }
    if ($selectedTableValue == "第二桌" and $selectedDeleteOptionValue == "使用中") {
        $data[1]['using'] = false;
    }
    if ($selectedTableValue == "第三桌" and $selectedDeleteOptionValue == "使用中") {
        $data[2]['using'] = false;
    }
    if ($selectedTableValue == "第四桌" and $selectedDeleteOptionValue == "使用中") {
        $data[3]['using'] = false;
    }

    //顯示使用中
    if ($selectedTableValue == "第一桌" and $selectedDisplayOptionValue == "使用中") {
        $data[0]['using'] = true;
    }
    if ($selectedTableValue == "第二桌" and $selectedDisplayOptionValue == "使用中") {
        $data[1]['using'] = true;
    }
    if ($selectedTableValue == "第三桌" and $selectedDisplayOptionValue == "使用中") {
        $data[2]['using'] = true;
    }
    if ($selectedTableValue == "第四桌" and $selectedDisplayOptionValue == "使用中") {
        $data[3]['using'] = true;
    }


    // 將陣列轉換為 JSON 字串
    $json = json_encode($data);

    // 將 JSON 字串寫入檔案
    file_put_contents('data.json', $json);
    ?>

    <?php
    //呼叫服務生
    $callWaiterOne = '<span id = "callWaiterOne"; style="color: white ;font-size:50px; background-color:red; position: absolute; right:1200;top: 100px;">呼叫服務生!</span>';
    $callWaiterTwo = '<span id = "callWaiterTwo"; style=" color: white; font-size:50px; background-color:red; position: absolute; right:1200;top: 350px";>呼叫服務生!</span>';
    $callWaiterThree = '<span id = "callWaiterThree"; style=" color: white; font-size:50px; background-color:red; position: absolute; right:1200;top: 600px ";>呼叫服務生!</span>';
    $callWaiterFour = '<span id = "callWaiterFour"; style=" color: white; font-size:50px; background-color:red; position: absolute; right:1200;top: 850px ";>呼叫服務生!</span>';
    if ($data[0]['status'] == true) {
        echo $callWaiterOne;
    }
    if ($data[1]['status'] == true) {
        echo $callWaiterTwo;
    }
    if ($data[2]['status'] == true) {
        echo $callWaiterThree;
    }
    if ($data[3]['status'] == true) {
        echo $callWaiterFour;
    }

    //乾淨
    if ($data[0]['clear'] == true) {
        echo ' <div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(0, 150, 50);
        border-radius: 4px; font-size: 30; position: absolute; top:10px;right:600;">
            <span style="color: rgb(255, 255, 255);">乾淨</span>
        </div>';
    }
    if ($data[1]['clear'] == true) {
        echo ' <div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(0, 150, 50);
        border-radius: 4px; font-size: 30; position: absolute; top: 250px;right:600;">
            <span style="color: rgb(255, 255, 255);">乾淨</span>
        </div>';
    }
    if ($data[2]['clear'] == true) {
        echo ' <div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(0, 150, 50);
        border-radius: 4px; font-size: 30; position: absolute; top: 500px;right:600;">
            <span style="color: rgb(255, 255, 255);">乾淨</span>
        </div>';
    }
    if ($data[3]['clear'] == true) {
        echo ' <div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(0, 150, 50);
        border-radius: 4px; font-size: 30; position: absolute; top: 750px;right:600">
            <span style="color: rgb(255, 255, 255);">乾淨</span>
        </div>';
    }

    //髒亂
    if ($data[0]['clear'] == false) {
        echo ' <div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(100, 0, 0);
        border-radius: 4px; font-size: 30; position: absolute;top: 80px;right:600;">
        <span style="color: rgb(255, 255, 255);">髒亂</span>
    </div>';
    }
    if ($data[1]['clear'] == false) {
        echo '<div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(100, 0, 0);
        border-radius: 4px; font-size: 30; position: absolute; top: 320px;right:600;">
            <span style="color: rgb(255, 255, 255);">髒亂</span>
        </div>';
    }
    if ($data[2]['clear'] == false) {
        echo ' <div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(100, 0, 0);
        border-radius: 4px; font-size: 30; position: absolute; top: 570px;right:600;">
        <span style="color: rgb(255, 255, 255);">髒亂</span>
    </div>';
    }
    if ($data[3]['clear'] == false) {
        echo ' <div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(100, 0, 0);
        border-radius: 4px; font-size: 30; position: absolute; top: 820px;right:600">
        <span style="color: rgb(255, 255, 255);">髒亂</span>
    </div>';
    }

    //使用中
    if ($data[0]['using'] == true) {
        echo '<div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(0, 30, 150);
        border-radius: 4px; font-size: 30; position: absolute; top: 150px;right:600;">
        <span style="color: rgb(255, 255, 255);">使用中</span>
    </div>';
    }
    if ($data[1]['using'] == true) {
        echo '<div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(0, 30, 150);
        border-radius: 4px; font-size: 30; position: absolute; top: 390px;right:600;">
        <span style="color: rgb(255, 255, 255);">使用中</span>
    </div>';
    }
    if ($data[2]['using'] == true) {
        echo '<div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(0, 30, 150);
        border-radius: 4px; font-size: 30; position: absolute; top: 640px;right:600">
        <span style="color: rgb(255, 255, 255);">使用中</span>
    </div>';
    }
    if ($data[3]['using'] == true) {
        echo '<div style="border-width: 30px ; width: 100px; height: 40px ; padding: 10px; text-align: center; background-color: rgb(0, 30, 150);
        border-radius: 4px; font-size: 30; position: absolute; top: 890px;right:600">
        <span style="color: rgb(255, 255, 255);">使用中</span>
    </div>';
    }



    ?>

    <div style="border-width: 30px ; width: 300px; height: 100px ; padding: 50px; text-align: center; background-color: rgb(0, 0, 0);border-radius: 4px; 
    font-size: 80; position: absolute; top:10px; right:750  ">
        <span style="color: rgb(255, 255, 255);">第一桌</span>
    </div>
    <div style="border-width: 30px ; width: 300px; height: 100px ; padding: 50px; text-align: center; background-color: rgb(0, 0, 0);border-radius: 4px; 
    font-size: 80; position: absolute; top: 250px; right:750 ">
        <span style="color: rgb(255, 255, 255);">第二桌</span>
    </div>
    <div style="border-width: 30px ; width: 300px; height: 100px ; padding: 50px; text-align: center; background-color: rgb(0, 0, 0);border-radius: 4px; 
    font-size: 80; position: absolute; top: 500px; right:750 ">
        <span style="color: rgb(255, 255, 255);">第三桌</span>
    </div>
    <div style="border-width: 30px ; width: 300px; height: 100px ; padding: 50px; text-align: center; background-color: rgb(0, 0, 0);border-radius: 4px; 
    font-size: 80; position: absolute; top: 750px; right:750 ">
        <span style="color: rgb(255, 255, 255);">第四桌</span>


</body>

</html>