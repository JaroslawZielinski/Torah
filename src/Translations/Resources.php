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
            'full' => 'Ks. Rodzaju',
            '1' => 'Rdz',
            '2' => 'Rodz',
            '3' => 'Gen',
            '4' => 'IMoj',
            '5' => '1Moj',
            '6' => '1M'
        ],
        self::TORAH_BOOKS_WJ => [
            'full' => 'Ks. Wyjścia',
            '1' => 'Wj',
            '2' => 'Wyj',
            '3' => 'Ex',
            '4' => 'IIMoj',
            '5' => '2Moj',
            '6' => '2M'
        ],
        self::TORAH_BOOKS_KPL => [
            'full' => 'Ks. Kapłańska',
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
            'full' => 'Ks. Liczb',
            '1' => 'Lb',
            '2' => 'Num',
            '3' => 'Nu',
            '4' => 'IVMoj',
            '5' => '4Moj',
            '6' => '4M'
        ],
        self::TORAH_BOOKS_PWT => [
            'full' => 'Ks. Powt.Prawa',
            '1' => 'Pwt',
            '2' => 'Deu',
            '3' => 'Dt',
            '4' => 'VMoj',
            '5' => '5Moj',
            '6' => '5M'
        ],
        self::TORAH_BOOKS_JOZ => [
            'full' => 'Ks. Jozuego',
            '1' => 'Joz',
            '2' => 'Jos'
        ],
        self::TORAH_BOOKS_SDZ => [
            'full' => 'Ks. Sędziów',
            '1' => 'Sdz',
            '2' => 'Sędz',
            '3' => 'Sedz',
            '4' => 'Jdg'
        ],
        self::TORAH_BOOKS_RT => [
            'full' => 'Ks. Rut',
            '1' => 'Rt',
            '2' => 'Rut',
            '3' => 'Ru'
        ],
        self::TORAH_BOOKS_1SM => [
            'full' => '1 Ks. Samuela',
            '1' => '1Sm',
            '2' => '1Sam',
            '3' => '1Sa'
        ],
        self::TORAH_BOOKS_2SM => [
            'full' => '2 Ks. Samuela',
            '1' => '2Sm',
            '2' => '2Sam',
            '3' => '2Sa'
        ],
        self::TORAH_BOOKS_1KRL => [
            'full' => '1 Ks. Królewska',
            '1' => '1Krl',
            '2' => '1Król',
            '3' => '1Krol',
            '4' => '1Ki'
        ],
        self::TORAH_BOOKS_2KRL => [
            'full' => '2 Ks. Królewska',
            '1' => '2Krl',
            '2' => '2Król',
            '3' => '2Krol',
            '4' => '2Ki'
        ],
        self::TORAH_BOOKS_1KRN => [
            'full' => '1 Ks. Kronik',
            '1' => '1Krn',
            '2' => '1Kron',
            '3' => '1Ch'
        ],
        self::TORAH_BOOKS_2KRN => [
            'full' => '2 Ks. Kronik',
            '1' => '2Krn',
            '2' => '2Kron',
            '3' => '2Ch'
        ],
        self::TORAH_BOOKS_EZD => [
            'full' => 'Ks. Ezdrasza',
            '1' => 'Ezd',
            '2' => 'Ezdr',
            '3' => 'Ezr'
        ],
        self::TORAH_BOOKS_NE => [
            'full' => 'Ks. Nehemiasza',
            '1' => 'Ne',
            '2' => 'Neh'
        ],
        self::TORAH_BOOKS_TB => [
            'full' => 'Ks. Tobiasza (w)',
            '1' => 'Tb',
            '2' => 'Tob'
        ],
        self::TORAH_BOOKS_JDT => [
            'full' => 'Ks. Judyty (w)',
            '1' => 'Jdt',
            '2' => 'Judyty'
        ],
        self::TORAH_BOOKS_EST => [
            'full' => 'Ks. Estery',
            '1' => 'Est',
            '2' => 'Estery'
        ],
        self::TORAH_BOOKS_1MCH => [
            'full' => '1 Ks. Machabejska (w)',
            '1' => '1Mch',
            '2' => '1Mach'
        ],
        self::TORAH_BOOKS_2MCH => [
            'full' => '2 Ks. Machabejska (w)',
            '1' => '2Mch',
            '2' => '2Mach'
        ],
        self::TORAH_BOOKS_HI => [
            'full' => 'Ks. Hioba',
            '1' => 'Job',
            '2' => 'Hioba',
            '3' => 'Hiob',
            '4' => 'Hi'
        ],
        self::TORAH_BOOKS_PS => [
            'full' => 'Ks. Psalmów',
            '1' => 'Ps',
            '2' => 'Psalmy',
            '3' => 'Psalm'
        ],
        self::TORAH_BOOKS_PRZ => [
            'full' => 'Ks. Przysłów',
            '1' => 'Prz',
            '2' => 'Przy',
            '3' => 'Pr'
        ],
        self::TORAH_BOOKS_KOH => [
            'full' => 'Ks. Koheleta',
            '1' => 'Koh',
            '2' => 'Kohelet',
            '3' => 'Ekl',
            '4' => 'Ecc'
        ],
        self::TORAH_BOOKS_PNP => [
            'full' => 'Pieśń nad pieśniami',
            '1' => 'PNP',
            '2' => 'SS'
        ],
        self::TORAH_BOOKS_MDR => [
            'full' => 'Ks. Mądrości (w)',
            '1' => 'Mdr',
            '2' => 'Mądr',
            '3' => 'Madr'
        ],
        self::TORAH_BOOKS_SYR => [
            'full' => 'Mądrość Syracha (w)',
            '1' => 'Syr',
            '2' => 'Syracha',
            '3' => 'Syrach'
        ],
        self::TORAH_BOOKS_IZ => [
            'full' => 'Ks. Izajasza',
            '1' => 'Iz',
            '2' => 'Isa'
        ],
        self::TORAH_BOOKS_JR => [
            'full' => 'Ks. Jeremiasza',
            '1' => 'Jr',
            '2' => 'Jer'
        ],
        self::TORAH_BOOKS_LM => [
            'full' => 'Lamentacje Jeremiasza',
            '1' => 'Lm',
            '2' => 'Lam',
            '3' => 'Tr',
            '4' => 'Treny',
            '5' => 'La'
        ],
        self::TORAH_BOOKS_BA => [
            'full' => 'Ks. Barucha (w)',
            '1' => 'Ba',
            '2' => 'Barucha',
            '3' => 'Bar'
        ],
        self::TORAH_BOOKS_EZ => [
            'full' => 'Ks. Ezechiela',
            '1' => 'Ez',
            '2' => 'Eze'
        ],
        self::TORAH_BOOKS_DN => [
            'full' => 'Ks. Daniela',
            '1' => 'Dn',
            '2' => 'Dan',
            '3' => 'Da'
        ],
        self::TORAH_BOOKS_OZ => [
            'full' => 'Ks. Ozeasza',
            '1' => 'Oz',
            '2' => 'Hos'
        ],
        self::TORAH_BOOKS_JL => [
            'full' => 'Ks. Joela',
            '1' => 'Jl',
            '2' => 'Joel'
        ],
        self::TORAH_BOOKS_AM => [
            'full' => 'Ks. Amosa',
            '1' => 'Am',
            '2' => 'Amos'
        ],
        self::TORAH_BOOKS_AB => [
            'full' => 'Ks. Abdiasza',
            '1' => 'Ab',
            '2' => 'Ob'
        ],
        self::TORAH_BOOKS_JON => [
            'full' => 'Ks. Jonasza',
            '1' => 'Jon',
            '2' => 'Jnh'
        ],
        self::TORAH_BOOKS_MI => [
            'full' => 'Ks. Micheasza',
            '1' => 'Mi',
            '2' => 'Mich',
            '3' => 'Mic'
        ],
        self::TORAH_BOOKS_NA => [
            'full' => 'Ks. Nahuma',
            '1' => 'Na',
            '2' => 'Nach'
        ],
        self::TORAH_BOOKS_HA => [
            'full' => 'Ks. Habakuka',
            '1' => 'Hab'
        ],
        self::TORAH_BOOKS_SO => [
            'full' => 'Ks. Sofoniasza',
            '1' => 'So',
            '2' => 'Sof',
            '3' => 'Zep'
        ],
        self::TORAH_BOOKS_AG => [
            'full' => 'Ks. Aggeusza',
            '1' => 'Ag',
            '2' => 'Hag'
        ],
        self::TORAH_BOOKS_ZA => [
            'full' => 'Ks. Zachariasza',
            '1' => 'Za',
            '2' => 'Zach',
            '3' => 'Zec'
        ],
        self::TORAH_BOOKS_ML => [
            'full' => 'Ks. Malachiasza',
            '1' => 'Ml',
            '2' => 'Mal'
        ],
        self::TORAH_BOOKS_MT => [
            'full' => 'Ew. Mateusza',
            '1' => 'Mt',
            '2' => '',
            '3' => 'Mat'
        ],
        self::TORAH_BOOKS_MK => [
            'full' => 'Ew. Marka',
            '1' => 'Mk',
            '2' => '',
            '3' => 'Mar'
        ],
        self::TORAH_BOOKS_LK => [
            'full' => 'Ew. Łukasza',
            '1' => 'Łk',
            '2' => 'Łuk',
            '3' => 'Lk',
            '4' => 'Luk'
        ],
        self::TORAH_BOOKS_J => [
            'full' => 'Ew. Jana',
            '1' => 'Jan',
            '2' => 'J',
            '3' => 'Jn'
        ],
        self::TORAH_BOOKS_DZ => [
            'full' => 'Dzieje Apost.',
            '1' => 'Dz',
            '2' => 'Act',
            '3' => 'Ac'
        ],
        self::TORAH_BOOKS_RZ => [
            'full' => 'List do Rzymian',
            '1' => 'Rz',
            '2' => 'Rzym',
            '3' => 'Ro'
        ],
        self::TORAH_BOOKS_1KOR => [
            'full' => '1 list do Koryntian',
            '1' => '1Kor',
            '2' => '',
            '3' => '1Co'
        ],
        self::TORAH_BOOKS_2KOR => [
            'full' => '2 list do Koryntian',
            '1' => '2Kor',
            '2' => '',
            '3' => '2Co'
        ],
        self::TORAH_BOOKS_GA => [
            'full' => 'List do Galatów',
            '1' => 'Ga',
            '2' => '',
            '3' => 'Gal'
        ],
        self::TORAH_BOOKS_EF => [
            'full' => 'List do Efezjan',
            '1' => 'Ef',
            '2' => 'Efez',
            '3' => 'Eph'
        ],
        self::TORAH_BOOKS_FLP => [
            'full' => 'List do Filipian',
            '1' => 'Flp',
            '2' => 'Fil',
            '3' => 'Fl',
            '4' => 'Php'
        ],
        self::TORAH_BOOKS_KOL => [
            'full' => 'List do Kolosan',
            '1' => 'Kol',
            '2' => '',
            '3' => 'Col'
        ],
        self::TORAH_BOOKS_1TES => [
            'full' => '1 List do Tesaloniczan',
            '1' => '1Tes',
            '2' => '',
            '3' => '1Th'
        ],
        self::TORAH_BOOKS_2TES => [
            'full' => '2 List do Tesaloniczan',
            '1' => '2Tes',
            '2' => '',
            '3' => '2Th'
        ],
        self::TORAH_BOOKS_1TM => [
            'full' => '1 List do Tymoteusza',
            '1' => '1Tm',
            '2' => '1Tym',
            '3' => '1Ti'
        ],
        self::TORAH_BOOKS_2TM => [
            'full' => '2 List do Tymoteusza',
            '1' => '2Tm',
            '2' => '2Tym',
            '3' => '2Ti'
        ],
        self::TORAH_BOOKS_TT => [
            'full' => 'List do Tytusa',
            '1' => 'Tt',
            '2' => 'Tyt',
            '3' => 'Tit'
        ],
        self::TORAH_BOOKS_FLM => [
            'full' => 'List do Filemona',
            '1' => 'Flm',
            '2' => 'Filem',
            '3' => 'Phm'
        ],
        self::TORAH_BOOKS_HBR => [
            'full' => 'List do Hebrajczyków',
            '1' => 'Hbr',
            '2' => 'Heb',
            '3' => 'Hebr'
        ],
        self::TORAH_BOOKS_JK => [
            'full' => 'List Jakuba',
            '1' => 'Jk',
            '2' => 'Jak',
            '3' => 'Jas'
        ],
        self::TORAH_BOOKS_1P => [
            'full' => '1 List Piotra',
            '1' => '1P',
            '2' => '',
            '3' => '1Pe'
        ],
        self::TORAH_BOOKS_2P => [
            'full' => '2 List Piotra',
            '1' => '2P',
            '2' => '',
            '3' => '2Pe'
        ],
        self::TORAH_BOOKS_1J => [
            'full' => '1 List Jana',
            '1' => '1J',
            '2' => '',
            '3' => '1Jn'
        ],
        self::TORAH_BOOKS_2J => [
            'full' => '2 List Jana',
            '1' => '2J',
            '2' => '',
            '3' => '1Jn'
        ],
        self::TORAH_BOOKS_3J => [
            'full' => '3 List Jana',
            '1' => '3J',
            '2' => '',
            '3' => '3Jn'
        ],
        self::TORAH_BOOKS_JUD => [
            'full' => 'List Judy',
            '1' => 'Jud',
            '2' => 'Judy',
            '3' => 'Jude'
        ],
        self::TORAH_BOOKS_AP => [
            'full' => 'Apokalipsa (Objawienie)',
            '1' => 'Ap',
            '2' => 'Ap',
            '3' => 'Obj',
            '4' => 'Rev'
        ]
    ];
    public const TORAH_BOOKS_EXTENDED = [
        'Tanakh' => [
            self::TORAH_BOOKS_RDZ => [
                'full' => 'Ks. Rodzaju',
                '1' => 'Rdz',
                '2' => 'Rodz',
                '3' => 'Gen',
                '4' => 'IMoj',
                '5' => '1Moj',
                '6' => '1M'
            ],
            self::TORAH_BOOKS_WJ => [
                'full' => 'Ks. Wyjścia',
                '1' => 'Wj',
                '2' => 'Wyj',
                '3' => 'Ex',
                '4' => 'IIMoj',
                '5' => '2Moj',
                '6' => '2M'
            ],
            self::TORAH_BOOKS_KPL => [
                'full' => 'Ks. Kapłańska',
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
                'full' => 'Ks. Liczb',
                '1' => 'Lb',
                '2' => 'Num',
                '3' => 'Nu',
                '4' => 'IVMoj',
                '5' => '4Moj',
                '6' => '4M'
            ],
            self::TORAH_BOOKS_PWT => [
                'full' => 'Ks. Powt.Prawa',
                '1' => 'Pwt',
                '2' => 'Deu',
                '3' => 'Dt',
                '4' => 'VMoj',
                '5' => '5Moj',
                '6' => '5M'
            ],
            self::TORAH_BOOKS_JOZ => [
                'full' => 'Ks. Jozuego',
                '1' => 'Joz',
                '2' => 'Jos'
            ],
            self::TORAH_BOOKS_SDZ => [
                'full' => 'Ks. Sędziów',
                '1' => 'Sdz',
                '2' => 'Sędz',
                '3' => 'Sedz',
                '4' => 'Jdg'
            ],
            self::TORAH_BOOKS_RT => [
                'full' => 'Ks. Rut',
                '1' => 'Rt',
                '2' => 'Rut',
                '3' => 'Ru'
            ],
            self::TORAH_BOOKS_1SM => [
                'full' => '1 Ks. Samuela',
                '1' => '1Sm',
                '2' => '1Sam',
                '3' => '1Sa'
            ],
            self::TORAH_BOOKS_2SM => [
                'full' => '2 Ks. Samuela',
                '1' => '2Sm',
                '2' => '2Sam',
                '3' => '2Sa'
            ],
            self::TORAH_BOOKS_1KRL => [
                'full' => '1 Ks. Królewska',
                '1' => '1Krl',
                '2' => '1Król',
                '3' => '1Krol',
                '4' => '1Ki'
            ],
            self::TORAH_BOOKS_2KRL => [
                'full' => '2 Ks. Królewska',
                '1' => '2Krl',
                '2' => '2Król',
                '3' => '2Krol',
                '4' => '2Ki'
            ],
            self::TORAH_BOOKS_1KRN => [
                'full' => '1 Ks. Kronik',
                '1' => '1Krn',
                '2' => '1Kron',
                '3' => '1Ch'
            ],
            self::TORAH_BOOKS_2KRN => [
                'full' => '2 Ks. Kronik',
                '1' => '2Krn',
                '2' => '2Kron',
                '3' => '2Ch'
            ],
            self::TORAH_BOOKS_EZD => [
                'full' => 'Ks. Ezdrasza',
                '1' => 'Ezd',
                '2' => 'Ezdr',
                '3' => 'Ezr'
            ],
            self::TORAH_BOOKS_NE => [
                'full' => 'Ks. Nehemiasza',
                '1' => 'Ne',
                '2' => 'Neh'
            ],
            self::TORAH_BOOKS_TB => [
                'full' => 'Ks. Tobiasza (w)',
                '1' => 'Tb',
                '2' => 'Tob'
            ],
            self::TORAH_BOOKS_JDT => [
                'full' => 'Ks. Judyty (w)',
                '1' => 'Jdt',
                '2' => 'Judyty'
            ],
            self::TORAH_BOOKS_EST => [
                'full' => 'Ks. Estery',
                '1' => 'Est',
                '2' => 'Estery'
            ],
            self::TORAH_BOOKS_1MCH => [
                'full' => '1 Ks. Machabejska (w)',
                '1' => '1Mch',
                '2' => '1Mach'
            ],
            self::TORAH_BOOKS_2MCH => [
                'full' => '2 Ks. Machabejska (w)',
                '1' => '2Mch',
                '2' => '2Mach'
            ],
            self::TORAH_BOOKS_HI => [
                'full' => 'Ks. Hioba',
                '1' => 'Job',
                '2' => 'Hioba',
                '3' => 'Hiob',
                '4' => 'Hi'
            ],
            self::TORAH_BOOKS_PS => [
                'full' => 'Ks. Psalmów',
                '1' => 'Ps',
                '2' => 'Psalmy',
                '3' => 'Psalm'
            ],
            self::TORAH_BOOKS_PRZ => [
                'full' => 'Ks. Przysłów',
                '1' => 'Prz',
                '2' => 'Przy',
                '3' => 'Pr'
            ],
            self::TORAH_BOOKS_KOH => [
                'full' => 'Ks. Koheleta',
                '1' => 'Koh',
                '2' => 'Kohelet',
                '3' => 'Ekl',
                '4' => 'Ecc'
            ],
            self::TORAH_BOOKS_PNP => [
                'full' => 'Pieśń nad pieśniami',
                '1' => 'PNP',
                '2' => 'SS'
            ],
            self::TORAH_BOOKS_MDR => [
                'full' => 'Ks. Mądrości (w)',
                '1' => 'Mdr',
                '2' => 'Mądr',
                '3' => 'Madr'
            ],
            self::TORAH_BOOKS_SYR => [
                'full' => 'Mądrość Syracha (w)',
                '1' => 'Syr',
                '2' => 'Syracha',
                '3' => 'Syrach'
            ],
        ],
        'Nevi\'im ketuvim' => [
            self::TORAH_BOOKS_IZ => [
                'full' => 'Ks. Izajasza',
                '1' => 'Iz',
                '2' => 'Isa'
            ],
            self::TORAH_BOOKS_JR => [
                'full' => 'Ks. Jeremiasza',
                '1' => 'Jr',
                '2' => 'Jer'
            ],
            self::TORAH_BOOKS_LM => [
                'full' => 'Lamentacje Jeremiasza',
                '1' => 'Lm',
                '2' => 'Lam',
                '3' => 'Tr',
                '4' => 'Treny',
                '5' => 'La'
            ],
            self::TORAH_BOOKS_BA => [
                'full' => 'Ks. Barucha (w)',
                '1' => 'Ba',
                '2' => 'Barucha',
                '3' => 'Bar'
            ],
            self::TORAH_BOOKS_EZ => [
                'full' => 'Ks. Ezechiela',
                '1' => 'Ez',
                '2' => 'Eze'
            ],
            self::TORAH_BOOKS_DN => [
                'full' => 'Ks. Daniela',
                '1' => 'Dn',
                '2' => 'Dan',
                '3' => 'Da'
            ],
            self::TORAH_BOOKS_OZ => [
                'full' => 'Ks. Ozeasza',
                '1' => 'Oz',
                '2' => 'Hos'
            ],
            self::TORAH_BOOKS_JL => [
                'full' => 'Ks. Joela',
                '1' => 'Jl',
                '2' => 'Joel'
            ],
            self::TORAH_BOOKS_AM => [
                'full' => 'Ks. Amosa',
                '1' => 'Am',
                '2' => 'Amos'
            ],
            self::TORAH_BOOKS_AB => [
                'full' => 'Ks. Abdiasza',
                '1' => 'Ab',
                '2' => 'Ob'
            ],
            self::TORAH_BOOKS_JON => [
                'full' => 'Ks. Jonasza',
                '1' => 'Jon',
                '2' => 'Jnh'
            ],
            self::TORAH_BOOKS_MI => [
                'full' => 'Ks. Micheasza',
                '1' => 'Mi',
                '2' => 'Mich',
                '3' => 'Mic'
            ],
            self::TORAH_BOOKS_NA => [
                'full' => 'Ks. Nahuma',
                '1' => 'Na',
                '2' => 'Nach'
            ],
            self::TORAH_BOOKS_HA => [
                'full' => 'Ks. Habakuka',
                '1' => 'Hab'
            ],
            self::TORAH_BOOKS_SO => [
                'full' => 'Ks. Sofoniasza',
                '1' => 'So',
                '2' => 'Sof',
                '3' => 'Zep'
            ],
            self::TORAH_BOOKS_AG => [
                'full' => 'Ks. Aggeusza',
                '1' => 'Ag',
                '2' => 'Hag'
            ],
            self::TORAH_BOOKS_ZA => [
                'full' => 'Ks. Zachariasza',
                '1' => 'Za',
                '2' => 'Zach',
                '3' => 'Zec'
            ],
            self::TORAH_BOOKS_ML => [
                'full' => 'Ks. Malachiasza',
                '1' => 'Ml',
                '2' => 'Mal'
            ],
        ],
        'Brit Hadasha' => [
            self::TORAH_BOOKS_MT => [
                'full' => 'Ew. Mateusza',
                '1' => 'Mt',
                '2' => '',
                '3' => 'Mat'
            ],
            self::TORAH_BOOKS_MK => [
                'full' => 'Ew. Marka',
                '1' => 'Mk',
                '2' => '',
                '3' => 'Mar'
            ],
            self::TORAH_BOOKS_LK => [
                'full' => 'Ew. Łukasza',
                '1' => 'Łk',
                '2' => 'Łuk',
                '3' => 'Lk',
                '4' => 'Luk'
            ],
            self::TORAH_BOOKS_J => [
                'full' => 'Ew. Jana',
                '1' => 'Jan',
                '2' => 'J',
                '3' => 'Jn'
            ],
            self::TORAH_BOOKS_DZ => [
                'full' => 'Dzieje Apost.',
                '1' => 'Dz',
                '2' => 'Act',
                '3' => 'Ac'
            ],
            self::TORAH_BOOKS_RZ => [
                'full' => 'List do Rzymian',
                '1' => 'Rz',
                '2' => 'Rzym',
                '3' => 'Ro'
            ],
            self::TORAH_BOOKS_1KOR => [
                'full' => '1 list do Koryntian',
                '1' => '1Kor',
                '2' => '',
                '3' => '1Co'
            ],
            self::TORAH_BOOKS_2KOR => [
                'full' => '2 list do Koryntian',
                '1' => '2Kor',
                '2' => '',
                '3' => '2Co'
            ],
            self::TORAH_BOOKS_GA => [
                'full' => 'List do Galatów',
                '1' => 'Ga',
                '2' => '',
                '3' => 'Gal'
            ],
            self::TORAH_BOOKS_EF => [
                'full' => 'List do Efezjan',
                '1' => 'Ef',
                '2' => 'Efez',
                '3' => 'Eph'
            ],
            self::TORAH_BOOKS_FLP => [
                'full' => 'List do Filipian',
                '1' => 'Flp',
                '2' => 'Fil',
                '3' => 'Fl',
                '4' => 'Php'
            ],
            self::TORAH_BOOKS_KOL => [
                'full' => 'List do Kolosan',
                '1' => 'Kol',
                '2' => '',
                '3' => 'Col'
            ],
            self::TORAH_BOOKS_1TES => [
                'full' => '1 List do Tesaloniczan',
                '1' => '1Tes',
                '2' => '',
                '3' => '1Th'
            ],
            self::TORAH_BOOKS_2TES => [
                'full' => '2 List do Tesaloniczan',
                '1' => '2Tes',
                '2' => '',
                '3' => '2Th'
            ],
            self::TORAH_BOOKS_1TM => [
                'full' => '1 List do Tymoteusza',
                '1' => '1Tm',
                '2' => '1Tym',
                '3' => '1Ti'
            ],
            self::TORAH_BOOKS_2TM => [
                'full' => '2 List do Tymoteusza',
                '1' => '2Tm',
                '2' => '2Tym',
                '3' => '2Ti'
            ],
            self::TORAH_BOOKS_TT => [
                'full' => 'List do Tytusa',
                '1' => 'Tt',
                '2' => 'Tyt',
                '3' => 'Tit'
            ],
            self::TORAH_BOOKS_FLM => [
                'full' => 'List do Filemona',
                '1' => 'Flm',
                '2' => 'Filem',
                '3' => 'Phm'
            ],
            self::TORAH_BOOKS_HBR => [
                'full' => 'List do Hebrajczyków',
                '1' => 'Hbr',
                '2' => 'Heb',
                '3' => 'Hebr'
            ],
            self::TORAH_BOOKS_JK => [
                'full' => 'List Jakuba',
                '1' => 'Jk',
                '2' => 'Jak',
                '3' => 'Jas'
            ],
            self::TORAH_BOOKS_1P => [
                'full' => '1 List Piotra',
                '1' => '1P',
                '2' => '',
                '3' => '1Pe'
            ],
            self::TORAH_BOOKS_2P => [
                'full' => '2 List Piotra',
                '1' => '2P',
                '2' => '',
                '3' => '2Pe'
            ],
            self::TORAH_BOOKS_1J => [
                'full' => '1 List Jana',
                '1' => '1J',
                '2' => '',
                '3' => '1Jn'
            ],
            self::TORAH_BOOKS_2J => [
                'full' => '2 List Jana',
                '1' => '2J',
                '2' => '',
                '3' => '1Jn'
            ],
            self::TORAH_BOOKS_3J => [
                'full' => '3 List Jana',
                '1' => '3J',
                '2' => '',
                '3' => '3Jn'
            ],
            self::TORAH_BOOKS_JUD => [
                'full' => 'List Judy',
                '1' => 'Jud',
                '2' => 'Judy',
                '3' => 'Jude'
            ],
            self::TORAH_BOOKS_AP => [
                'full' => 'Apokalipsa (Objawienie)',
                '1' => 'Ap',
                '2' => 'Ap',
                '3' => 'Obj',
                '4' => 'Rev'
            ]
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
    public const TANAKH = 'Stary Testament';
    public const BRITHADASHA = 'Nowy Testament';
    public const CHAPTERS = 'chapters';
    public const EXCEPTIONS = 'exceptions';
    /**
     * @var ServiceInterface
     */
    protected ServiceInterface $service;

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
        return 46 === count($tanakh) ||
            !array_diff(
                [
                    Resources::TORAH_BOOKS_TB,
                    Resources::TORAH_BOOKS_JDT,
                    Resources::TORAH_BOOKS_1MCH,
                    Resources::TORAH_BOOKS_2MCH,
                    Resources::TORAH_BOOKS_MDR,
                    Resources::TORAH_BOOKS_SYR,
                    Resources::TORAH_BOOKS_BA
                ],
                array_keys($tanakh)
            );
    }

    /**
     * @inheritDoc
     */
    public function get(Siglum $siglum): Text
    {
        return $this->service->get($siglum);
    }
}
