<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <p>&copy; 2020 Lima Asia Dynamics. All rights reserved.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img class="" src="images/verified.png" width="40%"/>
            </div>
            <div class="col-lg-4 text-right">
                <!--a href="https://www.facebook.com/limaasiadynamics" class="text-dark" target="_blank"><i class="fab fa-facebook fa-2x"></i></a-->
                <div id="google_translate_element" style="display:inline-block"></div>
                <span class="mr-1 ml-1">|</span>
                <a class="text-dark" href="careers.php">Careers</a>
                <span class="mr-1 ml-1">|</span>
                <a class="text-dark" href="pp.php">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/b937cabdf8.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/template.min.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php if(!isset($footer) && empty($footer)){$footer = NULL;}else{echo $footer;} ?>


</body>

</html>
