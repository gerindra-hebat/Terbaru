@extends("layout")
@section('konten')
    <section class="user1 my-5">
        <div class="container">
            <img class="profil mx-auto d-block" src="{{ asset('img/Foto.png') }}" alt="">
            <div class="db">
                <p class="fw-bold">Haris Adiyatma Farhan</p>
            </div>
            <div class="container1">

                <!-- {{-- <div class="box align-items-center">
                        <div class="row row-cols-1">
                            <div class="col">
                                <p>Profile</p>
                            </div>
                            <div class="col"><button type="button" class="btn1">*Lengkapi
                                    Dokumen</button></div>
                        </div>
                    </div> --}} -->
                <div class="card align-items-center justify-content-center" style="width: 15rem; height: 10rem">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Card title</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href=""></a>
                </div>

                <div class="card align-items-center justify-content-center" style="width: 15rem; height: 10rem">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Card title</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href=""></a>
                </div>

                <div class="card align-items-center justify-content-center" style="width: 15rem; height: 10rem">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Card title</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href=""></a>
                </div>

                <div class="card align-items-center justify-content-center" style="width: 15rem; height: 10rem">
                    <div class="card-block text-center mx-5">
                        <h4 class="card-title">Card title</h4>
                    </div>
                    <div class="card-block">
                        <span class="badge bg-danger">*Lengkap</span>
                    </div>
                    <a class="stretched-link" href=""></a>
                </div>
            </div>
    </section>
@endsection
