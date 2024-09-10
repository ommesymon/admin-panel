<h1>Add New Item</h1>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    <input type="number" name="price" placeholder="Price">
    <button type="submit">Save</button>
</form>
