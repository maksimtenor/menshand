<?php
require_once (JPATH_BASE.'/ms_configuration.php');
$my_settings = [
	'alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Москва',
		'city_2' => 'Москве',
		'city_3' => 'Москвы',
		'city_4' => 'московского',
		'city_5' => 'московский',
		'city_6' => 'московских',
		'city_7' => 'московская',
		'city_8' => 'московские',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Логистический центр Славянский Мир, с17/6', // Адрес, который будет на сайте
		'address_2' => 'Московская область, деревня Сухарево, д.138,павильон №3(Строительный рынок ТУБ)', // Адресс, который будет на сайте 2
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => ' Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '07:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах МКАД - 3000 руб., за пределы МКАД - 3000 руб. + 70 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.6241439996817,37.469290365111725]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.61095577907175,37.487427957672125]', // Точка на карте

		'map_center' => '[55.624144, 37.464913]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.624144, 37.464913]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A97935855464f6274b8dd3699315a2d7d0803ce0d181b8f7d566cf2b414b2a924&amp;source=constructor" width="100%" height="438" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru, n.kopach@alta-west.ru, a.cherkasova@alta-west.ru, lagmetov@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '48807641',
		'google_count' => '',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//podolsk
	'podolsk.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Подольск',
		'city_2' => 'Подольске',
		'city_3' => 'Подольска',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'podolsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Лобачева, 14', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.438823, 37.573986]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.438823, 37.573986]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A04f0fa936ebc448966f77fe4201b3c3deebd27a2120304b62a9b961859670109&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	'aldan.alta-profil.net' => [
		'city_1' => 'Алдан',
		'city_2' => 'Алдане',
		'city_3' => 'Алдана',
		'city_reg' => 'Республика Саха Якутия',
		'main_id_attr_price' => 'Алдан',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'aldan.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. 50 Лет ВЛКСМ д. 27', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 08:30 - 18:00 </br> Сб 08:30 - 17:00, Вс - 08:30 - 15:00', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Алдан.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[58.618778, 125.395831]', // Центр карты по геокодеру яндекса
		'map_location' => '[58.618778, 125.395831]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad497887e2ec66e77f2d86d372dc8354e4ee44bbcf222711634d84bae6f3f7398&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'orenburg@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(3532)-48-67-25', // Телефон сайта
		'phone_call' => '73532486725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(67),
		'manager_moysklad_id' => array($tkacheva['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_orenburg_sklad, //id Склад в МойСклад
		'ms_group' => $ms_orenburg_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'aldan' // адрес из шаблона /templastes/jblank/partial
	],

	//balashiha
	'balashiha.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Балашиха',
		'city_2' => 'Балашихе',
		'city_3' => 'Балашихи',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'balashiha.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Объездное шоссе вл4А', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.797817, 37.898835]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.797817, 37.898835]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab28e0312d5ab88cb9b613f921f22b4bdd627f3272ec4f018e4c6c2e1799237b8&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//himki

	'himki.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Химки',
		'city_2' => 'Химках',
		'city_3' => 'Химок',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'himki.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Ленинградская, 16/3', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.888462, 37.439068]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.888462, 37.439068]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afcfbfa5ce54497f3858b11247c26fa7239591acf7b3362b689d27f5fb42fca4c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],




	//mytischi

	'mytischi.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Мытищи',
		'city_2' => 'Мытищах',
		'city_3' => 'Мытищ',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'mytischi.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Белобородова, д. 3', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.923377, 37.753469]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.923377, 37.753469]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A76b08bff597499e993aadb276b9353c5b3997a8e3b136af5d3710800d224bc82&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru, ', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//korolev

	'korolev.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Королев',
		'city_2' => 'Королеве',
		'city_3' => 'Королева',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'korolev.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ярославский пр-д, 1В', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.910039, 37.789914]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.910039, 37.789914]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad38297a903e0a97c8d9d8c3cb82016ec7236918132012038978f6f13b75855c0&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru, ', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//lyubertsy

	'lyubertsy.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Люберцы',
		'city_2' => 'Люберцах',
		'city_3' => 'Люберец',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'lyubertsy.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Птицефабрика, к. 20', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.645055, 37.916280]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.645055, 37.916280]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa85350338280d9f68d40fc8ba93c33757ebb209308c0ec4b34471f0a0e1f9d47&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],



	//krasnogorsk
	'krasnogorsk.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Красногорск',
		'city_2' => 'Красногорске',
		'city_3' => 'Красногорска',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'krasnogorsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Международная 16', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.822281, 37.387810]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.822281, 37.387810]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acef670a811fc850697553b77398108910b0fbac30048a4219736a0b693855b63&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//elektrostal

	'elektrostal.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Электросталь',
		'city_2' => 'Электростали',
		'city_3' => 'Электростали',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'elektrostal.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Рабочая, 35А', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.775454, 38.472688]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.775454, 38.472688]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A61bc54c92680107d23085a5807aa89299a213e46b88d3222b4ee721d36ef4fa1&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//kolomna

	'kolomna.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Коломна',
		'city_2' => 'Коломны',
		'city_3' => 'Коломне',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kolomna.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'пос. Радужный, 47Б.', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.140168, 38.731052]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.140168, 38.731052]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3deeb671f7797a20b54fb609acbbdcf29a62c97c4a48971be2408bf46232481e&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//domodedovo

	'domodedovo.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Домодедово',
		'city_2' => 'Домодедово',
		'city_3' => 'Домодедово',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'domodedovo.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Гагарина, д.45', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.450884, 37.743390]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.450884, 37.743390]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A428273baf16d9f9b23dfaa68d2a8a4e462778b0f880cad57edb49e7d34fe08d2&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//odintsovo

	'odintsovo.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Одинцово',
		'city_2' => 'Одинцово',
		'city_3' => 'Одинцово',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'odintsovo.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Южная ул., д. 8, стр. 10', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.660607, 37.264310]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.660607, 37.264310]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4aa3df88f9736d3ecfd11c883ea33760a5e12f28161186cd67031994968d3c00&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//serpuhov
	'serpuhov.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Серпухов',
		'city_2' => 'Серпухове',
		'city_3' => 'Серпухова',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'serpuhov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Северное ш., д. 2', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[54.942449, 37.410987]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.942449, 37.410987]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7f467d2dbb52eadd4050408c70e22ba06eebdde00f26091d22e44f4458aedd8e&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//schelkovo

	'schelkovo.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Щёлково',
		'city_2' => 'Щёлково',
		'city_3' => 'Щёлково',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'schelkovo.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Хотовская ул., д. 49, стр. 1', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.898387, 38.017987]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.898387, 38.017987]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A59641f141dd9ac1859c3e487fd6a0eeb1d73b54631a6c53896ad121c71185cd4&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//ramenskoye

	'ramenskoye.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Раменское',
		'city_2' => 'Раменском',
		'city_3' => 'Раменского',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'ramenskoye.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Десантная, 1', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.569209, 38.211844]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.569209, 38.211844]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aec34378fc3f4de6c4f335b8f99e52e751d79954d3cfebd31bcf7cae7f91b147c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//orehovo-zuyevo

	'orehovo-zuyevo.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Орехово-Зуево',
		'city_2' => 'Орехово-Зуево',
		'city_3' => 'Орехово-Зуево',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'orehovo-zuyevo.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Урицкого, 96с1', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.823388, 38.966590]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.823388, 38.966590]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab0182b4708ad1fb870e008bed6183cd976d478aa3d7b090ae0fee6a39d29f244&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//dolgoprudniy

	'dolgoprudniy.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Долгопрудный',
		'city_2' => 'Долгопрудном',
		'city_3' => 'Долгопрудного',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'dolgoprudniy.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => ' ул. Набережная д.29, к.1', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.962936, 37.525306]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.962936, 37.525306]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A706a818985c9fef872d7d97e387e54a4b1a02356d12979fa7746da35854240b7&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//reutov

	'reutov.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Реутов',
		'city_2' => 'Реутове',
		'city_3' => 'Реутова',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'reutov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Фабричная, 12', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.766694, 37.877653]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.766694, 37.877653]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A004ddd584d3545f59c147849a8d8f70869f6e9c1d341227ed66b52ab14a14ab5&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//pushkino
	'pushkino.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Пушкино',
		'city_2' => 'Пушкино',
		'city_3' => 'Пушкино',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'pushkino.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Чехова, 40', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[56.003895, 37.845035]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.003895, 37.845035]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A877ae61c56a56531a401b4ed257eeefcb94987509f6b8bc1f97f1f31d35bb420&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//zhukovskiy

	'zhukovskiy.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Жуковский',
		'city_2' => 'Жуковском',
		'city_3' => 'Жуковского',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'zhukovskiy.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Гагарина, 83', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.608760, 38.081399]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.608760, 38.081399]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa47f93e0a2ac001dd5a6d2a64bc8280e3fa9ec2541d062d3efb2eba9a469d663&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//noginsk

	// 	'noginsk.alta-profil.net' => [
	// 	'group_id' => 1,
	// 	'city_1' => 'Ногинск',
	// 	'city_2' => 'Ногинске',
	// 	'city_3' => 'Ногинска',
	// 	'city_reg' => 'Московская область',
	// 	'id_sklad'=> '18',
	// 	'company_logo'=> '/templates/jblank/images/inner/logo.png', // ссылка на лого
	// 	'company_name'=> 'Альта-Профиль', // название компании без кавычек
	// 	'company_yourname'=> 'ООО "Альта-Запад"', // юридическое название компании
	// 	'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
	// 	'company_site'=> 'noginsk.alta-profil.net', // сайт компании
	// 	'company_innkpp'=> 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
	// 	'address' => 'Ул. Электростальское ш., 1А', // Адрес, который будет на сайте
	// 	'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
	// 	'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
	// 	'address_day' => 'Пн-Вс', // Дни работы
	// 	'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
	//      'contact_time' => '08:00 - 22:00',
	// 	// Доставка
	// 	'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД', 
	// 	'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6', 
	// 	'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.', 
	// 	'map_center' => '[55.834886, 38.429892]', // Центр карты по геокодеру яндекса
	// 	'map_location' => '[55.834886, 38.429892]', // Точка на карте
	// 	'map_contact' => '<div id="wrapMap"><iframe style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A6a505d0d498da96be0fcadb21b77ff207fe392da342a03257c943d26c8ebc231&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
	// 	'email' => 'msk@alta-profil.net', // Почта сайта
	// 	'email_order' => 'e.chmirova@alta-west.ru, msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru, m.svinareva@alta-west.ru', // Почта для получения уведомлений о заказах
	// 	'phone' => '8-(499)-350-13-00', // Телефон сайта
	// 	'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
	// 	'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
	// 	'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
	// 	'yandex_count' => '75807208',
	// 	'vk'=>'https://vk.com/altaprofilsalon',
	// 	'ok'=>'https://www.ok.ru/group/55254009905245',
	// 	'facebook'=>'https://www.facebook.com/altaprofilsalon/',
	// 	'instagram'=>'https://www.instagram.com/altaprofilsalon/',
	// 	'affiliat' => true,
	// 	'sale_prod'=> '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
	// 	'manager_bitrix_id' => array(39,3065,8199),		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$chmiyrova_evgeniya['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
	//	'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
	//	'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
	// 	'scripts_file'=> 'msk' // адрес из шаблона /templastes/jblank/partial
	// ],

	//sergiyev-posad

	'sergiyev-posad.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Сергиев Посад',
		'city_2' => 'Сергиеве Посаде',
		'city_3' => 'Сергиева Посада',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'sergiyev-posad.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Фабричная , 7', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[56.285918, 38.116137]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.285918, 38.116137]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa7299baf243ff39ae084c4100c82f3c3a4d283a4ae008489d5ef08afb3fd388c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//voskresensk

	'voskresensk.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Воскресенск',
		'city_2' => 'Воскресенске',
		'city_3' => 'Воскресенска',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'voskresensk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Советская, 2Ж', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.316134, 38.688454]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.316134, 38.688454]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A12f8c96ba0ea2faa6ecd9986a1f5d01809e3b4f7dacf2625c2ce2bc85c29b026&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//lobnya

	'lobnya.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Лобня',
		'city_2' => 'Лобне',
		'city_3' => 'Лобни',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'lobnya.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Крупской, 12а', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[56.010241, 37.480004]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.010241, 37.480004]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A736b7e6d01ddc5da9c8f1da75d1fbfdc624e0a290ed36b1440b39c3cf73159b0&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//ivanteevka

	'ivanteevka.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Ивантеевка',
		'city_2' => 'Ивантеевке',
		'city_3' => 'Ивантеевки',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'ivanteevka.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Хлебозаводская , 31/1', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.970831, 37.930824]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.970831, 37.930824]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6691248e99865adeec76722cb4c3f87b9721b1faaf594f2b6dd5c0b7f102f6bf&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//klin

	'klin.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Клин',
		'city_2' => 'Клине',
		'city_3' => 'Клина',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'klin.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Ленина, 50', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[56.338005, 36.724575]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.338005, 36.724575]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A974f11060bb37da8f0e1b252669ead2541b2d690f7bbe77a59b1724ab3672517&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//vidnoye
	'vidnoye.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Видное',
		'city_2' => 'Видном',
		'city_3' => 'Видного',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'vidnoye.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => '28 км Каширского шоссе', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.550814, 37.774499]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.550814, 37.774499]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afd966e691eeed78a385679aed593a0da8fafdd36503953ac11659ca1d9e2dba8&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//dubna

	'dubna.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Дубна',
		'city_2' => 'Дубне',
		'city_3' => 'Дубны',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'dubna.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Мира, дом 28', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[56.750394, 37.202218]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.750394, 37.202218]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96a248532bbc4e1c64048dc3c39ec48694a4b3231bbf5d92c273be87cd04624b&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],


	//chehov

	'chehov.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Чехов',
		'city_2' => 'Чехове',
		'city_3' => 'Чехова',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'chehov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. 8 Марта, 2', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[55.158796, 37.432519]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.158796, 37.432519]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1cb15fae9a301acfd297241b6d6ccee70ce16f3a266bbbf477586b2dd53bc908&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],

	//dmitrov

	'dmitrov.alta-profil.net' => [
		'group_id' => 1,
		'city_1' => 'Дмитров',
		'city_2' => 'Дмитрове',
		'city_3' => 'Дмитрова',
		'city_reg' => 'Московская область',
		'id_sklad' => '18',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'dmitrov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. 2-я Левонабережная, влад. №20', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(Пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Доставка - 3000 руб. + 70 руб./км. от МКАД',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.',
		'map_center' => '[56.360965, 37.500082]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.360965, 37.500082]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A24330805f0c4c0c2939a0f337cdbd64ca3f3132038fda937df9392c30e8c2680&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'msk@alta-profil.net', // Почта сайта
		'email_order' => 'msk@alta-profil.net, a.shevchenko@alta-west.ru, agorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(499)-350-13-00', // Телефон сайта
		'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75807208',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'affiliat' => true,
		'sale_prod' => '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(39, 8199),
		'manager_moysklad_id' => array($gorbacheva_alena['ms_id'],$lagmetov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'msk' // адрес из шаблона /templastes/jblank/partial
	],





	'pskov.alta-profil.net' => [
		'alias' => false, // Если домен является алиасом
		'reg_iso' => 'RU-PSK',
		'city_1' => 'Псков',
		'city_2' => 'Пскове',
		'city_3' => 'Пскова',
		'city_4' => 'псковского',
		'city_5' => 'псковский',
		'city_6' => 'псковских',
		'city_7' => 'псковская',
		'city_8' => 'псковские',
		'city_reg' => 'Псковская область',
		'id_sklad' => '',
		'city_mini' => 'Псков, Великие Луки, Остров, Невель',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'pskov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Леона Поземского, 110Д', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: 09:00 - 18:00', // Время работы
		'delivery_priceincity' => '',
		'delivery_sklad_cart' => 'Вы можете забрать товар самостоятельно. Ближайший к вам склад находится по адресу: Москва, Логистический центр Славянский Мир, с17.', // Стоимость доставки в пределах города
		'delivery_priceincity_cart' => 'Доставка оплачивается отдельно и расчитывается индивидуально в зависимости от объема.', // Стоимость доставки в пределах города
		'map_center' => '[55.6241439996817,37.469290365111725]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.61095577907175,37.487427957672125]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A84d040f54e1a5c64e8f19334155c801bcb9b8ec959169e31627c8f0c1c90e63d&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'pskov@alta-profil.net', // Почта сайта
		'email_order' => 'pskov@alta-profil.net, info@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(800)-551-70-47', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'affiliat' => true,
		'yandex_count' => '65866420',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-10%</span> - <strong style="color: #f6383c">звоните!</strong></span>', // текст в карточке товара
		'manager_bitrix_id' => array(75),
		'manager_moysklad_id' => array($samira['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_kaliningrad_sklad, //id Склад в МойСклад
		'ms_group' => $ms_kaliningrad_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	'tomsk.alta-profil.net' => [
		'alias' => false, // Если домен является алиасом
		'reg_iso' => 'RU-TOM',
		'city_1' => 'Томск',
		'city_2' => 'Томске',
		'city_3' => 'Томска',
		'city_4' => 'томского',
		'city_5' => 'томский',
		'city_6' => 'томских',
		'city_7' => 'томская',
		'city_8' => 'томские',
		'city_reg' => 'Томская область',
		'id_sklad' => '',
		'city_mini' => 'Томск, Северск, Стрежевой, Асино',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'tomsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Тупиковый переулок, 33', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: 09:00 - 18:00', // Время работы
		// Доставка
		'delivery_priceincity' => '',
		'delivery_sklad_cart' => 'Вы можете забрать товар самостоятельно. Ближайший к вам склад находится в Омске. Так же есть возможность отгрузиться напрямую в Москве.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно.',
		'map_center' => '[55.6241439996817,37.469290365111725]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.624144,37.464913]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aee987dd555b8b8bc02c5e7a725af7ced961d1ca2e4f6767de8227919a80f6380&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'tomsk@alta-profil.net', // Почта сайта
		'email_order' => 'tomsk@alta-profil.net, info@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7(382)248-94-67', // Телефон сайта
		'phone_call' => '73822489467', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'affiliat' => true,
		'yandex_count' => '66529789',
		'google_count' => 'G-CHGNWF2301',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-10%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(95),
		'manager_moysklad_id' => array($tkacheva['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_omsk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_omsk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	// 'novosibirsk.alta-profil.net' => [
	// 	'alias'=> false, // Если домен является алиасом
	// 	'reg_iso' => 'RU-NVS',
	// 	'city_1' => 'Новосибирск',
	// 	'city_2' => 'Новосибирске',
	// 	'city_3' => 'Новосибирска',
	// 	'city_4' => 'новосибирского',
	// 	'city_5' => 'новосибирский',
	// 	'city_6' => 'новосибирских',
	// 	'city_7' => 'новосибирская',
	// 	'city_8' => 'новосибирские',
	// 	'city_reg' => 'Новосибирская область',
	// 	'id_sklad'=> '',
	// 	'city_mini'=> 'Новосибирск, Бердск, Искитим, Куйбышев',
	// 	'company_logo'=> '/templates/jblank/images/inner/logo.png', // ссылка на лого
	// 	'company_name'=> 'Альта-Профиль', // название компании без кавычек
	// 	'company_yourname'=> 'ООО "Альта-Запад"', // юридическое название компании
	// 	'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
	// 	'company_site'=> 'novosibirsk.alta-profil.net', // сайт компании
	// 	'company_innkpp'=> 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
	// 	'address' => 'ул. Петухова, 69/8', // Адрес, который будет на сайте
	// 	'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
	// 	'address_desc' => '(пункт выдачи)', // Например (ТЦ "Дом сайдинга")
	// 	'address_day' => 'Пн-Вс', // Дни работы
	//     'contact_time' => '', 
	// 	'address_time' => 'Время работы: 09:00 - 18:00', // Время работы
	// 	// Доставка
	// 	'delivery_priceincity' => '', 
	// 	'delivery_sklad_cart' => 'Вы можете забрать товар самостоятельно. Ближайший к вам склад находится в Омске. Так же есть возможность отгрузиться напрямую в Москве.', 
	// 	'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно.', 
	// 	'map_center' => '[55.6241439996817,37.469290365111725]', // Центр карты по геокодеру яндекса
	// 	'map_location' => '[55.61095577907175,37.487427957672125]', // Точка на карте
	// 	'map_contact' => '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af83b47002abe12ba739cd67705a3a33ec8925c94ec19c9eb87f3cb1a06fd606b&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe>', // карта в контактах
	// 	'email' => 'novosibirsk@alta-profil.net', // Почта сайта
	// 	'email_order' => 'novosibirsk@alta-profil.net, info@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
	// 	'phone' => '+7(383)202-17-46', // Телефон сайта
	// 	'phone_call' => '73832021746', // Телефон для звонка (при нажатии на ссылку позвонить)
	// 	'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
	// 	'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
	// 	'affiliat' => true,
	// 	'yandex_count' => '66529810',
	// 	'vk'=>'https://vk.com/altaprofilsalon',
	// 	'ok'=>'https://www.ok.ru/group/55254009905245',
	// 	'facebook'=>'https://www.facebook.com/altaprofilsalon/',
	// 	'instagram'=>'https://www.instagram.com/altaprofilsalon/',
	// 	'sale_prod'=> '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-10%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
	// 	'manager_bitrix_id' => array(23),
	// 	'scripts_file'=> '' // адрес из шаблона /templastes/jblank/partial
	// ],
	'magnitogorsk.alta-profil.net' => [
		'alias' => false, // Если домен является алиасом
		'reg_iso' => 'RU-CHE',
		'city_1' => 'Магнитогорск',
		'city_2' => 'Магнитогорске',
		'city_3' => 'Магнитогорска',
		'city_4' => 'магнитогорского',
		'city_5' => 'магнитогорский',
		'city_6' => 'магнитогорских',
		'city_7' => 'магнитогорская',
		'city_8' => 'магнитогорские',
		'city_reg' => 'Челябинская область',
		'id_sklad' => '',
		'city_mini' => 'Челябинск, Магнитогорск, Златоуст, Миасс',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'magnitogorsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Вокзальная, 2/1', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: 09:00 - 18:00', // Время работы
		// Доставка
		'delivery_priceincity' => '',
		'delivery_sklad_cart' => 'Вы можете забрать товар самостоятельно. Ближайший к вам склад находится в Уфе. Так же есть возможность отгрузиться напрямую в Москве.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно.',
		'map_center' => '[55.6241439996817,37.469290365111725]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.61095577907175,37.487427957672125]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A47a0b0528c43266dcf3a902376cd68d515871a42e178950b2f064d0f959582f5&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'magnitogorsk@alta-profil.net', // Почта сайта
		'email_order' => 'magnitogorsk@alta-profil.net, info@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7(351)939-37-71', // Телефон сайта
		'phone_call' => '73519393771', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'affiliat' => true,
		'yandex_count' => '66529822',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-10%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	// 'msk.alta-profil.net' => [
	// 	'alias'=> true, // Если домен является алиасом
	// 	'city_1' => 'Москва',
	// 	'city_2' => 'Москве',
	// 	'city_3' => 'Москвы',
	// 	'city_4' => 'московского',
	// 	'city_5' => 'московский',
	// 	'city_6' => 'московских',
	// 	'city_7' => 'московская',
	// 	'city_8' => 'московские',
	// 	'city_reg' => 'Московская область',
	// 	'id_sklad'=> '18',
	// 	'company_logo'=> '/templates/jblank/images/inner/logo.png', // ссылка на лого
	// 	'company_name'=> 'Альта-Профиль', // название компании без кавычек
	// 	'company_yourname'=> 'ООО "Альта-Запад"', // юридическое название компании
	// 	'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
	// 	'company_site'=> 'alta-profil.net', // сайт компании
	// 	'company_innkpp'=> 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
	// 	'address' => 'Логистический центр Славянский Мир, с17/6',
	// 	'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
	// 	'address_desc' => '(пав. 124-НБ)', // Например (ТЦ "Дом сайдинга")
	// 	'address_day' => 'Пн-Вс', // Дни работы
	//      'contact_time' => '08:00 - 22:00', 
	// 	'address_time' => 'Пн-Пт: 09:00-18:00 </br> Сб-Вс: 10:00-17:00', // Время работы
	// 	// Доставка
	// 	'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах МКАД - 3000 руб., за пределы МКАД - 3000 руб. + 70 руб./км.',
	// 	'delivery_sklad_cart' => 'Наш склад находится по адресу: Москва, Логистический центр Славянский Мир, с17/6', 
	// 	'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах МКАД - 3000 руб., в пределах Московской области 3000 руб. + 70 руб./км от МКАД. По РФ - индивидуально.', 
	// 	'map_center' => '[55.6241439996817,37.469290365111725]', // Центр карты по геокодеру яндекса
	// 	'map_location' => '[55.61095577907175,37.487427957672125]', // Точка на карте
	// 	'map_contact' => '<div id="wrapMap"><iframe style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A8aeee6357d766d98ea17262cdad662e6fabf8ee2c062e64af412a482d5055860&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
	// 	'email' => 'info@alta-profil.net', // Почта сайта
	// 	'email_order' => 'e.chmirova@alta-west.ru, info@alta-profil.net, a.shevchenko@alta-west.ru, msk@alta-profil.net, agorbacheva@alta-west.ru, m.svinareva@alta-west.ru', // Почта для получения уведомлений о заказах
	// 	'phone' => '8-(499)-350-13-00', // Телефон сайта
	// 	'phone_call' => '74993501300', // Телефон для звонка (при нажатии на ссылку позвонить)
	// 	'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
	// 	'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
	// 	'affiliat' => true,
	// 	'yandex_count' => '48807641',
	// 	'vk'=>'https://vk.com/altaprofilsalon',
	// 	'ok'=>'https://www.ok.ru/group/55254009905245',
	// 	'facebook'=>'https://www.facebook.com/altaprofilsalon/',
	// 	'instagram'=>'https://www.instagram.com/altaprofilsalon/',
	// 	'sale_prod'=> '<span>В зависимости от объема возможны <span class="cash_prod_minus">скидки</span> - <strong style="color: #f6383c">подробности по телефону!</strong></span>', // текст в карточке товара
	// 	'manager_bitrix_id' => array(39),
	// 	'scripts_file'=> 'msk' // адрес из шаблона /templastes/jblank/partial
	// ],
	'volgograd.alta-profil.net' => [
		'reg_iso' => 'RU-VGG',
		'city_1' => 'Волгоград',
		'city_2' => 'Волгограде',
		'city_3' => 'Волгограда',
		'city_4' => 'волгоградского',
		'city_5' => 'волгоградский',
		'city_6' => 'волгоградских',
		'city_7' => 'волгоградская',
		'city_8' => 'волгоградские',
		'id_sklad' => '19',
		'affiliat' => false,
		'city_reg' => 'Волгоградская область',
		'city_mini' => 'Волжский, Камышин, Михайловка, Урюпинск, Фролово, Калач-на-Дону, Котово, Котельниково',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'volgograd.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Лермонтова, 31А', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Сб: 09:00 - 17:00, Вс: выходной', // Время работы
		'contact_time' => '08:00 - 22:00',
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Волгограда - 1000 руб., за пределы - 1000 руб. + 30 руб./км.',

		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Волгограда - 1000 руб., в пределах Волгоградской области 1000 руб. + 30 руб./км . По РФ - индивидуально.',
		'map_center' => '[48.757845, 44.531815]', // Центр карты по геокодеру яндекса
		'map_location' => '[48.757845, 44.531815]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0e5c7955fbbaee97dc0ad15522a5b6922dfe0b63e7e2632dfc026348606395fd&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vlg@alta-profil.net', // Почта сайта
		'email_order' => 'vlg@alta-profil.net, a@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(844)-245-94-19', // Телефон сайта
		'phone_call' => '+78442459419', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '64457932',
		'manager_bitrix_id' => array(71),
		'manager_moysklad_id' => array($ali_msk['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	'vrn.alta-profil.net' => [
		'reg_iso' => 'RU-VOR', // Регион в формате iso для определения по IP
		'reg_iso_redirect' => array('RU-BEL', 'RU-LIP', 'RU-TAM', 'RU-ROS'), // массив с соседними регионами
		'city_1' => 'Воронеж',
		'city_2' => 'Воронеже',
		'city_3' => 'Воронежа',
		'city_4' => 'воронежского',
		'city_5' => 'воронежский',
		'city_6' => 'воронежских',
		'city_7' => 'воронежская',
		'city_8' => 'воронежские',
		'id_sklad' => '19',
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'vrn.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Донбасская, 16Е', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(1 этаж)', // Например (ТЦ "Дом сайдинга")
		'address_day' => '<br/>', // Дни работы
		'address_time' => 'Пн-Пт: 08:00-19:00,<br>Сб-Вс: 09:00-16:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[51.672085547182476,39.18145953970333]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.6721255722956,39.17869149999996]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5d5c8eccdd84836a04e9ec1b39c49c61a18ab85a6cafcd4ecef0b8b167dba5a9&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'affiliat' => true,
		'yandex_count' => '43753744',
		'google_count' => 'G-SWRH8P16ED',
		//'manager_bitrix_id' => 39,
		'manager_bitrix_id' => array(101, 4273, 8185),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id'],$baskakova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn.php' // адрес из шаблона /templastes/jblank/partial
	],
	//ВОРОНЕЖ ПОДДОМЕНЫ
	'borisoglebsk.alta-profil.net' => [
		'city_1' => 'Борисоглебск',
		'city_2' => 'Борисоглебске',
		'city_3' => 'Борисоглебска',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'borisoglebsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Матросовская 118 г', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[51.379234, 42.120818]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.379234, 42.120818]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96418fec0ffd886c49ff6bb77aa1141ca10942ece90c9726a8f77d0203b5f0fa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(8481),
		'manager_moysklad_id' => array($klepcov_i['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn_borisoglebsk' // адрес из шаблона /templastes/jblank/partial
	],
	'bebsk.alta-profil.net' => [
		'city_1' => 'Борисоглебск',
		'city_2' => 'Борисоглебске',
		'city_3' => 'Борисоглебска',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'bebsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Матросовская 118 г', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[51.379234, 42.120818]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.379234, 42.120818]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96418fec0ffd886c49ff6bb77aa1141ca10942ece90c9726a8f77d0203b5f0fa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(8481),
		'manager_moysklad_id' => array($klepcov_i['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn_borisoglebsk' // адрес из шаблона /templastes/jblank/partial
	],
	'bobrov.alta-profil.net' => [
		'city_1' => 'Бобров',
		'city_2' => 'Боброве',
		'city_3' => 'Боброва',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'bobrov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. 3-го Интернационала, 31', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[51.097593, 40.041146]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.097593, 40.041146]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A85541a05082152b48f3e229ea27baf0f8b7cdb714a63c42226617715c0f713cd&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'boguchar.alta-profil.net' => [
		'city_1' => 'Богучар',
		'city_2' => 'Богучаре',
		'city_3' => 'Богучар',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'boguchar.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Ленина, 34', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[49.938458, 40.562825]', // Центр карты по геокодеру яндекса
		'map_location' => '[49.938458, 40.562825]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96418fec0ffd886c49ff6bb77aa1141ca10942ece90c9726a8f77d0203b5f0fa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'butrulinovka.alta-profil.net' => [
		'city_1' => 'Бутрулиновка',
		'city_2' => 'Бутрулиновке',
		'city_3' => 'Бутурлиновки',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'butrulinovka.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Дорожная 24', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[50.818201, 40.597051]', // Центр карты по геокодеру яндекса
		'map_location' => '[50.818201, 40.597051]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96418fec0ffd886c49ff6bb77aa1141ca10942ece90c9726a8f77d0203b5f0fa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'anna.alta-profil.net' => [
		'city_1' => 'Анна',
		'city_2' => 'Анне',
		'city_3' => 'Анны',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'anna.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Красноармейская 178Б', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[51.489774, 40.438300]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.489774, 40.438300]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96418fec0ffd886c49ff6bb77aa1141ca10942ece90c9726a8f77d0203b5f0fa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'liski.alta-profil.net' => [
		'city_1' => 'Лиски',
		'city_2' => 'Лисках',
		'city_3' => 'Лисок',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'liski.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Воронежская 2Е', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[50.972860, 39.566261]', // Центр карты по геокодеру яндекса
		'map_location' => '[50.972860, 39.566261]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A16c26ccbffe90d6513d03a42b8192232f5bf58bb442d305aa5050a4492c71d7d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'ostrogorzhsk.alta-profil.net' => [
		'city_1' => 'Острогоржск',
		'city_2' => 'Острогоржске',
		'city_3' => 'Острогоржска',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'ostrogorzhsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Ленина, 38', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[50.858326, 39.075574]', // Центр карты по геокодеру яндекса
		'map_location' => '[50.858326, 39.075574]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac6d90398cfbdb370d549fffe7f600524fd6c057c810a0982bdd3ebee39c19467&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'pavlovsk.alta-profil.net' => [
		'city_1' => 'Павловск',
		'city_2' => 'Павловске',
		'city_3' => 'Павловска',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'pavlovsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Транспортная 1а', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[50.451428, 40.144174]', // Центр карты по геокодеру яндекса
		'map_location' => '[50.451428, 40.144174]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96418fec0ffd886c49ff6bb77aa1141ca10942ece90c9726a8f77d0203b5f0fa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'rossosh.alta-profil.net' => [
		'city_1' => 'Россошь',
		'city_2' => 'Россоши',
		'city_3' => 'Россоши',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'rossosh.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Площадь Октябрьская 79а', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[50.198937, 39.529618]', // Центр карты по геокодеру яндекса
		'map_location' => '[50.198937, 39.529618]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96418fec0ffd886c49ff6bb77aa1141ca10942ece90c9726a8f77d0203b5f0fa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'kalach.alta-profil.net' => [
		'city_1' => 'Калач',
		'city_2' => 'Калаче',
		'city_3' => 'Калача',
		'id_sklad' => '19',
		'main_id_attr_price' => 'Воронеж', // id родительского города в атрибутах
		'city_reg' => 'Воронежская область',
		'city_reg_ip' => array('Белгородская область', 'Липецкая область', 'Тамбовская область', 'Ростовская область'),
		'city_mini' => 'Россошь, Борисоглебск, Лиски, Острогожск, Нововоронеж, Семилуки, Павловск, Бутурлиновка, Бобров, Калач, Поворино, Богучар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Воронеж', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kalach.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'с. Заброды ул. Забродинская 6а', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб: 09:00-18:00,<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Воронежа - 1400 руб., за пределы - 1400 руб. + 35 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Воронеж, ул. Космонавтов, 6/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Воронежа 1400 руб., в пределах Воронежской области 1400 руб. + 35 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[50.416342, 41.028592]', // Центр карты по геокодеру яндекса
		'map_location' => '[50.416342, 41.028592]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A96418fec0ffd886c49ff6bb77aa1141ca10942ece90c9726a8f77d0203b5f0fa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vrn@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, vrn@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(473)-203-11-02', // Телефон сайта
		'phone_call' => '74732031102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '88189752',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'vrn' // адрес из шаблона /templastes/jblank/partial
	],
	'kgd.alta-profil.net' => [
		'reg_iso' => 'RU-KGD', // Регион в формате iso для определения по IP
		'city_1' => 'Калининград',
		'city_2' => 'Калининграде',
		'city_3' => 'Калининграда',
		'city_4' => 'калининградского',
		'city_5' => 'калининградский',
		'city_6' => 'калининградских',
		'city_7' => 'калининградская',
		'city_8' => 'калининградские',
		'id_sklad' => '20',
		'city_reg' => 'Калининградская область',
		'city_mini' => 'Багратионовск, Балтийск, Гвардейск, Гурьевск, Гусев, Зеленоградск, Краснознаменск, Озерск, Светлогорск, Черняховск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kgd.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Московский пр-т, 196а', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => '', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00,<br>Сб: 10:00-16:00,</br> Вс: Выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Калининграда - 1000 руб., за пределы - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Калининград, Московский пр-т, 196А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Калининграда 1000 руб., в пределах Калининградской области 1000 руб. + 30 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[54.70877906995903,20.56249938098137]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.70877906995903,20.558636999999948]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae7385fec033c7674c0425f12e71d7c19d428ddc104890b8e044df10e72a83a0b&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'kgd@alta-profil.net', // Почта сайта
		'email_order' => 'Kgd@abbaplast.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(4012)-92-08-67', // Телефон сайта
		'phone_call' => '74012920867', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'affiliat' => true,
		'yandex_count' => '43835494',
		'google_count' => 'G-LGLGBQZFQ0',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(75),
		'manager_moysklad_id' => array($samira['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_kaliningrad_sklad, //id Склад в МойСклад
		'ms_group' => $ms_kaliningrad_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'kgd' // адрес из шаблона /templastes/jblank/partial
	],
	'kursk.alta-profil.net' => [
		'reg_iso' => 'RU-KRS', // Регион в формате iso для определения по IP
		'city_1' => 'Курск',
		'city_2' => 'Курске',
		'city_3' => 'Курска',
		'city_4' => 'курского',
		'city_5' => 'курский',
		'city_6' => 'курских',
		'city_7' => 'курская',
		'city_8' => 'курские',
		'city_reg' => 'Курская область',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Курск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kursk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'проезд Льговский поворот, д.3, 1эт. 119 каб', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: 09:00 - 18:00, Воскресенье - выходной', // Время работы
		// Доставка
		'delivery_priceincity' => '1000 р. + 30 р.',
		'delivery_sklad_cart' => 'Ближайшие к вам наши склады находятся в городах Воронеж и Курск. Так же есть возможность отгрузиться напрямую в Москве.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно.',
		'map_center' => '[51.661825, 36.140428]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.661825, 36.140428]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0a8a076fe395a307d2e4aa36d23d15fb11517cf192974fc55d3818979efb7b1e&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'kursk@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, kursk@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(4712)-23-85-27', // Телефон сайта
		'phone_call' => '74712238527', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52109857',
		'google_count' => 'G-3L62496NW8',
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'affiliat' => true,
		'manager_bitrix_id' => array(4273, 8185, 225),
		'manager_moysklad_id' => array($maslova['ms_id'],$baskakova['ms_id'],$drobysheva['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_kursk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_kursk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'kursk' // адрес из шаблона /templastes/jblank/partial
	],
	'mahachkala.alta-profil.net' => [
		'alias' => true, // Если домен является алиасом
		'reg_iso' => 'RU-DA', // Регион в формате iso для определения по IP
		'city_1' => 'Махачкала',
		'city_2' => 'Махачкале',
		'city_3' => 'Махачкалы',
		'city_4' => 'дагестанского',
		'city_5' => 'дагестанский',
		'city_6' => 'дагестанских',
		'city_7' => 'дагестанская',
		'city_8' => 'дагестанские',
		'city_reg' => 'Республика Дагестан',
		'city_mini' => 'Буйнакск, Избербаш, Кизляр, Кизилюрт, Хасавюрт, Дербент, Каспийск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Махачкала', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'mahachkala.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Булача, 18', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'montazh' => true, // Есть ли монтаж сайдинга
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Сб', // Дни работы
		'address_time' => 'Пн-Сб: 09:00-18:00, Вс: выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Махачкалы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Махачкала, Булача, 18',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Махачкалы 1000 руб., в пределах Республики Дагестан 1000 руб. + 30 руб./км от г. Махачкала. По РФ - индивидуально.',
		'map_center' => '[42.95293581261981,47.5453646984558]', // Центр карты по геокодеру яндекса
		'map_location' => '[42.95295157448208,47.53963549999999]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa9d2aa68678d62825bd8cf5fea704f45155f3ca7037577b52144e9af0f520a3e&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'dagestan@alta-profil.net', // Почта сайта
		'email_order' => 'dagestan@alta-profil.net, a.shevchenko@alta-west.ru, e.sergeevna@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8722)-52-20-04', // Телефон сайта
		'phone_call' => '+78722522004', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => 'https://www.instagram.com/altaprofil_dagestan/',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53323744',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(3065),
		'manager_moysklad_id' => array($chmiyrova_evgeniya['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_mahachkala_sklad, //id Склад в МойСклад
		'ms_group' => $ms_mahachkala_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'mahachkala' // адрес из шаблона /templastes/jblank/partial
	],
	'05.alta-profil.net' => [
		'reg_iso' => 'RU-DA',
		'city_1' => 'Махачкала',
		'city_2' => 'Махачкале',
		'city_3' => 'Махачкалы',
		'city_4' => 'дагестанского',
		'city_5' => 'дагестанский',
		'city_6' => 'дагестанских',
		'city_7' => 'дагестанская',
		'city_8' => 'дагестанские',
		'city_reg' => 'Республика Дагестан',
		'city_mini' => 'Буйнакск, Избербаш, Кизляр, Кизилюрт, Хасавюрт, Дербент, Каспийск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Махачкала', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'mahachkala.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Булача, 18', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'montazh' => true, // Есть ли монтаж сайдинга
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Сб: 09:00-18:00, Вс: выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Махачкалы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Махачкала, Булача, 18',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Махачкалы 1000 руб., в пределах Республики Дагестан 1000 руб. + 30 руб./км от г. Махачкала. По РФ - индивидуально.',
		'map_center' => '[42.95293581261981,47.5453646984558]', // Центр карты по геокодеру яндекса
		'map_location' => '[42.95295157448208,47.53963549999999]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa9d2aa68678d62825bd8cf5fea704f45155f3ca7037577b52144e9af0f520a3e&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'dagestan@alta-profil.net', // Почта сайта
		'email_order' => 'dagestan@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8722)-52-20-04', // Телефон сайта
		'phone_call' => '+78722522004', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53323744',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(1047),
		'manager_moysklad_id' => array($chmiyrova_evgeniya['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_mahachkala_sklad, //id Склад в МойСклад
		'ms_group' => $ms_mahachkala_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'mahachkala' // адрес из шаблона /templastes/jblank/partial
	],
	'nabchelny.alta-profil.net' => [
		'alias' => false, // Если домен является алиасом
		'city_1' => 'Набережные Челны',
		'city_2' => 'Набережных Челнах',
		'city_3' => 'Набережных Челнов',
		'city_4' => 'татарстанского',
		'city_5' => 'татарстанский',
		'city_6' => 'татарстанских',
		'city_7' => 'татарстанская',
		'city_8' => 'татарстанские',
		'city_reg' => 'Татарстан',
		'city_reg_ip' => array('Республика Удмуртия'),
		'city_mini' => 'Нижникамск, Елабуга, Менделеевск, Красный Ключ, Красная кладка',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Набережные Челны', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'nabchelny.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Казанский пр-т, 129', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'montazh' => false, // Есть ли монтаж сайдинга
		'address_desc' => '(БСМ "Муравей", бокс 14)', // Например (ТЦ "Дом сайдинга")
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 08:30 - 17:30, </br> Сб: 9:00-14:00, Вс: выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Набережных Челнов - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Набережные Челны, Казанский пр-т, 129',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Набережных Челнов 1000 руб., в пределах Республики Татарстан 1000 руб. + 30 руб./км от г. Набережные Челны. По РФ - индивидуально.',
		'map_center' => '[55.66626393421466,52.323507756440684]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.665558569072516,52.31129750000001]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0f523f7218b154841d294036bc3b5b58b9b3e0d95eb4af6687029ba2511e1b8f&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'chelny@alta-profil.net', // Почта сайта
		'email_order' => 'chelny@alta-profil.net,a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8552)-45-02-62', // Телефон сайта
		'phone_call' => '78552450262', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '62918644',
		'google_count' => 'G-LCYZ4B1Y1Q',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(3601),
		'manager_moysklad_id' => array($aminnikova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_nabchelny_sklad, //id Склад в МойСклад
		'ms_group' => $ms_nabchelny_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'nabchelny' // адрес из шаблона /templastes/jblank/partial
	],
	'nizhnekamsk.alta-profil.net' => [
		'alias' => false, // Если домен является алиасом
		'city_1' => 'Нижнекамск',
		'city_2' => 'Нижнекамске',
		'city_3' => 'Нижнекамских',
		'city_4' => 'татарстанского',
		'city_5' => 'татарстанский',
		'city_6' => 'татарстанских',
		'city_7' => 'татарстанская',
		'city_8' => 'татарстанские',
		'city_reg' => 'Татарстан',
		'city_reg_ip' => array('Республика Удмуртия'),
		'city_mini' => 'Нижникамск, Елабуга, Менделеевск, Красный Ключ, Красная кладка',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Нижнекамск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'nizhnekamsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'пр-кт Строителей д.68б', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'showroom_address' => 'ул. Чистопольская, д. 67 стр.1, пом. 2',
		'showroom_time' => 'Пн-Вс: 08:00-20:00',
		'montazh' => false, // Есть ли монтаж сайдинга
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 08:30 - 17:30, </br> Сб: 9:00-14:00, Вс: выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Набережных Челнов - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Набережные Челны, Казанский пр-т, 129',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Набережных Челнов 1000 руб., в пределах Республики Татарстан 1000 руб. + 30 руб./км от г. Набережные Челны. По РФ - индивидуально.',
		'map_center' => '[55.66626393421466,52.323507756440684]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.665558569072516,52.31129750000001]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4d596f705d65830fc0ad643cc3bfe470fc5dbd5eec9baa014d99be4c7f363bb6&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'chelny@alta-profil.net', // Почта сайта
		'email_order' => 'chelny@alta-profil.net,a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8552)-45-02-62', // Телефон сайта
		'phone_call' => '78552450262', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '62918644',
		'google_count' => 'G-LCYZ4B1Y1Q',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(3601),
		'manager_moysklad_id' => array($aminnikova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_nabchelny_sklad, //id Склад в МойСклад
		'ms_group' => $ms_nabchelny_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'nabchelny' // адрес из шаблона /templastes/jblank/partial
	],
	'omsk.alta-profil.net' => [
		'city_1' => 'Омск',
		'city_2' => 'Омске',
		'city_3' => 'Омска',
		'city_4' => 'омского',
		'city_5' => 'омский',
		'city_6' => 'омских',
		'city_7' => 'омская',
		'city_8' => 'омские',
		'id_sklad' => '23',
		'city_reg' => 'Омская область',
		'city_mini' => 'Тара, Исилькуль, Калачинск, Называевск, Тюкалинск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'omsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => '30-я Северная, 67', // Адрес, который будет на сайте
		'address1' => 'б-р Архитекторов д35Б (БоксМолл)',
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Сб', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00,<br/>Сб: 09:00-16:00, Вс: выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Омска - 1000 руб., за пределы города - 1000 руб. + 40 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Омск, 30-я Северная, 67',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Омска 1000 руб., в пределах Омской области 1000 руб. + 40 руб./км от г. Омск. По РФ - индивидуально.',
		'map_center' => '[55.028606526166946,73.38026247882074]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.028532569689546,73.38227949999994]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6bd2c9bccadd795bed512fec40e46d945564e28d1b227a072ea55fece8d11d19&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'omsk@alta-profil.net', // Почта сайта
		'email_order' => 'omsk@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(381)-220-84-29</br>8-(913)-666-19-55', // Телефон сайта
		'phone_call' => '73812208429', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '43835549',
		'google_count' => 'G-3H17FHG4Q2',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(101, 4273, 8185),
		'manager_moysklad_id' => array($bykov['ms_id'],$maslova['ms_id'],$baskakova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_omsk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_omsk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'omsk' // адрес из шаблона /templastes/jblank/partial
	],
	// 'omsck.alta-profil.net' => [
	// 	'city_1' => 'Омск',
	// 	'city_2' => 'Омске',
	// 	'city_3' => 'Омска',
	// 	'city_4' => 'омского',
	// 	'city_5' => 'омский',
	// 	'city_6' => 'омских',
	// 	'city_7' => 'омская',
	// 	'city_8' => 'омские',
	// 	'id_sklad' => '23',
	// 	'city_reg' => 'Омская область',
	// 	'city_mini' => 'Тара, Исилькуль, Калачинск, Называевск, Тюкалинск',
	// 	'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
	// 	'company_name' => 'Альта-Профиль', // название компании без кавычек
	// 	'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
	// 	'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
	// 	'company_site' => 'omsk.alta-profil.net', // сайт компании
	// 	'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
	// 	'address' => '30-я Северная, 67', // Адрес, который будет на сайте
	// 	'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
	// 	'address_desc' => '', // Например (ТЦ "Дом сайдинга")
	// 	'contact_time' => '08:00 - 22:00',
	// 	'address_day' => 'Пн-Сб', // Дни работы
	// 	'address_time' => 'Пн-Пт: 09:00-18:00,<br/>Сб: 09:00-16:00, Вс: выходной', // Время работы
	// 	// Доставка
	// 	'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Омска - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
	// 	'delivery_sklad_cart' => 'Наш склад находится по адресу: Омск, 30-я Северная, 67',
	// 	'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Омска 1000 руб., в пределах Омской области 1000 руб. + 30 руб./км от г. Омск. По РФ - индивидуально.',
	// 	'map_center' => '[55.028606526166946,73.38026247882074]', // Центр карты по геокодеру яндекса
	// 	'map_location' => '[55.028532569689546,73.38227949999994]', // Точка на карте
	// 	'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ace826e38219c9cac969b4cfb249af4d0e6e40f85162a66502d46cb4cc666deab&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
	// 	'email' => 'omsk@alta-profil.net', // Почта сайта
	// 	'email_order' => 'omsk@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
	// 	'phone' => '8-(381)-220-84-29</br>8-(913)-666-19-55', // Телефон сайта
	// 	'phone_call' => '73812208429', // Телефон для звонка (при нажатии на ссылку позвонить)
	// 	'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
	// 	'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
	// 	'yandex_count' => '43835549',
	// 	'google_count' => 'G-3H17FHG4Q2',
	// 	'affiliat' => true,
	// 	'vk' => 'https://vk.com/altaprofilsalon',
	// 	'ok' => 'https://www.ok.ru/group/55254009905245',
	// 	'facebook' => 'https://www.facebook.com/altaprofilsalon/',
	// 	'instagram' => 'https://www.instagram.com/altaprofilsalon/',
	// 	'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
	// 	'manager_bitrix_id' => array(95),
	// 	'manager_moysklad_id' => array($tkacheva['ms_id']), //id Менеджера в МойСклад
	// 	'ms_sklad' => $ms_omsk_sklad, //id Склад в МойСклад
	// 	'ms_group' => $ms_omsk_group, //id Владелец-Отдел(Группа) в МойСклад
	// 	'scripts_file' => 'omsk' // адрес из шаблона /templastes/jblank/partial
	// ],
	'orel.alta-profil.net' => [
		'city_1' => 'Орел',
		'city_2' => 'Орле',
		'city_3' => 'Орла',
		'city_4' => 'орловского',
		'city_5' => 'орловский',
		'city_6' => 'орловских',
		'city_7' => 'орловская',
		'city_8' => 'орловские',
		'city_reg' => 'Орловская область',
		'city_reg_ip' => array('Брянская область'),
		'city_mini' => 'Ливны, Мценск, Болхов, Знаменка, Нарышкино',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'orel.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Льва Толстого, д. 8', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Сб: 09:00 - 18:00, Воскресенье - выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Орла - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Орел, ул. Льва Толстого, д. 8',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Орла 1000 руб., в пределах Орловской области 1000 руб. + 30 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[52.99774818924993,36.09849513497925]', // Центр карты по геокодеру яндекса
		'map_location' => '[52.99741807138724,36.09070600000001]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4d049a3d85e33193b79be2666ff7b728b52f674edac5ba06bcef9df209a33b82&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'orel@alta-profil.net', // Почта сайта
		'email_order' => 'vrn@alta-profil.net, orel@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8 (4862) 22-24-87', // Телефон сайта
		'phone_call' => '74862222487', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53039629',
		'google_count' => 'G-KZRQ750D0Y',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-10%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(4273, 8185, 225),
		'manager_moysklad_id' => array($maslova['ms_id'],$baskakova['ms_id'],$drobysheva['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_orel_sklad, //id Склад в МойСклад
		'ms_group' => $ms_orel_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'orel' // адрес из шаблона /templastes/jblank/partial
	],

	// 'bryansk.alta-profil.net' => [
	// 	'city_1' => 'Брянск',
	// 	'city_2' => 'Брянске',
	// 	'city_3' => 'Брянска',
	// 	'city_4' => 'орловского',
	// 	'city_5' => 'орловский',
	// 	'city_6' => 'орловских',
	// 	'city_7' => 'орловская',
	// 	'city_8' => 'орловские',
	// 	'city_reg' => 'Орловская область',
	// 	'city_reg_ip' => array('Брянская область'),
	// 	'city_mini' => 'Ливны, Мценск, Болхов, Знаменка, Нарышкино',
	// 	'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
	// 	'company_name' => 'Альта-Профиль', // название компании без кавычек
	// 	'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
	// 	'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
	// 	'company_site' => 'bryansk.alta-profil.net', // сайт компании
	// 	'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
	// 	'address' => 'пр-т Московский, 82', // Адрес, который будет на сайте
	// 	'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
	// 	'address_desc' => '', // Например (ТЦ "Дом сайдинга")
	// 	'address_day' => 'Пн-Сб', // Дни работы
	// 	'contact_time' => '08:00 - 22:00',
	// 	'address_time' => 'Пн-Сб: 09:00 - 18:00, Воскресенье - выходной', // Время работы
	// 	// Доставка
	// 	'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Орла - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
	// 	'delivery_sklad_cart' => 'Наш склад находится по адресу: Орел, ул. Льва Толстого, д. 8',
	// 	'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Орла 1000 руб., в пределах Орловской области 1000 руб. + 30 руб./км от города. По РФ - индивидуально.',
	// 	'map_center' => '[52.99774818924993,36.09849513497925]', // Центр карты по геокодеру яндекса
	// 	'map_location' => '[52.99741807138724,36.09070600000001]', // Точка на карте
	// 	'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4d049a3d85e33193b79be2666ff7b728b52f674edac5ba06bcef9df209a33b82&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
	// 	'email' => 'orel@alta-profil.net', // Почта сайта
	// 	'email_order' => ' a.shevchenko@alta-west.ru, vrn@alta-profil.net', // Почта для получения уведомлений о заказах
	// 	'phone' => '+7-(4832)-62-97-13', // Телефон сайта
	// 	'phone_call' => '74862222487', // Телефон для звонка (при нажатии на ссылку позвонить)
	// 	'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
	// 	'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
	// 	'yandex_count' => '53039629',
	// 	'google_count' => 'G-KZRQ750D0Y',
	// 	'affiliat' => true,
	// 	'vk' => 'https://vk.com/altaprofilsalon',
	// 	'ok' => 'https://www.ok.ru/group/55254009905245',
	// 	'facebook' => 'https://www.facebook.com/altaprofilsalon/',
	// 	'instagram' => 'https://www.instagram.com/altaprofilsalon/',
	// 	'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-10%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
	// 	'manager_bitrix_id' => array(4273, 8185, 225),
	// 	'scripts_file' => 'bryansk' // адрес из шаблона /templastes/jblank/partial
	// ],
	'orenburg.alta-profil.net' => [
		'city_1' => 'Оренбург',
		'city_2' => 'Оренбурге',
		'city_3' => 'Оренбурга',
		'city_4' => 'оренбургского',
		'city_5' => 'оренбургский',
		'city_6' => 'оренбургских',
		'city_7' => 'оренбургская',
		'city_8' => 'оренбургские',
		'city_reg' => 'Оренбургская область',
		'city_mini' => 'Орск, Новотроицк, Бузулук, Бугуруслан, Гай, Сорочинск, Соль-Илецк, Медногорск, Кувандык, Абдулино',
		'company_logo' => '/templates/jblank/images/inner/logo_orng.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'orenburg.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Площадь 1 Мая, д.1к2', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Сб', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00,</br> Сб: 10:00-16:00, Вс: выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Оренбурга - 600 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находиться по адресу: ул. Площадь 1 Мая, д. 1',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Оренбурга 600 руб., в пределах Оренбургской области 600 руб. + 30 руб./км от города Оренбург. По РФ - индивидуально.',
		'map_center' => '[51.7902,55.0940]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.7901,55.0864]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afbbb115a0366b98aaa352e529fe786c2983fa02e91e394600915f69e1b18ccf0&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'orenburg@alta-profil.net', // Почта сайта
		'email_order' => 'orenburg@alta-profil.net, orenburg@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(3532)-48-67-25', // Телефон сайта
		'phone_sotovy' => '8-(991)-793-55-89', // Телефон сайта
		'phone_call' => '73532486725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53783215',
		'google_count' => 'G-QPVSEB0E2N',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7519),
		'manager_moysklad_id' => array($bazhenova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_orenburg_sklad, //id Склад в МойСклад
		'ms_group' => $ms_orenburg_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'orenburg' // адрес из шаблона /templastes/jblank/partial
	],
	'orenbyrg.alta-profil.net' => [
		'city_1' => 'Оренбург',
		'city_2' => 'Оренбурге',
		'city_3' => 'Оренбурга',
		'city_4' => 'оренбургского',
		'city_5' => 'оренбургский',
		'city_6' => 'оренбургских',
		'city_7' => 'оренбургская',
		'city_8' => 'оренбургские',
		'city_reg' => 'Оренбургская область',
		'city_mini' => 'Орск, Новотроицк, Бузулук, Бугуруслан, Гай, Сорочинск, Соль-Илецк, Медногорск, Кувандык, Абдулино',
		'company_logo' => '/templates/jblank/images/inner/logo_orng.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'orenburg.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Площадь 1 Мая, д.1к2', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Сб', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00,</br> Сб: 10:00-16:00, Вс: выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Оренбурга - 600 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находиться по адресу: ул. Площадь 1 Мая, д. 1',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Оренбурга 600 руб., в пределах Оренбургской области 600 руб. + 30 руб./км от города Оренбург. По РФ - индивидуально.',
		'map_center' => '[51.7902,55.0940]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.7901,55.0864]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afbbb115a0366b98aaa352e529fe786c2983fa02e91e394600915f69e1b18ccf0&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'orenburg@alta-profil.net', // Почта сайта
		'email_order' => 'orenburg@alta-profil.net, orenburg@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(3532)-48-67-25', // Телефон сайта
		'phone_sotovy' => '8-(991)-793-55-89', // Телефон сайта
		'phone_call' => '73532486725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53783215',
		'google_count' => 'G-QPVSEB0E2N',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(67),
		'manager_moysklad_id' => array($fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_orenburg_sklad, //id Склад в МойСклад
		'ms_group' => $ms_orenburg_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'orenburg' // адрес из шаблона /templastes/jblank/partial
	],


	//Орск
	'orsk.alta-profil.net' => [
		'city_1' => 'Орск',
		'city_2' => 'Орске',
		'city_3' => 'Орска',
		'city_4' => 'орского',
		'city_5' => 'орский',
		'city_6' => 'орских',
		'city_7' => 'орская',
		'city_8' => 'орские',
		'city_reg' => 'Оренбургская область',
		'city_mini' => 'Орск, Новотроицк, Бузулук, Бугуруслан, Гай, Сорочинск, Соль-Илецк, Медногорск, Кувандык, Абдулино',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'orsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Новосибирская, 1', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Сб', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-17:00<br>Вс: выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Оренбурга - 600 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Площадь 1 Мая, д. 1',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Оренбурга 600 руб., в пределах Оренбургской области 600 руб. + 30 руб./км от города Оренбург. По РФ - индивидуально.',
		'map_center' => '[51.7902,55.0940]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.7901,55.0864]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afbbb115a0366b98aaa352e529fe786c2983fa02e91e394600915f69e1b18ccf0&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'orenburg@alta-profil.net', // Почта сайта
		'email_order' => 'orenburg@alta-profil.net, orenburg@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(3532)-48-64-72', // Телефон сайта
		'phone_call' => '73532486725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53783215',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(67),
		'manager_moysklad_id' => array($fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_orenburg_sklad, //id Склад в МойСклад
		'ms_group' => $ms_orenburg_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'orenburg' // адрес из шаблона /templastes/jblank/partial
	],

	'perm.alta-profil.net' => [
		'city_1' => 'Пермь',
		'city_2' => 'Перми',
		'city_3' => 'Перми',
		'city_4' => 'пермоского',
		'city_5' => 'пермский',
		'city_6' => 'пермских',
		'city_7' => 'пермская',
		'city_8' => 'пермские',
		'id_sklad' => '36',
		'city_reg' => 'Пермская область',
		'city_mini' => 'Березники, Соликамск, Чайковский, Кунгур, Лысьва, Краснокамск, Чусовой, Чернушка, Добрянка, Кудымкар',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Пермь', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'perm.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Бродовский тракт, 5', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Сб: 09:00-18:00</br>Вс: Выходной', // Время работы
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Перми - 1800 руб., за пределы города - стоимость зависит от дальности, стоимость уточняйте у менеджера',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Бродовский тракт, д. 5',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Перми - 1800 руб., в пределах Пермского края стоимость зависит от отдаленности от города Пермь. По РФ - индивидуально.',
		'map_center' => '[58.000593, 56.220101]', // Центр карты по геокодеру яндекса
		'map_location' => '[58.000593, 56.220101]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4cf535d1d525e7d3af7ec9d23e2b3d7bfc39193d16c79d5dbff294dde8b5d540&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'perm@alta-profil.net', // Почта сайта
		'email_order' => 'perm@alta-profil.net, z.mahmudaliev@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7 (3422) 64 01 73', // Телефон сайта
		'phone_call' => '73422404143', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => 'https://www.instagram.com/alta_profil_ural/',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '55860217',
		'affiliat' => true,
		'manager_bitrix_id' => array(1551,7905),
		'manager_moysklad_id' => array($mahmudaliev['ms_id'],$yakimova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_perm_sklad, //id Склад в МойСклад
		'ms_group' => $ms_perm_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'perm.php' // адрес из шаблона /templastes/jblank/partial
	],
	'vladimir.alta-profil.net' => [
		'city_1' => 'Владимир',
		'city_2' => 'Владимире',
		'city_3' => 'Владимира',
		'city_4' => 'владимирского',
		'city_5' => 'владимирский',
		'city_6' => 'владимирских',
		'city_7' => 'владимирская',
		'city_8' => 'владимирские',
		'id_sklad' => '49',
		'city_reg' => 'Владимирская область',
		'city_mini' => 'Ковров, Муром, Александров, Гусь-Хрустальный, Кольчугино, Вязники, Киржач, Радужный, Покров',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'vladimir.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398', // ИНН и ОГРН
		'address' => 'ул. Гастелло, д. 8А', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(пункт выдачи)',
		'contact_time' => '08:00 - 22:00',
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Вс: 09:00-18:00,', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании. Либо Вы можете забрать товар с нашего склада в Москве.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно.',
		'map_center' => '[58.00147730313782,56.144361915344184]', // Центр карты по геокодеру яндекса
		'map_location' => '[58.00147730313782,56.144361915344184]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae6d349ae401b23a77f487a4e6b1b5b1b503344855619a3f78e11fb3d49fa792e&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'vladimir@alta-profil.net', // Почта сайта
		'email_order' => 'a.shevchenko@alta-west.ru,vladimir@alta-profil.net,msk@alta-profil.net,e.chmirova@alta-west.ru,a.gorbacheva@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(800)-551-70-47', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '67207150',
		'affiliat' => true,
		'manager_bitrix_id' => array(13),
		'manager_moysklad_id' => array($anton_shevchenko['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_vrn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_vrn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'saransk.alta-profil.net' => [
		'city_1' => 'Саранск',
		'city_2' => 'Саранске',
		'city_3' => 'Саранска',
		'city_4' => 'саранского',
		'city_5' => 'саранский',
		'city_6' => 'саранских',
		'city_7' => 'саранская',
		'city_8' => 'саранские',
		'city_reg' => 'Республика Мордовия',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'saransk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Строительная д. 11Г', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб: 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.206453, 45.158462]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.206453, 45.158462]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A28fca2206cdd75438792a68c96836ef6dc33e9dc24fe22aabbe433ee80b78185&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'saransk@alta-profil.net, a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'yoshkarola.alta-profil.net' => [
		'city_1' => 'Йошкар-Ола',
		'city_2' => 'Йошкар-Оле',
		'city_3' => 'Йошкар-Олы',
		'city_4' => 'саранского',
		'city_5' => 'саранский',
		'city_6' => 'саранских',
		'city_7' => 'саранская',
		'city_8' => 'саранские',
		'city_reg' => 'Республика Мордовия',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Йошкар-Ола', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'yoshkarola.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Карла Маркса, 109', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт 09:00 - 18:00, </br>Сб: 9:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[56.622449, 47.889421]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.622449, 47.889421]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A85f7d8949de11e9d3d8b41dbb0df2c64a8e126c6e6cbc413556b0f74408d71c3&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'yoshkarola@alta-profil.net', // Почта сайта
		'email_order' => 'o.nikiforova@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8362)-34-70-53', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '87228028',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(6773),
		'manager_moysklad_id' => array($nikiforova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_yoshkar_sklad, //id Склад в МойСклад
		'ms_group' => $ms_yoshkar_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'yoshkarola' // адрес из шаблона /templastes/jblank/partial
	],

	//Мордовия 

	'ardatov.alta-profil.net' => [
		'city_1' => 'Ардатов',
		'city_2' => 'Ардатове',
		'city_3' => 'Ардатова',
		'city_4' => 'ардатского',
		'city_5' => 'ардатский',
		'city_6' => 'ардатских',
		'city_7' => 'ардатская',
		'city_8' => 'ардатские',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'ardatov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Карла Маркса, 119', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.851267, 46.240986]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.851267, 46.240986]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A362cfb5b5553c72d691adef123e3762e7217c903713eb370718a3319ae2d49d2&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],

	'insar.alta-profil.net' => [
		'city_1' => 'Инсар',
		'city_2' => 'Инсаре',
		'city_3' => 'Инсара',
		'city_4' => 'инсарского',
		'city_5' => 'инсарский',
		'city_6' => 'инсарских',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'insar.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Московская, 60', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[53.869232, 44.377332]', // Центр карты по геокодеру яндекса
		'map_location' => '[53.869232, 44.377332]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7bcf471e6e9963d810d0354429e613a39ff47f8980408a24eec473fc6de6cd04&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],

	'kovylkino.alta-profil.net' => [
		'city_1' => 'Ковылкино',
		'city_2' => 'Ковылкино',
		'city_3' => 'Ковылкино',
		'city_4' => 'Ковылкино',
		'city_5' => 'Ковылкино',
		'city_6' => 'Ковылкино',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kovylkino.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Пролетарская, 70', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.040884, 43.921458]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.040884, 43.921458]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9e972bfd97e7e45dbf539a8c81ed1ca849dc1dd50361c5564ff9ebc33ff586c7&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'krasnoslobodsk.alta-profil.net' => [
		'city_1' => 'Краснослободск',
		'city_2' => 'Краснослободске',
		'city_3' => 'Краснослободска',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'krasnoslobodsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Советская площадь, 22', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.421140, 43.796580]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.421140, 43.796580]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4ae699c880fd2db9c63125eb248674ce3bd916d6cbfca0da5053ea17899b22ca&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'ruzaevka.alta-profil.net' => [
		'city_1' => 'Рузаевка',
		'city_2' => 'Рузаевке',
		'city_3' => 'Рузаевки',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'ruzaevka.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Маяковского, 139', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.072704, 44.956503]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.072704, 44.956503]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae9141a2031248915c4409b300fd87c310e75d32f00f07eeb9c71822fbf97a615&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],

	'temnikov.alta-profil.net' => [
		'city_1' => 'Темников',
		'city_2' => 'Темникове',
		'city_3' => 'Темникова',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'temnikov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул Гагарина, д 78 В', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 08:30 - 18:00 </br> Сб 08:30 - 17:00, Вс - 08:30 - 15:00', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.638909, 43.226707]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.638909, 43.226707]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aca9b9e55f4693411f128cfae98cf083f5fa62d23979fc53876d5aec2bc31942b&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],



	'zubova-poliana.alta-profil.net' => [
		'city_1' => 'Зубова Поляна',
		'city_2' => 'Зубова Поляна',
		'city_3' => 'Зубова Поляна',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'zubova-poliana.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Советская, 25', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.075689, 42.835032]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.075689, 42.835032]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acf3a3686287455db7eb64657c87796e4491efee8311db329e3ded8580cddd2b6&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'atiashevo.alta-profil.net' => [
		'city_1' => 'Атяшево',
		'city_2' => 'Атяшево',
		'city_3' => 'Атяшево',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'atiashevo.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Центральная, 17', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.584057, 46.081355]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.584057, 46.081355]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A438c4141aed925ec021d6969fed6c00f569703e06e52dba336765b9c684a388b&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'romodanovo.alta-profil.net' => [
		'city_1' => 'Ромоданово',
		'city_2' => 'Ромоданово',
		'city_3' => 'Ромоданово',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'romodanovo.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул.  Связистов, 1', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.423377, 45.373932]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.423377, 45.373932]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A07aa4c4bde78935d02ba58809670a57da2fabaf60ce985343c4b70efb4fb2e37&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'torbeevo.alta-profil.net' => [
		'city_1' => 'Торбеево',
		'city_2' => 'Торбеево',
		'city_3' => 'Торбеево',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'torbeevo.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Интернациональная, 14Г', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт с 8.00 до 18.00 ;Сб-Вс с 8.00 до 16.00', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.074580, 43.243299]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.074580, 43.243299]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2b89bed8ee83152500de058441a735ed5dc5882c1d1e2908ef716f44f575367c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'chamzinka.alta-profil.net' => [
		'city_1' => 'Чамзинка',
		'city_2' => 'Чамзинке',
		'city_3' => 'Чамзинки',
		'city_reg' => 'Республика Мордовия',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'chamzinka.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Почтовая, 2', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.405479, 45.777940]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.405479, 45.777940]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0e40c4417760bc04058f4187e29ed85b89ce27b02a18fb6d4611c6911bd32479&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],



	//End Мордовия

	// Чувашия 

	'alatyr.alta-profil.net' => [
		'city_1' => 'Алатырь',
		'city_2' => 'Алатыре',
		'city_3' => 'Алатыря',
		'city_reg' => 'Чувашская республика',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'alatyr.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Гоголя, 82', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[54.842937, 46.584538]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.842937, 46.584538]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab818f83c40c86543408fb21d886abeffe392e408eeb7be69f85eaa90e86b36b6&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'vurnary.alta-profil.net' => [
		'city_1' => 'Вурнары',
		'city_2' => 'Вурнары',
		'city_3' => 'Вурнары',
		'city_reg' => 'Чувашская республика',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'vurnary.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Советская, 18', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[55.491426, 46.952928]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.491426, 46.952928]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3baa60eaea9975cab6788934c0df150eafd91c80d96e6ffdebb274fe4abc6f67&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'kanash.alta-profil.net' => [
		'city_1' => 'Канаш',
		'city_2' => 'Канаше',
		'city_3' => 'Канаша',
		'city_reg' => 'Чувашская республика',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kanash.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. 30 лет Чувашии  2а', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[55.514529, 47.508733]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.514529, 47.508733]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A54575c9ca73aa66b4a5dc570146bc3be20236594ad83a99b4fd304035d1cf489&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'kozlovka.alta-profil.net' => [
		'city_1' => 'Козловка',
		'city_2' => 'Козловке',
		'city_3' => 'Козловки',
		'city_reg' => 'Чувашская республика',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kozlovka.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Свободной России, 44', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[55.841892, 48.259042]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.841892, 48.259042]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A427e3595f83ae47be81468a70f3fe74adbb1b552c3426eda52f530782195c349&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],



	'marinski-posad.alta-profil.net' => [
		'city_1' => 'Мариинский Посад',
		'city_2' => 'Мариинском Посаде',
		'city_3' => 'Мариинского Посада',
		'city_reg' => 'Чувашская республика',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'marinski-posad.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Советская, 1', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[56.113291, 47.716181]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.113291, 47.716181]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Affee2782ce496059054b173237c26bfdf08eb2364ad84273d0fcd82a8e89683b&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'tsivilsk.alta-profil.net' => [
		'city_1' => 'Цивильск',
		'city_2' => 'Цивильске',
		'city_3' => 'Цивильска',
		'city_reg' => 'Чувашская республика',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'tsivilsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Советская, 76', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[55.866137, 47.479242]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.866137, 47.479242]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1eee6f67c31ca63a8b5c3573fdbe459a359aeaa36bd85b6c2d35011ad944efcf&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],



	'shumerlia.alta-profil.net' => [
		'city_1' => 'Шумерля',
		'city_2' => 'Шумерле',
		'city_3' => 'Шумерли',
		'city_reg' => 'Чувашская республика',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'shumerlia.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Октябрьская, 6', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[55.492931, 46.413148]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.492931, 46.413148]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A12a8274d48bc80b28e0b182f78354e8d52856819ab3c23f715db817a4aaf1643&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulikov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],


	'iadrin.alta-profil.net' => [
		'city_1' => 'Ядрин',
		'city_2' => 'Ядрине',
		'city_3' => 'Ядрина',
		'city_reg' => 'Чувашская республика',
		'main_id_attr_price' => 'Саранск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Саранск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'iadrin.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Карла Маркса, 29', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Время работы: Пн-Пт 09:00 - 18:00 </br> Сб 09:00 - 14:00, Вс - Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Саранске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки уточняйте у менеджера.',
		'map_center' => '[55.936484, 46.206491]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.936484, 46.206491]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae54456a93fe1d55a6a9a74858b27aaf619363726e404c8f275752fa9c99166fe&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saransk@alta-profil.net', // Почта сайта
		'email_order' => 'a.kulokov@alta-west.ru, a.kolobov@alta-west.ru, a.soldatov@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8342)-22-95-84', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324374',
		'google_count' => 'G-FH0QQMGEBZ',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7657),
		'manager_moysklad_id' => array($kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saransk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saransk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saransk' // адрес из шаблона /templastes/jblank/partial
	],

	// End Чувашия


	'saratov.alta-profil.net' => [
		'city_1' => 'Саратов',
		'city_2' => 'Саратове',
		'city_3' => 'Саратова',
		'city_4' => 'саратовского',
		'city_5' => 'саратовский',
		'city_6' => 'саратовских',
		'city_7' => 'саратовская',
		'city_8' => 'саратовские',
		'city_reg' => 'Саратовская область',
		'city_reg_ip' => array('Пензенская область', 'Самарская область'),
		'city_mini' => 'Энгельс, Балаково, Балашов, Вольск, Пугачёв, Ртищево, Маркс, Петровск, Аткарск, Красноармейск',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'saratov.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Сокурский тракт, д. 20', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Саратова - 1500 руб., за пределы города - 1000 руб. + 60 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Саратов, Сокурский тракт, д. 20',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Саратова 1500 руб., в пределах Саратовской области 1000 руб. + 60 руб./км от города. По РФ - индивидуально.',
		'address_time' => 'Пн-Пт: 9:00-18:00,</br> Сб-Вc: 10:00-16:00', // Время работы
		'map_center' => '[51.614822279105894,45.968292904785095]', // Центр карты по геокодеру яндекса
		'map_location' => '[51.61488907234662,45.96520299999993]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac35ca0c1bc20f2830b905396d4800a198b2bf9ce983132c6c6065670597be5aa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'saratov@alta-profil.net', // Почта сайта
		'email_order' => 'saratov@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8452)-39-85-17', // Телефон сайта
		'phone_call' => '78452398517', // Телефон для звонка (при нажатии на ссылку позвонить)
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52346674',
		'google_count' => 'G-WMQP1YYS6J',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(7731, 993),
		'manager_moysklad_id' => array($arsen_rabadanov['ms_id'],$malika_kaparova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_saratov_sklad, //id Склад в МойСклад
		'ms_group' => $ms_saratov_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'saratov' // адрес из шаблона /templastes/jblank/partial
	],
	'ufa.alta-profil.net' => [
		'city_1' => 'Уфа',
		'city_2' => 'Уфе',
		'city_3' => 'Уфы',
		'city_4' => 'уфимского',
		'city_5' => 'уфимский',
		'city_6' => 'уфимских',
		'city_7' => 'уфимская',
		'city_8' => 'уфимские',
		'id_sklad' => '22',
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'ufa.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address_1' => 'Индустриальное шоссе, 7А', // Адрес, который будет на сайте 1
		'address_2' => 'мкр-н Дёма, ул. Центральная, 19Б', // Адрес, который будет на сайте 2
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00,</br> Сб-Вс: 10:00-16:00', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[54.80694395739042,56.08771962435905]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.806950154617276,56.084940855819646]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b20e7b3b428bcbb6336786f69a8d1be2956e3d30a4d80e663d0b668400e41a9&amp;source=constructor" width="100%" height="446" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_sotovy' => '8-(917)-448-79-11', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'google_count' => 'G-FS1LWLSVVK',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],
	// Уфа поддомены 

	// 'agidel.alta-profil.net' => [
	// 	'city_1' => 'Агидель',
	// 	'city_2' => 'Агидели',
	// 	'city_3' => 'Агидели',
	// 	'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
	// 	'city_reg' => 'Республика Башкортостан',
	// 	'city_reg_ip' => array('Свердловская область'),
	// 	'city_mini'=> 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
	// 	'company_logo'=> '/templates/jblank/images/inner/logo.png', // ссылка на лого
	// 	'company_name'=> 'Альта-Профиль Уфа', // название компании без кавычек
	// 	'company_yourname'=> 'ООО "Альта-Запад"', // юридическое название компании
	// 	'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
	// 	'company_site'=> 'agidel.alta-profil.net', // сайт компании
	// 	'company_innkpp'=> 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
	// 	'address' => 'Индустриальное шоссе, 7А', // Адрес, который будет на сайте
	// 	'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
	// 	'address_desc' => '', // Например (ТЦ "Дом сайдинга")
	// 	'address_day' => 'Пн-Сб', // Дни работы
	//        'contact_time' => '',
	// 	'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
	// 	'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',   
	// 	'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А', 
	// 	'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
	// 	'map_center' => '[54.80694395739042,56.08771962435905]', // Центр карты по геокодеру яндекса
	// 	'map_location' => '[54.806950154617276,56.084940855819646]', // Точка на карте
	// 	'map_contact' => '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A760d24d0e352ab38958cac8b171bab96eb3eb28a5a36a8d4f3fc03c40a75b1b7&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe>', // карта в контактах
	// 	'email' => 'ufa@alta-profil.net', // Почта сайта
	// 	'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
	// 	'phone' => '8-(347)-258-87-25', // Телефон сайта
	// 	'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
	// 	'vk'=>'https://vk.com/public180406042',
	// 	'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
	// 	'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
	// 	'yandex_count' => '52350109',
	// 	'affiliat' => true,
	// 	'vk'=>'https://vk.com/altaprofilsalon',
	// 	'ok'=>'https://www.ok.ru/group/55254009905245',
	// 	'facebook'=>'https://www.facebook.com/altaprofilsalon/',
	// 	'instagram'=>'https://www.instagram.com/altaprofilsalon/',
	// 	'sale_prod'=> '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
	// 	'manager_bitrix_id' => array(21,67),
	// 	'scripts_file'=> 'ufa' // адрес из шаблона /templastes/jblank/partial
	// ],

	// 'baimak.alta-profil.net' => [
	// 	'city_1' => 'Баймак',
	// 	'city_2' => 'Баймаке',
	// 	'city_3' => 'Баймака',
	// 	'id_sklad'=> '22',
	// 	'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
	// 	'city_reg' =саранск> 'Республика Башкортостан',
	// 	'city_reg_ip' => array('Свердловская область'),
	// 	'city_mini'=> 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
	// 	'company_logo'=> '/templates/jblank/images/inner/logo.png', // ссылка на лого
	// 	'company_name'=> 'Альта-Профиль Уфа', // название компании без кавычек
	// 	'company_yourname'=> 'ООО "Альта-Запад"', // юридическое название компании
	// 	'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
	// 	'company_site'=> 'baimak.alta-profil.net', // сайт компании
	// 	'company_innkpp'=> 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
	// 	'address' => 'Индустриальное шоссе, 7А', // Адрес, который будет на сайте
	// 	'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
	// 	'address_desc' => '', // Например (ТЦ "Дом сайдинга")
	// 	'address_day' => 'Пн-Сб', // Дни работы
	//        'contact_time' => '',
	// 	'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
	// 	'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',   
	// 	'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А', 
	// 	'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
	// 	'map_center' => '[54.80694395739042,56.08771962435905]', // Центр карты по геокодеру яндекса
	// 	'map_location' => '[54.806950154617276,56.084940855819646]', // Точка на карте
	// 	'map_contact' => '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A760d24d0e352ab38958cac8b171bab96eb3eb28a5a36a8d4f3fc03c40a75b1b7&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe>', // карта в контактах
	// 	'email' => 'ufa@alta-profil.net', // Почта сайта
	// 	'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
	// 	'phone' => '8-(347)-258-87-25', // Телефон сайта
	// 	'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
	// 	'vk'=>'https://vk.com/public180406042',
	// 	'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
	// 	'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
	// 	'yandex_count' => '52350109',
	// 	'affiliat' => true,
	// 	'vk'=>'https://vk.com/altaprofilsalon',
	// 	'ok'=>'https://www.ok.ru/group/55254009905245',
	// 	'facebook'=>'https://www.facebook.com/altaprofilsalon/',
	// 	'instagram'=>'https://www.instagram.com/altaprofilsalon/',
	// 	'sale_prod'=> '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
	// 	'manager_bitrix_id' => array(21,67),
	// 	'scripts_file'=> 'ufa' // адрес из шаблона /templastes/jblank/partial
	// ],


	'belebey.alta-profil.net' => [
		'city_1' => 'Белебей',
		'city_2' => 'Белебей',
		'city_3' => 'Белебей',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'belebey.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Советская, 30/8', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[54.110351, 54.134159]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.110351, 54.134159]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac2b1dc4e530cef11d31ed5cf66c15459ef83041c8801e27dc788bdcab954202e&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],


	'beloretsk.alta-profil.net' => [
		'city_1' => 'Белорецк',
		'city_2' => 'Белорецке',
		'city_3' => 'Белорецка',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'beloretsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Точисского 27/1', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[53.965614, 58.411038]', // Центр карты по геокодеру яндекса
		'map_location' => '[53.965614, 58.411038]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acffb04b848e945edbfbf379add2f8fcc4fb57540a3ce6a76a7661a3997e6c9d0&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],


	'birsk.alta-profil.net' => [
		'city_1' => 'Бирск',
		'city_2' => 'Бирске',
		'city_3' => 'Бирска',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'birsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Мира, 129М', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[55.415998, 55.556461]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.415998, 55.556461]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A97935855464f6274b8dd3699315a2d7d0803ce0d181b8f7d566cf2b414b2a924&amp;source=constructor" width="100%" height="438" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],

	'blagoveshhensk.alta-profil.net' => [
		'city_1' => 'Благовещенск',
		'city_2' => 'Благовещенска',
		'city_3' => 'Благовещенске',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'blagoveshhensk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Седова, 110А', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[55.048730, 55.956841]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.048730, 55.956841]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad1fbccdb2652d5b3434226b3763b86871d53b019b21ea5a56b6c26c60feba17f&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],


	'davlekanovo.alta-profil.net' => [
		'city_1' => 'Давлеканово',
		'city_2' => 'Давлеканово',
		'city_3' => 'Давлеканово',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'davlekanovo.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Мажита Гафури, 16', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[54.212182, 55.030453]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.212182, 55.030453]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7822b17994aa4b5f5e31715a4d8dea09a27004f731f75b36de66c09341f22eef&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],


	'durtuli.alta-profil.net' => [
		'city_1' => 'Дюртюли',
		'city_2' => 'Дюртюли',
		'city_3' => 'Дюртюли',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'durtuli.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Зайлалова, 14', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[55.485923, 54.850287]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.485923, 54.850287]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Abb5221eea1d28ac0a176003012dfebdb21c5f2719ae9239bfb74951329cc92c7&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],


	'ishimbay.alta-profil.net' => [
		'city_1' => 'Ишимбай',
		'city_2' => 'Ишимбае',
		'city_3' => 'Ишимбая',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'ishimbay.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Губкина, 10', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[53.449832, 56.050679]', // Центр карты по геокодеру яндекса
		'map_location' => '[53.449832, 56.050679]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A79c07c0dc57279d2973ec3cc806bd59aea0aedc37b9b2f26fc3b5590231d840d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],

	'kumertau.alta-profil.net' => [
		'city_1' => 'Кумертау',
		'city_2' => 'Кумертау',
		'city_3' => 'Кумертау',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kumertau.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Ленина, 25', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[52.759171, 55.796168]', // Центр карты по геокодеру яндекса
		'map_location' => '[52.759171, 55.796168]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9af6918ac59ff794d8b3bfeccddb64413888f2651846e25f1bae33e5a23bca45&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],

	'meleuz.alta-profil.net' => [
		'city_1' => 'Мелеуз',
		'city_2' => 'Мелеузе',
		'city_3' => 'Мелеуза',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'meleuz.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Октябрьская, 5', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[52.962968, 55.933170]', // Центр карты по геокодеру яндекса
		'map_location' => '[52.962968, 55.933170]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aad8ec579c3a9b0566ce7f94e1ca30a07444fce4b1e54a495ba152624ee3fc63d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],


	// 'mezhgore.alta-profil.net' => [
	// 	'city_1' => 'Межгорье',
	// 	'city_2' => 'Межгорье',
	// 	'city_3' => 'Межгорья',
	// 	'id_sklad'=> '22',
	// 	'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
	// 	'city_reg' => 'Республика Башкортостан',
	// 	'city_reg_ip' => array('Свердловская область'),
	// 	'city_mini'=> 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
	// 	'company_logo'=> '/templates/jblank/images/inner/logo.png', // ссылка на лого
	// 	'company_name'=> 'Альта-Профиль Уфа', // название компании без кавычек
	// 	'company_yourname'=> 'ООО "Альта-Запад"', // юридическое название компании
	// 	'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
	// 	'company_site'=> 'mezhgore.alta-profil.net', // сайт компании
	// 	'company_innkpp'=> 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
	// 	'address' => 'Индустриальное шоссе, 7А', // Адрес, который будет на сайте
	// 	'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
	// 	'address_desc' => '', // Например (ТЦ "Дом сайдинга")
	// 	'address_day' => 'Пн-Сб', // Дни работы
	//        'contact_time' => '',
	// 	'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
	// 	'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',   
	// 	'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А', 
	// 	'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
	// 	'map_center' => '[54.80694395739042,56.08771962435905]', // Центр карты по геокодеру яндекса
	// 	'map_location' => '[54.806950154617276,56.084940855819646]', // Точка на карте
	// 	'map_contact' => '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A760d24d0e352ab38958cac8b171bab96eb3eb28a5a36a8d4f3fc03c40a75b1b7&amp;source=constructor" width="100%" height="360" frameborder="0"></iframe>', // карта в контактах
	// 	'email' => 'ufa@alta-profil.net', // Почта сайта
	// 	'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
	// 	'phone' => '8-(347)-258-87-25', // Телефон сайта
	// 	'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
	// 	'vk'=>'https://vk.com/public180406042',
	// 	'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
	// 	'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
	// 	'yandex_count' => '52350109',
	// 	'affiliat' => true,
	// 	'vk'=>'https://vk.com/altaprofilsalon',
	// 	'ok'=>'https://www.ok.ru/group/55254009905245',
	// 	'facebook'=>'https://www.facebook.com/altaprofilsalon/',
	// 	'instagram'=>'https://www.instagram.com/altaprofilsalon/',
	// 	'sale_prod'=> '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
	// 	'manager_bitrix_id' => array(21,67),
	// 	'scripts_file'=> 'ufa' // адрес из шаблона /templastes/jblank/partial
	// ],

	'neftekamsk.alta-profil.net' => [
		'city_1' => 'Нефтекамск',
		'city_2' => 'Нефтекамске',
		'city_3' => 'Нефтекамска',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'neftekamsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => '', // Адрес, который будет на сайте Ул. Социалистическая , 37
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[56.089649, 54.259555]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.089649, 54.259555]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afddb61003a0079ab98a0ad48615cb901d182edd3af4950d6b9e72a8e26e93472&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],

	'oktyabrsky.alta-profil.net' => [
		'city_1' => 'Октябрьский',
		'city_2' => 'Октябрьске',
		'city_3' => 'Октябрьска',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'oktyabrsky.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Губкина, 4', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[54.487625, 53.470618]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.487625, 53.470618]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab4ed65c0c4bd3bfe5684001031ee5db3ccc4156b1f632b9eedc1963217aa9daa&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],

	'salavat.alta-profil.net' => [
		'city_1' => 'Салават',
		'city_2' => 'Салавате',
		'city_3' => 'Салавата',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'salavat.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Ленина, 3', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[53.360162, 55.923765]', // Центр карты по геокодеру яндекса
		'map_location' => '[53.360162, 55.923765]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A73e8ac78bceb015d7612d481901a6bbef3225eb1fa0976e8aee5618e48f8de72&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],


	'sibay.alta-profil.net' => [
		'city_1' => 'Сибай',
		'city_2' => 'Сибае',
		'city_3' => 'Сибая',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'sibay.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Маяковского 33 ', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[52.717177, 58.667579]', // Центр карты по геокодеру яндекса
		'map_location' => '[52.717177, 58.667579]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aefdaf28dd8c771b15399f87743d865f9eb8c0c28c1d9f21d7cb549fc6890e93d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],

	'sterlitamak.alta-profil.net' => [
		'city_1' => 'Стерлитамак',
		'city_2' => 'Стерлитамаке',
		'city_3' => 'Стерлитамака',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'sterlitamak.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Сагитова 2Д', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[53.629602, 55.907532]', // Центр карты по геокодеру яндекса
		'map_location' => '[53.629602, 55.907532]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A356e73671b88eff02a7aacf3c155046362f5c581aa39401c2462fbe612970013&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],


	'tuymazy.alta-profil.net' => [
		'city_1' => 'Туймазы',
		'city_2' => 'Туймазах',
		'city_3' => 'Туймазов',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'tuymazy.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Ул. Пугачева, 19Б', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[54.604588, 53.693086]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.604588, 53.693086]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2c5f288c77b461ab7509df07dfad387e2b410ba79c5f5264ab27797019a4d84d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],

	'uchaly.alta-profil.net' => [
		'city_1' => 'Учалы',
		'city_2' => 'Учалах',
		'city_3' => 'Учалов',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'uchaly.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Башкортостана, 9А', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[54.317868, 59.382692]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.317868, 59.382692]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Abd91826722ddc8f163c44a59c8eaba79a12d6eb3b45976484a3bcc8f5e9e1a25&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],

	'yanaul.alta-profil.net' => [
		'city_1' => 'Янаул',
		'city_2' => 'Янауле',
		'city_3' => 'Янаула',
		'id_sklad' => '22',
		'main_id_attr_price' => 'Уфа', // id родительского города в атрибутах
		'city_reg' => 'Республика Башкортостан',
		'city_reg_ip' => array('Свердловская область'),
		'city_mini' => 'Стерлитамак, Салават, Нефтекамск, Октябрьский, Туймазы, Белорецк, Ишимбай, Сибай, Кумертау',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Уфа', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'yanaul.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => ' ул. Маяковского, 14к2', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 09:00-18:00, Сб: 10:00-16:00<br>Вс: выходной', // Время работы
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Уфы - 1000 руб., за пределы города - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Уфа, Индустриальное шоссе, 7А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Уфы 1000 руб., в пределах Республики Башкортостан 1000 руб. + 30 руб./км от города Уфа. По РФ - индивидуально.',
		'map_center' => '[56.263887, 54.921703]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.263887, 54.921703]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad3214a900fbe0f022d7ca43cbc87d969be50714b40f996cf7b9a47e0cb306d26&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ufa@alta-profil.net', // Почта сайта
		'email_order' => 'ufa@alta-profil.net, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(347)-258-87-25', // Телефон сайта
		'phone_call' => '73472588725', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/public180406042',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '52350109',
		'affiliat' => true,
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'manager_bitrix_id' => array(21, 67),
		'manager_moysklad_id' => array($egatiyatullina['ms_id'],$fedorova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ufa_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ufa_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'ufa' // адрес из шаблона /templastes/jblank/partial
	],




	'cheb.alta-profil.net' => [
		'city_1' => 'Чебоксары',
		'city_2' => 'Чебоксарах',
		'city_3' => 'Чебоксар',
		'city_4' => 'чебоксарского',
		'city_5' => 'чебоксарский',
		'city_6' => 'чебоксарских',
		'city_7' => 'чебоксарская',
		'city_8' => 'чебоксарские',
		'city_reg' => 'Чувашская Республика',
		'city_mini' => '',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Чебоксары', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'cheb.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Складской проезд, д.6', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'showroom_time' => 'Пн-Пт 08:00-17:00 </br> Сб: 08:00-15:00',
		'address_desc' => ' ', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Вт-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Сб 09:00-18:00,</br>Вс-Пн: выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Чебоксарах.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно.',
		'map_center' => '[56.147129, 47.233130]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.147129, 47.233130]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae97721e3203aed44be8d0e5265cc7ea0aad6182afbb09b0caba03cb994724a39&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'cheb@alta-profil.net', // Почта сайта
		'email_order' => 'cheb@alta-profil.net, o.nikiforova@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7 - (8352) 28-52-71', // Телефон сайта
		'phone_call' => '78005517047', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '53324650',
		'affiliat' => true,
		'manager_bitrix_id' => array(6773),
		'manager_moysklad_id' => array($nikiforova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_cheb_sklad, //id Склад в МойСклад
		'ms_group' => $ms_cheb_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'cheb' // адрес из шаблона /templastes/jblank/partial
	],
	'kazan.alta-profil.net' => [
		'city_1' => 'Казань',
		'city_2' => 'Казани',
		'city_3' => 'Казани',
		'city_4' => 'казанского',
		'city_5' => 'казанский',
		'city_6' => 'казанских',
		'city_7' => 'казанская',
		'city_8' => 'казанские',
		'city_reg' => 'Республика Татарстан',
		'city_mini' => 'Набережные Челны',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Казань', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'kazan.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Комиссара Габишева, 8А', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(пункт выдачи)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Пн-Пт: 08:30 - 17:30, </br> Сб: 9:00-14:00, Вс: выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Казани.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно.',
		'map_center' => '[56.066116520420714,47.28284327786255]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.06627856867008,47.27157799999999]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A47aea8e673e6a8bc4a09e08ba48111d0784d1438d744e9c23d3aa8c1a9e97ea4&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => '', // Почта сайта
		'email_order' => 'kazan@alta-profil.net,a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '8 (843) 207-27-74', // Телефон сайта
		'phone_call' => '78432072774', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '64802809',
		'google_count' => 'G-LCYZ4B1Y1Q',
		'affiliat' => true,
		'manager_bitrix_id' => array(6773,7657),
		'manager_moysklad_id' => array($nikiforova['ms_id'],$kulikov['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_cheb_sklad, //id Склад в МойСклад
		'ms_group' => $ms_cheb_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'ulyanovsk.alta-profil.net' => [
		'city_1' => 'Ульяновск',
		'city_2' => 'Ульяновске',
		'city_3' => 'Ульяновска',
		'city_4' => 'ульяновского',
		'city_5' => 'ульяновский',
		'city_6' => 'ульяновских',
		'city_7' => 'ульяновская',
		'city_8' => 'ульяновские',
		'city_reg' => 'Ульяновская область',
		'city_mini' => '',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Ульяновск', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'ulyanovsk.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'Московское шоссе, 9А', // Адрес, который будет на сайте
		'showroom' => false, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => ' ', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'contact_time' => '08:00 - 22:00',
		'address_time' => 'Вт-Пт: 09:00-18:00,<br>Сб: 09:00-17:00<br>Вс-Пн: Выходной', // Время работы
		// Доставка
		'delivery_sklad_cart' => 'Самовывоз возможен только с терминала транспортной компании в Ульяновске.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно.',
		'map_center' => '[54.301973, 48.295298]', // Центр карты по геокодеру яндекса
		'map_location' => '[54.301973, 48.295298]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A54d24fea452b1fb1cc97fcb4d21f87e71d9c651d29d9ec2d7012eba4c07e9c75&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ulyanovsk@alta-profil.net', // Почта сайта
		'email_order' => 'ulyanovsk@alta-profil.net, s.nikitin@alta-west.ru, a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7(8422)-42-52-67', // Телефон сайта
		'phone_call' => '78432072774', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '87622179',
		'google_count' => '',
		'affiliat' => true,
		'manager_bitrix_id' => array(7235),
		'manager_moysklad_id' => array($nikiforova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_ulyanovsk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_ulyanovsk_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'yln' // адрес из шаблона /templastes/jblank/partial
	],

	'nn.alta-profil.net' => [
		'city_1' => 'Нижний Новгород',
		'city_2' => 'Нижнем Новгороде',
		'city_3' => 'Нижнего Новгорода',
		'city_4' => 'нижегородского',
		'city_5' => 'нижегородский',
		'city_6' => 'нижегородских',
		'city_7' => 'нижегородская',
		'city_8' => 'нижегородские',
		'city_reg' => 'Нижегородская область',
		'city_mini' => 'Дзержинск, Арзамас, Саров, Бор, Кстово, Павлово, Выкса, Балахна и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Нижний Новгород', // название компании без кавычек
		'company_yourname' => 'ООО "Альта-Запад"', // юридическое название компании
		'bank' => 'Филиал "Северная столица" АО "Райффайзенбанк"<br>Расчетный счет 40702810003000033739<br>Корр. счет Банка 30101810100000000723<br>БИК Банка 044030723',
		'company_site' => 'nn.alta-profil.net', // сайт компании
		'company_innkpp' => 'ИНН 3906370454 / ОГРН 1183926020398  ', // ИНН и ОГРН
		'address' => 'ул. Кузбасская, 1Ж', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => '', // Дни работы
		'address_time' => 'Пн-Пт: с 9:00 до 18:00</br>Сб-Вс: выходной', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Кузбасская, 1Ж',
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Нижнего Новгорода - 1000 руб., в пределах Нижегородской области - 1000 руб. + 30 руб./км.',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Нижнего Новгорода 1500 руб., в пределах Нижегородской области 1500 руб. + 40 руб./км от города Нижний Новгород. По РФ - индивидуально.',
		'map_center' => '[56.3093,43.8790]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.3092,43.8709]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad784212943745d66f26bd8a9e732eefaeda43ae50757712b24f7242c74b304c2&amp;source=constructor" width="100%" height="420" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'nn@alta-profil.net', // Почта сайта
		'email_order' => 'nn@alta-profil.net,a.shevchenko@alta-west.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7(831)231-08-56', // Телефон сайта
		'phone_call' => '78312310856', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => 'https://vk.com/altaprofilsalon',
		'ok' => 'https://www.ok.ru/group/55254009905245',
		'facebook' => 'https://www.facebook.com/altaprofilsalon/',
		'instagram' => 'https://www.instagram.com/altaprofilsalon/',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '67394620',
		'google_count' => 'G-7KEP0GZVT8',
		'affiliat' => true,
		'manager_bitrix_id' => array(993),
		'manager_moysklad_id' => array($malika_kaparova['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_nn_sklad, //id Склад в МойСклад
		'ms_group' => $ms_nn_group, //id Владелец-Отдел(Группа) в МойСклад
		'scripts_file' => 'nn' // адрес из шаблона /templastes/jblank/partial
	],

	/* ---------------------------------------  */
	/* ---------------------------------------  */
	/* ---------------------------------------  */

	'alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Челябинск',
		'city_2' => 'Челябинске',
		'city_3' => 'Челябинска',
		'city_3' => 'Челябинска',
		'city_reg' => 'Челябинская область',
		'city_mini' => 'Златоуст, Миасс, Копейск, Озерск, Троицк, Снежинск и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Челябинск', // название компании без кавычек
		'company_yourname' => 'ООО "Уральские Фасады"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>БИК 044525999',
		'company_site' => 'alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 6685168651 / ОГРН 1196658075503', // ИНН и ОГРН
		'address' => 'Троицкий тракт, д. 21', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Вс: 09:00-18:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Челябинска - 1000 руб., в пределах Челябинской области - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: г. Челябинск, Трацкий тракт, д. 21',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Челябинска 1000 руб., в пределах Челябинской области 1000 руб. + 30 руб./км от города Челябинск. По РФ - индивидуально.',
		'map_center' => '[55.093716,61.392865]', // Центр карты по геокодеру яндекса
		'map_location' => '[55.093538,61.385848]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A94aa74e49270169bcd01a4db329748e362537be7a239584b90b9f5f2c8c108ac&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'chelyabinsk@alta-profil.pro', // Почта сайта
		'email_order' => 'snab74@fasad-alta.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(351)-277-93-10', // Телефон сайта
		'phone_call' => '73512779310', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '74636635',
		'affiliat' => true,
		'manager_bitrix_id' => array(11),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'krasnodar.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Краснодар',
		'city_2' => 'Краснодаре',
		'city_3' => 'Краснодара',
		'city_reg' => 'Краснодарский край',
		'city_mini' => 'Новороссийск, Армавир, Крымск, Славянск-на-Кубани, Тимашевск и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Краснодар', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'krasnodar.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'ул. Уральская, 93/1 (<a href="/contacts">еще 1 адрес</a>)', // Адрес, который будет на сайте
		'addressOne' => 'ул. Уральская, 93/1', // Адрес точно такой же как выше, только без html дополнения.
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00<br/>Сб: 09:00-16:00<br/>Вс: 09:00-15:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Краснодара - 1000 руб., в пределах Краснодарского края - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: аул. Старобжегокай, ул.Набережная, 2/3',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Краснодара 1000 руб., в пределах Краснодарского края 1000 руб. + 30 руб./км от города Краснодар. По РФ - индивидуально.',
		'map_center' => '[45.037928, 39.085910]', // Центр карты по геокодеру яндекса
		'map_location' => '[45.037114, 39.076904]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe  src="https://yandex.ru/map-widget/v1/?um=constructor%3A4b20e7b3b428bcbb6336786f69a8d1be2956e3d30a4d80e663d0b668400e41a9&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'krasnodar@alta-profil.pro', // Почта сайта
		'email_order' => 'kr@fasad-alta.ru, sasha@fasad-alta.ru,  toma@fasad-alta.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(861)-217-68-73', // Телефон сайта
		'phone_call' => '78612176873', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '74737849',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'stavrropol.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Ставрополь',
		'city_2' => 'Ставрополе',
		'city_3' => 'Ставрополья',
		'city_reg' => 'Ставропольский край',
		'city_mini' => 'Пятигорск, Кисловодск, Невинномысск, Ессентуки, Михайловск, Минеральные Воды, Георгиевск, Будённовск и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Ставрополь', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'stavrropol.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'Старомарьевское шоссе, 11А', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00<br/>Сб: 09:00-18:00<br/>Вс: выходной', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Ставрополя - 1000 руб., в пределах Ставропольского края - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Старомарьевское шоссе, 9е',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Ставрополя 1000 руб., в пределах Ставропольского края 1000 руб. + 30 руб./км от города Ставрополь. По РФ - индивидуально.',
		'map_center' => '[45.053454, 42.025233]', // Центр карты по геокодеру яндекса
		'map_location' => '[45.053366, 42.018572]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0d7c686c157c3e76e738b54915bc5e6d384c8e0de108e4156b001d83177aee73&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'stavropol@alta-profil.pro', // Почта сайта
		'email_order' => 'abba-plast26@mail.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8652)-30-26-38', // Телефон сайта
		'phone_call' => '78652302638', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '74739310',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	'stavropol.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Ставрополь',
		'city_2' => 'Ставрополе',
		'city_3' => 'Ставрополья',
		'city_reg' => 'Ставропольский край',
		'city_mini' => 'Пятигорск, Кисловодск, Невинномысск, Ессентуки, Михайловск, Минеральные Воды, Георгиевск, Будённовск и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Ставрополь', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'stavropol.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'Старомарьевское шоссе, 11А', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Сб', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00<br/>Сб: 09:00-18:00<br/>Вс: выходной', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Ставрополя - 1000 руб., в пределах Ставропольского края - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: Старомарьевское шоссе, 9е',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Ставрополя 1000 руб., в пределах Ставропольского края 1000 руб. + 30 руб./км от города Ставрополь. По РФ - индивидуально.',
		'map_center' => '[45.053454, 42.025233]', // Центр карты по геокодеру яндекса
		'map_location' => '[45.053366, 42.018572]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0d7c686c157c3e76e738b54915bc5e6d384c8e0de108e4156b001d83177aee73&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'stavropol@alta-profil.pro', // Почта сайта
		'email_order' => 'abba-plast26@mail.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8652)-30-26-38', // Телефон сайта
		'phone_call' => '78652302638', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '74739310',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	'sochi.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Сочи',
		'city_2' => 'Сочи',
		'city_3' => 'Сочи',
		'city_reg' => 'Краснодарский край',
		'city_mini' => '',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Сочи', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'sochi.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'ул. Пластунская, д. 135', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(строительный рынок Спартак)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00<br/>Сб: 09:00-16:00<br/>Вс: Выходной', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Сочи - 1000 руб., за пределы Сочи - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Пластунская, 151/5, Строительный рынок «Спартак»',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Сочи 1000 руб., за пределы Сочи 1000 руб. + 30 руб./км от города Сочи. По РФ - индивидуально.',
		'map_center' => '[43.616596,39.742617]', // Центр карты по геокодеру яндекса
		'map_location' => '[43.616534,39.739420]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A869e54237b862d05643f8bb57f242bd483784983ae91b3b2aa0fd48347c2b547&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'sochi@alta-profil.pro', // Почта сайта
		'email_order' => 'sochi@fasad-alta.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(862)-279-21-02', // Телефон сайта
		'phone_call' => '78622792102', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '74900095',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'tyumen.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Тюмень',
		'city_2' => 'Тюмени',
		'city_3' => 'Тюмени',
		'city_reg' => 'Тюменская область',
		'city_mini' => 'Тобольск, Ишим, Ялуторовск, Заводоуковск и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Тюмень', // название компании без кавычек
		'company_yourname' => 'ООО "Уральские Фасады"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'tyumen.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 6685168651 / ОГРН 1196658075503', // ИНН и ОГРН
		'address' => 'ул. Авторемонтная, д. 11', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Вс: 09:00-18:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Тюмени - 500 руб., за пределы Тюмени - 500 руб. + 22 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Авторемонтная, д. 9',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Тюмени 500 руб., за пределы Тюмени 500 руб. + 22 руб./км от города Тюмень. По РФ - индивидуально.',
		'map_center' => '[57.1544,65.4774]', // Центр карты по геокодеру яндекса
		'map_location' => '[57.1545,65.4698]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1277982822ef7e856e2d1fdfe6cb6c93d83f9ed3746b62c8905beeac03d3ee6f&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'tyumen@alta-profil.pro', // Почта сайта
		'email_order' => 'tum@fasad-alta.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(345)-251-89-17', // Телефон сайта
		'phone_call' => '73452518917', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '74913847',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'ekb.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Екатеринбург',
		'city_2' => 'Екатеринбурге',
		'city_3' => 'Екатеринбурга',
		'city_reg' => 'Свердловская область',
		'city_mini' => 'Нижний Тагил, Каменск-Уральский, Первоуральск, Серов, Новоуральск и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Екатеринбург', // название компании без кавычек
		'company_yourname' => 'ООО "Уральские Фасады"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'ekb.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 6685168651 / ОГРН 1196658075503', // ИНН и ОГРН
		'address' => 'ул. Бахчиванжи, 2Б', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '(2 этаж)', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Вс: 09:00-18:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Екатеринбурга - 1000 руб., за пределы Екатеринбурга - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Бахчиванджи, 2А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Екатеринбурга 1000 руб., за пределы Екатеринбурга 1000 руб. + 30 руб./км от города Екатеринбург. По РФ - индивидуально.',
		'map_center' => '[56.7610,60.8160]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.7611,60.8031]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A599cc5ba724137ad2aeefa4ba75e6b877e35224b94775271ab46a49e6f08710a&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'ekb@alta-profil.pro', // Почта сайта
		'email_order' => 'ekat@fasad-alta.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(343)-226-93-99', // Телефон сайта
		'phone_call' => '73432269399', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75160900',
		'affiliat' => true,
		'manager_bitrix_id' => array(13),
		'scripts_file' => 'ekb.php' // адрес из шаблона /templastes/jblank/partial
	],

	'tver.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Тверь',
		'city_2' => 'Твери',
		'city_3' => 'Твери',
		'city_reg' => 'Тверская область',
		'city_mini' => 'Ржев, Вышний Волочёк, Торжок, Кимры, Конаково и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Тверь', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'tver.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'ул. Коминтерна, д. 20', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00<br/>Сб-Вс: 09:00-16:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Твери - 1000 руб., за пределы Твери - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. 1я Суворова, д.1',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Твери 1000 руб., за пределы Твери 1000 руб. + 30 руб./км от города Тверь. По РФ - индивидуально.',
		'map_center' => '[56.8357,35.9018]', // Центр карты по геокодеру яндекса
		'map_location' => '[56.8357,35.8955]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad46be48796761a7e252cb50fb6951bb643ee298cab26227b8f45b73425ad85e9&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'tver@alta-profil.pro', // Почта сайта
		'email_order' => 'tver@fasad-alta.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(4822)-31-91-43', // Телефон сайта
		'phone_call' => '74822319143', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '75256648',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'astrrakhan.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Астрахань',
		'city_2' => 'Астрахани',
		'city_3' => 'Астрахани',
		'city_reg' => 'Астраханская область',
		'city_mini' => 'Ахтубинск, Знаменск, Харабали, Камызяк, Нариманов и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Астрахань', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'astrrakhan.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'ул. Рыбинская, д. 19', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 08:00-17:00<br/>Сб: 09:00-16:00<br/>Вс: 09:00-15:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Астрахани - 1000 руб., за пределы Астрахани - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Рыбинская, д. 6/1',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Астрахани 1000 руб., за пределы Астрахани 1000 руб. + 30 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[46.3638,48.0995]', // Центр карты по геокодеру яндекса
		'map_location' => '[46.3638,48.0942]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A69ae436c81b67afc449c4ade977b4a81d4de79b7a404b6dc476f60fe3d6ce340&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'astr@alta-profil.pro', // Почта сайта
		'email_order' => 'semenov@alta-tver.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8512)-46-41-29', // Телефон сайта
		'phone_call' => '78512464129', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '76071562',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	'astrakhan.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Астрахань',
		'city_2' => 'Астрахани',
		'city_3' => 'Астрахани',
		'city_reg' => 'Астраханская область',
		'city_mini' => 'Ахтубинск, Знаменск, Харабали, Камызяк, Нариманов и др.',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Астрахань', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'astrakhan.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'ул. Рыбинская, д. 19', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 08:00-17:00<br/>Сб: 09:00-16:00<br/>Вс: 09:00-15:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Астрахани - 1000 руб., за пределы Астрахани - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Рыбинская, д. 6/1',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Астрахани 1000 руб., за пределы Астрахани 1000 руб. + 30 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[46.3638,48.0995]', // Центр карты по геокодеру яндекса
		'map_location' => '[46.3638,48.0942]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A69ae436c81b67afc449c4ade977b4a81d4de79b7a404b6dc476f60fe3d6ce340&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'astr@alta-profil.pro', // Почта сайта
		'email_order' => 'semenov@alta-tver.ru', // Почта для получения уведомлений о заказах
		'phone' => '+7-(8512)-46-41-29', // Телефон сайта
		'phone_call' => '78512464129', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '76071562',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	'sevastopol.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Севастополь',
		'city_2' => 'Севастополе',
		'city_3' => 'Севостополи',
		'city_reg' => 'Республика Крым',
		'city_mini' => '',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Севастополь', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'sevastopol.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'ул. Стахановцев, д. 10Ак2', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00<br/>Сб: 09:00-16:00<br/>Вс: 09:00-15:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Севастополя - 1000 руб., за пределы Севастополя - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Стахановцев, 10А',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Севастополя 1000 руб., за пределы Севастополя 1000 руб. + 30 руб./км от города. По РФ - индивидуально.',
		'map_center' => '[44.5622,33.5251]', // Центр карты по геокодеру яндекса
		'map_location' => '[44.561826, 33.513000]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af8ecaf71317fc7e6a78ed6b535fb6450b8862869813bc234297e6055ebb3664d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'sevas@fasad-alta.ru', // Почта сайта
		'email_order' => 'sevas@fasad-alta.ru,Alta-profil82@mail.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(800)-302-59-64', // Телефон сайта
		'phone_call' => '78003025964', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '76072771',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'simferopol.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Симферополь',
		'city_2' => 'Симферополе',
		'city_3' => 'Симферополи',
		'city_reg' => 'Республика Крым',
		'city_mini' => '',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Сиферополь', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'simferopol.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'пр-кт Победы, д. 356', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00<br/>Сб: 09:00-16:00<br/>Вс: 09:00-15:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Симферополя - 1000 руб., за пределы Симферополя - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: 12 км Московского шоссе, Пос. Битумное, ул. Внешняя , д. 42',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Симферополя 1000 руб., по республке Крым 1000 руб. + 30 руб./км от черты города. По РФ - индивидуально.',
		'map_center' => '[44.9857,34.1610]', // Центр карты по геокодеру яндекса
		'map_location' => '[44.9854,34.1519]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0445858b5e4d12d51730037e11abb2f71d7e1b5e9d70145207b5f9cdbc5fbe97&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'simf@alta-profil.pro', // Почта сайта
		'email_order' => 'alta-profil82@mail.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(800)-301-78-52', // Телефон сайта
		'phone_call' => '78003017852', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '76074211',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'grozny.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Грозный',
		'city_2' => 'Грозном',
		'city_3' => 'Грозного',
		'city_reg' => 'Чеченская республика',
		'city_mini' => '',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Грозный', // название компании без кавычек
		'company_yourname' => 'ООО "Альта Фасад ЮГ"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'grozny.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 2311309236 / ОГРН 1202300048675', // ИНН и ОГРН
		'address' => 'ул. Нурсултана Назарбаева, д. 127', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Вс: 09:00-18:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Грозного - 1000 руб., за пределы Грозного - 1000 руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Назарбаева, д. 113',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Грозного 1000 руб., по Чеченской Республике 1000 руб. + 30 руб./км от черты города Грозный. По РФ - индивидуально.',
		'map_center' => '[43.3411,45.7039]', // Центр карты по геокодеру яндекса
		'map_location' => '[43.3412,45.7067]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A090adea3485773e7e4dbaca51f4b443f6b8d96a84f44d3d1c251e32af3f23b52&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'groz@alta-profil.pro', // Почта сайта
		'email_order' => 'groz@fasad-alta.ru', // Почта для получения уведомлений о заказах
		'phone' => '8-(800)-302-53-96', // Телефон сайта
		'phone_call' => '78003025396', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '76646310',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],

	'surgut.alta-profil.pro' => [
		'group_id' => 2,
		'city_1' => 'Сургут',
		'city_2' => 'Сургуте',
		'city_3' => 'Сургута',
		'city_reg' => 'Ханты-Мансийский автономный округ',
		'city_mini' => '',
		'company_logo' => '/templates/jblank/images/inner/logo.png', // ссылка на лого
		'company_name' => 'Альта-Профиль Сургут', // название компании без кавычек
		'company_yourname' => 'ООО "ЭкоГрад"', // юридическое название компании
		'bank' => 'Точка ПАО Банка «ФК Открытие» г. Москва<br>Р/сч 40702810809500011252<br>К/сч 30101810845250000999<br>БИК 044525999',
		'company_site' => 'surgut.alta-profil.pro', // сайт компании
		'company_innkpp' => 'ИНН 8602189975 / ОГРН 1128602002396', // ИНН и ОГРН
		'address' => 'ул. Комплектовочная 7/1', // Адрес, который будет на сайте
		'showroom' => true, // Если нет шоурума, то будет написано Пункт выдачи, если есть шоу рум, то будет выводиться магазин
		'address_desc' => '', // Например (ТЦ "Дом сайдинга")
		'address_day' => 'Пн-Вс', // Дни работы
		'address_time' => 'Пн-Пт: 09:00-18:00</br>Сб-Вс: 09:00-15:00', // Время работы
		'contact_time' => '08:00 - 22:00',
		// Доставка
		'delivery_priceincity' => 'Самовывоз - бесплатно. Доставка в пределах Сургута - 1000 руб., за пределы Грозного - Сургута руб. + 30 руб./км.',
		'delivery_sklad_cart' => 'Наш склад находится по адресу: ул. Комплектовочная, 7/1',
		'delivery_priceincity_cart' => 'Стоимость и сроки доставки рассчитываются индивидуально и оплачиваются отдельно. В пределах Сургута 1000 руб., по Ханты-Мансийскому автономному округу 1000 руб. + 30 руб./км от черты города Суругут. По РФ - индивидуально.',
		'map_center' => '[61.273539,73.383203]', // Центр карты по геокодеру яндекса
		'map_location' => '[61.273699,73.376572]', // Точка на карте
		'map_contact' => '<div id="wrapMap"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7f31e9584f86f0a12270f9901f2606bb90ca1da4c236ae2da5024aaec2731e81&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>', // карта в контактах
		'email' => 'savah@yandex.ru', // Почта сайта
		'email_order' => 'isa@fasad-alta.ru ', // Почта для получения уведомлений о заказах
		'phone' => '+7-346-239-09-72', // Телефон сайта
		'phone_call' => '73462390972', // Телефон для звонка (при нажатии на ссылку позвонить)
		'vk' => '',
		'ok' => '',
		'facebook' => '',
		'instagram' => '',
		'sale_prod' => '<span>В зависимости от объема возможны скидки до <span class="cash_prod_minus">-20%</span> - <strong style="color: #f6383c">звоните!</strong></span>',
		'meta_generator_category' => true, // Принудительная генерация метатегов для категорий товаров (см. шаблоны вывода)
		'meta_generator_product' => true, // Принудительная генерация метатегов для товаров (см. шаблоны вывода)
		'yandex_count' => '77841328',
		'affiliat' => true,
		'manager_bitrix_id' => array(1),
		'scripts_file' => '' // адрес из шаблона /templastes/jblank/partial
	],
	
	// НАСТРОЙКИ ПРОЧИХ ДОМЕНОВ / ДЛЯ КОРЕЕКТНОЙ РАБОТЫ ИНТЕГРАЦИИ С МОИМ СКЛАДОМ И ПЕРЕДАЧИ ДАННЫХ МЕЖДУ САЙТАМИ с форм
	'docke.market' => [
		'city_1' => 'Москва',
		'email_order' => 'isa@fasad-alta.ru ', // Почта для получения уведомлений о заказах
		'company_site' => 'docke.market', // сайт компании
		'manager_moysklad_id' => array($chmiyrova_evgeniya['ms_id'],$drobysheva['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
	],	
	'msk.docke.market' => [
		'city_1' => 'Москва',
		'email_order' => 'isa@fasad-alta.ru ', // Почта для получения уведомлений о заказах
		'company_site' => 'msk.docke.market', // сайт компании
		'manager_moysklad_id' => array($chmiyrova_evgeniya['ms_id'],$drobysheva['ms_id']), //id Менеджера в МойСклад
		'ms_sklad' => $ms_msk_sklad, //id Склад в МойСклад
		'ms_group' => $ms_msk41_group, //id Владелец-Отдел(Группа) в МойСклад
	],
];
