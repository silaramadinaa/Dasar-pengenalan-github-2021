<?php
$perusahaan=[
    'nama' => 'Sila Ramadina',
    'umur' => '16 Tahun',
    'alamat' => 'Kp.bojong',
    'hobby' => [
        'Membaca',
        'Menghitung',
    ],
    'media sosial' => [
        'Instagram' => 'silaramadina',
        'Instagram2' => 'silaramadinaa'
    ]
    ];

    echo "<pre>";
    print_r($perusahaan);

    echo "<br>";
    echo "program array multidimensi menampilkan satu data <br>";
    echo $perusahaan['hobby'][1]."<br>";
    echo $perusahaan['media sosial']['Instagram2']."<br>";
?>