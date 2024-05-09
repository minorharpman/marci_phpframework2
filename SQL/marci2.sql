-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost:3306
-- Létrehozás ideje: 2024. Máj 09. 12:40
-- Kiszolgáló verziója: 8.0.30
-- PHP verzió: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `marci2`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `author_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image_id` int DEFAULT NULL,
  `summary` text COLLATE utf8mb4_general_ci NOT NULL,
  `articleText` text COLLATE utf8mb4_general_ci,
  `category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `article`
--

INSERT INTO `article` (`id`, `title`, `author_id`, `image_id`, `summary`, `articleText`, `category`, `created_at`, `updated_at`) VALUES
(18, 'Felfedezés a Wonder of the Seas fedélzetén: Kalandok a Világ Legnagyobb Óceánjáróján', '17', 10, 'Amikor a Royal Caribbean International bejelentette a Wonder of the Seas óceánjáró indulását, az utazási kedvelők és kalandvágyók egyaránt izgalommal töltődtek fel. Ez a hajó nem csupán egy úszó szálloda; ez egy teljesen felszerelt, modern csoda, amely a tengeren töltött időt felejthetetlen élménnyé varázsolja. Íme néhány kaland, amit a Wonder of the Seas fedélzetén élhetünk át.', 'Élmények a magasságokban: Zip Line és a Central Park\r\nEgyik legizgalmasabb attrakció a Wonder of the Seas fedélzetén a zip line, amely a hajó egyik végéből a másikba száguld át, lenyűgöző kilátást biztosítva az alatta elterülő Central Parkra. Igen, jól hallottad: a hajó közepén egy több ezer növényt számláló, lélegzetelállító park húzódik meg, ami tökéletes helyszín a nyugodt sétákra vagy egy kellemes könyvolvasásra.\r\n\r\nVízi csodák: Aquatheater és szörf simulátor\r\nA Wonder of the Seas a vízi szórakoztatás terén is új szintre emeli az elvárásokat. Az Aquatheater lenyűgöző vízi és akrobatikus show-knak ad otthont, ahol a hajó faránál lévő szabadtéri színpadon csodálhatjuk meg a bámulatos előadásokat. A szörf simulátor, a FlowRider, pedig lehetővé teszi, hogy a hullámokat lovagolva teszteld a tengeri lábaidat, még akkor is, ha sosem álltál deszkán.\r\n\r\nGasztronómiai kalandozások: Ízek a világ minden tájáról\r\nA Wonder of the Seas nem csupán a kalandot, de a kulináris élvezeteket is szem előtt tartja. A hajó több mint 20 étterme kínálja a világ különböző tájainak ízeit, legyen szó finom sushi-ról, autentikus olasz tésztáról vagy akár hagyományos amerikai grillről. A Solarium Bistro a hajó egyik legnépszerűbb étterme, ahol a mediterrán ételek dominálnak, és ahol a látványos kilátás csak fokozza az étkezés élményét.\r\n\r\nPihenés és wellness: Spa és edzőterem\r\nA kalandok és izgalmak mellett a Wonder of the Seas fedélzetén számos lehetőség kínálkozik a kikapcsolódásra is. A Vitality Spa luxus kezeléseket kínál, ahol teljes körű kényeztetésben részesülhetsz, míg a hajó állapot-of-the-art edzőterme minden szükséges eszközzel felszerelt, hogy edzés közben is élvezhesd a tenger látványát.\r\n\r\nCsaládi kalandok: Adventure Ocean és Ultimate Abyss\r\nA családos utazóknak sem kell aggódniuk, hiszen a Wonder of the Seas gondoskodik a fiatalabb generáció szórakoztatásáról is. Az Adventure Ocean egy interaktív gyermekprogram, ahol a kicsik játékosan tanulhatnak meg új dolgokat, miközben barátságokat köthetnek. Az Ultimate Abyss pedig egy izgalmas csúszda, amely az egyik legmagasabb pontból vezet le a hajó legmélyebb szintjére, garantáltan felejthetetlen élményt nyújtva', 'Hajózás', '2024-05-07 21:28:16', '2024-05-05 08:11:51'),
(23, 'Réges régen... egy messzi Galaxisban - kalandozások az Orlandoi Disneylandben', '1', 12, 'Amikor az ember a Disneyland Orlando területére lép, és áthalad a Galaxy\'s Edge kapuján, egy másik világba csöppen. A \"Star Wars\" univerzum életre kel, és a látogatók egyből a galaxis messzi-messzi csücskében találják magukat. A fél nap, amit itt töltöttem, tele volt izgalommal és felejthetetlen élményekkel, amelyeket most megosztok veletek ebben a blogbejegyzésben.', 'A bejutás és az első benyomások\r\nGalaxy\'s Edge megközelítése már önmagában is izgalmas. Az átmenet a park többi részéről a \"Star Wars\" témájú részre észrevétlen, de mégis lenyűgöző. A díszletek, az építészeti stílus és a zene mind hozzájárulnak ahhoz, hogy valóban úgy érezzük, eltávolodtunk a Földtől. Az első látványosság, amelyre szinte rögtön rábukkanunk, az a híres Millennium Falcon, ami a Smuggler\'s Run ride központi eleme.\r\n\r\nSmuggler\'s Run: Egy pilóta élménye\r\nA Smuggler\'s Run-on való részvétel egy olyan élmény, amit semmi sem hasonlítható. Itt az ember valóban úgy érezheti, hogy űrhajó pilótája, aki a galaxis különböző pontjaira repíti a hajót, miközben kikerüli a veszélyeket és ellenséges támadásokat. A ride interaktív jellege miatt minden egyes \"repülés\" más és más, attól függően, hogy a csapat hogyan teljesít.\r\n\r\nEgy harcos reggelije: Oga\'s Cantina\r\nAz aktív reggel után következett egy kis szünet Oga\'s Cantinában, ahol a park látogatói kipróbálhatják a Star Wars világának ikonikus italait. A kantina hangulata, a különleges effektekkel teli italok és a szereplők hozzájárultak ahhoz, hogy ez az étkezési élmény valóban egyedülálló legyen. Kóstoltam a Blue Milkot, ami nemcsak hogy finom, de kifejezetten frissítő is volt a meleg napon.\r\n\r\nTalálkozás a karakterekkel: Kylo Ren és a Stormtroopers\r\nA parkban való sétánk során többször is összefutottunk a Star Wars filmekből ismert karakterekkel, köztük Kylo Ren-nel és a stormtroopersokkal. Ezek a találkozások nagyon autentikusak voltak, a karakterek tökéletesen idézték fel azokat a személyiségeket, akiket a filmekben láthatunk. A stormtroopersokkal való interakciók különösen szórakoztatóak voltak, ahogy próbálták fenntartani a rendet és fegyelmet.\r\n\r\nAz élmény összegzése\r\nA Galaxy\'s Edge-ben töltött félnap minden Star Wars rajongó számára kötelező program. Az élmény, hogy a saját szemünkkel láthatjuk és tapasztalhatjuk meg a filmek világát, leírhatatlan. A látványosságok, az étkezési lehetőségek és a karakterekkel való találkozások mind hozzájárulnak ahhoz, hogy ez a parkrész a Disneyland egyik legnépszerűbb úti célja legyen.', 'Nevezetesség', '2024-05-07 21:39:20', '2024-05-04 11:35:32'),
(32, 'Fedezd fel a legújabb óceánjárót: Icon of The Seas', '17', 11, '2024-ben a tengeri utazás szerelmeseinek újabb izgalmas úti célja bukkant fel a horizonton. Az Icon of The Seas, amelyet a Royal Caribbean International építtetett, új mérföldkövet jelent az óceánjáró hajózás történetében.', 'Úttörő dizájn és lenyűgöző méretek <br>\r\nAz Icon of The Seas nem csupán a Royal Caribbean flotta legújabb tagja, hanem a világ egyik legnagyobb és legfejlettebb óceánjárója is. A hajó hossza meghaladja a 360 métert, szélessége pedig több mint 40 méter, aminek köszönhetően több mint 7,600 utast tud kényelmesen szállásolni. A hajó tervezésénél kiemelt figyelmet fordítottak az innovatív megoldásokra és a fenntarthatóságra, így az Icon of The Seas az egyik legzöldebb hajó is a piacon.\r\n\r\nSzórakozás és kikapcsolódás minden korosztálynak\r\nAz Icon of The Seas fedélzetén található szórakoztató központok és létesítmények széles skálája minden korosztály számára kínál elfoglaltságot. A hajó büszkélkedhet a legnagyobb vízi parkkal a tengeren, amely több mint 10 csúszdát és különböző vízi játékokat kínál. Emellett számos medence, jakuzzi és különleges spa-szolgáltatások is várják a pihenni vágyókat.\r\n\r\nA gasztronómiai élmények terén sem kell csalódnunk, hiszen a hajón több tucat étterem, bár és kávézó található, ahol a világ minden tájának ízeit kóstolhatjuk meg. A hajó színházai és előadóterei pedig egész nap színes programokkal, show-műsorokkal és koncertekkel várják az utasokat.\r\n\r\nKülönleges szálláshelyek\r\nAz Icon of The Seas szálláshelyei is kiemelkednek a tengeri utazások kínálatából. A hagyományos kabintípusok mellett különleges lakosztályok is helyet kapnak a hajón, amelyek közül néhány több szintes, és saját csúszdával is rendelkezik. Ezek a lakosztályok tökéletes választás lehetnek azok számára, akik egy kis extra luxust és magánéletet szeretnének élvezni a tengeren.\r\n\r\nKörnyezettudatos utazás\r\nA Royal Caribbean elkötelezett amellett, hogy csökkentse a környezetre gyakorolt hatását, és az Icon of The Seas ebben is úttörő. A hajó legmodernebb technológiákat használja, hogy minimalizálja az üvegházhatású gázok kibocsátását, és számos innovatív rendszert alkalmaz a hulladékkezelés és az energiahatékonyság javítása érdekében.\r\n\r\nÖsszegzés\r\nAz Icon of The Seas több mint egy hajó – ez egy úszó üdülőkomplexum, amely lehetőséget nyújt arra, hogy a világot kényelmesen és stílusosan fedezzük fel. Akár családi kikap', 'Hajózás', '2024-05-07 21:39:30', '2024-05-06 15:43:32'),
(40, 'RÓMA LÁTNIVALÓK, ÚTI TIPPEK', '1', 16, 'Róma egy hihetetlen, ősi város, amely továbbra is utazók és kalandorok számtalan generációját ejti rabul és inspirálja. A vibráló olasz fővárosban szinte végtelen a látnivalók, a tennivalók, az ízek és a történetek listája. Az Örök Város az egyik kedvenc városom a világon, és téged is ámulatába fog ejteni. Ebben a bejegyzésben a legjobb dolgokról írtam, amit Rómában érdemes megtenni.', 'Látogass el a Colosseumba (az egyik legikonikusabb dolog Rómában)\r\nA világ egyik legikonikusabb nevezetessége; egyetlen római utazás sem lehet teljes anélkül, hogy meg ne néznéd ezt az epikus amfiteátrumot – a Római Birodalom által valaha épített legnagyobbat. A Kr. u. 72-ben épült Colosseum közel 2000 éve Róma erejének és hatalmának jelképe. Az ókorban a Colosseumban brutális gladiátorcsatákat és állatviadalokat rendeztek. Ma a legjobban akkor tudod teljes mértékben értékelni ezt a hatalmas építményt és lenyűgöző történetét, ha részt veszel egy vezetett túrán. Az idegenvezető elvisz a híres Forum Romanumra és a Palatinus-dombra is, így ár-érték arányban nagyszerű.\r\n\r\nA Colosseum az egyik legnépszerűbb látnivaló Rómában. Erősen ajánlom, hogy jó előre foglalj jegyet, mivel gyorsan fogynak.\r\n\r\nTúra a Forum Romanum-ba\r\nA római Palatinus és a Capitolium között található Forum egykor az ókori Róma politikai, vallási és kereskedelmi központja volt. Ma egy hatalmas régészeti lelőhely és Róma egyik leglátogatottabb turisztikai látványossága. A Forum adott otthont az ókori város néhány legfontosabb vallási templomának, kormányzati épületének és egyéb műemlékének, mint például Julius Caesar templomának és a Titus boltozatának.\r\n\r\nMindenképpen ajánlom, hogy előre foglald le a jegyedet itt. Ez a jegy a Colosseum és a Palatinus-domb meglátogatását is magában foglalja.\r\n\r\nCsodáld meg a Szent Péter bazilikát\r\nAz egész kereszténység egyik legfontosabb és legszentebb helye, a Szent Péter-bazilika (Basilica di San Pietro) szintén kihagyhatatlan látnivaló, és az egyik leglátogatottabb hely Vatikánvárosban. Valóban hatalmas, és számtalan felbecsülhetetlen értékű műalkotásnak és kincsnek ad otthont a világ minden tájáról. A székesegyházon kívül található a Szent Péter tér, a globális katolicizmus központja. A teret lenyűgöző oszlopcsarnokok veszik körül, amelyeket a híres szobrász és építész, Gian Lorenzo Bernini tervezett, a középen álló hatalmas obeliszket pedig 1586-ban hozták Egyiptomból.', 'Városnézés', '2024-05-07 21:39:38', '2024-05-06 17:34:17'),
(46, 'A legexkluzívabb szálloda a Bahamákon', '1', 15, 'Bahamák - a világ egyik legegzotikusabb országa, ahová a felső tízezer tagjai biztosan jártak már vakáción. Most összegyűjtöttem nektek a Bahama-szigetek 10 legexkluzívabb szállodáját, ahol tényleg csak azok nyaralnak, akiknek a szimpla luxuskivitel már nem elég.', 'A Nassauval (és persze New Providence szigetével) közvetlen útkapcsolatban álló Paradise Island nyugati csücskén fekszik az 62 hektáron elterülő Atlantis birodalom, mely a Dubaiban található testvérszállodájához hasonlóan a csodálatos vízi világra épül. Igazi desztináció-szálloda - sokan csak azért utaznak a Bahamákra, hogy itt szálljanak meg, ami sokat elmond magáról a hotelről.\r\n\r\nAz Atlantis a világ 18. legnagyobb szállodája a maga 3414 darab szobájával és lakosztályával együtt - ezek viszont nem egy épületben helyezkednek el. Itt fontos megjegyezni, hogy a maga az Atlantis nem egy hotel, hanem egy birodalom, ahol több szálloda helyezkedik el. A strand közvetlen közelében fekvő Beach Towert a hétköznapi turistáknak találták ki, ahogyan a kicsit beljebb lévő Coral Towert is; a Harbourside Resort villáit a kikötő mellett találhatjuk, a The Coralt főként többgenerációs családoknak ajánlják; a The Reef már árban egy kicsit feljebb van pozícionálva; a The Cove a legelegánsabb épület mind közül; a hatalmas Royal Tower (közepén a hídszerű Bridge Suite-tal) pedig a világ egyik legdrágább lakosztályát tudhatja a magánénak. (Ezek közül én csak a The Cove-ot fogom közelebbről szemügyre venni, mert az a legexkluzívabb az egész Atlantisban.)\r\n\r\nAz Atlantishoz 11 medence (sós-és édesvízű, lagúnás, hullámmedencés, csúszdás, delfines, cápás stb.); egy modernizált, hatemeletes \"Maja\" templom; egy 1.5 kilométeres mesterségesen kialakított vadvízi folyó; egy csúszdapark; egy kaszinó, egy 18-lyukú golfpálya; egy konditerem, egy spa egy óriási privát kikötő, egy delfinárium és egy hatalmas rekreációs központ is tartozik (ahol több, mint 50 000 vízi élőlényt lehet megtekinteni, a föld alatti létesítmény pedig egy az egyben úgy néz ki, mint az Atlantis legendás vízi birodalmának másolata). ', 'Utazás', '2024-05-07 21:39:56', '2024-05-06 06:01:46'),
(47, 'Fedezd fel a Pairi Daiza Zoo-t, Európa legjobb állatkertjét', '1', 14, 'Ha állatbarát vagy és szereted felfedezni az állatkertek csodálatos világát, akkor egy látogatás a Pairi Daiza Zoo-ban, Belgiumban, kötelező program a bakancslistádon. A Pairi Daiza, ami az „Ádám kertje” kifejezésből származik a párszi nyelven, nem csupán egy állatkert, hanem egy valódi menedék a természet és az állatok szerelmeseinek. Az alábbiakban bemutatjuk, miért is számít Európa legjobb állatkertjének.', 'A Pairi Daiza több mint 7 000 állat otthona, több mint 700 faj képviselőivel. Az állatkert különleges azáltal, hogy természetes élőhelyeket hoz létre az állatok számára, így a látogatók szinte valódi környezetben csodálhatják meg őket. Az állatkert területe tematikus világokra oszlik, mint például az afrikai szavanna, az ausztrál bush, vagy az  indonéziai dzsungel, ahol minden egyes részlet az adott régióra jellemző növény- és állatvilágot tükrözi.\r\nA Pairi Daiza híres az egyedülálló attrakcióiról is, mint például a templomszerű épületek, amelyek Kínából származó eredeti kődarabokból épültek újjá. Az állatkertben található egy tibeti kolostor is, ahol a látogatók megismerkedhetnek a buddhista kultúrával és spirituális gyakorlatokkal. Ezen kívül, a park kínál különleges élményeket, mint az éjszakai tartózkodás a „Full Moon Lodges”-ban, ahol az éjszakai állatok aktív életét figyelhetik meg a vendégek.\r\nA Pairi Daiza nem csak turisztikai látványosság; nagy hangsúlyt fektetnek a fajmegőrzési programokra és a természetvédelemre. Az állatkert aktív résztvevője a nemzetközi fajmegőrzési erőfeszítéseknek, és számos sikeres szaporítási programot folytat veszélyeztetett fajok, mint például az óriáspanda és a fehér tigris számára. Az állatkert célja, hogy tájékoztassa és oktassa a látogatókat az állatok védelmének fontosságáról.', 'Nevezetesség', '2024-05-07 21:40:04', '2024-05-06 06:32:17'),
(51, 'Rocksztárnak érezhetjük magunk az új luxushajón', '16', 17, 'Csak felnőttek léphetnek a Virgin Voyages társaság hajójára, az impozáns Scarlet Ladyre, amely 2020-ban Miamiból indul útnak a karibi térségbe. ', 'A hajón összesen 1430 kabin található, ezek közül 78 luxus, úgynevezett RockStar lakosztály, de még ezek között is lesznek fokozatok, a Megától a Massive-ig.\r\nA téma nem véletlen, egyes szobákban gitárok, erősítők várják a hajóúton zenélni vágyókat, hogy rocksztároknak érezhessék magukat. \r\n\r\nA lakosztályokban elegáns, márványborítású fürdőszobák találhatók, van olyan, amelyiknek a zuhanyzójából az óceánra lehet látni, és mindegyik lakosztályból elérhető a legfelső szinten található, Sir Richard Branson által inspirált lounge is.', 'Hajózás', '2024-05-07 21:40:51', '2024-05-06 10:29:43');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comments`
--

