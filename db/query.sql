CREATE TABLE `akkVis` (
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `nick` varchar(255),
    `note` text,
    `likey` int DEFAULT 0,
    `img` varchar(255),
    `created` timestamp DEFAULT CURRENT_TIMESTAMP
)