<?php

define('DEFAULT_SERVER', 'jamulus.fischvolk.de');
define('DEFAULT_PORT', 22124);
define('DEFAULT_PORT_NA', 22224);

$ip = gethostbyname(DEFAULT_SERVER);
if ($ip == DEFAULT_SERVER) {
	die("Can't resolve hostname ".DEFAULT_SERVER);
}
$port = DEFAULT_PORT;
// $port = DEFAULT_PORT_NA;

define('ILLEGAL', 0);				// illegal ID
define('ACKN', 1);				// acknowledge
define('JITT_BUF_SIZE', 10);			// jitter buffer size
define('REQ_JITT_BUF_SIZE', 11);		// request jitter buffer size
define('NET_BLSI_FACTOR', 12);			// OLD (not used anymore)
define('CHANNEL_GAIN', 13);			// set channel gain for mix
define('CONN_CLIENTS_LIST_NAME', 14);		// OLD (not used anymore)
define('SERVER_FULL', 15);			// OLD (not used anymore)
define('REQ_CONN_CLIENTS_LIST', 16);		// request connected client list
define('CHANNEL_NAME', 17);			// OLD (not used anymore)
define('CHAT_TEXT', 18);			// contains a chat text
define('PING_MS', 19);				// OLD (not used anymore)
define('NETW_TRANSPORT_PROPS', 20);		// properties for network transport
define('REQ_NETW_TRANSPORT_PROPS', 21);		// request properties for network transport
define('DISCONNECTION', 22);			// OLD (not used anymore)
define('REQ_CHANNEL_INFOS', 23);		// request channel infos for fader tag
define('CONN_CLIENTS_LIST', 24);		// channel infos for connected clients
define('CHANNEL_INFOS', 25);			// set channel infos
define('OPUS_SUPPORTED', 26);			// tells that OPUS codec is supported
define('LICENCE_REQUIRED', 27);			// licence required
define('REQ_CHANNEL_LEVEL_LIST', 28);		// request the channel level list
define('CLM_PING_MS', 1001);			// for measuring ping time
define('CLM_PING_MS_WITHNUMCLIENTS', 1002);	// for ping time and num. of clients info
define('CLM_SERVER_FULL', 1003);		// server full message
define('CLM_REGISTER_SERVER', 1004);		// register server
define('CLM_UNREGISTER_SERVER', 1005);		// unregister server
define('CLM_SERVER_LIST', 1006);		// server list
define('CLM_REQ_SERVER_LIST', 1007);		// request server list
define('CLM_SEND_EMPTY_MESSAGE', 1008);		// an empty message shall be send
define('CLM_EMPTY_MESSAGE', 1009);		// empty message
define('CLM_DISCONNECTION', 1010);		// disconnection
define('CLM_VERSION_AND_OS', 1011);		// version number and operating system
define('CLM_REQ_VERSION_AND_OS', 1012);		// request version number and operating system
define('CLM_CONN_CLIENTS_LIST', 1013);		// channel infos for connected clients
define('CLM_REQ_CONN_CLIENTS_LIST', 1014);	// request the connected clients list
define('CLM_CHANNEL_LEVEL_LIST', 1015);		// channel level list
define('CLM_REGISTER_SERVER_RESP', 1016);	// status of server registration request

