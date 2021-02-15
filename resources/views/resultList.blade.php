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
            <div class="card">
                <div class="card-header">
                    Students Results List
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <button type="button" onclick="regform()" class="btn btn-primary">Add Result</button>
                        </div>
                        <div class="col-sm-1">
                            <button type="button" onclick="reportform()" class="btn btn-info">Report</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2">SL</th>
                                        <th class="text-center" rowspan="2">Students</th>
                                        <th class="text-center table-info" colspan="4">Half-Yearly</th>
                                        <th class="text-center table-success" colspan="4">Final</th>
                                        <th class="text-center" rowspan="2">Action</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center table-info">CT 1</th>
                                        <th class="text-center table-info">CT 2</th>
                                        <th class="text-center table-info">CT 3</th>
                                        <th class="text-center table-info">Half-yearly</th>
                                        <th class="text-center table-success">CT 1</th>
                                        <th class="text-center table-success">CT 2</th>
                                        <th class="text-center table-success">CT 3</th>
                                        <th class="text-center table-success">Final</th>
                                    </tr>
                                </thead>
                                <tbody id="resultBody">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Result Registration Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="resultForm" action="" method="POST">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Student Name</label>
                                                <input type="text" class="form-control" name="student_name" id="student_name">
                                                <input type="hidden" class="form-control" name="id" id="id">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>CT 1</label>
                                                        <input type="text" class="form-control" name="ct1h" id="ct1h">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>CT 2</label>
                                                        <input type="text" class="form-control" name="ct2h" id="ct2h">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>CT 3</label>
                                                        <input type="text" class="form-control" name="ct3h" id="ct3h">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Half-Yearly</label>
                                                        <input type="text" class="form-control" name="half" id="half">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>CT 1</label>
                                                        <input type="text" class="form-control" name="ct1f" id="ct1f">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>CT 2</label>
                                                        <input type="text" class="form-control" name="ct2f" id="ct2f">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>CT 3</label>
                                                        <input type="text" class="form-control" name="ct3f" id="ct3f">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Final</label>
                                                        <input type="text" class="form-control" name="final" id="final">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button class="btn btn-primary" onclick="saveResult()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="reportModalLongTitle">Generate Result Report</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="reportForm" action="{{URL::to('/genReport')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Class Test</label>
                                                <select class="form-control" name="ct" id="ct">
                                                    <option value="1">Average</option>
                                                    <option value="2">Bast 1</option>
                                                    <option value="3">Bast 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Merit Position</label>
                                                <select class="form-control" name="final" id="final">
                                                    <option value="1">Only Final</option>
                                                    <option value="2">Final + Half Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button class="btn btn-primary" onclick="generateReport()">Generate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        $(function(){
            loadResultLists();
        });

        function regform(){
            $('#resultForm').trigger('reset');
            $('#exampleModalCenter').modal('show');
        }

        function reportform(){
            $('#reportModal').modal('show');
        }

        function generateReport(){
            $('#reportForm').trigger('submit');
        }

        function editResult(id){
            var url = '{{URL::to("/updateData")}}'+'/'+id;
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                async: false,
                success: function (data){
                    $('#student_name').val(data.student_name);
                    $('#ct1h').val(data.ct1h);
                    $('#ct2h').val(data.ct2h);
                    $('#ct3h').val(data.ct3h);
                    $('#half').val(data.half);
                    $('#ct1f').val(data.ct1f);
                    $('#ct2f').val(data.ct2f);
                    $('#ct3f').val(data.ct3f);
                    $('#final').val(data.final);
                    $('#id').val(data.id);
                    $('#exampleModalCenter').modal('show');
                },
                error: function (error){
                }
            });
        }

        function loadResultLists(){
            var url = '{{URL::to("/resultData")}}';
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                async: false,
                success: function (data){
                    var rows;
                    for(var j = 0; j < data.length; j++){
                        rows += '<tr>'+
                                    '<td>'+(j+1)+'</td>'+
                                    '<td>'+data[j].student_name+'</td>'+
                                    '<td class="table-info">'+data[j].ct1h+'</td>'+
                                    '<td class="table-info">'+data[j].ct2h+'</td>'+
                                    '<td class="table-info">'+data[j].ct3h+'</td>'+
                                    '<td class="table-info">'+data[j].half+'</td>'+
                                    '<td class="table-success">'+data[j].ct1f+'</td>'+
                                    '<td class="table-success">'+data[j].ct2f+'</td>'+
                                    '<td class="table-success">'+data[j].ct3f+'</td>'+
                                    '<td class="table-success">'+data[j].final+'</td>'+
                                    '<td><button type="button" onclick="editResult('+data[j].id+')" class="btn btn-success">Edit</button></td>'+
                                '</tr>';
                    }
                    $('#resultBody').html(rows);
                },
                error: function (error){
                }
            });
        }

        function saveResult(){
            
            var student_name = $('#student_name').val();
            var ct1h = $('#ct1h').val();
            var ct2h = $('#ct2h').val();
            var ct3h = $('#ct3h').val();
            var half = $('#half').val();
            var ct1f = $('#ct1f').val();
            var ct2f = $('#ct2f').val();
            var ct3f = $('#ct3f').val();
            var final = $('#final').val();
            var id = $('#id').val();

            if(id > 0){
                var url = '{{URL::to("/updateResult")}}'+'/'+id;
            }else{
                var url = '{{URL::to("/saveResult")}}';
            }

            if(ct1h == null || ct1h == ''){ ct1h = 0;}
            if(ct2h == null || ct2h == ''){ ct2h = 0;}
            if(ct3h == null || ct3h == ''){ ct3h = 0;}
            if(half == null || half == ''){ half = 0;}
            if(ct1f == null || ct1f == ''){ ct1f = 0;}
            if(ct2f == null || ct2f == ''){ ct2f = 0;}
            if(ct3f == null || ct3f == ''){ ct3f = 0;}
            if(final == null || final == ''){ final = 0;}

            $.ajax({
                type: 'POST',
                url: url,
                data: {student_name: student_name,
                        ct1h: ct1h,
                        ct2h: ct2h,
                        ct3h: ct3h,
                        half: half,
                        ct1f: ct1f,
                        ct2f: ct2f,
                        ct3f: ct3f,
                        final: final,
                        _token: '{{ csrf_token() }}'},
                dataType: 'json',
                async: false,
                success: function (data){
                    $('#exampleModalCenter').modal('hide');
                    // alert('Successfull !');
                    loadResultLists();
                },
                error: function (error){
                    alert('Failed !');
                }
            });
        }
    </script>

@endsection