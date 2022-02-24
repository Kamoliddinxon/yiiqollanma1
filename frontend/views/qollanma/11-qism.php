<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

?>

<div class="container-fluid">

 <div class="row">

  <!-- content boshlandi -->
  <div class="col p-0">
   <div class="text-center">
          <h1 class="display-5">-qism</h1>
        <h5>
          <em>
               <p>Ushbu qisimda
                  <a href="" class="h6">Video varianti</a> <br/> <br/>
                </p>
           </em>
        </h5>
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
