<?php
    include '../controller/Categories.php';
    $control = new Categories();
    $result = $control->get_Categories();
    $cnt = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>

    <title>カテゴリ一覧</title>
</head>
<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    カテゴリ一覧
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
                <div style="overflow-x:xcroll;">
                    <table class="table border w-75" align="center">
                        <tr>
                            <td class="min-vw-25">
                            <?php
                            foreach($result as $row){
                            ?>
                                <div align="left">
                                ・<?php echo($row['category_name']) ?>
                                </div>
                                <?php
                                if($cnt++ % 5 == 0){
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
    </table>
    <!------------------------------------------- footer ------------------------------------------->
    <?php 
    include 'frame/Admin_Footer.php'; 
    $cnt = 1;
    ?>
    <!------------------------------------------- footer ------------------------------------------->
</body>
</html>