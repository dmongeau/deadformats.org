<?php
	
	Kate::requireModel('Category');
	
	$tree = Category::getTree();

?><ul>
	<?php
    
	
		foreach($tree as $branch) {
			?><li class="has-submenu">
                <a href="/<?=$branch['parent']['permalink']?>/" class="arrow"><?=$branch['parent']['name']?></a>
                <ul>
                <?php foreach($branch['items'] as $item) { ?>
                    <li><a href="/<?=$item['permalink']?>/"><?=$item['name']?></a></li>
                <?php } ?>
                </ul>
            </li><?php
        }
		
		
		
	?>
    
    <li class="has-submenu">
    	<a href="/" class="arrow">All</a>
        <ul>
            <li><a href="/medias/">Medias</a></li>
            <li><a href="/locations/">Locations</a></li>
            <li><a href="/dates/">Dates</a></li>
            <li><a href="/lots/">Lots</a></li>
        </ul>
    </li>
    
    <li class="search">
        <form action="/search/" method="get">
            <input type="text" name="q" class="hint" title="Search..." />
        </form>
    </li>
</ul>