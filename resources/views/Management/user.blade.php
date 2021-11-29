@extends('layouts.master')
@section('content')
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <br>
            <br>
            <div class="section-title">
                <h2>USER</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table style="color:#000000" id="dataTableOC" class="table table-bordered dt-responsive display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col" >USERNAME</th>
                                <th scope="col">PASSWORD</th>
                                <th scope="col">ROLE</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_user as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning edit" >Edit</a>
                                    <!-- <a href="/user/{{$user->id}}/edit" class="btn btn-warning" >Edit</a> -->
                                    <a href="/user/{{$user->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <form action="/user/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input-6">USERNAME</label>
                    <input type="text" class="form-control form-control-rounded" name="username" id="username"
                        placeholder="Enter User Id">
                </div>
                <div class="form-group">
                    <label for="input-7">PASSWORD</label>
                    <input type="text" class="form-control form-control-rounded" name="password" id="password"
                        placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="input-8">ROLE</label><br>
                    <input type="text" class="form-control form-control-rounded" name="role" id="role"
                        placeholder="Enter Product Type">
                </div>
                <div class="form-group py-2">
                        <div class="icheck-material-white">
                            <input type="checkbox" id="user-checkbox" required/>
                            <label for="user-checkbox">SAYA SETUJU UNTUK MEMODIFIKASI DATA</label>
                        </div>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Tambah
                        Data
                    </button>
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
                        <label for="input-6">USERNAME</label>
                        <input type="text" class="form-control form-control-rounded" name="md_username" id="md_username"
                            placeholder="Enter User Id">
                    </div>
                    <div class="form-group">
                        <label for="input-7">PASSWORD</label>
                        <input type="text" class="form-control form-control-rounded" name="md_password" id="md_password"
                            placeholder="Enter Username" >
                    </div>
                    <div class="form-group">
                        <label for="input-8">ROLE</label><br>
                        <input type="text" class="form-control form-control-rounded" name="md_role" id="md_role"
                            placeholder="Enter Product Type" >
                    </div>
                    <div class="form-group py-2">
                        <div class="icheck-material-white">
                            <input type="checkbox" id="user-checkbox2" required/>
                            <label for="user-checkbox2">SAYA SETUJU UNTUK MEMODIFIKASI DATA</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Update
                            Data
                        </button>
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
        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -2 }
        ]
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

            $('#md_username').val(data[1]);
            $('#md_password').val(data[2]);
            $('#md_role').val(data[3]);

            $('#editForm').attr('action','/user/'+data[0]+'/update');
            $('#editModal').modal('show');
        })
    });
</script>
@stop
