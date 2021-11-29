@extends('layouts.master')
@section('content')
<main id="main">
    <section id="about" class="about">
        <div class="container">
            <br>
            <br>
            <div class="section-title">
                <h2>OC DEALER</h2>
            </div>
                <table style="color:#000000" id="dataTableOC" class="table table-bordered display responsive" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">WILAYAH ID</th>
                            <th scope="col">INSURANCE PREMIUM ID</th>
                            <th scope="col">DISASTER TYPE ID</th>
                            <th scope="col">INSURANCE TYPE NO</th>
                            <th scope="col">INSURANCE TYPE</th>
                            <th scope="col">FROM VAL</th>
                            <th scope="col">TO VAL</th>
                            <th scope="col">FIRST YEAR</th>
                            <th scope="col">SECOND YEAR</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_inspremium as $inspremium)
                        <tr>
                            <td>{{ $inspremium->wilayahID }}</td>
                            <td>{{ $inspremium->insrncPremiumID }}</td>
                            <td>{{ $inspremium->disasterTypeID }}</td>
                            <td>{{ $inspremium->insrncTypeNo }}</td>
                            <td>{{ $inspremium->insrncType }}</td>
                            <td>{{ $inspremium->fromVal }}</td>
                            <td>{{ $inspremium->toVal }}</td>
                            <td>{{ $inspremium->firstYear }}</td>
                            <td>{{ $inspremium->secondYear }}</td>
                            <td>
                                <a href="#" class="btn btn-warning edit" >Edit</a>
                                <a href="/OcInsPremium/{{$inspremium->insrncPremiumID}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <br>
            <br>
            <form action="/OcInsPremium/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="input-6">WILAYAH ID</label>
                    <select name="wilayahID" id="wilayahID" class="form-control form-control-rounded">
                        <option value="0" disabled="true" selected="true">- Select Wilayah -</option>
                        <option value="WL01">WILAYAH 1</option>
                        <option value="WL02">WILAYAH 2</option>
                        <option value="WL03">WILAYAH 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-6">INSURANCE PREMIUM ID</label>
                    <input type="text" class="form-control form-control-rounded" name="insrncPremiumID" id="insrncPremiumID"
                        placeholder="Enter Insurance Premium Id">
                </div>
                <div class="form-group">
                    <label for="input-7">DISASTER TYPE ID</label>
                    <select name="disasterTypeID" id="disasterTypeID" class="form-control form-control-rounded">
                        <option value="0" disabled="true" selected="true">- SELECT DISASTER TYPE ID -</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-7">INSURANCE TYPE NO</label>
                    <select name="insrncTypeNo" id="insrncTypeNo" class="form-control form-control-rounded">
                        <option value="0" disabled="true" selected="true">- SELECT INSURANCE TYPE NO -</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-7">INSURANCE TYPE</label>
                    <select name="insrncType" id="insrncType" class="form-control form-control-rounded">
                        <option value="0" disabled="true" selected="true">- SELECT INSURANCE TYPE -</option>
                        <option value="CP">CP</option>
                        <option value="TLO">TLO</option>
                        <option value="CB">CB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-7">FROM VAL</label>
                    <input type="text" class="form-control form-control-rounded" name="fromVal" id="fromVal"
                        placeholder="Enter From Val">
                </div>
                <div class="form-group">
                    <label for="input-7">TO VAL</label>
                    <input type="text" class="form-control form-control-rounded" name="toVal" id="toVal"
                        placeholder="Enter To Val">
                </div>
                <div class="form-group">
                    <label for="input-7">FIRST YEAR</label>
                    <input type="text" class="form-control form-control-rounded" name="firstYear" id="firstYear"
                        placeholder="Enter First Year">
                </div>
                <div class="form-group">
                    <label for="input-7">SECOND YEAR</label>
                    <input type="text" class="form-control form-control-rounded" name="secondYear" id="secondYear"
                        placeholder="Enter Second Year">
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
                    <label for="input-6">WILAYAH ID</label>
                    <select name="md_wilayahID" id="md_wilayahID" class="form-control form-control-rounded">
                        <option value="0" disabled="true" selected="true">- Select Wilayah -</option>
                        <option value="WL01">WILAYAH 1</option>
                        <option value="WL02">WILAYAH 2</option>
                        <option value="WL03">WILAYAH 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-6">INSURANCE PREMIUM ID</label>
                    <input type="text" class="form-control form-control-rounded" name="md_insrncPremiumID" id="md_insrncPremiumID"
                        placeholder="Enter Insurance Premium Id">
                </div>
                <div class="form-group">
                    <label for="input-7">DISASTER TYPE ID</label>
                    <select name="md_disasterTypeID" id="md_disasterTypeID" class="form-control form-control-rounded">
                        <option value="A" disabled="true" selected="true">- SELECT DISASTER TYPE ID -</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-7">INSURANCE TYPE NO</label>
                    <select name="md_insrncTypeNo" id="md_insrncTypeNo" class="form-control form-control-rounded">
                        <option value="0" disabled="true" selected="true">- SELECT INSURANCE TYPE NO -</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-7">INSURANCE TYPE</label>
                    <select name="md_insrncType" id="md_insrncType" class="form-control form-control-rounded">
                        <option value="0" disabled="true" selected="true">- SELECT INSURANCE TYPE -</option>
                        <option value="CP">CP</option>
                        <option value="TLO">TLO</option>
                        <option value="CB">CB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="input-7">FROM VAL</label>
                    <input type="text" class="form-control form-control-rounded" name="md_fromVal" id="md_fromVal"
                        placeholder="Enter From Val">
                </div>
                <div class="form-group">
                    <label for="input-7">TO VAL</label>
                    <input type="text" class="form-control form-control-rounded" name="md_toVal" id="md_toVal"
                        placeholder="Enter To Val">
                </div>
                <div class="form-group">
                    <label for="input-7">FIRST YEAR</label>
                    <input type="text" class="form-control form-control-rounded" name="md_firstYear" id="md_firstYear"
                        placeholder="Enter First Year">
                </div>
                <div class="form-group">
                    <label for="input-7">SECOND YEAR</label>
                    <input type="text" class="form-control form-control-rounded" name="md_secondYear" id="md_secondYear"
                        placeholder="Enter Second Year">
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

            $('#md_wilayahID').val(data[0]);
            $('#md_insrncPremiumID').val(data[1]);
            $('#md_disasterTypeID').val(data[2]);
            $('#md_insrncTypeNo').val(data[3]);
            $('#md_insrncType').val(data[4]);
            $('#md_fromVal').val(data[5]);
            $('#md_toVal').val(data[6]);
            $('#md_firstYear').val(data[7]);
            $('#md_secondYear').val(data[8]);
            $('#editForm').attr('action','/OcInsPremium/'+data[1]+'/update');
            $('#editModal').modal('show');
        })
    });
</script>
@stop
