<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="faq-list">
	<?php if (!empty($arResult['FAQ'])): ?>
		<?php foreach ($arResult['FAQ'] as $faq): ?>
            <div class="faq-item">
                <h3 class="faq-question"><?= htmlspecialcharsbx($faq['QUESTION']); ?></h3>
                <div class="faq-answer"><?= nl2br(htmlspecialcharsbx($faq['ANSWER'])); ?></div>
                <div class="faq-category"><?= GetMessage("FAQ_MODULE_CATEGORY") . ': ' . htmlspecialcharsbx($faq['CATEGORY']); ?></div>
            </div>
		<?php endforeach; ?>
	<?php else: ?>
        <div class="faq-no-items"><?= GetMessage("FAQ_MODULE_NO_ITEMS"); ?></div>
	<?php endif; ?>
</div>

<style>
    .faq-list {
        padding: 20px;
    }
    .faq-item {
        margin-bottom: 20px;
    }
    .faq-question {
        font-weight: bold;
    }
    .faq-answer {
        margin-top: 10px;
    }
</style>
