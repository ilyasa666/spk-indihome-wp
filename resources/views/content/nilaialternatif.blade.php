<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Master Nilai Alternatif</h4>
                        </div>
                        <div class="card-body">
                            @if(session('errors'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Something it's wrong:
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <form class="form-inline" method="get" action="{{ route('getdatanilaialternatif') }}">
                                <div class="row">
                                    <input type="hidden" name="m" value="alternatif" />
                                    <div class="form-group" style="margin-left: 10px">
                                        <input class="form-control" type="text" placeholder="Pencarian. . ." name="alternatif" value="{{request()->get("kriteria")}}" />
                                    </div>
                                    <div class="form-group" style="margin-left: 10px">
                                        <button class="btn btn-success" href="#"><span class="glyphicon glyphicon-refresh"></span>&nbsp; Refresh</button>
                                    </div>
                                    <div class="form-group" style="margin-left: 10px">
                                        <a class="btn btn-primary" href="{{ route('tambah_nilaialternatif') }}">
                                            <span class="glyphicon glyphicon-plus"></span>&nbsp; Tambah</a>
                                    </div>
                                    <div class="form-group" style="margin-left: 10px">
                                        <a class="btn btn-default" href="{{route('cetak_nilaialternatif')}}" target="_blank"><span class="glyphicon glyphicon-print"></span>&nbsp; Cetak</a>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama Alternatif</th>
                                        <th>Nama Atribut</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <?php $i = 0 ?>
                                    @foreach($data as $item)
                                        <?php $i++ ?>
                                        <tbody>
                                            <td>{{$i}}</td>
                                            <td>{{$item->kode}}</td>
                                            <td>{{$item->alternatif}}</td>
                                            <td>{{$item->atribut}}</td>
                                            <td>{{$item->c1}}</td>
                                            <td>{{$item->c2}}</td>
                                            <td>{{$item->c3}}</td>
                                            <td>{{$item->c4}}</td>
                                            <td>{{$item->c5}}</td>
                                            <td>{{$item->c6}}</td>
                                            <td>
                                                <a class="btn btn-xs btn-warning" href="{!! route('update_nilaialternatif',['id' => $item->id ]) !!}"><span class="glyphicon glyphicon-edit"></span></a>
                                                <a class="btn btn-xs btn-danger" href="{!! route('delete_nilai',['id' => $item->id ]) !!}" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
