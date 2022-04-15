@extends('layouts.backend_master')

@section('title', 'Category')

@section('master_content')

<div class="row">
    <div class="col-md-8 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-info">Manage Category</h3>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        <tbody id="catTbody"></tbody>
                        {{-- <tr>
                            <td>1</td>
                            <td>Demo</td>
                            <td><img src="" alt="" ></td>
                            <td class="text-center">
                                <a data-toggle="modal" data-target="#viewModal" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <a data-toggle="modal" data-target="#editModal" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                <a data-toggle="modal" data-target="#viewModal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
   {{-- the end catagory data show --}}
   <div class="col-md-4 mt-3">
       <div class="card">
           <div class="card-header">
               <h3 class="text-info">Add Category</h3>
           </div>
           <div class="card-body">
               <form action="" id="addCategoryForm">
                   <div class="form-group">
                       <input type="text" class="form-control" id="name" placeholder="Category Name">
                       <span class="text-danger" id="catNameError"></span>
                   </div>
                   <div class="form-group">
                       <input type="file" class="form-control" name="image" id="image">
                       <span class="text-danger" id="catImageError"></span>
                   </div>
                   <div class="form-group">
                       <button class="btn btn-sm btn-success btn-block"><i class="fa fa-plus"></i> Add New Category</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}

  <!--View Modal -->
  <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table>
              <tbody class="table table-bordered" id="tbody">
                  <tr>
                      <th>Name</th>
                      <th>Demo</th>
                  </tr>
                  <tr>
                      <th>Image</th>
                      <th><img src="" alt=""></th>
                  </tr>
              </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!--Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table>
              <tbody class="table table-bordered">
                  <tr>
                      <th>Name</th>
                      <th>Demo</th>
                  </tr>
                  <tr>
                      <th>Image</th>
                      <th><img src="" alt=""></th>
                  </tr>
              </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
@stop

@push('js')
    <script>

        const getAllCategory = async () => {
            let url = `${admin_base_url}/category/all`
            const {data} = await axios.get(url)
            table_data_show(data)
        }
        getAllCategory()

        const table_data_show = (items) => {
            let loop = items.map((item, index) => {
                return `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.name}</td>
                    <td><img src="${item.image}" alt="" ></td>
                    <td class="text-center">
                        <a data-toggle="modal" data-target="#viewModal" id="viewRow" class="btn btn-sm btn-success" data-id="${item.slug}"><i class="fa fa-eye"></i></a>
                        <a data-toggle="modal" data-target="#editModal" class="btn btn-sm btn-info" data-id="${item.slug}"><i class="fa fa-edit"></i></a>
                        <a data-toggle="modal" data-target="#viewModal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                `
            });
            loop = loop.join("")
            const tbody = $$('#catTbody')
            tbody.innerHTML = loop
            // log(tbody);
        }

        // view

        $('body').on('click', '#viewRow', function(){
            let slug = $(this).data('data-id');
        });
    </script>
@endpush


