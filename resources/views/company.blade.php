<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <table border="1px">
            <thead>
                <th>ชื่อบริษัท</th>
                <th>ราคาที่จดทะเบียน</th>
                <th>ขนาดบริษัท</th>
                <th>ชื่อเจ้าของบริษัท</th>
            </thead>
            <tr> @foreach($companies as $company)
                <td>{{ $company->company_name }}</td>
                <td>{{ $company->company_price }}</td>

                <td>
                    @if($company->company_price < 5000000)
                        บริษัทขนาดเล็ก
                        @elseif($company->company_price > 5000000)
                        บริษัทขนาดกลาง
                        @elseif($company->company_price > 10000000)
                        บริษัทขนาดใหญ่
                        @endif
                        <br>
                </td>
                </td>
                <td> {{ucfirst( $company->User->name) }} </td>
            </tr>
            @endforeach
        </table>
    </body>

</html>
</body>

</html>