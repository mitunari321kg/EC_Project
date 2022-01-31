<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <?php include 'frame/basic_style_info.php'; ?>
    <title>カートに入ったよ</title>
    <link href="css/inquiry.css" rel="stylesheet" />
</head>
<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="50%" align="center" class=" min-vw-50">
        <tr>
            <td height="80px" colspan="3">
                <p class="h2">
                    カートに入りました
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col">
                    <a class="nav-item nav-link" href="Products_02.php">
                        買い物を続ける
                    </a>
                </div>
            </td>
        <td>
        </td>
        <td>
            <div class="col">
            <a class="nav-item nav-link" href="Cart.php">
                    買い物を終える
            </a>
            </div>
        </td>

        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</meta>

</html>