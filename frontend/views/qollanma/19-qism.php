<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

?>

<div class="container-fluid">

    <div class="row">

        <!-- content boshlandi -->
        <div class="col p-0">
            <div class="text-center">
                <h1 class="display-5">19-qism</h1>
                <h5>
                    <em>
                        <p>
                            ListView
                            <a href="https://youtu.be/Ckg2K2nymWg" class="h6">Video varianti</a> <br/> <br/>
                        </p>
                    </em>
                </h5>
            </div>

            <div class="alert alert-dark" role="alert">
                <img src="/images/19d0.jpg" class="figure-img img-fluid rounded" alt="!!!">
            </div>

                <div class="alert alert-dark" role="alert">
                <ol class="bg-white text-dark p-3">
                    📂common<br />
                    &emsp; 📂models <br />
                    &emsp; &emsp; 📄<strong>Products</strong>.php <br />

                    <p class="alert alert-dark bg-secondary text-white-50 m-3 p-1" role="alert">

                        namespace common\models; <br /> <br />

                        use yii\db\ActiveRecord; <br /> <br />

                        class <strong>Products</strong> extends <strong>ActiveRecord</strong> <br />
                        { <br />
                        &emsp; public static function <strong>tableName</strong>() <br />
                        &emsp; { <br />
                        &emsp; return '{{<strong>products</strong>}}'; <br />
                        &emsp; } <br />
                        } <br /> <br />

                        <mark>Bizni bazamizda <strong>products</strong> degan jadval bor o'shanga ulandi</mark>
                    </p>

                    <hr class="style11"> <br />

                    📂frontend<br />
                    &emsp; 📂controllers <br />
                    &emsp; &emsp; 📄<strong>ProductController</strong>.php <br />

                    <p class="bg-secondary text-white-50 alert alert-dark  m-3 p-1 " role="alert">
                        namespace frontend\controllers; <br /> <br />

                        use common\models\Products; <br />
                        use yii\data\ActiveDataProvider; <br />
                        use yii\web\Controller; <br /> <br />

                        class <strong>ProductController</strong> extends <strong>Controller</strong> <br />
                        { <br />
                       &emsp; public function <strong>actionIndex</strong>() <br />
                        &emsp; { <br /> <br />

                        &emsp; $dataProvider = new <strong>ActiveDataProvider</strong>([ &emsp; <mark><strong>ActiveDataProvider</strong>dan yangi <strong>object</strong> hosil qildi &emsp; <s>$dataProvider</s></mark> <br />
                        &emsp; &emsp; '<strong>query</strong>' => Products::<strong>find</strong>() &emsp; <mark>Yangi <strong>object</strong>imizga <s>products</s> jadvaldagi barcha ma'lumotlarni yukladi <strong>find</strong>()</mark> <br />
                        &emsp; &emsp; ]); <br /> <br />

                        &emsp; return $this-><strong>render</strong>('index', ['<strong>dataProvider</strong>'=>$dataProvider]); &emsp; <mark>Yangi <strong>object</strong>imizni <s>dataProvider</s> viewga <s>index</s>berib yubordi </mark> <br />
                        &emsp; } <br />
                        } <br />
                    </p>

                    <hr class="style11"> <br />

                    📂frontend<br />
                    &emsp; 📂views <br />
                    &emsp; &emsp; 📂product <br />
                    &emsp; &emsp; &emsp; 📄<strong>index</strong>.php <br />

                    <p class="bg-secondary text-white-50 alert alert-dark  m-3 p-1 " role="alert">
                        <i class="text-success">
                        /** <br />
                            &emsp;* @var \yii\data\ActiveDataProvider $dataProvider <br />
                        */ <br />
                        </i>
                        echo "<?php echo htmlentities("<div class='row'>") ?>"; <br />
                        echo "<?php echo htmlentities("<div class='col-12 pl-2'>") ?>"; <br />
                        &emsp;echo $dataProvider-><strong>sort</strong>->link('<strong>productName</strong>'); &emsp; <mark><strong>Object</strong>imizga kelgan ma'lumotlarni <strong>productName</strong> bo'yicha <strong>sort</strong>layabmiz</mark> <br />
                            echo "<?php echo htmlentities("</div>") ?>"; <br />
                        echo \yii\widgets\<strong>ListView</strong>::widget([ &emsp; <mark><strong>ListView</strong> widgetni chaqiryabmiz</mark> <br /> <br />

                        &emsp;'<strong>dataProvider</strong>' => $dataProvider, &emsp; <mark><strong>ListView</strong> widgetni asosiy parametiri bu <strong>dataProvider</strong> xisoblanadi unga objectimizni <s>$dataProvider</s> berdik!</mark> <br />
                        &emsp;'<strong>itemView</strong>' => '<strong>item</strong>', &emsp; <mark><strong>itemView</strong>ga view filemizni <s><strong>item</strong></s> korsatamiz</mark> <br />
                        &emsp;'<strong>options</strong>'=>[ &emsp; <mark>Bu <strong>options</strong> parametri <strong>ListView</strong>ni barcha ko'rinishini o'z ichiga oladi</mark> <br />
                        &emsp;&emsp;'<strong>tag</strong>'=>'div', &emsp; <mark><strong>tag</strong>iga div berdik</mark> <br />
                        &emsp;&emsp;'<strong>class</strong>'=>'row', &emsp; <mark><strong>class</strong>iga row berdik</mark> <br />
                        &emsp;&emsp;'<strong>id</strong>'=>'list-wrapper' &emsp; <mark><strong>id</strong>isiga list-wrapper berdik</mark> <br />
                        &emsp;&emsp;], <br />
                        &emsp;'<strong>itemOptions</strong>'=>[ &emsp; <mark><strong>Jadvalimiz</strong>ni barcha ko'rinishini o'z ichiga oladi </mark> <br />
                        &emsp;&emsp;'<strong>class</strong>'=>'col-lg-3 col-md-4  col-sm-6' <br />
                        &emsp;&emsp;], <br />
                        &emsp;'<strong>layout</strong>'=>"<?php echo htmlentities("<div class='col-12 m-2'>") ?>{<strong>summary</strong>}<?php echo htmlentities("</div>") ?> {<strong>items</strong>} <?php echo htmlentities("<div class='col-12 m-2'>") ?>{<strong>pager</strong>}<?php echo htmlentities("</div>") ?>",&emsp; <mark><strong>layout</strong> Bu joylashish tartibi, ketma ketligi &emsp; <strong>summary</strong> &emsp; <strong>items</strong> &emsp; <strong>pager</strong></mark> <br />
                        &emsp;'<strong>summary</strong>'=>'Jami <b>{<strong>totalCount</strong>}</b> ta dan {<strong>count</strong>} ta chiqyabti' &emsp; <mark><strong>summary</strong> Bu jadvalimizdan kalayotgan ma'lumotlarni qanchaligi, <s>to'liq ma'lumoti</s></mark> <br />
                        &emsp;]); <br /> <br />

                        echo "<?php echo htmlentities("</div>") ?>"; <br />
                    </p>

                    <hr class="style11"> <br />

                    📂frontend<br />
                    &emsp; 📂views <br />
                    &emsp; &emsp; 📂product <br />
                    &emsp; &emsp; &emsp; 📄<strong>item</strong>.php <br />

                    <p class="bg-secondary text-white-50 alert alert-dark  m-3 p-1 " role="alert">
                        <?php echo htmlentities('<div class="card m-2" style="width: 17rem;">')?> <br />
                        <?php echo htmlentities('<img src="/images/19d1.jpg">')?> <br />
                        <?php echo htmlentities('<div class="card-body">')?> <br />
                        <?php echo htmlentities('<h5 class="card-title"><?php echo $model->productName; ?></h5>')?> <br />
                        <?php echo htmlentities('<h6 class="card-subtitle mb-2 text-muted"><?php echo $model->productScale; ?></h6>')?> <br />
                        <?php echo htmlentities('<p class="card-text">')?>Some quick example text to build on the card title and make up the bulk of the card's content.<?php echo htmlentities('</p>')?> <br />
                        <?php echo htmlentities('<a href="#" class="card-link">Card link</a>')?> <br />
                        <?php echo htmlentities('<a href="#" class="card-link">Another link</a>')?> <br />
                        <?php echo htmlentities('</div>')?> <br />
                        <?php echo htmlentities('</div> ')?> <br />
                    </p>
                </ol>

                    <a href="https://www.yiiframework.com/doc/guide/2.0/en/output-data-widgets">Documentation</a>
            </div>
        </div>
        <!-- content tugadi -->

        <!-- sidebar boshlandi -->
        <div class="col-2 d-none d-sm-none d-md-none d-lg-block p-0 pl-3">
            <?php echo frontend\widgets\qollanma\Qollanma::widget();?>
        </div>
        <!-- sidebar tugadi -->

    </div>

</div>