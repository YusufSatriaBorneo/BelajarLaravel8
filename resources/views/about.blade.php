@extends('layouts.main')


@section('container')
<h1>Halaman About</h1>
<h3> {{$name}} </h3>
<!-- blade template ting make {} -->
<p> <?php echo $email; ?> </p>
<h4><?= $name ?><br><?= $email ?></h4>

<img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="110" class="img-thumbnail rounded-circle">
@endsection