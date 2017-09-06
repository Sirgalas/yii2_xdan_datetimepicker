# yii_xdan_datetimepicker
Это попытка прикрутить xdan_datetimepicker
устанавливаем так
*composer require sirgalas/yii2-xdan-datetimepicer*
```php
$form->field($model, 'namemodel')->widget(XdanDataPiker::className(),[
     'option'=>[
          lang'=>'ru'
     ]
]);
```
**option** исподьзуется для настроек указаных в документации этого проложения
https://github.com/xdan/datetimepicker
