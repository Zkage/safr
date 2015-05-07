<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2013-10-28 06:23+0000
// PO revision date:  2013-10-28 01:25+0000
$lang = array(
	'upgrade' => array(
		'between' => 'Data yang dimasukkan tidak dalam format yang bisa diterima. Masukkan 0 untuk Tidak atau 1 untuk Ya.',
	) ,
	'upgrade_automatic' => 'Perbaruan Otomatis',
	'upgrade_available' => 'Upgrade Tersedia',
	'upgrade_continue_btn_text' => 'Berlanjut',
	'upgrade_db_btn_text' => 'Perbaruan',
	'upgrade_db_text_1' => 'Jadi, kami akan meningkatkan dari versi database',
	'upgrade_db_text_2' => 'ke database versi terbaru',
	'upgrade_db_text_3' => 'Klik tombol "Perbaruan", santai dan saksikan pertunjukan yang ajaib.',
	'upgrade_db_text_4' => 'Oh ya, jika Anda ingin membackup database, beri tanda centang di bawah ini dan kami akan melakukannya untuk Anda.',
	'upgrade_db_text_5' => 'Backup database sebelum perbaruan? (<strong style="color:#FF0000;">Sangat direkomendasikan</strong>)',
	'upgrade_db_title' => 'Perbarui database Ushahidi',
	'upgrade_db_info' => 'Ushahidi sudah diperbarui! Sebelum melanjutkan, Anda perlu memperbarui database dalam versi terkini (%s).',
	'upgrade_db_up_to_date' => 'Versi database Anda adalah versi terkini.',
	'upgrade_failed' => 'Ada kegagalan dalam proses perbaruan ',
	'upgrade_manual' => 'Perbaruan Manual',
	'upgrade_status' => 'Status perbaruan Ushahidi',
	'upgrade_text_1' => 'Instruksi di bawah ini menjelaskan cara memperbarui Ushahidi.',
	'upgrade_text_2' => '<dl><dt><strong>Unduh</strong></dt>',
	'upgrade_text_3' => '<dd>- Unduh versi terkini Ushahidi dari',
	'upgrade_text_4' => '<dt><strong>Backup</strong></dt><dd>- .htaccess, ./applications/config/config.php, ./applications/config/database.php dan ./applications/config/auth.php files. </dd><dd>- Untuk menghindari hal-hal yang tidak diinginkan, kami sarankan Anda men-backup semua isi Ushahidi terlebih dahulu.</dd><dt><strong>Salin berkas-berkas</strong></dt><dd>- Ekstrak zip hasil unduhan</dd><dd>- Tergantung sistem operasi dalam server Anda, gunakan aplikasi yang Anda sukai (misalnya Telnet, FTP, SSH) untuk mask dal am server dan mengganti semua isinya dengan yang terbaru.</dd><dt><strong>Upgrade database</strong></dt><dd>- Pertama, perks duly verso database Anda dal am <strong>db_version</strong> bagian pengaturan table atau simak informasi Ushahidi di bagian paling atlas halaman ini. </dd><dd>- Jika Anda masih menggunakan versi 25, Anda bisa meng-upgrade ke dari versi 25 ke 26, kemudian 26 ke 27, dan seterusnya hingga versi berkas SQL terkini di folder <strong>/sql</strong>.</dd><dd>- Dengan klien database Anda, upgrade database dengan mengeksekusi berkas upgradex-x.sql yang sesuai.</dd></dl>',
	'upgrade_tables' => '<strong>Langkah 3:</strong> Lihat folder <strong>sql</strong>. Jalankan secara manual perbaruan berkas <xx>-<xx>.sql file dari versi db saat ini  menjadi berkas sql versi terakhir.',
	'upgrade_text_5' => '<strong>Langkah 4:</strong> Klik tomboy <strong>"Continue"</strong> untuk memperbarui tabel yang diperlukan.',
	'upgrade_text_6' => 'Untuk perbaruan otomatis, klik tombol di bawah ini.',
	'upgrade_title_text' => 'Saat ini, Anda menggunakan Ushahidi v%1$s dengan database %2$d yang berjalan pada %3$s',
	'upgrading' => 'Sedang menjalankan proses upgrade',
	'upgrade_ftp_text' => 'Untuk melanjutkan perbaruan dengan mudah, informasi server FTP di hosting Anda berikut ini perlu dilengkapi.',
	'upgrade_ftp_hostname' => 'FTP Hostname: <span>Contoh: "localhost"</span>',
	'upgrade_ftp_password' => 'Kata sandi FTP:',
	'upgrade_ftp_username' => 'Nama Pengguna FTP:',
	'upgrade_status_info' => 'Anda saat ini sudah menggunakan versi terakhir Ushahidi.',
	'upgrade_status_info_2' => 'Anda tidak memerlukan perbaruan versi.',
	'upgrade_db_version' => 'Versi database: %d',
	'upgrade_warning_software_version' => 'Perhatian: Versi piranti lunak dalam version.php dan database tidak cocok.',
	'upgrade_warning_db_version' => 'Perhatian: Versi database dalam version.php dan database tidak cocok.',
	'upgrade_database' => 'Database:',
	'ushahidi_release_version' => 'Ushahidi %s',
	'beta' => 'BETA!',
	'download' => 'Mengunduh Ushahidi versi terkini...',
	'log_file' => 'Berkas Log',
	'successfully_downloaded' => 'Pengunduhan Berhasil. Unpack berkas-berkas...',
	'failed_downloading' => 'Pengunduhan gagal.',
	'successfully_unpacked' => 'Proses Unpack Berhasil. Berkas diduplikasi...',
	'failed_unpacking' => 'Proses unpack gagal.',
	'successfully_copied' => 'Berkas berhasil Diduplikasi. Database diperharui...',
	'failed_copying' => 'Duplikasi berkas gagal.',
	'backup_success' => 'Backup database dan pembaruan berhasil.',
	'backup_failed' => 'Backup database gagal.',
	'dbupgrade_success' => 'Upgrade database berhasil.',
	'deleting_files' => 'Menghapus berkas yang sudah diunduh...',
	'upgrade_success' => 'UPGRADE BERHASUL. Lihat <a href="%s" target="_blank">Berkas Log</a>',
);