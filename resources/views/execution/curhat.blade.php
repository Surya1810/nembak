@extends('app')
@section('content')
    <div class="bg_curhat">
        <div class="animate__animated animate__flipInX
            animate__delay-1s">
            <div class="container d-flex flex-column align-items-center justify-content-center"
                style="min-height: 100svh; min-width: 100svw; color: white">
                <p class="m-3">Sekarang tentang aku dan hubungan kita, aku bukan orang yang luar biasa, banyak banget
                    kekurangan aku. Aku
                    sering bandingin diri aku sama orang lain, dan aku sadar aku bukan siapa-siapa. Banyak yang lebih baik
                    dari aku. Aku sekarang lagi struggle sama banyak hal, aku lagi fokus sama diri aku, keluarga sama
                    sekitar, aku mencoba terus jadi orang yang lebih baik, aku seneng bisa ketemu sama kamu, aku jadi enjoy
                    tiap hari yang aku lewati, dan sekarang kamu juga jadi prioritas aku. <br><br>

                    Kita sadar bahwa ada perbedaan diantara kita, kita belum ketemu solusinya tapi kita komitmen untuk maju
                    bareng dan coba liat apa yang ada di depan sana. Bisa jadi sebuah kisah yang indah tapi bisa juga jadi
                    kisah yang menyakitkan. Aku optimis dan terus enjoy setiap waktu yang aku spend bareng kamu.
                    aku gasuka kata "jalanin aja dulu", aku rasa komitmen dan keseriusan aku mahal harganya.
                    <br><br>

                    Banyak hal yang pengen aku ceritain, tentang mimpi aku, tentang keluarga aku, tentang diri aku karena
                    aku orang yang suka banget cerita, apa lagi sama kamu. Tapi nanti aja ahh, panjang, mager
                    ngetiknya.<br><br>

                    udh yaa, masih panjang sihh, cuma gempor ngetiknya, ntar malah jadi buku. <br><br>

                    Kalo tentang hubungan kita... hmmm... coba next deh.<br><br>
                </p>

                <a href="{{ route('ending') }}" class="btn btn-lg btn-outline-light my-5 px-5">next</a>
            </div>
        </div>
    </div>
@endsection
