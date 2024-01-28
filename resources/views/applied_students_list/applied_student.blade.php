@extends('dashboard')
@section('backend_header_footer')

<div class="container">
    <div class="row">
<div class="col-12">
    <h1 class="text-center mt-5 " style="color: #3D63D2; font-family:Poppins; font-weight:500 ">Applied Student Lists</h1>
        @if (session('success_delete'))
        <div class="alert alert-danger">{{ session('success_delete') }}</div>
     @endif


        <table class=" mt-5 table  table-hover" style="margin-bottom: 3rem;">
            <thead>
              <tr>
                <th>Name</th>
                <th>father's name</th>
                <th>course_name</th>
                <th>email</th>
                <th>gender</th>
                <th>age</th>
                <th>fb_profile_link</th>
                <th>phone_number</th>
                <th>current_address</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
         @forelse ($applied_students as $student )


              <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->father_name }}</td>
                <td>{{ $student->course_name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->age }}</td>
                <td> <a href="{{ $student->fb_profile_link }}">{{ $student->fb_profile_link }}</a> </td>
                <td>{{ $student->phone_number }}</td>
                <td>{{ $student->current_address }}</td>


                <td class="d-flex">


                      <form method="POST" action="{{ route('enroll.destroy',$student->id) }}">
                    @csrf
                     @method('DELETE')
                     <button class="btn btn-danger ml-2" type="submit"><i class="fa-solid fa-trash"></i></button>
                </form>

                </td>
              </tr>
              @empty
              <tr>
                <td colspan="3" class="text-center text-danger"> No student To Show</td>
              </tr>

              @endforelse
            </tbody>
          </table>
</div>

    </div>
</div>
@endsection
