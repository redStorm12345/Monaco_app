<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'Accueil 1</title>
    <link rel="stylesheet" href="style1.1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<!--AUTO LAYAOUT PRINCIPALE-->
    <div class="lumiere1">
        <svg xmlns="http://www.w3.org/2000/svg" width="467" height="777" viewBox="0 0 467 777" fill="none">
            <g filter="url(#filter0_f_202_951)">
            <circle cx="78.5" cy="388.5" r="111.5" fill="#00FF38"/>
            </g>
            <defs>
            <filter id="filter0_f_202_951" x="-310" y="0" width="777" height="777" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="138.5" result="effect1_foregroundBlur_202_951"/>
            </filter>
            </defs>
        </svg>
    </div>
    <div class="lumiere2">
        <svg xmlns="http://www.w3.org/2000/svg" width="560" height="590" viewBox="0 0 560 590" fill="none">
            <g filter="url(#filter0_f_202_952)">
              <circle cx="388.5" cy="201.5" r="111.5" fill="#00FF38"/>
            </g>
            <defs>
              <filter id="filter0_f_202_952" x="0" y="-187" width="777" height="777" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="138.5" result="effect1_foregroundBlur_202_952"/>
              </filter>
            </defs>
          </svg>
    </div>
    <!--NAV BAR-->
    <nav class="menu">
        <a href="" class="Logo">
            <img src="etic img.png" alt="">
        </a>
        <ul class="navbar_coplet">
            <li> 
                <a href="{{ route('accueil') }}">
                    Accueil
                </a>
            </li>
            <li>
                <a href="{{ route('actu') }}">
                    Actualités
                </a>
            </li>
            <li>
                <a href="{{ route('etic-u') }}">
                    Etic University
                </a>
            </li>
            <li>
                <a href="{{ route('groupe-e') }}">
                    Groupe Etic
                </a>
            </li>
            <li>
                <a href="{{ route('n-formation') }}">
                    Nos Formation
                </a>
            </li>
            <li>
                <a href="{{ route('mon-cv') }}">
                    Mon CV
                </a>
            </li>
        </ul>
        <div class="navbar_Gauche">
                <button class="Connexion">Connexion</button>
                <button class="Inscription">Inscription</button>
        </div>
    </nav>
    <div class="layaout_principle">
<!--HEADER(HAUT DE PAGE)-->
        <header class="hautde_page">
            <div class="title_soustitle">
                <h1>L'excellence académique au service de l'innovation.</h1>
                <p class="sous_titre">Engagés dans l'excellence académique, notre université d'ingénierie se distingue par sa mission de former des esprits innovants et compétents, prêts à relever les défis technologiques du monde en constante évolution.</p>
            </div>
            <span class="img_header">
                <img src="img_titre.png" alt="">
            </span>
        </header>
