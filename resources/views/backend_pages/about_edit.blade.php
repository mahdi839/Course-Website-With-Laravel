 @extends('dashboard')
@section('backend_header_footer')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            @if (session('success_update'))

            <div class="alert alert-primary">{{ session('success_update') }}</div>

            @endif
           <div class="card">
            <div class="card-header" >
               <h4 style="color:#4e73df ">Edit Your Info [ {{ $backend_about_info->headline }} ]</h4>
            </div>
            <div class="card-body">
                <form class="user" method="POST" action="{{ route('backend.about.update',$backend_about_info->id) }}" >
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="comment">Headline:</label>
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                            placeholder="Create Headline" name="headline" value="{{ old('headline', $backend_about_info->headline) }}">
                            @error('headline')
                               <small class="text-danger">{{ $message }}</small>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="comment">Description:</label>
                        <textarea class="form-control rounded" rows="5" id="comment" name="description" >{{ old('description',$backend_about_info->description) }}</textarea>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                     @enderror
                    </div>


                    <button type="submit" class="btn btn-primary btn-user btn-block">
                     Update
                    </button>
                    <hr>

                </form>
            </div>
           </div>
        </div>
    </div>
@endsection
