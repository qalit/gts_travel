DROP PROCEDURE IF EXISTS `sp_GetUserByUserNameAndPassword`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_GetUserByUserNameAndPassword`(IN `i_username` varchar(50),IN `i_password` varchar(50))
BEGIN

SELECT DISTINCT
tref_leveluser.levelID,
tref_user.nip,
tref_user.username,
tref_user.`password`,
tref_leveluser.levelName,
tref_leveluser.levelSlug,
tref_user.userID,
tref_karyawan.namalengkap,
tref_kota.kotaNama,
tref_propinsi.propinsiNama,
tref_karyawan.namapanggilan,
tref_karyawan.alamat,
tref_karyawan.nomortelepon,
tref_karyawan.tanggalmasuk,
tref_karyawan.tanggallahir,
fnKotaById(tref_karyawan.tempatlahir) as kotalahir ,
tref_karyawan.noregistrasikaryawan
FROM
tref_user
INNER JOIN tref_leveluser ON tref_leveluser.levelID = tref_user.levelID
INNER JOIN tref_karyawan ON tref_karyawan.nip = tref_user.nip
INNER JOIN tref_kota ON tref_karyawan.kotaID = tref_kota.kotaID
INNER JOIN tref_propinsi ON tref_propinsi.propinsiID = tref_kota.propinsiID AND tref_propinsi.propinsiID = tref_karyawan.propinsiID
WHERE        
        tref_user.username = username AND tref_user.`password` = i_password;
END$$
