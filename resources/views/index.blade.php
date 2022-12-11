<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jadwal Sholat</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<script async defer src="https://api-stats.banghasan.com/public/aurora.js" aurora-id="6ac0863338cd85f88d7be21a895df8f6"></script>
</head>
<body>
	<div class="center hide" id="tunggu">
		<p>Mohon Tunggu...</p>
		<progress value="0" max="12" id="tunggu_value"></progress>
	</div>
	<div class="center hide" id="selamat-datang">
		<h1>Assalamu'laikum Wr Wb</h1>
		<h2>Selamat datang di iMasjid(Informasi Masjid)</h2>
		<p>Semoga bermanfaat bagi kita semua. aamiin</p>
		<a href="?action=setting"><button class="m2">MULAI</button></a>
		<button onclick="clearData()" style="background-color: red;">CLEAR DATA</button>
	</div>
	<div class="setting" id="setting">
		<h1 class="center">Menu Setting</h1>
		<h2>Header</h2>
		<div class="m2">
			<p>Nama Masjid</p>
			<input class="in60" type="text" id="nama" value="Masjid Al-Iman">
			<p>Alamat Masjid</p>
			<input class="in90" type="text" id="alamat" value="Ct 14, Klebengan, Sleman, Yogyakarta">
			<p>Pilih Tampilan Header</p>
			<input type="radio" name="head" id="head-type-1" checked="checked"><img class="w90" src="img/head-type-1.png">
			<br>
			<input type="radio" name="head" id="head-type-2"><img class="w90" src="img/head-type-2.png">
			<br>
			<input type="radio" name="head" id="head-type-3"><img class="w90" src="img/head-type-3.png">
			<br>
			<br>
			<p>Pilih Sembunyikan Item</p>
			<input type="checkbox" id="hide-alamat">
			<label for="hide-alamat">Sembunyikan Alamat Masjid</label>
			<br>
			<input type="checkbox" id="hide-jam">
			<label for="hide-jam">Sembunyikan Jam Digital</label>
			<br>
			<input type="checkbox" id="hide-jam-detik">
			<label for="hide-jam-detik">Sembunyikan Detikan Jam</label>
			<br>
			<input type="checkbox" id="hide-tanggal-masehi">
			<label for="hide-tanggal-masehi">Sembunyikan Tanggal Masehi</label>
			<br>
			<input type="checkbox" id="hide-tanggal-hijriah">
			<label for="hide-tanggal-hiriah">Sembunyikan Tanggal Hijriah</label>
			<br>
		</div>
		<h2>Content</h2>
		<div class="m2">
			<p>Url Gambar Background</p>
			<input class="in90" type="text" id="background" value="https://masjid.myquran.com/img/makkah.jpg">
			<p>Pilih Posisi Jadwal Sholat</p>
			<input type="radio" name="content" id="content-type-1" checked="checked"><img class="w40" src="img/content-type-1.png">
			<br>
			<input type="radio" name="content" id="content-type-2"><img class="w40" src="img/content-type-2.png">
			<br>
			<input type="radio" name="content" id="content-type-3"><img class="w40" src="img/content-type-3.png">
			<br>
			<input type="radio" name="content" id="content-type-4"><img class="w40" src="img/content-type-4.png">
			<br>
			<br>
			<br>
			<p>Pilih Tampilan Jadwal Sholat</p>
			<input type="radio" name="jadwal" id="jadwal-type-1" checked="checked"><img class="w60" src="img/jadwal-type-1.png">
			<br>
			<input type="radio" name="jadwal" id="jadwal-type-2"><img class="w60" src="img/jadwal-type-2.png">
			<br>
			<br>
			<br>
			<p>Pilih Lokasi</p>
			<input class="in60" type="text" id="lokasi" onkeyup="filterLokasi()" placeholder="Cari Kabupaten/Kota ...">
			<br>
			<select style="padding: 0.5vw;" onfocus="this.size=6;" onblur="this.size=1;" onchange="this.size=1; this.blur();" id="id-lokasi">
				<option value="0101">KAB. ACEH BARAT</option>
				<option value="0102">KAB. ACEH BARAT DAYA</option>
				<option value="0103">KAB. ACEH BESAR</option>
				<option value="0104">KAB. ACEH JAYA</option>
				<option value="0105">KAB. ACEH SELATAN</option>
				<option value="0106">KAB. ACEH SINGKIL</option>
				<option value="0107">KAB. ACEH TAMIANG</option>
				<option value="0108">KAB. ACEH TENGAH</option>
				<option value="0109">KAB. ACEH TENGGARA</option>
				<option value="0110">KAB. ACEH TIMUR</option>
				<option value="0111">KAB. ACEH UTARA</option>
				<option value="0112">KAB. BENER MERIAH</option>
				<option value="0113">KAB. BIREUEN</option>
				<option value="0114">KAB. GAYO LUES</option>
				<option value="0115">KAB. NAGAN RAYA</option>
				<option value="0116">KAB. PIDIE</option>
				<option value="0117">KAB. PIDIE JAYA</option>
				<option value="0118">KAB. SIMEULUE</option>
				<option value="0119">KOTA BANDA ACEH</option>
				<option value="0120">KOTA LANGSA</option>
				<option value="0121">KOTA LHOKSEUMAWE</option>
				<option value="0122">KOTA SABANG</option>
				<option value="0123">KOTA SUBULUSSALAM</option>
				<option value="0201">KAB. ASAHAN</option>
				<option value="0202">KAB. BATUBARA</option>
				<option value="0203">KAB. DAIRI</option>
				<option value="0204">KAB. DELI SERDANG</option>
				<option value="0205">KAB. HUMBANG HASUNDUTAN</option>
				<option value="0206">KAB. KARO</option>
				<option value="0207">KAB. LABUHANBATU</option>
				<option value="0208">KAB. LABUHANBATU SELATAN</option>
				<option value="0209">KAB. LABUHANBATU UTARA</option>
				<option value="0210">KAB. LANGKAT</option>
				<option value="0211">KAB. MANDAILING NATAL</option>
				<option value="0212">KAB. NIAS</option>
				<option value="0213">KAB. NIAS BARAT</option>
				<option value="0214">KAB. NIAS SELATAN</option>
				<option value="0215">KAB. NIAS UTARA</option>
				<option value="0216">KAB. PADANG LAWAS</option>
				<option value="0217">KAB. PADANG LAWAS UTARA</option>
				<option value="0218">KAB. PAKPAK BHARAT</option>
				<option value="0219">KAB. SAMOSIR</option>
				<option value="0220">KAB. SERDANG BEDAGAI</option>
				<option value="0221">KAB. SIMALUNGUN</option>
				<option value="0222">KAB. TAPANULI SELATAN</option>
				<option value="0223">KAB. TAPANULI TENGAH</option>
				<option value="0224">KAB. TAPANULI UTARA</option>
				<option value="0225">KAB. TOBA SAMOSIR</option>
				<option value="0226">KOTA BINJAI</option>
				<option value="0227">KOTA GUNUNGSITOLI</option>
				<option value="0228">KOTA MEDAN</option>
				<option value="0229">KOTA PADANGSIDEMPUAN</option>
				<option value="0230">KOTA PEMATANGSIANTAR</option>
				<option value="0231">KOTA SIBOLGA</option>
				<option value="0232">KOTA TANJUNGBALAI</option>
				<option value="0233">KOTA TEBING TINGGI</option>
				<option value="0301">KAB. AGAM</option>
				<option value="0302">KAB. DHARMASRAYA</option>
				<option value="0303">KAB. KEPULAUAN MENTAWAI</option>
				<option value="0304">KAB. LIMA PULUH KOTA</option>
				<option value="0305">KAB. PADANG PARIAMAN</option>
				<option value="0306">KAB. PASAMAN</option>
				<option value="0307">KAB. PASAMAN BARAT</option>
				<option value="0308">KAB. PESISIR SELATAN</option>
				<option value="0309">KAB. SIJUNJUNG</option>
				<option value="0310">KAB. SOLOK</option>
				<option value="0311">KAB. SOLOK SELATAN</option>
				<option value="0312">KAB. TANAH DATAR</option>
				<option value="0313">KOTA BUKITTINGGI</option>
				<option value="0314">KOTA PADANG</option>
				<option value="0315">KOTA PADANGPANJANG</option>
				<option value="0316">KOTA PARIAMAN</option>
				<option value="0317">KOTA PAYAKUMBUH</option>
				<option value="0318">KOTA SAWAHLUNTO</option>
				<option value="0319">KOTA SOLOK</option>
				<option value="0401">KAB. BENGKALIS</option>
				<option value="0402">KAB. INDRAGIRI HILIR</option>
				<option value="0403">KAB. INDRAGIRI HULU</option>
				<option value="0404">KAB. KAMPAR</option>
				<option value="0405">KAB. KEPULAUAN MERANTI</option>
				<option value="0406">KAB. KUANTAN SINGINGI</option>
				<option value="0407">KAB. PELALAWAN</option>
				<option value="0408">KAB. ROKAN HILIR</option>
				<option value="0409">KAB. ROKAN HULU</option>
				<option value="0410">KAB. SIAK</option>
				<option value="0411">KOTA DUMAI</option>
				<option value="0412">KOTA PEKANBARU</option>
				<option value="0501">KAB. BINTAN</option>
				<option value="0502">KAB. KARIMUN</option>
				<option value="0503">KAB. KEPULAUAN ANAMBAS</option>
				<option value="0504">KAB. LINGGA</option>
				<option value="0505">KAB. NATUNA</option>
				<option value="0506">KOTA BATAM</option>
				<option value="0507">KOTA TANJUNG PINANG</option>
				<option value="0508">PULAU TAMBELAN KAB. BINTAN</option>
				<option value="0509">PEKAJANG KAB. LINGGA</option>
				<option value="0510">PULAU SERASAN KAB. NATUNA</option>
				<option value="0511">PULAU MIDAI KAB. NATUNA</option>
				<option value="0512">PULAU LAUT KAB. NATUNA</option>
				<option value="0601">KAB. BATANGHARI</option>
				<option value="0602">KAB. BUNGO</option>
				<option value="0603">KAB. KERINCI</option>
				<option value="0604">KAB. MERANGIN</option>
				<option value="0605">KAB. MUARO JAMBI</option>
				<option value="0606">KAB. SAROLANGUN</option>
				<option value="0607">KAB. TANJUNG JABUNG BARAT</option>
				<option value="0608">KAB. TANJUNG JABUNG TIMUR</option>
				<option value="0609">KAB. TEBO</option>
				<option value="0610">KOTA JAMBI</option>
				<option value="0611">KOTA SUNGAI PENUH</option>
				<option value="0701">KAB. BENGKULU SELATAN</option>
				<option value="0702">KAB. BENGKULU TENGAH</option>
				<option value="0703">KAB. BENGKULU UTARA</option>
				<option value="0704">KAB. KAUR</option>
				<option value="0705">KAB. KEPAHIANG</option>
				<option value="0706">KAB. LEBONG</option>
				<option value="0707">KAB. MUKOMUKO</option>
				<option value="0708">KAB. REJANG LEBONG</option>
				<option value="0709">KAB. SELUMA</option>
				<option value="0710">KOTA BENGKULU</option>
				<option value="0801">KAB. BANYUASIN</option>
				<option value="0802">KAB. EMPAT LAWANG</option>
				<option value="0803">KAB. LAHAT</option>
				<option value="0804">KAB. MUARA ENIM</option>
				<option value="0805">KAB. MUSI BANYUASIN</option>
				<option value="0806">KAB. MUSI RAWAS</option>
				<option value="0807">KAB. MUSI RAWAS UTARA</option>
				<option value="0808">KAB. OGAN ILIR</option>
				<option value="0809">KAB. OGAN KOMERING ILIR</option>
				<option value="0810">KAB. OGAN KOMERING ULU</option>
				<option value="0811">KAB. OGAN KOMERING ULU SELATAN</option>
				<option value="0812">KAB. OGAN KOMERING ULU TIMUR</option>
				<option value="0813">KAB. PENUKAL ABAB LEMATANG ILIR</option>
				<option value="0814">KOTA LUBUKLINGGAU</option>
				<option value="0815">KOTA PAGAR ALAM</option>
				<option value="0816">KOTA PALEMBANG</option>
				<option value="0817">KOTA PRABUMULIH</option>
				<option value="0901">KAB. BANGKA</option>
				<option value="0902">KAB. BANGKA BARAT</option>
				<option value="0903">KAB. BANGKA SELATAN</option>
				<option value="0904">KAB. BANGKA TENGAH</option>
				<option value="0905">KAB. BELITUNG</option>
				<option value="0906">KAB. BELITUNG TIMUR</option>
				<option value="0907">KOTA PANGKAL PINANG</option>
				<option value="1001">KAB. LAMPUNG TENGAH</option>
				<option value="1002">KAB. LAMPUNG UTARA</option>
				<option value="1003">KAB. LAMPUNG SELATAN</option>
				<option value="1004">KAB. LAMPUNG BARAT</option>
				<option value="1005">KAB. LAMPUNG TIMUR</option>
				<option value="1006">KAB. MESUJI</option>
				<option value="1007">KAB. PESAWARAN</option>
				<option value="1008">KAB. PESISIR BARAT</option>
				<option value="1009">KAB. PRINGSEWU</option>
				<option value="1010">KAB. TULANG BAWANG</option>
				<option value="1011">KAB. TULANG BAWANG BARAT</option>
				<option value="1012">KAB. TANGGAMUS</option>
				<option value="1013">KAB. WAY KANAN</option>
				<option value="1014">KOTA BANDAR LAMPUNG</option>
				<option value="1015">KOTA METRO</option>
				<option value="1101">KAB. LEBAK</option>
				<option value="1102">KAB. PANDEGLANG</option>
				<option value="1103">KAB. SERANG</option>
				<option value="1104">KAB. TANGERANG</option>
				<option value="1105">KOTA CILEGON</option>
				<option value="1106">KOTA SERANG</option>
				<option value="1107">KOTA TANGERANG</option>
				<option value="1108">KOTA TANGERANG SELATAN</option>
				<option value="1201">KAB. BANDUNG</option>
				<option value="1202">KAB. BANDUNG BARAT</option>
				<option value="1203">KAB. BEKASI</option>
				<option value="1204">KAB. BOGOR</option>
				<option value="1205">KAB. CIAMIS</option>
				<option value="1206">KAB. CIANJUR</option>
				<option value="1207">KAB. CIREBON</option>
				<option value="1208">KAB. GARUT</option>
				<option value="1209">KAB. INDRAMAYU</option>
				<option value="1210">KAB. KARAWANG</option>
				<option value="1211">KAB. KUNINGAN</option>
				<option value="1212">KAB. MAJALENGKA</option>
				<option value="1213">KAB. PANGANDARAN</option>
				<option value="1214">KAB. PURWAKARTA</option>
				<option value="1215">KAB. SUBANG</option>
				<option value="1216">KAB. SUKABUMI</option>
				<option value="1217">KAB. SUMEDANG</option>
				<option value="1218">KAB. TASIKMALAYA</option>
				<option value="1219">KOTA BANDUNG</option>
				<option value="1220">KOTA BANJAR</option>
				<option value="1221">KOTA BEKASI</option>
				<option value="1222">KOTA BOGOR</option>
				<option value="1223">KOTA CIMAHI</option>
				<option value="1224">KOTA CIREBON</option>
				<option value="1225">KOTA DEPOK</option>
				<option value="1226">KOTA SUKABUMI</option>
				<option value="1227">KOTA TASIKMALAYA</option>
				<option value="1301">KOTA JAKARTA</option>
				<option value="1302">KAB. KEPULAUAN SERIBU</option>
				<option value="1401">KAB. BANJARNEGARA</option>
				<option value="1402">KAB. BANYUMAS</option>
				<option value="1403">KAB. BATANG</option>
				<option value="1404">KAB. BLORA</option>
				<option value="1405">KAB. BOYOLALI</option>
				<option value="1406">KAB. BREBES</option>
				<option value="1407">KAB. CILACAP</option>
				<option value="1408">KAB. DEMAK</option>
				<option value="1409">KAB. GROBOGAN</option>
				<option value="1410">KAB. JEPARA</option>
				<option value="1411">KAB. KARANGANYAR</option>
				<option value="1412">KAB. KEBUMEN</option>
				<option value="1413">KAB. KENDAL</option>
				<option value="1414">KAB. KLATEN</option>
				<option value="1415">KAB. KUDUS</option>
				<option value="1416">KAB. MAGELANG</option>
				<option value="1417">KAB. PATI</option>
				<option value="1418">KAB. PEKALONGAN</option>
				<option value="1419">KAB. PEMALANG</option>
				<option value="1420">KAB. PURBALINGGA</option>
				<option value="1421">KAB. PURWOREJO</option>
				<option value="1422">KAB. REMBANG</option>
				<option value="1423">KAB. SEMARANG</option>
				<option value="1424">KAB. SRAGEN</option>
				<option value="1425">KAB. SUKOHARJO</option>
				<option value="1426">KAB. TEGAL</option>
				<option value="1427">KAB. TEMANGGUNG</option>
				<option value="1428">KAB. WONOGIRI</option>
				<option value="1429">KAB. WONOSOBO</option>
				<option value="1430">KOTA MAGELANG</option>
				<option value="1431">KOTA PEKALONGAN</option>
				<option value="1432">KOTA SALATIGA</option>
				<option value="1433">KOTA SEMARANG</option>
				<option value="1434">KOTA SURAKARTA</option>
				<option value="1435">KOTA TEGAL</option>
				<option value="1501">KAB. BANTUL</option>
				<option value="1502">KAB. GUNUNGKIDUL</option>
				<option value="1503">KAB. KULON PROGO</option>
				<option value="1504">KAB. SLEMAN</option>
				<option value="1505">KOTA YOGYAKARTA</option>
				<option value="1601">KAB. BANGKALAN</option>
				<option value="1602">KAB. BANYUWANGI</option>
				<option value="1603">KAB. BLITAR</option>
				<option value="1604">KAB. BOJONEGORO</option>
				<option value="1605">KAB. BONDOWOSO</option>
				<option value="1606">KAB. GRESIK</option>
				<option value="1607">KAB. JEMBER</option>
				<option value="1608">KAB. JOMBANG</option>
				<option value="1609">KAB. KEDIRI</option>
				<option value="1610">KAB. LAMONGAN</option>
				<option value="1611">KAB. LUMAJANG</option>
				<option value="1612">KAB. MADIUN</option>
				<option value="1613">KAB. MAGETAN</option>
				<option value="1614">KAB. MALANG</option>
				<option value="1615">KAB. MOJOKERTO</option>
				<option value="1616">KAB. NGANJUK</option>
				<option value="1617">KAB. NGAWI</option>
				<option value="1618">KAB. PACITAN</option>
				<option value="1619">KAB. PAMEKASAN</option>
				<option value="1620">KAB. PASURUAN</option>
				<option value="1621">KAB. PONOROGO</option>
				<option value="1622">KAB. PROBOLINGGO</option>
				<option value="1623">KAB. SAMPANG</option>
				<option value="1624">KAB. SIDOARJO</option>
				<option value="1625">KAB. SITUBONDO</option>
				<option value="1626">KAB. SUMENEP</option>
				<option value="1627">KAB. TRENGGALEK</option>
				<option value="1628">KAB. TUBAN</option>
				<option value="1629">KAB. TULUNGAGUNG</option>
				<option value="1630">KOTA BATU</option>
				<option value="1631">KOTA BLITAR</option>
				<option value="1632">KOTA KEDIRI</option>
				<option value="1633">KOTA MADIUN</option>
				<option value="1634">KOTA MALANG</option>
				<option value="1635">KOTA MOJOKERTO</option>
				<option value="1636">KOTA PASURUAN</option>
				<option value="1637">KOTA PROBOLINGGO</option>
				<option value="1638">KOTA SURABAYA</option>
				<option value="1701">KAB. BADUNG</option>
				<option value="1702">KAB. BANGLI</option>
				<option value="1703">KAB. BULELENG</option>
				<option value="1704">KAB. GIANYAR</option>
				<option value="1705">KAB. JEMBRANA</option>
				<option value="1706">KAB. KARANGASEM</option>
				<option value="1707">KAB. KLUNGKUNG</option>
				<option value="1708">KAB. TABANAN</option>
				<option value="1709">KOTA DENPASAR</option>
				<option value="1801">KAB. BIMA</option>
				<option value="1802">KAB. DOMPU</option>
				<option value="1803">KAB. LOMBOK BARAT</option>
				<option value="1804">KAB. LOMBOK TENGAH</option>
				<option value="1805">KAB. LOMBOK TIMUR</option>
				<option value="1806">KAB. LOMBOK UTARA</option>
				<option value="1807">KAB. SUMBAWA</option>
				<option value="1808">KAB. SUMBAWA BARAT</option>
				<option value="1809">KOTA BIMA</option>
				<option value="1810">KOTA MATARAM</option>
				<option value="1901">KAB. ALOR</option>
				<option value="1902">KAB. BELU</option>
				<option value="1903">KAB. ENDE</option>
				<option value="1904">KAB. FLORES TIMUR</option>
				<option value="1905">KAB. KUPANG</option>
				<option value="1906">KAB. LEMBATA</option>
				<option value="1907">KAB. MALAKA</option>
				<option value="1908">KAB. MANGGARAI</option>
				<option value="1909">KAB. MANGGARAI BARAT</option>
				<option value="1910">KAB. MANGGARAI TIMUR</option>
				<option value="1911">KAB. NGADA</option>
				<option value="1912">KAB. NAGEKEO</option>
				<option value="1913">KAB. ROTE NDAO</option>
				<option value="1914">KAB. SABU RAIJUA</option>
				<option value="1915">KAB. SIKKA</option>
				<option value="1916">KAB. SUMBA BARAT</option>
				<option value="1917">KAB. SUMBA BARAT DAYA</option>
				<option value="1918">KAB. SUMBA TENGAH</option>
				<option value="1919">KAB. SUMBA TIMUR</option>
				<option value="1920">KAB. TIMOR TENGAH SELATAN</option>
				<option value="1921">KAB. TIMOR TENGAH UTARA</option>
				<option value="1922">KOTA KUPANG</option>
				<option value="2001">KAB. BENGKAYANG</option>
				<option value="2002">KAB. KAPUAS HULU</option>
				<option value="2003">KAB. KAYONG UTARA</option>
				<option value="2004">KAB. KETAPANG</option>
				<option value="2005">KAB. KUBU RAYA</option>
				<option value="2006">KAB. LANDAK</option>
				<option value="2007">KAB. MELAWI</option>
				<option value="2008">KAB. MEMPAWAH</option>
				<option value="2009">KAB. SAMBAS</option>
				<option value="2010">KAB. SANGGAU</option>
				<option value="2011">KAB. SEKADAU</option>
				<option value="2012">KAB. SINTANG</option>
				<option value="2013">KOTA PONTIANAK</option>
				<option value="2014">KOTA SINGKAWANG</option>
				<option value="2101">KAB. BALANGAN</option>
				<option value="2102">KAB. BANJAR</option>
				<option value="2103">KAB. BARITO KUALA</option>
				<option value="2104">KAB. HULU SUNGAI SELATAN</option>
				<option value="2105">KAB. HULU SUNGAI TENGAH</option>
				<option value="2106">KAB. HULU SUNGAI UTARA</option>
				<option value="2107">KAB. KOTABARU</option>
				<option value="2108">KAB. TABALONG</option>
				<option value="2109">KAB. TANAH BUMBU</option>
				<option value="2110">KAB. TANAH LAUT</option>
				<option value="2111">KAB. TAPIN</option>
				<option value="2112">KOTA BANJARBARU</option>
				<option value="2113">KOTA BANJARMASIN</option>
				<option value="2201">KAB. BARITO SELATAN</option>
				<option value="2202">KAB. BARITO TIMUR</option>
				<option value="2203">KAB. BARITO UTARA</option>
				<option value="2204">KAB. GUNUNG MAS</option>
				<option value="2205">KAB. KAPUAS</option>
				<option value="2206">KAB. KATINGAN</option>
				<option value="2207">KAB. KOTAWARINGIN BARAT</option>
				<option value="2208">KAB. KOTAWARINGIN TIMUR</option>
				<option value="2209">KAB. LAMANDAU</option>
				<option value="2210">KAB. MURUNG RAYA</option>
				<option value="2211">KAB. PULANG PISAU</option>
				<option value="2212">KAB. SUKAMARA</option>
				<option value="2213">KAB. SERUYAN</option>
				<option value="2214">KOTA PALANGKARAYA</option>
				<option value="2301">KAB. BERAU</option>
				<option value="2302">KAB. KUTAI BARAT</option>
				<option value="2303">KAB. KUTAI KARTANEGARA</option>
				<option value="2304">KAB. KUTAI TIMUR</option>
				<option value="2305">KAB. MAHAKAM ULU</option>
				<option value="2306">KAB. PASER</option>
				<option value="2307">KAB. PENAJAM PASER UTARA</option>
				<option value="2308">KOTA BALIKPAPAN</option>
				<option value="2309">KOTA BONTANG</option>
				<option value="2310">KOTA SAMARINDA</option>
				<option value="2401">KAB. BULUNGAN</option>
				<option value="2402">KAB. MALINAU</option>
				<option value="2403">KAB. NUNUKAN</option>
				<option value="2404">KAB. TANA TIDUNG</option>
				<option value="2405">KOTA TARAKAN</option>
				<option value="2501">KAB. BOALEMO</option>
				<option value="2502">KAB. BONE BOLANGO</option>
				<option value="2503">KAB. GORONTALO</option>
				<option value="2504">KAB. GORONTALO UTARA</option>
				<option value="2505">KAB. POHUWATO</option>
				<option value="2506">KOTA GORONTALO</option>
				<option value="2601">KAB. BANTAENG</option>
				<option value="2602">KAB. BARRU</option>
				<option value="2603">KAB. BONE</option>
				<option value="2604">KAB. BULUKUMBA</option>
				<option value="2605">KAB. ENREKANG</option>
				<option value="2606">KAB. GOWA</option>
				<option value="2607">KAB. JENEPONTO</option>
				<option value="2608">KAB. KEPULAUAN SELAYAR</option>
				<option value="2609">KAB. LUWU</option>
				<option value="2610">KAB. LUWU TIMUR</option>
				<option value="2611">KAB. LUWU UTARA</option>
				<option value="2612">KAB. MAROS</option>
				<option value="2613">KAB. PANGKAJENE DAN KEPULAUAN</option>
				<option value="2614">KAB. PINRANG</option>
				<option value="2615">KAB. SIDENRENG RAPPANG</option>
				<option value="2616">KAB. SINJAI</option>
				<option value="2617">KAB. SOPPENG</option>
				<option value="2618">KAB. TAKALAR</option>
				<option value="2619">KAB. TANA TORAJA</option>
				<option value="2620">KAB. TORAJA UTARA</option>
				<option value="2621">KAB. WAJO</option>
				<option value="2622">KOTA MAKASSAR</option>
				<option value="2623">KOTA PALOPO</option>
				<option value="2624">KOTA PAREPARE</option>
				<option value="2701">KAB. BOMBANA</option>
				<option value="2702">KAB. BUTON</option>
				<option value="2703">KAB. BUTON SELATAN</option>
				<option value="2704">KAB. BUTON TENGAH</option>
				<option value="2705">KAB. BUTON UTARA</option>
				<option value="2706">KAB. KOLAKA</option>
				<option value="2707">KAB. KOLAKA TIMUR</option>
				<option value="2708">KAB. KOLAKA UTARA</option>
				<option value="2709">KAB. KONAWE</option>
				<option value="2710">KAB. KONAWE KEPULAUAN</option>
				<option value="2711">KAB. KONAWE SELATAN</option>
				<option value="2712">KAB. KONAWE UTARA</option>
				<option value="2713">KAB. MUNA</option>
				<option value="2714">KAB. MUNA BARAT</option>
				<option value="2715">KAB. WAKATOBI</option>
				<option value="2716">KOTA BAU-BAU</option>
				<option value="2717">KOTA KENDARI</option>
				<option value="2801">KAB. BANGGAI</option>
				<option value="2802">KAB. BANGGAI KEPULAUAN</option>
				<option value="2803">KAB. BANGGAI LAUT</option>
				<option value="2804">KAB. BUOL</option>
				<option value="2805">KAB. DONGGALA</option>
				<option value="2806">KAB. MOROWALI</option>
				<option value="2807">KAB. MOROWALI UTARA</option>
				<option value="2808">KAB. PARIGI MOUTONG</option>
				<option value="2809">KAB. POSO</option>
				<option value="2810">KAB. SIGI</option>
				<option value="2811">KAB. TOJO UNA-UNA</option>
				<option value="2812">KAB. TOLI-TOLI</option>
				<option value="2813">KOTA PALU</option>
				<option value="2901">KAB. BOLAANG MONGONDOW</option>
				<option value="2902">KAB. BOLAANG MONGONDOW SELATAN</option>
				<option value="2903">KAB. BOLAANG MONGONDOW TIMUR</option>
				<option value="2904">KAB. BOLAANG MONGONDOW UTARA</option>
				<option value="2905">KAB. KEPULAUAN SANGIHE</option>
				<option value="2906">KAB. KEPULAUAN SIAU TAGULANDANG BIARO</option>
				<option value="2907">KAB. KEPULAUAN TALAUD</option>
				<option value="2908">KAB. MINAHASA</option>
				<option value="2909">KAB. MINAHASA SELATAN</option>
				<option value="2910">KAB. MINAHASA TENGGARA</option>
				<option value="2911">KAB. MINAHASA UTARA</option>
				<option value="2912">KOTA BITUNG</option>
				<option value="2913">KOTA KOTAMOBAGU</option>
				<option value="2914">KOTA MANADO</option>
				<option value="2915">KOTA TOMOHON</option>
				<option value="3001">KAB. MAJENE</option>
				<option value="3002">KAB. MAMASA</option>
				<option value="3003">KAB. MAMUJU</option>
				<option value="3004">KAB. MAMUJU TENGAH</option>
				<option value="3005">KAB. MAMUJU UTARA</option>
				<option value="3006">KAB. POLEWALI MANDAR</option>
				<option value="3101">KAB. BURU</option>
				<option value="3102">KAB. BURU SELATAN</option>
				<option value="3103">KAB. KEPULAUAN ARU</option>
				<option value="3104">KAB. MALUKU BARAT DAYA</option>
				<option value="3105">KAB. MALUKU TENGAH</option>
				<option value="3106">KAB. MALUKU TENGGARA</option>
				<option value="3107">KAB. MALUKU TENGGARA BARAT</option>
				<option value="3108">KAB. SERAM BAGIAN BARAT</option>
				<option value="3109">KAB. SERAM BAGIAN TIMUR</option>
				<option value="3110">KOTA AMBON</option>
				<option value="3111">KOTA TUAL</option>
				<option value="3201">KAB. HALMAHERA BARAT</option>
				<option value="3202">KAB. HALMAHERA TENGAH</option>
				<option value="3203">KAB. HALMAHERA UTARA</option>
				<option value="3204">KAB. HALMAHERA SELATAN</option>
				<option value="3205">KAB. KEPULAUAN SULA</option>
				<option value="3206">KAB. HALMAHERA TIMUR</option>
				<option value="3207">KAB. PULAU MOROTAI</option>
				<option value="3208">KAB. PULAU TALIABU</option>
				<option value="3209">KOTA TERNATE</option>
				<option value="3210">KOTA TIDORE KEPULAUAN</option>
				<option value="3211">KOTA SOFIFI</option>
				<option value="3212">KOTA SOFIFI</option>
				<option value="3301">KAB. ASMAT</option>
				<option value="3302">KAB. BIAK NUMFOR</option>
				<option value="3303">KAB. BOVEN DIGOEL</option>
				<option value="3304">KAB. DEIYAI</option>
				<option value="3305">KAB. DOGIYAI</option>
				<option value="3306">KAB. INTAN JAYA</option>
				<option value="3307">KAB. JAYAPURA</option>
				<option value="3308">KAB. JAYAWIJAYA</option>
				<option value="3309">KAB. KEEROM</option>
				<option value="3310">KAB. KEPULAUAN YAPEN</option>
				<option value="3311">KAB. LANNY JAYA</option>
				<option value="3312">KAB. MAMBERAMO RAYA</option>
				<option value="3313">KAB. MAMBERAMO TENGAH</option>
				<option value="3314">KAB. MAPPI</option>
				<option value="3315">KAB. MERAUKE</option>
				<option value="3316">KAB. MIMIKA</option>
				<option value="3317">KAB. NABIRE</option>
				<option value="3318">KAB. NDUGA</option>
				<option value="3319">KAB. PANIAI</option>
				<option value="3320">KAB. PEGUNUNGAN BINTANG</option>
				<option value="3321">KAB. PUNCAK</option>
				<option value="3322">KAB. PUNCAK JAYA</option>
				<option value="3323">KAB. SARMI</option>
				<option value="3324">KAB. SUPIORI</option>
				<option value="3325">KAB. TOLIKARA</option>
				<option value="3326">KAB. WAROPEN</option>
				<option value="3327">KAB. YAHUKIMO</option>
				<option value="3328">KAB. YALIMO</option>
				<option value="3329">KOTA JAYAPURA</option>
				<option value="3330">KAB. YAPEN WAROPEN</option>
				<option value="3401">KAB. FAKFAK</option>
				<option value="3402">KAB. KAIMANA</option>
				<option value="3403">KAB. MANOKWARI</option>
				<option value="3404">KAB. MANOKWARI SELATAN</option>
				<option value="3405">KAB. MAYBRAT</option>
				<option value="3406">KAB. PEGUNUNGAN ARFAK</option>
				<option value="3407">KAB. RAJA AMPAT</option>
				<option value="3408">KAB. SORONG</option>
				<option value="3409">KAB. SORONG SELATAN</option>
				<option value="3410">KAB. TAMBRAUW</option>
				<option value="3411">KAB. TELUK BINTUNI</option>
				<option value="3412">KAB. TELUK WONDAMA</option>
				<option value="3413">KOTA SORONG</option>
			</select>
			<br>
			<br>
			<p>Penyesuaian Waktu</p>
			<label for="adj-imsak"> - Imsak : </label>
			<select class="in10" id="adj-imsak">
				<option value="-5">-5</option>
				<option value="-4">-4</option>
				<option value="-3">-3</option>
				<option value="-2">-2</option>
				<option value="-1">-1</option>
				<option value="0" selected="true">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<span>menit</span>
			<br>
			<label for="adj-subuh"> - Subuh : </label>
			<select class="in10" id="adj-subuh">
				<option value="-5">-5</option>
				<option value="-4">-4</option>
				<option value="-3">-3</option>
				<option value="-2">-2</option>
				<option value="-1">-1</option>
				<option value="0" selected="true">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<span>menit</span>
			<br>
			<label for="adj-dzuhur"> - Dzuhur : </label>
			<select class="in10" id="adj-dzuhur">
				<option value="-5">-5</option>
				<option value="-4">-4</option>
				<option value="-3">-3</option>
				<option value="-2">-2</option>
				<option value="-1">-1</option>
				<option value="0" selected="true">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<span>menit</span>
			<br>
			<label for="adj-ashar"> - Ashar : </label>
			<select class="in10" id="adj-ashar">
				<option value="-5">-5</option>
				<option value="-4">-4</option>
				<option value="-3">-3</option>
				<option value="-2">-2</option>
				<option value="-1">-1</option>
				<option value="0" selected="true">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<span>menit</span>
			<br>
			<label for="adj-maghrib"> - Maghrib : </label>
			<select class="in10" id="adj-maghrib">
				<option value="-5">-5</option>
				<option value="-4">-4</option>
				<option value="-3">-3</option>
				<option value="-2">-2</option>
				<option value="-1">-1</option>
				<option value="0" selected="true">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<span>menit</span>
			<br>
			<label for="adj-isya"> - Isya : </label>
			<select class="in10" id="adj-isya">
				<option value="-5">-5</option>
				<option value="-4">-4</option>
				<option value="-3">-3</option>
				<option value="-2">-2</option>
				<option value="-1">-1</option>
				<option value="0" selected="true">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<span>menit</span>
			<br>
		</div>
		<h2>Footer</h2>
		<div class="m2">
			<p>Informasi Pertama</p>
			<input class="in90" type="text" id="informasi-1" value="Informasi infaq bulan November 2021, sebesar Rp 1.855.000,- Semoga kita senantiasa dilancarkan dalam segala urusan sehari-hari. aamiin">
			<p>Informasi Kedua</p>
			<input class="in90" type="text" id="informasi-2" value="Tetap jaga kebersihan, kesehatan, dan terapkan pola hidup sehat. semoga kita senantiasa dalam lindungan Nya. aamiin">
		</div>
		<div class="center">
			<button onclick="reset()">RESET</button>
			<button onclick="selesai()">SELESAI</button>
		</div>
	</div>
	<div class="preview" id="preview">
		<div class="container">
			<div class="header">
				<div class="kolom" id="head-kiri">
				</div>
				<div class="kolom" id="head-tengah">
				</div>
				<div class="kolom" id="head-kanan">
				</div>
			</div>
			<div class="content" id="content">
				<div class="data">
					<p class="info">Imsak</p>
					<hr class="m0">
					<p class="info-jam" id="imsak">--:--</p>
				</div>
				<div class="data">
					<p class="info">Subuh</p>
					<hr class="m0">
					<p class="info-jam" id="subuh">--:--</p>
				</div>
				<div class="data">
					<p class="info">Dzuhur</p>
					<hr class="m0">
					<p class="info-jam" id="dzuhur">--:--</p>
				</div>
				<div class="data">
					<p class="info">Ashar</p>
					<hr class="m0">
					<p class="info-jam" id="ashar">--:--</p>
				</div>
				<div class="data">
					<p class="info">Maghrib</p>
					<hr class="m0">
					<p class="info-jam" id="maghrib">--:--</p>
				</div>
				<div class="data" id="akhir">
					<p class="info">Isya</p>
					<hr class="m0">
					<p class="info-jam" id="isya">--:--</p>
				</div>
			</div>
			<div class="reminder" id="reminder">
				<p class="text-reminder" id="waktu-reminder"></p>
			</div>
			<div class="footer">
				<div class="marquee up" id="informasi">
				</div>
			</div>
		</div>
	</div>
	<script src="../js/script.js"></script>
</body>
</html>
