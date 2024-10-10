<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASTE CERTIFICATE</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid rgb(133, 132, 132);
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .status-approved {
            color: blue;
            font-weight: bold;
        }
        .status-pending {
            color: rgb(231, 235, 30);
            font-weight: bold;
        }
        .status-rejected {
            color: rgb(235, 30, 30);
            font-weight: bold;
        }
        .certificate-title {
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="certificate-title">CASTE CERTIFICATE</div>

    <table>
        <tr>
            <th>CERTIFICATE NUMBER</th>
            <td>{{ $caste->certificate_number }}</td>
        </tr>
        <tr>
            <th>NAME</th>
            <td>{{ $caste->name }}</td>
        </tr>

        <tr>
            <th>GENDER</th>
            <td>{{ $caste->gender }}</td>
        </tr>
        <tr>
            <th>FATHER NAME</th>
            <td>{{ $caste->f_name }}</td>
        </tr>
        <tr>
            <th>MOTHER NAME</th>
            <td>{{ $caste->m_name }}</td>
        </tr>
        <tr>
            <th>DOB</th>
            <td>{{ \Carbon\Carbon::parse($caste->dob)->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>CATEGORY</th>
            <td>{{ $caste->category }}</td>
        </tr>
        <tr>
            <th>SUB_CATEGORY</th>
            <td>{{ $caste->sub_category }}</td>
        </tr>
        <tr>
            <th>ADDRESS</th>
            <td>{{ $caste->address }}</td>
        </tr>
        <tr>
            <th>ISSUE DATE</th>
            <td>{{ \Carbon\Carbon::parse($caste->issu_date)->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>STATUS</th>
            <td class="
                {{ strtolower($caste->status) == 'approved' ? 'status-approved' : '' }}
                {{ strtolower($caste->status) == 'pending' ? 'status-pending' : '' }}
                {{ strtolower($caste->status) == 'rejected' ? 'status-rejected' : '' }}
            ">
                {{ ucfirst($caste->status) }}
            </td>
        </tr>
    </table>

</body>
</html>
