<?php
include '../controller/Categorys.php';
$controll = new Categorys();
$result = $controll->get_categorys();
$cnt = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>


    <title>カテゴリ登録・更新・削除</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    カテゴリ登録・更新・削除
                </p>
            </td>
        </tr>
        <tr>
            <td align="center">
                <p class="h6">
                    <label class="text-muted">
                        テーブルに登録されているカテゴリが一覧として表示されます。
                    </label>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <form>
                    <div style="overflow-x:xcroll;">
                        <table class="table border w-75" align="center">
                            <tr>
                                <td class="min-vw-25">
                                    <?php
                                    foreach ($result as $row) {
                                    ?>
                                        <div align="left">
                                            <a href="Admin_Category_Update.php">
                                                ・<?php echo ($row['category_name']) ?>
                                            </a>
                                        </div>
                                        <?php
                                        if ($cnt % 5 == 0) {
                                            echo '</td><td class="min-vw-25">';
                                        }
                                        ?>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </td>
        </tr>
        <form onsubmit="return open_modal()" action="#" method="post">
            <tr>
                <td align="center">
                    <div class="form-floating mb-3 g-2 w-50">
                        <input type="text" class="form-control" id="input_category_name" placeholder="登録するカテゴリ名を入力してください" required oninput="check_category_name()">
                        <label for="input_category_name">カテゴリ名</label>
                    </div>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary w-50" id="modal_button">
                        <p class="h6">登録</p>
                    </button>
                </td>
            </tr>
        </form>
    </table>
    <!-- Modal -->

    <div class="modal fade" id="Registoration_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="../controller/Categorys.php" method="post">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">登録の確認</h5>
                    </div>
                    <div class="modal-body text-muted">
                        <p id="modal_input_category_name"></p>
                    </div>
                    <div class="modal-footer">
                        <table width="100%">
                            <tr>
                                <td align="left">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">入力画面に戻る</button>
                                </td>
                                <td align="right">
                                    <button type="button" class="btn btn-primary">登録</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <input type="hidden" name="checked_input_category_name" id="checked_input_category_name" />
        </form>
    </div>

    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
    <script src="script/category_registoration.js"></script>
</body>

</html>