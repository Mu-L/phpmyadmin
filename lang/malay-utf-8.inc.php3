<?php
/* $Id$ */

/*
Projek Penterjemahan (l10n) phpmyadmin.net boleh diakses di laman http://shapik.johordt.com/l10n
Projek ini diusahakan oleh saya - sicksand - Mohammad Shafiq Mohd Mustapa
Ditujukan untuk sayang saya Nur Khairiyah.
Antara yang menjayakan projek ini ialah (turutan bukan keutamaan)

Asrul Munir Bin Azizan - ntahsapentah@hotmail.com
Hasbullah - exs2me@hotmail.com
sot - sid80@yahoo.com
silla - roscla@yahoo.com
bagaksasa - bagaksasa@hotmail.com
Bustamam Harun - bustamam98@yahoo.com
Hasbullah Bin Pit - sebol@ikhlas.com, Merlimau
nina - nina@hotmail.com
muslim - sayamuslim@hotmail.com
ejoe - webmaster@ejoe.net
huhu - huhu@huh.net
redkod - r3dkod@yahoo.com
*/

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$timespanfmt = '%s hari, %s jam, %s minit dan %s saat';

$day_of_week = array('Aha', 'Isn', 'Sel', 'Rab', 'Kha', 'Jum');
$month = array('Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogos', 'Sept', 'Okt', 'Nov', 'Dis');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAPrimaryKey = 'Kekunci utama telah ditambah pada %s';
$strAbortedClients = 'DiBatalkan';
$strAccessDenied = 'Akses dinafikan';
$strAction = 'Aksi';
$strAddDeleteColumn = 'Tambah/Padam Kolum Medan';
$strAddDeleteRow = 'Tambah/Padam Baris Kriteria';
$strAddNewField = 'Tambah medan baru';
$strAddPriv = 'Tambah privilej baru';
$strAddPrivMessage = 'Anda telah menambah privilej baru.';
$strAddSearchConditions = 'Tambah kriteria carian (badan bagi klausa "where"):';
$strAddToIndex = 'Tambah ke indeks &nbsp;%s&nbsp;kolum';
$strAddUser = 'Tambah Pengguna Baru';
$strAddUserMessage = 'Anda telah menambah pengguna baru.';
$strAffectedRows = 'Baris yang terlibat:';
$strAfter = 'Selepas %s';
$strAfterInsertBack = 'Kembali ke muka sebelumnya';
$strAfterInsertNewInsert = 'Tambah baris yang baru';
$strAll = 'Semua';
$strAllTableSameWidth = 'paparkan semua Jadual dengan kelebaran yang sama?';
$strAlterOrderBy = 'Alter table order by';
$strAnIndex = 'Indeks telah ditambah pada %s';
$strAnalyzeTable = 'Analyze table';
$strAnd = 'Dan';
$strAny = 'Sebarang';
$strAnyColumn = 'Sebarang Kolum';
$strAnyDatabase = 'Sebarang pangkalan data';
$strAnyHost = 'Sebarang hos';
$strAnyTable = 'Sebarang jadual';
$strAnyUser = 'Sebarang pengguna';
$strAscending = 'Menaik';
$strAtBeginningOfTable = 'Pada Awalan Jadual';
$strAtEndOfTable = 'Pada Akhir Jadual';
$strAttr = 'Atribut';

$strBack = 'Undur';
$strBeginCut = 'MULA SALIN';
$strBeginRaw = 'MULA MENTAH';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - jgn diubah';
$strBookmarkDeleted = 'TandaBuku telah dipadam.';
$strBookmarkLabel = 'Label';
$strBookmarkQuery = 'Tandabuku kueri-SQL';
$strBookmarkThis = 'andabuku kueri-SQL ini';
$strBookmarkView = 'Paparan sahaja';
$strBrowse = 'Lungsur';
$strBzError = 'phpMyAdmin tidak dapat memampatkan longgokan kerana terdapat masalah dalam sambungan Bz2 didalam php versi ini. Anda digalakkan untuk mengubah <code>$cfg[\'BZipDump\']</code> di fail konfigurasi phpMyAdmin kepada <code>FALSE</code>. Jika anda ingin menggunakan sambungan Bz2, anda digalakkan untuk meningkatkan versi php anda. Sila lihat laporan pepijat php %s untuk keterangan lanjut.';
$strBzip = 'bzipped';

