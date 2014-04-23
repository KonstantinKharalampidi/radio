<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="container-fluid">
    <div class="row-fluid" style="margin-top: 20px">
        <div class="span9">
            <div class="row-fluid">
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
                                <a href="http://twitter.com" target="_blank" title="Описание"><img id="radio-slider" src="https://pp.vk.me/c7001/c540100/v540100591/f35c/rmvUOWij-h4.jpg" alt="Описание"></a>

                            </div>

                            <div class="item">
                                <a href="http://vk.com" target="_blank" title="Описание"><img id="radio-slider" src="https://pp.vk.me/c7001/c540100/v540100591/f363/kRTGGWxeLxM.jpg" alt="Описание"></a>

                            </div>

                            <div class="item">
                                <a href="http://facebook.com" target="_blank" title="Описание"><img id="radio-slider" src="https://pp.vk.me/c7001/c540100/v540100591/f36a/QIV5BaLHZvg.jpg" alt="Описание"></a>

                            </div>
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
        <div class="span3">

            <div class="btn-group btn-group-vertical">
                <!--start play-->
                <div class="alert alert-success">
                    <p id="play" data-container="body" data-placement="bottom" data-content='<p id="play"></p>' data-html="true">
                        Идёт загрузка данных, это займёт всего несколько секунд
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

                <!--end play-->
            </div>
            <h3>Социальные сети:</h3>
            <a href="https://vk.com/radio.onpu" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1365786151_vkontakte.png" /></a>
            <a href="https://twitter.com/radioonpu" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1365786160_twitter.png" /></a>
            <a href="https://www.facebook.com/onpuradio" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1365786140_facebook.png" /></a>


        </div>

    </div>
</div>
