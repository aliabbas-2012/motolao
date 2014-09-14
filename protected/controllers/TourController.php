<?php

class TourController extends Controller {

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
                'actions' => array('create', 'update', 'index', 'view', 'delete'),
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
    public function actionView($id, $related = "", $related_id = "") {
        $model = $this->loadModel($id);
        $this->manageRelations($model, $related, $related_id);
        $this->render('view', array(
            'model' => $model,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Tour;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Tour'])) {
            $model->attributes = $_POST['Tour'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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

        if (isset($_POST['Tour'])) {
            $model->attributes = $_POST['Tour'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
    public function actionDelete($id, $related = "", $related_id = "") {

        if (!empty($related)) {
            $this->deleteRelations($related, $related_id);
        } else {
            $this->loadModel($id)->delete();
        }

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    /**
     * Manages all models.
     */
    public function actionIndex() {
        $model = new Tour('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Tour']))
            $model->attributes = $_GET['Tour'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Tour the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Tour::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Tour $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tour-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    //manage relationships here

    public function manageRelations($model, $related = "", $related_id = "") {
        switch ($related) {
            case "tour_langs":
                if (!empty($related_id)) {
                    $model->$related = TourLang::model()->findByPk($related_id);
                } else {
                    $model->$related = new TourLang;
                }
                $model->$related->parent_id = $model->id;
                $model->$related->tour_type = $model->tour_type;
                if (isset($_POST['TourLang'])) {
                    $model->$related->attributes = $_POST['TourLang'];
                    if ($model->$related->save()) {
                        $this->redirect(array('view', 'id' => $model->id, "related" => $related, "related_id" => $related_id));
                    }
                }
                break;
            default:
                $model->tour_langs = new TourLang;
                $model->tour_langs->parent_id = $model->id;
                $model->tour_langs->tour_type = $model->tour_type;
                break;
        }
    }

    /**
     * 
     * @param type $model
     * @param type $related
     * @param type $related_id
     */
    public function deleteRelations($related = "", $related_id = "") {

        switch ($related) {
            case "tour_langs":
                TourLang::model()->deleteByPk($related_id);
                break;
            default:
                break;
        }
    }

}
