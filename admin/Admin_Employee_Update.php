<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <title>従業員更新</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    従業員更新・削除
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <table class="w-50" align="center">
                    <tr>
                        <td align="left">
                            <a href="Admin_Employees.php">
                                <button type="button" class="btn btn-secondary w-50">一覧へ戻る</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <br>
                            <div class="form-floating mb-3 g-2">
                                <input type="text" class="form-control" id="employee_id" placeholder="従業員IDを入力してください" required>
                                <label for="employee_id">従業員ID</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="w-50">
                            <div class="form-floating mb-3 g-2">
                                <input type="text" class="form-control" id="employee_last_name" placeholder="姓を入力してください" required>
                                <label for="employee_last_name">姓</label>
                            </div>
                        </td>
                        <td class="w-50">
                            <div class="form-floating mb-3 g-2">
                                <input type="text" class="form-control" id="employee_first_name" placeholder="名を入力してください" required>
                                <label for="employee_first_name">名</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-floating mb-3 g-2">
                                <input type="password" class="form-control" id="employee_password" placeholder="パスワードを入力してください" required>
                                <label for="employee_password">パスワード</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-floating mb-3 g-2">
                                <input type="password" class="form-control" id="employee_password_conf" placeholder="再度パスワードを入力してください" required>
                                <label for="employee_password_conf">確認用パスワード</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div align="left" valign="top">
                                <font size="2" class="text-muted">従業員に付与する権限</font>
                            </div>
                            <select class="form-select" name="employee_authority" aria-label="select">
                                <option selected value="1">[1：一般従業員]</option>
                                <option value="2">[2：管理者]</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <br>
                <table width="50%">
                    <tr>
                        <td align="left">
                            <button type="button" class="btn btn-danger w-50" data-bs-toggle="modal" data-bs-target="#Delete_Modal">削除</button>
                        </td>
                        <td align="right">
                            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#Update_Modal">更新</button>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--update_modal-->
    <div class="modal fade" id="Update_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">入力内容の確認</h5>
                </div>
                <div class="modal-body">
                    <table class="table w-100">
                        <tr>
                            <td class="text-muted" colspan="2">
                                以下の入力内容で従業員データを更新するか確認してください。
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">従業員ID</font>
                                </div>
                                test001
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">姓</font>
                                </div>
                                山田
                            </td>
                            <td>
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">名</font>
                                </div>
                                たろ
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">パスワード</font>
                                </div>
                                ●●●●
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">従業員に付与する権限</font>
                                </div>
                                [1：一般従業員]or[2：管理者]
                                </select>
                            </td>
                        </tr>
                    </table>
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
                    [選択した従業員ID]を削除してもよろしいですか？
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