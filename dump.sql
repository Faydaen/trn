
create table pers
(
  id        int auto_increment  primary key,
  name      VARCHAR(128)        null,
  sex       VARCHAR(1)          null,
  alignment VARCHAR(64)         null,
  universe  VARCHAR(64)         null,
  power     float default '10'  not null,
  isAlive   tinyint default '1' null,
  buttle    json                null,
  image     varchar(64)         null
);


INSERT INTO `tour`.`pers` (`name`, `sex`, `alignment`, `universe`) VALUES 
-- mortal kombat
('Соня Блейд', 'f', 'good', 'mortal kombat'),
('Сабизо', 'm', 'good', 'mortal kombat'),
('Скорпион', 'm', 'evil', 'mortal kombat'),
('Рейдан', 'm', 'good', 'mortal kombat'),
('Шао Кан', 'm', 'evil', 'mortal kombat'),
('Джони Кейдж', 'm', 'good', 'mortal kombat'),
('Шансунг', 'm', 'evil', 'mortal kombat'),
('Кваньчи', 'm', 'evil', 'mortal kombat'),
('Найт Вульф', 'm', 'good', 'mortal kombat'),
('Лю Кан', 'm', 'good', 'mortal kombat'),
('Синдел', 'f', 'evil', 'mortal kombat'),
('Шива', 'f', 'evil', 'mortal kombat'),
('Шинок', 'm', 'evil', 'mortal kombat'),
('Горо', 'm', 'evil', 'mortal kombat'),

-- rick and morty
('Самер Смит', 'f', 'good', 'rick and morty'),
('Морти Смит', 'm', 'good', 'rick and morty'),
('Рик Санчес', 'm', 'neutral', 'rick and morty'),

-- harry potter
('Гарри Поттер', 'm', 'good', 'harry potter'),
('Рон Узли', 'm', 'good', 'harry potter'),
('Волон Де Морт', 'm', 'evil', 'harry potter'),
('Драко Малфой', 'm', 'evil', 'harry potter'),
('Гермиона Грейджер', 'f', 'good', 'harry potter'),
('Миневра Макгонокал', 'f', 'good', 'harry potter'),
('Беллатриса Лестрейндж', 'f', 'evil', 'harry potter'),

-- star wars
('Йода', 'm', 'good', 'star wars'),
('Боба Фет', 'm', 'evil', 'star wars'),
('Оби Ван Кеноби', 'm', 'good', 'star wars'),
('Квай Гон Джин', 'm', 'good', 'star wars'),
('Палпатин', 'm', 'evil', 'star wars'),
('Дарт Мол', 'm', 'evil', 'star wars'),
('Дарт Вейдер', 'm', 'evil', 'star wars'),
('Люк Скайвокер', 'm', 'good', 'star wars'),
('Кайло Рен', 'm', 'evil', 'star wars'),
('Рей', 'f', 'good', 'star wars'),
('Сноук', 'm', 'evil', 'star wars'),
('Лея Органо', 'm', 'good', 'star wars'),
('Хакс', 'm', 'evil', 'star wars'),
('Фазма', 'f', 'evil', 'star wars'),
('Падме', 'f', 'good', 'star wars'),
('Джа-Джа Бинкс', 'm', 'neutral', 'star wars'),
('Ахсока Тано', 'f', 'good', 'star wars'),
('Асаш Вентрас', 'f', 'evil', 'star wars'),
('Аяла Секура', 'f', 'good', 'star wars'),
('Гривус', 'm', 'evil', 'star wars'),

-- game of thrones
('Джон Сноу', 'm', 'good', 'game of thrones'),
('Дейнерис Таргаран', 'f', 'good', 'game of thrones'),
('Арья Старк', 'f', 'good', 'game of thrones'),
('Санса Старк', 'f', 'good', 'game of thrones'),
('Визейрес Таргариан', 'm', 'evil', 'game of thrones'),
('Питер Бейлиш', 'm', 'evil', 'game of thrones'),
('Варис', 'm', 'neutral', 'game of thrones'),
('Серсея Ланистр', 'f', 'evil', 'game of thrones'),
('Рамси Сноу', 'm', 'evil', 'game of thrones'),
('Дрого', 'm', 'neutral', 'game of thrones'),
('Джофри Баратеон', 'm', 'good', 'game of thrones'),
('Тирион Ланистр', 'm', 'good', 'game of thrones'),
('Милисандра', 'f', 'evil', 'game of thrones'),