$strCannotLogin = 'Tidak boleh log-masuk ke server MySQL';
$strCantLoadMySQL = 'tidak dapat memuat sambungan MySQL,<br />sila semak konfigurasi PHP.';
$strCantLoadRecodeIconv = 'Tidak dapat memuat iconv atau kodsemula sambungan yang diperlukan untuk menukar set aksara, konfigur php utk membolehkan penggunaan sambungan ini atau abaikan pengubahan set aksara di phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Tidak boleh menukar indekx ke PRIMARY!';
$strCantUseRecodeIconv = 'Tidak boleh menggunakan fungsi iconv mahupun libiconv mahupun recode_string apabila sambungan lapuran dimuat. Periksa konfigurasi php anda.';
$strCardinality = 'Kardinaliti';
$strCarriage = 'DiBaris baru : \\r';
$strChange = 'Ubah';
$strChangeDisplay = 'Pilih Medan untuk dipapar';
$strChangePassword = 'Ubah Katalaluan';
$strCharsetOfFile = 'Fail bagi set Aksara:';
$strCheckAll = 'Tanda Semua';
$strCheckDbPriv = 'Periksa Keutamaan Pengkalan Data';
$strCheckTable = 'Periksa Jadual';
$strChoosePage = 'Sila Pilih Laman untuk diubah';
$strColComFeat = 'Memaparkan Komen Kolum';
$strColumn = 'Kolum';
$strColumnNames = 'Nama Kolum';
$strCommand = 'Arahan';
$strComments = 'Komen';
$strCompleteInserts = 'Kemasukkan Selesai';
$strCompression = 'Mampatan';
$strConfigFileError = 'phpMyAdmin tidak dapat membaca fail konfigurasi!<br \\>Ini mungkin terjadi apabila ada kesalahan dalam php ataupun php tidak jumpa fail tersebut.<br />Sila panggil fail konfigurasi menggunakan pautan dibawah dan baca kesalahan php yang diterima. Dalam kebanyakan kes quote atau semicolon tertinggal.<br />Jika kamu terima laman kosong, semuanya berjalan lancar.';
$strConfigureTableCoord = 'Sila konfigurasikan kordinat bagi jadual %s';
$strConfirm = 'Anda pasti mahu lakukan?';
$strConnections = 'Hubungan';
$strCookiesRequired = 'Cecikut mestilah dihidupkan ketika ini.';
$strCopyTable = 'Salin jadual ke (pangkalandata<b>.</b>jadual):';
$strCopyTableOK = 'Jadual %s telah disalin ke %s.';
$strCouldNotKill = 'phpMyAdmin tidak dapat mematikan bebenang %s. Ianya mungkin telah ditutup.';
$strCreate = 'Cipta';
$strCreateIndex = 'Cipta indeks pada &nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Cipta indeks baru';
$strCreateNewDatabase = 'Cipta pangkalan data baru';
$strCreateNewTable = 'Cipta jadual baru pada pangkalan data %s';
$strCreatePage = 'Cipta Halaman baru';
$strCreatePdfFeat = 'Ciptaan bagi PDF';
$strCriteria = 'Kriteria';

$strData = 'Data';
$strDataDict = 'Kamus Data';
$strDataOnly = 'Data sahaja';
$strDatabase = 'Pangkalan Data ';
$strDatabaseHasBeenDropped = 'angkalan data %s telah digugurkan.';
$strDatabaseWildcard = 'Pangkalan data (wildcard diizinkan):';
$strDatabases = 'pangkalan data';
$strDatabasesStats = 'Statistik pangkalan data';
$strDefault = 'Asal';
$strDelete = 'Padam';
$strDeleteFailed = 'Pemadaman gagal!';
$strDeleteUserMessage = 'Anda telah memadam pengguna %s.';
$strDeleted = 'Baris telah dipadam';
$strDeletedRows = 'Baris dipadam:';
$strDescending = 'Menurun';
$strDisabled = 'Tidak Membenarkan';
$strDisplay = 'Papar';
$strDisplayFeat = 'Paparkan Ciri-ciri';
$strDisplayOrder = 'Turutan paparan:';
$strDisplayPDF = 'Papar Skema PDF';
$strDoAQuery = 'Lakukan "kueri melalui contoh" (wilidcard: "%")';
$strDoYouReally = 'Adakah anda ingin ';
$strDocu = 'Dokumentasi';
$strDrop = 'Gugur';
$strDropDB = 'Gugurkan pangkalan data %s';
$strDropTable = 'Gugurkan jadual';
$strDumpXRows = 'Longgok %s baris bermula pada rekod # %s.';
$strDumpingData = 'Melonggok data bagi jadual';
$strDynamic = 'dinamik';

