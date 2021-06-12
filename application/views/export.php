<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laporan Kelulusan - <?= $siswa->nama ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>
<body>
    <div style="padding-top:260px; padding-left: 310px; padding-bottom: 0px">
        <p><strong><?= $siswa->nama ?></strong></p>
    </div>
    <div style="padding-top:-32px; padding-left: 310px">
        <p><?= $siswa->nipd." / ".$siswa->nisn ?></p>
    </div>
</body>
</html>