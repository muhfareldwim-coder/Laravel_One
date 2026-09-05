<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Produk</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container navbar-content">

            <div class="logo">
                MyProduct
            </div>

            <div class="menu">
                <a href="/products">Produk</a>
                <a href="#">Tentang</a>
                <a href="#">Kontak</a>
            </div>

        </div>
    </nav>


    <!-- HEADER -->
    <section class="hero">

        <div class="container">

            <h1>Daftar Produk</h1>

            <p>
                Temukan produk terbaik dengan harga terjangkau.
            </p>

        </div>

    </section>


    <!-- PRODUK -->
    <main class="container">

        <div class="product-grid">

            @forelse ($products as $product)

                <div class="product-card">

                    <div class="product-image">
                        🛍️
                    </div>

                    <div class="product-info">

                        <h2>
                            {{ $product->nama_produk }}
                        </h2>

                        <p class="description">
                            {{ $product->deskripsi }}
                        </p>

                        <div class="bottom">

                            <span class="price">
                                Rp {{ number_format($product->harga, 0, ',', '.') }}
                            </span>

                            <button class="btn">
                                Beli
                            </button>

                        </div>

                    </div>

                </div>

            @empty

                <div class="empty">

                    <h2>Belum Ada Produk</h2>

                    <p>
                        Data produk belum tersedia.
                    </p>

                </div>

            @endforelse

        </div>

    </main>


    <!-- FOOTER -->
    <footer>

        <p>
            © {{ date('Y') }} MyProduct
        </p>

    </footer>

</body>

</html>
