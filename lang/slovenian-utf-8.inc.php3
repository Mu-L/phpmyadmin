<?php
/* $Id$ */

/* By: uros kositer, agenda d.o.o. <urosh@agenda.si> */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Tor', 'Sre', 'Čet', 'Pet', 'Sob');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ob %I:%M %p';
$timespanfmt = '%s dni, %s ur, %s minut in %s sekund';

$strAPrimaryKey = 'Na %s je dodan primarni ključ';
$strAbortedClients = 'Prekinjeno';
$strAbsolutePathToDocSqlDir = 'Vnesite absolutno pot do docSQL mape na strežniku';
$strAccessDenied = 'Dostop zavrnjen';
$strAction = 'Akcija';
$strAddDeleteColumn = 'Dodaj/Odstrani stolpec \'Polje\'';
$strAddDeleteRow = 'Dodaj/Odstrani vrstico \'Kriterij\'';
$strAddNewField = 'Dodaj novo polje';
$strAddPriv = 'Dodaj nov privilegij';
$strAddPrivMessage = 'Dodali ste nov privilegij.';
$strAddPrivilegesOnDb = 'Dodaj privilegije na naslednji podatkovni bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na naslednji tabeli';
$strAddSearchConditions = 'Dodaj iskalne pogoje (telo "where" stavka):';
$strAddToIndex = 'Dodaj indeksu &nbsp;%s&nbsp;stolpec(ce)';
$strAddUser = 'Dodaj novega uporabnika';
$strAddUserMessage = 'Dodali ste novega uporabnika.';
$strAddedColumnComment = 'Dodan komentar za stolpec';
$strAddedColumnRelation = 'Dodana relacija za stolpec';
$strAdministration = 'Administracija';
$strAffectedRows = 'Spremenjene vrstice:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Nazaj na prejšnjo stran';
$strAfterInsertNewInsert = 'Vstavi še eno novo vrstico';
$strAll = 'Vse/Vsi';
$strAllTableSameWidth = 'prikažem vse tabele enake širine?';
$strAlterOrderBy = 'Spremeni vrstni red prikaza tabele za';
$strAnIndex = 'Na %s je dodan indeks';
$strAnalyzeTable = 'Analiziraj tabelo';
$strAnd = 'In';
$strAny = 'Katerikoli';
$strAnyColumn = 'Katerikoli stolpec';
$strAnyDatabase = 'Katerakoli podatkovna baza';
$strAnyHost = 'Katerikoli gostitelj';
$strAnyTable = 'Katerakoli tabela';
$strAnyUser = 'Katerikoli uporabnik';
$strAscending = 'Naraščajoče';
$strAtBeginningOfTable = 'Na začetku tabele';
$strAtEndOfTable = 'Na koncu tabele';
$strAttr = 'Atributi';

$strBack = 'Nazaj';
$strBeginCut = 'ZAČETEK IZREZA';
$strBeginRaw = 'BEGIN RAW';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne urejaj';
$strBookmarkDeleted = 'Zaznamek je odstranjen.';
$strBookmarkLabel = 'Nalepka';
$strBookmarkQuery = 'Označena SQL-poizvedba';
$strBookmarkThis = 'Označi to SQL-poizvedbo';
$strBookmarkView = 'Samo pogled';
$strBrowse = 'Prebrskaj';
$strBzError = 'phpMyAdmin ni uspel stisniti odloženih podatkov zaradi neuporabne končnice Bz2 v tej različici php. Zelo dobro bi bilo, da v konfiguracijski datoteki za phpMyAdmin spremenite ukaz <code>$cfg[\'BZipDump\']</code> v <code>FALSE</code>. Če želite izvajati stiskanje s pomočjo Bz2, boste morali posodobiti php v novejšo različico. Za podrobnosti si oglejte php poročilo o napaki %s.';
$strBzip = '"bzipano"';

