@extends('dashboard.layout.main');

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-4 border-bottom">
    <h3>Tambah Foto</h3>
</div>
<br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Gallery Foto</h4>
              </div>

              <form method="post" action="{{ route('photo-data.create') }}" class="mb-5" enctype="multipart/form-data">
                @csrf
                <input type="hidden" >
              <div class="card-body">
              <div class="form-group row mb-4">
                <label for="photo_title" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Foto</label>
                <div class="col-sm-12 col-md-7">
                    <input class="form-control @error('photo_title') is-invalid @enderror" type="text" id="photo_title" name="photo_title">
                </div>
              </div>
              @error('photo_title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror

              <div class="form-group row mb-4">
                <label for="photo_description" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                @error('photo_description')
                <p class="text-danger">{{ $message }}</p> 
                @enderror
                <div class="col-sm-12 col-md-7">
                  <textarea id="body" type="hidden" name="body" value="{{ old('body') }}" class="summernote-simple"></textarea>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Unggah</label>
                <div class="col-sm-12 col-md-7">
                    <input type="datetime-local" name="finished" class="form-control">
                </div>
              </div>
              
              <div class="form-group row mb-4">
                <label for="photo_title" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi file</label>
                <div class="col-sm-12 col-md-7">
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('photo_title') is-invalid @enderror" type="file" id="photo_title" name="photo_title" onchange="previewImage()">
                </div>
              </div>
              @error('photo_title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Album Id</label>
                <div class="col-sm-12 col-md-7">
                  <select name="albumId" class="form-control selectric">
                   <option disable value="">Pilih Album</option>
                   {{-- @foreach ($album as $item)
                       <option value="{{ $item->albumId }}">{{ $item->album_name }}</option>
                   @endforeach
                  </select> --}}
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">User Id</label>
                <div class="col-sm-12 col-md-7">
                  <select name="userId" class="form-control selectric">
                   <option disable value="">User</option>
                   {{-- @foreach ($user as $item)
                       <option value="{{ $item->userId }}">{{ $item->username }}</option>
                   @endforeach
                  </select> --}}
                </div>
              </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button type="submit" class="btn btn-primary">Publish</button>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>

        <script>
            function previewImage() {
                const image = document.querySelector('#photo_title');
                const imgPreview = document.querySelector('.img-preview');
            
                imgPreview.style.display = 'block';
            
                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
            
                oFReader.onload = function(oFREvent) {
                  imgPreview.src = oFREvent.target.result;
                }
            }
            </script>

@endsection