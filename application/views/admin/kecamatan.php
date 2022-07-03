    <div class="container-fluid">
        <h1 class="mb-4 text-gray-800"><?= $title ?></h1>
    </div>
    <div class="container-fluid">
        <button href="" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#tambahData" onclick="submit('tambah')">Tambah</button>
    </div>
    <div class="col-lg-6">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="target">
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahData" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahdata">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <center>
                    <p class="text-danger" id="pesan"></p>
                </center>
                <div class="modal-body">
                    <table class="col-lg">
                        <tr>
                            <td><label for="" class="mb-3">Nama Kecamatan</label></td>
                            <td><input type="text" name="nama" placeholder="Nama Kecamatan" class="form-control mb-3" data-validation="required">
                                <input type="hidden" name="id" value="">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                    <button type="submit" id="btn-tambah" onclick="tambah()" class="btn btn-warning">Tambah</button>

                    <button type="submit" id="btn-ubah" onclick="ubah()" class="btn btn-primary">Ubah</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        ambilData();

        function ambilData() {
            $.ajax({
                type: "GET",
                url: "http://localhost:2000/kecamatan/",
                dataType: "json",
                success: function(data) {
                    // console.log(data)
                    var baris = '';
                    for (var i = 0; i < data.data.length; i++) {
                        baris += '<tr>' +
                            '<td>' + (1 + i) + '</td>' +
                            '<td>' + data.data[i].kecamatan + '</td>' +
                            // '<td>' + data.data[i].email + '</td>' +
                            // '<td>' + data.data[i].image + '</td>' +
                            '<td><button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#tambahData" onclick="submit(' + data.data[i].id + ')">ubah</button><button class="btn btn-danger ml-2 mb-2" onclick="hapusData(' + data.data[i].id + ')">Hapus</button></td>' +
                            '</tr>';
                    }
                    $('#target').html(baris);
                }
            })

        }

        function tambah() {
            var kecamatan = $("[name='kecamatan']").val();
            $.ajax({
                type: 'POST',
                data: {
                    kecamatan: kecamatan
                },
                url: 'Kecamatan/tambahdata',
                dataType: 'json',
                success: function(hasil) {
                    $("#pesan").html(hasil.pesan);

                    if (hasil.pesan == '') {
                        $("#tambahdata").modal('hide')
                        $.ajax({
                            type: 'POST',
                            data: {
                                kecamatan
                            },
                            url: 'http://localhost:2000/kecamatan',
                            dataType: 'json',
                            success: function(data) {
                                $("[name='kecamatan']").val('')
                                ambilData()
                            }
                        })
                    }
                }
            })
        }

        function submit(x) {
            if (x == 'tambah') {
                $('#btn-tambah').show()
                $('#btn-ubah').hide()
            } else {
                $('#btn-tambah').hide()
                $('#btn-ubah').show()

                $.ajax({
                    type: 'get',
                    url: 'http://localhost:2000/kecamatan/' + x,
                    dataType: 'json',
                    success: function(hasil) {
                        $('[name="id"]').val(data.data.id)
                        $('[name="kecamatan"]').val(data.data.kecamatan)
                        $('[name="nama_barang"]').val(hasil[0].nama_barang)
                        $('[name="harga"]').val(hasil[0].harga)
                        $('[name="stok"]').val(hasil[0].stok)
                    }
                })
            }
        }

        function ubah() {

            var id = $("[name='id']").val();
            var nama = $("[name='kecamatan']").val();

            $.ajax({
                type: "PUT",
                data: {
                    id,
                    kecamatan
                },
                url: 'http://localhost:2000/kecamatan/' + id,
                dataType: 'json',
                success: function(data) {
                    if (data.status) {
                        $("#tambahData").modal('hide')
                        ambilData()
                    } else {

                    }
                }
            })
        }

        function hapusData(id) {
            var tanya = confirm('Apakah anda yakin ingin menghapus data?')
            if (tanya) {
                $.ajax({
                    type: 'DELETE',
                    url: 'http://localhost:2000/kecamatan/' + id,
                    success: function() {
                        ambilData()
                    }
                })
            }
        }
    </script>