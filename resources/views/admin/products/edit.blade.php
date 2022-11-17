@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование  продукта </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Редактирование продукта</li>
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
                <a href="{{route('admin.product.index')}}">
                    <button class=" btn btn-block btn-secondary btn-sm ">Назад</button>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <form action="{{route('admin.product.update', $product->id)}}"  method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')


                        <div class="form-group">
                            <input type="text" class="form-control " name="title"  placeholder="Название продукта" value="{{$product->title}}">

                        </div>

                        <div class="form-group">
                            <textarea id="summernote" name="description" >
                                {{$product->description}}
                            </textarea>

                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control " name="code"  placeholder="Артикул продукта" {{$product->code}}>

                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control " name="price"  placeholder="Цена продукта" {{$product->price}}>

                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control " name="count"  placeholder="Каличество продукта" {{$product->count}}>

                        </div>

                        <div class="form-group col-lg-6 col-mg-8 col-sm-12 ">
                            <label>Выберите категорию</label>
                            <select name="pcategory_id" class="form-control">
                                @foreach($pcategories as $pcategory)
                                    <option value="{{$pcategory->id}}" {{$pcategory->id == $product->pcategory_id ? 'selected' : '' }}>{{$pcategory->title}}</option>
                                @endforeach()
                            </select>
                        </div>

                        <div  class="form-group col-lg-6 col-mg-8 col-sm-12">
                            <label>Теги </label>
                            <select class="select2" name="ptag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                                @foreach($ptags as $ptag)
                                    <option {{is_array($product->ptags->pluck('id')->toArray()) && in_array($ptag->id, $product->ptags->pluck('id')->toArray()) ? 'selected' : ' '}} value="{{$ptag->id}}">{{$ptag->title}}</option>
                                @endforeach()
                            </select>
                        </div>

                        <div class="form-group">
                            <input  type="submit" class="btn btn-block btn-info btn-sm col-lg-2 col-md-4 " value="Добавить">
                        </div>
                    </form>
                </div>

            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
