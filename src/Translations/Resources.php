<?php

declare(strict_types=1);

namespace JaroslawZielinski\Torah\Translations;

use JaroslawZielinski\Torah\Bible\ServiceInterface;
use JaroslawZielinski\Torah\Bible\Torah\Siglum;
use JaroslawZielinski\Torah\Bible\TorahInterface;
use JaroslawZielinski\Torah\Bible\Torah\Text;

abstract class Resources implements
    ResourcesInterface,
    TorahInterface,
    ServiceInterface
{
    //books
    public const TORAH_BOOKS_RDZ = 'gen';
    public const TORAH_BOOKS_WJ = 'ex';
    public const TORAH_BOOKS_KPL = 'lev';
    public const TORAH_BOOKS_LB = 'num';
    public const TORAH_BOOKS_PWT = 'deu';
    public const TORAH_BOOKS_JOZ = 'jos';
    public const TORAH_BOOKS_SDZ = 'jdg';
    public const TORAH_BOOKS_RT = 'ru';
    public const TORAH_BOOKS_1SM = '1sa';
    public const TORAH_BOOKS_2SM = '2sa';
    public const TORAH_BOOKS_1KRL = '1ki';
    public const TORAH_BOOKS_2KRL = '2ki';
    public const TORAH_BOOKS_1KRN = '1ch';
    public const TORAH_BOOKS_2KRN = '2ch';
    public const TORAH_BOOKS_EZD = 'ezr';
    public const TORAH_BOOKS_NE = 'neh';
    public const TORAH_BOOKS_TB = 'tob';
    public const TORAH_BOOKS_JDT = 'jdt';
    public const TORAH_BOOKS_EST = 'est';
    public const TORAH_BOOKS_1MCH = '1mach';
    public const TORAH_BOOKS_2MCH = '2mach';
    public const TORAH_BOOKS_HI = 'hi';
    public const TORAH_BOOKS_PS = 'ps';
    public const TORAH_BOOKS_PRZ = 'pr';
    public const TORAH_BOOKS_KOH = 'ecc';
    public const TORAH_BOOKS_PNP = 'ss';
    public const TORAH_BOOKS_MDR = 'mdr';
    public const TORAH_BOOKS_SYR = 'syr';
    public const TORAH_BOOKS_IZ = 'isa';
    public const TORAH_BOOKS_JR = 'jer';
    public const TORAH_BOOKS_LM = 'tr';
    public const TORAH_BOOKS_BA = 'bar';
    public const TORAH_BOOKS_EZ = 'ez';
    public const TORAH_BOOKS_DN = 'dn';
    public const TORAH_BOOKS_OZ = 'hos';
    public const TORAH_BOOKS_JL = 'joel';
    public const TORAH_BOOKS_AM = 'amos';
    public const TORAH_BOOKS_AB = 'ob';
    public const TORAH_BOOKS_JON = 'jnh';
    public const TORAH_BOOKS_MI = 'mic';
    public const TORAH_BOOKS_NA = 'nach';
    public const TORAH_BOOKS_HA = 'hab';
    public const TORAH_BOOKS_SO = 'zep';
    public const TORAH_BOOKS_AG = 'hag';
    public const TORAH_BOOKS_ZA = 'zec';
    public const TORAH_BOOKS_ML = 'mal';
    public const TORAH_BOOKS_MT = 'mt';
    public const TORAH_BOOKS_MK = 'mk';
    public const TORAH_BOOKS_LK = 'lk';
    public const TORAH_BOOKS_J = 'jn';
    public const TORAH_BOOKS_DZ = 'ac';
    public const TORAH_BOOKS_RZ = 'ro';
    public const TORAH_BOOKS_1KOR = '1co';
    public const TORAH_BOOKS_2KOR = '2co';
    public const TORAH_BOOKS_GA = 'gal';
    public const TORAH_BOOKS_EF = 'eph';
    public const TORAH_BOOKS_FLP = 'php';
    public const TORAH_BOOKS_KOL = 'col';
    public const TORAH_BOOKS_1TES = '1th';
    public const TORAH_BOOKS_2TES = '2th';
    public const TORAH_BOOKS_1TM = '1tm';
    public const TORAH_BOOKS_2TM = '2tm';
    public const TORAH_BOOKS_TT = 'tyt';
    public const TORAH_BOOKS_FLM = 'phm';
    public const TORAH_BOOKS_HBR = 'hebr';
    public const TORAH_BOOKS_JK = 'jas';
    public const TORAH_BOOKS_1P = '1pe';
    public const TORAH_BOOKS_2P = '2pe';
    public const TORAH_BOOKS_1J = '1jn';
    public const TORAH_BOOKS_2J = '2jn';
    public const TORAH_BOOKS_3J = '3jn';
    public const TORAH_BOOKS_JUD = 'jude';
    public const TORAH_BOOKS_AP = 'rev';
    // books descriptions
    public const TORAH_BOOKS = [
        self::TORAH_BOOKS_RDZ => [
            'pl' => 'Ks. Rodzaju',
            'en' => 'Genesis',
            '1' => 'Rdz',
            '2' => 'Rodz',
            '3' => 'Gen',
            '4' => 'IMoj',
            '5' => '1Moj',
            '6' => '1M'
        ],
        self::TORAH_BOOKS_WJ => [
            'pl' => 'Ks. Wyjścia',
            'en' => 'Exodus',
            '1' => 'Wj',
            '2' => 'Wyj',
            '3' => 'Ex',
            '4' => 'IIMoj',
            '5' => '2Moj',
            '6' => '2M'
        ],
        self::TORAH_BOOKS_KPL => [
            'pl' => 'Ks. Kapłańska',
            'en' => 'Leviticus',
            '1' => 'Kpł',
            '2' => 'Kpl',
            '3' => 'Kapł',
            '4' => 'Kapl',
            '5' => 'Lev',
            '6' => 'IIIMoj',
            '7' => '3Moj',
            '8' => '3M'
        ],
        self::TORAH_BOOKS_LB => [
            'pl' => 'Ks. Liczb',
            'en' => 'Numbers',
            '1' => 'Lb',
            '2' => 'Num',
            '3' => 'Nu',
            '4' => 'IVMoj',
            '5' => '4Moj',
            '6' => '4M'
        ],
        self::TORAH_BOOKS_PWT => [
            'pl' => 'Ks. Powt.Prawa',
            'en' => 'Deuteronomy',
            '1' => 'Pwt',
            '2' => 'Deu',
            '3' => 'Dt',
            '4' => 'VMoj',
            '5' => '5Moj',
            '6' => '5M'
        ],
        self::TORAH_BOOKS_JOZ => [
            'pl' => 'Ks. Jozuego',
            'en' => 'Joshua',
            '1' => 'Joz',
            '2' => 'Jos'
        ],
        self::TORAH_BOOKS_SDZ => [
            'pl' => 'Ks. Sędziów',
            'en' => 'Judges',
            '1' => 'Sdz',
            '2' => 'Sędz',
            '3' => 'Sedz',
            '4' => 'Jdg'
        ],
        self::TORAH_BOOKS_RT => [
            'pl' => 'Ks. Rut',
            'en' => 'Ruth',
            '1' => 'Rt',
            '2' => 'Rut',
            '3' => 'Ru'
        ],
        self::TORAH_BOOKS_1SM => [
            'pl' => '1 Ks. Samuela',
            'en' => '1 Samuel',
            '1' => '1Sm',
            '2' => '1Sam',
            '3' => '1Sa'
        ],
        self::TORAH_BOOKS_2SM => [
            'pl' => '2 Ks. Samuela',
            'en' => '2 Samuel',
            '1' => '2Sm',
            '2' => '2Sam',
            '3' => '2Sa'
        ],
        self::TORAH_BOOKS_1KRL => [
            'pl' => '1 Ks. Królewska',
            'en' => '1 Kings',
            '1' => '1Krl',
            '2' => '1Król',
            '3' => '1Krol',
            '4' => '1Ki'
        ],
        self::TORAH_BOOKS_2KRL => [
            'pl' => '2 Ks. Królewska',
            'en' => '2 Kings',
            '1' => '2Krl',
            '2' => '2Król',
            '3' => '2Krol',
            '4' => '2Ki'
        ],
        self::TORAH_BOOKS_1KRN => [
            'pl' => '1 Ks. Kronik',
            'en' => '1 Chronicles',
            '1' => '1Krn',
            '2' => '1Kron',
            '3' => '1Ch'
        ],
        self::TORAH_BOOKS_2KRN => [
            'pl' => '2 Ks. Kronik',
            'en' => '2 Chronicles',
            '1' => '2Krn',
            '2' => '2Kron',
            '3' => '2Ch'
        ],
        self::TORAH_BOOKS_EZD => [
            'pl' => 'Ks. Ezdrasza',
            'en' => 'Ezra',
            '1' => 'Ezd',
            '2' => 'Ezdr',
            '3' => 'Ezr'
        ],
        self::TORAH_BOOKS_NE => [
            'pl' => 'Ks. Nehemiasza',
            'en' => 'Nehemiah',
            '1' => 'Ne',
            '2' => 'Neh'
        ],
        self::TORAH_BOOKS_TB => [
            'pl' => 'Ks. Tobiasza (w)',
            'en' => 'Tobit',
            '1' => 'Tb',
            '2' => 'Tob'
        ],
        self::TORAH_BOOKS_JDT => [
            'pl' => 'Ks. Judyty (w)',
            'en' => 'Judith',
            '1' => 'Jdt',
            '2' => 'Judyty'
        ],
        self::TORAH_BOOKS_EST => [
            'pl' => 'Ks. Estery',
            'en' => 'Esther',
            '1' => 'Est',
            '2' => 'Estery'
        ],
        self::TORAH_BOOKS_1MCH => [
            'pl' => '1 Ks. Machabejska (w)',
            'en' => '1 Maccabees',
            '1' => '1Mch',
            '2' => '1Mach'
        ],
        self::TORAH_BOOKS_2MCH => [
            'pl' => '2 Ks. Machabejska (w)',
            'en' => '2 Maccabees',
            '1' => '2Mch',
            '2' => '2Mach'
        ],
        self::TORAH_BOOKS_HI => [
            'pl' => 'Ks. Hioba',
            'en' => 'Job',
            '1' => 'Job',
            '2' => 'Hioba',
            '3' => 'Hiob',
            '4' => 'Hi'
        ],
        self::TORAH_BOOKS_PS => [
            'pl' => 'Ks. Psalmów',
            'en' => 'Psalms',
            '1' => 'Ps',
            '2' => 'Psalmy',
            '3' => 'Psalm'
        ],
        self::TORAH_BOOKS_PRZ => [
            'pl' => 'Ks. Przysłów',
            'en' => 'Proverbs',
            '1' => 'Prz',
            '2' => 'Przy',
            '3' => 'Pr'
        ],
        self::TORAH_BOOKS_KOH => [
            'pl' => 'Ks. Koheleta',
            'en' => 'Ecclesiastes',
            '1' => 'Koh',
            '2' => 'Kohelet',
            '3' => 'Ekl',
            '4' => 'Ecc'
        ],
        self::TORAH_BOOKS_PNP => [
            'pl' => 'Pieśń nad pieśniami',
            'en' => 'Song of Songs',
            '1' => 'PNP',
            '2' => 'SS'
        ],
        self::TORAH_BOOKS_MDR => [
            'pl' => 'Ks. Mądrości (w)',
            'en' => 'Wisdom',
            '1' => 'Mdr',
            '2' => 'Mądr',
            '3' => 'Madr'
        ],
        self::TORAH_BOOKS_SYR => [
            'pl' => 'Mądrość Syracha (w)',
            'en' => 'Sirach',
            '1' => 'Syr',
            '2' => 'Syracha',
            '3' => 'Syrach'
        ],
        self::TORAH_BOOKS_IZ => [
            'pl' => 'Ks. Izajasza',
            'en' => 'Isaiah',
            '1' => 'Iz',
            '2' => 'Isa'
        ],
        self::TORAH_BOOKS_JR => [
            'pl' => 'Ks. Jeremiasza',
            'en' => 'Jeremiah',
            '1' => 'Jr',
            '2' => 'Jer'
        ],
        self::TORAH_BOOKS_LM => [
            'pl' => 'Lamentacje Jeremiasza',
            'en' => 'Lamentations',
            '1' => 'Lm',
            '2' => 'Lam',
            '3' => 'Tr',
            '4' => 'Treny',
            '5' => 'La'
        ],
        self::TORAH_BOOKS_BA => [
            'pl' => 'Ks. Barucha (w)',
            'en' => 'Baruch',
            '1' => 'Ba',
            '2' => 'Barucha',
            '3' => 'Bar'
        ],
        self::TORAH_BOOKS_EZ => [
            'pl' => 'Ks. Ezechiela',
            'en' => 'Ezekiel',
            '1' => 'Ez',
            '2' => 'Eze'
        ],
        self::TORAH_BOOKS_DN => [
            'pl' => 'Ks. Daniela',
            'en' => 'Daniel',
            '1' => 'Dn',
            '2' => 'Dan',
            '3' => 'Da'
        ],
        self::TORAH_BOOKS_OZ => [
            'pl' => 'Ks. Ozeasza',
            'en' => 'Hosea',
            '1' => 'Oz',
            '2' => 'Hos'
        ],
        self::TORAH_BOOKS_JL => [
            'pl' => 'Ks. Joela',
            'en' => 'Joel',
            '1' => 'Jl',
            '2' => 'Joel'
        ],
        self::TORAH_BOOKS_AM => [
            'pl' => 'Ks. Amosa',
            'en' => 'Amos',
            '1' => 'Am',
            '2' => 'Amos'
        ],
        self::TORAH_BOOKS_AB => [
            'pl' => 'Ks. Abdiasza',
            'en' => 'Obadiah',
            '1' => 'Ab',
            '2' => 'Ob'
        ],
        self::TORAH_BOOKS_JON => [
            'pl' => 'Ks. Jonasza',
            'en' => 'Jonah',
            '1' => 'Jon',
            '2' => 'Jnh'
        ],
        self::TORAH_BOOKS_MI => [
            'pl' => 'Ks. Micheasza',
            'en' => 'Micah',
            '1' => 'Mi',
            '2' => 'Mich',
            '3' => 'Mic'
        ],
        self::TORAH_BOOKS_NA => [
            'pl' => 'Ks. Nahuma',
            'en' => 'Nahum',
            '1' => 'Na',
            '2' => 'Nach'
        ],
        self::TORAH_BOOKS_HA => [
            'pl' => 'Ks. Habakuka',
            'en' => 'Habakkuk',
            '1' => 'Hab'
        ],
        self::TORAH_BOOKS_SO => [
            'pl' => 'Ks. Sofoniasza',
            'en' => 'Zephaniah',
            '1' => 'So',
            '2' => 'Sof',
            '3' => 'Zep'
        ],
        self::TORAH_BOOKS_AG => [
            'pl' => 'Ks. Aggeusza',
            'en' => 'Haggai',
            '1' => 'Ag',
            '2' => 'Hag'
        ],
        self::TORAH_BOOKS_ZA => [
            'pl' => 'Ks. Zachariasza',
            'en' => 'Zechariah',
            '1' => 'Za',
            '2' => 'Zach',
            '3' => 'Zec'
        ],
        self::TORAH_BOOKS_ML => [
            'pl' => 'Ks. Malachiasza',
            'en' => 'Malachi',
            '1' => 'Ml',
            '2' => 'Mal'
        ],
        self::TORAH_BOOKS_MT => [
            'pl' => 'Ew. Mateusza',
            'en' => 'Matthew',
            '1' => 'Mt',
            '2' => '',
            '3' => 'Mat'
        ],
        self::TORAH_BOOKS_MK => [
            'pl' => 'Ew. Marka',
            'en' => 'Mark',
            '1' => 'Mk',
            '2' => '',
            '3' => 'Mar'
        ],
        self::TORAH_BOOKS_LK => [
            'pl' => 'Ew. Łukasza',
            'en' => 'Luke',
            '1' => 'Łk',
            '2' => 'Łuk',
            '3' => 'Lk',
            '4' => 'Luk'
        ],
        self::TORAH_BOOKS_J => [
            'pl' => 'Ew. Jana',
            'en' => 'John',
            '1' => 'Jan',
            '2' => 'J',
            '3' => 'Jn'
        ],
        self::TORAH_BOOKS_DZ => [
            'pl' => 'Dzieje Apost.',
            'en' => 'Acts',
            '1' => 'Dz',
            '2' => 'Act',
            '3' => 'Ac'
        ],
        self::TORAH_BOOKS_RZ => [
            'pl' => 'List do Rzymian',
            'en' => 'Romans',
            '1' => 'Rz',
            '2' => 'Rzym',
            '3' => 'Ro'
        ],
        self::TORAH_BOOKS_1KOR => [
            'pl' => '1 list do Koryntian',
            'en' => '1 Corinthians',
            '1' => '1Kor',
            '2' => '',
            '3' => '1Co'
        ],
        self::TORAH_BOOKS_2KOR => [
            'pl' => '2 list do Koryntian',
            'en' => '2 Corinthians',
            '1' => '2Kor',
            '2' => '',
            '3' => '2Co'
        ],
        self::TORAH_BOOKS_GA => [
            'pl' => 'List do Galatów',
            'en' => 'Galatians',
            '1' => 'Ga',
            '2' => '',
            '3' => 'Gal'
        ],
        self::TORAH_BOOKS_EF => [
            'pl' => 'List do Efezjan',
            'en' => 'Ephesians',
            '1' => 'Ef',
            '2' => 'Efez',
            '3' => 'Eph'
        ],
        self::TORAH_BOOKS_FLP => [
            'pl' => 'List do Filipian',
            'en' => 'Philippians',
            '1' => 'Flp',
            '2' => 'Fil',
            '3' => 'Fl',
            '4' => 'Php'
        ],
        self::TORAH_BOOKS_KOL => [
            'pl' => 'List do Kolosan',
            'en' => 'Colossians',
            '1' => 'Kol',
            '2' => '',
            '3' => 'Col'
        ],
        self::TORAH_BOOKS_1TES => [
            'pl' => '1 List do Tesaloniczan',
            'en' => '1 Thessalonians',
            '1' => '1Tes',
            '2' => '',
            '3' => '1Th'
        ],
        self::TORAH_BOOKS_2TES => [
            'pl' => '2 List do Tesaloniczan',
            'en' => '2 Thessalonians',
            '1' => '2Tes',
            '2' => '',
            '3' => '2Th'
        ],
        self::TORAH_BOOKS_1TM => [
            'pl' => '1 List do Tymoteusza',
            'en' => '1 Timothy',
            '1' => '1Tm',
            '2' => '1Tym',
            '3' => '1Ti'
        ],
        self::TORAH_BOOKS_2TM => [
            'pl' => '2 List do Tymoteusza',
            'en' => '2 Timothy',
            '1' => '2Tm',
            '2' => '2Tym',
            '3' => '2Ti'
        ],
        self::TORAH_BOOKS_TT => [
            'pl' => 'List do Tytusa',
            'en' => 'Titus',
            '1' => 'Tt',
            '2' => 'Tyt',
            '3' => 'Tit'
        ],
        self::TORAH_BOOKS_FLM => [
            'pl' => 'List do Filemona',
            'en' => 'Philemon',
            '1' => 'Flm',
            '2' => 'Filem',
            '3' => 'Phm'
        ],
        self::TORAH_BOOKS_HBR => [
            'pl' => 'List do Hebrajczyków',
            'en' => 'Hebrews',
            '1' => 'Hbr',
            '2' => 'Heb',
            '3' => 'Hebr'
        ],
        self::TORAH_BOOKS_JK => [
            'pl' => 'List Jakuba',
            'en' => 'James',
            '1' => 'Jk',
            '2' => 'Jak',
            '3' => 'Jas'
        ],
        self::TORAH_BOOKS_1P => [
            'pl' => '1 List Piotra',
            'en' => '1 Peter',
            '1' => '1P',
            '2' => '',
            '3' => '1Pe'
        ],
        self::TORAH_BOOKS_2P => [
            'pl' => '2 List Piotra',
            'en' => '2 Peter',
            '1' => '2P',
            '2' => '',
            '3' => '2Pe'
        ],
        self::TORAH_BOOKS_1J => [
            'pl' => '1 List Jana',
            'en' => '1 John',
            '1' => '1J',
            '2' => '',
            '3' => '1Jn'
        ],
        self::TORAH_BOOKS_2J => [
            'pl' => '2 List Jana',
            'en' => '2 John',
            '1' => '2J',
            '2' => '',
            '3' => '1Jn'
        ],
        self::TORAH_BOOKS_3J => [
            'pl' => '3 List Jana',
            'en' => '3 John',
            '1' => '3J',
            '2' => '',
            '3' => '3Jn'
        ],
        self::TORAH_BOOKS_JUD => [
            'pl' => 'List Judy',
            'en' => 'Jude',
            '1' => 'Jud',
            '2' => 'Judy',
            '3' => 'Jude'
        ],
        self::TORAH_BOOKS_AP => [
            'pl' => 'Apokalipsa (Objawienie)',
            'en' => 'Revelation',
            '1' => 'Ap',
            '2' => 'Ap',
            '3' => 'Obj',
            '4' => 'Rev'
        ]
    ];
    public const TORAH_BOOKS_EXTENDED = [
        'Tanakh' => [
            self::TORAH_BOOKS_RDZ => self::TORAH_BOOKS[self::TORAH_BOOKS_RDZ],
            self::TORAH_BOOKS_WJ => self::TORAH_BOOKS[self::TORAH_BOOKS_WJ],
            self::TORAH_BOOKS_KPL => self::TORAH_BOOKS[self::TORAH_BOOKS_KPL],
            self::TORAH_BOOKS_LB => self::TORAH_BOOKS[self::TORAH_BOOKS_LB],
            self::TORAH_BOOKS_PWT => self::TORAH_BOOKS[self::TORAH_BOOKS_PWT],
            self::TORAH_BOOKS_JOZ => self::TORAH_BOOKS[self::TORAH_BOOKS_JOZ],
            self::TORAH_BOOKS_SDZ => self::TORAH_BOOKS[self::TORAH_BOOKS_SDZ],
            self::TORAH_BOOKS_RT => self::TORAH_BOOKS[self::TORAH_BOOKS_RT],
            self::TORAH_BOOKS_1SM => self::TORAH_BOOKS[self::TORAH_BOOKS_1SM],
            self::TORAH_BOOKS_2SM => self::TORAH_BOOKS[self::TORAH_BOOKS_2SM],
            self::TORAH_BOOKS_1KRL => self::TORAH_BOOKS[self::TORAH_BOOKS_1KRL],
            self::TORAH_BOOKS_2KRL => self::TORAH_BOOKS[self::TORAH_BOOKS_2KRL],
            self::TORAH_BOOKS_1KRN => self::TORAH_BOOKS[self::TORAH_BOOKS_1KRN],
            self::TORAH_BOOKS_2KRN => self::TORAH_BOOKS[self::TORAH_BOOKS_2KRN],
            self::TORAH_BOOKS_EZD => self::TORAH_BOOKS[self::TORAH_BOOKS_EZD],
            self::TORAH_BOOKS_NE => self::TORAH_BOOKS[self::TORAH_BOOKS_NE],
            self::TORAH_BOOKS_TB => self::TORAH_BOOKS[self::TORAH_BOOKS_TB],
            self::TORAH_BOOKS_JDT => self::TORAH_BOOKS[self::TORAH_BOOKS_JDT],
            self::TORAH_BOOKS_EST => self::TORAH_BOOKS[self::TORAH_BOOKS_EST],
            self::TORAH_BOOKS_1MCH => self::TORAH_BOOKS[self::TORAH_BOOKS_1MCH],
            self::TORAH_BOOKS_2MCH => self::TORAH_BOOKS[self::TORAH_BOOKS_2MCH],
            self::TORAH_BOOKS_HI => self::TORAH_BOOKS[self::TORAH_BOOKS_HI],
            self::TORAH_BOOKS_PS => self::TORAH_BOOKS[self::TORAH_BOOKS_PS],
            self::TORAH_BOOKS_PRZ => self::TORAH_BOOKS[self::TORAH_BOOKS_PRZ],
            self::TORAH_BOOKS_KOH => self::TORAH_BOOKS[self::TORAH_BOOKS_KOH],
            self::TORAH_BOOKS_PNP => self::TORAH_BOOKS[self::TORAH_BOOKS_PNP],
            self::TORAH_BOOKS_MDR => self::TORAH_BOOKS[self::TORAH_BOOKS_MDR],
            self::TORAH_BOOKS_SYR => self::TORAH_BOOKS[self::TORAH_BOOKS_SYR],
        ],
        'Nevi\'im ketuvim' => [
            self::TORAH_BOOKS_IZ => self::TORAH_BOOKS[self::TORAH_BOOKS_IZ],
            self::TORAH_BOOKS_JR => self::TORAH_BOOKS[self::TORAH_BOOKS_JR],
            self::TORAH_BOOKS_LM => self::TORAH_BOOKS[self::TORAH_BOOKS_LM],
            self::TORAH_BOOKS_BA => self::TORAH_BOOKS[self::TORAH_BOOKS_BA],
            self::TORAH_BOOKS_EZ => self::TORAH_BOOKS[self::TORAH_BOOKS_EZ],
            self::TORAH_BOOKS_DN => self::TORAH_BOOKS[self::TORAH_BOOKS_DN],
            self::TORAH_BOOKS_OZ => self::TORAH_BOOKS[self::TORAH_BOOKS_OZ],
            self::TORAH_BOOKS_JL => self::TORAH_BOOKS[self::TORAH_BOOKS_JL],
            self::TORAH_BOOKS_AM => self::TORAH_BOOKS[self::TORAH_BOOKS_AM],
            self::TORAH_BOOKS_AB => self::TORAH_BOOKS[self::TORAH_BOOKS_AB],
            self::TORAH_BOOKS_JON => self::TORAH_BOOKS[self::TORAH_BOOKS_JON],
            self::TORAH_BOOKS_MI => self::TORAH_BOOKS[self::TORAH_BOOKS_MI],
            self::TORAH_BOOKS_NA => self::TORAH_BOOKS[self::TORAH_BOOKS_NA],
            self::TORAH_BOOKS_HA => self::TORAH_BOOKS[self::TORAH_BOOKS_HA],
            self::TORAH_BOOKS_SO => self::TORAH_BOOKS[self::TORAH_BOOKS_SO],
            self::TORAH_BOOKS_AG => self::TORAH_BOOKS[self::TORAH_BOOKS_AG],
            self::TORAH_BOOKS_ZA => self::TORAH_BOOKS[self::TORAH_BOOKS_ZA],
            self::TORAH_BOOKS_ML => self::TORAH_BOOKS[self::TORAH_BOOKS_ML],
        ],
        'Brit Hadasha' => [
            self::TORAH_BOOKS_MT => self::TORAH_BOOKS[self::TORAH_BOOKS_MT],
            self::TORAH_BOOKS_MK => self::TORAH_BOOKS[self::TORAH_BOOKS_MK],
            self::TORAH_BOOKS_LK => self::TORAH_BOOKS[self::TORAH_BOOKS_LK],
            self::TORAH_BOOKS_J => self::TORAH_BOOKS[self::TORAH_BOOKS_J],
            self::TORAH_BOOKS_DZ => self::TORAH_BOOKS[self::TORAH_BOOKS_DZ],
            self::TORAH_BOOKS_RZ => self::TORAH_BOOKS[self::TORAH_BOOKS_RZ],
            self::TORAH_BOOKS_1KOR => self::TORAH_BOOKS[self::TORAH_BOOKS_1KOR],
            self::TORAH_BOOKS_2KOR => self::TORAH_BOOKS[self::TORAH_BOOKS_2KOR],
            self::TORAH_BOOKS_GA => self::TORAH_BOOKS[self::TORAH_BOOKS_GA],
            self::TORAH_BOOKS_EF => self::TORAH_BOOKS[self::TORAH_BOOKS_EF],
            self::TORAH_BOOKS_FLP => self::TORAH_BOOKS[self::TORAH_BOOKS_FLP],
            self::TORAH_BOOKS_KOL => self::TORAH_BOOKS[self::TORAH_BOOKS_KOL],
            self::TORAH_BOOKS_1TES => self::TORAH_BOOKS[self::TORAH_BOOKS_1TES],
            self::TORAH_BOOKS_2TES => self::TORAH_BOOKS[self::TORAH_BOOKS_2TES],
            self::TORAH_BOOKS_1TM => self::TORAH_BOOKS[self::TORAH_BOOKS_1TM],
            self::TORAH_BOOKS_2TM => self::TORAH_BOOKS[self::TORAH_BOOKS_2TM],
            self::TORAH_BOOKS_TT => self::TORAH_BOOKS[self::TORAH_BOOKS_TT],
            self::TORAH_BOOKS_FLM => self::TORAH_BOOKS[self::TORAH_BOOKS_FLM],
            self::TORAH_BOOKS_HBR => self::TORAH_BOOKS[self::TORAH_BOOKS_HBR],
            self::TORAH_BOOKS_JK => self::TORAH_BOOKS[self::TORAH_BOOKS_JK],
            self::TORAH_BOOKS_1P => self::TORAH_BOOKS[self::TORAH_BOOKS_1P],
            self::TORAH_BOOKS_2P => self::TORAH_BOOKS[self::TORAH_BOOKS_2P],
            self::TORAH_BOOKS_1J => self::TORAH_BOOKS[self::TORAH_BOOKS_1J],
            self::TORAH_BOOKS_2J => self::TORAH_BOOKS[self::TORAH_BOOKS_2J],
            self::TORAH_BOOKS_3J => self::TORAH_BOOKS[self::TORAH_BOOKS_3J],
            self::TORAH_BOOKS_JUD => self::TORAH_BOOKS[self::TORAH_BOOKS_JUD],
            self::TORAH_BOOKS_AP => self::TORAH_BOOKS[self::TORAH_BOOKS_AP]
        ]
    ];
    // translations
    public const TORAH_TRANSLATION_BT = 'bt';
    public const TORAH_TRANSLATION_BW = 'bw';
    public const TORAH_TRANSLATION_BR = 'br';
    public const TORAH_TRANSLATION_ESP = 'esp';
    public const TORAH_TRANSLATION_BG = 'bg';
    public const TORAH_TRANSLATION_NG = 'ng';
    public const TORAH_TRANSLATION_UG= 'ug';
    public const TORAH_TRANSLATION_BB = 'bb';
    public const TORAH_TRANSLATION_BP = 'bp';
    public const TORAH_TRANSLATION_JW = 'jw';
    public const TORAH_TRANSLATION_BM = 'bm';
    public const TORAH_TRANSLATION_NS = 'ns';
    public const TORAH_TRANSLATION_BL = 'bl';
    public const TORAH_TRANSLATION_SZ = 'sz';
    public const TORAH_TRANSLATION_EIB = 'eib';
    public const TORAH_TRANSLATION_TNP = 'tnp';
    public const TORAH_TRANSLATION_KJV = 'kjv';
    public const TORAH_TRANSLATION_WEB = 'web';
    public const TORAH_TRANSLATION_YLT = 'ylt';
    public const TORAH_TRANSLATION_VUL = 'vul';
    public const TORAH_TRANSLATION_GR = 'gr';
    // translations descriptions
    public const TORAH_TRANSLATIONS = [
        self::TORAH_TRANSLATION_BT => 'Biblia Tysiąclecia',
        self::TORAH_TRANSLATION_BW => 'Biblia Warszawska',
        self::TORAH_TRANSLATION_BR => 'Biblia Warszawsko-Praska',
        self::TORAH_TRANSLATION_ESP => 'Edycja Świętego Pawła',
        self::TORAH_TRANSLATION_BG => 'Biblia Gdańska',
        self::TORAH_TRANSLATION_NG => 'Nowa Biblia Gdańska',
        self::TORAH_TRANSLATION_UG => 'Uwspółcześniona Biblia Gdańska',
        self::TORAH_TRANSLATION_BB => 'Biblia Brzeska',
        self::TORAH_TRANSLATION_BP => 'Biblia Poznańska',
        self::TORAH_TRANSLATION_JW => 'Biblia Jakuba Wujka',
        self::TORAH_TRANSLATION_BM => 'Biblia Mesjańska',
        self::TORAH_TRANSLATION_NS => 'Biblia Nowego Świata',
        self::TORAH_TRANSLATION_BL => 'Biblia Lubelska',
        self::TORAH_TRANSLATION_SZ => 'Słowo Życia',
        self::TORAH_TRANSLATION_EIB => 'Przekład Dosłowny',
        self::TORAH_TRANSLATION_TNP => 'Biblia Toruńska',
        self::TORAH_TRANSLATION_KJV => 'King James Version',
        self::TORAH_TRANSLATION_WEB => 'Webster Bible',
        self::TORAH_TRANSLATION_YLT => 'Young&apos;s Literal Translation',
        self::TORAH_TRANSLATION_VUL => 'Łacińska Vulgata',
        self::TORAH_TRANSLATION_GR => 'Grecka Septuaginta'
    ];
    public const TANAKH = 'Tanakh';
    public const NEVIIMKETUVIM = 'Nevi\'im ketuvim';
    public const BRITHADASHA = 'Brit Hadasha';
    public const CHAPTERS = 'chapters';
    public const EXCEPTIONS = 'exceptions';
    /**
     * @var ServiceInterface
     */
    protected $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * @inheritDoc
     */
    public function getTanakh(): ?array
    {
        $books = $this->getBooks();
        return $books[self::TANAKH] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getNeviimKetuvim(): ?array
    {
        $books = $this->getBooks();
        return $books[self::NEVIIMKETUVIM] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getBritHadasha(): ?array
    {
        $books = $this->getBooks();
        return $books[self::BRITHADASHA] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function isDeutero(): bool
    {
        $tanakh = $this->getTanakh() ?? [];
        $neviimKetuvim = $this->getNeviimKetuvim() ?? [];
        return !array_diff(
                [
                    Resources::TORAH_BOOKS_TB,
                    Resources::TORAH_BOOKS_JDT,
                    Resources::TORAH_BOOKS_1MCH,
                    Resources::TORAH_BOOKS_2MCH,
                    Resources::TORAH_BOOKS_MDR,
                    Resources::TORAH_BOOKS_SYR
                ],
                array_keys($tanakh)
            ) ||
            !array_diff(
                [
                    Resources::TORAH_BOOKS_BA
                ],
                array_keys($neviimKetuvim)
            );
    }

    /**
     * @inheritDoc
     */
    public function get(Siglum $siglum, string $language): Text
    {
        return $this->service->get($siglum, $language);
    }
}
