<x-app-layout>
   <div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Create Books</h5>
        </div>
        <div class="card-body">
            <form action="{{route('book.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="author">Book auhtor</label>
                    <input id="author" class="form-control" type="text" name="author">
                </div>
                <div class="form-group">
                    <label for="pages">Pages</label>
                    <input id="pages" class="form-control" type="text" name="pages">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input id="price" class="form-control" type="text" name="price">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input id="quantity" class="form-control" type="text" name="quantity">
                </div>
                <button type="submit" class=" btn btn-primary my-4" >Save Record</button>
            </form>
        </div>
    </div>
   </div>

</x-app-layout>
