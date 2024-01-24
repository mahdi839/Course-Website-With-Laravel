@extends('dashboard')
@section('backend_header_footer')

<div class="container">
    <div class="row">
<div class="col-12">
    <h1 class="text-center mt-5 " style="color: #3D63D2; font-family:Poppins; font-weight:500 ">All Testimonials Lists</h1>
        @if (session('success_delete'))
        <div class="alert alert-danger">{{ session('success_delete') }}</div>
     @endif


        <table class=" mt-5 table  table-hover" style="margin-bottom: 3rem;">
            <thead>
              <tr>
                <th>Name</th>
                <th>Profession</th>
                <th>gender</th>
                <th>Comments</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
         @forelse ($single_testimonial as $testimonial )


              <tr>
                <td>{{ $testimonial->name }}</td>
                <td>{{ $testimonial->profession }}</td>
                <td>{{ $testimonial->gender }}</td>
                <td> {{ Illuminate\Support\Str::limit($testimonial->comment,120) }}</td>

                <td class="d-flex">

                    <a href="{{ route('backend_testimonial.edit', $testimonial->id) }}" class="btn btn-primary ml-2"><i class="fa-solid fa-pen-to-square"></i></a>
                      <form method="POST" action="{{ route('backend_testimonial.destroy',$testimonial->id) }}">
                    @csrf
                     @method('DELETE')
                     <button class="btn btn-danger ml-2" type="submit"><i class="fa-solid fa-trash"></i></button>
                </form>

                </td>
              </tr>
              @empty
              <tr>
                <td colspan="3" class="text-center text-danger"> No Testimonial To Show</td>
              </tr>

              @endforelse
            </tbody>
          </table>
</div>

    </div>
</div>
@endsection

