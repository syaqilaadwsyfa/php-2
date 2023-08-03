<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";


      $jumlah_bilangan_genap = 10;

echo "LOOPING PERTAMA <br>";
for ($i = 2; $i <= $jumlah_bilangan_genap * 2; $i += 2) {
    echo $i;
    echo " - I love PHP <br>"; 
}
echo "<br>";

    $jumlah_baris = 10;
        $jumlah_bilangan_genap = 10;

echo "LOOPING KEDUA <br>";
for ($i = $jumlah_baris; $i >= 1; $i--) {
    for ($j = $i * 2; $j >= ($i * 2) - 1; $j -= 2) {
        echo $j;
        echo " - I love PHP <br>"; 
    }
}


echo "<h3>Soal No 2 Looping Array Modulo </h3>";


$numbers = [18, 45, 29, 61, 47, 34];
        echo "Array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
    

foreach ($numbers as $number) {
    $sisa_bagi = $number % 5;
    echo "<br>";
    echo "Angka: $number, Array sisa baginya adalah: $sisa_bagi";
    echo "<br>";

}

    echo "<h3> Soal No 3 Looping Asociative Array </h3>";
    
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    foreach ($items as $item) {
        $coba[] = [
            "id" => $item[0],
            "name" => $item[1],
            "price" => $item[2],
            "description" => $item[3],
            "source" => $item[4],
        ];
        
    }
    print_r($coba);

    echo "<h3>Soal No 4 Asterix </h3>";

        $ukuran = 5;
        
        for ($i = 1; $i <= $ukuran; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo '* ';
            }
            echo '<br>';
        }

?>





