<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.05.2018
 * Time: 14:06
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $newCamera = Product::find()->where(['new' => '1', 'keywords' => 'Camera'])->limit(4)->all();
        $newComputer = Product::find()->where(['new' => '1', 'keywords' => 'Computer'])->limit(4)->all();
        $newTV_audio = Product::find()->where(['new' => '1', 'keywords' => 'Tv&Audio'])->limit(4)->all();
        $newSmartphone = Product::find()->where(['new' => '1', 'keywords' => 'Smartphone'])->limit(4)->all();

        $this->setMeta('Malias');

        return $this->render('index',
            compact('newCamera', 'newComputer', 'newTV_audio', 'newSmartphone', 'item'));
    }

    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
//        $products = Product::find()->where(['category_id' => $id])->all();

        $category = Category::findOne($id);
        if(empty($category))
        {
            throw new \yii\web\HttpException(404, 'Такой категории нет.');
        }

        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4,
            'forcePageParam' => false, 'pageSizeParam' => false]);

        $products = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('Malias | ' . $category->name, $category->keywords, $category->description);

        return $this->render('view', compact('products','pages', 'category'));
    }



    public function actionSearch()
    {
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('Malias | Пошук: ' . $q);
        if(!$q)
        {
            return $this->render('search');
        }

        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4,
            'forcePageParam' => false, 'pageSizeParam' => false]);

        $products = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('search', compact('products','pages', 'q'));
    }
}