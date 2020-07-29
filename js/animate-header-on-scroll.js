//animate-header-on-scroll.js

//hide avatar

var $avatar = $('#header-avatar');
console.log($avatar);

$(window).scroll(function() {
    //get bottom position of intro div
    var $intro = $('#intro');
    var intro_height = $intro.outerHeight();
    var intro_top_position = $intro.offset().top;
    var intro_bottom_position = (intro_top_position + intro_height);
    //get bottom position of header div
    var $header = $('#header');
    var header_height = $header.outerHeight();
    var header_top_position = $header.offset().top;
    var header_bottom_position = (header_top_position + header_height);
    //when bottom position of header div reaches bottom position of intro div, show the avatar in header
    if (header_bottom_position >= intro_bottom_position) {
        console.log('header is past the block div!');
        $avatar.removeClass('disappear');
        $avatar.addClass('appear');
    } else {
        $avatar.removeClass('appear');
        $avatar.addClass('disappear');
    }
    //console.log('intro is ' + intro_bottom_position);
    //console.log('header is ' + header_bottom_position);
})
