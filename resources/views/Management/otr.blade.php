@extends('layouts.master')
@section('content')
<main id="main">  
    <section id="about" class="about">
        <div class="container">
            <br>
            <br>
            <div class="section-title">
            <h2>OTR</h2>
            </div>
            <div class="">
                <table style="color:#000000" id="dataTableOC" class="table table-bordered display responsive" width="100%">
                    <thead >
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">MODEL NO</th>
                            <th scope="col">MODEL YEAR</th>
                            <th scope="col">OTR</th>
                            <th scope="col">COMMENT</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data_otr as $otr)
                        <tr>
                            <th>{{ $otr->id }}</th>
                            <th>{{ $otr->model_no }}</th>
                            <td>{{ $otr->model_year }}</td>
                            <td>{{ $otr->otr }}</td>
                            <td>{{ $otr->comment }}</td>
                            <td>
                                <a href="#" class="btn btn-warning edit" >Edit</a>
                                <!-- <a href="/otr/{{$otr->id}}/edit" class="btn btn-warning" >Edit</a> -->
                                <a href="/otr/{{$otr->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <form action="/otr/create" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="input-6">MODEL NO</label>
                    <input type="text" class="form-control form-control-rounded" name="model_no" id="model_no" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="input-7">MODEL YEAR</label>
                    <input type="text" class="form-control form-control-rounded" name="model_year" id="model_year" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                    <label for="input-8">OTR</label>
                    <input type="text" class="form-control form-control-rounded" name="otr" id="otr" placeholder="Enter Your Mobile Number">
                </div>
                <div class="form-group">
                    <label for="input-9">COMMENT</label>
                    <input type="text" class="form-control form-control-rounded" name="comment" id="comment" placeholder="Enter Password">
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
                        <label for="input-6">MODEL NO</label>
                        <input type="text" class="form-control form-control-rounded" name="md_model_no" id="md_model_no" placeholder="Enter Your Name" >
                    </div>
                    <div class="form-group">
                        <label for="input-7">MODEL YEAR</label>
                        <input type="text" class="form-control form-control-rounded" name="md_model_year" id="md_model_year" placeholder="Enter Your Email Address" >
                    </div>
                    <div class="form-group">
                        <label for="input-8">OTR</label>
                        <input type="text" class="form-control form-control-rounded" name="md_otr" id="md_otr" placeholder="Enter Your Mobile Number" >
                    </div>
                    <div class="form-group">
                        <label for="input-9">COMMENT</label>
                        <input type="text" class="form-control form-control-rounded" name="md_comment" id="md_comment" placeholder="Enter Password" >
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

            $('#md_model_no').val(data[1]);
            $('#md_model_year').val(data[2]);
            $('#md_otr').val(data[3]);
            $('#md_comment').val(data[4]);

            $('#editForm').attr('action','/otr/'+data[0]+'/update');
            $('#editModal').modal('show');
        })
    });
</script>
@stop