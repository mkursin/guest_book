<script>
$(document).ready (function () {

    $('#btn21').click(function () {
        $.ajax({
            url: "page1.html",
            cache: false,
            success: function (html) {
                $("#content").html(html);
            }
});
});
});

</script>