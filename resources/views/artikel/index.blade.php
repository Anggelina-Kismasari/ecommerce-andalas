@extends('layout.app')

@section('title', 'Data Artikel')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h4 class="card-title">
            Tabel Data Artikel
        </h4>
    </div>
    <div class="card-body">
        <div class="d-flex justify-content-end mb-4">
            <a href="#modal-form" class="btn btn-primary modal-tambah">Tambah Data</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Subjudul</th>
                        <th>Konten</th>
                        <th>Internal Link</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <form class="form-artikel">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="">Subjudul</label>
                        <input type="text" class="form-control" name="subjudul" placeholder="Subjudul">
                    </div>
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea name="konten" class="form-control" placeholder="Konten" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Internal Link</label>
                        <textarea name="internal_link" class="form-control" placeholder="Internal Link" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">submit</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection


@push('js')
    <script>
        $(function(){
            $.ajax({
                url : '/api/articles',
                success : function ({data}) {
                    
                    let row;
                    data.map(function (val, index) {
                        row += `
                        <tr>
                            <td>${index+1}</td>
                            <td>${val.judul}</td>
                            <td>${val.subjudul}</td>
                            <td>${val.konten}</td>
                            <td>${val.internal_link}</td>
                            <td><img src="/uploads/${val.gambar}" width="150"></td>
                            <td>
                                <a data-toggle="modal" href="#modal-form" data-id="${val.id}" class="btn btn-warning modal-ubah">Edit</a>
                                <a href="#" data-id="${val.id}" class="btn btn-danger btn-hapus">Delete</a>
                            </td>
                        </tr>
                        `;
                    });

                    $('tbody').append(row)
                }
            });

            $(document).on('click', '.btn-hapus', function(){
                const id = $(this).data('id')
                const token = localStorage.getItem('token')

                confirm_dialog = confirm('Apakah anda yakin?');

                if (confirm_dialog) {
                    $.ajax({
                        url : '/api/articles/' + id,
                        type : "DELETE",
                        headers : {
                            "Authorization": 'Bearer ' + token
                        },
                        success : function(data){
                            if (data.message == 'success') {
                                alert('Data berhasil dihapus')
                                location.reload()
                            }
                        } 
                    });
                }
            });

            $('.modal-tambah').click(function(){
                $('#modal-form').modal('show')
                $('input[name="judul"]').val('')
                $('input[name="subjudul"]').val('')
                $('textarea[name="konten"]').val('')
                $('textarea[name="internal_link"]').val('')

                $('.form-artikel').submit(function(e){
                    e.preventDefault()
                    const token = localStorage.getItem('token')
                    const frmdata = new FormData(this);

                    $.ajax({
                        url: 'api/articles',
                        type: 'POST',
                        data: frmdata,
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "Authorization": 'Bearer ' + token
                        },
                        success : function(data) {
                            if (data.success) {
                                alert('Data berhasil ditambah'),
                                location.reload();
                            }
                        }
                    })
                });
            });

            $(document).on('click', '.modal-ubah', function(){
                $('#modal-form').modal('show')
                const id = $(this).data('id');

                $.get('/api/articles/' + id, function({data}){
                    $('input[name="judul"]').val(data.judul);
                    $('input[name="subjudul"]').val(data.subjudul);
                    $('textarea[name="konten"]').val(data.konten);
                    $('textarea[name="internal_link"]').val(data.internal_link);
                });

                $('.form-artikel').submit(function(e){
                    e.preventDefault()
                    const token = localStorage.getItem('token')
                    const frmdata = new FormData(this);

                    $.ajax({
                        url: `api/articles/${id}?_method=PUT`,
                        type: 'POST',
                        data: frmdata,
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "Authorization": 'Bearer ' + token
                        },
                        success : function(data) {
                            if (data.success) {
                                alert('Data berhasil diubah'),
                                location.reload();
                            }
                        }
                    })
                });
            });
        });
    </script>
@endpush