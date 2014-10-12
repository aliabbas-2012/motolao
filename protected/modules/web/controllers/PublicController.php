<?php

/**
 * Description of PublicController
 *
 * @author ali
 */
class PublicController extends Controller {

    /**
     * 
     * @param type $model
     */
    public function sentContactEmail($model) {
        if ($model->validate()) {
            
        }
        return $model;
    }

}
