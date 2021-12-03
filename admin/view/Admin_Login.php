
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <title>従業員ログイン</title>
</head>
<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Login_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    従業員ログイン
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <table class="w-50" align="center">
                    <tr>
                        <td>
                            <div class="form-floating mb-3 g-2">
                                <input type="text" class="form-control" id="admin_id" placeholder="従業員IDを入力してください" required>
                                <label for="admin_id">従業員ID</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-floating mb-3 g-2">
                                <input type="password" class="form-control" id="admin_password" placeholder="パスワードを入力してください" required>
                                <label for="admin_password">パスワード</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn btn-primary w-25 btn-lg">ログイン</button>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</html>