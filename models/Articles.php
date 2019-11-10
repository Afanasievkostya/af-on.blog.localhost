<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $image
 * @property string $content_info
 * @property string $content
 * @property string $article_date
 * @property string $keywords
 * @property string $description
 * @property string $ok
 * @property string $bad
 * @property int $sums
 * @property int $hits
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function afterFind() {
        $monthes = [
          1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля',
          5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа',
          9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря'
        ];

        $this->date = date('j ', $this->date).$monthes[date('n', $this->date)].date(' Y', $this->date);
    }

}
