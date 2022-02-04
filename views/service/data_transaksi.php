<!DOCTYPE html>
<html>
<head>
    <title>Print Invoice</title>
    <style>
        .page
        {           
            padding:2cm;
        }
        table
        {
            border-spacing:0;
            border-collapse: collapse; 
            width:100%;
        }

        table td, table th
        {
            border: 1px solid #ccc;
        }
		
		table th
        {
            background-color:red;
        }
    </style>
</head>
<body>	
    <div class="page">	
        <h1>Tagihan</h1>
        <table border="0">
        <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Tindakan</th>
                <th>Nama Obat</th>
                <th>Total</th>
        </tr>
        <?php
        $no = 1;
        foreach($dataProvider->getModels() as $dt){ 
        ?>
        <tr>
                <td><?= $no++ ?></td>
                <td><?= $dt->servicePatient->patient_name ?></td>
                <td><?= $dt->serviceAction->action_handling ?></td>
                <td><?= $dt->serviceDrug->drug_name ?></td>
                <td><?= $dt->service_total ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </div>   
</body>
</html>