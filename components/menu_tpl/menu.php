<li class="arrow-plus">
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']])?>">
        <?= $category['name'] ?>
    </a>
<!--    --><?php //if(isset($category['childs'])): ?>
<!--        <div class="cat-left-drop-menu">-->
<!--            <div class="cat-left-drop-menu-left">-->
<!--                <ul>-->
<!--                    --><?//= $this->getMenuHtml($category['childs']) ?>
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //endif; ?>
</li>