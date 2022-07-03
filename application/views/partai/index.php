<div class="container-fluid">
    <h1 class="mb-4 text-gray-800"><?= $title ?></h1>
</div>
<div class="container-fluid">
    <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#tambahData" onclick="submit('tambah')">
        Tambah
    </button>
</div>
<div class="col-lg">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Partai</th>
                <!-- <th scope="col">Logo</th> -->
                <th scope="col">Visi</th>
                <th scope="col">Misi</th>
                <th scope="col">Ketua</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="target">
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataLabel">Data Partai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <center>
                    <p id="pesan" class="text-danger"></p>
                </center>
                <div class="modal-body">
                    <table class="col-lg">
                        <tr>
                            <td><label for="" class="mb-3">Nama Partai</label></td>
                            <td><input type="text" name="nama" placeholder="Nama Partai" class="form-control mb-3" data-validation="required">
                                <input type="hidden" name="id" value="">
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>Logo Partai</td>
                            <td><input type="file" name="logo" class="form-control"></td>
                        </tr> -->
                        <tr>
                            <td><label for="" class="mb-3">Visi</label></td>
                            <td><textarea type="text" name="visi" placeholder="Visi Partai" class="form-control mb-3" data-validation="required"></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="" class="mb-3">Misi</label></td>
                            <td><textarea type="text" name="misi" placeholder="Misi Partai" data-validation="required" class="form-control mb-3"></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="" class="mb-3">Nama Ketua Partai</label></td>
                            <td><input type="text" name="nama_ketua" placeholder="Nama Ketua Partai" class="form-control mb-3"></td>
                        </tr>
                        <!-- <tr>
                            <td>Gambar Ketua Partai</td>
                            <td><input type="file" name="img_ketua" placeholder="Gambar Ketua Partai" class="form-control"></td>
                        </tr> -->
                        <tr>
                            <td><label for="" class="mb-2">Profil Partai</label></td>
                            <td><textarea type="text" name="profil" placeholder="Profil Partai" class="form-control mb-2"></textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="btn-tambah" onclick="tambah()" class="btn btn-warning">Tambah</button>
                    <button type="button" id="btn-ubah" onclick="ubah()" class="btn btn-warning">Ubah</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    ambilData();
    // $("#form").validate();


    function ambilData() {
        $.ajax({
            type: "get",
            url: "http://localhost:2000/partai-politik",
            dataType: "json",
            success: function(data) {
                // console.log(data)
                var baris = '';
                for (var i = 0; i < data.data.length; i++) {
                    baris += '<tr>' +
                        '<td>' + (1 + i) + '</td>' +
                        '<td>' + data.data[i].nama + '</td>' +
                        // '<td>' + '<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . ' + data.data[i].logo +' ?>">' + '</td>' +
                        '<td>' + data.data[i].visi + '</td>' +
                        '<td>' + data.data[i].misi + '</td>' +
                        '<td>' + data.data[i].nama_ketua + '</td>' +
                        // '<td>' + params.data[i].image + '</td>' +
                        '<td><button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#tambahData" onclick="submit(' + data.data[i].id + ')">ubah</button><button class="btn btn-danger ml-2 mb-2" onclick="hapusData(' + data.data[i].id + ')">Hapus</button></td>' +
                        '</tr>';
                }
                $('#target').html(baris);

            }
        })
    }

    function tambah() {
        // var logo = $("[name='logo']").val();
        var nama = $("[name='nama']").val();
        var visi = $("[name='visi']").val();
        var misi = $("[name='misi']").val();
        var nama_ketua = $("[name='nama_ketua']").val();
        var profil = $("[name='profil']").val();
        // var img_ketua = $("[name='img_ketua']").val();
        $.ajax({
            type: 'POST',
            data: {
                nama,
                visi,
                misi,
                nama_ketua,
                profil
            },
            url: 'Admin/tambahData',
            dataType: 'json',
            success: function(hasil) {
                $("#pesan").html(hasil.pesan)
                if (hasil.pesan == '') {
                    $("#tambahData").modal('hide')
                    $.ajax({
                        type: 'POST',
                        data: {
                            nama,
                            visi,
                            misi,
                            nama_ketua,
                            profil
                        },
                        url: 'http://localhost:2000/partai-politik',
                        dataType: 'json',
                        success: function(data) {
                            $("[name='nama']").val('')
                            $("[name='visi']").val('')
                            $("[name='misi']").val('')
                            $("[name='nama_ketua']").val('')
                            $("[name='profil']").val('')
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
                type: "GET",
                url: 'http://localhost:2000/partai-politik/' + x,
                dataType: 'json',
                success: function(data) {
                    $("[name='id']").val(data.data.id)
                    $("[name='nama']").val(data.data.nama)
                    $("[name='visi']").val(data.data.visi)
                    $("[name='misi']").val(data.data.misi)
                    $("[name='nama_ketua']").val(data.data.nama_ketua)
                    $("[name='profil']").val(data.data.profil)
                }
            })
        }
    }

    function ubah() {

        var id = $("[name='id']").val();
        var nama = $("[name='nama']").val();
        var visi = $("[name='visi']").val();
        var misi = $("[name='misi']").val();
        var nama_ketua = $("[name='nama_ketua']").val();
        var profil = $("[name='profil']").val();

        $.ajax({
            type: "PUT",
            data: {
                id,
                nama,
                visi,
                misi,
                nama_ketua,
                profil
            },
            url: 'http://localhost:2000/partai-politik/' + id,
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
                url: 'http://localhost:2000/partai-politik/' + id,
                success: function() {
                    ambilData()
                }
            })
        }
    }
</script>