$strEdit = 'Ubah';
$strEditPDFPages = 'Ubah Halaman PDF';
$strEditPrivileges = 'Ubah Privilej';
$strEffective = 'Berkesan';
$strEmpty = 'Kosong';
$strEmptyResultSet = 'MySQL memulangkan set hasil kosong (i.e. sifar baris)';
$strEnabled = 'Membenarkan';
$strEnd = 'Tamat';
$strEndCut = 'TAMAT SALIN';
$strEndRaw = 'TAMAT MENTAH';
$strEnglishPrivileges = ' Nota: Nama privilej MySQL adalah dinyatakan dalam B.Inggeris ';
$strError = 'Ralat';
$strExplain = 'Terangkan Kod SQL';
$strExport = 'Eksport';
$strExportToXML = 'Eksport ke format XML';
$strExtendedInserts = 'Penyelitan Lanjutan';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Percubaan Gagal';
$strField = 'Medan';
$strFieldHasBeenDropped = 'Medan %s telah digugurkan';
$strFields = 'Medan';
$strFieldsEmpty = ' Bilangan medan adalah kosong! ';
$strFieldsEnclosedBy = 'Medan disertai oleh';
$strFieldsEscapedBy = 'Medan dilarikan oleh';
$strFieldsTerminatedBy = 'Medan dihapuskan oleh';
$strFixed = 'tetap';
$strFlushTable = 'Buang jadual ("FLUSH")';
$strFormEmpty = 'Kehilangan nilai pada borang! !';
$strFormat = 'Format';
$strFullText = 'Teks Penuh';
$strFunction = 'Fungsi';

$strGenBy = 'Dijana oleh';
$strGenTime = 'Masa dijana';
$strGeneralRelationFeat = 'Ciri-ciri hubungan am';
$strGlobalValue = 'Nilai Global';
$strGo = 'Pergi';
$strGrants = 'Kabulkan';
$strGzip = '"digzip"';

$strHasBeenAltered = 'telah diubahsuai.';
$strHasBeenCreated = 'telah dicipta.';
$strHaveToShow = 'Anda mesti pilih sekurang-kurangnya satu Kolum untuk dipapar';
$strHome = 'Rumah';
$strHomepageOfficial = 'Laman Rasmi phpMyAdmin';
$strHomepageSourceforge = 'Laman Muaturun phpMyAdmin Sourceforge';
$strHost = 'Hos';
$strHostEmpty = 'Nama hos adalah kosong!';

$strId = 'ID';
$strIdxFulltext = 'Tekspenuh';
$strIfYouWish = 'Jika anda ingin hanya memuat sesetengah kolum jadual, nyatakan senarai medan dipisahi koma.';
$strIgnore = 'Abai';
$strImportDocSQL = 'Import Fail docSQL';
$strInUse = 'sedang digunakan';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s telah digugurkan';
$strIndexName = 'Nama indeks&nbsp;:';
$strIndexType = 'Jenis indeks&nbsp;:';
$strIndexes = 'Indeks';
$strInsecureMySQL = 'Fail Konfigurasi anda mengandungi pelengkapan (root tidak berkata laluan) yang bersesuaian dengan privilej akaun MySQL. Pelayan MySQL anda dilaksanakan dengan pelengkapan asas, ianya terdedah kepada pencerobohan, dan anda hendaklah membetulkan lubang keselamatan ini.';
$strInsert = 'Selit';
$strInsertAsNewRow = 'Selitkan baris baru';
$strInsertNewRow = 'Selitkan baris baru';
$strInsertTextfiles = 'Selit data dari fail teks ke jadual';
$strInsertedRows = 'Baris diselit:';
$strInstructions = 'Arahan';
$strInvalidName = '"%s" adalah kata pencam, anda tidak boleh menggunakan ia sebagai pangkalan data/jadual/medan .';

