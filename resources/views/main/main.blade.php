<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/components/zero.css','resources/css/components/index.css','resources/css/header-footer.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <title>Document</title>
</head>

<body >
<div class='header' style="background-image: url('/storage/app/public/main-images/main.jpg');">
    <img class="glav-img" src="storage/main-images/main.png">
    <div class="container">
        <div class="header-line">
            <div class="menu">

                <a class="menu-item" href="@">О Компании</a>


                <a class="menu-item" href="#">Проекты</a>
                <a class="menu-item" href="@">Уход за садом</a>
                <a class="menu-item" href="@">Ландшафт</a>
                <a class="menu-item" href="@">Отзывы</a>


            </div>

            <div class="phone-number">
                <div class="phone-number-img">
                    <div class="phone-img">
                        <img src="{{url('storage/main-images/header1.png')}}" alt=""  >
                    </div>
                    <div class="cart-img">
                        <img src="{{url('storage/main-images/header2.png')}}" alt=""  >
                    </div>
                </div>

                <div class="header-text">
                    <div class="number">
                        тел.+7 (981) 98-50-04
                    </div>
                    <div class="cart">
                        Санкт-Петербург и ЛО
                    </div>
                </div>

            </div>

        </div>



        <div class="zaya">
            <div class="logotip">
                <img src="{{url('storage/main-images/logotip.png')}}" alt=""  >
            </div>

            <div class="rap">
                <div class="text-zaya">
                    Благоустройство и озеленение участков
                </div>
                <div class="img-sv">
                    <a href = '' onclick="go('https://www.instagram.com/?hl=ru'); return false;"><img src="{{url('storage/main-images/inst.png')}}" alt=""  ></a>
                    <a href = '' onclick="go('https://www.viber.com/ru/'); return false;"><img src="{{url('storage/main-images/viber.png')}}" alt=""  ></a>
                    <a href = '' onclick="go('https:https://mail.ru/'); return false;"><img src="{{url('storage/main-images/mail.png')}}" alt=""  ></a>
                </div>
            </div>

            <div class="knopka-header">
                <button class="knopka"><span>Оставить заявку</span>  </button>
            </div>
        </div>
    </div>
    <div class="preimuschestvo">
        <div class="preimuschestvo-line">
            <div class="preimuschestvo-item1">
                <img src="{{url('storage/main-images/rabot10let.png')}}" alt=""  >
                <div class="preimuschestvo-item">
                    Опыт работы более 10 лет
                </div>
            </div>
            <div class="preimuschestvo-item2">
                <img src="{{url('storage/main-images/garant.png')}}" alt=""  >
                <div class="preimuschestvo-item">
                    Гарантия на растения
                </div>
            </div>
            <div class="preimuschestvo-item3">
                <img src="{{url('storage/main-images/raste.png')}}" alt=""  >
                <div class="preimuschestvo-item">
                    Лучшие питомники
                </div>
            </div>
        </div>
    </div>
</div>
<div class="2str">
    <div class="img-drevo">
        <img src="{{url('storage/main-images/drevo.png')}}" alt=""  >
        <img src="{{url('storage/main-images/line.png')}}" alt=""  >
    </div>

    <div class="Company">
        <div class="company-text1">
            О КОМПАНИИ
        </div>
        <div class="company-text2">
            Relief Image - компания по уходу за садом и ландшафтом. Более 10 лет мы занимаемся благоустройством загородных участков, также имеем порядка 60 готовых работ в Ленинградской области и Санкт-Петербурге.
            К нам обращаются и доверяют уже более 20 постоянных клиентов за помощью по благоустройству и уходу участков.
            Наша компания отличается КАЧЕСТВОМ выполненных работ, ГАРАНТИЕЙ на растения, ЛУЧШИМИ питомниками для вашего участка и разработкой проекта ПОД КЛЮЧ.
            Обратившись к нашим специалистам, вы всегда будете чувствовать, как мы с большим вниманием относимся к вашим предпочтениям. Одной из ключевых задач нашей компании является то, что бы клиент всегда оставался доволен и наслаждался выполненной работой. Если вас интерисовали именно эти критерии при подборе спициалистов, то вы попали в нужные руки!
        </div>
    </div>

    <div class="kustbg">
        <img src="{{url('storage/main-images/kust.png')}}" alt=""  >
    </div>

    <div class="kustik">
        <img src="{{url('storage/main-images/PoloskaProecti.png')}}" alt=""  >
    </div>

    <div class="png-proecti">
        <div class="pravdinskoe">
            <<img src="{{url('storage/main-images/pravdinksoeee.png')}}" alt=""  >
        </div>

        <div class="two-pro">
            <div class="repino">
                <img src="{{url('storage/main-images/repinoooo.png')}}" alt=""  >
            </div>
            <div class="petergof">
                <img src="{{url('storage/main-images/petegroffffff.png')}}" alt=""  >
            </div>
        </div>
    </div>
