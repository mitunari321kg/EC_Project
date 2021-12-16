/*
 * @file   User_passchange.php
 * @brief  パスワード変更画面スクリプト
 * @author 佐藤大介
 * @date   2021/12/14
 */

/**
 * 登録前チェック
 */
function confirmMessage(input) {
    var input_pass = input;
    var old_pass = document.getElementById("old_password").value;
    var pass = document.getElementById("new_password").value;
    var conf = document.getElementById("confirm_password").value;
    //パスワードチェック
    if (input_pass != old_pass) {
        alert("現在のパスワード:入力されたパスワードが一致しません")
        return false;
    } else if (pass != conf) {
        alert("入力されたパスワードが一致しません");
        return false;
    } else {
        return true;
    }
}

/*
function getInputLength(frm, pass, old_pass) {
    if (pass == old_pass) {
        frm.elements["strlength"].value = "正しいです";
    } else {
        frm.elements["strlength"].value = "入力されたパスワードが間違っています";
    }
}
*/

/**
 * パスワード一致チェック
 * @param {*} confirm_password 
 */
/*
function setConfirmMessage(confirm_password) {
    var password = document.getElementById("old_pass").value;
    var message = "";
    if (password == confirm_password) {
        message = "";
    } else {
        message = "パスワードが一致しません";
    }
    var div = document.getElementById("pass_confirm_message");
    if (!div.hasFistChild) { div.appendChild(document.createTextNode("")); }
    div.firstChild.data = message;
}
*/
