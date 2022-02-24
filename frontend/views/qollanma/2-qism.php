<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

/**
 * @var \yii\web\Controller $sarlavh
 */

?>

<div class="container-fluid">

 <div class="row">

     <!-- content boshlandi -->
  <div class="col p-0">

      <div class="text-center">
          <h1 class="display-5">2-qism</h1>
          <h5>
              <em>
                  <p><?=$sarlavh?>
                      <a href="https://youtu.be/9_v0DQSWsAc" class="h6">Video varianti</a> <br/> <br/>
                  </p>
              </em>
          </h5>
      </div>

      <div class="card m-3">
          <div class="card-body">
              <p class="card-text">📂 backend <br />
                  📂config <br />
                  📄main.php <br />
                  'request'=>[ ga Quyidagi ni qõshamiz <br />
                  <o class="text-success">'baseUrl'=>'/admin',</o><br />
                  'urlManager'=>[ ni kommentariya dan ochib Quyidagi ni qõshamiz <br />
                  <o class="text-success">'scriptUrl'=>'/backend/index.php',</o></p>
          </div>
          <img src="/images/2d0.jpg" class="card-img-bottom" alt="!!!">
      </div>

      <div class="card m-3">
          <div class="card-body">
              <p class="card-text"><strong>.htaccess</strong> faylimizga õzgartirish kiritamiz backend qismini ham qõshdik <br /> <br />
                  <o class="text-success"> RewriteEngine On <br /> <br />

                  # End the processing, if a rewrite already occurred <br />
                  RewriteRule ^(frontend|backend)/web/ - [L] <br /> <br />

                  # Handle the case of backend, skip ([S=1]) the following rule, if current matched <br />
                  RewriteRule ^admin(/(.*))?$ backend/web/$2 [S=1]<br /> <br />

                  # handle the case of frontend <br />
                  RewriteRule .* frontend/web/$0 <br /> <br />

                  # Uncomment the following, if you want speaking URL <br />
                  RewriteCond %{REQUEST_FILENAME} !-f <br />
                  RewriteCond %{REQUEST_FILENAME} !-d <br />
                  RewriteRule ^([^/]+/web)/.*$ $1/index.php </o> </p>
          </div>
          <img src="/images/2d1.jpg" class="card-img-bottom" alt="!!!">
      </div>

      <div class="card m-3">
          <div class="card-body">
              <p class="card-text">Sahifamizga <br />
                 yii.loc<strong>/admin</strong> (yozib kirsak) <br />
                  admin qismiga õtamiz ya'ni backendga <br />
              </p>
          </div>
          <img src="/images/2d2.jpg" class="card-img-bottom" alt="!!!"> <br />
         <strong> <em class="text-warning"> Ana shunday onson yo'l bilan admin qismini ham sozlab oldik</em> </strong> <br />
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