CREATE TABLE `comments` (
  `comment_id` int NOT NULL,
  `article_id` int NOT NULL,
  `comment_text` text COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `comments`
--

INSERT INTO `comments` (`comment_id`, `article_id`, `comment_text`, `created`) VALUES
(1, 23, 'Jaj de jó', '2024-05-05 21:30:55');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `extension` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `size` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `images`
--

INSERT INTO `images` (`id`, `name`, `original_name`, `extension`, `size`, `created_at`) VALUES
(1, '75d80a29ce8b612e9986518d34509e95-fe3ac69ae1806522402d9047af633f20', 'woman', 'jpg', 265498, '2024-05-06 17:20:00'),
(2, '8d08c1f53ff2351627bc8085137a8606-ee38ed0a3e05b192cee4a894e1141736', 'GalaxyEdge', 'jpg', 48513, '2024-05-06 15:11:27'),
(3, '0de4b37eef0b594bd2ea3237e4c5d3f1-feb67dcd2d8ba3d3e7b6d2ef8c8ec519', 'VirginVoyage', 'jpg', 45655, '2024-05-06 17:22:53'),
(4, '10cf1fdf6ad958eeffa9853f6885cec9-19675c850cb94e64e9a576803314b78a', 'wonder', 'jpg', 58780, '2024-05-06 17:28:19'),
(5, 'cd4009a247ae8c48606e9bfd8685fabe-137175a52efd9c27170fd66c0a69f0e5', 'atlantis', 'jpeg', 325574, '2024-05-06 17:28:32'),
(6, '60d99e58d66a5e0f4f89ec3ddd1d9a80-776ff632b175c77be6df5ebfa350f659', 'rome', 'jpeg', 646548, '2024-05-06 17:28:53'),
(7, 'baec6461b0d69dde1b861aefbe375d8a-ce21b09fb4bccefd921a10ca9d2b7849', 'icon', 'jpg', 64662, '2024-05-06 17:29:10'),
(8, 'c6d46f52316e4ab4dcf5f84bd7b6f1b3-e1c5ddf565d5d885dfa8726d4dc9d768', 'pairi_daiza', 'jpg', 78962, '2024-05-06 17:38:21'),
(9, '271b38de0de1a76f8b12b4a4435aea22-103df96b9100e82005affa900be1a29f', 'biang-bisztro', 'jpg', 529041, '2024-05-06 17:38:43'),
(10, 'cdacc2b5eb701aa4f47b4034bc9e5207-fefc95187ce8cb8919afa3336d3747ce', 'wonder_850', 'jpg', 67847, '2024-05-07 21:27:49'),
(11, 'baec6461b0d69dde1b861aefbe375d8a-b8bd52980d5d704b39f9f2e0baace948', 'icon', 'png', 571181, '2024-05-07 21:36:23'),
(12, '5badcaf789d3d1d09794d8f021f40f0e-098dc7c04ae1f1083158a4178dd89965', 'starwars', 'png', 560768, '2024-05-07 21:36:51'),
(13, '13a124610a6ca6d9278b1fb24ad08af1-8a92118ab8e0b3c5bffcd48101a1283c', 'biang', 'png', 565656, '2024-05-07 21:37:07'),
(14, 'd2cbe65f53da8607e64173c1a83394fe-f2fe2560c3ea0495f052fbc86db7687d', 'zoo', 'png', 779219, '2024-05-07 21:37:20'),
(15, 'cd4009a247ae8c48606e9bfd8685fabe-0bb28d75e97616f0996f23d8c1c78c24', 'atlantis', 'png', 705279, '2024-05-07 21:37:50'),
(16, '60d99e58d66a5e0f4f89ec3ddd1d9a80-ecc4b50104c16284c8fa5f7de0e48bef', 'rome', 'png', 590658, '2024-05-07 21:38:01'),
(17, 'd0a87b4018d6521b0f5a49e5e03adb6d-c74c9a8644715fcc222429f08280b0c4', 'virgin', 'png', 507944, '2024-05-07 21:40:38');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `polls`
--

CREATE TABLE `polls` (
  `id` int NOT NULL,
  `question` text COLLATE utf8mb4_general_ci NOT NULL,
  `desc` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `poll_answer`
--

CREATE TABLE `poll_answer` (
  `id` int NOT NULL,
  `poll_id` int NOT NULL,
  `title` text COLLATE utf8mb4_general_ci NOT NULL,
  `votes` int NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `status`, `created_at`) VALUES
(1, 'Marci', 'csabam@gmail.com', 'inactive', '2024-05-08 15:47:50'),
(3, 'Willy Fog', 'fog.willy@y.mail.com', 'active', '2024-05-05 20:12:41'),
(9, 'Tintás János', 'tintajani@tinta.de', 'inactive', '2024-05-03 09:24:35'),
(16, 'Richard Branson', 'r.branson@virgingroup.com', 'active', '2024-05-03 20:34:04'),
(17, 'Arne Wilhelmsen', 'Arne.Wilhelmsen@rcc.com', 'active', '2024-05-05 18:01:30'),
(18, 'd', 'd@ymail.com', 'active', '2024-05-08 15:51:16');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `votes`
--

CREATE TABLE `votes` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `vote` tinyint(1) NOT NULL,
  `create_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `votes`
--

INSERT INTO `votes` (`id`, `name`, `vote`, `create_at`) VALUES
(1, '', 1, 0),
(2, '', 1, 0),
(3, '', 1, 0),
(4, '', 1, 0),
(5, '', 1, 0),
(6, '', 0, 0),
(7, '', 0, 0),
(8, '', 2, 0),
(9, '', 2, 0),
(10, '', 2, 0),
(11, '', 2, 0),
(12, '', 2, 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Author_id` (`id`);

--
-- A tábla indexei `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- A tábla indexei `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `poll_answer`
--
ALTER TABLE `poll_answer`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT a táblához `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT a táblához `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `poll_answer`
--
ALTER TABLE `poll_answer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT a táblához `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
