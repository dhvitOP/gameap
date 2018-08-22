@php($title = "Create Dedicated server")

@extends('layouts.main')

@section('breadclumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">GameAP</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.dedicated_servers.index') }}">Dedicated servers</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    @include('components.form.errors_block')

    {!! Form::open(['url' => route('admin.dedicated_servers.index')]) !!}
    <div class="col-md-6">
        {{ Form::bsText('name') }}
        {{ Form::bsText('enabled') }}
        {{ Form::bsText('os') }}
        {{ Form::bsText('location') }}
        {{ Form::bsText('provider') }}
        {{ Form::bsText('ram') }}
        {{ Form::bsText('cpu') }}
        {{ Form::bsText('work_path') }}
        {{ Form::bsText('steamcmd_path') }}
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                IP List
            </div>
            <div class="panel-body">
                @php ( $oldIpValue = old('ip') ? json_encode(old('ip')) : '[]' )
                <input-text-list :initial-items="{{ $oldIpValue }}" name="ip" label="IP"></input-text-list>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        {{ Form::bsText('script_start') }}
        {{ Form::bsText('script_stop') }}
        {{ Form::bsText('script_restart') }}
        {{ Form::bsText('script_status') }}
        {{ Form::bsText('script_get_console') }}
        {{ Form::bsText('script_send_command') }}
    </div>

    <div class="col-md-12">
        {{ Form::bsText('gdaemon_host') }}
        {{ Form::bsText('gdaemon_login') }}
        {{ Form::bsText('gdaemon_password') }}
        {{ Form::bsText('gdaemon_privkey') }}
        {{ Form::bsText('gdaemon_pubkey') }}
        {{ Form::bsText('gdaemon_keypass') }}
    </div>


    <div class="col-md-12">
        <div class="form-group">
            {{ Form::submit('Create', ['class' => 'btn btn-success']) }}
        </div>
    </div>

    {!! Form::close() !!}
@endsection
