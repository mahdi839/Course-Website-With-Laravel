 @extends('dashboard')
 @section('backend_header_footer')

 <div class="container">
    <div class="row">
        <div class="col-md-12 ">
            @if (session('success_about'))

            <div class="alert alert-primary">{{ session('success_about') }}</div>

            @endif
           <div class="card">
            <div class="card-header" >
               <h4 style="color:#4e73df ">Add Information About Course</h4>
            </div>
            <div class="card-body">
                <form class="user" method="POST" action="{{ route('backend_about.create') }}">
                    @csrf

                    <div class="form-group">
                        <label for="comment">Headline:</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Create Headline" name="headline" value="{{ old('headline') }}">
                            @error('headline')
                               <small class="text-danger">{{ $message }}</small>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="comment">Description:</label>
                        <textarea class="form-control rounded" rows="5" id="comment" name="description" >{{ old('description') }}</textarea>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                     @enderror
                    </div>


                    <button type="submit" class="btn btn-primary btn-user btn-block">
                     Add
                    </button>
                    <hr>

                </form>
            </div>
           </div>
           <table class=" mt-5 table table-bordered table-hover" style="margin-bottom: 3rem;">
            <thead>
              <tr>
                <th>Headline</th>
                <th>Description</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>{{ $backend_about_info->headline }}</td>
                <td>{{ $backend_about_info->description }}</td>
                <td>
                    <a href="{{ route('backend.about.edit') }}" class="btn btn-primary m-3">Edit</a>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
    </div>
 </div>

 @endsection