$strKeepPass = 'Jangan tukar katalaluan';
$strKeyname = 'Nama Kekunci';
$strKill = 'Bunuh';

$strLandscape = 'Menegak';
$strLaTeX = 'LaTeX';
$strLength = 'Panjang';
$strLengthSet = 'Panjang/Nilai*';
$strLimitNumRows = 'Bilangan baris per halaman';
$strLineFeed = 'Suapanbaris: \\n';
$strLines = 'Baris';
$strLinesTerminatedBy = 'Baris ditamatkan oleh';
$strLinkNotFound = 'Pautan tidak dijumpai';
$strLinksTo = 'Pautan ke';
$strLocationTextfile = 'Lokasi bagi fail teks';
$strLogPassword = 'Katalaluan:';
$strLogUsername = 'Namapengguna:';
$strLogin = 'Logmasuk';
$strLogout = 'Log keluar';

$strMissingBracket = 'Kehilangan Kurungan \'(\' atau \')\'';
$strModifications = 'Pengubahsuaian telah disimpan';
$strModify = 'Ubahsuai';
$strModifyIndexTopic = 'Ubahsuai indeks';
$strMoreStatusVars = 'Lagi pembolehubah status';
$strMoveTable = 'Pindahkan jadual ke (pangkalandata<b>.</b>jadual):';
$strMoveTableOK = 'Jadual %s telah dipindahkan ke %s.';
$strMySQLCharset = 'Set Aksara MySQL';
$strMySQLReloaded = 'MySQL tekah diulangmuat.';
$strMySQLSaid = 'MySQL berkata: ';
$strMySQLServerProcess = 'MySQL  %pma_s1% dilaksana pada %pma_s2% sebagai %pma_s3%';
$strMySQLShowProcess = 'Papar proses';
$strMySQLShowStatus = 'Papar maklumat masalaksana MySQL';
$strMySQLShowVars = 'Papar pembolehubah sistem MySQL';

$strName = 'Nama';
$strNext = 'Berikut';
$strNo = 'Tidak';
$strNoDatabases = 'Tiada pangkalan data';
$strNoDescription = 'tiada keterangan';
$strNoDropDatabases = 'keterangan "DROP DATABASE" di tidak aktifkan .';
$strNoExplain = 'Skip Explain SQL';
$strNoFrames = 'phpMyAdmin lebih mesra dengan pelayar web <b>menyokong-kerangka</b> seperti mozilla.';
$strNoIndex = 'Tiada indeks ditafrifkan!';
$strNoIndexPartsDefined = 'Tiada bahagian indeks ditakrifkan!';
$strNoModification = 'Tiada perubahan';
$strNoPassword = 'Tiada Katalaluan';
$strNoPhp = 'Tanpa Kod PHP';
$strNoPrivileges = 'Tiada Privilej';
$strNoQuery = 'Tiada kueri SQL!';
$strNoRights = 'Anda tidak mempunyai hak mencukupi untuk berada disini sekarang!';
$strNoTablesFound = 'Tiada jadual dijumpai pada pangkalan data.';
$strNoUsersFound = 'Tiada pengguna dijumpai.';
$strNoValidateSQL = 'Melangkau Pengesahan SQL';
$strNone = 'Tiada';
$strNotNumber = 'Ini adalah bukan nombor!!';
$strNotOK = 'tidak OK';
$strNotSet = 'Jadual <b>%s</b> tidak dijumpai atau ditetapkan pada %s';
$strNotValidNumber = ' adalah bukan baris yang sah!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s padanan di dalam jadual <i>%s</i>';
$strNumSearchResultsTotal = '<b>Jumlah</b>: <i>%s</i> padanan';
$strNumTables = 'Jadual-jadual';

$strOK = 'OK';
$strOftenQuotation = 'Selalu tanda semakan. OPTIONALLY bermaksud hanya medan char dan varchar disertakan oleh "disertakan oleh"-aksara.';
$strOperations = 'Operasi';
$strOptimizeTable = 'Optimakan jadual';
$strOptionalControls = 'Opsional. Kawal bagaimana menulis dan membaca aksara istimewa.';
$strOptionally = 'Opsional';
$strOptions = 'Pilihan';
$strOr = 'Atau';
$strOverhead = 'Melebihi';

