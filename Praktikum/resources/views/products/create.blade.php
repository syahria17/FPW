<h2>Tambah Produk</h2>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="name"><br>
    <label>Harga:</label><br>
    <input type="number" name="price"><br>
    <label>Stok:</label><br>
    <input type="number" name="stock"><br><br>
    <button type="submit">Simpan</button>
</form>
