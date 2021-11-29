@extends('layouts.master')
@section('content')
<main id="main">    
    <section id="about" class="about">
      <div class="container">
        <br>
        <br>
        <div class="section-title">
          <h2>BASE RATE</h2>
        </div>
        <div id="myScrollTable">
            <table class="table table-bordered">
                <thead >
                    <tr>
                        <th scope="col">PRODUCT TYPE</th>
                        <th scope="col">CATEGORY NO</th>
                        <th scope="col">BASE RATE</th>
                        <th scope="col">COMMENT</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data_baseRate as $baseRate)
                    <tr>
                        <th scope="row">{{ $baseRate->prod_type }}</th>
                        <td>{{ $baseRate->category_no }}</td>
                        <td>{{ $baseRate->base_rate }}</td>
                        <td>{{ $baseRate->comment }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <br>
      </div>
    <form>
        <div class="form-group">
            <label for="input-6">PRODUCT TYPE</label>
            <input type="text" class="form-control form-control-rounded" id="inputBrandId" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
            <label for="input-7">CATEGORY NO</label>
            <input type="text" class="form-control form-control-rounded" id="inputModelNo" placeholder="Enter Your Email Address">
        </div>
        <div class="form-group">
            <label for="input-8">BASE RATE</label>
            <input type="text" class="form-control form-control-rounded" id="inputModelName" placeholder="Enter Your Mobile Number">
        </div>
        <div class="form-group">
            <label for="input-9">COMMENT</label>
            <input type="text" class="form-control form-control-rounded" id="inputCategoryNo" placeholder="Enter Password">
        </div>
        <div class="form-group py-2">
            <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label for="user-checkbox2">SAYA SETUJU UNTUK MEMODIFIKASI DATA</label>
        </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Tambah Data</button>
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Ubah Data</button>
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i>Hapus Data</button>
        </div>
    </form>
</main>
@stop