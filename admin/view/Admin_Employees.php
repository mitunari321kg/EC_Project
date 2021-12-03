<?php
    include '../controller/Employees.php';
    $controll = new Employees();
    $result = $controll->get_employees();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'frame/Admin_Basic_Style_Info.php'; ?>
    <title>従業員一覧/更新・削除</title>
</head>

<body>
    <!------------------------------------------- header ------------------------------------------->
    <?php include 'frame/Admin_Header.php'; ?>
    <!------------------------------------------- header ------------------------------------------->
    <table width="100%">
        <tr>
            <td height="80px">
                <p class="h2">
                    従業員一覧/更新・削除
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
                                <option selected value="emp_name_asc">(従業員名)昇順</option>
                                <option value="emp_name_desc">(従業員名)降順</option>
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
                                <th class="w-25">
                                    従業員ID
                                </th>
                                <th class="w-25">
                                    従業員名
                                </th>
                                <th class="w-25">
                                    フリガナ
                                </th>
                                <th class="w-25">
                                    権限
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($result as $row) {
                            ?>
                                <tr>
                                    <td>
                                        <a href="Admin_Employee_Update.php">
                                            <?php echo $row['emp_id']; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="Admin_Employee_Update.php">
                                            <?php echo $row['emp_last_name']; ?>&nbsp<?php echo $row['emp_first_name']; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="Admin_Employee_Update.php">
                                            <?php echo $row['emp_last_furigana']; ?>&nbsp<?php echo $row['emp_first_furigana']; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="Admin_Employee_Update.php">
                                            <?php echo $row['emp_authority']; ?>
                                        </a>
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