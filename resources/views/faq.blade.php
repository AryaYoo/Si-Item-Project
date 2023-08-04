@extends('layouts.main')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="accordion" id="accordionExample">



                <h1>FAQ</h1>
                <div class="accordion-item border border-dark">
                    <h2 class="accordion-header" id="heading-one">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
                            Kenapa Perlu menggunakan Barang Elektronik bekas ?
                        </button>
                    </h2>
                    <div id="collapse-one" class="accordion-collapse collapse show" aria-labelledby="heading-one"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Taukah kamu ?.</strong>
                            <li>kalau menggunakan barang elektronik bekas layak pakai dapat membantu
                                mengurangi limbah dan mencegah banyak barang yang masih layak pakai berakhir di tempat
                                pembuangan sampah.
                                Dengan memanfaatkan kembali barang bekas, kita dapat mengurangi tekanan pada lingkungan dan
                                mengurangi jejak
                                karbon yang dihasilkan oleh produksi barang baru.</li>
                            <li>Menghemat sumber daya: Produksi barang baru menghabiskan banyak sumber daya alam seperti
                                air, energi, dan
                                bahan mentah. Dengan memilih barang bekas, kita membantu menghemat sumber daya alam ini dan
                                mengurangi dampak
                                negatif yang terkait dengan ekstraksi sumber daya.</li>
                            <li>Biaya lebih rendah: Barang bekas umumnya lebih murah daripada barang baru. Menggunakan
                                barang bekas dapat
                                membantu menghemat uang dan menjadi pilihan ekonomis, terutama untuk barang yang memiliki
                                harga tinggi dalam kondisi baru</li>
                            <li>Reduksi pembuangan sampah: Dengan menggunakan barang bekas, kita berkontribusi pada upaya
                                reduksi sampah dan mendukung siklus
                                ekonomi yang lebih berkelanjutan</li>
                        </div>
                    </div>
                </div>



                <div class="accordion-item border border-dark">
                    <h2 class="accordion-header" id="heading-two">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                            Apakah Barang yang dijual disini masih bagus ?
                        </button>
                    </h2>
                    <div id="collapse-two" class="accordion-collapse collapse" aria-labelledby="heading-two"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong></strong> barang yang dijual di aplikasi ini tentunya masih layak pakai ya
                            sobat, tenang aja sebelum pemilik barang menjual barang elektronik
                            miliknya kami sudah memastikan bahwa barang nya masih menyala dan masih bisa digunakan.
                            jadi jangan takut dan ragu untuk membeli barang disini ya sobat
                            karena kami memberikan pelayanan terbaik untuk kalian.
                        </div>
                    </div>
                </div>


                <div class="accordion-item border border-dark">
                    <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            Bagaimana mengetahui Barang yang ada di sini berfungsi ?
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Untuk mengetahui barang elektronik disini berfungsi dengan baik, yang dapat kalian lakukan
                            adalah membuka katalog barang yang anda pilih, lalu membuka deskripsi barang tersebut dan nanti
                            akan terhubung dengan WA pemilik barang tersebut. anda dapat bertanya langsung kepada penjual
                            terkait kondisi barang yang mereka jual dengan cara mengirim pesan atau meminta video review
                            barang dari penjual.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border border-dark">
                    <h2 class="accordion-header" id="heading-two">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-three" aria-expanded="false" aria-controls="collapse-two">
                            Bagaimana melakukan pembayaran
                        </button>
                    </h2>
                    <div id="collapse-three" class="accordion-collapse collapse" aria-labelledby="heading-three"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Anda dapat melakukan pembayaran dengan Cash On Delivery. dengan membayar uang tunai saat barang
                            yang anda pesan sampai ketangan anda.
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
@endsection
