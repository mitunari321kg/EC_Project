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
                    カテゴリ更新・削除
                </p>
            </td>
        </tr>
        <form>
            <tr>
                <td align="center">
                    <table width="50%">
                        <tr>
                            <td height="70px" align="left" valign="top">
                                <a href="Admin_Category_Registoration.php">
                                    <button type="button" class="btn btn-secondary w-25">一覧へ戻る</button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="h6 text-muted">
                                    [選択したカテゴリ名]
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" class="form-control" placeholder="新しいカテゴリ名" aria-label="新しいカテゴリ名">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table align="center" width="50%">
                        <tr>
                            <td align="left">
                                <button class="btn btn-danger w-75" data-bs-toggle="modal" data-bs-target="#Delete_Modal" type="button">
                                    <p class="h6">削除</p>
                                </button>
                            </td>
                            <td align="right">
                                <button class="btn btn-primary w-75" data-bs-toggle="modal" data-bs-target="#Update_Modal" type="button">
                                    <p class="h6">更新</p>
                                </button>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </form>
    </table>
    <!-- Update_Modal -->
    <div class="modal fade" id="Update_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">更新の確認</h5>
                </div>
                <div class="modal-body text-muted">
                    [入力されたカテゴリ名]でテーブルに更新してもよろしいですか？
                </div>
                <div class="modal-footer">
                    <table width="100%">
                        <tr>
                            <td align="left">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">入力画面に戻る</button>
                            </td>
                            <td align="right">
                                <button type="button" class="btn btn-primary">更新</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete_Modal -->
    <div class="modal fade" id="Delete_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">削除の確認</h5>
                </div>
                <div class="modal-body text-muted">
                    [選択したカテゴリ名]を削除してもよろしいですか？
                </div>
                <div class="modal-footer">
                    <table width="100%">
                        <tr>
                            <td align="left">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">入力画面に戻る</button>
                            </td>
                            <td align="right">
                                <button type="button" class="btn btn-danger">削除</button>
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