$countries = array(
	0 => 'AnyCountry',
	1 => 'Afghanistan',
	2 => 'Albania',
	3 => 'Algeria',
	4 => 'AmericanSamoa',
	5 => 'Andorra',
	6 => 'Angola',
	7 => 'Anguilla',
	8 => 'Antarctica',
	9 => 'AntiguaAndBarbuda',
	10 => 'Argentina',
	11 => 'Armenia',
	12 => 'Aruba',
	13 => 'Australia',
	14 => 'Austria',
	15 => 'Azerbaijan',
	16 => 'Bahamas',
	17 => 'Bahrain',
	18 => 'Bangladesh',
	19 => 'Barbados',
	20 => 'Belarus',
	21 => 'Belgium',
	22 => 'Belize',
	23 => 'Benin',
	24 => 'Bermuda',
	25 => 'Bhutan',
	26 => 'Bolivia',
	27 => 'BosniaAndHerzegowina',
	28 => 'Botswana',
	29 => 'BouvetIsland',
	30 => 'Brazil',
	31 => 'BritishIndianOceanTerritory',
	32 => 'Brunei',
	33 => 'Bulgaria',
	34 => 'BurkinaFaso',
	35 => 'Burundi',
	36 => 'Cambodia',
	37 => 'Cameroon',
	38 => 'Canada',
	39 => 'CapeVerde',
	40 => 'CaymanIslands',
	41 => 'CentralAfricanRepublic',
	42 => 'Chad',
	43 => 'Chile',
	44 => 'China',
	45 => 'ChristmasIsland',
	46 => 'CocosIslands',
	47 => 'Colombia',
	48 => 'Comoros',
	49 => 'CongoKinshasa',
	50 => 'CongoBrazzaville',
	51 => 'CookIslands',
	52 => 'CostaRica',
	53 => 'IvoryCoast',
	54 => 'Croatia',
	55 => 'Cuba',
	56 => 'Cyprus',
	57 => 'CzechRepublic',
	58 => 'Denmark',
	59 => 'Djibouti',
	60 => 'Dominica',
	61 => 'DominicanRepublic',
	62 => 'EastTimor',
	63 => 'Ecuador',
	64 => 'Egypt',
	65 => 'ElSalvador',
	66 => 'EquatorialGuinea',
	67 => 'Eritrea',
	68 => 'Estonia',
	69 => 'Ethiopia',
	70 => 'FalklandIslands',
	71 => 'FaroeIslands',
	72 => 'Fiji',
	73 => 'Finland',
	74 => 'France',
	75 => 'Guernsey',
	76 => 'FrenchGuiana',
	77 => 'FrenchPolynesia',
	78 => 'FrenchSouthernTerritories',
	79 => 'Gabon',
	80 => 'Gambia',
	81 => 'Georgia',
	82 => 'Germany',
	83 => 'Ghana',
	84 => 'Gibraltar',
	85 => 'Greece',
	86 => 'Greenland',
	87 => 'Grenada',
	88 => 'Guadeloupe',
	89 => 'Guam',
	90 => 'Guatemala',
	91 => 'Guinea',
	92 => 'GuineaBissau',
	93 => 'Guyana',
	94 => 'Haiti',
	95 => 'HeardAndMcDonaldIslands',
	96 => 'Honduras',
	97 => 'HongKong',
	98 => 'Hungary',
	99 => 'Iceland',
	100 => 'India',
	101 => 'Indonesia',
	102 => 'Iran',
	103 => 'Iraq',
	104 => 'Ireland',
	105 => 'Israel',
	106 => 'Italy',
	107 => 'Jamaica',
	108 => 'Japan',
	109 => 'Jordan',
	110 => 'Kazakhstan',
	111 => 'Kenya',
	112 => 'Kiribati',
	113 => 'NorthKorea',
	114 => 'SouthKorea',
	115 => 'Kuwait',
	116 => 'Kyrgyzstan',
	117 => 'Laos',
	118 => 'Latvia',
	119 => 'Lebanon',
	120 => 'Lesotho',
	121 => 'Liberia',
	122 => 'Libya',
	123 => 'Liechtenstein',
	124 => 'Lithuania',
	125 => 'Luxembourg',
	126 => 'Macau',
	127 => 'Macedonia',
	128 => 'Madagascar',
	129 => 'Malawi',
	130 => 'Malaysia',
	131 => 'Maldives',
	132 => 'Mali',
	133 => 'Malta',
	134 => 'MarshallIslands',
	135 => 'Martinique',
	136 => 'Mauritania',
	137 => 'Mauritius',
	138 => 'Mayotte',
	139 => 'Mexico',
	140 => 'Micronesia',
	141 => 'Moldova',
	142 => 'Monaco',
	143 => 'Mongolia',
	144 => 'Montserrat',
	145 => 'Morocco',
	146 => 'Mozambique',
	147 => 'Myanmar',
	148 => 'Namibia',
	149 => 'NauruCountry',
	150 => 'Nepal',
	151 => 'Netherlands',
	152 => 'CuraSao',
	153 => 'NewCaledonia',
	154 => 'NewZealand',
	155 => 'Nicaragua',
	156 => 'Niger',
	157 => 'Nigeria',
	158 => 'Niue',
	159 => 'NorfolkIsland',
	160 => 'NorthernMarianaIslands',
	161 => 'Norway',
	162 => 'Oman',
	163 => 'Pakistan',
	164 => 'Palau',
	165 => 'PalestinianTerritories',
	166 => 'Panama',
	167 => 'PapuaNewGuinea',
	168 => 'Paraguay',
	169 => 'Peru',
	170 => 'Philippines',
	171 => 'Pitcairn',
	172 => 'Poland',
	173 => 'Portugal',
	174 => 'PuertoRico',
	175 => 'Qatar',
	176 => 'Reunion',
	177 => 'Romania',
	178 => 'Russia',
	179 => 'Rwanda',
	180 => 'SaintKittsAndNevis',
	181 => 'SaintLucia',
	182 => 'SaintVincentAndTheGrenadines',
	183 => 'Samoa',
	184 => 'SanMarino',
	185 => 'SaoTomeAndPrincipe',
	186 => 'SaudiArabia',
	187 => 'Senegal',
	188 => 'Seychelles',
	189 => 'SierraLeone',
	190 => 'Singapore',
	191 => 'Slovakia',
	192 => 'Slovenia',
	193 => 'SolomonIslands',
	194 => 'Somalia',
	195 => 'SouthAfrica',
	196 => 'SouthGeorgiaAndTheSouthSandwichIslands',
	197 => 'Spain',
	198 => 'SriLanka',
	199 => 'SaintHelena',
	200 => 'SaintPierreAndMiquelon',
	201 => 'Sudan',
	202 => 'Suriname',
	203 => 'SvalbardAndJanMayenIslands',
	204 => 'Swaziland',
	205 => 'Sweden',
	206 => 'Switzerland',
	207 => 'Syria',
	208 => 'Taiwan',
	209 => 'Tajikistan',
	210 => 'Tanzania',
	211 => 'Thailand',
	212 => 'Togo',
	213 => 'TokelauCountry',
	214 => 'Tonga',
	215 => 'TrinidadAndTobago',
	216 => 'Tunisia',
	217 => 'Turkey',
	218 => 'Turkmenistan',
	219 => 'TurksAndCaicosIslands',
	220 => 'TuvaluCountry',
	221 => 'Uganda',
	222 => 'Ukraine',
	223 => 'UnitedArabEmirates',
	224 => 'UnitedKingdom',
	225 => 'UnitedStates',
	226 => 'UnitedStatesMinorOutlyingIslands',
	227 => 'Uruguay',
	228 => 'Uzbekistan',
	229 => 'Vanuatu',
	230 => 'VaticanCityState',
	231 => 'Venezuela',
	232 => 'Vietnam',
	233 => 'BritishVirginIslands',
	234 => 'UnitedStatesVirginIslands',
	235 => 'WallisAndFutunaIslands',
	236 => 'WesternSahara',
	237 => 'Yemen',
	238 => 'CanaryIslands',
	239 => 'Zambia',
	240 => 'Zimbabwe',
	241 => 'ClippertonIsland',
	242 => 'Montenegro',
	243 => 'Serbia',
	244 => 'SaintBarthelemy',
	245 => 'SaintMartin',
	246 => 'LatinAmerica',
	247 => 'AscensionIsland',
	248 => 'AlandIslands',
	249 => 'DiegoGarcia',
	250 => 'CeutaAndMelilla',
	251 => 'IsleOfMan',
	252 => 'Jersey',
	253 => 'TristanDaCunha',
	254 => 'SouthSudan',
	255 => 'Bonaire',
	256 => 'SintMaarten',
	257 => 'Kosovo',
	258 => 'EuropeanUnion',
	259 => 'OutlyingOceania',
	260 => 'World',
	261 => 'Europe'
);

