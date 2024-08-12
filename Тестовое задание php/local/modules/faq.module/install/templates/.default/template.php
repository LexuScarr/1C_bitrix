<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="faq-list">
	<?php foreach ($arResult['ITEMS'] as $item): ?>
		<div class="faq-item">
			<h3><?= htmlspecialchars($item['QUESTION']) ?></h3>
			<p><?= nl2br(htmlspecialchars($item['ANSWER'])) ?></p>
		</div>
	<?php endforeach; ?>
</div>
