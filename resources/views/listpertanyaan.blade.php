@extends('master')
@section('content')
<?php

	echo "<table>";
	echo "<tr><th>Username</th><th>Judul pertanyaan</th><th>Pertanyaan</th></tr>";
	$hasil = json_encode($hasil);
	if (is_array($hasil) || is_object($hasil))
	{
	    foreach ($hasil as $value)
	    {
	    	echo $value['username']."<br>";
	    }
	}
    
?>
@endsection