$strPHP40203 = 'Anda Menggunakan PHP 4.2.3, dimana terdapat pepijat serius didalam multi-byte strings (mbstring). Lihat Laporan Pepijat PHP 19404. PHP versi ini adalah tidak digalakkan dalam menggunakan phpMyAdmin.';
$strPHPVersion = 'Versi PHP';
$strPageNumber = 'Muka Surat:';
$strPartialText = 'Sebahagian Teks';
$strPassword = 'Katalaluan';
$strPasswordEmpty = 'Katalaluan adalah kosong!';
$strPasswordNotSame = 'Katalaluan tidak sama!';
$strPdfDbSchema = 'Skema bagi pangkalan data "%s" database - Laman %s';
$strPdfInvalidPageNum = 'bilangan halaman PDF tak tertakrif!';
$strPdfInvalidTblName = 'Jadual "%s" tidak wujud!';
$strPdfNoTables = 'Tiada Jadual';
$strPerHour = 'per jam';
$strPhp = 'Cipta Kod PHP';
$strPmaDocumentation = 'Dokumentasi phpMyAdmin';
$strPmaUriError = '<tt>$cfg[PmaAbsoluteUri]</tt> MESTI disetkan di dalam fail konfigurasi.';
$strPortrait = 'Melintang';
$strPos1 = 'Mula';
$strPrevious = 'Terdahulu';
$strPrimary = 'Utama';
$strPrimaryKey = 'Kekunci utama';
$strPrimaryKeyHasBeenDropped = 'Kekunci utama telah digugurkan';
$strPrimaryKeyName = 'Nama kekunci utama mestilah... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mesti</b> nama dan <b>semesti</b> dari kekunci utama!)';
$strPrint = 'Cetak';
$strPrintView = 'Paparan Cetak';
$strPrivileges = 'Privilej';
$strProcesslist = 'Senarai Proses';
$strProperties = 'Ciri-ciri';
$strPutColNames = 'Letakkan medan di baris pertama';

$strQBE = 'Kueri';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL- kueri pada pangkalan data <b>%s</b>:';
$strQueryStatistics = '<b>Kueri Statistik</b>: Sejak ia dijalankan, %s kueri telah dihantar kepada pelayan.';
$strQueryType = 'Jenis Kueri';

