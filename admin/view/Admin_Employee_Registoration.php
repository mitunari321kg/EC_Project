<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'frame/Admin_Basic_Style_Info.php';
    include 'frame/Import_Datepicker.php'
    ?>
    <title>従業員登録</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    従業員登録
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                $result_msg = $_SESSION['result_msg'];
                if(!empty($result_msg)){
                    echo $result_msg;
                    unset($_SESSION['result_msg']);
                }
                ?>
            </td>
        </tr>
        <form onsubmit="return open_modal()" action="#" method="post" >
        <!--form class="needs-validation" novalidate-->
            <tr>
                <td>
                    <table class="w-50" align="center">
                        <tr>
                            <td colspan="2">
                                <div class="form-floating mb-3 g-2">
                                    <input type="text" name="emp_id" class="form-control" id="emp_id" placeholder="従業員IDを入力してください" required oninput="check_id()">
                                    <label for="employee_id">従業員ID</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="form-floating mb-3 g-2">
                                    <input type="text" name="emp_last_name" class="form-control" id="emp_last_name" placeholder="姓を入力してください" required oninput="check_last_name()">
                                    <label for="employee_last_name">姓</label>
                                </div>
                            </td>
                            <td class="w-50">
                                <div class="form-floating mb-3 g-2">
                                    <input type="text" name="emp_first_name" class="form-control" id="emp_first_name" placeholder="名を入力してください" required oninput="check_first_name()">
                                    <label for="employee_first_name">名</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-50">
                                <div class="form-floating mb-3 g-2">
                                    <input type="text" name="emp_last_furigana" class="form-control" id="emp_last_furigana" placeholder="姓(フリガナ)を入力してください"　 required oninput="check_last_furigana()">
                                    <label for="employee_last_furigana">姓(フリガナ)</label>
                                </div>
                            </td>
                            <td class="w-50">
                                <div class="form-floating mb-3 g-2">
                                    <input type="text" name="emp_first_furigana" class="form-control" id="emp_first_furigana" placeholder="名(フリガナ)を入力してください" required oninput="check_first_furigana()">
                                    <label for="emp_first_furigana">名(フリガナ)</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-floating mb-3 g-2">
                                    <input type="password" class="form-control" id="emp_password" placeholder="パスワードを入力してください" required oninput="check_password()">
                                    <label for="employee_password">パスワード</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-floating mb-3 g-2">
                                    <input type="password" class="form-control" id="emp_password_conf" placeholder="再度パスワードを入力してください" required oninput="check_password()">
                                    <label for="employee_password_conf">確認用パスワード</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">従業員に付与する権限</font>
                                </div>
                                <select class="form-select" name="emp_authority" id="emp_authority" aria-label="select">
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
                    <button type="submit" class="btn btn-primary w-25" id="modal_button">登録</button>
                </td>
            </tr>
        </form>
    </table>
    <!--update_modal-->
    <form action="../controller/Employee_Registoration.php" method="post">
        <div class="modal fade" id="Registoration_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">入力内容の確認</h5>
                    </div>
                    <div class="modal-body">
                        <table class="table w-100">
                            <tr>
                                <td class="text-muted" colspan="2">
                                    以下の入力内容で従業員データを登録するか確認してください。
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">従業員ID</font>
                                    </div>
                                    <p class="px-2" id="modal_emp_id"></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">姓</font>
                                    </div>
                                    <p class="px-2" id="modal_emp_last_name"></p>
                                </td>
                                <td>
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">名</font>
                                    </div>
                                    <p class="px-2" id="modal_emp_first_name"></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">姓(フリガナ)</font>
                                    </div>
                                    <p class="px-2" id="modal_emp_last_furigana"></p>
                                </td>
                                <td>
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">名(フリガナ)</font>
                                    </div>
                                    <p class="px-2" id="modal_emp_first_furigana"></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">パスワード</font>
                                    </div>
                                    <p class="px-2" id="modal_emp_password"></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div align="left" valign="top">
                                        <font size="2" class="text-muted">従業員に付与する権限</font>
                                    </div>
                                    <p class="px-2" id="modal_emp_authority"></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <input type="hidden" name="checked_emp_id" id="checked_emp_id" />
                    <input type="hidden" name="checked_emp_last_name" id="checked_emp_last_name" />
                    <input type="hidden" name="checked_emp_first_name" id="checked_emp_first_name" />
                    <input type="hidden" name="checked_emp_last_furigana" id="checked_emp_last_furigana"/>
                    <input type="hidden" name="checked_emp_first_furigana" id="checked_emp_first_furigana"/>
                    <input type="hidden" name="checked_emp_password" id="checked_emp_password"/>
                    <input type="hidden" name="checked_emp_authority"  id="checked_emp_authority"/> 
                    <div class="modal-footer">
                        <table width="100%">
                            <tr>
                                <td align="left">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancell">入力画面に戻る</button>
                                </td>
                                <td align="right">
                                    <button type="submit" class="btn btn-primary" id="registoration">登録</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
    <script src="script/emp_registoration_modal.js"></script>
</body>

</html>