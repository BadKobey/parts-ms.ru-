@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование  тега </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Редактирование тега</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class=" row col-lg-1 col-md-4 mb-3">
                <a href="{{route('admin.tag.index')}}">
                    <button class=" btn btn-block btn-secondary btn-sm ">Назад</button>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <form action="{{route('admin.tag.update', $tag->id)}}"  method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control " name="title"  placeholder="Название категории" value="{{$tag->title}}">
                            @error('title')
                            <div class="text-danger">*Это поле обязательно для заполнения</div>
                            @enderror
                        </div>
                        <input  type="submit" class="btn btn-block btn-info btn-sm col-lg-2 col-md-4" value="Обновить">

                    </form>
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection