INSERT INTO categories VALUES 
	(NULL, "Доски и лыжи", "boards"),
	(NULL, "Крепления", "attachment"),
	(NULL, "Ботинки", "boots"),
	(NULL, "Одежда", "clothing"),
	(NULL, "Инструменты", "tools"),
	(NULL, "Разное", "other");

INSERT INTO users VALUES
	(NULL, "2019-04-11 10:00:00", "sergey@mail.ru", "Сергей", "superpass", "sergey.jpg", "8(999)765-43-21"),
	(NULL, "2019-04-12 10:00:00", "masha@mail.ru", "Маша", "superpass", "masha.jpg", "8(999)765-43-22"),
	(NULL, "2019-04-13 10:00:00", "sasha@mail.ru", "Sasha", "superpass", "sasha.jpg", "8(999)765-43-23"),
	(NULL, "2019-04-14 10:00:00", "goga23@mail.ru", "Горыныч23", "superpass", "goga.jpg", "8(999)765-43-24");

INSERT INTO lots VALUES
	(NULL, "2019-05-11 10:00:00", "2014 Rossignol District Snowboard", "2014 Rossignol District Snowboard",
		"img/lot-1.jpg", 10999, "2019-05-19 17:00:00", 100, 1, 1, 1),
	(NULL, "2019-05-11 09:00:00", "DC Ply Mens 2016/2017 Snowboard", "DC Ply Mens 2016/2017 Snowboard",
		"img/lot-2.jpg", 159999, "2019-05-19 18:00:00", 100, 1, 2, 1),
	(NULL, "2019-05-11 08:00:00", "Крепления Union Contact Pro 2015 года размер L/XL", "Крепления Union Contact Pro 2015 года размер L/XL",
		"img/lot-3.jpg", 8000, "2019-05-19 19:00:00", 100, 1, 2, 2),
	(NULL, "2019-05-11 10:30:00", "Ботинки для сноуборда DC Mutiny Charocal", "Ботинки для сноуборда DC Mutiny Charocal",
		"img/lot-4.jpg", 10999, "2019-05-19 17:05:00", 100, 1, 1, 3),
	(NULL, "2019-05-11 10:10:00", "Куртка для сноуборда DC Mutiny Charocal", "Куртка для сноуборда DC Mutiny Charocal",
		"img/lot-5.jpg", 7500, "2019-05-19 17:30:00", 100, 1, 3, 4),
	(NULL, "2019-05-11 10:01:00", "Маска Oakley Canopy", "Маска Oakley Canopy",
		"img/lot-6.jpg", 5400, "2019-05-19 00:00:00", 100, 1, 4, 6);

INSERT INTO bets VALUES
	(NULL, "2019-05-11 11:00:00", 11099, 1, 1),
	(NULL, "2019-05-11 11:05:00", 8100, 1, 3),
	(NULL, "2019-05-11 11:10:00", 8200, 1, 3),
	(NULL, "2019-05-11 11:00:00", 5500, 1, 6);

/* Получение всех категорий */
SELECT name FROM categories;

/* Получение самых новых, открытых лотов:
каждый лот содержит название, стартовую цену, ссылку на изображение, цену, название категории */
SELECT name, price_begin, image, price_rate, category FROM bets
RIGHT JOIN lots ON lot = lots.id
WHERE date_end >= NOW();

/* Показ лота по его id. Получите также название категории, к которой принадлежит лот */