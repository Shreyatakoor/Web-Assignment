< script src = "https://code.jquery.com/jquery-3.6.0.min.js" > < /script> <
script >
    $(document).ready(function() {
        $("h2").click(function() {
            $(this).next().slideToggle();
        });
    }); <
/script>