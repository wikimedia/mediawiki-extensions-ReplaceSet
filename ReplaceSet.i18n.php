<?php
/**
 * Internationalization for the ReplaceSet extension
 *
 * @file
 * @ingroup ReplaceSet
 * @author Daniel Friesen (https://www.mediawiki.org/wiki/User:Dantman) <mediawiki@danielfriesen.name>
 * @copyright Copyright © 2009-2012 – Daniel Friesen
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$messages = array();

/** English (English)
 * @author Daniel Friesen
 */
$messages['en'] = array(
	'replaceset-desc' => 'Adds a <nowiki>{{#replaceset}}</nowiki> parser function used for replacing sections of text with formatted data',
	'replaceset-error-calllimit' => 'The ReplaceSet call limit ($1) has been reached.',
	'replaceset-error-regexnoend' => 'The regex pattern "$1" is missing the ending delimiter \'$2\'',
	'replaceset-error-regexbadmodifier' => 'The regex modifier \'$1\' is not valid.'
);

/** Message documentation (Message documentation)
 * @author Fryed-peach
 * @author Purodha
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'replaceset-desc' => '{{desc|name=Replace Set|url=http://www.mediawiki.org/wiki/Extension:ReplaceSet}}',
	'replaceset-error-calllimit' => 'Used as error message. Parameters:
* $1 - max number of <code><nowiki>{{#replaceset:}}</nowiki></code> calls in a page (default: 25)',
	'replaceset-error-regexnoend' => 'Used as error message.

"regex" stands for "regular expression".

Parameters:
* $1 - the regular expression pattern
* $2 - the ending delimiter',
	'replaceset-error-regexbadmodifier' => 'Used as error message.

"regex" stands for "[[FAQ#regular expression|regular expression]]".

Parameters:
* $1 - invalid regular expression modifier. Valid modifiers are i, m, s, x, A, D and U.',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'replaceset-desc' => 'يضيف وظيفة محلل <nowiki>{{#replaceset}}</nowiki> تستخدم لاستبدال أقسام من النصوص ببيانات مهيئة',
	'replaceset-error-calllimit' => 'حد استدعاء ReplaceSet تم الوصول إليه.', # Fuzzy
	'replaceset-error-regexnoend' => 'نمط الريجيكس "$1" يفقد فاصل النهاية \'$2\'',
	'replaceset-error-regexbadmodifier' => "معدل الريجيكس '$1' غير صحيح.",
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'replaceset-desc' => "Amiesta una función d'analís <nowiki>{{#replaceset}}</nowiki> utilizada pa trocar fragmentos de testu por datos con formatu",
	'replaceset-error-calllimit' => 'Llegóse a la llende de llamaes ($1) de ReplaceSet.',
	'replaceset-error-regexnoend' => 'Falta\'l delimitador final \'$2\' nel patrón d\'espresiones regulares "$1"',
	'replaceset-error-regexbadmodifier' => 'El cambiador d\'espresión regular "$1" nun ye válidu.',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'replaceset-desc' => 'Дадае функцыю парсэра <nowiki>{{#replaceset}}</nowiki> для замены частак тэксту з фарматаванымі зьвесткамі',
	'replaceset-error-calllimit' => 'Была дасягнутая мяжа выклікаў ReplaceSet.', # Fuzzy
	'replaceset-error-regexnoend' => 'Ва ўзоры рэгулярнага выразу «$1» адсутнічае канчатковы падзяляльнік «$2»',
	'replaceset-error-regexbadmodifier' => 'Няслушны мадыфікатар рэгулярнага выразу «$1».',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 */
