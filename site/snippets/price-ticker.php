<article class="price-ticker bg-white body s-smaller c-black flex flex-sb va-c bt-lgrey">
	<div class="pt-10 flex flex-sb h-90 s-h-60 w-full m-c">
	    <?php if($page->is('individuelle-samtaler')): ?>
	    	<p class="w-half mt-1">Individuel samtale:</p>
	    	<div class="flex ta-r">
	    		<p class="mt-1">399,-</p>
	    		<button class="bg-lpurple book-button c-purple mono small flex va-c h-60 br-3 mt-15 ml-1 pl-1 pr-1 s-smallest s-mr-0">Skriv til os</button> 
	    	</div>
	    <?php elseif($page->isChildOf('team')): ?>
	    	<p class="w-50">Individuel samtale<span class="s-remove"> m. <?php if ($name = $page->firstname()): ?><?= $name->kirbytextinline() ?><?php endif ?></span>:</p>
	    	<p class="w-50 ta-r">399,- <span class="mono smaller s-smallest s-remove">inkl. gratis forsamtale</span></p>
	    <?php elseif($page->is('grupper')): ?>
	    	<p class="w-50">Gruppeforløb:</p>
	    	<p class="w-50 ta-r"><span class="mono smaller s-smallest">Fra</span> 200,- <span class="mono smaller s-smallest">per gang</span></p>
	    <?php elseif($page->isChildOf('grupper')): ?>
	    	<p class="w-50"><?= $page->length() ?>:</p>
	    	<p class="w-50 ta-r"><?= $page->price() ?>,-</p>
	    <?php endif ?>
	</div>
</article>