"use strict";
var sectionDisplay = /** @class */ (function () {
    function sectionDisplay() {
    }
    sectionDisplay.prototype.sectionDisplayBlock = function (id_name) {
        var loader = document.getElementById(id_name);
        if (loader) {
            loader.style.display = 'block';
        }
    };
    sectionDisplay.prototype.sectionDisplayNone = function (id_name) {
        var loader = document.getElementById(id_name);
        if (loader) {
            loader.style.display = 'none';
        }
    };
    sectionDisplay.prototype.sectionDisplayNoneAll = function () {
        var loaders = document.getElementsByClassName('section_group');
        if (loaders) {
            var i = void 0;
            for (i = 0; i < loaders.length; i++) {
                loaders[i].setAttribute('style', 'display:none');
            }
        }
    };
    return sectionDisplay;
}());
var display = new sectionDisplay();
display.sectionDisplayNoneAll();
display.sectionDisplayBlock('section_1');
//インプットボタンを押したときの挙動
$(document).on('click', '.btn_section_content', function () {
    var number = $(this).data('form_number');
    display.sectionDisplayNone('section_' + number);
    var open_section_no = parseInt(number) + 1;
    display.sectionDisplayBlock('section_' + open_section_no);
});
