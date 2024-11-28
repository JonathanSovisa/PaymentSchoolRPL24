@extends('layouts.inheritanceadmin')

@section('title', 'Dashboard Admin')

@section('tabel')

    <!-- Cards Section -->
    <div class="row">
        <!-- Card: Total Tagihan Siswa -->
        <div class="col-md-6 mb-3">
            <div class="card p-3 align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-patch-check-fill icon me-3"></i>
                    <div>
                        <h5 class="card-title mb-2">Total Instansi Terdaftar</h5>
                        <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">2 Instansi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Total Siswa Belum Bayar -->
        <div class="col-md-6 mb-3">
            <div class="card p-3 align-items-center">
                <div class="d-flex align-items-center">
                    <i class="bi bi-people-fill icon me-3"></i>
                    <div>
                        <h5 class="card-title mb-2">Total Admin Instansi Terdaftar</h5>
                        <p class="card-text" style="font-size: 1.5rem; font-weight: bold;">2 Akun</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-12 mb-3">
            <div class="card p-3">
                <h6 class="card-title mb-3">Pembayaran Instansi</h6>
                <!-- Chart container -->
                <div id="chart" style="width: 100%; height: 300px;"></div>
            </div>
        </div>

    </div>

     <!-- Script to Render Chart -->
     <script>
        document.addEventListener('DOMContentLoaded', function () {
            var options = {
                series: [44, 55, 13, 43, 22], // Data untuk chart
                chart: {
                    type: 'pie',
                    height: 300
                },
                labels: ['UKDW', 'ATMA JAYA', 'UNS', 'UIN', 'UNY'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        });
    </script>
        



@endsection