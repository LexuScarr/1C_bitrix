<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<main>
	<section class="section cabinet card_product_vendor">
		<div class="modal-box modal-request modal-price-vendor">
			<div class="modal-box__container">
				<div class="modal-request-list">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Запрос цены</div>
					<div class="section__subtitle">Вы запрашиваете цену у Hitema. Выберите товар для оформления запроса</div>
					<form class="search cabinet__search">
						<div class="label-container">
							<label><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#BBCBD0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
									<path d="M22 22L20 20" stroke="#BBCBD0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
								<input type="text" placeholder="Название ингредиента">
							</label>
							<button type="submit"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15 1L1 15M15 1V14M15 1H2" stroke="white" stroke-width="2" />
								</svg>
							</button>
						</div>
					</form>
					<div class="modal-request-vendor__container">
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
					</div>
					<div class="modal-request-vendor__show">
						<div class="underline">Показать еще</div>
					</div>
				</div>
				<div class="modal-request-first">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Запрос цены</div>
					<div class="section__subtitle">Вы запрашиваете цену у Hitema</div>
					<div class="modal-request__product gradient_border">
						<div class="modal-request__product-vendor"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vendors/vendor2.jpg" alt=""></div>
						<div class="modal-request__product-text">FB 06 Растворимая пшеничная клетчатка</div>
					</div>
					<div class="modal-request__steps">
						<div class="modal-request__step active">Сведения о покупке</div>
						<div class="modal-request__step">Детали получателя</div>
					</div>
					<form class="form form_validation">
						<div class="form__item">
							<select name="">
								<option>Область применения</option>
								<option>Область применения 2</option>
								<option>Область применения 3</option>
							</select>
						</div>
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">Объем заказа</span>
						</label>
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">Ожидаемый годовой объем</span>
						</label>
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">Опишите назначение в готовом продукте и ожидаемый результат</span>
						</label>
						<div class="form__item">
							<select name="">
								<option>Понадобиться ли вам технологическое сопровождение?</option>
								<option>Понадобиться ли вам технологическое сопровождение? 2</option>
								<option>Понадобиться ли вам технологическое сопровождение? 3</option>
							</select>
						</div>
						<div class="form__item">
							<select name="">
								<option>Условия доставки</option>
								<option>Условия доставки 2</option>
								<option>Условия доставки 3</option>
							</select>
						</div>
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">Адрес доставки</span>
						</label>
						<div class="form__bottom right">
							<button class="btn btn-next" type="submit">Далее</button>
						</div>
					</form>
				</div>
				<div class="modal-request-second">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Запрос цены</div>
					<div class="section__subtitle">Вы запрашиваете цену у Hitema</div>
					<div class="modal-request__product gradient_border">
						<div class="modal-request__product-vendor"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vendors/vendor2.jpg" alt=""></div>
						<div class="modal-request__product-text">FB 06 Растворимая пшеничная клетчатка</div>
					</div>
					<div class="modal-request__steps">
						<div class="modal-request__step active">
							Сведения о покупке<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" fill="none" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M7.75 12.0019L10.58 14.8319L16.25 9.17188" fill="none" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>

						</div>
						<div class="modal-request__step active">Детали получателя</div>
					</div>
					<form class="form form_validation">
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">ФИО</span>
						</label>
						<label class="form__item">
							<input class="input" type="tel"><span class="placeholder">Контактный телефон</span>
						</label>
						<label class="form__item">
							<input class="input" type="email"><span class="placeholder">E-mail</span>
						</label>
						<div class="form__bottom right">
							<button class="btn btn-last" type="submit">Оформить заказ</button>
						</div>
					</form>
				</div>
				<div class="modal-request-last">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title center">Запрос цены</div>					
					<div class="section__text">Ваш запрос успешно отправлен в Hitema!</div>
					<div class="modal-request__btns">
						<button class="btn empty">Мои запросы</button>
						<button class="btn btn__close">Вернуться к продукту</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-box modal-request modal-document-vendor">
			<div class="modal-box__container">
				<div class="modal-request-list">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Запрос документа</div>
					<div class="section__subtitle">Вы запрашиваете документ у Hitema. Выберите товар для оформления запроса</div>
					<form class="search cabinet__search">
						<div class="label-container">
							<label><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#BBCBD0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
									<path d="M22 22L20 20" stroke="#BBCBD0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
								<input type="text" placeholder="Название ингредиента">
							</label>
							<button type="submit"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15 1L1 15M15 1V14M15 1H2" stroke="white" stroke-width="2" />
								</svg>
							</button>
						</div>
					</form>
					<div class="modal-request-vendor__container">
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
					</div>
					<div class="modal-request-vendor__show">
						<div class="underline">Показать еще</div>
					</div>
				</div>
				<div class="modal-request-first">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Запрос документа</div>
					<div class="section__subtitle">Вы запрашиваете документ у Hitema</div>
					<div class="modal-request__product gradient_border">
						<div class="modal-request__product-vendor"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vendors/vendor2.jpg" alt=""></div>
						<div class="modal-request__product-text">FB 06 Растворимая пшеничная клетчатка</div>
					</div>
					<form class="form form_validation">
						<div class="form__item">
							<select name="">
								<option>Область применения</option>
								<option>Область применения 2</option>
								<option>Область применения 3</option>
							</select>
						</div>
						<div class="form__item">
							<select name="">
								<option>Язык</option>
								<option>Язык 2</option>
								<option>Язык 3</option>
							</select>
						</div>
						<div class="form__item">
							<select name="">
								<option>Применяемый регион</option>
								<option>Применяемый регион 2</option>
								<option>Применяемый регион 3</option>
							</select>
						</div>
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">Заметки к запросу</span>
						</label>
						<div class="form__bottom right">
							<button class="btn btn-next" type="submit">Далее</button>
						</div>
					</form>
				</div>
				<div class="modal-request-second">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title center">Запрос документа</div>					
					<div class="section__text">Ваш запрос успешно отправлен в Hitema!</div>
					<div class="modal-request__btns">
						<button class="btn empty">Мои запросы</button>
						<button class="btn btn__close">Вернуться к продукту</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-box modal-request modal-sample-vendor">
			<div class="modal-box__container">
				<div class="modal-request-list">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Запрос цены</div>
					<div class="section__subtitle">Вы запрашиваете цену у Hitema. Выберите товар для оформления запроса</div>
					<form class="search cabinet__search">
						<div class="label-container">
							<label><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#BBCBD0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
									<path d="M22 22L20 20" stroke="#BBCBD0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
								<input type="text" placeholder="Название ингредиента">
							</label>
							<button type="submit"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15 1L1 15M15 1V14M15 1H2" stroke="white" stroke-width="2" />
								</svg>
							</button>
						</div>
					</form>
					<div class="modal-request-vendor__container">
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
						<div class="modal-request-vendor__item gradient_border">
							<div class="modal-request-vendor__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cards/card02.jpg" alt=""></div>
							<div class="modal-request-vendor__name">Молоко сухое цельное Denmilk Карамелизованное</div>
							<div class="underline start-request">Запрос</div>
						</div>
					</div>
					<div class="modal-request-vendor__show">
						<div class="underline">Показать еще</div>
					</div>
				</div>
				<div class="modal-request-first">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Запрос образца</div>
					<div class="section__subtitle">Вы запрашиваете образец у Hitema</div>
					<div class="modal-request__product gradient_border">
						<div class="modal-request__product-vendor"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vendors/vendor2.jpg" alt=""></div>
						<div class="modal-request__product-text">FB 06 Растворимая пшеничная клетчатка</div>
					</div>
					<div class="modal-request__steps">
						<div class="modal-request__step active">Детали использования</div>
						<div class="modal-request__step">Детали доставки образца</div>
					</div>
					<form class="form form_validation">
						<label class="form__item">
							<input class="input" type="number"><span class="placeholder">Укажите кол-во образцов</span>
							<div class="number-up" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"></div>
							<div class="number-down" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></div>
						</label>
						<div class="modal-request__capacity">
							<div class="form__item">
								<select name="">
									<option>Ожидаемый годовой объем</option>
									<option>Ожидаемый годовой объем 2</option>
									<option>Ожидаемый годовой объем 3</option>
								</select>
							</div>
							<div class="form__item">
								<select name="">
									<option>Ед. изм.</option>
									<option>Ед. изм. 2</option>
									<option>Ед. изм. 3</option>
								</select>
							</div>
						</div>
						<div class="form__item">
							<select name="">
								<option>Когда вы планируете купить</option>
								<option>Когда вы планируете купить 2</option>
								<option>Когда вы планируете купить 3</option>
							</select>
						</div>
						<div class="form__item">
							<select name="">
								<option>Область применения</option>
								<option>Область применения 2</option>
								<option>Область применения 3</option>
							</select>
						</div>
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">Заметки к запросу</span>
						</label>
						<div class="form__bottom right">
							<button class="btn btn-next" type="submit">Далее</button>
						</div>
					</form>
				</div>
				<div class="modal-request-second">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Запрос образца</div>
					<div class="section__subtitle">Вы запрашиваете образец у Hitema</div>
					<div class="modal-request__product gradient_border">
						<div class="modal-request__product-vendor"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vendors/vendor2.jpg" alt=""></div>
						<div class="modal-request__product-text">FB 06 Растворимая пшеничная клетчатка</div>
					</div>
					<div class="modal-request__steps">
						<div class="modal-request__step active">
							Детали использования<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" fill="none" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M7.75 12.0019L10.58 14.8319L16.25 9.17188" fill="none" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>

						</div>
						<div class="modal-request__step active">Детали доставки образца</div>
					</div>
					<form class="form form_validation">
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">ФИО</span>
						</label>
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">Адрес доставки</span>
						</label>
						<label class="form__item">
							<input class="input" type="tel"><span class="placeholder">Контактный телефон</span>
						</label>
						<label class="form__item">
							<input class="input" type="email"><span class="placeholder">E-mail</span>
						</label>
						<label class="form__item">
							<input class="input" type="text" onfocus="(this.type='date')"><span class="placeholder"><span class="desc">Укажите дату</span> <span class="mobile">Дата</span>, к которой необходимо отправить ингредиент</span>
							<div class="calendar-icon"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 2.5V5.5" fill="none" stroke="#201702" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M16 2.5V5.5" fill="none" stroke="#201702" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M3.5 9.58984H20.5" fill="none" stroke="#201702" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M21 9V17.5C21 20.5 19.5 22.5 16 22.5H8C4.5 22.5 3 20.5 3 17.5V9C3 6 4.5 4 8 4H16C19.5 4 21 6 21 9Z" fill="none" stroke="#201702" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M15.6937 14.2002H15.7027" fill="none" stroke="#201702" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M15.6937 17.2002H15.7027" fill="none" stroke="#201702" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M11.9945 14.2002H12.0035" fill="none" stroke="#201702" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M11.9945 17.2002H12.0035" fill="none" stroke="#201702" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M8.29529 14.2002H8.30427" fill="none" stroke="#201702" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M8.29529 17.2002H8.30427" fill="none" stroke="#201702" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>

							</div>
						</label>
						<div class="form__bottom"><a class="underline">Авторизируйтесь оформления запроса</a>
							<button class="btn btn-last" type="submit">Отправить</button>
						</div>
					</form>
				</div>
				<div class="modal-request-last">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title center">Запрос образца</div>					
					<div class="section__text">Ваш запрос успешно отправлен в Hitema!</div>
					<div class="modal-request__btns">
						<button class="btn empty">Мои запросы</button>
						<button class="btn btn__close">Вернуться к продукту</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-box modal-experts">
			<?
			$ExpertFilters1 = array(
				'IBLOCK_ID' => 13,
				'ACTIVE' => 'Y',
				'PROPERTY_COMP_ID' => $arResult['ID'],
			);
			$dbarElements1 = CIBlockElement::GetList(array("SORT" => "ASC"), $ExpertFilters1, false, false, array('ID', "IBLOCK_ID", 'PREVIEW_PICTURE', 'PROPERTY_FIO', 'PROPERTY_NAPRAV', 'PROPERTY_PHONE', 'PROPERTY_EMAIL'));
			?>
			<div class="modal-box__container">
				<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
				<div class="section__title">Выберите специалиста</div>
				<div class="section__subtitle">Выберите эксперта компании</div>
				<div class="modal-experts-container">
					<? while ($ExprelementFilters2 = $dbarElements1->GetNext()) { ?>
						<div class="modal-experts-item gradient_border">
							<div class="modal-experts-img"><img src="<?= CFile::GetPath($ExprelementFilters2['PREVIEW_PICTURE']) ?>" alt=""></div>
							<div class="text-box">
								<div class="modal-experts-title"><?= $ExprelementFilters2['PROPERTY_NAPRAV_VALUE'] ?></div>
								<div class="modal-experts-name"><?= $ExprelementFilters2['PROPERTY_FIO_VALUE'] ?></div>
							</div><a class="btn empty" href="#">Написать нам</a>
						</div>
					<? } ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="sidebar__container">
				<?
				$elementFilters = array(
					'IBLOCK_ID' => 12,
					'SECTION_ID' => 48,
					'ACTIVE' => 'Y',
					'PROPERTY_COMP' => $arResult['PROPERTIES']['comp']['VALUE'],
				);
				$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilters, false, false, array('ID', "IBLOCK_ID", 'NAME', 'DETAIL_PICTURE', 'CODE', 'PROPERTY_COMP'));

				if ($arElement = $dbElements->GetNext()) {
				?>
					<div class="sidebar gradient_border">
						<?
						$elementFilters2 = array(
							'IBLOCK_ID' => 8,
							'ACTIVE' => 'Y',
							'PROPERTY_COMP_ID' => $arElement['ID']
						);
						$dbarElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilters2, false, false, array('ID', "IBLOCK_ID"));
						$ProdCount = 0;
						while ($arElement1 = $dbarElements->GetNext()) {
							$ProdCount += 1;
						};
						?>

						<div class="sidebar__top">
							<div class="sidebar__img"><img src="<?= CFile::GetPath($arElement['DETAIL_PICTURE']) ?>" alt="profile_img"></div>
							<div class="sidebar__suptitle">Компания</div>
							<div class="sidebar__title"><?= $arElement['PROPERTY_COMP_VALUE'] ?></div>
						</div>
						<div class="sidebar__items">
							<div class="item"><a class="item__btn" href="#">
									<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M4.25977 11.0195V15.9895C4.25977 17.8095 4.25977 17.8095 5.97977 18.9695L10.7098 21.6995C11.4198 22.1095 12.5798 22.1095 13.2898 21.6995L18.0198 18.9695C19.7398 17.8095 19.7398 17.8095 19.7398 15.9895V11.0195C19.7398 9.19945 19.7398 9.19945 18.0198 8.03945L13.2898 5.30945C12.5798 4.89945 11.4198 4.89945 10.7098 5.30945L5.97977 8.03945C4.25977 9.19945 4.25977 9.19945 4.25977 11.0195Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M17.5 7.63V5C17.5 3 16.5 2 14.5 2H9.5C7.5 2 6.5 3 6.5 5V7.56" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M12.6298 10.9909L13.1998 11.8809C13.2898 12.0209 13.4898 12.1609 13.6398 12.2009L14.6598 12.4609C15.2898 12.6209 15.4598 13.1609 15.0498 13.6609L14.3798 14.4709C14.2798 14.6009 14.1998 14.8309 14.2098 14.9909L14.2698 16.0409C14.3098 16.6909 13.8498 17.0209 13.2498 16.7809L12.2698 16.3909C12.1198 16.3309 11.8698 16.3309 11.7198 16.3909L10.7398 16.7809C10.1398 17.0209 9.67978 16.6809 9.71978 16.0409L9.77978 14.9909C9.78978 14.8309 9.70978 14.5909 9.60978 14.4709L8.93978 13.6609C8.52978 13.1609 8.69978 12.6209 9.32978 12.4609L10.3498 12.2009C10.5098 12.1609 10.7098 12.0109 10.7898 11.8809L11.3598 10.9909C11.7198 10.4509 12.2798 10.4509 12.6298 10.9909Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
									<?
									$BrendelementFilters = array(
										'IBLOCK_ID' => 14,
										'ACTIVE' => 'Y',
										'PROPERTY_COMP_ID' => $arElement['ID']
									);
									$dbarElements = CIBlockElement::GetList(array("SORT" => "ASC"), $BrendelementFilters, false, false, array('ID', "IBLOCK_ID"));
									$BrenCount = 0;
									while ($BrendarElement = $dbarElements->GetNext()) {
										$BrenCount += 1;
									};
									?>
									<div class="item__name">Бренды</div>
									<div class="item__number"><?= $BrenCount ?></div>
								</a></div>
							<div class="item"><a class="item__btn" href="#">
									<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill="none" d="M3.16992 7.43994L11.9999 12.5499L20.7699 7.46994" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path fill="none" d="M12 21.61V12.54" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path fill="none" d="M9.92965 2.47979L4.58965 5.43979C3.37965 6.10979 2.38965 7.78979 2.38965 9.16979V14.8198C2.38965 16.1998 3.37965 17.8798 4.58965 18.5498L9.92965 21.5198C11.0696 22.1498 12.9396 22.1498 14.0796 21.5198L19.4196 18.5498C20.6296 17.8798 21.6196 16.1998 21.6196 14.8198V9.16979C21.6196 7.78979 20.6296 6.10979 19.4196 5.43979L14.0796 2.46979C12.9296 1.83979 11.0696 1.83979 9.92965 2.47979Z" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
									<div class="item__name">Продукты</div>
									<div class="item__number"><?= $ProdCount ?></div>
								</a></div>
							<div class="item"><a class="item__btn" href="#">
									<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M22 10V15C22 20 20 22 15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H14" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M22 10H18C15 10 14 9 14 6V2L22 10Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M7 13H13" stroke="#7C9DA8" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M7 17H11" stroke="#7C9DA8" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>

									</div>
									<?
									$elementFiltersdoc = array(
										'IBLOCK_ID' => 12,
										'SECTION_ID' => 48,
										'ACTIVE' => 'Y',
										'PROPERTY_COMP' => $arResult['PROPERTIES']['comp']['VALUE'],
									);
									$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFiltersdoc, false, false, array('ID', "IBLOCK_ID", 'PROPERTY_SERTIF'));

									if ($arElementdoc1 = $dbElements->GetNext()) {
										$SUBresult = CIBlockElement::GetByID($arElementdoc1['ID']);
										$ar_res = $SUBresult->GetNextElement();
										$arProps = $ar_res->GetProperties();
										$docCount = 0;

										foreach ($arProps['sertif']['VALUE'] as $sertif) {
											$arFile = CFile::GetFileArray($sertif);

											if (!empty($arFile['ID'])) {
												$docCount++;
											}
										}
									}
									?>
									<div class="item__name">Документы</div>
									<div class="item__number"><?= $docCount ?></div>
								</a></div>
							<div class="item"><a class="item__btn" href="#">
									<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.15957 10.87C9.05957 10.86 8.93957 10.86 8.82957 10.87C6.44957 10.79 4.55957 8.84 4.55957 6.44C4.55957 3.99 6.53957 2 8.99957 2C11.4496 2 13.4396 3.99 13.4396 6.44C13.4296 8.84 11.5396 10.79 9.15957 10.87Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M16.4103 4C18.3503 4 19.9103 5.57 19.9103 7.5C19.9103 9.39 18.4103 10.93 16.5403 11C16.4603 10.99 16.3703 10.99 16.2803 11" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M4.15973 14.56C1.73973 16.18 1.73973 18.82 4.15973 20.43C6.90973 22.27 11.4197 22.27 14.1697 20.43C16.5897 18.81 16.5897 16.17 14.1697 14.56C11.4297 12.73 6.91973 12.73 4.15973 14.56Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</div>
									<?
									$ExprelementFilters = array(
										'IBLOCK_ID' => 13,
										'ACTIVE' => 'Y',
										'PROPERTY_COMP_ID' => $arElement['ID']
									);
									$dbarElements = CIBlockElement::GetList(array("SORT" => "ASC"), $ExprelementFilters, false, false, array('ID', "IBLOCK_ID"));
									$ExprnCount = 0;
									while ($ExprelementFilters = $dbarElements->GetNext()) {
										$ExprnCount += 1;
									};
									?>
									<div class="item__name">Эксперты</div>
									<div class="item__number"><?= $ExprnCount ?></div>
								</a></div>
							<div class="item"><a class="item__btn" href="#">
									<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8.29986 18.0402V16.8802C5.99986 15.4902 4.10986 12.7802 4.10986 9.90018C4.10986 4.95018 8.65986 1.07018 13.7999 2.19018C16.0599 2.69018 18.0399 4.19018 19.0699 6.26018C21.1599 10.4602 18.9599 14.9202 15.7299 16.8702V18.0302C15.7299 18.3202 15.8399 18.9902 14.7699 18.9902H9.25986C8.15986 19.0002 8.29986 18.5702 8.29986 18.0402Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M8.5 21.9992C10.79 21.3492 13.21 21.3492 15.5 21.9992" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
										</svg>

									</div>
									<div class="item__name">Разработки</div>
								</a></div>
						</div>
					</div>

			</div>
			<div class="cabinet__content">
				<div class="card_product_vendor_head small_section">
					<div class="card_product_vendor__left">
						<div class="section__title"><?= $arResult['PROPERTIES']['comp']['VALUE'] ?></div>
						<div class="filter__inner filter__control mobile">
							<button class="icon<?if($_SESSION['log']['login'] == ''){$arElements = ($_COOKIE['favorites']) ? unserialize($_COOKIE['favorites']) : array();}
							else{$arElements = ($arProps['favourites_products']['VALUE']) ? $arProps['favourites_products']['VALUE'] : array();} if(in_array($arResult['ID'], $arElements)){echo " liked";}?>" id="fav_add2" post_id="<?= $arResult['ID'] ?>">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</button>
							<div class="filter__text">В избранное</div>
							<div class="dropdown">
								<button class="dropdown_btn icon" type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M18 16.08C17.24 16.08 16.56 16.38 16.04 16.85L8.91 12.7C8.96 12.47 9 12.24 9 12C9 11.76 8.96 11.53 8.91 11.3L15.96 7.19C16.5 7.69 17.21 8 18 8C19.66 8 21 6.66 21 5C21 3.34 19.66 2 18 2C16.34 2 15 3.34 15 5C15 5.24 15.04 5.47 15.09 5.7L8.04 9.81C7.5 9.31 6.79 9 6 9C4.34 9 3 10.34 3 12C3 13.66 4.34 15 6 15C6.79 15 7.5 14.69 8.04 14.19L15.16 18.35C15.11 18.56 15.08 18.78 15.08 19C15.08 20.61 16.39 21.92 18 21.92C19.61 21.92 20.92 20.61 20.92 19C20.92 17.39 19.61 16.08 18 16.08Z" fill="#7C9DA8" />
									</svg>
								</button>
								<? $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
								$url = explode('?', $url);
								$url = $url[0];
								$url = explode(":80", $url);
								$urls = $url[0] . $url[1];
								?>
								<div class="dropdown_list">
									<a href="https://wa.me/?text=Поставщик: <?= $arResult['PROPERTIES']['comp']['VALUE'] ?> %0A <?= $urls ?>" target="_blank">
										<div class="svg"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 2.15625C11.3438 0.75 9.46875 0 7.5 0C3.375 0 0 3.375 0 7.5C0 8.8125 0.375006 10.125 1.03126 11.25L0 15L3.93751 13.9687C5.06251 14.5312 6.28125 14.9062 7.5 14.9062C11.625 14.9062 15 11.5312 15 7.40625C15 5.4375 14.1563 3.5625 12.75 2.15625ZM7.5 13.6875C6.375 13.6875 5.25001 13.4063 4.31251 12.8438L4.12499 12.75L1.78124 13.4062L2.43751 11.1562L2.24999 10.875C1.59374 9.84375 1.31249 8.71875 1.31249 7.59375C1.31249 4.21875 4.125 1.40625 7.5 1.40625C9.1875 1.40625 10.6875 2.0625 11.9063 3.1875C13.125 4.40625 13.6875 5.90625 13.6875 7.59375C13.6875 10.875 10.9687 13.6875 7.5 13.6875ZM10.875 9C10.6875 8.90625 9.75001 8.4375 9.56251 8.4375C9.37501 8.34375 9.28124 8.34375 9.18749 8.53125C9.09374 8.71875 8.71876 9.09375 8.62501 9.28125C8.53126 9.375 8.43749 9.375 8.24999 9.375C8.06249 9.28125 7.50001 9.09375 6.75001 8.4375C6.18751 7.96875 5.81251 7.3125 5.71876 7.125C5.62501 6.9375 5.71876 6.84375 5.81251 6.75C5.90626 6.65625 6 6.5625 6.09375 6.46875C6.1875 6.375 6.18751 6.28125 6.28126 6.1875C6.37501 6.09375 6.28126 6 6.28126 5.90625C6.28126 5.8125 5.90626 4.875 5.71876 4.5C5.62501 4.21875 5.43751 4.21875 5.34376 4.21875C5.25001 4.21875 5.15624 4.21875 4.96874 4.21875C4.87499 4.21875 4.68749 4.21875 4.49999 4.40625C4.31249 4.59375 3.84376 5.0625 3.84376 6C3.84376 6.9375 4.49999 7.78125 4.59374 7.96875C4.68749 8.0625 5.90624 10.0312 7.78124 10.7812C9.37499 11.4375 9.65626 11.25 10.0313 11.25C10.4063 11.25 11.1562 10.7812 11.25 10.4062C11.4375 9.9375 11.4375 9.5625 11.3438 9.5625C11.25 9.09375 11.0625 9.09375 10.875 9Z" fill="#181818" />
												<path d="M1.51336 11.3826L1.56913 11.1798L1.46315 10.9981C0.849066 9.94536 0.5 8.71926 0.5 7.5C0.5 3.65114 3.65114 0.5 7.5 0.5C9.34007 0.5 11.0867 1.20006 12.3965 2.5098C13.7178 3.83111 14.5 5.58209 14.5 7.40625C14.5 11.2551 11.3489 14.4062 7.5 14.4062C6.3817 14.4062 5.24049 14.0612 4.16112 13.5215L3.99284 13.4374L3.81083 13.4851L0.71198 14.2967L1.51336 11.3826ZM1.30124 13.2662L1.04918 14.1305L1.91606 13.8877L4.07379 13.2836C5.09379 13.8904 6.30232 14.1875 7.5 14.1875C11.2449 14.1875 14.1875 11.1511 14.1875 7.59375C14.1875 5.78461 13.5798 4.15395 12.2598 2.83395L12.2527 2.82688L12.2454 2.8201C10.9444 1.61913 9.32625 0.90625 7.5 0.90625C3.84886 0.90625 0.812494 3.94261 0.812494 7.59375C0.812494 8.80424 1.11594 10.0242 1.82816 11.1434L1.82807 11.1435L1.83398 11.1524L1.89229 11.2398L1.30124 13.2662ZM9.46888 9.00689C9.48514 8.98585 9.50284 8.9625 9.52093 8.9375H9.52394C9.54959 8.94512 9.58801 8.95841 9.63966 8.97843C9.74314 9.01853 9.87332 9.07528 10.0104 9.13813C10.2832 9.26315 10.5578 9.40039 10.6514 9.44721C10.689 9.46601 10.7238 9.48109 10.7495 9.49199C10.7585 9.49584 10.766 9.49901 10.7725 9.50176C10.7875 9.50807 10.7972 9.51218 10.8084 9.51721C10.81 9.51793 10.8114 9.51861 10.8128 9.51924C10.822 9.53917 10.8377 9.58153 10.8535 9.66056L10.8927 9.85654C10.8765 9.95006 10.8436 10.0759 10.7858 10.2206L10.7732 10.2521L10.7669 10.277C10.7655 10.2788 10.7523 10.3063 10.7056 10.3569C10.6487 10.4184 10.5668 10.4874 10.4687 10.5527C10.3714 10.6176 10.2701 10.671 10.181 10.7067C10.1368 10.7243 10.0998 10.736 10.071 10.7429C10.0436 10.7494 10.0309 10.75 10.0309 10.75C10.0309 10.75 10.031 10.75 10.0313 10.75C9.94419 10.75 9.84269 10.7589 9.77067 10.7653C9.74686 10.7674 9.72627 10.7692 9.71049 10.7703C9.62848 10.7761 9.53958 10.7782 9.4185 10.7648C9.16799 10.7369 8.74817 10.6387 7.97161 10.3189L7.97162 10.3189L7.96693 10.317C7.12779 9.98135 6.41415 9.36187 5.8872 8.79007C5.62655 8.50723 5.41781 8.24293 5.26801 8.04273C5.1931 7.94263 5.13315 7.85885 5.08743 7.79492L5.08462 7.79098C5.06354 7.76151 5.04343 7.73338 5.02712 7.71122C5.02664 7.71056 5.02605 7.70975 5.02535 7.7088C5.02203 7.70426 5.01634 7.69648 5.00893 7.6868C4.9795 7.63629 4.94131 7.57601 4.90646 7.52102C4.8904 7.49566 4.87504 7.47143 4.86159 7.4498C4.79096 7.33624 4.70902 7.19844 4.63081 7.04202C4.47109 6.72258 4.34376 6.35807 4.34376 6C4.34376 5.26935 4.69149 4.92178 4.84886 4.76448L4.85354 4.7598C4.87052 4.74282 4.88309 4.73438 4.89022 4.73025C4.89735 4.7261 4.90272 4.72414 4.90688 4.72295C4.91668 4.72015 4.92646 4.71875 4.96874 4.71875H4.96984H4.97093H4.97202H4.97312H4.97421H4.97529H4.97638H4.97746H4.97854H4.97962H4.98069H4.98177H4.98284H4.98391H4.98498H4.98604H4.98711H4.98817H4.98923H4.99029H4.99134H4.9924H4.99345H4.9945H4.99554H4.99659H4.99763H4.99867H4.99971H5.00075H5.00179H5.00282H5.00385H5.00488H5.00591H5.00693H5.00795H5.00898H5.00999H5.01101H5.01203H5.01304H5.01405H5.01506H5.01607H5.01707H5.01808H5.01908H5.02008H5.02108H5.02207H5.02307H5.02406H5.02505H5.02603H5.02702H5.028H5.02899H5.02997H5.03095H5.03192H5.0329H5.03387H5.03484H5.03581H5.03678H5.03774H5.03871H5.03967H5.04063H5.04158H5.04254H5.04349H5.04445H5.0454H5.04635H5.04729H5.04824H5.04918H5.05012H5.05106H5.052H5.05293H5.05387H5.0548H5.05573H5.05666H5.05759H5.05851H5.05944H5.06036H5.06128H5.0622H5.06311H5.06403H5.06494H5.06585H5.06676H5.06767H5.06857H5.06948H5.07038H5.07128H5.07218H5.07308H5.07397H5.07487H5.07576H5.07665H5.07754H5.07843H5.07931H5.08019H5.08108H5.08196H5.08284H5.08371H5.08459H5.08546H5.08634H5.08721H5.08807H5.08894H5.08981H5.09067H5.09153H5.09239H5.09325H5.09411H5.09497H5.09582H5.09667H5.09753H5.09837H5.09922H5.10007H5.10091H5.10176H5.1026H5.10344H5.10428H5.10511H5.10595H5.10678H5.10762H5.10845H5.10928H5.1101H5.11093H5.11176H5.11258H5.1134H5.11422H5.11504H5.11586H5.11667H5.11749H5.1183H5.11911H5.11992H5.12073H5.12154H5.12234H5.12314H5.12395H5.12475H5.12555H5.12635H5.12714H5.12794H5.12873H5.12952H5.13031H5.1311H5.13189H5.13268H5.13346H5.13425H5.13503H5.13581H5.13659H5.13737H5.13815H5.13892H5.1397H5.14047H5.14124H5.14201H5.14278H5.14355H5.14431H5.14508H5.14584H5.1466H5.14736H5.14812H5.14888H5.14964H5.15039H5.15115H5.1519H5.15265H5.1534H5.15415H5.1549H5.15564H5.15639H5.15713H5.15787H5.15861H5.15935H5.16009H5.16083H5.16157H5.1623H5.16303H5.16377H5.1645H5.16523H5.16596H5.16668H5.16741H5.16814H5.16886H5.16958H5.1703H5.17102H5.17174H5.17246H5.17318H5.17389H5.17461H5.17532H5.17603H5.17674H5.17745H5.17816H5.17887H5.17957H5.18028H5.18098H5.18168H5.18239H5.18309H5.18379H5.18448H5.18518H5.18588H5.18657H5.18727H5.18796H5.18865H5.18934H5.19003H5.19072H5.19141H5.19209H5.19278H5.19346H5.19414H5.19483H5.19551H5.19619H5.19687H5.19754H5.19822H5.1989H5.19957H5.20024H5.20092H5.20159H5.20226H5.20293H5.2036H5.20426H5.20493H5.2056H5.20626H5.20693H5.20759H5.20825H5.20891H5.20957H5.21023H5.21089H5.21154H5.2122H5.21285H5.21351H5.21416H5.21481H5.21547H5.21612H5.21676H5.21741H5.21806H5.21871H5.21935H5.22H5.22064H5.22129H5.22193H5.22257H5.22321H5.22385H5.22449H5.22513H5.22576H5.2264H5.22703H5.22767H5.2283H5.22894H5.22957H5.2302H5.23083H5.23146H5.23209H5.23271H5.23334H5.23397H5.23459H5.23522H5.23584H5.23646H5.23709H5.23771H5.23833H5.23895H5.23957H5.24019H5.2408H5.24142H5.24204H5.24265H5.24327H5.24388H5.24449H5.24511H5.24572H5.24633H5.24694H5.24755H5.24816H5.24877H5.24937H5.24998H5.25059H5.25119H5.2518H5.2524H5.253H5.25361H5.25421H5.25481H5.25541H5.25601H5.25661H5.25721H5.25781H5.2584H5.259H5.2596H5.26019H5.26079H5.26138H5.26198H5.26257H5.26316H5.26375H5.26435H5.26494H5.26553H5.26612H5.26671H5.26729H5.26788H5.26847H5.26905H5.26911L5.27154 4.72361C5.35573 4.89198 5.49017 5.2045 5.60608 5.49429C5.66334 5.63743 5.71354 5.76871 5.74872 5.86747C5.76572 5.9152 5.77766 5.95101 5.78494 5.9749C5.78631 5.9878 5.78799 6.00018 5.78987 6.01196C5.76872 6.04739 5.7538 6.07739 5.74361 6.09786C5.74245 6.1002 5.74135 6.10241 5.7403 6.1045C5.73524 6.11462 5.7316 6.12162 5.72918 6.12621L5.59957 6.25583L5.45896 6.39645C5.45681 6.39859 5.45418 6.40117 5.45113 6.40417C5.41053 6.44398 5.29471 6.55758 5.23109 6.71664C5.14466 6.93268 5.17383 7.15318 5.27154 7.34861C5.37898 7.56349 5.78953 8.28607 6.4252 8.81767C7.12089 9.42534 7.69207 9.67484 7.93454 9.78076C7.97429 9.79812 8.0052 9.81162 8.02638 9.82221L8.13195 9.875H8.24999C8.26015 9.875 8.27113 9.87511 8.28286 9.87523C8.44072 9.8768 8.73364 9.87973 8.97856 9.6348L9.03594 9.57743L9.07169 9.50593C9.07172 9.50594 9.07552 9.49903 9.08582 9.48388C9.09762 9.46651 9.11378 9.44439 9.13491 9.41704C9.17799 9.36129 9.23029 9.29844 9.29037 9.22633L9.29356 9.2225C9.34988 9.15492 9.41341 9.07868 9.46888 9.00689ZM10.8046 9.50434C10.8046 9.50422 10.8055 9.50536 10.8071 9.50811C10.8053 9.50584 10.8045 9.50446 10.8046 9.50434Z" stroke="white" stroke-opacity="0.2" />
											</svg>
										</div>What’s up
									</a>
									<a href="https://t.me/share/url?url=<?= $urls ?>&text=Поставщик: <?= $arResult['PROPERTIES']['comp']['VALUE'] ?>" target="_blank">
										<div class="svg"><svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1.03117 5.59647C5.0577 3.76188 7.74267 2.55241 9.08611 1.96805C12.9219 0.299594 13.7189 0.00976514 14.2384 9.27819e-05C14.3527 -0.00191006 14.6082 0.0277027 14.7737 0.16813C14.9134 0.286703 14.9518 0.44688 14.9702 0.5593C14.9886 0.671721 15.0115 0.927819 14.9933 1.12793C14.7855 3.41192 13.8861 8.95457 13.4285 11.5127C13.2349 12.5951 12.8536 12.958 12.4845 12.9936C11.6824 13.0707 11.0734 12.4392 10.2965 11.9067C9.08085 11.0733 8.39409 10.5545 7.21409 9.74136C5.8504 8.80157 6.73442 8.28505 7.51159 7.44091C7.71497 7.21999 11.249 3.85836 11.3174 3.55341C11.326 3.51527 11.3339 3.37311 11.2532 3.29804C11.1724 3.22297 11.0532 3.24864 10.9672 3.26906C10.8453 3.29799 8.90325 4.64035 5.14115 7.29611C4.58991 7.69195 4.09062 7.88482 3.64327 7.87472C3.15011 7.86357 2.20146 7.58311 1.49623 7.34338C0.631245 7.04933 -0.0562297 6.89387 0.00363389 6.3945C0.0348145 6.13439 0.377327 5.86838 1.03117 5.59647Z" fill="#181818" />
												<path d="M1.23088 6.05493L1.22317 6.05814C0.914893 6.18634 0.71172 6.30073 0.590594 6.3948C0.565781 6.41407 0.546824 6.43057 0.53245 6.4442C0.554495 6.45914 0.585676 6.47792 0.629059 6.4999C0.799669 6.58632 1.02214 6.65958 1.31777 6.75692C1.42157 6.7911 1.5344 6.82825 1.65716 6.86998C2.00271 6.98745 2.40422 7.1136 2.77611 7.21112C3.16015 7.31183 3.47142 7.37071 3.65457 7.37484C3.95025 7.38152 4.34329 7.25349 4.8495 6.88998L4.85279 6.88762L4.85279 6.88763C6.73419 5.55951 8.16184 4.55884 9.13494 3.88622C9.62115 3.55014 9.9959 3.29456 10.2578 3.12056C10.3882 3.03389 10.494 2.96525 10.5729 2.91639C10.6119 2.89225 10.6488 2.87013 10.6812 2.85226C10.6971 2.84343 10.7166 2.83308 10.7373 2.82329L10.7378 2.82307C10.7511 2.8168 10.7954 2.79594 10.8517 2.78257L10.8563 2.78149C10.8991 2.77129 11.0017 2.74682 11.1162 2.74776C11.2442 2.7488 11.432 2.78166 11.5936 2.93181C11.7534 3.08036 11.7992 3.26585 11.8139 3.36943C11.8288 3.4752 11.8236 3.58128 11.8053 3.66284L1.23088 6.05493ZM1.23088 6.05493L1.23848 6.05147M1.23088 6.05493L1.23848 6.05147M1.23848 6.05147C5.26568 4.21657 7.94673 3.0089 9.28555 2.42655M1.23848 6.05147L9.28555 2.42655M9.28555 2.42655C11.2053 1.59151 12.3526 1.10679 13.0833 0.829497M9.28555 2.42655L13.0833 0.829497M13.0833 0.829497C13.8232 0.5487 14.0818 0.503096 14.2477 0.500006M13.0833 0.829497L14.2477 0.500006M14.2477 0.500006L14.2384 9.27819e-05M14.2477 0.500006L14.2384 9.27819e-05M14.2384 9.27819e-05L14.2472 0.500016C14.2633 0.499733 14.3119 0.502351 14.3656 0.515775M14.2384 9.27819e-05C13.7189 0.00976514 12.9219 0.299594 9.08611 1.96805L14.3656 0.515775M14.2384 9.27819e-05C14.3527 -0.00191006 14.6082 0.0277027 14.7737 0.16813C14.9134 0.286703 14.9518 0.44688 14.9702 0.5593L14.2384 9.27819e-05ZM14.3656 0.515775C14.3908 0.522085 14.4118 0.529455 14.4277 0.536775M14.3656 0.515775L14.4277 0.536775M14.4277 0.536775C14.4355 0.540322 14.4411 0.543443 14.4449 0.545821M14.4277 0.536775L14.4449 0.545821M14.4449 0.545821C14.4488 0.548191 14.4503 0.549502 14.4502 0.549368M14.4449 0.545821L14.4502 0.549368M14.4502 0.549368C14.4509 0.550022 14.4513 0.550388 14.4519 0.551249M14.4502 0.549368L14.4519 0.551249M14.4519 0.551249C14.4527 0.552388 14.4547 0.555575 14.4575 0.562088M14.4519 0.551249L14.4575 0.562088M14.4575 0.562088C14.4639 0.577041 14.4702 0.59973 14.4768 0.640054M14.4575 0.562088L14.4768 0.640054M14.4768 0.640054C14.4825 0.675184 14.4913 0.749206 14.4963 0.838579M14.4768 0.640054L14.4963 0.838579M14.4963 0.838579C14.5013 0.928465 14.5015 1.01594 14.4954 1.08261M14.4963 0.838579L14.4954 1.08261M14.4954 1.08261C14.2897 3.34221 13.3942 8.86486 12.9363 11.4246M14.4954 1.08261L12.9363 11.4246M12.9363 11.4246C12.7491 12.471 12.4394 12.4956 12.4367 12.4959M12.9363 11.4246L12.4367 12.4959M12.4367 12.4959L12.4367 12.4959M12.4367 12.4959L12.4367 12.4959M12.4367 12.4959C12.1901 12.5196 11.9492 12.441 11.6428 12.2527M12.4367 12.4959L11.6428 12.2527M11.6428 12.2527C11.4885 12.158 11.33 12.0432 11.1515 11.9106M11.6428 12.2527L11.1515 11.9106M11.1515 11.9106C11.1229 11.8894 11.0937 11.8677 11.0641 11.8455M11.1515 11.9106L11.0641 11.8455M11.0641 11.8455C10.9136 11.7334 10.7499 11.6112 10.5792 11.4943M11.0641 11.8455L10.5792 11.4943M10.5792 11.4943C9.97529 11.0803 9.50273 10.7444 9.03196 10.4092M10.5792 11.4943L9.03196 10.4092M9.03196 10.4092L8.96914 10.3644M9.03196 10.4092L8.96914 10.3644M8.96914 10.3644C8.51912 10.0439 8.06505 9.72056 7.49781 9.32965M8.96914 10.3644L7.49781 9.32965M7.49781 9.32965C7.18435 9.11363 7.06465 8.96358 7.02332 8.88079M7.49781 9.32965L7.02332 8.88079M7.02332 8.88079C6.99821 8.83051 6.99761 8.80466 7.0211 8.74866M7.02332 8.88079L7.0211 8.74866M7.0211 8.74866C7.05772 8.66135 7.14359 8.54362 7.30983 8.36672M7.0211 8.74866L7.30983 8.36672M7.30983 8.36672C7.38051 8.29151 7.45697 8.21443 7.54192 8.12877M7.30983 8.36672L7.54192 8.12877M7.54192 8.12877C7.55276 8.11784 7.56374 8.10677 7.57487 8.09554M7.54192 8.12877L7.57487 8.09554M7.57487 8.09554C7.67099 7.99856 7.77548 7.89248 7.8794 7.7796M7.57487 8.09554L7.8794 7.7796M7.8794 7.7796C7.8794 7.7796 7.87941 7.7796 7.87941 7.77959C7.87956 7.77943 7.88085 7.77805 7.88368 7.77511M7.8794 7.7796L7.88368 7.77511M7.88368 7.77511L7.89645 7.76203M7.88368 7.77511L7.89645 7.76203M7.89645 7.76203C7.90735 7.75096 7.92164 7.73664 7.93949 7.71891M7.89645 7.76203L7.93949 7.71891M7.93949 7.71891C7.97515 7.68348 8.02246 7.63698 8.08028 7.58044M7.93949 7.71891L8.08028 7.58044M8.08028 7.58044C8.18446 7.47857 8.32011 7.34668 8.47826 7.19292M8.08028 7.58044L8.47826 7.19292M8.47826 7.19292L8.53099 7.14166M8.47826 7.19292L8.53099 7.14166M8.53099 7.14166C8.89195 6.7907 9.35618 6.33902 9.81648 5.88442M8.53099 7.14166L9.81648 5.88442M9.81648 5.88442C10.2761 5.43053 10.735 4.97043 11.0847 4.60316M9.81648 5.88442L11.0847 4.60316M11.0847 4.60316C11.2588 4.42022 11.4107 4.25525 11.5232 4.12326M11.0847 4.60316L11.5232 4.12326M11.5232 4.12326C11.5788 4.05792 11.6306 3.994 11.6721 3.93617M11.5232 4.12326L11.6721 3.93617M11.6721 3.93617C11.6927 3.90743 11.7154 3.87377 11.7358 3.83776M11.6721 3.93617L11.7358 3.83776M11.7358 3.83776C11.7518 3.80966 11.7867 3.74563 11.8053 3.66285L11.7358 3.83776Z" stroke="white" stroke-opacity="0.2" />
											</svg>
										</div>Telegram
									</a>
									<a href="https://www.linkedin.com/shareArticle?url=<?= $urls ?>&title=Поставщик: <?= $arResult['PROPERTIES']['comp']['VALUE'] ?>" target="_blank">
										<div class="svg"><svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M3.15001 13H0.174997V4.30625H3.15001V13ZM1.6625 3.0875C0.700001 3.0875 0 2.4375 0 1.54375C0 0.65 0.787501 0 1.6625 0C2.625 0 3.325 0.65 3.325 1.54375C3.325 2.4375 2.625 3.0875 1.6625 3.0875ZM14 13H11.025V8.2875C11.025 6.90625 10.4125 6.5 9.53749 6.5C8.66249 6.5 7.78749 7.15 7.78749 8.36875V13H4.8125V4.30625H7.6125V5.525C7.875 4.95625 8.92499 4.0625 10.4125 4.0625C12.075 4.0625 13.825 4.95625 13.825 7.6375V13H14Z" fill="#181818" />
												<path d="M13.325 7.6375V12.5H11.525V8.2875C11.525 7.53534 11.3598 6.93663 10.9706 6.53003C10.5757 6.11755 10.0443 6 9.53749 6C8.40602 6 7.28749 6.85459 7.28749 8.36875V12.5H5.3125V4.80625H7.1125V5.525L8.06648 5.73453C8.14478 5.56487 8.39033 5.2663 8.81413 5.00694C9.22552 4.75516 9.77056 4.5625 10.4125 4.5625C11.1621 4.5625 11.8859 4.76466 12.4149 5.22257C12.9306 5.66894 13.325 6.41336 13.325 7.6375ZM0.674997 12.5V4.80625H2.65001V12.5H0.674997ZM1.6625 2.5875C0.940602 2.5875 0.5 2.12711 0.5 1.54375C0.5 0.976657 1.01026 0.5 1.6625 0.5C2.3844 0.5 2.825 0.960392 2.825 1.54375C2.825 2.12711 2.3844 2.5875 1.6625 2.5875Z" stroke="white" stroke-opacity="0.2" />
											</svg>
										</div>Linked in
									</a>
								</div>
							</div>
							<div class="filter__text">Поделиться</div>
						</div>
						<div class="section__subtitle"><?= $arResult['PROPERTIES']['desc']['~VALUE']['TEXT'] ?></div>

						<div class="card_product_vendor__left-btns">
							<button class="btn empty btn-doc-vendor">Запросить документ</button>
							<button class="btn empty btn-sample-vendor">Запросить образец</button>
							<button class="btn empty btn-price-vendor">Запросить цену</button>
						</div>
					</div>

					<div class="card_product_vendor__right">
						<div class="share gradient_border">
							<div class="contact__us-circle"></div>
							<div class="share__item">
								<button class="icon<?if($_SESSION['log']['login'] == ''){$userarElements = ($_COOKIE['postavshiki']) ? unserialize($_COOKIE['postavshiki']) : array();}
							else{
								$usersreq = CIBlockElement::GetByID($_SESSION['log']['id']);
   $userElem = $usersreq->GetNextElement();
   $usearFields = $userElem->GetFields();
   $userarProps = $userElem->GetProperties();
	$userarElements = ($userarProps['favourites_postavshiki']['VALUE']) ? $userarProps['favourites_postavshiki']['VALUE'] : array();} 
	if(in_array($arResult['ID'], $userarElements)){echo " liked";}?>" id="fav_add" post_id="<?= $arResult['ID'] ?>">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</button>
								<div class="filter__text">Добавить в избранное</div>
							</div>
							<div class="share__item">
								<button class="icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M18 16.08C17.24 16.08 16.56 16.38 16.04 16.85L8.91 12.7C8.96 12.47 9 12.24 9 12C9 11.76 8.96 11.53 8.91 11.3L15.96 7.19C16.5 7.69 17.21 8 18 8C19.66 8 21 6.66 21 5C21 3.34 19.66 2 18 2C16.34 2 15 3.34 15 5C15 5.24 15.04 5.47 15.09 5.7L8.04 9.81C7.5 9.31 6.79 9 6 9C4.34 9 3 10.34 3 12C3 13.66 4.34 15 6 15C6.79 15 7.5 14.69 8.04 14.19L15.16 18.35C15.11 18.56 15.08 18.78 15.08 19C15.08 20.61 16.39 21.92 18 21.92C19.61 21.92 20.92 20.61 20.92 19C20.92 17.39 19.61 16.08 18 16.08Z" fill="#7C9DA8" />
									</svg>

								</button>
								<div class="filter__text">Поделиться</div>
							</div>
						</div>
						<div class="dropdown">
							<button class="dropdown_btn icon" type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M18 16.08C17.24 16.08 16.56 16.38 16.04 16.85L8.91 12.7C8.96 12.47 9 12.24 9 12C9 11.76 8.96 11.53 8.91 11.3L15.96 7.19C16.5 7.69 17.21 8 18 8C19.66 8 21 6.66 21 5C21 3.34 19.66 2 18 2C16.34 2 15 3.34 15 5C15 5.24 15.04 5.47 15.09 5.7L8.04 9.81C7.5 9.31 6.79 9 6 9C4.34 9 3 10.34 3 12C3 13.66 4.34 15 6 15C6.79 15 7.5 14.69 8.04 14.19L15.16 18.35C15.11 18.56 15.08 18.78 15.08 19C15.08 20.61 16.39 21.92 18 21.92C19.61 21.92 20.92 20.61 20.92 19C20.92 17.39 19.61 16.08 18 16.08Z" fill="#7C9DA8" />
								</svg>
							</button>
							<? $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
							$url = explode('?', $url);
							$url = $url[0];
							$url = explode(":80", $url);
							$urls = $url[0] . $url[1];
							?>
							<div class="dropdown_list">
								<a href="https://wa.me/?text=Поставщик: <?= $arResult['PROPERTIES']['comp']['VALUE'] ?> %0A <?= $urls ?>" target="_blank">
									<div class="svg"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 2.15625C11.3438 0.75 9.46875 0 7.5 0C3.375 0 0 3.375 0 7.5C0 8.8125 0.375006 10.125 1.03126 11.25L0 15L3.93751 13.9687C5.06251 14.5312 6.28125 14.9062 7.5 14.9062C11.625 14.9062 15 11.5312 15 7.40625C15 5.4375 14.1563 3.5625 12.75 2.15625ZM7.5 13.6875C6.375 13.6875 5.25001 13.4063 4.31251 12.8438L4.12499 12.75L1.78124 13.4062L2.43751 11.1562L2.24999 10.875C1.59374 9.84375 1.31249 8.71875 1.31249 7.59375C1.31249 4.21875 4.125 1.40625 7.5 1.40625C9.1875 1.40625 10.6875 2.0625 11.9063 3.1875C13.125 4.40625 13.6875 5.90625 13.6875 7.59375C13.6875 10.875 10.9687 13.6875 7.5 13.6875ZM10.875 9C10.6875 8.90625 9.75001 8.4375 9.56251 8.4375C9.37501 8.34375 9.28124 8.34375 9.18749 8.53125C9.09374 8.71875 8.71876 9.09375 8.62501 9.28125C8.53126 9.375 8.43749 9.375 8.24999 9.375C8.06249 9.28125 7.50001 9.09375 6.75001 8.4375C6.18751 7.96875 5.81251 7.3125 5.71876 7.125C5.62501 6.9375 5.71876 6.84375 5.81251 6.75C5.90626 6.65625 6 6.5625 6.09375 6.46875C6.1875 6.375 6.18751 6.28125 6.28126 6.1875C6.37501 6.09375 6.28126 6 6.28126 5.90625C6.28126 5.8125 5.90626 4.875 5.71876 4.5C5.62501 4.21875 5.43751 4.21875 5.34376 4.21875C5.25001 4.21875 5.15624 4.21875 4.96874 4.21875C4.87499 4.21875 4.68749 4.21875 4.49999 4.40625C4.31249 4.59375 3.84376 5.0625 3.84376 6C3.84376 6.9375 4.49999 7.78125 4.59374 7.96875C4.68749 8.0625 5.90624 10.0312 7.78124 10.7812C9.37499 11.4375 9.65626 11.25 10.0313 11.25C10.4063 11.25 11.1562 10.7812 11.25 10.4062C11.4375 9.9375 11.4375 9.5625 11.3438 9.5625C11.25 9.09375 11.0625 9.09375 10.875 9Z" fill="#181818" />
											<path d="M1.51336 11.3826L1.56913 11.1798L1.46315 10.9981C0.849066 9.94536 0.5 8.71926 0.5 7.5C0.5 3.65114 3.65114 0.5 7.5 0.5C9.34007 0.5 11.0867 1.20006 12.3965 2.5098C13.7178 3.83111 14.5 5.58209 14.5 7.40625C14.5 11.2551 11.3489 14.4062 7.5 14.4062C6.3817 14.4062 5.24049 14.0612 4.16112 13.5215L3.99284 13.4374L3.81083 13.4851L0.71198 14.2967L1.51336 11.3826ZM1.30124 13.2662L1.04918 14.1305L1.91606 13.8877L4.07379 13.2836C5.09379 13.8904 6.30232 14.1875 7.5 14.1875C11.2449 14.1875 14.1875 11.1511 14.1875 7.59375C14.1875 5.78461 13.5798 4.15395 12.2598 2.83395L12.2527 2.82688L12.2454 2.8201C10.9444 1.61913 9.32625 0.90625 7.5 0.90625C3.84886 0.90625 0.812494 3.94261 0.812494 7.59375C0.812494 8.80424 1.11594 10.0242 1.82816 11.1434L1.82807 11.1435L1.83398 11.1524L1.89229 11.2398L1.30124 13.2662ZM9.46888 9.00689C9.48514 8.98585 9.50284 8.9625 9.52093 8.9375H9.52394C9.54959 8.94512 9.58801 8.95841 9.63966 8.97843C9.74314 9.01853 9.87332 9.07528 10.0104 9.13813C10.2832 9.26315 10.5578 9.40039 10.6514 9.44721C10.689 9.46601 10.7238 9.48109 10.7495 9.49199C10.7585 9.49584 10.766 9.49901 10.7725 9.50176C10.7875 9.50807 10.7972 9.51218 10.8084 9.51721C10.81 9.51793 10.8114 9.51861 10.8128 9.51924C10.822 9.53917 10.8377 9.58153 10.8535 9.66056L10.8927 9.85654C10.8765 9.95006 10.8436 10.0759 10.7858 10.2206L10.7732 10.2521L10.7669 10.277C10.7655 10.2788 10.7523 10.3063 10.7056 10.3569C10.6487 10.4184 10.5668 10.4874 10.4687 10.5527C10.3714 10.6176 10.2701 10.671 10.181 10.7067C10.1368 10.7243 10.0998 10.736 10.071 10.7429C10.0436 10.7494 10.0309 10.75 10.0309 10.75C10.0309 10.75 10.031 10.75 10.0313 10.75C9.94419 10.75 9.84269 10.7589 9.77067 10.7653C9.74686 10.7674 9.72627 10.7692 9.71049 10.7703C9.62848 10.7761 9.53958 10.7782 9.4185 10.7648C9.16799 10.7369 8.74817 10.6387 7.97161 10.3189L7.97162 10.3189L7.96693 10.317C7.12779 9.98135 6.41415 9.36187 5.8872 8.79007C5.62655 8.50723 5.41781 8.24293 5.26801 8.04273C5.1931 7.94263 5.13315 7.85885 5.08743 7.79492L5.08462 7.79098C5.06354 7.76151 5.04343 7.73338 5.02712 7.71122C5.02664 7.71056 5.02605 7.70975 5.02535 7.7088C5.02203 7.70426 5.01634 7.69648 5.00893 7.6868C4.9795 7.63629 4.94131 7.57601 4.90646 7.52102C4.8904 7.49566 4.87504 7.47143 4.86159 7.4498C4.79096 7.33624 4.70902 7.19844 4.63081 7.04202C4.47109 6.72258 4.34376 6.35807 4.34376 6C4.34376 5.26935 4.69149 4.92178 4.84886 4.76448L4.85354 4.7598C4.87052 4.74282 4.88309 4.73438 4.89022 4.73025C4.89735 4.7261 4.90272 4.72414 4.90688 4.72295C4.91668 4.72015 4.92646 4.71875 4.96874 4.71875H4.96984H4.97093H4.97202H4.97312H4.97421H4.97529H4.97638H4.97746H4.97854H4.97962H4.98069H4.98177H4.98284H4.98391H4.98498H4.98604H4.98711H4.98817H4.98923H4.99029H4.99134H4.9924H4.99345H4.9945H4.99554H4.99659H4.99763H4.99867H4.99971H5.00075H5.00179H5.00282H5.00385H5.00488H5.00591H5.00693H5.00795H5.00898H5.00999H5.01101H5.01203H5.01304H5.01405H5.01506H5.01607H5.01707H5.01808H5.01908H5.02008H5.02108H5.02207H5.02307H5.02406H5.02505H5.02603H5.02702H5.028H5.02899H5.02997H5.03095H5.03192H5.0329H5.03387H5.03484H5.03581H5.03678H5.03774H5.03871H5.03967H5.04063H5.04158H5.04254H5.04349H5.04445H5.0454H5.04635H5.04729H5.04824H5.04918H5.05012H5.05106H5.052H5.05293H5.05387H5.0548H5.05573H5.05666H5.05759H5.05851H5.05944H5.06036H5.06128H5.0622H5.06311H5.06403H5.06494H5.06585H5.06676H5.06767H5.06857H5.06948H5.07038H5.07128H5.07218H5.07308H5.07397H5.07487H5.07576H5.07665H5.07754H5.07843H5.07931H5.08019H5.08108H5.08196H5.08284H5.08371H5.08459H5.08546H5.08634H5.08721H5.08807H5.08894H5.08981H5.09067H5.09153H5.09239H5.09325H5.09411H5.09497H5.09582H5.09667H5.09753H5.09837H5.09922H5.10007H5.10091H5.10176H5.1026H5.10344H5.10428H5.10511H5.10595H5.10678H5.10762H5.10845H5.10928H5.1101H5.11093H5.11176H5.11258H5.1134H5.11422H5.11504H5.11586H5.11667H5.11749H5.1183H5.11911H5.11992H5.12073H5.12154H5.12234H5.12314H5.12395H5.12475H5.12555H5.12635H5.12714H5.12794H5.12873H5.12952H5.13031H5.1311H5.13189H5.13268H5.13346H5.13425H5.13503H5.13581H5.13659H5.13737H5.13815H5.13892H5.1397H5.14047H5.14124H5.14201H5.14278H5.14355H5.14431H5.14508H5.14584H5.1466H5.14736H5.14812H5.14888H5.14964H5.15039H5.15115H5.1519H5.15265H5.1534H5.15415H5.1549H5.15564H5.15639H5.15713H5.15787H5.15861H5.15935H5.16009H5.16083H5.16157H5.1623H5.16303H5.16377H5.1645H5.16523H5.16596H5.16668H5.16741H5.16814H5.16886H5.16958H5.1703H5.17102H5.17174H5.17246H5.17318H5.17389H5.17461H5.17532H5.17603H5.17674H5.17745H5.17816H5.17887H5.17957H5.18028H5.18098H5.18168H5.18239H5.18309H5.18379H5.18448H5.18518H5.18588H5.18657H5.18727H5.18796H5.18865H5.18934H5.19003H5.19072H5.19141H5.19209H5.19278H5.19346H5.19414H5.19483H5.19551H5.19619H5.19687H5.19754H5.19822H5.1989H5.19957H5.20024H5.20092H5.20159H5.20226H5.20293H5.2036H5.20426H5.20493H5.2056H5.20626H5.20693H5.20759H5.20825H5.20891H5.20957H5.21023H5.21089H5.21154H5.2122H5.21285H5.21351H5.21416H5.21481H5.21547H5.21612H5.21676H5.21741H5.21806H5.21871H5.21935H5.22H5.22064H5.22129H5.22193H5.22257H5.22321H5.22385H5.22449H5.22513H5.22576H5.2264H5.22703H5.22767H5.2283H5.22894H5.22957H5.2302H5.23083H5.23146H5.23209H5.23271H5.23334H5.23397H5.23459H5.23522H5.23584H5.23646H5.23709H5.23771H5.23833H5.23895H5.23957H5.24019H5.2408H5.24142H5.24204H5.24265H5.24327H5.24388H5.24449H5.24511H5.24572H5.24633H5.24694H5.24755H5.24816H5.24877H5.24937H5.24998H5.25059H5.25119H5.2518H5.2524H5.253H5.25361H5.25421H5.25481H5.25541H5.25601H5.25661H5.25721H5.25781H5.2584H5.259H5.2596H5.26019H5.26079H5.26138H5.26198H5.26257H5.26316H5.26375H5.26435H5.26494H5.26553H5.26612H5.26671H5.26729H5.26788H5.26847H5.26905H5.26911L5.27154 4.72361C5.35573 4.89198 5.49017 5.2045 5.60608 5.49429C5.66334 5.63743 5.71354 5.76871 5.74872 5.86747C5.76572 5.9152 5.77766 5.95101 5.78494 5.9749C5.78631 5.9878 5.78799 6.00018 5.78987 6.01196C5.76872 6.04739 5.7538 6.07739 5.74361 6.09786C5.74245 6.1002 5.74135 6.10241 5.7403 6.1045C5.73524 6.11462 5.7316 6.12162 5.72918 6.12621L5.59957 6.25583L5.45896 6.39645C5.45681 6.39859 5.45418 6.40117 5.45113 6.40417C5.41053 6.44398 5.29471 6.55758 5.23109 6.71664C5.14466 6.93268 5.17383 7.15318 5.27154 7.34861C5.37898 7.56349 5.78953 8.28607 6.4252 8.81767C7.12089 9.42534 7.69207 9.67484 7.93454 9.78076C7.97429 9.79812 8.0052 9.81162 8.02638 9.82221L8.13195 9.875H8.24999C8.26015 9.875 8.27113 9.87511 8.28286 9.87523C8.44072 9.8768 8.73364 9.87973 8.97856 9.6348L9.03594 9.57743L9.07169 9.50593C9.07172 9.50594 9.07552 9.49903 9.08582 9.48388C9.09762 9.46651 9.11378 9.44439 9.13491 9.41704C9.17799 9.36129 9.23029 9.29844 9.29037 9.22633L9.29356 9.2225C9.34988 9.15492 9.41341 9.07868 9.46888 9.00689ZM10.8046 9.50434C10.8046 9.50422 10.8055 9.50536 10.8071 9.50811C10.8053 9.50584 10.8045 9.50446 10.8046 9.50434Z" stroke="white" stroke-opacity="0.2" />
										</svg>
									</div>What’s up
								</a>
								<a href="https://t.me/share/url?url=<?= $urls ?>&text=Поставщик: <?= $arResult['PROPERTIES']['comp']['VALUE'] ?>" target="_blank">
									<div class="svg"><svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1.03117 5.59647C5.0577 3.76188 7.74267 2.55241 9.08611 1.96805C12.9219 0.299594 13.7189 0.00976514 14.2384 9.27819e-05C14.3527 -0.00191006 14.6082 0.0277027 14.7737 0.16813C14.9134 0.286703 14.9518 0.44688 14.9702 0.5593C14.9886 0.671721 15.0115 0.927819 14.9933 1.12793C14.7855 3.41192 13.8861 8.95457 13.4285 11.5127C13.2349 12.5951 12.8536 12.958 12.4845 12.9936C11.6824 13.0707 11.0734 12.4392 10.2965 11.9067C9.08085 11.0733 8.39409 10.5545 7.21409 9.74136C5.8504 8.80157 6.73442 8.28505 7.51159 7.44091C7.71497 7.21999 11.249 3.85836 11.3174 3.55341C11.326 3.51527 11.3339 3.37311 11.2532 3.29804C11.1724 3.22297 11.0532 3.24864 10.9672 3.26906C10.8453 3.29799 8.90325 4.64035 5.14115 7.29611C4.58991 7.69195 4.09062 7.88482 3.64327 7.87472C3.15011 7.86357 2.20146 7.58311 1.49623 7.34338C0.631245 7.04933 -0.0562297 6.89387 0.00363389 6.3945C0.0348145 6.13439 0.377327 5.86838 1.03117 5.59647Z" fill="#181818" />
											<path d="M1.23088 6.05493L1.22317 6.05814C0.914893 6.18634 0.71172 6.30073 0.590594 6.3948C0.565781 6.41407 0.546824 6.43057 0.53245 6.4442C0.554495 6.45914 0.585676 6.47792 0.629059 6.4999C0.799669 6.58632 1.02214 6.65958 1.31777 6.75692C1.42157 6.7911 1.5344 6.82825 1.65716 6.86998C2.00271 6.98745 2.40422 7.1136 2.77611 7.21112C3.16015 7.31183 3.47142 7.37071 3.65457 7.37484C3.95025 7.38152 4.34329 7.25349 4.8495 6.88998L4.85279 6.88762L4.85279 6.88763C6.73419 5.55951 8.16184 4.55884 9.13494 3.88622C9.62115 3.55014 9.9959 3.29456 10.2578 3.12056C10.3882 3.03389 10.494 2.96525 10.5729 2.91639C10.6119 2.89225 10.6488 2.87013 10.6812 2.85226C10.6971 2.84343 10.7166 2.83308 10.7373 2.82329L10.7378 2.82307C10.7511 2.8168 10.7954 2.79594 10.8517 2.78257L10.8563 2.78149C10.8991 2.77129 11.0017 2.74682 11.1162 2.74776C11.2442 2.7488 11.432 2.78166 11.5936 2.93181C11.7534 3.08036 11.7992 3.26585 11.8139 3.36943C11.8288 3.4752 11.8236 3.58128 11.8053 3.66284L1.23088 6.05493ZM1.23088 6.05493L1.23848 6.05147M1.23088 6.05493L1.23848 6.05147M1.23848 6.05147C5.26568 4.21657 7.94673 3.0089 9.28555 2.42655M1.23848 6.05147L9.28555 2.42655M9.28555 2.42655C11.2053 1.59151 12.3526 1.10679 13.0833 0.829497M9.28555 2.42655L13.0833 0.829497M13.0833 0.829497C13.8232 0.5487 14.0818 0.503096 14.2477 0.500006M13.0833 0.829497L14.2477 0.500006M14.2477 0.500006L14.2384 9.27819e-05M14.2477 0.500006L14.2384 9.27819e-05M14.2384 9.27819e-05L14.2472 0.500016C14.2633 0.499733 14.3119 0.502351 14.3656 0.515775M14.2384 9.27819e-05C13.7189 0.00976514 12.9219 0.299594 9.08611 1.96805L14.3656 0.515775M14.2384 9.27819e-05C14.3527 -0.00191006 14.6082 0.0277027 14.7737 0.16813C14.9134 0.286703 14.9518 0.44688 14.9702 0.5593L14.2384 9.27819e-05ZM14.3656 0.515775C14.3908 0.522085 14.4118 0.529455 14.4277 0.536775M14.3656 0.515775L14.4277 0.536775M14.4277 0.536775C14.4355 0.540322 14.4411 0.543443 14.4449 0.545821M14.4277 0.536775L14.4449 0.545821M14.4449 0.545821C14.4488 0.548191 14.4503 0.549502 14.4502 0.549368M14.4449 0.545821L14.4502 0.549368M14.4502 0.549368C14.4509 0.550022 14.4513 0.550388 14.4519 0.551249M14.4502 0.549368L14.4519 0.551249M14.4519 0.551249C14.4527 0.552388 14.4547 0.555575 14.4575 0.562088M14.4519 0.551249L14.4575 0.562088M14.4575 0.562088C14.4639 0.577041 14.4702 0.59973 14.4768 0.640054M14.4575 0.562088L14.4768 0.640054M14.4768 0.640054C14.4825 0.675184 14.4913 0.749206 14.4963 0.838579M14.4768 0.640054L14.4963 0.838579M14.4963 0.838579C14.5013 0.928465 14.5015 1.01594 14.4954 1.08261M14.4963 0.838579L14.4954 1.08261M14.4954 1.08261C14.2897 3.34221 13.3942 8.86486 12.9363 11.4246M14.4954 1.08261L12.9363 11.4246M12.9363 11.4246C12.7491 12.471 12.4394 12.4956 12.4367 12.4959M12.9363 11.4246L12.4367 12.4959M12.4367 12.4959L12.4367 12.4959M12.4367 12.4959L12.4367 12.4959M12.4367 12.4959C12.1901 12.5196 11.9492 12.441 11.6428 12.2527M12.4367 12.4959L11.6428 12.2527M11.6428 12.2527C11.4885 12.158 11.33 12.0432 11.1515 11.9106M11.6428 12.2527L11.1515 11.9106M11.1515 11.9106C11.1229 11.8894 11.0937 11.8677 11.0641 11.8455M11.1515 11.9106L11.0641 11.8455M11.0641 11.8455C10.9136 11.7334 10.7499 11.6112 10.5792 11.4943M11.0641 11.8455L10.5792 11.4943M10.5792 11.4943C9.97529 11.0803 9.50273 10.7444 9.03196 10.4092M10.5792 11.4943L9.03196 10.4092M9.03196 10.4092L8.96914 10.3644M9.03196 10.4092L8.96914 10.3644M8.96914 10.3644C8.51912 10.0439 8.06505 9.72056 7.49781 9.32965M8.96914 10.3644L7.49781 9.32965M7.49781 9.32965C7.18435 9.11363 7.06465 8.96358 7.02332 8.88079M7.49781 9.32965L7.02332 8.88079M7.02332 8.88079C6.99821 8.83051 6.99761 8.80466 7.0211 8.74866M7.02332 8.88079L7.0211 8.74866M7.0211 8.74866C7.05772 8.66135 7.14359 8.54362 7.30983 8.36672M7.0211 8.74866L7.30983 8.36672M7.30983 8.36672C7.38051 8.29151 7.45697 8.21443 7.54192 8.12877M7.30983 8.36672L7.54192 8.12877M7.54192 8.12877C7.55276 8.11784 7.56374 8.10677 7.57487 8.09554M7.54192 8.12877L7.57487 8.09554M7.57487 8.09554C7.67099 7.99856 7.77548 7.89248 7.8794 7.7796M7.57487 8.09554L7.8794 7.7796M7.8794 7.7796C7.8794 7.7796 7.87941 7.7796 7.87941 7.77959C7.87956 7.77943 7.88085 7.77805 7.88368 7.77511M7.8794 7.7796L7.88368 7.77511M7.88368 7.77511L7.89645 7.76203M7.88368 7.77511L7.89645 7.76203M7.89645 7.76203C7.90735 7.75096 7.92164 7.73664 7.93949 7.71891M7.89645 7.76203L7.93949 7.71891M7.93949 7.71891C7.97515 7.68348 8.02246 7.63698 8.08028 7.58044M7.93949 7.71891L8.08028 7.58044M8.08028 7.58044C8.18446 7.47857 8.32011 7.34668 8.47826 7.19292M8.08028 7.58044L8.47826 7.19292M8.47826 7.19292L8.53099 7.14166M8.47826 7.19292L8.53099 7.14166M8.53099 7.14166C8.89195 6.7907 9.35618 6.33902 9.81648 5.88442M8.53099 7.14166L9.81648 5.88442M9.81648 5.88442C10.2761 5.43053 10.735 4.97043 11.0847 4.60316M9.81648 5.88442L11.0847 4.60316M11.0847 4.60316C11.2588 4.42022 11.4107 4.25525 11.5232 4.12326M11.0847 4.60316L11.5232 4.12326M11.5232 4.12326C11.5788 4.05792 11.6306 3.994 11.6721 3.93617M11.5232 4.12326L11.6721 3.93617M11.6721 3.93617C11.6927 3.90743 11.7154 3.87377 11.7358 3.83776M11.6721 3.93617L11.7358 3.83776M11.7358 3.83776C11.7518 3.80966 11.7867 3.74563 11.8053 3.66285L11.7358 3.83776Z" stroke="white" stroke-opacity="0.2" />
										</svg>
									</div>Telegram
								</a>
								<a href="https://www.linkedin.com/shareArticle?url=<?= $urls ?>&title=Поставщик: <?= $arResult['PROPERTIES']['comp']['VALUE'] ?>" target="_blank">
									<div class="svg"><svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M3.15001 13H0.174997V4.30625H3.15001V13ZM1.6625 3.0875C0.700001 3.0875 0 2.4375 0 1.54375C0 0.65 0.787501 0 1.6625 0C2.625 0 3.325 0.65 3.325 1.54375C3.325 2.4375 2.625 3.0875 1.6625 3.0875ZM14 13H11.025V8.2875C11.025 6.90625 10.4125 6.5 9.53749 6.5C8.66249 6.5 7.78749 7.15 7.78749 8.36875V13H4.8125V4.30625H7.6125V5.525C7.875 4.95625 8.92499 4.0625 10.4125 4.0625C12.075 4.0625 13.825 4.95625 13.825 7.6375V13H14Z" fill="#181818" />
											<path d="M13.325 7.6375V12.5H11.525V8.2875C11.525 7.53534 11.3598 6.93663 10.9706 6.53003C10.5757 6.11755 10.0443 6 9.53749 6C8.40602 6 7.28749 6.85459 7.28749 8.36875V12.5H5.3125V4.80625H7.1125V5.525L8.06648 5.73453C8.14478 5.56487 8.39033 5.2663 8.81413 5.00694C9.22552 4.75516 9.77056 4.5625 10.4125 4.5625C11.1621 4.5625 11.8859 4.76466 12.4149 5.22257C12.9306 5.66894 13.325 6.41336 13.325 7.6375ZM0.674997 12.5V4.80625H2.65001V12.5H0.674997ZM1.6625 2.5875C0.940602 2.5875 0.5 2.12711 0.5 1.54375C0.5 0.976657 1.01026 0.5 1.6625 0.5C2.3844 0.5 2.825 0.960392 2.825 1.54375C2.825 2.12711 2.3844 2.5875 1.6625 2.5875Z" stroke="white" stroke-opacity="0.2" />
										</svg>
									</div>Linked in
								</a>
							</div>
						</div>
						<div class="sidebar-experts gradient_border">
							<div class="sidebar-experts__top">
								<div class="sidebar-experts__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.1596 10.87C12.0596 10.86 11.9396 10.86 11.8296 10.87C9.44957 10.79 7.55957 8.84 7.55957 6.44C7.55957 3.99 9.53957 2 11.9996 2C14.4496 2 16.4396 3.99 16.4396 6.44C16.4296 8.84 14.5396 10.79 12.1596 10.87Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M7.15973 14.56C4.73973 16.18 4.73973 18.82 7.15973 20.43C9.90973 22.27 14.4197 22.27 17.1697 20.43C19.5897 18.81 19.5897 16.17 17.1697 14.56C14.4297 12.73 9.91973 12.73 7.15973 14.56Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</div>
								<div class="sidebar-experts__text">Спросите экспертов компании</div>
							</div>
							<div class="sidebar-experts__bottom">
								<div class="sidebar-experts__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/Group-5295.png" alt=""></div><a class="sidebar-experts__link underline" href="#">Написать нам</a>
							</div>
						</div>
					</div>
				</div>
				<div class="small_section">
					<div class="section__title">Товары по категориям</div>
					<div class="swiper_shadow">
						<div class="swiper swiper_solutions revers">
							<?
							$sections = array();

							$itemsFilter = array(
								'IBLOCK_ID' => 8,
								'ACTIVE' => 'Y',
								'PROPERTY_COMP_ID' => $arElement['ID'],
							);

							$itemsResult = CIBlockElement::GetList(array(), $itemsFilter);

							while ($item = $itemsResult->GetNext()) {
								$sectionPath = '/materialy';
								$navChain = CIBlockSection::GetNavChain(8, $item['IBLOCK_SECTION_ID']);

								$rootSection = $navChain->GetNext();

								while ($navItem = $navChain->GetNext()) {
									$sectionPath .= '/' . $navItem['CODE'];
								}

								$sectionID = $rootSection['ID'];

								if (!isset($sections[$sectionID])) {
									$sections[$sectionID] = array(
										'SECTION_ID' => $sectionID,
										'SECTION_NAME' => $rootSection['NAME'],
										'SECTION_CODE' => $rootSection['CODE'],
										'SECTION_PICTURE' => $rootSection['PICTURE'],
										'ITEMS_COUNT' => 1,
									);
								} else {
									$sections[$sectionID]['ITEMS_COUNT']++;
								}
							}
							?>
							<div class="swiper-wrapper">
								<? foreach ($sections as $section) {
									$rootSectionPicture = '';
									if ($section['SECTION_PICTURE'] > 0) {
										$rootSectionPicture = CFile::GetPath($section['SECTION_PICTURE']);
									}
								?>
									<div class="swiper-slide">
										<div class="solution-full">
											<div class="solution-full__img"><img src="<?= $rootSectionPicture ?>" alt=""></div>
											<div class="solution-full__bottom">
												<div class="icon solution-full__icon">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6 9.7868C6 9.5994 6.05265 9.41575 6.152 9.2568L8.5 5.5H15.5L17.848 9.2568C17.9473 9.41575 18 9.5994 18 9.7868V21C18 21.5523 17.5523 22 17 22H7C6.4477 22 6 21.5523 6 21V9.7868Z" fill="none" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M9.5 16.5V12L12 15L14.5 12V16.5" fill="none" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M8.5 2H15.5V5.5H8.5V2Z" fill="none" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
												</div>
												<div class="solution-full__title"><?= $section['SECTION_NAME'] ?></div>
												<div class="solution-full__info"><?= $section['ITEMS_COUNT'] ?> товаров</div>
											</div>
										</div>
									</div>
								<? } ?>
							</div>
							<div class="swiper_control">
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="small_section">
					<div class="section__title">Товары по области применения</div>
					<div class="swiper_shadow">
						<div class="swiper swiper_solutions revers">
							<?
							$itemsFilter = array(
								'IBLOCK_ID' => 8,
								'ACTIVE' => 'Y',
								'PROPERTY_COMP_ID' => $arElement['ID'],
							);

							$itemsResult = CIBlockElement::GetList(array(), $itemsFilter);
							$uniqueParentSections = array();

							while ($item = $itemsResult->GetNext()) {
								$sectionInfo = CIBlockSection::GetByID($item['IBLOCK_SECTION_ID']);
								if ($subsection = $sectionInfo->GetNext()) {
									$parentSectionID = $subsection['IBLOCK_SECTION_ID'];

									if (!isset($uniqueParentSections[$parentSectionID])) {
										$parentSectionInfo = CIBlockSection::GetByID($parentSectionID)->GetNext();
										if ($parentSectionInfo) {
											$uniqueParentSections[$parentSectionID] = array(
												'NAME' => $parentSectionInfo['NAME'],
												'PREVIEW_PICTURE' => $parentSectionInfo['PICTURE'],
												'ITEMS_COUNT' => 1,
											);
										}
									} else {
										$uniqueParentSections[$parentSectionID]['ITEMS_COUNT']++;
									}
								}
							}
							?>
							<div class="swiper-wrapper">
								<? foreach ($uniqueParentSections as $parentSection) { ?>
									<div class="swiper-slide">
										<div class="solution-full">
											<div class="solution-full__img">
												<? if ($parentSection['PREVIEW_PICTURE'] > 0) { ?>
													<img src="<?= CFile::GetPath($parentSection['PREVIEW_PICTURE']) ?>" alt="">
												<? } ?>
											</div>
											<div class="solution-full__bottom">
												<div class="icon solution-full__icon">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6 9.7868C6 9.5994 6.05265 9.41575 6.152 9.2568L8.5 5.5H15.5L17.848 9.2568C17.9473 9.41575 18 9.5994 18 9.7868V21C18 21.5523 17.5523 22 17 22H7C6.4477 22 6 21.5523 6 21V9.7868Z" fill="none" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M9.5 16.5V12L12 15L14.5 12V16.5" fill="none" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M8.5 2H15.5V5.5H8.5V2Z" fill="none" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
												</div>
												<div class="solution-full__parent-name"><?= $parentSection['NAME'] ?></div>
												<div class="solution-full__info"><?= $parentSection['ITEMS_COUNT'] ?> товаров</div>
											</div>
										</div>
									</div>
								<? } ?>
							</div>
							<div class="swiper_control">
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="small_section">
					<div class="section__title">Тренды и решения</div>
					<div class="swiper_shadow">
						<div class="swiper swiper_solutions">
							<div class="swiper_control">
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
								<div class="swiper-pagination"></div>
							</div>
							<div class="swiper-wrapper">
								<?
								$itemsFilter = array(
									'IBLOCK_ID' => 8,
									'ACTIVE' => 'Y',
									'PROPERTY_COMP_ID' => $arElement['ID'],
								);

								$itemsResult = CIBlockElement::GetList(array("SORT" => "ASC"), $itemsFilter, false, false, array('ID', 'IBLOCK_SECTION_ID', 'NAME', 'PROPERTY_TREND'));

								$sections = array();

								while ($item = $itemsResult->GetNextElement()) {
									$itemFields = $item->GetFields();
									$itemId = $itemFields['ID'];
									$sectionId = $itemFields['IBLOCK_SECTION_ID'];
									$trendId = $itemFields['PROPERTY_TREND_VALUE'];

									$linkedElementFilter = array(
										'IBLOCK_ID' => 10,
										'ID' => $trendId,
									);

									$linkedElementResult = CIBlockElement::GetList(array("SORT" => "ASC"), $linkedElementFilter, false, false, array('ID', 'IBLOCK_SECTION_ID', 'NAME'));

									while ($linkedItem = $linkedElementResult->GetNext()) {
										$linkedItemName = $linkedItem['NAME'];
										$linkedItemSectionId = $linkedItem['IBLOCK_SECTION_ID'];

										if (!array_key_exists($linkedItemSectionId, $sections)) {
											$sections[$linkedItemSectionId] = array(
												'section_name' => '',
												'items' => array(),
											);
										}

										$sections[$linkedItemSectionId]['section_name'] = CIBlockSection::GetByID($linkedItemSectionId)->GetNext()['NAME'];
										$sections[$linkedItemSectionId]['items'][] = $linkedItemName;
									}
								}

								foreach ($sections as $sectionId => $section) {
									$sectionName = $section['section_name'];
									$sectionItems = array_unique($section['items']);
									$linkedSectionId = $sectionId;

									$linkedSection = CIBlockSection::GetByID($linkedSectionId)->GetNext();
									$linkedSectionImageId = $linkedSection['DETAIL_PICTURE'];

									$imageSrc = '';
									if ($linkedSectionImageId) {
										$file = CFile::GetFileArray($linkedSectionImageId);
										if ($file) {
											$imageSrc = $file['SRC'];
										}
									}
								?>
									<div class="swiper-slide">
										<div class="solution gradient_border">
											<div class="solution__top">
												<div class="icon solution__icon">
													<? if (!empty($imageSrc)) { ?>
														<img src="<?= $imageSrc; ?>" alt="<?= $sectionName; ?>">
													<? } ?>
												</div>
												<div class="solution__title"><?= $sectionName; ?></div>
												<div class="solution__info">Категорий: <?= count($sectionItems); ?></div>
											</div>
											<ul class="solution__list">
												<? foreach ($sectionItems as $item) { ?>
													<li><a href="#"><?= $item; ?></a></li>
												<? } ?>
											</ul>
										</div>
									</div>
								<?
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="small_section">
					<div class="section__title">Популярные товары</div>
					<div class="swiper_shadow">
						<div class="swiper_grid_container">
							<div class="swiper swiper_products-category swiper_products-category-no-grid">
								<div class="swiper-wrapper swiper-row-column">
									<?
									$items = CIBlockElement::GetList(
										array(),
										array('IBLOCK_ID' => 8, 'ACTIVE' => 'Y', 'PROPERTY_COMP_ID' => $arElement['ID']),
										false,
										array(),
										array('ID', 'CODE', 'NAME', 'PREVIEW_PICTURE', 'IBLOCK_SECTION_ID', 'DETAIL_PAGE_URL', 'PREVIEW_TEXT')
									);
									$Ar = array();
									while ($item = $items->GetNext()) {
										$Ar[] = $item;
									}
									$chunkedItems = array_chunk($Ar, 3);
									?>

									<? foreach ($chunkedItems as $itemsGroup) { ?>
										<div class="swiper-slide">
											<? foreach ($itemsGroup as $mat_item) {
												$sectionPath = '';
												$navChain = CIBlockSection::GetNavChain(8, $mat_item['IBLOCK_SECTION_ID']);
												while ($navItem = $navChain->GetNext()) {
													$sectionPath .= '/' . $navItem['CODE'];
												}
											?>
												<div class="slide">
													<div class="product-category gradient_border">
														<div class="product-category__img"><img src="<?= CFile::GetPath($mat_item['PREVIEW_PICTURE']) ?>" alt="Продукт"></div>
														<div class="product-category__vendor"><img src="<?= CFile::GetPath($arElement['DETAIL_PICTURE']) ?>" alt="Поставщик"></div>
														<div class="product-category__name"><?= $arResult['PROPERTIES']['comp']['VALUE'] ?></div>
														<div class="product-category__title"><?= $mat_item['NAME'] ?></div>
														<div class="product-category__text"><?= $mat_item['PREVIEW_TEXT'] ?></div>
														<a href="/materialy<?= $sectionPath ?>/<?= $mat_item['CODE'] ?>/" class="product-category__link underline">Подробнее</a>
													</div>
												</div>
											<? } ?>
										</div>
									<? } ?>
								</div>

								<div class="swiper_control">
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="small_section">
					<div class="section__title">Бренды компании</div>
					<div class="swiper_shadow">
						<div class="swiper_grid_container">
							<div class="swiper swiper_products-category swiper_products-category-no-grid">
								<div class="swiper-wrapper swiper-row-column">
									<?
									$itemsBrend = CIBlockElement::GetList(
										array(),
										array('IBLOCK_ID' => 14, 'ACTIVE' => 'Y', 'PROPERTY_COMP_ID' => $arElement['ID'], 'PROPERTY_CONF' => "да"),
										false,
										array(),
										array('ID', 'CODE', 'NAME', 'PREVIEW_PICTURE', 'IBLOCK_SECTION_ID', 'DETAIL_PAGE_URL', 'PREVIEW_TEXT')
									);
									$Ar = array();
									while ($itemBrend = $itemsBrend->GetNext()) {
										$Ar[] = $itemBrend;
									}
									$chunkedItems = array_chunk($Ar, 3);
									?>

									<? foreach ($chunkedItems as $itemsGroup) { ?>
										<div class="swiper-slide">
											<? foreach ($itemsGroup as $mat_item1) { ?>
												<div class="slide">
													<div class="product-category gradient_border">
														<div class="product-category__img"><img src="<?= CFile::GetPath($mat_item1['PREVIEW_PICTURE']) ?>" alt="Продукт"></div>
														<div class="product-category__vendor"><img src="<?= CFile::GetPath($arElement['DETAIL_PICTURE']) ?>" alt="Поставщик"></div>
														<div class="product-category__name"><?= $arResult['PROPERTIES']['comp']['VALUE'] ?></div>
														<div class="product-category__title"><?= explode('--', $mat_item1['NAME'])[0] ?></div>
														<div class="product-category__text"><?= $mat_item1['PREVIEW_TEXT'] ?></div>
														<a href="<?= $mat_item1['CODE'] ?>" class="product-category__link underline">Подробнее</a>
													</div>
												</div>
											<? } ?>
										</div>
									<? } ?>
								</div>
								<div class="swiper_control">
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="small_section">
					<div class="section__title">Сертификаты</div>

					<form class="form small-section">
						<?
						foreach ($arResult['PROPERTIES']['sertif']['VALUE'] as $sertif) { ?>
							<?
							$arFile = CFile::GetFileArray($sertif);
							?>

							<?
							if (!empty($arFile['ID'])) { ?>
								<div class="document">
									<div class="document__zone gradient_border">
										<div class="document__icon icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M5 22H19C19.5523 22 20 21.5523 20 21V7L15.5 2H5C4.44771 2 4 2.44771 4 3V21C4 21.5523 4.44771 22 5 22Z" fill="#BBCBD0" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M14 3V8H19" fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
											</svg>

										</div>
										<div class="document__text"><?= $arFile['ORIGINAL_NAME'] ?></div>
										<a href="<?= $arFile['SRC'] ?>" target="_blank" class="document__watch icon">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.5799 11.9999C15.5799 13.9799 13.9799 15.5799 11.9999 15.5799C10.0199 15.5799 8.41992 13.9799 8.41992 11.9999C8.41992 10.0199 10.0199 8.41992 11.9999 8.41992C13.9799 8.41992 15.5799 10.0199 15.5799 11.9999Z" fill="none" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M11.9998 20.2707C15.5298 20.2707 18.8198 18.1907 21.1098 14.5907C22.0098 13.1807 22.0098 10.8107 21.1098 9.4007C18.8198 5.8007 15.5298 3.7207 11.9998 3.7207C8.46984 3.7207 5.17984 5.8007 2.88984 9.4007C1.98984 10.8107 1.98984 13.1807 2.88984 14.5907C5.17984 18.1907 8.46984 20.2707 11.9998 20.2707Z" fill="none" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
											</svg>
										</a>
										<a href="<?= $arFile['SRC'] ?>" download="<?= $arFile['ORIGINAL_NAME'] ?>" class="document__download icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8.0625 10.3125L12 14.25L15.9375 10.3125" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M12 3.75V14.25" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M20.25 14.25V19.5C20.25 19.6989 20.171 19.8897 20.0303 20.0303C19.8897 20.171 19.6989 20.25 19.5 20.25H4.5C4.30109 20.25 4.11032 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V14.25" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
											</svg>

										</a>
									</div>
								</div>
						<? }
						}
						?>
				</div>
				<div class="small_section">
					<div class="section__title">Эксперты компании</div>
					<div class='swiper_shadow'>
						<div class='swiper_grid_container'>
							<div class="swiper swiper_products-category swiper_products-category-grid">
								<div class="swiper-wrapper swiper-row-column">
									<?
									$itemsExperts = CIBlockElement::GetList(
										array(),
										array('IBLOCK_ID' => 13, 'ACTIVE' => 'Y', 'PROPERTY_COMP_ID' => $arElement['ID']),
										false,
										array(),
										array('ID', "IBLOCK_ID", 'PROPERTY_FIO', 'PROPERTY_NAPRAV', 'PROPERTY_PHONE', 'PROPERTY_EMAIL')
									);
									$Ar = array();
									while ($itemExperts = $itemsExperts->GetNext()) {
										$Ar[] = $itemExperts;
									}
									?>
									<? foreach ($Ar as $mat_item2) { ?>
										<div class='swiper-slide'>

											<div class='slide'>
												<div class="experts-list__item gradient_border">
													<div class="experts-list__title"><?= $mat_item2['PROPERTY_NAPRAV_VALUE'] ?></div>
													<div class="experts-list__name"><?= $mat_item2['PROPERTY_FIO_VALUE'] ?> </div>
													<div class="experts-list__text">Преимущества или краткое описание: повседневная практика показывает, что дальнейшее развитие различных форм деятельности позволяет...</div>
													<div class="experts-list__info">
														<div class="experts-list__info-item">
															<div class="experts-list__info-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" fill="#181818" />
																</svg>
															</div>
															<div class="experts-list__info-text"><?= $mat_item2['PROPERTY_PHONE_VALUE'] ?></div>
														</div>
														<div class="experts-list__info-item">
															<div class="experts-list__info-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z" fill="#181818" stroke="#181818" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
																	<path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#F5F8FA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
																</svg>
															</div>
															<div class="experts-list__info-text"><?= $mat_item2['PROPERTY_EMAIL_VALUE'] ?></div>
														</div>
													</div>
													<button class="btn">Написать</button>
												</div>
											</div>

										</div>
									<? } ?>
								</div>
								<div class="swiper_control">
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				<? } ?>
				<!-- <div class="experts-list">
						<?
						$BrendelementFilters = array(
							'IBLOCK_ID' => 13,
							'ACTIVE' => 'Y',
							'PROPERTY_COMP_ID' => $arElement['ID']
						);
						$dbarElements = CIBlockElement::GetList(array("SORT" => "ASC"), $BrendelementFilters, false, false, array('ID', "IBLOCK_ID", 'PROPERTY_FIO', 'PROPERTY_NAPRAV', 'PROPERTY_PHONE', 'PROPERTY_EMAIL'));

						$counter = 0;
						while ($BrendarElement = $dbarElements->GetNext()) {
							$counter++;
							if ($counter > 3) {
								break;
							}
						?>
							<div class="experts-list__item gradient_border">
								<div class="experts-list__title"><?= $BrendarElement['PROPERTY_NAPRAV_VALUE'] ?></div>
								<div class="experts-list__name"><?= $BrendarElement['PROPERTY_FIO_VALUE'] ?> </div>
								<div class="experts-list__text">Преимущества или краткое описание: повседневная практика показывает, что дальнейшее развитие различных форм деятельности позволяет...</div>
								<div class="experts-list__info">
									<div class="experts-list__info-item">
										<div class="experts-list__info-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" fill="#181818" />
											</svg>
										</div>
										<div class="experts-list__info-text">+ 7 (351) 536-27-03</div>
									</div>
									<div class="experts-list__info-item">
										<div class="experts-list__info-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z" fill="#181818" stroke="#181818" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
												<path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#F5F8FA" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
											</svg>

										</div>
										<div class="experts-list__info-text">example@mail.com</div>
									</div>
								</div>
								<button class="btn">Написать</button>
							</div>
						<? } ?>
					</div> -->
				</div>
			</div>
		</div>
	</section>
