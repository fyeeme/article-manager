/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-01-24 16:03:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `dateline` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pkid` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('7', 'iphone 4s', 'apple', 'iphone 4s 8g版是否够用？', 'iphone 4s 8g版是否够用？', '838:59:59');
INSERT INTO `article` VALUES ('8', '重命名文件', 'PhpStorm', ' Refactor | Rename ', 'n addition to renaming the file itself, PhpStorm can also look for the usages of the file name. If found, the changes you are making to the file name can also be applied to these usages.\r\n\r\nThe usages are assigned to different categories which correspond to the options which you can turn on and off.\r\n\r\nNote that irrespective of the options selected, the search scope (that is, the places where the name occurrences are looked for) is always limited to the current module and the modules that the current module depends on.', '838:59:59');
INSERT INTO `article` VALUES ('12', '千元机的新定义 — 魅蓝 Note 体验', 'asukaflying', '长时间以来，魅族这个品牌给大家的印象是一个走精品路线的小众厂商。一年一度旗舰，点到为止的营销，略显高冷的态度使人们很难将其产品和街机神器联想起来。然而2014年的魅族却一反常态，不仅大搞网络营销，更是在一年之内如打鸡血般连续推出了3款新机型。其中的收官之款就是这篇文章主角魅蓝 Note', '如果在一两年前，有人说魅族要推出千元机型，必定会被煤油们的口水淹死。原因很简单，千元级不符合魅族的作风与产品气质。但是这其中其实有一个在市场中形成已久的成见——千元机=中华酷联+丑到极点+做工劣质+配置卡死+要了七大姑八大姨命的数不清的预装软件。煤油眼中魅族这样高冷有气质的厂商怎么会出千元机？所以在听说魅族要推出千元机子品牌系列的时候我的第一反应是，魅族大概是要重新定义千元机了。\r\n\r\nIMGP8726.jpg\r\n\r\nIMGP8728.jpg\r\n\r\n\r\n≡ 定义一：价廉质不廉\r\n\r\n在发布之前，魅族就用 iPhone 5c 的后盖作为邀请函暗示了魅蓝 Note 的材质和做工。尽管 iPhone 5c 的销量并不太好，但是对于其材质和手感的评价却是很积极。虽然为塑料材质，但是这种聚碳酸酯的质感却比棒子们的塑料要好上太多。\r\n\r\n魅蓝 Note 的机身和 iPhone 5c 采用了相同的材质和工艺，触感也非常的类似，光滑柔和。虽比不上金属的高端触感，但是已经和廉价和入门这两个词远远地扯开了关系。我个人感觉甚至比我手上的 LG G2 和同门魅族 MX4 的后盖触感都要好。当然前提是你不会太过于反感它指纹收集器这个兼职。\r\n\r\nIMGP8807.jpg\r\n\r\n魅蓝note是魅族历史上第一个采用了unibody一体成型工艺的产品，后盖再也不可拆卸，妈妈再也不用担心我的手指甲断掉了。整体的做工扎实、精致。机身衔接处严丝合缝，开口处也没有毛刺现象。唯有卡托的做工实在有点粗糙，用手指触摸卡托可以感觉到轻微的晃动。\r\n\r\n我看其他用户的文章发现这不是个别现象。不过，能把卡槽做工做到iPhone那样的厂商实在屈指可数。每当看到卡槽那个位置的时候想想魅蓝的定价，也就觉得没那么难受了。\r\n\r\nIMGP8795.jpg\r\n▲卡槽确实有点太松,手机震动的时候都会发出奇怪的声音。希望魅族后续能加强品控\r\n\r\n在设计方面，魅蓝 Note 延续了 MX 系列产品的风格，经典的小圆圈也得以保留。边框不算极致，但也不宽。周围的塑料包边略高于屏幕。在左右边缘处滑动的手感确实不太爽，但应该会一定程度上降低碎屏的风险。\r\n\r\n虽说采用了和 iPhone 5c 相同的材质，以及前黑后彩的设计。但是由于大屏幕、标志性小圆圈和特殊的圆角，魅蓝 Note 并没有给人一种 iPhone 5c 的即视感。我的感觉是魅蓝 Note 学到了 iPhone 5c 外观上的精髓，但是却不至于山寨，属于成功的致敬设计。\r\n\r\nIMGP8789.jpg\r\n▲小圆圈在黑暗中会发出幽幽的荧光，甚是好看\r\n\r\nIMGP8811.jpg\r\n▲由于大屏幕、标志性小圆圈和特殊的圆角，魅蓝 Note 并没有 iPhone 5c 的即视感\r\n\r\n作为一个5.5寸屏幕的手机，魅蓝 Note 的重量只有145g，拿在手上属于较轻的那种。有时候会觉得再重个五六克或许手感会更好。机身略有弧度，使得接近9毫米的机身也不会显得太厚。\r\n\r\n作为一部大手机来说，魅蓝在尺寸上的控制还不错。但是即便如此，单手操作也只是说说而已。尤其在冬天，干燥的天气加上很滑的后盖材质，任性地单手操作魅蓝分分钟摔地上给你看。\r\n\r\nIMGP8810.jpg\r\n▲魅蓝 Note 的机身还是比较大的，不适合单手使用\r\n\r\nIMGP8808.jpg\r\n\r\n魅蓝 Note 主打色彩，总共有五种颜色的机身。其实这并不是魅族第一次使用多彩设计，早在 MX 第一代的时候魅族官方就推出过彩色的后盖。只不过那个调色，实在是让人无语凝噎。过了几年，有了 iPhone5c 的借鉴，魅蓝 Note 这次的颜色总算是抖掉了一身土气。\r\n\r\n不过还是要吐槽一下，说好的没有颜色的青春什么都不是，上市这么久了都还只有白色的在卖是几个意思。\r\n\r\ncolor.jpg\r\n\r\n个人感觉，在设计和做工层面，定位千元的机器当中魅蓝 Note 实在是独孤求败，甚至说好过一些2000元档的机器都不为过。在千元机器中可以相比的也就是那些价格已经降下来的老旗舰了。\r\n\r\nIMGP8822.jpg\r\n\r\nIMGP8736.jpg\r\n▲ 魅蓝的卡针设计很有意思', '838:59:59');
INSERT INTO `article` VALUES ('16', 'MySQL ', 'php', 'MySQL 是最流行的开源数据库服务器', 'MySQL 是一种数据库。数据库定义了存储信息的结构。\r\n在数据库中，存在着一些表。类似 HTML 表格，数据库表含有行、列以及单元。\r\n在分类存储信息时，数据库非常有用。一个公司的数据库可能拥有这些表：\"Employees\", \"Products\", \"Customers\" 以及 \"Orders\"', '838:59:59');
