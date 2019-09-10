<?php
use yii\widgets\Breadcrumbs;
use yii\helpers\Inflector;
use dmstr\widgets\Alert; ?>

<div class="content-wrapper">
    <section class="content-header">
        <?php if (isset($this->blocks['content-header'])): ?>
            <h1 class="page-header"><?= $this->blocks['content-header'] ?></h1>
        <?php else: ?>
            <h1 class="page-header">
                <?php
                if ($this->title !== null) {
                    echo $this->title;
                } else {
                    echo Inflector::camel2words(Inflector::id2camel($this->context->module->id));
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } ?>
            </h1>
        <?php endif; ?>

        <?= Breadcrumbs::widget( [
            'links' => isset($this->params['breadcrumbs']) ? /*array_map('strip_tags', */$this->params['breadcrumbs']/*)*/  : [],
        ]) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> <?= getenv('APP_VERSION') ?>
    </div>
    <strong>Copyright &copy; 2015-<?= date('Y') ?> <a href="http://project.dev"><?= getenv('APP_TITLE') ?></a>.</strong>
    All rights reserved.
</footer>