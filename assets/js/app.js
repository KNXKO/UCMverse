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


/* SWITCH WALLPAPER */
function btnColor(btn) {
    var property = document.getElementById(btn);
    var text = document.getElementById("toggleMode");
    if (property.className !== 'toggled') {
        property.className = 'toggled'
        text.innerHTML = "Light mode";
    } else {
        property.className = '';
        text.innerHTML = "Dark mde";
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

// TOGGLE FILL BACKGROUND - LIKE ICON
$(".likeToggle").click(function () {
    $(this).toggleClass('bi-hand-thumbs-up');
    $(this).toggleClass('bi-hand-thumbs-up-fill');
});

// TOGGLE FILL BACKGROUND - CHAT ICON
$(".commentToggle").click(function () {
    $(this).toggleClass('bi bi-chat');
    $(this).toggleClass('bi bi-chat-fill');
});

// TOGGLE FILL BACKGROUND - SHARE ICON
$(".shareToggle").click(function () {
    $(this).toggleClass('bi bi-share');
    $(this).toggleClass('bi bi-share-fill');
});

// TOGGLE FILL BACKGROUND - SAVE ICON
$(".saveToggle").click(function () {
    $(this).toggleClass('bi bi-bookmark');
    $(this).toggleClass('bi bi-bookmark-fill');
});

// UDALOSTI PRELOADER ANIMATION
$(document).ready(function () {
    $(".udalosti").click(function (e) {
        e.preventDefault();
        $link = $(this).attr("href");
        $(".loader-wrapper").fadeIn("slow", function () {
            window.location = $link;
        });
    });
});

// TEXTAREA BLOCKWORDS 
function fnCheckForRestrictedWords() {
    var restrictedWords = new Array("kokot", "KOKOT", "KKT", "kkt",  "bagana", "dement", "DMNT", "štetka", "štetka", "kurva", "KURVA", "JEBO", "JBMNT", "piča", "pica", "PICA", "rit", "buzna", "buzerant", "cicina", "flandra", "chuj", "drbat", "kunda", "srat", "zmrd", "dojebat", "fas", "gec", "hejzel", "ojeb", "najebat", "zajebat", "pojebat", "zabit", "nigga", "negger", "NIGGA");
    var txtInput = document.getElementById("msg").value;
    var error = 0;
    for (var i = 0; i < restrictedWords.length; i++) {
        var val = restrictedWords[i];
        if ((txtInput.toLowerCase()).indexOf(val.toString()) > -1) {
            error = error + 1;
            break;
        }
    }
    if (error > 0) {
        alert('Zadali ste zakázané slovo/á');
        window.history.forward(-1);
        event.preventDefault();
    }
}

// BG NAV
$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > $(window).height()){
            $(".nav").css({"background-color":"transparent"});   
        }
        else{
            $(".nav").css({"background-color":"white"});
        }
    })
})