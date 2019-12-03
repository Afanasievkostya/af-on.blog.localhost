<?php

namespace app\controllers;

use app\models\categoryVideo;
use app\models\video;
use yii\data\Pagination;
use Yii;

class VideoController extends AppController
{
    public function actionClip()
    {
        $active = '1';
        $archive = '0';

        $query = Video::find()->where('active = :active', [':active' => $active])->andWhere('archive = :archive', [':archive' => $archive])->orderBy('date desc');

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'forcePageParam' => false, 'pageSizeParam' => false]);

        $clips = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('af-on.blog | ' . "видео");

        if ($clips) {
            return $this->render('clip', compact('clips', 'pages'));
        }
    }

    public function actionView($id)
    {
        $categoryVideo = CategoryVideo::findOne($id);
        $active = '1';
        $archive = '0';
        if (empty($categoryVideo)) {
            throw new \yii\web\HttpException(404, 'Такой категории нет!');
        } // сообщение об ошибке
        //  $articles = Articles::find()->where(['category_id' => $id])->all();

        $query = Video::find()->where(['category_video_id' => $id, 'active' => $active, 'archive' => $archive])->orderBy('date desc');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 1, 'forcePageParam' => false, 'pageSizeParam' => false]);

        $videos = $query->offset($pages->offset)->limit($pages->limit)->all();
        if (empty($videos)) {
            throw new \yii\web\HttpException(404, 'Такой публикации нет!');
        } // сообщение об ошибке

        $this->setMeta('af-on.blog | ' . $categoryVideo->name, $categoryVideo->keywords, $categoryVideo->description);

        if ($videos) {
            return $this->render('view', compact('videos', 'pages', 'categoryVideo'));
        }
    }

    public function actionMovie()
    {
        $id = Yii::$app->request->get(id); // получаем id из параметра get

        $movies = Video::findOne($id); // получаем данные из таблицы с id

        $model = Video::find()->where(['id' => $id])->one();


        if (empty($movies)) {
            throw new \yii\web\HttpException(404, 'Такого видео нет!');
        } // сообщение об ошибке

        $this->setMeta('af-on.blog | ' . "Кино"); // метассылка

        return $this->render('movie', compact('movies', 'model'));
    }

    public function actionArchive()
    {
        $archive = '1';

        $query = Video::find()->where('archive = :archive', [':archive' => $archive]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);

        $cards = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('af-on.blog | ' . "архив");

        if ($cards) {
            return $this->render('archive', compact('cards', 'pages'));
        }
        if (empty($cards)) {
            throw new \yii\web\HttpException(404, 'В архиве ничего нет!');
        }
    }
}
