<?php
function get_access($id_role, $id_menu)
{
    $ci = get_instance();
    $result = $ci->db->get_where('tbl_user_access', ['id_role' => $id_role, 'id_sub_menu' => $id_menu]);

    if ($result->num_rows() > 0) {
        return "checked = 'checked'";
    }
}
function terbilang($x)
{
    $abil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    if ($x < 12)
        return " " . $abil[$x];
    elseif ($x < 20)
        return Terbilang($x - 10) . " Belas";
    elseif ($x < 100)
        return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);
    elseif ($x < 200)
        return " Seratus" . Terbilang($x - 100);
    elseif ($x < 1000)
        return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);
    elseif ($x < 2000)
        return " Seribu" . Terbilang($x - 1000);
    elseif ($x < 1000000)
        return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);
    elseif ($x < 1000000000)
        return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
}

// function subdetailrka($id_rekening)
// {
//     $ci = get_instance();
//     $result = $ci->db->get_where('tbl_detail_rka', ['id_rekening' => $id_rekening])->result();
//     echo "<tr>";
//     echo "<th colspan='2'>Keterangan</th>";
//     echo "<th>Koefesien</th>";
//     echo "<th>Harga</th>";
//     echo "</tr>";
//     foreach ($result as $r) {
//         echo "<tr>";
//         echo "<td colspan='2'>" . $r->keterangan . "</td>";
//         echo "<td>" . $r->koefesien . "</td>";
//         echo "<td>" . $r->harga . "</td>";
//         echo "</tr>";
//     }
// }
