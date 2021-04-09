-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 02, 2021 at 07:42 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project4`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `published_date` date NOT NULL,
  `number` int(11) NOT NULL,
  `image` text,
  `draft` tinyint(1) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `title`, `body`, `published_date`, `number`, `image`, `draft`, `publish`) VALUES
(1, 'WITH PASCIN AT THE DOME', 'It was a lovely evening and I had worked hard all day and left the flat over the sawmill and walked out through the courtyard with the stacked lumber, closed the door, crossed the street and went into the back door of the bakery that fronted on the Boulevard.\r\n\r\nMontparnasse and out through the good bread smells of the ovens and the shop to the street. \r\n\r\nThe lights were on in the bakery and outside it was the end of the day and I walked in the early dusk up the street and stopped outside the terrace of the   temps de Toulouse restaurant where our red and white checkered napkins were in the wooden napkin rings in the napkin rack waiting for us to come to dinner. I read the menu mimeographed in purple ink and saw that the plat du jour was cassoulet.\r\nIt made me hungry to read the name.\r\n\r\nMr. Lavigne, the proprietor, asked me how my work had gone and I said it had gone very well. He said he had seen me working on the terrace of the Closerie des Lilas early in the morning but he had not spoken to me because I was so occupied.\r\n\r\n“You had the air of a man alone in the jungle,” he said.\r\n\r\n“I am like a blind pig when I work.”\r\n\r\n“But were you not in the jungle, Monsieur?”\r\n\r\n“In the bush,” I said.\r\n\r\nI went on up the street looking in the windows and happy with the spring evening and the people coming past. In the three principal cafés I saw people that I knew by sight and others that I knew to speak to. But there were always much nicer-looking people that I did not know that, in the evening with the lights just coming on, were hurrying to some place to drink together, to eat together and then to make love. The people in the principal cafés might do the same thing or they might just sit and drink and talk and love to be seen by others. \r\n\r\n\r\nThe people that I liked and had not met went to the big cafés because they were lost in them and no one noticed them and they could be alone in them and be together. The big cafés were cheap then too, and all had good beer and the apéritifs cost reasonable prices that were clearly marked on the saucers that were served with them.', '2021-01-17', 1, 'https://images.unsplash.com/photo-1504979489322-bfab450b252d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80', 0, 0),
(3, 'SETTLING IN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2021-01-17', 2, 'https://images.unsplash.com/photo-1527796087574-4aa5c69d5fd2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80', 0, 0),
(8, 'A GOOD CAFE\r\n', '<p>It was a pleasant caf&eacute;, warm and clean and friendly, and I hung up my old waterproof on the coat rack to dry and put my worn and weathered felt hat on the rack above the bench and ordered a <span class=\"it\">caf&eacute; au lait</span>. The waiter brought it and I took out a notebook from the pocket of the coat and a pencil and started to write. I was writing about up in Michigan and since it was a wild, cold, blowing day it was that sort of day in the story. I had already seen the end of fall come through boyhood, youth, and young manhood, and in one place you could write about it better than in another. That was called transplanting yourself, I thought, and it could be as necessary with people as with other sorts of growing things. But in the story, the boys were drinking and this made me thirsty and I ordered a rum St. James. This tasted wonderful on a cold day and I kept on writing, feeling very well and feeling the good Martinique rum warm me all through my body and my spirit.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2021-02-21', 3, 'https://images.unsplash.com/photo-1445116572660-236099ec97a0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1502&q=80', 0, 0),
(9, 'A FALSE SPRING IN ALASKA', '<p class=\"noindent\">When spring came, even the false spring, there were no problems except where to be happiest. The only thing that could spoil a day was people and if you could keep from making engagements, each day had no limits. People were always the limiters of happiness except for the very few that were as good as spring itself.</p>\r\n<p class=\"pindent\">In the spring mornings, I would work early while my wife still slept. The windows were open wide and the cobbles of the street were drying after the rain. The sun was drying the wet faces of the houses that faced the window. The shops were still shuttered. The goatherd came up the street blowing his pipes and a woman who lived on the floor above us came out onto the sidewalk with a big pot. The goatherd chose one of the heavy-bagged, black milk-goats and milked her into the pot while his dog pushed the others onto the sidewalk. The goats looked around, turning their necks like sight-seers. The goatherd took the money from the woman and thanked her and went on up the street piping and the dog herded the goats on ahead, their horns bobbing. I went back to writing and the woman came up the stairs with the goat milk. She wore her felt-soled cleaning shoes and I only heard her breathing as she stopped on the stairs outside our door and then the shutting of her door. She was the only customer for goat milk in our building.</p>', '2021-02-21', 4, 'https://images.unsplash.com/photo-1431698194201-465e7d003539?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1504&q=80', 0, 0),
(10, 'GOOD DISCIPLINE', '<p class=\"pindent\">You got very hungry when you did not eat enough in Paris because all the bakery shops had such good things in the windows and people ate outside at tables on the sidewalk so that you saw and smelled the food. When you had given up journalism and were writing nothing that anyone in America would buy, explaining at home that you were lunching out with someone, the best place to go was the Luxembourg gardens where you saw and smelled nothing to eat all the way from the Place de l&rsquo;Observatoire to the rue de Vaugirard. There you could always go into the Luxembourg museum and all the paintings were sharpened and clearer and more beautiful if you were belly-empty, hollow-hungry. I learned to understand C&eacute;zanne much better and to see truly how he made landscapes when I was hungry. I used to wonder if he were hungry too when he painted; but I thought possibly it was only that he had forgotten to eat. It was one of those unsound but illuminating thoughts you have when you have been sleepless or hungry. Later I thought C&eacute;zanne was probably hungry in a different way.</p>', '2021-02-21', 5, 'https://images.unsplash.com/photo-1583403943065-7ceb2e68dd0f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1504&q=80', 0, 0),
(12, 'MADOX FORD', '<p class=\"noindent\">The Closerie des Lilas was the nearest good caf&eacute; when we lived in the flat over the sawmill at 113 rue Notre-Dame-des-Champs, and it was one of the best caf&eacute;s in Paris. It was warm inside in the winter and in the spring and fall it was very fine outside with the tables under the shade of the trees on the side where the statue of Marshal Ney was, and the square, regular tables under the big awnings along the boulevard. Two of the waiters were our good friends. People from the D&ocirc;me and the Rotonde never came to the Lilas. There was no one there they knew, and no one would have stared at them if they came. In those days many people went to the caf&eacute;s at the corner of the Boulevard Montparnasse and the Boulevard Raspail to be seen publicly and in a way such places anticipated the columnists as the daily substitutes for immortality.</p>\r\n<p class=\"pindent\">The Closerie des Lilas had once been a caf&eacute; where poets met more or less regularly and the last principal poet had been Paul Fort whom I had never read. But the only poet I ever saw there was Blaise Cendrars, with his broken boxer&rsquo;s face and his pinned-up empty sleeve, rolling a cigarette with his one good hand. He was a good companion until he drank too much and, at that time, when he was lying, he was more interesting than many men telling a story truly. But he was the only poet who came to the Lilas then and I only saw him there once. Most of the clients were elderly bearded men in well worn clothes who came with their wives or their mistresses&nbsp;<span id=\"Page_82\" class=\"pageno\" title=\"82\"></span>and wore or did not wear thin red Legion of Honor ribbons in their lapels. We thought of them all hopefully as scientists or&nbsp;<span class=\"it\">savants</span>&nbsp;and they sat almost as long over an ap&eacute;ritif as the men in shabbier clothes who sat with their wives or mistresses over a&nbsp;<span class=\"it\">caf&eacute; cr&egrave;me</span>&nbsp;and wore the purple ribbon of the Palms of the Academy, which had nothing to do with the French Academy, and meant, we thought, that they were professors or instructors.</p>\r\n<p class=\"pindent\">These people made it a comfortable caf&eacute; since they were all interested in each other and in their drinks or coffees, or infusions, and in the papers and periodicals which were fastened to rods, and no one was on exhibition.</p>', '2021-02-22', 6, 'https://images.unsplash.com/photo-1506899686410-4670690fccef?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1336&q=80', 0, 0),
(13, 'HAWKS DO NOT SHARE', 'While we were living in the Vorarlberg and I was finishing rewriting the novel, Scott and his wife and child had left Paris for a watering place in the lower Pyrénées. Zelda had been ill with that familiar intestinal complaint that too much champagne produces and which was then diagnosed as colitis. Scott was not drinking, and starting to work and he wanted us to come to Juan-les-Pins in June. They would find an inexpensive villa for us and this time he would not drink and it would be like the old good days and we would swim and be healthy and brown and have one apéritif before lunch and one before dinner. Zelda was well again and they were both fine and his novel was going wonderfully. He had money coming in from a dramatization of The Great Gatsby which was running well and it would sell to the movies and he had no worries. Zelda was really fine and everything was going to be disciplined.', '2021-02-22', 7, 'https://images.unsplash.com/photo-1592853601986-bd5e508347de?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1494&q=80', 0, 0),
(14, 'A MATTER OF MEASUREMENTS', '<p class=\"noindent\">Much later, in the time after Zelda had what was then called her first nervous breakdown and we happened to be in Paris at the same time, Scott asked me to have lunch with him at Michaud&rsquo;s restaurant on the corner of the rue Jacob and the rue des Saints-P&egrave;res. He said he had something very important to ask me that meant more than anything in the world to him and that I must answer absolutely truly. I said that I would do the best that I could. When he would ask me to tell him something absolutely truly, which is very difficult to do, and I would try it, what I said would make him angry, often not when I said it but afterwards, and sometimes long afterwards when he had brooded on it. My words would become something that would have to be destroyed and sometimes, if possible, me with them.</p>\r\n<p class=\"pindent\">He drank wine at the lunch but it did not affect him and he had not prepared for the lunch by drinking before it. We talked about our work and about people and he asked me about people that we had not seen lately. I knew that he was writing something good and that he was having great trouble with it for many reasons but that was not what he wanted to talk about. I kept waiting for it to come, the thing that I had to tell the absolute truth about; but he would not bring it up until the end of the meal, as though we were having a business lunch.</p>', '2021-02-22', 8, 'https://images.unsplash.com/photo-1501139083538-0139583c060f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80', 0, 0),
(15, 'BIRTH OF A NEW SCHOOL ', '<p class=\"noindent\">The blue-backed notebooks, the two pencils and the pencil sharpener (a pocket knife was too wasteful), the marble-topped tables, the smell of early morning, sweeping out and mopping, and luck were all you needed. For luck you carried a horse chestnut and a rabbit&rsquo;s foot in your right pocket. The fur had been worn off the rabbit&rsquo;s foot long ago and the bones and the sinews were polished by wear. The claws scratched in the lining of your pocket and you knew your luck was still there.</p>\r\n<p class=\"pindent\">Some days it went so well that you could make the country so that you could walk into it through the timber to come out into the clearing and work up onto the high ground and see the hills beyond the arm of the lake. A pencil-lead might break off in the conical nose of the pencil sharpener and you would use the small blade of the pen knife to clear it or else sharpen the pencil carefully with the sharp blade and then slip your arm through the sweat-salted leather of your pack strap to lift the pack again, get the other arm through and feel the weight settle on your back and feel the pine needles under your moccasins as you started down for the lake.</p>', '2021-02-22', 9, 'https://images.unsplash.com/photo-1505682634904-d7c8d95cdc50?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80', 0, 0),
(16, 'THERE IS NEVER ANY END IN ALASKA', '<p class=\"noindent\">When there were the three of us instead of just the two, it was the cold and the weather that finally drove us out of Paris in the winter time. Alone there was no problem when you got used to it. I could always go to a caf&eacute; to write and could work all morning over a&nbsp;<span class=\"it\">caf&eacute; cr&egrave;me</span>&nbsp;while the waiters cleaned and swept out the caf&eacute; and it gradually grew warmer. My wife could go to work at the piano in a cold place and with enough sweaters keep warm playing and come home to nurse Bumby. It was wrong to take a baby to a caf&eacute; in the winter though; even a baby that never cried and watched everything that happened and was never bored. There were no baby-sitters then and Bumby would stay happy in his tall cage bed with his big, loving cat named F. Puss. There were people who said that it was dangerous to leave a cat with a baby. The most ignorant and prejudiced said that a cat would suck a baby&rsquo;s breath and kill him. Others said that a cat would lie on a baby and the cat&rsquo;s weight would smother him. F. Puss lay beside Bumby in the tall cage bed and watched the door with his big yellow eyes, and would let no one come near him when we were out and Marie, the&nbsp;<span class=\"it\">femme de m&eacute;nage</span>, had to be away. There was no need for baby-sitters. F. Puss was the baby-sitter.</p>\r\n<p class=\"pindent\">But when you are poor, and we were really poor when I had given up all journalism when we came back from Canada, and could sell no stories at all, it was too rough with a baby in Paris in the winter. At three months Mr. Bumby had crossed&nbsp;<span id=\"Page_198\" class=\"pageno\" title=\"198\"></span>the North Atlantic on a twelve-day small Cunarder that sailed from New York via Halifax in January. He never cried on the trip and laughed happily when he would be barricaded in a bunk so he could not fall out when we were in heavy weather. But our Paris was too cold for him.</p>\r\n<p class=\"pindent\">When I saw my wife again standing by the tracks as the train came in by the piled logs at the station, I wished I had died before I ever loved anyone but her. She was smiling, the sun on her lovely face tanned by the snow and sun, beautifully built, her hair red gold in the sun, grown out all winter awkwardly and beautifully, and Mr. Bumby standing with her, blond and chunky and with winter cheeks looking like a good Vorarlberg boy.</p>\r\n<p class=\"pindent\">&ldquo;Oh Tatie,&rdquo; she said, when I was holding her in my arms, &ldquo;you&rsquo;re back and you made such a fine successful trip. I love you and we&rsquo;ve missed you so.&rdquo;</p>\r\n<p class=\"pindent\">I loved her and I loved no one else and we had a lovely magic&nbsp;<span id=\"Page_211\" class=\"pageno\" title=\"211\"></span>time while we were alone. I worked well and we made great trips, and I thought we were invulnerable again, and it wasn&rsquo;t until we were out of the mountains in late spring, and back in Paris that the other thing started again.</p>\r\n<p class=\"pindent\">That was the end of the first part of Paris. Paris was never to be the same again although it was always Paris and you changed as it changed. We never went back to the Vorarlberg and neither did the rich.</p>\r\n<p class=\"pindent\">There is never any ending to Alaska and the memory of each person who has lived in it differs from that of any other. We always returned to it no matter who we were or how it was changed or with what difficulties, or ease, it could be reached. Paris was always worth it and you received return for whatever you brought to it. But this is how Paris was in the early days when we were very poor and very happy.</p>', '2021-02-22', 10, 'https://images.unsplash.com/photo-1512012879562-fbfd1b209161?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80', 0, 0),
(19, 'THE END OF AN AVOCATION', 'We went racing together many more times that year and other years after I had worked in the early mornings, and Hadley enjoyed it and sometimes she loved it. But it was not the climbs in the high mountain meadows above the last forest, nor nights coming home to the chalet, nor was it climbing with Chink, our best friend, over a high pass into new country. It was not really racing either. It was gambling on horses. But we called it racing.\r\n\r\nRacing never came between us, only people could do that; but for a long time it stayed close to us like a demanding friend. That was a generous way to think of it. I, the one who was so righteous about people and their destructiveness, tolerated this friend that was the falsest, most beautiful, most exciting, vicious, and demanding because she could be profitable. To make it profitable was more than a full-time job and I had no time for that. But I justified it to myself because I wrote it, even though in the end, when everything I had written was lost, there was only one racing story that survived, because it was out in the mails.\r\n\r\nI was going to races alone more now and I was involved in them and getting too mixed up with them. I worked two tracks in their season when I could, Auteuil and Enghien. It took full-time work to try to handicap intelligently and you could make no money that way. That was just how it worked out on paper. You could buy a newspaper that gave you that.\r\n\r\nYou had to watch a jumping race from the top of the stands at Auteuil and it was a fast climb up to see what each horse did and see the horse that might have won and did not, and see why or maybe how he did not do what he could have done. You watched the prices and all the shifts of odds each time a horse you were following would start, and you had to know how he was working and finally get to know when the stable would try with him. He always might be beaten when he tried; but you should know by then what his chances were. It was hard work but at Auteuil it was beautiful to watch each day they raced when you could be there and see the honest races with the great horses, and you got to know the course as well as any place you had ever known. You knew many people finally, jockeys and trainers and owners and too many horses and too many things.\r\n\r\nIn principle I only bet when I had a horse to bet on but I sometimes found horses that nobody believed in except the men who trained and rode them that won race after race with me betting on them. I stopped finally because it took too much time, I was getting too involved and I knew too much about what went on at Enghien and at the flat racing tracks too.', '2021-02-27', 11, 'https://images.unsplash.com/photo-1527581849771-416a9d62308e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `author` text NOT NULL,
  `to_validate` tinyint(1) NOT NULL DEFAULT '1',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `validated` tinyint(1) NOT NULL DEFAULT '1',
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `parent_id`, `chapter_id`, `comment`, `comment_date`, `author`, `to_validate`, `flag`, `validated`, `email`) VALUES
(10, NULL, 1, 'Love this Chapter, beautifully written. Thank you.', '2021-03-13 00:00:00', 'Jane', 1, 0, 1, 'jane@yahoo.com'),
(11, NULL, 3, 'nice', '2021-03-13 19:03:19', 'john', 1, 0, 1, 'smith@yahoo.com'),
(12, NULL, 10, 'Great chapter! thank you', '2021-03-13 19:09:48', 'Anthony', 1, 0, 1, 'anthony@gmail.com'),
(13, NULL, 3, 'Merci', '2021-03-15 17:09:13', 'Steph', 1, 0, 1, 'steph@yahoo.com'),
(14, NULL, 3, 'kkggjgj', '2021-03-15 19:29:07', 'jgj', 1, 0, 1, 'jh@yahoo.com'),
(15, NULL, 3, 'v', '2021-03-15 19:42:50', ',bh', 1, 0, 1, 'hc@gf.ki'),
(16, NULL, 3, 'sdfsdf', '2021-03-15 19:49:21', 'asdf', 1, 0, 1, 'sdf@jdhf.fr'),
(17, NULL, 3, 'sdf', '2021-03-15 19:54:33', 'sadf', 1, 0, 1, 'sadf@sf.fr'),
(18, NULL, 3, 'sdf', '2021-03-15 19:57:45', 'asdf', 1, 0, 1, 'sdhjfl@jsdf.fr'),
(19, NULL, 3, 'qwertyu', '2021-03-17 16:09:57', 'xqwert', 1, 0, 1, 'qwerty@yahoo.com'),
(26, NULL, 10, 'Love it', '2021-03-22 11:28:02', 'dklsdnk', 1, 0, 1, 'yes@yahoo.com'),
(27, NULL, 10, 'Great chapter', '2021-03-22 11:28:53', 'yahoo', 1, 0, 1, 'kdd@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`) VALUES
(1, 'asf', 'asdf', 'sf@sf.fr', 'sdaf', 'dfz'),
(2, 'asf', 'asdf', 'sf@sf.fr', 'sdaf', 'dfz'),
(3, 'asf', 'asdf', 'sf@sf.fr', 'sdaf', 'dfz'),
(4, 'JTF', 'jgkjh', 'ajtd@sfr.com', 'khgh', 'hkjk.k'),
(5, 'kllk', 'jb.kj', 'sjsjsjs@yahoo.com', 'sjsjsjssjs', 'sksksksks');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'jo', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapter_id` (`chapter_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`chapter_id`) REFERENCES `chapter` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `comment` (`id`);
