@extends('layouts.master')
@section('content')
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <br>
            <br>
            <div class="section-title">
                <h2>OC BRAND</h2>
            </div>
                <table style="color:#000000" id="dataTableOC" class="table table-bordered display responsive" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">BRAND ID</th>
                            <th scope="col">BRAND NAME</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_brand as $brand)
                        <tr>
                            <td>{{ $brand->brandID }}</td>
                            <td>{{ $brand->brandName }}</td>
                            <td>
                                <a href="#" class="btn btn-warning edit" >Edit</a>
                                <!-- <a href="/brand/{{$brand->id}}/edit" class="btn btn-warning" >Edit</a> -->
                                <a href="/OcBrand/{{$brand->brandID}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <br>
            <br>
            <form action="/OcBrand/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input-6">BRAND ID</label>
                    <input type="text" class="form-control form-control-rounded" name="brandID" id="brandID"
                        placeholder="Enter Brand Id">
                </div>
                <div class="form-group">
                    <label for="input-7">BRAND NAME</label>
                    <input type="text" class="form-control form-control-rounded" name="brandName" id="brandName"
                        placeholder="Enter Brand Name">
                </div>
                <div class="form-group py-2">
                    <div class="icheck-material-white">
                        <input type="checkbox" id="user-checkbox" required/>
                        <label for="user-checkbox">SAYA SETUJU UNTUK MEMODIFIKASI DATA</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Tambah
                        Data</button>
                    <!--<button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Ubah Data</button>
                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Hapus Data</button>-->
                </div>
            </form>
        </div>
</main>
<!-- Modal Edit-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-body bg-3">
         <div class="px-3 to-front">
            <div class="row align-items-center">
              <div class="col text-right">
                <a href="#" class="close-btn" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><span class="icon-close2"></span></span>
                </a>
              </div>
            </div>
          </div>
          <div class="p-4 to-front">
            <div class="text-center">
              <div class="logo">
                <img src="dashboard/assets/images/logo.png" alt="Image" class="img-fluid mb-4">
              </div>
              <h3>Edit Data</h3>
              
              <form action="" method="POST" id="editForm">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input-6">BRAND ID</label>
                    <input type="text" class="form-control form-control-rounded" name="md_brandID" id="md_brandID"
                        placeholder="Enter Brand Id">
                </div>
                <div class="form-group">
                    <label for="input-7">BRAND NAME</label>
                    <input type="text" class="form-control form-control-rounded" name="md_brandName" id="md_brandName"
                        placeholder="Enter Brand Name" >
                </div>
                <div class="form-group py-2">
                    <div class="icheck-material-white">
                        <input type="checkbox" id="user-checkbox2" required/>
                        <label for="user-checkbox2">SAYA SETUJU UNTUK MEMODIFIKASI DATA</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Update
                        Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#dataTableOC').DataTable({
        "scrollY": "1000px",
        "scrollCollapse": true,
        });
        $('.dataTables_length').addClass('bs-select');

        var table = $('#dataTableOC').DataTable();
        table.on('click','.edit',function () {
            $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#md_brandID').val(data[0]);
            $('#md_brandName').val(data[1]);
            $('#editForm').attr('action','/OcBrand/'+data[0]+'/update');
            $('#editModal').modal('show');
        })
    });
</script>
@stop
