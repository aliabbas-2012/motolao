<?php

class CategoryController extends Controller {

    public $layout = "//layouts/main";

    public function actionIndex($category = '') {
        $this->page_key = "tours-bikes";
        $criteria = new CDbCriteria();
        $criteria->addCondition("name = :name");
        $criteria->params = array(
            ':name' => $category
        );
        $model = Category::model()->find($criteria);
        $this->render('//category/index', array('model' => $model));
    }

    /**
     * 
     * @param type $category
     * @param type $slug
     */
    public function actionDetail($category = "", $slug = "") {
        $slug = explode("-", $slug);
        $id = $slug[0];

        $model = Tour::model()->findByPk($id);

        $this->pageTitle = "[".Yii::app()->name."]".$model->name;
        $this->meta_keywords = $model->meta_title;
        $this->meta_description = $model->meta_description;

        $this->render('//category/detail', array('model' => $model));
    }

}
