@extends('layouts.app')

@section('title')
    mylist_create
@endsection

@section('content')
    <div class="row-my-2">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">MYリスト作成</div>
                <div class="card-body">
                    <form action="{{ Route('mylist.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="mylist_name" class="form-label">MYlist名</label>
                            <input type="text" name="mylist_name" class="form-control" id="mylist_name">
                        </div>
                        <button type="submit" class="btn btn-primary">登録</button>
                    </form>
                    <form action="./action.php">
                        <button class="btn btn-outline-primary" onClick="history.back(); return false;">戻る</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
@endsection
