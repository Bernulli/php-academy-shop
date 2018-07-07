<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180528_120525_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(10)->notNull(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->text()->null(),
            'price' => $this->float()->notNull()->defaultValue(0),
            'keywords' => $this->string(255)->null(),
            'description' => $this->string(255)->null(),
            'img' => $this->string(255)->defaultValue('no-image.png'),
            'new' => $this->boolean()->null(),
            'sale' => $this->boolean()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
