<?php

namespace globaloxs\kalendar;
use yii\helpers\Html;

/**
 * This is just an example.
 */
class Kalendar extends \yii\base\Widget
{

    public $options = [];

    public function run()
    {
        $view = $this->getView();
        $js = 'var eventData = '.json_encode($this->options['data']) .';';
        KalendarAsset::register($view);

        for($i = 1; $i<=12; $i++){
            echo Html::beginTag('div', ['class' => 'col-md-4']);
                echo Html::tag('div', '', ['id' => 'mes-'.$i]);
            echo Html::endTag('div');
            $js .= '$("#mes-'.$i.'").zabuto_calendar(
            {
              year: '.$this->options['year'].',
              month: '.$i.',
              show_previous: false,
              show_next: false,
              language: "es",
              data: eventData
            });';
        }


        $view->registerJs($js);
    }
}
