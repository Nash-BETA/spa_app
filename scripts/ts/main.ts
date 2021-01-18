class sectionDisplay{
    sectionDisplayBlock(id_name: string) {
        const loader = document.getElementById(id_name);
        if (loader) {
            loader.style.display = 'block'
        }
    }
    sectionDisplayNone(id_name:string){
        const loader = document.getElementById(id_name);
        if(loader){
            loader.style.display = 'none'
        }
    }

    sectionDisplayNoneAll(){
        const loaders = document.getElementsByClassName('section_group');
        if (loaders) {
            let i:number;
            for (i = 0; i < loaders.length; i++){
                loaders[i].setAttribute('style', 'display:none');
            }
        }
    }
}

const display = new sectionDisplay();
display.sectionDisplayNoneAll();
display.sectionDisplayBlock('section_1');

//インプットボタンを押したときの挙動
$(document).on('click', '.btn_section_content', function () {
    let number = $(this).data('form_number');
    display.sectionDisplayNone('section_' + number);
    let open_section_no = parseInt(number) + 1;

    display.sectionDisplayBlock('section_' + open_section_no);
});
