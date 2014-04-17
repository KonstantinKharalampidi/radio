<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="container-fluid">
    <div class="row-fluid" style="margin-top: 20px">
        <div class="span5">
            <a class="twitter-timeline" href="https://twitter.com/radioonpu" data-widget-id="369722372003078144">Твиты пользователя @radioonpu</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


        </div>
        <div class="span3 offset4">

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
        </div>
    </div>
</div>


<div class="row-fluid navbar-fixed-bottom" style="margin-bottom: 80px">
    <div class="span3 offset9">
        <h3>Социальные сети:</h3>
        <img src="img/1365786151_vkontakte.png" />
        <img src="img/1365786160_twitter.png" />
        <img src="img/1365786140_facebook.png" />


    </div>