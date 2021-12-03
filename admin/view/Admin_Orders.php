<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <?php include 'frame/Import_Datepicker.php'; ?>
    <link href="css/Admin_Orders.css" rel="stylesheet" />
    <title>注文一覧画面</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%" align="center" class="min-vw-50">
        <tr>
            <td height="80px">
                <p class="h2">
                    注文一覧
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <table class="min-vw-25 w-50" align="right">
                    <tr>
                        <td class="w-50">
                            <select class="form-select" aria-label="Default select example">
                                <option selected　value="All">全て表示</option>
                                <option value="In_Delivery">配送中のみ</option>
                                <option value="Completion">完了のみ</option>
                            </select>
                        </td>
                        <td class="w-50">
                            <input type="text" class="form-control" id="datepicker">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <div class="card border-muted w-100 border-2">
                    <div class="card-body overflow-auto text-muted" id="order-history-overflow">
                        <table class="table h-50" style="max-height:300px">
                            <!------------------------------------------- Sample Data ------------------------------------------->
                            <?php for ($i = 0; $i < 9; $i++) { ?>
                                <tr>
                                    <td>
                                        <table class="table">

                                            <tr>
                                                <td align="center" class="w-25">
                                                    <div align="left" valign="top">
                                                        <font size="2" class="text-muted">注文時点の日付</font>
                                                    </div>
                                                    <font size="3">2021/11/29</font>
                                                </td>
                                                <td align="center" class="w-25">
                                                    <div align="left" valign="top">
                                                        <font size="2" class="text-muted">商品名</font>
                                                    </div>
                                                    <font size="3">豚骨らーめん</font>
                                                </td>
                                                <td align="center" class="w-25">
                                                    <div align="left" valign="top">
                                                        <font size="2" class="text-muted">購入数</font>
                                                    </div>
                                                    <font size="3">10</font>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <div align="left" valign="top">
                                                        <font size="2" class="text-muted">注文ユーザID</font>
                                                    </div>
                                                    test001
                                                </td>
                                                <td align="center">
                                                    <div align="left" valign="top">
                                                        <font size="2" class="text-muted">注文ID</font>
                                                    </div>
                                                    1
                                                </td>
                                                <td align="center">
                                                    <div align="left" valign="top">
                                                        <font size="2" class="text-muted">電話番号</font>
                                                    </div>
                                                    0120441222
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <div align="left" valign="top">
                                                        <font size="2" class="text-muted">注文者名</font>
                                                    </div>
                                                    テスト太郎
                                                </td>
                                                <td align="center" colspan="2">
                                                    <div align="left" valign="top">
                                                        <font size="2" class="text-muted">お届け先</font>
                                                    </div>
                                                    京都府京都市伏見区竹田流池町１２１−３ 京都府立京都高等技術専門校
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td align="center" valign="middle" class="w-25 text-danger">
                                        配送中
                                        <br>2021/11/18 19:00に到着予定
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <!------------------------------------------- Sample Data ------------------------------------------->
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <script>
        $("#datepicker").datepicker();
        $(':text').datepicker().datepicker('setDate','today');
    </script>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>