</main>
<div class="sidebar desck">
	<div class="sidebar-container">
		<button class="sidebar__exit" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</button>
		<div class="sidebar__top">
			<div class="sidebar__img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/cabinet/profile_img.png" alt="profile_img"></div>
			<div class="sidebar__suptitle">Компания</div>
			<div class="sidebar__title">ООО «Милорада»</div>
		</div>
		<div class="sidebar__items">
			<div class="item"><a class="item__btn" href="#">
					<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.25977 11.0195V15.9895C4.25977 17.8095 4.25977 17.8095 5.97977 18.9695L10.7098 21.6995C11.4198 22.1095 12.5798 22.1095 13.2898 21.6995L18.0198 18.9695C19.7398 17.8095 19.7398 17.8095 19.7398 15.9895V11.0195C19.7398 9.19945 19.7398 9.19945 18.0198 8.03945L13.2898 5.30945C12.5798 4.89945 11.4198 4.89945 10.7098 5.30945L5.97977 8.03945C4.25977 9.19945 4.25977 9.19945 4.25977 11.0195Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M17.5 7.63V5C17.5 3 16.5 2 14.5 2H9.5C7.5 2 6.5 3 6.5 5V7.56" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M12.6298 10.9909L13.1998 11.8809C13.2898 12.0209 13.4898 12.1609 13.6398 12.2009L14.6598 12.4609C15.2898 12.6209 15.4598 13.1609 15.0498 13.6609L14.3798 14.4709C14.2798 14.6009 14.1998 14.8309 14.2098 14.9909L14.2698 16.0409C14.3098 16.6909 13.8498 17.0209 13.2498 16.7809L12.2698 16.3909C12.1198 16.3309 11.8698 16.3309 11.7198 16.3909L10.7398 16.7809C10.1398 17.0209 9.67978 16.6809 9.71978 16.0409L9.77978 14.9909C9.78978 14.8309 9.70978 14.5909 9.60978 14.4709L8.93978 13.6609C8.52978 13.1609 8.69978 12.6209 9.32978 12.4609L10.3498 12.2009C10.5098 12.1609 10.7098 12.0109 10.7898 11.8809L11.3598 10.9909C11.7198 10.4509 12.2798 10.4509 12.6298 10.9909Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</div>
					<div class="item__name">Бренды</div>
				</a></div>
			<div class="item"><a class="item__btn" href="#">
					<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill="none" d="M3.16992 7.43994L11.9999 12.5499L20.7699 7.46994" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path fill="none" d="M12 21.61V12.54" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path fill="none" d="M9.92965 2.47979L4.58965 5.43979C3.37965 6.10979 2.38965 7.78979 2.38965 9.16979V14.8198C2.38965 16.1998 3.37965 17.8798 4.58965 18.5498L9.92965 21.5198C11.0696 22.1498 12.9396 22.1498 14.0796 21.5198L19.4196 18.5498C20.6296 17.8798 21.6196 16.1998 21.6196 14.8198V9.16979C21.6196 7.78979 20.6296 6.10979 19.4196 5.43979L14.0796 2.46979C12.9296 1.83979 11.0696 1.83979 9.92965 2.47979Z" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</div>
					<div class="item__name">Продукты</div>
					<div class="item__number">13</div>
				</a></div>
			<div class="item"><a class="item__btn" href="#">
					<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M22 10V15C22 20 20 22 15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H14" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M22 10H18C15 10 14 9 14 6V2L22 10Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M7 13H13" stroke="#7C9DA8" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M7 17H11" stroke="#7C9DA8" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</div>
					<div class="item__name">Документы</div>
					<div class="item__number">13</div>
				</a></div>
			<div class="item"><a class="item__btn" href="#">
					<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.15957 10.87C9.05957 10.86 8.93957 10.86 8.82957 10.87C6.44957 10.79 4.55957 8.84 4.55957 6.44C4.55957 3.99 6.53957 2 8.99957 2C11.4496 2 13.4396 3.99 13.4396 6.44C13.4296 8.84 11.5396 10.79 9.15957 10.87Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M16.4103 4C18.3503 4 19.9103 5.57 19.9103 7.5C19.9103 9.39 18.4103 10.93 16.5403 11C16.4603 10.99 16.3703 10.99 16.2803 11" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M4.15973 14.56C1.73973 16.18 1.73973 18.82 4.15973 20.43C6.90973 22.27 11.4197 22.27 14.1697 20.43C16.5897 18.81 16.5897 16.17 14.1697 14.56C11.4297 12.73 6.91973 12.73 4.15973 14.56Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</div>
					<div class="item__name">Эксперты</div>
				</a></div>
			<div class="item"><a class="item__btn" href="#">
					<div class="item__icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.29986 18.0402V16.8802C5.99986 15.4902 4.10986 12.7802 4.10986 9.90018C4.10986 4.95018 8.65986 1.07018 13.7999 2.19018C16.0599 2.69018 18.0399 4.19018 19.0699 6.26018C21.1599 10.4602 18.9599 14.9202 15.7299 16.8702V18.0302C15.7299 18.3202 15.8399 18.9902 14.7699 18.9902H9.25986C8.15986 19.0002 8.29986 18.5702 8.29986 18.0402Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M8.5 21.9992C10.79 21.3492 13.21 21.3492 15.5 21.9992" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</div>
					<div class="item__name">Разработки</div>
				</a></div>
		</div>
	</div>
