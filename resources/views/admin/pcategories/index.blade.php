@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категории </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Категории</li>
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
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <a href="{{route('admin.pcategory.create')}}" class="btn btn-block btn-info btn-sm">Добавить</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th colspan="3">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pcategories as $pcategory)
                                            <tr>
                                                <td>{{ $pcategory->id }}</td>
                                                <td>{{ $pcategory->title }}</td>
                                                <td><a href="{{route('admin.pcategory.show', $pcategory->id)}}"><i class="far fa-eye"></i></a></td>
                                                <td><a href="{{route('admin.pcategory.edit', $pcategory->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                                <td>
                                                    <form action="{{route('admin.pcategory.delete', $pcategory->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