$strReType = 'Ulang-taip';
$strReceived = 'DiTerima';
$strRecords = 'Rekod';
$strReferentialIntegrity = 'Semak integriti rujukan:';
$strRelationalSchema = 'Skema Hubungan';
$strRelationNotWorking = 'Ciri-ciri tambahan ini adalah untuk bekerja dengan pautan jadual yang telah tidak diaktifkan. Untuk mengetahuinya klik %shere%s.';
$strRelationView = 'Paparan Hubungan';
$strReloadFailed = 'Pengulangmuatan MySQL gagal.';
$strReloadMySQL = 'Ulangmuat MySQL';
$strRememberReload = 'Ingat untuk ulatmuat ke pelayan.';
$strRenameTable = 'Tukarnama jadual ke';
$strRenameTableOK = 'Jadual %s telah ditukarnama ke %s';
$strRepairTable = 'Baiki jadual';
$strReplace = 'Ganti';
$strReplaceTable = 'Ganti data jadual dengan fail';
$strReset = 'Ulangtetap';
$strRevoke = 'TarikBalik';
$strRevokeGrant = 'TarikBalik Keistimewaan';
$strRevokeGrantMessage = 'You have revoked the Grant privilege for %s';
$strRevokeMessage = 'Anda telah menarikbalik privilej Keistimewaan untuk %s';
$strRevokePriv = 'Anda telah menarikbalik privilej untuk %s';
$strRowLength = 'Panjang baris';
$strRowSize = ' Saiz baris ';
$strRows = 'Baris';
$strRowsFrom = 'baris bermula dari rekod #';
$strRowsModeHorizontal = 'mengufuk';
$strRowsModeOptions = 'pada mod %s dan ulang pengepala selepas %s sel';
$strRowsModeVertical = 'menegak';
$strRowsStatistic = 'Statistik Baris';
$strRunQuery = 'Hantar Kueri';
$strRunSQLQuery = 'Laksana kueri SQL pada pangkalan data %s';
$strRunning = 'dilaksana pada %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Ada kemungkinan anda akan berjumpa dengan pepijat di penghuraian SQL. Sila semak kueri anda dengan teliti, dan periksa tanda quote adalah betul dan tidak tersalah letak. Antara kegagalan lain mungkin disebabkan fail yang dimuatnaik bersama binari oleh anda berada diluar kawasan quote. Anda juga boleh mencuba kueri MySQL anda di antaramuka aturan baris (cli). Dibawah adalah kesalah Pelayan MySql , jika ada, ianya membantu anda menganalisis masalah. Jika masih terdapat pemasalahan atau masalah penghuraian dimana antaramuka aturan baris berjaya, sila kurangkan kemasukan kueri SQL kepada satu kueri yang bermasalah, dan lapurkan pepijat desertai oleh seruas data dan SALIN keratan rentas dibawah:';
$strSQLParserUserError = 'Ada kemungkin kueri SQL anda salah. Dibawah adalah kesalah Pelayan MySql , jika ada, ianya membantu anda menganalisis masalah';
$strSQLQuery = 'kueri-SQL';
$strSQLResult = 'Hasil SQL';
$strSQPBugInvalidIdentifer = 'Pengenalan TidakSah';
$strSQPBugUnclosedQuote = 'Tanda quote tidak disertakan';
$strSQPBugUnknownPunctuation = 'TandaBaca tidak dikenali';
$strSave = 'Simpan';
$strScaleFactorSmall = 'Faktor skala adalah terlalu kecil supaya muat dengan skema dalam satu halaman';
$strSearch = 'Cari';
$strSearchFormTitle = 'Cari di pangkalan data';
$strSearchInTables = 'Di dalam jadual:';
$strSearchNeedle = 'Perkataan atau nilai untuk dicari (wildcard:  "%"):';
$strSearchOption1 = 'sekurang-kurangnya satu perkataan';
$strSearchOption2 = 'semua perkataan';
$strSearchOption3 = 'Frasa tepat';
$strSearchOption4 = 'sebagai penyataan regular (regexp)';
$strSearchResultsFor = 'Hasil carian bagi "<i>%s</i>" %s:';
$strSearchType = 'Cari:';
$strSelect = 'Pilih';
$strSelectADb = 'Sila pilih pangkalan data';
$strSelectAll = 'Sila pilih pangkalan data';
$strSelectFields = 'Pilih medan (sekurang-kurangnya satu):';
$strSelectNumRows = 'pada kueri';
$strSelectTables = 'Pilih Jadual';
$strSend = 'Simpan sebagai fail';
$strSent = 'Hantar';
$strServer = 'Pelayan %s';
$strServerChoice = 'Pilihan Pelayan';
$strServerStatus = 'Informasi MasaJana';
$strServerStatusUptime = 'Pelayan MySQL ini telah berjalan selama %s. Ia dihidupkan pada %s.';
$strServerTabVariables = 'Pemboleh-pembolehubah';
$strServerTabProcesslist = 'Proses-proses';
$strServerTrafficNotes = '<b>Kesibukan Pelayan</b>: Jadual menunjukkan statistik kesibukan rangkaian pada pelayan MySQL server semenjak ia dihidupkan.';
$strServerVars = 'Pembolehubah dan Penetapan Pelayan';
$strServerVersion = 'Versi Pelayan';
$strSessionValue = 'Nilai Sessi';
$strSetEnumVal = 'Jika jenis medan ialah "enum" atau "set", sila masukkan nilai menggunakan format: \'a\',\'b\',\'c\'...<br />Jika Anda ingin menggunakan backslash ("\") atau single quote ("\'") didalam nilai tersebut, backslashes kan ia (cth \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Papar';
$strShowAll = 'Papar semua';
$strShowColor = 'Papar warna';
$strShowCols = 'Papar kolum';
$strShowDatadictAs = 'Format Kamus Data';
$strShowGrid = 'Papar grid';
$strShowPHPInfo = 'Papar maklumat PHP';
$strShowTableDimension = 'Papar dimensi jadual';
$strShowTables = 'Papar jadual';
$strShowThisQuery = ' Papar kueri ini di sini lagi ';
$strShowingRecords = 'Papar baris';
$strSingly = '(persatu)';
$strSize = 'Saiz';
$strSort = 'Isih';
$strSpaceUsage = 'Penggunaan ruang';
$strSplitWordsWithSpace = 'Perkataan dipisahkan oleh aksara ruang (" ").';
$strStatement = 'Penyataan';
$strStatus = 'Status';
$strStrucCSV = 'data CSV';
$strStrucData = 'Struktur dan data';
$strStrucDrop = 'Tambah \'drop table\'';
$strStrucExcelCSV = 'CSV untuk sata MS Excel';
$strStrucOnly = 'Struktur sahaja';
$strStructPropose = 'Cadangkan struktur jadual';
$strStructure = 'Struktur';
$strSubmit = 'Hantar';
$strSuccess = 'Kueri-SQL anda telah dilaksanakan dengan jaya';
$strSum = 'Jumlah';