</div>
<div class="card_product-footer">
	<div class="container"><a class="card_product-footer-item card_product-open-review" href="#">
			<div class="card_product-footer-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.66602 18.3335H18.3327" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M2.45898 18.3334L2.50065 8.30836C2.50065 7.80003 2.74232 7.31674 3.14232 7.00008L8.97565 2.4584C9.57565 1.99173 10.4173 1.99173 11.0257 2.4584L16.859 6.99173C17.2673 7.3084 17.5007 7.7917 17.5007 8.30836V18.3334" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
					<path d="M12.9173 9.1665H7.08398C6.39232 9.1665 5.83398 9.72484 5.83398 10.4165V18.3332H14.1673V10.4165C14.1673 9.72484 13.609 9.1665 12.9173 9.1665Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M8.33398 13.5415V14.7915" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M8.75 6.25H11.25" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>

			</div>
			<div class="card_product-footer-name">Обзор</div>
		</a><a class="card_product-footer-item" href="#">
			<div class="card_product-footer-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M5 1.6665H15" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" />
					<path d="M4.49023 12.4998L7.50782 6.26592V1.6665H12.5117V6.26592L15.5191 12.4998" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M3.24833 18.1972C2.57046 17.8691 2.28693 17.0536 2.61507 16.3757L4.49106 12.5001C4.49106 12.5001 7.50072 14.5835 10.0007 12.5001C12.5007 10.4168 15.5199 12.5001 15.5199 12.5001L17.3903 16.3773C17.4795 16.5621 17.5258 16.7646 17.5258 16.9699C17.5258 17.7229 16.9153 18.3335 16.1622 18.3335H3.84247C3.63668 18.3335 3.43356 18.2869 3.24833 18.1972Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linejoin="round" />
				</svg>

			</div>
			<div class="card_product-footer-name">Образцы</div>
		</a><a class="card_product-footer-item" href="#">
			<div class="card_product-footer-img"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vendors/vendor2.jpg" alt=""></div>
		</a><a class="card_product-footer-item" href="#">
			<div class="card_product-footer-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.3327 9.1665V14.1665C18.3327 17.4998 17.4993 18.3332 14.166 18.3332H5.83268C2.49935 18.3332 1.66602 17.4998 1.66602 14.1665V5.83317C1.66602 2.49984 2.49935 1.6665 5.83268 1.6665H7.08268C8.33268 1.6665 8.60768 2.03317 9.08268 2.6665L10.3327 4.33317C10.6493 4.74984 10.8327 4.99984 11.666 4.99984H14.166C17.4993 4.99984 18.3327 5.83317 18.3327 9.1665Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-miterlimit="10" />
					<path d="M6.66602 1.6665H14.166C15.8327 1.6665 16.666 2.49984 16.666 4.1665V5.3165" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>

			</div>
			<div class="card_product-footer-name">Запросы</div>
		</a><a class="card_product-footer-item card_product-open-search" href="#">
			<div class="card_product-footer-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.58268 17.4998C13.9549 17.4998 17.4993 13.9554 17.4993 9.58317C17.4993 5.21092 13.9549 1.6665 9.58268 1.6665C5.21043 1.6665 1.66602 5.21092 1.66602 9.58317C1.66602 13.9554 5.21043 17.4998 9.58268 17.4998Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M18.3327 18.3332L16.666 16.6665" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
				</svg>

			</div>
			<div class="card_product-footer-name">Поиск</div>
		</a></div>

</div>
