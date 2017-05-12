@extends('layout/template')

@section('content')
 <h1>Peru BookStore</h1>
 <a href="{{url('/books/create')}}" class="btn btn-success">Create Book</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>ISBN</th>
         <th>Title</th>
         <th>Author</th>
         <th>Publisher</th>
         <th>Thumbs</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($books as $book)
         <tr>
             <td>{{ $book->id }}</td>
             <td>{{ $book->isbn }}</td>
             <td>{{ $book->title }}</td>
             <td>{{ $book->author }}</td>
             <td>{{ $book->publisher }}</td>
             <td><img src="{{asset('img/'.$book->image.'.png')}}" height="35" width="60"></td>
             <td><a href="{{url('books',$book->id)}}" class="btn btn-primary">Read</a></td> <!-- Not Getting it-->
             <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Update</a></td> <!-- Not Getting it-->
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['books.destroy', $book->id], 'onsubmit' => 'return confirm("are you sure ?")']) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
