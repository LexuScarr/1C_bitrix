<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог (категории)");
?>
<main>
	<section class="category">
		<?
		$arFilter = array('IBLOCK_ID' => 9, 'GLOBAL_ACTIVE' => 'Y', 'DEPTH_LEVEL' => 1);
		$db_list = CIBlockSection::GetList(array("SORT" => "ASC"), $arFilter, true);
		?>
		<div class="container">
			<div class="category-top">
				<div class="title-text">Каталог</div>
				<div class="title-text-italic">Выберите нужный раздел каталога масел</div>
			</div>
			<div class="category-container">
				<?
				$count = 0; // Переменная для подсчета выводимых разделов
				while ($ar_result = $db_list->GetNext()) {
					if ($count % 3 === 0) {
						if ($count !== 0) {
							echo '</div>'; // Закрываем предыдущий блок category-items перед началом нового
						}
						echo '<div class="category-items">'; // Начало нового блока category-items
					}
				?>
					<a href="/catalog/<?= $ar_result['CODE'] ?>" class="category-item">
						<div class="category-item__title"><?= $ar_result['NAME'] ?></div>
						<div class="category-item__btn"></div>
					</a>
				<?
					$count++;
				}
				// Закрываем последний блок category-items, если есть элементы, которые не попали в предыдущие блоки
				if ($count % 3 !== 0) {
					echo '</div>';
				}
				?>
			</div>
		</div>
	</section>

	<section class="order">
		<?
		$SUBresult = CIBlockElement::GetByID(13); // id элемента
		$ar_res = $SUBresult->GetNextElement();
		$arProps = $ar_res->GetProperties();
		?>
		<div class="container">
			<div class="order-left">
				<div class="order-left__title">
					<?= $arProps['ZAGOLOVOK']['VALUE'] ?>
				</div>
				<div class="order-left__text normal-text">
					<?= $arProps['TEKST']['VALUE']['TEXT'] ?>
				</div>
				<form class="order-left__form" id="form1">
					<input type="tel" class="input" placeholder="+7 (999) 999 99-99" name="PHONE">
					<button type="button" class="order-left__btn" onclick="submitForm()">
						Заказать звонок
					</button>
				</form>
			</div>
			<div class="order-right">
				<img src="<?= CFile::GetPath($arProps['FILE']['VALUE']) ?>" alt="">
			</div>
		</div>

		<script>
			function submitForm() {
				var form = $('#form1')[0];
				var formData = new FormData(form);
				$.ajax({
					type: 'POST',
					url: '/ajax/PHONE_FEEDBACK.php',
					data: formData,
					processData: false,
					contentType: false,
					dataType: 'json', // Указываем, что ожидаем JSON-ответ
					success: function(response) {
						console.log(response);
						form.reset();
					},
					error: function(response) {
						// Обработка ошибки
						console.log(response);
					}
				});
			}
		</script>
	</section>

</main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
