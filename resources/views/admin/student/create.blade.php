<x-app-layout>
   <div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Enter Student</h5>
        </div>
        <div class="card-body">
            <form action="{{route('student.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="StudentID">Student ID</label>
                    <input id="StudentID" class="form-control" type="text" name="StudentID">
                </div>
                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="phone">phone</label>
                    <input id="phone" class="form-control" type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" name="email">
                </div>
                
                <button type="submit" class=" btn btn-primary my-4" >Save Record</button>
            </form>
        </div>
    </div>
   </div>

</x-app-layout>
