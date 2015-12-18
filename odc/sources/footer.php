<script type="text/javascript" src="./js/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="./js/jquery.lazyload.min.js"></script>
 <script type="text/javascript">

    $("img.lazy").lazyload({event : "sporty",effect : "fadeIn"});
    $(window).bind("load", function() {
    var timeout = setTimeout(function() {
        $("img.lazy").trigger("sporty")
    }, 500);
});

 </script>

</body>
</html>