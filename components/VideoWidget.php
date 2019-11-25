<?php

namespace app\components;

use yii\base\Widget;
use app\models\CategoryVideo;
use Yii;

class VideoWidget extends Widget {

    public $tplVideo;
    public $model;
    public $data;
    public $tree;
    public $menuHtml;

    public function init(){
          parent::init();
          if( $this->tplVideo === null ){
              $this->tplVideo = 'menuVideo';
          }
          $this->tplVideo .= '.php';
      }
// строим массив
    public function run() {
      // get cache
      if($this->tplVideo == 'menuVideo.php'){
      $menuVideo = Yii::$app->cache->get('menuVideo');
      if($menuVideo) return $menuVideo;
      }


      $this->data = CategoryVideo::find()->indexBy('id')->asArray()->all();
      $this->tree = $this->getTree(); // храним дерево
      $this->menuHtml = $this->getMenuHtml($this->tree);

      // set cache
      if($this->tplVideo == 'menuVideo.php') {

     Yii::$app->cache->set('menuVideo', $this->menuHtml, 60);
      }
      return $this->menuHtml;
    }

// из массива строим дерево
    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

     //передача параметра в select $tab пустая строка

    protected function getMenuHtml($tree, $tab = '') {
          $str = '';
          foreach ($tree as $categoryVideo) {
              $str .= $this->catToTemplate($categoryVideo, $tab);
          }
          return $str;
      }

    protected function catToTemplate($categoryVideo, $tab){
        ob_start(); //буферизирует вывод
        include __DIR__ . '/menuVideo_tpl/' . $this->tplVideo;
        return ob_get_clean();
    }
}