$messages['br'] = array(
	'replaceset-desc' => "Ouzhpennañ a ra un arc'hwel parser <nowiki>{{#replaceset}}</nowiki> a dalvez da erlec'hiañ lodennoù skrid gant roadennoù furmadet",
	'replaceset-error-calllimit' => "Tizhet eo bet bevenn gervel an arc'hwel ReplaceSet ($1).",
	'replaceset-error-regexnoend' => 'Ezvezant eo ar bevenner dibenn \'$2\' er patrom regex "$1"',
	'replaceset-error-regexbadmodifier' => "Direizh eo ar c'hemmer regex '$1'.",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'replaceset-desc' => 'Dodaje parsersku funkciju nowiki>{{#replaceset}}</nowiki> korištenu za zamjenu sekcija teksta sa formatiranim podacima',
	'replaceset-error-calllimit' => 'Ograničenje poziva ReplaceSet je dostignuto.', # Fuzzy
	'replaceset-error-regexnoend' => "Šemi regularnih izraza ''$1'' nedostaje završni razdjelnik '$2'",
	'replaceset-error-regexbadmodifier' => "Modifikator regularnih izraza '$1' nije valjan.",
);

/** German (Deutsch)
 * @author Imre
 * @author Metalhead64
 */
$messages['de'] = array(
	'replaceset-desc' => 'Fügt die Parserfunktion <nowiki>{{#replaceset}}</nowiki> hinzu, um Textabschnitte mit formatierten Daten zu ersetzen',
	'replaceset-error-calllimit' => 'Das Abruflimit für ReplaceSet ($1) wurde erreicht.',
	'replaceset-error-regexnoend' => 'Im Regex-Muster „$1“ fehlt der Endbegrenzer „$2“',
	'replaceset-error-regexbadmodifier' => 'Der Regex-Modifier „$1“ ist nicht gültig.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'replaceset-desc' => 'Pśidawa parserowu funkciju <nowiki>{{#replaceset}}</nowiki>, wužywanu za wuměnjenje tekstowych wótrězkow z formatěrowanymi datami',
	'replaceset-error-calllimit' => 'Limit zawołanjow ReplaceSet jo dojśpjony.', # Fuzzy
	'replaceset-error-regexnoend' => 'Mustroju regularnych wurazow "$1" falujo kóńcne źělatko \'$2\'',
	'replaceset-error-regexbadmodifier' => "Modifikator regularnych wurazow '$1' njejo płaśiwy.",
);

/** Greek (Ελληνικά)
 * @author Omnipaedista
 */
$messages['el'] = array(
	'replaceset-error-regexnoend' => 'Το πρότυπο τακτικής έκφρασης "$1" υπολείπεται του ληκτικού χαρακτήρα \'$2\'',
	'replaceset-error-regexbadmodifier' => "Ο τροποποιητής τακτικής έκφρασης '$1' δεν είναι έγκυρος.",
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Translationista
 */
$messages['es'] = array(
	'replaceset-desc' => 'Añade una función parser <nowiki>{{#replaceset}}</nowiki> utilizada para reemplazar secciones de texto con información formateada',
	'replaceset-error-calllimit' => 'Se ha alcanzado el límite ($1) de las llamadas a la función "ReplaceSet".',
	'replaceset-error-regexnoend' => 'Al patrón de expresión regular "$1" le falta el delimitador final \'$2\'',
	'replaceset-error-regexbadmodifier' => "El modificador de expresión regular '$1' es inválido.",
);

/** Finnish (suomi)
 * @author Centerlink
 * @author Crt
 * @author Nike
 * @author Str4nd
 */
$messages['fi'] = array(
	'replaceset-desc' => 'Lisää <nowiki>{{#replaceset}}</nowiki>-jäsenninfunktion, jota käytetään tekstiosioiden korvaamiseen muotoillulla datalla.',
	'replaceset-error-calllimit' => 'ReplaceSet-funktion kutsukertojen enimmäismäärä ($1) on saavutettu.',
	'replaceset-error-regexnoend' => 'Säännöllisestä lausekkeesta ”$1” puuttuu loppurajoitin ”$2”',
	'replaceset-error-regexbadmodifier' => 'Säännöllisen lausekkeen määre ”$1” ei ole kelvollinen.',
);

/** French (français)
 * @author Gomoko
 * @author PieRRoMaN
 * @author Urhixidur
 * @author Verdy p
 */
$messages['fr'] = array(
	'replaceset-desc' => 'Ajoute une fonction parseur <nowiki>{{#replaceset}}</nowiki> utilisée pour remplacer des sections de texte avec des données formatées',
	'replaceset-error-calllimit' => 'La limite des appels ReplaceSet ($1) a été atteinte.',
	'replaceset-error-regexnoend' => 'Le délimiteur de fin « $2 » est manquant dans le motif de l’expression rationnelle « $1 »',
	'replaceset-error-regexbadmodifier' => 'Le modificateur d’expression rationnelle « $1 » est invalide.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'replaceset-desc' => 'Engade unha función analítica <nowiki>{{#replaceset}}</nowiki> utilizada para a substitución de fragmentos de texto por datos con formato',
	'replaceset-error-calllimit' => 'Atinxiuse o límite de chamadas da función ReplaceSet ($1).',
	'replaceset-error-regexnoend' => 'Fáltalle o delimitador de peche "$2" ao patrón de expresións regulares "$1"',
	'replaceset-error-regexbadmodifier' => 'O modificador de expresións regulares "$1" non é válido.',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'replaceset-desc' => 'Fiegt e <nowiki>{{#replaceset}}</nowiki> Parserfunktion yy, wu mer Abschnitt vu Text cha ersetze dur formatierti Date',
	'replaceset-error-calllimit' => 'D Gränz vu dr Aaruef vu ReplaceSet isch erreicht wore.', # Fuzzy
	'replaceset-error-regexnoend' => "Bim Regexbitmuschter „$1“ fählt s Änd-Begränzigszeiche '$2'",
	'replaceset-error-regexbadmodifier' => "Dr Regex-Modifier '$1' isch nit giltig.",
);

/** Hebrew (עברית)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'replaceset-desc' => 'הוספת התגית <nowiki>{{#replaceset}}</nowiki> המשמשת להחלפת מקטעים של טקסט בנתונים מעוצבים',
	'replaceset-error-calllimit' => 'מגבלת הקריאה לתגית ReplaceSet הושגה.', # Fuzzy
	'replaceset-error-regexnoend' => 'לתבנית הביטוי הרגולרי "$1" חסר מפריד הסיום \'$2\'',
	'replaceset-error-regexbadmodifier' => "תו ההכללה לביטוי הרגולרי '$1' אינו תקין.",
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'replaceset-desc' => 'Přidawa parserowu funkciju <nowiki>{{#replaceset}}</nowiki>, wužiwanu za narunanje tekstowych wotrězkow z formatowanymi datami',
	'replaceset-error-calllimit' => 'Limit zawołanjow za ReplaceSet ($1) je docpěty.',
	'replaceset-error-regexnoend' => 'Mustrej regularnych wurazow "$1" kónčne dźělatko \'$2\' pobrachuje',
	'replaceset-error-regexbadmodifier' => "Modifikator regularnych wurazow '$1' płaćiwy njeje.",
);

/** Hungarian (magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'replaceset-desc' => '<nowiki>{{#replaceset}}</nowiki> elemzőfüggvény szöveg szakaszainak formázott adatokra történő cseréjére',
	'replaceset-error-calllimit' => 'A ReplaceSet meghívási maximuma elérve.', # Fuzzy
	'replaceset-error-regexnoend' => "A „$1” regex mintának hiányzik a záró határolójele ('$2')",
	'replaceset-error-regexbadmodifier' => "A(z) '$1' reguláris kifejezés módosító nem érvényes.",
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'replaceset-desc' => 'Adde un function del analysator syntactic <nowiki>{{#replaceset}}</nowiki> pro reimplaciar sectiones de texto per datos formatate',
	'replaceset-error-calllimit' => 'Le limite de appellos al function ReplaceSet ha essite attingite.', # Fuzzy
	'replaceset-error-regexnoend' => 'Al patrono del expression regular "$1" manca le delimitator final \'$2\'',
	'replaceset-error-regexbadmodifier' => "Le modificator de expression regular '$1' non es valide.",
);

/** Indonesian (Bahasa Indonesia)
 * @author Irwangatot
 */
$messages['id'] = array(
	'replaceset-desc' => 'Masukan  <nowiki>{{#replaceset}}</nowiki> fungsi parser untuk menggantikan teks yang dipilih dengan data berformat.',
	'replaceset-error-calllimit' => 'Pemanggilan ReplaceSet sudah mencapai limit.', # Fuzzy
	'replaceset-error-regexnoend' => 'Pola regex "$1" hilang pada akhir pemisah \'$2\'',
	'replaceset-error-regexbadmodifier' => "Pengubah regex '$1' tidak sah.",
);

/** Italian (italiano)
 * @author Beta16
 * @author Civvì
 * @author Darth Kule
 * @author Nemo bis
 */
$messages['it'] = array(
	'replaceset-desc' => 'Aggiunge una funzione parser <nowiki>{{#replaceset}}</nowiki> utilizzata per la sostituzione di parti di testo con dati formattati',
	'replaceset-error-calllimit' => 'Il limite di chiamate ReplaceSet ($1) è stato raggiunto.',
	'replaceset-error-regexnoend' => 'Il delimitatore finale \'$2\' manca al pattern della regex "$1"',
	'replaceset-error-regexbadmodifier' => "Il modificatore della regex '$1' non è valido.",
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'replaceset-desc' => 'テキストの一部分を整形されたデータで置き換えるためのパーサー関数 <nowiki>{{#replaceset}}</nowiki> を追加する',
	'replaceset-error-calllimit' => 'ReplaceSet の呼び出し回数が上限 ($1) に達しました。',
	'replaceset-error-regexnoend' => '指定した正規表現「$1」には、終端を区切る記号「$2」が不足しています',
	'replaceset-error-regexbadmodifier' => '「$1」は正規表現の修飾子として無効です。',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'replaceset-desc' => '형식이 지정된 데이터로 된 텍스트의 부분을 찾아 바꾸는 데 사용하는 <nowiki>{{#replaceset}}</nowiki> 파서 함수를 추가합니다',
	'replaceset-error-calllimit' => '집합바꾸기 호출 횟수 제한($1)에 도달했습니다.',
	'replaceset-error-regexnoend' => '"$1" 정규식 패턴에 \'$2\' 끝 구분 기호가 없습니다.',
	'replaceset-error-regexbadmodifier' => "'$1' 정규식 한정자가 올바르지 않습니다.",
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'replaceset-desc' => 'Deiht de <code><nowiki>{{#replaceset}}</nowiki></code> Paaserfungkßuhn em Wiki dobei, öm Afschnedde fun Täx jääje fommatteete Daate enzetuusche.',
	'replaceset-error-calllimit' => 'De Oproofjränz ($1) för <i lang="en">ReplaceSet</i> es ärreisch.',
	'replaceset-error-regexnoend' => 'En däm rejolähre Ußdrok „$1“ fählt et Zeische för et Engk, wat eijentlesch e „$2“ sin mööt.',
	'replaceset-error-regexbadmodifier' => 'En däm rejolähre Ußdrok es dat „$1“ e onjöltisch Zeijsche för en Veränderung udder en jenouere Beschtemmong.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'replaceset-desc' => "Setzt eng <nowiki>{{#replaceset}}</nowiki> Parser-Fonctioun derbäi déi benotzt gëtt fir Text-Abschnitter duerch formatéiert Daten z'ersetzen",
	'replaceset-error-calllimit' => "D'Limit ($1) fir d'Opruffe vu ''ReplaceSet'' gouf erreecht.",
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'replaceset-desc' => 'Додава <nowiki>{{#replaceset}}</nowiki> парсерска функција која се користи за заменување на делови од текстот со форматирани податоци',
	'replaceset-error-calllimit' => 'Достигната е границата ($1) на повикувања на ReplaceSet.',
	'replaceset-error-regexnoend' => 'Во шемата „$1“ на регуларниот израз недостасува крајниот граничник „$2“',
	'replaceset-error-regexbadmodifier' => 'Модификаторот „$1“ на регуларниот израз е неважечки.',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'replaceset-desc' => 'Legger til parserfunksjonen <nowiki>{{#replaceset}}</nowiki> som brukes for å erstatte seksjoner av tekst med formattert data',
	'replaceset-error-calllimit' => 'Begrensningen i antall kall til funksjonen ReplaceSet har blitt nådd.', # Fuzzy
	'replaceset-error-regexnoend' => 'Det regulære uttrykket "$1" mangler en avsluttende avgrenser \'$2\'',
	'replaceset-error-regexbadmodifier' => "Den regulære uttrykksendreren '$1' er ugyldig.",
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author Siebrand
 */
$messages['nl'] = array(
	'replaceset-desc' => 'Voegt de parserfunctie <nowiki>{{#replaceset}}</nowiki> toe voor het vervangen van tekstdelen met opgemaakte gegevens',
	'replaceset-error-calllimit' => 'De limiet van het aantal aanroepen van ReplaceSet ($1) is bereikt.',
	'replaceset-error-regexnoend' => 'In het patroon "$1" voor de reguliere expressie ontbreekt het sluitteken "$2"',
	'replaceset-error-regexbadmodifier' => 'De modifier "$1" van de reguliere expressie is niet geldig.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'replaceset-desc' => 'Apond una foncion parser <nowiki>{{#replaceset}}</nowiki> utilizada per remplaçar de seccions de tèxte amb de donadas formatadas',
	'replaceset-error-calllimit' => "Lo limit dels apèls a la foncion ''ReplaceSet'' es estat atench.", # Fuzzy
	'replaceset-error-regexnoend' => 'Lo delimitador de fin « $2 » es mancant dins lo motiu de l’expression regulara « $1 »',
	'replaceset-error-regexbadmodifier' => 'Lo modificador d’expression regulara  « $1 » es invalid.',
);

/** Polish (polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'replaceset-desc' => 'Dodaje funkcję parsera <nowiki>{{#replaceset}}</nowiki> wykorzystywaną do zastępowania części tekstu sformatowanymi danymi',
	'replaceset-error-calllimit' => 'Został osiągnięty limit liczby wywołań ReplaceSet.', # Fuzzy
	'replaceset-error-regexnoend' => "Brak końcowego separatora '$2' w wyrażeniu regularnym wzorca „$1”",
	'replaceset-error-regexbadmodifier' => "Nieprawidłowy modyfikator '$1' wyrażenia regularnego.",
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'replaceset-desc' => 'A gionta na funsion dël parser <nowiki>{{#replaceset}}</nowiki> dovrà për rimpiassé session ëd test con dat formatà',
	'replaceset-error-calllimit' => "Ël lìmit dle ciamà ReplaceSet ($1) a l'é stàit argionzù.",
	'replaceset-error-regexnoend' => 'Ël regex pattern "$1" a l\'ha pa ëd delimitador final \'$2\'',
	'replaceset-error-regexbadmodifier' => "Ël modificador ëd regex '$1' a l'é pa bon.",
);

/** Portuguese (português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'replaceset-desc' => "Adiciona ao analisador sintáctico ''(parser)'' a função <nowiki>{{#replaceset}}</nowiki> usada para substituir secções de texto por dados formatados",
	'replaceset-error-calllimit' => 'Foi atingido o limite de chamadas ao ReplaceSet.', # Fuzzy
	'replaceset-error-regexnoend' => "Falta o delimitador final '\$2' à expressão regular ''(regex)'' \"\$1\"",
	'replaceset-error-regexbadmodifier' => "O modificador de expressões regulares ''(regex)'' '$1' não é válido",
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'replaceset-desc' => 'Adiciona a função de análise <nowiki>{{#replaceset}}</nowiki> utilizada para substituir seções de texto com dados formatados',
	'replaceset-error-calllimit' => 'O limite de chamadas de ReplaceSet foi alcançado.', # Fuzzy
	'replaceset-error-regexnoend' => 'A expressão regular "$1" está sem um delimitador final \'$2\'',
	'replaceset-error-regexbadmodifier' => "O modificador de expressão regular '$1' não é válido",
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'replaceset-desc' => "Aggiunge 'na funzione de l' analizzatore <nowiki>{{#replaceset}}</nowiki> ausate pe sostituì le seziune de teste cu le date formattate",
	'replaceset-error-calllimit' => "'U limite de chiamate a ReplaceSet ($1) ha state raggiunde.",
	'replaceset-error-regexnoend' => "Jndr'à 'u pattern de regex \"\$1\" non ge stè ste 'u delimitatore finale '\$2'",
	'replaceset-error-regexbadmodifier' => "'U modificatore de regex '$1' non g'è valide.",
);

/** Russian (русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'replaceset-desc' => 'Добавляет функцию парсера <nowiki>{{#replaceset}}</nowiki>, для замены участков текста с форматированными данными',
	'replaceset-error-calllimit' => 'Достигнут предел вызовов ReplaceSet.', # Fuzzy
	'replaceset-error-regexnoend' => 'В шаблоне регулярного выражения «$1» отсутствует завершающий разделитель «$2»',
	'replaceset-error-regexbadmodifier' => 'Модификатор регулярного выражения «$1» недействителен.',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'replaceset-desc' => 'Pridáva funkciu syntaktického analyzátora <nowiki>{{#replaceset}}</nowiki> na náhradu sekcií textu formátovanými údajmi',
	'replaceset-error-calllimit' => 'Bol dosiahnutý limit volaní ReplaceSet.', # Fuzzy
	'replaceset-error-regexnoend' => 'Regulárnemu výrazu „$1“ chýba ukončovací oddeľovač „$2“',
	'replaceset-error-regexbadmodifier' => 'Modifikátor regulárneho výrazu „$1“ nie je platný.',
);

/** Swedish (svenska)
 * @author Boivie
 * @author Fluff
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'replaceset-desc' => 'Lägger till parsefunktionen <nowiki>{{#replaceset}}</nowiki> som används för att ersätta sektioner av text med formaterad data',
	'replaceset-error-calllimit' => 'Begränsningen i antal anrop till funktionen ReplaceSet har uppnåtts ($1).',
	'replaceset-error-regexnoend' => 'Det reguljära uttrycket "$1" saknar en avslutande avgränsare \'$2\'',
	'replaceset-error-regexbadmodifier' => "Regex-modifiern '$1' är inte giltig.",
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'replaceset-desc' => 'Nagdaragdag ng isang tungkuling pangparser na <nowiki>{{#replaceset}}</nowiki> na ginagamit sa pagpapalit ng mga seksyon ng teksto ng dato na binigyan ng anyo',
	'replaceset-error-calllimit' => 'Naabot na ang pangtawag ng hangganan ng ReplaceSet.', # Fuzzy
	'replaceset-error-regexnoend' => 'Kulang ng pangtanggal ng hangganang $2\' ang padrong "$1" ng regex',
	'replaceset-error-regexbadmodifier' => "Hindi tanggap ang panturing na '$1' ng regex.",
);

/** Turkish (Türkçe)
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'replaceset-desc' => 'Biçimlendirilmiş veri içeren metin bölümlerinin değiştirilmesi için <nowiki>{{#replaceset}}</nowiki> ayrıştırıcı fonksiyonu ekler',
	'replaceset-error-calllimit' => 'ReplaceSet çağrı sınırına ulaşıldı.', # Fuzzy
	'replaceset-error-regexnoend' => 'Regex örüntüsü "$1", \'$2\' sınırlayıcısına sahip değil',
	'replaceset-error-regexbadmodifier' => "Regex değiştiricisi '$1' geçerli değil.",
);

/** Ukrainian (українська)
 * @author Prima klasy4na
 * @author Ата
 */
$messages['uk'] = array(
	'replaceset-desc' => 'Додає функцію парсеру <nowiki>{{#replaceset}}</nowiki>, яка використовується для заміни ділянок тексту з відформатованими даними',
	'replaceset-error-calllimit' => 'Досягнуто межі викликів ReplaceSet ($1).',
	'replaceset-error-regexnoend' => 'В шаблоні регулярного виразу "$1" відсутній кінцевий роздільник \'$2\'',
	'replaceset-error-regexbadmodifier' => "Модифікатор регулярного виразу '$1' недійсний.",
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'replaceset-desc' => '添加<nowiki>{{#replaceset}}</nowiki>解析器函数，用格式化的数据替代部分文本',
	'replaceset-error-calllimit' => '该ReplaceSet已达到调用限制 ($1)。',
	'replaceset-error-regexnoend' => '正则表达式“$1”缺少结束定界符“$2”',
	'replaceset-error-regexbadmodifier' => '正则表达式修饰符“$1”无效。',
);
