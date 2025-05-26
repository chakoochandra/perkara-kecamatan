<?php
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
if (isset($segments[3])) {
    $title = '';

    if (isset($segments[4])) {
        switch ($segments[3]) {
            case 'perkara_kecamatan_list':
                require_once 'helpers.php';
                require_once 'perkara_kecamatan_helpers.php';
                $result = array();
                foreach (array_values($all_kecamatan) as $name) {
                    $key = 'kec_' . strtolower(str_replace(' ', '', $name)); // 'tanggulangin'
                    $result[$key] = $name;
                }

                $title = 'Daftar Penerimaan Perkara' . (isset($result[$segments[4]]) ? (' Kecamatan ' . $result[$segments[4]]) : ($segments[4] == 'kec_luar' ? (' Luar ' . $kabupaten) : ''));

                if ($segments[7]) {
                    $title .= $segments[7] == 1 ? ' e-Court' : ' Tidak e-Court';
                }

                if ($segments[6]) {
                    $month = $segments[6];
                    $title .= " Bulan " . get_month($month);
                }
                if ($segments[5]) {
                    $year = $segments[5];
                    $title .= (!$segments[6] ? ' Tahun' : '') . " {$year}";
                }

                break;
            default:
        }
    }

    // extract([
    //     'title' => 'Daftar Perkara',
    // ]);

    ob_start();

    include $segments[3] . '.php';

    $viewContent = ob_get_clean();

    header('Content-Type: application/json');
    echo json_encode(['content' => $viewContent, 'title' => $title]);
}
