 @extends('dashboard')
@section('backend_header_footer')

<div class="container">
    <div class="row">
        <h1 class="text-center mt-5" style="color: #3D63D2; font-family:Poppins; font-weight:500 ">All Cards Lists</h1>
        <table class=" mt-5 table  table-hover" style="margin-bottom: 3rem;">
            <thead>
              <tr>
                <th>Headline</th>
                <th>Description</th>
                <th>Description-two</th>
                <th>Description-three</th>
                <th>Description-four</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
         @forelse ($all_cards as $card )

                @php
                  $single_des =  $card->description

                @endphp
              <tr>
                <td>{{ $card->headline }}</td>
                <td> @php
                 echo Illuminate\Support\Str::limit($single_des,60)
                @endphp  </td>



                <td>  @php echo Illuminate\Support\Str::limit( $card->description_two,60) @endphp </td>
                <td> @php echo Illuminate\Support\Str::limit( $card->description_three,60)  @endphp</td>
                <td> @php  echo Illuminate\Support\Str::limit( $card->description_four,60) @endphp </td>

                <td class="d-flex">
                    <a href="{{ route('backend_card.edit', $card->id) }}" class="btn btn-primary m-3"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form method="POST" action="{{ route('backend_card.destroy', $card->id) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger m-3"><i class="fa-solid fa-trash"></i></button>
                    </form>


                </td>
              </tr>
              @empty
              <tr>
                <td colspan="3" class="text-center text-danger"> No Card To Show</td>
              </tr>

              @endforelse
            </tbody>
          </table>
    </div>
</div>
@endsection

