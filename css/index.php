<?php
$menu_items = [
    ['label'=>'Google','url'=>'http://google.com'],
    ['label'=>'Yandex','url'=>'http://yandex.ru'],
    ['label'=>'Bing','url'=>'http://bing.com'],
    ['label'=>'DuckDuckGo','url'=>'http://DuckDuckGo.com']
];
renderMenu($menu_items)
function renderMenu($items){
    echo '<ul>';
    foreach($items as $item){
        echo '<li><a href="'.$item['url'].'">'.$item['label'].'</a></li>';
    }
}