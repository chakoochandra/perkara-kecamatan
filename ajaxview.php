<?php
$basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$relativePath = '/' . ltrim(substr($requestPath, strlen($basePath)), '/');
$segments = explode('/', trim($relativePath, '/'));

if (isset($segments[1])) {
    $title = '';

    if (isset($segments[2])) {
        switch ($segments[1]) {
            case 'perkara_kecamatan_list':
                require_once 'helpers.php';
                require_once 'perkara_kecamatan_helpers.php';
                $result = array();
                foreach (array_values($all_kecamatan) as $name) {
                    $key = 'kec_' . strtolower(str_replace(' ', '', $name)); // 'tanggulangin'
                    $result[$key] = $name;
                }

                $title = 'Daftar Penerimaan Perkara' . (isset($result[$segments[2]]) ? (' Kecamatan ' . $result[$segments[2]]) : ($segments[2] == 'kec_luar' ? (' Luar ' . $kabupaten) : ''));

                if ($segments[5]) {
                    $title .= $segments[5] == 1 ? ' e-Court' : ' Tidak e-Court';
                }

                if ($segments[4]) {
                    $month = $segments[4];
                    $title .= " Bulan " . get_month($month);
                }
                if ($segments[3]) {
                    $year = $segments[3];
                    $title .= (!$segments[4] ? ' Tahun' : '') . " {$year}";
                }

                break;
            default:
        }
    }

    extract([
        'segments' => $segments,
    ]);

    ob_start();

    include $segments[1] . '.php';

    $viewContent = ob_get_clean();

    header('Content-Type: application/json');
    echo json_encode(['content' => $viewContent, 'title' => $title]);
}
