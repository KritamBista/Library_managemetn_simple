<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Student Details</h5>
            </div>
            <div class="card-body">
                <table class="table" id="search">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Actions</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $student->StudentID }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->phone }}</td>
                                </td>

                                <td>
                                    <a href="" class=" btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('student.show', $student->id) }}"
                                        class=" btn btn-success btn-sm">Show</a>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</x-app-layout>
