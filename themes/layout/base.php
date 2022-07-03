<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>


    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">

                        <?php
                        NavBar::begin([
                            // 'brandUrl' => Yii::$app->homeUrl,
                            // 'options' => [
                            //     'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
                            // ],
                        ]);
                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav'],
                            'items' => [
                                ['label' => 'Home', 'url' => ['/site/index']],
                                ['label' => 'About', 'url' => ['/site/about']],
                                ['label' => 'Contact', 'url' => ['/site/contact']],
                                ['label' => 'test Html', 'url' => ['site/test-html']],
                                ['label' => 'Sum page', 'url' => ['test-clean-code/sum', 'num1' => 2, 'num2' => 5]],
                                ['label' => 'clean code', 'url' => ['test-clean-code/template']],
                                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]
                                ) : ('<li>'
                                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout']
                                    )
                                    . Html::endForm()
                                    . '</li>'
                                )
                            ],
                        ]);
                        NavBar::end();
                        ?>
                    </span>
                </button>
            </div>
        </nav>
    </header>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://www.yiiframework.com/doc/guide/2.0/en/concept-components">Yii </a>
        </div>
    </footer>

    <?php $this->endBody() ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php $this->endPage() ?>