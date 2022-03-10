<?php snippet('header') ?>
<?php snippet('nav') ?>
<?php snippet('mobile-nav') ?>

	<div class="content bg-white">
	<div class="hero hero-spread hero-75 bg-white clearfix">
		<div class="hero-half pr-1 bottom">
			<h1 class="subheadline"><?= $page->title() ?></h1>
		</div>
		<div class="hero-half hero-image" style="background-image:url(<?= $page->image()->url() ?>);">
			<div class="hero-caption ta-r mr-1 mb-1"><p class="small c-white"><?= $page->caption() ?></p></div>
		</div>
	</div>
	</div>
<div class="bg-lgrey">
	<main class="clearfix ptb-2">
		<section class="sidebar">
			<ul>
				<li>
					<ul>
						<lh class="small regular"><a href="#ledelse">Team</a></lh>
					</ul>
				</li>
				<li>
					
					<ul>
						<lh class="small regular"><a href="#advisoryboard">Advisory Board</a></lh>
						<?php foreach ($page->boardmember()->toStructure() as $boardmember): ?>
						<li class="pl-1">
							<a href="#<?= $boardmember->name()->slug() ?>" class="small c-grey"><?= $boardmember->name() ?></a>
						</li>
						<?php endforeach ?>
					</ul>
				</li>
			</ul>
		</section>
		<section class="three-content">
			<article class="three-content-two">
				<p class="body"><?= $page->description()->widont() ?></p>
			</article>
			<article class="three-content-three">
				<div class="chapter pt-2 pb-1">
					<h3 class="subheadline" id="ledelse">Team</h3>
						<p class="body c-grey pl-1 pr-1"><?= $page->staffsubtext() ?></p>
				</div>
				<section class="four-content">
				      <?php foreach ($page->children()->shuffle() as $staff): ?>
				      <article class="four-content-third mb-1">
				        <a href="<?= $staff->url() ?>">
				          <div class="card bg-white lift">
				            <div class="card-photo"><?= $staff->image()->resize(700) ?></div>
				            <div class="card-text"><h3 class="body ta-c ptb-1"><?= $staff->firstname() ?></h3></div>
				          </div>
				        </a>
				      </article>
				        <?php endforeach ?>
				</section>
			</article>

				<article class="three-content-three">
				<div class="chapter pt-1 pb-1">
					<h3 class="subheadline" id="advisoryboard">Advisory Board</h3>
						<p class="body c-grey pl-1 pr-1"><?= $page->boardmembersubtext() ?></p>
				</div>

				<?php foreach ($page->boardmember()->toStructure() as $boardmember): ?>
					<div class="tab pr-1" id="<?= $boardmember->name()->slug() ?>">
						<div class="tab-header right"><h3 class="subheadline"><?= $boardmember->name() ?></h3></div>
						<p class="body pb-2"><?= $boardmember->description()->kirbytextinline() ?></p>
					</div>
				<?php endforeach ?>
				<hr>
			</article>
	</section>

	</main>
</div>
<?php snippet('footer-content') ?>
<?php snippet('footer') ?>