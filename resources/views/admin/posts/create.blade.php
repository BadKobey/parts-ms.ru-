@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление поста </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Добавление поста</li>
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
                <a href="{{route('admin.post.index')}}">
                    <button class=" btn btn-block btn-secondary btn-sm ">Назад</button>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-4  mb-3">
                    <form action="{{route('admin.post.store')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control " name="title"  placeholder="Название поста">
                            @error('title')
                            <div class="text-danger">*Это поле обязательно для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content" >
                                {{ old('content')  }}
                            </textarea>
                            @error('content')
                            <div class="text-danger">*Это поле обязательно для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6 col-mg-8 col-sm-12">
                            <label for="exampleInputFile">Добавить превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        @error('preview_image')
                        <div class="text-danger">*Это поле обязательно для заполнения</div>
                        @enderror
                        <div class="form-group col-lg-6 col-mg-8 col-sm-12">
                            <label for="exampleInputFile">Добавить главное изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        @error('main_image')
                        <div class="text-danger">*Это поле обязательно для заполнения</div>
                        @enderror
                        <div class="form-group col-lg-6 col-mg-8 col-sm-12 ">
                            <label>Выберите категорию</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$category->id == old('category_id') ? 'selected' : '' }}>{{$category->title}}</option>
                                @endforeach()
                            </select>
                        </div>

                        <div  class="form-group col-lg-6 col-mg-8 col-sm-12">
                            <label>Теги </label>
                            <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option {{is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : ' '}} value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach()
                            </select>
                        </div>

                        <div class="form-group">
                            <input  type="submit" class="btn btn-block btn-info btn-sm col-lg-2 col-md-4 " value="Добавить">
                        </div>
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
