@extends('tempalet')
@section('content')
    {{-- <style>
        background-image:url({{url(https://image.idntimes.com/post/20240104/kat-1-68a0162f55e1401ebe5d7cac9a627c6f-e4ef86318adbdb5466d065f13c97045c.jpg)
        }
        })
    </style>
    <h1>hai</h1> --}}
    <div class="d-flex flex-column   justify-content-center px-5"
        style="background-image: url('{{ url('https://image.idntimes.com/post/20240104/kat-1-68a0162f55e1401ebe5d7cac9a627c6f-e4ef86318adbdb5466d065f13c97045c.jpg')}}'); background-size: cover; background-size: cover;  min-height: 100vh;">
        <!-- Content -->
        <h1 class=" fw-bold text-light">Karena Anabulmu Berhak Mendapatkan Camilan Sehat Sesegar Buatan Rumah.</h1>
        <br>
        <h4 class="text-light fw-semibold">Camilan organik 100% tanpa pengawet, dibuat khusus untuk menjaga ekor mereka
            tetap bergoyang bahagia.</h4>
        <div class="p-1"></div>
        <button type="button" class="btn btn-light m-5 py-3 align-self-start fw-bold"
            style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">PESAN
            SEGERA</button>
    </div>


    {{-- card --}}
    <div class="container my-5">
        {{-- Judul Katalog --}}
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold" style="color: saddlebrown">Katalog Produk</h2>
                <hr class="mx-auto" style="width: 50px; border: 2px solid saddlebrown;">
            </div>
        </div>

        <div class="d-flex my-5 justify-content-center container ">

            <div class="row justify-content-center">
                <div class=" card m-1 col-12 col-md-4" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhaaHxeL2r5__-Jf4Q_MGElpBxojydselIFg&s
                                                    class=" card-img-top" alt="...">
                    <div class="card-body">
                        <h4> Salmon Glaze Biscuits (Kategori: Kucing & Anjing)</h4>
                        <p class="card-text">Biskuit renyah kaya Omega-3 dari salmon segar untuk bulu yang lebih berkilau.
                        </p>
                        <h5>Rp 45.000</h5>
                    </div>
                </div>
                <div class="card m-1 col-12 col-md-4" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmGWe3jnic4f8vIrqXsWWc592xppg6LC2x4g&s"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Beef Jerky Bites (Kategori: Anjing)</h4>
                        <p class="card-text">Daging sapi asli yang dikeringkan perlahan tanpa tambahan garam atau perasa
                            buatan.
                        </p>
                        <h5>Rp 60.000</h5>
                    </div>
                </div>
                <div class="card m-1 col-12 col-md-4" style="width: 18rem;">
                    <img src="https://cdn.ruparupa.io/fit-in/400x400/filters:format(webp)/filters:quality(90)/ruparupa-com/image/upload/Products/10227623_1.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Tuna Delights (Kategori: Kucing)</h4>
                        <p class="card-text">Camilan lembut berbahan dasar tuna premium, sangat disukai bahkan oleh kucing
                            yang
                            pemilih makanan.</p>
                        <h5>Rp 35.000</h5>
                    </div>
                </div>
                <div class="card m-1 col-12 col-md-4" style="width: 18rem;">
                    <img src="https://cdn.shortpixel.ai/spai/ret_img/www.parchedaroundtheworld.com/wp-content/uploads/2025/07/Peanut-Butter-Pumpkin-Dog-Treats-6-scaled.webp"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Veggie Pumpkin Cookies (Kategori: Anjing)</h4>
                        <p class="card-text"> Kombinasi labu kuning dan oat yang tinggi serat, bagus untuk pencernaan anabul
                            sensitif.</p>
                        <h5>Rp 40.000</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- testumonui --}}
    <div class="my-5 p-4" style="background-color: blanchedalmond ">
        <section>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4">Testimonials</h3>
                    <hr class="mx-auto" style="width: 50px; border: 2px solid saddlebrown;">
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                        quisquam eum porro a pariatur veniam.
                    </p>
                </div>
            </div>

            <div class="row text-center d-flex align-items-stretch">
                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #9d789b;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                class="rounded-circle img-fluid p-4" />
                        </div>
                        <div class="card-body">
                            <h4 class="mb-4">Maria Smantha</h4>
                            <hr />
                            <p class="dark-grey-text mt-4">
                                <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
                                consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #7a81a8;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                class="rounded-circle img-fluid  p-4" />
                        </div>
                        <div class="card-body">
                            <h4 class="mb-4">Lisa Cudrow</h4>
                            <hr />
                            <p class="dark-grey-text mt-4">
                                <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
                                repudi mollitia architecto.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0 d-flex align-items-stretch">
                    <div class="card testimonial-card">
                        <div class="card-up" style="background-color: #6d5b98;"></div>
                        <div class="avatar mx-auto bg-white">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                class="rounded-circle img-fluid  p-4" />
                        </div>
                        <div class="card-body">
                            <h4 class="mb-4">John Smith</h4>
                            <hr />
                            <p class="dark-grey-text mt-4">
                                <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
                                aliquam repellat rem unde ducimus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- form --}}
    <div class="container my-5 " style="background-color: burlywood; border-radius: 1%;">
        <div class="row">
            <div class="col  text-center">
                <h1>Form Pembelian</h1>
                <hr class="mx-auto" style="width: 60px; border: 2px solid saddlebrown;">
            </div>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Nama</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">alamat</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">produk</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">jumlah</label>
                    <input type="number" class="form-control" id="">
                </div>

            </div>
            <button type="submit" class="btn  m-4" style="background-color:chocolate; color: white;">Sign in</button>
        </form>
    </div>

@endsection