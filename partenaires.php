<div class="container">
    <div id="main_area">
        <script type="text/javascript">
         jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
        </script>
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="img/partenaires/almountakhablogo.jpg">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="img/partenaires/2mlogo.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="img/partenaires/almassaelogo.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="img/partenaires/beinsportlogo.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="img/partenaires/frmalogo.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="img/partenaires/hitradiologo.png"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="img/partenaires/logo.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="img/partenaires/snrt.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="img/partenaires/wilayalogo.png"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="img/partenaires/bouznikalogo.png"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="img/partenaires/almountakhablogo.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="img/partenaires/opinion.png"></a>
                    </li>

                   
                </ul>
            </div>
            <div><a class="thumbnail-official" target="_blank" href="http://www.go-sport.com/"><img src="img/logogosport.png" style="padding:50px"></a></div>
           
        </div>

    