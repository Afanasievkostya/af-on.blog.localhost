<?php

namespace app\controllers;
use app\models\category;
use app\models\articles;
use yii\data\Pagination;
use Yii;


class CategoryController extends AppController {
  // показ всех публикаций на странице статьи

  public function actionArticles() {
  //  $cards = Articles::find()->all();
    $query = Articles::find();
    $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
    $cards = $query->offset($pages->offset)->limit($pages->limit)->all();

    $this->setMeta('af-on.blog | ' . "статьи");
    return $this->render('articles', compact('cards', 'pages'));
  }

  // показ публикаций по категориям

  public function actionView($id) {
    //$id = Yii::$app->request->get('id'); получение id из get ненадо уже есть $id из параметра
    $category = Category::findOne($id);

    if(empty($category))
          throw new \yii\web\HttpException(404, 'Такой категории нет!'); // сообщение об ошибке
        //  $articles = Articles::find()->where(['category_id' => $id])->all();
      $query = Articles::find()->where(['category_id' => $id]);
      $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 1, 'forcePageParam' => false, 'pageSizeParam' => false]);
      $articles = $query->offset($pages->offset)->limit($pages->limit)->all();

    $this->setMeta('af-on.blog | ' . $category->name, $category->keywords, $category->description);
    return $this->render('view', compact('articles', 'pages', 'category'));
  }

  // поиск

  public function actionSearch() {
    $q = trim(Yii::$app->request->get('q'));

    $this->setMeta('af-on.blog | Поиск: ' . $q);

    if(!$q)
          return $this->render('search');

    $query = Articles::find()->where(['like', 'name', $q]);
    $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
    $articles = $query->offset($pages->offset)->limit($pages->limit)->all();

    return $this->render('search', compact('articles', 'pages', 'q'));
  }

}