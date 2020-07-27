//animate my blocks


var $blocks = $('.block');

console.log($blocks);
$.each($blocks, function() {
    $highlighter = $(this).children(':first');
    $(this).hover(function() {
        $highlighter.addClass('appear');
        console.log('hovering1');
    });
    console.log($highlighter);
})