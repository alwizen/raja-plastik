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
                 <form action="{{ route('admin.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                  <label  class="form-label">Nama Item</label>
                                  <input type="text" class="form-control" id="name_item" name="name_item" >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Harga</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="category" name="category">
                                {{-- <select class="form-select" aria-label="Default select example" name="category">
                                  <option selected>Pilih Kategori</option>
                                  @foreach ($categorys as $item)
                                    <option value="{{ $item->id }}">{{ $item->name_category }}</option>
                                  @endforeach
                                </select> --}}
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Isi</label>
                                <input type="number" class="form-control" id="pcs_item" name="pcs_item">
                            </div>

                            <button type="submit" class="btn btn-danger float-end">Submit</button>
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