$instruments = array(
	0 => 'None',
	1 => 'Drum_Set',
	2 => 'Djembe',
	3 => 'Electric_Guitar',
	4 => 'Acoustic_Guitar',
	5 => 'Bass_Guitar',
	6 => 'Keyboard',
	7 => 'Synthesizer',
	8 => 'Grand_Piano',
	9 => 'Accordion',
	10 => 'Vocal',
	11 => 'Microphone',
	12 => 'Harmonica',
	13 => 'Trumpet',
	14 => 'Trombone',
	15 => 'French_Horn',
	16 => 'Tuba',
	17 => 'Saxophone',
	18 => 'Clarinet',
	19 => 'Flute',
	20 => 'Violin',
	21 => 'Cello',
	22 => 'Double_Bass',
	23 => 'Recorder',
	24 => 'Streamer',
	25 => 'Listener',
	26 => 'Guitar_Vocal',
	27 => 'Keyboard_Vocal',
	28 => 'Bodhran'
);

$skills = array(
	0 => 'Not_Set',
	1 => 'Beginner',
	2 => 'Intermediate',
	3 => 'Expert'
);

$opsys = array(
	0 => 'Windows',
	1 => 'MacOS',
	2 => 'Linux',
	3 => 'Android',
	4 => 'iOS',
	5 => 'Unix'
);

class CRC {
	var $sr;
	var $bmask = 0x10000;	// 1 << 16
	var $poly = 0x1020;	// (1 << 5) | (1 << 12)

	function CRC($s = null) {
		$this->Reset();
		if (isset($s)) {
			$this->AddString($s);
		}
	}

	function Reset() {
		$this->sr = ~0;
	}

	function AddByte($b) {
		for ($i = 0; $i < 8; $i++) {
			$this->sr <<= 1;
			if ($this->sr & $this->bmask) $this->sr |= 1;

			if ($b & (1 << (7-$i))) $this->sr ^= 1;

			if ($this->sr & 1) $this->sr ^= $this->poly;
		}
	}

	function AddString($s) {
		for ($i=0, $j=strlen($s); $i < $j; $i++) {
			$this->AddByte(ord($s[$i]));
		}
	}

