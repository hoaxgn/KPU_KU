<div class="container-fluid">
    <h1 class="mb-4 text-gray-800"><?= $title ?></h1>
</div>
<div class="container-fluid">
    <a href="" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah</a>
</div>
<div class="col-lg-6">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <!-- <th scope="col">Aksi</th> -->
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
                <div class="form-group">
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang">
                    <input type="hidden" name="id" value="">
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok">
                </div>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                <button type="submit" id="btn-tambah" onclick="tambahdata()" class="btn btn-warning">Tambah</button>

                <button type="submit" id="btn-ubah" onclick="ubahdata()" class="btn btn-primary">Ubah</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        ambilData();

        function ambilData() {
            $.ajax({
                type: "GET",
                url: "http://localhost:2000/admin",
                dataType: "json",
                success: function(data) {
                    // console.log(data)
                    $.ajax({
                        type: "POST",
                        data: data,
                        url: '<?= base_url() . "admin/ambildata" ?>',
                        dataType: "json",
                        success: function(params) {
                            // console.log(params)
                            var baris = '';
                            for (var i = 0; i < params.data.length; i++) {
                                baris += '<tr>' +
                                    '<td>' + (1 + i) + '</td>' +
                                    '<td>' + params.data[i].username + '</td>' +
                                    '<td>' + params.data[i].email + '</td>' +
                                    // '<td>' + params.data[i].image + '</td>' +
                                    // '<td><a href="" class="btn btn-info ml-2" data-bs-toggle="modal" data-bs-target="#tambahdata" onclick="submit(' + params.data[i].id + ')">Ubah</a><a class="btn btn-info ml-2" onclick="hapusdata(' + params.data[i].id + ')">Hapus</a></td>' +
                                    '</tr>';
                            }
                            $('#target').html(baris);
                        }
                    })

                }
            })
        }
        // $(document).ready(function() {
        //     // $('#ini').dataTable()
        //     ambilData()

        //     // function ambilData() {

        //     // }
        // })
        // })
        function tambahdata() {
            var kode_barang = $("[name='kode_barang']").val();
            var nama_barang = $("[name='nama_barang']").val();
            var harga = $("[name='harga']").val();
            var stok = $("[name='stok']").val();
            $.ajax({
                type: 'POST',
                data: 'kode_barang=' + kode_barang + '&nama_barang=' + nama_barang + '&harga=' + harga + '&stok=' + stok,
                url: '<?= base_url() . 'index.php/page/tambahdata' ?>',
                dataType: 'json',
                success: function(hasil) {
                    $("#pesan").html(hasil.pesan);

                    if (hasil.pesan == '') {
                        $("#tambahdata").modal('hide')
                        ambilData()

                        $("[name='kode_barang']").val('')
                        $("[name='nama_barang']").val('')
                        $("[name='harga']").val('')
                        $("[name='stok']").val('')
                    }
                }
            })
        }

        // function submit(x) {
        //     if (x == 'tambah') {
        //         $('#btn-tambah').show()
        //         $('#btn-ubah').hide()
        //     } else {
        //         $('#btn-tambah').hide()
        //         $('#btn-ubah').show()

        //         $.ajax({
        //             type: 'POST',
        //             data: 'id=' + x,
        //             url: '<?= base_url() . "index.php/page/ambilId" ?>',
        //             dataType: 'json',
        //             success: function(hasil) {
        //                 $('[name="id"]').val(hasil[0].id)
        //                 $('[name="kode_barang"]').val(hasil[0].kode_barang)
        //                 $('[name="nama_barang"]').val(hasil[0].nama_barang)
        //                 $('[name="harga"]').val(hasil[0].harga)
        //                 $('[name="stok"]').val(hasil[0].stok)
        //             }
        //         })
        //     }
        // }

        // function ubahdata() {
        //     var id = $("[name='id']").val();
        //     var kode_barang = $("[name='kode_barang']").val();
        //     var nama_barang = $("[name='nama_barang']").val();
        //     var harga = $("[name='harga']").val();
        //     var stok = $("[name='stok']").val();

        //     $.ajax({
        //         type: 'POST',
        //         data: 'id=' + id + '&kode_barang=' + kode_barang + '&nama_barang=' + nama_barang + '&harga=' + harga + '&stok=' + stok,
        //         url: '<?= base_url() . 'index.php/page/ubahdata' ?>',
        //         dataType: 'json',
        //         success: function(hasil) {
        //             if (hasil.pesan == '') {
        //                 $("#tambahdata").modal('hide')
        //                 ambilData()

        //                 $("[name='kode_barang']").val('')
        //                 $("[name='nama_barang']").val('')
        //                 $("[name='harga']").val('')
        //                 $("[name='stok']").val('')
        //             }
        //         }

        //     })
        // }

        // function hapusdata(id) {
        //     var tanya = confirm('Apakah anda yakin akan menghapus data?');
        //     if (tanya) {
        //         $.ajax({
        //             type: 'POST',
        //             data: 'id=' + id,
        //             url: '<?= base_url() . "index.php/page/hapusdata" ?>',
        //             success: function() {
        //                 ambilData()
        //             }
        //         });
        //     }
        // }
    </script>