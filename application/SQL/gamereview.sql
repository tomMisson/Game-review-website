-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 12:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `activereviews`
--

CREATE TABLE `activereviews` (
  `ID` int(11) NOT NULL,
  `GameName` varchar(250) NOT NULL,
  `GameBlurb` longtext NOT NULL,
  `GameReview` longtext NOT NULL,
  `GameComments_YN` varchar(1) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `ReviewImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `activereviews`
--

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(1, 'Borderlands 3', 'Borderlands 3 is an action role-playing first-person shooter video game developed by Gearbox Software and published by 2K Games. It is the sequel to 2012s Borderlands 2, and the fourth main entry in the Borderlands series', 'Borderlands 3 is The Family Circus by way of Spencers Gifts, a game with long, earnest quests about how darn good coffee is punctuated by gore and gun violence. Borderlands 3 walks by dog poop, points at it, and laughs, and then sets it on fire. Borderlands 3 stays up until 11:30 pm drinking soda and googling crass Flash animations, taking detailed notes.<br><br>Its stuck in the late 00s, when surface level vulgarity was enough to qualify as edgy—Borderlands 3 is seriously obsessed with turds—and when the series was first conceived. Its stuck in a time when memes lasted months rather than days, when referential humor was still a novelty and not exhausting, when you could point at something the slightest bit abnormal or gross and call it a joke. Simpler times, not necessarily better times.<br><br>Our distance from the era Borderlands 3 evokes makes it feel like a retro shooter rather than alive and present in modern humor and pop culture. Its simultaneously repulsive and compulsive, an FPS RPG that excels when its weapon generation system spits out guns that feels great to shoot, adorned with broken attributes capable of turning hordes of goons, bugs, and soldiers into clouds of red mist, elemental particles, explosions, and big damage numbers.', 'Y', 'borderlands-3', 'borderlands-3.jpg'),
(2, 'Days Gone', 'Days Gone is a 2019 action-adventure survival horror video game developed by SIE Bend Studio and published by Sony Interactive Entertainment for the PlayStation 4.', 'After only 10 minutes, you realise something about Days Gone that will come to mind throughout the next 20 hours or so: it is as if Far Cry was set in a B-movie version of The Last of Us universe. If you’re okay with that, you’re going to have a heck of a ride.<br><br>The latest title from Sony’s SIE Bend Studio responsible for the Syphon Filter series is set in the beautiful, rural Pacific Northwest, after the spread of a virus that turns victims into the kind of absolutely-not-zombies we saw in Danny Boyle’s film 28 Days Later. Survivors either hole up together in paranoid communities or drift from one compound to the next, killing the infected for bounties.<br><br>Lead protagonist Deacon St John is a rootless biker who takes on tasks for these fragile clans, blasting monsters and thieves while grieving his lost wife, Sarah, a botanist who arrived in the area to study plant life before the pandemic and ended up falling for our sullen hero. At the beginning of the game, she is seriously wounded and airlifted to a medical tent, which is later overrun by the cannibalistic infected – neatly providing Deacon with the dead woman that action heroes so often need to give them depth. Now, his only friend is Boozer, who has a bald, heavily tattooed head but few other distinguishing characteristics.', 'Y', 'days-gone', 'days-gone.jpg'),
(3, 'Tomb Raider','Lara Croft, A courageous and independent young woman, sets out on a dangerous journey to unravel the truth behind her adventurer fathers mysterious disappearance.', 'Bigger world, higher stakes, and an unexpected spin on Lara Croft’s character make Shadow of the Tomb Raider the most ambitious of the modern trilogy. There’s a lot going on here, but it manages to keep most of its balls in the air throughout its 25-odd-hour running time. As both a rollicking, horror-kissed action-adventure and an introspective story about obsession and family, Shadow of the Tomb Raider works as a powerful finale to this particular chapter of Lara’s history.<br><br>Shadow of the Tomb Raider tells a great story that continues the series’ tradition of high-concept, Indiana Jones-style mumbo jumbo. This time it’s centered around an impending apocalypse and the search for the ancient item that can prevent it that propels Lara through the dark guts of South America. Moments of big, blockbuster-style scripted action return; skin-of-your-teeth action sequences that hurtle Lara across crumbling earth and bullet-peppered buildings, and feel like wonderfully orchestrated roller-coaster rides. It’s a ton of fun.<br><br>Beneath that, though, the nature of obsession is once again the well-crafted underlying theme. It’s Lara who is obsessed this time, of course, and while the first act suggests a descent into narcissism which could get tedious across 25 hours, her character is handled with a lighter touch. Lara isn’t so much narcissistic as awkward and introverted, only really comfortable when alone in her dangerous element. It’s a surprising and delicately-told development for the character and adds a shade of warm humanity that was not there in 2013’s Tomb Raider or 2015’s Rise of The Tomb Raider', 'Y', 'tomb-raider', 'tomb-raider.jpg'),
(4, 'Cyberpunk 2077', 'Cyberpunk 2077 is an upcoming role-playing video game developed and published by CD Projekt. It is scheduled to be released for Microsoft Windows, PlayStation 4, Stadia, and Xbox One on 17 September 2020.', 'Cyberpunk 2077 is the next big RPG from CD Projekt RED after concluding the Witcher series. Silver swords are out, but cybernetic blades are very much in. For a couple months, information about Cyberpunk 2077 was dropping almost every week. We met Keanu Reeves character, got details about the story, and have seen several new videos both trailers and gameplay. <br><br>With release day pushed back to September from its initial April date, theres still plenty of time for CD Projekt RED to drip feed new information. Until then, weve absorbed all of the precious Cyberpunk 2077 deets and consolidated them into a digestible briefing. When the information train starts back up again, youll be able to find out whats new right here.<br><br>Heres everything you need to know about Cyberpunk 2077.', 'Y', 'cyberpunk-2077', 'cyberpunk-2077.jpg'),
(5, 'Resident Evil', 'Resident Evil 3: Nemesis is a survival horror video game developed by Capcom and released for the PlayStation in 1999. It is the third installment in the Resident Evil series and takes place in two parts, before and after the events of Resident Evil 2.', 'he third and possibly the final Resident Evil has landed on PlayStation with a resounding thud. No, not with the flopping sound of failure, but the thud of evil, a giant lurking, dogged personification of evil. Think your little brother is a pest? Hate that math teacher who always singles you out? Still cant beat Tomb Raider 3? Hah. Thats nothing compared to the ongoing battle you and your star character Jill Valentine face in Resident Evil 3 Nemesis. Whether youre a new fan or an old expert, this new iteration is solid stuff, a deep, more action-reliant adventure game, complete with the creepy mutants and undead of the past, and new ones to torture your dreams.<br><br>SPOILER Alert -- If you dont want to know the full story, stop reading here. Titled Biohazard: The Last Escape in Japan and fit into one disc, Resident Evil 3 Nemesis in the rest of the world continues the saga of the poor souls who live in the once peaceful Raccoon City. Beleaguered by an over-powerful company called Umbrella, Raccoon City resident suffer from the deadly, man-made T-Virus, which slowly kills its hosts usually, but not always, people, and then transforms them in to tortured, flesh-eating zombies, hungry for only one thing, fresh, lovely -- and almost always human -- blood. <br><br>In this episode, Capcom drops us back into Raccoon City in a kind of prequel/sequel. The time frame takes place in between Resident Evil 1 and Resident Evil 2, and stars Jill Valentine from RE and newcomer Carlos Oliviera, a renegade Umbrella military personnel, who turns to the light side of the, er, force, as it were. Just hours after the end of Resident Evil, Jill -- who has retired from Stars -- begins to head out of town. But, trapped in town by a new surge of zombies, she must once again relive the horror. Halfway through the story Jill is rendered unconscious by the Nemesis, and Carlos must keep her alive by finding a vaccine. At this point, players take on Carlos, and follow his quest to help Jill. If Carlos succeeds in his search for the vaccine and saves Jill, players will continue playing as Jill.<br><br>But the usual "zombies running amok in Raccoon City" theme isnt central here. Throughout the game, a creature called the Nemesis chases and fights against you. Its an abomination, a T- or possibly G-Virus created monster with one goal, to kill Stars members until theyre all dead, and its he is it a he? that lifts this title above rest. The Nemesis is different than other zombies, as you may have guessed. Its intelligent, to some degree, and can wield a weapon, a big, big weapon. The Nemesis carries around a missile launcher. Whats worse is that he can run as fast as you and open doors and follow where ever you go. He should have been named the annoying, relentless mutant Ever-ready Battery freak, but somehow that seems to long. "Your worst nightmare" would have been perfect, too. Ah well, the point is, hes a bad-ass, and hes got plenty of surprises in store for you besides just fast feet and a big gun.<br><br>The rest, well, isnt quite history yet, but well leave it for you to find out on your own.', 'Y', 'resident-evil-3', 'resident-evil-3.jpg'),
(6, 'Luigis Mansion', 'Luigis Mansion 3 is an action-adventure game developed by Next Level Games and published by Nintendo for the Nintendo Switch. It is a sequel to Luigis Mansion: Dark Moon, and was released on October 31, 2019.', 'Luigi never seems to learn his lesson. It’s been 18 years since he was first lured to a haunted house and tortured by its spooky inhabitants. Now, having been duped again, he’s trapped in an even bleaker building – the Hotel of Last Resort – as he races to rescue a familiar cast of Mushroom Kingdom characters.<br><br>Although it treads very familiar ground to its predecessors, there’s a lot to love in the third instalment of the adventure series that lets Mario’s timid twin take charge. You still guide the character through uniquely themed sections of the building, relying on his flashlight and multi-functional Poltergust vacuum to rid the place of ghosts.<br><br>Luigi keeps track of his progress through the 15 main hotel floors with the help of a digital assistant, amusingly called a Virtual Boo, as well as the quirky Professor E Gadd, who’s on hand to offer tips and tutorials.<br><br>The game was never likely to stray too far from its roots as a hunt-and-chase adventure, but Nintendo has attempted to breathe new life into the format, and it’s these changes that truly elevate the game. The most innovative addition is Gooigi, a glowing gummy bear-like Luigi clone made of, well, goo. Previously appearing in the 3DS version of Luigi’s Mansion, his malleable nature allows Gooigi to squeeze through grates and pipes, helping to solve puzzles and reach previously inaccessible areas.', 'Y', 'luigis-mansion', 'luigis-mansion.jpg');
-- --------------------------------------------------------
--
-- Table structure for table `gamescomments`
--

CREATE TABLE `gamescomments` (
  `UID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `UserComment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `gamescomments`
--

INSERT INTO `gamescomments` (`UID`, `UserID`, `ReviewID`, `UserComment`) VALUES
(1, 1, 1, 'This is a comment that was generated manually in the database.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `UserPassword` varchar(250) NOT NULL,
  `DarkMode` int(11) NOT NULL,
  `IsAdmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`, `IsAdmin`) VALUES
(1, 'Lecturer', 'Example', 0, 0),
(2, 'Tom', 'password', 1, 1);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `activereviews`
--
ALTER TABLE `activereviews`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `gamescomments`
--
ALTER TABLE `gamescomments`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activereviews`
--
ALTER TABLE `activereviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gamescomments`
--
ALTER TABLE `gamescomments`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
