launch = cls => {
    if ($('section').hasClass('active')) {
        $(`section.${cls}`).removeClass('active')
        $(`nav a.${cls}`).removeClass('openned')
    } else {
        $('section').removeClass('active')
        $(`section.${cls}`).addClass('active')
        $(this).addClass('openned')
    }
    return false
}
close = () => {
    if ($('section').hasClass('active')) {
        $('section').removeClass('active')
    }
}

$('a.about._link').click(function() {
    launch('about')
})
$('a.work._link').click(function () {
    launch('work')
})
$('a.footer._link').click(function () {
    launch('footer')
})
$('i.fa.fa-times').click(function () {
    close()
})

$(document).keyup(function (e) {
    if (e.keyCode == 27) { close() }
});