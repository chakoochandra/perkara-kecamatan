<?php
goto fFui0;
nejNn:
function findConfig(PDO $pdo, $val)
{
    $sql = "\x53\x45\114\x45\103\x54\40\140\x76\x61\x6c\165\x65\140\x20\x46\122\117\115\40\163\x79\x73\137\143\x6f\x6e\146\151\147\x20\x57\x48\105\x52\x45\x20\140\156\141\155\145\x60\x20\75\x20\x3a\166\x61\154\40\114\111\115\x49\x54\x20\61";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array("\x76\141\154" => $val));
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    return isset($result->value) ? $result->value : null;
}
goto dKGM8;
dKGM8:
function findAlurPerkara(PDO $pdo)
{
    $ids = array(15, 16, 17);
    $placeholders = implode("\54", array_fill(0, count($ids), "\x3f"));
    $sql = "\123\x45\x4c\x45\103\124\40\x69\144\x2c\40\156\x61\155\141\x20\106\x52\x4f\115\40\141\154\165\x72\x5f\160\145\162\153\x61\x72\141\40\127\110\105\122\105\40\x69\144\x20\111\116\40\50{$placeholders}\x29";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($ids);
    $results = $stmt->fetchAll(PDO::FETCH_OBJ);
    $mapped = array();
    foreach ($results as $row) {
        $mapped[$row->id] = $row->nama;
    }
    return $mapped;
}
goto pFxs6;
HU7lH:
function connect_db()
{
    global $host, $db, $user, $pass;
    $charset = "\165\x74\146\70\x6d\142\64";
    $dsn = "\155\171\163\161\x6c\x3a\150\x6f\163\x74\x3d{$host}\x3b\x64\142\156\x61\x6d\x65\75{$db}\x3b\143\150\141\162\x73\x65\x74\75{$charset}";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    return new PDO($dsn, $user, $pass, $options);
}
goto nejNn;
pFxs6:
function findJenisPerkara(PDO $pdo)
{
    $alurIds = array(15, 16, 17);
    $placeholders = implode("\x2c", array_fill(0, count($alurIds), "\77"));
    $sql = "\xa\x20\x20\x20\x20\40\40\40\x20\x53\105\114\105\x43\x54\x20\xa\x20\40\40\x20\40\40\x20\x20\x20\40\40\40\152\x65\x6e\151\x73\x5f\x61\x6c\x75\162\137\160\145\x72\153\141\162\141\x2e\152\145\x6e\x69\x73\x5f\160\145\162\x6b\141\x72\x61\x5f\151\144\54\x20\xa\x20\x20\x20\x20\x20\40\40\x20\40\x20\40\40\103\117\116\x43\101\x54\x28\152\145\156\x69\x73\137\160\x65\x72\153\141\x72\141\56\x6e\141\155\141\54\40\x27\40\50\47\x2c\40\x61\x6c\x75\x72\x5f\160\145\x72\153\141\162\141\56\x6e\x61\x6d\141\54\40\47\51\x27\51\40\101\123\40\153\x6f\x64\145\137\x70\x65\162\153\x61\162\141\12\40\x20\40\40\x20\40\40\x20\106\x52\117\x4d\40\xa\x20\x20\x20\x20\40\x20\x20\x20\40\x20\x20\x20\152\145\156\x69\163\x5f\x61\x6c\165\x72\x5f\160\145\x72\x6b\x61\x72\x61\xa\x20\40\40\40\x20\x20\x20\40\x4a\117\x49\116\x20\12\40\x20\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x61\x6c\x75\162\137\x70\145\162\153\141\x72\x61\40\117\x4e\x20\x61\154\x75\x72\137\x70\145\162\153\141\162\x61\56\151\x64\40\75\40\x6a\145\x6e\x69\x73\137\x61\154\165\162\x5f\160\x65\x72\153\141\x72\141\x2e\x61\154\165\x72\x5f\x70\145\162\153\141\162\141\137\x69\144\xa\x20\40\x20\40\40\40\x20\40\112\x4f\111\116\x20\xa\x20\40\40\40\40\x20\x20\x20\40\40\40\40\x6a\145\156\151\163\x5f\x70\x65\162\x6b\x61\x72\141\x20\117\x4e\x20\x6a\x65\x6e\151\x73\137\160\x65\x72\153\141\x72\141\56\151\144\40\75\40\152\145\x6e\151\163\x5f\141\154\x75\x72\x5f\x70\145\x72\x6b\141\162\141\56\152\145\x6e\x69\163\137\x70\145\162\153\x61\162\x61\x5f\x69\144\xa\x20\x20\x20\x20\x20\40\x20\40\127\x48\x45\122\105\x20\xa\x20\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\x6a\145\x6e\151\163\137\x61\154\x75\162\137\x70\145\162\153\141\162\141\x2e\141\154\x75\162\x5f\160\145\162\x6b\x61\162\x61\x5f\151\144\x20\111\x4e\x20\x28{$placeholders}\51\12\x20\40\40\x20\x20\x20\40\40\x4f\122\104\105\122\40\x42\131\x20\12\x20\40\40\x20\40\x20\x20\40\x20\40\x20\x20\50\x43\101\123\x45\40\12\40\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\x57\110\x45\x4e\40\x6a\x65\156\151\163\137\x70\145\x72\153\x61\162\141\x5f\x69\144\40\x3d\40\63\64\x37\40\x54\110\105\116\x20\61\40\12\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\40\40\127\x48\x45\x4e\x20\x6a\x65\x6e\x69\x73\x5f\160\x65\x72\x6b\141\x72\141\137\151\x64\x20\75\x20\63\64\x36\40\124\110\105\116\x20\62\x20\12\40\x20\x20\x20\40\40\40\40\x20\40\x20\x20\x20\x20\x20\40\x57\x48\x45\x4e\x20\x6a\x65\x6e\x69\x73\x5f\160\x65\x72\x6b\141\162\141\137\151\144\x20\75\x20\63\x36\x39\40\124\x48\105\x4e\x20\x39\71\40\xa\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\x20\x20\x20\40\105\114\x53\x45\40\63\40\xa\40\40\x20\x20\40\x20\x20\40\40\x20\40\40\x45\116\x44\51\x2c\40\xa\x20\40\x20\40\40\40\40\x20\x20\40\40\40\152\x65\156\151\x73\x5f\x70\x65\x72\153\x61\x72\141\x2e\156\141\155\141\12\x20\40\x20\x20";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($alurIds);
    $results = $stmt->fetchAll(PDO::FETCH_OBJ);
    $mapped = array();
    foreach ($results as $row) {
        $mapped[$row->jenis_perkara_id] = $row->kode_perkara;
    }
    return $mapped;
}
goto mQWAS;
fFui0:
require_once "\x64\x62\x2e\160\x68\x70";
goto Bkw4V;
Bkw4V:
$pdo = connect_db();
goto HU7lH;
mQWAS:
function interpolateQuery($query, $params)
{
    foreach ($params as $key => $value) {
        if (is_string($value)) {
            $value = "\x27" . addslashes($value) . "\x27";
        } elseif ($value === null) {
            $value = "\x4e\x55\114\114";
        } elseif (is_bool($value)) {
            $value = $value ? "\x31" : "\x30";
        }
        if (is_string($key) && strpos($key, "\72") !== 0) {
            $key = "\x3a" . $key;
        }
        $query = str_replace($key, $value, $query);
    }
    return $query;
}
goto Edptm;
Edptm:
function get_month($monthNumber, $locale = "\151\144\137\111\x44")
{
    setlocale(LC_TIME, $locale);
    return strftime("\x25\x42", mktime(0, 0, 0, $monthNumber, 10));
}
