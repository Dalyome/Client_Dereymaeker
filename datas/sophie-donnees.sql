-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Septembre 2016 à 13:25
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sophie`
--

--
-- Contenu de la table `citation`
--

INSERT INTO `citation` (`id`, `texte`, `auteur`) VALUES
(1, '"Si une femme est mal habillée, on remarque sa robe, mais si elle est impeccablement vêtue, c''est elle que l''on remarque"', 'Coco Chanel'),
(2, '"Personne n''est jeune après quarante ans, mais on peut être irrésistible à tout âge"', 'Coco Chanel'),
(3, '"La beauté apparaît lorsque vous décidez d''être vous même"', 'Coco Chanel'),
(4, '"La mode se démode, le style jamais"', 'Coco Chanel');

--
-- Contenu de la table `creation`
--

INSERT INTO `creation` (`id`, `nom`, `description`, `imghref`, `imgsrc`, `vendu`) VALUES
(1, 'Nulla ultrices magna mass', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '001.jpg', '001.jpg', 1),
(2, 'Curabitur ', 'Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '002.jpg', '002.jpg', 0),
(3, 'Mauris mi lorem', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet. Mauris mi lorem, convallis in dignissim eget, tincidunt quis lectus. Morbi vel leo porta, efficitur odio ut, placerat odio. ', '003.jpg', '003.jpg', 1),
(4, 'Proin in tortor quis diam', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet. Mauris mi lorem, convallis in dignissim eget, tincidunt quis lectus. Morbi vel leo porta, efficitur odio ut, placerat odio. ', '004.jpg', '004.jpg', 0),
(5, 'Ut pharetra ex', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet.', '005.jpg', '005.jpg', 0),
(6, 'Ut pharetra ex sed', 'Cras vel velit quis lorem bibendum iaculis. Mauris pharetra magna magna, quis suscipit lacus sodales sit amet.', '006.jpg', '006.jpg', 0),
(7, 'Ex luctus volutpat', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '007.jpg', '007.jpg', 0),
(8, 'Ut vitae dolor arcu', 'Donec fringilla risus sagittis, luctus quam eget, viverra lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', '008.jpg', '008.jpg', 0),
(9, 'Aenean ', 'Vestibulum vel facilisis felis. Aenean imperdiet sollicitudin mi, sit amet blandit metus. Nullam sed lacus eget ex gravida tristique. Fusce ut iaculis magna. Aenean auctor facilisis diam, sit amet rutrum arcu luctus non. Nunc maximus tellus eu congue tincidunt.', '009.jpg', '009.jpg', 0),
(10, 'Integer ', 'Quisque fringilla, diam vel efficitur molestie, justo metus varius quam, et accumsan eros felis ac sapien. Integer ac tortor tristique odio rhoncus faucibus ut vel elit. ', '010.jpg', '010.jpg', 0),
(11, 'Morbi mattis', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '011.jpg', '011.jpg', 0),
(12, 'Morbi mattis', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '012.jpg', '012.jpg', 0),
(13, 'Proin neque libero', 'Quisque fringilla, diam vel efficitur molestie, justo metus varius quam, et accumsan eros felis ac sapien. Integer ac tortor tristique odio rhoncus faucibus ut vel elit. ', '013.jpg', '013.jpg', 0),
(14, 'Proin neque libero', 'Quisque fringilla, diam vel efficitur molestie, justo metus varius quam, et accumsan eros felis ac sapien. Integer ac tortor tristique odio rhoncus faucibus ut vel elit. ', '014.jpg', '014.jpg', 0),
(15, 'Curabitur finibus', 'Nulla ultrices magna massa, vel commodo ligula lobortis vel. Curabitur in molestie eros. Suspendisse posuere cursus sem ut tristique. Duis sit amet leo sit amet ex luctus volutpat et eget sem. Praesent feugiat mauris turpis, at ullamcorper mauris bibendum sed. Integer eu pellentesque urna. ', '015.jpg', '015.jpg', 0),
(16, 'Nunc posuere sollicitudin accumsan', 'Nulla ac turpis molestie, lacinia lorem vel, fringilla leo. In imperdiet eros nec tortor pharetra venenatis nec id metus. Proin neque libero, pellentesque tempor erat porttitor, elementum tristique diam. Cras facilisis consectetur leo non facilisis. Quisque fringilla, diam vel efficitur molestie, justo metus varius quam, et accumsan eros felis ac sapien. Integer ac tortor tristique odio rhoncus faucibus ut vel elit. ', '016.jpg', '016.jpg', 0),
(17, 'Cras ', 'Cras consequat accumsan egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', '017.jpg', '017.jpg', 0);

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id`, `titre`, `ladate`, `ladatefin`, `description`, `lieu`) VALUES
(8, 'La guerre de la vache', '2016-08-10 16:00:30', '2016-08-20 22:00:00', 'L’atelier de la Batte, reçoit des artistes autour du thème de la vache. \r\nDany Kohl, Boris Mestchersky, Geraldine Delfosse,, Sophie Dereymaeker, Lilla Servello, Mady Balthazar, Nada Ursa, Agnes Gosselet, Michel Lambrecht, Anastasion Marquez et Kim Yung.\r\n\r\nVernissage le 10 Août dès 18h, et le 21 Août, à l’occasion de la clôture, une journée spéciale est organisée. Il s’agit d’un rallye sur la guerre de la vache, qui passera par les communes de Huy, Andenne, Gesves et Ohey.\r\nPour info : danykohl@outlook.com', '5, quai de la Batte 4500 Huy'),
(9, 'Fête de Noël', '2016-12-25 13:03:18', NULL, 'Test d&#039;ajout d&#039;évent', '89 avenue du parc 1060 bruxelles'),
(10, 'test de date', '2016-09-09 12:14:50', NULL, 'gjfgjghjk&quot;&quot;&quot;&quot;', 'jhgh'),
(11, 'cvfgfgsdfgdfsgdf', '2016-09-01 12:20:42', '2016-10-30 13:20:42', 'fsdfg&quot;', 'fdsgf');

