<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Manage Contact US </h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12" >
        <?php
        $this->renderPartial('//confContactUsSetting/_form', array(
            'model' => $model,
            'm' => $m,
        ));
        ?>
    </div><!-- search-form -->
</div>
