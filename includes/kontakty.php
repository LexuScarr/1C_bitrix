<section class="section contacts">
    <?
    $SUBresultCon = CIBlockElement::GetByID(169); // id элемента
    $ar_res = $SUBresultCon->GetNextElement();
    $arPropsCon = $ar_res->GetProperties();
    ?>
    <div class="modal-box modal-request modal-contacts">
        <div class="modal-box__container">
            <button class="modal-box__close" type="button">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L16 16M1 16L16 1" stroke="#BBCBD0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div class="section__title center">
                Обратная связь
            </div>
            <div class="modal-request__like">
                <svg width="64" height="58" viewBox="0 0 64 58" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            <div class="section__text">
                Ваше сообщение успешно отправлено!
            </div>
            <div class="modal-request__btns">
                <button class="btn btn__close">
                    Вернуться
                </button>
            </div>
        </div>
    </div>
    <div class="lines">
        <img src="<?= SITE_TEMPLATE_PATH ?>/images/lines.svg" alt="lines.svg">
    </div>
    <div class="container">
        <div class="section__title">
            Контакты
        </div>
        <div class="contacts__us">
            <div class="contact__us gradient_border">
                <div class="contact__us-circle"></div>
                <div class="contact__us-icon">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/call.svg" alt="">
                </div>
                <div class="contact__us-inner">
                    <div class="contact__us-title">
                        Номер телефона
                    </div>
                    <div class="contact__us-text">
                        <?= $arPropsCon['PHONE']['VALUE'] ?>
                    </div>
                </div>
            </div>
            <div class="contact__us gradient_border">
                <div class="contact__us-circle"></div>
                <div class="contact__us-icon">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/mail.svg" alt="">
                </div>
                <div class="contact__us-inner">
                    <div class="contact__us-title">
                        Электронная почта
                    </div>
                    <div class="contact__us-text">
                        <?= $arPropsCon['EMAIL']['VALUE'] ?>
                    </div>
                </div>
            </div>
            <div class="contact__us gradient_border">
                <div class="contact__us-circle"></div>
                <div class="contact__us-icon">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/contacts/location.svg" alt="">
                </div>
                <div class="contact__us-inner">
                    <div class="contact__us-title">
                        Локация
                    </div>
                    <div class="contact__us-text">
                        <?= $arPropsCon['LOCATION']['VALUE'] ?>
                    </div>
                </div>
            </div>
            <div class="contact__us gradient_border">
                <form class="form form_login form_validation" id="form_kontakty">
                    <div class="contact__us-title">
                        Обратная связь
                    </div>
                    <label class="form__item">
                        <input class="input" type="text" name="NAME">
                        <span class="placeholder">Ваше имя</span>
                    </label>
                    <label class="form__item">
                        <input class="input" type="tel" name="PHONE">
                        <span class="placeholder">Номер телефона</span>
                    </label>
                    <label class="form__item">
                        <input class="input" type="email" name="EMAIL">
                        <span class="placeholder">E-mail</span>
                    </label>
                    <label class="form__item">
                        <textarea class="textarea" name="MESSAGE"></textarea>
                        <span class="placeholder">Сообщение</span>
                    </label>
                    <div class="form__bottom">
                        <div class="btn" style="cursor: pointer;" type="submit" id="SEND_KONTAKTY">
                            Отправить
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>