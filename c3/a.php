<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Diện tích</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .box-content{
        border: 1px solid black;
        width: 100%;
        height: 35px;
    }

    .main{
        min-height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .calc-form{
        width: 60%;
        height: 400px;
        margin: 0 auto;
        display: flex;
        align-items: center;
    }

    .tbl-calc{
        margin: 0 auto;
        width: 50%;
        height: 67%;    
    }

    .tbl-calc tr td .input-calc{
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 3px 3px;
    }

    .btn-submit{
        background-color: #0e5ce3;
        color: white;
        padding: 10px;
        border-radius: 5px 5px;
        border: none;
        margin-left: 5px;
    }

    a{
        text-decoration: none;
    }

    ul{
        list-style-type: none;
        display: inline-flex;
    }
    ul li{
        padding: 3px;
    }

    .form-title{
        margin-bottom: 10px;
    }

    .item-menu{
        border-right: 1px solid black;
        padding: 5px;
        color: black;
    }

    .active{
        font-weight: bold;
    }
</style>
<body>
    <div>
        <div class="main">
            <form method="POST" class="calc-form">
                <table class="tbl-calc">
                    <caption class="form-title"><h3>Tính diện tích hình chữ nhật</h3></caption>
                    <tbody>
                        <tr>
                            <td><label for="so_a">Chiều dài</label></td>
                            <td><input class="input-calc" type="text" name="so_a" id="so_a"></td>
                        </tr>
                        <tr>
                            <td><label for="so_b">Chiều rộng</label></td>
                            <td><input class="input-calc" type="text" name="so_b" id="so_b"></td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="btn-submit" name="dien_tich">Diện tích</button></td>
                            <?php
                                $dien_tich = '';
                                if (isset($_POST['dien_tich'])) {
                                    $so_a = isset($_POST['so_a']) ? $_POST['so_a'] : 0;
                                    $so_b = isset($_POST['so_b']) ? $_POST['so_b'] : 0;
                                    $dien_tich = $so_a * $so_b;
                                }

                                ?>
                            <td><input class="input-calc" type="text" name="kq_dien_tich" id="kq_dien_tich" disabled value="<?php echo $dien_tich ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="input-calc"  style="border: 1px solid yellow" type="text" name="msg" id="msg" disabled value="Thông báo lỗi nếu có"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
