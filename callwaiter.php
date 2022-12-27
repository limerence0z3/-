<html>

<head>
    <meta charset="utf8">
    <title>呼叫服務</title>
</head>

<body>
    <center>
        <p>
            <font size="50">呼叫服務生
        </p>

        <form method="POST">
            <select name="dropdown" style='font-size:50px;'>
                <option>請先選擇桌號再送出</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            </p>
            <input type="submit" ; style="font-size:50px;" ; value="送出">
        </form>
        <?php

        $selectedValue = array_key_exists("dropdown", $_POST) ? $_POST["dropdown"] : null;
        $json = file_get_contents('data.json');
        $data = json_decode($json, true);
        if ($selectedValue == 1) {
            $data[0]['status'] = true;
        }
        if ($selectedValue == 2) {
            $data[1]['status'] = true;
        }
        if ($selectedValue == 3) {
            $data[2]['status'] = true;
        }
        if ($selectedValue == 4) {
            $data[3]['status'] = true;
        }
        // 將陣列轉換為 JSON 字串
        $json = json_encode($data);

        // 將 JSON 字串寫入檔案
        file_put_contents('data.json', $json);

        ?>

    </center>

</body>

</html>