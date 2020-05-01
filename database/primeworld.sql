-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 08:32 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primeworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `user_id` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `show_id` varchar(100) NOT NULL,
  `comment` mediumtext NOT NULL,
  `analysis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user_id`, `age`, `gender`, `location`, `show_id`, `comment`, `analysis`) VALUES
('USER5387', 20, 'male', 'India', 'MOVIE1467', 'As a viewer that actually went to TIFF and witnessed this film and didnt want to believe the hype it is an absolute MASTERPIECE and Phoenix is a certified legend.', 'Positive'),
('USER7913', 25, 'male', 'China', 'MOVIE1467', 'Outstanding movie with a haunting performance and best character development ever seen', 'Positive'),
('USER5791', 30, 'male', 'Japan', 'MOVIE1467', 'This is a movie that only those who have felt alone and isolated can truly relate to it. You understand the motive and you feel sorry for the character. A lot of people will see this movie and think that it encourages violence. But truly', 'Positive'),
('USER6829', 18, 'female', 'America', 'MOVIE1467', 'I will stop watching movies if Joaquin Phoenix is not awarded Oscar for his tremendous acting.', 'Positive'),
('USER0536', 48, 'female', 'Australia', 'MOVIE1467', 'Need I say more? Everything about this Movie is Masterful in every single way! Joker isnt just an awesome comic book movie', 'Positive'),
('USER6466', 22, 'female', 'Australia', 'MOVIE1467', 'This movie answers this question...what will the Joker be if he was a real life character ? A great deep and moving story a life journey of a man whos suffering from some psychological issues and how neglect', 'Positive'),
('USER7956', 36, 'male', 'Japan', 'MOVIE1467', 'Great', 'Positive'),
('USER0055', 20, 'female', 'India', 'MOVIE1467', 'One of the best acting performances I have ever seen', 'Positive'),
('USER9859', 35, 'female', 'India', 'MOVIE1467', 'Extremely overrated', 'Negative'),
('USER3936', 65, 'female', 'Sri Lanka', 'MOVIE1467', 'OK film', 'Negative'),
('USER6344', 43, 'female', 'Sri Lanka', 'MOVIE0842', 'Excellent performance by Hrithik sir in super 30 . This is one of his best performance ', 'Positive'),
('USER4714', 53, 'female', 'Australia', 'MOVIE0842', 'Great work done by Hrithik. Really needed to put those struggles faced by Anand Kumar and his students on screen. My fav dialogue India Chalang Lagaega', 'Positive'),
('USER9771', 30, 'female', 'China', 'MOVIE0842', 'Inspiring India..', 'Positive'),
('USER6103', 25, 'male', 'India', 'MOVIE0842', 'An Inspirational movie Hrithik did a great job. He gave his 100% hardwork in this movie. Movie is based on Anand Sir life who runs Super30. As I was the part of Super30 2015 batch', 'Positive'),
('USER1523', 29, 'male', 'India', 'MOVIE0842', 'A great movie by HR sir.... Tremendous work done by super30 team The great story about 30 boys ever seen a great teacher', 'Positive'),
('USER4953', 58, 'male', 'America', 'MOVIE0842', 'I just wanna thank everyone(Super 30 team) For giving me so much brilliant outstanding cinema Thank you hrithik Thank mr. bahl This movie deserves everything and a great applause', 'Positive'),
('USER9768', 40, 'male', 'America', 'MOVIE0842', 'unexpectedly awesome..Brilliant Direction..', 'Positive'),
('USER0137', 26, 'male', 'Japan', 'MOVIE0842', 'An Inspiring and motivational movie for all ages. Hrithik Roshan gave stunning performance.', 'Positive'),
('USER1330', 30, 'male', 'Australia', 'MOVIE0842', 'Poor portrayal of Anand Kumar and events that followed in his later life. Maybe a documentary would have done more justice to him rather than a monotonous', 'Negative'),
('USER4930', 56, 'female', 'Japan', 'MOVIE0842', 'Hrithik acting is really top notch but otherwise pretty ordinary movie and story telling; Climax is terrible should have made this more realistic and it would have been a much better movie.', 'Negative'),
('USER5387', 20, 'male', 'India', 'MOVIE0842', 'Super 30 is a good plot turned wrong! Horrible film making trying to sell on a single premise of raja ka beta raja Nahi banega', 'Negative'),
('USER7913', 25, 'male', 'China', 'MOVIE8487', 'An outstanding action entertainer a must watch!', 'Positive'),
('USER5791', 30, 'male', 'Japan', 'MOVIE8487', 'The movie is one of the best action movie of indian cinema. Wow what a great acting by hrithik roshan as well as tiger. Vaani have very limited role but she is also looking very hot in the movie. Must watch this movie.', 'Positive'),
('USER6829', 18, 'female', 'America', 'MOVIE8487', 'Hrithik Roshan just stole the show.His entry is worth the whole ticket price.Dance battle was great Liked tiger action sequences Kudos to Siddharth Anand for handling such high budget movie and making it one of the best action movie in Bollywood It is an all out action entertainer', 'Positive'),
('USER0536', 48, 'female', 'Australia', 'MOVIE8487', 'Nothing much to say about it just drag ur body to a big screen and watch it ', 'Positive'),
('USER6466', 22, 'female', 'Australia', 'MOVIE8487', 'Best MASALA film ever ! Just go and experience this epic action packed movie with awesome twist…', 'Positive'),
('USER7956', 36, 'male', 'Japan', 'MOVIE8487', 'A full on masterpiece masala entertaining movie', 'Positive'),
('USER0055', 20, 'female', 'India', 'MOVIE8487', 'Logical viewers - please keep your brain out of this .', 'Negative'),
('USER9859', 35, 'female', 'India', 'MOVIE8487', 'All Style and No Substance.', 'Negative'),
('USER3936', 65, 'female', 'Sri Lanka', 'MOVIE8487', 'Terrible Music blasting Slow motion Acrobatics movie', 'Negative'),
('USER6344', 43, 'female', 'Sri Lanka', 'MOVIE8487', '\"If you can hire such talented & expensive actors in my thoughts you should use that money in hiring atleast a good story or a content writer. This movie shows the world how inept the Indian Cinema is', 'Negative'),
('USER4714', 53, 'female', 'Australia', 'MOVIE3004', 'Amazing story. Unbelievably better than expectations. Terrible VFX', 'Positive'),
('USER9771', 30, 'female', 'China', 'MOVIE3004', 'Good Plot decent special effects', 'Positive'),
('USER6103', 25, 'male', 'India', 'MOVIE3004', 'Make way for the Indian Super Hero', 'Positive'),
('USER1523', 29, 'male', 'India', 'MOVIE3004', 'Unrefined storytelling for a visually stunning action film', 'Positive'),
('USER4953', 58, 'male', 'America', 'MOVIE3004', 'very sad', 'Negative'),
('USER9768', 40, 'male', 'America', 'MOVIE3004', 'Krrish ek soch hain jo hum tak nahi pahunch paye', 'Negative'),
('USER0137', 26, 'male', 'Japan', 'MOVIE3004', 'Waste of time', 'Negative'),
('USER1330', 30, 'male', 'Australia', 'MOVIE3004', 'Worst movie EVER', 'Negative'),
('USER4930', 56, 'female', 'Japan', 'MOVIE3004', 'Stupid and hilarious!!', 'Negative'),
('USER5387', 20, 'male', 'India', 'MOVIE3004', 'Waste of Time Money and Energy', 'Negative'),
('USER7913', 25, 'male', 'China', 'MOVIE3453', 'The End of an Era!', 'Positive'),
('USER5791', 30, 'male', 'Japan', 'MOVIE3453', '\"If you are going to watch this movie avoid any spoilers', 'Positive'),
('USER6829', 18, 'female', 'America', 'MOVIE3453', 'I am assuming the low ratings are by comic book nerds. This movie was amazing. A laughed out loud by myself', 'Positive'),
('USER0536', 48, 'female', 'Australia', 'MOVIE3453', 'An experience you all gonna remember forever.', 'Positive'),
('USER6466', 22, 'female', 'Australia', 'MOVIE3453', '\"Walking in given Marvels latest publicity', 'Positive'),
('USER7956', 36, 'male', 'Japan', 'MOVIE3453', 'This is made by people who do for people who do', 'Positive'),
('USER0055', 20, 'female', 'India', 'MOVIE3453', '\"Cheap dialogs non sense violence. The only thing the movie has to offer is explosions. Is it really that hard to make quality superhero movies? Look at Christopher Nolans series of Batman movies', 'Positive'),
('USER9859', 35, 'female', 'India', 'MOVIE3453', '\"Way too long over-melodramatic', 'Negative'),
('USER3936', 65, 'female', 'Sri Lanka', 'MOVIE3453', 'Disney Light plot with predictable old values agenda', 'Negative'),
('USER6344', 43, 'female', 'Sri Lanka', 'MOVIE3453', 'stupid movie', 'Negative'),
('USER5387', 20, 'male', 'India', 'MOVIE3453 ', 'about movie great but sad thing is that at the end we loss iron man ', 'Negative'),
('USER5387', 20, 'male', 'India', 'TVSHOW8784', 'Great show I always like tarak mehata ka oolta chashma.we all enjoyed lot with our families children and relatives . This show is not different its differently .Acting of all are really good.we like it very much specially jeeta bai and dya . There way of talking is really impress us and society...', 'Positive'),
('USER7913', 25, 'male', 'China', 'TVSHOW8784', 'I have started watching Tarak Mehta ka ulta chasma recently and I really loved it. Because the show is basically funny and the content and the characters are good.', 'Positive'),
('USER5791', 30, 'male', 'Japan', 'TVSHOW8784', 'Hey! Friends On Sab TV Tarak Mehta ka Oolta Chashma is the no.1 show has going not a sab tv I think every serial channel the indian best laughter show is this serial every day I watch this I cant miss any episode of this The cast of every one is good performance Jethalal performance is great', 'Positive'),
('USER6829', 18, 'female', 'America', 'TVSHOW8784', 'Tarak mehta ka olta chasma is a best comedy drama soap on Indian television till now its character is unique and has played their role very nice I like jethalal a owner of gada electronic gives me laugh whenever I watched him he looks so natural funny in jethalal character', 'Positive'),
('USER0536', 48, 'female', 'Australia', 'TVSHOW8784', '\"What would one want after coming home from a busy days work during boredom or after a stressful time?? The obvious answer - Relaxation. And normally', 'Positive'),
('USER6466', 22, 'female', 'Australia', 'TVSHOW8784', 'Watching Tarak Mehta Ka Ooltah Chashmah(TMKOC) everyday has become a habit now. I stumbled upon this show while surfing channels couple of months ago. Being a Gujju myself. I used to read Tarak Mehta na Undha Chashma in Chitralekha regularly.', 'Positive'),
('USER7956', 36, 'male', 'Japan', 'TVSHOW8784', 'Taarak Mehta Ka Ulta Chasma (SAB TV) is a based on a famous Gujarati comedy series written by Indian columnist and journalist Tarak Mehta. The show is absolutely a laugh riot for those who tend to seek comedy in real life experiences.', 'Positive'),
('USER0055', 20, 'female', 'India', 'TVSHOW8784', 'Now a days TMKOC is getting boring. Earlier its has best comedy scene. One of the best series was the Chudail. Bhides Scooter has been kidnaped a by a don. What is this yar. Tappu now also wearing those short but he is going to college.', 'Negative'),
('USER9859', 35, 'female', 'India', 'TVSHOW8784', 'Be patience word is quite true to all viewers who are watching this serial Taarak mehta ka ulta chasma. When the serial was shown in Sab tv channel initially everyone liked it but with the span of time it has lost its charm of comedy.', 'Negative'),
('USER3936', 65, 'female', 'Sri Lanka', 'TVSHOW8784', 'We all are very happy to watch TMKOC every day. As its very much family oriented television serial. But last whole week they are showing all wrong things. Like Mr. Iyer drinking wine. And behaving as a sacrifice avatar to give happiness to Babita.', 'Negative'),
('USER6344', 43, 'female', 'Sri Lanka', 'TVSHOW9923', 'The Kapil Sharma show is one of the most entertaining show on Sony channel. The team of this show including Kapil Sharma as Host and Different Characters and his Co-actors knows how to tickle the funny bone of the audiences and the guest on his show.', 'Positive'),
('USER4714', 53, 'female', 'Australia', 'TVSHOW9923', 'The Kapil Sharma show is the best comedy show in India. The comedy timing of each member of this show is just awesome. We can watch this show with our family. Kapil is doing a fabulous job.', 'Positive'),
('USER9771', 30, 'female', 'China', 'TVSHOW9923', 'I personally think that this is best unbeatable comedy show which I really enjoy to watch. It has awesome funny dialogues and acting performed by various characters in this show is fantabulous.', 'Positive'),
('USER6103', 25, 'male', 'India', 'TVSHOW9923', 'Kapil Sharma Show is no.1 Comedy Show in India if Anybody Watch it once', 'Positive'),
('USER1523', 29, 'male', 'India', 'TVSHOW9923', 'The show airs on sony entertainment television every saturday and sunday at 9 pm. It is based on comedy and entertainment which is hosted by the comedian Kapil Sharma Alongwith many other talented actors like Ali Asgar Chandan Prabhakar', 'Positive'),
('USER4953', 58, 'male', 'America', 'TVSHOW9923', 'The Kapil Sharma show is a biggest comedy show and in India it is very popular show.it is becoming a popular show in other country also .becauae of audience love this show gets a position of ranking first in TRP most of time.the time of delivery in dialogue of Kapil is excellent', 'Positive'),
('USER9768', 40, 'male', 'America', 'TVSHOW9923', 'The kapil sharma show is the best comedy show which telecast on sony tv every saterday & sunday. I am biggest fan of this show.i watch every show of this kapil sharma show.not only me yet every person like this show. Kapil sharma is best comedian or host of the show.', 'Positive'),
('USER0137', 26, 'male', 'Japan', 'TVSHOW9923', 'The kapil sharma show is the most popular tv reality show all over the world. but in last week whatever happened that is so ashamed for the tv industry.', 'Negative'),
('USER1330', 30, 'male', 'Australia', 'TVSHOW9923', 'Hey friends I am giving this review of the kapil sharma show in negative because some several reasons- -Firstly we are missing Dr. Mashur Gulati in this show. He was one of those persons who made this show super duper hit. Now he is gone so many peoples get disappointed.', 'Negative'),
('USER4930', 56, 'female', 'Japan', 'TVSHOW9923', 'Kapil was the best standup comedian earlier but after starting his new show with sony tv Standard of his jokes and comedy time went on decreasing only. Only sunil grover is the person cause of whom the show is going on .', 'Negative'),
('USER5387', 20, 'male', 'India', 'TVSHOW6799', 'This show is specially for the intelligent and lucky person. this show is give the chance for play the luck. mr. amitabh bachhan ji is the best host of this show. he is a good sense of human person for this show.', 'Positive'),
('USER7913', 25, 'male', 'China', 'TVSHOW6799', 'KBC is one of the best reality show ever on the TV .It is a very interesting show for all types of generations. Because I think there are very few show for entertainment as well as for knowledge.', 'Positive'),
('USER5791', 30, 'male', 'Japan', 'TVSHOW6799', 'I was once a big fan of Kaun Banega Crorepati Serial. I have never missed the first seasons of the series. The show is not only interesting in watching the contestants win or lose but as well was a very knowledgeable show.', 'Positive'),
('USER6829', 18, 'female', 'America', 'TVSHOW6799', 'Kaun Banega Crorepati 7 is the seventh season of this program.Since last 6 year this program Entertain us. The others season of the KBC are very successful.First of all this is a family program which can be seen by whole family together.', 'Positive'),
('USER0536', 48, 'female', 'Australia', 'TVSHOW6799', 'This is the best indian tv serial ever I find because it help to increase my knowledge . in this show Mr. Amithab bacchan is host and he ask questions to participanate on different areas like history', 'Positive'),
('USER6466', 22, 'female', 'Australia', 'TVSHOW6799', 'The 7th season of KBC was a blast. I always like to watch this show. It brings about some true stories of peoples facing in thier life. It teaches me to do hardwork in my life. It gives a hope to everyone and brings everyone closer to each other.', 'Positive'),
('USER7956', 36, 'male', 'Japan', 'TVSHOW6799', 'It is a educational show by sony TV entertainments for the study lovers and every type of students. The story of the contestants gives a inspiration to the career focusing students.', 'Positive'),
('USER0055', 20, 'female', 'India', 'TVSHOW6799', 'Now-a-days many tv serials reality shows are shown in different tv chanels and KBC is one of the best from it', 'Positive'),
('USER9859', 35, 'female', 'India', 'TVSHOW6799', 'This show is fake.i know some black truth about this show. Childrens are not allowed to sit as audience in this show. All check are fake and although the digital transfer of money is also fake. 30 percent of amount is taken by them as tax.', 'Negative'),
('USER3936', 65, 'female', 'Sri Lanka', 'TVSHOW6799', 'If u want to increase your knowledge thn it is fine but other wise this has nothing to do with you it is not a type of show we can watvh to pass our time its not interseticg and it is only for those who are a big amitab bachan fans.', 'Negative'),
('USER6344', 43, 'female', 'Sri Lanka', 'TVSHOW5397', 'What a show for a talented boys and girls. Whether they are solo duo or group performer', 'Negative'),
('USER4714', 53, 'female', 'Australia', 'TVSHOW5397', 'Most beautiful program should continue throughout the year. Best dancer and choreographer without any doubt DHARMESH. only his team deserves to win he is the best.', 'Positive'),
('USER9771', 30, 'female', 'China', 'TVSHOW5397', 'Very good dancer and day by day dance leval high this conntestan. and dance puls is very nice show and very entertenig. Comedy drama creat by Raghav was so so good I think really nice person and dance was amaging.', 'Positive'),
('USER6103', 25, 'male', 'India', 'TVSHOW5397', 'I really like this show i am also regularly watching its epiapde on hotstar because I didnt know about this show earlier but now I will watch seaaon 3 constantly till end. I have a request please upload dance pluae all anthem on internet or any other social networks site', 'Positive'),
('USER1523', 29, 'male', 'India', 'TVSHOW5397', 'I like this show because that show brings the talent out of the dancers and also it inspiring us. actually this show is awesome and that show is really superb and I know that sure it will become worlds best show foe ever.', 'Positive'),
('USER4953', 58, 'male', 'America', 'TVSHOW5397', 'Remo sir, I love you. You cannot imagine in dance but more than important is that you cannot hold your sit when you watching dance plus. Amazing dance talent and too much hard work more than to much imagination pawer to develop dance with passion all though things are really happens', 'Positive'),
('USER9768', 40, 'male', 'America', 'TVSHOW5397', 'Very nice performances by the young contestants. But some dances should come under headings like gymnastics and circus. Dance has to be something different which some are really doing it.', 'Negative'),
('USER0137', 26, 'male', 'Japan', 'TVSHOW5397', 'Pagal ban de- isa Dance plus. A must watch movie for dance lover. This is the best dance film after ABCD(Any Body Can Dance). This shows that even Indians can dance well.', 'Negative'),
('USER1330', 30, 'male', 'Australia', 'TVSHOW5397', 'Keep in Resultin mind and genuine . BEING Marathi made him won.. NOT THE DANCE.... just completely fake and injustice to other final contestant.I dont think Rupesh is better thanJanam or Sanchita.. But still This fake voting made him Won.Remo does complete injustice.', 'Negative'),
('USER4930', 56, 'female', 'Japan', 'TVSHOW5397', 'DANCE PLUS is the only show that make people dance those peaple who r not dancers it makes them dance anyhow thier DANCES and editings are amazing', 'Negative'),
('USER5387', 20, 'male', 'India', 'TVSHOW3645', 'Indian Idol is an excellent platform for Indian Artist', 'Positive'),
('USER7913', 25, 'male', 'China', 'TVSHOW3645', 'I often find the television soaps quite depressing. The trailers we get to see in between breaks say it all. At the end of the day we wish to be entertained.', 'Positive'),
('USER5791', 30, 'male', 'Japan', 'TVSHOW3645', 'Indain idol one of good platform to find the telent and . Indain idol one of good paltfrom to find the telent and . Indain idol one of good paltdfrom to find the telent and . Indain idol one of good paltdfrom to find the telent and . Indain idol one of good paltdfrom', 'Positive'),
('USER6829', 18, 'female', 'America', 'TVSHOW3645', 'The review is more about an Indian Idol contestant Ankita MIshra rather than on Indian Idol The title which I have just given to my review was true for me until ankita was there in the show.', 'Positive'),
('USER0536', 48, 'female', 'Australia', 'TVSHOW3645', 'Todays ouster of Meenal Jain was a real shocker. Am really upset for two reasons. One the voting pattern and second does talent really counts? Being extremely talented its just unbelievable that she was voted out.', 'Positive'),
('USER6466', 22, 'female', 'Australia', 'TVSHOW3645', 'Saturday April 22nd- The grand finale of Indian Idol-2. Quite a extragavent evening', 'Positive'),
('USER7956', 36, 'male', 'Japan', 'TVSHOW3645', 'Indian Idol is big tv program in this program competition from one singer to another singer. Indian Idol is a big stage for singing live in this program participate long distance to come in this program for making a perfect singer in singing life.', 'Positive'),
('USER0055', 20, 'female', 'India', 'TVSHOW3645', 'Poor. boring. no thrill for this times Indian IDOL 3. Singers are bad music arrngements is pathetic', 'Negative'),
('USER9859', 35, 'female', 'India', 'TVSHOW3645', 'I am writing a review for Reality shows in general. American or Indian Idol is no different. Whether its Donald Trump yelling You are Fired in the Apperentice or its making fun of an ameture singer in Indian Idol', 'Negative'),
('USER3936', 65, 'female', 'Sri Lanka', 'TVSHOW3645', '\"I have watched Indian Idol 2 and thought the I wouldnt watch this program again for when Sandip Acharya who was no where comparable to NC Karunya if we see this as a singing talent contest was voted as Indian Idol', 'Negative'),
('USER6344', 43, 'female', 'Sri Lanka', 'TVSHOW3645', 'I would have preferred had they named this programme as Annus Idol as Mr.Annu Malik conducts the entire show. I have watched a few programmes and found this music show runs on Annus whims & fancies.', 'Negative'),
('USER5387', 20, 'male', 'India', 'TVSHOW5397 ', 'Great Show , Great Dancer , Great Choreographer', 'Positive');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `tvshow_id` varchar(50) NOT NULL,
  `tvshow_name` varchar(50) NOT NULL,
  `season` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `episode_date` date NOT NULL,
  `episode_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`tvshow_id`, `tvshow_name`, `season`, `title`, `episode_date`, `episode_url`) VALUES
('TVSHOW5397', 'Dance Plus', 'SEASON 01', 'The audition round', '2015-07-26', 'https://www.youtube.com/embed/NyjF4AioE8M'),
('TVSHOW5397', 'Dance Plus', 'SEASON 01', 'Final selection round', '2015-08-02', 'https://www.youtube.com/embed/NyjF4AioE8M'),
('TVSHOW5397', 'Dance Plus', 'SEASON 01', 'Gauhar boosts the contestants', '2015-08-09', 'https://www.youtube.com/embed/NyjF4AioE8M'),
('TVSHOW5397', 'Dance Plus', 'SEASON 01', 'Saif, Katrina On Dance + Floor', '2015-08-06', 'https://www.youtube.com/embed/NyjF4AioE8M'),
('TVSHOW5397', 'Dance Plus', 'SEASON 01', 'Shakti scores a hat-trick!', '2015-08-23', 'https://www.youtube.com/embed/NyjF4AioE8M'),
('TVSHOW5397', 'Dance Plus', 'SEASON 01', 'Salman, Sooraj, Athiya drop by', '2015-09-06', 'https://www.youtube.com/embed/NyjF4AioE8M'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 01', 'Taarak Mehta Ka Ooltah Chashmah', '2008-07-28', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 02', 'Taarak Mehta Ka Ooltah Chashmah 02', '2008-07-29', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 03', 'Taarak Mehta Ka Ooltah Chashmah 03', '2008-08-01', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 04', 'Taarak Mehta Ka Ooltah Chashmah 04', '2008-08-03', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 05', 'Taarak Mehta Ka Ooltah Chashmah 05', '2008-08-05', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 06', 'Taarak Mehta Ka Ooltah Chashmah 06', '2008-08-07', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 07', 'Taarak Mehta Ka Ooltah Chashmah 07', '2008-08-08', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 08', 'Taarak Mehta Ka Ooltah Chashmah 08', '2008-08-10', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 09', 'Taarak Mehta Ka Ooltah Chashmah 09', '2008-08-12', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW8784', 'Taarak Mehta Ka Ooltah Chashmah', 'SEASON 10', 'Taarak Mehta Ka Ooltah Chashmah 10', '2008-08-15', 'https://www.youtube.com/embed/GgBy9rhSRJk'),
('TVSHOW9923', 'The Kapil Sharma Show', 'SEASON 01', 'E-01', '2016-04-23', 'https://www.youtube.com/embed/yqS7E7t7VmA'),
('TVSHOW9923', 'The Kapil Sharma Show', 'SEASON 01', 'E-02', '2016-04-24', 'https://www.youtube.com/embed/yqS7E7t7VmA'),
('TVSHOW9923', 'The Kapil Sharma Show', 'SEASON 01', 'E-03', '2016-04-25', 'https://www.youtube.com/embed/yqS7E7t7VmA'),
('TVSHOW9923', 'The Kapil Sharma Show', 'SEASON 01', 'E-04', '2016-04-28', 'https://www.youtube.com/embed/yqS7E7t7VmA'),
('TVSHOW9923', 'The Kapil Sharma Show', 'SEASON 01', 'E-05', '2016-05-01', 'https://www.youtube.com/embed/yqS7E7t7VmA'),
('TVSHOW9923', 'The Kapil Sharma Show', 'SEASON 01', 'E-06', '2016-05-03', 'https://www.youtube.com/embed/yqS7E7t7VmA'),
('TVSHOW9923', 'The Kapil Sharma Show', 'SEASON 01', 'E-07', '2016-05-07', 'https://www.youtube.com/embed/yqS7E7t7VmA'),
('TVSHOW9923', 'The Kapil Sharma Show', 'SEASON 01', 'E-08', '2016-04-10', 'https://www.youtube.com/embed/yqS7E7t7VmA'),
('TVSHOW6799', 'Kaun Banega Crorepati', 'SEASON 01', 'E-01', '2000-07-04', 'https://www.youtube.com/embed/SNZ8IGpqiMA'),
('TVSHOW6799', 'Kaun Banega Crorepati', 'SEASON 01', 'E-02', '2000-07-05', 'https://www.youtube.com/embed/SNZ8IGpqiMA'),
('TVSHOW6799', 'Kaun Banega Crorepati', 'SEASON 01', 'E-03', '2000-07-07', 'https://www.youtube.com/embed/SNZ8IGpqiMA'),
('TVSHOW6799', 'Kaun Banega Crorepati', 'SEASON 01', 'E-04', '2000-07-08', 'https://www.youtube.com/embed/SNZ8IGpqiMA'),
('TVSHOW6799', 'Kaun Banega Crorepati', 'SEASON 01', 'E-05', '2000-07-09', 'https://www.youtube.com/embed/SNZ8IGpqiMA'),
('TVSHOW6799', 'Kaun Banega Crorepati', 'SEASON 01', 'E-06', '2000-07-10', 'https://www.youtube.com/embed/SNZ8IGpqiMA'),
('TVSHOW6799', 'Kaun Banega Crorepati', 'SEASON 01', 'E-07', '2000-07-11', 'https://www.youtube.com/embed/SNZ8IGpqiMA'),
('TVSHOW3645', 'Indian Idol', 'SEASON 01', 'E-01', '2004-10-28', 'https://www.youtube.com/embed/us4R1qOuje4'),
('TVSHOW3645', 'Indian Idol', 'SEASON 01', 'E-02', '2004-10-30', 'https://www.youtube.com/embed/us4R1qOuje4'),
('TVSHOW3645', 'Indian Idol', 'SEASON 01', 'E-03', '2004-10-01', 'https://www.youtube.com/embed/us4R1qOuje4'),
('TVSHOW3645', 'Indian Idol', 'SEASON 01', 'E-04', '2004-11-02', 'https://www.youtube.com/embed/us4R1qOuje4');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` varchar(50) NOT NULL,
  `movie_image` longblob NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_release_date` date NOT NULL,
  `movie_genre` varchar(50) NOT NULL,
  `movie_url` mediumtext NOT NULL,
  `movie_rating` int(11) NOT NULL,
  `movie_total_comments` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_image`, `movie_name`, `movie_release_date`, `movie_genre`, `movie_url`, `movie_rating`, `movie_total_comments`) VALUES
