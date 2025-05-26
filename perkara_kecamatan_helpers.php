<?php
goto BA2Y4;
rO_rZ:
$notLikeArr = array();
goto lLoZI;
lLoZI:
foreach ($filteredKecamatan as $value) {
    $notLikeArr[] = "\160\x69\150\141\x6b\61\x2e\x61\x6c\141\155\141\x74\40\x4e\x4f\124\40\x4c\111\113\x45\x20\x27\45" . $value . "\45\47";
}
goto NieXa;
buJKr:
$all_jenis_perkara = findJenisPerkara($pdo);
goto bbhpE;
m8SZE:
$kecOthers = implode("\40\x41\116\x44\40", array_merge($notLikeArr, array("\x70\x69\150\141\x6b\61\x2e\141\154\141\155\x61\164\40\x4e\x4f\x54\40\114\111\x4b\105\x20\x27\45" . $kabupaten . "\x25\47", "\153\x65\143\141\x6d\141\164\141\156\x20\x49\123\x20\x4e\x55\114\x4c")));
goto a1sRi;
bbhpE:
$filteredKecamatan = array();
goto fvFl0;
NgnXc:
$all_kecamatan = findKecamatanByKabupaten($pdo);
goto pqpcN;
a1sRi:
function findKabupaten(PDO $pdo)
{
    global $a, $b;
    $sql = "\x53\105\x4c\105\x43\124\x20\153\x61\142\x75\160\141\x74\145\x6e\x5f\x6b\157\144\x65\x2c\x20\153\x61\x62\165\x70\x61\164\x65\x6e\x5f\x6e\141\x6d\x61\x20\106\122\x4f\x4d\x20\x72\x65\x66\137\153\x61\x62\x75\x70\141\164\x65\156\137\156\x65\x77\x20\x57\110\105\122\x45\40\153\141\x62\165\160\x61\x74\x65\156\137\153\x6f\144\145\x20\x3d\x20\x3a\153\157\144\x65\40\x4c\x49\115\111\x54\x20\x31";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array("\153\157\144\x65" => db($b, db(findConfig($pdo, "\153\157\x64\145\137\163\x61\164\x6b\145\162"), 10) == $a ? 10 : 100)));
    return $stmt->fetch(PDO::FETCH_OBJ);
}
goto K9zV2;
BA2Y4:
$kabupaten = ucfirst(str_replace("\x6b\141\x62\x75\160\x61\x74\x65\x6e\x20", '', str_replace("\x6b\x61\x62\56\40", '', strtolower(findKabupaten($pdo)->kabupaten_nama))));
goto NgnXc;
fvFl0:
foreach ($all_kecamatan as $kecNama) {
    if (strtolower($kecNama) != strtolower($kabupaten)) {
        $filteredKecamatan[] = $kecNama;
    }
}
goto rO_rZ;
NieXa:
$kecKab = implode("\40\101\116\104\x20", array_merge($notLikeArr, array("\x70\x69\x68\x61\153\61\x2e\141\x6c\141\155\x61\164\x20\114\111\x4b\105\40\47\45" . $kabupaten . "\45\47", "\x6b\145\143\141\155\141\164\x61\156\40\x49\123\40\116\125\x4c\x4c")));
goto m8SZE;
pqpcN:
$all_alur_perkara = findAlurPerkara($pdo);
goto buJKr;
K9zV2:
function findKecamatanByKabupaten(PDO $pdo)
{
    global $a, $b;
    $sql = "\x53\x45\x4c\x45\x43\x54\40\x6b\145\143\141\155\141\164\141\x6e\x5f\x6b\x6f\x64\x65\54\40\x6b\145\x63\x61\155\x61\164\x61\x6e\137\156\x61\155\x61\40\xa\x20\x20\x20\x20\x20\x20\x20\40\40\40\x20\x20\x46\122\x4f\x4d\40\162\x65\146\x5f\153\x65\x63\141\x6d\x61\x74\141\156\137\x6e\145\167\x20\xa\x20\x20\40\40\40\40\40\40\40\40\x20\40\x57\x48\105\x52\105\40\x6b\141\142\x75\x70\141\x74\x65\156\x5f\x6b\x6f\144\x65\40\75\x20\72\x6b\x61\142\x5f\151\144\12\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\x20\117\x52\104\x45\122\x20\102\131\40\153\145\x63\141\155\x61\x74\x61\156\137\156\141\x6d\141";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array("\x6b\141\142\x5f\151\x64" => db($b, db(findConfig($pdo, "\x6b\157\x64\145\137\x73\x61\x74\153\x65\x72"), 10) == $a ? 10 : 100)));
    $result = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $result[$row["\x6b\145\x63\x61\155\x61\164\x61\156\x5f\153\x6f\144\145"]] = $row["\x6b\x65\143\x61\155\141\x74\x61\156\137\156\141\x6d\x61"];
    }
    return $result;
}
