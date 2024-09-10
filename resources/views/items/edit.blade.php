<h1>Edit Item</h1>
<form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $item->name }}">
    <input type="text" name="description" value="{{ $item->description }}">
    <input type="number" name="price" value="{{ $item->price }}">
    <button type="submit">Update</button>
</form>
