<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <?php #echo \backend\widgets\SidebarUserPanel::widget(['asset'=>$directoryAsset]); ?>

        <!-- Sidebar app menu -->
        <?= \backend\widgets\ApplicationMenu::widget(); ?>
    </section>
</aside>