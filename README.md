# Torah

## About

This is a PHP 7.3 library that has access to Torah (Tanakh, Nevi'im ketuvim and Brithadasha books) 
in 21 translations via api (GuzzleHttp client) to [biblia.info.pl/api](https://www.biblia.info.pl/api/) service.

This library has `cache` option (sqlite) enabled. You may cache your api requests from now on.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/jaroslawzielinski)

## How to install via shell
in [packagist](https://packagist.org/packages/jaroslawzielinski/torah)
```ssh
cd YourProject
composer require jaroslawzielinski/torah
```

## Examples

```
"Czas się wypełnił i bliskie jest królestwo Boże. nawracajcie się i wierzcie w Ewangelię."
```
**Ew. Marka 1:15, Biblia Tysiąclecia**

```
"i mówiąc: Wypełnił się czas i zbliżyło się Królestwo Boga; skruszcie się oraz wierzcie w Dobrą Nowinę."
```

**Ew. Marka 1:15, Nowa Biblia Gdańska**

```
"and saying -- `Fulfilled hath been the time, and the reign of God hath come nigh, reform ye, and believe in the good news.'"
```

**Mark 1:15, Young's Literal Translation**

## Available Translations
* Biblia Tysiąclecia
* Biblia Warszawska
* Biblia Warszawsko-Praska
* Edycja Świętego Pawła
* Biblia Gdańska
* Nowa Biblia Gdańska
* Uwspółcześniona Biblia Gdańska
* Biblia Brzeska
* Biblia Poznańska
* Biblia Jakuba Wujka
* Biblia Mesjańska
* Biblia Nowego Świata
* Biblia Lubelska
* Słowo Życia
* Przekład Dosłowny
* Biblia Toruńska
* King James Version
* Webster Bible
* Young's Literal Translation
* Łacińska Vulgata
* Grecka Septuaginta

## Developer Guide

### Constants

#### Translations:

* **TORAH_TRANSLATION_BT** (Biblia Tysiąclecia)
* **TORAH_TRANSLATION_BW** (Biblia Warszawska) 
* **TORAH_TRANSLATION_BR** (Biblia Warszawsko-Praska) 
* **TORAH_TRANSLATION_ESP** (Edycja Świętego Pawła) 
* **TORAH_TRANSLATION_BG** (Biblia Gdańska) 
* **TORAH_TRANSLATION_NG** (Nowa Biblia Gdańska) 
* **TORAH_TRANSLATION_UG** (Uwspółcześniona Biblia Gdańska) 
* **TORAH_TRANSLATION_BB** (Biblia Brzeska) 
* **TORAH_TRANSLATION_BP** (Biblia Poznańska) 
* **TORAH_TRANSLATION_JW** (Biblia Jakuba Wujka) 
* **TORAH_TRANSLATION_BM** (Biblia Mesjańska) 
* **TORAH_TRANSLATION_NS** (Biblia Nowego Świata) 
* **TORAH_TRANSLATION_BL** (Biblia Lubelska) 
* **TORAH_TRANSLATION_SZ** (Słowo Życia) 
* **TORAH_TRANSLATION_EIB** (Przekład Dosłowny) 
* **TORAH_TRANSLATION_TNP** (Biblia Toruńska) 
* **TORAH_TRANSLATION_KJV** (King James Version) 
* **TORAH_TRANSLATION_WEB** (Webster Bible) 
* **TORAH_TRANSLATION_YLT** (Young's Literal Translation) 
* **TORAH_TRANSLATION_VUL** (Łacińska Vulgata) 
* **TORAH_TRANSLATION_GR** (Grecka Septuaginta) 

#### Books:

// Books of Tanakh
* **TORAH_BOOKS_RDZ** (Genesis)
* **TORAH_BOOKS_WJ** (Exodus)
* **TORAH_BOOKS_KPL** (Leviticus)
* **TORAH_BOOKS_LB** (Numbers)
* **TORAH_BOOKS_PWT** (Deuteronomy)
* **TORAH_BOOKS_JOZ** (Joshua)
* **TORAH_BOOKS_SDZ** (Judges)
* **TORAH_BOOKS_RT** (Ruth)
* **TORAH_BOOKS_1SM** (1 Samuel)
* **TORAH_BOOKS_2SM** (2 Samuel)
* **TORAH_BOOKS_1KRL** (1 Kings)
* **TORAH_BOOKS_2KRL** (2 Kings)
* **TORAH_BOOKS_1KRN** (1 Chronicles)
* **TORAH_BOOKS_2KRN** (2 Chronicles)
* **TORAH_BOOKS_EZD** (Ezra)
* **TORAH_BOOKS_NE** (Nehemiah)
* **TORAH_BOOKS_TB** (Tobit) // Deutero canonicals
* **TORAH_BOOKS_JDT** (Judith) // Deutero canonicals
* **TORAH_BOOKS_EST** (Esther)
* **TORAH_BOOKS_1MCH** (1 Maccabees) // Deutero canonicals
* **TORAH_BOOKS_2MCH** (2 Maccabees) // Deutero canonicals
* **TORAH_BOOKS_HI** (Job)
* **TORAH_BOOKS_PS** (Psalms)
* **TORAH_BOOKS_PRZ** (Proverbs)
* **TORAH_BOOKS_KOH** (Ecclesiastes)
* **TORAH_BOOKS_PNP** (Song of Songs)
* **TORAH_BOOKS_MDR** (Wisdom) // Deutero canonicals
* **TORAH_BOOKS_SYR** (Sirach) // Deutero canonicals

// Books of Nevi'im ketuvim
* **TORAH_BOOKS_IZ** (Isaiah)
* **TORAH_BOOKS_JR** (Jeremiah)
* **TORAH_BOOKS_LM** (Lamentations)
* **TORAH_BOOKS_BA** (Baruch) // Deutero canonicals
* **TORAH_BOOKS_EZ** (Ezekiel)
* **TORAH_BOOKS_DN** (Daniel)
* **TORAH_BOOKS_OZ** (Hosea)
* **TORAH_BOOKS_JL** (Joel)
* **TORAH_BOOKS_AM** (Amos)
* **TORAH_BOOKS_AB** (Obadiah)
* **TORAH_BOOKS_JON** (Jonah)
* **TORAH_BOOKS_MI** (Micah)
* **TORAH_BOOKS_NA** (Nahum)
* **TORAH_BOOKS_HA** (Habakkuk)
* **TORAH_BOOKS_SO** (Zephaniah)
* **TORAH_BOOKS_AG** (Haggai)
* **TORAH_BOOKS_ZA** (Zechariah)
* **TORAH_BOOKS_ML** (Malachi)

// Books of Brithadasha
* **TORAH_BOOKS_MT** (Matthew)
* **TORAH_BOOKS_MK** (Mark)
* **TORAH_BOOKS_LK** (Luke)
* **TORAH_BOOKS_J** (John)
* **TORAH_BOOKS_DZ** (Acts)
* **TORAH_BOOKS_RZ** (Romans)
* **TORAH_BOOKS_1KOR** (1 Corinthians)
* **TORAH_BOOKS_2KOR** (2 Corinthians)
* **TORAH_BOOKS_GA** (Galatians)
* **TORAH_BOOKS_EF** (Ephesians)
* **TORAH_BOOKS_FLP** (Philippians)
* **TORAH_BOOKS_KOL** (Colossians)
* **TORAH_BOOKS_1TES** (1 Thessalonians)
* **TORAH_BOOKS_2TES** (2 Thessalonians)
* **TORAH_BOOKS_1TM** (1 Timothy)
* **TORAH_BOOKS_2TM** (2 Timothy)
* **TORAH_BOOKS_TT** (Titus)
* **TORAH_BOOKS_FLM** (Philemon)
* **TORAH_BOOKS_HBR** (Hebrews)
* **TORAH_BOOKS_JK** (James)
* **TORAH_BOOKS_1P** (1 Peter)
* **TORAH_BOOKS_2P** (2 Peter)
* **TORAH_BOOKS_1J** (1 John)
* **TORAH_BOOKS_2J** (2 John)
* **TORAH_BOOKS_3J** (3 John)
* **TORAH_BOOKS_JUD** (Jude)
* **TORAH_BOOKS_AP** (Revelation)

### Get Content
```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\Torah\Bible\TorahValidator;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\Torah\Bible\Service\Offline\Repository;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$siglum =
    SiglumFactory::create(
        Resources::TORAH_TRANSLATION_KJV,
        Resources::TORAH_BOOKS_J,
        '14',
        '21-24'
    );
$logger = new Logger('Torah');
$logger->pushHandler(new StreamHandler(__DIR__ . '/Torah.log', Logger::INFO));
$onlineClient = new Service\Online\Client($logger, new GuzzleClient());
$offlineClient = new Service\Offline\Client(new Repository());
$options = ['cache' => true];
$torah = new Torah(
    new TorahValidator(),
    new Service($onlineClient, $offlineClient),
    $options
);
$text = $torah->getTextBySiglum($siglum, Torah::LANGUAGE_EN, $contextUp = 2, $contextDown = 3);
if (!empty($text)) {
    echo $text->getOrdered() . '<br/><br/>';
    echo $text->getUnOrdered() . '<br/><br/>';
    echo $text->getDescription() . '<br/><br/>';
} else {
    echo 'Empty!';
    print_r($torah->getErrors());
}

```

Output:
```text
(18) I will not leave you comfortless: I will come to you. (19) Yet a little while, and the world seeth me no more; but ye see me: because I live, ye shall live also. (20) At that day ye shall know that I [am] in my Father, and ye in me, and I in you. (21) He that hath my commandments, and keepeth them, he it is that loveth me: and he that loveth me shall be loved of my Father, and I will love him, and will manifest myself to him. (22) Judas saith unto him, not Iscariot, Lord, how is it that thou wilt manifest thyself unto us, and not unto the world? (23) Jesus answered and said unto him, If a man love me, he will keep my words: and my Father will love him, and we will come unto him, and make our abode with him. (24) He that loveth me not keepeth not my sayings: and the word which ye hear is not mine, but the Father's which sent me. (25) These things have I spoken unto you, being [yet] present with you. (26) But the Comforter, [which is] the Holy Ghost, whom the Father will send in my name, he shall teach you all things, and bring all things to your remembrance, whatsoever I have said unto you.

I will not leave you comfortless: I will come to you. Yet a little while, and the world seeth me no more; but ye see me: because I live, ye shall live also. At that day ye shall know that I [am] in my Father, and ye in me, and I in you. He that hath my commandments, and keepeth them, he it is that loveth me: and he that loveth me shall be loved of my Father, and I will love him, and will manifest myself to him. Judas saith unto him, not Iscariot, Lord, how is it that thou wilt manifest thyself unto us, and not unto the world? Jesus answered and said unto him, If a man love me, he will keep my words: and my Father will love him, and we will come unto him, and make our abode with him. He that loveth me not keepeth not my sayings: and the word which ye hear is not mine, but the Father's which sent me. These things have I spoken unto you, being [yet] present with you. But the Comforter, [which is] the Holy Ghost, whom the Father will send in my name, he shall teach you all things, and bring all things to your remembrance, whatsoever I have said unto you.

John 14:18-26, King James Version
```

### Validate
```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\Torah\SiglumFactory;
use JaroslawZielinski\Torah\Bible\TorahValidator;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\Torah\Bible\Service\Offline\Repository;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$siglum =
    SiglumFactory::create(
        Resources::TORAH_TRANSLATION_BW,
        Resources::TORAH_BOOKS_TB,
        '1',
        '1'
    );
$logger = new Logger('Torah');
$logger->pushHandler(new StreamHandler(__DIR__ . '/Torah.log', Logger::INFO));
$onlineClient = new Service\Online\Client($logger, new GuzzleClient());
$offlineClient = new Service\Offline\Client(new Repository());
$options = ['cache' => true];
$torah = new Torah(
    new TorahValidator(),
    new Service($onlineClient, $offlineClient),
    $options
);
$translation = $torah->getResourceByTranslationCode($siglum->getTranslation());
var_dump($torah->isValid($siglum, $translation, Torah::LANGUAGE_EN));
print_r($torah->getErrors());


```

Output:
```text
bool(false) Array ( [0] => The translation is not deutero cannonical. )
```

### Get Structure
```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\TorahValidator;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\Torah\Bible\Service\Offline\Repository;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('Torah');
$logger->pushHandler(new StreamHandler(__DIR__ . '/Torah.log', Logger::INFO));
$onlineClient = new Service\Online\Client($logger, new GuzzleClient());
$offlineClient = new Service\Offline\Client(new Repository());
$options = ['cache' => true];
$torah = new Torah(
    new TorahValidator(),
    new Service($onlineClient, $offlineClient),
    $options
);
$translation = $torah->getResourceByTranslationCode(Resources::TORAH_TRANSLATION_BT);
$books = $translation->getBooks();
print_r($books[Resources::TANAKH]);
echo '<br/><br/>';
print_r($books[Resources::NEVIIMKETUVIM]);
echo '<br/><br/>';
print_r($books[Resources::BRITHADASHA]);
echo '<br/><br/>';
print_r($books[Resources::EXCEPTIONS]);


```

Output:
```text
Array ( [gen] => Array ( [chapters] => Array ( [1] => 31 [2] => 25 [3] => 24 [4] => 26 [5] => 32 [6] => 22 [7] => 24 [8] => 22 [9] => 29 [10] => 32 [11] => 32 [12] => 20 [13] => 18 [14] => 24 [15] => 21 [16] => 16 [17] => 27 [18] => 33 [19] => 38 [20] => 18 [21] => 34 [22] => 24 [23] => 20 [24] => 67 [25] => 34 [26] => 35 [27] => 46 [28] => 22 [29] => 35 [30] => 43 [31] => 54 [32] => 33 [33] => 20 [34] => 31 [35] => 29 [36] => 43 [37] => 36 [38] => 30 [39] => 23 [40] => 23 [41] => 57 [42] => 38 [43] => 34 [44] => 34 [45] => 28 [46] => 34 [47] => 31 [48] => 22 [49] => 33 ) ) [ex] => Array ( [chapters] => Array ( [1] => 22 [2] => 25 [3] => 22 [4] => 31 [5] => 23 [6] => 30 [7] => 29 [8] => 28 [9] => 35 [10] => 29 [11] => 10 [12] => 51 [13] => 22 [14] => 31 [15] => 27 [16] => 36 [17] => 16 [18] => 27 [19] => 25 [20] => 26 [21] => 37 [22] => 30 [23] => 33 [24] => 18 [25] => 40 [26] => 37 [27] => 21 [28] => 43 [29] => 46 [30] => 38 [31] => 18 [32] => 35 [33] => 23 [34] => 35 [35] => 35 [36] => 38 [37] => 29 [38] => 31 [39] => 43 [40] => 38 ) ) [lev] => Array ( [chapters] => Array ( [1] => 17 [2] => 16 [3] => 17 [4] => 35 [5] => 26 [6] => 23 [7] => 38 [8] => 36 [9] => 24 [10] => 20 [11] => 47 [12] => 8 [13] => 59 [14] => 57 [15] => 33 [16] => 34 [17] => 16 [18] => 30 [19] => 37 [20] => 27 [21] => 24 [22] => 33 [23] => 44 [24] => 23 [25] => 55 [26] => 46 [27] => 34 ) ) [num] => Array ( [chapters] => Array ( [1] => 54 [2] => 34 [3] => 51 [4] => 49 [5] => 31 [6] => 27 [7] => 89 [8] => 26 [9] => 23 [10] => 36 [11] => 35 [12] => 16 [13] => 33 [14] => 45 [15] => 41 [16] => 35 [17] => 28 [18] => 32 [19] => 22 [20] => 29 [21] => 35 [22] => 41 [23] => 30 [24] => 25 [25] => 19 [26] => 65 [27] => 23 [28] => 31 [29] => 39 [30] => 17 [31] => 54 [32] => 42 [33] => 56 [34] => 29 [35] => 34 [36] => 13 ) ) [deu] => Array ( [chapters] => Array ( [1] => 46 [2] => 37 [3] => 29 [4] => 49 [5] => 33 [6] => 25 [7] => 26 [8] => 20 [9] => 29 [10] => 22 [11] => 32 [12] => 31 [13] => 19 [14] => 29 [15] => 23 [16] => 22 [17] => 20 [18] => 22 [19] => 21 [20] => 20 [21] => 23 [22] => 29 [23] => 26 [24] => 22 [25] => 19 [26] => 19 [27] => 26 [28] => 69 [29] => 28 [30] => 20 [31] => 30 [32] => 52 [33] => 29 [34] => 12 ) ) [jos] => Array ( [chapters] => Array ( [1] => 18 [2] => 24 [3] => 17 [4] => 24 [5] => 15 [6] => 27 [7] => 26 [8] => 35 [9] => 27 [10] => 43 [11] => 23 [12] => 24 [13] => 33 [14] => 15 [15] => 63 [16] => 10 [17] => 18 [18] => 28 [19] => 51 [20] => 9 [21] => 45 [22] => 34 [23] => 16 [24] => 33 ) ) [jdg] => Array ( [chapters] => Array ( [1] => 36 [2] => 23 [3] => 31 [4] => 24 [5] => 31 [6] => 40 [7] => 25 [8] => 35 [9] => 57 [10] => 18 [11] => 40 [12] => 15 [13] => 25 [14] => 20 [15] => 20 [16] => 31 [17] => 13 [18] => 31 [19] => 30 [20] => 48 [21] => 25 ) ) [ru] => Array ( [chapters] => Array ( [1] => 22 [2] => 23 [3] => 18 [4] => 22 ) ) [1sa] => Array ( [chapters] => Array ( [1] => 28 [2] => 36 [3] => 21 [4] => 22 [5] => 12 [6] => 21 [7] => 17 [8] => 22 [9] => 27 [10] => 27 [11] => 15 [12] => 25 [13] => 23 [14] => 52 [15] => 35 [16] => 23 [17] => 58 [18] => 30 [19] => 24 [20] => 42 [21] => 15 [22] => 23 [23] => 28 [24] => 23 [25] => 44 [26] => 25 [27] => 12 [28] => 25 [29] => 11 [30] => 31 [31] => 13 ) ) [2sa] => Array ( [chapters] => Array ( [1] => 27 [2] => 32 [3] => 39 [4] => 12 [5] => 25 [6] => 23 [7] => 29 [8] => 18 [9] => 13 [10] => 19 [11] => 27 [12] => 31 [13] => 39 [14] => 33 [15] => 37 [16] => 23 [17] => 29 [18] => 32 [19] => 44 [20] => 26 [21] => 22 [22] => 51 [23] => 39 [24] => 25 ) ) [1ki] => Array ( [chapters] => Array ( [1] => 53 [2] => 46 [3] => 28 [4] => 20 [5] => 32 [6] => 38 [7] => 51 [8] => 66 [9] => 28 [10] => 29 [11] => 43 [12] => 33 [13] => 34 [14] => 31 [15] => 34 [16] => 34 [17] => 24 [18] => 46 [19] => 21 [20] => 43 [21] => 29 [22] => 54 ) ) [2ki] => Array ( [chapters] => Array ( [1] => 18 [2] => 25 [3] => 27 [4] => 44 [5] => 27 [6] => 33 [7] => 20 [8] => 29 [9] => 37 [10] => 36 [11] => 20 [12] => 22 [13] => 25 [14] => 29 [15] => 38 [16] => 20 [17] => 41 [18] => 37 [19] => 37 [20] => 21 [21] => 26 [22] => 20 [23] => 37 [24] => 20 [25] => 30 ) ) [1ch] => Array ( [chapters] => Array ( [1] => 53 [2] => 55 [3] => 24 [4] => 43 [5] => 41 [6] => 66 [7] => 40 [8] => 40 [9] => 44 [10] => 14 [11] => 47 [12] => 41 [13] => 14 [14] => 17 [15] => 29 [16] => 43 [17] => 27 [18] => 17 [19] => 19 [20] => 8 [21] => 30 [22] => 19 [23] => 32 [24] => 31 [25] => 31 [26] => 32 [27] => 34 [28] => 21 [29] => 30 ) ) [2ch] => Array ( [chapters] => Array ( [1] => 18 [2] => 17 [3] => 17 [4] => 22 [5] => 14 [6] => 42 [7] => 22 [8] => 18 [9] => 31 [10] => 19 [11] => 23 [12] => 16 [13] => 23 [14] => 14 [15] => 19 [16] => 14 [17] => 19 [18] => 34 [19] => 11 [20] => 37 [21] => 20 [22] => 12 [23] => 21 [24] => 27 [25] => 28 [26] => 23 [27] => 9 [28] => 27 [29] => 36 [30] => 27 [31] => 21 [32] => 33 [33] => 25 [34] => 33 [35] => 27 [36] => 23 ) ) [ezr] => Array ( [chapters] => Array ( [1] => 11 [2] => 70 [3] => 13 [4] => 24 [5] => 17 [6] => 22 [7] => 28 [8] => 36 [9] => 15 [10] => 44 ) ) [neh] => Array ( [chapters] => Array ( [1] => 11 [2] => 20 [3] => 38 [4] => 17 [5] => 19 [6] => 19 [7] => 72 [8] => 18 [9] => 37 [10] => 40 [11] => 36 [12] => 47 [13] => 31 ) ) [tob] => Array ( [chapters] => Array ( [1] => 22 [2] => 14 [3] => 17 [4] => 21 [5] => 23 [6] => 19 [7] => 16 [8] => 21 [9] => 6 [10] => 14 [11] => 19 [12] => 22 [13] => 18 [14] => 15 ) ) [jdt] => Array ( [chapters] => Array ( [1] => 16 [2] => 28 [3] => 10 [4] => 15 [5] => 24 [6] => 21 [7] => 32 [8] => 36 [9] => 14 [10] => 23 [11] => 23 [12] => 20 [13] => 20 [14] => 19 [15] => 14 [16] => 25 ) ) [est] => Array ( [chapters] => Array ( [1] => 22 [2] => 23 [3] => 15 [4] => 17 [5] => 14 [6] => 14 [7] => 10 [8] => 17 [9] => 32 [10] => 3 ) ) [1mach] => Array ( [chapters] => Array ( [1] => 64 [2] => 70 [3] => 60 [4] => 61 [5] => 68 [6] => 63 [7] => 50 [8] => 32 [9] => 73 [10] => 89 [11] => 74 [12] => 53 [13] => 53 [14] => 49 [15] => 41 [16] => 24 ) ) [2mach] => Array ( [chapters] => Array ( [1] => 36 [2] => 32 [3] => 40 [4] => 50 [5] => 27 [6] => 31 [7] => 42 [8] => 36 [9] => 29 [10] => 38 [11] => 38 [12] => 45 [13] => 26 [14] => 46 [15] => 39 ) ) [hi] => Array ( [chapters] => Array ( [1] => 22 [2] => 13 [3] => 26 [4] => 21 [5] => 27 [6] => 30 [7] => 21 [8] => 22 [9] => 35 [10] => 22 [11] => 20 [12] => 25 [13] => 28 [14] => 22 [15] => 35 [16] => 22 [17] => 16 [18] => 21 [19] => 29 [20] => 29 [21] => 34 [22] => 30 [23] => 17 [24] => 17 [25] => 6 [26] => 14 [27] => 24 [28] => 28 [29] => 25 [30] => 31 [31] => 40 [32] => 21 [33] => 33 [34] => 37 [35] => 16 [36] => 33 [37] => 24 [38] => 41 [39] => 30 [40] => 32 [41] => 26 [42] => 17 ) ) [ps] => Array ( [chapters] => Array ( [1] => 6 [2] => 12 [3] => 9 [4] => 9 [5] => 13 [6] => 11 [7] => 18 [8] => 10 [9] => 21 [10] => 18 [11] => 7 [12] => 9 [13] => 6 [14] => 7 [15] => 5 [16] => 11 [17] => 15 [18] => 51 [19] => 15 [20] => 10 [21] => 14 [22] => 32 [23] => 6 [24] => 10 [25] => 22 [26] => 12 [27] => 14 [28] => 9 [29] => 11 [30] => 13 [31] => 25 [32] => 11 [33] => 22 [34] => 23 [35] => 28 [36] => 13 [37] => 40 [38] => 23 [39] => 14 [40] => 18 [41] => 14 [42] => 12 [43] => 5 [44] => 27 [45] => 18 [46] => 12 [47] => 10 [48] => 15 [49] => 21 [50] => 23 [51] => 21 [52] => 11 [53] => 7 [54] => 9 [55] => 24 [56] => 14 [57] => 12 [58] => 12 [59] => 18 [60] => 14 [61] => 9 [62] => 13 [63] => 12 [64] => 11 [65] => 14 [66] => 20 [67] => 8 [68] => 36 [69] => 37 [70] => 6 [71] => 24 [72] => 20 [73] => 28 [74] => 23 [75] => 11 [76] => 13 [77] => 21 [78] => 72 [79] => 13 [80] => 20 [81] => 17 [82] => 8 [83] => 19 [84] => 13 [85] => 14 [86] => 17 [87] => 7 [88] => 19 [89] => 53 [90] => 17 [91] => 16 [92] => 16 [93] => 5 [94] => 23 [95] => 11 [96] => 13 [97] => 12 [98] => 9 [99] => 9 [100] => 5 [101] => 8 [102] => 29 [103] => 22 [104] => 35 [105] => 45 [106] => 48 [107] => 43 [108] => 14 [109] => 31 [110] => 7 [111] => 10 [112] => 10 [113] => 9 [114] => 8 [115] => 18 [116] => 19 [117] => 2 [118] => 29 [119] => 176 [120] => 7 [121] => 8 [122] => 9 [123] => 4 [124] => 8 [125] => 5 [126] => 6 [127] => 5 [128] => 6 [129] => 8 [130] => 8 [131] => 3 [132] => 18 [133] => 3 [134] => 3 [135] => 21 [136] => 26 [137] => 9 [138] => 8 [139] => 24 [140] => 14 [141] => 10 [142] => 8 [143] => 12 [144] => 15 [145] => 21 [146] => 10 [147] => 20 [148] => 14 [149] => 9 [150] => 6 ) ) [pr] => Array ( [chapters] => Array ( [1] => 33 [2] => 22 [3] => 35 [4] => 27 [5] => 23 [6] => 35 [7] => 27 [8] => 36 [9] => 18 [10] => 32 [11] => 31 [12] => 28 [13] => 25 [14] => 35 [15] => 33 [16] => 33 [17] => 28 [18] => 24 [19] => 29 [20] => 30 [21] => 31 [22] => 29 [23] => 35 [24] => 34 [25] => 28 [26] => 28 [27] => 27 [28] => 28 [29] => 27 [30] => 33 [31] => 31 ) ) [ecc] => Array ( [chapters] => Array ( [1] => 18 [2] => 26 [3] => 22 [4] => 17 [5] => 19 [6] => 12 [7] => 29 [8] => 17 [9] => 18 [10] => 20 [11] => 10 [12] => 14 ) ) [ss] => Array ( [chapters] => Array ( [1] => 17 [2] => 17 [3] => 11 [4] => 16 [5] => 16 [6] => 12 [7] => 14 [8] => 14 ) ) [mdr] => Array ( [chapters] => Array ( [1] => 16 [2] => 24 [3] => 19 [4] => 20 [5] => 23 [6] => 25 [7] => 30 [8] => 21 [9] => 18 [10] => 21 [11] => 26 [12] => 27 [13] => 19 [14] => 31 [15] => 19 [16] => 29 [17] => 20 [18] => 25 [19] => 22 ) ) [syr] => Array ( [chapters] => Array ( [0​] => 35 [1] => 30 [2] => 18 [3] => 31 [4] => 31 [5] => 15 [6] => 37 [7] => 36 [8] => 19 [9] => 18 [10] => 31 [11] => 34 [12] => 18 [13] => 26 [14] => 27 [15] => 20 [16] => 30 [17] => 32 [18] => 33 [19] => 30 [20] => 31 [21] => 28 [22] => 27 [23] => 27 [24] => 34 [25] => 26 [26] => 29 [27] => 30 [28] => 26 [29] => 28 [30] => 25 [31] => 31 [32] => 24 [33] => 33 [34] => 26 [35] => 24 [36] => 27 [37] => 31 [38] => 34 [39] => 35 [40] => 30 [41] => 27 [42] => 25 [43] => 33 [44] => 23 [45] => 26 [46] => 20 [47] => 25 [48] => 25 [49] => 16 [50] => 29 [51] => 29 ) ) )

Array ( [isa] => Array ( [chapters] => Array ( [1] => 31 [2] => 22 [3] => 26 [4] => 6 [5] => 30 [6] => 13 [7] => 25 [8] => 23 [9] => 20 [10] => 34 [11] => 16 [12] => 6 [13] => 22 [14] => 32 [15] => 9 [16] => 14 [17] => 14 [18] => 7 [19] => 25 [20] => 6 [21] => 17 [22] => 25 [23] => 18 [24] => 23 [25] => 12 [26] => 21 [27] => 13 [28] => 29 [29] => 24 [30] => 33 [31] => 9 [32] => 20 [33] => 24 [34] => 17 [35] => 10 [36] => 22 [37] => 38 [38] => 20 [39] => 8 [40] => 31 [41] => 29 [42] => 25 [43] => 28 [44] => 28 [45] => 25 [46] => 13 [47] => 15 [48] => 22 [49] => 26 [50] => 11 [51] => 23 [52] => 15 [53] => 12 [54] => 17 [55] => 13 [56] => 12 [57] => 21 [58] => 14 [59] => 21 [60] => 22 [61] => 11 [62] => 12 [63] => 19 [64] => 11 [65] => 25 [66] => 24 ) ) [jer] => Array ( [chapters] => Array ( [1] => 19 [2] => 37 [3] => 25 [4] => 31 [5] => 31 [6] => 30 [7] => 34 [8] => 23 [9] => 25 [10] => 25 [11] => 23 [12] => 17 [13] => 27 [14] => 22 [15] => 21 [16] => 21 [17] => 27 [18] => 23 [19] => 15 [20] => 18 [21] => 14 [22] => 30 [23] => 40 [24] => 10 [25] => 38 [26] => 24 [27] => 22 [28] => 17 [29] => 32 [30] => 24 [31] => 40 [32] => 44 [33] => 26 [34] => 22 [35] => 19 [36] => 32 [37] => 21 [38] => 27 [39] => 18 [40] => 16 [41] => 18 [42] => 22 [43] => 13 [44] => 30 [45] => 5 [46] => 28 [47] => 7 [48] => 47 [49] => 39 [50] => 46 [51] => 64 [52] => 34 ) ) [tr] => Array ( [chapters] => Array ( [1] => 22 [2] => 22 [3] => 66 [4] => 22 [5] => 22 ) ) [bar] => Array ( [chapters] => Array ( [1] => 22 [2] => 35 [3] => 38 [4] => 37 [5] => 9 [6] => 72 ) ) [ez] => Array ( [chapters] => Array ( [1] => 28 [2] => 10 [3] => 27 [4] => 17 [5] => 17 [6] => 14 [7] => 27 [8] => 18 [9] => 11 [10] => 22 [11] => 25 [12] => 28 [13] => 23 [14] => 23 [15] => 8 [16] => 63 [17] => 24 [18] => 32 [19] => 14 [20] => 44 [21] => 37 [22] => 31 [23] => 49 [24] => 27 [25] => 17 [26] => 21 [27] => 36 [28] => 26 [29] => 21 [30] => 26 [31] => 18 [32] => 32 [33] => 33 [34] => 31 [35] => 15 [36] => 38 [37] => 28 [38] => 23 [39] => 29 [40] => 49 [41] => 26 [42] => 20 [43] => 27 [44] => 31 [45] => 25 [46] => 24 [47] => 23 [48] => 35 ) ) [dn] => Array ( [chapters] => Array ( [1] => 21 [2] => 49 [3] => 99 [4] => 34 [5] => 30 [6] => 29 [7] => 28 [8] => 27 [9] => 27 [10] => 19 [11] => 45 [12] => 13 [13] => 64 [14] => 42 ) ) [hos] => Array ( [chapters] => Array ( [1] => 9 [2] => 25 [3] => 5 [4] => 19 [5] => 15 [6] => 11 [7] => 16 [8] => 14 [9] => 17 [10] => 15 [11] => 11 [12] => 15 [13] => 15 [14] => 10 ) ) [joel] => Array ( [chapters] => Array ( [1] => 20 [2] => 27 [3] => 5 ) ) [amos] => Array ( [chapters] => Array ( [1] => 15 [2] => 16 [3] => 15 [4] => 13 [5] => 27 [6] => 14 [7] => 17 [8] => 14 [9] => 15 ) ) [ob] => Array ( [chapters] => Array ( [1] => 21 ) ) [jnh] => Array ( [chapters] => Array ( [1] => 16 [2] => 11 [3] => 10 [4] => 11 ) ) [mic] => Array ( [chapters] => Array ( [1] => 16 [2] => 13 [3] => 12 [4] => 14 [5] => 14 [6] => 16 [7] => 20 ) ) [nach] => Array ( [chapters] => Array ( [1] => 14 [2] => 14 [3] => 19 ) ) [hab] => Array ( [chapters] => Array ( [1] => 17 [2] => 20 [3] => 19 ) ) [zep] => Array ( [chapters] => Array ( [1] => 18 [2] => 15 [3] => 20 ) ) [hag] => Array ( [chapters] => Array ( [1] => 15 [2] => 23 ) ) [zec] => Array ( [chapters] => Array ( [1] => 17 [2] => 17 [3] => 10 [4] => 14 [5] => 11 [6] => 15 [7] => 14 [8] => 23 [9] => 17 [10] => 12 [11] => 17 [12] => 14 [13] => 9 [14] => 21 ) ) [mal] => Array ( [chapters] => Array ( [1] => 14 [2] => 17 [3] => 24 ) ) )

Array ( [mt] => Array ( [chapters] => Array ( [1] => 25 [2] => 23 [3] => 17 [4] => 25 [5] => 48 [6] => 34 [7] => 29 [8] => 34 [9] => 38 [10] => 42 [11] => 30 [12] => 50 [13] => 58 [14] => 36 [15] => 39 [16] => 28 [17] => 27 [18] => 35 [19] => 30 [20] => 34 [21] => 46 [22] => 46 [23] => 39 [24] => 51 [25] => 46 [26] => 75 [27] => 66 [28] => 20 ) ) [mk] => Array ( [chapters] => Array ( [1] => 45 [2] => 28 [3] => 35 [4] => 41 [5] => 43 [6] => 56 [7] => 37 [8] => 38 [9] => 50 [10] => 52 [11] => 33 [12] => 44 [13] => 37 [14] => 72 [15] => 47 [16] => 20 ) ) [lk] => Array ( [chapters] => Array ( [1] => 80 [2] => 52 [3] => 38 [4] => 44 [5] => 39 [6] => 49 [7] => 50 [8] => 56 [9] => 62 [10] => 42 [11] => 54 [12] => 59 [13] => 35 [14] => 35 [15] => 32 [16] => 31 [17] => 37 [18] => 43 [19] => 48 [20] => 47 [21] => 38 [22] => 71 [23] => 56 [24] => 53 ) ) [jn] => Array ( [chapters] => Array ( [1] => 51 [2] => 25 [3] => 36 [4] => 54 [5] => 47 [6] => 71 [7] => 53 [8] => 59 [9] => 41 [10] => 42 [11] => 57 [12] => 50 [13] => 38 [14] => 31 [15] => 27 [16] => 33 [17] => 26 [18] => 40 [19] => 42 [20] => 31 [21] => 25 ) ) [ac] => Array ( [chapters] => Array ( [1] => 26 [2] => 47 [3] => 26 [4] => 37 [5] => 42 [6] => 15 [7] => 60 [8] => 40 [9] => 43 [10] => 48 [11] => 30 [12] => 25 [13] => 52 [14] => 28 [15] => 41 [16] => 40 [17] => 34 [18] => 28 [19] => 40 [20] => 38 [21] => 40 [22] => 30 [23] => 35 [24] => 27 [25] => 27 [26] => 32 [27] => 44 [28] => 31 ) ) [ro] => Array ( [chapters] => Array ( [1] => 32 [2] => 29 [3] => 31 [4] => 25 [5] => 21 [6] => 23 [7] => 25 [8] => 39 [9] => 33 [10] => 21 [11] => 36 [12] => 21 [13] => 14 [14] => 23 [15] => 33 [16] => 27 ) ) [1co] => Array ( [chapters] => Array ( [1] => 31 [2] => 16 [3] => 23 [4] => 21 [5] => 13 [6] => 20 [7] => 40 [8] => 13 [9] => 27 [10] => 33 [11] => 34 [12] => 31 [13] => 13 [14] => 40 [15] => 58 [16] => 24 ) ) [2co] => Array ( [chapters] => Array ( [1] => 24 [2] => 17 [3] => 18 [4] => 18 [5] => 21 [6] => 18 [7] => 16 [8] => 24 [9] => 15 [10] => 18 [11] => 33 [12] => 21 [13] => 13 ) ) [gal] => Array ( [chapters] => Array ( [1] => 24 [2] => 21 [3] => 29 [4] => 31 [5] => 26 [6] => 18 ) ) [eph] => Array ( [chapters] => Array ( [1] => 23 [2] => 22 [3] => 21 [4] => 32 [5] => 33 [6] => 24 ) ) [php] => Array ( [chapters] => Array ( [1] => 30 [2] => 30 [3] => 21 [4] => 23 ) ) [col] => Array ( [chapters] => Array ( [1] => 29 [2] => 23 [3] => 25 [4] => 18 ) ) [1th] => Array ( [chapters] => Array ( [1] => 10 [2] => 20 [3] => 13 [4] => 18 [5] => 28 ) ) [2th] => Array ( [chapters] => Array ( [1] => 12 [2] => 17 [3] => 18 ) ) [1tm] => Array ( [chapters] => Array ( [1] => 20 [2] => 15 [3] => 16 [4] => 16 [5] => 25 [6] => 21 ) ) [2tm] => Array ( [chapters] => Array ( [1] => 18 [2] => 26 [3] => 17 [4] => 22 ) ) [tyt] => Array ( [chapters] => Array ( [1] => 16 [2] => 15 [3] => 15 ) ) [phm] => Array ( [chapters] => Array ( [1] => 25 ) ) [hebr] => Array ( [chapters] => Array ( [1] => 14 [2] => 18 [3] => 19 [4] => 16 [5] => 14 [6] => 20 [7] => 28 [8] => 13 [9] => 28 [10] => 39 [11] => 40 [12] => 29 [13] => 25 ) ) [jas] => Array ( [chapters] => Array ( [1] => 27 [2] => 26 [3] => 18 [4] => 17 [5] => 20 ) ) [1pe] => Array ( [chapters] => Array ( [1] => 25 [2] => 25 [3] => 22 [4] => 19 [5] => 14 ) ) [2pe] => Array ( [chapters] => Array ( [1] => 21 [2] => 22 [3] => 18 ) ) [1jn] => Array ( [chapters] => Array ( [1] => 10 [2] => 29 [3] => 24 [4] => 21 [5] => 21 ) ) [2jn] => Array ( [chapters] => Array ( [1] => 13 ) ) [3jn] => Array ( [chapters] => Array ( [1] => 15 ) ) [jude] => Array ( [chapters] => Array ( [1] => 25 ) ) [rev] => Array ( [chapters] => Array ( [1] => 20 [2] => 29 [3] => 22 [4] => 11 [5] => 14 [6] => 17 [7] => 17 [8] => 13 [9] => 21 [10] => 11 [11] => 19 [12] => 18 [13] => 18 [14] => 20 [15] => 8 [16] => 21 [17] => 18 [18] => 24 [19] => 21 [20] => 15 [21] => 27 [22] => 21 ) ) )

Array ( [jos] => Array ( [chapters] => Array ( [15] => Array ( [59] => Array ( [0] => 59a [1] => 59b ) ) ) ) [jdg] => Array ( [chapters] => Array ( [13] => Array ( [16] => Array ( [0] => 16b [1] => 16a ) ) ) ) [1ki] => Array ( [chapters] => Array ( [15] => Array ( [6] => Array ( ) ) ) ) [tob] => Array ( [chapters] => Array ( [9] => Array ( [3] => Array ( ) ) ) ) [syr] => Array ( [chapters] => Array ( [17] => Array ( [21] => Array ( ) ) [22] => Array ( [7] => Array ( ) [8] => Array ( ) ) ) ) [isa] => Array ( [chapters] => Array ( [7] => Array ( [8] => Array ( [0] => 8a [1] => 9a ) [9] => Array ( [0] => 8b [1] => 9b ) ) [33] => Array ( [21] => Array ( [0] => 21 [1] => 23a ) [23] => Array ( [0] => 23b ) ) [41] => Array ( [6] => Array ( ) [7] => Array ( ) ) ) ) [jer] => Array ( [chapters] => Array ( [5] => Array ( [14] => Array ( [0] => 14a [1] => 13b [2] => 14b ) ) ) ) [hag] => Array ( [chapters] => Array ( [1] => Array ( [7] => Array ( [0] => 7a ) [8] => Array ( [0] => 8 [1] => 7b ) ) ) ) [mt] => Array ( [chapters] => Array ( [23] => Array ( [14] => Array ( ) ) ) ) [mk] => Array ( [chapters] => Array ( [9] => Array ( [44] => Array ( ) [46] => Array ( ) ) [11] => Array ( [26] => Array ( ) ) ) ) )
```

**Resources::CHAPTERS** - array (position on the list is a number of chapter and value is the number of the last verse)

**Resources::EXCEPTIONS** - array of exceptions, verses that are lacking (or extra added) for some reason in the text (negative and positive exceptions)

f.e

```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client as GuzzleClient;
use JaroslawZielinski\Torah\Bible\Service;
use JaroslawZielinski\Torah\Bible\Torah;
use JaroslawZielinski\Torah\Bible\TorahValidator;
use JaroslawZielinski\Torah\Translations\Resources;
use JaroslawZielinski\Torah\Bible\Service\Offline\Repository;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('Torah');
$logger->pushHandler(new StreamHandler(__DIR__ . '/Torah.log', Logger::INFO));
$onlineClient = new Service\Online\Client($logger, new GuzzleClient());
$offlineClient = new Service\Offline\Client(new Repository());
$options = ['cache' => true];
$torah = new Torah(
    new TorahValidator(),
    new Service($onlineClient, $offlineClient),
    $options
);
$translation = $torah->getResourceByTranslationCode(Resources::TORAH_TRANSLATION_BT);
$books = $translation->getBooks();
$joz = $books[Resources::TANAKH][Resources::TORAH_BOOKS_JOZ];
print_r($joz[Resources::CHAPTERS]);

```

Output:
```text
Array ( [1] => 18 [2] => 24 [3] => 17 [4] => 24 [5] => 15 [6] => 27 [7] => 26 [8] => 35 [9] => 27 [10] => 43 [11] => 23 [12] => 24 [13] => 33 [14] => 15 [15] => 63 [16] => 10 [17] => 18 [18] => 28 [19] => 51 [20] => 9 [21] => 45 [22] => 34 [23] => 16 [24] => 33 )
```