	function Get() {
		return (~$this->sr & ($this->bmask - 1));
	}
}

//-----------------------------------------------------------------------------
// send a request message
//-----------------------------------------------------------------------------
function send_request($sock, $id, $ip, $port) {
	$data = pack('vvCv', 0, $id, 0, 0);

	// need to calculate CRC
	$crc = new CRC($data);
	$data .= pack('v', $crc->Get());
	unset($crc);

	// print chunk_split(bin2hex($data),2,' ')."\n";

	$n = socket_sendto($sock, $data, strlen($data), 0, $ip, $port);

	if ($n === false) {
		die("Send error: ".socket_strerror(socket_last_error()));
	}
}

//-----------------------------------------------------------------------------
// send a request message
//-----------------------------------------------------------------------------
function send_ping_with_num_clients($sock, $ip, $port) {
	$id = CLM_PING_MS_WITHNUMCLIENTS;

	$timems = intval(gettimeofday(TRUE) * 1000) % 86400000;

	$data = pack('vvCvVC', 0, $id, 0, 5, $timems, 0);

	// need to calculate CRC
	$crc = new CRC($data);
	$data .= pack('v', $crc->Get());
	unset($crc);

	// print chunk_split(bin2hex($data),2,' ')."\n";

	$n = socket_sendto($sock, $data, strlen($data), 0, $ip, $port);

	if ($n === false) {
		die("Send error: ".socket_strerror(socket_last_error()));
	}
}

//-----------------------------------------------------------------------------
// process a received datagram
//-----------------------------------------------------------------------------
function process_received($sock, $data, $n, $fromip, $fromport) {
	global $ip, $port;

	// print chunk_split(bin2hex($data),2,' ')."\n";

	$crc = new CRC(substr($data, 0, -2));
	$calccrc = $crc->Get();
	$recvcrc = unpack("vcrc", substr($data, -2, 2))['crc'];
	//printf("CRC calc=%04X recv=%04X (%s)\n", $calccrc, $recvcrc, $calccrc==$recvcrc ? 'GOOD' : 'BAD');
	unset($crc);

	if ($recvcrc != $calccrc) {
		die("CRC mismatch in received message");
	}

	$r = unpack("vtag/vid/Ccnt/vlen", substr($data, 0, 7));
	print_r($r);

	if ($r['len']+9 != $n) {
		die("Malformed packet - length mismatch");
	}

	switch($r['id']) {
	case CLM_SERVER_LIST:
		$servers = array();
		$serverbyip = array();

		for ($i = 7; $i < $n-2;) {
			$server = unpack("Vip/vport/vcountry/Cmaxclients/Cperm/vlen", substr($data, $i, 12)); $i += 12;
			$len = $server['len']; unset($server['len']);
			$a = unpack("a${len}name/vlen", substr($data, $i, $len+2)); $i += $len+2;
			$server['name'] = $a['name'];
			$len = $a['len'];
			$a = unpack("a${len}ipaddrs/vlen", substr($data, $i, $len+2)); $i += $len+2;
			$server['ipaddrs'] = $a['ipaddrs'];
			$len = $a['len'];
			$a = unpack("a${len}city", substr($data, $i, $len+2)); $i += $len;
			$server['city'] = $a['city'];

			if ($server['ip'] == 0 && $server['port'] == 0) {
				$server['ip'] = $ip;
				$server['port'] = $port;
			} else {
				$server['ip'] = inet_ntop(pack("N",$server['ip']));
			}
			$servers[] = $server;
		}

		$index = 0;
		foreach ($servers as $index => $server) {
			$serverbyip[$server['ip']][$server['port']] = $index;
			if ($index < 3) {
				send_ping_with_num_clients($sock, $server['ip'], $server['port']);
			}
		}

		print_r($servers);

		printf("%d servers total\n", count($servers));
		break;
	case CLM_EMPTY_MESSAGE:
		break;
	case CLM_PING_MS_WITHNUMCLIENTS:
		break;
	case CLM_CONN_CLIENTS_LIST:
		break;
	case CLM_VERSION_AND_OS:
		break;
	}
}
//-----------------------------------------------------------------------------

$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

socket_set_option($sock, SOL_SOCKET, SO_RCVTIMEO, array('sec'=>3, 'usec'=>0));

send_request($sock, CLM_REQ_SERVER_LIST, $ip, $port);

while ($n = socket_recvfrom($sock, $data, 32767, 0, $fromip, $fromport)) {
	printf("socket_recvfrom: %d bytes received from %s:%d\n", $n, $fromip, $fromport);

	if ($n != strlen($data)) {
		die("Returned data length does not match string");
	}

	process_received($sock, $data, $n, $fromip, $fromport);
}

socket_close($sock);
?>
