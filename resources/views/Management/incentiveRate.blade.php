@extends('layouts.master')
@section('content')
<main id="main">    
    <section id="about" class="about">
        <div class="container">
            <br>
            <br>
            <div class="section-title">
                <h2>INCENTIVE RATE</h2>
            </div>
            <br>
            <br>
            <div class="">
                <table style="color:#000000" id="dataTableOC" class="table table-bordered display responsive" width="100%">
                    <thead >
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">BRAND ID</th>
                            <th scope="col">MODEL NO</th>
                            <th scope="col">MODEL RATE</th>
                            <th scope="col">MODEL BELOW RATE</th>
                            <th scope="col">COMMENT</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data_incentiveRate as $incRate)
                        <tr>
                            <th>{{ $incRate->id }}</th>
                            <th>{{ $incRate->brand_id }}</th>
                            <td>{{ $incRate->model_no }}</td>
                            <td>{{ $incRate->model_rate }}</td>
                            <td>{{ $incRate->model_below_rate }}</td>
                            <td>{{ $incRate->comment }}</td>
                            <td>
                                <a href="#" class="btn btn-warning edit" >Edit</a>
                                <!-- <a href="/incentiveRate/{{$incRate->id}}/edit" class="btn btn-warning edit" >Edit</a> -->
                                <a href="/incentiveRate/{{$incRate->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <form action="/incentiveRate/create" method="POST">
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
                    <label for="input-8">MODEL RATE</label>
                    <input type="text" class="form-control form-control-rounded" name="model_rate" id="model_rate" placeholder="Enter Model Rate">
                </div>
                <div class="form-group">
                    <label for="input-9">MODEL BELOW RATE</label>
                    <input type="text" class="form-control form-control-rounded" name="model_below_rate" id="model_below_rate" placeholder="Enter Model Below Rate">
                </div>
                <div class="form-group">
                    <label for="input-9">COMMENT</label>
                    <input type="text" class="form-control form-control-rounded" name="comment" id="comment" placeholder="Enter Comment">
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
                        <label for="input-8">MODEL RATE</label>
                        <input type="text" class="form-control form-control-rounded" name="md_model_rate" id="md_model_rate" placeholder="Enter Model Rate">
                    </div>
                    <div class="form-group">
                        <label for="input-9">MODEL BELOW RATE</label>
                        <input type="text" class="form-control form-control-rounded" name="md_model_below_rate" id="md_model_below_rate" placeholder="Enter Model Below Rate">
                    </div>
                    <div class="form-group">
                        <label for="input-9">COMMENT</label>
                        <input type="text" class="form-control form-control-rounded" name="md_comment" id="md_comment" placeholder="Enter Comment">
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
            $('#md_model_rate').val(data[3]);
            $('#md_model_below_rate').val(data[4]);
            $('#md_comment').val(data[5]);

            $('#editForm').attr('action','/incentiveRate/'+data[0]+'/update');
            $('#editModal').modal('show');
        })
    });
</script>
@stop