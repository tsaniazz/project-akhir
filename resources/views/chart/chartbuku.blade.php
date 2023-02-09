@extends('dashboard.base')

@section('content')
    <!-- Page header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Chart Buku</h1>
                </div>
            </div>

        </div>
    </div>

    <!-- End Header -->


    <!-- Content -->
    <section class="content">
        <div class="container-fluid">
            <h1 class="text-center">Data Buku</h1>
            <div id="container"></div>
        </div>
    </section>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var data_buku = <?php echo json_encode($data_buku); ?>;

        Highcharts.chart('container', {
            title: {
                text: 'Chart Data Buku'
            },
            subtitle: {
                text: 'Genre Buku'
            },
            xAxis: {
                categories: ['Anatomy', 'Animal',  'Detective', 'Fantasy', 'Romance','Scince']
            },
            yAxis: {
                title: {
                    text: 'Jumlah Buku'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'data_buku',
                data: data_buku
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>

    <!-- Script Chart -->

   
@endsection
