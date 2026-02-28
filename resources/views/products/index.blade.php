<div class="container">
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <h1>Products</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['category'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

    <p>Global Variables</p>
    <p>{{ $sharedVariable }}</p>

    <p>Product Key: {{ $productKey }}</p>
</div>