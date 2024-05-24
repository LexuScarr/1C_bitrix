<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Статьи");
?>
<main>
	<section class="articles">
		<?
		// Получаем section_id из параметров URL (если он существует), иначе задаем значение 0
		$sectionID = isset($_GET['section_id']) ? intval($_GET['section_id']) : 0;
		$elementFilter = array(
			'IBLOCK_ID' => 11,
			'SECTION_ID' => $sectionID,
			'ACTIVE' => 'Y',
		);
		$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilter, false, false, array('ID', 'NAME', 'PROPERTY_IMAGE', 'CODE', 'PROPERTY_DATE', 'PROPERTY_PREWIEW_TEKST'));
		?>
		<div class="container">
			<div class="articles-top main-top">
				<div class="title-text">Статьи</div>
				<div class="title-text-italic">Будьте в курсе последних событий</div>
			</div>
			<div class="articles-container">
				<div class="swiper articles-swiper white">
					<div class="swiper-wrapper">
						<? while ($arElement = $dbElements->GetNext()) { ?>
							<div class="swiper-slide">
								<a href="/article/<?= $arElement['CODE'] ?>" class="articles-slide">
									<div class="articles-slide-top">
										<div class="articles-slide-title"><?= $arElement['NAME'] ?></div>
										<div class="articles-slide-date normal-text"><?= $arElement['PROPERTY_DATE_VALUE'] ?></div>
									</div>
									<div class="articles-slide-img">
										<img src="<?= CFile::GetPath($arElement['PROPERTY_IMAGE_VALUE']) ?>" alt="">
									</div>
									<div class="articles-slide-bottom">
										<div class="articles-slide-text normal-text"><?= $arElement['PROPERTY_PREWIEW_TEKST_VALUE']['TEXT'] ?></div>
										<div class="articles-slide-btn"></div>
									</div>
								</a>
							</div>
						<? } ?>
					</div>
					<div class="swiper-button-prev articles-button-prev"></div>
					<div class="swiper-button-next articles-button-next"></div>
					<div class="swiper-pagination articles-pagination articles-swiper__number"></div>
				</div>
			</div>
		</div>
	</section>


	<? $APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		array(
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "inc",
			"EDIT_TEMPLATE" => "standard.php",
			"PATH" => SITE_TEMPLATE_PATH . '/includes/order.php'
		)
	); ?>


</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
