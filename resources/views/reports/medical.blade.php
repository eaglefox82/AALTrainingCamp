<html>
<head>
    <style>
        .text-center {
            text-align: center;
        }
        @page {
            margin: 100px 25px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 0px;
            text-align: center;
            line-height: 35px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
</head>
<body>
<div class="text-center">
    <img src="{{url('aal_logo.jpg')}}" height="90" class="text-center">
</div>
<h1 style="text-align: center">Medical Listing</h1>
<br><br>

    <h3 class="text-center">
        <table style=width:100%>
            <tr>
                <th>First Name:</th>
                <th>Last Name:</th>
                <th>Squadron:</th>
                <th>Saturday Morning</th>
                <th>Saturday Afternoon</th>
                <th>Sunday Morning</th>
            </tr>
            @php $count = 0; @endphp
            @foreach ($flights->where('flight_id', $name->id) as $h)
                @if($h->member->checked_in == 'Y')
                    <tr>
                        <td class="text-center">{{  $h->member->first_name }}</td>
                        <td class="text-center">{{ $h->member->last_name }}</td>
                        <td class="text-center">{{ $h->member->unitmap->unit }}</td>
                        <td class="text-center"><i class="fa fa-square-o fa-2x" ></i></td>
                        <td class="text-center"><i class="fa fa-square-o fa-2x" ></i></td>
                        <td class="text-center"><i class="fa fa-square-o fa-2x" ></i></td>
                    </tr>
                    @php $count++; @endphp
                @endif
            @endforeach
        </table>
    </h3>
    <br>
    <br>
    <h2>Total in Flight (including band members) = {{ $count }}</h2>

    </body>
</html>



