<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

?>

<div class="container-fluid">

 <div class="row">

   <!-- content boshlandi -->
   <div class="col p-0">

     <div class="text-center">
                <h1 class="display-5">4-qism</h1>
                <h5>
                    <em>
                        <p>Api haqida
                            <a href="https://youtu.be/hkH_caqsawE" class="h6">Video varianti</a> <br/> <br/>
                        </p>
                    </em>
                </h5>
            </div>

            <figure class="figure m-3">
                <figcaption class="figure-caption">📁backend (papkani copy qilamiz) <br />
                    📁untitled   (papkasiga <strong>(asosiy</strong> projectimizni papkasiga) <o class="text-success">api</o> deb paste qilamiz) вставить</figcaption> <br />
                <img src="/images/4d0.jpg" class="figure-img img-fluid rounded" alt="!!!">
            </figure>

            <div class="card m-3">
                <div class="card-body">
                    <p class="card-text"> 📂common <br />
                        📂config <br />
                        📄bootstrap.php   (da eng tagidagi qatordan nusxa olib yangi qatorga qõyamiz va <s>console</s> o'rniga <o class="text-success">api</o> yozamiz) <br /> </p>
                </div>
                <img src="/images/4d1.jpg" class="card-img-bottom" alt="!!!"> <br />
            </div>

       <div class="card m-3">
           <div class="card-body">
               <p class="card-text">
                   📂api <br />
                   📂config <br />
                   📄main.php <br />
                   return [ <br /> <br />

                   'id' => 'app-<s>backend</s>', o'rniga <o class="text-success">api</o> yozamiz va <br />

                   'controllerNamespace' => '<s>backend</s>\controllers', o'rniga <o class="text-success">api</o> yozamiz ✓</p>
           </div>
           <img src="/images/4d2.jpg" class="card-img-bottom" alt="!!!"> <br />
           <div class="alert alert-success" role="alert">
               Manashu yangi <strong>api</strong> papkamiz api bo'ldi
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
