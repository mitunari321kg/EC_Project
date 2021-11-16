<%@ page contentType="text/html; charset=UTF-8" %>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <jsp:include page="frame/basic_style_info.jsp" flush="true" />
        <link href="css/Account_create.css" rel="stylesheet" />
        <title>アカウント作成</title>
    </head>

    <body>
        <!------------------------------------------- header ------------------------------------------->
        <jsp:include page="frame/header.jsp" flush="true" />
        <!------------------------------------------- header ------------------------------------------->
        <table width="100%">
            <tr>
                <td>
                    <div align="center">
                        <table border="0">
                            <form action="list.html" method="get">
                                <tr>
                                    <th>
                                        谷原
                                    </th>
                                    <td>
                                        <input type="text" name="user_name" size="24">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        フリガナ
                                    </th>
                                    <td>
                                        <input type="text" name="furigana" size="24">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        郵便番号
                                    </th>
                                    <td>
                                        <input type="text" name="postal_code" placeholder="ハイフンなしの、半角で入力してください" required
                                            size="7">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        住所
                                    </th>
                                    <td>
                                        <input type="text" name="address" 　placeholder="数字は半角で入力してください" required
                                            size="56">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        電話番号
                                    </th>
                                    <td>
                                        <input type="tel" name="tel" placeholder="ハイフンなしの、半角で入力してください" required
                                            size="24">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        メールアドレス
                                    </th>
                                    <td>
                                        <input type="email" name="usermail" placeholder="半角で入力してください" required
                                            size="56">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ユーザID
                                    </th>
                                    <td>
                                        <input type="text" name="user_id" size="24">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        パスワード
                                    </th>
                                    <td>
                                        <input type="password" name="password" size="24">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        確認用パスワード
                                    </th>
                                    <td>
                                        <input type="password" name="re_password" size="24">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <div class="button_wrapper">
                                            <button class="button1">作成</button>
                                        </div>  
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
        <!------------------------------------------- footer ------------------------------------------->
        <jsp:include page="frame/footer.jsp" flush="true" />
        <!------------------------------------------- footer ------------------------------------------->
    </body>
</html>