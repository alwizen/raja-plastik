<!DOCTYPE html>
<html lang="en">
    
@include('admin.navigation.head')

<head>
<title>Admin View</title>

  

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    @include('admin.navigation.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('admin.navigation.navbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Katalog MunjungAgung Plastik</h1> --}}
                       {{-- <a href="{{ route('admin.create') }}" class="btn btn-primary mb-4">Add Item</a> --}}
                       {{-- <a href="{{ route('category.index') }}" class="btn btn-danger mb-4">List Category</a> --}}
                        {{-- <a href="{{ route('category.create') }}" class="btn btn-warning mb-4">Add Category</a> --}}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Katalog MunjungAgung Plastik</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" id="myTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Item</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Isi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($catalogs as $no => $item)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $item->name_item }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ mataUang_IDR($item->price) }}</td>
                                    <td>{{ $item->pcs_item }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
            </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            @include('admin.navigation.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('admin.navigation.logout')

    @include('admin.navigation.script')
</body>

</html>