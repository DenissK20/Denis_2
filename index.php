<?php
require 'vendor/autoload.php';

$app = new \atk4\ui\App('Магазин 2.0');
$app->initLayout('Centered');

$tabs = $app->add('Tabs');

$clothes = $tabs->addTab('Одежда');

$col_clothes = $clothes->add('Columns');
$col1 = $col_clothes->addColumn(5);
$col2 = $col_clothes->addColumn(5);
$col3 = $col_clothes->addColumn(5);

$image = $col1->add(['Image', 'https://st.shanti-shanti.com/pp/200x180/cc7c1391acdfffa5d96d8b960f4c028f%402x.jpg']);
$image = $col2->add(['Image','https://veralline.com/uploads/images/comparison/2015/03/12/55618ffdc4.jpg']);
$image = $col3->add(['Image','https://cdn.sptmr.ru/upload/resize_cache/iblock/d4c/331_394_1/6881350299.JPG']);

$electronics = $tabs->addTab('Электроника');

$col_electronics = $electronics->add('Columns');
$col4 = $col_electronics->addColumn(5);
$col5 = $col_electronics->addColumn(5);
$col6 = $col_electronics->addColumn(5);

$image = $col4->add(['Image', 'https://www.dikarka.ru/notebook/i/06.jpg']);
$image = $col5->add(['Image', 'https://s.dns-shop.ru/up/blog/cache/full/15083.1478824649.jpg']);
$image = $col6->add(['Image', 'http://www.trickster.ws/wp-content/uploads/2012/06/7.jpg']);

$products = $tabs->addTab('Продукты');

$col_products = $products->add('Columns');
$col7 = $col_products->addColumn(5);
$col8 = $col_products->addColumn(5);
$col9 = $col_products->addColumn(5);

$image = $col7->add(['Image', 'https://milkcompany.ru/media/folder_page_pic/big/16_24_a19254fd125f30fdc3401b2072a80e.png']);
$image = $col8->add(['Image', 'http://heaclub.ru/tim/935b79e486be973ed53bb84bbc3d8cec.jpg']);
$image = $col9->add(['Image', 'http://volshebnaya-eda.ru/wp-content/uploads/2017/09/sladov-810x608.jpg']);

$header = $app->add(['Header', 'Контакты', 'aligned'=>'down', 'size'=>1]);
$label1 = $app->add(['Label', '22822822', 'small teal', 'icon'=>'phone']);
$label2 = $app->add(['Label', 'Почта', 'small teal', 'icon'=>'envelope']);
$button = $app->add(['Button', 'Наш магазин (нет)', 'small blue']);
$button ->link('https://www.google.lv/maps/place/Rimi/@56.9555633,24.0112007,14z/data=!4m8!1m2!2m1!1z0KDQuNC80Lgg0YDQuNCz0LA!3m4!1s0x0:0x9d612c6880f107fc!8m2!3d56.9536663!4d24.0380269');
