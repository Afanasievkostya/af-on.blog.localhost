<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property int $category_video_id
 * @property string $name
 * @property string $video
 * @property string $content
 * @property int $date
 * @property string $keywords
 * @property string $description
 * @property int $views
 * @property string $active
 * @property string $archive
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    public function getCategory()
    {
        return $this->hasOne(CategoryVideo::className(), ['id' => 'category_video_id']);
    }

    public function afterFind()
    {
        $monthes = [
          1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля',
          5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа',
          9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря'
        ];

        $this->date = date('j ', $this->date).$monthes[date('n', $this->date)].date(' Y', $this->date);
    }

    /**
    * {@inheritdoc}
    */
    public function rules()
    {
        return [
            [['category_video_id', 'name'], 'required'],
            [['category_video_id', 'date', 'views'], 'integer'],
            [['content', 'active', 'archive'], 'string'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],

        ];
    }



    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ видео',
            'category_video_id' => 'Категория',
            'name' => 'Название',
            'content' => 'Содержание',
            'date' => 'Дата',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
            'views' => 'Просмотры',
            'active' => 'Черновик',
            'archive' => 'Архив',
        ];
    }
}
