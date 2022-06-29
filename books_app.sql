-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2022 at 09:58 AM
-- Server version: 8.0.24
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_year` int DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `slug`, `birth_year`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Chadrick Goodwin PhD', 'dr-chadrick-goodwin-phd', NULL, NULL, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(2, 'John Kihn', 'john-kihn', NULL, NULL, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(3, 'Alessandro Kirlin', 'alessandro-kirlin', NULL, NULL, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(4, 'Leo Considine', 'leo-considine', NULL, NULL, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(5, 'Renee Collier', 'renee-collier', NULL, NULL, '2022-06-28 12:14:43', '2022-06-28 12:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE `author_book` (
  `book_id` int NOT NULL,
  `author_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`book_id`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(2, 1, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(3, 3, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(3, 4, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(4, 5, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(5, 1, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(6, 5, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(7, 2, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(8, 3, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(9, 3, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(10, 2, '2022-06-28 12:14:43', '2022-06-28 12:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cover-placeholder.svg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `slug`, `title`, `excerpt`, `body`, `year`, `cover`, `created_at`, `updated_at`, `published_at`) VALUES
(1, 'perferendis-et-dolorum', 'Perferendis et dolorum', 'Eum aut et hic odio molestiae officiis. Magnam dolore id tempora blanditiis et similique tenetur. Quas...', 'Eum aut et hic odio molestiae officiis. Magnam dolore id tempora blanditiis et similique tenetur. Quas quae qui pariatur suscipit. Id error vel tempore rem ut laborum. Ipsam sunt numquam non quam. Voluptates quibusdam molestiae velit at qui. Adipisci illum ut voluptatem blanditiis ut ut. Dolorem voluptatem expedita consequuntur qui omnis. Voluptatem omnis optio pariatur rerum architecto minus. Explicabo aut dolorem quasi numquam. Enim fugit autem et adipisci iusto repellendus et. Praesentium quo magnam et ut doloribus quia molestias. Aut asperiores qui aut facere. Accusantium error sint magni quaerat non. Quasi ut similique illo quo occaecati odio. Tenetur quisquam qui omnis. Quis enim autem blanditiis et. Explicabo mollitia eum mollitia commodi.\n\nNeque sit blanditiis id dolor facere. Eos dolorem temporibus est magnam perspiciatis voluptatem provident quod. Labore explicabo inventore sed autem aut. Ut dolorum animi accusamus fuga iste saepe. Praesentium rerum quae voluptas nisi. Sunt aspernatur sunt eius corrupti enim voluptatibus autem blanditiis. Sed ut perferendis aut veritatis. Sunt rem in quis vel a aut deserunt laudantium. Eveniet et et est nihil. Ratione quasi excepturi ducimus et est. Est perspiciatis distinctio aut corrupti. Saepe illum sed et voluptatum sunt rerum. Nobis et et quidem iste a. Quae ut laboriosam similique vitae. Cum impedit blanditiis sit non qui assumenda occaecati quidem. Velit sunt quo voluptate quas sunt delectus. Et voluptatem accusamus voluptatem qui ipsum deserunt voluptatum.\n\nIusto eius numquam molestias. Qui doloremque dolor consequuntur. Distinctio beatae sequi id ut quisquam quod. Sequi cupiditate ut aliquid qui nihil laborum. Quaerat similique dolores cumque ipsum consequuntur ea ipsum sed. Ea sit dolore in maxime dignissimos ut veniam. Tempore et ea rerum maxime tempora suscipit. Fuga voluptatem soluta officia inventore. Ut aliquid eos neque natus sed ut animi. Dignissimos tempore repellendus alias impedit alias alias numquam. Facere ab rerum quod debitis facere. Atque praesentium qui nobis et odio consequatur. Est velit ut suscipit maiores tenetur porro. Omnis ullam eum et ducimus delectus. Rerum inventore laboriosam reiciendis dicta accusantium labore. Omnis aut non dolor id dicta maiores magnam.', 1993, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(2, 'debitis-repellendus-totam', 'Debitis repellendus totam', 'Mollitia qui dolores sint dolore. Dolorum optio error et. Dolores reiciendis et qui assumenda enim. Doloremque...', 'Mollitia qui dolores sint dolore. Dolorum optio error et. Dolores reiciendis et qui assumenda enim. Doloremque dolores vero eligendi laudantium. Ad ea consequatur consequuntur quisquam rerum expedita officia ipsam. Voluptatem qui aut deleniti facere quia mollitia aut. Ab consequatur omnis doloremque quos sed autem perferendis. Corporis quis quidem reiciendis quia id fugiat dolor. Omnis dolor odit dolores sunt aut quis aut. Voluptatem ad eligendi omnis blanditiis ut. Velit ad aut occaecati dolorem libero magni. Unde numquam hic adipisci animi sit nam. Quidem ducimus ex eaque cumque qui ipsum. Dolores dignissimos itaque alias iste illum. Minima consequatur eaque veniam et.\n\nDolore alias ea quia ex consequatur consequatur. Repellendus qui distinctio accusamus labore enim. Non maiores sed blanditiis qui et. Dolorum alias a nobis velit dolore. Et laudantium delectus laborum quia quia in commodi. Et ut beatae molestiae unde. Nihil dolore provident et ipsum veritatis. Numquam voluptas at saepe odio dolores. Quis non et quasi provident dolores dolor. Aliquid nulla vitae est magnam rerum laudantium et. Ea veniam reiciendis et alias. Distinctio et iusto ad soluta odio. Voluptatum eos ut modi fugit nam sit. Itaque consequatur et rerum in reiciendis rerum. Accusamus voluptas voluptatem ea sunt ut ut vel eos. Alias eos laudantium accusantium odio omnis quos itaque. Vel adipisci soluta ea earum et sit nihil. Quis sed reprehenderit dicta beatae.\n\nNumquam architecto quia rerum officiis. Sint corporis excepturi inventore consequatur voluptates assumenda et fuga. In soluta et voluptatibus voluptas minima. Voluptas aliquid totam aut. Ut consectetur aperiam quos itaque pariatur. Consectetur eum sint in voluptatum necessitatibus ut architecto. Doloribus expedita dolores sed quia impedit. Repellat beatae qui amet ab earum. Ad dolorum quod repudiandae animi amet nemo est. Consectetur repellendus qui dolores explicabo. Voluptatem officiis eum id quibusdam est reiciendis. Enim sit illum deleniti id. Minus sint vitae et reprehenderit eum. Magni in blanditiis itaque necessitatibus.', 1908, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(3, 'rerum-dicta-commodi', 'Rerum dicta commodi', 'Molestiae est maiores doloremque porro debitis. Et dolore rerum in. Laborum tempora ut impedit autem quisquam...', 'Molestiae est maiores doloremque porro debitis. Et dolore rerum in. Laborum tempora ut impedit autem quisquam repudiandae eligendi omnis. Suscipit mollitia deleniti id animi sit aspernatur fugit aliquam. In numquam vero dolores quia perferendis eos ducimus velit. Reprehenderit eos et aliquam repellat vel sint ea. Nesciunt sit id magni odit earum. Repudiandae culpa ex aut est odio. Dignissimos facilis consequatur quis unde. Ducimus tempore et iure eos non dignissimos. Atque veritatis et sequi et. Tenetur recusandae suscipit sunt et ipsam quis. Et omnis porro doloremque reprehenderit dolores accusantium. Iusto occaecati est ratione. Corrupti sunt voluptatem sit rerum molestiae exercitationem. Velit autem iste cupiditate aliquam cupiditate adipisci. Iusto sed impedit sapiente nihil et.\n\nNostrum labore repellat ut. Nobis architecto in blanditiis iure autem dignissimos quisquam. Minima perspiciatis rerum repellendus temporibus labore. Non et recusandae et ipsa et est recusandae. Placeat nihil expedita voluptatem non. Consequuntur expedita consequatur deserunt dignissimos et et ut. Velit ipsum ipsam ut est voluptas fuga amet. Sequi illum ea ipsam eos doloribus et. Eaque quia recusandae modi velit officia rerum. Rerum a omnis suscipit dolorem cupiditate illo est. Nam recusandae consequuntur fugiat vitae. Saepe est eius voluptatum ratione vel. Velit cupiditate nihil placeat ut laboriosam repellendus. Expedita incidunt sunt sit sit non expedita. A magni alias et enim quis voluptate iure ut. Enim similique minus ullam.\n\nSint ut architecto omnis rerum quas. Facilis quod sequi eos atque doloremque illo facilis. Veritatis commodi ullam nisi facilis dolores similique quasi. Minus libero nesciunt magnam omnis architecto mollitia et voluptatem. Consequatur voluptatum vitae aliquid culpa. Dolorum unde dignissimos et rerum. Nostrum officiis hic voluptatem molestiae laborum qui quam. Et qui porro asperiores iste sed eaque animi. Cupiditate eos rerum illo laudantium repudiandae quasi nulla. Laboriosam consectetur soluta eaque numquam amet. Delectus doloremque et rerum voluptatem porro quia veritatis libero. Ad cumque deleniti odit optio illum ut mollitia. Rerum magnam autem quam. Hic doloremque consequatur fugiat quidem quasi aut nobis. Aut quidem sunt voluptatum voluptas dolor.', 1961, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(4, 'placeat-dolorum-molestiae', 'Placeat dolorum molestiae', 'Quo neque in laudantium inventore nam doloribus est. Omnis id deserunt deleniti expedita. Voluptas animi in...', 'Quo neque in laudantium inventore nam doloribus est. Omnis id deserunt deleniti expedita. Voluptas animi in sapiente incidunt sunt odio ea. Tempora fugiat dolorum dolorem necessitatibus qui. Autem perferendis sed sint fugiat libero et ipsum et. At voluptas voluptas quia ut. Beatae quia sequi odit earum debitis tempore aut. Sunt aut dolore voluptatem delectus dolores et rerum. Culpa quisquam officiis eaque eos deleniti sed hic nulla. Enim architecto reiciendis molestiae nulla soluta. Eveniet asperiores eos velit quidem nam facere explicabo. Sit similique est est sit. Enim laudantium est est qui rem molestiae. Maxime sit ut aut soluta qui temporibus voluptas. Et sit eveniet modi mollitia aut est. Ipsam non vel dolorem. Ullam enim aut qui ratione. Officiis fugiat accusamus sequi nisi qui.\n\nModi non consequatur eos quos hic earum. Corrupti qui a rerum non vitae. Ipsa impedit officia dolor deleniti quaerat dolore. Eum ipsam praesentium distinctio enim aut voluptatem molestias. Et quidem itaque explicabo. A itaque quidem temporibus unde. Consequatur officia suscipit quod earum rerum. Recusandae vel voluptas rerum sint quo eveniet est. Nostrum ut sit sit voluptatem sed. Eos ducimus nam sint harum. Reiciendis ratione amet impedit aut. Quisquam blanditiis ex maiores. Pariatur quia dolores voluptatem soluta. Nostrum iste in assumenda pariatur dolorem voluptatum aut consequatur. Voluptas dicta vel rerum dolor officia cumque.\n\nRerum est officia modi. Voluptate consequatur maiores et dolore eaque est. Temporibus sed magnam quidem. Perspiciatis sed id fugiat. Debitis atque nulla aut atque. Ex hic placeat aliquid enim quae. Corrupti necessitatibus sed aut voluptas possimus molestias cupiditate. Quia itaque accusamus dolorem fugit debitis rerum magnam alias. Distinctio aliquid ipsum doloribus et. Harum consequatur repellat quis expedita cum. Neque distinctio omnis vero sit reprehenderit quia cupiditate itaque. Et dolore asperiores temporibus culpa accusantium. Dolore inventore neque aspernatur perferendis dolore delectus aut. Error autem eaque soluta reprehenderit consequatur est ad. Ut ut consequatur numquam dolor.', 1905, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(5, 'est-omnis-est', 'Est omnis est', 'Repellendus quibusdam repudiandae consequatur quae hic et. Quia explicabo enim alias sequi. Iusto itaque temporibus debitis...', 'Repellendus quibusdam repudiandae consequatur quae hic et. Quia explicabo enim alias sequi. Iusto itaque temporibus debitis labore. Minima maxime ea consequatur qui sunt. Aut cum qui error ut. Nesciunt eos laboriosam mollitia consequatur accusamus facere aut. Et nisi consequatur a nesciunt. Eaque ut error magni neque temporibus. Eum odit odio nihil ut numquam autem. Porro ut nihil sit et laudantium et magnam doloremque. Est error quia expedita. Rerum asperiores tempore architecto et perspiciatis. Quae rerum nam alias distinctio enim id. Maxime ut occaecati illum at qui aperiam. Rerum eum aut eos ducimus rerum expedita. Et sint quis natus dolorum deserunt illum est eius.\n\nAspernatur nulla omnis rerum sit. Ipsa dolorem ipsam aliquam laborum soluta id deleniti. Eligendi facere sint est incidunt vel impedit. Iusto temporibus recusandae qui id voluptatem at. Voluptates inventore velit ut maiores laboriosam excepturi. Hic cumque voluptas repellat. Nam eos sit facilis non repellat facilis sint. Quaerat quisquam sed qui vel eveniet. Est debitis molestiae est. Est ipsum rerum omnis inventore mollitia sapiente ut. Illum laborum quo voluptas ut veniam maiores quibusdam. Omnis earum sit ad voluptates. Officia aut quo consequuntur eaque. Dolor minus ut quas laudantium quia sit. Sit cum qui et omnis. Repudiandae culpa non in voluptatem similique atque voluptatibus facere.\n\nEa sint quia quo quaerat. Facere in consequuntur dolor ipsa. Temporibus eius quia qui nostrum aut autem omnis earum. Quam molestiae labore dolorum dicta ut. Et ratione ut a velit incidunt. Cumque aut saepe voluptatem qui quaerat reprehenderit laborum. Rerum qui modi aut ipsum excepturi harum labore. Rerum dolorum omnis pariatur quos eligendi non reiciendis. Quod debitis quidem pariatur quaerat dolor labore. Sunt deserunt qui aut rem hic sint eum. Aut incidunt qui saepe repellendus. Saepe non nihil aliquid ut neque. Cupiditate neque enim fugiat nihil et. Reiciendis quis sed est. Ut aperiam possimus sint voluptate labore perspiciatis. Et quia quod ipsam explicabo ut sit.', 1919, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(6, 'rerum-nihil-consequatur', 'Rerum nihil consequatur', 'Earum voluptas harum aut maiores eos incidunt explicabo. Nam ipsum dolorem ipsum. Molestiae sequi nesciunt non...', 'Earum voluptas harum aut maiores eos incidunt explicabo. Nam ipsum dolorem ipsum. Molestiae sequi nesciunt non blanditiis. Autem aliquam aut quam quia aut ea. Ea dolores nostrum provident fugit tempore et inventore. Incidunt facere eius doloremque deleniti illo et eaque. Voluptatibus saepe et reprehenderit rerum assumenda autem. Minima numquam aut veniam voluptatem quibusdam voluptas ducimus. Ut sed soluta suscipit tempore perferendis quo et saepe. Consequuntur facere ab consequatur quo veritatis. Quas consequatur ad quia. Eum eius accusantium quasi quibusdam. In id explicabo qui nam. Et ex officia laboriosam nostrum doloribus numquam perferendis.\n\nDoloribus consequatur maxime sint temporibus rerum illo. Consequatur qui ea sequi facere enim est libero. Doloremque qui eum voluptates aliquid. Exercitationem cum nam qui eum error ut dolores. Ab voluptatum natus explicabo eveniet sit aliquid. Doloribus et impedit quos nihil ullam. Praesentium dolor qui deleniti. Enim perferendis illum provident modi quae qui nihil. Quod laboriosam officia id eligendi voluptatum ex. Vero animi nisi possimus qui. Deleniti eos aut doloremque aut. Soluta omnis nisi culpa dolor voluptas et. Qui hic ut et ut odio iure. Voluptatem dolore voluptatibus iure eum quidem asperiores ab. Dolores quo amet nihil quia saepe. Laborum vel consequuntur enim laudantium provident cupiditate optio provident. Eveniet error qui sed dolores. Et qui sequi voluptatem velit.\n\nPorro ducimus error culpa neque ipsum. Dicta consequatur doloribus maxime non dolorem. Maxime nisi rerum nisi rerum id nemo. Dignissimos iusto omnis qui laboriosam. Unde minima ea beatae. Molestias velit dolore error perspiciatis in. Harum enim nemo a qui quidem. Aut voluptatem aut esse voluptatem reiciendis earum consectetur. Dolores quae et animi nihil qui. Et deserunt est totam. Eos voluptate perspiciatis iste consequatur. Vitae exercitationem quas nemo dolor perspiciatis. Magnam doloribus unde eum suscipit voluptate ut. Cum porro quo aut dolor alias. Quam et est optio commodi temporibus. Dolore reprehenderit ut itaque rem sapiente. Et consequatur quo voluptas excepturi est. Temporibus cum et quo quia. Labore odit eum eligendi ut ex.', 2007, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(7, 'inventore-sed-nihil', 'Inventore sed nihil', 'Exercitationem quia qui aut itaque qui cum labore quia. Qui porro enim qui omnis aliquid perspiciatis...', 'Exercitationem quia qui aut itaque qui cum labore quia. Qui porro enim qui omnis aliquid perspiciatis sit voluptatem. At temporibus ut fuga. Non quidem adipisci qui voluptas et modi aut. Ratione omnis fuga nobis qui. Eius inventore molestiae beatae quam aut. Quos voluptatum sunt sunt dolorem reprehenderit. Enim modi id reprehenderit aut est repellat ipsum et. Inventore aut ducimus sapiente sint. Aut officiis sit cumque autem rem. Dolore eligendi qui itaque aspernatur aspernatur. Mollitia a nam consequatur aliquam mollitia vitae. Non voluptatem corporis soluta est quia consequatur. Dolor molestiae enim sapiente laborum. Ea ipsam saepe et dolores voluptas.\n\nVoluptates odit in aut. Repellendus at aut tenetur aut voluptas maiores. Facilis voluptatem deleniti blanditiis et saepe. Est omnis sunt inventore autem numquam. Et aperiam quia eaque soluta. Dolorem soluta iusto distinctio minus. Quas eius autem voluptas est odio unde. Non qui enim et tempora deleniti fugiat. Nisi ut mollitia qui. Blanditiis eum omnis tenetur praesentium incidunt. Molestiae quam error aliquid sed velit mollitia non. Culpa possimus vel magni dolorem consequatur commodi. Provident alias sint sit nihil. Quod nesciunt omnis mollitia ab suscipit. Esse deserunt ab incidunt provident ducimus id. Animi deserunt eius quidem hic. Asperiores quisquam provident sed quod itaque ipsum eum. Incidunt quo et qui totam dolores.\n\nEst aliquid nostrum dolorum rerum. Quae odit harum eaque perferendis qui possimus. Non nesciunt nesciunt quia esse nobis quia distinctio. Cupiditate culpa officiis et consectetur. Accusamus modi et qui. Sed voluptas quasi iusto esse illo quo quod. Rerum labore fugit sed sed reprehenderit explicabo atque aut. Dicta ut libero nemo ut. Et dolorem atque asperiores voluptatibus. Consequatur animi harum ipsum velit in. Et voluptatem illum est ratione eum. Laboriosam minima temporibus tempora dolorum neque maiores. Eum hic autem consectetur laudantium. In ut sint quia itaque minima. Sunt ut quia provident enim expedita qui. Explicabo modi officia consectetur voluptas.', 1987, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(8, 'voluptatibus-sunt-dolorem', 'Voluptatibus sunt dolorem', 'Necessitatibus quo voluptatem eos ducimus et et omnis. Et dolor nostrum et aliquam ab accusantium. Tempora...', 'Necessitatibus quo voluptatem eos ducimus et et omnis. Et dolor nostrum et aliquam ab accusantium. Tempora accusantium sit dolor. Doloribus enim reiciendis unde qui. Consequatur non veritatis iure consequuntur dignissimos accusamus sint. Sequi iure iusto nesciunt earum et. Est hic vel voluptas assumenda non quia deleniti. Sunt dolor voluptate porro sed sequi voluptas voluptatum. Facilis voluptate omnis voluptate omnis officia quaerat. Sunt officia iste optio provident aspernatur. Eos officia aspernatur ratione laudantium. Est culpa sint consequatur eos porro. Voluptatibus aut eos qui minima neque. Quibusdam nostrum neque eaque. Reiciendis dolor et fugiat magnam. Facere qui nobis eum molestias iure. Ut autem illum quisquam qui quia incidunt et.\n\nEius dolor molestiae est ipsum quia beatae. Aliquam nisi rerum sapiente tempora. Aliquid nobis ut exercitationem illo. Consequatur aliquid molestiae similique sint. Sed rerum natus quas incidunt aut omnis. Est aut molestiae voluptas quo consequuntur dolore. Numquam harum voluptatibus debitis incidunt odio ratione. Distinctio id atque adipisci. Voluptas ad repellendus asperiores autem nihil. Iusto ratione repellat recusandae nisi. Officiis aut ab illum nisi saepe fuga sit. Quaerat repellat sequi voluptate consectetur quod consequatur ut quidem. Rerum voluptatibus enim atque sed dolor deserunt. Voluptatem enim culpa deleniti aut enim quia. Illo sequi doloribus sit sit autem voluptatum sapiente. Aliquid voluptatem laudantium deleniti voluptatum repudiandae.\n\nMolestiae blanditiis vero reprehenderit. Repellendus delectus sint ex quo eos voluptatem quo ratione. Laborum accusantium aut veniam ratione quae culpa. Odio fugit voluptas qui id dolorem architecto. Necessitatibus veniam velit omnis nostrum unde eius. Occaecati delectus vero tempora quo. Quidem ea dolores iusto natus minus blanditiis voluptas. Sed soluta quisquam aspernatur. Necessitatibus ea aliquam a. Reprehenderit assumenda qui deserunt sint est ea temporibus. Laboriosam iste rem eius est ut dignissimos reiciendis aliquam. Sint modi dicta odio quos placeat inventore. Distinctio cum ut illum similique temporibus et non.', 1914, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(9, 'repellendus-nulla-consequatur', 'Repellendus nulla consequatur', 'Sed reprehenderit illo non alias dignissimos ut cupiditate. Et deserunt necessitatibus rerum odio sint quis expedita....', 'Sed reprehenderit illo non alias dignissimos ut cupiditate. Et deserunt necessitatibus rerum odio sint quis expedita. Labore eius dolor necessitatibus cupiditate saepe. Deleniti sint et labore enim. Culpa nobis voluptas provident quasi et. Enim quo error esse voluptas quaerat nulla. Commodi et harum et voluptatem hic beatae iure aut. Eligendi earum rerum libero sed quasi. Rem voluptatum libero aut est. Modi tenetur provident nostrum. Et debitis officia cupiditate error suscipit eos. Debitis repellendus nisi amet fuga assumenda. Id ratione non deleniti quis.\n\nEx nihil fuga excepturi hic. Et voluptas quis harum dolores sed. Provident atque quam aut officia. In et ut voluptas harum sit. Assumenda nesciunt quod consequatur ipsa nobis eveniet qui. Voluptates dolores et et. Amet nostrum aut unde natus fugit ipsa enim. Quos aliquid ut quas sequi molestias dolorem at inventore. Illum id sit expedita ad cupiditate ex iure. Molestias aperiam ipsum voluptatem exercitationem. Dolorum minus labore minus qui. Occaecati amet iste facere temporibus ea aut facere. Adipisci nesciunt iste sapiente consequatur et. Adipisci dignissimos rerum et. Omnis eaque repellat est soluta et autem facilis. Ut non autem minus ex est maiores est eveniet. Sint non doloremque vitae libero earum. Corporis consectetur laborum aut dicta labore. In sit ipsa unde harum.\n\nCum est ad necessitatibus qui et tempore sunt. Molestiae velit voluptatem asperiores et error sunt velit. Sequi sit reiciendis ea et. Unde illo ut distinctio ad labore totam dolor. Sint saepe est a eos ut velit quos. Qui et a ea et suscipit voluptatem ut. Omnis autem quasi blanditiis sunt. Maiores necessitatibus quidem cumque dolore enim facere. Inventore aliquam rerum atque voluptatem voluptatem laborum. Aliquid consequatur quo est. Ex molestias dolor et quo sunt illo non. Ea minima blanditiis laboriosam soluta assumenda eum similique. Illo facere quaerat vero minima enim inventore ex. Dolore sit et aspernatur facilis. Qui animi numquam sapiente est aperiam asperiores.', 1993, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL),
(10, 'non-quia-laboriosam', 'Non quia laboriosam', 'Illo unde officiis neque ut. Et eum vero quo consectetur. Quam quaerat error suscipit ut error...', 'Illo unde officiis neque ut. Et eum vero quo consectetur. Quam quaerat error suscipit ut error eligendi. Recusandae qui iure voluptatum blanditiis et. Veniam blanditiis beatae eum est tempora. Et qui et eos nihil cupiditate perspiciatis. Dolor illo sint assumenda quis at distinctio reiciendis. Voluptatem quam qui ducimus. Eos qui omnis a ullam dolore. Voluptatem incidunt recusandae aut sunt non. Vel consequuntur illum dolorem necessitatibus natus cumque qui. Voluptas natus illum odio error rerum. Vel deserunt iusto explicabo cum sed exercitationem. Deleniti qui sit fugit vel rerum. Assumenda occaecati omnis ipsa consequatur ut labore et. Consectetur velit aut et vel iste. Aut laboriosam rerum quia quia autem tempore autem. Et et dolorum porro atque.\n\nRem natus cum cumque id nihil et aliquid. Quasi perspiciatis voluptas amet eaque eum distinctio saepe. Voluptate maiores sequi et. Vel fugit expedita sunt ad nesciunt. Aliquam est enim natus veniam ut quisquam veniam molestiae. Vitae quod ex ullam aut ipsam ea reiciendis. Dicta nihil totam ut laudantium. Exercitationem ut laudantium vel ut. Nemo debitis unde sapiente occaecati eveniet quidem debitis. Eos recusandae sit omnis ea. Sunt voluptas molestiae deleniti perspiciatis asperiores asperiores et. Consequuntur et error est. Officia placeat possimus repudiandae inventore rerum velit corrupti. Mollitia nisi et nobis nemo.\n\nEt aut vero est explicabo rerum. Vel facilis quae fugit placeat consequuntur excepturi. Eum enim ea ea necessitatibus. Eos consequatur et quis qui ullam facere. Sint occaecati consequuntur libero mollitia eos accusantium. Qui ratione consequuntur a qui dolor qui. Fuga deserunt aliquam cupiditate deleniti delectus. Iure ut qui maiores ipsum qui et et ipsam. Et voluptatem quia enim porro consequatur et excepturi. Dolores modi reprehenderit quod impedit dolorum. Enim neque cum rerum veniam nemo impedit. Commodi facilis dicta unde autem. Atque non veniam nobis laborum esse. Praesentium magni et rem est. Velit voluptatibus placeat nisi consequatur qui. Quia possimus alias ut et enim omnis. Ipsam dolorem quod fuga vero sit eos modi.', 1969, 'cover-placeholder.svg', '2022-06-28 12:14:43', '2022-06-28 12:14:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `book_id` int NOT NULL,
  `genre_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`book_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(2, 3, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(2, 4, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(3, 1, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(4, 2, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(5, 3, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(6, 4, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(7, 3, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(8, 2, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(9, 2, '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(10, 3, '2022-06-28 12:14:43', '2022-06-28 12:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `book_quote`
--

CREATE TABLE `book_quote` (
  `id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `review_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'fantasy', 'fantasy', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(2, 'realism', 'realism', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(3, 'romance', 'romance', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(4, 'mystery', 'mystery', '2022-06-28 12:14:43', '2022-06-28 12:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_09_151251_create_books_table', 1),
(6, '2022_04_10_150851_create_genres_table', 1),
(7, '2022_04_20_120403_create_authors_table', 1),
(8, '2022_04_20_125311_create_book_genre_table', 1),
(9, '2022_04_21_121826_create_author_book_table', 1),
(10, '2022_06_17_072047_create_reviews_table', 1),
(11, '2022_06_20_140449_create_user_genre_table', 1),
(12, '2022_06_22_064407_create_quotes_table', 1),
(13, '2022_06_22_072131_create_book_quote_table', 1),
(14, '2022_06_25_160754_create_comments_table', 1),
(15, '2022_06_26_154734_create_user_book_table', 1),
(16, '2022_06_27_084228_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `book_id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Perspiciatis nemo iusto autem facere maiores magnam illum. Mollitia sequi aut laborum accusamus repudiandae. Et eaque sed provident temporibus expedita. Et molestiae dolores quisquam alias cum doloribus cumque aliquid.\\nAdipisci in inventore porro cupiditate aliquam voluptate. Dignissimos neque neque et quibusdam. Sed ut quia accusantium dolores. Aliquid qui culpa repellendus rerum temporibus et. Eos necessitatibus odit sit consequatur laborum.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(2, 1, 2, 'Necessitatibus ipsa excepturi dicta et. Corporis ex quidem ullam nam magni magni fuga. Adipisci vel facilis aut eum quia omnis. Sunt nihil repellat quis reprehenderit necessitatibus voluptate.\\nEa ea optio dolore natus esse. Qui architecto quo labore sit illo. Nesciunt perspiciatis nostrum et blanditiis. Est sunt voluptas alias dignissimos. Rerum sit aut quasi qui.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(3, 2, 3, 'Ducimus labore vero accusamus harum illo neque. Et omnis quam perspiciatis est. Optio quia corrupti assumenda dolores pariatur tenetur asperiores.\\nCulpa quia aut qui et dolor corporis odio possimus. Sit dolor consequuntur et quam qui quos. Doloribus fugiat aspernatur consequuntur iusto aut ratione nihil.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(4, 3, 4, 'Expedita ex iste minus debitis voluptas quidem et consequatur. Voluptatem et rem possimus est non recusandae. Voluptatem ad nobis impedit facere qui reiciendis. Unde est laborum soluta. Nisi praesentium amet rem numquam. Quod maxime amet quia similique. Et dolor est quis dolor sequi quia.\\nQuia doloribus laudantium harum. Magnam quas rerum iure fuga eaque eligendi. Adipisci quod molestiae veritatis soluta. Facilis delectus consequatur ut ut non in. Cupiditate nesciunt est mollitia quae neque.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(5, 4, 5, 'Et aliquid in eius reprehenderit qui. Dignissimos nobis aut quae aliquam quas dicta assumenda. Eius rerum qui ducimus officiis et fugiat. Pariatur qui placeat nihil numquam quod dolor voluptatem.\\nNam occaecati voluptatem ullam ut fuga. Ipsa officiis dolor qui qui est dolor ab. Consequuntur mollitia mollitia adipisci ut asperiores cum. Et dolorem architecto ut natus hic voluptatibus. Ut magnam nemo sit et enim odit esse. Aut et deleniti quis laborum.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(6, 5, 6, 'Impedit debitis qui in illum delectus sunt. Magni velit aspernatur illum laudantium. Veritatis laboriosam sed vero unde.\\nSaepe et consequatur ab. Nihil velit dolorum molestiae qui quos unde. Illo delectus eveniet fuga doloremque qui sint.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(7, 4, 7, 'Aspernatur voluptatem est ut soluta quis sit porro. Rem ratione voluptate perferendis omnis quia est dicta. Id praesentium impedit dolorum. Illum aut adipisci blanditiis vel. Cum nesciunt perspiciatis aut officiis. Ut unde et deserunt.\\nRerum ex odio doloribus eveniet modi. Totam omnis nobis nihil pariatur quia sunt. Doloribus id laudantium eum vitae iure. Sunt sunt et dolores ullam culpa aliquam qui.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(8, 3, 8, 'Quam nihil commodi aspernatur fugiat dolor enim. Sit maxime dolores velit dolore. Corporis at molestias facilis nemo necessitatibus assumenda voluptatem itaque. Id nam et est.\\nEum sint nesciunt fuga accusantium eveniet. Et eos nobis fuga est. Voluptatem voluptatem eaque et quis fuga.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(9, 7, 9, 'Voluptas reprehenderit commodi animi porro deserunt voluptatum sunt recusandae. Id eos debitis a ut ipsam repellendus et. Esse nostrum quidem in sit dolorem earum. Sed earum unde ut molestiae modi animi ut quia. Ut aut eligendi et et vel.\\nNeque modi ducimus eaque consequuntur rerum beatae magni. Tenetur error aut omnis. Et accusamus incidunt iusto id doloribus laborum enim. Sed consequuntur et soluta aperiam et beatae veniam.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(10, 8, 10, 'Saepe qui dolores laudantium dignissimos minima ipsa nobis officia. Quibusdam voluptatibus voluptates rerum in. Aut impedit modi quae perferendis nobis. Error amet cum fuga ipsum ipsam placeat saepe.\\nAliquam laudantium commodi similique facere. Quos ex quaerat omnis libero sint quisquam ut. Incidunt id animi soluta eligendi soluta. Officia occaecati hic sit hic. Voluptatum suscipit quo omnis tenetur ratione culpa. Distinctio aliquam perferendis est quo amet.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(11, 4, 11, 'Voluptatem minus alias architecto reiciendis. Autem ad laborum corrupti. Laborum vero quidem quia aspernatur eum est. Necessitatibus inventore laborum eum consequatur esse vel.\\nBlanditiis et necessitatibus quod cum autem sunt ab. Et non et illo hic omnis eveniet. Ratione nihil et quia sed eum deserunt. Ipsam nobis quae at consequatur itaque. Et ratione atque quaerat cumque ab. Voluptate eligendi autem deleniti veniam. Molestiae qui numquam ut.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(12, 9, 2, 'Quia quo voluptates animi et hic. Cum est neque dolor veniam et ducimus. Incidunt consequatur ab sunt. Velit sint doloremque cum placeat sint.\\nConsectetur voluptatibus accusantium qui alias. Qui at at est commodi qui blanditiis in. Blanditiis maxime laudantium culpa autem provident sed officia voluptas. Omnis in et fugit quo similique quo.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(13, 10, 2, 'Eius voluptates consequatur porro perspiciatis. Beatae ipsum eum beatae aut consectetur adipisci. In deserunt sint autem ipsam exercitationem. Velit provident id dicta et.\\nNon exercitationem qui ut porro explicabo modi. Dolores consequatur ducimus ratione accusantium. Voluptatum officiis beatae accusamus culpa nihil laudantium. Similique in autem excepturi ut.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(14, 10, 9, 'Quo recusandae non odit est eligendi sed. Nesciunt inventore velit voluptas. Dolore nam esse et aperiam aperiam. Consequuntur quisquam esse et ut praesentium sed quis. Quo dolor voluptate nam ullam fuga et.\\nQuibusdam tenetur ipsa dolorem non tempora. Quasi et accusantium harum vitae in sequi itaque. Et velit quia asperiores debitis voluptatem omnis. Nemo laboriosam magnam cumque possimus.', '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(15, 10, 5, 'Quasi et recusandae porro. Laboriosam ut eum beatae nemo recusandae et natus. Autem magni officiis adipisci cupiditate ut debitis. Corrupti eveniet nihil voluptatem dicta ut cumque. Eos est sed rerum eius ab ipsum facilis. Laboriosam maxime omnis sint qui aliquid quisquam et.\\nTempora rem et sunt nostrum quidem. Et ad et facilis. Quis amet at sequi ea quo aut. Culpa explicabo qui soluta qui accusamus molestias. Minus sed molestiae aut nobis sint rem sed. Qui dignissimos sunt accusantium odit et ducimus. Sed consequatur distinctio molestiae eum fuga est.', '2022-06-28 12:14:44', '2022-06-28 12:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(2, 'mod', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(3, 'admin', '2022-06-28 12:14:43', '2022-06-28 12:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `public_email` tinyint(1) NOT NULL DEFAULT '0',
  `list` tinyint(1) NOT NULL DEFAULT '1',
  `quote_id` bigint UNSIGNED DEFAULT NULL,
  `role_id` bigint UNSIGNED NOT NULL DEFAULT '1',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `username`, `bio`, `image`, `email`, `email_verified_at`, `public_email`, `list`, `quote_id`, `role_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ksenija Kopteva', 20, 'ksenia', 'First ever user on this site.', 'user-1.jpeg', 'ksenija.kopteva@gmail.com', '2022-06-28 12:14:43', 0, 1, NULL, 3, '$2y$10$Bityou4vf3Zoreo0AER8W.25vl9zrXK4wbl09LYR3dqFBLJzVyaf6', 'jT1iu674PQ', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(2, 'Laurence Weimann', NULL, 'cummings.geovany', NULL, 'user-2.jpg', 'dana85@example.net', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$JFMq4uNAf.7hQOpCBNzgUel7lYzNpASoRoj70NMNYStMwmW6ZdA6W', '3JBJYpaF3V', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(3, 'Dulce Konopelski', NULL, 'june.gusikowski', NULL, 'user-3.jpg', 'hdaugherty@example.com', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$wHwVjPPwNjaL20U3HKdzHeu5RhovQFsQnTP5vuMi5wWnLbriFL.xq', '04GXAp7qSf', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(4, 'Esther Gibson', NULL, 'leanne.daugherty', NULL, 'user-4.jpg', 'eileen.schmeler@example.com', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$ziK0Mj3/hGyCuoGrBn1jaeBOm0u7CBH6iGF81nBpsU71qhgJGkjKC', 'r8dNFGYCZb', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(5, 'Prof. Leta Smith', NULL, 'alessandra93', NULL, 'user-5.jpg', 'bmcdermott@example.org', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$f8HjrlXJZe9S.hqJdhvfIOgPKa13nBSvBib4H5kH063kkHtvY48Q.', 'rUj0EfwazW', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(6, 'Mr. Jovanny Crist III', NULL, 'gaston50', NULL, 'user-6.jpg', 'felipe.oreilly@example.org', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$GMdBgKBBHEcFDplv0FUsf.7E5uZU7IbVvxb/weLX5cuC9ETPrA4Ee', 'DXwyvVqCix', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(7, 'Christelle Greenholt MD', NULL, 'stracke.pauline', NULL, 'user-7.jpg', 'ktreutel@example.com', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$tpXQCHw1j6qUCcokIsFLfeueHlW9Xg8R4ZqvzKtQj2lLwVyMJsX5K', 'e1lHvIuN6S', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(8, 'Dedrick Wilderman', NULL, 'rickie.mcclure', NULL, 'user-8.jpg', 'mueller.burdette@example.net', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$iIjKZe8m.OPcbhCvhwHsUO1BQ25SGv62zlyaJBh3jTYC9J2QAKl0.', '3Q8RaZRBDW', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(9, 'Winston Russel', NULL, 'flavie.hammes', NULL, 'user-9.jpg', 'cdare@example.net', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$3unvHssPwCSKY9YdlyFLUeJWosn2Dj0i9Alt6cWvb0mpG7k8Jvj2W', 'SX7xBkNv12', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(10, 'Adam Legros', NULL, 'emerald76', NULL, 'user-10.jpg', 'raul.purdy@example.com', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$a4aSlxlJR1gjPJ5JGFgK5OHrDhVhD0faAIPo4yoY3OiXDkUZjPiTC', 'DAEWT0HhNq', '2022-06-28 12:14:43', '2022-06-28 12:14:43'),
(11, 'Elise Kshlerin', NULL, 'herman.mario', NULL, 'user-11.jpg', 'eschmitt@example.net', '2022-06-28 12:14:43', 0, 1, NULL, 1, '$2y$10$MHhZoBIT0gGX/vJ9h/NK6u0t6AbcnLm6bMzRZGeEQDypA8FILb32i', '6euKxJbuKl', '2022-06-28 12:14:43', '2022-06-28 12:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_book`
--

CREATE TABLE `user_book` (
  `user_id` int NOT NULL,
  `book_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_genre`
--

CREATE TABLE `user_genre` (
  `user_id` int NOT NULL,
  `genre_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_genre`
--

INSERT INTO `user_genre` (`user_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(1, 3, '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(1, 4, '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(2, 1, '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(2, 3, '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(3, 3, '2022-06-28 12:14:44', '2022-06-28 12:14:44'),
(4, 1, '2022-06-28 12:14:44', '2022-06-28 12:14:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authors_id_unique` (`id`),
  ADD UNIQUE KEY `authors_slug_unique` (`slug`);

--
-- Indexes for table `author_book`
--
ALTER TABLE `author_book`
  ADD UNIQUE KEY `author_book_unique` (`book_id`,`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_slug_unique` (`slug`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD UNIQUE KEY `book_genre_unique` (`book_id`,`genre_id`);

--
-- Indexes for table `book_quote`
--
ALTER TABLE `book_quote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_quote_book_id_foreign` (`book_id`),
  ADD KEY `book_quote_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_review_id_foreign` (`review_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genres_id_unique` (`id`),
  ADD UNIQUE KEY `genres_name_unique` (`name`),
  ADD UNIQUE KEY `genres_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quotes_book_id_foreign` (`book_id`),
  ADD KEY `quotes_author_id_foreign` (`author_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_book_id_foreign` (`book_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_book`
--
ALTER TABLE `user_book`
  ADD UNIQUE KEY `user_book_unique` (`user_id`,`book_id`);

--
-- Indexes for table `user_genre`
--
ALTER TABLE `user_genre`
  ADD UNIQUE KEY `user_genre_unique` (`user_id`,`genre_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_quote`
--
ALTER TABLE `book_quote`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_quote`
--
ALTER TABLE `book_quote`
  ADD CONSTRAINT `book_quote_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_quote_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_review_id_foreign` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `quotes_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `quotes_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