$strCannotLogin = 'Ne morem se prijaviti v MySQL strežnik';
$strCantLoad = 'ne morem naložiti podaljška %s,<br />prosim preverite PHP konfiguracijo';
$strCantLoadMySQL = 'ni mogoče naložiti MySQL ekstenzij,<br /> prosimo, preverite PHP konfiguracijo.';
$strCantLoadRecodeIconv = 'Ni mogoče naložiti iconv ali recode ekstenzij, ki so potrebne za pretvorbe kodnih tabel, konfigurirajte php tako, da bo omogočal uporabo teh ekstenzij ali onemogočite pretvarjanje kodnih tabel v phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Indeksa ni mogoče preimenovati v PRIMARY!';
$strCantUseRecodeIconv = 'Ni mogoče uporabljati iconv, libiconv ali recode_string funkcij, čeprav so ekstenzije normalno naložene. Preverite konfiguracijo php.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Znak za pomik na začetek vrste (Carriage return): \\r';
$strChange = 'Spremeni';
$strChangeDisplay = 'Izberite polje za prikaz';
$strChangePassword = 'Spremeni geslo';
$strCharsetOfFile = 'Nabor znakov datoteke:';
$strCheckAll = 'Označi vse';
$strCheckDbPriv = 'Preveri privilegije podatkovne baze';
$strCheckPrivs = 'Preveri privilegije';
$strCheckPrivsLong = 'Preveri privilegije za podatkovno bazo &quot;%s&quot;.';
$strCheckTable = 'Preveri tabelo';
$strChoosePage = 'Izberite stran za urejanje';
$strColComFeat = 'Prikazovanje komentarjev stolpcev';
$strColumn = 'Stolpec';
$strColumnNames = 'Imena stolpcev';
$strColumnPrivileges = 'Privilegiji tipični za stolpec';
$strCommand = 'Ukaz';
$strComments = 'Komentarji';
$strCompleteInserts = 'Popolne \'insert\' poizvedbe';
$strCompression = 'Stiskanje';
$strConfigFileError = 'phpMyAdmin ni mogel prebrati konfiguracijske datoteke!<br />To se lahko zgodi, če php pri prevajanju konfiguracijske datoteke najde napako ali pa ne najde datoteke.<br />Prosimo, odprite konfiguracijsko datoteko s povezavo, ki je navedena spodaj in preberite dobljeno sporočilo o napaki. V večini primerov gre za manjkajoči narekovaj ali podpičje.<br />Če dobite prazno stran, je vse v redu.';
$strConfigureTableCoord = 'Prosimo, konfigurirajte koordinate za tabelo %s';
$strConfirm = 'Ali res želite to storiti?';
$strConnections = 'Povezave';
$strCookiesRequired = 'Če želite še dalje uporabljati program, morate omogočiti piškotke.';
$strCopyTable = 'Kopiraj tabelo v (podatkovna_baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je skopirana v %s.';
$strCouldNotKill = 'phpMyAdmin ni uspel prekiniti teme %s. Verjetno je že prekinjena.';
$strCreate = 'Ustvari';
$strCreateIndex = 'Ustvari indeks na&nbsp;%s&nbsp;stolpcih';
$strCreateIndexTopic = 'Ustvari nov indeks';
$strCreateNewDatabase = 'Ustvari novo podatkovno bazo';
$strCreateNewTable = 'Ustvari novo tabelo v podatkovni bazi %s';
$strCreatePage = 'Ustvari novo stran';
$strCreatePdfFeat = 'Ustvarjanje PDF datotek';
$strCriteria = 'Kriteriji';

