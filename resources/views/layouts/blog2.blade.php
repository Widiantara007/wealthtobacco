@extends('main')
@section('content')
            <!-- Page Header Start -->
            <div class="page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../img/carousel-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>{{__('Cara Mengolah Tembakau')}}
                            </h2>
                        </div>
                        <div class="col-12">
                            <a href="">{{__('Beranda')}}</a>
                            <a href="">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        {{-- <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div> --}}
                        <div class="col-lg-7 col-md-6">
                            {{-- <div class="section-header text-center">
                                <p>B1</p>
                                <h2>Keisengan Yang Membawa Berkat</h2>
                            </div> --}}
                            <div class="about-text">

                               <p>
                                {{__('Mengolah tembakau tidak semudah membuat makanan sehari-hari di rumah. Diperlukan konsistensi dan fokus yang tinggi. Jika dibedah lebih rinci terdapat beberapa poin kritis dan penting dalam pengolahan tembakau menjadi produk yang siap dikonsumsi.')}}
                                </p> 
                                
                                <H5>1. {{__('Pemetikan')}}</H5>
                               <p>
                                {{__('Proses ini melibatkan pengambilan daun tembakau dari tanaman setelah mencapai kematangan optimal. Pemetikan dapat dilakukan secara manual oleh pekerja tani atau menggunakan mesin pemetik, tergantung pada skala produksi dan kebutuhan.')}}</p> 

                                <H5>2. {{__('Fermentasi:')}}
                                </H5>
                               <p>
                                {{__('Setelah dipetik, daun tembakau disusun dan diatur dalam tumpukan untuk mengalami proses fermentasi. Tahap ini berlangsung selama beberapa minggu hingga bulan, bergantung pada metode fermentasi yang digunakan. Fermentasi memainkan peran penting dalam membentuk cita rasa dan aroma tembakau.')}}

                                </p> 
                                
                                <H5>
                                    3. {{__('Pengeringan:')}}
                                    </H5>
                               <p>
                                {{__('Daun tembakau yang telah mengalami fermentasi harus dikeringkan untuk menghilangkan kelembaban. Proses pengeringan dapat dilakukan dengan menggantung daun di tempat terbuka atau menggunakan oven pengering khusus, memastikan tembakau siap untuk tahap selanjutnya.')}}
                                </p> 
                                
                                    <H5>
                                        4. {{__('Penggulungan dan Pemotongan:')}}
                                    </H5>
                               <p> 
                                {{__('Daun tembakau yang telah dikeringkan diroll atau digulung sesuai dengan jenis produk tembakau yang akan dihasilkan. Proses ini melibatkan pemilihan dan penggulungan daun-daun tembakau yang sesuai untuk membentuk rokok atau cerutu.')}} 

                            </p>
                            <H5>
                                5. {{__('Penyaringan dan Pengemasan:')}}

                                </H5>
                           <p> 
                            {{__('Produk tembakau melewati tahap penyaringan untuk memisahkan potongan tembakau yang lebih halus. Selanjutnya, tembakau yang telah diolah dikemas dalam bungkus atau kemasan sesuai dengan merek dan jenis produk, siap untuk dikonsumsi.')}}


                        </p>
                        <H5>
                            6. {{__('Pemberian Rasa')}} :

                            </H5>
                       <p> 
                        {{__('Beberapa produsen tembakau memasukkan tahap pemberian rasa tambahan pada produk mereka. Ini melibatkan penambahan perasa buah, mint, atau bahan lain untuk memberikan variasi rasa pada tembakau.')}}



                    </p>
                    <H5>
                        7. {{__('Kontrol Kualitas')}}

                        </H5>
                   <p> 
                    {{__('Sejalan dengan seluruh tahapan pengolahan, pabrik tembakau menjalankan kontrol kualitas untuk memastikan bahwa produk yang dihasilkan memenuhi standar kualitas yang ditetapkan, sehingga memastikan konsistensi dan kepuasan pelanggan.Setiap tahap dalam pengolahan tembakau memiliki peran penting dalam membentuk karakteristik dan kualitas akhir dari produk tembakau. Penting untuk diingat bahwa industri tembakau telah berkembang dengan pesat, dan beberapa metode pengolahan dapat bervariasi antara produsen.')}}

                </p>
               

            </p>
                               

                            </div>
                        </div>
                        {{-- <div class="col-12 text-center">
                            <a class="btn" href="">Learn More</a>
                        </div>
                         --}}
                    </div>
                </div>
            </div>
            <!-- About End -->
            
            
            <!-- Fact Start -->
            {{-- <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">109</h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">485</h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">890</h2>
                                        <p>Running Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Fact End -->
            
            
           

@endsection