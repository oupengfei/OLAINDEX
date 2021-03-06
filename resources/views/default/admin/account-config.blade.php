@extends('default.layouts.main')
@section('title', '账号配置')
@section('content')
    <div class="card mb-3">
        <div class="card-header">账号配置</div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-control-label" for="root"><b>设置根目录</b></label>
                    <input type="text" class="form-control" id="root" name="root"
                           value="{{ array_get($config,'root', '') }}">
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="image_path"><b>图床地址</b></label>
                    <input type="text" class="form-control" id="image_path" name="image_path"
                           value="{{ array_get($config,'image_path', '/') }}">
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="list_limit"><b>列表显示条数</b></label>
                    <input type="text" class="form-control" id="list_limit" name="list_limit"
                           value="{{ array_get($config,'list_limit', 10) }}">
                </div>

                <button type="submit" class="btn btn-primary">提交</button>
                <a href="{{ route('admin.account.list') }}" class="btn btn-danger"> <i
                        class="ri-arrow-go-back-fill"></i> 返回</a>
            </form>
        </div>
    </div>
@stop
