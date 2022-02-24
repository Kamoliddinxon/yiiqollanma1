<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

?>

<div class="container-fluid">

 <div class="row">

   <!-- content boshlandi -->
   <div class="col p-0">

       <div class="text-center">
           <h1 class="display-5">3-qism</h1>
           <h5>
               <em>
                   <p>Yiiframeworkni Composer orqali o'rnatish
                       <a href="https://youtu.be/EldeSk7X2i8" class="h6">Video varianti</a> <br/> <br/>
                   </p>
               </em>
           </h5>
       </div>

       <div class="card m-3">
           <div class="card-body">
               <p class="card-text">Internet ga ulanamiz <br />
                   консольni ochamiz <br />
                 <strong>cd domains</strong> (yozamiz) <br />
                   Enter   (bosamiz) <br /> <br />

                   <o class="text-success">composer create-project --prefer-dist yiisoft/yii2-app-advanced</o><s> yiicomposer</s> (yozamiz) <br /> <br />

                   Enter   (bosamiz) ozgina kutamiz
               </p>
           </div>
           <img src="/images/3d0.jpg" class="card-img-bottom" alt="!!!">
       </div>

       <div class="card m-3">
           <div class="card-body">
               <p class="card-text"><o class="text-success">cd </o> <s>yiicomposer</s> (yozamiz) Enter (bosamiz) <br /> <br />

                 <strong>php init</strong> (yozamiz) Enter (bosamiz) <br /> <br />

                 <s>0</s> (yozamiz) Enter (bosamiz) <br /> <br />

                  <strong>yes</strong> (yozamiz) Enter (bosamiz) <br /> <br />

                   barcha fayllar bizning <br />
                 <o class="text-info">📁OSPanel\domains\yiicomposer</o> papkamizga o'rnatildi</p>
           </div>
           <img src="/images/3d1.jpg" class="card-img-bottom" alt="!!!">
       </div>

       <figure class="figure m-3">
           <img src="/images/1d11.jpg" class="figure-img img-fluid rounded" alt="!!!">
           <figcaption class="figure-caption">Создать <br />
               База данных              <br />
               Qilamiz </figcaption>
       </figure>

       <figure class="figure m-3">
           <img src="/images/1d12.jpg" class="figure-img img-fluid rounded" alt="!!!">
           <figcaption class="figure-caption">Nom qõyamiz <br />
             <s>yiicomposer</s> (degan nom berdim) <br />
               OK (bosamiz)</figcaption>
       </figure>

       <div class="card m-3">
           <div class="card-body">
               <p class="card-text">📂 common <br />
                   📂config <br />
                   📄main-local.php <br /> <br />

                   'db' =>[ <br />
                   dbname= (ga bazamizni nomini yozamiz) <s>yiicomposer</s></p>
           </div>
           <img src="/images/3d2.jpg" class="card-img-bottom" alt="!!!">
       </div>

       <div class="card m-3">
           <div class="card-body">
               <p class="card-text">консольga o'tamiz <br />
                   <strong>yii migrate</strong> (yozamiz) Enter (bosamiz) <br />
                 <strong>yes</strong> (yozamiz) Enter (bosamiz)</p>
           </div>
           <img src="/images/3d3.jpg" class="card-img-bottom" alt="!!!">
       </div>

       <figure class="figure m-3">
           <img src="/images/3d4.jpg" class="figure-img img-fluid rounded" alt="!!!">
           <figcaption class="figure-caption"><strong>Имя домена</strong> (ga birorta nom yozamiz)<s> yiicomposer.loc</s><br />

              <strong>Папка домена</strong> (ga projectni papkasini kõrsatamiz)<s> \yiicomposer</s> <br />

             <strong>Добавить</strong> (tugmasini bosamiz) <br />

              <strong>Сохранить</strong> (tugmasini bosamiz)</figcaption>
       </figure>

       <figure class="figure m-3">
           <figcaption class="figure-caption"><strong>.htaccess</strong> (fayl ochamiz) <br /> <br />

            <o class="text-warning">admin qismi qõshilmagan</o> <br />
               Ichiga quyidagilarni yozamiz <br /> <br />

            <o class="text-success">   RewriteEngine On <br /> <br />

               RewriteRule ^(frontend|backend)/web/ - [L] <br />
               RewriteRule .* frontend/web/$0 <br /> <br />

               RewriteCond %{REQUEST_FILENAME} !-f <br />
               RewriteCond %{REQUEST_FILENAME} !-d <br />
               RewriteRule ^([^/]+/web)/.*$ $1/index.php</o></figcaption> <br />
           <img src="/images/3d5.jpg" class="figure-img img-fluid rounded" alt="!!!">
       </figure>

       <div class="card m-3">
           <div class="card-body">
               <p class="card-text">📂 frontend <br />
                   📂config <br />
                   📄main.php <br /> <br />

                   'request' => [ ga quyidagini <br /> <br />

                  <o class="text-success">'baseUrl'=>' ',</o>  (ni qõshamiz) <br /> <br />

                   'urlManager' => [  (ni kommentariya dan ochamiz) <br /> </p>
           </div>
           <img src="/images/3d6.jpg" class="card-img-bottom" alt="!!!">
       </div>

       <div class="card m-3">
           <div class="card-body">
               <p class="card-text">browserga <s>yiicomposer.loc</s> (yozib qidiramiz) <br /> </p>
           </div>
           <img src="/images/3d7.jpg" class="card-img-bottom" alt="!!!"> <br />
           <div class="alert alert-success" role="alert">
               Ana project ishga tushdi :)
           </div>
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