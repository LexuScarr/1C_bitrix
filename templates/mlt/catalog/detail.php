<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?
if (2 > 1) {
    $elementCode = $_REQUEST['CODE'];

    $arFilter = array('IBLOCK_ID' => 9, 'CODE' => $elementCode, 'ACTIVE' => 'Y');
    $dbElement = CIBlockElement::GetList(array(), $arFilter, false, false, array('ID', 'NAME', 'PROPERTY_IMAGE', 'PROPERTY_VOLUME', 'PROPERTY_OPISANIE', 'PROPERTY_SPECIFIC', 'PROPERTY_PRICE', 'PROPERTY_DOC'));

    if ($arCatElement = $dbElement->GetNext()) {
?>
        <div class="modal-box">
            <div class="modal-box-container application-order">
                <div class="modal-box__exit">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/exit-black.svg" alt="">
                </div>
                <div class="modal-box__title">Заявка на заказ</div>
                <div class="modal-box__text title-text normal-text">Для оформления заказа оставьте Ваш контактный телефон и почту. Наши менеджеры свяжутся с Вами в ближайшее время</div>
                <form class="modal-box__form" id="form_zakaz">
                    <input type="text" name="TOVAR" value="<?= htmlspecialcharsbx($arCatElement['NAME']) ?>" readonly>
                    <input type="text" name="NAME" placeholder="ФИО*">
                    <div class="modal-box__form-two">
                        <input type="tel" name="PHONE" placeholder="Телефон*">
                        <input type="email" name="EMAIL" placeholder="Почта*">
                    </div>
                    <input type="text" name="COMMENT" placeholder="Комментарий к заявке">
                    <div class="modal-box__form-bottom">
                        <button class="modal-box__form-btn" type="button" onclick="submitForm()">Отправить</button>
                        <div class="modal-box__form-text normal-text">Нажимая на кнопку «Отправить» Вы даете согласие на обработку Ваших персональных данных</div>
                    </div>
                </form>
            </div>
            <div class="modal-box-container application-order-sent">
                <div class="modal-box__exit">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/exit-black.svg" alt="">
                </div>
                <div class="modal-box__icon">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon/complite-yellow.svg" alt="">
                </div>
                <div class="modal-box__title">Заявка отправлена!</div>
            </div>
            <div class="modal-box__zoom">
                <img src="<?= CFile::GetPath($arCatElement['PROPERTY_DOC_VALUE']) ?>" alt="">
            </div>

            <script>
                function submitForm() {
                    var form = $('#form_zakaz')[0];
                    if (form.checkValidity()) {
                        var formData = new FormData(form);
                        $.ajax({
                            type: 'POST',
                            url: '/ajax/ZAKAZ_FEEDBACK.php',
                            data: formData,
                            processData: false,
                            contentType: false,
                            dataType: 'json', // Указываем, что ожидаем JSON-ответ
                            success: function(response) {

                                if (response > 0) {

                                    var $modal_box = $(".modal-box");
                                    var $container = $modal_box.children(".application-order");
                                    var $sentContainer = $modal_box.children(".application-order-sent");

                                    // const $container = $(this).parents('.modal-box-container')
                                    // const $modal_box = $container.siblings('.application-order-sent')
                                    // $modal_box.toggleClass('active');
                                    // $container.toggleClass('active');

                                    $container.removeClass("active");
                                    $sentContainer.addClass("active");


                                    form.reset();
                                }

                            },
                            error: function(response) {
                                // Обработка ошибки
                                console.log(response);
                            }
                        });
                    } else {
                        console.log('Form validation failed');
                    }
                }
            </script>
        </div>

        <main>

            <section class="product-page">
                <div class="container">
                    <div class="product-page-left">
                        <div class="product-page-left__btns">
                            <div class="product-page-left__btn prod-btn active">Фото</div>
                            <?if($arCatElement['PROPERTY_DOC_VALUE'] != null): ?>
                            <div class="product-page-left__btn doc-btn">Документ</div>
                            <?endif ?>
                        </div>
                        <div class="product-page-left__img product active">
                            <img src="<?= CFile::GetPath($arCatElement['PROPERTY_IMAGE_VALUE']) ?>" alt="">
                        </div>
                        <div class="product-page-left__img document">
                            <img src="<?= CFile::GetPath($arCatElement['PROPERTY_DOC_VALUE']) ?>" alt="">
                        </div>
                    </div>
                    <div class="product-page-right">
                        <div class="product-page-right__title title-text"><?= $arCatElement['NAME'] ?></div>
                        <div class="product-page-right__text normal-text"><?= $arCatElement['PROPERTY_OPISANIE_VALUE']['TEXT'] ?></div>
                        <div class="product-page-right__spec normal-text"><span>Спецификация:</span> <span>...</span> <?= $arCatElement['PROPERTY_SPECIFIC_VALUE']['TEXT'] ?></div>
                        <div class="product-page-right__spec product-page-right__spec--bottom normal-text"><span>Объем:</span> <span>...</span> <?= $arCatElement['PROPERTY_VOLUME_VALUE'] ?></div>
                        <div class="product-page-right__dis normal-text">Индивидуальная <span>скидка</span> в <br class='mobile'> зависимости от объема заказа <div class='product-page-right__dis-back'>%</div></div>
                        <div class="product-page-right__info normal-text">
                            <div class="product-page-right__info-text"><?= $arCatElement['PROPERTY_PRICE_VALUE'] ?> ₽</div>
                            <div class="product-page-right__buy"><span class="product-page-right__help-btn">Заказать</span></div>
                        </div>
                        <div class="product-page-right__help title-text-italic">Нужна помощь? <br class="mobile"><span class="product-page-right__help-btn">Оставьте заявку на заказ!</span></div>
                    </div>
                </div>
            </section>
    <?
    }
}
    ?>

    
	<section class="bestsellers">
		<?
		$SUBresults = CIBlockElement::GetByID(65); // id элемента
		$ar_res = $SUBresults->GetNextElement();
		$arProps1 = $ar_res->GetProperties();
		?>
		<div class="container">
			<div class="title-text">Рекомендуем:</div>
			<div class="swiper bestsellers-swiper white">
				<div class="swiper-wrapper">
					<? foreach ($arProps1['BESTESELLERS']['VALUE'] as $best) { ?>

						<?
						$SUBresult = CIBlockElement::GetByID($best);
						$ar_res = $SUBresult->GetNextElement();
						$arFields = $ar_res->GetFields();
						$arProps = $ar_res->GetProperties();
						$sectionCode = '';

						if ($arFields['IBLOCK_SECTION_ID'] > 0) {
							$sectionRes = CIBlockSection::GetByID($arFields['IBLOCK_SECTION_ID']);
							if ($arSection = $sectionRes->GetNext()) {
								$sectionCode = $arSection['CODE'];
							}
						}
						?>
						<div class="swiper-slide bestsellers-slide" onclick="window.location.href = '/catalog/<?= $sectionCode ?>/<?= $arFields['CODE'] ?>';">
							<?php if (isset($arProps['VOLUME']['VALUE'])) : ?>
								<div class="bestsellers-slide__number normal-text desktop"><?= $arProps['VOLUME']['VALUE'] ?></div>
							<?php endif; ?>
							<div class="bestsellers-slide__title normal-text mobile"><?= $arFields['NAME'] ?></div>
							<div class="bestsellers-slide__img">
								<?php if (isset($arProps['IMAGE']['VALUE'])) : ?>
									<img src="<?= CFile::GetPath($arProps['IMAGE']['VALUE']) ?>" alt="">
								<?php endif; ?>
							</div>
							<div class="bestsellers-slide-container">
								<div class="bestsellers-slide__title normal-text desktop"><?= $arFields['NAME'] ?></div>
								<?php if (isset($arProps['VOLUME']['VALUE'])) : ?>
									<div class="bestsellers-slide__number normal-text mobile"><?= $arProps['VOLUME']['VALUE'] ?></div>
								<?php endif; ?>
								<a class="bestsellers-slide__link normal-text" href="/catalog/<?= $sectionCode ?>/<?= $arFields['CODE'] ?>">Подробнее</a>
							</div>
						</div>

					<? } ?>
				</div>
				<div class="swiper-button-prev bestsellers-button-prev desktop"></div>
				<div class="swiper-button-next bestsellers-button-next desktop"></div>
			</div>
		</div>
	</section>

    <!-- <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "standard.php",
            "PATH" => SITE_TEMPLATE_PATH . '/includes/order.php'
        )
    ); ?> -->


        </main>
        <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
