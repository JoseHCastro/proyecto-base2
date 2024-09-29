@extends('adminlte::page')
@section('title', 'Estudiantes Inscritos')
@section('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.1/css/responsive.bootstrap4.css">
@endsection

@section('content_header')
    <h1 class="m-0 text-dark">Estudiantes Inscritos por Localidad</h1>
@stop

@section('content')


    <h1> por localidad hacer</h1>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="usersTable">
                <thead>
                    <tr>
                        <th>Etiquetas de Fila</th>
                        <th>Inscritos por Localidad</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($resultados as $resultado)
                        <tr>
                            <td>{{ $resultado->Localidad }}</td>
                            <td>{{ $resultado->Total_Inscritos }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        // Datos desde PHP que pasamos a JavaScript
        const labels = {!! json_encode($labels) !!};
        const data = {!! json_encode($data) !!};

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels, // Etiquetas de las localidades
                datasets: [{
                    label: 'Inscritos por Localidad',
                    data: data, // Cantidad total de inscritos por localidad
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection

@section('js')
    <script>
        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Floating Bar Chart'
                    }
                }
            }
        };

        const DATA_COUNT = 7;
        const NUMBER_CFG = {
            count: DATA_COUNT,
            min: -100,
            max: 100
        };

        const labels = Utils.months({
            count: 7
        });
        const data = {
            labels: labels,
            datasets: [{
                    label: 'Dataset 1',
                    data: labels.map(() => {
                        return [Utils.rand(-100, 100), Utils.rand(-100, 100)];
                    }),
                    backgroundColor: Utils.CHART_COLORS.red,
                },
                {
                    label: 'Dataset 2',
                    data: labels.map(() => {
                        return [Utils.rand(-100, 100), Utils.rand(-100, 100)];
                    }),
                    backgroundColor: Utils.CHART_COLORS.blue,
                },
            ]
        };

        const actions = [{
            name: 'Randomize',
            handler(chart) {
                chart.data.datasets.forEach(dataset => {
                    dataset.data = chart.data.labels.map(() => {
                        return [Utils.rand(-100, 100), Utils.rand(-100, 100)];
                    });
                });
                chart.update();
            }
        }, ];
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap4.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.1/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.1/js/responsive.bootstrap4.js"></script>
    <script>
        new DataTable('#usersTable', {
            responsive: true,
            autoWidth: false,

            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado - disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    </script>
@endsection