$strDBGContext = 'Kontekst';
$strDBGContextID = 'Kontekst ID';
$strDBGHits = 'Zadetki';
$strDBGLine = 'Vrstica';
$strDBGMaxTimeMs = 'Največji čas, ms';
$strDBGMinTimeMs = 'Najmanjši čas, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Čas/Zadetek, ms';
$strDBGTotalTimeMs = 'Skupni čas, ms';
$strData = 'Podatki';
$strDataDict = 'Podatkovni slovar';
$strDataOnly = 'Samo podatki';
$strDatabase = 'Podatkovna baza ';
$strDatabaseHasBeenDropped = 'Podatkovna baza %s je zavržena.';
$strDatabaseWildcard = 'Podatkovna baza (nadomestni znaki dovoljeni):';
$strDatabases = 'podatkovne baze';
$strDatabasesDropped = '%s podatkovne baze so uspešno zavržene.';
$strDatabasesStats = 'Statistika podatkovnih baz';
$strDatabasesStatsDisable = 'Onemogoči statistiko';
$strDatabasesStatsEnable = 'Omogoči statistiko';
$strDatabasesStatsHeavyTraffic = 'Obvestilo: Omogočitev statistike podatkovne baze lahko povzroči močno povečan promet med spletnim in podatkovnim strežnikom.';
$strDbPrivileges = 'Privilegiji tipični za podatkovno bazo';
$strDefault = 'Privzeto';
$strDelete = 'Izbriši';
$strDeleteAndFlush = 'Izbriši uporabnike in potem osveži privilegije.';
$strDeleteAndFlushDescr = 'To je najboljši način, vendar lahko osveževanje privilegijev traja nekaj časa.';
$strDeleteFailed = 'Brisanje ni uspelo!';
$strDeleteUserMessage = 'Izbrisali ste uporabnika %s.';
$strDeleted = 'Vrstica je izbrisana';
$strDeletedRows = 'Izbrisane vrstice:';
$strDeleting = 'Brišem %s';
$strDescending = 'Padajoče';
$strDisabled = 'Onemogočeno';
$strDisplay = 'Prikaži';
$strDisplayFeat = 'Prikaži lastnosti';
$strDisplayOrder = 'Vrstni red prikaza:';
$strDisplayPDF = 'Prikaži PDF shemo';
$strDoAQuery = 'Izvedi "query by example" (nadomestni znak: "%")';
$strDoYouReally = 'Ali res želite ';
$strDocu = 'Dokumentacija';
$strDrop = 'Zavrži';
$strDropDB = 'Zavrži podatkovno bazo %s';
$strDropSelectedDatabases = 'Zavrži izbrane podatkovne baze';
$strDropTable = 'Zavrži tabelo';
$strDropUsersDb = 'Izbriši podatkovne baze, ki imajo enako ime kot uporabniki.';
$strDumpXRows = 'Odloži %s vrstic, začni z zapisom # %s.';
$strDumpingData = 'Odloži podatke za tabelo';
$strDynamic = 'dinamično';

$strEdit = 'Uredi';
$strEditPDFPages = 'Uredi PDF strani';
$strEditPrivileges = 'Uredi privilegije';
$strEffective = 'Učinkovito';
$strEmpty = 'Izprazni';
$strEmptyResultSet = 'MySQL je vrnil kot rezultat prazno množico (npr. nič vrstic).';
$strEnabled = 'Omogočeno';
$strEnd = 'Konec';
$strEndCut = 'KONEC IZREZA';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Opomba: Imena MySQL privilegijev so zapisana v angleščini ';
$strError = 'Napaka';
$strExplain = 'Razloži SQL stavek';
$strExport = 'Izvozi';
$strExportToXML = 'Izvozi v XML obliko';
$strExtendedInserts = 'Razširjene \'insert\' poizvedbe';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspeli poizkusi';
$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je zavrženo';
$strFields = 'Polja';
$strFieldsEmpty = ' Števec polj je prazen! ';
$strFieldsEnclosedBy = 'Polja obdana z';
$strFieldsEscapedBy = 'Polja izognjena z';
$strFieldsTerminatedBy = 'Polja zaključena z';
$strFileCouldNotBeRead = 'Ne morem prebrati datoteke';
$strFixed = 'fiksno';
$strFlushPrivilegesNote = 'Obvestilo: phpMyAdmin dobi podatke o uporabnikovih privilegijih iz MySQL tabel privilegijev. Vsebina teh tabel se lahko razlikuje od privilegijev, ki jih uporablja strežnik, če so bile tabele ročno spremenjene. V tem primeru morate, preden nadaljujete, osvežiti privilegije.';
$strFlushTable = 'Počisti tabelo ("FLUSH")';
$strFormEmpty = 'V obliki manjka vrednost !';
$strFormat = 'Oblika';
$strFullText = 'Polna besedila';
$strFunction = 'Funkcija';

$strGenBy = 'Ustvaril';
$strGenTime = 'Čas nastanka';
$strGeneralRelationFeat = 'Splošne lastnosti relacij';
$strGlobalPrivileges = 'Globalni privilegiji';
$strGlobalValue = 'Skupna vrednost';
$strGo = 'Izvedi';
$strGrantOption = 'Dovoli';
$strGrants = 'Dovoljenja';
$strGzip = '"gzipano"';

$strHasBeenAltered = 'je bil spremenjen(a).';
$strHasBeenCreated = 'je bil ustvarjen(a).';
$strHaveToShow = 'Za prikaz morate izbrati morate vsaj en stolpec';
$strHome = 'Domov';
$strHomepageOfficial = 'Uradna domača stran phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = 'Gostitelj';
$strHostEmpty = 'Ime gostitelja je prazno!';

