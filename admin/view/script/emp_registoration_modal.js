/* 
 *  @file       emp_registoration_modal.js
 *  @brief      従業員登録：モーダル操作
 *  @author     大森　光成
 *  @date       2021/12/07
 */
function check_password() {
    const emp_password = document.getElementById('emp_password').value
    const emp_password_conf = document.getElementById('emp_password_conf').value;

    if (!emp_password_conf) {
        document.getElementById('emp_password_conf').setCustomValidity('項目を入力してください');
        console.log('項目を入力してください');
        return;
    }
    if (emp_password !== emp_password_conf) {
        document.getElementById('emp_password_conf').setCustomValidity('パスワードが不一致です');
        console.log('パスワード不一致');
    } else {
        document.getElementById('emp_password_conf').setCustomValidity('');
        console.log('パスワード一致');
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
        emp_password_conf: document.getElementById('emp_password_conf').value,
        emp_authority: document.getElementById('emp_authority').value
    };
    for (let key in values) {
        if (values[key].trim() === '') {
            document.getElementById(key).setCustomValidity('項目に入力してください');
            console.log('項目未入力');
            return false;
        } else {
            document.getElementById(key).setCustomValidity('');
            console.log('項目入力済み');
        }
    }
    delete values['emp_password_conf'];
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