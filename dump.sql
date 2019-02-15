
CREATE TABLE characters
(
  id        SERIAL              not null,
  name      VARCHAR(128)        null,
  sex       VARCHAR(1)          null,
  alignment VARCHAR(64)         null,
  universe  VARCHAR(64)         null,
  power     float default '10'  not null,
  image     VARCHAR(64)         null
);

INSERT INTO characters (name, sex, alignment, universe, image) VALUES
-- mortal kombat
('Соня Блейд', 'f', 'good', 'mortal kombat', 'sonya.png'),
('Рейден', 'm', 'good', 'mortal kombat', 'raiden.jpg'),
('Шао Кан', 'm', 'evil', 'mortal kombat', 'shaokan.jpg'),
('Шанг Цунг', 'm', 'evil', 'mortal kombat', 'shanzung.jpg'),
('Куан Чи', 'm', 'evil', 'mortal kombat', 'kvanchi.jpg'),
('Лю Канг', 'm', 'good', 'mortal kombat', 'lukang.jpg'),
('Синдел', 'f', 'evil', 'mortal kombat', 'sindel.png'),
('Шива', 'f', 'evil', 'mortal kombat', 'shiva.jpg'),
('Горо', 'm', 'evil', 'mortal kombat', 'gorro.jpg'),

-- harry potter
('Гарри Поттер', 'm', 'good', 'harry potter', 'poter.jpeg'),
('Рон Узли', 'm', 'good', 'harry potter', 'ron.jpg'),
('Волон Де Морт', 'm', 'evil', 'harry potter', 'volendemort.jpg'),
('Драко Малфой', 'm', 'evil', 'harry potter', 'drako.jpg'),
('Гермиона Грейджер', 'f', 'good', 'harry potter', 'germiona.jpg'),
('Миневра Макгонокал', 'f', 'good', 'harry potter', 'mcgonagall.jpg'),
('Беллатриса Лестрейндж', 'f', 'evil', 'harry potter', 'belotrisa.jpg'),
('Доби', 'm', 'neutral', 'harry potter', 'doby.jpg'),

-- the hunger games
('Китнисс Эвердин', 'f', 'good', 'the hunger games', 'kitnes.jpg'),

-- game of thrones
('Джон Сноу', 'm', 'good', 'game of thrones', 'snou.jpg'),
('Дейенерис Таргариен', 'f', 'good', 'game of thrones', 'deaneris.jpeg'),
('Арья Старк', 'f', 'good', 'game of thrones', 'aria.png'),
('Санса Старк', 'f', 'good', 'game of thrones', 'sansa.jpg'),
('Визерис Таргариен', 'm', 'evil', 'game of thrones', 'viserys.jpg'),
('Серсея Ланнистер', 'f', 'evil', 'game of thrones', 'serseia.jpg'),
('Рамси Сноу', 'm', 'evil', 'game of thrones', 'ramsi.png'),
('Дрого', 'm', 'neutral', 'game of thrones', 'drogo.png'),
('Джоффри Баратеон', 'm', 'good', 'game of thrones', 'jofri.jpeg'),
('Тирион Ланнистер', 'm', 'good', 'game of thrones', 'tirion.jpeg'),
('Мелисандра', 'f', 'evil', 'game of thrones', 'milsiandra.jpeg'),

-- the witcher
('Герольд', 'm', 'good', 'the witcher','whitcher.png'),
('Цири', 'f', 'good', 'the witcher','ciry.jpg'),
('Трис Меригольт', 'f', 'good', 'the witcher','tris.jpeg'),
('Йенифер', 'f', 'good', 'the witcher','jenipher.jpg'),

-- star wars
('Йода', 'm', 'good', 'star wars', 'yoda.jpeg'),
('Оби Ван Кеноби', 'm', 'good', 'star wars', 'obivan.jpeg'),
('Квай Гон Джин', 'm', 'good', 'star wars', 'qvaygon.jpeg'),
('Палпатин', 'm', 'evil', 'star wars', 'palpatin.jpg'),
('Дарт Мол', 'm', 'evil', 'star wars', 'darthmoll.jpeg'),
('Дарт Вейдер', 'm', 'evil', 'star wars', 'dartvaidor.jpeg'),
('Люк Скайуокер', 'm', 'good', 'star wars', 'luk.jpeg'),
('Кайло Рен', 'm', 'evil', 'star wars', 'kayloren.jpeg'),
('Рей', 'f', 'good', 'star wars', 'ray.jpeg'),
('Сноук', 'm', 'evil', 'star wars', 'snouk.jpeg'),
('Лея Органо', 'm', 'good', 'star wars', 'leya.jpg'),
('Армитаж Хакс', 'm', 'evil', 'star wars', 'haks.png'),
('Ахсока Тано', 'f', 'good', 'star wars', 'ahsoka.jpg'),
('Асажж Вентресс', 'f', 'evil', 'star wars', 'asash.jpg'),
('Эйла Секура', 'f', 'good', 'star wars', 'secura.jpg'),
('Гривус', 'm', 'evil', 'star wars', 'grivus.jpeg'),

