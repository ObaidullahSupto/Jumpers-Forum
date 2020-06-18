-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2020 at 07:42 AM
-- Server version: 10.3.23-MariaDB-log-cll-lve
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
-- Database: `eclbikyu_community`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 3, 'Technology', '2018-09-13 05:02:55'),
(2, 0, 'Artificial Intelligence', '2018-09-13 05:02:55'),
(3, 3, 'Data Mining', '2018-09-13 12:00:35'),
(4, 0, 'Education', '2018-09-13 12:01:09'),
(5, 3, 'Robotics', '2018-09-17 05:54:32'),
(6, 0, 'Big Data', '2018-09-17 05:55:57'),
(7, 3, 'Machine Learning ', '2018-09-17 07:48:19'),
(8, 3, 'Analytical Strategy', '2018-09-27 04:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(12, 9, 'Supto', 'o.supto@gmail.com', 'Can you please elaborate??', '2018-08-31 16:26:32'),
(13, 10, 'Mr.X', 'x@xx.com', 'Artificial intelligence is anything done by a program or a machine that if a human did the same activity, we would say the human did not need to apply intelligence to accomplish the task.\r\n\r\nIntelligence is the ability to do the things that don\'t require reasoning. Things like understanding and generating language, sequencing your leg muscles as you walk across the floor, or enjoying a symphony. You don\'t stop to reason for any of those things. You Understand. INTUITIVELY, how to interpret things in your visual field, language, and all other sensory input. And you can do the right thing without reasoning. You can easily prepare all of your breakfast without any reasoning. :-)\r\n\r\nDoing things that \"require thought\" or reasoning, like playing chess or solving integrals are things that computers can already do.\r\n\r\nThis misunderstanding about what intelligence really is has cost us 60 years and a million man-years of banging our head against the wall.\r\n\r\nDeep learning is the currently most popular expression of an alternative path to a \"better kind of AI\". Artificial Intuition is a special branch of Deep Learning tailored at understanding text.\r\n\r\nThe easiest way to know whether you are dealing with classical (futile) or modern AI is whether the system requires you to supply any models of the world (MOTW). Any MOTW means the AI is limited to operate in the domain specified by the MOTW and is therefore not a general intelligence. Also, anything with a MOTW is typically not designed to extend that model; this is a very difficult task.\r\n\r\nBetter to start from a Model of the Mind (MOTM) or a Model of Learning. These can be derived either from neuroscience (difficult) or from epistemology (much easier). A well done MOTM can then learn anything it needs to know to solve problems in any domain.\r\n\r\nThe main problem for most is to find what\'s called \"a domain-independent method for determining saliency\". In other words, all intelligences, natural or artificial, have to spend most of their time answering the question \"what matters\".\r\n\r\nGoogle my name and \"AI\" for more.', '2018-08-31 16:29:48'),
(14, 11, 'Douglas Green', 'dg@down.com', 'Do you mean present or future danger?\r\n\r\nThere is a big difference between the present dangers of AIs and the future dangers of any possible AI. The present dangers can be found just by reading the newspaper. Some unemployment, some risk of an accident in a self-driving car, some privacy violations, a few industrial accidents with robots.\r\n\r\nThe future dangers are more open-ended. AI is growing at an exponential rate and is thought to be able to surpass human intelligence in the decades ahead.\r\n\r\nGiven the unpredictability of AIs that are smarter than human, there is an ongoing discussion about what if any dangers they may pose. I think that AIs reflect the state of the society and world that builds them, and they will remain safe, productive agents overall because we will continue to build them that way.', '2018-08-31 16:33:44'),
(15, 11, 'Robert D.Crush', 'rdc@hotmail.com', 'Is there a single superintelligence, a small number of competing intelligences of different kind, or a whole world of billions of independent agents?', '2018-08-31 16:35:45'),
(16, 11, 'Roberto Carlos', 'rc@gotmail.com', 'For some reason, everyone seems to naturally imagine only one superintelligence here, or at most two in conflict. That\'s baffling. When did humans ever create one of something then stop? And when did one bit of technology greatly exceed the rest?\r\n\r\nThat\'s like imagining Alexander the Great developing nuclear weapons and taking over the world. It never works like that because technological progress is more uniform, incremental, and universal than that.\r\n\r\nThere\'s a reason why the Terminator has to come from the future as the plot of a movie. It\'s because in the present no one can build a robot that is more powerful than the rest of the world combined.\r\n\r\nThe most likely scenario is a gradual increase in the adoption of AIs by society, just like computers of ever-increasing capacity continue to fill the world year by year and everyone has one. This is far more representative of the nature of technology, whose laws work the same for everyone and everywhere', '2018-08-31 16:36:23'),
(17, 12, 'Janis Jesa', 'j@gmail.com', 'Whether or not artificial intelligence (AI) is overhyped depends upon which community you are talking about.\r\n\r\nIf you are talking about the academic research community, its not over-hyped. There have been major breakthroughs in AI over the past couple of years, and the celebration is certainly justified.', '2018-08-31 16:38:33'),
(18, 13, 'Supto', 'abc@ab.com', 'SHGBFKAHVBFAKNBDVKNbsvjk\r\nNice', '2018-08-31 18:01:33'),
(19, 12, 'Supto', 'bengal@gmail.com', 'Whether or not artificial intelligence (AI) is overhyped depends upon which community you are talking about. If you are talking about the academic research community, its not over-hyped.', '2018-09-03 04:54:05'),
(20, 12, 'Abm Musa', 'abm@musa.com', 'hmmm okk ', '2018-09-11 06:45:18'),
(21, 14, 'OS', 'r@r.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2018-09-17 10:25:59'),
(22, 15, 'H', 'a@a.com', 'hmm', '2018-09-18 08:24:37'),
(23, 15, 'H1', 'a@a.com', 'hmmmmmmm', '2018-09-18 08:25:10'),
(24, 14, 'Shohan Ahmed', 'o.supto@gmail.com', 'Sorry but this is not the exact details', '2018-09-27 09:31:30'),
(25, 16, 'Adeeb', 'lotas@gmail.com', 'huhu haha ha ha ha Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.', '2018-09-30 07:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `created_at`) VALUES
(9, 1, 3, 'How to evaluate a regression model?', 'How-to-evaluate-a-regression-model', 'I have a dataset with 190 samples. I\'m training a regression model, using k-fold cross validation. I\'m using r squared form measuring the performance do the model. However, sometimes, depending on ...', '2018-08-31 16:24:24'),
(10, 2, 1, 'What\'s artificial intelligence?', 'Whats-artificial-intelligence', 'I\'m a bit confused about artificial intelligence.\r\nI understand it as the capability of a machine to learn new things, or do different things without actually executing code (already written by someone).\r\nIn SO I see many threads about A.I. in games, but IMO that is not an A.I. Because if it is every software even a print command should be called A.I. In games there is just code that is executed. I would call it pseudo-AI.\r\nAm I wrong? Should be also this considered as A.I.?\r\n', '2018-08-31 16:28:35'),
(11, 2, 2, 'What are the dangers of artificial intelligence?', 'What-are-the-dangers-of-artificial-intelligence', 'I want to learn from depth about AI. And I am interested to know about dangers of AI..', '2018-08-31 16:33:11'),
(12, 1, 3, 'Overhyped?', 'Overhyped', 'Is Artificial Intelligence Overhyped?', '2018-08-31 16:37:42'),
(13, 2, 4, 'Movie Of The Month Related to AI', 'Movie-Of-The-Month-Related-to-AI', 'A.I. Artificial Intelligence, also known as A.I., is a 2001 American science fiction drama film directed by Steven Spielberg. A.I. tells the story a robot, a childlike android uniquely programmed with the ability to love. A robot boy programmed to experience human emotions embarks on a journey of self-discovery.\r\n\r\nArtificial Intelligence is the Stanley Kubrick script made into a 2001 film by famed director Steven Spielberg. A modern presentation of Pinocchio, the Spielberg/Kubrick A.I. operates on multiple levels as an allegory, as well as a morality tale of mankind’s potentially disastrous future given the rise of super advanced technology. Having viewed the film numerous times since 2001, only now has it become evident how profound it really is. Fans of esoteric interpretations of film will be aware of other Kubrick classics such as 2001: A Space Odyssey or Eyes Wide Shut, but A.I. appears to have been overlooked. I recall about a decade ago getting the idea of doing esoteric film analysis occurred to me when I read a review of A.I. that argued it was an allegory of Dante’s Inferno (as David will undergo a katabasis).', '2018-09-13 05:20:17'),
(14, 7, 3, 'Machine Learning and it\'s future', 'Machine-Learning-and-its-future', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-09-17 10:25:31'),
(15, 6, 5, 'Multilangual AI', 'Multilangual-AI', 'Lorem Ipsum is simply dummy text of the printing a...Lorem Ipsum is simply dummy text of the printing a...Lorem Ipsum is simply dummy text of the printing a...Lorem Ipsum is simply dummy text of the printing a.', '2018-09-17 11:57:17'),
(16, 4, 0, 'Ratul\'s Diary', 'Ratuls-Diary', 'Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.Facing problem? Need discussion? Post here your problem for discussion.', '2018-09-30 07:27:09'),
(17, 2, 0, 'AI ML', 'AI-ML', 'AIML, or Artificial Intelligence Markup Language, is an XML dialect for creating natural language software agents.', '2018-10-10 07:15:07'),
(18, 1, 0, 'Bookmarks', 'Bookmarks', 'Your bookmarks, history, passwords, and more are no longer being synced to your account but will remain on this device. Sign in to start syncing again.', '2018-10-14 12:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'Supto', 'o.supto@gmail.com', 'os', '81dc9bdb52d04dc20036dbd8313ed055', '2018-09-16 10:23:37'),
(2, 'Akash', 'a@a.com', 'akash', '81dc9bdb52d04dc20036dbd8313ed055', '2018-09-16 11:24:47'),
(3, 'Adeeb', 'a@a.com', 'adeeb', '4a7d1ed414474e4033ac29ccb8653d9b', '2018-09-17 05:28:44'),
(4, 'Rahul', 'r@r.com', 'rahul', 'b59c67bf196a4758191e42f76670ceba', '2018-09-17 05:57:03'),
(5, 'Rafsan', 'r@rr.com', 'rafsan', '934b535800b1cba8f96a5d72f72f1611', '2018-09-17 07:49:17'),
(6, 'Shohan Ahmed', 'akash@gmail.com', 'shohan', '81dc9bdb52d04dc20036dbd8313ed055', '2018-09-27 05:47:10'),
(7, 'Ratul Sen', 'ratul@gmail.com', 'ratul', 'd79c8788088c2193f0244d8f1f36d2db', '2018-09-30 07:26:26'),
(8, 'John', 'john@yahoo.com', 'John', '81dc9bdb52d04dc20036dbd8313ed055', '2018-12-14 15:16:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
