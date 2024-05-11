<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Issue Details</h5>
            </div>
            <div class="card-body">
                <table class="table" id="search">
                  <thead>
                    <tr>
                        <th>SN</th>
                        <th>Student</th>
                        <th>Book</th>
                        <th>Issue Date</th>
                        <th>Expire Date</th>
                        <th> Status</th>
                        <th>Actions</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($issue as $index => $issue)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $issue->student->name }}</td>
                        <td>{{ $issue->book->name }}</td>
                        <td>{{ $issue->created_at->format('d-M-Y') }}</td>
                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $issue->expiry_date)->format('d-M-Y') }}
                        </td>
                        <td>

                            <span class="badge {{$issue->status=='in'? 'bg-success' : 'bg-danger'}}">{{ $issue->status }}</span>
                        </td>
                        <td>
                     <form action="{{route('issue.update',$issue->id)}}" method="post">
                        @csrf
                        @method('put')
                        <a href="{{route('issue.update',$issue->id)}}" class=" btn btn-primary btn-sm">Edit</a>
                        <button type="submit"class=" btn btn-success btn-sm">Collect</button>
                     </form>

                        </td>


                    </tr>
                @endforeach
                  </tbody>

                </table>
            </div>
        </div>
    </div>

</x-app-layout>
