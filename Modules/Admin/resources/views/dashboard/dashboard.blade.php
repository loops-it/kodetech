{{-- @include('admin::layouts.dashboard-header')

<div class="mt-4 ">
    <!-- Search bar -->
    <div class="seach-bar-container">
      <div class="seach-bar">
        <span style="margin-right: 10px;">
          <img src="{{ asset('images/searchicon.png') }}" alt="Download Icon" class="search-bar-icon" />
        </span>
        <input type="text" id="searchInput" class="form-control admin-dash-search-pnaceholder borderrrr"
          placeholder="Search patient name or Receipt number" style="border: none; outline: none; flex-grow: 1;" />
        <button id="searchBtn" class="btn"
          style="padding-left: 12px; padding-right: 12px; padding-top: 5px; padding-bottom: 5px; border: none; outline: none; background-color: #FFFFFF; border-radius: 100%;  box-shadow: 1px 1px 4px 0px #00000040;">
          <img src="{{ asset('images/searcharrow2.png') }}" alt="Arrow Icon" style="width: 13px; height: auto;">
        </button>
      </div>
      <button class="btn new-migrant-btn" onclick="window.location.href='{{ url('admin/add-migrant') }}'" >+ New Migrant</button>
    </div>

    <!-- Recently Added Patients -->
    <div class="my-4" style="margin-left: 20px; margin-right: 20px;">
      <div class="table-css">
        <h5 class="mb-5" id="searchResultTitle" style="font-weight: 600; font-family: Poppins, sans-serif; display: none;">Search Result</h5>
        <h5 class="mb-5" id="recentPatientsTitle" style="font-weight: 600; font-family: Poppins, sans-serif;">Recently Added Patients</h5>
        <div class="table-responsive">
          <table class="table align-middle table-striped table-bordered" id="patientsTable">
            <thead class="table-light">
              <tr>
                <th>Patient Name</th>
                <th>Receipt Number</th>
                <th>Serial Number</th>
                <th class="text-center mobile-alignment" style="border-left: 1.22px solid #EEEEEE !important;">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($migrant as $item)
              <tr class="search-result-row" data-name="{{ $item->name }}" data-passport="{{ $item->passport_no }}" data-serial="{{ $item->serial_no }}">
                <td>{{ $item->name }}</td>
                <td>{{ $item->passport_no }}</td>
                <td>{{ $item->serial_no }}</td>
                <td class="down-btn-2" style="border-left: 1.22px solid #EEEEEE !important;">
                <a href="{{ asset('uploads/' . $item->merge_pdf) }}" class="gap-2 btn download-btn btn-success" download>
    <img src="{{ asset('images/downicon.svg') }}" alt="Download Icon" width="20" height="20" />
    Download
</a>
                </td>
              </tr>
              
            @endforeach
            </tbody>
            
          </table>

          <div class="mt-3 d-flex justify-content-center">
                {{ $migrant->links('pagination::bootstrap-4') }}
            </div>

         
        </div>
      </div>
    </div>
</div>

<script>
  document.getElementById("searchBtn").addEventListener("click", function () {
      let searchValue = document.getElementById("searchInput").value.toLowerCase().trim();
      let rows = document.querySelectorAll(".search-result-row");
      let hasResults = false;

      rows.forEach(row => {
          let name = row.getAttribute("data-name").toLowerCase();
          let passport = row.getAttribute("data-passport").toLowerCase();
          let serial = row.getAttribute("data-serial").toLowerCase();

          if (name.includes(searchValue) || passport.includes(searchValue) || serial.includes(searchValue)) {
              row.style.display = "table-row"; // Ensure it keeps table layout
              hasResults = true;
          } else {
              row.style.display = "none";
          }
      });

      document.getElementById("recentPatientsTitle").style.display = hasResults ? "none" : "block";
      document.getElementById("searchResultTitle").style.display = hasResults ? "block" : "none";
  });

  document.getElementById("searchInput").addEventListener("input", function () {
      if (this.value.trim() === "") {
          document.querySelectorAll(".search-result-row").forEach(row => row.style.display = "table-row");
          document.getElementById("recentPatientsTitle").style.display = "block";
          document.getElementById("searchResultTitle").style.display = "none";
      }
  });
</script>


<style>
  
  .active>.page-link, .page-link.active {
    z-index: 3;
    color: var(--bs-pagination-active-color);
    background-color: #0B8FAC;
    border-color: #0B8FAC;
}

.page-link {
    color: #0B8FAC;
}

.btn-success {
    --bs-btn-color: #fff;
    --bs-btn-bg: #0B8FAC;
    --bs-btn-border-color: #0B8FAC;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0B8FAC;
    --bs-btn-hover-border-color: #0B8FAC;
    --bs-btn-focus-shadow-rgb: 60, 153, 110;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0B8FAC;
    --bs-btn-active-border-color: #0B8FAC;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0B8FAC;
    --bs-btn-disabled-border-color: #0B8FAC;
}

</style> --}}


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
@extends('admin::layouts.dashboard-header')

@section('content')
    <div class="main-wrapper">
        <div class="row row-cols-2 gap-3">
            <div class="card col-6">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-project') }}">
                            <button type="button" class="btn btn-info">Add Project</button>
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $index => $project)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $project->project }}</td>
                                        <td>{{ $project->project }}</td>
                                        <td>{{ $project->project_description ?? 'No description' }}</td>
                                        <td>
                                            @if ($project->project_image)
                                                <img src="{{ asset('storage/' . $project->project_image) }}" width="100"
                                                    height="100" alt="Project Image">
                                            @else
                                                No image
                                            @endif
                                        </td>
                                        {{-- <td>
                                          <a href="{{ route('project.edit', $project->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                          </a>
                                        
                                          <form action="{{ route('project.destroy', $project->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this project?')">
                                              <i class="fas fa-trash-alt"></i>
                                            </button>
                                          </form>
                                        </td> --}}

                                    </tr>

                                @empty
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="card col-5">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-service') }}">
                            <button type="button" class="btn btn-info">Add Service</button>
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="card col-6">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/admin/add-product') }}">
                            <button type="button" class="btn btn-info">Add Product</button>
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Overview</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $index => $product)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->product_overview }}</td>
                                        <td>{{ $product->product_description ?? 'No description' }}</td>
                                        <td>
                                            @if ($product->product_image)
                                                <img src="{{ asset('storage/' . $product->product_image) }}" width="100"
                                                    height="100" alt="Product Image">
                                            @else
                                                No image
                                            @endif
                                        </td>
                                        <td>
                                          <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                          </a>
                                        
                                          <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this product?')">
                                              <i class="fas fa-trash-alt"></i>
                                            </button>
                                          </form>
                                        </td>

                                    </tr>

                                @empty
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
