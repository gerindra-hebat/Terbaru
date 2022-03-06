@extends("Layout/main")
@section("konten")
<div class="col py-3">
           
            <div class="row">
            <h1>Profile</h1>
                <div class="col-3 mx-3">
                
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('img/Foto.png') }}" class="cardimg" alt="...">
                        <div class="card-body">
                            <a href="#" class="btncard">Unggah Foto</a>
                        </div>
                    </div>
                </div>  
                <div class="col-6 mx-5 g-3">
                    <form>
                        <div class="form-group">
                            <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telepon">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Latar Belakang Pekerjaan">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organisai Yang  di Ikuti">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="profilform" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jaringan Togas/Tomas Yang di Kenal">
                        </div>
                        <br>
                        <button type="submit" class="sbmt">Simpan</button>
                        <br>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection