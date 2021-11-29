@extends('layouts.master')
@section('content')
<main id="main">    
    <section id="about" class="about">
        <div class="container">
            <br>
            <br>
            <div class="section-title">
            <h2>MODEL</h2>
            </div>
            <div class="">
                <table style="color:#000000" id="dataTableOC" class="table table-bordered display responsive" width="100%">
                    <thead >
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">BRAND ID</th>
                            <th scope="col">MODEL NO</th>
                            <th scope="col">MODEL NAME</th>
                            <th scope="col">CATEGORY NO</th>
                            <th scope="col">COMMENT</th>
                            <th scope="col">VEHICLE TYPE</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data_tipemodel as $tipemodel)
                        <tr>
                            <th>{{ $tipemodel->id }}</th>
                            <th>{{ $tipemodel->brand_id }}</th>
                            <td>{{ $tipemodel->model_no }}</td>
                            <td>{{ $tipemodel->model_nm }}</td>
                            <td>{{ $tipemodel->category_no }}</td>
                            <td>{{ $tipemodel->comment }}</td>
                            <td>{{ $tipemodel->vhc_type }}</td>
                            <td>
                                <a href="#" class="btn btn-warning edit" >Edit</a>
                                <!-- <a href="/model/{{$tipemodel->id}}/edit" class="btn btn-warning" >Edit</a> -->
                                <a href="/model/{{$tipemodel->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <form action="/model/create" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="input-6">BRAND ID</label>
                    <input type="text" class="form-control form-control-rounded" name="brand_id" id="brand_id" placeholder="Enter Brand ID">
                </div>
                <div class="form-group">
                    <label for="input-7">MODEL NO</label>
                    <input type="text" class="form-control form-control-rounded" name="model_no" id="model_no" placeholder="Enter Model No">
                </div>
                <div class="form-group">
                    <label for="input-8">MODEL NAME</label>
                    <input type="text" class="form-control form-control-rounded" name="model_nm" id="model_nm" placeholder="Enter Model Name">
                </div>
                <div class="form-group">
                    <label for="input-9">CATEGORY NO</label>
                    <input type="text" class="form-control form-control-rounded" name="category_no" id="category_no" placeholder="Enter Category No">
                </div>
                <div class="form-group">
                    <label for="input-10">COMMENT</label>
                    <input type="text" class="form-control form-control-rounded" name="comment" id="comment" placeholder="Enter Comment">
                </div>
                <div class="form-group">
                    <label for="input-10">VEHICLE TYPE</label>
                    <input type="text" class="form-control form-control-rounded" name="vhc_type" id="vhc_type" placeholder="Enter Vehicle Type">
                </div>
                <div class="form-group py-2">
                    <div class="icheck-material-white">
                    <input type="checkbox" id="user-checkbox" required/>
                    <label for="user-checkbox">SAYA SETUJU UNTUK MEMODIFIKASI DATA</label>
                </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Tambah Data</button>
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
                        <input type="text" class="form-control form-control-rounded" name="md_brand_id" id="md_brand_id" placeholder="Enter Brand ID">
                    </div>
                    <div class="form-group">
                        <label for="input-7">MODEL NO</label>
                        <input type="text" class="form-control form-control-rounded" name="md_model_no" id="md_model_no" placeholder="Enter Model No">
                    </div>
                    <div class="form-group">
                        <label for="input-8">MODEL NAME</label>
                        <input type="text" class="form-control form-control-rounded" name="md_model_nm" id="md_model_nm" placeholder="Enter Model Name">
                    </div>
                    <div class="form-group">
                        <label for="input-9">CATEGORY NO</label>
                        <input type="text" class="form-control form-control-rounded" name="md_category_no" id="md_category_no" placeholder="Enter Category No">
                    </div>
                    <div class="form-group">
                        <label for="input-10">COMMENT</label>
                        <input type="text" class="form-control form-control-rounded" name="md_comment" id="md_comment" placeholder="Enter Comment">
                    </div>
                    <div class="form-group">
                        <label for="input-10">VEHICLE TYPE</label>
                        <input type="text" class="form-control form-control-rounded" name="md_vhc_type" id="md_vhc_type" placeholder="Enter Vehicle Type">
                    </div>
                    <div class="form-group py-2">
                        <div class="icheck-material-white">
                        <input type="checkbox" id="user-checkbox2" required/>
                        <label for="user-checkbox2">SAYA SETUJU UNTUK MEMODIFIKASI DATA</label>
                    </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Update Data</button>
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
        "scrollY": "600px",
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

            $('#md_brand_id').val(data[1]);
            $('#md_model_no').val(data[2]);
            $('#md_model_nm').val(data[3]);
            $('#md_category_no').val(data[4]);
            $('#md_comment').val(data[5]);
            $('#md_vhc_type').val(data[6]);

            $('#editForm').attr('action','/model/'+data[0]+'/update');
            $('#editModal').modal('show');
        })
    });
</script>
@stop