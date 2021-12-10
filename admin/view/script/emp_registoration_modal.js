/* 
 *  @file       emp_registoration_modal.js
 *  @brief      従業員登録：モーダル操作
 *  @author     大森　光成
 *  @date       2021/12/07
 */
function check_id() {
    const emp_id = document.getElementById('emp_id').value;
    var regex = /^[0-9a-zA-Z]+$/g;
    if (!emp_id) {
        document.getElementById('emp_id').setCustomValidity('項目を入力してください');
        return;
    }
    if (emp_id.match(regex) === null) {
        document.getElementById('emp_id').setCustomValidity('半角英数字で入力してください');
        return;
    } else {
        document.getElementById('emp_id').setCustomValidity('');
    }
}


function check_last_name() {
    const emp_last_name = document.getElementById('emp_last_name').value;
    var regex = /^[^\x20-\x7e]+$/g;
    if (!emp_last_name) {
        document.getElementById('emp_last_name').setCustomValidity('項目を入力してください');
        return;
    }
    if (emp_last_name.match(regex) === null) {
        document.getElementById('emp_last_name').setCustomValidity('全角で入力してください');
        return;
    } else {
        document.getElementById('emp_last_name').setCustomValidity('');
    }
}

function check_first_name() {
    const emp_first_name = document.getElementById('emp_first_name').value;
    var regex = /^[^\x20-\x7e]+$/g;
    if (!emp_first_name) {
        document.getElementById('emp_first_name').setCustomValidity('項目を入力してください');
        return;
    }
    if (emp_first_name.match(regex) === null) {
        document.getElementById('emp_first_name').setCustomValidity('全角で入力してください');
        return;
    } else {
        document.getElementById('emp_first_name').setCustomValidity('');
    }
}

function check_last_furigana() {
    const emp_last_furigana = document.getElementById('emp_last_furigana').value;
    var regex = /[^ァ-ヶー　]+$/g;
    if (!emp_last_furigana) {
        document.getElementById('emp_last_furigana').setCustomValidity('項目を入力してください');
        return;
    }
    if (emp_last_furigana.match(regex) !== null) {
        document.getElementById('emp_last_furigana').setCustomValidity('全角フリガナで入力してください');
        return;
    } else {
        document.getElementById('emp_last_furigana').setCustomValidity('');
    }
}

function check_first_furigana() {
    const emp_first_furigana = document.getElementById('emp_first_furigana').value;
    var regex = /[^ァ-ヶー　]+$/g;
    if (!emp_first_furigana) {
        document.getElementById('emp_first_furigana').setCustomValidity('項目を入力してください');
        return;
    }
    if (emp_first_furigana.match(regex) !== null) {
        document.getElementById('emp_first_furigana').setCustomValidity('全角フリガナで入力してください');
        return;
    } else {
        document.getElementById('emp_first_furigana').setCustomValidity('');
    }
}

function check_password() {
    const emp_password = document.getElementById('emp_password').value;
    const emp_password_conf = document.getElementById('emp_password_conf').value;
    var regex = /^[0-9a-zA-Z]+$/g;

    if (!emp_password_conf) {
        document.getElementById('emp_password_conf').setCustomValidity('項目を入力してください');
        return;
    }
    if (emp_password.match(regex) === null) {
        document.getElementById('emp_password').setCustomValidity('半角英数字で入力してください');
        document.getElementById('emp_password_conf').setCustomValidity('')
        return;
    } else if (emp_password_conf.match(regex) === null) {
        document.getElementById('emp_password_conf').setCustomValidity('半角英数字で入力してください');
        document.getElementById('emp_password').setCustomValidity('')
        return;
    }
    if (emp_password !== emp_password_conf) {
        document.getElementById('emp_password_conf').setCustomValidity('パスワードが不一致です');
        document.getElementById('emp_password').setCustomValidity('')
        return;
    } else {
        document.getElementById('emp_password_conf').setCustomValidity('');
        document.getElementById('emp_password').setCustomValidity('')
    }
};

function open_modal() {
    let values = {
        emp_id: document.getElementById('emp_id').value,
        emp_last_name: document.getElementById('emp_last_name').value,
        emp_first_name: document.getElementById('emp_first_name').value,
        emp_last_furigana: document.getElementById('emp_last_furigana').value,
        emp_first_furigana: document.getElementById('emp_first_furigana').value,
        emp_password: document.getElementById('emp_password').value,
        emp_authority: document.getElementById('emp_authority').value
    };
    for (let key in values) {
        document.getElementById('checked_' + key).value = values[key];
        if (key === 'emp_password') {
            document.getElementById('modal_' + key).textContent = values[key].replace(values[key], '●'.repeat(values[key].length));
        } else {
            document.getElementById('modal_' + key).textContent = values[key];
        }
    }
    var myModal = new bootstrap.Modal(document.getElementById('Registoration_Modal'), {
        keyboard: false
    });
    myModal.show();
    return false;
};