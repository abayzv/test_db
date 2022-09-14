<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <th>Kode</th>
                <th>Nama</th>
                <th>Total Harga</th>
                <th>Total Barang</th>
                <th>Status</th>
            </thead>
            <tbody id="data">
    
            </tbody>
        </table>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script>
// get data with axios
axios.get('http://localhost:8000/data')
  .then(function (response) {
    // handle success
    console.log(response.data);
    let data = response.data;
    let html = '';
    data.forEach(function(item){
        html += '<tr>';
        html += '<td>'+item.kode+'</td>';
        html += '<td>'+item.nama+'</td>';
        html += '<td>'+item.total_harga+'</td>';
        html += '<td>'+item.total_barang+'</td>';
        html += '<td>'+item.status+'</td>';
        html += '</tr>';
    });
    document.getElementById('data').innerHTML = html;
  })
</script>  
</body>
</html>