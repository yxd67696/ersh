/*
Navicat MySQL Data Transfer

Source Server         : Oop
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ersh

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-26 09:20:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for er_city
-- ----------------------------
DROP TABLE IF EXISTS `er_city`;
CREATE TABLE `er_city` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of er_city
-- ----------------------------
INSERT INTO `er_city` VALUES ('1', '北京市', '1');
INSERT INTO `er_city` VALUES ('2', '天津市', '2');
INSERT INTO `er_city` VALUES ('3', '上海市', '3');
INSERT INTO `er_city` VALUES ('4', '重庆市', '4');
INSERT INTO `er_city` VALUES ('5', '石家庄市', '5');
INSERT INTO `er_city` VALUES ('6', '唐山市', '5');
INSERT INTO `er_city` VALUES ('7', '秦皇岛市', '5');
INSERT INTO `er_city` VALUES ('8', '邯郸市', '5');
INSERT INTO `er_city` VALUES ('9', '邢台市', '5');
INSERT INTO `er_city` VALUES ('10', '保定市', '5');
INSERT INTO `er_city` VALUES ('11', '张家口市', '5');
INSERT INTO `er_city` VALUES ('12', '承德市', '5');
INSERT INTO `er_city` VALUES ('13', '沧州市', '5');
INSERT INTO `er_city` VALUES ('14', '廊坊市', '5');
INSERT INTO `er_city` VALUES ('15', '衡水市', '5');
INSERT INTO `er_city` VALUES ('16', '太原市', '6');
INSERT INTO `er_city` VALUES ('17', '大同市', '6');
INSERT INTO `er_city` VALUES ('18', '阳泉市', '6');
INSERT INTO `er_city` VALUES ('19', '长治市', '6');
INSERT INTO `er_city` VALUES ('20', '晋城市', '6');
INSERT INTO `er_city` VALUES ('21', '朔州市', '6');
INSERT INTO `er_city` VALUES ('22', '晋中市', '6');
INSERT INTO `er_city` VALUES ('23', '运城市', '6');
INSERT INTO `er_city` VALUES ('24', '忻州市', '6');
INSERT INTO `er_city` VALUES ('25', '临汾市', '6');
INSERT INTO `er_city` VALUES ('26', '吕梁市', '6');
INSERT INTO `er_city` VALUES ('27', '台北市', '7');
INSERT INTO `er_city` VALUES ('28', '高雄市', '7');
INSERT INTO `er_city` VALUES ('29', '基隆市', '7');
INSERT INTO `er_city` VALUES ('30', '台中市', '7');
INSERT INTO `er_city` VALUES ('31', '台南市', '7');
INSERT INTO `er_city` VALUES ('32', '新竹市', '7');
INSERT INTO `er_city` VALUES ('33', '嘉义市', '7');
INSERT INTO `er_city` VALUES ('34', '台北县', '7');
INSERT INTO `er_city` VALUES ('35', '宜兰县', '7');
INSERT INTO `er_city` VALUES ('36', '桃园县', '7');
INSERT INTO `er_city` VALUES ('37', '新竹县', '7');
INSERT INTO `er_city` VALUES ('38', '苗栗县', '7');
INSERT INTO `er_city` VALUES ('39', '台中县', '7');
INSERT INTO `er_city` VALUES ('40', '彰化县', '7');
INSERT INTO `er_city` VALUES ('41', '南投县', '7');
INSERT INTO `er_city` VALUES ('42', '云林县', '7');
INSERT INTO `er_city` VALUES ('43', '嘉义县', '7');
INSERT INTO `er_city` VALUES ('44', '台南县', '7');
INSERT INTO `er_city` VALUES ('45', '高雄县', '7');
INSERT INTO `er_city` VALUES ('46', '屏东县', '7');
INSERT INTO `er_city` VALUES ('47', '澎湖县', '7');
INSERT INTO `er_city` VALUES ('48', '台东县', '7');
INSERT INTO `er_city` VALUES ('49', '花莲县', '7');
INSERT INTO `er_city` VALUES ('50', '沈阳市', '8');
INSERT INTO `er_city` VALUES ('51', '大连市', '8');
INSERT INTO `er_city` VALUES ('52', '鞍山市', '8');
INSERT INTO `er_city` VALUES ('53', '抚顺市', '8');
INSERT INTO `er_city` VALUES ('54', '本溪市', '8');
INSERT INTO `er_city` VALUES ('55', '丹东市', '8');
INSERT INTO `er_city` VALUES ('56', '锦州市', '8');
INSERT INTO `er_city` VALUES ('57', '营口市', '8');
INSERT INTO `er_city` VALUES ('58', '阜新市', '8');
INSERT INTO `er_city` VALUES ('59', '辽阳市', '8');
INSERT INTO `er_city` VALUES ('60', '盘锦市', '8');
INSERT INTO `er_city` VALUES ('61', '铁岭市', '8');
INSERT INTO `er_city` VALUES ('62', '朝阳市', '8');
INSERT INTO `er_city` VALUES ('63', '葫芦岛市', '8');
INSERT INTO `er_city` VALUES ('64', '长春市', '9');
INSERT INTO `er_city` VALUES ('65', '吉林市', '9');
INSERT INTO `er_city` VALUES ('66', '四平市', '9');
INSERT INTO `er_city` VALUES ('67', '辽源市', '9');
INSERT INTO `er_city` VALUES ('68', '通化市', '9');
INSERT INTO `er_city` VALUES ('69', '白山市', '9');
INSERT INTO `er_city` VALUES ('70', '松原市', '9');
INSERT INTO `er_city` VALUES ('71', '白城市', '9');
INSERT INTO `er_city` VALUES ('72', '延边朝鲜族自治州', '9');
INSERT INTO `er_city` VALUES ('73', '哈尔滨市', '10');
INSERT INTO `er_city` VALUES ('74', '齐齐哈尔市', '10');
INSERT INTO `er_city` VALUES ('75', '鹤 岗 市', '10');
INSERT INTO `er_city` VALUES ('76', '双鸭山市', '10');
INSERT INTO `er_city` VALUES ('77', '鸡 西 市', '10');
INSERT INTO `er_city` VALUES ('78', '大 庆 市', '10');
INSERT INTO `er_city` VALUES ('79', '伊 春 市', '10');
INSERT INTO `er_city` VALUES ('80', '牡丹江市', '10');
INSERT INTO `er_city` VALUES ('81', '佳木斯市', '10');
INSERT INTO `er_city` VALUES ('82', '七台河市', '10');
INSERT INTO `er_city` VALUES ('83', '黑 河 市', '10');
INSERT INTO `er_city` VALUES ('84', '绥 化 市', '10');
INSERT INTO `er_city` VALUES ('85', '大兴安岭地区', '10');
INSERT INTO `er_city` VALUES ('86', '南京市', '11');
INSERT INTO `er_city` VALUES ('87', '无锡市', '11');
INSERT INTO `er_city` VALUES ('88', '徐州市', '11');
INSERT INTO `er_city` VALUES ('89', '常州市', '11');
INSERT INTO `er_city` VALUES ('90', '苏州市', '11');
INSERT INTO `er_city` VALUES ('91', '南通市', '11');
INSERT INTO `er_city` VALUES ('92', '连云港市', '11');
INSERT INTO `er_city` VALUES ('93', '淮安市', '11');
INSERT INTO `er_city` VALUES ('94', '盐城市', '11');
INSERT INTO `er_city` VALUES ('95', '扬州市', '11');
INSERT INTO `er_city` VALUES ('96', '镇江市', '11');
INSERT INTO `er_city` VALUES ('97', '泰州市', '11');
INSERT INTO `er_city` VALUES ('98', '宿迁市', '11');
INSERT INTO `er_city` VALUES ('99', '杭州市', '12');
INSERT INTO `er_city` VALUES ('100', '宁波市', '12');
INSERT INTO `er_city` VALUES ('101', '温州市', '12');
INSERT INTO `er_city` VALUES ('102', '嘉兴市', '12');
INSERT INTO `er_city` VALUES ('103', '湖州市', '12');
INSERT INTO `er_city` VALUES ('104', '绍兴市', '12');
INSERT INTO `er_city` VALUES ('105', '金华市', '12');
INSERT INTO `er_city` VALUES ('106', '衢州市', '12');
INSERT INTO `er_city` VALUES ('107', '舟山市', '12');
INSERT INTO `er_city` VALUES ('108', '台州市', '12');
INSERT INTO `er_city` VALUES ('109', '丽水市', '12');
INSERT INTO `er_city` VALUES ('110', '合肥市', '13');
INSERT INTO `er_city` VALUES ('111', '芜湖市', '13');
INSERT INTO `er_city` VALUES ('112', '蚌埠市', '13');
INSERT INTO `er_city` VALUES ('113', '淮南市', '13');
INSERT INTO `er_city` VALUES ('114', '马鞍山市', '13');
INSERT INTO `er_city` VALUES ('115', '淮北市', '13');
INSERT INTO `er_city` VALUES ('116', '铜陵市', '13');
INSERT INTO `er_city` VALUES ('117', '安庆市', '13');
INSERT INTO `er_city` VALUES ('118', '黄山市', '13');
INSERT INTO `er_city` VALUES ('119', '滁州市', '13');
INSERT INTO `er_city` VALUES ('120', '阜阳市', '13');
INSERT INTO `er_city` VALUES ('121', '宿州市', '13');
INSERT INTO `er_city` VALUES ('122', '巢湖市', '13');
INSERT INTO `er_city` VALUES ('123', '六安市', '13');
INSERT INTO `er_city` VALUES ('124', '亳州市', '13');
INSERT INTO `er_city` VALUES ('125', '池州市', '13');
INSERT INTO `er_city` VALUES ('126', '宣城市', '13');
INSERT INTO `er_city` VALUES ('127', '福州市', '14');
INSERT INTO `er_city` VALUES ('128', '厦门市', '14');
INSERT INTO `er_city` VALUES ('129', '莆田市', '14');
INSERT INTO `er_city` VALUES ('130', '三明市', '14');
INSERT INTO `er_city` VALUES ('131', '泉州市', '14');
INSERT INTO `er_city` VALUES ('132', '漳州市', '14');
INSERT INTO `er_city` VALUES ('133', '南平市', '14');
INSERT INTO `er_city` VALUES ('134', '龙岩市', '14');
INSERT INTO `er_city` VALUES ('135', '宁德市', '14');
INSERT INTO `er_city` VALUES ('136', '南昌市', '15');
INSERT INTO `er_city` VALUES ('137', '景德镇市', '15');
INSERT INTO `er_city` VALUES ('138', '萍乡市', '15');
INSERT INTO `er_city` VALUES ('139', '九江市', '15');
INSERT INTO `er_city` VALUES ('140', '新余市', '15');
INSERT INTO `er_city` VALUES ('141', '鹰潭市', '15');
INSERT INTO `er_city` VALUES ('142', '赣州市', '15');
INSERT INTO `er_city` VALUES ('143', '吉安市', '15');
INSERT INTO `er_city` VALUES ('144', '宜春市', '15');
INSERT INTO `er_city` VALUES ('145', '抚州市', '15');
INSERT INTO `er_city` VALUES ('146', '上饶市', '15');
INSERT INTO `er_city` VALUES ('147', '济南市', '16');
INSERT INTO `er_city` VALUES ('148', '青岛市', '16');
INSERT INTO `er_city` VALUES ('149', '淄博市', '16');
INSERT INTO `er_city` VALUES ('150', '枣庄市', '16');
INSERT INTO `er_city` VALUES ('151', '东营市', '16');
INSERT INTO `er_city` VALUES ('152', '烟台市', '16');
INSERT INTO `er_city` VALUES ('153', '潍坊市', '16');
INSERT INTO `er_city` VALUES ('154', '济宁市', '16');
INSERT INTO `er_city` VALUES ('155', '泰安市', '16');
INSERT INTO `er_city` VALUES ('156', '威海市', '16');
INSERT INTO `er_city` VALUES ('157', '日照市', '16');
INSERT INTO `er_city` VALUES ('158', '莱芜市', '16');
INSERT INTO `er_city` VALUES ('159', '临沂市', '16');
INSERT INTO `er_city` VALUES ('160', '德州市', '16');
INSERT INTO `er_city` VALUES ('161', '聊城市', '16');
INSERT INTO `er_city` VALUES ('162', '滨州市', '16');
INSERT INTO `er_city` VALUES ('163', '菏泽市', '16');
INSERT INTO `er_city` VALUES ('164', '郑州市', '17');
INSERT INTO `er_city` VALUES ('165', '开封市', '17');
INSERT INTO `er_city` VALUES ('166', '洛阳市', '17');
INSERT INTO `er_city` VALUES ('167', '平顶山市', '17');
INSERT INTO `er_city` VALUES ('168', '安阳市', '17');
INSERT INTO `er_city` VALUES ('169', '鹤壁市', '17');
INSERT INTO `er_city` VALUES ('170', '新乡市', '17');
INSERT INTO `er_city` VALUES ('171', '焦作市', '17');
INSERT INTO `er_city` VALUES ('172', '濮阳市', '17');
INSERT INTO `er_city` VALUES ('173', '许昌市', '17');
INSERT INTO `er_city` VALUES ('174', '漯河市', '17');
INSERT INTO `er_city` VALUES ('175', '三门峡市', '17');
INSERT INTO `er_city` VALUES ('176', '南阳市', '17');
INSERT INTO `er_city` VALUES ('177', '商丘市', '17');
INSERT INTO `er_city` VALUES ('178', '信阳市', '17');
INSERT INTO `er_city` VALUES ('179', '周口市', '17');
INSERT INTO `er_city` VALUES ('180', '驻马店市', '17');
INSERT INTO `er_city` VALUES ('181', '济源市', '17');
INSERT INTO `er_city` VALUES ('182', '武汉市', '18');
INSERT INTO `er_city` VALUES ('183', '黄石市', '18');
INSERT INTO `er_city` VALUES ('184', '十堰市', '18');
INSERT INTO `er_city` VALUES ('185', '荆州市', '18');
INSERT INTO `er_city` VALUES ('186', '宜昌市', '18');
INSERT INTO `er_city` VALUES ('187', '襄樊市', '18');
INSERT INTO `er_city` VALUES ('188', '鄂州市', '18');
INSERT INTO `er_city` VALUES ('189', '荆门市', '18');
INSERT INTO `er_city` VALUES ('190', '孝感市', '18');
INSERT INTO `er_city` VALUES ('191', '黄冈市', '18');
INSERT INTO `er_city` VALUES ('192', '咸宁市', '18');
INSERT INTO `er_city` VALUES ('193', '随州市', '18');
INSERT INTO `er_city` VALUES ('194', '仙桃市', '18');
INSERT INTO `er_city` VALUES ('195', '天门市', '18');
INSERT INTO `er_city` VALUES ('196', '潜江市', '18');
INSERT INTO `er_city` VALUES ('197', '神农架林区', '18');
INSERT INTO `er_city` VALUES ('198', '恩施土家族苗族自治州', '18');
INSERT INTO `er_city` VALUES ('199', '长沙市', '19');
INSERT INTO `er_city` VALUES ('200', '株洲市', '19');
INSERT INTO `er_city` VALUES ('201', '湘潭市', '19');
INSERT INTO `er_city` VALUES ('202', '衡阳市', '19');
INSERT INTO `er_city` VALUES ('203', '邵阳市', '19');
INSERT INTO `er_city` VALUES ('204', '岳阳市', '19');
INSERT INTO `er_city` VALUES ('205', '常德市', '19');
INSERT INTO `er_city` VALUES ('206', '张家界市', '19');
INSERT INTO `er_city` VALUES ('207', '益阳市', '19');
INSERT INTO `er_city` VALUES ('208', '郴州市', '19');
INSERT INTO `er_city` VALUES ('209', '永州市', '19');
INSERT INTO `er_city` VALUES ('210', '怀化市', '19');
INSERT INTO `er_city` VALUES ('211', '娄底市', '19');
INSERT INTO `er_city` VALUES ('212', '湘西土家族苗族自治州', '19');
INSERT INTO `er_city` VALUES ('213', '广州市', '20');
INSERT INTO `er_city` VALUES ('214', '深圳市', '20');
INSERT INTO `er_city` VALUES ('215', '珠海市', '20');
INSERT INTO `er_city` VALUES ('216', '汕头市', '20');
INSERT INTO `er_city` VALUES ('217', '韶关市', '20');
INSERT INTO `er_city` VALUES ('218', '佛山市', '20');
INSERT INTO `er_city` VALUES ('219', '江门市', '20');
INSERT INTO `er_city` VALUES ('220', '湛江市', '20');
INSERT INTO `er_city` VALUES ('221', '茂名市', '20');
INSERT INTO `er_city` VALUES ('222', '肇庆市', '20');
INSERT INTO `er_city` VALUES ('223', '惠州市', '20');
INSERT INTO `er_city` VALUES ('224', '梅州市', '20');
INSERT INTO `er_city` VALUES ('225', '汕尾市', '20');
INSERT INTO `er_city` VALUES ('226', '河源市', '20');
INSERT INTO `er_city` VALUES ('227', '阳江市', '20');
INSERT INTO `er_city` VALUES ('228', '清远市', '20');
INSERT INTO `er_city` VALUES ('229', '东莞市', '20');
INSERT INTO `er_city` VALUES ('230', '中山市', '20');
INSERT INTO `er_city` VALUES ('231', '潮州市', '20');
INSERT INTO `er_city` VALUES ('232', '揭阳市', '20');
INSERT INTO `er_city` VALUES ('233', '云浮市', '20');
INSERT INTO `er_city` VALUES ('234', '兰州市', '21');
INSERT INTO `er_city` VALUES ('235', '金昌市', '21');
INSERT INTO `er_city` VALUES ('236', '白银市', '21');
INSERT INTO `er_city` VALUES ('237', '天水市', '21');
INSERT INTO `er_city` VALUES ('238', '嘉峪关市', '21');
INSERT INTO `er_city` VALUES ('239', '武威市', '21');
INSERT INTO `er_city` VALUES ('240', '张掖市', '21');
INSERT INTO `er_city` VALUES ('241', '平凉市', '21');
INSERT INTO `er_city` VALUES ('242', '酒泉市', '21');
INSERT INTO `er_city` VALUES ('243', '庆阳市', '21');
INSERT INTO `er_city` VALUES ('244', '定西市', '21');
INSERT INTO `er_city` VALUES ('245', '陇南市', '21');
INSERT INTO `er_city` VALUES ('246', '临夏回族自治州', '21');
INSERT INTO `er_city` VALUES ('247', '甘南藏族自治州', '21');
INSERT INTO `er_city` VALUES ('248', '成都市', '22');
INSERT INTO `er_city` VALUES ('249', '自贡市', '22');
INSERT INTO `er_city` VALUES ('250', '攀枝花市', '22');
INSERT INTO `er_city` VALUES ('251', '泸州市', '22');
INSERT INTO `er_city` VALUES ('252', '德阳市', '22');
INSERT INTO `er_city` VALUES ('253', '绵阳市', '22');
INSERT INTO `er_city` VALUES ('254', '广元市', '22');
INSERT INTO `er_city` VALUES ('255', '遂宁市', '22');
INSERT INTO `er_city` VALUES ('256', '内江市', '22');
INSERT INTO `er_city` VALUES ('257', '乐山市', '22');
INSERT INTO `er_city` VALUES ('258', '南充市', '22');
INSERT INTO `er_city` VALUES ('259', '眉山市', '22');
INSERT INTO `er_city` VALUES ('260', '宜宾市', '22');
INSERT INTO `er_city` VALUES ('261', '广安市', '22');
INSERT INTO `er_city` VALUES ('262', '达州市', '22');
INSERT INTO `er_city` VALUES ('263', '雅安市', '22');
INSERT INTO `er_city` VALUES ('264', '巴中市', '22');
INSERT INTO `er_city` VALUES ('265', '资阳市', '22');
INSERT INTO `er_city` VALUES ('266', '阿坝藏族羌族自治州', '22');
INSERT INTO `er_city` VALUES ('267', '甘孜藏族自治州', '22');
INSERT INTO `er_city` VALUES ('268', '凉山彝族自治州', '22');
INSERT INTO `er_city` VALUES ('269', '贵阳市', '23');
INSERT INTO `er_city` VALUES ('270', '六盘水市', '23');
INSERT INTO `er_city` VALUES ('271', '遵义市', '23');
INSERT INTO `er_city` VALUES ('272', '安顺市', '23');
INSERT INTO `er_city` VALUES ('273', '铜仁地区', '23');
INSERT INTO `er_city` VALUES ('274', '毕节地区', '23');
INSERT INTO `er_city` VALUES ('275', '黔西南布依族苗族自治州', '23');
INSERT INTO `er_city` VALUES ('276', '黔东南苗族侗族自治州', '23');
INSERT INTO `er_city` VALUES ('277', '黔南布依族苗族自治州', '23');
INSERT INTO `er_city` VALUES ('278', '海口市', '24');
INSERT INTO `er_city` VALUES ('279', '三亚市', '24');
INSERT INTO `er_city` VALUES ('280', '五指山市', '24');
INSERT INTO `er_city` VALUES ('281', '琼海市', '24');
INSERT INTO `er_city` VALUES ('282', '儋州市', '24');
INSERT INTO `er_city` VALUES ('283', '文昌市', '24');
INSERT INTO `er_city` VALUES ('284', '万宁市', '24');
INSERT INTO `er_city` VALUES ('285', '东方市', '24');
INSERT INTO `er_city` VALUES ('286', '澄迈县', '24');
INSERT INTO `er_city` VALUES ('287', '定安县', '24');
INSERT INTO `er_city` VALUES ('288', '屯昌县', '24');
INSERT INTO `er_city` VALUES ('289', '临高县', '24');
INSERT INTO `er_city` VALUES ('290', '白沙黎族自治县', '24');
INSERT INTO `er_city` VALUES ('291', '昌江黎族自治县', '24');
INSERT INTO `er_city` VALUES ('292', '乐东黎族自治县', '24');
INSERT INTO `er_city` VALUES ('293', '陵水黎族自治县', '24');
INSERT INTO `er_city` VALUES ('294', '保亭黎族苗族自治县', '24');
INSERT INTO `er_city` VALUES ('295', '琼中黎族苗族自治县', '24');
INSERT INTO `er_city` VALUES ('296', '昆明市', '25');
INSERT INTO `er_city` VALUES ('297', '曲靖市', '25');
INSERT INTO `er_city` VALUES ('298', '玉溪市', '25');
INSERT INTO `er_city` VALUES ('299', '保山市', '25');
INSERT INTO `er_city` VALUES ('300', '昭通市', '25');
INSERT INTO `er_city` VALUES ('301', '丽江市', '25');
INSERT INTO `er_city` VALUES ('302', '思茅市', '25');
INSERT INTO `er_city` VALUES ('303', '临沧市', '25');
INSERT INTO `er_city` VALUES ('304', '文山壮族苗族自治州', '25');
INSERT INTO `er_city` VALUES ('305', '红河哈尼族彝族自治州', '25');
INSERT INTO `er_city` VALUES ('306', '西双版纳傣族自治州', '25');
INSERT INTO `er_city` VALUES ('307', '楚雄彝族自治州', '25');
INSERT INTO `er_city` VALUES ('308', '大理白族自治州', '25');
INSERT INTO `er_city` VALUES ('309', '德宏傣族景颇族自治州', '25');
INSERT INTO `er_city` VALUES ('310', '怒江傈傈族自治州', '25');
INSERT INTO `er_city` VALUES ('311', '迪庆藏族自治州', '25');
INSERT INTO `er_city` VALUES ('312', '西宁市', '26');
INSERT INTO `er_city` VALUES ('313', '海东地区', '26');
INSERT INTO `er_city` VALUES ('314', '海北藏族自治州', '26');
INSERT INTO `er_city` VALUES ('315', '黄南藏族自治州', '26');
INSERT INTO `er_city` VALUES ('316', '海南藏族自治州', '26');
INSERT INTO `er_city` VALUES ('317', '果洛藏族自治州', '26');
INSERT INTO `er_city` VALUES ('318', '玉树藏族自治州', '26');
INSERT INTO `er_city` VALUES ('319', '海西蒙古族藏族自治州', '26');
INSERT INTO `er_city` VALUES ('320', '西安市', '27');
INSERT INTO `er_city` VALUES ('321', '铜川市', '27');
INSERT INTO `er_city` VALUES ('322', '宝鸡市', '27');
INSERT INTO `er_city` VALUES ('323', '咸阳市', '27');
INSERT INTO `er_city` VALUES ('324', '渭南市', '27');
INSERT INTO `er_city` VALUES ('325', '延安市', '27');
INSERT INTO `er_city` VALUES ('326', '汉中市', '27');
INSERT INTO `er_city` VALUES ('327', '榆林市', '27');
INSERT INTO `er_city` VALUES ('328', '安康市', '27');
INSERT INTO `er_city` VALUES ('329', '商洛市', '27');
INSERT INTO `er_city` VALUES ('330', '南宁市', '28');
INSERT INTO `er_city` VALUES ('331', '柳州市', '28');
INSERT INTO `er_city` VALUES ('332', '桂林市', '28');
INSERT INTO `er_city` VALUES ('333', '梧州市', '28');
INSERT INTO `er_city` VALUES ('334', '北海市', '28');
INSERT INTO `er_city` VALUES ('335', '防城港市', '28');
INSERT INTO `er_city` VALUES ('336', '钦州市', '28');
INSERT INTO `er_city` VALUES ('337', '贵港市', '28');
INSERT INTO `er_city` VALUES ('338', '玉林市', '28');
INSERT INTO `er_city` VALUES ('339', '百色市', '28');
INSERT INTO `er_city` VALUES ('340', '贺州市', '28');
INSERT INTO `er_city` VALUES ('341', '河池市', '28');
INSERT INTO `er_city` VALUES ('342', '来宾市', '28');
INSERT INTO `er_city` VALUES ('343', '崇左市', '28');
INSERT INTO `er_city` VALUES ('344', '拉萨市', '29');
INSERT INTO `er_city` VALUES ('345', '那曲地区', '29');
INSERT INTO `er_city` VALUES ('346', '昌都地区', '29');
INSERT INTO `er_city` VALUES ('347', '山南地区', '29');
INSERT INTO `er_city` VALUES ('348', '日喀则地区', '29');
INSERT INTO `er_city` VALUES ('349', '阿里地区', '29');
INSERT INTO `er_city` VALUES ('350', '林芝地区', '29');
INSERT INTO `er_city` VALUES ('351', '银川市', '30');
INSERT INTO `er_city` VALUES ('352', '石嘴山市', '30');
INSERT INTO `er_city` VALUES ('353', '吴忠市', '30');
INSERT INTO `er_city` VALUES ('354', '固原市', '30');
INSERT INTO `er_city` VALUES ('355', '中卫市', '30');
INSERT INTO `er_city` VALUES ('356', '乌鲁木齐市', '31');
INSERT INTO `er_city` VALUES ('357', '克拉玛依市', '31');
INSERT INTO `er_city` VALUES ('358', '石河子市　', '31');
INSERT INTO `er_city` VALUES ('359', '阿拉尔市', '31');
INSERT INTO `er_city` VALUES ('360', '图木舒克市', '31');
INSERT INTO `er_city` VALUES ('361', '五家渠市', '31');
INSERT INTO `er_city` VALUES ('362', '吐鲁番市', '31');
INSERT INTO `er_city` VALUES ('363', '阿克苏市', '31');
INSERT INTO `er_city` VALUES ('364', '喀什市', '31');
INSERT INTO `er_city` VALUES ('365', '哈密市', '31');
INSERT INTO `er_city` VALUES ('366', '和田市', '31');
INSERT INTO `er_city` VALUES ('367', '阿图什市', '31');
INSERT INTO `er_city` VALUES ('368', '库尔勒市', '31');
INSERT INTO `er_city` VALUES ('369', '昌吉市　', '31');
INSERT INTO `er_city` VALUES ('370', '阜康市', '31');
INSERT INTO `er_city` VALUES ('371', '米泉市', '31');
INSERT INTO `er_city` VALUES ('372', '博乐市', '31');
INSERT INTO `er_city` VALUES ('373', '伊宁市', '31');
INSERT INTO `er_city` VALUES ('374', '奎屯市', '31');
INSERT INTO `er_city` VALUES ('375', '塔城市', '31');
INSERT INTO `er_city` VALUES ('376', '乌苏市', '31');
INSERT INTO `er_city` VALUES ('377', '阿勒泰市', '31');
INSERT INTO `er_city` VALUES ('378', '呼和浩特市', '32');
INSERT INTO `er_city` VALUES ('379', '包头市', '32');
INSERT INTO `er_city` VALUES ('380', '乌海市', '32');
INSERT INTO `er_city` VALUES ('381', '赤峰市', '32');
INSERT INTO `er_city` VALUES ('382', '通辽市', '32');
INSERT INTO `er_city` VALUES ('383', '鄂尔多斯市', '32');
INSERT INTO `er_city` VALUES ('384', '呼伦贝尔市', '32');
INSERT INTO `er_city` VALUES ('385', '巴彦淖尔市', '32');
INSERT INTO `er_city` VALUES ('386', '乌兰察布市', '32');
INSERT INTO `er_city` VALUES ('387', '锡林郭勒盟', '32');
INSERT INTO `er_city` VALUES ('388', '兴安盟', '32');
INSERT INTO `er_city` VALUES ('389', '阿拉善盟', '32');
INSERT INTO `er_city` VALUES ('390', '澳门特别行政区', '33');
INSERT INTO `er_city` VALUES ('391', '香港特别行政区', '34');

-- ----------------------------
-- Table structure for er_mycity
-- ----------------------------
DROP TABLE IF EXISTS `er_mycity`;
CREATE TABLE `er_mycity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of er_mycity
-- ----------------------------
INSERT INTO `er_mycity` VALUES ('1', '运城市');

-- ----------------------------
-- Table structure for er_province
-- ----------------------------
DROP TABLE IF EXISTS `er_province`;
CREATE TABLE `er_province` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of er_province
-- ----------------------------
INSERT INTO `er_province` VALUES ('1', '北京市');
INSERT INTO `er_province` VALUES ('2', '天津市');
INSERT INTO `er_province` VALUES ('3', '上海市');
INSERT INTO `er_province` VALUES ('4', '重庆市');
INSERT INTO `er_province` VALUES ('5', '河北省');
INSERT INTO `er_province` VALUES ('6', '山西省');
INSERT INTO `er_province` VALUES ('7', '台湾省');
INSERT INTO `er_province` VALUES ('8', '辽宁省');
INSERT INTO `er_province` VALUES ('9', '吉林省');
INSERT INTO `er_province` VALUES ('10', '黑龙江省');
INSERT INTO `er_province` VALUES ('11', '江苏省');
INSERT INTO `er_province` VALUES ('12', '浙江省');
INSERT INTO `er_province` VALUES ('13', '安徽省');
INSERT INTO `er_province` VALUES ('14', '福建省');
INSERT INTO `er_province` VALUES ('15', '江西省');
INSERT INTO `er_province` VALUES ('16', '山东省');
INSERT INTO `er_province` VALUES ('17', '河南省');
INSERT INTO `er_province` VALUES ('18', '湖北省');
INSERT INTO `er_province` VALUES ('19', '湖南省');
INSERT INTO `er_province` VALUES ('20', '广东省');
INSERT INTO `er_province` VALUES ('21', '甘肃省');
INSERT INTO `er_province` VALUES ('22', '四川省');
INSERT INTO `er_province` VALUES ('23', '贵州省');
INSERT INTO `er_province` VALUES ('24', '海南省');
INSERT INTO `er_province` VALUES ('25', '云南省');
INSERT INTO `er_province` VALUES ('26', '青海省');
INSERT INTO `er_province` VALUES ('27', '陕西省');
INSERT INTO `er_province` VALUES ('28', '广西壮族自治区');
INSERT INTO `er_province` VALUES ('29', '西藏自治区');
INSERT INTO `er_province` VALUES ('30', '宁夏回族自治区');
INSERT INTO `er_province` VALUES ('31', '新疆维吾尔自治区');
INSERT INTO `er_province` VALUES ('32', '内蒙古自治区');
INSERT INTO `er_province` VALUES ('33', '澳门特别行政区');
INSERT INTO `er_province` VALUES ('34', '香港特别行政区');
