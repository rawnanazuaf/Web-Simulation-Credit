@extends('layouts.master')
@section('content')
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <br>
            <br>
            <div class="section-title">
                <h2>BRAND</h2>
            </div>
            <div class="">
                <table style="color:#000000" id="dataTableOC" class="table table-bordered display responsive" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">BRAND ID</th>
                            <th scope="col">BRAND NAME</th>
                            <th scope="col">PRODUCT TYPE</th>
                            <th scope="col">ORD NO</th>
                            <th scope="col">BRAND RATE</th>
                            <th scope="col">SPV RATE</th>
                            <th scope="col">MAJU MOTOR 1</th>
                            <th scope="col">MAJU MOTOR 2</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_brand as $brand)
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->brand_id }}</td>
                            <td>{{ $brand->brand_nm }}</td>
                            <td>{{ $brand->prod_type }}</td>
                            <td>{{ $brand->ord_no }}</td>
                            <td>{{ $brand->brand_rate }}</td>
                            <td>{{ $brand->spv_rate }}</td>
                            <td>{{ $brand->majumtr_1stInctv }}</td>
                            <td>{{ $brand->majumtr_2ndInctv }}</td>
                            <td>
                                <a href="#" class="btn btn-warning edit" >Edit</a>
                                <!-- <a href="/brand/{{$brand->id}}/edit" class="btn btn-warning" >Edit</a> -->
                                <a href="/brand/{{$brand->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <form action="/brand/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input-6">BRAND ID</label>
                    <input type="text" class="form-control form-control-rounded" name="brand_id" id="brand_id"
                        placeholder="Enter Brand Id">
                </div>
                <div class="form-group">
                    <label for="input-7">BRAND NAME</label>
                    <input type="text" class="form-control form-control-rounded" name="brand_nm" id="brand_nm"
                        placeholder="Enter Brand Name">
                </div>
                <div class="form-group">
                    <label for="input-8">PRODUCT TYPE</label><br>
                    <input type="text" class="form-control form-control-rounded" name="prod_type" id="prod_type"
                        placeholder="Enter Product Type">
                </div>
                <div class="form-group">
                    <label for="input-9">ORD NO</label>
                    <input type="text" class="form-control form-control-rounded" name="ord_no" id="ord_no"
                        placeholder="Enter Ord No">
                </div>
                <div class="form-group">
                    <label for="input-10">BRAND RATE</label>
                    <input type="text" class="form-control form-control-rounded" name="brand_rate"
                        id="brand_rate" placeholder="Enter Brand Rate">
                </div>
                <div class="form-group">
                    <label for="input-10">SPV RATE</label>
                    <input type="text" class="form-control form-control-rounded" name="spv_rate" id="spv_rate"
                        placeholder="Enter SPV Rate">
                </div>
                <div class="form-group">
                    <label for="input-10">MAJU MOTOR 1</label>
                    <input type="text" class="form-control form-control-rounded" name="majumtr_1stInctv"
                        id="majumtr_1stInctv" placeholder="Enter Maju Motor 1">
                </div>
                <div class="form-group">
                    <label for="input-10">MAJU MOTOR 2</label>
                    <input type="text" class="form-control form-control-rounded" name="majumtr_2ndInctv"
                        id="majumtr_2ndInctv" placeholder="Enter Maju Motor 2">
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
                    <input type="text" class="form-control form-control-rounded" name="md_brand_id" id="md_brand_id"
                        placeholder="Enter Brand Id">
                </div>
                <div class="form-group">
                    <label for="input-7">BRAND NAME</label>
                    <input type="text" class="form-control form-control-rounded" name="md_brand_nm" id="md_brand_nm"
                        placeholder="Enter Brand Name" >
                </div>
                <div class="form-group">
                    <label for="input-8">PRODUCT TYPE</label><br>
                    <input type="text" class="form-control form-control-rounded" name="md_prod_type" id="md_prod_type"
                        placeholder="Enter Product Type" >
                </div>
                <div class="form-group">
                    <label for="input-9">ORD NO</label>
                    <input type="text" class="form-control form-control-rounded" name="md_ord_no" id="md_ord_no"
                        placeholder="Enter Ord No">
                </div>
                <div class="form-group">
                    <label for="input-10">BRAND RATE</label>
                    <input type="text" class="form-control form-control-rounded" name="md_brand_rate"
                        id="md_brand_rate" placeholder="Enter Brand Rate" >
                </div>
                <div class="form-group">
                    <label for="input-10">SPV RATE</label>
                    <input type="text" class="form-control form-control-rounded" name="md_spv_rate" id="md_spv_rate"
                        placeholder="Enter SPV Rate" >
                </div>
                <div class="form-group">
                    <label for="input-10">MAJU MOTOR 1</label>
                    <input type="text" class="form-control form-control-rounded" name="md_majumtr_1stInctv"
                        id="md_majumtr_1stInctv" placeholder="Enter Maju Motor 1" >
                </div>
                <div class="form-group">
                    <label for="input-10">MAJU MOTOR 2</label>
                    <input type="text" class="form-control form-control-rounded" name="md_majumtr_2ndInctv"
                        id="md_majumtr_2ndInctv" placeholder="Enter Maju Motor 2" >
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
            $('#md_brand_nm').val(data[2]);
            $('#md_prod_type').val(data[3]);
            $('#md_ord_no').val(data[4]);
            $('#md_brand_rate').val(data[5]);
            $('#md_spv_rate').val(data[6]);
            $('#md_majumtr_1stInctv').val(data[7]);
            $('#md_majumtr_2ndInctv').val(data[8]);

            $('#editForm').attr('action','/brand/'+data[0]+'/update');
            $('#editModal').modal('show');
        })
    });
</script>
@stop
