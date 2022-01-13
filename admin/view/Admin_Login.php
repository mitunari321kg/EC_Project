<?php
session_start();
ini_set('display_errors', 0);
$result_msg = $_SESSION['result_msg'];
if(isset($_SESSION['logged_in_emp_id'])){
   session_unset();
}
?>

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
                <?php
                if(!empty($result_msg)){
                    echo $result_msg;
                    unset($_SESSION['result_msg']);
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <form action="../controller/Login.php" method="post">
                    <table class="w-50" align="center">
                        <tr>
                            <td>
                                <div class="form-floating mb-3 g-2">
                                    <input type="text" class="form-control" id="emp_id" placeholder="従業員IDを入力してください" name="emp_id" required>
                                    <label for="emp_id">従業員ID</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-floating mb-3 g-2">
                                    <input type="password" class="form-control" id="emp_password" placeholder="パスワードを入力してください" name="emp_password" required>
                                    <label for="emp_password">パスワード</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary w-25 btn-lg">ログイン</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</html>