<!--ZONE D'ENGAGEMENT-->
        <section class="Engagement">
            <div class="eng_droite">
                <h1 class="h1_white">Notre engagement envers l'excellence académique.</h1>
                <p class="sousTitre_white">Nous sommes fiers de partager ces statistiques qui illustrent l'engagement continu de notre université envers l'excellence et l'impact positif que nous avons sur la formation des ingénieurs de demain.</p>
                <button class="Inscription">Préinscription</button>
            </div>
            <div class="eng_gauche">
                <div class="case_icon">
                    <p class="Diplome">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                        <path d="M51.1918 0.590424H2.23871C1.39736 0.590424 0.715271 1.27252 0.715271 2.11386V41.2765C0.715271 42.1178 1.39736 42.7999 2.23871 42.7999H30.087V51.067C30.0871 51.3427 30.1619 51.6133 30.3036 51.8499C30.4453 52.0864 30.6485 52.2801 30.8916 52.4103C31.1347 52.5403 31.4086 52.602 31.684 52.5887C31.9594 52.5754 32.226 52.4876 32.4555 52.3347L36.5059 49.6346L40.5561 52.3347C40.7855 52.4877 41.0521 52.5756 41.3276 52.5889C41.603 52.6022 41.8769 52.5405 42.12 52.4104C42.3631 52.2802 42.5663 52.0865 42.708 51.85C42.8497 51.6134 42.9245 51.3428 42.9245 51.0671V42.8H51.1918C52.0332 42.8 52.7153 42.1179 52.7153 41.2766V2.11386C52.7152 1.27252 52.0332 0.590424 51.1918 0.590424ZM21.8199 33.0092H12.0293C11.188 33.0092 10.5059 32.3271 10.5059 31.4857C10.5059 30.6444 11.188 29.9623 12.0293 29.9623H21.8198C22.6611 29.9623 23.3432 30.6444 23.3432 31.4857C23.3432 32.3271 22.6612 33.0092 21.8199 33.0092ZM12.0293 23.2186C11.188 23.2186 10.5059 22.5365 10.5059 21.6951C10.5059 20.8538 11.188 20.1717 12.0293 20.1717H31.6105C32.4518 20.1717 33.1339 20.8538 33.1339 21.6951C33.1339 22.5365 32.4518 23.2186 31.6105 23.2186H12.0293ZM36.506 41.1681C32.9665 41.1681 30.0871 38.2886 30.0871 34.7495C30.0871 31.21 32.9666 28.3306 36.506 28.3306C40.0454 28.3306 42.9246 31.2101 42.9246 34.7495C42.9248 38.2887 40.0454 41.1681 36.506 41.1681ZM41.4012 13.4279H12.0293C11.188 13.4279 10.5059 12.7458 10.5059 11.9045C10.5059 11.0631 11.188 10.3811 12.0293 10.3811H41.4012C42.2426 10.3811 42.9246 11.0631 42.9246 11.9045C42.9246 12.7458 42.2426 13.4279 41.4012 13.4279Z" fill="white"/>
                        </svg>
                        +2250 Diplôme
                    </p>
                    <p class="partenaire">
                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="87" viewBox="0 0 86 87" fill="none">
                        <path d="M44.0581 58.1935L41.7503 61.4733V61.4744L41.4827 61.8562C41.142 62.3422 40.6627 62.6462 40.0556 62.5852C39.7462 62.5541 39.4226 62.424 39.1684 62.2449C38.9141 62.0658 38.6833 61.8063 38.5494 61.5258C38.3006 61.0037 38.4007 60.4738 38.704 60.0069V60.0028L42.2449 54.97L42.2467 54.9682C42.5871 54.4943 43.062 54.1984 43.6609 54.2582C43.9701 54.2891 44.2925 54.419 44.5468 54.5981C44.8011 54.7773 45.0323 55.0372 45.1658 55.318C45.4275 55.8679 45.3033 56.4235 44.9624 56.9081L44.0581 58.1935ZM41.131 53.6872C41.4713 53.2026 41.5953 52.6471 41.334 52.0974C41.2005 51.8168 40.9694 51.5564 40.7152 51.3777C40.4607 51.1989 40.1381 51.0691 39.8288 51.0382C39.2219 50.9776 38.7425 51.2816 38.4012 51.767L37.488 53.0657H37.3614V53.2437L34.9167 56.7196L34.1784 57.77C33.8364 58.2564 33.7193 58.8025 33.9747 59.3538C34.2405 59.9273 34.857 60.3613 35.4866 60.4173C36.0914 60.4711 36.5655 60.1768 36.9074 59.6908L37.4024 58.9875L40.885 54.0371L41.131 53.6872ZM32.2081 30.5375L27.4116 27.7679C27.2118 27.6523 26.985 27.5915 26.7541 27.5914C26.6357 27.5914 26.5191 27.6071 26.4048 27.6376C26.062 27.729 25.7735 27.9471 25.5958 28.2545L17.1776 42.8346C16.8118 43.4683 17.0316 44.2845 17.6649 44.6503L22.4614 47.4199C22.6126 47.5071 22.7796 47.5635 22.9527 47.5858C23.1259 47.6082 23.3017 47.596 23.4701 47.5501C23.8112 47.4581 24.1003 47.2394 24.2772 46.9333L32.6954 32.3532C33.0618 31.7185 32.8425 30.9038 32.2081 30.5375ZM36.1093 52.2633V52.157C36.4122 51.6899 36.5113 51.1604 36.2621 50.6388C36.1283 50.3587 35.897 50.0988 35.6428 49.9202C35.3884 49.7415 35.0657 49.6121 34.7566 49.5813C34.15 49.5208 33.6706 49.8244 33.3295 50.3095L30.8388 53.8511C30.4981 54.3356 30.3736 54.891 30.6354 55.4409C30.7694 55.7221 30.9997 55.9805 31.2541 56.1601C31.5073 56.3392 31.8314 56.469 32.1395 56.4999C32.7377 56.5599 33.2125 56.2657 33.5531 55.7923L33.5549 55.7905L36.0126 52.2968L36.1093 52.2633ZM76.188 42.8346L67.7698 28.2545C67.5924 27.9474 67.3034 27.7294 66.961 27.6376C66.847 27.607 66.7295 27.5914 66.6115 27.5912C66.3797 27.5912 66.1547 27.6519 65.9539 27.7678L61.1568 30.5374C61.0057 30.6246 60.8734 30.7408 60.7675 30.8793C60.6615 31.0178 60.584 31.1759 60.5393 31.3445C60.4936 31.5129 60.4816 31.6887 60.504 31.8618C60.5264 32.0349 60.5829 32.2018 60.67 32.353L69.0876 46.9332C69.2649 47.2403 69.5536 47.4584 69.8956 47.5501C70.0639 47.5958 70.2395 47.6078 70.4124 47.5855C70.5853 47.5631 70.7521 47.5069 70.9032 47.4199L75.7003 44.6508C76.3345 44.285 76.5539 43.4686 76.188 42.8346ZM45.3707 59.2485L45.3106 59.2779L43.1481 62.3547L43.1407 62.4206C43.0584 63.1432 43.5599 63.8027 44.1926 64.0961C44.9727 64.4578 45.7049 64.2335 46.2001 63.5294L47.4494 61.7534C47.9449 61.0489 47.9071 60.2866 47.3036 59.6749C46.812 59.1769 46.0266 58.9271 45.3707 59.2485ZM59.5422 34.089C57.5185 34.6599 55.4431 34.9034 53.3427 34.8385C51.7244 34.7884 50.1475 34.5555 48.5687 34.2079C47.4022 33.9512 46.1573 33.7639 44.9852 34.0914C44.089 34.3418 43.3238 34.8615 42.612 35.4455C42.1478 35.8263 41.7041 36.236 41.269 36.6494C40.7191 37.172 40.1792 37.706 39.6387 38.2382C39.2184 38.6527 38.797 39.066 38.3745 39.4782L38.3011 39.5498L38.0287 45.2698C38.0163 45.5293 38.0332 45.9771 38.2825 46.1345C38.497 46.2698 38.8503 46.2382 39.0874 46.1945C39.539 46.1114 39.9966 45.9151 40.3986 45.6979C41.2812 45.2212 42.0127 43.5444 42.4282 42.6565C42.6271 42.2317 42.8257 41.8049 43.0456 41.3904C43.1304 41.231 43.2652 41.1038 43.4292 41.0283C43.6266 40.9369 43.8236 40.8444 44.02 40.7508C45.008 40.2821 46.0476 39.7861 47.1373 39.615C48.1744 39.4522 49.1243 39.6135 50.0366 40.1416L63.0631 47.6828L66.5805 45.8869L59.7367 34.0342L59.5422 34.089ZM62.6228 49.3322L49.2112 41.5685C48.9154 41.3972 48.6006 41.2816 48.2616 41.2326C47.708 41.1526 47.1516 41.2616 46.6256 41.4327C45.9793 41.6429 45.3408 41.9483 44.7273 42.2398C44.6377 42.2823 44.5482 42.3249 44.4585 42.367L44.3762 42.4057L44.3358 42.487C44.1941 42.7748 44.0558 43.0642 43.9209 43.3552C43.3028 44.6758 42.5102 46.4322 41.182 47.1493C40.0996 47.7336 38.5485 48.2498 37.4052 47.5304C37.1213 47.3518 36.8875 47.1029 36.7199 46.8129C36.4367 46.3231 36.3563 45.7498 36.3829 45.1917L36.67 39.1466C36.6796 38.9372 36.7686 38.7393 36.919 38.5932C37.4424 38.0863 37.9622 37.5757 38.4811 37.0641C38.6972 36.851 38.914 36.6387 39.1304 36.4257L39.426 36.1346L33.6137 34.0585L26.6336 46.1506L30.6814 51.2078L31.9808 49.3612C32.7693 48.2406 33.9848 47.6982 35.3362 48.0095C35.548 48.0582 35.755 48.1271 35.9541 48.2138C36.178 48.3115 36.3915 48.4314 36.5913 48.5719C37.0319 48.8816 37.4052 49.2914 37.6648 49.7639L37.7989 50.008L38.0333 49.8576C39.1646 49.1324 40.5931 49.2764 41.6639 50.0299C42.438 50.5745 43.0003 51.4237 43.1092 52.3735L43.1367 52.6136L43.3782 52.604C44.1305 52.5739 44.882 52.8189 45.4953 53.2506C46.7747 54.1515 47.3395 55.7329 46.6806 57.2098L46.5558 57.4896L46.8521 57.5676C47.4709 57.7304 48.0292 58.0634 48.4777 58.5184C49.5126 59.5682 49.7373 61.0035 49.0386 62.3051L48.9197 62.5266L52.0127 64.3274C52.525 64.6256 53.0874 64.7021 53.6134 64.3942C53.8815 64.2373 54.1209 63.9848 54.2772 63.7162C54.4336 63.4475 54.5352 63.1149 54.5399 62.8041C54.5487 62.195 54.2062 61.7431 53.6944 61.4442L53.6335 61.4086H53.632L50.0805 59.3415C49.6875 59.1127 49.5561 58.6069 49.7844 58.2144C49.8388 58.1209 49.911 58.039 49.997 57.9735C50.083 57.9079 50.181 57.8599 50.2856 57.8322C50.3901 57.8046 50.4991 57.7978 50.6062 57.8122C50.7134 57.8266 50.8167 57.862 50.9101 57.9164L54.5163 60.0158C54.5214 60.0191 54.5267 60.0222 54.5321 60.0251L55.6539 60.6779C56.1665 60.9763 56.7293 61.0526 57.2556 60.7446C57.5233 60.588 57.7636 60.3349 57.9194 60.0663C58.0755 59.797 58.177 59.4655 58.1814 59.1545C58.1898 58.5569 57.8598 58.111 57.364 57.8121L57.3619 57.8101L52.9065 55.2155C52.514 54.9871 52.382 54.4799 52.6103 54.0879C52.8392 53.6952 53.3435 53.5632 53.7361 53.7918L58.2249 56.4043H58.226L59.5834 57.1961C60.0959 57.495 60.6531 57.5643 61.1793 57.2633C61.7282 56.9493 62.1066 56.2975 62.1091 55.6652C62.1114 55.0577 61.7773 54.6109 61.2637 54.3115L60.1169 53.6431L55.7333 51.0907C55.3406 50.862 55.2064 50.3567 55.4352 49.9636C55.6641 49.5709 56.1699 49.4366 56.563 49.6655L60.9465 52.2184C61.4591 52.517 62.0212 52.5924 62.5469 52.2832C62.8152 52.1256 63.0523 51.8738 63.2096 51.6052C63.3667 51.3369 63.4687 51.0019 63.4729 50.6913C63.4811 50.0812 63.1366 49.6297 62.6228 49.3322Z" fill="white"/>
                        </svg>06 Partenaire
                    </p>
                    <p class="etudiant">
                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="47" viewBox="0 0 46 47" fill="none">
                            <g clip-path="url(#clip0_103_1292)">
                            <path d="M35.3934 16.3049C35.4595 18.0856 38.015 18.0843 38.0804 16.3049V10.7657L35.3934 11.7478V16.3049ZM8.6453 8.22711L22.4558 13.2783C22.7537 13.3873 23.0805 13.3874 23.3785 13.2785L37.1982 8.22729C38.3671 7.8014 38.3666 6.12915 37.1983 5.70352L23.3832 0.652494C23.0853 0.543488 22.7584 0.543488 22.4605 0.652494L8.64548 5.70352C7.47679 6.12933 7.47724 7.80149 8.6453 8.22711ZM13.6641 29.8799C13.6641 27.3671 11.6197 25.3227 9.10685 25.3227C3.06931 25.5518 3.07101 34.2089 9.10694 34.4372C11.6197 34.4372 13.6641 32.3928 13.6641 29.8799ZM41.2942 29.8799C41.2942 27.3671 39.2498 25.3227 36.737 25.3227C30.6995 25.5518 30.7012 34.2089 36.7371 34.4372C39.2498 34.4372 41.2942 32.3928 41.2942 29.8799ZM18.3646 29.8799C18.3646 32.3928 20.409 34.4372 22.9219 34.4372C28.9594 34.208 28.9578 25.5509 22.9218 25.3227C20.409 25.3227 18.3646 27.3671 18.3646 29.8799ZM36.7369 34.4372C34.9376 34.4372 33.2584 34.9614 31.844 35.865C33.6319 37.9315 34.7142 40.6181 34.7142 43.5515V46.4297H44.5079C45.2498 46.4297 45.8514 45.8282 45.8514 45.0862V43.5515C45.8514 38.5259 41.7627 34.4372 36.7369 34.4372Z" fill="white"/>
                            <path d="M22.8455 34.4371C17.7827 34.4371 13.6638 38.5258 13.6638 43.5516V46.4297H32.0272V43.5515C32.0271 38.5258 27.9082 34.4371 22.8455 34.4371ZM9.10685 34.4371C4.08108 34.4371 -0.00762939 38.5258 -0.00762939 43.5515V45.0862C-0.00762939 45.8282 0.593912 46.4297 1.3359 46.4297H10.9768V43.5515C10.9768 40.5888 12.0808 37.8777 13.9008 35.803C12.5072 34.9377 10.8645 34.4371 9.10685 34.4371ZM31.4607 17.9909V13.1852L24.301 15.8022C23.4139 16.1286 22.4181 16.1286 21.5318 15.8014L14.3831 13.1868V17.9923C14.3831 18.2676 14.4677 18.5364 14.6254 18.762C14.7832 18.9877 15.0065 19.1595 15.2651 19.254L22.4559 21.8839C22.7538 21.9928 23.0806 21.9929 23.3785 21.884L30.5784 19.2528C30.837 19.1582 31.0604 18.9865 31.2182 18.7607C31.3761 18.535 31.4607 18.2663 31.4607 17.9909Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_103_1292">
                                <rect width="45.859" height="45.859" fill="white" transform="translate(-0.00762939 0.57074)"/>
                            </clipPath>
                            </defs>
                        </svg>+4000
                        Etudiant
                    </p>
                    <p class="Insertion">
                        <svg xmlns="http://www.w3.org/2000/svg" width="87" height="87" viewBox="0 0 87 87" fill="none">
                            <path d="M50.2147 30.9781C49.64 30.9781 49.0889 30.7462 48.6826 30.3333C48.2763 29.9204 48.048 29.3604 48.048 28.7765V25.4741H39.3813V28.7765C39.3813 29.3604 39.1531 29.9204 38.7467 30.3333C38.3404 30.7462 37.7893 30.9781 37.2147 30.9781C36.64 30.9781 36.0889 30.7462 35.6826 30.3333C35.2763 29.9204 35.048 29.3604 35.048 28.7765V25.4741C35.048 23.0457 36.9915 21.0709 39.3813 21.0709H48.048C50.4378 21.0709 52.3813 23.0457 52.3813 25.4741V28.7765C52.3813 29.3604 52.1531 29.9204 51.7467 30.3333C51.3404 30.7462 50.7893 30.9781 50.2147 30.9781ZM45.253 50.5284C44.2114 50.8922 43.0778 50.8766 42.0463 50.4844L17.7147 42.2504V59.0487C17.7147 62.3951 20.3797 65.1031 23.673 65.1031H63.7563C67.0497 65.1031 69.7147 62.3951 69.7147 59.0487V42.2504L45.253 50.5284Z" fill="white"/>
                            <path d="M69.7147 33.7301V38.7718L44.2347 47.4021C44.0613 47.4682 43.888 47.4902 43.7147 47.4902C43.5413 47.4902 43.368 47.4682 43.1947 47.4021L17.7147 38.7718V33.7301C17.7147 30.3836 20.3797 27.6757 23.673 27.6757H63.7563C67.0497 27.6757 69.7147 30.3836 69.7147 33.7301Z" fill="white"/>
                        </svg>61%
                        Insertion
                    </p>
                    <p class="ecole">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                            <g clip-path="url(#clip0_103_1285)">
                            <path d="M12.0123 25.9133H1.5745L8.6788 20.9008H16.7518L12.0123 25.9133ZM40.9876 25.9133H51.4254L44.3211 20.9008H36.248L40.9876 25.9133ZM20.8881 52.9296H25.4259V37.9912H20.8881V52.9296ZM27.1033 52.9296H31.6411V37.9912H27.1033V52.9296ZM52.3168 27.5907V52.9296H33.3186V36.3138H19.2107V52.9296H0.68309V27.5907H12.7348L19.6174 20.3118L25.6613 13.9198V0.929565H36.5347L36.1027 1.21089L31.2484 4.37182L36.1027 7.53285L36.5347 7.81408H27.3387V13.9197L33.3825 20.3117L40.2651 27.5906H52.3168V27.5907ZM8.71495 44.6108H3.9341V49.3916H8.71495V44.6108ZM8.71495 37.1525H3.9341V41.9334H8.71495V37.1525ZM16.3644 44.6108H11.5836V49.3916H16.3644V44.6108ZM16.3644 37.1525H11.5836V41.9334H16.3644V37.1525ZM30.4203 28.1644C30.4203 25.9993 28.6651 24.244 26.5 24.244C24.3349 24.244 22.5797 25.9993 22.5797 28.1644C22.5797 30.3295 24.3349 32.0848 26.5 32.0848C28.6651 32.0848 30.4203 30.3296 30.4203 28.1644ZM41.4163 44.6108H36.6355V49.3916H41.4163V44.6108ZM41.4163 37.1525H36.6355V41.9334H41.4163V37.1525ZM49.0658 44.6108H44.285V49.3916H49.0658V44.6108ZM49.0658 37.1525H44.285V41.9334H49.0658V37.1525Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_103_1285">
                                <rect width="52" height="52" fill="white" transform="translate(0.5 0.929565)"/>
                            </clipPath>
                            </defs>
                        </svg>08
                        Ecole
                    </p>
                    <p class="sepcialite">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                            <path d="M37.1546 23.8597L35.1687 27.8836L30.7281 28.5288L33.9413 31.661L33.1828 36.0836L37.1546 33.9955L41.1263 36.0836L40.3678 31.661L43.581 28.5288L39.1404 27.8836L37.1546 23.8597Z" fill="white"/>
                            <path d="M37.1546 16.9343C29.6776 16.9343 23.6164 22.9956 23.6164 30.4725C23.6164 37.9495 29.6776 44.0107 37.1546 44.0107C44.6315 44.0107 50.6928 37.9495 50.6928 30.4725C50.6928 22.9956 44.6315 16.9343 37.1546 16.9343ZM45.3953 30.1747L42.9949 32.5145L43.5615 35.8185C43.7152 36.7144 43.3538 37.6029 42.6184 38.1372C42.2029 38.4392 41.7167 38.5926 41.2272 38.5926C40.8418 38.5921 40.4624 38.4977 40.1217 38.3177L37.1546 36.7578L34.1875 38.3177C33.3829 38.7407 32.4262 38.6715 31.6907 38.1372C30.9554 37.6029 30.5939 36.7144 30.7476 35.8185L31.3143 32.5145L28.9138 30.1747C28.2629 29.5402 28.033 28.609 28.3139 27.7445C28.5948 26.88 29.3282 26.2617 30.2278 26.131L33.5451 25.6489L35.0286 22.6429C35.431 21.8278 36.2456 21.3214 37.1546 21.3214C38.0636 21.3214 38.8782 21.8278 39.2806 22.6429L40.7641 25.6489L44.0814 26.131C44.981 26.2617 45.7143 26.88 45.9953 27.7445C46.2762 28.609 46.0463 29.5402 45.3953 30.1747ZM43.3767 45.1986C41.7533 45.8852 40.0476 46.2925 38.2922 46.4153L41.2947 58.6617L44.6473 55.2764L48.8862 56.8005L45.7378 43.9588C44.9868 44.4372 44.197 44.852 43.3767 45.1986ZM30.9325 45.1986C30.1133 44.8524 29.3244 44.4382 28.5742 43.9606L25.4263 56.8005L29.6653 55.2764L33.0179 58.6617L36.0202 46.4156C34.2637 46.293 32.5568 45.8857 30.9325 45.1986Z" fill="white"/>
                        </svg>40
                        Spécialité
                    </p>
                </div>
                
            </div>
        </section>
