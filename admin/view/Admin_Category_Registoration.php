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
                                    for ($cnt = 1; $cnt <= 25; $cnt++) {
                                    ?>
                                        <div>
                                            <a href="Admin_Category_Update.php">
                                            ・セットメニュー
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
        <form>
            <tr>
                <td align="center">
                    <input type="text" class="form-control w-50" placeholder="新しいカテゴリ名" aria-label="新しいカテゴリ名">
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">
                        <p class="h6">登録</p>
                    </button>
                </td>
            </tr>
        </form>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">登録の確認</h5>
                </div>
                <div class="modal-body text-muted">
                    [入力されたカテゴリ名]でテーブルに登録してもよろしいですか？
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
    </div>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>