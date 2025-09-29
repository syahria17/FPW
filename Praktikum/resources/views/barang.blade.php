@extends('utama')

@section('judul_menu')

<p></p>

@if ($isi_data>20)
<p>isi data lebih dari 20</p>
@elseif ($isi_data>15)
<p>isi data lebih dari 15</p>
@else
<p>isi data kurang dari 15</p>
    
@endif
    
@endsection

@section('isi_menu')
    
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Barang</title>
</head>
<body>
    <p>Barang: <?php echo $isi_data;?></p>
    
</body>
</html> --}}