<!--ZONE A propos de nous-->
        <section class="A_propos">
            <div class="apropos_droit">
                <img class="img1" src="femme  etic.png" alt="etudiante">
                <img class="img2" src="groupe etud.png" alt="etudiants">
                <img class="img3" src="un etudiant.png" alt="etudiant">
            </div>
            <div class="apropos_gauche">
                <h1 class="title_vert">A propos de Etic University</h1>
                <p class="sous_titre">Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque. Ut diam quam, semper iaculis condimentum ac, vestibulum eu nisl.</p>
                <button class="Inscription">Lire la suite</button>
            </div>
        </section>
<!--ZONE notre parcours-->
        <section class="Nos_parcours">
            <h2>Nos Parcours</h2>
            <p class="sous_titre">
                Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.
            </p>
            <div class="layaout_filiere">
                <div class="case_filiere1">
                    <img src="economie.png" alt="Economie-filere">
                    <svg class="deco" xmlns="http://www.w3.org/2000/svg" width="79" height="162" viewBox="0 0 79 162"    fill="none">
                        <path opacity="0.5" d="M0.333984 0C43.4122 0 78.334 34.9218 78.334 78V84C78.334 127.078 43.4122 162 0.333984 162L0.333984 0Z" fill="#32B54F"/>
                    </svg>
                    <p class="nm_filiere">Licence Science-Economique</p>
                    <p class="sous_titre_fliere">L'informatique est l'étude des moyens de traitement automatique de l'information, au sens large. L'un des principaux buts de l'informatique est la conception et la réalisation de systèmes opérationnels (ordinateurs, logiciels, programmes d'application).</p>
                </div>

                <div class="case_filiere2">
                    <img src="scienceinformatique.png" alt="Economie-filere">
                    <svg id="deco" xmlns="http://www.w3.org/2000/svg" width="79" height="162" viewBox="0 0 79 162"    fill="none">
                        <path opacity="0.5" d="M0.333984 0C43.4122 0 78.334 34.9218 78.334 78V84C78.334 127.078 43.4122 162 0.333984 162L0.333984 0Z" fill="#32B54F"/>
                    </svg>
                    <p class="nm_filiere">Licence Science-Informatique</p>
                    <p class="sous_titre_fliere">L'informatique est l'étude des moyens de traitement automatique de l'information, au sens large. L'un des principaux buts de l'informatique est la conception et la réalisation de systèmes opérationnels (ordinateurs, logiciels, programmes d'application).</p>
                </div>

                <div class="case_filiere3">
                    <img src="science juridique.png" alt="Economie-filere">
                    <svg id="deco" xmlns="http://www.w3.org/2000/svg" width="79" height="162" viewBox="0 0 79 162"    fill="none">
                        <path opacity="0.5" d="M0.333984 0C43.4122 0 78.334 34.9218 78.334 78V84C78.334 127.078 43.4122 162 0.333984 162L0.333984 0Z" fill="#32B54F"/>
                    </svg>
                    <p class="nm_filiere">Licence Science-Juridique</p>
                    <p class="sous_titre_fliere">L'informatique est l'étude des moyens de traitement automatique de l'information, au sens large. L'un des principaux buts de l'informatique est la conception et la réalisation de systèmes opérationnels (ordinateurs, logiciels, programmes d'application).</p>
                </div>

                <div class="case_filiere4">
                    <img src="science biologique.png" alt="Economie-filere">
                    <svg id="deco" xmlns="http://www.w3.org/2000/svg" width="79" height="162" viewBox="0 0 79 162"    fill="none">
                        <path opacity="0.5" d="M0.333984 0C43.4122 0 78.334 34.9218 78.334 78V84C78.334 127.078 43.4122 162 0.333984 162L0.333984 0Z" fill="#32B54F"/>
                    </svg>
                    <p class="nm_filiere">Licence Science-Biologique</p>
                    <p class="sous_titre_fliere">L'informatique est l'étude des moyens de traitement automatique de l'information, au sens large. L'un des principaux buts de l'informatique est la conception et la réalisation de systèmes opérationnels (ordinateurs, logiciels, programmes d'application).</p>
                </div>
            </div>
            <div class="point">
                <span class="point1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <path d="M0.5 8.0122C0.5 3.58718 4.08718 0 8.5122 0C12.9372 0 16.5244 3.58718 16.5244 8.0122C16.5244 12.4372 12.9372 16.0244 8.5122 16.0244C4.08718 16.0244 0.5 12.4372 0.5 8.0122Z" fill="#0246AC"/>
                      </svg>
                </span>
                <span class="point2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                        <path d="M0.987808 8.0122C0.987808 3.58718 4.57499 0 9 0C13.425 0 17.0122 3.58718 17.0122 8.0122C17.0122 12.4372 13.425 16.0244 9 16.0244C4.57499 16.0244 0.987808 12.4372 0.987808 8.0122Z" fill="#D9D9D9"/>
                    </svg>
                </span>
                <span class="point3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                        <path d="M0.987808 8.0122C0.987808 3.58718 4.57499 0 9 0C13.425 0 17.0122 3.58718 17.0122 8.0122C17.0122 12.4372 13.425 16.0244 9 16.0244C4.57499 16.0244 0.987808 12.4372 0.987808 8.0122Z" fill="#D9D9D9"/>
                    </svg>
                </span>
            </div>
        </section>
