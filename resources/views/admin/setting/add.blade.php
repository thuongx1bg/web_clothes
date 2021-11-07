@extends('layouts.admin')
@section('title')
<title>
    Setting
</title>
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'Setting','key'=>'Add'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{route('settings.store') . '?type=' .request()->type}}">
                        @csrf
                        <div class="form-group">
                            <label for="">Config_Key</label>
                            <input type="text" class="form-control @error('config_key') is-invalid @enderror" name="config_key" placeholder="Nhập confix_key">
                            @error('config_key')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        @if(request()->type==='Text')
                        <div class="form-group">
                            <label for="">Config_Value</label>
                            <input type="text" class="form-control @error('config_value') is-invalid @enderror" name="config_value" placeholder="Nhập confix_value">
                            @error('config_value')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        @elseif(request()->type==='Textarea')
                        <div class="form-group">
                        <textarea name="config_value" class="form-control @error('config_value') is-invalid @enderror" placeholder="Nhập confix_value"  rows="10"></textarea>
                        @error('config_value')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
                        @endif
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>

        </div>
    </div>

</div>

@endsection