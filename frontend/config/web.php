<?php
$config = \yii\helpers\ArrayHelper::merge(
    require(__DIR__.'/_base.php'),
    [
        'controllerNamespace' => 'frontend\controllers',
        'defaultRoute' => 'site/index',
        'modules' => [
            'user' => [
                'class' => 'frontend\modules\user\Module',
            ],
        ],
    ]
);

return $config;