
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <title>従業員ホーム</title>
</head>
<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%" class="table">
        <?php
        if($_SESSION['logined_authority'] >= 1) {
        ?>
        <tr>
            <br>
            <td align="left" colspan="2" class="w-100">
                <p class="h5">
                    一般従業員向け
                </p>
            </td>
        </tr>
        <tr class="border-white">
            <td class="w-50">
                <a href="Admin_Orders.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">注文状況一覧</p></button>
                </a>
            </td>
            <td class="w-50">
                <a href="Admin_Categorys.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">カテゴリ一覧</p></button>
                </a>
            </td>
        </tr>
        <?php
        }
        if($_SESSION['logined_authority'] >= 2){
        ?>
        <tr>
            <td align="left" colspan="2" class="w-100">
                <br>
                <p class="h5">
                    管理者向け
                </p>
            </td>
        </tr>
        <tr class="border-white">
            <td>
                <a href="Admin_Product_Registoration.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">商品登録</p></button>
                </a>
            </td>
            <td>
                <a href="Admin_Products.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">商品情報更新・削除</p></button>
                </a>
            </td>
        </tr>
        <tr class="border-white"> 
            <td>
                <a href="Admin_Category_Registoration.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">カテゴリ登録・更新・削除</p></button>
                </a>
            </td>
            <td>
                <a href="Admin_Employees.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">従業員一覧</p></button>
                </a>
            </td>
        </tr>
        <tr class="border-white">
            <td>
                <a href="Admin_Employee_Registoration.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">従業員登録</p></button>
                </a>
            </td>
            <td>
                <a href="Admin_Earings.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">売上一覧</p></button>
                </a>
            </td>
        </tr>
        <tr class="border-white">
            <td>
                <a href="Admin_Users.php">
                    <button class="btn btn-primary w-75" type="button"><p class="h6">登録者情報一覧</p></button>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</html>