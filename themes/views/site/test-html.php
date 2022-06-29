<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test page</title>
</head>

<body>
    <h1>Test page</h1>

    <?php

    use yii\helpers\Html;

    echo Html::tag('p', 'html helper', ['class' => 'wel']);
    echo Html::tag('h1', 'this is h1');
    echo Html::tag('div', 'this is div');
    echo Html::tag('span', 'this is span');
    echo Html::tag('br');
    echo Html::input('text', 'surname', null, ['class' => 'form-control', 'placeholder' => 'just a test']);
    echo Html::tag('br');
    echo Html::radio('gender', null, ['label' => 'male']);
    echo Html::radio('gender', null, ['label' => 'female']);
    echo html::tag('br');
    echo Html::checkbox('agree', true, ['label' => 'agree']);
    echo Html::tag('br');
    echo Html::tag('br');
    echo Html::submitButton('submit', ['class' => 'btn btn-success']);
    echo Html::button('button', ['class' => 'btn btn-info']);
    echo Html::resetButton('reset', ["class" => 'btn btn-warning']);
    echo Html::tag('br');
    echo Html::tag('br');
    echo Html::dropDownList('gender', '', ['male' => 'male', 'fmale' => 'Female'], ['class' => 'form-control']);
    echo Html::tag('br');
    // echo Html::img('@Web/img1',['class'=>'img-round'],);
    echo Html::ul(['A' => 'a', "B" => 'b', 'c' => "C"]);
    echo Html::ol(['A' => 'a', "B" => 'b', 'c' => "C"]);


    ?>
</body>

</html>