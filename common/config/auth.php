<?php

return [
    'class' => 'yii\rbac\DbManager',
    'itemTable' => 'auth_item',
    'itemChildTable' => 'auth_item_child',
    'assignmentTable' => 'auth_assignment',
    'ruleTable' => 'auth_rule',
    'defaultRoles' => ['Employee'],
];