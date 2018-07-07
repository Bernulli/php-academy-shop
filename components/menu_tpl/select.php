<option
        value="<?= $category['id'] ?>"
    <?php if($category['id'] == $this->model->parent_id) echo 'selected' ?>
    <?php if($category['id'] == $this->model->id) echo 'disabled' ?>>
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