$strTable = 'Jadual';
$strTableComments = 'Komen jadual';
$strTableEmpty = 'Nama jadual  adalah kosong';
$strTableHasBeenDropped = 'Jadual %s telah digugurkan';
$strTableHasBeenEmptied = 'Jadual %s telah dikosongkan';
$strTableHasBeenFlushed = 'Jadual %s telah dibuangkan';
$strTableMaintenance = 'Penyenggaraan Jadual';
$strTableOfContents = 'Kandungan';
$strTableStructure = 'Struktur jadual bagi jadual';
$strTableType = 'Jenis Jadual';
$strTables = '%s jadual';
$strTextAreaLength = ' Kerana kepanjangannya, <br />medan ini tidak boleh diedit ';
$strTheContent = 'Kandungan fail anda telah diselit.';
$strTheContents = 'Kandungan fail telah digantikan dengan kandungan dari pilihan jadual untuk baris dengan persamaan kekunci utama ataupun kekunci unik.';
$strTheTerminator = 'Pemisah bagi medan.';
$strThreadSuccessfullyKilled = 'Bebenang %s telah berjaya dimatikan.';
$strTime = 'Masa';
$strTotal = 'jumlah';
$strTotalUC = 'Jumlah';
$strTraffic = 'Kesibukan';
$strType = 'Jenis';

$strUncheckAll = 'Nyahtanda Semua';
$strUnique = 'Unik';
$strUnselectAll = 'Nyahpilih Semua';
$strUpdatePrivMessage = 'Anda telah mengemaskini privilej bagi %s.';
$strUpdateProfile = 'Kemaskini profil:';
$strUpdateProfileMessage = 'Profil telah dikemaskini.';
$strUpdateQuery = 'Kemaskini Kueri';
$strUsage = 'Penggunaan';
$strUseBackquotes = 'Sertakan nama jadual dan medan dengan backquotes';
$strUseTables = 'Guna Jadual';
$strUser = 'Pengguna';
$strUserEmpty = 'Kata Pengenalan kosong!';
$strUserName = 'Kata Pengenalan';
$strUsers = 'Pengguna-Pengguna';

$strValidateSQL = 'Mengesahkan SQL';
$strValidatorError = 'Pengesahan SQL tidak dapat disahkan. Sila semak sama ada anda telah memasang sambungan php seperti yang tercatit di %sdocumentation%s.';
$strValue = 'Nilai';
$strVar = 'Pembolehubah';
$strViewDump = 'Lihat longgokan (skema) pangkalan data';
$strViewDumpDB = 'Lihat longgokan (skema) pangkalan data';

$strWebServerUploadDirectory = 'direktori muatnaik pelayan-web';
$strWebServerUploadDirectoryError = 'Direktori muatnaik yang telah ditetapkan tidak dapat dicapai';
$strWelcome = 'Selamat Datang ke %s';
$strWithChecked = 'Dengan pilihan:';
$strWrongUser = 'Salah kata pengenalan/kata laluan. Akses dilarang.';

$strYes = 'Ya';

$strZip = '"zipped"';

// To translate
$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strLocalhost = 'Local';
$strLoginInformation = 'Login Information'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUseTextField = 'Use text field'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
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
