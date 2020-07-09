-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-06-23 16:47:24
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `adminuser`
--

CREATE TABLE `adminuser` (
  `regname` varchar(20) NOT NULL,
  `regpwd` varchar(100) NOT NULL,
  `regqq` varchar(20) DEFAULT NULL,
  `regemail` varchar(50) NOT NULL,
  `regsex` char(4) DEFAULT NULL,
  `islock` int(11) NOT NULL DEFAULT 0,
  `fig` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `adminuser`
--

INSERT INTO `adminuser` (`regname`, `regpwd`, `regqq`, `regemail`, `regsex`, `islock`, `fig`) VALUES
('an', '$2y$10$eUbekMLoVbzSrEPWOMeiIOv9Vj7gKccM76z7qoLf.VtXkpH9VlisW', '123456', '1@qq.com', '女', 0, 1),
('eryue', '$2y$10$9dSr.zUK0vVZAH1Dqg3DPuoevwBP3PpOiCur8p2zeCRVWS3kXlApC', '2333', '2333@admin.com', 'male', 0, 1),
('ismi', '$2y$10$LdVH7WBY83M6rUI1bAll8eUyT67lkuIdA5qGJ4UEArNKZsjW2yqL6', 'none', 'json@admin.com', 'male', 0, 0),
('nmsl', '$2y$10$qxSrBUexZL5dbUiy7nxKNuWFxp/xML1RYbobW7gCjMXvdbPxkxCqa', '00000', 'xjer@qq.com', '男', 0, 0),
('二月一寻', '$2y$10$grnHO4okyIAi0DKli3S5nOrSX2UEFoDAcHVasth/VQtLyVxtepVSG', '88888888', 'usereryue@admin.com', '男', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `pubtime` datetime NOT NULL,
  `filename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `type_id`, `title`, `content`, `author`, `pubtime`, `filename`) VALUES
(1, 1, 'PHP简介', '您应当具备的基础知识\r\n在继续学习之前，您需要对以下知识有基本的了解：\r\n\r\nHTML\r\nCSS\r\n如果您希望首先学习这些项目，请在我们的 首页 访问这些教程。\r\n\r\nPHP 是什么？\r\nPHP（全称：PHP：Hypertext Preprocessor，即\"PHP：超文本预处理器\"）是一种通用开源脚本语言。\r\nPHP 脚本在服务器上执行。\r\nPHP 可免费下载使用。\r\nlamp	PHP 对初学者而言简单易学。\r\n\r\nPHP 也为专业的程序员提供了许多先进的功能。\r\n\r\nPHP 文件是什么？\r\nPHP 文件可包含文本、HTML、JavaScript代码和 PHP 代码\r\nPHP 代码在服务器上执行，结果以纯 HTML 形式返回给浏览器\r\nPHP 文件的默认文件扩展名是 \".php\"\r\nPHP 能做什么？\r\nPHP 可以生成动态页面内容\r\nPHP 可以创建、打开、读取、写入、关闭服务器上的文件\r\nPHP 可以收集表单数据\r\nPHP 可以发送和接收 cookies\r\nPHP 可以添加、删除、修改您的数据库中的数据\r\nPHP 可以限制用户访问您的网站上的一些页面\r\nPHP 可以加密数据\r\n通过 PHP，您不再限于输出 HTML。您可以输出图像、PDF 文件，甚至 Flash 电影。您还可以输出任意的文本，比如 XHTML 和 XML。\r\n\r\n为什么使用 PHP？\r\nPHP 可在不同的平台上运行（Windows、Linux、Unix、Mac OS X 等）\r\nPHP 与目前几乎所有的正在被使用的服务器相兼容（Apache、IIS 等）\r\nPHP 提供了广泛的数据库支持\r\nPHP 是免费的，可从官方的 PHP 资源下载它： www.php.net\r\nPHP 易于学习，并可高效地运行在服务器端。', 'eryue', '2020-06-01 02:45:59', ''),
(2, 1, 'SQL语言简介', 'SQL 是一门 ANSI 的标准计算机语言，用来访问和操作数据库系统。SQL 语句用于取回和更新数据库中的数据。SQL 可与数据库程序协同工作，比如 MS Access、DB2、Informix、MS SQL Server、Oracle、Sybase 以及其他数据库系统。\r\n\r\n不幸地是，存在着很多不同版本的 SQL 语言，但是为了与 ANSI 标准相兼容，它们必须以相似的方式共同地来支持一些主要的关键词（比如 SELECT、UPDATE、DELETE、INSERT、WHERE 等等）。\r\n\r\n注释：除了 SQL 标准之外，大部分 SQL 数据库程序都拥有它们自己的私有扩展！', 'an', '2020-06-21 00:45:19', NULL),
(3, 1, 'Python介绍', 'Python是一种跨平台的计算机程序设计语言。 是一个高层次的结合了解释性、编译性、互动性和面向对象的脚本语言。最初被设计用于编写自动化脚本(shell)，随着版本的不断更新和语言新功能的添加，越多被用于独立的、大型项目的开发。\r\nPython在设计上坚持了清晰划一的风格，这使得Python成为一门易读、易维护，并且被大量用户所欢迎的、用途广泛的语言。\r\n设计者开发时总的指导思想是，对于一个特定的问题，只要有一种最好的方法来解决就好了。这在由Tim Peters写的Python格言（称为The Zen of Python）里面表述为：There should be one-- and preferably only one --obvious way to do it. 这正好和Perl语言（另一种功能类似的高级动态语言）的中心思想TMTOWTDI（There\'s More Than One Way To Do It）完全相反。\r\nPython的作者有意的设计限制性很强的语法，使得不好的编程习惯（例如if语句的下一行不向右缩进）都不能通过编译。其中很重要的一项就是Python的缩进规则。\r\n一个和其他大多数语言（如C）的区别就是，一个模块的界限，完全是由每行的首字符在这一行的位置来决定的（而C语言是用一对花括号{}来明确的定出模块的边界的，与字符的位置毫无关系）。这一点曾经引起过争议。因为自从C这类的语言诞生后，语言的语法含义与字符的排列方式分离开来，曾经被认为是一种程序语言的进步。不过不可否认的是，通过强制程序员们缩进（包括if，for和函数定义等所有需要使用模块的地方），Python确实使得程序更加清晰和美观。', 'an', '2020-06-21 00:45:22', NULL),
(5, 1, '这是一篇关于Android的文章', '内容暂定，以后再说！', 'an', '2020-06-23 12:43:48', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `article_type`
--

CREATE TABLE `article_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `article_type`
--

INSERT INTO `article_type` (`type_id`, `type_name`) VALUES
(1, 'Android'),
(2, '技能技巧'),
(3, 'PHP');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `fileid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `comtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `fileid`, `username`, `content`, `comtime`) VALUES
(1, 1, 'an', '干的漂亮！', '2020-06-17 10:23:14'),
(2, 1, 'nmsl', '写的挺好的，奥利给！', '2020-06-21 23:39:09'),
(3, 2, 'nmsl', '这是第二篇文章的第一条留言', '2020-06-20 23:40:12'),
(4, 1, 'eryue', '6666666666666！', '2020-06-20 00:05:49'),
(7, 3, 'ismi', '第n次测试', '2020-06-22 04:07:06'),
(8, 3, 'ismi', '第n+1次测试', '2020-06-22 04:13:15'),
(15, 1, 'an', '留下我的足迹', '2020-06-23 03:44:10');

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `notice_content` text NOT NULL,
  `notice_author` varchar(20) NOT NULL,
  `notice_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转储表的索引
--

--
-- 表的索引 `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`regname`);

--
-- 表的索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `author` (`author`);

--
-- 表的索引 `article_type`
--
ALTER TABLE `article_type`
  ADD PRIMARY KEY (`type_id`);

--
-- 表的索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fileid` (`fileid`),
  ADD KEY `username` (`username`);

--
-- 表的索引 `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`),
  ADD KEY `notice_author` (`notice_author`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `article_type`
--
ALTER TABLE `article_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用表AUTO_INCREMENT `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 限制导出的表
--

--
-- 限制表 `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `article_type` (`type_id`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`author`) REFERENCES `adminuser` (`regname`);

--
-- 限制表 `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`fileid`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`username`) REFERENCES `adminuser` (`regname`);

--
-- 限制表 `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`notice_author`) REFERENCES `adminuser` (`regname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
