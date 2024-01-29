@extends('dashboard')
@section('backend_header_footer')

<div class="container">
    <div class="row">
<div class="col-12">
    <h1 class="text-center mt-5 " style="color: #3D63D2; font-family:Poppins; font-weight:500 ">All Teacher Lists</h1>
        @if (session('success_delete'))
        <div class="alert alert-danger">{{ session('success_delete') }}</div>
     @endif


        <table class=" mt-5 table  table-hover" style="margin-bottom: 3rem;">
            <thead>
              <tr>

                <th>Id</th>
                <th>Name</th>
                <th>Profession</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
         @forelse ($teachers as $teacher )


              <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->profession }}</td>



                <td class="d-flex">


                      <form method="POST" action="{{ route('teacher_backend.destroy',$teacher->id) }}">
                    @csrf
                     @method('DELETE')
                     <button class="btn btn-danger ml-2" type="submit"><i class="fa-solid fa-trash"></i></button>
                </form>

                </td>
              </tr>
              @empty
              <tr>
                <td colspan="3" class="text-center text-danger"> No Teacher To Show</td>
              </tr>

              @endforelse
            </tbody>
          </table>
</div>

    </div>
</div>
@endsection
