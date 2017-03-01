DROP TABLE IF EXISTS `ElBradoscewlscript`;
CREATE TABLE IF NOT EXISTS `ElBradoscewlscript` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `info_hash` varchar(40) DEFAULT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `save_as` varchar(255) NOT NULL DEFAULT '',
  `descr` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `category` int(10) unsigned NOT NULL DEFAULT '0',
  `size` bigint(20) unsigned NOT NULL DEFAULT '0',
  `added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('single','multi') NOT NULL DEFAULT 'single',
  `numfiles` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` int(10) unsigned NOT NULL DEFAULT '0',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `times_completed` int(10) unsigned NOT NULL DEFAULT '0',
  `leechers` int(10) unsigned NOT NULL DEFAULT '0',
  `seeders` int(10) unsigned NOT NULL DEFAULT '0',
  `last_action` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visible` enum('yes','no') NOT NULL DEFAULT 'yes',
  `banned` enum('yes','no') NOT NULL DEFAULT 'no',
  `owner` int(10) unsigned NOT NULL DEFAULT '0',
  `anon` enum('yes','no') NOT NULL DEFAULT 'no',
  `numratings` int(10) unsigned NOT NULL DEFAULT '0',
  `ratingsum` int(10) unsigned NOT NULL DEFAULT '0',
  `nfo` enum('yes','no') NOT NULL DEFAULT 'no',
  `announce` varchar(255) NOT NULL DEFAULT '',
  `external` enum('yes','no') NOT NULL DEFAULT 'no',
  `torrentlang` int(10) unsigned NOT NULL DEFAULT '1',
  `freeleech` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `info_hash` (`info_hash`(20)),
  KEY `owner` (`owner`),
  KEY `visible` (`visible`),
  KEY `category_visible` (`category`,`visible`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `code1`
--

INSERT INTO `code1` (`id`, `info_hash`, `name`, `filename`, `save_as`, `descr`, `image1`, `image2`, `category`, `size`, `added`, `type`, `numfiles`, `comments`, `views`, `hits`, `times_completed`, `leechers`, `seeders`, `last_action`, `visible`, `banned`, `owner`, `anon`, `numratings`, `ratingsum`, `nfo`, `announce`, `external`, `torrentlang`, `freeleech`) VALUES
(4, '71c5dda01206a8364e79797edcc1c682f7e95171', 'Made Possible Only By ElBrado @ ElBrado.Cf
', 'Made Possible Only By ElBrado @ ElBrado.Cf.torrent', 'Made Possible Only By ElBrado @ ElBrado.Cf.torrent', 'No description given.', '', '', 19, 8, '2017-02-10 11:11:11', 'single', 1, 0, 1, 1, 0, 0, 0, '2017-02-10 11:11:11', 'no', 'no', 1, 'no', 0, 0, 'no', 'https://tcs.elbrado.cf/', 'no', 0, '0');
