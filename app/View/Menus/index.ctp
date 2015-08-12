<ul class="header main-menu">
<? if (!isset($menus) || empty($menus)) :
        $menus = $this->requestAction('/menus/index');
    endif; 
    foreach($menus as $menu) : 
?>
    <li>
    <?="<a href='".DS.$menu['Menu']['controller'].DS.$menu['Menu']['action']."'>".$menu['Menu']['name']."</a>"; ?>
    </li>
<? endforeach; ?>
</ul>