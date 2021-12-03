<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <!--script src="script/input_file.js"></script-->
    <title>商品更新・削除</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px" colspan="2">
                <p class="h2">
                    商品更新・削除
                </p>
            </td>
        </tr>
        <tr>
            <td align="left"  height="50px">
                <a href="Admin_Products.php">
                    <button type="button" class="btn btn-secondary w-25">一覧へ戻る</button>
                </a>
            </td>
        </tr>
        <tr>
            <td align="left" valign="top" width="50%">
                <table width="100%">
                    <tr>
                        <td>
                            <div class="form-floating mb-3 g-2">
                                <input type="text" class="form-control" id="product_name" placeholder="商品名を入力してください" required>
                                <label for="product_name">商品名</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="product_price" placeholder="売価を入力してください" required>
                                <label for="product_price">売価</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <div class="mb-3">
                                <label for="files" class="form-label">商品画像選択</label>
                                <label class="form-text">(1から4画像まで登録できます)</label>
                                <input type="file" class="form-control" id="files" name="files[]" multiple required />
                                <output id="list_01"></output>
                                <label for="files" class="text-end text-danger"><u>※商品画像は上から順に登録されます</u></label>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
            <td align="right" width="50%">
                <table width="100%">
                    <tr>
                        <td>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="商品説明を入力してください" id="product_details" style="height: 400px" required></textarea>
                                <label for="product_details">商品説明</label>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="w-auto" align="left" colspan="2">
                カテゴリ選択
                <label class="form-text">(1から3つまで選択できます)</label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div style="overflow-x:xcroll;">
                    <table class="table border w-100" align="center">
                        <tr>
                            <td class="min-vw-25">
                                <?php
                                for ($cnt = 1; $cnt <= 25; $cnt++) {
                                ?>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        セットメニュー
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
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table width="100%">
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
                            <th class="text-muted" colspan="2">
                                以下の入力内容で商品を更新するか確認してください。
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">商品名</font>
                                </div>
                                テスト商品
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">売価</font>
                                </div>
                                ●●●●円
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="readonly" id="product_details" style="height: 200px" readonly></textarea>
                                    <label for="product_details">商品説明</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25" colspan="2">
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">商品画像</font>
                                </div>
                                <output id="list_02"></output>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div align="left" valign="top">
                                    <font size="2" class="text-muted">選択したカテゴリ</font>
                                </div>
                                カテゴリ1/カテゴリ2/カテゴリ3
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
                    [選択した商品名]を削除してもよろしいですか？
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
    <script>
        function handleFileSelect(evt) {
            var files = evt.target.files; // FileList object

            var output_01 = [];
            var output_02 = [];
            for (var i = 0, f; f = files[i]; i++) {
                output_01.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                    f.size, ' bytes, 最終更新日: ',
                    f.lastModifiedDate.toLocaleDateString(), '</li>');
                output_02.push('<li>', escape(f.name), '</li>');
            }
            document.getElementById('list_01').innerHTML = '<ul>' + output_01.join('') + '</ul>';
            document.getElementById('list_02').innerHTML = '<ul>' + output_02.join('') + '</ul>';
        }

        document.getElementById('files').addEventListener('change', handleFileSelect, false);
    </script>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>