<!--ZONE nos actualite-->
        <section class="Nos_actualite">
            <div class="ActualitesEtplusInfo">
                <h2>Nos Actualité</h2>
                <button class="VoirPlus">Plus d'actualités</button>
            </div>
            <div class="LayaoutCase">
                <div class="Case1">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte">
                        <p class="date">29/12/2023</p>
                        <p class="Titre">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
                <div class="Case2">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte">
                        <p class="date">29/12/2023</p>
                        <p class="Titre">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
                <div class="Case3">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte">
                        <p class="date">29/12/2023</p>
                        <p class="Titre">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
            </div>
        </section>
<!--ZONE nos Evenement-->
        <section class="Nos_evenment">
            <div class="ActualitesEtplusInfo">
                <h2>Nos Evenement</h2>
                <button class="VoirPlus1">Vois Plus</button>
            </div>
            <div class="LayaoutCase1">
                <div class="Case11">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte1">
                        <p class="date1">29/12/2023</p>
                        <p class="Titre1">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre1">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
                <div class="Case12">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte1">
                        <p class="date1">29/12/2023</p>
                        <p class="Titre">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
                <div class="Case13">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte1">
                        <p class="date1">29/12/2023</p>
                        <p class="Titre1">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre1">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
            </div>
        </section>
<!--ZONE DE TEMOIGNAGE -->
        <section class="Nos_temoignage">
            <h2 class="tmg">Nos Témoignages</h2>
            <div class="frame_temoignage">
                <p class="txt">Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
                <div class="profile_client">
                    <img class="img_t" src="wade.png" alt="ancient etudiant">
                    <p class="nom">Wade Warren</p>
                </div>

            </div>
            <div class="frame_temoignage">
                <p class="txt">Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
                <div class="profile_client">
                    <img class="img_t" src="wade.png" alt="ancient etudiant">
                    <p class="nom">Wade Warren</p>
                </div>

            </div>
            <div class="frame_temoignage">
                <p class="txt">Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
                <div class="profile_client">
                    <img id="img_t" src="wade.png" alt="ancient etudiant">
                    <p class="nom">Wade Warren</p>
                </div>
            </div>
        </section>
