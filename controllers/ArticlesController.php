<?php

namespace app\controllers;
use app\models\category;
use app\models\articles;
use Yii;


class ArticlesController extends AppController {

  public function actionView() {
    $id = Yii::$app->request->get(id); // получаем id из параметра get
    $articles = Articles::findOne($id); // получаем данные из таблицы с id

    if(empty($articles))
          throw new \yii\web\HttpException(404, 'Такой публикации нет!'); // сообщение об ошибке


    $this->setMeta('af-on.blog | ' . "статья"); // метассылка
    return $this->render('view', compact('articles'));
  }

}
