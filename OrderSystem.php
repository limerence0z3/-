<html>

<head>
    <title>訂單系統Order System</title>
</head>
<style>
    body {
        zoom: 1.3;
    }
</style>

<body>
    <b>餐廳菜單Menu</b>


    <div>~~~~~~~~~~~~~~~~~~~~~~~</div>
    <b><label>~主食Main Dishes~</label></b>
    <br>
    
        <form method="post">
        <b><label><div style="font-size:20px">A套餐數量</label></b>
            <select name="aMainCount" style='font-size:20px;'>
                <option></option>
                <option>x1</option>
                <option>x2</option>
                <option>x3</option>
                <option>x4</option>
            </select>
            <br>
            <b><label><div style="font-size:20px">B套餐數量</label></b>
            <select name="bMainCount" style='font-size:20px;'>
                <option></option>
                <option>x1</option>
                <option>x2</option>
                <option>x3</option>
                <option>x4</option>
            </select>
            <br>
            <b><label><div style="font-size:20px">C套餐數量</label></b>
            <select name="cMainCount" style='font-size:20px;'>
                <option></option>
                <option>x1</option>
                <option>x2</option>
                <option>x3</option>
                <option>x4</option>
            </select>
            <br>
            <br>
            <b><label>~飲料Drink~</label></b>
            <b><label><div style="font-size:20px">A飲料數量</label></b>
            <select name="aDrinkCount" style='font-size:20px;'>
                <option></option>
                <option>x1</option>
                <option>x2</option>
                <option>x3</option>
                <option>x4</option>
            </select>
            <br>
            <b><label><div style="font-size:20px">B飲料數量</label></b>
            <select name="bDrinkCount" style='font-size:20px;'>
                <option></option>
                <option>x1</option>
                <option>x2</option>
                <option>x3</option>
                <option>x4</option>
            </select>
            <br>
            <br>

            <b><label>~甜點Desserts~</label></b>
            <br>
            <b><label><div style="font-size:20px">A甜點數量</label></b>
            <select name="aDessertsCount" style='font-size:20px;' >
                <option></option>
                <option>x1</option>
                <option>x2</option>
                <option>x3</option>
                <option>x4</option>
            </select>
            <p>
                <b><label>額外要求Extra Request:
                        <br>
                        <input type="text" name="extraRequest" id="extraRequest"></label></b>
                <br>
                <b><label>
                        <div>訂單桌號TableNumber:
                    </label></b>
                <br>
                <select name="tableNumber" style='font-size:30px;'>
                    <option>訂單桌號</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                <br>
                <br>
        <div>~~~~~~~~~~~~~~~~~~~~~~~</div>
        <input type="submit" ; style="font-size:35px;" ; value="送出訂單">
        </form>

        <?php

        //主食數量
        $aMainCount = array_key_exists("aMainCount", $_POST) ? $_POST["aMainCount"] : null;
        $bMainCount = array_key_exists("bMainCount", $_POST) ? $_POST["bMainCount"] : null;
        $cMainCount = array_key_exists("cMainCount", $_POST) ? $_POST["cMainCount"] : null;

        //飲料
        //飲料1
        $aDrinkCount = array_key_exists("aDrinkCount", $_POST) ? $_POST["aDrinkCount"] : null;
        $bDrinkCount = array_key_exists("bDrinkCount", $_POST) ? $_POST["bDrinkCount"] : null;

        //甜點
        //甜點1
        $aDessertsCount = array_key_exists("aDessertsCount", $_POST) ? $_POST["aDessertsCount"] : null;

        //額外要求
        $extraRequest = array_key_exists("extraRequest", $_POST) ? $_POST["extraRequest"] : null;

        //訂單桌號
        $tableNumber = array_key_exists("tableNumber", $_POST) ? $_POST["tableNumber"] : null;

        // 進行處理
        $json = file_get_contents('menuData.json');
        $data = json_decode($json, true);
        if ($tableNumber == 1) {
            $data[0]['aMainCount'] = $aMainCount;
            $data[0]['bMainCount'] = $bMainCount;
            $data[0]['cMainCount'] = $cMainCount;
            $data[0]['Drink1Count'] = $aDrinkCount;
            $data[0]['Drink2Count'] = $bDrinkCount;
            $data[0]['Desserts1Count'] = $aDessertsCount;
            $data[0]['ExtraRequest'] = $extraRequest;
            $data[0]['remind'] = true;
        }
        if ($tableNumber == 2) {
            $data[1]['aMainCount'] = $aMainCount;
            $data[1]['bMainCount'] = $bMainCount;
            $data[1]['cMainCount'] = $cMainCount;
            $data[1]['Drink1Count'] = $aDrinkCount;
            $data[1]['Drink2Count'] = $bDrinkCount;
            $data[1]['Desserts1Count'] = $aDessertsCount;
            $data[1]['ExtraRequest'] = $extraRequest;
            $data[1]['remind'] = true;
        }
        if ($tableNumber == 3) {
            $data[2]['aMainCount'] = $aMainCount;
            $data[2]['bMainCount'] = $bMainCount;
            $data[2]['cMainCount'] = $cMainCount;
            $data[2]['Drink1Count'] = $aDrinkCount;
            $data[2]['Drink2Count'] = $bDrinkCount;
            $data[2]['Desserts1Count'] = $aDessertsCount;
            $data[2]['ExtraRequest'] = $extraRequest;
            $data[2]['remind'] = true;
        }
        if ($tableNumber == 4) {
            $data[3]['aMainCount'] = $aMainCount;
            $data[3]['bMainCount'] = $bMainCount;
            $data[3]['cMainCount'] = $cMainCount;
            $data[3]['Drink1Count'] = $aDrinkCount;
            $data[3]['Drink2Count'] = $bDrinkCount;
            $data[3]['Desserts1Count'] = $aDessertsCount;
            $data[3]['ExtraRequest'] = $extraRequest;
            $data[3]['remind'] = true;
        }
            // 將陣列轉換為 JSON 字串
        $json = json_encode($data, JSON_UNESCAPED_UNICODE);
        // 將 JSON 字串寫入檔案
        file_put_contents('menuData.json', $json);
        ?>
</body>

</html>