<?php

namespace sirgalas\yii2-xdan-datetimepicker;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;
class XdanDataPiker extends InputWidget
{
    public $option=[];

    public function init()
    {
        parent::init();
    }
    public function run(){
        $view = $this->getView();
        XdanAssets::register($view);
        echo $this->inputRender();
        $view->registerJs($this->getRegisterJS());
    }

    private function inputRender(){
        if ($this->hasModel()) {
            return Html::activeTextInput($this->model, $this->attribute, $this->options);
        }
        return Html::textInput($this->name, $this->value, $this->options);
    }

    private function getRegisterJS(){
        if(empty($this->option)){
            $option='';
        }else{
            $option=Json::encode($this->option);
        }
        return '$("#'.$this->options['id'].'").datetimepicker('.$option.');';
    }
}