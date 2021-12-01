<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <!--script src="script/input_file.js"></script-->
    <title>商品登録</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px" colspan="2">
                <p class="h2">
                    商品登録
                </p>
            </td>
        </tr>
        <tr>
            <td align="left" valign="top" width="50%">
                <table width="100%">
                    <tr>
                        <td>
                            <div class="form-floating mb-3 g-2">
                                <input type="text" class="form-control" id="product_name" placeholder="商品名を入力してください">
                                <label for="product_name">商品名</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="product_price" placeholder="売価を入力してください">
                                <label for="product_price">売価</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">商品画像選択</label>
                                <input class="form-control" type="file" id="fileBox" multiple>
                                <ul id = "file_list">
                                    <li></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
            <td align="right">
                <table width="100%">
                    <tr>
                        <td>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="商品説明を入力してください" id="product_details" style="height: 400px"></textarea>
                                <label for="product_details">商品説明</label>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
    </table>
    <script>
        function changeFile() {
            let files = fileBox.files;
            var ul = document.getElementById('file_list');

            for (let i = 0; i < files.length; i++) {
                var li = document.createElement('li');
                li.appendChild(files[i].name);
                ul.appendChild(li);
            }
        }

        let fileBox = document.getElementById('fileBox');
        fileBox.addEventListener('change', changeFile);
    </script>
    <!------------------------------------------- footer ------------------------------------------->
    <?php include 'frame/Admin_Footer.php'; ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>

</html>