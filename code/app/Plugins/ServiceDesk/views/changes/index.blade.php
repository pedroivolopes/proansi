@extends('themes.default1.agent.layout.agent')


@section('content')
<section class="content-header">
    <h1> {{Lang::get('service::lang.changes')}} </h1>

</section>

<!-- Main content -->
<section class="content">
    @if (Session::has('message'))
    <div class="alert alert-success fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4>{{Lang::get('service::lang.list_of_changes')}}</h4>
                    <div class="pull-right">

                        <a href="{!!URL::route('service-desk.changes.create')!!}" class="btn btn-primary">{{Lang::get('service::lang.new_changes')}} </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!! Datatable::table()
                    ->addColumn(

                    Lang::get('service::lang.subject'),
                    Lang::get('service::lang.reason'),
                    //Lang::get('service::lang.status'),
                    //Lang::get('service::lang.priority'),
                    //Lang::get('service::lang.change_type'),
                    //Lang::get('service::lang.impact'),
                    //Lang::get('service::lang.location'),
                    //Lang::get('service::lang.approval'),
                    Lang::get('service::lang.action'))

                    ->setUrl('get-changes')  // this is the route where data will be retrieved
                    ->render() !!}

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
</section>
<!-- /.content -->
</div>
@stop