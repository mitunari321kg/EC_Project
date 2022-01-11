function open_modal() {
    const input_category_name = document.getElementById('input_category_name').value;
    if (!input_category_name) {
        document.getElementById('input_category_name').setCustomValidity('空白を使用せず入力してください');
        return false;
    } else {
        document.getElementById('input_category_name').setCustomValidity('');
    }
    document.getElementById('checked_input_category_name').value = input_category_name;
    document.getElementById('modal_input_category_name').textContent = '[' + input_category_name + ']をテーブルに登録してもよろしいですか？';
    var myModal = new bootstrap.Modal(document.getElementById('Registoration_Modal'), {
        keyboard: false
    });
    myModal.show();
    return false;
};

function check_category_name() {
    const input_category_name = document.getElementById('input_category_name').value;
    if (input_category_name.trim() == '') {
        document.getElementById('input_category_name').setCustomValidity('空白を使用せず入力してください');
        return;
    } else {
        document.getElementById('input_category_name').setCustomValidity('');
    }
}