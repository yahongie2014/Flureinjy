@extends('layout.home')
@section('content')
    <script>
        var rowCount = 1;
        function addMoreRows(frm) {
            rowCount ++;
            var extras = $('#extradata').val();
            jQuery('#kamatcho').val(extras);
            if(extras.length==0){
                alert('You Must Enter Some Data')
            }else {

                var recRow = '<tr id="rowCount' + rowCount + '"> <td> ' + extras + '</td> <td> <a href="javascript:void(0);" onclick="removeRow(' + rowCount + ');">Remove</a> </td><td><input type="text" name="color[]" value='+extras+'> </td> </tr> ';
                jQuery('tbody').append(recRow);
                jQuery('#extradata').val('');
            }
        }


        function removeRow(removeNum) {
            jQuery('#rowCount'+removeNum).remove();
        }


    </script>


    <section id="content" class="animated fadeIn">

        <div class="panel mb35">
            <div class="panel-heading">
                <span class="panel-title">{{trans('admin.add_flower')}}</span>
            </div>
            <div class="panel-body br-t">
                <div class="allcp-form theme-primary">

                    <div class="section row mb10">
                        <div class="tab-block mb25">
                            <ul class="nav nav-tabs tabs-border nav-justified">
                                <li class="active">
                                    <a href="#tab15_1" data-toggle="tab" aria-expanded="true">{{trans('admin.flower')}}</a>
                                </li>
                            </ul>
                            {!! Form::open(['url'=>'edit_flower/edit/'.$single->id]) !!}

                            <div class="tab-content">
                                <div id="tab15_1" class="tab-pane active">

                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.flower_name')}}:</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field-label col-sm-3 ph10 text-center">{{$single->name}}</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.color')}}:</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field-label col-sm-3 ph10 text-center">{{$single->color}}</label>

                                            </div>
                                        </div>
                                    </div>




                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



@stop