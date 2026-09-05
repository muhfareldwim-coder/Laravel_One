<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        :root { color-scheme: light; font-family: Arial, sans-serif; }
        body { margin: 0; background: #f3f6f9; color: #1f2937; }
        .container { width: min(1100px, calc(100% - 32px)); margin: 0 auto; }
        header { padding: 48px 0 24px; }
        h1 { margin: 0 0 8px; font-size: 32px; }
        .subtitle { margin: 0; color: #64748b; }
        .table-wrapper { overflow-x: auto; background: #fff; border: 1px solid #dbe3ea; border-radius: 8px; box-shadow: 0 8px 24px rgba(15, 23, 42, .06); }
        table { width: 100%; border-collapse: collapse; min-width: 680px; }
        th, td { padding: 16px 20px; text-align: left; border-bottom: 1px solid #e5e7eb; vertical-align: top; }
        th { background: #0f766e; color: #fff; font-size: 14px; }
        tr:last-child td { border-bottom: 0; }
        tbody tr:hover { background: #f0fdfa; }
        .price { white-space: nowrap; font-weight: 700; color: #0f766e; }
        .empty { padding: 40px 20px; text-align: center; color: #64748b; }
        footer { padding: 24px 0 48px; color: #64748b; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Daftar Produk</h1>
            <p class="subtitle">Data produk yang tersedia di toko.</p>
        </header>

        <main class="table-wrapper">
            @if ($products->isEmpty())
                <div class="empty">Belum ada produk yang tersedia.</div>
            @else
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->nama_produk }}</td>
                                <td>{{ $product->deskripsi }}</td>
                                <td class="price">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </main>

        <footer>Jumlah produk: {{ $products->count() }}</footer>
    </div>
</body>
</html>