-- star track
('Жан Люк Пикард', 'm', 'good', 'star track','picard.jpg'),
('Беверли Крашер', 'f', 'good', 'star track','bevarli.jpg'),
('Диана Трой', 'f', 'good', 'star track','diana.jpg'),
('Дейта', 'm', 'good', 'star track','deyta.jpg'),
('Уильям Райкерр', 'm', 'good', 'star track','rayker.jpg'),
('Таша Яр', 'f', 'good', 'star track','yar.jpg'),
('Спок', 'm', 'good', 'star track','spok.jpg'),
('Дженис Рэнд', 'f', 'good', 'star track','rend.jpeg'),
('7 из 9', 'f', 'good', 'star track','7of9.jpg'),
('Кэтрин Джейнвэй', 'f', 'good', 'star track','janeway.jpg'),
('Чакотай', 'm', 'good', 'star track','chakotay.jpg'),
('Б-Эланна Торрес', 'f', 'good', 'star track','belanna.jpg'),
('Кесс', 'm', 'good', 'star track','kes.jpg'),

-- claymore
('Клэр', 'f', 'good', 'claymore','clare.jpg'),

-- ghost in the shell
('Мотоко Кусонаги', 'f', 'good', 'ghost in the shell','motoco.jpg'),

-- the matrix
('Тринити', 'f', 'good', 'the matrix','triniti.jpg'),
('Агент Смит', 'm', 'evil', 'the matrix','smith.jpeg'),

-- star craft
('Сара Керриган', 'f', 'neutral', 'star craft','kerrigan.jpg'),
('Джим Рейнор', 'm', 'good', 'star craft','rainor.jpg'),
('Мэтт Хорнер', 'm', 'good', 'star craft','met.jpg'),
('Арктур Менгск', 'm', 'evil', 'star craft','menks.jpg'),
('Нова', 'f', 'good', 'star craft','nova.jpg'),
('Абатур', 'm', 'neutral', 'star craft','abadur.jpg'),

-- silent hill
('Алесса Гиллеспи', 'f', 'evil', 'silent hill','alexa.jpg');


--
--
-- -- rick and morty
-- ('Самер Смит', 'f', 'good', 'rick and morty','),
-- ('Морти Смит', 'm', 'good', 'rick and morty'),
-- ('Рик Санчес', 'm', 'neutral', 'rick and morty'),
--
-- -- family guy
-- ('Лоис Грифин', 'f', 'good', 'family guy'),
-- ('Питер Грифен', 'm', 'good', 'family guy'),
-- ('Брайн Грифен', 'm', 'neutral', 'family guy'),
-- ('Мег Грифен', 'f', 'good', 'family guy'),
-- ('Крис Грифен', 'm', 'good', 'family guy'),
--
-- -- the simpsons
-- ('Лиза Симпсон', 'f', 'good', 'the simpsons'),
-- ('Эдна Крабаппл', 'f', 'good', 'the simpsons'),
-- ('Сеймур Скиннер ', 'm', 'good', 'the simpsons'),
--
-- -- american dad
-- ('Стен Смит', 'm', 'good', 'american dad'),
-- ('Франсин Смит', 'f', 'good', 'american dad'),
-- ('Роджер', 'm', 'neutral', 'american dad'),
-- ('Хели Смит', 'f', 'good', 'american dad'),
-- ('Стив Смит', 'm', 'good', 'american dad'),
--
-- -- -- bojack horseman
-- ('Конь Боджек', 'm', 'neutral', 'bojack horseman'),
-- ('Принцеса Керолин', 'f', 'good', 'bojack horseman'),
-- ('Ана Спаникопита', 'f', 'neutral', 'bojack horseman'),
-- ('Диана Нгуейн', 'f', 'good', 'bojack horseman'),
--
--

--

--
-- -- ('Локи', 'm', 'evil', 'other'),
-- -- ('Лилу', 'f', 'good', 'other'),
-- -- ('Ксардас', 'm', 'neutral', 'gothic'),
-- -- ('Дьябло', 'm', 'evil', 'other'),
-- -- ('Мелифисента', 'f', 'good', 'other'),
-- -- ('Харли Квин', 'f', 'neutral', 'other'),
-- -- ('Фейтон', 'm', 'evil', 'other'),
-- -- ('Туранга Лила', 'f', 'good', 'other');


create table battles
(
 id SERIAL not null,
 first INT not null,
 first_power float not null,
 second INT not null,
 second_power float not null,
 winner INT not null,
 damage float not null,
 battlefield varchar(64) null,
 finishing text null
);



