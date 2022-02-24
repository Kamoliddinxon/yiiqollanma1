<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

?>

<div class="container-fluid">

    <div class="row">

        <!-- content boshlandi -->
        <div class="col p-0">

            <div class="text-center">
                <h1 class="display-5">6-qism</h1>
                <h5>
                    <em>
                        <p>Modellar
                            <a href="https://youtu.be/VwPW3mmo-I4" class="h6">Video varianti</a> <br/> <br/>
                        </p>
                    </em>
                </h5>
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <p class="card-text">
                       <strong>Model</strong>lar mvc architecturesini bir qismi xisoblanadi <br />
                        projectni asosiy logikalari<strong> model</strong>da bõladi <br />
                        ma'lumotlar ustida bajariladigon amallarning hammasi <strong>model</strong> orqali amalga oshiriladi <br /> <br />

                        Contact formasini kõradigon bõlsak <br />
                        Bu formada 5ta input elementi joylashgan <br />
                        bu inputlarni tõldirmasdan submitni bosadigon bõlsak <br />
                        inputlar<o class="text-danger"> to'ldirilmagan</o>ligini kõrsatyabti <br />
                        Bu yerda qanday jarayon yuz beryabti <br /> <br />

                        Ushbu forma SiteControllerining contact actionni hisoblanadi <br />
                    </p>
                </div>
                <img src="/images/6d0.jpg" class="card-img-bottom" alt="!!!"> <br />
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <p class="card-text">
                        📂 frontend <br />
                        📂 controllers <br /> <br />

                        📄 SiteController.php <br /> <br />

                        ationContactni kõrsak quyidagi kodlar yozilgan <br /> <br />

                        <o class="text-success">public function actionContact() <br />
                        { <br /> <br />

                        $model = new ContactForm(); <br /> <br />

                        if ($model->load(Yii::$app->request->post()) && $model->validate()) <br />
                        } else { <br />
                        print_r($model->errors); <br />
                        } </o> <br /> <br />

                      <strong>ContactForm</strong> classidan yangi<strong> obeykt</strong> hosil qilindi <br />
                        <strong>$model</strong> nomli formadan <strong>post</strong> orqali kelayotgan ma'lumotlarini ushbu <strong>model</strong>ni attributelariga yuklab olsinda <br />
                        <strong>model</strong>ning <strong>validate function</strong>nidan (tekshiruvdan) utkazsin deyabti <br />
                        yoki tekshiruvdan õtmasa nima uchun õtmaganini tekshirsin deyabti <br />
                        <strong>$model</strong>ning errors parametiri <br /> <br />

                        Bu tekshiruvlar<strong> ContactForm</strong> dan kelyabti</p>
                </div>
                <img src="/images/6d1.jpg" class="card-img-bottom" alt="!!!"> <br />
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <p class="card-text">
                        📂 frontend <br />
                        📂 Models <br /> <br />

                        📄 ContactForm.php <br /> <br />

                        Bu yerda<strong> ContactForm</strong> classi bor Bu class<strong> Model</strong> classidan<o class="text-success"> extends</o> olgan (kengaytma meros) <br />
                        Yangi<strong> model</strong> hosil qilish uchun<strong> Model</strong> classidan<o class="text-success"> extends</o> olish kerak <br /> <br />

                        <strong> Model</strong>larning qanday imkoniyatlari mavjud quyida <br /> <br />

                      <o class="text-success">
                        public $name; <br />
                        public $email; <br />
                        public $subject; <br />
                        public $body; <br />
                        public $verifyCode;
                      </o> <br /> <br />

                        5ta <o class="text-success">public</o> õzgaruvchilar qõshilgan bular<strong> model</strong>ning attributelari deb nomlanadi <br /> <br />

                        Keyingisi<strong> rules</strong> function Tekshiruvlar<strong> rules</strong>da yoziladi<strong> rules</strong> function massiv qaytaradi <br /> <br />

                        <o class="text-success">
                        public function rules() <br />
                        { <br />
                        return [ <br />
                        [['name', 'email', 'subject', 'body'], 'required'], <br />
                        ['email', 'email'], <br /> <br />

                        ['verifyCode', 'captcha'], <br />
                        ]; <br />
                        }
                        </o> <br /> <br />

                        <strong>rules</strong>da<strong> ContactForm</strong>ni barcha attributelari tekshirilsin va<o class="text-success"> email email</o> bõlsin dedi <br />
                    </p>
                </div>
                <img src="/images/6d2.jpg" class="card-img-bottom" alt="!!!"> <br />
                <o class="text-success">
                    public function attributeLabels() <br />
                    { <br />
                    return [ 'name'=>'Ismingizni kiriting',]; <br />
                    } </o>
              <p> Yuqoridagi<strong> function</strong> attributelarni label<s>(nom)</s>larini õzgartiradi </p>
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
