<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог (категории)");
?>
<main>
	<section class="catalog">
		<?
		$arFilter = array('IBLOCK_ID' => 9, 'GLOBAL_ACTIVE' => 'Y', 'DEPTH_LEVEL' => 1);
		$db_list = CIBlockSection::GetList(array("SORT" => "ASC"), $arFilter, true);
		?>
		<div class="container">
			<div class="catalog-top">
				<div class="title-text">Каталог</div>
				<div class="title-text-italic">
					<?

					$sectionID = $_REQUEST['CODE'];
					$currentSectionName = "";

					if (!empty($sectionID)) {
						$currentSectionFilter = array('IBLOCK_ID' => 9, 'CODE' => $sectionID);
						$currentSection = CIBlockSection::GetList(array(), $currentSectionFilter)->Fetch();
						if ($currentSection) {
							$currentSectionName = $currentSection['NAME'];
						}
					}
					echo $currentSectionName;
					?>
				</div>
			</div>
			<div class="catalog-container">
				<div class="catalog-left">
					<div class="catalog-left__box">
						<div class="catalog-left__title">Меню разделов</div>
						<div class="catalog-left__list">
							<? while ($ar_result = $db_list->GetNext()) { ?>
								<a href="<?= $ar_result['CODE'] ?>" class="catalog-left__item"><?= $ar_result['NAME'] ?></a>
							<? } ?>
						</div>
					</div>
				</div>

				<?
				$elementFilter = array(
					'IBLOCK_ID' => 9,
					'SECTION_CODE' => $sectionID,
					'ACTIVE' => 'Y',
					'PROPERTY_STAMP_VALUE' => "",
				);
				$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilter, false, false, array('ID', 'NAME', 'PROPERTY_IMAGE', 'CODE', 'PROPERTY_VOLUME', 'PROPERTY_SPECIFIC', 'PROPERTY_PRICE', "PROPERTY_STAMP"));
				$property_enums = CIBlockPropertyEnum::GetList(Array("ID"=>"ASC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>9, "CODE"=>"STAMP"));
				?>
				<div class="catalog-right">
					<div class='catalog-right-top'>
						<div class='catalog-right--sort mobile'>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M21 8L17 4L13 8" stroke="#121820" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M17 4V20" stroke="#121820" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M3 16L7 20L11 16" stroke="#121820" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M7 20V4" stroke="#121820" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<span>По названию</span>
						</div>
						<div class='catalog-right--filter mobile'><div></div><span>Фильтры</span></div>
						<div class='catalog-right-usename desktop'>
							<div class='catalog-right-usename--item'>Все</div>
							<? while ($enum_fields = $property_enums->GetNext()): ?>
							<div class='catalog-right-usename--item'><?= $enum_fields["VALUE"]?></div>
						<? endwhile ?>
						</div>
						<div class='catalog-right--sortd desktop'>
							<div class='catalog-right--sortd-title'>Сортировка
								<svg xmlns="http://www.w3.org/2000/svg" width="13" height="6" viewBox="0 0 13 6" fill="none">
									<path d="M1 1L6.5 5L12 1" stroke="#2B2F36" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class='catalog-right--sortd-all'>
								<div class='catalog-right--sortd-item'>Сортировка1</div>
								<div class='catalog-right--sortd-item'>Сортировка2</div>
								<div class='catalog-right--sortd-item'>Сортировка3</div>
							</div>
						</div>

						<div class='catalog-sort-modal mobile'>
							<div class='catalog-sort-modal-screen'></div>
							<div class='catalog-sort-modal-container'>
								<div class='catalog-sort-modal-list'>
									<label class='catalog-sort-modal-item'>
										<input type="radio" checked name="sort">
										<div class='custom-checkbox'>
											<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
												<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
											</svg>
										</div>
										<span>По названию</span>
									</label>
									<label class='catalog-sort-modal-item'>
										<input type="radio" name="sort">
										<div class='custom-checkbox'>
											<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
												<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
											</svg>
										</div>
										<span>По умолчанию</span>
									</label>
									<label class='catalog-sort-modal-item'>
										<input type="radio" name="sort">
										<div class='custom-checkbox'>
											<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
												<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
											</svg>	
										</div>
										<span>По цене max</span>
									</label>
									<label class='catalog-sort-modal-item'>
										<input type="radio" name="sort">
										<div class='custom-checkbox'>
											<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
												<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
											</svg>
										</div>
										<span>По цене min</span>
									</label>
								</div>
							</div>
						</div>

						<div class='catalog-filter mobile'>
							<div class='catalog-filter--exit'>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M18 5.71387L6 18.2853" stroke="#121820" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M6 5.71387L18 18.2853" stroke="#121820" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<form class='catalog-filter--box'>

								<div class='catalog-filter--title'>Категории</div>
								<div class='catalog-filter--list'>
									<div class='catalog-filter-item'>
										<div class='catalog-filter-item--title'>Бренд</div>
										<div class='catalog-filter-item--box'>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Repsol</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Nord Oil</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Эко Фэс</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Motor Oil</span>
											</label>
										</div>
										<div class='catalog-filter-item--show'>Показать еще</div>
										<div class='catalog-filter-item--box disabled'>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Repsol</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Nord Oil</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Эко Фэс</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Motor Oil</span>
											</label>
										</div>

									</div>
									<div class='catalog-filter-item'>
										<div class='catalog-filter-item--title'>Бренд</div>
										<div class='catalog-filter-item--box'>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Repsol</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Nord Oil</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Эко Фэс</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Motor Oil</span>
											</label>
										</div>
										<div class='catalog-filter-item--show'>Показать еще</div>
										<div class='catalog-filter-item--box disabled'>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Repsol</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Nord Oil</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Эко Фэс</span>
											</label>
											<label class='catalog-filter-item-choice'>
												<input type="checkbox">
												<div class='custom-checkbox'>
													<svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
														<path d="M3.96635 6.58125L10.3226 0.225C10.4726 0.0750001 10.6508 0 10.8573 0C11.0638 0 11.2418 0.0750001 11.3913 0.225C11.5413 0.375 11.6163 0.55325 11.6163 0.75975C11.6163 0.96625 11.5413 1.14425 11.3913 1.29375L4.49135 8.19375C4.34135 8.34375 4.16635 8.41875 3.96635 8.41875C3.76635 8.41875 3.59135 8.34375 3.44135 8.19375L0.216346 4.96875C0.0663462 4.81875 -0.00565385 4.6405 0.000346154 4.434C0.00634615 4.2275 0.084596 4.0495 0.235096 3.9C0.385096 3.75 0.563346 3.675 0.769846 3.675C0.976346 3.675 1.15435 3.75 1.30385 3.9L3.96635 6.58125Z" fill="white"/>
													</svg>
												</div>
												<span>Motor Oil</span>
											</label>
										</div>

									</div>
								</div>
								<div class='catalog-filter-bottom'>
									<div class='catalog-filter-bottom-clear'>
										<span>Очистить фильтр</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21" fill="none">
											<path d="M18 5L6 16" stroke="#121820" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M6 5L18 16" stroke="#121820" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
									<button>Показать</button>
								</div>
							</form>
						</div>
					</div>
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
									<div class='bestsellers-slide-bottom--price'><?= $arElement['PROPERTY_PRICE_VALUE'] ?> ₽</div>
									<div class='bestsellers-slide-bottom--addcart'>Заказать</div>
								</div>
							</div>
						<? } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class='catalog-mob mobile'>
		<a class='catalog-mob--main'>Главная</a>
		<div class='catalog-mob--search'>
			Каталог
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M17.6898 18.0839L14.3992 14.5986C16.8613 11.115 16.19 6.17776 12.8997 3.57096C9.60934 0.964172 4.94599 1.67496 2.48381 5.15854C0.0216357 8.64213 0.692991 13.5794 3.98332 16.1862C6.62638 18.2802 10.2566 18.2802 12.8997 16.1862L16.1916 19.6715C16.6053 20.1095 17.2761 20.1095 17.6897 19.6715C18.1034 19.2335 18.1034 18.5234 17.6897 18.0854L17.6898 18.0839ZM8.46893 15.5135C5.54464 15.5135 3.17406 13.0037 3.17406 9.90761C3.17406 6.81157 5.54464 4.30176 8.46893 4.30176C11.3932 4.30176 13.7638 6.81157 13.7638 9.90761C13.7607 13.0023 11.3919 15.5102 8.46893 15.5135Z" fill="#121820"/>
			</svg>
		</div>
	</div>

	<?php
	$sectionCode = $_REQUEST['CODE'];
	$currentSectionID = "";

	if (!empty($sectionCode)) {
		$currentSectionFilter = array('IBLOCK_ID' => 9, 'CODE' => $sectionCode);
		$currentSection = CIBlockSection::GetList(array(), $currentSectionFilter)->Fetch();
		if ($currentSection) {
			$currentSectionID = $currentSection['ID'];
		}
	}
	


	$seoElement = CIBlockElement::GetList(
		array(),
		array('IBLOCK_ID' => 14, 'ACTIVE' => 'Y', 'PROPERTY_RAZDEL' => $currentSectionID),
		false,
		array(),
		array('ID', 'NAME', 'PROPERTY_ZAGOLOVOK', 'PROPERTY_TEKST_POD', 'PROPERTY_CITATA', 'PROPERTY_OSNOVNOJ_TEKST', 'PROPERTY_RAZDEL')
	);

	if ($arSeoElement = $seoElement->GetNext()) {
	?>
		<section class="seo">
			<div class="container">
				<div class="seo-img">
					<img src="/bitrix/templates/temp_oil/img/icon/seo-logo.svg" alt="">
				</div>
				<div class="seo-right">
					<div class="seo-right__title title-text">
						<?= $arSeoElement['PROPERTY_ZAGOLOVOK_VALUE'] ?>
					</div>
					<div class="seo-right__subtitle title-text-italic">
						<?= $arSeoElement['PROPERTY_TEKST_POD_VALUE'] ?>
					</div>
					<div class="seo-right__boldtext">
						<? if (!empty($arSeoElement['PROPERTY_CITATA_VALUE'])) { ?>
							<?= $arSeoElement['PROPERTY_CITATA_VALUE']['TEXT'] ?>
						<? } ?>
					</div>
					<div class="seo-right__text normal-text">
						<? if (!empty($arSeoElement['~PROPERTY_OSNOVNOJ_TEKST_VALUE'])) { ?>
							<?= $arSeoElement['~PROPERTY_OSNOVNOJ_TEKST_VALUE']['TEXT'] ?>
						<? } ?>
					</div>
				</div>
			</div>
		</section>
	<?php
	}

	?>

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
<script>
	$(document).on('click', '.catalog-right-usename--item', function(){
		var elementOnClick = $(this);
if(elementOnClick.html() == "Все")
{
	var stamp = "";
}
else
{
	var stamp = elementOnClick.html();
}
var elementOnClick = $(this);
console.log(elementOnClick.html());
$.ajax({
	url: '/ajax/SORT_BY_STAMP.php',
	type: 'POST',
	cahe: false,
	data: {count: '<?=$sectionID ?>', stamp: stamp},
	dataType: 'html',
	success: function (data) {
		$('.catalog-right-box').remove();
		$('.catalog-right-top').after(data);
	}
})
// $.get($('.projects-item__btn').attr('href'), {is_ajax: 'y'}, function(data){

//  $('.last').after(data);
//  elementOnClick.remove();});

return false;

})
</script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
