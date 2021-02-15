@extends('welcome')

@section('css')

    <style>
        .body{
            padding: 20px;
        }
        .row{
            padding: 8px;
        }
    </style>

@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th class="text-center" rowspan="2">SL</th>
                        <th class="text-center" rowspan="2">Students</th>
                        <th class="text-center table-info" colspan="7">Half-Yearly</th>
                        <th class="text-center table-success" colspan="7">Final</th>
                        <th class="text-center table-warning" colspan="3">Grand</th>
                    </tr>
                    <tr>
                        <th class="text-center table-info">CT 1</th>
                        <th class="text-center table-info">CT 2</th>
                        <th class="text-center table-info">CT 3</th>
                        <th class="text-center table-info">C.CT</th>
                        <th class="text-center table-info">Half-yearly</th>
                        <th class="text-center table-info">C.CT + Half-yearly</th>
                        <th class="text-center table-info">Convarted 100</th>
                        <th class="text-center table-success">CT 1</th>
                        <th class="text-center table-success">CT 2</th>
                        <th class="text-center table-success">CT 3</th>
                        <th class="text-center table-success">C.CT</th>
                        <th class="text-center table-success">Final</th>
                        <th class="text-center table-success">C.CT + Final</th>
                        <th class="text-center table-success">Convarted 100</th>
                        <th class="text-center table-warning">Grand Total</th>
                        <th class="text-center table-warning">On 100</th>
                        <th class="text-center table-warning">Merit Position</th>
                    </tr>
                </thead>
                <tbody id="resultBody">
                    @php 
                        $i = 1;
                    @endphp
                    @foreach($resultData as $row)
                        @php
                            $ccth = 0;
                            $cctf = 0;

                            if($ct == 2){
                                $ccth = max($row->ct1h,$row->ct2h,$row->ct3h);
                                $cctf = max($row->ct1f,$row->ct2f,$row->ct3f);
                            }else if($ct == 3){
                                $a = [$row->ct1h,$row->ct2h,$row->ct3h];
                                $b = [$row->ct1f,$row->ct2f,$row->ct3f];

                                rsort($a);
                                $ccth = ($a[0]+$a[1])/2;

                                rsort($b);
                                $cctf = ($b[0]+$b[1])/2;
                            }else{
                                $ccth = ($row->ct1h+$row->ct2h+$row->ct3h)/3;
                                $cctf = ($row->ct1f+$row->ct2f+$row->ct3f)/3;
                            }

                            $cth = $ccth + $row->half;
                            $ctf = $cctf + $row->final;
                            $conf = (100 * $ctf)/120;
                            $conh = (100 * $cth)/120;

                            If($final == 2){
                                $grand = $conf+$conh;
                                $conGrand = (100 * $grand)/200;
                            }else{
                                $grand = $conf;
                                $conGrand = $grand;
                            }
                        @endphp
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td class="text-center">{{ $row->student_name }}</td>
                            <td class="text-center table-info">{{ $row->ct1h }}</td>
                            <td class="text-center table-info">{{ $row->ct2h }}</td>
                            <td class="text-center table-info">{{ $row->ct3h }}</td>
                            <td class="text-center table-info">{{ ceil($ccth) }}</td>
                            <td class="text-center table-info">{{ $row->half }}</td>
                            <td class="text-center table-info">{{ ceil($cth) }}</td>
                            <td class="text-center table-info">{{ ceil($conh) }}</td>
                            <td class="text-center table-success">{{ $row->ct1f }}</td>
                            <td class="text-center table-success">{{ $row->ct2f }}</td>
                            <td class="text-center table-success">{{ $row->ct3f }}</td>
                            <td class="text-center table-success">{{ ceil($cctf) }}</td>
                            <td class="text-center table-success">{{ $row->final }}</td>
                            <td class="text-center table-success">{{ ceil($ctf) }}</td>
                            <td class="text-center table-success">{{ ceil($conf) }}</td>
                            <td class="text-center table-warning">{{ ceil($grand) }}</td>
                            <td class="text-center table-warning">{{ ceil($conGrand) }}</td>
                            <td class="text-center table-warning"></td>
                        </tr>
                        @php 
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')

@endsection