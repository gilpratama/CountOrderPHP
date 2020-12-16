<?php

function cmb_dinamis($name,$table,$field,$pk,$selected){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control chzn-select'>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($d->$field)."</option>";
    }
    $cmb .="</select>";
    return $cmb;  
}

function cmb_dinamistp($name,$table,$field1,$field2,$pk,$selected){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control chzn-select'>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($d->$field1)." - ".  strtoupper($d->$field2)."</option>";
    }
    $cmb .="</select>";
    return $cmb;  
}

date_default_timezone_set('Asia/Jakarta');

// Konversi waktu ke : Senin, 4 Januari 2014

function format_hari_tanggal($waktu)

{

    // Senin, Selasa dst.

    $hari_array = array(

        'Minggu',

        'Senin',

        'Selasa',

        'Rabu',

        'Kamis',

        'Jumat',

        'Sabtu'

    );

    $hr = date('w', strtotime($waktu));

    $hari = $hari_array[$hr];



    // Tanggal: 1-31 dst, tanpa leading zero.

    $tanggal = date('j', strtotime($waktu));



    // Bulan: Januari, Maret dst.

    $bulan_array = array(

        1 => 'Januari',

        2 => 'Februari',

        3 => 'Maret',

        4 => 'April',

        5 => 'Mei',

        6 => 'Juni',

        7 => 'Juli',

        8 => 'Agustus',

        9 => 'September',

        10 => 'Oktober',

        11 => 'November',

        12 => 'Desember',

    );

    $bl = date('n', strtotime($waktu));

    $bulan = $bulan_array[$bl];


    // Tahun, 4 digit.

    $tahun = date('Y', strtotime($waktu));


    // Hasil akhir: Senin, 1 Oktober 2014

    return "$hari, $tanggal $bulan $tahun";

}



// Format tangal ke 1 Januari 1990

function format_tanggal($waktu)

{

    // Tanggal, 1-31 dst, tanpa leading zero.

    $tanggal = date('j', strtotime($waktu));



    // Bulan, Januari, Maret dst

    $bulan_array = array(

        1 => 'Januari',

        2 => 'Februari',

        3 => 'Maret',

        4 => 'April',

        5 => 'Mei',

        6 => 'Juni',

        7 => 'Juli',

        8 => 'Agustus',

        9 => 'September',

        10 => 'Oktober',

        11 => 'November',

        12 => 'Desember',

    );

    $bl = date('n', strtotime($waktu));

    $bulan = $bulan_array[$bl];



    // Tahun

    $tahun = date('Y', strtotime($waktu));



    // Senin, 12 Oktober 2014

    return "$tanggal $bulan $tahun";

}



// Format tangal ke yyyy-mm-dd

function date_to_en($tanggal)

{

    $tgl = date('Y-m-d', strtotime($tanggal));

    if ($tgl == '1970-01-01') {

        return '';

    } else {

        return $tgl;

    }

}



// Format tangal ke dd-mm-yyyy

function date_to_id($tanggal)

{

    $tgl = date('d-m-Y', strtotime($tanggal));

    if ($tgl == '01-01-1970') {        

        return '';

    } else {

        return $tgl;

    }

}





// Format nomor peserta ke 20140001

function format_no_peserta($no)

{

    // Ambil nilai prefix dari file konfigurasi "psb.php"

    $prefix = config_item('psb_prefix_no_peserta');    

    $leadingzeros = '0000';

    $no_peserta = $prefix . substr($leadingzeros, 0, (-strlen($no))) . $no;

    return $no_peserta;

}



// Mendapatkan nilai interger no_peserta

function get_no_peserta_value($no_peserta)

{

    return intval(substr($no_peserta, 4, 4));

}



// Buat setiap awal kata huruf besar

function format_title_case($string)

{

    return ucwords($string);

}

function tombol_pilih($status_pilih)

{

    if ($status_pilih == '0') {

        echo "<button class='btn btn-warning btn-xs'>Belum Memilih";

    } else {

        echo "<button class='btn btn-info btn-xs'>Sudah Memilih";

    }

}


function belum_pilih($status_pilih)

{

    if ($status_pilih == '0') {

        echo "<button class='btn btn-warning btn-xs'>Belum Memilih";

    } else {

        echo "<button class='btn btn-info btn-xs'>Sudah Memilih";

    }

}

function status_pilih($status_pilih)

{

    if ($status_pilih == '0') {

        echo "Belum Memilih";

    } else {

        echo "Sudah Memilih";

    }

}

function status_pinjam($status_pinjam)

{

    if ($status_pinjam == '0') {

        echo "<font color='red'>"."Belum Kembali";

    } else {

        echo "<font color='blue'>"."Sudah Kembali";

    }

}