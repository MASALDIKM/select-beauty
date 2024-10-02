<form class="komentar" action="{{ url('testimoni/create') }}" method="POST">
  @method('POST')
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama">
    @error('nama')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
      <label for="coment" class="form-label">komentar</label>
      <textarea class="form-control" id="komentar" rows="5" name="komentar" placeholder="Masukan komentar anda"></textarea>
      @error('komentar')
          <div class="text-danger">{{ $message }}</div>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>