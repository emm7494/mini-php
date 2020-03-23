--
-- Creating `products` table data
--
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL DEFAULT 0,
  `image` varchar(128) NOT NULL DEFAULT 'default_image.jpg',
  PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 1;

--
-- Inserting `products` table data
--
INSERT INTO
  `products` (
    `name`,
    `price`,
    `quantity`,
    `image`,
  )
VALUES
  (
    'Nokia 3310',
    110.99,
    18,
    'Nokia_3310.jpeg',
  ),
  (
    'Beats',
    950.99,
    6,
    'default_image.png',
  ),
  (
    'Nokia 8 Sirocco',
    1200.99,
    12,
    'default_image.png',
  ),
  (
    'Samsung Galaxy s8',
    1250.99,
    14,
    'default_image.png',
  ),
  (
    'Apple Watch',
    11.99,
    4,
    'default_image.png',
  ),
  (
    'Samsung Galaxy Watch',
    12.99,
    8,
    'default_image.png',
  ),
  (
    'HP Pavilion Power',
    3100.99,
    3,
    'default_image.png',
  );