$strId = 'ID';
$strIdxFulltext = 'Polno besedilo';
$strIfYouWish = 'Če bi radi naložili samo nekatere stolpce tabele, jih navedite v seznamu, kjer jih ločite z vejico.';
$strIgnore = 'Prezri';
$strIgnoringFile = 'Prezrl sem datoteko %s';
$strImportDocSQL = 'Uvozi docSQL datoteke';
$strImportFiles = 'Uvozi datoteke';
$strImportFinished = 'Uvoz končan';
$strInUse = 'v uporabi';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s je zavržen';
$strIndexName = 'Ime indeksa&nbsp;:';
$strIndexType = 'Vrsta indeksa&nbsp;:';
$strIndexes = 'Indeksi';
$strInsecureMySQL = 'Konfiguracijska datoteka vsebuje nastavitve (uporabnik root brez gesla), ki odgovarjajo privzetemu privlegiranemu računu MySQLa. MySQL strežnik teče s privzetimi nastavitvami, zato je izpostavljen vdorom. Čimprej odpravite ti dve varnostni luknji.';
$strInsert = 'Vstavi';
$strInsertAsNewRow = 'Vstavi kot novo vrstico';
$strInsertNewRow = 'Vstavi novo vrstico';
$strInsertTextfiles = 'V tabelo vstavi podatke iz datoteke z besedilom';
$strInsertedRows = 'Vstavljene vrstice:';
$strInstructions = 'Navodila';
$strInvalidName = 'beseda "%s" je rezervirana, zato je ne morete uporabiti kot ime podatkovne baze/tabele/polja.';

$strJumpToDB = 'Preskoči na podatkovno bazo &quot;%s&quot;.';
$strJustDelete = 'Samo izbriši uporabnike iz tabel privilegijev.';
$strJustDeleteDescr = '&quot;Izbrisani&quot; uporabniki lahko še vedno normalno dostopajo do strežnika, dokler ne osvežite privilegijev';

$strKeepPass = 'Ne spreminjaj gesla';
$strKeyname = 'Ime ključa';
$strKill = 'Prekini proces';

$strLaTeX = 'LaTeX';
$strLandscape = 'Ležeče';
$strLength = 'Dolžina';
$strLengthSet = 'Dolžina/Vrednosti*';
$strLimitNumRows = 'Število vrstic na stran';
$strLineFeed = 'Pomik v novo vrsto (Linefeed): \\n';
$strLines = 'Vrstice';
$strLinesTerminatedBy = 'Vrstice zaključene z';
$strLinkNotFound = 'Povezave ni mogoče najti';
$strLinksTo = 'Povezave z';
$strLocalhost = 'Lokalno';
$strLocationTextfile = 'Lokacija datoteke z besedilom';
$strLogPassword = 'Geslo:';
$strLogUsername = 'Uporabniško ime:';
$strLogin = 'Prijava';
$strLoginInformation = 'Podatki o prijavi';
$strLogout = 'Odjava';

$strMissingBracket = 'Manjkajoč oklepaj';
$strModifications = 'Spremembe so shranjene';
$strModify = 'Spremeni';
$strModifyIndexTopic = 'Spremeni indeks';
$strMoreStatusVars = 'Dodatne statusne spremenljivke';
$strMoveTable = 'Premakni tabelo v (podatkovna_baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je bila premaknjena v %s.';
$strMySQLCharset = 'MySQL kodna tabela';
$strMySQLReloaded = 'MySQL ponovno naložen.';
$strMySQLSaid = 'MySQL je vrnil: ';
$strMySQLServerProcess = 'MySQL %pma_s1% teče na %pma_s2% kot %pma_s3%';
$strMySQLShowProcess = 'Pokaži procese';
$strMySQLShowStatus = 'Pokaži tekoče informacije o MySQL';
$strMySQLShowVars = 'Pokaži sistemske spremenljivke MySQL';

