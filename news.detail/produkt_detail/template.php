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
	<section class="section cabinet card_product">
		<div class="modal-box modal-request modal-price">
			<div class="modal-box__container">
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
					<div class="modal-request__like"><svg width="64" height="58" viewBox="0 0 64 58" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.6" filter="url(#filter0_f_2425_52147)">
								<g filter="url(#filter1_iiii_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M25.1365 12.2578H17.1485C15.0251 12.2578 13.3038 13.9791 13.3038 16.1025V19.9471C13.3038 19.9471 13.3038 19.9472 13.3038 19.9472C13.3037 19.9472 13.3037 19.9472 13.3037 19.9472V42.8576C13.3037 45.0668 15.0946 46.8576 17.3037 46.8576H43.9029C46.112 46.8576 47.9029 45.0668 47.9029 42.8576V23.9472C47.9029 21.738 46.112 19.9472 43.9029 19.9472H32.8259C32.66 19.9472 32.5256 19.8127 32.5256 19.6469C32.5256 15.566 29.2174 12.2578 25.1365 12.2578Z" fill="#BBCBD0" fill-opacity="0.5" />
								</g>
								<g filter="url(#filter2_f_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M29.4581 13.4141H23.4561C21.2469 13.4141 19.4561 15.2049 19.4561 17.4141V21.1034V24.9471V44.0139C19.4561 46.2231 21.2469 48.0139 23.4561 48.0139H50.0552C52.2644 48.0139 54.0552 46.2231 54.0552 44.0139V25.1034C54.0552 22.8943 52.2644 21.1034 50.0552 21.1034H37.1475C36.9816 21.1034 36.8472 20.969 36.8472 20.8031C36.8472 16.7223 33.539 13.4141 29.4581 13.4141Z" fill="url(#paint0_linear_2425_52147)" fill-opacity="0.9" />
								</g>
							</g>
							<g filter="url(#filter3_f_2425_52147)">
								<path d="M9.33301 44.1189V25.9657C9.33301 24.3815 10.6173 23.0972 12.2016 23.0972H15.7113C17.2955 23.0972 18.5798 24.3815 18.5798 25.9657V44.1189C18.5798 45.7031 17.2955 46.9874 15.7113 46.9874H12.2016C10.6173 46.9874 9.33301 45.7031 9.33301 44.1189Z" fill="#BBCBD0" fill-opacity="0.5" />
								<path d="M21.9166 24.2763V44.1189C21.9166 45.7031 23.2009 46.9874 24.7852 46.9874H47.0996C48.6839 46.9874 49.9681 45.7031 49.9681 44.1189V25.9657C49.9681 24.3815 48.6839 23.0972 47.0996 23.0972H39.5449C37.5037 23.0972 36.1156 21.0255 36.8919 19.1377L39.3226 13.2268C39.8634 11.9117 39.3413 10.3997 38.1044 9.69834C36.9954 9.06952 35.6025 9.26227 34.7059 10.1686L22.7458 22.2589C22.2146 22.7959 21.9166 23.5209 21.9166 24.2763Z" fill="#BBCBD0" fill-opacity="0.5" />
							</g>
							<g filter="url(#filter4_iiii_2425_52147)">
								<path d="M4.94434 42.4724V24.3192C4.94434 22.735 6.22863 21.4507 7.81289 21.4507H11.3226C12.9069 21.4507 14.1912 22.735 14.1912 24.3192V42.4724C14.1912 44.0566 12.9069 45.3409 11.3226 45.3409H7.81289C6.22863 45.3409 4.94434 44.0566 4.94434 42.4724Z" fill="#EFF3F6" />
								<path d="M17.5279 22.6298V42.4724C17.5279 44.0566 18.8122 45.3409 20.3965 45.3409H42.7109C44.2952 45.3409 45.5795 44.0566 45.5795 42.4724V24.3192C45.5795 22.735 44.2952 21.4507 42.7109 21.4507H35.1563C33.115 21.4507 31.7269 19.379 32.5033 17.4912L34.9339 11.5803C35.4747 10.2652 34.9527 8.7532 33.7157 8.05185C32.6067 7.42304 31.2138 7.61578 30.3172 8.52214L18.3572 20.6124C17.8259 21.1495 17.5279 21.8744 17.5279 22.6298Z" fill="#EFF3F6" />
							</g>
							<g filter="url(#filter5_f_2425_52147)">
								<path d="M6.94434 41.6268V24.4507C6.94434 22.9518 8.1595 21.7366 9.65848 21.7366H12.9793C14.4783 21.7366 15.6934 22.9517 15.6934 24.4507V41.6268C15.6934 43.1258 14.4783 44.3409 12.9793 44.3409H9.65848C8.1595 44.3409 6.94434 43.1258 6.94434 41.6268Z" fill="url(#paint1_linear_2425_52147)" fill-opacity="0.9" />
								<path d="M18.8506 22.8522V41.6268C18.8506 43.1258 20.0658 44.3409 21.5648 44.3409H42.6781C44.1771 44.3409 45.3923 43.1258 45.3923 41.6268V24.4507C45.3923 22.9517 44.1771 21.7366 42.6781 21.7366H35.5301C33.5987 21.7366 32.2854 19.7764 33.0199 17.9902L35.3197 12.3975C35.8314 11.1532 35.3375 9.72255 34.1671 9.05895C33.1178 8.46398 31.7998 8.64635 30.9515 9.50392L19.6352 20.9434C19.1326 21.4516 18.8506 22.1375 18.8506 22.8522Z" fill="url(#paint2_linear_2425_52147)" fill-opacity="0.9" />
							</g>
							<defs>
								<filter id="filter0_f_2425_52147" x="3.95046" y="2.90456" width="59.4584" height="54.4624" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.67662" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter1_iiii_2425_52147" x="10.9654" y="11.0887" width="38.1071" height="38.1071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.33831" dy="-1.16916" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.280597" dy="-0.140299" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.35 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.16916" dy="2.33831" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.187065" dy="0.187065" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter2_f_2425_52147" x="17.1177" y="11.0758" width="39.2762" height="39.2762" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.16916" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter3_f_2425_52147" x="0.175184" y="0.174208" width="58.9504" height="55.9719" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.57891" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter4_iiii_2425_52147" x="2.65488" y="6.54082" width="44.0689" height="39.8541" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.28946" dy="-1.14473" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521569 0 0 0 0 0.584314 0 0 0 0 0.603922 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.274735" dy="-0.137367" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521094 0 0 0 0 0.584387 0 0 0 0 0.604167 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.14473" dy="1.05315" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.183156" dy="0.183156" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter5_f_2425_52147" x="4.89632" y="6.66292" width="42.5443" height="39.7269" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.02401" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<linearGradient id="paint0_linear_2425_52147" x1="18.678" y1="15.9541" x2="42.0649" y2="36.32" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>

					</div>
					<div class="section__text">Ваш запрос успешно отправлен в Hitema!</div>
					<div class="modal-request__btns">
						<button class="btn empty">Мои запросы</button>
						<button class="btn btn__close">Вернуться к продукту</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-box modal-request modal-document">
			<div class="modal-box__container">
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
					<div class="modal-request__like"><svg width="64" height="58" viewBox="0 0 64 58" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.6" filter="url(#filter0_f_2425_52147)">
								<g filter="url(#filter1_iiii_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M25.1365 12.2578H17.1485C15.0251 12.2578 13.3038 13.9791 13.3038 16.1025V19.9471C13.3038 19.9471 13.3038 19.9472 13.3038 19.9472C13.3037 19.9472 13.3037 19.9472 13.3037 19.9472V42.8576C13.3037 45.0668 15.0946 46.8576 17.3037 46.8576H43.9029C46.112 46.8576 47.9029 45.0668 47.9029 42.8576V23.9472C47.9029 21.738 46.112 19.9472 43.9029 19.9472H32.8259C32.66 19.9472 32.5256 19.8127 32.5256 19.6469C32.5256 15.566 29.2174 12.2578 25.1365 12.2578Z" fill="#BBCBD0" fill-opacity="0.5" />
								</g>
								<g filter="url(#filter2_f_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M29.4581 13.4141H23.4561C21.2469 13.4141 19.4561 15.2049 19.4561 17.4141V21.1034V24.9471V44.0139C19.4561 46.2231 21.2469 48.0139 23.4561 48.0139H50.0552C52.2644 48.0139 54.0552 46.2231 54.0552 44.0139V25.1034C54.0552 22.8943 52.2644 21.1034 50.0552 21.1034H37.1475C36.9816 21.1034 36.8472 20.969 36.8472 20.8031C36.8472 16.7223 33.539 13.4141 29.4581 13.4141Z" fill="url(#paint0_linear_2425_52147)" fill-opacity="0.9" />
								</g>
							</g>
							<g filter="url(#filter3_f_2425_52147)">
								<path d="M9.33301 44.1189V25.9657C9.33301 24.3815 10.6173 23.0972 12.2016 23.0972H15.7113C17.2955 23.0972 18.5798 24.3815 18.5798 25.9657V44.1189C18.5798 45.7031 17.2955 46.9874 15.7113 46.9874H12.2016C10.6173 46.9874 9.33301 45.7031 9.33301 44.1189Z" fill="#BBCBD0" fill-opacity="0.5" />
								<path d="M21.9166 24.2763V44.1189C21.9166 45.7031 23.2009 46.9874 24.7852 46.9874H47.0996C48.6839 46.9874 49.9681 45.7031 49.9681 44.1189V25.9657C49.9681 24.3815 48.6839 23.0972 47.0996 23.0972H39.5449C37.5037 23.0972 36.1156 21.0255 36.8919 19.1377L39.3226 13.2268C39.8634 11.9117 39.3413 10.3997 38.1044 9.69834C36.9954 9.06952 35.6025 9.26227 34.7059 10.1686L22.7458 22.2589C22.2146 22.7959 21.9166 23.5209 21.9166 24.2763Z" fill="#BBCBD0" fill-opacity="0.5" />
							</g>
							<g filter="url(#filter4_iiii_2425_52147)">
								<path d="M4.94434 42.4724V24.3192C4.94434 22.735 6.22863 21.4507 7.81289 21.4507H11.3226C12.9069 21.4507 14.1912 22.735 14.1912 24.3192V42.4724C14.1912 44.0566 12.9069 45.3409 11.3226 45.3409H7.81289C6.22863 45.3409 4.94434 44.0566 4.94434 42.4724Z" fill="#EFF3F6" />
								<path d="M17.5279 22.6298V42.4724C17.5279 44.0566 18.8122 45.3409 20.3965 45.3409H42.7109C44.2952 45.3409 45.5795 44.0566 45.5795 42.4724V24.3192C45.5795 22.735 44.2952 21.4507 42.7109 21.4507H35.1563C33.115 21.4507 31.7269 19.379 32.5033 17.4912L34.9339 11.5803C35.4747 10.2652 34.9527 8.7532 33.7157 8.05185C32.6067 7.42304 31.2138 7.61578 30.3172 8.52214L18.3572 20.6124C17.8259 21.1495 17.5279 21.8744 17.5279 22.6298Z" fill="#EFF3F6" />
							</g>
							<g filter="url(#filter5_f_2425_52147)">
								<path d="M6.94434 41.6268V24.4507C6.94434 22.9518 8.1595 21.7366 9.65848 21.7366H12.9793C14.4783 21.7366 15.6934 22.9517 15.6934 24.4507V41.6268C15.6934 43.1258 14.4783 44.3409 12.9793 44.3409H9.65848C8.1595 44.3409 6.94434 43.1258 6.94434 41.6268Z" fill="url(#paint1_linear_2425_52147)" fill-opacity="0.9" />
								<path d="M18.8506 22.8522V41.6268C18.8506 43.1258 20.0658 44.3409 21.5648 44.3409H42.6781C44.1771 44.3409 45.3923 43.1258 45.3923 41.6268V24.4507C45.3923 22.9517 44.1771 21.7366 42.6781 21.7366H35.5301C33.5987 21.7366 32.2854 19.7764 33.0199 17.9902L35.3197 12.3975C35.8314 11.1532 35.3375 9.72255 34.1671 9.05895C33.1178 8.46398 31.7998 8.64635 30.9515 9.50392L19.6352 20.9434C19.1326 21.4516 18.8506 22.1375 18.8506 22.8522Z" fill="url(#paint2_linear_2425_52147)" fill-opacity="0.9" />
							</g>
							<defs>
								<filter id="filter0_f_2425_52147" x="3.95046" y="2.90456" width="59.4584" height="54.4624" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.67662" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter1_iiii_2425_52147" x="10.9654" y="11.0887" width="38.1071" height="38.1071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.33831" dy="-1.16916" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.280597" dy="-0.140299" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.35 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.16916" dy="2.33831" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.187065" dy="0.187065" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter2_f_2425_52147" x="17.1177" y="11.0758" width="39.2762" height="39.2762" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.16916" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter3_f_2425_52147" x="0.175184" y="0.174208" width="58.9504" height="55.9719" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.57891" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter4_iiii_2425_52147" x="2.65488" y="6.54082" width="44.0689" height="39.8541" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.28946" dy="-1.14473" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521569 0 0 0 0 0.584314 0 0 0 0 0.603922 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.274735" dy="-0.137367" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521094 0 0 0 0 0.584387 0 0 0 0 0.604167 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.14473" dy="1.05315" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.183156" dy="0.183156" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter5_f_2425_52147" x="4.89632" y="6.66292" width="42.5443" height="39.7269" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.02401" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<linearGradient id="paint0_linear_2425_52147" x1="18.678" y1="15.9541" x2="42.0649" y2="36.32" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>

					</div>
					<div class="section__text">Ваш запрос успешно отправлен в Hitema!</div>
					<div class="modal-request__btns">
						<button class="btn empty">Мои запросы</button>
						<button class="btn btn__close">Вернуться к продукту</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-box modal-request modal-sample">
			<div class="modal-box__container">
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
					<div class="modal-request__like"><svg width="64" height="58" viewBox="0 0 64 58" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.6" filter="url(#filter0_f_2425_52147)">
								<g filter="url(#filter1_iiii_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M25.1365 12.2578H17.1485C15.0251 12.2578 13.3038 13.9791 13.3038 16.1025V19.9471C13.3038 19.9471 13.3038 19.9472 13.3038 19.9472C13.3037 19.9472 13.3037 19.9472 13.3037 19.9472V42.8576C13.3037 45.0668 15.0946 46.8576 17.3037 46.8576H43.9029C46.112 46.8576 47.9029 45.0668 47.9029 42.8576V23.9472C47.9029 21.738 46.112 19.9472 43.9029 19.9472H32.8259C32.66 19.9472 32.5256 19.8127 32.5256 19.6469C32.5256 15.566 29.2174 12.2578 25.1365 12.2578Z" fill="#BBCBD0" fill-opacity="0.5" />
								</g>
								<g filter="url(#filter2_f_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M29.4581 13.4141H23.4561C21.2469 13.4141 19.4561 15.2049 19.4561 17.4141V21.1034V24.9471V44.0139C19.4561 46.2231 21.2469 48.0139 23.4561 48.0139H50.0552C52.2644 48.0139 54.0552 46.2231 54.0552 44.0139V25.1034C54.0552 22.8943 52.2644 21.1034 50.0552 21.1034H37.1475C36.9816 21.1034 36.8472 20.969 36.8472 20.8031C36.8472 16.7223 33.539 13.4141 29.4581 13.4141Z" fill="url(#paint0_linear_2425_52147)" fill-opacity="0.9" />
								</g>
							</g>
							<g filter="url(#filter3_f_2425_52147)">
								<path d="M9.33301 44.1189V25.9657C9.33301 24.3815 10.6173 23.0972 12.2016 23.0972H15.7113C17.2955 23.0972 18.5798 24.3815 18.5798 25.9657V44.1189C18.5798 45.7031 17.2955 46.9874 15.7113 46.9874H12.2016C10.6173 46.9874 9.33301 45.7031 9.33301 44.1189Z" fill="#BBCBD0" fill-opacity="0.5" />
								<path d="M21.9166 24.2763V44.1189C21.9166 45.7031 23.2009 46.9874 24.7852 46.9874H47.0996C48.6839 46.9874 49.9681 45.7031 49.9681 44.1189V25.9657C49.9681 24.3815 48.6839 23.0972 47.0996 23.0972H39.5449C37.5037 23.0972 36.1156 21.0255 36.8919 19.1377L39.3226 13.2268C39.8634 11.9117 39.3413 10.3997 38.1044 9.69834C36.9954 9.06952 35.6025 9.26227 34.7059 10.1686L22.7458 22.2589C22.2146 22.7959 21.9166 23.5209 21.9166 24.2763Z" fill="#BBCBD0" fill-opacity="0.5" />
							</g>
							<g filter="url(#filter4_iiii_2425_52147)">
								<path d="M4.94434 42.4724V24.3192C4.94434 22.735 6.22863 21.4507 7.81289 21.4507H11.3226C12.9069 21.4507 14.1912 22.735 14.1912 24.3192V42.4724C14.1912 44.0566 12.9069 45.3409 11.3226 45.3409H7.81289C6.22863 45.3409 4.94434 44.0566 4.94434 42.4724Z" fill="#EFF3F6" />
								<path d="M17.5279 22.6298V42.4724C17.5279 44.0566 18.8122 45.3409 20.3965 45.3409H42.7109C44.2952 45.3409 45.5795 44.0566 45.5795 42.4724V24.3192C45.5795 22.735 44.2952 21.4507 42.7109 21.4507H35.1563C33.115 21.4507 31.7269 19.379 32.5033 17.4912L34.9339 11.5803C35.4747 10.2652 34.9527 8.7532 33.7157 8.05185C32.6067 7.42304 31.2138 7.61578 30.3172 8.52214L18.3572 20.6124C17.8259 21.1495 17.5279 21.8744 17.5279 22.6298Z" fill="#EFF3F6" />
							</g>
							<g filter="url(#filter5_f_2425_52147)">
								<path d="M6.94434 41.6268V24.4507C6.94434 22.9518 8.1595 21.7366 9.65848 21.7366H12.9793C14.4783 21.7366 15.6934 22.9517 15.6934 24.4507V41.6268C15.6934 43.1258 14.4783 44.3409 12.9793 44.3409H9.65848C8.1595 44.3409 6.94434 43.1258 6.94434 41.6268Z" fill="url(#paint1_linear_2425_52147)" fill-opacity="0.9" />
								<path d="M18.8506 22.8522V41.6268C18.8506 43.1258 20.0658 44.3409 21.5648 44.3409H42.6781C44.1771 44.3409 45.3923 43.1258 45.3923 41.6268V24.4507C45.3923 22.9517 44.1771 21.7366 42.6781 21.7366H35.5301C33.5987 21.7366 32.2854 19.7764 33.0199 17.9902L35.3197 12.3975C35.8314 11.1532 35.3375 9.72255 34.1671 9.05895C33.1178 8.46398 31.7998 8.64635 30.9515 9.50392L19.6352 20.9434C19.1326 21.4516 18.8506 22.1375 18.8506 22.8522Z" fill="url(#paint2_linear_2425_52147)" fill-opacity="0.9" />
							</g>
							<defs>
								<filter id="filter0_f_2425_52147" x="3.95046" y="2.90456" width="59.4584" height="54.4624" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.67662" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter1_iiii_2425_52147" x="10.9654" y="11.0887" width="38.1071" height="38.1071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.33831" dy="-1.16916" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.280597" dy="-0.140299" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.35 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.16916" dy="2.33831" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.187065" dy="0.187065" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter2_f_2425_52147" x="17.1177" y="11.0758" width="39.2762" height="39.2762" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.16916" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter3_f_2425_52147" x="0.175184" y="0.174208" width="58.9504" height="55.9719" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.57891" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter4_iiii_2425_52147" x="2.65488" y="6.54082" width="44.0689" height="39.8541" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.28946" dy="-1.14473" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521569 0 0 0 0 0.584314 0 0 0 0 0.603922 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.274735" dy="-0.137367" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521094 0 0 0 0 0.584387 0 0 0 0 0.604167 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.14473" dy="1.05315" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.183156" dy="0.183156" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter5_f_2425_52147" x="4.89632" y="6.66292" width="42.5443" height="39.7269" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.02401" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<linearGradient id="paint0_linear_2425_52147" x1="18.678" y1="15.9541" x2="42.0649" y2="36.32" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>

					</div>
					<div class="section__text">Ваш запрос успешно отправлен в Hitema!</div>
					<div class="modal-request__btns">
						<button class="btn empty">Мои запросы</button>
						<button class="btn btn__close">Вернуться к продукту</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-box modal-request modal-feedback">
			<div class="modal-box__container">
				<div class="modal-request-first">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Отзыв</div>
					<?
					if (!empty($_SESSION['log']['login'])) { ?>

						<?
						$SUBresult = CIBlockElement::GetByID($_SESSION['log']['id']);

						$ar_reslog = $SUBresult->GetNextElement();

						$arPropslog = $ar_reslog->GetProperties();
						?>
						<form class="form form_validation" id="form_otizv">
							<label class="form__item">
								<input class="input" type="text" value="<?= $arPropslog['fio']['VALUE'] ?>" name="FIO">
							</label>
							<label class="form__item">
								<input class="input" type="email" value="<?= $arPropslog['email']['VALUE'] ?>" name="EMAIL">
							</label>
							<label class="form__item">
								<input class="input" type="text" value="<?= $arPropslog['comp']['VALUE'] ?>" name="COMP">
							</label>
							<label class="form__item">
								<textarea class="textarea" maxlength="5000" name="COMMENT"></textarea><span class="placeholder">Описание товара</span><span class="count-text"><span>0</span> /5000</span>
							</label>
							<div class="form__bottom right raiting">
								<div class="product-review__top__stars">
									<input class="stars-input" type="radio" value="5" name="rating1">
									<div class="star"></div>
									<input class="stars-input" type="radio" value="4" name="rating1">
									<div class="star"></div>
									<input class="stars-input" type="radio" value="3" name="rating1">
									<div class="star"></div>
									<input class="stars-input" type="radio" value="2" name="rating1">
									<div class="star"></div>
									<input class="stars-input" type="radio" value="1" name="rating1">
									<div class="star"></div>Оценка:
								</div>
								<button class="btn btn-next" type="submit" id_prod="<?= $arResult['ID'] ?>" id="SEND_OTZIV">Отправить</button>
							</div>
						</form>
					<? } else { ?>
						<form class="form form_validation" id="form_otizv">
							<label class="form__item">
								<input class="input" type="text" name="FIO"><span class="placeholder">ФИО</span>
							</label>
							<label class="form__item">
								<input class="input" type="email" name="EMAIL"><span class="placeholder">E-mail</span>
							</label>
							<? if (!empty($_SESSION['log']['id'])) { ?>
								<label class="form__item">
									<input class="input" type="text" name="COMP"><span class="placeholder">Компания</span>
								</label>
							<? } ?>
							<label class="form__item">
								<textarea class="textarea" maxlength="5000" name="COMMENT"></textarea><span class="placeholder">Описание товара</span><span class="count-text"><span>0</span> /5000</span>
							</label>
							<div class="form__bottom right raiting">
								<div class="product-review__top__stars">
									<input class="stars-input" type="radio" value="5" name="rating1">
									<div class="star"></div>
									<input class="stars-input" type="radio" value="4" name="rating1">
									<div class="star"></div>
									<input class="stars-input" type="radio" value="3" name="rating1">
									<div class="star"></div>
									<input class="stars-input" type="radio" value="2" name="rating1">
									<div class="star"></div>
									<input class="stars-input" type="radio" value="1" name="rating1">
									<div class="star"></div>Оценка:
								</div>
								<button class="btn btn-next" type="submit" id_prod="<?= $arResult['ID'] ?>" id="SEND_OTZIV">Отправить</button>
							</div>
						</form>
					<? } ?>
				</div>
				<div class="modal-request-second">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title center">Ваш отзыв</div>
					<div class="modal-request__like"><svg width="64" height="58" viewBox="0 0 64 58" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.6" filter="url(#filter0_f_2425_52147)">
								<g filter="url(#filter1_iiii_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M25.1365 12.2578H17.1485C15.0251 12.2578 13.3038 13.9791 13.3038 16.1025V19.9471C13.3038 19.9471 13.3038 19.9472 13.3038 19.9472C13.3037 19.9472 13.3037 19.9472 13.3037 19.9472V42.8576C13.3037 45.0668 15.0946 46.8576 17.3037 46.8576H43.9029C46.112 46.8576 47.9029 45.0668 47.9029 42.8576V23.9472C47.9029 21.738 46.112 19.9472 43.9029 19.9472H32.8259C32.66 19.9472 32.5256 19.8127 32.5256 19.6469C32.5256 15.566 29.2174 12.2578 25.1365 12.2578Z" fill="#BBCBD0" fill-opacity="0.5" />
								</g>
								<g filter="url(#filter2_f_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M29.4581 13.4141H23.4561C21.2469 13.4141 19.4561 15.2049 19.4561 17.4141V21.1034V24.9471V44.0139C19.4561 46.2231 21.2469 48.0139 23.4561 48.0139H50.0552C52.2644 48.0139 54.0552 46.2231 54.0552 44.0139V25.1034C54.0552 22.8943 52.2644 21.1034 50.0552 21.1034H37.1475C36.9816 21.1034 36.8472 20.969 36.8472 20.8031C36.8472 16.7223 33.539 13.4141 29.4581 13.4141Z" fill="url(#paint0_linear_2425_52147)" fill-opacity="0.9" />
								</g>
							</g>
							<g filter="url(#filter3_f_2425_52147)">
								<path d="M9.33301 44.1189V25.9657C9.33301 24.3815 10.6173 23.0972 12.2016 23.0972H15.7113C17.2955 23.0972 18.5798 24.3815 18.5798 25.9657V44.1189C18.5798 45.7031 17.2955 46.9874 15.7113 46.9874H12.2016C10.6173 46.9874 9.33301 45.7031 9.33301 44.1189Z" fill="#BBCBD0" fill-opacity="0.5" />
								<path d="M21.9166 24.2763V44.1189C21.9166 45.7031 23.2009 46.9874 24.7852 46.9874H47.0996C48.6839 46.9874 49.9681 45.7031 49.9681 44.1189V25.9657C49.9681 24.3815 48.6839 23.0972 47.0996 23.0972H39.5449C37.5037 23.0972 36.1156 21.0255 36.8919 19.1377L39.3226 13.2268C39.8634 11.9117 39.3413 10.3997 38.1044 9.69834C36.9954 9.06952 35.6025 9.26227 34.7059 10.1686L22.7458 22.2589C22.2146 22.7959 21.9166 23.5209 21.9166 24.2763Z" fill="#BBCBD0" fill-opacity="0.5" />
							</g>
							<g filter="url(#filter4_iiii_2425_52147)">
								<path d="M4.94434 42.4724V24.3192C4.94434 22.735 6.22863 21.4507 7.81289 21.4507H11.3226C12.9069 21.4507 14.1912 22.735 14.1912 24.3192V42.4724C14.1912 44.0566 12.9069 45.3409 11.3226 45.3409H7.81289C6.22863 45.3409 4.94434 44.0566 4.94434 42.4724Z" fill="#EFF3F6" />
								<path d="M17.5279 22.6298V42.4724C17.5279 44.0566 18.8122 45.3409 20.3965 45.3409H42.7109C44.2952 45.3409 45.5795 44.0566 45.5795 42.4724V24.3192C45.5795 22.735 44.2952 21.4507 42.7109 21.4507H35.1563C33.115 21.4507 31.7269 19.379 32.5033 17.4912L34.9339 11.5803C35.4747 10.2652 34.9527 8.7532 33.7157 8.05185C32.6067 7.42304 31.2138 7.61578 30.3172 8.52214L18.3572 20.6124C17.8259 21.1495 17.5279 21.8744 17.5279 22.6298Z" fill="#EFF3F6" />
							</g>
							<g filter="url(#filter5_f_2425_52147)">
								<path d="M6.94434 41.6268V24.4507C6.94434 22.9518 8.1595 21.7366 9.65848 21.7366H12.9793C14.4783 21.7366 15.6934 22.9517 15.6934 24.4507V41.6268C15.6934 43.1258 14.4783 44.3409 12.9793 44.3409H9.65848C8.1595 44.3409 6.94434 43.1258 6.94434 41.6268Z" fill="url(#paint1_linear_2425_52147)" fill-opacity="0.9" />
								<path d="M18.8506 22.8522V41.6268C18.8506 43.1258 20.0658 44.3409 21.5648 44.3409H42.6781C44.1771 44.3409 45.3923 43.1258 45.3923 41.6268V24.4507C45.3923 22.9517 44.1771 21.7366 42.6781 21.7366H35.5301C33.5987 21.7366 32.2854 19.7764 33.0199 17.9902L35.3197 12.3975C35.8314 11.1532 35.3375 9.72255 34.1671 9.05895C33.1178 8.46398 31.7998 8.64635 30.9515 9.50392L19.6352 20.9434C19.1326 21.4516 18.8506 22.1375 18.8506 22.8522Z" fill="url(#paint2_linear_2425_52147)" fill-opacity="0.9" />
							</g>
							<defs>
								<filter id="filter0_f_2425_52147" x="3.95046" y="2.90456" width="59.4584" height="54.4624" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.67662" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter1_iiii_2425_52147" x="10.9654" y="11.0887" width="38.1071" height="38.1071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.33831" dy="-1.16916" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.280597" dy="-0.140299" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.35 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.16916" dy="2.33831" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.187065" dy="0.187065" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter2_f_2425_52147" x="17.1177" y="11.0758" width="39.2762" height="39.2762" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.16916" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter3_f_2425_52147" x="0.175184" y="0.174208" width="58.9504" height="55.9719" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.57891" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter4_iiii_2425_52147" x="2.65488" y="6.54082" width="44.0689" height="39.8541" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.28946" dy="-1.14473" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521569 0 0 0 0 0.584314 0 0 0 0 0.603922 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.274735" dy="-0.137367" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521094 0 0 0 0 0.584387 0 0 0 0 0.604167 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.14473" dy="1.05315" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.183156" dy="0.183156" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter5_f_2425_52147" x="4.89632" y="6.66292" width="42.5443" height="39.7269" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.02401" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<linearGradient id="paint0_linear_2425_52147" x1="18.678" y1="15.9541" x2="42.0649" y2="36.32" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>

					</div>
					<div class="section__text">Ваш отзыв успешно отправлен</div>
					<div class="modal-request__btns">
						<button class="btn btn__close">Вернуться к продукту</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-box modal-request modal-order">
			<div class="modal-box__container">
				<div class="modal-request-first">
					<button class="modal-box__close" type="button"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section__title">Оформление заказа</div>
					<div class="section__subtitle">Вы оформляете заказ у Hitema</div>
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
					<div class="section__title">Оформление заказа</div>
					<div class="section__subtitle">Вы оформляете заказ у Hitema</div>
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
					<div class="section__title center">Оформление заказа</div>
					<div class="modal-request__like"><svg width="64" height="58" viewBox="0 0 64 58" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.6" filter="url(#filter0_f_2425_52147)">
								<g filter="url(#filter1_iiii_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M25.1365 12.2578H17.1485C15.0251 12.2578 13.3038 13.9791 13.3038 16.1025V19.9471C13.3038 19.9471 13.3038 19.9472 13.3038 19.9472C13.3037 19.9472 13.3037 19.9472 13.3037 19.9472V42.8576C13.3037 45.0668 15.0946 46.8576 17.3037 46.8576H43.9029C46.112 46.8576 47.9029 45.0668 47.9029 42.8576V23.9472C47.9029 21.738 46.112 19.9472 43.9029 19.9472H32.8259C32.66 19.9472 32.5256 19.8127 32.5256 19.6469C32.5256 15.566 29.2174 12.2578 25.1365 12.2578Z" fill="#BBCBD0" fill-opacity="0.5" />
								</g>
								<g filter="url(#filter2_f_2425_52147)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M29.4581 13.4141H23.4561C21.2469 13.4141 19.4561 15.2049 19.4561 17.4141V21.1034V24.9471V44.0139C19.4561 46.2231 21.2469 48.0139 23.4561 48.0139H50.0552C52.2644 48.0139 54.0552 46.2231 54.0552 44.0139V25.1034C54.0552 22.8943 52.2644 21.1034 50.0552 21.1034H37.1475C36.9816 21.1034 36.8472 20.969 36.8472 20.8031C36.8472 16.7223 33.539 13.4141 29.4581 13.4141Z" fill="url(#paint0_linear_2425_52147)" fill-opacity="0.9" />
								</g>
							</g>
							<g filter="url(#filter3_f_2425_52147)">
								<path d="M9.33301 44.1189V25.9657C9.33301 24.3815 10.6173 23.0972 12.2016 23.0972H15.7113C17.2955 23.0972 18.5798 24.3815 18.5798 25.9657V44.1189C18.5798 45.7031 17.2955 46.9874 15.7113 46.9874H12.2016C10.6173 46.9874 9.33301 45.7031 9.33301 44.1189Z" fill="#BBCBD0" fill-opacity="0.5" />
								<path d="M21.9166 24.2763V44.1189C21.9166 45.7031 23.2009 46.9874 24.7852 46.9874H47.0996C48.6839 46.9874 49.9681 45.7031 49.9681 44.1189V25.9657C49.9681 24.3815 48.6839 23.0972 47.0996 23.0972H39.5449C37.5037 23.0972 36.1156 21.0255 36.8919 19.1377L39.3226 13.2268C39.8634 11.9117 39.3413 10.3997 38.1044 9.69834C36.9954 9.06952 35.6025 9.26227 34.7059 10.1686L22.7458 22.2589C22.2146 22.7959 21.9166 23.5209 21.9166 24.2763Z" fill="#BBCBD0" fill-opacity="0.5" />
							</g>
							<g filter="url(#filter4_iiii_2425_52147)">
								<path d="M4.94434 42.4724V24.3192C4.94434 22.735 6.22863 21.4507 7.81289 21.4507H11.3226C12.9069 21.4507 14.1912 22.735 14.1912 24.3192V42.4724C14.1912 44.0566 12.9069 45.3409 11.3226 45.3409H7.81289C6.22863 45.3409 4.94434 44.0566 4.94434 42.4724Z" fill="#EFF3F6" />
								<path d="M17.5279 22.6298V42.4724C17.5279 44.0566 18.8122 45.3409 20.3965 45.3409H42.7109C44.2952 45.3409 45.5795 44.0566 45.5795 42.4724V24.3192C45.5795 22.735 44.2952 21.4507 42.7109 21.4507H35.1563C33.115 21.4507 31.7269 19.379 32.5033 17.4912L34.9339 11.5803C35.4747 10.2652 34.9527 8.7532 33.7157 8.05185C32.6067 7.42304 31.2138 7.61578 30.3172 8.52214L18.3572 20.6124C17.8259 21.1495 17.5279 21.8744 17.5279 22.6298Z" fill="#EFF3F6" />
							</g>
							<g filter="url(#filter5_f_2425_52147)">
								<path d="M6.94434 41.6268V24.4507C6.94434 22.9518 8.1595 21.7366 9.65848 21.7366H12.9793C14.4783 21.7366 15.6934 22.9517 15.6934 24.4507V41.6268C15.6934 43.1258 14.4783 44.3409 12.9793 44.3409H9.65848C8.1595 44.3409 6.94434 43.1258 6.94434 41.6268Z" fill="url(#paint1_linear_2425_52147)" fill-opacity="0.9" />
								<path d="M18.8506 22.8522V41.6268C18.8506 43.1258 20.0658 44.3409 21.5648 44.3409H42.6781C44.1771 44.3409 45.3923 43.1258 45.3923 41.6268V24.4507C45.3923 22.9517 44.1771 21.7366 42.6781 21.7366H35.5301C33.5987 21.7366 32.2854 19.7764 33.0199 17.9902L35.3197 12.3975C35.8314 11.1532 35.3375 9.72255 34.1671 9.05895C33.1178 8.46398 31.7998 8.64635 30.9515 9.50392L19.6352 20.9434C19.1326 21.4516 18.8506 22.1375 18.8506 22.8522Z" fill="url(#paint2_linear_2425_52147)" fill-opacity="0.9" />
							</g>
							<defs>
								<filter id="filter0_f_2425_52147" x="3.95046" y="2.90456" width="59.4584" height="54.4624" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.67662" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter1_iiii_2425_52147" x="10.9654" y="11.0887" width="38.1071" height="38.1071" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.33831" dy="-1.16916" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.280597" dy="-0.140299" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.35 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.16916" dy="2.33831" />
									<feGaussianBlur stdDeviation="1.16916" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.187065" dy="0.187065" />
									<feGaussianBlur stdDeviation="0.350747" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter2_f_2425_52147" x="17.1177" y="11.0758" width="39.2762" height="39.2762" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.16916" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter3_f_2425_52147" x="0.175184" y="0.174208" width="58.9504" height="55.9719" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="4.57891" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<filter id="filter4_iiii_2425_52147" x="2.65488" y="6.54082" width="44.0689" height="39.8541" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-2.28946" dy="-1.14473" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521569 0 0 0 0 0.584314 0 0 0 0 0.603922 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="shape" result="effect1_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="-0.274735" dy="-0.137367" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 0.521094 0 0 0 0 0.584387 0 0 0 0 0.604167 0 0 0 0.2 0" />
									<feBlend mode="normal" in2="effect1_innerShadow_2425_52147" result="effect2_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="1.14473" dy="1.05315" />
									<feGaussianBlur stdDeviation="1.14473" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0" />
									<feBlend mode="normal" in2="effect2_innerShadow_2425_52147" result="effect3_innerShadow_2425_52147" />
									<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
									<feOffset dx="0.183156" dy="0.183156" />
									<feGaussianBlur stdDeviation="0.343418" />
									<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
									<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0" />
									<feBlend mode="normal" in2="effect3_innerShadow_2425_52147" result="effect4_innerShadow_2425_52147" />
								</filter>
								<filter id="filter5_f_2425_52147" x="4.89632" y="6.66292" width="42.5443" height="39.7269" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
									<feFlood flood-opacity="0" result="BackgroundImageFix" />
									<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
									<feGaussianBlur stdDeviation="1.02401" result="effect1_foregroundBlur_2425_52147" />
								</filter>
								<linearGradient id="paint0_linear_2425_52147" x1="18.678" y1="15.9541" x2="42.0649" y2="36.32" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint1_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
								<linearGradient id="paint2_linear_2425_52147" x1="11.5697" y1="10.5065" x2="25.1961" y2="27.5637" gradientUnits="userSpaceOnUse">
									<stop stop-color="white" />
									<stop offset="1" stop-color="white" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>

					</div>
					<div class="section__text">Ваш заказ успешно отправлен в Hitema!</div>
					<div class="modal-request__btns">
						<button class="btn empty">Мои заказы</button>
						<button class="btn btn__close">Вернуться к продукту</button>
					</div>
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
					'ID' => $arResult['PROPERTIES']['comp_id']['VALUE'],
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
										'ID' => $arResult['PROPERTIES']['comp_id']['VALUE'],
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

					<div class="sidebar-request desc">
						<div class="sidebar-request__head">
							<div class="sidebar-request__vendor"><img src="<?= CFile::GetPath($arElement['DETAIL_PICTURE']) ?>" alt=""></div>
							<div class="sidebar-request__head-info">
								<div class="sidebar-request__title"><?= $arElement['PROPERTY_COMP_VALUE'] ?></div>
								<div class="sidebar-request__text">Брендов: <span><?= $BrenCount ?></span></div>
								<div class="sidebar-request__text">Продуктов: <span><?= $ProdCount ?></span></div>
							</div>
						</div>
					<? } ?>
					<div class="sidebar-request__text">Выберите количество</div>
					<form class="form">
						<label class="form__item">
							<input class="input" type="text"><span class="placeholder">Количество</span>
						</label>
					</form>
					<button class="btn btn-price">Запросить цену</button>
					<button class="btn btn-doc">Запросить документ</button>
					<button class="btn btn-sample">Запросить образец</button>
					<button class="btn btn-order">Заказать продукт</button>
					<div class="sidebar-request__item">
						<div class="sidebar-request__item-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.16992 7.44043L11.9999 12.5504L20.7699 7.47043" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M12 21.61V12.54" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M9.93062 2.48028L4.59063 5.44028C3.38063 6.11028 2.39062 7.79028 2.39062 9.17028V14.8203C2.39062 16.2003 3.38063 17.8803 4.59063 18.5503L9.93062 21.5203C11.0706 22.1503 12.9406 22.1503 14.0806 21.5203L19.4206 18.5503C20.6306 17.8803 21.6206 16.2003 21.6206 14.8203V9.17028C21.6206 7.79028 20.6306 6.11028 19.4206 5.44028L14.0806 2.47028C12.9306 1.84028 11.0706 1.84028 9.93062 2.48028Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>

						</div>
						<div class="sidebar-request__item-container">
							<div class="sidebar-request__item-title">Минимальный объем для заказа</div>
							<div class="sidebar-request__item-subtitle">38 т.</div>
						</div>
					</div>
					<div class="sidebar-request__item">
						<div class="sidebar-request__item-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22 15C22 18.87 18.87 22 15 22L16.05 20.25" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M2 9C2 5.13 5.13 2 9 2L7.95 3.75" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M13.7002 4.44922L17.6802 6.74921L21.6202 4.45923" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M17.6802 10.8183V6.73828" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M16.7401 2.21L14.3401 3.53996C13.8001 3.83996 13.3501 4.59995 13.3501 5.21995V7.75999C13.3501 8.37999 13.7901 9.13998 14.3401 9.43998L16.7401 10.77C17.2501 11.06 18.0901 11.06 18.6101 10.77L21.0101 9.43998C21.5501 9.13998 22.0001 8.37999 22.0001 7.75999V5.21995C22.0001 4.59995 21.5601 3.83996 21.0101 3.53996L18.6101 2.21C18.1001 1.93 17.2601 1.93 16.7401 2.21Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M2.3501 15.4492L6.3201 17.7492L10.2701 15.4592" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M6.32031 21.8183V17.7383" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M5.39 13.21L2.99001 14.54C2.45001 14.84 2 15.5999 2 16.2199V18.76C2 19.38 2.44001 20.14 2.99001 20.44L5.39 21.77C5.9 22.06 6.73999 22.06 7.25999 21.77L9.66 20.44C10.2 20.14 10.65 19.38 10.65 18.76V16.2199C10.65 15.5999 10.21 14.84 9.66 14.54L7.25999 13.21C6.73999 12.93 5.9 12.93 5.39 13.21Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>

						</div>
						<div class="sidebar-request__item-container">
							<div class="sidebar-request__item-title">Условия поставки</div>
							<div class="sidebar-request__item-subtitle">Самовывоз</div>
						</div>
					</div>
					<div class="sidebar-request__item">
						<div class="sidebar-request__item-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.9998 14H12.9998C14.0998 14 14.9998 13.1 14.9998 12V2H5.99976C4.49976 2 3.18977 2.82999 2.50977 4.04999" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M2 17C2 18.66 3.34 20 5 20H6C6 18.9 6.9 18 8 18C9.1 18 10 18.9 10 20H14C14 18.9 14.9 18 16 18C17.1 18 18 18.9 18 20H19C20.66 20 22 18.66 22 17V14H19C18.45 14 18 13.55 18 13V10C18 9.45 18.45 9 19 9H20.29L18.58 6.01001C18.22 5.39001 17.56 5 16.84 5H15V12C15 13.1 14.1 14 13 14H12" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M8 22C9.10457 22 10 21.1046 10 20C10 18.8954 9.10457 18 8 18C6.89543 18 6 18.8954 6 20C6 21.1046 6.89543 22 8 22Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M16 22C17.1046 22 18 21.1046 18 20C18 18.8954 17.1046 18 16 18C14.8954 18 14 18.8954 14 20C14 21.1046 14.8954 22 16 22Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M22 12V14H19C18.45 14 18 13.55 18 13V10C18 9.45 18.45 9 19 9H20.29L22 12Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M2 8H8" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M2 11H6" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M2 14H4" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>

						</div>
						<div class="sidebar-request__item-container">
							<div class="sidebar-request__item-title">Доступность по регионам</div>
							<div class="sidebar-request__item-subtitle">Вся Россия</div>
						</div>
					</div>
					</div>
			</div>

			<div class="cabinet__content">
				<?
				$prod_name = explode("--", $arResult['NAME']);
				$prod_name = $prod_name[0];
				?>
				<div class="section__title"><?= $prod_name ?></div>
				<div class="filter__inner filter__control">
					<button class="icon<?if($_SESSION['log']['login'] == ''){$userarElements = ($_COOKIE['favorites']) ? unserialize($_COOKIE['favorites']) : array();}
							else{
								$usersreq = CIBlockElement::GetByID($_SESSION['log']['id']);
   $userElem = $usersreq->GetNextElement();
   $usearFields = $userElem->GetFields();
   $userarProps = $userElem->GetProperties();
	$userarElements = ($userarProps['favourites_products']['VALUE']) ? $userarProps['favourites_products']['VALUE'] : array();} 
	if(in_array($arResult['ID'], $userarElements)){echo " liked";}?>" id="prod_add" post_id="<?= $arResult['ID'] ?>">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.62 20.8101C12.28 20.9301 11.72 20.9301 11.38 20.8101C8.48 19.8201 2 15.6901 2 8.6901C2 5.6001 4.49 3.1001 7.56 3.1001C9.38 3.1001 10.99 3.9801 12 5.3401C13.01 3.9801 14.63 3.1001 16.44 3.1001C19.51 3.1001 22 5.6001 22 8.6901C22 15.6901 15.52 19.8201 12.62 20.8101Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="filter__text"><span class="desc">Добавить</span> в избранное</div>
					<?if($_SESSION['log']['login'] != ''){?>
					<button class="icon" id="prod_compas" post_id="<?=$arResult['ID']?>"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.4783 10.4385L21.4765 14.6185C20.6177 18.2285 18.9207 19.6885 15.731 19.3885C15.2199 19.3485 14.6678 19.2585 14.0749 19.1185L12.3574 18.7185C8.09429 17.7285 6.77549 15.6685 7.77737 11.4885L8.77924 7.29854C8.98371 6.44854 9.22906 5.70854 9.53576 5.09854C10.7319 2.67854 12.7663 2.02854 16.1808 2.81854L17.8881 3.20854C22.1717 4.18854 23.4802 6.25854 22.4783 10.4385Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M15.7311 19.3896C15.0972 19.8096 14.2998 20.1596 13.3286 20.4696L11.7134 20.9896C7.65474 22.2696 5.51809 21.1996 4.19929 17.2296L2.89072 13.2796C1.58215 9.30961 2.66581 7.20961 6.72443 5.92961L8.33969 5.40961C8.75885 5.27961 9.15755 5.16961 9.53581 5.09961C9.22911 5.70961 8.98376 6.44961 8.77929 7.29961L7.77742 11.4896C6.77554 15.6696 8.09434 17.7296 12.3574 18.7196L14.0749 19.1196C14.6679 19.2596 15.2199 19.3496 15.7311 19.3896Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M13.2568 8.53125L18.2151 9.76125" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M12.2549 12.4004L15.2196 13.1404" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>

					</button>
					<div class="filter__text"><span class="desc">Добавить</span> к сравнению</div>
					<?}?>
				</div>
				<div class="section__subtitle small-section">
					<? if (!empty($arResult['PROPERTIES']['description']['VALUE'])) { ?>
						<?= $arResult['PROPERTIES']['description']['VALUE']['TEXT'] ?>
					<? } ?>
				</div>
				<div class="section__title">Характеристики</div>
				<div class="product_characteristics small-section">
					<div class="product_characteristics__item">
						<div class="product_characteristics__title">Страна производителя</div>
						<div class="product_characteristics__text"><?= $arResult['PROPERTIES']['origin']['VALUE'] ?></div>
					</div>
					<div class="product_characteristics__item">
						<div class="product_characteristics__title">Торговая марка</div>
						<div class="product_characteristics__text"><?= $arResult['PROPERTIES']['brend']['VALUE'] ?></div>
					</div>
					<div class="product_characteristics__item">
						<div class="product_characteristics__title">Производитель</div>
						<div class="product_characteristics__text"><?= $arResult['PROPERTIES']['comp']['VALUE'] ?></div>
					</div>
					<div class="product_characteristics__item">
						<div class="product_characteristics__title">Состав ингридиента</div>
						<div class="product_characteristics__text"><?= $arResult['PROPERTIES']['composition']['VALUE'] ?></div>
					</div>
					<div class="product_characteristics__item">
						<div class="product_characteristics__title">Условия хранения</div>
						<div class="product_characteristics__text more"><?= $arResult['PROPERTIES']['storage_conditions']['VALUE'] ?></div>
					</div>
					<div class="product_characteristics__item">
						<div class="product_characteristics__title">Область применения</div>
						<div class="product_characteristics__text">применяется при производстве кондитерских изделий с целью придания им карамельного вкуса и аромата.</div>
					</div>
					<div class="product_characteristics__item">
						<div class="product_characteristics__title">Упаковка</div>
						<div class="product_characteristics__text"><?= $arResult['PROPERTIES']['type_packaging']['VALUE'] ?> <?= $arResult['PROPERTIES']['weight_packaging']['VALUE'] ?> кг.</div>
					</div>
					<div class="product_characteristics__item">
						<div class="product_characteristics__title">Функциональные свойство</div>
						<div class="product_characteristics__text"><?= $arResult['PROPERTIES']['type_packaging']['VALUE'] ?> <?= $arResult['PROPERTIES']['weight_packaging']['VALUE'] ?> кг.</div>
					</div>
				</div>
				<div class="section__title">Документы</div>
				<?
				$elementFilters = array(
					'IBLOCK_ID' => 12,
					'SECTION_ID' => 48,
					'ACTIVE' => 'Y',
					'ID' => $arResult['PROPERTIES']['comp_id']['VALUE'],
				);
				$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $elementFilters, false, false, array('ID', "IBLOCK_ID", 'NAME', 'DETAIL_PICTURE', 'CODE', 'PROPERTY_COMP'));

				if ($arElementdoc = $dbElements->GetNext()) { ?>
					<?
					$SUBresult = CIBlockElement::GetByID($arElementdoc['ID']);

					$ar_res = $SUBresult->GetNextElement();

					$arProps = $ar_res->GetProperties();

					?>
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
					}
					?>
					<div class="form_bottom">
						<button class="btn right">Запросить докумены</button>
					</div>
					</form>
					<div class="sidebar-request mobile">
						<div class="sidebar-request__head">
							<div class="sidebar-request__vendor"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vendors/vendor2.jpg" alt=""></div>
							<div class="sidebar-request__head-info">
								<div class="sidebar-request__title">«Милорада»</div>
								<div class="sidebar-request__text">Брендов: <span>025</span></div>
								<div class="sidebar-request__text">Продуктов: <span>2849</span></div>
							</div>
						</div>
						<div class="sidebar-request__text">Выберите количество</div>
						<form class="form">
							<label class="form__item">
								<input class="input" type="text"><span class="placeholder">Количество</span>
							</label>
						</form>
						<button class="btn btn-price">Запросить цену</button>
						<button class="btn btn-doc">Запросить документ</button>
						<button class="btn btn-sample">Запросить образец</button>
						<button class="btn btn-order">Заказать продукт</button>
						<div class="sidebar-request__item">
							<div class="sidebar-request__item-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M3.16992 7.44043L11.9999 12.5504L20.7699 7.47043" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M12 21.61V12.54" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M9.93062 2.48028L4.59063 5.44028C3.38063 6.11028 2.39062 7.79028 2.39062 9.17028V14.8203C2.39062 16.2003 3.38063 17.8803 4.59063 18.5503L9.93062 21.5203C11.0706 22.1503 12.9406 22.1503 14.0806 21.5203L19.4206 18.5503C20.6306 17.8803 21.6206 16.2003 21.6206 14.8203V9.17028C21.6206 7.79028 20.6306 6.11028 19.4206 5.44028L14.0806 2.47028C12.9306 1.84028 11.0706 1.84028 9.93062 2.48028Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>

							</div>
							<div class="sidebar-request__item-container">
								<div class="sidebar-request__item-title">Минимальный объем для заказа</div>
								<div class="sidebar-request__item-subtitle">38 т.</div>
							</div>
						</div>
						<div class="sidebar-request__item">
							<div class="sidebar-request__item-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M22 15C22 18.87 18.87 22 15 22L16.05 20.25" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M2 9C2 5.13 5.13 2 9 2L7.95 3.75" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13.7002 4.44922L17.6802 6.74921L21.6202 4.45923" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M17.6802 10.8183V6.73828" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M16.7401 2.21L14.3401 3.53996C13.8001 3.83996 13.3501 4.59995 13.3501 5.21995V7.75999C13.3501 8.37999 13.7901 9.13998 14.3401 9.43998L16.7401 10.77C17.2501 11.06 18.0901 11.06 18.6101 10.77L21.0101 9.43998C21.5501 9.13998 22.0001 8.37999 22.0001 7.75999V5.21995C22.0001 4.59995 21.5601 3.83996 21.0101 3.53996L18.6101 2.21C18.1001 1.93 17.2601 1.93 16.7401 2.21Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M2.3501 15.4492L6.3201 17.7492L10.2701 15.4592" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M6.32031 21.8183V17.7383" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M5.39 13.21L2.99001 14.54C2.45001 14.84 2 15.5999 2 16.2199V18.76C2 19.38 2.44001 20.14 2.99001 20.44L5.39 21.77C5.9 22.06 6.73999 22.06 7.25999 21.77L9.66 20.44C10.2 20.14 10.65 19.38 10.65 18.76V16.2199C10.65 15.5999 10.21 14.84 9.66 14.54L7.25999 13.21C6.73999 12.93 5.9 12.93 5.39 13.21Z" fill="none" stroke="#7C9DA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>

							</div>
							<div class="sidebar-request__item-container">
								<div class="sidebar-request__item-title">Условия поставки</div>
								<div class="sidebar-request__item-subtitle">Самовывоз</div>
							</div>
						</div>
						<div class="sidebar-request__item">
							<div class="sidebar-request__item-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.9998 14H12.9998C14.0998 14 14.9998 13.1 14.9998 12V2H5.99976C4.49976 2 3.18977 2.82999 2.50977 4.04999" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M2 17C2 18.66 3.34 20 5 20H6C6 18.9 6.9 18 8 18C9.1 18 10 18.9 10 20H14C14 18.9 14.9 18 16 18C17.1 18 18 18.9 18 20H19C20.66 20 22 18.66 22 17V14H19C18.45 14 18 13.55 18 13V10C18 9.45 18.45 9 19 9H20.29L18.58 6.01001C18.22 5.39001 17.56 5 16.84 5H15V12C15 13.1 14.1 14 13 14H12" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M8 22C9.10457 22 10 21.1046 10 20C10 18.8954 9.10457 18 8 18C6.89543 18 6 18.8954 6 20C6 21.1046 6.89543 22 8 22Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M16 22C17.1046 22 18 21.1046 18 20C18 18.8954 17.1046 18 16 18C14.8954 18 14 18.8954 14 20C14 21.1046 14.8954 22 16 22Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M22 12V14H19C18.45 14 18 13.55 18 13V10C18 9.45 18.45 9 19 9H20.29L22 12Z" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M2 8H8" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M2 11H6" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M2 14H4" fill="none" stroke="#7C9DA8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								</svg>

							</div>
							<div class="sidebar-request__item-container">
								<div class="sidebar-request__item-title">Доступность по регионам</div>
								<div class="sidebar-request__item-subtitle">Вся Россия</div>
							</div>
						</div>
					</div>
					<div class="section__head">
						<?php
						$otzivFilters = array(
							'IBLOCK_ID' => 22,
							'ACTIVE' => 'Y',
							'PROPERTY_TOVAR' => $arResult['ID'],
						);

						$dbotzvElements = CIBlockElement::GetList(array("SORT" => "ASC"), $otzivFilters, false, false, array('ID', 'PROPERTY_SCORE'));

						$otzvCount = 0;
						$totalScore = 0;

						while ($otzivElement = $dbotzvElements->GetNext()) {
							$score = intval($otzivElement['PROPERTY_SCORE_VALUE']);
							if ($score >= 1 && $score <= 5) {
								$otzvCount++;
								$totalScore += $score;
							}
						}

						$averageScore = ($otzvCount > 0) ? round($totalScore / $otzvCount, 1) : 0;
						?>

						<div class="section__title">Отзывы</div>
						<div class="review__head">
							<div class="review__head-container">
								<div class="review__head-top">
									<div class="review__head-top__score"><?= $averageScore ?></div>
									<div class="review__head-top__stars">
										<? for ($i = 1; $i <= 5; $i++) { ?>
											<div class="star <?= ($i <= $averageScore) ? 'checked' : '' ?>"></div>
										<? } ?>
									</div>
								</div>
								<div class="review__head-bottom">Отзывов: <?= $otzvCount ?></div>
							</div>
							<button class="btn empty feedback-open">Оставить отзыв</button>
						</div>
					</div>
					<div class="swiper_shadow">
						<div class="swiper_grid_container">
							<div class="swiper swiper_review">
								<div class="swiper-wrapper">
									<?
									$elementFilters = array(
										'IBLOCK_ID' => 22,
										'ACTIVE' => 'Y',
										'PROPERTY_TOVAR' => $arResult['ID'],
									);

									$dbElements = CIBlockElement::GetList(array("CREATED" => "DESC"), $elementFilters, false, false, array('ID', "IBLOCK_ID", 'NAME', 'DETAIL_PICTURE', 'CODE', 'DATE_CREATE', 'PROPERTY_FIO', 'PROPERTY_EMAIL', 'PROPERTY_COMMENT'));

									$Ar = array();
									while ($arElement = $dbElements->GetNext()) {
										$reviewElement = CIBlockElement::GetByID($arElement['ID']);

										$ar_res = $reviewElement->GetNextElement();
										$arFields = $ar_res->GetFields();
										$reviewProps = $ar_res->GetProperties();

										$companyName = "";
										$companyImage = "";
										$companyId = $reviewProps['COMP']['VALUE'];
										if ($companyId > 0 && $companyId != "") {
											$companyElement = CIBlockElement::GetByID($companyId);

											if ($companyElement) {
												$ar_res = $companyElement->GetNextElement();
												$compFields = $ar_res->GetFields();
												$compProps = $ar_res->GetProperties();

												$companyName = $compProps['comp']['VALUE'];
												if ($compFields['DETAIL_PICTURE']) {
													$imageFile = CFile::GetFileArray($compFields['DETAIL_PICTURE']);
													if ($imageFile) {
														$companyImage = $imageFile['SRC'];
													}
												}
											}
										}


										$Ar[] = array(
											'arElement' => $arElement,
											'reviewProps' => $reviewProps,
											'arFields' => $arFields,
											'companyName' => $companyName,
											'companyImage' => $companyImage,
										);
									}

									$chunkedItems = array_chunk($Ar, 2);
									?>

									<? foreach ($chunkedItems as $itemsGroup) { ?>
										<div class="swiper-slide">
											<? foreach ($itemsGroup as $item) { ?>
												<div class="slide">
													<div class="product-review gradient_border">
														<div class="product-review__top">
															<div class="product-review__vendor">
																<?php if (!empty($item['companyImage'])) : ?>
																	<img src="<?= $item['companyImage'] ?>" alt="<?= $item['companyName'] ?>">
																<?php endif; ?>
															</div>
															<div class="product-review__top-container">
																<div class="product-review__top__title">
																	<?php if (!empty($item['companyName'])) : ?>
																		<?= $item['companyName'] ?>
																	<?php endif; ?>
																</div>

																<div class="product-review__top__subtitle"><?= $item['reviewProps']['FIO']['VALUE'] ?></div>
															</div>
															<div class="product-review__top__info">
																<div class="product-review__top__rating">
																	<div class="product-review__top__stars">
																		<? for ($i = 1; $i < 6; $i++) {
																			if ($i <= $item['reviewProps']['SCORE']['VALUE']) { ?>
																				<div class="star checked"></div>
																			<? } else { ?>
																				<div class="star"></div>
																		<? }
																		} ?>
																	</div>
																</div>
																<div class="product-review__top__date"><?= FormatDate("d F, Y", MakeTimeStamp($item['arElement']['DATE_CREATE'])) ?></div>
															</div>
														</div>
														<div class="product-review__text">
															<? if (!empty($item['reviewProps']['COMMENT']['VALUE'])) { ?>
																<?= $item['reviewProps']['COMMENT']['VALUE']['TEXT'] ?>
															<? } ?>
														</div>

														<?
														$otvetFilters = array(
															'IBLOCK_ID' => 23,
															'ACTIVE' => 'Y',
															'PROPERTY_OTZIV' => $item['arFields']['ID'],
														);

														$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $otvetFilters, false, false, array('ID', "IBLOCK_ID", 'NAME', 'DETAIL_PICTURE', 'CODE', 'DATE_CREATE', 'PROPERTY_dolj', 'PROPERTY_COMP', 'PROPERTY_COMMENT'));
														while ($otvetElement = $dbElements->GetNext()) {
															$otvet = $otvetElement;
														}
														if (!empty($otvet['ID'])) { ?>
															<div class="product-review__bottom">
																<div class="product-review__open underline">Смотреть ответ поставщика</div>
																<div class="product-review__bottom__info">
																	<div class="product-review__bottom__like">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5 9V21H1V9H5ZM9 21C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V9C7 8.45 7.22 7.95 7.59 7.59L14.17 1L15.23 2.06C15.5 2.33 15.67 2.7 15.67 3.11L15.64 3.43L14.69 8H21C21.5304 8 22.0391 8.21071 22.4142 8.58579C22.7893 8.96086 23 9.46957 23 10V12C23 12.26 22.95 12.5 22.86 12.73L19.84 19.78C19.54 20.5 18.83 21 18 21H9ZM9 19H18.03L21 12V10H12.21L13.34 4.68L9 9.03V19Z" fill="#7C9DA8" />
																		</svg>
																	</div><span><?= $item['reviewProps']['LIKE']['VALUE'] ?></span>
																	<div class="product-review__bottom__dislike">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M19 15V3H23V15H19ZM15 3C15.5304 3 16.0391 3.21071 16.4142 3.58579C16.7893 3.96086 17 4.46957 17 5V15C17 15.55 16.78 16.05 16.41 16.41L9.83 23L8.77 21.94C8.5 21.67 8.33 21.3 8.33 20.88L8.36 20.57L9.31 16H3C2.46957 16 1.96086 15.7893 1.58579 15.4142C1.21071 15.0391 1 14.5304 1 14V12C1 11.74 1.05 11.5 1.14 11.27L4.16 4.22C4.46 3.5 5.17 3 6 3H15ZM15 5H5.97L3 12V14H11.78L10.65 19.32L15 14.97V5Z" fill="#E33046" />
																		</svg>
																	</div><span><?= $item['reviewProps']['DISLIKE']['VALUE'] ?></span>
																</div>
															</div>
														<? } ?>
													</div>
													<? if (!empty($otvet['ID'])) { ?>
														<div class="product-review__answer">
															<?
															$otvetFilters = array(
																'IBLOCK_ID' => 23,
																'ACTIVE' => 'Y',
																'PROPERTY_OTZIV' => $item['arFields']['ID'],
															);

															$dbElements = CIBlockElement::GetList(array("SORT" => "ASC"), $otvetFilters, false, false, array('ID', "IBLOCK_ID", 'NAME', 'DETAIL_PICTURE', 'CODE', 'DATE_CREATE', 'PROPERTY_dolj', 'PROPERTY_COMP', 'PROPERTY_COMMENT'));

															$otvet = "";
															$dolj = "";
															$companyName = '';
															while ($otvetElement = $dbElements->GetNext()) {
																$otvet = $otvetElement['PROPERTY_COMMENT_VALUE']['TEXT'];
																$dolj = $otvetElement['PROPERTY_DOLJ_VALUE'];
																$formattedDate = FormatDate("j F, Y в H:i", MakeTimeStamp($otvetElement['DATE_CREATE']));


																$companyId = $otvetElement['PROPERTY_COMP_VALUE'];
																if ($companyId > 0) {
																	$companyElement = CIBlockElement::GetByID($companyId);

																	$ar_res = $companyElement->GetNextElement();
																	$compFields = $ar_res->GetFields();
																	$compProps = $ar_res->GetProperties();

																	$companyName = $compProps['comp']['VALUE'];
																}
															}
															?>
															<div class="product-review__answer-title">Ответ поставщикка:</div>
															<div class="product-review__answer-text"><?= $otvet ?></div>
															<div class="product-review__answer-info">
																<? if (!empty($companyName)) : ?>
																	<span><?= $companyName ?></span>
																<? endif; ?>
																<? if (!empty($dolj)) : ?>
																	<span><?= $dolj ?></span>
																<? endif; ?>
																<? if (!empty($formattedDate)) : ?>
																	<span><?= $formattedDate ?></span>
																<? endif; ?>
															</div>
														</div>
													<? } ?>
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
						</div><a class="btn" href="#">Смотреть все</a>
					</div>
					<div class="section__title title_swiper">Вас также могут заинтересовать</div>
					<div class="swiper_shadow">
						<div class="swiper_grid_container">
							<div class="swiper swiper_products-category swiper_products-category-no-grid">
								<div class="swiper-wrapper swiper-row-column">
									<?
									$items = CIBlockElement::GetList(
										array(),
										array('IBLOCK_ID' => 8, 'ACTIVE' => 'Y', 'IBLOCK_SECTION_ID' => $arResult['IBLOCK_SECTION_ID']),
										false,
										array(),
										array('ID', 'CODE', 'NAME', 'PREVIEW_PICTURE', 'IBLOCK_SECTION_ID', 'DETAIL_PAGE_URL', 'PREVIEW_TEXT', 'PROPERTY_COMP_ID')
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

												$companyId = $mat_item['PROPERTY_COMP_ID_VALUE'];
												if ($companyId > 0) {
													$companyElement = CIBlockElement::GetByID($companyId);

													$ar_res = $companyElement->GetNextElement();
													$compFields = $ar_res->GetFields();
													$compProps = $ar_res->GetProperties();

													$companyName = $compProps['comp']['VALUE'];
												}
											?>
												<div class="slide">
													<div class="product-category gradient_border">
														<div class="product-category__img"><img src="<?= CFile::GetPath($mat_item['PREVIEW_PICTURE']) ?>" alt="Продукт"></div>
														<div class="product-category__vendor"><img src="<?= CFile::GetPath($compFields['PREVIEW_PICTURE']) ?>" alt="Поставщик"></div>
														<div class="product-category__name"><?= $companyName ?></div>
														<div class="product-category__title"><?= explode('--', $mat_item['NAME'])[0] ?></div>
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
		</div>
	</section>
	<section class="section other_product">
		<div class="container">
			<div class="section__title">Молоко сухое цельное Denmilk</div>
			<div class="table">
				<div class="thead">
					<div class="tr">
						<div class="th photo"></div>
						<div class="th name">Название</div>
						<div class="th subcat">Подкатегория</div>
						<div class="th packaging">Тип упаковки</div>
						<div class="th date">Срок годности</div>
						<div class="th watch"></div>
					</div>
				</div>
			</div>
			<div class="swiper_shadow tbody">
				<div class="swiper swiper_column_line">
					<div class="swiper_control">
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
						<div class="swiper-pagination"></div>
					</div>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="tr gradient_border">
								<div class="td photo"><img src="<?= SITE_TEMPLATE_PATH ?>/images/product_creation/card01.jpg" alt=""></div>
								<div class="td name"><span>Пищевая промышленность</span>Аскорбил пальминат</div>
								<div class="td subcat"><span class="mobile">Подкатегория</span>Молочные продукты</div>
								<div class="td packaging"><span class="mobile">Типо упаковки</span>Коробка</div>
								<div class="td date"><span class="mobile">Срок годности</span>09.01.2023</div>
								<div class="td watch underline">Смотреть</div>
							</div>
							<div class="tr gradient_border">
								<div class="td photo"><img src="<?= SITE_TEMPLATE_PATH ?>/images/product_creation/card01.jpg" alt=""></div>
								<div class="td name"><span>Пищевая промышленность</span>Аскорбил пальминат</div>
								<div class="td subcat"><span class="mobile">Подкатегория</span>Молочные продукты</div>
								<div class="td packaging"><span class="mobile">Типо упаковки</span>Коробка</div>
								<div class="td date"><span class="mobile">Срок годности</span>09.01.2023</div>
								<div class="td watch underline">Смотреть</div>
							</div>
							<div class="tr gradient_border">
								<div class="td photo"><img src="<?= SITE_TEMPLATE_PATH ?>/images/product_creation/card01.jpg" alt=""></div>
								<div class="td name"><span>Пищевая промышленность</span>Аскорбил пальминат</div>
								<div class="td subcat"><span class="mobile">Подкатегория</span>Молочные продукты</div>
								<div class="td packaging"><span class="mobile">Типо упаковки</span>Коробка</div>
								<div class="td date"><span class="mobile">Срок годности</span>09.01.2023</div>
								<div class="td watch underline">Смотреть</div>
							</div>
							<div class="tr gradient_border">
								<div class="td photo"><img src="<?= SITE_TEMPLATE_PATH ?>/images/product_creation/card01.jpg" alt=""></div>
								<div class="td name"><span>Пищевая промышленность</span>Аскорбил пальминат</div>
								<div class="td subcat"><span class="mobile">Подкатегория</span>Молочные продукты</div>
								<div class="td packaging"><span class="mobile">Типо упаковки</span>Коробка</div>
								<div class="td date"><span class="mobile">Срок годности</span>09.01.2023</div>
								<div class="td watch underline">Смотреть</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="tr gradient_border">
								<div class="td photo"><img src="<?= SITE_TEMPLATE_PATH ?>/images/product_creation/card01.jpg" alt=""></div>
								<div class="td name"><span>Пищевая промышленность</span>Аскорбил пальминат</div>
								<div class="td subcat"><span class="mobile">Подкатегория</span>Молочные продукты</div>
								<div class="td packaging"><span class="mobile">Типо упаковки</span>Коробка</div>
								<div class="td date"><span class="mobile">Срок годности</span>09.01.2023</div>
								<div class="td watch underline">Смотреть</div>
							</div>
							<div class="tr gradient_border">
								<div class="td photo"><img src="<?= SITE_TEMPLATE_PATH ?>/images/product_creation/card01.jpg" alt=""></div>
								<div class="td name"><span>Пищевая промышленность</span>Аскорбил пальминат</div>
								<div class="td subcat"><span class="mobile">Подкатегория</span>Молочные продукты</div>
								<div class="td packaging"><span class="mobile">Типо упаковки</span>Коробка</div>
								<div class="td date"><span class="mobile">Срок годности</span>09.01.2023</div>
								<div class="td watch underline">Смотреть</div>
							</div>
							<div class="tr gradient_border">
								<div class="td photo"><img src="<?= SITE_TEMPLATE_PATH ?>/images/product_creation/card01.jpg" alt=""></div>
								<div class="td name"><span>Пищевая промышленность</span>Аскорбил пальминат</div>
								<div class="td subcat"><span class="mobile">Подкатегория</span>Молочные продукты</div>
								<div class="td packaging"><span class="mobile">Типо упаковки</span>Коробка</div>
								<div class="td date"><span class="mobile">Срок годности</span>09.01.2023</div>
								<div class="td watch underline">Смотреть</div>
							</div>
							<div class="tr gradient_border">
								<div class="td photo"><img src="<?= SITE_TEMPLATE_PATH ?>/images/product_creation/card01.jpg" alt=""></div>
								<div class="td name"><span>Пищевая промышленность</span>Аскорбил пальминат</div>
								<div class="td subcat"><span class="mobile">Подкатегория</span>Молочные продукты</div>
								<div class="td packaging"><span class="mobile">Типо упаковки</span>Коробка</div>
								<div class="td date"><span class="mobile">Срок годности</span>09.01.2023</div>
								<div class="td watch underline">Смотреть</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="btn">Смотреть все</button>
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
