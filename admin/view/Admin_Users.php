<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <title>登録者情報一覧</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    登録者情報一覧
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td align="left">
                            <form class="d-flex">
                                <input type="text" class="form-control w-25" name="search">
                                <button type="button" class="btn btn-dark font-light"><i class="bi bi-search"></i></button>
                            </form>
                        </td>
                        <td align="right">
                            <select class="form-select w-50" aria-label="select">
                                <option selected value="emp_name_asc">(氏名)昇順</option>
                                <option value="emp_name_desc">(氏名)降順</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <div style="height: 600px;overflow:auto;" class="border">
                    <table class="table w-100 table-hover" align="center">
                        <thead>
                            <tr class="sticky-top bg-light">
                                <th>
                                    ユーザID
                                </th>
                                <th>
                                    氏名
                                </th>
                                <th>
                                    フリガナ
                                </th>
                                <th>
                                    電話番号
                                </th>
                                <th>
                                    住所
                                </th>
                                <th>
                                    メールアドレス
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($cnt = 1; $cnt <= 25; $cnt++) {
                            ?>
                                <tr>
                                    <td>
                                        test001
                                    </td>
                                    <td>
                                        谷原 たろう
                                    </td>
                                    <td>
                                        タニハラタロウ
                                    </td>
                                    <td>
                                        0121441222
                                    </td>
                                    <td>
                                        京都府京都市伏見区竹田流池町１２１−３ 京都府立京都高等技術専門校
                                    </td>
                                    <td>
                                        test001@test.co.jp
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>