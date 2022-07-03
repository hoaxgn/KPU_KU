const express = require('express')
const adminController = require('../controllers/adminControl')
const auth = require('../middleware/auth')
// const IPublikController = require('../controllers/IPublikControl')
// const AgendaController = require('../controllers/AgendaControl')
// const IKlipingController = require('../controllers/KlipingControl')
// const KomisionerController = require('../controllers/KomisionerControl')
const ParpolController = require('../controllers/ParpolControl')
const KecamatanController = require('../controllers/KecamatanControl')
const AnggotaController = require('../controllers/AnggotaControl')
// const DCT = require('../controllers/DctControl')
const router = express.Router()

//router auth
router.post('/sign-in', auth.signIn)

// router admin
// router.route('/admin')
router.get('/admin', adminController.getAllAdmin)
router.post('/admin', adminController.addAdmin)
router.route('/admin/:id')
.get(adminController.getAdminById)
.put(adminController.updateAdmin)
.delete(adminController.deleteAdmin)

// router publikasi IP = Informasi Publik
// router.route('/info-publik')
// .get(IPublikController.getAllIP)
// .post(IPublikController.addIP)
// router.route('/info-publik/:id')
// .get(IPublikController.getIPById)
// .put(IPublikController.updateIP)
// .delete(IPublikController.deleteIP)

// router kecamatan
router.get('/kecamatan', KecamatanController.getAllKecamatan)
router.post('/kecamatan', KecamatanController.addKecamatan)
router.get('/kecamatan/:id', KecamatanController.getKecamatanById)
router.put('/kecamatan/:id', KecamatanController.updatekecamatan)
router.delete('/kecamatan/:id', KecamatanController.deletekecamatan)

// dct



// .get(KecamatanController.getAllKecamatan)
// .post(KecamatanController.addKecamatan)
// router.route('/kecamatan/:id')
// .get(KecamatanController.getKecamatanById)
// .put(KecamatanController.updateKecamatan)
// .delete(KecamatanController.deleteKecamatan)

// router info kliping
// router.route('/kliping')
// .get(IKlipingController.getAllKliping)
// .post(IKlipingController.addKliping)
// router.route('/kliping/:id')
// .get(IKlipingController.getKlipingById)
// put(IKlipingController.updateKliping)
// delete(IKlipingController.deleteKliping)

// router komisioner
// router.route('/komisioner-info')
// .get(KomisionerController.getAllKomisioner)
// .post(KomisionerController.addKomisioner)
// router.route('/komisioner-info/:id')
// .get(KomisionerController.getKomisionerByid)
// .put(KomisionerController.updateKomisioner)
// .delete(KomisionerController.updateKomisioner)

// router partai politik
router.get('/partai-politik', ParpolController.getAllParpol)
router.post('/partai-politik', ParpolController.addParpol)
router.get('/partai-politik/:id',ParpolController.getParpolById)
router.put('/partai-politik/:id',ParpolController.updateParpol)
router.delete('/partai-politik/:id',ParpolController.deleteParpol)

// router data Anggota Parpol
router.get('/anggota-partai', AnggotaController.getAnggotaParpol)
// router.route('/anggota-parpol')
// .get(AnggotaController.getAnggotaParpol)

module.exports = router