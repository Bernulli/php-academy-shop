<option
    value="<?= $category['id'] ?>"
    <?php if($category['id'] == $this->model->category_id) echo 'selected' ?>>
    <?= $tab . $category['name'] ?></option>
<?php if(isset($category['childs'])): ?>
    <div class="cat-left-drop-menu">
        <div class="cat-left-drop-menu-left">
            <ul>
                <?= $this->getMenuHtml($category['childs'], $tab . '-') ?>
            </ul>
        </div>
    </div>
<?php endif; ?>