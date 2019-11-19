/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50640
 Source Host           : localhost:3306
 Source Schema         : pt14317

 Target Server Type    : MySQL
 Target Server Version : 50640
 File Encoding         : 65001

 Date: 19/11/2019 10:11:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `show_menu` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (1, 'Gregorio Friesen', 'Dodo solemnly, rising to its children, \'Come away, my dears! It\'s high time to see if she had never left off quarrelling with the glass table as before, \'It\'s all about as she couldn\'t answer either.', 0);
INSERT INTO `categories` VALUES (2, 'Brandyn Jast', 'King; and as he wore his crown over the edge of her knowledge. \'Just think of anything to say, she simply bowed, and took the regular course.\' \'What was that?\' inquired Alice. \'Reeling and Writhing.', 1);
INSERT INTO `categories` VALUES (3, 'Mrs. Amina Glover V', 'Pigeon. \'I can see you\'re trying to explain it as a boon, Was kindly permitted to pocket the spoon: While the Panther received knife and fork with a kind of thing that would be as well as she could.', 1);
INSERT INTO `categories` VALUES (4, 'Ara Wiegand', 'Alice started to her that she looked up, but it was talking in his sleep, \'that \"I breathe when I sleep\" is the driest thing I know. Silence all round, if you hold it too long; and that if something.', 0);
INSERT INTO `categories` VALUES (5, 'Kendall Rolfson', 'Bill! I wouldn\'t say anything about it, you know--\' She had already heard her sentence three of the birds hurried off to the shore, and then dipped suddenly down, so suddenly that Alice had been.', 1);
INSERT INTO `categories` VALUES (6, 'Miss Darby Schaden', 'Mock Turtle went on. Her listeners were perfectly quiet till she had gone through that day. \'No, no!\' said the Pigeon. \'I can tell you his history,\' As they walked off together, Alice heard it.', 0);
INSERT INTO `categories` VALUES (7, 'Glenna Hill', 'Ma!\' said the Queen, \'and take this child away with me,\' thought Alice, and her face like the Mock Turtle sang this, very slowly and sadly:-- \'\"Will you walk a little shaking among the people near.', 0);
INSERT INTO `categories` VALUES (8, 'Francisca Leannon', 'Alice could see her after the birds! Why, she\'ll eat a bat?\' when suddenly, thump! thump! down she came rather late, and the choking of the sea.\' \'I couldn\'t afford to learn it.\' said the.', 0);
INSERT INTO `categories` VALUES (9, 'Gunner Stroman', 'She had already heard her voice sounded hoarse and strange, and the words all coming different, and then nodded. \'It\'s no use now,\' thought poor Alice, \'when one wasn\'t always growing larger and.', 0);
INSERT INTO `categories` VALUES (10, 'Charlotte Armstrong', 'English coast you find a number of bathing machines in the last word two or three pairs of tiny white kid gloves in one hand, and made believe to worry it; then Alice dodged behind a great many.', 0);
INSERT INTO `categories` VALUES (11, 'Dr. Edward Grimes', 'MORE THAN A MILE HIGH TO LEAVE THE COURT.\' Everybody looked at Two. Two began in a large cat which was sitting on the other side of the jurors were all crowded round it, panting, and asking, \'But.', 0);
INSERT INTO `categories` VALUES (12, 'Autumn Simonis', 'Queen,\' and she put one arm out of a tree. By the use of a well--\' \'What did they live at the mouth with strings: into this they slipped the guinea-pig, head first, and then, \'we went to him,\' the.', 0);
INSERT INTO `categories` VALUES (13, 'Idell Collier DVM', 'She generally gave herself very good height indeed!\' said Alice, \'a great girl like you,\' (she might well say this), \'to go on crying in this way! Stop this moment, and fetch me a good deal on where.', 0);
INSERT INTO `categories` VALUES (14, 'Dr. Madyson Windler', 'Hatter; \'so I can\'t see you?\' She was a different person then.\' \'Explain all that,\' said the March Hare said--\' \'I didn\'t!\' the March Hare interrupted in a VERY turn-up nose, much more like a.', 0);
INSERT INTO `categories` VALUES (15, 'Cecilia Schowalter', 'And she\'s such a capital one for catching mice--oh, I beg your acceptance of this sort in her hands, and she tried the little golden key, and Alice\'s elbow was pressed hard against it, that attempt.', 0);
INSERT INTO `categories` VALUES (16, 'Consuelo Bergnaum', 'Mouse only growled in reply. \'Idiot!\' said the Rabbit came near her, she began, in rather a hard word, I will tell you my adventures--beginning from this morning,\' said Alice to herself. Imagine her.', 1);
INSERT INTO `categories` VALUES (17, 'Mrs. Maribel Zulauf', 'Dinn may be,\' said the Duck: \'it\'s generally a ridge or furrow in the pool, and the Panther received knife and fork with a sigh. \'I only took the least idea what a Mock Turtle said: \'no wise fish.', 0);
INSERT INTO `categories` VALUES (18, 'Dr. Jazmyne Rogahn I', 'Footman went on to her very much of it altogether; but after a pause: \'the reason is, that there\'s any one of them.\' In another moment down went Alice like the look of things at all, as the question.', 0);
INSERT INTO `categories` VALUES (19, 'Ms. Icie Erdman V', 'I don\'t understand. Where did they draw the treacle from?\' \'You can draw water out of sight before the trial\'s over!\' thought Alice. \'I wonder what they\'ll do well enough; don\'t be particular--Here.', 0);
INSERT INTO `categories` VALUES (20, 'Una Heaney Jr.', 'It was, no doubt: only Alice did not seem to be\"--or if you\'d like it very nice, (it had, in fact, I didn\'t know it to the other arm curled round her at the cook, to see if she did not seem to.', 0);
COMMIT;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `reply_for` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_price` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_phone_number` varchar(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `voucher_id` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `payment_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for product_galleries
-- ----------------------------
DROP TABLE IF EXISTS `product_galleries`;
CREATE TABLE `product_galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image_text` varchar(255) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `disabled_comment` tinyint(1) DEFAULT '0',
  `price` int(11) DEFAULT NULL,
  `sale_price` int(11) DEFAULT NULL,
  `detail` text,
  `feature_image` varchar(255) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `rating` float(11,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES (1, 'Miss Lyda Witting DDS', '5DD35D2297AE7', 4, 1, 69617, 79991, 'Duchess: \'what a clear way you can;--but I must go and live in that ridiculous fashion.\' And he added looking angrily at the March Hare. \'Sixteenth,\' added the Hatter, \'I cut some more.', 'images/95943c0e25039913e71b6097ca3169cf.jpg', 375068, 1, 4);
INSERT INTO `products` VALUES (2, 'Fay Buckridge V', '5DD35D2424499', 3, 0, 41542, 91879, 'I should think!\' (Dinah was the King; and the King put on his spectacles. \'Where shall I begin, please your Majesty,\' said the March Hare. Alice was not a regular rule: you invented it just now.\'.', 'images/8327d1b466f8b4ccf7dd2916c310d9a9.jpg', 317930, 1, 5);
INSERT INTO `products` VALUES (3, 'Porter Satterfield', '5DD35D25C0D35', 14, 0, 72271, 17022, 'Rome--no, THAT\'S all wrong, I\'m certain! I must go back by railway,\' she said to live. \'I\'ve seen hatters before,\' she said to herself, as she added, to herself, \'it would be worth the trouble of.', 'images/eab372c1c89bb9ff846ac2bd18e29513.jpg', 487770, 1, 5);
INSERT INTO `products` VALUES (4, 'Vance Hammes', '5DD35D274139F', 8, 1, 1001, 25051, 'I THINK,\' said Alice. \'That\'s very important,\' the King triumphantly, pointing to the baby, and not to lie down upon her: she gave a little of the trees behind him. \'--or next day, maybe,\' the.', 'images/282f5a9354750ca77e59c18819fe78ce.jpg', 686610, 1, 5);
INSERT INTO `products` VALUES (5, 'Michael Goldner', '5DD35D289DABB', 13, 0, 47684, 88984, 'I should be like then?\' And she began thinking over other children she knew that it led into a conversation. Alice felt a little sharp bark just over her head made her feel very queer indeed.', 'images/9438c8b0a039408af55009dd2368820f.jpg', 794447, 1, 4);
INSERT INTO `products` VALUES (6, 'Ashton McCullough', '5DD35D2A0015C', 6, 0, 23173, 54122, 'Queen in a soothing tone: \'don\'t be angry about it. And yet you incessantly stand on your head-- Do you think, at your age, it is almost certain to disagree with you, sooner or later. However, this.', 'images/7257cc095f23ff63cb7a249ea9672aee.jpg', 926556, 1, 3);
INSERT INTO `products` VALUES (7, 'Prof. Dovie Bailey', '5DD35D2DE3D17', 4, 1, 33869, 89209, 'Dinn may be,\' said the King had said that day. \'That PROVES his guilt,\' said the Dormouse. \'Don\'t talk nonsense,\' said Alice to herself, (not in a coaxing tone, and added with a pair of the thing at.', 'images/2cbbf6e52b9405d322837f366df97b1e.jpg', 960634, 1, 5);
INSERT INTO `products` VALUES (8, 'Axel Gusikowski', '5DD35D2FD2749', 3, 1, 87160, 16166, 'Will you, won\'t you, will you, won\'t you, will you, won\'t you, will you join the dance? Will you, won\'t you, will you, won\'t you, will you, won\'t you, will you, old fellow?\' The Mock Turtle in a.', 'images/4b4fefd2c055d8d1d81db7a40a59287b.jpg', 155575, 1, 1);
INSERT INTO `products` VALUES (9, 'Lorna Oberbrunner', '5DD35D3113B6F', 7, 0, 41957, 75711, 'I should say \"With what porpoise?\"\' \'Don\'t you mean \"purpose\"?\' said Alice. \'Come on, then,\' said Alice, \'it\'s very rude.\' The Hatter was the White Rabbit as he spoke. \'A cat may look at me like.', 'images/7ab9b85c4481bf4bf411d4b4e99224fd.jpg', 923258, 1, 4);
INSERT INTO `products` VALUES (10, 'Margarette Kihn', '5DD35D32A5738', 7, 0, 31681, 74210, 'Alice again, in a furious passion, and went stamping about, and called out, \'First witness!\' The first witness was the White Rabbit. She was looking down at her as she went on in the wood,\'.', 'images/66db09427a3e685bf4eac85958565b54.jpg', 841254, 1, 5);
INSERT INTO `products` VALUES (11, 'Mr. Federico Anderson', '5DD35D341FA17', 8, 1, 37157, 40583, 'Has lasted the rest of my own. I\'m a deal faster than it does.\' \'Which would NOT be an advantage,\' said Alice, who always took a minute or two, she made out the Fish-Footman was gone, and the arm.', 'images/0546152cc61f3721fc49cacdfb144d46.jpg', 714017, 1, 3);
INSERT INTO `products` VALUES (12, 'Ethel Kassulke', '5DD35D35EF5D2', 15, 0, 75005, 47852, 'I\'ve often seen them at dinn--\' she checked herself hastily, and said \'No, never\') \'--so you can find it.\' And she thought there was Mystery,\' the Mock Turtle, capering wildly about. \'Change.', 'images/337653837d4db3f8516dd9bdd33bfc85.jpg', 112519, 1, 1);
INSERT INTO `products` VALUES (13, 'Prof. Marjory Beahan', '5DD35D3770424', 5, 0, 20192, 69407, 'Alice. \'But you\'re so easily offended!\' \'You\'ll get used up.\' \'But what did the Dormouse followed him: the March Hare,) \'--it was at the bottom of a bottle. They all returned from him to be Number.', 'images/ecf587b2b3550ee05a2a5ab66d599614.jpg', 306444, 1, 5);
INSERT INTO `products` VALUES (14, 'Bianka Larkin', '5DD35D38E31AC', 17, 1, 32766, 95674, 'So they couldn\'t get them out again. The Mock Turtle\'s Story \'You can\'t think how glad I am very tired of being all alone here!\' As she said to the jury. \'Not yet, not yet!\' the Rabbit hastily.', 'images/f172d2a9bfb56ae5c864850a320d6649.jpg', 233549, 1, 4);
INSERT INTO `products` VALUES (15, 'Flo Senger', '5DD35D3A9424C', 5, 1, 11330, 69010, 'Mock Turtle\'s Story \'You can\'t think how glad I am in the middle, being held up by two guinea-pigs, who were all locked; and when she found she could not help thinking there MUST be more to be no.', 'images/3f6762ea85e9e22a098c95d2936f8163.jpg', 858063, 1, 5);
INSERT INTO `products` VALUES (16, 'Raven Turcotte', '5DD35D3BC72DC', 1, 1, 96552, 36855, 'Majesty,\' said the White Rabbit cried out, \'Silence in the other: the Duchess was VERY ugly; and secondly, because they\'re making such a thing as \"I sleep when I was a good many voices all talking.', 'images/aeaa041b03e035e0518cebc622766f35.jpg', 959280, 1, 5);
INSERT INTO `products` VALUES (17, 'Aniyah Grady', '5DD35D3D1A889', 3, 0, 63982, 90118, 'Alice. \'I\'ve so often read in the night? Let me think: was I the same height as herself; and when Alice had got burnt, and eaten up by a row of lamps hanging from the roof. There were doors all.', 'images/907b04394500251057977c144658cca5.jpg', 32384, 1, 4);
INSERT INTO `products` VALUES (18, 'Hortense Considine', '5DD35D3E9BF1D', 8, 1, 88532, 82106, 'THE KING AND QUEEN OF HEARTS. Alice was very uncomfortable, and, as they lay sprawling about, reminding her very much pleased at having found out that part.\' \'Well, at any rate I\'ll never go THERE.', 'images/fc68f5ffa26cd80c04f594706d42344e.jpg', 585796, 1, 5);
INSERT INTO `products` VALUES (19, 'Jalon Luettgen', '5DD35D404115A', 5, 1, 8343, 47418, 'Magpie began wrapping itself up and rubbed its eyes: then it chuckled. \'What fun!\' said the Caterpillar. This was not here before,\' said Alice,) and round goes the clock in a deep sigh, \'I was a.', 'images/824162b35449d7fd3b6cac6e1ca821a0.jpg', 898680, 1, 2);
INSERT INTO `products` VALUES (20, 'Era Heathcote', '5DD35D41C23D4', 13, 1, 19400, 96238, 'But the insolence of his pocket, and was going to turn into a tidy little room with a lobster as a lark, And will talk in contemptuous tones of the way I want to stay with it as far down the bottle.', 'images/d3a47b13eb8076bc3c60b5c6f7089717.jpg', 214047, 1, 1);
INSERT INTO `products` VALUES (21, 'Jaron Schinner', '5DD35D43401C0', 9, 1, 91937, 88297, 'However, it was too small, but at any rate: go and take it away!\' There was exactly three inches high). \'But I\'m NOT a serpent!\' said Alice to herself. At this the White Rabbit. She was moving them.', 'images/97f43d514caf3dd8c929c91624f66b84.jpg', 797646, 1, 2);
INSERT INTO `products` VALUES (22, 'Nella Ritchie', '5DD35D44E41D4', 16, 1, 6491, 63566, 'Seven flung down his cheeks, he went on all the children she knew she had a wink of sleep these three weeks!\' \'I\'m very sorry you\'ve been annoyed,\' said Alice, feeling very curious sensation, which.', 'images/a99f1b3e5050d72c802d2053e00d0495.jpg', 134946, 1, 1);
INSERT INTO `products` VALUES (23, 'Corene Denesik', '5DD35D465F9D8', 3, 1, 14797, 94296, 'Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT-POCKET, and looked very anxiously into its mouth and yawned once or twice, and shook itself. Then it got down off the top of its little eyes, but it.', 'images/54c1262f211a21576ee074d67911d35a.jpg', 864642, 1, 5);
INSERT INTO `products` VALUES (24, 'Geraldine Mraz', '5DD35D47E8F03', 14, 0, 42671, 86015, 'And she began again. \'I should like to hear it say, as it left no mark on the top of the players to be lost, as she was not even get her head struck against the ceiling, and had to stop and untwist.', 'images/46ee8c1c43f7dc24dd3bd24e04d207c2.jpg', 10862, 1, 5);
INSERT INTO `products` VALUES (25, 'Ms. Maria Pfannerstill', '5DD35D49507F2', 19, 1, 52718, 28673, 'Next came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit put on his knee, and looking anxiously about her. \'Oh, do let me hear the Rabbit was no one to listen.', 'images/655ef73f774e462de76ec5b7375fdd6d.jpg', 184986, 1, 4);
INSERT INTO `products` VALUES (26, 'Jayme Ondricka', '5DD35D4A8F28C', 14, 0, 58505, 35688, 'Lizard, who seemed ready to make personal remarks,\' Alice said nothing; she had never been so much at this, she was coming back to the table to measure herself by it, and behind them a new pair of.', 'images/7216af92d0da2f17be3e03f25d28d69e.jpg', 473965, 1, 5);
INSERT INTO `products` VALUES (27, 'Chyna Romaguera', '5DD35D4C0EBD2', 10, 0, 20466, 39850, 'As soon as the Caterpillar angrily, rearing itself upright as it went, \'One side of WHAT? The other side of the sort. Next came the royal children; there were TWO little shrieks, and more puzzled.', 'images/817b6c2b98a68c9ae885a66d09699afc.jpg', 914304, 1, 3);
INSERT INTO `products` VALUES (28, 'Mikel Christiansen', '5DD35D4D9003F', 20, 0, 3389, 55666, 'Alice. It looked good-natured, she thought: still it was a table, with a knife, it usually bleeds; and she was terribly frightened all the arches are gone from this morning,\' said Alice hastily.', 'images/90ecebc2f07dcd35de08bad27f03b1b9.jpg', 76640, 1, 5);
INSERT INTO `products` VALUES (29, 'Mrs. Chloe Weissnat', '5DD35D4F13CD8', 13, 1, 65412, 47255, 'CHAPTER X. The Lobster Quadrille The Mock Turtle repeated thoughtfully. \'I should think it would like the look of the leaves: \'I should like to see how he can EVEN finish, if he doesn\'t begin.\' But.', 'images/d8f63d070b074ad28603591e25f38438.jpg', 999540, 1, 4);
INSERT INTO `products` VALUES (30, 'Emmie Raynor', '5DD35D50830AE', 11, 0, 64816, 85265, 'However, it was a real nose; also its eyes again, to see the earth takes twenty-four hours to turn into a conversation. \'You don\'t know what you mean,\' said Alice. \'Come on, then!\' roared the Queen.', 'images/f96b0e1c7066774e9d1940da6016f03d.jpg', 800355, 1, 5);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES (1, 'member', 1);
INSERT INTO `roles` VALUES (2, 'admin', 1);
INSERT INTO `roles` VALUES (3, 'super admin', 1);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Trần Thị Yên', 'yentt@gmail.com', '$2y$10$bLkGLsGBlA4wdyRwj4c6fuCa4P9k.7zXun2P9rQf/.wNpDu7m2krS', NULL, NULL, 1);
INSERT INTO `users` VALUES (2, 'Trần Hồng Phước', 'phuocth@gmail.com', '$2y$10$X8UfBaADeras8RS.rDibkedKK5lA0wPVQBwIONpxd60AAgAEr.46q', NULL, NULL, 2);
INSERT INTO `users` VALUES (3, 'admin', 'admin@gmail.com', '$2y$10$PY1FNJ1.uQ1DYFxRx2SUz.KnfkB/0aNOnYTUO0S675Y0sMZxNFDK6', NULL, NULL, 2);
COMMIT;

-- ----------------------------
-- Table structure for vouchers
-- ----------------------------
DROP TABLE IF EXISTS `vouchers`;
CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `used_count` int(11) DEFAULT '1',
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
