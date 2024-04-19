@extends('app')
@section('content')
    <div class="bg_curhat">
        <div class="animate__animated animate__fadeIn
            animate__delay-1s">
            <div class="container d-flex flex-column align-items-center justify-content-center"
                style="min-height: 100svh; min-width: 100svw; color: white">
                <p>Sekarang tentang aku dan hubungan ini, aku bukan orang yang sempurna, banyak banget kekurangan aku. Aku
                    sering
                    membandingkan diri aku sama orang lain, dan aku sadar aku bukan siapa-siapa. Banyak yang lebih baik di
                    sekitar kamu ca, aku ga ngerti kenapa kamu mau sama aku, tohh ada yang seagama upss wkwkw.

                    Kita sadar bahwa ada perbedaan diantara kita, kita belum ketemu solusinya tapi kita komitmen untuk maju
                    bareng dan coba liat apa yang ada di depan sana. Bisa jadi sebuah kisah yang indah tapi bisa juga jadi
                    kisah
                    yang menyakitkan, jujur aku egois tentang ini. Aku selalu optimis kalo kita bisa berhasil, Tapi kamu
                    waktu itu sempat ga optimis dan pengen jalanin aja, jujur itu yang bikin aku kepikiran dan ragu untuk
                    maju,
                    aku gasuka kata "jalanin aja dulu", aku rasa komitmen dan keseriusan aku mahal harganya. <br><br>Tapi
                    ternyata akhirnya aku ngerasa kamu yang paling penting, bukan perbedaannya. Terkesan kaya lagi ngebut
                    dijalan tol sambil nutup mata, aku tau apa yang bakal terjadi tapi aku mau enjoy nutup matanya.</p>

                <a href="{{ route('ending') }}" class="btn btn-lg btn-outline-light mt-5 px-5">next</a>
            </div>
        </div>
    </div>
@endsection