$strName = 'Ime';
$strNext = 'Naslednji';
$strNo = 'Ne';
$strNoDatabases = 'Brez podatkovnih baz';
$strNoDatabasesSelected = 'Ni izbranih podatkovnih baz.';
$strNoDescription = 'brez opisa';
$strNoDropDatabases = '"DROP DATABASE" poizvedbe so izključene.';
$strNoExplain = 'Preskoči razlago SQL stavka';
$strNoFrames = 'phpMyAdmin je prijaznejši z brskalnikom, ki podpira okvirje.';
$strNoIndex = 'Ni definiranega indeksa!';
$strNoIndexPartsDefined = 'Ni definiranega dela indeksa!';
$strNoModification = 'Brez sprememb';
$strNoPassword = 'Brez gesla';
$strNoPhp = 'Brez kode PHP';
$strNoPrivileges = 'Brez privilegijev';
$strNoQuery = 'Brez SQL poizvedbe!';
$strNoRights = 'Nimate dovolj pravic, da bi bili sedaj tukaj!';
$strNoTablesFound = 'V podatkovni bazi ni mogoče najti tabel.';
$strNoUsersFound = 'Ni mogoče najti uporabnika(ov).';
$strNoUsersSelected = 'Ni izbranih uporabnikov.';
$strNoValidateSQL = 'Preskoči preverjanje pravilnosti SQL stavka';
$strNone = 'Brez';
$strNotNumber = 'To ni število!';
$strNotOK = 'Ni v redu';
$strNotSet = 'Tabele <b>%s</b> ni mogoče najti ali pa ni v %s';
$strNotValidNumber = ' ni veljavna številka vrstice!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s zadetek(ov) v tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>Skupaj:</b> <i>%s</i> zadetek(ov)';
$strNumTables = 'Ttabel';

$strOK = 'V redu';
$strOftenQuotation = 'Pogosti narekovaji. OPCIJSKO pomeni, da so samo polja tipa \'char\' in \'varchar\' obdana s temi znaki.';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiraj tabelo';
$strOptionalControls = 'Opcijsko. Narekuje način pisanja in branja posebnih znakov.';
$strOptionally = 'OPCIJSKO';
$strOptions = 'Možnosti';
$strOr = 'Ali';
$strOverhead = 'Presežek';