</div>

<div class="str3">
    <div class="uhod">
        <img src="{{url('storage/main-images/uhodZaSadom.png')}}" alt=""  >
    </div>

    <div class="str3-4-block">
        <div class="str3-4-text">
            Каждый участок требует постоянный профессиональный уход, чтобы поддерживать ту красоту, которую планировал ландшафтный дизайнер.
            Это подразумевает большой комплекс работ, требующих много времени.
            Доверьтесь нашим опытным садоводам! И мы гарантируем качество работ, здоровый сад, а самое главное ваше сэкономленное время.
        </div>
    </div>




    <div class="codepen-container">
        <div id="icetab-container">
            <div class="icetab current-tab">СЕЗОННЫЕ ВЫЕЗДЫ</div>
            <div class="icetab">ОСЕНЬ</div>
            <div class="icetab">ВЕСНА</div>
            <div class="icetab">ЛЕТО</div>
        </div>

        <div id="icetab-content">
            <div class="tabcontent tab-active">
                <ul>
                    <li>Стоимость выезда рассчитывается индивидуально (взависиомсти от: площади участка, удалённости, сложности проводимых работ, количества задействованных людей).</li>
                </ul>
            </div>

            <div class="tabcontent">
                <ul>
                    <li>Обрезка плодовых (производится с ноября по март, до первого сокодвижения)</li>
                    <li>Санитарная обрезка роз (производтся с апреля по май, удаление повреждённых веток после зимы)</li>
                    <li>Внесение удобрения на все посадки (производится ранней весной по снегу)</li>
                    <li>Обработка от вредителей и болезней (устойчивая температура от +5)</li>
                    <li>>Уход за газоном (скарификация, аэрация, мульчирование, удобрение, производится после полного просыхания газона)</li>
                </ul>
            </div>
            <div class="tabcontent">
                <ul>
                    <li>Уход за цветниками (обрезка сухого, рыхление, прополка).</li>
                    <li>Уход за газоном (осенняя подкормка)</li>
                    <li>Стрижка газона</li>
                    <li>Деление растений (по мере необходимости)</li>
                    <li>Уборка листьев</li>
                    <li>Подготовка растений к зиме</li>
                </ul>
            </div>
            <div class="tabcontent">
                <ul>
                    <li>Уход за цветниками (обрезка сухого, рыхление, прополка).</li>
                    <li>Уход за газоном (осенняя подкормка)</li>
                    <li>Стрижка газона</li>
                    <li>Деление растений (по мере необходимости)</li>
                    <li>Уборка листьев</li>
                    <li>Подготовка растений к зиме</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="str4">
    <div class="landshaft">
        <img src="{{url('storage/main-images/ЛАНДШАФТ.png')}}" alt=""  >
    </div>

    <div class="str3-4-block">
        <div class="str3-4-text">
            Ландшафтный дизайн помогает обеспечить красивый вид вокруг вашего дома.
            Ведь участок должен выглядеть эстетично, иметь логическую структуру и радовать глаз.
            Чтобы избежать лишних разочарований, необходимо грамотно продумать и разработать дизайн-проект.
            Обладая теоретическими знаниями и практическим опытом, мы воплотим в реальность все ваши пожелания.
        </div>
    </div>

    <div class="landflex">
        <div class="landshaft-png">
            <div class="land-item">
                <div class="landshaft-text">
                    1. Ландшафтное проектирование участка
                </div>
                <img src="{{url('storage/main-images/L1.png')}}" alt=""  >
            </div>

            <div class="land-item">
                <div class="landshaft-text">
                    2. Подготовка участка
                </div>
                <img src="{{url('storage/main-images/L2.png')}}" alt=""  >
            </div>

            <div class="land-item">
                <div class="landshaft-text">
                    3. Создание дренажной системы
                </div>
                <img src="{{url('storage/main-images/L3.png')}}" alt=""  >
            </div>

            <div class="land-item">
                <div class="landshaft-text" >
                    4. Устройство дорожного покрытия
                </div>
                <img src="{{url('storage/main-images/L4.png')}}" alt=""  >
            </div>

            <div class="land-item">
                <div class="landshaft-text">
                    5. Альпийские горки, рокарии, альпинарии
                </div>
                <img src="{{url('storage/main-images/L5.png')}}" alt=""  >
            </div>

            <div class="land-item">
                <div class="landshaft-text">
                    6. Устройство ручьев, водоемов, каскадов
                </div>
                <img src="{{url('storage/main-images/L6.png')}}" alt=""  >
            </div>

            <div class="land-item">
                <div class="landshaft-text">
                    7. Строительство, маф
                </div>
                <img src="{{url('storage/main-images/L7.png')}}" alt=""  >
            </div>

            <div class="land-item">

                <div class="landshaft-text">
                    8. Подпорные стенки
                </div>
                <img src="{{url('storage/main-images/L8.png')}}" alt=""  >
            </div>

            <div class="land-item">
                <div class="landshaft-text">
                    9. Посадка растений
                </div>
                <img src="{{url('storage/main-images/L9.png')}}" alt=""  >
            </div>

            <div class="land-item1">
                <div class="landshaft-text">
                    10. Устройство газона
                </div>
                <img src="{{url('storage/main-images/L10.png')}}" alt=""  >
            </div>

        </div>
    </div>

    <div class="img-drevo2">
        <img src="{{url('storage/main-images/drevo.png')}}" alt=""  >
        <img src="{{url('storage/main-images/line.png')}}" alt=""  >
        <div class="text-drevo1">
            ОТЗЫВЫ
        </div>
    </div>

    <div class="otzivflex">
        <div class="otziv">
            <div class="otziv-png">
                <img src="{{url('storage/main-images/lud.png')}}" alt=""  >
            </div>
            <div class="otziv-png">
                <img src="{{url('storage/main-images/lud.png')}}" alt=""  >
            </div>
            <div class="otziv-png">
                <img src="{{url('storage/main-images/lud.png')}}" alt=""  >
            </div>

            <div class="otziv-name">
                Михаил
            </div>
            <div class="otziv-name">
                Настя
            </div>
            <div class="otziv-name">
                Саша
            </div>

            <div class="otziv-text">
                К компании relief image обратился в конце 2019 года, и летом 2020 все работы были закончены.
                Мы с семьей живём в пос.
                Правдинское озеро, хотели наш пустой и неровный участок превратить в уютный зеленый сад, с хорошим газоном, огородом и создать цветники у дома.
                Работой довольны, команда Надежды теперь занимается обслуживанием нашего участка.
            </div>
            <div class="otziv-text">
                В 2016 году понадобились специалисты по уходу за садом.
                С командой Надежды наш сад зацвёл новыми красками.
                В том же году мы купили дом в Репино. Хотели создать уютный уголок с зоной отдыха. И уже тогда мы понимали, кому доверить воплощение наших желаний.
                Работой довольны, все предпочтения были учтены. По сегодняшний день мы доверяем наш сад только специалистам relief image.
            </div>
            <div class="otziv-text">
                Наш участок находится в Петергофе.
                К Надежде обратились в 2016 году.
                Была необходимость в уходе за садом, растения болели, а также, было много насекомых.
                Работой команды довольны. Вот уже 4 года доверяем наш сад специалистам!
            </div>
        </div>
    </div>
    <!--календарь-->
    <div class="kalendar">
        <script >
            calendar();
        </script>
    </div>
    <footer class="footer">
        <div class="trava">
            <div class="footer2">
                <div class="footer1">
                    <div class="footer-text1">
                        Контакты
                    </div>
                    <div class="footer-img">
                        <a href = '' onclick="go('https://www.instagram.com/?hl=ru'); return false;"><img src="png/inst.png" alt=""></a>
                        <a href = '' onclick="go('https://www.viber.com/ru/'); return false;"><img src="png/viber.png" alt=""></a>
                        <a href = '' onclick="go('https:https://mail.ru/'); return false;"><img src="png/mail.png" alt=""></a>
                    </div>

                    <div class="footer-text2">
                        Телефон
                        <div class="footer-location">
                            <div class="footer-location-png">
                                <img src="{{url('storage/main-images/footer-number.png')}}" alt=""  >
                            </div>
                            +7 (981) 98-50-04
                        </div>
                    </div>
                    <div class="footer-text3">
                        Email
                        <div class="footer-location">
                            relief.image@mail.ru
                        </div>
                    </div>
                    <div class="footer-location">
                        <div class="footer-location-png">
                            <img src="png/footer-location.png" alt="@">
                        </div>
                        Санкт-Петербург и ЛО
                    </div>
                </div>
            </div>
        </div>
        <div class="razrabotano">
            Разработал - Жегздрин Максим Сергеевич
        </div>
        <!--количество времени проведенного на сайте-->
        <div class="time-tuta">
            Вы здесь уже:
            <span id='timer-counter' style='color:#af0606;'></span>
            .
        </div>
    </footer>
</div>

</body>
</html>
