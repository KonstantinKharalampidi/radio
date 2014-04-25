<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

    <div class="row" style="margin-top: 20px">
        <div id="play-radio" class="col-xs-5">
            <div class="btn-group btn-group-vertical">
                <!--start play-->

                <div id="block">
                    <div id="inside-block">

                        <p id="play" data-container="body" data-placement="bottom" data-content='<p id="play"></p>' data-html="true">

                        </p>

                        <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
                        <script type="text/javascript" src="http://s2.whsh4u.com/mrp.js"></script>
                        <script type="text/javascript">
                            MRP.insert({
                                'url':'http://radio.opu.ua:8000/radioonpu',
                                'lang':'ru',
                                'codec':'mp3',
                                'volume':100,
                                'autoplay':false,
                                'buffering':5,
                                'title':'Radio ONPU',
                                'welcome':'Добро пожаловать!',
                                'wmode':'transparent',
                                'skin':'faredirfare',
                                'width':269,
                                'height':52
                            });
                        </script>
                        <!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->

                </div>
            </div>

            <script>
                function show()
                {
                    $.ajax({
                        url: 'playing.php',
                        cache: false,
                        success: function(html){
                            $('#play').html(html);
                        }
                    });
                }

                $(document).ready(function(){
                    show();
                    setInterval('show()',10000);
                });
            </script>
        </div>
        <!--end play-->
        </div>
        <div class="col-xs-7">
                <div id="radio-slider-lol">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!--<!-- Маркеры слайдов -->
                        <!--<ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>-->

                        <!-- Содержимое слайдов -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="http://radio.opu.ua" target="_top" title="Радио ОНПУ"><img id="radio-slider" src="slider/radio.jpg"></a>

                            </div>

                            <?php
                            foreach(Slider::model()->findAll() as $showSlide){
                                echo "<div class='item'><a href='$showSlide->url' target='_blank' title='$showSlide->descr'><img id='radio-slider' src='$showSlide->img'></a></div>";

                            }
                            ?>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

    </div>
     </div>
    <div class="row">
        <div id="social" class="col-xs-5">
            <div id="block">
                <div id="inside-block">
                    <h4>Радио ОНПУ в социальных сетях:</h4>
                    <div style="text-align: center"
                    <a href="https://vk.com/radio.onpu" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1365786151_vkontakte.png" /></a>
                    <a href="https://twitter.com/radioonpu" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1365786160_twitter.png" /></a>
                    <a href="https://www.facebook.com/onpuradio" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1365786140_facebook.png" /></a>
                </div>
                </div>
            </div>
        </div>
        <div id="rubrics" class="col-xs-7">
            <div id="text-content">
            <div id="block">
            <div id="inside-block">
                <h1>Передачи:</h1> <br />
                <!-- Split button -->
                <!-- Button trigger modal -->

                <?php
                foreach(Rubrics::model()->findAll() as $show){
                    echo "<a href='#' data-toggle='modal' data-target='#$show->id'>$show->name</a> <hr /> ";
                    echo " <div class='modal fade' id='$show->id' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                            <h4 class='modal-title' id='myModalLabel'>$show->name</h4>
                        </div>
                        <div class='modal-body'>
                                $show->descr
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-primary' data-dismiss='modal'>Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>";
                }
                ?>


                </div></div></div>
        </div>

    </div>

