<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <title>売上一覧</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    売上一覧
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
                                <option selected value="emp_name_asc">(売上数量)昇順</option>
                                <option value="emp_name_desc">(売上数量)降順</option>
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
                                    商品ID
                                </th>
                                <th>
                                    商品名
                                </th>
                                <th>
                                    売上数量
                                </th>
                                <th>
                                    商品単価
                                </th>
                                <th>
                                    売上合計
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($cnt = 1; $cnt <= 25; $cnt++) {
                            ?>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        醤油ラーメン
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        700円
                                    </td>
                                    <td>
                                        3500円
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