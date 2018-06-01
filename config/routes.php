<?php

return array(
    'products/([0-9]+)' => 'products/view/$1',

    'catalog' => 'catalog/index',
    'category/([0-9]+)' => 'catalog/category/$1',

    '' => 'site/index',
);