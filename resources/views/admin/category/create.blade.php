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
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Katalog MunjungAgung Plastik</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                 <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                          <label  class="form-label">Nama Kategori</label>
                          <input type="text" class="form-control" id="name_category" name="name_category" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="desc_category" name="desc_category">
                    </div>

                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
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