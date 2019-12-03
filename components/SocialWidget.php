<?php
namespace app\components;

use yii\base\Widget;

class SocialWidget extends Widget
{
  public function run()
  {
      return $this->render('social');
  }
}
