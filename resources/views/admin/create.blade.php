@extends('layouts.app')
@section('content')
    <!-- Форма создания задачи... -->
    <div class="row">
        <div class="col-lg-10">
            <div class="panel-body">
                <!-- Форма новой задачи -->
                <form action="{{ route('store')  }}" method="POST" class="form-horizontal"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_method">
                {{ csrf_field() }}
                <!-- Имя задачи -->
                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-6">
                            <input type="text" name="title" id="title" value=""
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-6">
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url" class="col-sm-3 control-label">URL</label>
                        <div class="col-sm-6">
                            <input type="text" name="url" id="url" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-6">
                            <input type="text" name="status" id="status" value=""
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-sm-3 control-label">Position</label>
                        <div class="col-sm-6">
                            <input type="number" min="1" name="position" id="position" value=""
                                   class="form-control">
                        </div>
                    </div>

                    <!-- Кнопка добавления задачи -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
