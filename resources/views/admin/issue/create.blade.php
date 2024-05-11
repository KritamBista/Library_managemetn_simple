<x-app-layout>
   <div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Create Issue</h5>
        </div>
        <div class="card-body">
            <form action="{{route('issue.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="BookID">Book ID</label>
                    <input id="BookID" class="form-control" type="text" name="BookID">
                </div>
            <div class="form-group">
                <label for="book_id">Select Books</label>
                <select id="book_id" class="form-control" name="book_id" >
                   @foreach ($books as $book)
                   <option value="{{$book->id}}">{{$book->name}}-stock({{$book->quantity}})</option>

                   @endforeach
                </select>
            </div>

                <div class="form-group">
                    <label for="student_id">Select Student</label>
                    <select id="student_id" class="form-control" name="student_id">
                       @foreach ($students as $student)
                       <option value="{{$student->id}}">{{$student->name}}</option>

                       @endforeach
                    </select>
                    <div class=" py-5">
                        <address>
                            <span class=" fw-bold">ID:</span> <span id="rID">Kritam</span><br>
                            <span class=" fw-bold">Name:</span> <span id="rName">Kritam</span><br>
                            <span class=" fw-bold">Phone:</span> <span id="rPhone">Kritam</span><br>
                            <span class=" fw-bold">Email:</span> <span id="rEmail">Kritam</span><br>


                        </address>

                    </div>
                </div>
                <div class="form-group">
                    <label for="day">Days</label>
                    <input id="day" class="form-control" type="text" name="day">
                </div>

                <button type="submit" class=" btn btn-primary my-4" >Save Record</button>
            </form>
        </div>
    </div>
   </div>

</x-app-layout>
