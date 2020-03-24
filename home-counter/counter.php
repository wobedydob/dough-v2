<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('.counter').each(function () {
        $(this).prop('counter', 1).animate({
            Counter: $(this).text()
        }, {
            duration: 1500,
            easing: 'swing',
        });
    });
</script>