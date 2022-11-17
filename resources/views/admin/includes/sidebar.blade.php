<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src=" {{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Магеллан сервис</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Заказы</p>
                    </a>
                </li>
                <!-- Выподающее меню товары -->
                <li class="nav-item menu">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tshirt"></i>
                        <p>
                            Товары
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Товары</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pcategory.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.ptag.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Теги</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Конец выподающее меню товары -->
                <!-- Выподающее меню Блог -->
                <li class="nav-item menu">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Блог
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.post.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Посты</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tag.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Теги</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Конец выподающее меню Блог -->
                <!-- Выподающее меню Пользователь -->
                <li class="nav-item menu">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users mr-2"></i>
                        <p>
                            Пользователи
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Организации</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Автопарк</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Конец выподающее меню Пользователь -->

            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>

