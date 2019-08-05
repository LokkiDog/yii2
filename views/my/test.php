<h1>Test page</h1>

<?php
/** @var TYPE_NAME $cats */
//echo $cats;
//debug($cats);
//echo count($cats->products);
//debug($cats);
foreach ($cats as $cat) {
    echo '<ul>';
        echo '<li>'.$cat->title.'</li>';
        $products = $cat->products;
        foreach ($products as $product) {
            echo '<ul>';
            echo '<li>'.$product->title.'</li>';
            echo '</ul>';
            }
    echo '</ul>';

}

//if(is_object($cats)) {
//    foreach ($cats as $cat) {
//        echo $cat->title.'<br>';
//    }
//}else{
//    foreach ($cats as $cat){
//        echo $cat['title'].'<br>';
//    }
//}
?>



<div class="btn btn-success" id="btn">Click</div>
<?php
$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url: 'index.php?r=my/index',
            data: {test: '123'},
            type: 'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
JS;

$this->registerJs($js);