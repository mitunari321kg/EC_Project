<?php
    if(!isset($_SESSION)){
        session_start();
    }
    ini_set('display_errors', 0);
    if (!isset($_SESSION['logged_in_emp_id'])){
        $_SESSION['result_msg'] = '<br><font color=RED>はじめにログインしてください。</font></br>';
        header('Location: Admin_Login.php');
    }
?>
<!------------------------------------------- header ------------------------------------------->
<header>
    <table width="100%">
        <tr>
            <td>
                <a href="Admin_Home.php">
                    <figure class="figure">
                        <img src="../../img/logo_M.png" class="figure-img img-fluid rounded" alt="谷原らぁめん" />
                    </figure>
                </a>
            </td>
        </tr>
        <tr>
            <td align="right">
                <?php echo('<TEST>id[' . $_SESSION['logged_in_emp_id'] . '] authority[' . $_SESSION['logged_in_emp_authority'] .']');?>
                <button type="submit" class="btn btn-dark" onclick="location.href='Admin_Login.php'">
                    <font color="white"><i class="bi bi-person-fill text-nowrap">ログアウト</i></font>
                </button>
            </td>
        </tr>
        <tr>
            <td width="100%">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse justify-content-center container-fluid " id="navbar2">
                        <div class="navbar-nav w-100 nav-justified">
                            <div class="col">
                                <a class="nav-item nav-link" href="Admin_Home.php">
                                    ホーム
                                </a>
                            </div>
                            <div class="col">
                                <a class="nav-item nav-link" href="Admin_Orders.php">
                                    注文状況一覧
                                </a>
                            </div>
                            <div class="col">
                                <a class="nav-item nav-link" href="Admin_Categories.php">
                                    カテゴリ一覧
                                </a>
                            </div>
                            <div class="col">
                                <a class="nav-item nav-link" href="../../view/Home.php">
                                    販売画面へ移動
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </td>
        </tr>
    </table>
</header>
<!------------------------------------------- header ------------------------------------------->