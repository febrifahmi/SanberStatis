@extends('master')
@section('content')
<form action="/pertanyaan/store" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="judul">Judul pertanyaan:</label><br>
  <input type="text" id="judul" name="judul"><br>
  <label for="pertanyaan">Isi pertanyaan:</label><br>
  <textarea id="pertanyaan" name="pertanyaan" rows="4" cols="50"></textarea><br>
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="postPertanyaan">Post Pertanyaan</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</script>
@endsection