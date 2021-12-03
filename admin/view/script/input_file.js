$('.fileBox').on('change', handleFileSelect);

function changeFile() {
    let files = fileBox.files;
    let filenames = "";

    for (let i = 0; i < files.length; i++) {
        if (i > 0) {
            filenames += ', ';
        }

        filenames += files[i].name;
    }

    msg.innerText = '選択しているファイルは ' + filenames + ' です';
}

let fileBox = document.getElementById('fileBox');
fileBox.addEventListener('change', changeFile);
let msg = document.getElementById('msg');