<?php

class CategoryController extends Controller {

    public $layout = "//layouts/main";

    public function actionIndex() {

        $this->render('//default/index');
    }

}
