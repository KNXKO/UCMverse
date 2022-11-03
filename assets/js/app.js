/* SELECTS */
function jq_ChainCombo(el) {
    var selected = $(el).find(':selected').data('id'); // get parent selected options' data-id attribute

    // get next combo (data-nextcombo attribute on parent select)
    var next_combo = $(el).data('nextcombo');

    // now if this 2nd combo doesn't have the old options list stored in it, make it happen
    if (!$(next_combo).data('store'))
        $(next_combo).data('store', $(next_combo).find('option')); // store data

    // now include data stored in attribute for use...
    var options2 = $(next_combo).data('store');

    // update combo box with filtered results
    $(next_combo).empty().append(
        options2.filter(function () {
            return $(this).data('option') === selected;
        })
    );

    // now enable in case disabled... 
    $(next_combo).prop('disabled', false);

    // now if this combo box has a child combo box, run this function again (recursive until an end is reached)
    if ($(next_combo).data('nextcombo') !== undefined)
        jq_ChainCombo(next_combo); // now next_combo is the defining combo
}

// quick little jquery plugin to apply jq_ChainCombo to all selects with a data-nextcombo on them
jQuery.fn.chainCombo = function () {
    // find all divs with a data-nextcombo attribute
    $('[data-nextcombo]').each(function (i, obj) {
        $(this).change(function () {
            jq_ChainCombo(this);
        });
    });
}();
/* ATTACH PHOTO */
function toggler(divId) {
    $("#" + divId).toggle();
}

/* HEADER BACKGROUND */
$(window).scroll(function () {
    if ($(window).scrollTop() >= 50) {
        $("nav").css('background', '#000000ce');
        $("nav").css('border-bottom', '2px solid #5E5CFF');
    } else {
        $("nav").css('background', '#080808b6');
        $("nav").css('border-bottom', '2px solid black');
    }
});

/* SWITCH WALLPAPER */
function btnColor(btn) {
    var property = document.getElementById(btn);
    if (property.className !== 'toggled') {
        property.className = 'toggled'
    } else {
        property.className = '';
    }
}

/* EMOJI */
$(function () {
    // Initializes and creates emoji set from sprite sheet
    window.emojiPicker = new EmojiPicker({
        emojiable_selector: '[data-emojiable=true]',
        assetsPath: '/assets/emoji/img/',
        popupButtonClasses: 'fa fa-smile-o' // far fa-smile if you're using FontAwesome 5
    });
    // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
    // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
    // It can be called as many times as necessary; previously converted input fields will not be converted again
    window.emojiPicker.discover();
});