<?php

class CategoryController extends Controller {

    public $layout = "//layouts/main";

    public function actionIndex($slug = '') {
        $criteria = new CDbCriteria();
        $criteria->addCondition("name = :name");
        $criteria->params = array(
            ':name' => $slug
        );
        $model = Category::model()->find($criteria);
        $this->render('//category/index', array('model' => $model));
    }

}
