<footer class="footer text-center text-white">
    <div class="container p-4 pb-0">
        <section class="mb-4">
    <div class="text-center p-3" >
        © 2023 Copyright: Kincses Erik
    </div>
</footer>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>
</body>
</html>