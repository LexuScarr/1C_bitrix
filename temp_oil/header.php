<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?= $APPLICATION->GetProperty('description') ?>">
    <title><?= $APPLICATION->ShowTitle() ?></title>

    <?
    $APPLICATION->ShowHead();
    ?>

    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/swiper-bundle.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/font/stylesheet.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
</head>

<div id="panel"><?= $APPLICATION->ShowPanel() ?></div>

<body>
    <?
    CModule::IncludeModule('iblock');
    $SUBresult = CIBlockElement::GetByID(11); // id элемента
    $ar_res = $SUBresult->GetNextElement();
    $arProps = $ar_res->GetProperties();
    ?>


    <?
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];
    $url = explode('/', $url);
    $url = $url[1];
    if ($url == "catalog" || $url == "article") {
        $white = 'white';
    } else {
        $white = "";
    }
    ?>
    <header class="header <?= $white ?>" id="header">
        <div class="container">
            <div class="header__burger mobile">
                <div class="header__burger-icon"></div>
            </div>
            <a href="/" class="header__logo">
                <img class="logo-white" src="<?= CFile::GetPath($arProps['logo']['VALUE']) ?>" alt="">
                <img class="logo-black" src="<?= CFile::GetPath($arProps['logo_black']['VALUE']) ?>" alt="">
            </a>
            <div class="header-container">
                <div class="header__list">
                    <a href="/catalog/" class="header__item">Каталог</a>
                    <a href="/about/" class="header__item">О нас</a>
                    <a href="/contact/" class="header__item">Контакты</a>
                    <a href="/article/" class="header__item">Статьи</a>
                    <a href="tel:<?= $arProps['phone']['VALUE'] ?>" class="header__item phone mobile">+<?= $arProps['phone']['VALUE'] ?></a>
                </div>
            </div>
            <a href="tel:<?= $arProps['phone']['VALUE'] ?>" class="header__phone desktop">+<?= $arProps['phone']['VALUE'] ?></a>
            <div class="header__phone mobile">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="&#208;&#184;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                        <path id="Vector" d="M25.6316 21.3849C25.6316 21.8049 25.5383 22.2366 25.34 22.6566C25.1416 23.0766 24.885 23.4733 24.5466 23.8466C23.975 24.4766 23.345 24.9316 22.6333 25.2233C21.9333 25.5149 21.175 25.6666 20.3583 25.6666C19.1683 25.6666 17.8966 25.3866 16.555 24.8149C15.2133 24.2433 13.8716 23.4733 12.5416 22.5049C11.2 21.5249 9.92831 20.4399 8.71498 19.2383C7.51331 18.0249 6.42831 16.7533 5.45998 15.4233C4.50331 14.0933 3.73331 12.7633 3.17331 11.4449C2.61331 10.1149 2.33331 8.84325 2.33331 7.62992C2.33331 6.83659 2.47331 6.07825 2.75331 5.37825C3.03331 4.66659 3.47665 4.01325 4.09498 3.42992C4.84165 2.69492 5.65831 2.33325 6.52165 2.33325C6.84831 2.33325 7.17498 2.40325 7.46665 2.54325C7.76998 2.68325 8.03831 2.89325 8.24831 3.19659L10.955 7.01159C11.165 7.30325 11.3166 7.57159 11.4216 7.82825C11.5266 8.07325 11.585 8.31825 11.585 8.53992C11.585 8.81992 11.5033 9.09992 11.34 9.36825C11.1883 9.63658 10.9666 9.91658 10.6866 10.1966L9.79998 11.1183C9.67165 11.2466 9.61331 11.3983 9.61331 11.5849C9.61331 11.6783 9.62498 11.7599 9.64831 11.8533C9.68331 11.9466 9.71831 12.0166 9.74165 12.0866C9.95165 12.4716 10.3133 12.9733 10.8266 13.5799C11.3516 14.1866 11.9116 14.8049 12.5183 15.4233C13.1483 16.0416 13.755 16.6133 14.3733 17.1383C14.98 17.6516 15.4816 18.0016 15.8783 18.2116C15.9366 18.2349 16.0066 18.2699 16.0883 18.3049C16.1816 18.3399 16.275 18.3516 16.38 18.3516C16.5783 18.3516 16.73 18.2816 16.8583 18.1533L17.745 17.2783C18.0366 16.9866 18.3166 16.7649 18.585 16.6249C18.8533 16.4616 19.1216 16.3799 19.4133 16.3799C19.635 16.3799 19.8683 16.4266 20.125 16.5316C20.3816 16.6366 20.65 16.7883 20.9416 16.9866L24.8033 19.7283C25.1066 19.9383 25.3166 20.1833 25.445 20.4749C25.5616 20.7666 25.6316 21.0583 25.6316 21.3849Z" stroke="white" stroke-miterlimit="10" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