-- family guy
('Лоис Грифин', 'f', 'good', 'family guy'),
('Питер Грифен', 'm', 'good', 'family guy'),
('Брайн Грифен', 'm', 'neutral', 'family guy'),
('Мег Грифен', 'f', 'good', 'family guy'),
('Стьюи Грифен', 'm', 'evil', 'family guy'),
('Крис Грифен', 'm', 'good', 'family guy'),

-- the simpsons
('Гомер Симпсон', 'm', 'good', 'the simpsons'),
('Лиза Симпсон', 'f', 'good', 'the simpsons'),
('Эдна Крабаппл', 'f', 'good', 'the simpsons'),
('Сеймур Скиннер ', 'm', 'good', 'the simpsons'),

-- american dad
('Стен Смит', 'm', 'good', 'american dad'),
('Франсин Смит', 'f', 'good', 'american dad'),
('Роджер', 'm', 'neutral', 'american dad'),
('Хели Смит', 'f', 'good', 'american dad'),
('Стив Смит', 'm', 'good', 'american dad'),

-- bojack horseman
('Конь Боджек', 'm', 'neutral', 'bojack horseman'),
('Принцеса Керолин', 'f', 'good', 'bojack horseman'),
('Ана Спаникопита', 'f', 'neutral', 'bojack horseman'),
('Диана Нгуейн', 'f', 'good', 'bojack horseman'),

-- the hunger games
('Китнисс Эвердин', 'f', 'good', 'the hunger games'),

-- star track
('Жан Люк Пикард', 'm', 'good', 'star track'),
('Бевели Крашер', 'f', 'good', 'star track'),
('Диана Трой', 'f', 'good', 'star track'),
('Дейта', 'm', 'good', 'star track'),
('Ульем Райкер', 'm', 'good', 'star track'),
('Таша Яр', 'f', 'good', 'star track'),
('Спок', 'm', 'good', 'star track'),
('Дженис Рэнд', 'f', 'good', 'star track'),
('7 из 9', 'f', 'good', 'star track'),
('Кэтрин Джейнвэй', 'f', 'good', 'star track'),
('Чакотай', 'm', 'good', 'star track'),
('Тувок', 'm', 'good', 'star track'),
('Б-Эланна Торрес', 'f', 'good', 'star track'),
('Кесс', 'm', 'good', 'star track'),

-- the witcher
('Герольд', 'm', 'good', 'the witcher'),
('Цири', 'f', 'good', 'the witcher'),
('Трис Меригольт', 'f', 'good', 'the witcher'),
('Йенифер', 'f', 'good', 'the witcher'),

-- claymore
('Клэр', 'f', 'good', 'claymore'),

-- gravity falls
('Бил Сайфер', 'm', 'evil', 'gravity falls'),
('Гидеон Глифул', 'm', 'evil', 'gravity falls'),
('Венди Кордрой', 'f', 'good', 'gravity falls'),
('Диппер Пайнс', 'm', 'good', 'gravity falls'),
('Мейбел Пайнс', 'f', 'good', 'gravity falls'),

-- silent hill
('Алесса Гиллеспи', 'f', 'evil', 'silent hill'),

-- ghost in the shell
('Мотоко Кусонаги', 'f', 'good', 'ghost in the shell'),

-- the matrix
('Нео', 'm', 'good', 'the matrix'),
('Тринити', 'f', 'good', 'the matrix'),
('Агент Смит', 'm', 'evil', 'the matrix'),

-- star craft
('Сара Кериган', 'f', 'neutral', 'star craft'),
('Джим Рейнор', 'm', 'good', 'star craft'),
('Мэтт Хорнер', 'm', 'good', 'star craft'),
('Арктур Менгск', 'm', 'evil', 'star craft'),
('Нова', 'f', 'good', 'star craft'),
('Абатур', 'm', 'neutral', 'star craft'),

-- other
('Бетмен', 'm', 'good', 'other'),
('Супермен', 'm', 'good', 'other'),
('Спайдер Мен', 'm', 'good', 'other'),
('Локи', 'm', 'evil', 'other'),
('Лилу', 'f', 'good', 'other'),
('Джек Воробей', 'm', 'neutral', 'other');


