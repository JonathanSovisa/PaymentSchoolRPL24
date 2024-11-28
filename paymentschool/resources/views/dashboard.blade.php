@extends('layouts.inheritance')

@section('title', 'Dashboard')

@section('tabel')

    <h3 class="text-lef">Selamat Datang,</h3>
    <p class="text-lef">Universitas Kristen Duta Wacana Yogyakarta</p>

    <!-- Dropdown Tahun Akademik -->
<div class="mb-4 d-flex justify-content-left gap-2">
    <select class="form-select" id="tahunAkademik" aria-label="Pilih Tahun Akademik" style="width: 25%;">
        <option selected>Pilih Tahun Akademik</option>
        <option value="2024">2023/2024</option>
        <option value="2023">2022/2023</option>
    </select>
</div>


    <!-- Cards Section -->
    <div class="row">
        <!-- Card: Total Tagihan Siswa -->
        <div class="col-md-3 mb-3">
            <div class="card p-3 align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-person-check-fill icon me-3"></i>
                    <div>
                        <h5 class="card-title mb-2">Siswa Aktif</h5>
                        <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">200 Orang</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card p-3 align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-arrow-down-circle-fill icondown me-3"></i>
                    <div>
                        <h5 class="card-title mb-2">Dana Masuk</h5>
                        <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">Rp250.000.000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card p-3 align-items-center">
                <div class="d-flex align-items-center">
                <i class="bi bi-arrow-up-circle-fill iconup me-3"></i>
                    <div>
                        <h5 class="card-title mb-2">Dana Keluar</h5>
                        <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">Rp172.000.000</p>
                    </div>
                </div>
            </div>
        </div>
     

        <!-- Card: Total Siswa Belum Bayar -->
        <div class="col-md-3 mb-3">
            <div class="card p-3 align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-cash icon me-3"></i>
                    <div>
                        <h5 class="card-title mb-2">Saldo Sisa</h5>
                        <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">Rp. 78.000.000</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Cards Row for Siswa Belum Bayar and Chart Section -->
    <div class="row">
        <!-- Card: Siswa Belum Bayar List -->
        <div class="col-md-6 mb-3">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="card-title mb-0">Siswa Belum Bayar</h6>
                    <i class="bi bi-three-dots"></i>
                </div>
                <div class="list-group list-group-flush">
                    <!-- Example items - Replace with dynamic data if needed -->
                    @foreach ([
                        ['name' => 'Dinda Marettasya', 'nim' => '72220582', 'program' => 'Sistem Informasi', 'fee' => 100000],
                        ['name' => 'Putra Addo', 'nim' => '72220590', 'program' => 'Sistem Informasi', 'fee' => 100000],
                        ['name' => 'Shania Taner', 'nim' => '72220591', 'program' => 'Sistem Informasi', 'fee' => 100000],
                        ['name' => 'Vanessa Taner', 'nim' => '72220592', 'program' => 'Sistem Informasi', 'fee' => 100000],
                        ['name' => 'Charlotte Taner', 'nim' => '72220593', 'program' => 'Sistem Informasi', 'fee' => 100000],
                        ['name' => 'Matthew Taner', 'nim' => '72220594', 'program' => 'Sistem Informasi', 'fee' => 100000]
                    ] as $student)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $student['name'] }} | {{ $student['nim'] }} {{ $student['program'] }}</strong>
                            <p class="mb-0 text-muted" style="font-size: 0.9rem;">SPP Semester Genap 2022</p>
                        </div>
                        <span class="text-danger" style="font-weight: bold;">Rp{{ number_format($student['fee'], 0, ',', '.') }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


<!-- Card: Statistik Pendapatan -->
<div class="col-md-6 mb-3">
    <div class="card p-3">
        <h6 class="card-title mb-3">Statistik Pendapatan</h6>
        <!-- Chart container -->
           <div id="bar-chart" style="width: 100%; height: 300px;"></div>
    </div>
</div>

<!-- Script to Render Bar Chart -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var barOptions = {
            series: [{
                name: 'Pendapatan',
                data: [44000000, 55000000, 13000000, 43000000, 22000000] // Data pendapatan (contoh)
            }],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: true,
                    tools: {
                        download: '<i class="bi bi-three-dots"></i>' // Ikon titik tiga
                    }
                }
            },
            
            colors: ['#112D4E'], // Warna merah untuk diagram batang
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['SPP', 'Uang Gedung', 'Praktikum', 'Kegiatan', 'Lainnya'],
            },
            yaxis: {
                title: {
                    text: 'Rp (Rupiah)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "Rp" + val.toLocaleString('id-ID');
                    }
                }
            }
        };

        var barChart = new ApexCharts(document.querySelector("#bar-chart"), barOptions);
        barChart.render();
    });
</script>

@endsection