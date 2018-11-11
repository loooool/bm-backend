@extends('layouts.main')
@section('header')
    <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>{{trans('Pyramid Apartment Contract Requests')}}</b></h4>
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Нэр</th>
                            <th>Улс</th>
                            <th>Утасны дугаар</th>
                            <th>Блок</th>
                            <th>Давхар</th>
                            <th>Загвар</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($relas as $rela)

                            <tr>
                                <td><a href="{{url('/home/user_check').'/'.$rela->user->id}}">{{$rela->user->name}}</a></td>
                                @if($rela->user->country == "mn")
                                    <td>Mongolia</td>
                                @else
                                    <td>{{$rela->user->country}}</td>
                                @endif
                                <td>{{$rela->user->phone_number}}</td>
                                @if($rela->block_id == 1)
                                    <td>A</td>
                                @elseif($rela->block_id == 2)
                                    <td>B</td>
                                @elseif($rela->block_id == 3)
                                    <td>C</td>
                                @endif
                                <td>{{$rela->floor_id}}</td>
                                @if($rela->model_id == 1)
                                    <td>A</td>
                                @elseif($rela->model_id == 2)
                                    <td>B</td>
                                @elseif($rela->model_id == 3)
                                    <td>C</td>
                                @elseif($rela->model_id == 4)
                                    <td>D</td>
                                @elseif($rela->model_id == 5)
                                    <td>E</td>
                                @elseif($rela->model_id == 6)
                                    <td>F</td>
                                @elseif($rela->model_id == 7)
                                    <td>G</td>
                                @elseif($rela->model_id == 8)
                                    <td>H</td>
                                @elseif($rela->model_id == 9)
                                    <td>I</td>
                                @elseif($rela->model_id == 10)
                                    <td>J</td>
                                @elseif($rela->model_id == 11)
                                    <td>K</td>
                                @endif
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>

            </div><!-- End of the col-->

        </div>
    </div>

@endsection
@section('footer')
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}   "></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>

    <!-- Key Tables -->
    <script src="{{asset('plugins/datatables/dataTables.keyTable.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Selection table -->
    <script src="{{asset('plugins/datatables/dataTables.select.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // Default Datatable
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            // Key Tables

            $('#key-table').DataTable({
                keys: true
            });

            // Responsive Datatable
            $('#responsive-datatable').DataTable();

            // Multi Selection Datatable
            $('#selection-datatable').DataTable({
                select: {
                    style: 'multi'
                }
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>
@endsection