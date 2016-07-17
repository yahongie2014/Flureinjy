@extends('layout.home')
@section('content')


    <section id="content" class="animated fadeIn">

        <div class="panel mb35">
            <div class="panel-heading">
                <span class="panel-title">{{trans('admin.add_extra')}}</span>
            </div>
            <div class="panel-body br-t">
                <div class="allcp-form theme-primary">

                    <div class="section row mb10">
                        <div class="tab-block mb25">
                            <ul class="nav nav-tabs tabs-border nav-justified">
                                <li class="active">
                                    <a href="#tab15_1" data-toggle="tab" aria-expanded="true">{{trans('admin.extra')}}</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab15_1" class="tab-pane active">

                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.extra_name')}}:</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field-label col-sm-3 ph10 text-center">{{$single->name}}</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.extra_type')}}:</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field-label col-sm-3 ph10 text-center">{{$single->type}}</label>

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
    <script>
        var rowCount = 1;
        function addMoreRows(frm) {
            rowCount ++;
            var extras = $('#extradata').val();
            jQuery('#kamatcho').val([extras]);

            var recRow = '<tr id="rowCount'+rowCount+'"> <td> '+extras+' <input type="text" name="extra_type_value[]" value='+extras+' "></td> <td> <a href="javascript:void(0);" onclick="removeRow('+rowCount+');">Remove</a> </td> </tr> ';
            jQuery('tbody').append(recRow);
        }


        function removeRow(removeNum) {
            jQuery('#rowCount'+removeNum).remove();
        }

        function remove_extra_type(Extra_num)
        {
            jQuery('#extra_type'+Extra_num).remove();
        }



    </script>


@stop