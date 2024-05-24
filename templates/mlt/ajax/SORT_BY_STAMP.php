<? require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
CModule::IncludeModule('iblock');
$sectionID = $_REQUEST['count'];
				$elementFilter = array(
					'IBLOCK_ID' => 9,
					'SECTION_CODE' => $_REQUEST['count'],
					'ACTIVE' => 'Y',
					'PROPERTY_STAMP_VALUE' => $_REQUEST['stamp'],
				);
				$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilter, false, false, array('ID', 'NAME', 'PROPERTY_IMAGE', 'CODE', 'PROPERTY_VOLUME', 'PROPERTY_SPECIFIC', 'PROPERTY_PRICE', "PROPERTY_STAMP"));
				?>
<div class="catalog-right-box">
						<? while ($arElement = $dbElements->GetNext()) { ?>
							<div class="catalog-right__item" onclick="window.location.href = '<?= $sectionID ?>/<?= $arElement['CODE'] ?>';">
								<div class="bestsellers-slide__number normal-text desktop"><?= $arElement['PROPERTY_VOLUME_VALUE'] ?></div>
								<div class="bestsellers-slide__title normal-text mobile"><?= $arElement['NAME'] ?></div>
								<div class="bestsellers-slide__img">
									<img src="<?= CFile::GetPath($arElement['PROPERTY_IMAGE_VALUE']) ?>" alt="">
								</div>
								<div class="bestsellers-slide-container">
									<div class="bestsellers-slide__title normal-text desktop"><?= $arElement['NAME'] ?></div>
									<div class="bestsellers-slide__number normal-text mobile"><?= $arElement['PROPERTY_VOLUME_VALUE'] ?></div>
									<a class="bestsellers-slide__link normal-text mobile" href="/catalog/<?= $arElement['CODE'] ?>">Подробнее</a>
								</div>
								<div class="bestsellers-slide-info desktop">
									<div class='bestsellers-slide-info--title'>Спецификация:</div>
									<div class='bestsellers-slide-info--subtitle'><?= $arElement['PROPERTY_SPECIFIC_VALUE']["TEXT"] ?></div>
								</div>
								<div class="bestsellers-slide-bottom desktop">
									<div class='bestsellers-slide-bottom--price'><?= $arElement['PROPERTY_PRICE_VALUE'] ?></div>
									<div class='bestsellers-slide-bottom--addcart'>Заказать</div>
								</div>
							</div>
						<? } ?>
					</div>