<?php
/* @var $this UserController */
/* @var $model User */


?>


<div class="pading-bottom-5">
    <div class="left_float">
        <h1>User Profile </h1>
    </div>

    <?php /* Convert to Monitoring Log Buttons */ ?>
    <div class = "right_float">
        <span class="creatdate">
            <?php
            //if (isset($this->OpPermission[ucfirst($this->id) . ".Update"]) && $this->OpPermission[ucfirst($this->id) . ".Update"]) {
                echo CHtml::link("Edit", $this->createUrl("update", array("id" => $model->primaryKey)), array('class' => "print_link_btn"));
            //}
            ?>
        </span>
    </div>
</div>
<div class="clear"></div>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        array(
            'name' => 'username',
            'value' => $model->username,
        ),
        array(
            'name' => 'first_name',
            'value' => !empty($model->first_name) ? $model->first_name : "",
        ),
        
        array(
            'name' => 'last_name',
            'value' => !empty($model->last_name) ? $model->last_name : "",
        ),
        array(
            'name' => 'email_id',
            'value' => !empty($model->email) ? $model->email : "",
        ),
    ),
));
?>

