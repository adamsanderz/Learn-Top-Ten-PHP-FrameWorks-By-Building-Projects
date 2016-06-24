<?php

/* @var $this yii\web\View */

$this->title = 'JobBase Application';
?>
<div class="site-index">

<?php if(null !== Yii::$app->session->getFlash('success')) : ?>
    <div class="alert alert-success"> <?php echo Yii::$app->session->getFlash('success'); ?>  </div>
<?php endif; ?>

    <div class="jumbotron">
        <h1>Need a Job!</h1>

        <p class="lead">Browse Open Job Listing or Find Empolyes.</p>

        <p><a class="btn btn-lg btn-success" href="/jobs/index">Start Browsing</a>

         <a class="btn btn-lg btn-primary" href="/jobs/create">Create Listing</a>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Browse Listings</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                   .</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Find Employes</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Free to Join</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                   
                   .</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