--
-- Contenu de la table `partenaire`
--

INSERT INTO `partenaire` (`id`, `nom`, `logohref`, `logosrc`) VALUES
(3, 'A suivre', 'http://www.asuivre.be/SHOPS', 'asuivre.jpg'),
(4, 'Fabienne Antomarchi Photographie', 'www.fabienneantomarchi.com', 'antomarchi.jpg'),
(5, 'Katy Lakatos A la source de soi', 'https://fr-fr.facebook.com/VoyageAuCoeurduSoi/', 'katylakatos.jpg'),
(6, 'Salon 41', 'http://www.salon41.be/contact.html', 'salon41.jpg'),
(7, 'Bewell', 'http://www.bewell.brussels/', 'bewell.jpg');

--
-- Contenu de la table `peinture`
--

INSERT INTO `peinture` (`id`, `nom`, `description`, `imghref`, `imgsrc`, `vendu`) VALUES
(1, 'Un super titre !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img01.jpg', 'img01.jpg', 1),
(2, 'Un autre super titre très classe', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'img02.jpg', 'img02.jpg', 0),
(3, 'Ut enim ad minima veniam', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'img03.jpg', 'img03.jpg', 0),
(4, 'Ut enim ad minima veniam', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'img04.jpg', 'img04.jpg', 0),
(5, 'dfsqdfq fdsqf', 'dqf qfddfsdfqe reffsdgfgfgfd  fdsfsq dfd ', 'img05.jpg', 'img05.jpg', 0),
(6, 'fdsqjklfmsdqf ', 'dsqfsqfsdqf fsdfsd fsd dfdsd qAE RGFDGS  fdsdf', 'img06.jpg', 'img06.jpg', 0),
(7, 'De Finibus Bonorum et Malorum', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?', 'img07.jpg', 'img07.jpg', 0),
(8, 'De Finibus Bonorum et Malorum', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. ', 'img08.jpg', 'img08.jpg', 0),
(9, 'Vache', NULL, '201609191538292062.jpg', '201609191538292062.jpg', 0),
(10, 'vache 2', NULL, '201609191539191796.jpg', '201609191539191796.jpg', 0);

--
-- Contenu de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `nom`, `email`, `profession`, `age`, `texte`) VALUES
(1, 'Isabelle', NULL, NULL, NULL, 'Quand j&#39;ai rencontré Sophie pour la première fois, je venais d&#39;avoir mon troisième enfant, quelques kilos de trop, les cheveux un peu ternes et une terrible envie de renouer avec une séduction toute féminine.\r\n\r\nLes premiers conseils de Sophie ont porté sur une analyse couleur.  A l&#39;aide d&#39;étoffes et d&#39;un miroir, elle m&#39;a fait prendre conscience des tons qui me flattent et de ceux à éviter.  Ensuite, je suis passée à l&#39;analyse morphologique. Munie de deux énormes bâtons, Sophie m&#39;a expliqué les atouts de ma silhouette, les formes de vêtements à privilégier et les coupes que je ne dois pas choisir. Pour terminer cette phase de conseil, Sophie m&#39;a aidée à trier ma garde-robe:\r\n\r\nmettre en avant les tenues dont les couleurs et les formes me vont le mieux.  Et nous avons terminé par une virée shopping, très sympa où j&#39;ai découvert des magasins, des marques et fait quelques très chouettes achats.\r\n\r\nLes premiers mois, je manquais de confiance dans mes choix.  Fallait-il acheter ce xème pull noir, si rassurant mais dont la couleur ne me convient pas du tout (je suis de type été)?  Est-ce que je devais donner ma confiance à une vendeuse très sympa mais qui me vantait une tenue dont la coupe ne convenait pas à ma morphologie? Ou écouter ma petite voix intérieur, les conseils de Sophie?  Il m&#39;a fallu un peu de temps pour donner à l&#39;approche de Sophie la place \r\nqu&#39;elle méritait dans ma vie.\r\n\r\nTrois ans plus tard, que me reste-t- il de cette expérience?  Un nuancier au fond de mon sac qui me permet, en cas de doute, de vérifier que la couleur de ce nouveau vêtement me convient. \r\n\r\nUne garde-robe où toutes les pièces me plaisent et s&#39;accordent les unes avec les autres. Un budget vêtements nettement revu à la baisse car je ne fais (presque) plus d&#39;erreurs quand j&#39;achète.\r\n\r\nMes fameux kilos de grossesse (mais plus personne ne les voit maintenant que je choisis bien les coupes de mes vêtements). Et régulièrement des compliments sur ma bonne mine (ca, c&#39;est le bon choix des couleurs) et mon style.'),
(2, 'Elisabeth P.', NULL, NULL, NULL, 'Lorsque les différents foulards de couleurs se sont posés sur moi, j’ai pu constater la lumière qui se dégageait de mes yeux, que certains tons révélaient un regard pétillant et lumineux, et d’autres couleurs au contraire, me donnaient un teint fade et triste.\r\n\r\nJe n’avais pas conscience que jouer avec les couleurs et le choix des tenues peuvent mettre en avant la beauté d’une personne et lui permettre de se sentir mieux.\r\n\r\nMerci à toi ma belle Sophie pour tes conseils si précieux qui font de moi une jolie « printemps » pétillante et rayonnante !'),
(3, 'Amélie J.', NULL, NULL, NULL, 'Un tout grand merci à vous, Sophie, pour votre professionnalisme, votre bienveillance et, surtout, vos précieux conseils ! À présent, je ne perds plus de temps dans les magasins, car je repère rapidement les couleurs qui me vont et celles que je dois éviter à tout prix ! Cela me permet aussi de ne plus faire de « mauvais achats », de ceux qui traînent dans nos garde-robes sans jamais être portés. Et puis, pour le maquillage, c’est pareil, je connais maintenant les tons qui mettent mon visage en valeur et surtout, je sais comment procéder ! Lunettes, coiffure, boucles d’oreilles et autres accessoires, idem ! Résultat : je m’aime un peu plus et je me sens plus sûre de moi. Une expérience que je recommande donc vivement !'),
(4, 'Véronique V.', NULL, NULL, NULL, 'J &#39;ai eu la chance de rencontrer Sophie et d&#39;avoir pu bénéficier d&#39;une séance de conseil en image.\r\n\r\nC&#39;était la première fois que je tentais cette expérience et ce fut, grâce au talent et à la personnalité dynamique et attentive de Sophie, un moment de détente et de bien-être au cours duquel j&#39;ai appris plusieurs choses.\r\n\r\nEtant dans la mode j&#39;avais bien sûr des notions de base concernant les couleurs qui me convenaient mais il était intéressant de voir comment ces couleurs se regroupaient et créaient très nettement une saison. Le test de personnalité a achevé de déterminer clairement à quelle saison j&#39;appartenais.\r\n\r\nDes conseils de maquillage ont complété son analyse.\r\n\r\nLe conseil en image convient aussi bien aux hommes.\r\n\r\nDans un monde où notre apparence est primordiale professionnellement et socialement , cela nous permet de nous présenter aux autres de la manière la plus positive qui soit car les couleurs qui nous conviennent ont le pouvoir de nous faire paraître plus frais, plus dynamique, plus jeune, plus beau et de rayonner. \r\n\r\nJe ne saurais que conseiller cette expérience.'),
(5, 'Virginie P.', NULL, NULL, NULL, 'Merci Sophie pour le super relooking!\r\n\r\nLes différentes étapes étaient toutes à la hauteur de mes espérances...\r\n\r\nD&#39;abord la séance analyse couleurs qui m&#39;aide souvent dans mes achats vestimentaires ... Le petit nuancier &quot;été&quot; reste toujours dans mon sac à main !\r\n\r\nTes conseils lors de la séance  coiffure et maquillage m&#39;ont donné de nouvelles idées ...\r\n\r\nEt puis le must pour moi c&#39;est la séance morphologie ... Tu as vraiment l&#39;œil, tu as un goût sûr et rien ne t&#39;échappe ... J&#39;ai changé de modèle de robe et de pantalon et j&#39;ai reçu de nombreux compliments ... Tes astuces pour allonger la silhouette sont bluffants !\r\n\r\nLa séance tri de garde robe était bien nécessaire !! Je redécouvre le plaisir de m&#39;habiller, de chercher les bonnes combinaisons et de trouver le petit détail qui fera toute la différence ! ..\r\n\r\nMerci pour ton écoute, ta ienveillance, ta patience, ton sourire sans quoi je n’aurais pas réussi à lâcher prise et à changer ...j’ai eu raison de te faire confiance car aujourd’hui, c’est en moi que j’ai confiance!!\r\n\r\nMerci !');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