<!--ZONE DE PARTENAIRE -->
        <section class="Partenaire">
            <h2>Nos Partenaire</h2>
            <div class="Logo_container">
                <img src="NGA.png" alt="">
                <img src="IPFMP.png" alt="">
                <img src="UPGC.png" alt="">
                <img src="UN4.png" alt="">
                <img src="UN5.png" alt="">
                <img src="UN6.png" alt="">
            </div>
        </section>
       
    </div><!--FIN LYT_PRINCIPALE -->
    <footer class="pied">

        <div class="pied1">

            <div class="icone">

                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="64" viewBox="0 0 49 64" fill="none" id="i1">
                    <path d="M43.1863 9.24672C43.5342 9.63542 43.8956 10.015 44.2284 10.4158C45.1207 11.4912 45.9979 12.5787 46.8857 13.6585C47.3244 14.1924 47.7841 14.7097 48.2061 15.2572C48.312 15.3948 48.3483 15.6172 48.3498 15.8017C48.374 19.6085 48.3997 23.4139 48.4027 27.2207C48.4088 34.3353 48.3967 41.4499 48.4027 48.5644C48.4027 49.3887 48.1804 50.0633 47.5679 50.6713C46.9629 51.2702 46.4895 52.0037 45.9616 52.6813C45.759 52.9415 45.5261 53.188 45.3778 53.4769C44.5853 55.012 43.82 56.5608 43.0366 58.102C42.418 59.3195 41.7737 60.5234 41.1687 61.747C40.9025 62.2854 40.6802 62.8495 40.4881 63.4182C40.3928 63.698 40.2431 63.819 39.9723 63.8266C39.7152 63.8341 39.4581 63.8326 39.201 63.8326C26.9365 63.8326 14.672 63.8326 2.40755 63.8326C1.92356 63.8326 1.43806 63.8145 0.955592 63.8387C0.583529 63.8583 0.495806 63.7026 0.503369 63.3592C0.527568 62.2415 0.530593 61.1238 0.532105 60.0061C0.532105 41.1685 0.532105 22.3325 0.532105 3.49486C0.532105 2.60403 0.515468 1.71319 0.515468 0.820847C0.512443 0.178054 0.680326 0.0147095 1.31858 0.0147095C15.3209 0.0283215 29.3232 0.0419336 43.3254 0.0570581C43.9743 0.0570581 44.6216 0.0615955 45.2704 0.0691578C45.399 0.0706702 45.5276 0.103944 45.7166 0.132681C45.5866 0.518356 45.5049 0.869245 45.3567 1.18837C44.7502 2.49513 44.124 3.79282 43.5024 5.09352C42.7235 6.72244 41.9415 8.34832 41.1672 9.97875C40.9932 10.3448 40.8148 10.7123 40.6938 11.0964C40.5758 11.473 40.3429 11.5789 39.9829 11.5774C36.7916 11.5683 33.6019 11.5653 30.4106 11.5608C29.5001 11.5608 29.3549 11.6999 29.3564 12.6089C29.3655 17.0192 29.3731 21.431 29.3882 25.8413C29.3912 26.9606 29.4003 26.9636 30.5195 26.9802C31.2757 26.9923 32.032 26.9802 32.7867 27.0029C32.9304 27.0074 33.0695 27.1179 33.2117 27.1784C33.1376 27.2963 33.0544 27.4113 32.9908 27.5353C32.8154 27.8832 32.6369 28.2295 32.4781 28.5849C32.1968 29.2111 31.9412 29.8478 31.6493 30.4694C31.5238 30.7387 31.3166 30.9686 31.1774 31.2317C30.4908 32.5324 29.789 33.8256 29.1507 35.149C28.9345 35.5982 28.7847 36.129 28.7832 36.6236C28.756 41.8507 28.7635 47.0762 28.7635 52.3032C28.7635 52.9642 28.7666 52.9672 29.4109 52.9672C32.3299 52.9717 35.2474 52.9778 38.1665 52.9657C38.3646 52.9657 38.6066 52.8568 38.7518 52.7191C39.2811 52.2155 39.7802 51.6786 40.2884 51.1522C41.2171 50.1903 42.1533 49.2344 43.0638 48.2544C43.1863 48.1228 43.2135 47.8657 43.215 47.666C43.2302 46.1853 43.2317 44.7047 43.2317 43.2255C43.2317 37.7277 43.2528 32.2284 43.2256 26.7307C43.1969 21.2193 43.1197 15.7064 43.0653 10.195C43.0623 9.89556 43.0653 9.5961 43.0653 9.29663C43.1061 9.2815 43.147 9.26638 43.1893 9.25126L43.1863 9.24672ZM11.1556 32.2526C11.1556 38.1754 11.1556 44.0966 11.1556 50.0194C11.1556 50.7287 11.1662 51.4396 11.1888 52.1489C11.2085 52.7524 11.2796 52.8159 11.8921 52.8174C15.1288 52.819 18.3654 52.8174 21.6021 52.8144C22.2933 52.8144 22.4007 52.7176 22.4022 52.0325C22.4097 47.545 22.4112 43.0591 22.4112 38.5717C22.4112 38.0272 22.316 37.9395 21.7745 37.9379C20.4133 37.9334 19.0521 37.9334 17.6909 37.9349C16.7032 37.9349 16.7305 37.9379 16.738 36.9518C16.7577 33.8694 16.7607 30.7886 16.7562 27.7062C16.7562 27.0453 16.735 27.0407 17.396 27.0392C18.8479 27.0362 20.2983 27.0316 21.7503 27.0286C22.3008 27.0286 22.4128 26.9182 22.4128 26.3662C22.4128 21.6987 22.4097 17.0298 22.4052 12.3624C22.4052 11.4972 22.3175 11.4156 21.4403 11.3914C21.3193 11.3884 21.1983 11.3929 21.0773 11.3914C20.1395 11.3884 19.2018 11.3959 18.2656 11.3808C16.3161 11.3505 14.3665 11.2961 12.4154 11.2764C11.6819 11.2689 11.1919 11.8058 11.1858 12.5393C11.1798 13.3243 11.1586 14.1093 11.1571 14.8957C11.1541 20.6824 11.1571 26.4675 11.1571 32.2541L11.1556 32.2526Z" fill="#037112"/>
                  </svg>
    
                  <svg xmlns="http://www.w3.org/2000/svg" width="72" height="12" viewBox="0 0 72 12" fill="none" id="i2">
                    <path d="M5.58692 4.58949C5.36149 5.68377 5.284 5.75187 4.27425 5.76126C3.22459 5.76831 2.39096 7.11385 2.84887 8.09776C2.92401 8.25979 3.15179 8.46174 3.30913 8.45939C4.0723 8.45 4.83548 8.3772 5.59632 8.33259C5.74191 8.32319 5.92272 8.29267 6.0237 8.36312C6.09649 8.41478 6.12232 8.68248 6.05892 8.74119C5.75365 9.03707 5.43429 9.49732 5.08205 9.53254C3.99012 9.64291 2.88174 9.5983 1.77807 9.5936C1.12291 9.5936 0.883388 9.15447 0.998452 8.60498C1.20745 7.59524 1.56908 6.61368 1.74989 5.59923C1.94714 4.47912 2.1397 3.33083 2.09978 2.20367C2.05986 1.05773 2.15614 0.834642 3.31617 0.820552C4.13101 0.811159 4.9435 0.707837 5.75835 0.644434C5.82879 0.639738 5.89924 0.618602 5.96734 0.627995C8.224 0.912132 10.4783 0.496498 12.735 0.611562C14.3036 0.691403 14.4234 0.836992 14.1251 2.35631C13.7025 4.5026 13.1295 6.62776 13.1013 8.83981C13.0919 9.50671 12.789 9.657 11.9695 9.57951C11.2861 9.51376 11.3472 9.08168 11.4341 8.61203C11.7792 6.77335 12.1362 4.93938 12.4626 3.09835C12.6575 1.98998 12.317 1.56964 11.4176 1.79742C11.1687 1.86083 10.8611 2.10739 10.7765 2.33987C10.5816 2.87996 10.5018 3.46467 10.382 4.03295C10.3492 4.19263 10.382 4.3805 10.3092 4.51434C9.56485 5.88102 9.58129 7.39564 9.48501 8.87738C9.43335 9.68518 8.8909 9.58655 8.38603 9.59594C7.79193 9.60769 7.65808 9.18265 7.74261 8.73649C7.95395 7.61168 8.20757 6.49391 8.48231 5.38319C8.68896 4.54487 8.99423 3.73003 9.17269 2.88701C9.2361 2.58644 9.15626 2.13322 8.959 1.93832C8.80167 1.78334 8.3555 1.95006 8.04554 1.91249C7.68391 1.87022 7.27531 1.60957 6.98883 1.71993C6.64833 1.84909 6.48395 2.16844 5.97204 1.95006C5.46716 1.73637 4.82609 1.78568 4.24842 1.81856C3.81635 1.84439 3.40775 3.15236 3.63553 3.98364C3.69893 4.21142 4.17798 4.35466 4.49264 4.47442C4.67815 4.54487 4.91063 4.48147 5.12197 4.49791C5.27695 4.512 5.42959 4.55896 5.58223 4.58949H5.58692Z" fill="#037112"/>
                    <path d="M65.7348 7.82961C65.8523 8.43311 65.2206 9.34658 64.5513 9.54148C64.0277 9.69412 63.5205 9.72229 63.1541 9.10471C62.816 8.53408 62.7056 8.09027 63.0203 7.42806C63.3068 6.81987 63.2833 6.06608 63.3866 5.37335C63.5275 4.4317 63.7036 3.49475 63.7764 2.54841C63.8234 1.93552 64.2038 1.8909 64.6335 1.86976C65.122 1.84628 65.291 2.16094 65.2769 2.59537C65.2699 2.82785 65.183 3.06502 65.2088 3.29045C65.2417 3.58868 65.338 4.12408 65.4249 4.12877C65.7771 4.14286 66.1411 4.00901 66.4886 3.89395C66.6084 3.85403 66.6765 3.68731 66.7939 3.61921C67.6745 3.0885 68.4729 3.55346 68.5621 4.67592C68.6068 5.2348 68.534 5.80307 68.5856 6.35961C68.6185 6.72593 68.7782 7.08052 68.9402 7.6394C69.9335 6.47937 70.5863 5.44144 70.5581 4.09825C70.5488 3.67321 70.5229 3.26227 71.1217 3.27167C71.6736 3.28106 71.9929 3.63565 71.9295 4.12643C71.8544 4.71584 71.7135 5.34517 71.4129 5.84769C70.746 6.96311 70.011 8.05034 69.2126 9.07418C68.3649 10.1638 67.6322 11.4083 66.1951 11.8827C65.3897 12.148 64.9106 11.8921 65.0351 11.197C65.0726 10.981 65.3098 10.7532 65.5141 10.624C65.7231 10.4925 66.0025 10.4761 66.2515 10.4127C67.2753 10.1591 67.7074 9.52974 67.5547 8.48947C67.4021 7.43041 67.2307 6.3737 67.0898 5.31229C67.0217 4.80507 66.7798 4.64069 66.2773 4.71819C64.9388 4.92248 64.9294 4.90839 64.6335 6.31734C64.5255 6.83395 64.4269 7.35996 64.3987 7.88597C64.3893 8.06208 64.5795 8.35092 64.7392 8.40493C64.8707 8.44955 65.0961 8.22881 65.2793 8.11845C65.4225 8.03391 65.5611 7.93998 65.7325 7.83196L65.7348 7.82961Z" fill="#037112"/>
                    <path d="M39.6249 8.49418C40.0006 8.17951 40.2589 7.96582 40.5853 7.69343C40.752 8.23117 40.7661 8.66326 40.219 8.94739C39.7799 9.17517 39.3525 9.47105 38.8828 9.57202C38.641 9.62368 38.3286 9.29728 38.0328 9.17752C37.8285 9.09533 37.5843 9.0061 37.387 9.05072C37.1757 9.09768 37.0066 9.31372 36.8046 9.42878C35.9874 9.88434 35.2571 9.52271 35.2994 8.61629C35.337 7.83902 35.553 7.07115 35.6869 6.29857C35.755 5.91111 35.8841 5.51895 35.8606 5.13619C35.8348 4.73464 35.4708 4.67359 35.2759 4.96947C34.6442 5.93225 34.0642 6.93025 33.4913 7.9306C33.2846 8.29458 33.1649 8.70552 32.9911 9.09063C32.7797 9.56028 32.3406 9.68709 31.9391 9.52271C31.7653 9.44991 31.6361 8.97087 31.6808 8.71022C31.8733 7.60889 32.1504 6.52166 32.3735 5.42503C32.4557 5.01643 32.498 4.59609 32.5238 4.18045C32.559 3.61452 32.869 3.28108 33.4044 3.29752C33.9374 3.31161 34.0666 3.71315 34.0243 4.20394C34.0055 4.44111 34.076 4.68298 34.1323 5.15263C34.494 4.77221 34.6865 4.5233 34.9237 4.32839C35.3111 4.00668 35.6939 3.64975 36.1424 3.43371C36.814 3.112 37.4199 3.5112 37.3541 4.25325C37.286 5.03521 37.0512 5.80074 36.915 6.57801C36.8187 7.12515 36.7694 7.67934 36.6825 8.37207C37.8872 7.85311 38.2277 7.03358 38.3333 6.0567C38.4014 5.42972 38.4766 4.80509 38.54 4.17811C38.6034 3.53469 39.0942 3.58635 39.5356 3.55582C40.0452 3.51825 40.1509 3.8611 40.0851 4.23681C39.9771 4.86614 39.8597 5.50486 39.6437 6.10132C39.3642 6.86684 39.4652 7.58776 39.6225 8.49653L39.6249 8.49418Z" fill="#037112"/>
                    <path d="M24.6195 7.52198C24.8708 6.08486 25.1291 4.64773 25.3686 3.20826C25.4673 2.61415 25.5823 2.013 25.58 1.41654C25.58 0.674498 26.1318 0.672149 26.5827 0.608746C27.0688 0.540647 27.4093 0.796602 27.3529 1.34609C27.3106 1.76173 27.2355 2.17503 27.1509 2.58362C26.8128 4.22739 26.4418 5.86412 26.1318 7.51259C26.0543 7.93057 26.0801 8.35091 26.6578 8.58339C27.2472 8.82056 27.4727 8.48711 27.8531 8.20062C28.844 7.45857 29.1493 6.46996 29.2714 5.29584C29.3583 4.45282 29.7317 3.64268 29.9289 2.8067C30.051 2.29243 30.0651 1.75469 30.1637 1.23572C30.2647 0.709717 30.8353 0.399753 31.413 0.667453C31.6361 0.770775 31.8333 1.28504 31.7793 1.56213C31.6431 2.26426 31.3308 2.93116 31.1383 3.62624C31.0044 4.11703 30.9481 4.63129 30.8635 5.13381C30.7203 5.98623 30.5512 6.83864 30.4526 7.69575C30.4174 8.00102 30.5371 8.32978 30.6123 8.63975C30.7273 9.11175 30.7414 9.51799 30.1896 9.74342C29.6777 9.95241 29.4029 9.74577 29.201 9.28552C28.9685 8.75716 28.581 8.81821 28.1536 9.05538C27.7521 9.27847 27.3458 9.4992 26.9279 9.68941C25.9252 10.1473 24.7839 9.4405 24.6876 8.30629C24.6665 8.05034 24.6853 7.79203 24.6853 7.53372C24.6618 7.52902 24.6407 7.52668 24.6172 7.52198H24.6195Z" fill="#037112"/>
                    <path d="M19.9487 7.61362C20.099 8.60223 19.4861 9.33489 18.5656 9.56267C18.1851 9.6566 17.8071 9.76227 17.4314 9.87264C16.3653 10.1873 14.9469 9.22217 14.6463 8.16076C14.1603 6.44655 14.5688 4.88731 15.2851 3.37269C15.8181 2.24553 16.7316 1.31093 17.8024 0.82484C18.5585 0.481996 19.6481 0.648728 20.524 0.86007C21.2473 1.03384 21.2285 2.36529 20.5757 2.8138C20.16 3.10264 19.9769 2.75745 19.9181 2.4874C19.8007 1.94731 19.5612 1.66787 18.9742 1.67491C18.3519 1.68196 17.8493 1.71718 17.4008 2.32537C16.3324 3.77659 15.9989 5.38279 16.1938 7.10405C16.2502 7.59719 16.5437 8.2547 16.9335 8.47073C17.5582 8.82062 18.3378 8.78539 18.9835 8.26643C19.2536 8.04804 19.5589 7.87193 19.9487 7.61128V7.61362Z" fill="#037112"/>
                    <path d="M46.3006 7.55486C45.9061 6.59442 46.3734 5.79368 46.8736 5.12208C47.5522 4.21331 48.4258 3.39612 49.6609 3.37029C50.0789 3.3609 50.6073 3.63798 50.9008 3.95265C51.2178 4.29314 50.9126 5.53302 50.5063 5.82655C49.7948 6.33847 49.1796 7.01476 48.2121 7.12278C48.0125 7.14391 47.7096 7.58774 47.726 7.81552C47.7471 8.08322 48.0172 8.47772 48.2637 8.55521C48.8438 8.74072 49.459 8.72428 50.0061 8.32039C50.1376 8.22411 50.3772 8.27107 50.5674 8.25229C50.5274 8.44015 50.5439 8.67732 50.4359 8.80648C49.6163 9.7716 47.5029 9.96181 46.6247 9.06008C46.2912 8.71959 46.256 8.08791 46.0869 7.59009C46.1574 7.57834 46.2302 7.5666 46.3006 7.55721V7.55486ZM47.9679 5.65513C47.9749 5.99562 48.1816 6.32673 48.5479 6.04024C48.9259 5.74436 49.1561 5.25123 49.4097 4.81915C49.4379 4.76984 49.1936 4.45048 49.0645 4.44109C48.6911 4.41761 47.989 5.20426 47.9679 5.65513Z" fill="#037112"/>
                    <path d="M43.3889 7.49613C43.6942 7.14155 44.1451 6.83158 44.2766 6.42064C44.5325 5.61754 45.1853 4.93655 45.0351 3.99021C44.9975 3.75538 45.1642 3.37967 45.3591 3.25286C45.5188 3.14719 45.9744 3.22703 46.0894 3.38201C46.2726 3.62858 46.4182 4.03952 46.343 4.31662C46.0589 5.35219 45.4343 6.22574 44.9083 7.15329C44.4269 8.00101 43.8093 8.63269 43.0743 9.20096C42.8747 9.35595 42.6375 9.47806 42.3956 9.5532C42.0528 9.66122 41.879 9.50858 41.8555 9.13286C41.7898 8.01745 41.7334 6.89733 41.6019 5.78896C41.5479 5.33575 41.2732 4.91307 41.1839 4.45985C41.137 4.22503 41.2027 3.79765 41.3483 3.7272C41.7193 3.54639 42.25 3.10492 42.5459 3.76243C42.8089 4.34714 42.9451 4.99995 43.0531 5.63633C43.1541 6.23748 43.1424 6.85741 43.1823 7.46796C43.2504 7.47735 43.3185 7.48909 43.3866 7.49849L43.3889 7.49613Z" fill="#037112"/>
                    <path d="M56.5155 9.59074C55.8838 9.64944 55.3296 9.38174 55.0549 8.72658C54.968 8.51994 55.1113 8.21701 55.1465 7.9587C55.3531 8.06437 55.5926 8.13247 55.7617 8.28276C56.1046 8.58569 56.391 9.04829 56.9335 8.77589C57.382 8.55281 57.5323 8.11604 57.4078 7.63699C57.3585 7.45148 57.2012 7.28241 57.065 7.13212C56.3488 6.3572 56.114 5.223 56.5625 4.34006C57.0274 3.42189 57.8986 3.24578 58.8262 3.21525C59.2019 3.20351 59.5001 3.29509 59.4461 3.75769C59.3921 4.225 59.1221 4.11698 58.7816 4.05123C58.5702 4.00896 58.1287 4.19212 58.1029 4.33301C58.0348 4.69229 58.0043 5.19951 58.2039 5.44138C58.6829 6.01905 58.9107 6.59672 58.8849 7.35286C58.8403 8.7031 57.9456 9.62361 56.5155 9.59074Z" fill="#037112"/>
                    <path d="M52.3549 9.56729C51.6246 9.61191 51.472 9.4311 51.5659 8.90744C51.843 7.3529 52.0544 5.78662 52.3174 4.22738C52.3502 4.03718 52.5193 3.75304 52.6649 3.72721C52.9021 3.68494 53.2684 3.7366 53.4022 3.89628C53.7122 4.26496 53.8766 4.22034 54.2547 3.95734C54.5787 3.73191 55.0672 3.71781 55.4875 3.6685C55.5767 3.65911 55.8068 3.94324 55.7787 4.02543C55.6918 4.28844 55.518 4.72521 55.3654 4.72991C53.8202 4.78157 53.4304 5.87351 53.158 7.07581C53.003 7.7568 52.9302 8.45892 52.7494 9.13522C52.6907 9.35125 52.4113 9.50859 52.3549 9.56729Z" fill="#037112"/>
                    <path d="M61.7592 8.61628C61.8484 8.39554 61.8977 8.14428 62.041 7.97051C62.1185 7.87658 62.358 7.9165 62.5224 7.89537C62.5059 8.04331 62.5435 8.2429 62.4636 8.33214C62.102 8.72899 61.7498 9.16342 61.306 9.44521C61.0641 9.59785 60.4489 9.60019 60.3432 9.44521C60.0497 9.00374 59.7538 8.43312 59.789 7.93529C59.8571 6.99129 60.1577 6.06373 60.3502 5.12678C60.3972 4.899 60.4418 4.65949 60.4136 4.43405C60.3455 3.87752 60.531 3.62156 61.1251 3.60277C61.7099 3.58399 61.9916 3.80707 61.9048 4.373C61.7827 5.1714 61.5854 5.95806 61.4562 6.75411C61.3717 7.27777 61.3506 7.81083 61.2989 8.33918C61.4516 8.43311 61.6042 8.52469 61.7568 8.61862L61.7592 8.61628Z" fill="#037112"/>
                    <path d="M60.797 2.42397C60.7876 1.07372 61.4287 0.451438 62.4901 0.683915C62.6521 0.719138 62.9057 1.08076 62.8611 1.17235C62.5863 1.75236 62.2764 2.32533 61.8936 2.83725C61.7832 2.98284 61.3488 3.00163 61.1304 2.9124C60.9449 2.83725 60.858 2.52259 60.797 2.42161V2.42397Z" fill="#037112"/>
                    <path d="M39.1576 2.02C39.2328 0.735511 39.5592 0.399712 40.6112 0.662715C40.7779 0.704984 41.0339 1.05017 40.9916 1.15584C40.7873 1.69124 40.5478 2.22664 40.2167 2.6916C40.0828 2.87946 39.686 2.8818 39.4089 2.96869C39.3243 2.65402 39.2398 2.33701 39.1553 2.02234L39.1576 2.02Z" fill="#037112"/>
                    <path d="M22.8067 5.48375C22.8772 5.48375 22.9523 5.46496 23.0157 5.48609C23.2928 5.58472 23.5676 5.69508 23.8423 5.80075C23.5816 6.08724 23.3727 6.4794 23.0509 6.63673C22.6705 6.82224 22.1915 6.83868 21.7524 6.86217C21.534 6.87391 21.1348 6.75884 21.1207 6.66021C21.0878 6.41834 21.1512 6.01445 21.3179 5.92052C21.7618 5.66691 22.2784 5.5401 22.7645 5.36163C22.7786 5.40155 22.795 5.44383 22.8091 5.48375H22.8067Z" fill="#037112"/>
                    <path d="M47.9678 5.6551C47.9889 5.20424 48.691 4.41758 49.0644 4.44107C49.1936 4.45046 49.4378 4.76982 49.4096 4.81913C49.1583 5.25121 48.9259 5.74434 48.5478 6.04022C48.1791 6.32905 47.9725 5.9956 47.9678 5.6551Z" fill="#037112"/>
                  </svg>  
    
            </div>

            <img src="publication/image 2.png" alt="picture" class="ic2">

        </div>

        <div class="pied2">

            <div class="pied201">

                <p class="fr5">Etic Deux plateaux, cocody</p>

                <p class="fr5">Etic Marcory</p>

                <p class="fr5">Etic Bondoukou</p>

                <p class="fr5">Etic Abobo</p>

            </div>

            <div class="pied202">

                <p class="fr5">Etic Korhogo</p>

                <p class="fr5">Etic Yopougon</p>

                <p class="fr5">Etic Odienné</p>

            </div>

            <div class="pied203">

                <p class="fr5">Découvrir le groupe Etic</p>

                <p class="fr5">Découvrir  Etic university</p>

                <p class="fr5">Nos politique</p>

            </div>

            <div class="pied204">

                <p class="fr5">Emplois du temp</p>

                <p class="fr5">Publication</p>

            </div>

        </div>

        <p class="line"></p>

        <div class="pied3">

            <div class="pied301">

                <p class="fr5">Suiver nous:</p>

                <div class="pied3011">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" id="pied30111">
                        <path d="M25.2909 13.1838C25.2909 6.33607 19.7385 0.78833 12.8955 0.78833C6.04774 0.78833 0.5 6.33607 0.5 13.1838C0.5 19.3691 5.03131 24.4977 10.9587 25.4266V16.7676H7.81099V13.1846H10.9587V10.4521C10.9587 7.3463 12.8064 5.63108 15.6387 5.63108C16.9953 5.63108 18.4153 5.87279 18.4153 5.87279V8.92285H16.8496C15.3126 8.92285 14.8322 9.87962 14.8322 10.8596V13.1838H18.2697L17.7173 16.7668H14.8322V25.4258C20.7549 24.497 25.2909 19.3683 25.2909 13.183V13.1838Z" fill="#1200E5"/>
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none" id="*pied3012">
                        <path d="M0.291016 2.51845C0.291016 1.56281 1.08512 0.78833 2.06492 0.78833H22.6724C23.6522 0.78833 24.4463 1.56281 24.4463 2.51845V23.2135C24.4463 24.1691 23.6522 24.9436 22.6724 24.9436H2.06492C1.08512 24.9436 0.291016 24.1691 0.291016 23.2135V2.51845ZM7.75348 21.0093V10.1017H4.12868V21.0093H7.75348ZM5.94183 8.61161C7.20545 8.61161 7.99201 7.77523 7.99201 6.7275C7.96936 5.65712 7.20696 4.84339 5.96599 4.84339C4.72501 4.84339 3.9143 5.65863 3.9143 6.7275C3.9143 7.77523 4.70086 8.61161 5.91768 8.61161H5.94183ZM13.3515 21.0093V14.9176C13.3515 14.5915 13.3756 14.2654 13.4722 14.033C13.7334 13.3823 14.3297 12.7074 15.3322 12.7074C16.6441 12.7074 17.168 13.7069 17.168 15.1743V21.0093H20.7928V14.7531C20.7928 11.4015 19.0053 9.84353 16.62 9.84353C14.6966 9.84353 13.8346 10.9003 13.3515 11.6446V11.6823H13.3273C13.3353 11.6697 13.3434 11.6572 13.3515 11.6446V10.1017H9.72817C9.77346 11.1253 9.72817 21.0093 9.72817 21.0093H13.3515Z" fill="#0047B1"/>
                      </svg>
                </div>

            </div>

            <p class="fr6">@Copyright Etic University</p>

        </div>

    </footer>
    
</body>