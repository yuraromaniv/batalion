# batalion

ver. 0.9.1
  - відновив reCAPTCHA V2
  - виправив кілька багів у формах

ver. 0.9
  - видалив календар
  - змінив розмір таблиці Внесни/Пожертвування

ver. 0.8.9
  - змінив reCAPTCHA V2 на Invisible reCAPTCHA
  - встановив плагіни:
    - Limit Login Attempts Reloaded - ліміт кількості логувань
    - Rename wp-login.php - зміна url форми логування ("/cpanel" замість "/admin")

ver. 0.8.8
  - функціонал сторінки "Внески та пожертвування"
  - підключив його пошту до:
    - коментарів +-
    - контактних форм
    - капчі

ver. 0.8.7
  - добавив колонку "Дата" в таблицю Членські внески/Пожертування 

ver. 0.8.6
  - трохи налаштував календар

ver. 0.8.5
  - пофіксив шаблони останніх блогів (картинки при різних розширеннях)
  - пофіксив олівець "Залиште ваше запитання", при різних розширеннях
  - поправив кнопку "Завантажити більше"

ver. 0.8.4
  - додав сторінку "Внески/Пожертування" (archive-donations.php)

ver. 0.8.3
  - Підключив сторінки:
    - "Наші погляди" (archive-our_looks.php)
    - "Бібліотека" (archive-library.php)
  - Налаштував форму "Залиште ваше запитання" (без капчі)

ver. 0.8.2
  - зверстав сторінку внески/пожертвування

ver. 0.8.1
  - пофіксив блок "Наша Команда"
  - добавив в форму "Стати членом" інпут "Ваш вік", який не дозволяє ввести число <15
ver. 0.8
  - добавив фіксовану кнопку знизу справа, яка викликає модал

ver. 0.7.1
  - встановив коментарі від dusqus
  - функціонал для сторінок:
    - single-blogs.php
    - single-discussions.php

ver. 0.7
  - добавив фото команди
  - пофіксив слайдер
  - замість iframe на прев’ю блогів поставив картинку
  - в останніх блогах повісив одну загальну ссилку на фото, надпис і дату
  
ver. 0.6.1
  - функціонал для сторінок:
    - single-events.php
    - не доробив коментарі!!!

ver. 0.6
  - перевів сайт на PHP 7 та MySQL 5.7
  - функціонал для сторінок:
    - archive-blogs.php
    - archive-discussions.php

ver. 0.5
  - менюшка на телефонах (sandwich)
  - головна->останні новини-> один тег <a> для цілої публікації
  - на головній виправив новини на події
  - перехід у нову вкладку, після натискання на партнера
  - прикріпив тег <a> до лого, з посиланням на головну сторінку
  - мітка з адресою офісу на карті, на стор. "Контакти"
  - дав margin-bottom після капчі

ver. 0.4.1
  - функціонал для сторінки archive-events.php (Ajax підвантаження публікацій)

ver. 0.4
  - нові типи публікацій:
    - Наші погляди
    - Корисні поради
  - функціонал для сторінок:
    - content-home.php
    - content-our-team.php
    - content-footer.php

ver. 0.3
  - замінив лого
  - змінив max-width лого на 200px
  - забрав rotate з стрілки дропдаун про нас
  - забрав колір в стрілки
  - стилізував дропдаунменю про нас
  - повісив ссилки на головний слайдер
  - в розділі цілі та завдання поміняв дві перших іконки
  - повісив посилання на останні новини
  - повісив ссилки на останні блоги
  - забрав клас контейнер з content-footer
  - змінив розмір col l в content-footer
  - в інпутах форми розмістив текст, який вписується по центрі (content-footer)
  - залив оригінальні тексти про нас
  - Наші погляди: забрав нумерацію, вирівняв погляд по центрі, змінив шрифт погляду
  - Наші погляди: залив оригінальний текст
  - Аналіз сучасного стану: залив оригінальний текст
  - Повісив ссилки на новини
  - Повісив ссилки на блоги
  - Додав margin-bottom для блогів

ver. 0.2
  - створив файли:
    - archive-events.php
    - archive-blogs.php
    - archive-discussions.php
    - single-events.php
    - single-blogs.php
    - single-discussions.php
    - page.php
    - content-our-team.php
  - створив сторінки:
    - Аналіз сучасого стану
    - Бібліотека (тестово)
    - Контакти
    - Наші погляди (тестово)
    - Про нас
    - Членство та характеристики

ver. 0.1
  - створив тему
  - створив типи публікацій:
    - Події
    - Блоги
    - Обговорення
    - Цілі та завдання
    - Команда
    - Партнери
  - встановив плагіни:
    - Advanced Custom Fields
    - User Role Editor
  - створив кастомні поля:
    - Наша команда (гасло)
    - Партнери (посилання на партнера)
