<?php
/* @var $this yii\web\View */
?>

<?php
    $parentCatsArr = [];
    $catsArr = [];
    foreach($cats as $parcat => $parval)
        if (is_null($parval['parent_id'])) {
            $parentCatsArr = [$parval['id'] => $parval['cat_name']];
        }
        else $parentCatsArr[$parval['parent_id'][$parval['id']]] = $parval['cat_name'];
    /*foreach($cats as $cat => $catval)
        if (!is_null($catval['parent_id'])) {
            $parentCatsArr[$catval['parent_id']][] = $catval['cat_name'];
        }*/
    var_dump($cats);

/*    foreach($cats as $cat => $catval)
        if ($catval['parent_id'])
            echo "<p style='color: #0b72b8'>{$catval['cat_name']}</p>";
        else echo "<p style='color: #0d3349'>{$catval['cat_name']}</p>";*/
?>

