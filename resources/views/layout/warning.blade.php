@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <button class="close" data-dismiss="alert" area-hidden = "true">&times;</button>
        <h2>{{trans('admin.error')}}</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissable">
        <button class="close" data-dismiss="alert" area-hidden = "true">&times;</button>
        <h2>{{trans('admin.error')}}</h2>
        <p>{{session()->get('error')}}</p>
    </div>
@endif


@if(session()->has('success'))
    <div class="alert alert-success alert-dismissable">
        <button class="close" data-dismiss="alert" area-hidden = "true">&times;</button>
        <h2>{{trans('admin.success')}}</h2>
        <p>{{session()->get('success')}}</p>
    </div>
@endif