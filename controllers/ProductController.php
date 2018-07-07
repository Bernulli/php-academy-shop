<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.05.2018
 * Time: 13:48
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');

        //lazy load
        $product = Product::findOne($id);
        if(empty($product))
        {
            throw new \yii\web\HttpException(404, 'Такого товара нет.');
        }

        //greedy load
//        $product = Product::find()
//            ->with('category')
//            ->where(['id' => $id])
//            ->limit(1)
//            ->one();

        $rec_items = Product::find()->where(['new' => '1'])->limit(6)->all();

        $this->setMeta('Malias | ' . $product->name, $product->keywords, $product->description);

        return $this->render('view', compact('product', 'rec_items'));
    }
}