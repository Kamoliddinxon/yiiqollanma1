<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

?>

<div class="container-fluid">

    <div class="row">

        <!-- content boshlandi -->
        <div class="col p-0">
            <div class="text-center">
                <h1 class="display-5">16-qism</h1>
                <h5>
                    <em>
                        <p>
                            Pagination va LinkPager
                            <a href="https://youtu.be/19wXU5QtI8g" class="h6">Video varianti</a> <br/> <br/>
                        </p>
                    </em>
                </h5>
            </div>

            <div class="alert alert-dark" role="alert">
                Bizda <strong>employees</strong> nomli <strong>jadval</strong>imiz bor shunga bog'lab bitta <strong>model</strong> hosil qilamiz, <br /> <br />

                📂frontend<br />
                &emsp; 📂models <br />
                &emsp; &emsp; 📄<strong>Employees</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    <i class="text-success">
                    /** <br />
                    * Class Employees model <br />
                    * <br />
                        * @property int $<strong>employeeId</strong> <br />
                        * @property string $<strong>firstName</strong> <br />
                        * @property string $<strong>lastName</strong> <br />
                    */ <br /> <br /> <br />
                    </i>

                    class <strong>Employees</strong> extends <strong>ActiveRecord</strong> <br />
                    { <br /> <br />

                    public static function tableName() <br />
                    { <br />
                    return '{{<strong>employees</strong>}}'; <br />
                    } <br /> <br />

                    } <br />
                </p>
                <br />

                📂frontend<br />
                &emsp; 📂controller <br />
                &emsp; &emsp; 📄<strong>SiteController</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    public function action<strong>Index</strong>() <br />
                    { <br />
                    $<strong>count</strong> = 500; <br /> <br />

                    $<strong>pagination = new Pagination</strong>(['<strong>totalCount</strong>' => $<strong>count</strong>]); <br /> <br />

                    return $this->render('index', ['<strong>pagination</strong>'=>$pagination]); <br />
                    } <br />
                </p>
                <br />

                📂frontend<br />
                &emsp; 📂views <br />
                &emsp; 📂site <br />
                &emsp; &emsp; 📄<strong>index</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    <o class="text-success">
                    /** <br />
                        * @var yii\data\Pagination $<strong>pagination</strong> <br />
                    */ <br />
                    </o>

                    use yii\widgets\LinkPager; <br /> <br />

                    echo <strong>LinkPager::widget</strong>([ <br />
                    '<strong>pagination</strong>'=>$<strong>pagination</strong> <br />
                    ]); <br />
                </p>
                <br />

                Natijasi <br /> <br />

            <img src="/images/16d0.jpg" class="figure-img img-fluid rounded" alt="!!!">
            </div>

            <div class="alert alert-dark" role="alert">
                Endi jadvalimizdagi ma'lumotlarni chiqarishni ko'ramiz <br /> <br />

                📂frontend<br />
                &emsp; 📂controller <br />
                &emsp; &emsp; 📄<strong>SiteController</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    public function actionIndex() <br />
                    { <br />
                    $query = <strong>Employees::find</strong>(); <br />
                    $count = $query->count(); <br /> <br />

                    //  $count = 500; <br /> <br />

                    $pagination = new Pagination([ <br />
                    'totalCount' => $count, <br />
                    '<strong>pageSize</strong>'=> 10 <br />
                    ]); <br /> <br />

                    $model = $query-><strong>limit($pagination->limit)->offset($pagination->offset)</strong>->all(); <br /> <br />

                    <strong>return</strong> $this->render('index', ['pagination'=>$pagination, '<strong>model</strong>'=>$model]); <br />
                    } <br />
                </p>
                <br />

                📂frontend<br />
                &emsp; 📂views <br />
                &emsp; 📂site <br />
                &emsp; &emsp; 📄<strong>index</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    <o class="text-success">
                        /** <br />
                        * @var yii\data\Pagination $pagination <br />
                        * @var \yii\db\ActiveRecord $model <br />
                        */ <br /> <br />
                    </o>
                        use yii\widgets\LinkPager; <br /> <br />

                        ?> <br /> <br />

                        <?php echo htmlentities('<table class="table">')?>  <br /> <br />

                    &emsp; <?php echo htmlentities('<?php')?>  <br />
                    &emsp; <strong>foreach</strong> ($model as $item){ <br />
                    &emsp; echo "<?php echo htmlentities('<tr>')?>"; <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('<td>')?>"; <br />
                    &emsp;  &emsp;  &emsp; <strong>echo $item->firstName;</strong> <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('</td>')?>"; <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('<td>')?>"; <br />
                    &emsp;  &emsp;  &emsp; <strong>echo $item->lastName;</strong> <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('</td>')?>"; <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('</tr>')?>"; <br /> <br />

                    &emsp; } <br />
                    &emsp; ?> <br />
                        <?php echo htmlentities('</table>')?>  <br />
                <?php echo htmlentities('<?php')?> <br /> <br />

