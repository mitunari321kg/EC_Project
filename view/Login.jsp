<%@ page contentType="text/html; charset=UTF-8" %>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <jsp:include page="frame/basic_style_info.jsp" flush="true" />
        <link href="css/Login.css" rel="stylesheet" />
        <title>ログイン画面</title>
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
                                        ユーザID
                                    </th>
                                    <td>
                                        <input type="text" name="user_id" value="" size="24">
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        パスワード
                                    </th>
                                    <td>
                                        <input type="password" name="password" value="" size="24">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" value="ログイン">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><a href="Account_create.jsp">アカウント作成</a></p>
                                    </td>
                                    <td align="right">
                                        <p><a href="nanika"> ログイン出来ない </a></p>
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