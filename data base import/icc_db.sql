-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 21 2022 г., 16:59
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `icc_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `textbook`
--

CREATE TABLE `textbook` (
  `id` int NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `PictureLinq` text NOT NULL,
  `Author` text,
  `Date` date DEFAULT NULL,
  `Status` text NOT NULL,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `textbook`
--

INSERT INTO `textbook` (`id`, `Name`, `Description`, `PictureLinq`, `Author`, `Date`, `Status`, `views`) VALUES
(38, 'Хакинг. Искусство эксплойта', 'The computer programming portion of Hacking takes up over half of the book. This section goes into the development, design, construction, and testing of exploit code, and thus involves some basic assembly programming. The demonstrated attacks range from simple buffer overflows on the stack to complex techniques involving overwriting the Global Offset Table.\r\n\r\nWhile Erickson discusses countermeasures such as a non-executable stack and how to evade them with return-to-libc attacks, he does not dive into deeper matters without known guaranteed exploits such as address space layout randomization. The book also does not cover the Openwall, GrSecurity, and PaX projects, or kernel exploits.\r\n\r\nDenial of Service\r\nA denial of service attack is an attempt to make a computer resource unavailable to its intended users. This means that the denial of service attack sends a large quantity of communication requests to an intended resource in order to overflow the resource so that it becomes unusable for a certain period of time. These types of attacks are usually directed at routers or firewalls in order to shut them down to gain access to other computers on the network. A router is very susceptible to these types of attacks but a firewall can usually handle the attack and is unaffected. A distributed denial of service attack is when communication requests come from multiple computers, greatly increasing the number of requests over a regular denial of service attack. Some other types of DOS attacks include Ping of Death, Teardrop, Ping Flooding, and Amplification attacks.\r\n\r\nTCP/IP Hijacking\r\nTCP/IP Hijacking is another way that uses spoofed packets to take over a connection between the victim and a host machine. This technique is mainly used to collect passwords when a host machine uses a password to be connected to. When this type of attack takes place the victim and the attacker must be on the same network. Another form of TCP/IP hijacking is RST hijacking, which involves injecting a fake reset packet.\r\n\r\nPort Scanning\r\nPort scanning is simply a way to figure out which ports are accepting and listening to connections. The hacker would just use a program that lets him know which ports are open by scanning all the ports on a network and trying to open them. There are many other type of scans, such as SYN, Idle, FIN, X-Mas, and Null scans.\r\n\r\nReach Out and Hack Someone\r\nThis part is about finding vulnerabilities in the typecasting of the network. Using a debugger to go through lines of code which are used for network protocols is the most efficient way to accomplish this.', './source/img/logotypes/1.jpg', 'Джон Эриксон', '2003-06-10', 'published', 3),
(39, 'Искусство вторжения', 'Описание<br>\r\nИстории, рассказанные в этой книге, демонстрируют, как небезопасны все компьютерные системы, и как мы уязвимы перед подобными атаками. Урок этих историй заключается в том, что хакеры находят новые и новые уязвимости каждый день. Читая эту книгу, думайте не о том, как изучить конкретные уязвимости тех или иных устройств, а о том, как изменить ваш подход к проблеме безопасности и приобрести новый опыт.\r\nЕсли вы профессионал в области информационных технологий или обеспечения безопасности, каждая из историй станет для вас своеобразным уроком того, как повысить уровень безопасности в вашей компании. Если же вы не имеете отношения к технике и просто любите детективы, истории о рисковых и мужественных парнях - вы найдете их на страницах этой книги.', './source/img/logotypes/2.jpg', 'Кевин Митник', '2005-03-05', 'published', 1),
(40, 'Политики безопасности компании', 'Книга является первым полным русскоязычным практическим руководством по вопросам разработки политик информационной безопасности в отечественных компаниях и организациях и отличается от других источников, преимущественно изданных за рубежом, тем, что в ней последовательно изложены все основные идеи, методы и способы практического решения вопросов разработки, внедрения и поддержки политик безопасности в различных российских государственных и коммерческих структурах.Книга может быть полезна руководителям служб автоматизации (CIO) и служб информационной безопасности (CISO), ответственным за утверждение политик безопасности и организацию режима информационной безопасности; внутренним и внешним аудиторам (CISA); менеджерам высшего эшелона управления компанией (ТОР-менеджерам), которым приходится разрабатывать и внедрять политики безопасности в компании; администраторам безопасности, системным и сетевым администраторам, администраторам БД, которые отвечают за соблюдение правил безопасности в отечественных корпоративных информационных системах. Книга также может использоваться в качестве учебного пособия студентами и аспирантами соответствующих технических специальностей.', './source/img/logotypes/3.jpg', ' Владимир Курбатов и Сергей Петренко', '2004-03-04', 'published', 2),
(41, 'Семь безопасных информационных...', 'Целью написания книги является ознакомление читателей с зарубежными подходами в области информационной безопасности.Все разделы подготовлены на базе материалов международных сертификационных учебных курсов в области управления информационной безопасностью. Изложены базовые принципы, концептуальные подходы и информационные технологии, применяемые при многоуровневой защите информации в организациях. Основное внимание уделено структуризации и классификации методов, техник и средств обеспечения безопасности информационных ресурсов компьютерных систем.Учебник в первую очередь предназначен для специалистов, желающих принципиально повысить свой профессиональный статус и подготовиться к сдаче международных экзаменов в области информационной безопасности. Полезен студентам, обучающимся по специальностям в области информационной безопасности и смежным специальностям, а также всем увлекающимся вопросами компьютерной безопасности.', './source/img/logotypes/4.jpg', ' Андрей Дорофеев, В. Цирлов', '2014-02-06', 'published', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `textbook`
--
ALTER TABLE `textbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `textbook`
--
ALTER TABLE `textbook`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