$strPHP40203 = 'Uporabljate PHP 4.2.3, ki ima resne težave z večbitnimi stavki (mbstring). Glej PHP poročilo o hrošču 19404. Ta verzija PHP ni priporočljiva za uporabo s phpMyAdmin.';
$strPHPVersion = 'Različica PHP';
$strPageNumber = 'Številka strani:';
$strPartialText = 'Delna besedila';
$strPassword = 'Geslo';
$strPasswordChanged = 'Geslo za %s je uspešno spremenjeno.';
$strPasswordEmpty = 'Geslo je prazno!';
$strPasswordNotSame = 'Gesli se ne ujemata!';
$strPdfDbSchema = 'Shema podatkovne baze "%s" - Stran %s';
$strPdfInvalidPageNum = 'Nedefinirna številka PDF strani!';
$strPdfInvalidTblName = 'Tabela "%s" ne obstaja!';
$strPdfNoTables = 'Ni tabel';
$strPerHour = 'na uro';
$strPhp = 'Ustvari PHP kodo';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Ukaz <tt>$cfg[\'PmaAbsoluteUri\']</tt> mora biti definiran v konfiguracijski datoteki!';
$strPortrait = 'Pokončno';
$strPos1 = 'Začetek';
$strPrevious = 'Prejšnji';
$strPrimary = 'Primarni';
$strPrimaryKey = 'Primarni ključ';
$strPrimaryKeyHasBeenDropped = 'Primarni ključ je zavržen';
$strPrimaryKeyName = 'Ime primarnega ključa mora biti... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnega ključa!)';
$strPrint = 'Natisni';
$strPrintView = 'Pogled postavitve tiskanja';
$strPrivDescAllPrivileges = 'Vsebuje vse privilegije razen GRANT.';
$strPrivDescAlter = 'Omogoča spreminjanje strukture obstoječih tabel.';
$strPrivDescCreateDb = 'Omogoča ustvarjanje novih podatkovnih baz in tabel.';
$strPrivDescCreateTbl = 'Omogoča ustvarjanje novih tabel.';
$strPrivDescCreateTmpTable = 'Omogoča ustvarjanje začasnih tabel.';
$strPrivDescDelete = 'Omogoča brisanje podatkov.';
$strPrivDescDropDb = 'Omogoča brisanje podatkovnih baz in tabel.';
$strPrivDescDropTbl = 'Omogoča brisanje tabel.';
$strPrivDescExecute = 'Omogoča poganjanje shranjenih postopkov; V tej verziji MySQL nima pomena.';
$strPrivDescFile = 'Omogoča uvažanje in izvažanje podatkov v datoteke.';
$strPrivDescGrant = 'Omogoča dodajanje uporabnikov in privilegijev brez osveževanja privilegijev.';
$strPrivDescIndex = 'Omogoča ustvarjanje in brisanje indeksov.';
$strPrivDescInsert = 'Omogoča vstavljanje in zamenjavo podatkov.';
$strPrivDescLockTables = 'Omogoča zaklepanje tabel za trenutno temo.';
$strPrivDescMaxConnections = 'Omeji število povezav, ki jih uporabnik lahko odpre v eni uri.';
$strPrivDescMaxQuestions = 'Omeji število poizved, ki jih uporabnik lahko pošlje strežniku v eni uri.';
$strPrivDescMaxUpdates = 'Omeji število ukazov za spremembo tabel ali podatkovne baze, ki jih uporabnik lahko izvrši v eni uri.';
$strPrivDescProcess3 = 'Omogoča ukinjanje procesov drugih uporabnikov.';
$strPrivDescProcess4 = 'Omogoča pregled popolnih poizvedb v spisku procesov.';
$strPrivDescReferences = 'V tej verziji MySQL nima pomena.';
$strPrivDescReload = 'Omogoča osveževanje strežnikovih nastavitev in praznjenje strežnikovih predpomnilnikov.';
$strPrivDescReplClient = 'Da uporabniku pravico poizvedovati kje so njegovi nadrejeni / podrjeni strežniki.';
$strPrivDescReplSlave = 'Potrebno za podrejene strežnike pri replikaciji.';
$strPrivDescSelect = 'Omogoča branje podatkov.';
$strPrivDescShowDb = 'Omogoča dostop do popolnega spiska podatkovnih baz';
$strPrivDescShutdown = 'Omogoča ugašanje strežnika.';
$strPrivDescSuper = 'Omogoča priklaplanje tudi če je že doseženo največje dovoljeno število priklopov; Potrebno za večino administrativnih nalog kot sta postavljanje globalnih spremenljivk in ukinjanje procesov drugih uporabnikov.';
$strPrivDescUpdate = 'Omogoča spreminjanje podatkov.';
$strPrivDescUsage = 'Brez privilegijev.';
$strPrivileges = 'Privilegiji';
$strPrivilegesReloaded = 'Uspešno sem osvežil privilegije.';
$strProcesslist = 'Seznam procesov';
$strProperties = 'Lastnosti';
$strPutColNames = 'Postavi imena polj v prvo vrstico';

$strQBE = 'Poizvedba';
$strQBEDel = 'Briši';
$strQBEIns = 'Vstavi';
$strQueryOnDb = 'SQL-poizvedba na podatkovni bazi <b>%s</b>:';
$strQueryStatistics = '<b>Statistika poizvedbe</b>: Od zagona je bilo strežniku poslanih %s poizvedb.';
$strQueryType = 'Vrsta poizvedbe';

$strReType = 'Ponovno vnesi';
$strReceived = 'Prejeto';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Preveri referenčno integriteto:';
$strRelationNotWorking = 'Dodatne funkcije za delo s povezanimi tabelami so bile izkjučene. Če želite izvedeti zakaj, kliknite %stukaj%s.';
$strRelationView = 'Pogled relacij';
$strRelationalSchema = 'Relacijska shema';
$strReloadFailed = 'Ponovno nalaganje MySQL ni uspelo.';
$strReloadMySQL = 'Ponovno naloži MySQL';
$strReloadingThePrivileges = 'Osvežujem privilegije';
$strRememberReload = 'Ne pozabite ponovno naložiti strežnika.';
$strRemoveSelectedUsers = 'Izbriši izbrane uporabnike';
$strRenameTable = 'Preimenuj tabelo v';
$strRenameTableOK = 'Tabela %s je preimenovana v %s';
$strRepairTable = 'Popravi tabelo';
$strReplace = 'Zamenjaj';
$strReplaceTable = 'Podatke v tabeli zamenjaj z datoteko';
$strReset = 'Ponastavi';
$strResourceLimits = 'Omejitve virov';
$strRevoke = 'Odvzemi';
$strRevokeAndDelete = 'Odvzemi uporabnikom aktivne privilegije in jih potem izbriši.';
$strRevokeAndDeleteDescr = 'Uporabniki bodo še vedno imeli USAGE privilegije, dokler ne osvežite privilegijev.';
$strRevokeGrant = 'Odvzemi dovoljenje';
$strRevokeGrantMessage = 'Odvzeli ste dovoljenje (Grant) za %s';
$strRevokeMessage = 'Odvzeli ste privilegije za %s';
$strRevokePriv = 'Odvzemi privilegije';
$strRowLength = 'Dolžina vrstice';
$strRowSize = ' Velikost vrstice ';
$strRows = 'Vrstice';
$strRowsFrom = 'vrstice naprej od zapisa #';
$strRowsModeHorizontal = 'vodoravnem';
$strRowsModeOptions = 'v %s načinu in ponovi glavo po %s celicah';
$strRowsModeVertical = 'navpičnem';
$strRowsStatistic = 'Statistika vrstic';
$strRunQuery = 'Izvedi poizvedbo';
$strRunSQLQuery = 'Izvedi SQL poizvedbo/poizvedbe na podatkovni bazi %s';
$strRunning = 'teče na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Obstaja možnost, da ste v SQL razčlenjevalniku naleteli na hrošča. Temeljito preglejte poizvedbo in preverite, če so citati pravilni in če se ujemajo. Možno je tudi, da prenašate binarno datoteko, ki je izven področja besedila citata. Poizvedbo lahko preizkusite tudi na vmesniku ukazne vrstice MySQL. Če je strežnik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju težav. Če se bodo težave nadaljevale, ali če razčlenjevalniku ne uspe tam, kjer vmesniku ukazne vrstice uspe, potem zmanjšajte vnešeno SQL poizvedbo na tisto poizvedbo, ki povzroča težave in pošljite poročilo o napaki skupaj s podatki iz spodnjega odseka IZREZA.';
$strSQLParserUserError = 'Izgleda, da je v SQL poizvedbi prišlo do napake. Če je strežnik MySQL izpisal napako, vam le-ta lahko pomaga pri ugotavljanju težav.';
$strSQLQuery = 'SQL-poizvedba';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Neveljavni identifikator';
$strSQPBugUnclosedQuote = 'Odprt citat';
$strSQPBugUnknownPunctuation = 'Neznan niz ločil';
$strSave = 'Shrani';
$strScaleFactorSmall = 'Faktor povečava je premajhen, da bi spravili shemo na eno stran';
$strSearch = 'Iskanje';
$strSearchFormTitle = 'Išči v podatkovni bazi';
$strSearchInTables = 'V tabelah:';
$strSearchNeedle = 'Iskane besede ali vrednosti (nadomestni znak: "%"):';
$strSearchOption1 = 'katerokoli besedo';
$strSearchOption2 = 'vse besede';
$strSearchOption3 = 'točno določeno frazo';
$strSearchOption4 = 'kot \'regular expression\'';
$strSearchResultsFor = 'Rezultati iskanja "<i>%s</i>" %s:';
$strSearchType = 'Najdi:';
$strSelect = 'Izberi';
$strSelectADb = 'Prosimo, izberite podatkovno bazo';
$strSelectAll = 'Izberi vse';
$strSelectFields = 'Izberite polja (vsaj eno):';
$strSelectNumRows = 'in poizvedba';
$strSelectTables = 'Izberi tabele';
$strSend = 'Shrani kot datoteko';
$strSent = 'Poslano';
$strServer = 'Strežnik %s';
$strServerChoice = 'Izbira strežnika';
$strServerStatus = 'Podatki o izvajanju';
$strServerStatusUptime = 'MySQL strežnik deluje že %s. Zagnal se je %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Spremenljivke';
$strServerTrafficNotes = '<b>Promet na strežniku</b>: V teh tabelah je prikazana statistika obremenitve omrežja za ta MySQL strežnik, odkar je bil zagnan.';
$strServerVars = 'Spremenljivke in nastavitve strežnika';
$strServerVersion = 'Različica strežnika';
$strSessionValue = 'Vrednost seje';
$strSetEnumVal = 'Če je polje vrste "enum" ali "set", navedite vrednosti v obliki: \'a\',\'b\',\'c\'...<br /> Če želite med vrednostmi uporabiti poševnico ("\") ali enojni narekovaj ("\'"), pred tem znakom vnesite poševnico (n.pr. \'\\\\xyz\' ali \'a\\\'b\').';
$strShow = 'Pokaži';
$strShowAll = 'Pokaži vse';
$strShowColor = 'Pokaži barvo';
$strShowCols = 'Pokaži stolpce';
$strShowDatadictAs = 'Oblika podatkovnega slovarja';
$strShowGrid = 'Pokaži mrežo';
$strShowPHPInfo = 'Pokaži podatke o PHP';
$strShowTableDimension = 'Pokaži dimenzije tabel';
$strShowTables = 'Pokaži tabele';
$strShowThisQuery = ' Ponovno pokaži poizvedbo v tem oknu ';
$strShowingRecords = 'Prikazujem vrstice';
$strSingly = '(posamezno)';
$strSize = 'Velikost';
$strSort = 'Sortiraj';
$strSpaceUsage = 'Poraba prostora';
$strSplitWordsWithSpace = 'Besede so ločene s presledkom (" ").';
$strStatement = 'Izjave';
$strStatus = 'Stanje';
$strStrucCSV = 'CSV podatki';
$strStrucData = 'Struktura in podatki';
$strStrucDrop = 'Dodaj \'drop table\' poizvedbo';
$strStrucExcelCSV = 'CSV podatki za Ms Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlagaj strukturo tabele';
$strStructure = 'Struktura';
$strSubmit = 'Pošlji';
$strSuccess = 'SQL-poizvedba je bila uspešno izvedena';
$strSum = 'Vsota';

$strTable = 'Tabela';
$strTableComments = 'Komentar tabele';
$strTableEmpty = 'Ime tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je zavržena';
$strTableHasBeenEmptied = 'Tabela %s je izpraznjena';
$strTableHasBeenFlushed = 'Tabela %s je osvežena';
$strTableMaintenance = 'Vzdrževanje tabele';
$strTableOfContents = 'Vsebina';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Vrsta tabele';
$strTables = '%s tabel';
$strTblPrivileges = 'Privilegiji tipični za tabelo';
$strTextAreaLength = ' Zaradi njegove dolžine<br /> polja ne bo mogoče urejati ';
$strTheContent = 'Vsebina datoteke je vnešena.';
$strTheContents = 'Vsebina datoteke zamenja vsebino izbrane tabele v vrsticah z identičnim primarnim ali unikatnim ključem.';
$strTheTerminator = 'Zaključni znak polj.';
$strThisHost = 'Ta strežnik';
$strThisNotDirectory = 'To ni bila mapa';
$strThreadSuccessfullyKilled = 'Tema %s je bila prekinjena.';
$strTime = 'Čas';
$strTotal = 'skupaj';
$strTotalUC = 'Skupaj';
$strTraffic = 'Promet';
$strType = 'Vrsta';

$strUncheckAll = 'Odznači vse';
$strUnique = 'Unikaten';
$strUnselectAll = 'Prekliči izbor vsega';
$strUpdatePrivMessage = 'Posodobili ste privilegije za %s.';
$strUpdateProfile = 'Posodobi profil:';
$strUpdateProfileMessage = 'Profil je posodobljen.';
$strUpdateQuery = 'Osveži poizvedbo';
$strUsage = 'Uporaba';
$strUseBackquotes = 'Obdaj imena tabel in polj z enojnimi poševnimi narekovaji';
$strUseTables = 'Uporabi tabele';
$strUseTextField = 'Uporabi tekstovno polje';
$strUser = 'Uporabnik';
$strUserAlreadyExists = 'Uporabnik %s že obstaja!';
$strUserEmpty = 'Uporabniško ime je prazno!';
$strUserName = 'Uporabniško ime';
$strUserNotFound = 'Izbranega uporabnika v tabelah privilegijev nisem našel.';
$strUserOverview = 'Pregled uporabnikov';
$strUsers = 'Uporabniki';
$strUsersDeleted = 'Uspešno sem izbrisal izbrane uporabnike.';

$strValidateSQL = 'Preveri pravilnost SQL stavka';
$strValidatorError = 'Ne morem inicializirati SQL validatorja. Prosim preverite, če so nameščeni vsi php razširitve, kot je navedeno v %dokumenaciji%.';
$strValue = 'Vrednost';
$strVar = 'Spremenljivka';
$strViewDump = 'Preglej dump (shemo) tabele';
$strViewDumpDB = 'Preglej dump (shemo) podatkovne baze';

$strWebServerUploadDirectory = 'imenik za nalaganje datotek';
$strWebServerUploadDirectoryError = 'Imenik, ki ste ga določili za nalaganje, je nedosegljiv';
$strWelcome = 'Dobrodošli v %s';
$strWithChecked = 'Z označenim:';
$strWritingCommentNotPossible = 'Zapisovanje komentarjev ni mogoče';
$strWritingRelationNotPossible = 'Zapisovanje relacij ni mogoče';
$strWrongUser = 'Napačno uporabniško ime/geslo. Dostop zavrnjen.';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Obvestilo: Če postavite vrednost na 0 (nič), boste odstranili omejitev.';
$strZip = '"zipano"';
// To translate

$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a'; //to translate

$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate
$strSwitchToTable = 'Switch to copied table';  //to translate
?>
