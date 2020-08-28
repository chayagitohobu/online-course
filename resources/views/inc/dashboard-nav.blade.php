<div class="col-xl-2 bg-dark p-5">
    <div style="height:20vh"></div>
    <div style="transform: scale(0.8)">
       <h1 class="text-white mb-5">Hello, {{ Auth::user()->name }}</h1>
        <br><br>
        <hr>
        <h5 ><a href="/user" class="text-white">PROFILE</a> </h5>
        <hr>
        <h5 ><a href="/dashboard-peserta" class="text-white">KELAS YANG SAYA AMBIL</a></h5>
        <div style="height:10vh"></div>
        <hr>
        <h5><a href="/kelas" class="text-white">KELAS SAYA</a></h5>
        <hr>
        <h5><a href="/kelas/create" class="text-white">BUAT KELAS</a></h5>
    </div>
</div>