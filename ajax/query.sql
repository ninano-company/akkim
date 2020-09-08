CREATE TABLE `tsContainer` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `text1` text,
  `text2` text,
  `text3` text,
  `cate` varchar(255),
  `created` timestamp DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `tsContainer` (text1, text2, text3, cate)
    VALUES
        ("간절곶 소망길",
        "길을 걸으면 만난다! 간절히 원하면 이루어진다!",
        "한반도의 새해를 여는 '간절곶'의 명칭과 해맞이를 통해 한 해의 소망을 기원하는 바램, 두가지 의미를 담아 만들어진 해안길.
        간절곶 소망길은 진하 명선교에서 시작하여 남쪽 해안을 따라 신암항까지 10km이며,
        꿈 사랑 등 각자의 소망이 이루어지길 기원하며
        아름다운 자연속으로 가족, 친구와 함께 소통과 힐링의 시간을 가져보세요!",
        "korean"),
        ("Ganjeolgot Hope Road",
        "It'll be done, if you hope",
        "The coastal road was created with two meanings: the name of Ganjeolgot, which opens the New Year on the Korean Peninsula,
        and the wish to wish for a year through sunrise.Ganjeolgot Somanggil starts from Jinha Myeongseon Bridge
        and is 10km along the southern coast to Sinam Port, and wishes for each wish, such as dream and love,
        to have a time of communication and healing with family and friends in beautiful nature!",
        "english")