('MOVIE1467', 0x6d6f76696573696d616765732f6a6f6b65722e6a7067, 'Joker', '2019-10-02', 'Drama', 'https://www.youtube.com/embed/zAGVQLHvwOY', 4, 10),
('MOVIE0842', 0x6d6f76696573696d616765732f737570657233302e6a7067, 'Super 30', '2019-07-12', 'Biographical', 'https://www.youtube.com/embed/QpvEWVVnICE', 4, 11),
('MOVIE8487', 0x6d6f76696573696d616765732f7761722e6a7067, 'War', '2019-10-02', 'Action', 'https://www.youtube.com/embed/tQ0mzXRk-oM', 3, 10),
('MOVIE3004', 0x6d6f76696573696d616765732f4b72726973682e6a7067, 'Krrish 3', '2013-11-01', 'Science fiction', 'https://www.youtube.com/embed/_6Ix1VF_yWM', 2, 10),
('MOVIE3453', 0x6d6f76696573696d616765732f6176656e676572735f656e6467616d652e6a7067, 'Avengers Endgame', '2019-04-26', 'Action', 'https://www.youtube.com/embed/TcMBFSGVi1c', 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tvshows`
--

CREATE TABLE `tvshows` (
  `tvshow_id` varchar(50) NOT NULL,
  `tvshow_image` longblob NOT NULL,
  `tvshow_name` varchar(100) NOT NULL,
  `tvshow_starting_date` date NOT NULL,
  `tvshow_genre` varchar(50) NOT NULL,
  `tvshow_episodes` bigint(255) NOT NULL,
  `tvshow_rating` int(50) NOT NULL,
  `tvshow_total_comments` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvshows`
--

INSERT INTO `tvshows` (`tvshow_id`, `tvshow_image`, `tvshow_name`, `tvshow_starting_date`, `tvshow_genre`, `tvshow_episodes`, `tvshow_rating`, `tvshow_total_comments`) VALUES
('TVSHOW8784', 0x747673686f7773696d616765732f74616172616b2e6a7067, 'Taarak Mehta Ka Ooltah Chashmah', '2008-07-28', 'Comedy', 10, 4, 10),
('TVSHOW9923', 0x747673686f7773696d616765732f6b6170696c2e6a7067, 'The Kapil Sharma Show', '2016-04-23', 'Comedy', 8, 4, 10),
('TVSHOW6799', 0x747673686f7773696d616765732f63726f7265706174692e6a666966, 'Kaun Banega Crorepati', '2000-07-03', 'Action', 7, 4, 10),
('TVSHOW5397', 0x747673686f7773696d616765732f64616e63652b2e6a666966, 'Dance Plus', '2015-07-26', 'Talent Show', 6, 3, 11),
('TVSHOW3645', 0x747673686f7773696d616765732f69646f6c2e6a666966, 'Indian Idol', '2004-10-28', 'Talent Show', 4, 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `location` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `age`, `gender`, `location`) VALUES
('USER5387', 'example@example.com', '1a79a4d60de6718e8e5b326e338ae533', 20, 'male', 'India'),
('USER7913', 'ajit@gmail.com', '96e7db63cb94a44aabfec7d755eb8f68', 25, 'male', 'China'),
('USER5791', 'shubham@gmail.com', '3b6beb51e76816e632a40d440eab0097', 30, 'male', 'Japan'),
('USER6829', 'meenu@gmail.com', '4b03afcdb71c48eb81a2405b0998019f', 18, 'female', 'America'),
('USER0536', 'kareena@gmail.com', '9efbd0268d38eb6fc0d3805890956549', 48, 'female', 'Australia'),
('USER6466', 'kaju@gmail.com', 'f8ccb0beb48ea9bb7ebe906bf82a6f89', 22, 'female', 'Australia'),
('USER7956', 'vijay@gmail.com', '4f9fecabbd77fba02d2497f880f44e6f', 36, 'male', 'Japan'),
('USER0055', 'sonu@gmail.com', '371ab955fdc11c44c980779c3135b155', 20, 'female', 'India'),
('USER9859', 'katrina@gmail.com', '3d7f65f5dcc8ef953f7d9a06f2477cc4', 35, 'female', 'India'),
('USER3936', 'minakshi@gmail.com', '00493954bf0255e901dffea621856233', 65, 'female', 'Sri Lanka'),
('USER6344', 'jacqueline@gmail.com', '1c45154abbf67419b5a20c9258c71775', 43, 'female', 'Sri Lanka'),
('USER4714', 'karishma@gmail.com', 'b3af3417c0a445baa5a4816045f44c9f', 53, 'female', 'Australia'),
('USER9771', 'ishika@gmail.com', '064d6f413fb035c56c9fd1aad577779e', 30, 'female', 'China'),
('USER6103', 'kamlesh@gmail.com', 'fca5abd59b385e783b5c896c851372ab', 25, 'male', 'India'),
('USER1523', 'jagdish@gmail.com', '3bd26b3ffb700a7c00f75c8752d9c492', 29, 'male', 'India'),
('USER4953', 'salman@gmail.com', '03346657feea0490a4d4f677faa0583d', 58, 'male', 'America'),
('USER9768', 'ankush@gmail.com', '3a0135f9157447e16da5c17863f1531c', 40, 'male', 'America'),
('USER0137', 'john@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', 26, 'male', 'Japan'),
('USER1330', 'rishabh@gmail.com', 'c64e8e7b05a6d831605cfe23dd617deb', 30, 'male', 'Australia'),
('USER4930', 'harsha@gmail.com', '226280c5dd9b1bd4e67c72ff2c94bf1b', 56, 'female', 'Japan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