echo <strong>LinkPager::widget</strong>(['pagination'=>$pagination]); <br />
                </p> <br />

                Natijasi <br /> <br />

                <img src="/images/16d1.jpg" class="figure-img img-fluid rounded" alt="!!!">
            </div> <br />

            <div class="alert alert-dark" role="alert">

                <strong>LinkPager::widget</strong>ni qo'shimcha <strong>parametr</strong>larini ko'rib chiqsak

                <p class="bg-white text-dark p-3">
                        echo LinkPager::widget([ <br />
                        'pagination'=>$pagination, <br /> <br />
                        <strong>'maxButtonCount'=>2</strong>, &emsp; <mark>Har bitta sahifada <strong>ikki</strong>ta page ko'rinsin!</mark> <br /> <br />
                        <strong>'nextPageLabel'=>'keyingi'</strong> &emsp; <mark> Nomini o'zgartirish </mark> <br /> <br />
                        ]); <br />
                </p>

                <a href="https://www.yiiframework.com/doc/api/2.0/yii-data-pagination">Documentation</a>

            </div>

            <hr class="style11"> <br />
            <h1 class="display-5 text-center">Sort</h1> <br />

            <div class="alert alert-dark" role="alert">


                📂frontend<br />
                &emsp; 📂models <br />
                &emsp; &emsp; 📄<strong>Employees</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    namespace frontend\models; <br /> <br />

                    use yii\db\ActiveRecord; <br /> <br />

                    /** <br />
                    * Class Employees model <br />
                    * <br />
                    * @property int $employeeId <br />
                    * @property string $firstName <br />
                    * @property string $lastName <br />
                    */ <br /> <br />

                    class Employees extends ActiveRecord <br />
                    { <br />

                    <strong>public $fullName</strong>; <br /> <br />

                    public static function tableName() <br />
                    { <br />
                    return '{{employees}}'; <br />
                    } <br /> <br />

                    <strong>>
                    public function afterFind() <br />
                    { <br />
                    $this->fullName = $this->firstName. ' ' . $this->lastName; <br />
                    } <br />
                    </strong>

                    }
                </p> <br />

                📂frontend<br />
                &emsp; 📂controller <br />
                &emsp; &emsp; 📄<strong>SiteController</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    public function actionIndex() <br />
                    { <br />
                    $query = Employees::find(); <br />
                    $count = $query->count(); <br /> <br />

                    $pagination = new Pagination([ <br />
                    &emsp; 'totalCount' => $count, <br />
                    &emsp; 'pageSize'=> 10 <br />
                    ]); <br /> <br />

                    <strong>
                    $sort = new Sort([ <br />
                        &emsp; 'attributes' => [ <br />
                        &emsp; &emsp; 'firstName', <br />
                        &emsp; &emsp; 'lastName', <br />
                        &emsp; &emsp; 'fullName'=>[ <br />
                        &emsp; &emsp; &emsp; 'asc' => ['firstName' => SORT_ASC, 'lastName' => SORT_ASC], <br />
                        &emsp; &emsp; &emsp; 'desc' => ['firstName' => SORT_DESC, 'lastName' => SORT_DESC], <br />
                        &emsp; &emsp; &emsp; 'default' => SORT_DESC, <br />
                        &emsp; &emsp; &emsp; 'label' => 'Full Name', <br />
                        &emsp; &emsp; ] <br />
                        &emsp; ], <br />
                    ]); <br /> <br />
                    </strong>

                    $model = $query <br />
                    <strong>->orderBy($sort->orders)</strong> <br />
                    ->limit($pagination->limit) <br />
                    ->offset($pagination->offset) <br />
                    ->all(); <br /> <br />

                    return $this->render('index', [ <br />
                    &emsp; 'pagination'=>$pagination, <br />
                    &emsp; 'model'=>$model, <br />
                    &emsp; <strong>'sort'=>$sort</strong> <br />
                    ]); <br />
                    } <br />
                </p> <br />


                📂frontend <br />
                &emsp; 📂views <br />
                &emsp; 📂site <br />
                &emsp; &emsp; 📄<strong>index</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    <o class="text-success">
                        /** <br />
                        * @var yii\data\Pagination $pagination <br />
                        * @var \yii\db\ActiveRecord $model <br />
                        <strong>* @var \yii\data\Sort $sort</strong> <br />
                        */ <br /> <br />
                    </o>
                    use yii\widgets\LinkPager; <br /> <br />

                    ?> <br /> <br />

                    <?php echo htmlentities('<table class="table">')?> <br /> <br />

                    <?php echo htmlentities("<tr>") ?> <br />
                    &emsp; <?php echo htmlentities("<th><?php echo $sort->link('firstName')?></th>") ?> <br />
                    &emsp; <?php echo htmlentities("<th><?php echo $sort->link('lastName')?></th>") ?> <br />
                    &emsp; <?php echo htmlentities("<th><?php echo $sort->link('fullName')?></th>") ?> <br />
                    <?php echo htmlentities("</tr>") ?> <br /> <br />

                    &emsp; <?php echo htmlentities('<?php')?>  <br />
                    &emsp; <strong>foreach</strong> ($model as $item){ <br />
                    &emsp; echo "<?php echo htmlentities('<tr>')?>"; <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('<td>')?>"; <br />
                    &emsp;  &emsp;  &emsp; <strong>echo $item->firstName;</strong> <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('</td>')?>"; <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('<td>')?>"; <br />
                    &emsp;  &emsp;  &emsp; <strong>echo $item->lastName;</strong> <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('</td>')?>"; <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('<td>')?>"; <br />
                    &emsp;  &emsp;  &emsp; <strong>echo $item->fullName;</strong> <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('</td>')?>"; <br />
                    &emsp;  &emsp; echo "<?php echo htmlentities('</tr>')?>"; <br />

                    &emsp; } <br />
                    &emsp; ?> <br /> <br />
                    <?php echo htmlentities('</table>')?>  <br /> <br />

                    <?php echo htmlentities('<?php')?> <br />
                    echo <strong>LinkPager::widget</strong>(['pagination'=>$pagination]); <br />
                </p>

                <a href="https://www.yiiframework.com/doc/api/2.0/yii-data-sort">Documentation</a>

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