<?php
    ini_set('display_errors', 0);
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
<!------------------------------------------- header ------------------------------------------->
<header>
    <table width="100%">
        <tr>
            <td>
                <a href="Home.php">
                    <figure class="figure">
                        <img src="../img/logo_M.png" class="figure-img img-fluid rounded" alt="谷原らぁめん" />
                    </figure>
                </a>
            </td>
        </tr>
        <tr>
            <td align="right">
                <nav class="navbar navbar-expand navbar-light bg-white">
                    <?php
                    if(isset($_SESSION['logged_in_last_name'])){
                    ?>
                    <p class="text-nowrap">
                        <?php echo $_SESSION['logged_in_last_name'];?>さんようこそ
                    </p>
                    <?php 
                    }    
                    ?>
                    <div class="navbar-collapse d-flex justify-content-end" id="navbar1">
                        <ul class="navbar-nav ml-auto">
                            <?php 
                            if (isset($_SESSION['logged_in_id'])){
                            ?>
                            <button type="submit" class="btn btn-danger" onclick="location.href='../controller/Logout.php'">
                                <font color="white"><i class="bi bi-person-fill text-nowrap">ログアウト</i></font>
                            </button>
                            <button type="submit" class="btn btn-success" onclick="location.href='Mypage.php'">
                                <font color="white"><i class="bi bi-person-fill text-nowrap">マイページ</i></font>
                            </button>
                            <?php
                            } else {
                            ?>
                            <button type="submit" class="btn btn-primary" onclick="location.href='Login.php'">
                                <font color="white"><i class="bi bi-person-fill text-nowrap">ログイン</i></font>
                            </button>
                            <?php
                            }
                            ?>
                            <button type="submit" class="nav-item btn btn-dark text-nowrap" onclick="location.href='Cart.php'">
                                <font color="white"><i class="bi bi-cart-fill">買い物かごを見る</i></font>
                            </button>
                        </ul>
                    </div>
                </nav>
            </td>
        </tr>
        <tr>
            <td width="100%">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse justify-content-center container-fluid " id="navbar2">
                        <div class="navbar-nav w-100 nav-justified">
                            <div class="col">
                                <a class="nav-item nav-link" href="Home.php">
                                    ホーム
                                </a>
                            </div>
                            <div class="col">
                                <a class="nav-item nav-link" href="Products_02.php">
                                    商品一覧
                                </a>
                            </div>
                            <div class="col">
                                <a class="nav-item nav-link" href="allergy.php">
                                    アレルギー情報
                                </a>
                            </div>
                            <div class="col">
                                <a class="nav-item nav-link" href="contact.php">
                                    お問い合わせ
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