@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.events.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.events.fields.name')</th>
                            <td field-key='name'>{{ $event->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.events.fields.type')</th>
                            <td field-key='type'>{{ $event->type }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.events.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


