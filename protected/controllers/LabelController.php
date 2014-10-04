<?php

class LabelController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'index', 'view',
                    'delete', 'test'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Label;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Label'])) {
            $model->attributes = $_POST['Label'];
            if ($model->save()) {
                Yii::app()->user->setFlash("success", "Data has been saved successfully");
                $this->generate($model);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Label'])) {
            $model->attributes = $_POST['Label'];
            if ($model->save()) {
                 $this->generate($model);
                Yii::app()->user->setFlash("success", "Data has been saved successfully");
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Manages all models.
     */
    public function actionIndex() {
        $model = new Label('search');
        $model->unsetAttributes();  // clear any default values
       
        if (isset($_GET['Label']))
            $model->attributes = $_GET['Label'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Label the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Label::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Label $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'label-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionTest() {
        $languages = Language::model()->findAll();
        foreach ($languages as $model) {
            $this->generate($model, $model->id);
         
        }
    }

    /**
     * Language
     * @param type $model
     */
    public function generate($model, $lang_id = '') {

        if ($lang_id != '') {
            $language = Language::model()->findByPk($lang_id);
        } else {
            $language = Language::model()->findByPk($model->lang_id);
        }


        if (isset($language)) {
            $criteria = new CDbCriteria();
            $criteria->group = 'category';
            $groups = Label::model()->findAll($criteria);
           
            foreach ($groups as $group) {
                $cond = "lang_id ='{$language->id}' AND category = '{$group->category}'";
                
                $data = Label::model()->findAll($cond);
                
               
                $this->layout = "";
                $str = "<?php " . PHP_EOL;
                $str.='$' . $language->code . '_t =  array(' . PHP_EOL;
                foreach ($data as $d) {

                    $str.= '"' . $d->key . '" => "' . $d->value . '",' . PHP_EOL;
                }
                $str.=' ); ' . PHP_EOL;

                $str.=' return $' . $language->code . '_t;' . PHP_EOL;
                $str.= "?>";

                $dir_path = Yii::getPathOfAlias('application.messages.' . $language->code);

                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0755);
                }

                $path = Yii::getPathOfAlias('application.messages.' . $language->code . '.' . $group->category) . '.php';
                if (!is_file($path)) {
                    touch($path);
                }
                $ad = new CCodeFile($path, $str);
                $ad->save();
                chmod($path, 0755);
            }

            Yii::app()->user->setFlash("message", "Languages has been updated successfully");
            $this->redirect($this->createUrl("/label/index"));
        }
    }

}
